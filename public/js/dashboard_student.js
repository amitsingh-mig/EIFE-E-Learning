// STUDENT DASHBOARD CONTROLLER

// Default student profile details
let defaultProfile = {
  firstName: "Amit",
  lastName: "Kumar",
  email: "amit.kumar@gurunanakcollege.edu.in",
  phone: "+91 98765 43210",
  bio: "Exchange student under EIFE bilateral academic path, concentrating in Web Technologies and AI Ethic Frameworks.",
  avatar: "https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=200"
};

// Calendar Events Data
let calendarEvents = {};

// INITIALIZATION
document.addEventListener("DOMContentLoaded", async () => {
  try {
    const res = await fetch("/api/dashboard/events");
    if (res.ok) {
      const events = await res.json();
      events.forEach(e => {
        calendarEvents[e.id] = e;
      });
    }
  } catch(e) { console.error("Failed to fetch events", e); }

  initProfile();
  initProgressMetrics();
  initNotesPreview();
  initCalendarModal();
});

// 1. DYNAMIC TAB SWITCHING ROUTER
window.switchDashboardTab = function (tabId, event) {
  if (event) event.preventDefault();

  // Remove active state from all sidebar links
  document.querySelectorAll(".db-menu-item").forEach(item => {
    item.classList.remove("active");
  });

  // Highlight selected sidebar item
  const selectedMenuItem = document.getElementById(`menu-${tabId}`);
  if (selectedMenuItem) {
    selectedMenuItem.classList.add("active");
  }

  // Hide all tab content panes
  document.querySelectorAll(".db-tab-pane").forEach(pane => {
    pane.classList.remove("active");
  });

  // Show selected content pane
  const targetPane = document.getElementById(`pane-${tabId}`);
  if (targetPane) {
    targetPane.classList.add("active");
  }

  // Smooth scroll to top of content on mobile
  if (window.innerWidth < 992) {
    targetPane.scrollIntoView({ behavior: "smooth" });
  }
};

// 2. PROFILE SETTINGS INITIALIZATION & HANDLER
function initProfile() {
  // Check if profile exists, otherwise load defaults
  let profile = localStorage.getItem("student_profile");
  if (!profile) {
    localStorage.setItem("student_profile", JSON.stringify(defaultProfile));
    profile = defaultProfile;
  } else {
    try {
      profile = JSON.parse(profile);
    } catch (e) {
      profile = defaultProfile;
    }
  }

  // Update UI Elements with Profile Info
  updateProfileUI(profile);

  // Set initial form values if form exists
  const firstNameInput = document.getElementById("dbStudentNameInput");
  const lastNameInput = document.getElementById("dbStudentLastNameInput");
  const emailInput = document.getElementById("dbStudentEmailInput");
  const phoneInput = document.getElementById("dbStudentPhoneInput");
  const bioInput = document.getElementById("dbStudentBioInput");
  const avatarPreview = document.getElementById("settingsProfilePreviewImg");

  if (firstNameInput) firstNameInput.value = profile.firstName || "";
  if (lastNameInput) lastNameInput.value = profile.lastName || "";
  if (emailInput) emailInput.value = profile.email || "";
  if (phoneInput) phoneInput.value = profile.phone || "";
  if (bioInput) bioInput.value = profile.bio || "";
  if (avatarPreview && profile.avatar) avatarPreview.src = profile.avatar;

  // Handle Form Submission
  const profileForm = document.getElementById("dbProfileSettingsForm");
  if (profileForm) {
    profileForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const updatedProfile = {
        firstName: firstNameInput.value,
        lastName: lastNameInput.value,
        email: emailInput.value,
        phone: phoneInput.value,
        bio: bioInput.value,
        avatar: avatarPreview.src // Keeps current avatar url
      };

      localStorage.setItem("student_profile", JSON.stringify(updatedProfile));
      updateProfileUI(updatedProfile);

      // Show success alert
      const successAlert = document.getElementById("dbProfileSuccessAlert");
      if (successAlert) {
        successAlert.style.display = "block";
        successAlert.scrollIntoView({ behavior: "smooth" });
        setTimeout(() => {
          successAlert.style.display = "none";
        }, 3000);
      }
    });
  }

  // Handle Avatar Image File Upload Change (Mock File Reader)
  const avatarUploadInput = document.getElementById("avatarUploadInput");
  if (avatarUploadInput) {
    avatarUploadInput.addEventListener("change", (e) => {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (event) {
          if (avatarPreview) avatarPreview.src = event.target.result;
          
          // Instantly update active avatar in localStorage profile
          let currentProfile = JSON.parse(localStorage.getItem("student_profile")) || defaultProfile;
          currentProfile.avatar = event.target.result;
          localStorage.setItem("student_profile", JSON.stringify(currentProfile));
          updateProfileUI(currentProfile);
        };
        reader.readAsDataURL(file);
      }
    });
  }
}

// Helper to update profile strings across multiple DOM locations
function updateProfileUI(profile) {
  const fullNameStr = `${profile.firstName} ${profile.lastName}`;

  // Update text names
  const welcomeNameEl = document.getElementById("welcomeStudentName");
  if (welcomeNameEl) welcomeNameEl.innerText = profile.firstName;

  const navbarNameEl = document.getElementById("navbarProfileName");
  if (navbarNameEl) navbarNameEl.innerText = profile.firstName;

  const sidebarNameEl = document.getElementById("sidebarProfileName");
  if (sidebarNameEl) sidebarNameEl.innerText = fullNameStr;

  const certModalNameEl = document.getElementById("certModalStudentName");
  if (certModalNameEl) certModalNameEl.innerText = fullNameStr;

  // Update avatar images
  const navbarProfileImg = document.getElementById("navbarProfileImg");
  if (navbarProfileImg && profile.avatar) navbarProfileImg.src = profile.avatar;

  const sidebarProfileImg = document.getElementById("sidebarProfileImg");
  if (sidebarProfileImg && profile.avatar) sidebarProfileImg.src = profile.avatar;
}

