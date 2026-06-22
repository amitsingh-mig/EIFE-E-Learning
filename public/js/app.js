// UNIVERSITY DATA
const universities = [
  {
    id: "spbu",
    country: "RU",
    abbr: "SP",
    name: "St. Petersburg State University",
    url: "spbu.html",
    urlLabel: "english.spbu.ru",
    logo: "image/logo/St. Petersburg State University logo.png",
    founded: 1724,
    location: "St. Petersburg, Russia",
    email: "admission@spbu.ru",
    phone: "+7 (812) 328-97-01",
    desc: "Established in 1724 by Peter the Great, St. Petersburg State University is the oldest institution of higher education in Russia. It is a world-class center for science, education, and culture, offering highly sought-after programs."
  },
  {
    id: "mai",
    country: "RU",
    abbr: "MA",
    name: "Moscow Aviation Institute (MAI)",
    url: "unistry.html?univ=mai",
    urlLabel: "en.mai.ru",
    logo: "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Emblem_of_Moscow_Aviation_Institute.svg/120px-Emblem_of_Moscow_Aviation_Institute.svg.png",
    founded: 1930,
    location: "Moscow, Russia",
    email: "int@mai.ru",
    phone: "+7 (499) 158-40-43",
    desc: "Moscow Aviation Institute is one of the world's leading engineering universities for aerospace technology. MAI offers high-tech education, cutting-edge labs, and strong international partnerships."
  },
  {
    id: "gnc",
    country: "IN",
    abbr: "GN",
    name: "Guru Nanak College (Autonomous)",
    url: "gnc.html",
    urlLabel: "gurunanakcollege.edu.in",
    logo: "https://gurunanakcollege.edu.in/images-gnc/logo/gnc-logo.png",
    founded: 1971,
    location: "Chennai, Tamil Nadu, India",
    email: "principal@gurunanakcollege.edu.in",
    phone: "+91-44-22451746",
    desc: "Guru Nanak College (Autonomous) is a premier multi-disciplinary institution in Chennai, committed to offering quality higher education and fostering excellence."
  },
  {
    id: "chitkara",
    country: "IN",
    abbr: "CU",
    name: "Chitkara University",
    url: "unistry.html?univ=chitkara",
    urlLabel: "chitkara.edu.in",
    logo: "https://upload.wikimedia.org/wikipedia/commons/e/ec/Chitkara_University%2C_Punjab_logo.png",
    founded: 2002,
    location: "Rajpura, Punjab, India",
    email: "admissions@chitkara.edu.in",
    phone: "+91-95011-05714",
    desc: "Chitkara University is a premier, NAAC A+ accredited institution. It has established itself as an education powerhouse offering industry-linked programs."
  }
];

