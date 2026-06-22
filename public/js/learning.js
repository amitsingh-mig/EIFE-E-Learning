let courseCurriculum = null;
let comments = [];
let playerInstance = null;
let currentLessonId = "L1";
const COURSE_ID = 3; // Mocking ID of "Full-Stack Web Development & API Design"

document.addEventListener("DOMContentLoaded", async () => {
  try {
    // 1. Fetch Curriculum Data from API
    const res = await fetch(`/api/courses/${COURSE_ID}/curriculum`);
    if (!res.ok) throw new Error("Failed to load curriculum");
    courseCurriculum = await res.json();
    
    // 2. Fetch Comments
    const commentsRes = await fetch(`/api/comments/${currentLessonId}`);
    if (commentsRes.ok) {
      comments = await commentsRes.json();
    }

    initVideoPlayer();
    renderCurriculum();
    updateProgressMetrics();
    initTabs();
    initNotes();
    initDiscussions();
    initShareSaveButtons();

    // Set initial lesson state in UI
    if (courseCurriculum.modules && courseCurriculum.modules.length > 0 && courseCurriculum.modules[0].lessons.length > 0) {
      currentLessonId = courseCurriculum.modules[0].lessons[0].id;
      selectLesson(currentLessonId, null, false);
    }
  } catch (err) {
    console.error("Initialization error:", err);
  }
});

function initVideoPlayer() {
  const videoEl = document.getElementById("my-video");
  if (!videoEl) return;

  playerInstance = videojs("my-video", {
    controls: true,
    autoplay: false,
    preload: "auto",
    playbackRates: [0.5, 1, 1.25, 1.5, 2],
    fluid: true
  });

  playerInstance.on("error", () => {
    const currentSrc = playerInstance.currentSrc();
    if (currentSrc && currentSrc.includes("oceans.mp4")) return;
    playerInstance.error(null);
    playerInstance.src({ type: "video/mp4", src: "https://vjs.zencdn.net/v/oceans.mp4" });
    playerInstance.play().catch(err => console.warn(err));
  });
}

function renderCurriculum() {
  const accordionContainer = document.getElementById("curriculumAccordion");
  if (!accordionContainer || !courseCurriculum.modules) return;
  accordionContainer.innerHTML = "";

  courseCurriculum.modules.forEach((module, modIndex) => {
    const isFirst = modIndex === 0;
    const moduleItem = document.createElement("div");
    moduleItem.className = "accordion-item";

    moduleItem.innerHTML = `
      <h2 class="accordion-header" id="headingMod${modIndex}">
        <button class="accordion-button ${isFirst ? '' : 'collapsed'}" type="button" data-bs-toggle="collapse" 
          data-bs-target="#collapseMod${modIndex}" aria-expanded="${isFirst ? 'true' : 'false'}" aria-controls="collapseMod${modIndex}">
          ${module.title}
        </button>
      </h2>
      <div id="collapseMod${modIndex}" class="accordion-collapse collapse ${isFirst ? 'show' : ''}" 
        aria-labelledby="headingMod${modIndex}" data-bs-parent="#curriculumAccordion">
        <div class="accordion-body p-0">
          <ul class="lesson-list">
            ${module.lessons.map(lesson => {
              const activeClass = lesson.id === currentLessonId ? "active" : "";
              const completedClass = lesson.isCompleted ? "completed" : "";
              const checkIcon = lesson.isCompleted ? "bi-check-circle-fill" : "bi-circle";

              return `
                <li class="lesson-item ${activeClass}" data-id="${lesson.id}" onclick="selectLesson('${lesson.id}', event)">
                  <div class="lesson-left">
                    <i class="bi ${checkIcon} lesson-check ${completedClass}" onclick="toggleLessonCompletion('${lesson.id}', event)"></i>
                    <span>${lesson.title}</span>
                  </div>
                  <div class="lesson-right">
                    <span>${lesson.duration}</span>
                  </div>
                </li>
              `;
            }).join("")}
          </ul>
        </div>
      </div>
    `;
    accordionContainer.appendChild(moduleItem);
  });
}

