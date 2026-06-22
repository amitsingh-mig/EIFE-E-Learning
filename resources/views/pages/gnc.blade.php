<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Guru Nanak College (Autonomous) - Academic Profile</title>
<meta name="description" content="Explore academic programs, history, available courses, and admission procedures for Guru Nanak College (Autonomous), Chennai, Tamil Nadu, India.">
<meta name="keywords" content="Guru Nanak College, GNC, Chennai college, Study in India, Autonomous college, Commerce, Information Technology, Science programs">
<meta name="author" content="EIFE – Europe India Foundation for Excellence">

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
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
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
          <button class="btn btn-primary-blue px-4" onclick="openApplyModal('General Inquiry - GNC')">Apply Now</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Banner (GNC Background) -->
<header class="hero-banner hero-gnc py-5 position-relative">
  <div class="container py-4 text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-2 text-center text-lg-start">
        <div class="bg-white p-3 rounded-4 shadow-lg d-inline-block" style="width: 120px; height: 120px;">
          <img src="https://gurunanakcollege.edu.in/images-gnc/logo/gnc-logo.png" alt="GNC Logo" class="img-fluid h-100 object-fit-contain">
        </div>
      </div>
      <div class="col-lg-7 text-white">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-2 mb-3">
          <span class="badge badge-country d-inline-flex align-items-center">
            <svg class="me-1 rounded-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3 2" width="16" height="11">
              <rect fill="#FF9933" width="3" height="0.666"/>
              <rect fill="#FFF" y="0.666" width="3" height="0.666"/>
              <rect fill="#138808" y="1.333" width="3" height="0.666"/>
              <circle fill="#000080" cx="1.5" cy="1" r="0.2"/>
            </svg>
            India
          </span>
          <span class="badge bg-warning text-dark fw-bold">NAAC A+ Accredited</span>
        </div>
        <h1 class="display-5 fw-extrabold text-white mb-2 serif-title">Guru Nanak College (Autonomous)</h1>
        <p class="h5 fw-light text-light mb-3">GNC (Affiliated with University of Madras)</p>
        <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3 small text-white-50">
          <span><i class="bi bi-geo-alt-fill text-danger me-1"></i>Velachery, Chennai, Tamil Nadu, India</span>
          <span><i class="bi bi-calendar3 text-warning me-1"></i>Founded: 1971</span>
        </div>
      </div>
      <div class="col-lg-3 text-center text-lg-end">
        <a href="https://gurunanakcollege.edu.in" target="_blank" rel="noopener noreferrer" class="btn btn-warning px-4 py-2 fw-semibold">Visit Official Website</a>
      </div>
    </div>
  </div>
</header>

<!-- Breadcrumb -->
<div class="bg-white border-bottom py-2">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
        <li class="breadcrumb-item"><a href="/#featured-universities" class="text-decoration-none">Universities</a></li>
        <li class="breadcrumb-item active" aria-current="page">Guru Nanak College (Autonomous)</li>
      </ol>
    </nav>
  </div>
</div>