// DYNAMIC COURSE CATALOG WITH TAXONOMY MAPPINGS
const courses = [
  // St. Petersburg State University Courses
  {
    id: "spbu-py-prog",
    univId: "spbu",
    univName: "St. Petersburg State University",
    univLogo: "image/logo/St. Petersburg State University logo.png",
    title: "Intro to Python & Software Principles",
    thumbnail: "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&q=80&w=400",
    category: "Computer Science",
    subSubject: "Programming Fundamentals",
    language: "English",
    type: "Free Audit",
    status: "Active",
    startDate: "Jul 25, 2026",
    endDate: "Dec 31, 2026",
    desc: "Understand variables, logic loops, basic classes, and modular software paradigms in Python. Designed for student exchanges."
  },
  {
    id: "spbu-ds-algo",
    univId: "spbu",
    univName: "St. Petersburg State University",
    univLogo: "image/logo/St. Petersburg State University logo.png",
    title: "Algorithms and Complex Data Structures",
    thumbnail: "https://images.unsplash.com/photo-1516116211223-5c359a36298a?auto=format&fit=crop&q=80&w=400",
    category: "Computer Science",
    subSubject: "Algorithms & Data Structures",
    language: "English",
    type: "Verified Certificate",
    status: "Active",
    startDate: "Aug 15, 2026",
    endDate: "Dec 15, 2026",
    desc: "Examine tree traversals, search complexities, sorting matrices, graph networks, and algorithmic dynamic programming paths."
  },
  {
    id: "spbu-gen-ai",
    univId: "spbu",
    univName: "St. Petersburg State University",
    univLogo: "image/logo/St. Petersburg State University logo.png",
    title: "Generative AI Foundations & Transformer Architectures",
    thumbnail: "https://images.unsplash.com/photo-1677442136019-21780efad99a?auto=format&fit=crop&q=80&w=400",
    category: "Artificial Intelligence",
    subSubject: "Generative AI",
    language: "English",
    type: "Professional Specialization",
    status: "Active",
    startDate: "Sep 1, 2026",
    endDate: "Jan 15, 2027",
    desc: "Study natural language generation, Large Language Models (LLMs), attention mechanisms, and prompt tuning frameworks."
  },
  {
    id: "spbu-deep-ln",
    univId: "spbu",
    univName: "St. Petersburg State University",
    univLogo: "image/logo/St. Petersburg State University logo.png",
    title: "Neural Networks and Deep Learning",
    thumbnail: "https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=400",
    category: "Machine Learning",
    subSubject: "Deep Learning",
    language: "Russian",
    type: "Verified Certificate",
    status: "Active",
    startDate: "Oct 5, 2026",
    endDate: "Dec 30, 2026",
    desc: "Examine multi-layer perceptrons, backpropagation networks, convolutional layers (CNNs), and recurrent cells (RNNs)."
  },
  {
    id: "spbu-web-dev",
    univId: "spbu",
    univName: "St. Petersburg State University",
    univLogo: "image/logo/St. Petersburg State University logo.png",
    title: "Full-Stack Web Development & API Design",
    thumbnail: "https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=400",
    category: "Software Development",
    subSubject: "Web Development",
    language: "English",
    type: "Free Audit",
    status: "Active",
    startDate: "Jul 10, 2026",
    endDate: "Nov 30, 2026",
    desc: "Build scalable backends using Node.js and Express. Connect relational database structures and construct clean RESTful interfaces."
  },

  // Moscow Aviation Institute (MAI) Courses
  {
    id: "mai-robo-ai",
    univId: "mai",
    univName: "Moscow Aviation Institute (MAI)",
    univLogo: "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Emblem_of_Moscow_Aviation_Institute.svg/120px-Emblem_of_Moscow_Aviation_Institute.svg.png",
    title: "Robotics Control Systems & AI Navigation",
    thumbnail: "https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&q=80&w=400",
    category: "Artificial Intelligence",
    subSubject: "Robotics AI",
    language: "English",
    type: "Professional Specialization",
    status: "Active",
    startDate: "Feb 10, 2026",
    endDate: "Jun 30, 2026",
    desc: "Study drone autonomy, Kalman filtering, localized SLAM, spatial coordinate transforms, and kinematics loops."
  },
  {
    id: "mai-net-sec",
    univId: "mai",
    univName: "Moscow Aviation Institute (MAI)",
    univLogo: "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Emblem_of_Moscow_Aviation_Institute.svg/120px-Emblem_of_Moscow_Aviation_Institute.svg.png",
    title: "Aerospace Communication Systems & Network Security",
    thumbnail: "https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&q=80&w=400",
    category: "Cyber Security",
    subSubject: "Network Security",
    language: "English",
    type: "Verified Certificate",
    status: "Active",
    startDate: "Mar 20, 2026",
    endDate: "Aug 25, 2026",
    desc: "Secure telemetry lines, encrypt satellite packets, block jamming attempts, and design firewalled communication layers."
  },

  // O.P. Jindal Global University (JGU) Courses
  {
    id: "gnc-ai-ethics",
    univId: "gnc",
    univName: "Guru Nanak College (Autonomous)",
    univLogo: "https://gurunanakcollege.edu.in/images-gnc/logo/gnc-logo.png",
    title: "Legal Frameworks and Ethical Guidelines in AI",
    thumbnail: "https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80&w=400",
    category: "Artificial Intelligence",
    subSubject: "AI Ethics",
    language: "English",
    type: "Verified Certificate",
    status: "Active",
    startDate: "May 5, 2026",
    endDate: "Oct 12, 2026",
    desc: "Analyze biases, privacy rights, copyright parameters of Generative models, and regulatory guidelines (e.g. EU AI Act)."
  },
  {
    id: "gnc-data-vis",
    univId: "gnc",
    univName: "Guru Nanak College (Autonomous)",
    univLogo: "https://gurunanakcollege.edu.in/images-gnc/logo/gnc-logo.png",
    title: "Business Analytics & Advanced Data Visualization",
    thumbnail: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&q=80&w=400",
    category: "Data Science",
    subSubject: "Data Visualization",
    language: "English",
    type: "Verified Certificate",
    status: "Active",
    startDate: "Jun 1, 2026",
    endDate: "Oct 15, 2026",
    desc: "Construct executive dashboards using Tableau and Python frameworks (Plotly, Seaborn). Focus on data-driven storytelling."
  },

  // Chitkara University Courses
  {
    id: "chitkara-deep-ml",
    univId: "chitkara",
    univName: "Chitkara University",
    univLogo: "https://upload.wikimedia.org/wikipedia/commons/e/ec/Chitkara_University%2C_Punjab_logo.png",
    title: "Neural Networks and Practical Reinforcement Learning",
    thumbnail: "https://images.unsplash.com/photo-1527474305487-b87b222841cc?auto=format&fit=crop&q=80&w=400",
    category: "Machine Learning",
    subSubject: "Reinforcement Learning",
    language: "English",
    type: "Professional Specialization",
    status: "Upcoming",
    startDate: "Nov 1, 2026",
    endDate: "Mar 15, 2027",
    desc: "Implement Q-learning tables, policy gradients, Markov decision frameworks, and deep Q-networks (DQNs) using PyTorch."
  },
  {
    id: "chitkara-devops",
    univId: "chitkara",
    univName: "Chitkara University",
    univLogo: "https://upload.wikimedia.org/wikipedia/commons/e/ec/Chitkara_University%2C_Punjab_logo.png",
    title: "DevOps Integration: Docker, Kubernetes & CI/CD",
    thumbnail: "https://images.unsplash.com/photo-1618401471353-b98aedd07871?auto=format&fit=crop&q=80&w=400",
    category: "Software Development",
    subSubject: "DevOps",
    language: "English",
    type: "Verified Certificate",
    status: "Upcoming",
    startDate: "Dec 1, 2026",
    endDate: "Apr 10, 2027",
    desc: "Build continuous build loops, coordinate containers using Kubernetes pod structures, and monitor cluster services."
  },
  {
    id: "chitkara-hack",
    univId: "chitkara",
    univName: "Chitkara University",
    univLogo: "https://upload.wikimedia.org/wikipedia/commons/e/ec/Chitkara_University%2C_Punjab_logo.png",
    title: "Ethical Hacking & Advanced Penetration Testing",
    thumbnail: "https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=400",
    category: "Cyber Security",
    subSubject: "Ethical Hacking",
    language: "English",
    type: "Professional Specialization",
    status: "Active",
    startDate: "Sep 15, 2026",
    endDate: "Jan 20, 2027",
    desc: "Master network reconnaissance, SQL injections, privilege escalations, buffer overflows, and legal penetration methodologies."
  }
];

