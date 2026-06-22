<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Student Learning Dashboard | EIFE Portal</title>
  <meta name="description" content="Manage your courses, view academic progress, track certificates, and connect to live webinar sessions in the student learning dashboard.">
  <meta name="keywords" content="Student Dashboard, Course progress, E-Learning, Certificates, Academic Calendar, Study Room">
  <meta name="author" content="EIFE">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg bg-white sticky-top py-3 border-bottom shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="/" aria-label="EIFE Portal Home">
        <img src="https://eife.org/wp-content/uploads/2019/05/eife_logo-1.png" alt="EIFE Logo" class="d-inline-block align-top">
      </a>

      <!-- Navbar Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <!-- Search bar in Header -->
        <form class="d-flex mx-auto col-lg-5 col-md-8 my-2 my-lg-0 position-relative" role="search" action="/unistry" method="GET">
          <div class="input-group input-group-sm">
            <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-search"></i></span>
            <input class="form-control bg-light border-start-0 ps-0 text-dark" name="search" type="search" placeholder="Search catalog courses..." aria-label="Search">
          </div>
        </form>

        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center gap-2">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/unistry">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#featured-universities">Universities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/dashboard_student">My Learning</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#supportSection">Support</a>
          </li>
          
          <!-- Notifications & Profile Icons -->
          <li class="nav-item dropdown ms-lg-2 d-none d-md-block">
            <a class="nav-link position-relative text-secondary p-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-bell-fill" style="font-size: 18px;"></i>
              <span class="position-absolute top-1 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
              <li><h6 class="dropdown-header">Notifications</h6></li>
              <li><a class="dropdown-item small text-muted text-wrap" href="#">New lesson unlocked: "RESTful Handlers with Node.js"</a></li>
              <li><a class="dropdown-item small text-muted text-wrap" href="#">Your comment got a reply from Instructor Dr. Sharma</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown ms-lg-2">
            <a class="nav-link dropdown-toggle d-flex align-items-center gap-2 text-dark fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=600" alt="Student Profile" id="navbarProfileImg" class="rounded-circle border" style="width: 32px; height: 32px; object-fit: cover;">
              <span class="d-lg-inline d-none" id="navbarProfileName">Amit</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
              <li><a class="dropdown-item small" href="#" onclick="switchDashboardTab('profile-settings', event)">Profile Settings</a></li>
              <li><a class="dropdown-item small" href="/dashboard_student">My Learning Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item small text-danger" href="/login">Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Welcome banner header -->
  <header class="py-4 bg-white border-bottom mb-4">
    <div class="container">
      <div class="db-welcome-banner p-4 p-md-5 text-white shadow-sm">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-start">
            <span class="badge bg-warning text-dark fw-bold mb-2">Student Dashboard</span>
            <h1 class="display-6 fw-bold mb-2" style="font-family:'Outfit',sans-serif; color:#fff;">Welcome back, <span id="welcomeStudentName">Amit</span>!</h1>
            <p class="lead mb-0 text-light small-text-opacity" style="font-size: 15px;">You have completed <strong class="text-warning">16%</strong> of your active full-stack path. Keep up the momentum!</p>
          </div>
          <div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
            <a href="/learning" class="btn btn-warning px-4 py-2.5 fw-bold text-dark shadow-sm">
              <i class="bi bi-play-fill me-1"></i> Continue Learning
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Grid Layout -->
  <main class="container py-2 pb-5">
    <div class="row g-4">
      
      <!-- Left Column: Sidebar Menu (3/12 grid) -->
      <aside class="col-lg-3">
        <div class="db-sidebar">
          <div class="text-center mb-4 pb-3 border-bottom">
            <div class="position-relative d-inline-block">
              <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=200" alt="Avatar" id="sidebarProfileImg" class="rounded-circle border shadow-sm" style="width: 80px; height: 80px; object-fit: cover;">
            </div>
            <h5 class="fw-bold text-dark mt-2 mb-0" id="sidebarProfileName">Amit Kumar</h5>
            <span class="text-muted small">Academic Exchange Candidate</span>
          </div>

          <ul class="db-sidebar-menu">
            <li class="db-menu-item active" id="menu-overview">
              <a href="#" class="db-menu-link" onclick="switchDashboardTab('overview', event)">
                <i class="bi bi-grid-fill"></i> Overview
              </a>
            </li>
            <li class="db-menu-item" id="menu-my-courses">
              <a href="#" class="db-menu-link" onclick="switchDashboardTab('my-courses', event)">
                <i class="bi bi-journal-bookmark-fill"></i> My Courses
              </a>
            </li>
            <li class="db-menu-item" id="menu-continue-learning">
              <a href="#" class="db-menu-link" onclick="switchDashboardTab('continue-learning', event)">
                <i class="bi bi-play-circle-fill"></i> Continue Learning
              </a>
            </li>
            <li class="db-menu-item" id="menu-certificates">
              <a href="#" class="db-menu-link" onclick="switchDashboardTab('certificates', event)">
                <i class="bi bi-award-fill"></i> Certificates
              </a>
            </li>
            <li class="db-menu-item" id="menu-assignments">
              <a href="#" class="db-menu-link" onclick="switchDashboardTab('assignments', event)">
                <i class="bi bi-file-earmark-check-fill"></i> Assignments
              </a>
            </li>
            <li class="db-menu-item" id="menu-discussions">
              <a href="#" class="db-menu-link" onclick="switchDashboardTab('discussions', event)">
                <i class="bi bi-chat-left-text-fill"></i> Discussions
              </a>
            </li>
            <li class="db-menu-item" id="menu-academic-calendar">
              <a href="#" class="db-menu-link" onclick="switchDashboardTab('academic-calendar', event)">
                <i class="bi bi-calendar3"></i> Academic Calendar
              </a>
            </li>
            <li class="db-menu-item" id="menu-notifications">
              <a href="#" class="db-menu-link" onclick="switchDashboardTab('notifications', event)">
                <i class="bi bi-bell-fill"></i> Notifications
                <span class="badge bg-danger rounded-circle ms-auto px-1.5 py-0.5" style="font-size: 10px;">2</span>
              </a>
            </li>
            <li class="db-menu-item" id="menu-profile-settings">
              <a href="#" class="db-menu-link" onclick="switchDashboardTab('profile-settings', event)">
                <i class="bi bi-gear-fill"></i> Profile Settings
              </a>
            </li>
          </ul>
        </div>
      </aside>

      <!-- Right Column: Interactive Panes (9/12 grid) -->
      <section class="col-lg-9">
        
        <!-- PANE 1: OVERVIEW -->
        <div class="db-tab-pane active" id="pane-overview">
          
          <!-- Statistics Cards Row -->
          <div class="row g-3 mb-4">
            <div class="col-sm-6 col-xl-3">
              <div class="db-stat-card">
                <div class="db-stat-icon-box icon-box-blue">
                  <i class="bi bi-journal-album"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold text-dark mb-0">4</h3>
                  <span class="text-muted small">Enrolled Courses</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="db-stat-card">
                <div class="db-stat-icon-box icon-box-green">
                  <i class="bi bi-check-circle-fill"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold text-dark mb-0">1</h3>
                  <span class="text-muted small">Completed Courses</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="db-stat-card">
                <div class="db-stat-icon-box icon-box-gold">
                  <i class="bi bi-award"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold text-dark mb-0">1</h3>
                  <span class="text-muted small">Certificates Earned</span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3">
              <div class="db-stat-card">
                <div class="db-stat-icon-box icon-box-purple">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div>
                  <h3 class="h4 fw-bold text-dark mb-0">42.5</h3>
                  <span class="text-muted small">Learning Hours</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Main Overview Content Grid -->
          <div class="row g-4">
            
            <!-- Left Grid Pane: Continue Course & Timeline -->
            <div class="col-lg-8">
              
              <!-- Continue Learning Progress Panel -->
              <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="h6 fw-bold text-dark uppercase mb-0"><i class="bi bi-play-circle text-primary-blue-light me-1"></i> Active Learning</h4>
                  <span class="badge bg-light text-primary border fw-bold" id="dbCoursePercentage">16%</span>
                </div>
                <div class="d-flex gap-3 mb-3">
                  <div class="d-none d-sm-block" style="width: 80px; height: 80px; border-radius: 8px; overflow: hidden; flex-shrink: 0;">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=200" alt="Course Thumbnail" class="w-100 h-100 object-fit-cover">
                  </div>
                  <div>
                    <h5 class="fw-bold text-dark mb-1" style="font-size: 15px;">Full-Stack Web Development &amp; API Design</h5>
                    <p class="text-muted small mb-0">Guru Nanak College (Autonomous)</p>
                    <span class="text-muted small mt-1 d-block"><i class="bi bi-arrow-right-short text-warning"></i> Next Up: <strong>Internet Protocols &amp; Web Handshakes</strong></span>
                  </div>
                </div>
                <div class="progress mb-3" style="height: 6px;">
                  <div class="progress-bar bg-success" id="dbCourseProgressBar" role="progressbar" style="width: 16%" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="text-muted small"><span id="dbLessonsCount">1</span> / 6 Lessons Completed</span>
                  <a href="/learning" class="btn btn-primary-blue btn-sm px-4">Resume</a>
                </div>
              </div>

              <!-- Recent Activities Timeline -->
              <div class="bg-white p-4 rounded-4 shadow-sm border">
                <h4 class="h6 fw-bold text-dark mb-4"><i class="bi bi-clock-history text-primary-blue-light me-1"></i> Recent Activities</h4>
                <div class="db-timeline">
                  
                  <div class="db-timeline-item">
                    <span class="db-timeline-dot completed"></span>
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <span class="fw-bold text-dark small">Completed Lesson: Internet Protocols</span>
                      <span class="db-timeline-time">Today, 2:15 PM</span>
                    </div>
                    <p class="small text-muted mb-0">Completed the video session and validated connection properties in Module 1.</p>
                  </div>

                  <div class="db-timeline-item">
                    <span class="db-timeline-dot comment"></span>
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <span class="fw-bold text-dark small">Posted in Discussion Forum</span>
                      <span class="db-timeline-time">Yesterday</span>
                    </div>
                    <p class="small text-muted mb-0">Replied to Pooja Singh's thread regarding HTTP/2 multiplexing.</p>
                  </div>

                  <div class="db-timeline-item">
                    <span class="db-timeline-dot"></span>
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <span class="fw-bold text-dark small">Enrolled in new course</span>
                      <span class="db-timeline-time">3 days ago</span>
                    </div>
                    <p class="small text-muted mb-0">Enrolled in Legal Frameworks and Ethical Guidelines in AI by GNC.</p>
                  </div>

                  <div class="db-timeline-item">
                    <span class="db-timeline-dot completed"></span>
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <span class="fw-bold text-dark small">Earned Course Certificate</span>
                      <span class="db-timeline-time">1 week ago</span>
                    </div>
                    <p class="small text-muted mb-0">Successfully completed Intro to Python &amp; Software Principles by SPbSU.</p>
                  </div>

                </div>
              </div>

            </div>

            <!-- Right Grid Pane: Calendar & Upcoming Webinar Sessions -->
            <div class="col-lg-4">
              
              <!-- Upcoming Sessions -->
              <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                <h4 class="h6 fw-bold text-dark mb-3"><i class="bi bi-camera-video text-primary-blue-light me-1"></i> Live Sessions</h4>
                <div class="d-flex flex-column gap-3">
                  
                  <div class="db-cal-event webinar" onclick="showEventDetails('webinar-1')">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <span class="badge bg-warning text-dark fw-bold" style="font-size: 10px;">Webinar QA</span>
                      <span class="small text-muted">June 12, 15:00</span>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 13.5px;">API Design Live Q&amp;A</h6>
                    <span class="text-secondary small d-block">Dr. Ramesh Sharma</span>
                  </div>

                  <div class="db-cal-event" onclick="showEventDetails('lecture-1')">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <span class="badge bg-primary fw-bold text-white" style="font-size: 10px;">Lecture</span>
                      <span class="small text-muted">June 15, 10:00</span>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 13.5px;">AI Ethics &amp; Frameworks</h6>
                    <span class="text-secondary small d-block">Dr. S. K. Subramanian</span>
                  </div>

                  <div class="db-cal-event deadline" onclick="showEventDetails('quiz-1')">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <span class="badge bg-danger fw-bold text-white" style="font-size: 10px;">Quiz Scope</span>
                      <span class="small text-muted">June 18, 23:59</span>
                    </div>
                    <h6 class="fw-bold text-dark mb-1" style="font-size: 13.5px;">Python Scope Variables Quiz</h6>
                    <span class="text-secondary small d-block">Deadline - SPbSU Platform</span>
                  </div>

                </div>
              </div>

              <!-- Profile summary info -->
              <div class="bg-white p-4 rounded-4 shadow-sm border">
                <h4 class="h6 fw-bold text-dark mb-3"><i class="bi bi-person text-primary-blue-light me-1"></i> Exchange Summary</h4>
                <ul class="list-unstyled mb-0 small text-secondary d-flex flex-column gap-2">
                  <li class="d-flex justify-content-between"><span class="text-muted">Home Univ:</span> <strong class="text-dark">GNC (Chennai)</strong></li>
                  <li class="d-flex justify-content-between"><span class="text-muted">Host Univ:</span> <strong class="text-dark">SPbSU (Russia)</strong></li>
                  <li class="d-flex justify-content-between"><span class="text-muted">Credit Terms:</span> <strong class="text-dark">Fall 2026 Semester</strong></li>
                  <li class="d-flex justify-content-between"><span class="text-muted">Exchange ID:</span> <strong class="text-dark">EIFE-2026-0982</strong></li>
                </ul>
              </div>

            </div>

          </div>

          <!-- Recommended Courses Section -->
          <div class="mt-4">
            <h4 class="h6 fw-bold text-dark mb-3"><i class="bi bi-mortarboard text-primary-blue-light me-1"></i> Recommended for You</h4>
            <div class="row g-3">
              <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 shadow-sm overflow-hidden">
                  <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=400" alt="Course" class="card-img-top" style="height: 120px; object-fit: cover;">
                  <div class="card-body p-3">
                    <span class="text-primary-blue-light fw-bold" style="font-size: 11px; text-transform: uppercase;">Cyber Security</span>
                    <h6 class="fw-bold text-dark mt-1" style="font-size: 13.5px; line-height: 1.3;">Ethical Hacking &amp; Penetration Testing</h6>
                    <a href="/unistry" class="btn btn-outline-primary btn-sm w-100 mt-2">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card h-100 border rounded-4 shadow-sm overflow-hidden">
                  <img src="https://images.unsplash.com/photo-1677442136019-21780efad99a?auto=format&fit=crop&q=80&w=400" alt="Course" class="card-img-top" style="height: 120px; object-fit: cover;">
                  <div class="card-body p-3">
                    <span class="text-primary-blue-light fw-bold" style="font-size: 11px; text-transform: uppercase;">Artificial Intelligence</span>
                    <h6 class="fw-bold text-dark mt-1" style="font-size: 13.5px; line-height: 1.3;">Generative AI Transformer Models</h6>
                    <a href="/unistry" class="btn btn-outline-primary btn-sm w-100 mt-2">Learn More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 d-none d-lg-block">
                <div class="card h-100 border rounded-4 shadow-sm overflow-hidden">
                  <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?auto=format&fit=crop&q=80&w=400" alt="Course" class="card-img-top" style="height: 120px; object-fit: cover;">
                  <div class="card-body p-3">
                    <span class="text-primary-blue-light fw-bold" style="font-size: 11px; text-transform: uppercase;">Robotics</span>
                    <h6 class="fw-bold text-dark mt-1" style="font-size: 13.5px; line-height: 1.3;">Robotics Control Systems &amp; Autonomous AI</h6>
                    <a href="/unistry" class="btn btn-outline-primary btn-sm w-100 mt-2">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- PANE 2: MY COURSES -->
        <div class="db-tab-pane" id="pane-my-courses">
          <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
            <h4 class="h5 fw-bold text-dark border-bottom pb-3 mb-3">Enrolled Academic Catalog</h4>
            
            <div class="row g-4">
              <!-- Active Course 1 -->
              <div class="col-md-6">
                <div class="card border rounded-4 shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <div>
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=600" alt="Course" style="height:140px; width:100%; object-fit: cover;">
                    <div class="p-3">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-success-subtle text-success border border-success-subtle">Active</span>
                        <span class="small text-muted">GNC</span>
                      </div>
                      <h5 class="fw-bold text-dark mb-2" style="font-size: 15px;">Full-Stack Web Development &amp; API Design</h5>
                      <p class="small text-muted mb-0">Construct and configure backend REST endpoints, databases, and client loops.</p>
                    </div>
                  </div>
                  <div class="p-3 border-top bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <div class="progress w-70" style="height:5px;">
                        <div class="progress-bar bg-success" id="myCoursesFullStackProgress" style="width: 16%"></div>
                      </div>
                      <span class="small text-muted fw-bold" id="myCoursesFullStackLabel">16%</span>
                    </div>
                    <a href="/learning" class="btn btn-primary-blue btn-sm w-100">Resume study room</a>
                  </div>
                </div>
              </div>

              <!-- Active Course 2 -->
              <div class="col-md-6">
                <div class="card border rounded-4 shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <div>
                    <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80&w=600" alt="Course" style="height:140px; width:100%; object-fit: cover;">
                    <div class="p-3">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-success-subtle text-success border border-success-subtle">Active</span>
                        <span class="small text-muted">GNC</span>
                      </div>
                      <h5 class="fw-bold text-dark mb-2" style="font-size: 15px;">Legal Frameworks and Ethical Guidelines in AI</h5>
                      <p class="small text-muted mb-0">Examine algorithms bias, intellectual copyright parameters, and policy constraints.</p>
                    </div>
                  </div>
                  <div class="p-3 border-top bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <div class="progress w-70" style="height:5px;">
                        <div class="progress-bar bg-success" style="width: 0%"></div>
                      </div>
                      <span class="small text-muted fw-bold">0%</span>
                    </div>
                    <a href="#" class="btn btn-outline-secondary btn-sm w-100 disabled" style="cursor:not-allowed;">Not Started Yet</a>
                  </div>
                </div>
              </div>

              <!-- Completed Course 3 -->
              <div class="col-md-6">
                <div class="card border rounded-4 shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between">
                  <div>
                    <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&q=80&w=600" alt="Course" style="height:140px; width:100%; object-fit: cover;">
                    <div class="p-3">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-secondary text-dark border border-secondary-subtle">Completed</span>
                        <span class="small text-muted">SPbSU</span>
                      </div>
                      <h5 class="fw-bold text-dark mb-2" style="font-size: 15px;">Intro to Python &amp; Software Principles</h5>
                      <p class="small text-muted mb-0">Variables, loop arrays, conditional matrices, and modular software paradigms.</p>
                    </div>
                  </div>
                  <div class="p-3 border-top bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <div class="progress w-70" style="height:5px;">
                        <div class="progress-bar bg-success" style="width: 100%"></div>
                      </div>
                      <span class="small text-muted fw-bold">100%</span>
                    </div>
                    <div class="d-flex gap-2">
                      <button onclick="switchDashboardTab('certificates', event)" class="btn btn-outline-primary btn-sm flex-grow-1">Certificate</button>
                      <a href="#" class="btn btn-outline-secondary btn-sm flex-grow-1">Review</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Upcoming Course 4 -->
              <div class="col-md-6">
                <div class="card border rounded-4 shadow-sm overflow-hidden h-100 d-flex flex-column justify-content-between bg-light-subtle">
                  <div>
                    <img src="https://images.unsplash.com/photo-1516116211223-5c359a36298a?auto=format&fit=crop&q=80&w=600" alt="Course" style="height:140px; width:100%; object-fit: cover; filter: grayscale(40%);">
                    <div class="p-3 text-opacity-50">
                      <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle">Upcoming</span>
                        <span class="small text-muted">SPbSU</span>
                      </div>
                      <h5 class="fw-bold text-dark mb-2" style="font-size: 15px;">Algorithms and Complex Data Structures</h5>
                      <p class="small text-muted mb-0">Tree traversals, search complexities, sorting matrices, and dynamic programming paths.</p>
                    </div>
                  </div>
                  <div class="p-3 border-top bg-light">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <span class="small text-muted">Starts: Aug 15, 2026</span>
                    </div>
                    <button class="btn btn-outline-secondary btn-sm w-100" disabled>Pending Pre-req check</button>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

        <!-- PANE 3: CONTINUE LEARNING -->
        <div class="db-tab-pane" id="pane-continue-learning">
          <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
            <h4 class="h5 fw-bold text-dark border-bottom pb-3 mb-4">Continue Learning</h4>
            
            <div class="p-4 rounded-4 border bg-light d-flex flex-column flex-md-row gap-4 align-items-center">
              <div style="width: 120px; height: 120px; border-radius: 8px; overflow: hidden; flex-shrink: 0;" class="shadow-sm">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&q=80&w=300" alt="Full Stack Code" class="w-100 h-100 object-fit-cover">
              </div>
              <div class="flex-grow-1 text-center text-md-start">
                <span class="badge bg-primary-blue-dark text-white mb-2">Guru Nanak College (Autonomous)</span>
                <h5 class="fw-bold text-dark mb-2">Full-Stack Web Development &amp; API Design</h5>
                <p class="small text-secondary mb-3">You completed Module 1: Lesson 1 ("Internet Protocols &amp; Web Handshakes"). Resume your studies in Lesson 2 to study server configurations.</p>
                <div class="d-flex flex-column flex-sm-row align-items-center gap-3">
                  <div class="flex-grow-1 w-100">
                    <div class="progress mb-1" style="height: 6px;">
                      <div class="progress-bar bg-success" id="contLearnProgressBar" style="width: 16%"></div>
                    </div>
                    <span class="small text-muted"><strong id="contLearnPercentLabel">16%</strong> complete (<span id="contLearnLessonCount">1</span>/6 lessons checked)</span>
                  </div>
                  <a href="/learning" class="btn btn-primary-blue px-4 shadow-sm flex-shrink-0 text-white">Resume Class</a>
                </div>
              </div>
            </div>

            <!-- Notes quick summary -->
            <div class="mt-4 pt-3 border-top">
              <h5 class="h6 fw-bold text-dark mb-3"><i class="bi bi-sticky text-warning me-1"></i> Your Recent Notes Draft</h5>
              <div class="p-3 bg-light rounded-3 border">
                <p class="small text-muted mb-2 font-monospace" id="notesDraftPreview">
                  "No notes saved in your scratchpad yet. Visit the Study Room notes tab to save dynamic auto-saves."
                </p>
                <a href="/learning" class="small text-decoration-none fw-bold"><i class="bi bi-pencil-square"></i> Open notes tab in study room</a>
              </div>
            </div>
          </div>
        </div>

        <!-- PANE 4: CERTIFICATES -->
        <div class="db-tab-pane" id="pane-certificates">
          <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
            <h4 class="h5 fw-bold text-dark border-bottom pb-3 mb-3">Earned Certificates</h4>
            <p class="text-secondary small">These academic credentials are verified under EIFE's Bilateral Higher Education framework.</p>

            <div class="list-group list-group-flush mt-3">
              
              <div class="list-group-item d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center py-4 gap-3">
                <div class="d-flex align-items-center gap-3">
                  <i class="bi bi-award-fill text-warning fs-1"></i>
                  <div>
                    <h6 class="fw-bold text-dark mb-1">Intro to Python &amp; Software Principles</h6>
                    <span class="text-muted small d-block">St. Petersburg State University (Russia)</span>
                    <span class="text-muted small"><i class="bi bi-calendar-check text-success me-1"></i>Credited on June 04, 2026 | ID: <span class="font-monospace">SPbSU-PY-7782</span></span>
                  </div>
                </div>
                <div class="d-flex gap-2 w-100 w-sm-auto mt-2 mt-sm-0">
                  <button class="btn btn-primary-blue btn-sm px-3" onclick="openCertificateModal('Intro to Python &amp; Software Principles', 'St. Petersburg State University', 'SPbSU-PY-7782', 'June 04, 2026')">
                    <i class="bi bi-eye-fill me-1"></i> View
                  </button>
                  <button class="btn btn-outline-secondary btn-sm" onclick="printCertificateMock('Intro to Python &amp; Software Principles', 'St. Petersburg State University')">
                    <i class="bi bi-download"></i> Print
                  </button>
                </div>
              </div>

            </div>

          </div>
        </div>

        <!-- PANE 5: ASSIGNMENTS -->
        <div class="db-tab-pane" id="pane-assignments">
          <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
            <h4 class="h5 fw-bold text-dark border-bottom pb-3 mb-3">Academic Assignments</h4>
            
            <div class="table-responsive">
              <table class="table align-middle table-hover border-top small text-secondary">
                <thead>
                  <tr class="text-dark">
                    <th>Assignment Name</th>
                    <th>Course</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="fw-bold text-dark">JSON Parser Structure</td>
                    <td>Full-Stack Web Dev</td>
                    <td>June 19, 2026</td>
                    <td><span class="badge bg-warning-subtle text-warning-emphasis">Pending</span></td>
                    <td>--</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark">HTTP Request Header Logs</td>
                    <td>Full-Stack Web Dev</td>
                    <td>June 12, 2026</td>
                    <td><span class="badge bg-success-subtle text-success">Submitted</span></td>
                    <td>Pending Grader</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark">Recursive Matrix Loops</td>
                    <td>Intro to Python</td>
                    <td>May 28, 2026</td>
                    <td><span class="badge bg-secondary text-dark">Graded</span></td>
                    <td><strong>98 / 100</strong> (A+)</td>
                  </tr>
                  <tr>
                    <td class="fw-bold text-dark">Class Polymorphism Scope</td>
                    <td>Intro to Python</td>
                    <td>May 15, 2026</td>
                    <td><span class="badge bg-secondary text-dark">Graded</span></td>
                    <td><strong>94 / 100</strong> (A)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- PANE 6: DISCUSSIONS -->
        <div class="db-tab-pane" id="pane-discussions">
          <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
            <h4 class="h5 fw-bold text-dark border-bottom pb-3 mb-3">Your Discussion Threads</h4>
            <p class="text-secondary small">Participate in academic peer groups and post queries.</p>

            <div class="list-group list-group-flush">
              <div class="list-group-item py-3">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <h6 class="fw-bold text-dark mb-0" style="font-size: 14px;">HTTP/2 connection multiplexing and headers</h6>
                  <span class="badge bg-light text-primary border">Full-Stack Web Dev</span>
                </div>
                <p class="small text-muted mb-2">"Is the single TCP connection in HTTP/2 maintained indefinitely, or does it close under idle timeouts?"</p>
                <div class="d-flex justify-content-between align-items-center small text-muted">
                  <span>Likes: <strong>4</strong> | Replies: <strong>1</strong></span>
                  <a href="/learning" class="text-decoration-none">View thread in study room <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- PANE 7: ACADEMIC CALENDAR -->
        <div class="db-tab-pane" id="pane-academic-calendar">
          <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
            <h4 class="h5 fw-bold text-dark border-bottom pb-3 mb-3">Academic Semester Calendar</h4>
            <p class="text-secondary small">Click on any event below for detailed classroom and webinar links.</p>

            <div class="d-flex flex-column gap-3 mt-3">
              <div class="db-cal-event webinar" onclick="showEventDetails('webinar-1')">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <span class="fw-bold text-warning-emphasis">Live QA Class</span>
                  <span class="small text-muted">June 12, 15:00 - 16:30 IST</span>
                </div>
                <h6 class="fw-bold text-dark mb-1">Module-1 API Design &amp; TCP Handshakes Webinar Q&amp;A</h6>
                <p class="small text-muted mb-0">Join Dr. Ramesh Sharma for a live review of headers and binary framing layer. Attendance mandatory.</p>
              </div>

              <div class="db-cal-event" onclick="showEventDetails('lecture-1')">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <span class="fw-bold text-primary">Exchange Lecture</span>
                  <span class="small text-muted">June 15, 10:00 - 11:30 IST</span>
                </div>
                <h6 class="fw-bold text-dark mb-1">Introduction to AI Ethics &amp; Bias Normalization</h6>
                <p class="small text-muted mb-0">Live stream lecture by Guest Lecturer Dr. S. K. Subramanian from Guru Nanak College campus.</p>
              </div>

              <div class="db-cal-event deadline" onclick="showEventDetails('quiz-1')">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <span class="fw-bold text-danger">Exam Deadline</span>
                  <span class="small text-muted">June 18, 23:59 IST</span>
                </div>
                <h6 class="fw-bold text-dark mb-1">Python Scope Variables Online Quiz Deadline</h6>
                <p class="small text-muted mb-0">Multiple choice portal assessment covering loops, module packages, and inheritance scopes.</p>
              </div>

              <div class="db-cal-event deadline" onclick="showEventDetails('assignment-due-1')">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <span class="fw-bold text-danger">Assignment Deadline</span>
                  <span class="small text-muted">June 19, 23:59 IST</span>
                </div>
                <h6 class="fw-bold text-dark mb-1">Web Development Project: JSON Parser Submission</h6>
                <p class="small text-muted mb-0">Submit source zip file containing client JavaScript templates and connection log parsers.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- PANE 8: NOTIFICATIONS -->
        <div class="db-tab-pane" id="pane-notifications">
          <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
            <h4 class="h5 fw-bold text-dark border-bottom pb-3 mb-3">Student Notifications</h4>
            
            <div class="list-group list-group-flush">
              <div class="list-group-item d-flex gap-3 align-items-start py-3">
                <i class="bi bi-unlock-fill text-success fs-4"></i>
                <div>
                  <h6 class="fw-bold text-dark mb-1" style="font-size: 14px;">Lesson 2 Unlocked: HTTP/2 paradigms</h6>
                  <p class="small text-muted mb-1">A new video lesson "Client-Server Paradigms &amp; HTTP/2" is now open for study in Module 1.</p>
                  <span class="text-muted small" style="font-size: 11px;">Today, 10:00 AM</span>
                </div>
              </div>

              <div class="list-group-item d-flex gap-3 align-items-start py-3">
                <i class="bi bi-chat-dots-fill text-primary-blue-light fs-4"></i>
                <div>
                  <h6 class="fw-bold text-dark mb-1" style="font-size: 14px;">New Reply to your Forum post</h6>
                  <p class="small text-muted mb-1">Staff member Pooja Singh posted a reply on your HTTP/2 thread.</p>
                  <span class="text-muted small" style="font-size: 11px;">Yesterday, 4:25 PM</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- PANE 9: PROFILE SETTINGS -->
        <div class="db-tab-pane" id="pane-profile-settings">
          <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
            <h4 class="h5 fw-bold text-dark border-bottom pb-3 mb-4">Profile &amp; Account Settings</h4>
            
            <form id="dbProfileSettingsForm">
              
              <!-- Avatar Upload Mock -->
              <div class="text-center mb-4">
                <div class="db-profile-avatar-wrapper">
                  <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=200" alt="Avatar" id="settingsProfilePreviewImg">
                  <label class="db-avatar-edit-badge" for="avatarUploadInput">
                    <i class="bi bi-camera-fill"></i>
                  </label>
                  <input type="file" id="avatarUploadInput" style="display:none;" accept="image/*">
                </div>
                <span class="text-muted small mt-2 d-block">Change Profile Photo</span>
              </div>

              <div class="row g-3">
                <div class="col-md-6">
                  <label for="dbStudentNameInput" class="form-label small fw-semibold text-muted">First Name</label>
                  <input type="text" class="form-control text-dark" id="dbStudentNameInput" value="Amit" required>
                </div>
                <div class="col-md-6">
                  <label for="dbStudentLastNameInput" class="form-label small fw-semibold text-muted">Last Name</label>
                  <input type="text" class="form-control text-dark" id="dbStudentLastNameInput" value="Kumar" required>
                </div>
                <div class="col-md-6">
                  <label for="dbStudentEmailInput" class="form-label small fw-semibold text-muted">Academic Email</label>
                  <input type="email" class="form-control text-dark" id="dbStudentEmailInput" value="amit.kumar@gurunanakcollege.edu.in" required>
                </div>
                <div class="col-md-6">
                  <label for="dbStudentPhoneInput" class="form-label small fw-semibold text-muted">Contact Phone</label>
                  <input type="tel" class="form-control text-dark" id="dbStudentPhoneInput" value="+91 98765 43210" required>
                </div>
                <div class="col-md-6">
                  <label for="dbStudentCityInput" class="form-label small fw-semibold text-muted">City</label>
                  <input type="text" class="form-control text-dark" id="dbStudentCityInput" value="Chennai" required>
                </div>
                <div class="col-md-6">
                  <label for="dbStudentCountryInput" class="form-label small fw-semibold text-muted">Country</label>
                  <input type="text" class="form-control text-dark" id="dbStudentCountryInput" value="India" required>
                </div>
              </div>

              <div class="mt-4 pt-3 border-top d-flex gap-2 justify-content-end">
                <button type="submit" class="btn btn-primary-blue px-4">Save Changes</button>
                <button type="button" class="btn btn-outline-secondary px-4" onclick="resetProfileSettingsForm()">Reset</button>
              </div>
            </form>
          </div>
        </div>

      </section>
    </div>
  </main>

  <!-- Footer Section -->
  <footer class="pt-5 pb-4 border-top">
    <div class="container">
      <div class="row py-4 text-center text-md-start">
        <div class="col-lg-4 mb-4 mb-lg-0">
          <h5 class="fw-bold mb-3">EIFE Course Portal</h5>
          <p class="text-secondary small" style="max-width: 300px;">
            Bridging international education and academic collaborations between leading institutions of Russia, Europe,
            and India.
          </p>
        </div>
        <div class="col-md-4 mb-4 mb-lg-0 text-md-center">
          <h6 class="fw-bold mb-3 text-white">Bilateral Paths</h6>
          <ul class="list-unstyled d-flex flex-column gap-2 small">
            <li><a href="/spbu">St. Petersburg State University</a></li>
            <li><a href="/gnc">Guru Nanak College (Autonomous)</a></li>
            <li><a href="/unistry">All Course Listings</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4 mb-lg-0 text-md-end text-white">
          <h6 class="fw-bold mb-3 text-white">Contact Support</h6>
          <ul class="list-unstyled d-flex flex-column gap-2 small text-secondary">
            <li>Email: <a href="mailto:contact@eife.org">contact@eife.org</a></li>
            <li>Office Phone: +91-11-40662754</li>
            <li>Address: New Delhi, India</li>
          </ul>
        </div>
      </div>
      <hr class="border-secondary-subtle my-4">
      <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 small text-secondary">
        <span>© 2026 EIFE – All rights reserved.</span>
        <span>Bilateral Higher Education Exchange</span>
      </div>
    </div>
  </footer>

  <!-- Certificate Detail Preview Modal -->
  <div class="modal fade" id="certificateModal" tabindex="-1" aria-labelledby="certificateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content border-0">
        <div class="modal-header border-0 pb-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4 p-md-5">
          <!-- The Certificate Design -->
          <div class="border border-5 border-warning p-4 p-md-5 bg-white text-center shadow-lg position-relative" style="border-style: double !important; outline: 15px solid var(--primary-blue-dark);">
            <div class="mb-3">
              <img src="https://eife.org/wp-content/uploads/2019/05/eife_logo-1.png" alt="EIFE Logo" style="height: 48px; object-fit: contain;">
            </div>
            <span class="text-uppercase tracking-wider fw-bold text-muted small" style="letter-spacing: 0.15em;">Bilateral Higher Education Exchange</span>
            <h2 class="serif-title fw-bold text-primary-blue-dark mt-3 mb-2" style="font-size: 28px;">Certificate of Completion</h2>
            <p class="small text-muted">This credential confirms that the candidate has successfully completed all coursework, assignments, and exams.</p>
            
            <div class="my-4">
              <span class="text-muted d-block small">This is proudly awarded to</span>
              <span class="h4 fw-bold text-dark border-bottom pb-1 px-4 d-inline-block serif-title" id="certModalStudentName">Amit Kumar</span>
            </div>

            <div class="my-3">
              <p class="small text-muted mb-1">for completing the academic catalog curriculum</p>
              <h5 class="fw-bold text-primary-blue-light" id="certModalCourseName">Intro to Python &amp; Software Principles</h5>
              <p class="small text-muted" id="certModalUnivName">St. Petersburg State University</p>
            </div>

            <div class="row mt-5 pt-3 align-items-end g-3 small text-muted">
              <div class="col-4 border-top pt-2">
                <span class="d-block fw-bold text-dark font-monospace" id="certModalId">SPbSU-PY-7782</span>
                <span class="x-small">Verification ID</span>
              </div>
              <div class="col-4">
                <div class="d-inline-block border-bottom pb-1 px-2 mb-2 font-monospace" style="border-style: dotted !important;">
                  <span class="fw-bold text-dark">EIFE Council</span>
                </div>
                <span class="d-block x-small">Bilateral Board Stamp</span>
              </div>
              <div class="col-4 border-top pt-2">
                <span class="d-block fw-bold text-dark" id="certModalDate">June 04, 2026</span>
                <span class="x-small">Award Date</span>
              </div>
            </div>
          </div>
          
          <div class="mt-4 text-center">
            <button class="btn btn-primary-blue px-4" id="certModalPrintBtn"><i class="bi bi-printer-fill me-1"></i> Print Certificate</button>
            <button class="btn btn-outline-secondary px-4 ms-2" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Event Detail Modal -->
  <div class="modal fade" id="eventDetailModal" tabindex="-1" aria-labelledby="eventDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold" id="eventDetailTitle">Classroom Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="p-3 bg-light rounded-3 mb-3 border">
            <span class="text-muted small d-block mb-1">Event Timeline</span>
            <strong class="text-dark d-block" id="eventDetailTime">June 12, 15:00 - 16:30 IST</strong>
          </div>
          <p class="small text-muted" id="eventDetailDescription">Event details will populate dynamically.</p>
          <div class="d-grid gap-2 mt-4" id="eventDetailActionBox">
            <a href="#" target="_blank" class="btn btn-primary-blue"><i class="bi bi-play-btn-fill me-1"></i> Enter Classroom Webinar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JavaScript Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Student Dashboard Logic -->
  <script src="{{ asset('js/dashboard_student.js') }}"></script>
</body>
</html>