<!-- Main Content & Sidebar Grid (70/30) -->
<main class="container py-5">
  <div class="row">
    <!-- Left Main Content (70%) -->
    <div class="col-lg-8">
      
      <!-- Overview -->
      <section class="bg-white p-4 rounded-4 shadow-sm mb-4" id="overview">
        <h2 class="h4 fw-bold text-dark border-bottom pb-3 mb-3">College Overview</h2>
        <p class="lead text-secondary">
          Guru Nanak College (Autonomous) was established in 1971 by the Guru Nanak Educational Society to commemorate the 500th birth anniversary of Guru Nanak Devji.
        </p>
        <p class="text-secondary">
          Located on a sprawling, lush green 20-acre campus in Velachery, Chennai, GNC is recognized as one of the premier higher education institutions in India. Operating as an autonomous college affiliated with the University of Madras, GNC is accredited with an 'A+' grade by NAAC. The college offers multi-disciplinary programs in Humanities, Sciences, Commerce, and Information Technology, preparing students to excel in a globalized world.
        </p>
      </section>

      <!-- History -->
      <section class="bg-white p-4 rounded-4 shadow-sm mb-4" id="history">
        <h2 class="h4 fw-bold text-dark border-bottom pb-3 mb-3">History & Heritage</h2>
        <p class="text-secondary">
          Guru Nanak College was founded with the noble objective of providing affordable, quality education to all sections of society, in a spirit of service and communal harmony. Guided by the values of equality, dedication, and charity taught by Guru Nanak Devji, the college maintains an inclusive environment.
        </p>
        <p class="text-secondary">
          Over its 50 years of academic journey, GNC has expanded its infrastructure and academic offerings. The institution has mentored thousands of successful alumni, including leading industrial entrepreneurs, software professionals, research scientists, and international sports personalities.
        </p>
      </section>

      <!-- Academic Excellence -->
      <section class="bg-white p-4 rounded-4 shadow-sm mb-4" id="excellence">
        <h2 class="h4 fw-bold text-dark border-bottom pb-3 mb-3">Academic Excellence</h2>
        <p class="text-secondary">
          Academic excellence is the foundation of GNC. The college offers over 30 undergraduate and postgraduate programs, as well as multiple research and doctoral streams.
        </p>
        <ul>
          <li class="text-secondary mb-2"><strong>Autonomous Status:</strong> Flexibility to design contemporary, industry-linked curricula to ensure students are job-ready.</li>
          <li class="text-secondary mb-2"><strong>MoU & Industry Ties:</strong> Partnerships with top organizations, technological research labs, and academic collaboration programs.</li>
          <li class="text-secondary mb-2"><strong>Skilled Faculty:</strong> Driven by qualified educators, researchers, and visiting industrial specialists.</li>
        </ul>
      </section>

      <!-- Research & Innovation -->
      <section class="bg-white p-4 rounded-4 shadow-sm mb-4" id="research">
        <h2 class="h4 fw-bold text-dark border-bottom pb-3 mb-3">Research & Development</h2>
        <p class="text-secondary">
          GNC places heavy emphasis on research, startup creation, and innovation. The campus houses dedicated research resource centers, an active Institution's Innovation Council (IIC), and incubation cells.
        </p>
        <p class="text-secondary">
          Faculty members and students collaborate on research papers, patents, and projects in biotechnology, database security, artificial intelligence, commerce, and environmental chemistry, contributing to the academic development of the country.
        </p>
      </section>

      <!-- Available Courses Grid Section -->
      <section class="mb-5" id="courses">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
          <h2 class="h4 fw-bold text-dark mb-0">Available Courses</h2>
          <span class="badge bg-primary-blue-light px-3 py-2">2 Popular Programs</span>
        </div>
        <div class="row" id="gnc-courses-grid">
          @foreach($courses as $course)
          <div class="col-md-6 col-lg-4 mb-4 animate-fade-in">
            <div class="course-card">
              <div class="course-thumbnail">
                <img src="{{ $course->thumbnail }}" alt="{{ $course->title }}">
                <span class="course-field-badge">{{ $course->category }}</span>
              </div>
              <div class="course-body">
                <h4 class="course-title mb-3" style="min-height:auto;">{{ $course->title }}</h4>
                <p class="course-desc" style="-webkit-line-clamp: 2;">{{ $course->desc }}</p>
              </div>
              <div class="course-footer pt-0 d-flex gap-2">
                <a class="btn btn-outline-primary btn-sm w-50" href="/view_course?id={{ $course->slug }}">View Course</a>
                <button class="btn btn-primary-blue btn-sm w-50" onclick="openApplyModal('{{ addslashes($course->title) }}')">Apply Now</button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>

      <!-- Admission Information -->
      <section class="bg-white p-4 rounded-4 shadow-sm mb-4" id="admission">
        <h2 class="h4 fw-bold text-dark border-bottom pb-3 mb-3">Admission Guidelines</h2>
        <p class="text-secondary">
          Admissions for bilateral exchange programs under the EIFE framework are open for candidate students. Candidates must submit their application transcripts and complete the required criteria of their home institutions.
        </p>
        <div class="row g-3 mt-1">
          <div class="col-md-6">
            <div class="p-3 bg-light rounded-3 border">
              <h4 class="h6 fw-bold text-dark mb-2">How to Apply</h4>
              <p class="small text-muted mb-0">Submit academic transcripts, reference letters, and application requests through our dynamic student portal.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3 bg-light rounded-3 border">
              <h4 class="h6 fw-bold text-dark mb-2">Bilateral Support</h4>
              <p class="small text-muted mb-0">Exchange candidates from partner international colleges can apply for scholarship grants or credit transfer terms.</p>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- Right Sidebar (30%) -->
    <div class="col-lg-4">
      
      <!-- Quick Facts Card -->
      <div class="quick-facts-card mb-4">
        <div class="quick-facts-header d-flex justify-content-between align-items-center">
          <span>Quick Facts</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
          </svg>
        </div>
        <div class="quick-facts-body">
          <div class="fact-item">
            <span class="fact-label">Abbreviation</span>
            <span class="fact-val">GNC / GN</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Founded</span>
            <span class="fact-val">1971 (50+ Years)</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Country</span>
            <span class="fact-val">India</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Location</span>
            <span class="fact-val">Chennai, Tamil Nadu</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Admission Email</span>
            <span class="fact-val"><a href="mailto:principal@gurunanakcollege.edu.in">principal@gurunanakcollege.edu.in</a></span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Phone</span>
            <span class="fact-val">+91-44-22451746</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Popular Courses</span>
            <span class="fact-val">2 Listed</span>
          </div>
          
          <div class="mt-4 d-grid gap-2">
            <button class="btn btn-primary-blue py-2.5" onclick="openApplyModal('General Admission - GNC')">Apply Now</button>
            <a href="https://gurunanakcollege.edu.in" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary py-2.5">Visit Website</a>
            <button id="btn-download-brochure" class="btn btn-outline-secondary py-2.5">Download Brochure</button>
          </div>
        </div>
      </div>
      
      <!-- Sidebar Form Inquiry Block (Uses shared form handler in app.js) -->
      <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
        <h4 class="h5 fw-bold text-dark mb-3">Direct Inquiry</h4>
        <div id="spbu-inquiry-success" class="alert alert-success-custom mb-3" style="display:none;" role="alert">
          <i class="bi bi-check-circle-fill text-success me-2"></i>Thank you! Your inquiry has been forwarded to the GNC Academic Council.
        </div>
        <form id="spbu-inquiry-form">
          <div class="mb-3">
            <label for="sideName" class="form-label small fw-semibold text-muted">Your Name</label>
            <input type="text" id="sideName" class="form-control" required placeholder="Full Name">
          </div>
          <div class="mb-3">
            <label for="sideEmail" class="form-label small fw-semibold text-muted">Your Email</label>
            <input type="email" id="sideEmail" class="form-control" required placeholder="john@example.com">
          </div>
          <div class="mb-3">
            <label for="sideMsg" class="form-label small fw-semibold text-muted">Inquiry Details</label>
            <textarea id="sideMsg" class="form-control" rows="3" required placeholder="Message details..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary-blue w-100 btn-sm py-2">Submit Query</button>
        </form>
      </div>

    </div>
  </div>