// STATE MANAGEMENT
let searchVal = "";
let selectedUniv = "all";
let selectedLang = "all";
let selectedType = "all";
let selectedSort = "default";
let selectedSubSubjects = []; // Holds checked sub-subject checkbox values
let selectedCourse = "all";
let selectedSubject = "all";
let selectedCountry = "all";
let selectedCity = "all";

// PAGINATION STATE
let currentPage = 1;
const coursesPerPage = 6;

// INITIALIZE PORTAL
document.addEventListener("DOMContentLoaded", () => {
  parseUrlParams();
  renderUniversities();
  renderSPbSUCourses();
  renderGNCCourses();
  renderCatalogCourses();
  setupCatalogListeners();
  setupFormHandlers();
});

// READ URL QUERY PARAMS FOR PRE-FILTERING
function parseUrlParams() {
  const params = new URLSearchParams(window.location.search);
  const univParam = params.get("univ");
  if (univParam) {
    selectedUniv = univParam;
    // Pre-select dropdown if we are on unistry.html page
    const dropdown = document.getElementById("filterUniv");
    if (dropdown) dropdown.value = univParam;
  }
}

// 1. RENDER FEATURED UNIVERSITIES ON INDEX.HTML
function renderUniversities() {
  const univGrid = document.getElementById("univ-grid");
  if (!univGrid) return;
  univGrid.innerHTML = "";

  universities.forEach(univ => {
    const cardCol = document.createElement("div");
    cardCol.className = "col-md-6 col-lg-3 mb-4 animate-fade-in";
    cardCol.innerHTML = `
      <div class="univ-card">
        <div class="univ-card-banner">
          <div class="univ-card-logo-box">
            <img src="${univ.logo}" alt="${univ.name} Logo" onerror="this.src='https://via.placeholder.com/60';">
          </div>
        </div>
        <div class="univ-card-body">
          <div>
            <h5 class="card-title text-truncate mb-2">${univ.name}</h5>
            <p class="card-text text-muted small" style="min-height:60px;">${univ.desc}</p>
          </div>
          <div class="mt-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <span class="badge bg-light text-dark border d-inline-flex align-items-center">
                ${univ.country === "RU"
        ? `<svg class="me-1 rounded-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 6" width="16" height="11">
                       <rect fill="#fff" width="9" height="6"/>
                       <rect fill="#0039a6" y="2" width="9" height="4"/>
                       <rect fill="#d52b1e" y="4" width="9" height="2"/>
                     </svg> Russia`
        : `<svg class="me-1 rounded-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" width="16" height="11">
                       <rect fill="#FF9933" width="3" height="0.666"/>
                       <rect fill="#FFF" y="0.666" width="3" height="0.666"/>
                       <rect fill="#138808" y="1.333" width="3" height="0.666"/>
                       <circle fill="#000080" cx="1.5" cy="1" r="0.2"/>
                     </svg> India`
      }
              </span>
              <span class="small text-muted">Est. ${univ.founded}</span>
            </div>
            <a href="${univ.url}" class="btn btn-primary-blue btn-sm w-100">View Course Listing</a>
          </div>
        </div>
      </div>
    `;
    univGrid.appendChild(cardCol);
  });
}

