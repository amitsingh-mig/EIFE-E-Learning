<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>LMS Study Room - Full-Stack Web Development &amp; API Design</title>
  <meta name="description" content="Access course lessons, track your learning progress, download academic study guides, and participate in peer discussions.">
  <meta name="keywords" content="E-Learning, Web development, Study room, Progress tracker, Video lessons, Syllabus, Guru Nanak College">
  <meta name="author" content="EIFE">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <!-- Video.js CSS -->
  <link href="https://vjs.zencdn.net/8.10.0/video-js.css" rel="stylesheet" />

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
              <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=600" alt="Student Profile" class="rounded-circle border" style="width: 32px; height: 32px; object-fit: cover;">
              <span class="d-lg-inline d-none">Amit</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
              <li><a class="dropdown-item small" href="/dashboard_student">My Learning Dashboard</a></li>
              <li><a class="dropdown-item small" href="#">Account Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item small text-danger" href="/login">Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Breadcrumb Navigation & Course Meta Info -->
  <header class="bg-white border-bottom py-4 mb-4">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-2 small">
          <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
          <li class="breadcrumb-item"><a href="/unistry" class="text-decoration-none">Course Catalog</a></li>
          <li class="breadcrumb-item"><a href="/gnc" class="text-decoration-none">Guru Nanak College</a></li>
          <li class="breadcrumb-item active" id="activeLessonName" aria-current="page">Internet Protocols &amp; Web Handshakes</li>
        </ol>
      </nav>

      <div class="row align-items-center g-3 mt-1">
        <div class="col-md-8">
          <h1 class="h3 fw-bold text-dark mb-2" id="currentVideoTitle">Full-Stack Web Development &amp; API Design</h1>
          <div class="d-flex flex-wrap gap-3 align-items-center small text-muted">
            <span><i class="bi bi-person-fill text-primary-blue-light me-1"></i>Instructor: <strong>Dr. Ramesh Sharma</strong></span>
            <span><i class="bi bi-mortarboard-fill text-primary-blue-light me-1"></i>University: <strong>Guru Nanak College (Autonomous)</strong></span>
            <span class="d-flex align-items-center text-warning"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-half me-1"></i><strong class="text-dark ms-1">4.8</strong><span class="text-muted ms-1">(142 ratings)</span></span>
          </div>
        </div>
        <div class="col-md-4 text-md-end">
          <button id="btn-share-course" class="btn btn-outline-secondary btn-sm me-2"><i class="bi bi-share-fill me-1"></i> Share</button>
          <button id="btn-save-course" class="btn btn-outline-primary btn-sm"><i class="bi bi-bookmark me-1"></i> Save Course</button>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Grid Layout -->
  <main class="container py-2">
    <div class="row g-4">
      
      <!-- Left Column: Video and Tabs (8/12 grid) -->
      <section class="col-lg-8">
        
        <!-- Video Player Wrapper -->
        <div class="video-container-wrapper">
          <video id="my-video" class="video-js vjs-matrix vjs-big-play-centered" controls preload="auto" width="640" height="264">
            <source src="https://test-streams.mux.dev/x36xhq/x36xhq.m3u8" type="application/x-mpegURL">
            <p class="vjs-no-js">
              To view this video please enable JavaScript, and consider upgrading to a
              web browser that
              <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
            </p>
          </video>
        </div>

        <!-- Custom LMS Tabs below Player -->
        <nav class="lms-tabs mb-4">
          <div class="nav lms-nav-tabs" role="tablist">
            <button class="nav-link active" data-target="lmsTabOverview" type="button">Overview</button>
            <button class="nav-link" data-target="lmsTabDiscussion" type="button">Discussion</button>
            <button class="nav-link" data-target="lmsTabResources" type="button">Resources</button>
            <button class="nav-link" data-target="lmsTabNotes" type="button">My Notes</button>
            <button class="nav-link" data-target="lmsTabTranscript" type="button">Transcript</button>
          </div>
        </nav>

        <!-- Tabs Content Panes -->
        <div class="tab-content bg-white p-4 rounded-4 shadow-sm border mb-4">
          
          <!-- Pane 1: Overview -->
          <div class="lms-tab-pane" id="lmsTabOverview" style="display:block;">
            <h4 class="h5 fw-bold text-dark mb-3">About this Course</h4>
            <p class="text-secondary small">This course provides a comprehensive pathway to building highly-scalable web applications. Starting with core internet infrastructure protocols and front-end layout paradigms, students will progress to back-end API construction, relational database indexing architectures, and Docker microservices coordination.</p>
            
            <h5 class="h6 fw-bold text-dark mt-4 mb-2">What you'll learn:</h5>
            <div class="row g-2 small text-secondary mb-3">
              <div class="col-md-6 d-flex align-items-center gap-2"><i class="bi bi-check-circle text-success"></i> HTTP/2 connection multiplexing and headers</div>
              <div class="col-md-6 d-flex align-items-center gap-2"><i class="bi bi-check-circle text-success"></i> Flexbox and CSS Grid complex layout flows</div>
              <div class="col-md-6 d-flex align-items-center gap-2"><i class="bi bi-check-circle text-success"></i> Asynchronous REST endpoints using Node.js & Express</div>
              <div class="col-md-6 d-flex align-items-center gap-2"><i class="bi bi-check-circle text-success"></i> Transaction scopes & normalization in relational SQL</div>
            </div>

            <h5 class="h6 fw-bold text-dark mt-4 mb-2">Academic Prerequisites:</h5>
            <p class="text-secondary small">Basic computer literacy and a conceptual understanding of logic loops (e.g. variables, basic conditions, arrays) in Python, JavaScript, or any structural programming language.</p>
          </div>

          <!-- Pane 2: Discussion -->
          <div class="lms-tab-pane" id="lmsTabDiscussion" style="display:none;">
            <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
              <h4 class="h5 fw-bold text-dark mb-0">Study Group Discussion</h4>
              <span class="badge bg-secondary">Bilingual Peer Exchange</span>
            </div>

            <!-- Comment Input Box -->
            <div class="d-flex gap-3 mb-4">
              <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&q=80&w=100" alt="My Profile Avatar" class="comment-avatar">
              <form id="rootCommentForm" class="flex-grow-1">
                <div class="mb-2">
                  <textarea id="rootCommentText" class="form-control text-dark small" rows="2" placeholder="Ask a study question or comment on this lesson..." required></textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-primary-blue btn-sm px-4">Post Comment</button>
                </div>
              </form>
            </div>

            <!-- Comments Feed Container (Rendered Dynamically by learning.js) -->
            <div id="commentsFeed" class="discussion-container"></div>
          </div>

          <!-- Pane 3: Resources -->
          <div class="lms-tab-pane" id="lmsTabResources" style="display:none;">
            <h4 class="h5 fw-bold text-dark mb-3">Downloadable Lesson Resources</h4>
            <p class="text-secondary small">Access PDF syllabus files, textbook extracts, slide sets, and GitHub directories supporting this module.</p>
            
            <div class="list-group list-group-flush mt-3">
              <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                <div class="d-flex align-items-center gap-3">
                  <i class="bi bi-file-earmark-pdf-fill text-danger fs-3"></i>
                  <div>
                    <h6 class="fw-bold mb-1" style="font-size: 14px;">Course Syllabus &amp; Roadmap.pdf</h6>
                    <span class="text-muted small">Academic outline &amp; reference details (1.2 MB)</span>
                  </div>
                </div>
                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i></button>
              </div>

              <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                <div class="d-flex align-items-center gap-3">
                  <i class="bi bi-file-earmark-code-fill text-primary fs-3"></i>
                  <div>
                    <h6 class="fw-bold mb-1" style="font-size: 14px;">Module-1-Codes-Examples.zip</h6>
                    <span class="text-muted small">Javascript &amp; Node server configuration boilerplate (450 KB)</span>
                  </div>
                </div>
                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i></button>
              </div>

              <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                <div class="d-flex align-items-center gap-3">
                  <i class="bi bi-file-earmark-easel-fill text-warning fs-3"></i>
                  <div>
                    <h6 class="fw-bold mb-1" style="font-size: 14px;">Internet-Protocols-Presentation.pptx</h6>
                    <span class="text-muted small">Module Lecture slides (3.8 MB)</span>
                  </div>
                </div>
                <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i></button>
              </div>
            </div>
          </div>

          <!-- Pane 4: Personal Notes -->
          <div class="lms-tab-pane" id="lmsTabNotes" style="display:none;">
            <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
              <div>
                <h4 class="h5 fw-bold text-dark mb-0">Personal Study Scratchpad</h4>
                <p class="text-muted small mb-0">Write notes dynamically while watching. Auto-saves to your local browser.</p>
              </div>
              <button id="clearNotesBtn" class="btn btn-outline-danger btn-sm"><i class="bi bi-trash-fill"></i> Clear</button>
            </div>
            
            <div class="mb-3">
              <textarea id="personalNotesArea" class="form-control text-dark small" rows="8" placeholder="Type your notes here... (e.g. TCP/IP layer 4 controls flow rates, HTTP/2 multiplexes streams on a single TCP connection)"></textarea>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <span class="text-muted small" id="notesSaveStatus">Saved to browser localStorage</span>
              <span class="badge bg-light text-dark border">Auto-Save Active</span>
            </div>
          </div>

          <!-- Pane 5: Transcript -->
          <div class="lms-tab-pane" id="lmsTabTranscript" style="display:none;">
            <h4 class="h5 fw-bold text-dark mb-3">Lesson Audio Transcript</h4>
            <p class="text-secondary small">Read along with the spoken audio in the video player.</p>
            
            <div class="transcript-box border rounded-3 p-3 text-secondary small bg-light" style="max-height: 250px; overflow-y: auto;">
              <p class="mb-2"><span class="fw-bold text-primary-blue-light">[00:05]</span> Hello everyone, and welcome to our first session on Web Architecture and APIs.</p>
              <p class="mb-2"><span class="fw-bold text-primary-blue-light">[01:20]</span> Today, we will study how internet data packages are bundled and transferred between web hosts.</p>
              <p class="mb-2"><span class="fw-bold text-primary-blue-light">[03:15]</span> Under the old HTTP/1.1 protocol, browsers had to spin up multiple TCP connections to fetch assets, which led to a bottlenecks.</p>
              <p class="mb-2"><span class="fw-bold text-primary-blue-light">[05:42]</span> With the integration of HTTP/2 multiplexing, headers compression, and binary framing layer, we can consolidate connections and load assets faster.</p>
            </div>
          </div>

        </div>
      </section>

      <!-- Right Column: Sidebar (4/12 grid) -->
      <aside class="col-lg-4">
        
        <!-- Progress Tracking Card -->
        <div class="lms-progress-card mb-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="h6 fw-bold text-dark uppercase mb-0"><i class="bi bi-graph-up-arrow text-primary-blue-light me-1"></i> Your Course Progress</h4>
            <span class="badge bg-light text-success border fw-bold" id="progressPercentage">0%</span>
          </div>
          <div class="progress mb-3" style="height: 8px;">
            <div id="lmsProgressBar" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="d-flex justify-content-between align-items-center small text-muted">
            <span>Completed Lessons:</span>
            <span class="fw-bold text-dark"><span id="completedCount">0</span> / <span id="totalCount">6</span> Lessons</span>
          </div>
        </div>

        <!-- Course Curriculum Accordion -->
        <div class="curriculum-card mb-4">
          <div class="quick-facts-header py-3 px-4 bg-primary-blue-dark text-white d-flex justify-content-between align-items-center">
            <span class="fw-bold" style="font-size:15px;">Course Curriculum</span>
            <span class="badge bg-warning text-dark font-weight-bold" style="font-size:11px;">6 Lessons</span>
          </div>
          <div class="accordion curriculum-accordion" id="curriculumAccordion">
            <!-- Rendered Dynamically by learning.js -->
          </div>
        </div>

        <!-- Recommended Courses Card -->
        <div class="rec-course-card mb-4">
          <h4 class="h6 fw-bold text-dark mb-3"><i class="bi bi-mortarboard text-primary-blue-light me-1"></i> Recommended for You</h4>
          <div class="rec-course-thumb">
            <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=400" alt="Cyber Security Course">
          </div>
          <h5 class="fw-bold text-dark" style="font-size: 14px; line-height: 1.3;">Ethical Hacking &amp; Penetration Testing</h5>
          <p class="text-secondary small mb-3">Learn reconnaissance tools, SQL injections, and network defense scopes with hands-on practice.</p>
          <a href="/unistry" class="btn btn-outline-primary btn-sm w-100">Browse Catalog</a>
        </div>

      </aside>

    </div>
  </main>

  <!-- Footer Section -->
  <footer id="supportSection" class="pt-5 pb-4 border-top mt-5">
    <div class="container">
      <div class="row py-4 text-center text-md-start">
        <div class="col-lg-4 mb-4 mb-lg-0">
          <h5 class="fw-bold mb-3 text-white">EIFE Course Portal</h5>
          <p class="text-secondary small" style="max-width: 300px;">
            Bridging international education and academic collaborations between leading institutions of Russia, Europe, and India.
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

  <!-- Bootstrap 5 JavaScript Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Video.js Library -->
  <script src="https://vjs.zencdn.net/8.10.0/video.min.js"></script>

  <!-- HLS.js Library -->
  <script src="https://cdn.jsdelivr.net/npm/hls.js@1.5.8/dist/hls.min.js"></script>

  <!-- Custom Learning Script -->
  <script src="{{ asset('js/learning.js') }}"></script>
</body>
</html>