</main>

<!-- Campus Gallery -->
<section class="bg-white py-5 border-top border-bottom">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-dark">Campus Gallery</h2>
      <p class="text-muted">Glimpses of green campus pathways, laboratories, and dynamic auditoriums at Velachery.</p>
    </div>
    <div class="row g-4 gallery-wrapper">
      <div class="col-md-6 col-lg-3">
        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=600" alt="Main College Block">
      </div>
      <div class="col-md-6 col-lg-3">
        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&q=80&w=600" alt="Academic Auditorium Seminar">
      </div>
      <div class="col-md-6 col-lg-3">
        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&q=80&w=600" alt="Green Campus Paths">
      </div>
      <div class="col-md-6 col-lg-3">
        <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&q=80&w=600" alt="College Library Block">
      </div>
    </div>
  </div>
</section>

<!-- Student Life & Support -->
<section class="container py-5">
  <div class="row g-5">
    <div class="col-lg-6">
      <h3 class="fw-bold mb-4">Student Life</h3>
      <p class="text-secondary">
        Guru Nanak College offers an active and engaging student campus life. Students participate in social outreach programs (NSS, NCC), technical clubs, theatrical circles, and sports events. 
      </p>
      <p class="text-secondary">
        The Velachery campus is equipped with libraries, multi-purpose gyms, playing grounds, and modern cafeteria blocks. Hostel facilities provide comfortable accommodations with high-speed internet and student study zones.
      </p>
    </div>
    <div class="col-lg-6">
      <h3 class="fw-bold mb-4">Student Support Services</h3>
      <p class="text-secondary">
        Our support office assists candidate exchange students with documentation processing, orientation, hostel allotment, and peer pairing.
      </p>
      <p class="text-secondary">
        Regular onboarding weeks, campus tours, cultural integrations, and guidance programs ensure that international students adjust smoothly to college life in Chennai.
      </p>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section class="bg-light py-5 border-top">
  <div class="container" style="max-width: 800px;">
    <div class="text-center mb-5">
      <h3 class="fw-bold text-dark">Frequently Asked Questions</h3>
      <p class="text-muted">Important details for candidate student exchanges</p>
    </div>
    <div class="accordion" id="faqAccordion">
      
      <!-- FAQ 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Are courses taught in English?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-secondary">
            Yes, Guru Nanak College offers its major undergraduate and postgraduate courses in English medium. Language enhancement support is also provided.
          </div>
        </div>
      </div>
      
      <!-- FAQ 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            What are the visa requirements for international candidates?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-secondary">
            Once a student exchange nomination is approved under the EIFE MoU framework, Guru Nanak College issues an official academic invite which can be used to apply for a student visa at the Indian Embassy.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            What is the duration of academic exchange programs?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-secondary">
            Bilateral exchange options range from short academic study tours (2-3 weeks) to full semester exchange periods (5-6 months).
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Footer Section -->
<footer class="pt-5 pb-4 border-top">
  <div class="container">
    <div class="row py-4">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <h5 class="fw-bold mb-3">EIFE Course Portal</h5>
        <p class="text-secondary small" style="max-width: 300px;">
          Bridging international education and academic collaborations between leading institutions of Russia, Europe, and India.
        </p>
      </div>
      <div class="col-6 col-lg-4 mb-4 mb-lg-0 text-lg-center">
        <h6 class="fw-bold mb-3">Bilateral Paths</h6>
        <ul class="list-unstyled d-flex flex-column gap-2 small">
          <li><a href="/gnc">Guru Nanak College (Autonomous)</a></li>
          <li><a href="/#featured-universities">Partner Directories</a></li>
          <li><a href="/unistry">All Course Listings</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-4 mb-4 mb-lg-0 text-lg-end">
        <h6 class="fw-bold mb-3">Contact Support</h6>
        <ul class="list-unstyled d-flex flex-column gap-2 small">
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