// Helper functions for Course and Subject dropdown filtering
function matchesCourseFilter(course, filterVal) {
  if (filterVal === "all") return true;
  if (filterVal === "it") {
    return ["Computer Science", "Artificial Intelligence", "Machine Learning", "Software Development", "Cyber Security", "Data Science"].includes(course.category);
  }
  if (filterVal === "business-management") {
    return course.category === "Data Science" || course.subSubject === "AI Ethics";
  }
  if (filterVal === "engineering") {
    return ["Artificial Intelligence", "Software Development", "Cyber Security"].includes(course.category);
  }
  if (filterVal === "science") {
    return ["Computer Science", "Machine Learning", "Artificial Intelligence"].includes(course.category);
  }
  if (filterVal === "languages") {
    return false;
  }
  return false;
}

function matchesSubjectFilter(course, filterVal) {
  if (filterVal === "all") return true;

  // IT Subjects
  if (filterVal === "web-development") return course.subSubject === "Web Development";
  if (filterVal === "frontend-development") return course.subSubject === "Web Development";
  if (filterVal === "backend-development") return course.subSubject === "Web Development" || course.subSubject === "Programming Fundamentals";
  if (filterVal === "data-analytics") return course.subSubject === "Data Visualization";
  if (filterVal === "ai-machine-learning") {
    return ["Generative AI", "Deep Learning", "Reinforcement Learning", "AI Ethics", "Robotics AI"].includes(course.subSubject);
  }
  if (filterVal === "cloud-computing") return course.subSubject === "DevOps";

  // Engineering Subjects
  if (filterVal === "mechanical") return false;
  if (filterVal === "civil") return false;
  if (filterVal === "electrical") return false;
  if (filterVal === "aerospace") return course.subSubject === "Network Security";
  if (filterVal === "robotics") return course.subSubject === "Robotics AI";

  // Science Subjects
  if (filterVal === "physics") return false;
  if (filterVal === "chemistry") return false;
  if (filterVal === "biology") return false;
  if (filterVal === "mathematics") return course.subSubject === "Algorithms & Data Structures";

  // Languages
  if (filterVal === "english") return course.language === "English";
  if (filterVal === "russian") return course.language === "Russian";

  return false;
}