// 3. COURSE LEARNING PROGRESS SYNCHRONIZATION
function initProgressMetrics() {
  // Read completed lessons list from localStorage (shared with learning.js)
  const completedJson = localStorage.getItem("completed_lessons_gnc_fullstack");
  let completedCount = 1; // Default fallback to 1 lesson completed (Internet Protocols)
  let totalLessons = 6;

  if (completedJson) {
    try {
      const completedIds = JSON.parse(completedJson);
      completedCount = completedIds.length;
    } catch (e) {
      completedCount = 1;
    }
  }

  const percentage = Math.round((completedCount / totalLessons) * 100);

  // Update progress percentage label
  const percentLabels = ["dbCoursePercentage", "myCoursesFullStackLabel", "contLearnPercentLabel"];
  percentLabels.forEach(id => {
    const el = document.getElementById(id);
    if (el) el.innerText = `${percentage}%`;
  });

  // Update progress bar widths
  const progressBarIds = ["dbCourseProgressBar", "myCoursesFullStackProgress", "contLearnProgressBar"];
  progressBarIds.forEach(id => {
    const el = document.getElementById(id);
    if (el) {
      el.style.width = `${percentage}%`;
      el.setAttribute("aria-valuenow", percentage);
    }
  });

  // Update lesson counters
  const lessonsCountEl = document.getElementById("dbLessonsCount");
  if (lessonsCountEl) lessonsCountEl.innerText = completedCount;

  const contLearnLessonCount = document.getElementById("contLearnLessonCount");
  if (contLearnLessonCount) contLearnLessonCount.innerText = completedCount;

  // Update banner text
  const welcomeBannerText = document.querySelector(".db-welcome-banner p");
  if (welcomeBannerText) {
    welcomeBannerText.innerHTML = `You have completed <strong class="text-warning">${percentage}%</strong> of your active full-stack path. Keep up the momentum!`;
  }
}

// 4. NOTES SCRATCHPAD DRAFT PREVIEW
function initNotesPreview() {
  const notesDraftPreview = document.getElementById("notesDraftPreview");
  if (!notesDraftPreview) return;

  const savedNotes = localStorage.getItem("course_notes_gnc_fullstack");
  if (savedNotes && savedNotes.trim()) {
    // Truncate notes text to fit preview nicely
    const maxLength = 160;
    let truncatedText = savedNotes.trim();
    if (truncatedText.length > maxLength) {
      truncatedText = truncatedText.substring(0, maxLength) + "...";
    }
    notesDraftPreview.innerText = `"${truncatedText}"`;
  } else {
    notesDraftPreview.innerText = `"No notes saved in your scratchpad yet. Visit the Study Room notes tab to save dynamic auto-saves."`;
  }
}

// 5. CALENDAR EVENT MODAL LAUNCHER
window.showEventDetails = function (eventId) {
  const event = calendarEvents[eventId];
  if (!event) return;

  const titleEl = document.getElementById("eventDetailTitle");
  const timeEl = document.getElementById("eventDetailTime");
  const descEl = document.getElementById("eventDetailDescription");
  const actionBoxEl = document.getElementById("eventDetailActionBox");

  if (titleEl) titleEl.innerText = event.title;
  if (timeEl) timeEl.innerText = event.time;
  if (descEl) descEl.innerText = event.desc;

  if (actionBoxEl) {
    if (event.linkUrl && event.linkUrl !== "#") {
      actionBoxEl.innerHTML = `<a href="${event.linkUrl}" target="_blank" class="btn btn-primary-blue"><i class="bi bi-play-btn-fill me-1"></i> ${event.linkText}</a>`;
    } else {
      actionBoxEl.innerHTML = `<button class="btn btn-secondary w-100" disabled>Submission Closed</button>`;
    }
  }

  const modalEl = document.getElementById("eventDetailModal");
  if (modalEl) {
    const modal = new bootstrap.Modal(modalEl);
    modal.show();
  }
};

// 6. CERTIFICATE POPUP AND PRINT HANDLERS
window.openCertificateModal = function (courseName, universityName, certId, dateAwarded) {
  const certModalName = document.getElementById("certModalCourseName");
  const certModalUniv = document.getElementById("certModalUnivName");
  const certModalId = document.getElementById("certModalId");
  const certModalDate = document.getElementById("certModalDate");

  if (certModalName) certModalName.innerText = courseName;
  if (certModalUniv) certModalUniv.innerText = universityName;
  if (certModalId) certModalId.innerText = certId;
  if (certModalDate) certModalDate.innerText = dateAwarded;

  const modalEl = document.getElementById("certificateModal");
  if (modalEl) {
    const modal = new bootstrap.Modal(modalEl);
    modal.show();
  }
};

// Print Certificate Trigger
window.printCertificateMock = function (courseName, universityName) {
  alert(`Initiating verified certificate compilation for:\n\nCourse: ${courseName}\nInstitution: ${universityName}\n\nPreparing print layout templates...`);
  window.print();
};

function initCalendarModal() {
  const printBtn = document.getElementById("certModalPrintBtn");
  if (printBtn) {
    printBtn.addEventListener("click", () => {
      const courseName = document.getElementById("certModalCourseName").innerText;
      const universityName = document.getElementById("certModalUnivName").innerText;
      printCertificateMock(courseName, universityName);
    });
  }
}
