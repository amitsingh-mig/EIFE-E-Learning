<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Academic Course Catalog - Bilateral Portal</title>
  <meta name="description"
    content="Search and filter academic courses offered by partner universities. Filter by university, language, course type, and specific computer science, AI, machine learning sub-subjects.">
  <meta name="keywords"
    content="Course catalog, OpenEdu course directory, Academic filters, AI courses, Computer science classes">
  <meta name="author" content="EIFE">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
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

  <!-- Minimal Hero Header -->
  <header class="bg-white border-bottom py-4 mb-4">
    <div class="container">
      <h1 class="h3 fw-bold text-dark mb-1">Academic Program Directory</h1>
      <p class="text-secondary mb-0 small">Filter courses by university guidelines, language choices, or specific
        technology sub-subjects.</p>
    </div>
  </header>

  <!-- Main Sidebar Layout (3/9 grid) -->
  <main class="container py-3">
    <div class="row">

      <!-- Left Sidebar: Filters Column (col-lg-3) -->
      <aside class="col-lg-3">
        <!-- Mobile Filter Toggle Bar -->
        <button class="btn btn-primary-blue w-100 d-lg-none mb-3 d-flex justify-content-between align-items-center"
          type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-expanded="false"
          aria-controls="sidebarCollapse">
          <span><i class="bi bi-search me-2"></i>Toggle Catalog Filters</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-chevron-expand" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 2.707 2.354 8.354a.5.5 0 1 1-.708-.708zM7.646 8.354a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 13.293l-5.646-5.647a.5.5 0 0 1-.708-.708z" />
          </svg>
        </button>

        <!-- Sidebar wrapper collapsible on mobile -->
        <div class="collapse d-lg-block" id="sidebarCollapse">
          <div class="sidebar-wrapper">
            <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
              <h2 class="sidebar-title mb-0" style="border-bottom:none; padding-bottom:0; font-size: 18px;">Catalog
                Filters</h2>
              <a href="/unistry" class="btn btn-link btn-sm text-decoration-none text-danger p-0 fw-semibold"
                style="font-size:12px; font-family:inherit;">Clear All</a>
            </div>

            <form id="catalog-filter-form" method="GET" action="/unistry">
            <!-- Keyword Search -->
            <div class="sidebar-search-box">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
              <input type="text" name="search" id="sidebarSearch" placeholder="Search by program keyword..." value="{{ $filters['search'] ?? '' }}">
            </div>

            <!-- University Dropdown -->
            <div class="filter-select-group">
              <label for="filterUniv" class="filter-select-label">Select University</label>
              <select name="univ" id="filterUniv" class="sidebar-select" onchange="this.form.submit()">
                <option value="">All Universities</option>
                @foreach($universities as $u)
                <option value="{{ $u->slug }}" {{ ($filters['univ'] ?? '') === $u->slug ? 'selected' : '' }}>{{ $u->name }}</option>
                @endforeach
              </select>
            </div>

            <!-- Location Accordion Filter -->
            <div class="filter-select-group mb-3">
              <div class="accordion location-filter-accordion" id="locationAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#locationCollapse">
                      Location
                    </button>
                  </h2>
                  <div id="locationCollapse" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                      <div class="accordion" id="subLocationAccordion">
                        <!-- Country -->
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#countryCollapse">
                              Country
                            </button>
                          </h2>
                          <div id="countryCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                              <select id="filterCountry" class="sidebar-select location-filter-select" data-type="country">
                                <option value="all">All Countries</option>
                                <option value="India">India</option>
                                <option value="Russia">Russia</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Belarus">Belarus</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <!-- City -->
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cityCollapse">
                              City
                            </button>
                          </h2>
                          <div id="cityCollapse" class="accordion-collapse collapse">
                            <div class="accordion-body">
                              <select id="filterCity" class="sidebar-select location-filter-select" data-type="city">
                                <option value="all">All Cities</option>
                                <option value="New Delhi">New Delhi</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Moscow">Moscow</option>
                                <option value="Saint Petersburg">Saint Petersburg</option>
                                <option value="Kazan">Kazan</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Course -->
            <div class="filter-select-group">
              <label for="filterCourse" class="filter-select-label">Course</label>
              <select id="filterCourse" class="sidebar-select">
                <option value="all">All Courses</option>
                <option value="it">Information Technology (IT)</option>
                <option value="business-management">Business & Management</option>
                <option value="engineering">Engineering</option>
                <option value="science">Science</option>
                <option value="languages">Languages</option>
              </select>
            </div>

            <!-- Subject -->
            <div class="filter-select-group">
              <label for="filterSubject" class="filter-select-label">Subject</label>
              <select id="filterSubject" class="sidebar-select">
                <option value="all">All Subjects</option>
                <!-- Information Technology -->
                <option value="web-development">Web Development</option>
                <option value="frontend-development">Frontend Development</option>
                <option value="backend-development">Backend Development</option>
                <option value="data-analytics">Data Analytics</option>
                <option value="ai-machine-learning">AI & Machine Learning</option>
                <option value="cloud-computing">Cloud Computing</option>
                <!-- Business & Management -->
                <option value="marketing">Marketing</option>
                <option value="finance">Finance</option>
                <option value="human-resources">Human Resources</option>
                <option value="entrepreneurship">Entrepreneurship</option>
                <option value="project-management">Project Management</option>
                <!-- Engineering -->
                <option value="mechanical">Mechanical</option>
                <option value="civil">Civil</option>
                <option value="electrical">Electrical</option>
                <option value="aerospace">Aerospace</option>
                <option value="robotics">Robotics</option>
                <!-- Science -->
                <option value="physics">Physics</option>
                <option value="chemistry">Chemistry</option>
                <option value="biology">Biology</option>
                <option value="mathematics">Mathematics</option>
                <!-- Languages -->
                <option value="english">English</option>
                <option value="russian">Russian</option>
                <option value="french">French</option>
                <option value="german">German</option>
                <option value="spanish">Spanish</option>
              </select>
            </div>

            <!-- Language Selector -->
            <div class="filter-select-group">
              <label for="filterLang" class="filter-select-label">Instruction Language</label>
              <select name="lang" id="filterLang" class="sidebar-select" onchange="this.form.submit()">
                <option value="">All Languages</option>
                <option value="English" {{ ($filters['lang'] ?? '') === 'English' ? 'selected' : '' }}>English</option>
                <option value="Russian" {{ ($filters['lang'] ?? '') === 'Russian' ? 'selected' : '' }}>Russian</option>
              </select>
            </div>

            <!-- Course Type Selector -->
            <div class="filter-select-group">
              <label for="filterType" class="filter-select-label">Program Certification</label>
              <select name="type" id="filterType" class="sidebar-select" onchange="this.form.submit()">
                <option value="">All Certification Types</option>
                <option value="Free Audit" {{ ($filters['type'] ?? '') === 'Free Audit' ? 'selected' : '' }}>Free Audit Path</option>
                <option value="Verified Certificate" {{ ($filters['type'] ?? '') === 'Verified Certificate' ? 'selected' : '' }}>Verified Certificate</option>
                <option value="Professional Specialization" {{ ($filters['type'] ?? '') === 'Professional Specialization' ? 'selected' : '' }}>Specialization Track</option>
              </select>
            </div>

            <!-- Sorting Selector -->
            <div class="filter-select-group mb-3">
              <label for="filterSort" class="filter-select-label">Sort Listing</label>
              <select name="sort" id="filterSort" class="sidebar-select" onchange="this.form.submit()">
                <option value="default">Default Relevance</option>
                <option value="title-asc"  {{ ($filters['sort'] ?? '') === 'title-asc'  ? 'selected' : '' }}>Course Title (A - Z)</option>
                <option value="title-desc" {{ ($filters['sort'] ?? '') === 'title-desc' ? 'selected' : '' }}>Course Title (Z - A)</option>
                <option value="start-asc"  {{ ($filters['sort'] ?? '') === 'start-asc'  ? 'selected' : '' }}>Start Date (Earliest)</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary-blue w-100 btn-sm mb-2">Apply Filters</button>
            <a href="/unistry" class="btn btn-outline-secondary w-100 btn-sm" id="clearFiltersBtnBottom">Clear All</a>
            </form> 
      </aside>

      <!-- Right Panel: Course Cards & Pagination (col-lg-9) -->
      <section class="col-lg-9 ps-lg-4">
        <div id="catalog-section-anchor"></div>

        <!-- selected match header -->
        <div class="d-flex justify-content-between align-items-center mb-4 bg-white p-3 rounded-3 shadow-sm border">
          <span class="fw-bold text-dark h6 mb-0" id="catalog-count">{{ $courses->total() }} courses found</span>
          <span class="text-secondary small">Page {{ $courses->currentPage() }} of {{ $courses->lastPage() }}</span>
        </div>

        <!-- Course Cards Layout Grid -->
        <div class="row" id="course-catalog-grid">
          @forelse($courses as $course)
          <div class="col-md-6 col-lg-4 mb-4 animate-fade-in">
            <div class="course-card">
              <div class="course-thumbnail">
                <img src="{{ $course->thumbnail }}" alt="{{ $course->title }}">
                <span class="course-field-badge">{{ $course->category }}</span>
              </div>
              <div class="course-body">
                <div class="course-univ-name">
                  <img class="course-univ-logo" src="{{ $course->univ_logo }}" alt="{{ $course->univ_name }}">
                  <span>{{ $course->univ_name }}</span>
                </div>
                <h4 class="course-title">{{ $course->title }}</h4>
                <p class="course-desc">{{ $course->desc }}</p>
                <div class="course-status-bar">
                  <span class="status-indicator {{ $course->status === 'Active' ? 'status-active' : ($course->status === 'Upcoming' ? 'status-upcoming' : 'status-ended') }}">{{ $course->status }}</span>
                  <span class="course-dates">{{ $course->start_date->format('M d, Y') }}</span>
                </div>
              </div>
              <div class="course-footer">
                <a class="btn btn-outline-primary btn-sm w-100" href="/view_course?id={{ $course->slug }}">View Course</a>
              </div>
            </div>
          </div>
          @empty
          <div class="col-12 text-center py-5">
            <i class="bi bi-search text-muted" style="font-size:3rem;"></i>
            <h5 class="mt-3">No Courses Match Your Filters</h5>
            <p class="text-muted">Try clearing some filters or refining your search query.</p>
            <a href="/unistry" class="btn btn-primary-blue btn-sm mt-2">Clear All Filters</a>
          </div>
          @endforelse
        </div>

        <!-- Laravel Pagination -->
        <div class="pagination-custom" id="pagination-controls">
          @if($courses->hasPages())
            {{ $courses->links('pagination::bootstrap-5') }}
          @endif
        </div>
      </section>

    </div>
  </main>

  <!-- Footer Section -->
  <footer class="pt-5 pb-4 border-top mt-5">
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

  <!-- Bootstrap 5 JavaScript Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <!-- No app.js needed — rendering is fully server-side -->
</body>

</html>