// 2. RENDER OPENEDU STYLE COURSE CATALOG LISTING ON UNISTRY.HTML
function renderCatalogCourses() {
  const catalogGrid = document.getElementById("course-catalog-grid");
  if (!catalogGrid) return;
  catalogGrid.innerHTML = "";

  // Dynamic Location Counts refresh
  updateLocationCounts();

  // Filter Logic
  let filtered = courses.filter(course => {
    // a. Text Search (Matches title or description)
    const matchesSearch =
      course.title.toLowerCase().includes(searchVal.toLowerCase()) ||
      course.desc.toLowerCase().includes(searchVal.toLowerCase());

    // b. University Filter
    const matchesUniv = selectedUniv === "all" || course.univId === selectedUniv;

    // c. Language Filter
    const matchesLang = selectedLang === "all" || course.language === selectedLang;

    // d. Course Type Filter
    const matchesType = selectedType === "all" || course.type === selectedType;

    // e. Accordion Sub-subject Checkboxes Filter
    const matchesSubSubject =
      selectedSubSubjects.length === 0 ||
      selectedSubSubjects.includes(course.subSubject);

    // f. Course dropdown filter
    const matchesCourse = selectedCourse === "all" || matchesCourseFilter(course, selectedCourse);

    // g. Subject dropdown filter
    const matchesSubject = selectedSubject === "all" || matchesSubjectFilter(course, selectedSubject);

    // h. Country location filter
    let matchesCountry = true;
    if (selectedCountry !== "all") {
      const univ = universities.find(u => u.id === course.univId);
      if (univ) {
        const mappedCode = selectedCountry === "India" ? "IN" : (selectedCountry === "Russia" ? "RU" : "");
        matchesCountry = univ.country === mappedCode;
      } else {
        matchesCountry = false;
      }
    }

    // i. City location filter
    let matchesCity = true;
    if (selectedCity !== "all") {
      const univ = universities.find(u => u.id === course.univId);
      if (univ) {
        const uLoc = univ.location.toLowerCase();
        if (selectedCity === "New Delhi") {
          matchesCity = uLoc.includes("new delhi");
        } else if (selectedCity === "Chandigarh") {
          matchesCity = uLoc.includes("chandigarh") || uLoc.includes("rajpura") || uLoc.includes("punjab");
        } else if (selectedCity === "Mumbai") {
          matchesCity = uLoc.includes("mumbai");
        } else if (selectedCity === "Moscow") {
          matchesCity = uLoc.includes("moscow");
        } else if (selectedCity === "Saint Petersburg") {
          matchesCity = uLoc.includes("st. petersburg") || uLoc.includes("saint petersburg");
        } else if (selectedCity === "Kazan") {
          matchesCity = uLoc.includes("kazan");
        } else {
          matchesCity = false;
        }
      } else {
        matchesCity = false;
      }
    }

    return matchesSearch && matchesUniv && matchesLang && matchesType && matchesSubSubject && matchesCourse && matchesSubject && matchesCountry && matchesCity;
  });

  // Sort Logic
  if (selectedSort === "title-asc") {
    filtered.sort((a, b) => a.title.localeCompare(b.title));
  } else if (selectedSort === "title-desc") {
    filtered.sort((a, b) => b.title.localeCompare(a.title));
  } else if (selectedSort === "start-asc") {
    filtered.sort((a, b) => new Date(a.startDate) - new Date(b.startDate));
  }

  // Render course counts (e.g. "Selected 9 courses")
  const countEl = document.getElementById("catalog-count");
  if (countEl) {
    countEl.innerText = `Selected ${filtered.length} courses`;
  }

  // Handle empty state
  if (filtered.length === 0) {
    catalogGrid.innerHTML = `
      <div class="col-12 text-center py-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-search text-muted mb-3" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
        </svg>
        <h5>No Courses Match Your Filters</h5>
        <p class="text-muted">Try clearing some checkboxes or refining your search text query.</p>
      </div>
    `;
    renderPaginationControls(0);
    return;
  }

  // Paginate items
  const totalPages = Math.ceil(filtered.length / coursesPerPage);
  if (currentPage > totalPages) currentPage = 1; // Safeguard bounds

  const startIndex = (currentPage - 1) * coursesPerPage;
  const paginatedCourses = filtered.slice(startIndex, startIndex + coursesPerPage);

  // Render Cards
  paginatedCourses.forEach(course => {
    const statusClass =
      course.status === "Active" ? "status-active" :
        (course.status === "Upcoming" ? "status-upcoming" : "status-ended");

    const cardCol = document.createElement("div");
    cardCol.className = "col-md-6 col-lg-4 mb-4 animate-fade-in";
    cardCol.innerHTML = `
      <div class="course-card">
        <div class="course-thumbnail">
          <img src="${course.thumbnail}" alt="${course.title}">
          <span class="course-field-badge">${course.category}</span>
        </div>
        <div class="course-body">
          <div class="course-univ-name">
            <img class="course-univ-logo" src="${course.univLogo}" alt="${course.univName}">
            <span>${course.univName}</span>
          </div>
          <h4 class="course-title">${course.title}</h4>
          <p class="course-desc">${course.desc}</p>
          <div class="course-status-bar">
            <span class="status-indicator ${statusClass}">${course.status}</span>
            <span class="course-dates">${course.startDate}</span>
          </div>
        </div>
        <div class="course-footer">
          <a class="btn btn-outline-primary btn-sm w-100" href="view_course.html?id=${course.id}">View Course</a>
        </div>
      </div>
    `;
    catalogGrid.appendChild(cardCol);
  });

  // Render Page Selection Numbers
  renderPaginationControls(filtered.length);
}

