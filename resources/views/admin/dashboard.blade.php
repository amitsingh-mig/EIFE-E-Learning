<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard | EIFE Portal</title>
  <meta name="description" content="Administration Panel for Europe India Foundation for Excellence (EIFE) Bilateral Academic Portal.">
  
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-light">

  <!-- Top Admin Navbar -->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top py-3 shadow">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center gap-2" href="/">
        <img src="https://eife.org/wp-content/uploads/2019/05/eife_logo-1.png" alt="EIFE Logo" style="height: 38px; filter: brightness(0) invert(1);">
        <span class="fw-bold tracking-wider fs-5 border-start ps-2 border-secondary">ADMIN PORTAL</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="adminNavbarContent">
        <ul class="navbar-nav ms-auto align-items-center gap-2">
          <li class="nav-item">
            <a class="nav-link text-white-50" href="/"><i class="bi bi-globe me-1"></i> Public Website</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white fw-semibold d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
              <i class="bi bi-person-circle fs-5"></i> Administrator
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
              <li><a class="dropdown-item small" href="#">Account Settings</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item small text-danger" href="/login">Sign Out</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Welcome Section -->
  <header class="py-4 bg-white border-bottom shadow-sm">
    <div class="container">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
        <div>
          <span class="badge bg-danger text-uppercase tracking-wider fw-bold mb-2">Central Management</span>
          <h1 class="h3 fw-bold text-dark mb-1">Administrative Overview</h1>
          <p class="text-secondary small mb-0">System metrics, credit approvals, and bilateral student applications.</p>
        </div>
        <div class="d-flex gap-2">
          <button class="btn btn-primary-blue text-white shadow-sm"><i class="bi bi-file-earmark-spreadsheet me-1"></i> Export Reports</button>
          <button class="btn btn-outline-secondary"><i class="bi bi-arrow-repeat"></i> Sync Registry</button>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Workspace -->
  <main class="container py-4 pb-5">
    
    <!-- Statistics Cards -->
    <div class="row g-3 mb-4">
      <div class="col-md-6 col-lg-3">
        <div class="bg-white p-4 rounded-4 shadow-sm border h-100 d-flex align-items-center gap-3">
          <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-3"><i class="bi bi-people-fill fs-3"></i></div>
          <div>
            <h3 class="h4 fw-bold text-dark mb-0">1,240</h3>
            <span class="text-muted small">Total Candidates</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="bg-white p-4 rounded-4 shadow-sm border h-100 d-flex align-items-center gap-3">
          <div class="bg-success bg-opacity-10 text-success p-3 rounded-3"><i class="bi bi-journal-check fs-3"></i></div>
          <div>
            <h3 class="h4 fw-bold text-dark mb-0">48</h3>
            <span class="text-muted small">Approved Courses</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="bg-white p-4 rounded-4 shadow-sm border h-100 d-flex align-items-center gap-3">
          <div class="bg-warning bg-opacity-10 text-warning p-3 rounded-3"><i class="bi bi-patch-check-fill fs-3"></i></div>
          <div>
            <h3 class="h4 fw-bold text-dark mb-0">312</h3>
            <span class="text-muted small">Transcripts Verified</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="bg-white p-4 rounded-4 shadow-sm border h-100 d-flex align-items-center gap-3">
          <div class="bg-danger bg-opacity-10 text-danger p-3 rounded-3"><i class="bi bi-hourglass-split fs-3"></i></div>
          <div>
            <h3 class="h4 fw-bold text-dark mb-0">15</h3>
            <span class="text-muted small">Pending Inquiries</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Active Tasks and Tables -->
    <div class="row g-4">
      
      <!-- Left Panel: Applications Table (8/12 grid) -->
      <div class="col-lg-8">
        <div class="bg-white p-4 rounded-4 shadow-sm border">
          <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-2">
            <h5 class="fw-bold text-dark mb-0">Recent Bilateral Inquiries</h5>
            <span class="badge bg-light text-dark border">Real-time updates</span>
          </div>
          
          <div class="table-responsive">
            <table class="table align-middle table-hover small text-secondary">
              <thead>
                <tr class="text-dark">
                  <th>Student Name</th>
                  <th>Bilateral Path</th>
                  <th>Proposed Course</th>
                  <th>Submitted At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="fw-bold text-dark">Arun Vignesh</td>
                  <td>GNC &rarr; SPbSU</td>
                  <td>Cyber Security</td>
                  <td>Today, 10:42 AM</td>
                  <td><span class="badge bg-warning text-dark">Under Review</span></td>
                </tr>
                <tr>
                  <td class="fw-bold text-dark">Svetlana Petrova</td>
                  <td>SPbSU &rarr; GNC</td>
                  <td>Full-Stack Web Dev</td>
                  <td>Yesterday</td>
                  <td><span class="badge bg-success text-white">Approved</span></td>
                </tr>
                <tr>
                  <td class="fw-bold text-dark">Rohan Malhotra</td>
                  <td>Chitkara &rarr; SPbSU</td>
                  <td>Aerospace Drones</td>
                  <td>June 19, 2026</td>
                  <td><span class="badge bg-success text-white">Approved</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Right Panel: System Controls (4/12 grid) -->
      <div class="col-lg-4">
        <div class="bg-white p-4 rounded-4 shadow-sm border">
          <h5 class="fw-bold text-dark mb-3">System Actions</h5>
          <div class="d-flex flex-column gap-2.5">
            <button class="btn btn-light border text-start py-2.5 small d-flex justify-content-between align-items-center" onclick="alert('Flushing routing caches...')">
              <span><i class="bi bi-shield-lock me-2 text-danger"></i> Flush System Cache</span>
              <i class="bi bi-chevron-right text-muted"></i>
            </button>
            <button class="btn btn-light border text-start py-2.5 small d-flex justify-content-between align-items-center" onclick="alert('Re-indexing course metrics...')">
              <span><i class="bi bi-search me-2 text-primary"></i> Re-index Course Metrics</span>
              <i class="bi bi-chevron-right text-muted"></i>
            </button>
            <button class="btn btn-light border text-start py-2.5 small d-flex justify-content-between align-items-center" onclick="alert('Dispatching reports to EIFE Board...')">
              <span><i class="bi bi-envelope-check me-2 text-success"></i> Dispatch Board Mailer</span>
              <i class="bi bi-chevron-right text-muted"></i>
            </button>
          </div>
        </div>
      </div>

    </div>

  </main>

  <!-- Footer -->
  <footer class="py-4 border-top bg-white mt-auto text-center small text-secondary">
    <div class="container">
      © 2026 Europe India Foundation for Excellence (EIFE). Bilateral Administration Registry.
    </div>
  </footer>

  <!-- Bootstrap 5 JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
