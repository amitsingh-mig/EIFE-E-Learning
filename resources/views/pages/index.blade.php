<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-Learning - EIFE</title>
  <meta name="description" content="Explore study exchange opportunities, courses, and certifications across premier universities in India and Russia. Connect with global programs in Computer Science, Aerospace Engineering, Law, and Agriculture.">
  <meta name="keywords" content="International student exchange, Study abroad Russia, Study abroad India, EIFE, Higher education bilateral MoU, University courses portal">
  <meta name="author" content="EIFE – Europe India Foundation for Excellence">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- CSS-->
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
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#featured-universities">Universities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/unistry">Course Catalog</a>
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

  <!-- Hero Banner -->
  <header class="hero-banner py-5 mb-5 text-center text-lg-start">
    <div class="container py-4">
      <div class="row align-items-center g-5">
        <div class="col-lg-7 text-white">
          <span class="badge badge-country mb-3">India – Russia Education Alliance</span>
          <h1 class="display-4 fw-extrabold text-white mb-3 serif-title">E-Learning</h1>
          <p class="lead text-light mb-4">
            Discover world-class curricula, certified degrees, and collaborative research opportunities across leading
            institutions in India and Russia.
          </p>
          <div class="d-flex justify-content-center justify-content-lg-start gap-3 flex-wrap">
            <a href="/unistry" class="btn btn-warning px-4 py-2.5 fw-semibold shadow-sm text-dark">Explore Courses</a>
            <a href="/login?tab=register" class="btn btn-warning btn-glow-gold px-4 py-2.5 fw-semibold shadow-sm text-dark"><i class="bi bi-person-plus-fill me-1"></i> Student Registration</a>
            <a href="#featured-universities" class="btn btn-outline-light px-4 py-2.5">Browse Universities</a>
          </div>
        </div>
        <!-- Stats block -->
        <div class="col-lg-5">
          <div class="bg-white p-4 rounded-4 shadow-lg text-dark">
            <h3 class="h5 fw-bold mb-4 text-center border-bottom pb-2">MoU Strategic Metrics</h3>
            <div class="row g-4 text-center">
              <div class="col-6 mb-2">
                <div class="h2 fw-bold text-primary mb-1">7</div>
                <div class="small text-muted text-uppercase fw-semibold">Institutions</div>
              </div>
              <div class="col-6 mb-2">
                <div class="h2 fw-bold text-primary mb-1">2</div>
                <div class="small text-muted text-uppercase fw-semibold">Countries</div>
              </div>
              <div class="col-6">
                <div class="h2 fw-bold text-primary mb-1">40+</div>
                <div class="small text-muted text-uppercase fw-semibold">Courses</div>
              </div>
              <div class="col-6">
                <div class="h2 fw-bold text-primary mb-1">300+</div>
                <div class="small text-muted text-uppercase fw-semibold">Legacy Years</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Featured Universities Grid Section -->
  <section id="featured-universities" class="container py-4 mb-5" aria-labelledby="univ-heading">
    <div class="text-center mb-5">
      <h2 id="univ-heading" class="h1 fw-bold text-dark mb-2">Partner Universities</h2>
      <p class="text-secondary mx-auto" style="max-width: 600px;">Click a university below to open its specific course
        listing or view its complete academic detail profile.</p>
    </div>

    <div class="row" id="univ-grid">
      @foreach($universities as $univ)
      <div class="col-md-6 col-lg-3 mb-4 animate-fade-in">
        <div class="univ-card">
          <div class="univ-card-banner">
            <div class="univ-card-logo-box">
              <img src="{{ $univ->logo }}" alt="{{ $univ->name }} Logo" onerror="this.src='https://via.placeholder.com/60';">
            </div>
          </div>
          <div class="univ-card-body">
            <div>
              <h5 class="card-title text-truncate mb-2">{{ $univ->name }}</h5>
              <p class="card-text text-muted small" style="min-height:60px;">{{ $univ->desc }}</p>
            </div>
            <div class="mt-3">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-light text-dark border d-inline-flex align-items-center">
                  @if($univ->country === 'RU')
                    <svg class="me-1 rounded-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 6" width="16" height="11"><rect fill="#fff" width="9" height="6"/><rect fill="#0039a6" y="2" width="9" height="4"/><rect fill="#d52b1e" y="4" width="9" height="2"/></svg> Russia
                  @else
                    <svg class="me-1 rounded-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" width="16" height="11"><rect fill="#FF9933" width="3" height="0.666"/><rect fill="#FFF" y="0.666" width="3" height="0.666"/><rect fill="#138808" y="1.333" width="3" height="0.666"/><circle fill="#000080" cx="1.5" cy="1" r="0.2"/></svg> India
                  @endif
                </span>
                <span class="small text-muted">Est. {{ $univ->founded }}</span>
              </div>
              <a href="/{{ $univ->url }}" class="btn btn-primary-blue btn-sm w-100">View Course Listing</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- Core Exchange Program Benefits -->
  <section class="bg-light py-5 border-top border-bottom mb-5" aria-labelledby="benefits-heading">
    <div class="container py-4">
      <div class="text-center mb-5">
        <h2 id="benefits-heading" class="h1 fw-bold text-dark">Portal Advantages</h2>
        <p class="text-secondary">Key guidelines supporting academic integration</p>
      </div>

      <div class="row g-4">
        <!-- Benefit 1 -->
        <div class="col-md-4">
          <div class="benefit-card text-center text-md-start h-100">
            <div class="benefit-icon mx-auto mx-md-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-mortarboard" viewBox="0 0 16 16">
                <path
                  d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.135 3.5a.5.5 0 0 0 0 .896L3.13 7.62a1.5 1.5 0 1 0 2.293 1.048L8 7.33l2.577 1.338a1.5 1.5 0 1 0 2.293-1.048l2.433-1.194a.5.5 0 0 0 0-.896zM3.46 6.3l5.54-2.72 5.54 2.72-5.54 2.72z" />
              </svg>
            </div>
            <h3 class="h5 fw-bold mb-2">Bilingual Curriculums</h3>
            <p class="text-secondary small mb-0">Select from English-taught degree courses or apply for preparatory
              Russian language certification terms.</p>
          </div>
        </div>
        <!-- Benefit 2 -->
        <div class="col-md-4">
          <div class="benefit-card text-center text-md-start h-100">
            <div class="benefit-icon mx-auto mx-md-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                <path
                  d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z" />
                <path
                  d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z" />
              </svg>
            </div>
            <h3 class="h5 fw-bold mb-2">MoU Credit Transfer</h3>
            <p class="text-secondary small mb-0">Seamlessly validate study terms and course evaluations between
              participating universities using the EIFE credit standard framework.</p>
          </div>
        </div>
        <!-- Benefit 3 -->
        <div class="col-md-4">
          <div class="benefit-card text-center text-md-start h-100">
            <div class="benefit-icon mx-auto mx-md-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people"
                viewBox="0 0 16 16">
                <path
                  d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.881-.347c-.8-.031-1.555.245-2.244.614C2.395 9.8 2 10.4 2 11c0 .7.3 1.6 1.9 2.1L4 13.007c-.1-.2-.2-.5-.2-.9 0-1.2.7-2.3 2.1-2.822zM4 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2m2 0a2 2 0 1 1-4 0 2 2 0 0 1 4 0" />
              </svg>
            </div>
            <h3 class="h5 fw-bold mb-2">Global Industry Connections</h3>
            <p class="text-secondary small mb-0">Gain access to internships, engineering research labs, and diplomatic
              agencies during or after your exchange program.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Scrolling Partners Marquee -->
  <section class="partners-section " aria-labelledby="marquee-title">
    <div class="container">
      <h2 id="marquee-title" class="partners-hd">Strategic Partners</h2>
      <div class="marquee-container">
        <div class="marquee-wrapper">
          <img src="https://eife.org/wp-content/uploads/2019/05/Carl-Duisberg.png" alt="Carl Duisberg">
          <img src="https://eife.org/wp-content/uploads/2019/05/ccd-1.png" alt="CCD">
          <img src="https://eife.org/wp-content/uploads/2019/05/Compagnons-du-Devoir.png" alt="Compagnons du Devoir">
          <img src="https://eife.org/wp-content/uploads/2019/05/ddu-gky.png" alt="DDU-GKY">
          <img src="https://eife.org/wp-content/uploads/2019/05/eicc_logo.png" alt="EICC">
          <img src="https://eife.org/wp-content/uploads/2019/05/eop-1.png" alt="EOP">
          <img src="https://eife.org/wp-content/uploads/2019/05/jharkhand.png" alt="Jharkhand Govt">
          <img src="https://eife.org/wp-content/uploads/2019/05/jsdms-1.png" alt="JSDMS">
          <img src="https://eife.org/wp-content/uploads/2019/05/Karcher.png" alt="Karcher">
          <img src="https://eife.org/wp-content/uploads/2019/05/La-Fabrique.png" alt="La Fabrique">
          <img src="https://eife.org/wp-content/uploads/2019/05/ld_didactic-1.png" alt="LD Didactic">
          <img src="https://eife.org/wp-content/uploads/2019/05/mig-logo.png" alt="MIG">
          <img src="https://eife.org/wp-content/uploads/2019/05/gnc-1.png" alt="Guru Nanak College">
          <img src="https://eife.org/wp-content/uploads/2019/05/sas.png" alt="SAS">
          <img src="https://eife.org/wp-content/uploads/2019/05/nsdc-1.png" alt="NSDC">
          <img src="https://eife.org/wp-content/uploads/2019/05/oecd-1.png" alt="OECD">
          <img src="https://eife.org/wp-content/uploads/2019/05/ormas.png" alt="ORMAS">
          <img src="https://eife.org/wp-content/uploads/2019/05/uimm-2.png" alt="UIMM">
          <img src="https://eife.org/wp-content/uploads/2019/05/undp-2.png" alt="UNDP">
          <img src="https://eife.org/wp-content/uploads/2019/05/gujrat_govt.png" alt="Gujarat Govt">
        </div>
        <!-- Duplicate for infinite scroll -->
        <div class="marquee-wrapper" aria-hidden="true">
          <img src="https://eife.org/wp-content/uploads/2019/05/Carl-Duisberg.png" alt="Carl Duisberg">
          <img src="https://eife.org/wp-content/uploads/2019/05/ccd-1.png" alt="CCD">
          <img src="https://eife.org/wp-content/uploads/2019/05/Compagnons-du-Devoir.png" alt="Compagnons du Devoir">
          <img src="https://eife.org/wp-content/uploads/2019/05/ddu-gky.png" alt="DDU-GKY">
          <img src="https://eife.org/wp-content/uploads/2019/05/eicc_logo.png" alt="EICC">
          <img src="https://eife.org/wp-content/uploads/2019/05/eop-1.png" alt="EOP">
          <img src="https://eife.org/wp-content/uploads/2019/05/jharkhand.png" alt="Jharkhand Govt">
          <img src="https://eife.org/wp-content/uploads/2019/05/jsdms-1.png" alt="JSDMS">
          <img src="https://eife.org/wp-content/uploads/2019/05/Karcher.png" alt="Karcher">
          <img src="https://eife.org/wp-content/uploads/2019/05/La-Fabrique.png" alt="La Fabrique">
          <img src="https://eife.org/wp-content/uploads/2019/05/ld_didactic-1.png" alt="LD Didactic">
          <img src="https://eife.org/wp-content/uploads/2019/05/mig-logo.png" alt="MIG">
          <img src="https://eife.org/wp-content/uploads/2019/05/gnc-1.png" alt="Guru Nanak College">
          <img src="https://eife.org/wp-content/uploads/2019/05/sas.png" alt="SAS">
          <img src="https://eife.org/wp-content/uploads/2019/05/nsdc-1.png" alt="NSDC">
          <img src="https://eife.org/wp-content/uploads/2019/05/oecd-1.png" alt="OECD">
          <img src="https://eife.org/wp-content/uploads/2019/05/ormas.png" alt="ORMAS">
          <img src="https://eife.org/wp-content/uploads/2019/05/uimm-2.png" alt="UIMM">
          <img src="https://eife.org/wp-content/uploads/2019/05/undp-2.png" alt="UNDP">
          <img src="https://eife.org/wp-content/uploads/2019/05/gujrat_govt.png" alt="Gujarat Govt">
        </div>
      </div>
    </div>
  </section>

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

  <!-- Bootstrap 5 JavaScript Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <!-- UI interactions only (no data arrays) -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