<!-- Apply Form Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="applyModalLabel">Admission Registration Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="modal-apply-success" class="alert alert-success mb-3" style="display:none;" role="alert">
          <i class="bi bi-check-circle-fill text-success me-2"></i>Your registration inquiry has been successfully sent! We will contact you soon.
        </div>
        <form id="modal-apply-form">
          <div class="mb-3">
            <label for="modalCourseInput" class="form-label small fw-semibold text-muted">Selected Program</label>
            <input type="text" class="form-control" id="modalCourseInput" readonly>
          </div>
          <div class="mb-3">
            <label for="modalNameInput" class="form-label small fw-semibold text-muted">Full Name</label>
            <input type="text" class="form-control" id="modalNameInput" required placeholder="John Doe">
          </div>
          <div class="mb-3">
            <label for="modalEmailInput" class="form-label small fw-semibold text-muted">Email Address</label>
            <input type="email" class="form-control" id="modalEmailInput" required placeholder="john@example.com">
          </div>
          <div class="mb-3">
            <label for="modalPhoneInput" class="form-label small fw-semibold text-muted">Phone Number</label>
            <input type="tel" class="form-control" id="modalPhoneInput" required placeholder="+91 99999 99999">
          </div>
          <button type="submit" class="btn btn-primary-blue w-100 py-2.5">Send Application</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap 5 JavaScript Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<!-- UI interactions only (modals, forms) -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