// 3. RENDER NUMERICAL PAGINATION CONTROLS
function renderPaginationControls(totalMatches) {
  const paginationContainer = document.getElementById("pagination-controls");
  if (!paginationContainer) return;
  paginationContainer.innerHTML = "";

  const totalPages = Math.ceil(totalMatches / coursesPerPage);
  if (totalPages <= 1) return; // Hide pagination if only one page exists

  // Prepend Prev Button
  const prevBtn = document.createElement("div");
  prevBtn.className = `pagination-item ${currentPage === 1 ? 'disabled' : ''}`;
  prevBtn.innerHTML = `&laquo;`;
  if (currentPage > 1) {
    prevBtn.addEventListener("click", () => {
      currentPage--;
      renderCatalogCourses();
      scrollToCatalog();
    });
  }
  paginationContainer.appendChild(prevBtn);

  // Numeric Buttons
  for (let i = 1; i <= totalPages; i++) {
    const pageItem = document.createElement("div");
    pageItem.className = `pagination-item ${currentPage === i ? 'active' : ''}`;
    pageItem.innerText = i;
    pageItem.addEventListener("click", () => {
      currentPage = i;
      renderCatalogCourses();
      scrollToCatalog();
    });
    paginationContainer.appendChild(pageItem);
  }

  // Append Next Button
  const nextBtn = document.createElement("div");
  nextBtn.className = `pagination-item ${currentPage === totalPages ? 'disabled' : ''}`;
  nextBtn.innerHTML = `&raquo;`;
  if (currentPage < totalPages) {
    nextBtn.addEventListener("click", () => {
      currentPage++;
      renderCatalogCourses();
      scrollToCatalog();
    });
  }
  paginationContainer.appendChild(nextBtn);
}

function scrollToCatalog() {
  const heading = document.getElementById("catalog-section-anchor");
  if (heading) {
    heading.scrollIntoView({ behavior: "smooth" });
  }
}

// Redirect helpers
function goToDetail(univId) {
  if (univId === "spbu") {
    window.location.href = "spbu.html";
  } else if (univId === "gnc") {
    window.location.href = "gnc.html";
  } else {
    alert("Detail page is only configured for St. Petersburg State University and Guru Nanak College. Redirecting to St. Petersburg State University.");
    window.location.href = "spbu.html";
  }
}

// 4. RENDER COURSES ON SPBU.HTML DETAIL PAGE
function renderSPbSUCourses() {
  const spbuGrid = document.getElementById("spbu-courses-grid");
  if (!spbuGrid) return;
  spbuGrid.innerHTML = "";

  const spbuCourses = courses.filter(c => c.univId === "spbu");

  spbuCourses.forEach(course => {
    const col = document.createElement("div");
    col.className = "col-md-6 col-lg-4 mb-4 animate-fade-in";
    col.innerHTML = `
      <div class="course-card">
        <div class="course-thumbnail">
          <img src="${course.thumbnail}" alt="${course.title}">
          <span class="course-field-badge">${course.category}</span>
        </div>
        <div class="course-body">
          <h4 class="course-title mb-3" style="min-height:auto;">${course.title}</h4>
          <p class="course-desc" style="-webkit-line-clamp: 2;">${course.desc}</p>
        </div>
        <div class="course-footer pt-0 d-flex gap-2">
          <a class="btn btn-outline-primary btn-sm w-50" href="view_course.html?id=${course.id}">View Course</a>
          <button class="btn btn-primary-blue btn-sm w-50" onclick="openApplyModal('${course.title}')">Apply Now</button>
        </div>
      </div>
    `;
    spbuGrid.appendChild(col);
  });
}

// 5. RENDER COURSES ON GNC.HTML DETAIL PAGE
function renderGNCCourses() {
  const gncGrid = document.getElementById("gnc-courses-grid");
  if (!gncGrid) return;
  gncGrid.innerHTML = "";

  const gncCourses = courses.filter(c => c.univId === "gnc");

  gncCourses.forEach(course => {
    const col = document.createElement("div");
    col.className = "col-md-6 col-lg-4 mb-4 animate-fade-in";
    col.innerHTML = `
      <div class="course-card">
        <div class="course-thumbnail">
          <img src="${course.thumbnail}" alt="${course.title}">
          <span class="course-field-badge">${course.category}</span>
        </div>
        <div class="course-body">
          <h4 class="course-title mb-3" style="min-height:auto;">${course.title}</h4>
          <p class="course-desc" style="-webkit-line-clamp: 2;">${course.desc}</p>
        </div>
        <div class="course-footer pt-0 d-flex gap-2">
          <a class="btn btn-outline-primary btn-sm w-50" href="view_course.html?id=${course.id}">View Course</a>
          <button class="btn btn-primary-blue btn-sm w-50" onclick="openApplyModal('${course.title}')">Apply Now</button>
        </div>
      </div>
    `;
    gncGrid.appendChild(col);
  });
}

