<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Course Details - Bilateral Exchange Portal</title>
  <meta name="description" content="View comprehensive syllabus, credit transfers, levels, and faculty credentials for courses offered under the India-Russia Higher Education MoU.">
  <meta name="keywords" content="Course syllabus, credit equivalency, international certification, academic exchange">
  <meta name="author" content="EIFE">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        <img src="https://eife.org/wp-content/uploads/2019/05/eife_logo-1.png" alt="EIFE Logo"
          class="d-inline-block align-top">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
        aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center gap-2">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/#featured-universities">Universities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/unistry">Course Catalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard_student">My Learning</a>
          </li>
          <li class="nav-item ms-lg-2">
            @auth
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
              @csrf
              <button type="submit" class="btn btn-warning px-3 text-dark fw-semibold"><i class="bi bi-box-arrow-right me-1"></i> Logout</button>
            </form>
            @else
            <a class="btn btn-warning px-3 text-dark fw-semibold" href="/login?tab=register"><i class="bi bi-person-plus-fill me-1"></i> Register</a>
            @endauth
          </li>
          <li class="nav-item ms-lg-3">
            <a class="btn btn-primary-blue px-4" href="/unistry">Browse Courses</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Breadcrumbs -->
  <div class="bg-light border-bottom py-2">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 small">
          <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
          <li class="breadcrumb-item"><a href="/unistry" class="text-decoration-none">Course Catalog</a></li>
          <li class="breadcrumb-item active" id="breadcrumb-course-title" aria-current="page">{{ $course->title }}</li>
        </ol>
      </nav>
    </div>
  </div>

  <header class="hero-course-detail" id="course-hero">
    <div class="container">
      <div id="course-hero-content" class="row align-items-center g-4">
        <div class="col-lg-8">
          <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-semibold mb-3">{{ $course->category }}</span>
          <h1 class="display-5 fw-extrabold text-white mb-3">{{ $course->title }}</h1>

          <div class="d-flex align-items-center gap-3 mb-4">
            <div class="univ-logo-box-sm">
              <img src="{{ $course->univ_logo }}" alt="{{ $course->univ_name }} Logo">
            </div>
            <div>
              <span class="text-white-50 small d-block">Offered by</span>
              <span class="fw-semibold text-white">{{ $course->univ_name }}</span>
            </div>
          </div>

          <p class="lead text-light mb-4">{{ $course->desc }}</p>

          <div class="d-flex gap-3 flex-wrap">
            <a href="/login?tab=register" class="btn btn-warning btn-glow-gold px-4 py-2.5 fw-semibold text-dark"><i class="bi bi-person-plus-fill me-1"></i> Register to Enroll</a>
            <button class="btn btn-outline-light px-4 py-2.5" onclick="openCourseInquiry()"><i class="bi bi-envelope-fill me-1"></i> Get Course Info</button>
          </div>
        </div>

        <div class="col-lg-4 text-center">
          <div class="position-relative d-inline-block rounded-3 overflow-hidden shadow-lg border border-light border-opacity-25" style="max-width: 380px; width: 100%;">
            <img src="{{ $course->thumbnail }}" alt="{{ $course->title }}" class="img-fluid w-100 object-fit-cover" style="height: 220px;">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Course Content -->
  <main class="container py-5">
    <div class="row" id="course-main-content">
      
      <!-- Left Column: Details, Syllabus, Faculty -->
      <div class="col-lg-8 pe-lg-4">
        
        <section class="bg-white p-4 rounded-4 shadow-sm border mb-4">
          <h2 class="h4 fw-bold text-dark border-bottom pb-2 mb-3">About this Course</h2>
          <p class="text-secondary mb-0" style="line-height: 1.7;">{{ $fullDesc }}</p>
        </section>

        <section class="bg-white p-4 rounded-4 shadow-sm border mb-4">
          <h2 class="h4 fw-bold text-dark border-bottom pb-2 mb-3">What You Will Learn</h2>
          <div class="row g-2 mt-2">
            @foreach($takeaways as $item)
            <div class="col-md-6">
              <div class="check-list-item">
                <i class="bi bi-check-circle-fill"></i>
                <span class="small text-secondary">{{ $item }}</span>
              </div>
            </div>
            @endforeach
          </div>
        </section>

        <section class="bg-white p-4 rounded-4 shadow-sm border mb-4">
          <h2 class="h4 fw-bold text-dark border-bottom pb-2 mb-3">Syllabus & Course Curriculum</h2>
          <p class="text-secondary small mb-4">This bilateral course syllabus is designed in alignment with standard academic credit policies.</p>
          <div class="accordion" id="syllabus-accordion">
            @foreach($syllabus as $index => $module)
            <div class="accordion-item border rounded-3 mb-2 overflow-hidden shadow-sm">
              <h3 class="accordion-header">
                <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }} fw-semibold text-dark py-3" type="button"
                  data-bs-toggle="collapse" data-bs-target="#collapse-module-{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}">
                  <span class="badge bg-primary-blue-dark text-white me-2">Module {{ $index + 1 }}</span> {{ $module['title'] }}
                </button>
              </h3>
              <div id="collapse-module-{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#syllabus-accordion">
                <div class="accordion-body text-secondary small bg-light-subtle" style="line-height: 1.6;">
                  {{ $module['details'] }}
                  <div class="mt-2 pt-2 border-top border-light-subtle d-flex justify-content-between align-items-center">
                    <span><i class="bi bi-clock-fill me-1"></i> Est: {{ $module['hours'] }} hrs</span>
                    <span><i class="bi bi-check-square me-1"></i> Practical Labs Included</span>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </section>

        <section class="bg-white p-4 rounded-4 shadow-sm border mb-4">
          <h2 class="h4 fw-bold text-dark border-bottom pb-2 mb-3">Meet the Instructors</h2>
          <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start gap-4 pt-2">
            <img src="{{ $instructor['avatar'] }}" alt="{{ $instructor['name'] }}" class="instructor-avatar-detail">
            <div>
              <h3 class="h5 fw-bold text-dark mb-1">{{ $instructor['name'] }}</h3>
              <p class="text-muted small mb-2">{{ $instructor['credentials'] }}</p>
              <p class="text-secondary mb-0 small" style="line-height: 1.6;">{{ $instructor['bio'] }}</p>
            </div>
          </div>
        </section>

      </div>

      <!-- Right Column: Sidebar Stats, Inquiry Form, MoU Alerts -->
      <aside class="col-lg-4">
        
        <!-- Key Stats Card -->
        <div class="course-details-sidebar p-4 mb-4">
          <h3 class="h5 fw-bold text-dark border-bottom pb-2 mb-3">Course Overview</h3>
          
          <div class="metric-row">
            <span class="text-muted"><i class="bi bi-clock me-2"></i>Duration</span>
            <strong class="text-dark">{{ $duration }}</strong>
          </div>
          <div class="metric-row">
            <span class="text-muted"><i class="bi bi-award me-2"></i>Credits</span>
            <strong class="text-dark">{{ $credits }}</strong>
          </div>
          <div class="metric-row">
            <span class="text-muted"><i class="bi bi-translate me-2"></i>Language</span>
            <strong class="text-dark">{{ $course->language }}</strong>
          </div>
          <div class="metric-row">
            <span class="text-muted"><i class="bi bi-bar-chart me-2"></i>Level</span>
            <strong class="text-dark">{{ $level }}</strong>
          </div>
          <div class="metric-row">
            <span class="text-muted"><i class="bi bi-tags me-2"></i>Certification</span>
            <strong class="text-dark">{{ $course->type }}</strong>
          </div>
          <div class="metric-row">
            <span class="text-muted"><i class="bi bi-calendar-event me-2"></i>Start Date</span>
            <strong class="text-dark">{{ $course->start_date->format('M d, Y') }}</strong>
          </div>

          <div class="mt-4 pt-2">
            <a href="/login?tab=register" class="btn btn-warning w-100 py-2.5 fw-semibold text-dark mb-2">Enroll in Course</a>
            <button class="btn btn-outline-primary btn-sm w-100" onclick="openCourseInquiry()">Request Information</button>
          </div>
        </div>

        <!-- MoU Credits Info Card -->
        <div class="card border-0 bg-primary-blue-dark text-white p-4 rounded-4 shadow-sm mb-4">
          <h4 class="h5 fw-bold text-warning mb-2"><i class="bi bi-patch-check-fill me-2"></i>MoU Validated Path</h4>
          <p class="small text-white-50 mb-0 text-start" style="line-height: 1.6;">
            Under the Russia-India Academic Exchange Alliance, courses completed with a passing grade qualify for automatic credit transfers. Verified transcripts are sent directly from the offering institution.
          </p>
        </div>

        <!-- Inquiry Form Card -->
        <div class="bg-white p-4 rounded-4 shadow-sm border" id="sidebar-inquiry-box">
          <h3 class="h5 fw-bold text-dark mb-2">Course Inquiry</h3>
          <p class="small text-muted mb-3">Have questions about credits or deadlines? Send a message directly to admissions.</p>
          
          <div id="sidebar-inquiry-success" class="alert alert-success small mb-3" style="display:none;" role="alert">
            <i class="bi bi-check-circle-fill me-1"></i> Inquiry sent! We'll reply within 24 hours.
          </div>

          <form id="sidebar-inquiry-form">
            <div class="mb-2.5">
              <input type="text" class="form-control form-control-sm" id="inquiryName" placeholder="Full Name" required>
            </div>
            <div class="mt-2 mb-2.5">
              <input type="email" class="form-control form-control-sm" id="inquiryEmail" placeholder="Academic Email" required>
            </div>
            <div class="mt-2 mb-3">
              <textarea class="form-control form-control-sm" id="inquiryMessage" rows="3" placeholder="Your questions..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary-blue btn-sm w-100 py-2">Submit Inquiry</button>
          </form>
        </div>

      </aside>

    </div>
  </main>

  <!-- Admission Inquiry Modal -->
  <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 shadow-lg">
        <div class="modal-header bg-primary-blue-dark text-white">
          <h5 class="modal-title fw-bold" id="applyModalLabel">Course Registration Request</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <div id="modal-apply-success" class="alert alert-success mb-3" style="display:none;" role="alert">
            <i class="bi bi-check-circle-fill text-success me-2"></i>Inquiry successfully sent! Our registrar will email details.
          </div>
          <form id="modal-apply-form">
            <div class="mb-3">
              <label for="modalCourseInput" class="form-label small fw-semibold text-muted">Course Name</label>
              <input type="text" class="form-control" id="modalCourseInput" readonly>
            </div>
            <div class="mb-3">
              <label for="modalNameInput" class="form-label small fw-semibold text-muted">Full Name</label>
              <input type="text" class="form-control" id="modalNameInput" required placeholder="John Doe">
            </div>
            <div class="mb-3">
              <label for="modalEmailInput" class="form-label small fw-semibold text-muted">Academic Email</label>
              <input type="email" class="form-control" id="modalEmailInput" required placeholder="john@uni.edu">
            </div>
            <div class="mb-3">
              <label for="modalPhoneInput" class="form-label small fw-semibold text-muted">Phone Number</label>
              <input type="tel" class="form-control" id="modalPhoneInput" required placeholder="+91 99999 99999">
            </div>
            <button type="submit" class="btn btn-primary-blue w-100 py-2.5">Submit Application Inquiry</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer class="pt-5 pb-4 border-top mt-5 bg-white">
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
          <h6 class="fw-bold mb-3 text-dark">Bilateral Paths</h6>
          <ul class="list-unstyled d-flex flex-column gap-2 small">
            <li><a href="/spbu" class="text-decoration-none text-secondary">St. Petersburg State University</a></li>
            <li><a href="/gnc" class="text-decoration-none text-secondary">Guru Nanak College (Autonomous)</a></li>
            <li><a href="/unistry" class="text-decoration-none text-secondary">All Course Listings</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4 mb-lg-0 text-md-end">
          <h6 class="fw-bold mb-3 text-dark">Contact Support</h6>
          <ul class="list-unstyled d-flex flex-column gap-2 small text-secondary">
            <li>Email: <a href="mailto:contact@eife.org" class="text-decoration-none text-secondary">contact@eife.org</a></li>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- Modal & inquiry form handlers only -->
  <script>
    // Pre-fill modal with course title
    function openCourseInquiry() {
      const courseInput = document.getElementById('modalCourseInput');
      if (courseInput) courseInput.value = '{{ addslashes($course->title) }}';
      const modalEl = document.getElementById('applyModal');
      if (modalEl) { let m = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl); m.show(); }
    }
    // Sidebar inquiry form
    document.addEventListener('DOMContentLoaded', () => {
      const form = document.getElementById('sidebar-inquiry-form');
      if (form) form.addEventListener('submit', e => {
        e.preventDefault();
        const s = document.getElementById('sidebar-inquiry-success');
        if (s) { s.style.display = 'block'; form.reset(); setTimeout(() => s.style.display = 'none', 4000); }
      });
      const modal = document.getElementById('modal-apply-form');
      if (modal) modal.addEventListener('submit', e => {
        e.preventDefault();
        const s = document.getElementById('modal-apply-success');
        if (s) { s.style.display = 'block'; modal.reset(); setTimeout(() => { s.style.display = 'none'; bootstrap.Modal.getInstance(document.getElementById('applyModal'))?.hide(); }, 2000); }
      });
    });
  </script>
</body>

</html>