async function selectLesson(lessonId, event, shouldPlay = true) {
  if (event && event.target && event.target.classList.contains("lesson-check")) return;

  currentLessonId = lessonId;

  let selectedLesson = null;
  for (const mod of courseCurriculum.modules) {
    selectedLesson = mod.lessons.find(l => l.id === lessonId);
    if (selectedLesson) break;
  }
  if (!selectedLesson) return;

  document.querySelectorAll(".lesson-item").forEach(item => {
    item.classList.remove("active");
    if (item.getAttribute("data-id") === lessonId) item.classList.add("active");
  });

  const activeLessonNameEl = document.getElementById("activeLessonName");
  if (activeLessonNameEl) activeLessonNameEl.innerText = selectedLesson.title;

  const currentVideoTitleEl = document.getElementById("currentVideoTitle");
  if (currentVideoTitleEl) currentVideoTitleEl.innerText = selectedLesson.title;

  if (playerInstance) {
    playerInstance.error(null);
    playerInstance.src({ type: selectedLesson.type, src: selectedLesson.videoUrl });
    if (shouldPlay) playerInstance.play().catch(err => console.warn(err));
  }

  // Fetch comments for new lesson
  try {
    const commentsRes = await fetch(`/api/comments/${lessonId}`);
    if (commentsRes.ok) {
      comments = await commentsRes.json();
      renderComments();
    }
  } catch (err) {}
}

async function toggleLessonCompletion(lessonId, event) {
  if (event) event.stopPropagation();

  let foundLesson = null;
  for (const mod of courseCurriculum.modules) {
    const lesson = mod.lessons.find(l => l.id === lessonId);
    if (lesson) {
      lesson.isCompleted = !lesson.isCompleted;
      foundLesson = lesson;

      const targetIcon = event ? event.target : null;
      if (targetIcon) {
        if (lesson.isCompleted) {
          targetIcon.classList.remove("bi-circle");
          targetIcon.classList.add("bi-check-circle-fill", "completed");
        } else {
          targetIcon.classList.remove("bi-check-circle-fill", "completed");
          targetIcon.classList.add("bi-circle");
        }
      }
      break;
    }
  }

  updateProgressMetrics();

  if (foundLesson) {
    // Try to get CSRF token
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
    try {
      await fetch('/api/progress/toggle', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          ...(csrfToken && {'X-CSRF-TOKEN': csrfToken})
        },
        body: JSON.stringify({ lesson_id: lessonId, is_completed: foundLesson.isCompleted })
      });
    } catch(err) {
      console.error('Save progress failed', err);
    }
  }
}

function updateProgressMetrics() {
  let totalLessons = 0;
  let completedCount = 0;

  if (courseCurriculum && courseCurriculum.modules) {
    courseCurriculum.modules.forEach(mod => {
      mod.lessons.forEach(l => {
        totalLessons++;
        if (l.isCompleted) completedCount++;
      });
    });
  }

  const percentage = totalLessons > 0 ? Math.round((completedCount / totalLessons) * 100) : 0;

  const completedCountEl = document.getElementById("completedCount");
  if (completedCountEl) completedCountEl.innerText = completedCount;

  const totalCountEl = document.getElementById("totalCount");
  if (totalCountEl) totalCountEl.innerText = totalLessons;

  const progressBarEl = document.getElementById("lmsProgressBar");
  if (progressBarEl) {
    progressBarEl.style.width = `${percentage}%`;
    progressBarEl.setAttribute("aria-valuenow", percentage);
  }

  const progressPercentEl = document.getElementById("progressPercentage");
  if (progressPercentEl) {
    progressPercentEl.innerText = `${percentage}%`;
  }
}

function initTabs() {
  const tabLinks = document.querySelectorAll(".lms-nav-tabs .nav-link");
  const tabPanes = document.querySelectorAll(".lms-tab-pane");

  tabLinks.forEach(link => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      tabLinks.forEach(l => l.classList.remove("active"));
      tabPanes.forEach(pane => pane.style.display = "none");
      link.classList.add("active");
      const targetId = link.getAttribute("data-target");
      const targetPane = document.getElementById(targetId);
      if (targetPane) targetPane.style.display = "block";
    });
  });
}