// BIND ACTIONS & EVENT LISTENERS
function setupCatalogListeners() {
  const searchInput = document.getElementById("sidebarSearch");
  const univSelect = document.getElementById("filterUniv");
  const langSelect = document.getElementById("filterLang");
  const typeSelect = document.getElementById("filterType");
  const sortSelect = document.getElementById("filterSort");
  const checkboxList = document.querySelectorAll(".filter-checkbox");
  const courseSelect = document.getElementById("filterCourse");
  const subjectSelect = document.getElementById("filterSubject");

  if (searchInput) {
    searchInput.addEventListener("input", (e) => {
      searchVal = e.target.value;
      currentPage = 1;
      renderCatalogCourses();
    });
  }

  if (univSelect) {
    univSelect.addEventListener("change", (e) => {
      selectedUniv = e.target.value;
      currentPage = 1;
      renderCatalogCourses();
    });
  }

  if (langSelect) {
    langSelect.addEventListener("change", (e) => {
      selectedLang = e.target.value;
      currentPage = 1;
      renderCatalogCourses();
    });
  }

  if (typeSelect) {
    typeSelect.addEventListener("change", (e) => {
      selectedType = e.target.value;
      currentPage = 1;
      renderCatalogCourses();
    });
  }

  if (sortSelect) {
    sortSelect.addEventListener("change", (e) => {
      selectedSort = e.target.value;
      currentPage = 1;
      renderCatalogCourses();
    });
  }

  if (courseSelect) {
    courseSelect.addEventListener("change", (e) => {
      selectedCourse = e.target.value;
      currentPage = 1;
      renderCatalogCourses();
    });
  }

  if (subjectSelect) {
    subjectSelect.addEventListener("change", (e) => {
      selectedSubject = e.target.value;
      currentPage = 1;
      renderCatalogCourses();
    });
  }

  // Subject checkboxes listener
  checkboxList.forEach(checkbox => {
    checkbox.addEventListener("change", () => {
      selectedSubSubjects = [];
      const checkedBoxes = document.querySelectorAll(".filter-checkbox:checked");
      checkedBoxes.forEach(box => {
        selectedSubSubjects.push(box.value);
      });
      currentPage = 1;
      renderCatalogCourses();
    });
  });

  // Clear Filters button listener
  const clearBtn = document.getElementById("clearFiltersBtn");
  if (clearBtn) {
    clearBtn.addEventListener("click", () => {
      const sInput = document.getElementById("sidebarSearch");
      if (sInput) sInput.value = "";

      const uSelect = document.getElementById("filterUniv");
      if (uSelect) uSelect.value = "all";

      const lSelect = document.getElementById("filterLang");
      if (lSelect) lSelect.value = "all";

      const tSelect = document.getElementById("filterType");
      if (tSelect) tSelect.value = "all";

      const oSelect = document.getElementById("filterSort");
      if (oSelect) oSelect.value = "default";

      const cSelect = document.getElementById("filterCourse");
      if (cSelect) cSelect.value = "all";

      const subSelect = document.getElementById("filterSubject");
      if (subSelect) subSelect.value = "all";

      checkboxList.forEach(box => box.checked = false);

      // Reset location filter selects
      const countrySelect = document.getElementById("filterCountry");
      if (countrySelect) countrySelect.value = "all";
      const citySelect = document.getElementById("filterCity");
      if (citySelect) citySelect.value = "all";

      searchVal = "";
      selectedUniv = "all";
      selectedLang = "all";
      selectedType = "all";
      selectedSort = "default";
      selectedSubSubjects = [];
      selectedCourse = "all";
      selectedSubject = "all";
      selectedCountry = "all";
      selectedCity = "all";
      currentPage = 1;

      renderCatalogCourses();
    });
  }

  // Location select filters listeners
  const countrySelect = document.getElementById("filterCountry");
  if (countrySelect) {
    countrySelect.addEventListener("change", (e) => {
      selectedCountry = e.target.value;
      currentPage = 1;
      renderCatalogCourses();
    });
  }

  const citySelect = document.getElementById("filterCity");
  if (citySelect) {
    citySelect.addEventListener("change", (e) => {
      selectedCity = e.target.value;
      currentPage = 1;
      renderCatalogCourses();
    });
  }
}

// UPDATE LOCATION COUNTS FOR DROPDOWNS
function updateLocationCounts() {
  const countrySelect = document.getElementById("filterCountry");
  const citySelect = document.getElementById("filterCity");
  if (!countrySelect || !citySelect) return;

  // Update Country Options
  Array.from(countrySelect.options).forEach(option => {
    const value = option.value;
    if (value === "all") return;

    let matchingCourses = courses.filter(course => {
      const matchesSearch =
        course.title.toLowerCase().includes(searchVal.toLowerCase()) ||
        course.desc.toLowerCase().includes(searchVal.toLowerCase());
      const matchesUniv = selectedUniv === "all" || course.univId === selectedUniv;
      const matchesLang = selectedLang === "all" || course.language === selectedLang;
      const matchesType = selectedType === "all" || course.type === selectedType;
      const matchesSubSubject = selectedSubSubjects.length === 0 || selectedSubSubjects.includes(course.subSubject);
      const matchesCourse = selectedCourse === "all" || matchesCourseFilter(course, selectedCourse);
      const matchesSubject = selectedSubject === "all" || matchesSubjectFilter(course, selectedSubject);

      if (!(matchesSearch && matchesUniv && matchesLang && matchesType && matchesSubSubject && matchesCourse && matchesSubject)) {
        return false;
      }

      const univ = universities.find(u => u.id === course.univId);
      if (!univ) return false;

      const mappedCode = value === "India" ? "IN" : (value === "Russia" ? "RU" : "");
      return univ.country === mappedCode;
    });

    option.textContent = `${value} (${matchingCourses.length})`;
  });

  // Update City Options
  Array.from(citySelect.options).forEach(option => {
    const value = option.value;
    if (value === "all") return;

    let matchingCourses = courses.filter(course => {
      const matchesSearch =
        course.title.toLowerCase().includes(searchVal.toLowerCase()) ||
        course.desc.toLowerCase().includes(searchVal.toLowerCase());
      const matchesUniv = selectedUniv === "all" || course.univId === selectedUniv;
      const matchesLang = selectedLang === "all" || course.language === selectedLang;
      const matchesType = selectedType === "all" || course.type === selectedType;
      const matchesSubSubject = selectedSubSubjects.length === 0 || selectedSubSubjects.includes(course.subSubject);
      const matchesCourse = selectedCourse === "all" || matchesCourseFilter(course, selectedCourse);
      const matchesSubject = selectedSubject === "all" || matchesSubjectFilter(course, selectedSubject);

      if (!(matchesSearch && matchesUniv && matchesLang && matchesType && matchesSubSubject && matchesCourse && matchesSubject)) {
        return false;
      }

      const univ = universities.find(u => u.id === course.univId);
      if (!univ) return false;

      const uLoc = univ.location.toLowerCase();
      if (value === "New Delhi") return uLoc.includes("new delhi");
      if (value === "Chandigarh") return uLoc.includes("chandigarh") || uLoc.includes("rajpura") || uLoc.includes("punjab");
      if (value === "Mumbai") return uLoc.includes("mumbai");
      if (value === "Moscow") return uLoc.includes("moscow");
      if (value === "Saint Petersburg") return uLoc.includes("st. petersburg") || uLoc.includes("saint petersburg");
      if (value === "Kazan") return uLoc.includes("kazan");
      return false;
    });

    option.textContent = `${value} (${matchingCourses.length})`;
  });
}


// DIALOGS & FORMS HANDLING
function setupFormHandlers() {
  // Sidebar Admission Quick Form on spbu.html
  const spbuInquiry = document.getElementById("spbu-inquiry-form");
  if (spbuInquiry) {
    spbuInquiry.addEventListener("submit", (e) => {
      e.preventDefault();
      const successBox = document.getElementById("spbu-inquiry-success");
      if (successBox) {
        successBox.style.display = "block";
        spbuInquiry.reset();
        setTimeout(() => successBox.style.display = "none", 4000);
      }
    });
  }

  // Modal application form
  const modalApply = document.getElementById("modal-apply-form");
  if (modalApply) {
    modalApply.addEventListener("submit", (e) => {
      e.preventDefault();
      const modalSuccess = document.getElementById("modal-apply-success");
      if (modalSuccess) {
        modalSuccess.style.display = "block";
        modalApply.reset();
        setTimeout(() => {
          modalSuccess.style.display = "none";
          const modalInstance = bootstrap.Modal.getInstance(document.getElementById('applyModal'));
          if (modalInstance) modalInstance.hide();
        }, 2000);
      }
    });
  }

  // Brochure download action
  const downloadBtn = document.getElementById("btn-download-brochure");
  if (downloadBtn) {
    downloadBtn.addEventListener("click", () => {
      alert("Academic brochure package preparing. Download starting shortly.");
    });
  }
}

// APPLY MODAL POPUP
function openApplyModal(courseName) {
  const courseInput = document.getElementById("modalCourseInput");
  if (courseInput) courseInput.value = courseName;
  const modalEl = document.getElementById('applyModal');
  if (modalEl) {
    const modal = new bootstrap.Modal(modalEl);
    modal.show();
  }
}
window.openApplyModal = openApplyModal;