function initNotes() {
  const notesArea = document.getElementById("personalNotesArea");
  const saveStatus = document.getElementById("notesSaveStatus");
  const clearBtn = document.getElementById("clearNotesBtn");

  if (!notesArea) return;
  const savedNotes = localStorage.getItem("course_notes_gnc_fullstack");
  if (savedNotes) notesArea.value = savedNotes;

  notesArea.addEventListener("input", () => {
    localStorage.setItem("course_notes_gnc_fullstack", notesArea.value);
    if (saveStatus) {
      saveStatus.innerText = "Draft auto-saved";
      saveStatus.classList.remove("text-muted");
      saveStatus.classList.add("text-success");
      setTimeout(() => {
        saveStatus.innerText = "Saved to browser localStorage";
        saveStatus.classList.remove("text-success");
        saveStatus.classList.add("text-muted");
      }, 1500);
    }
  });

  if (clearBtn) {
    clearBtn.addEventListener("click", () => {
      if (confirm("Are you sure you want to clear your scratchpad notes?")) {
        notesArea.value = "";
        localStorage.removeItem("course_notes_gnc_fullstack");
      }
    });
  }
}

function initDiscussions() {
  renderComments();

  const commentForm = document.getElementById("rootCommentForm");
  if (commentForm) {
    commentForm.addEventListener("submit", async (e) => {
      e.preventDefault();
      const inputArea = document.getElementById("rootCommentText");
      if (!inputArea || !inputArea.value.trim()) return;

      const text = inputArea.value.trim();
      inputArea.value = "";

      // Post to API
      try {
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
        const res = await fetch('/api/comments', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            ...(csrfToken && {'X-CSRF-TOKEN': csrfToken})
          },
          body: JSON.stringify({ lesson_id: currentLessonId, text: text, parent_id: null })
        });
        
        if (res.ok) {
          // Re-fetch comments to show new one
          const commentsRes = await fetch(`/api/comments/${currentLessonId}`);
          comments = await commentsRes.json();
          renderComments();
        } else {
          alert('You must be logged in to post comments.');
        }
      } catch (err) {
        console.error(err);
      }
    });
  }
}

function renderComments() {
  const commentsFeed = document.getElementById("commentsFeed");
  if (!commentsFeed) return;
  commentsFeed.innerHTML = "";

  comments.forEach(comment => {
    const threadDiv = document.createElement("div");
    threadDiv.className = "mb-4";

    const isInstructor = comment.role === "instructor";
    const badgeHtml = isInstructor ? `<span class="instructor-badge ms-2">Instructor</span>` : "";
    const isMod = comment.role === "moderator";
    const modBadgeHtml = isMod ? `<span class="instructor-badge bg-secondary ms-2">Staff</span>` : "";

    threadDiv.innerHTML = `
      <div class="d-flex gap-3">
        <img src="${comment.avatar}" alt="${comment.author}" class="comment-avatar mt-1">
        <div class="flex-grow-1">
          <div class="comment-bubble">
            <div class="d-flex justify-content-between align-items-center mb-1">
              <span class="fw-bold text-dark small">${comment.author} ${badgeHtml} ${modBadgeHtml}</span>
              <span class="comment-meta">${comment.time}</span>
            </div>
            <p class="small text-muted mb-0">${comment.text}</p>
          </div>
          <div class="comment-actions">
            <button class="${comment.hasLiked ? 'liked fw-bold' : ''}" onclick="toggleLike(${comment.id})">
              <i class="bi bi-hand-thumbs-up-fill me-1"></i> Like (${comment.likes})
            </button>
            <button onclick="toggleReplyInput(${comment.id})">
              <i class="bi bi-reply-fill me-1"></i> Reply
            </button>
          </div>
          <div class="reply-container mt-3" id="replies-box-${comment.id}" style="${comment.replies.length === 0 ? 'display: none;' : ''}">
            ${comment.replies.map(reply => {
              const replyIsInst = reply.role === "instructor";
              const rBadge = replyIsInst ? `<span class="instructor-badge ms-2">Instructor</span>` : "";
              const replyIsMod = reply.role === "moderator";
              const rModBadge = replyIsMod ? `<span class="instructor-badge bg-secondary ms-2">Staff</span>` : "";
              return `
                <div class="d-flex gap-2 mb-3">
                  <img src="${reply.avatar}" alt="${reply.author}" class="comment-avatar-sm mt-1">
                  <div class="flex-grow-1 comment-bubble py-2 px-3">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <span class="fw-bold text-dark small" style="font-size: 12.5px;">${reply.author} ${rBadge} ${rModBadge}</span>
                      <span class="comment-meta" style="font-size: 11px;">${reply.time}</span>
                    </div>
                    <p class="small text-muted mb-0" style="font-size: 12.5px;">${reply.text}</p>
                  </div>
                </div>
              `;
            }).join("")}
          </div>
          <div class="mt-2" id="reply-form-box-${comment.id}" style="display:none; margin-left:22px;">
            <form onsubmit="postReply(${comment.id}, event)" class="d-flex gap-2">
              <input type="text" placeholder="Write a reply..." id="reply-text-${comment.id}" class="form-control form-control-sm" required>
              <button type="submit" class="btn btn-primary-blue btn-sm">Post</button>
            </form>
          </div>
        </div>
      </div>
    `;
    commentsFeed.appendChild(threadDiv);
  });
}

window.toggleLike = async function (commentId) {
  const comment = comments.find(c => c.id === commentId);
  if (comment && !comment.hasLiked) {
    comment.likes++;
    comment.hasLiked = true;
    renderComments();

    try {
      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
      await fetch(`/api/comments/${commentId}/like`, {
        method: 'POST',
        headers: {
          ...(csrfToken && {'X-CSRF-TOKEN': csrfToken})
        }
      });
    } catch(err) {}
  }
};

window.toggleReplyInput = function (commentId) {
  const formBox = document.getElementById(`reply-form-box-${commentId}`);
  if (formBox) {
    formBox.style.display = formBox.style.display === "none" ? "block" : "none";
  }
};

window.postReply = async function (commentId, event) {
  event.preventDefault();
  const replyInput = document.getElementById(`reply-text-${commentId}`);
  if (!replyInput || !replyInput.value.trim()) return;

  const text = replyInput.value.trim();

  try {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
    const res = await fetch('/api/comments', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        ...(csrfToken && {'X-CSRF-TOKEN': csrfToken})
      },
      body: JSON.stringify({ lesson_id: currentLessonId, text: text, parent_id: commentId })
    });
    
    if (res.ok) {
      const commentsRes = await fetch(`/api/comments/${currentLessonId}`);
      comments = await commentsRes.json();
      renderComments();
    } else {
      alert('You must be logged in to reply.');
    }
  } catch (err) {
    console.error(err);
  }
};

function initShareSaveButtons() {
  const shareBtn = document.getElementById("btn-share-course");
  const saveBtn = document.getElementById("btn-save-course");

  if (shareBtn) {
    shareBtn.addEventListener("click", () => {
      navigator.clipboard.writeText(window.location.href).then(() => {
        alert("Course link copied to clipboard!");
      });
    });
  }

  if (saveBtn) {
    const isSaved = localStorage.getItem("course_saved_gnc_fullstack") === "true";
    if (isSaved) {
      saveBtn.classList.remove("btn-outline-primary");
      saveBtn.classList.add("btn-primary");
      saveBtn.innerHTML = `<i class="bi bi-bookmark-fill me-1"></i> Saved`;
    }

    saveBtn.addEventListener("click", () => {
      saveBtn.classList.toggle("btn-outline-primary");
      saveBtn.classList.toggle("btn-primary");

      const nowSaved = saveBtn.classList.contains("btn-primary");
      localStorage.setItem("course_saved_gnc_fullstack", nowSaved ? "true" : "false");

      if (nowSaved) {
        saveBtn.innerHTML = `<i class="bi bi-bookmark-fill me-1"></i> Saved`;
        alert("Course saved to your My Learning library!");
      } else {
        saveBtn.innerHTML = `<i class="bi bi-bookmark me-1"></i> Save Course`;
        alert("Course removed from your saved library.");
      }
    });
  }
}

window.selectLesson = selectLesson;
window.toggleLessonCompletion = toggleLessonCompletion;

window.openApplyModal = function (courseName) {
  const courseInput = document.getElementById("modalCourseInput");
  if (courseInput) courseInput.value = courseName;
  const modalEl = document.getElementById('applyModal');
  if (modalEl) {
    const modal = new bootstrap.Modal(modalEl);
    modal.show();
  }
};
