<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>St. Petersburg State University (SPbSU) - Academic Profile</title>
<meta name="description" content="Explore academic programs, history, available courses, and admission procedures for St. Petersburg State University (SPbSU), Russia's oldest higher education institution.">
<meta name="keywords" content="St. Petersburg State University, SPbSU, Study in Russia, Russian language courses, International relations, Computer Science, Law degrees">
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
          <button class="btn btn-primary-blue px-4" onclick="openApplyModal('General Inquiry - SPbSU')">Apply Now</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Banner (St. Petersburg Background) -->
<header class="hero-banner hero-spbu py-5 position-relative">
  <div class="container py-4 text-center text-lg-start">
    <div class="row align-items-center g-4">
      <div class="col-lg-2 text-center text-lg-start">
        <div class="bg-white p-3 rounded-4 shadow-lg d-inline-block" style="width: 120px; height: 120px;">
          <img src="{{ asset('image/logo/St. Petersburg State University logo.png') }}" alt="SPbSU Logo" class="img-fluid h-100 object-fit-contain">
        </div>
      </div>
      <div class="col-lg-7 text-white">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start gap-2 mb-3">
          <span class="badge badge-country d-inline-flex align-items-center">
            <svg class="me-1 rounded-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 6" width="16" height="11">
              <rect fill="#fff" width="9" height="6"/>
              <rect fill="#0039a6" y="2" width="9" height="4"/>
              <rect fill="#d52b1e" y="4" width="9" height="2"/>
            </svg>
            Russia
          </span>
          <span class="badge bg-warning text-dark fw-bold">Oldest University in Russia</span>
        </div>
        <h1 class="display-5 fw-extrabold text-white mb-2 serif-title">St. Petersburg State University</h1>
        <p class="h5 fw-light text-light mb-3">SPbSU (Saint Petersburg State University)</p>
        <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-3 small text-white-50">
          <span><i class="bi bi-geo-alt-fill text-danger me-1"></i>Pushkin / Vasilyevsky Island, St. Petersburg, Russia</span>
          <span><i class="bi bi-calendar3 text-warning me-1"></i>Founded: 1724</span>
        </div>
      </div>
      <div class="col-lg-3 text-center text-lg-end">
        <a href="https://english.spbu.ru" target="_blank" rel="noopener noreferrer" class="btn btn-warning px-4 py-2 fw-semibold">Visit Official Website</a>
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
        <li class="breadcrumb-item active" aria-current="page">St. Petersburg State University</li>
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
        <h2 class="h4 fw-bold text-dark border-bottom pb-3 mb-3">University Overview</h2>
        <p class="lead text-secondary">
          Established in 1724 by Peter the Great, St. Petersburg State University is the oldest institution of higher education in Russia. 
        </p>
        <p class="text-secondary">
          SPbSU is a world-class center for science, education, and culture. It consistently ranks among the top international universities and is recognized as a leader in Russian linguistics, aerospace physics, mathematics, and global diplomacy. With over 20,000 students, including 3,000+ international scholars, the university fosters a diverse academic environment.
        </p>
      </section>

      <!-- History -->
      <section class="bg-white p-4 rounded-4 shadow-sm mb-4" id="history">
        <h2 class="h4 fw-bold text-dark border-bottom pb-3 mb-3">History & Heritage</h2>
        <p class="text-secondary">
          SPbSU has a rich historical lineage. In 1724, Emperor Peter the Great signed a decree establishing both the Academy of Sciences and the University, creating a foundation for research and higher learning in Russia. 
        </p>
        <p class="text-secondary">
          Over its 300 years of legacy, the university has been a crucible for prominent scholars, scientists, and political figures. Renowned figures like Dmitry Mendeleev (creator of the periodic table), Ivan Pavlov (Nobel laureate in physiology), and Alexander Popov (pioneer of radio) studied or taught here, solidifying its place in global history.
        </p>
      </section>

      <!-- Academic Excellence -->
      <section class="bg-white p-4 rounded-4 shadow-sm mb-4" id="excellence">
        <h2 class="h4 fw-bold text-dark border-bottom pb-3 mb-3">Academic Excellence</h2>
        <p class="text-secondary">
          Academic excellence is the cornerstone of SPbSU's global prestige. The university is home to 24 specialized faculties and institutes, offering over 400 degree programs. 
        </p>
        <ul>
          <li class="text-secondary mb-2"><strong>World-Class Faculty:</strong> Guided by academic experts, members of the Russian Academy of Sciences, and visiting international professors.</li>
          <li class="text-secondary mb-2"><strong>MoU & Partnerships:</strong> Extensive academic exchange links with 450+ partner universities across Europe, India, and Asia.</li>
          <li class="text-secondary mb-2"><strong>State-of-the-Art Labs:</strong> Over 25 research resource centers equipped with advanced scientific instrumentation.</li>
        </ul>
      </section>

      <!-- Research & Innovation -->
      <section class="bg-white p-4 rounded-4 shadow-sm mb-4" id="research">
        <h2 class="h4 fw-bold text-dark border-bottom pb-3 mb-3">Research & Innovation</h2>
        <p class="text-secondary">
          SPbSU is recognized as a leading national research center. Key research areas include nanotechnologies, materials science, biotechnology, polar research, cognitive sciences, and artificial intelligence. 
        </p>
        <p class="text-secondary">
          The university actively collaborates with leading high-tech enterprises and research laboratories in India and the European Union, leading breakthrough discoveries and patents in computer science, geology, and pharmaceutical chemistry.
        </p>
      </section>

      <!-- Available Courses Grid Section -->
      <section class="mb-5" id="courses">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
          <h2 class="h4 fw-bold text-dark mb-0">Available Courses</h2>
          <span class="badge bg-primary-blue-light px-3 py-2">5 Popular Programs</span>
        </div>
        <div class="row" id="spbu-courses-grid">
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
          Admissions for international students under the India-Russia Education Exchange program are open for the upcoming academic cycle. Applicants can enroll in either English-medium programs or undergo a preparatory Russian language program.
        </p>
        <div class="row g-3 mt-1">
          <div class="col-md-6">
            <div class="p-3 bg-light rounded-3 border">
              <h4 class="h6 fw-bold text-dark mb-2">How to Apply</h4>
              <p class="small text-muted mb-0">Submit your academic transcripts, English/Russian proficiency documents, and passport copy via our inquiry portal.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-3 bg-light rounded-3 border">
              <h4 class="h6 fw-bold text-dark mb-2">MoU Scholarship Options</h4>
              <p class="small text-muted mb-0">Exchange students from partner Indian institutions can apply for tuition fee waivers and merit-based stipends.</p>
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
            <span class="fact-val">SPbSU / SP</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Founded</span>
            <span class="fact-val">1724 (300+ Years)</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Country</span>
            <span class="fact-val">Russia</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Location</span>
            <span class="fact-val">St. Petersburg</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Admission Email</span>
            <span class="fact-val"><a href="mailto:admission@spbu.ru">admission@spbu.ru</a></span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Phone</span>
            <span class="fact-val">+7 (812) 328-97-01</span>
          </div>
          <div class="fact-item">
            <span class="fact-label">Popular Courses</span>
            <span class="fact-val">5 Listed</span>
          </div>
          
          <div class="mt-4 d-grid gap-2">
            <button class="btn btn-primary-blue py-2.5" onclick="openApplyModal('General Admission - SPbSU')">Apply Now</button>
            <a href="https://english.spbu.ru" target="_blank" rel="noopener noreferrer" class="btn btn-outline-primary py-2.5">Visit Website</a>
            <button id="btn-download-brochure" class="btn btn-outline-secondary py-2.5">Download Brochure</button>
          </div>
        </div>
      </div>
      
      <!-- Sidebar Form Inquiry Block -->
      <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
        <h4 class="h5 fw-bold text-dark mb-3">Direct Inquiry</h4>
        <div id="spbu-inquiry-success" class="alert alert-success-custom mb-3" style="display:none;" role="alert">
          <i class="bi bi-check-circle-fill text-success me-2"></i>Thank you! Your inquiry has been forwarded to the SPbSU International Relations Board.
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
      <p class="text-muted">Glimpses of historical corridors, academic auditoriums, and Vasilyevsky Island campus sites.</p>
    </div>
    <div class="row g-4 gallery-wrapper">
      <div class="col-md-6 col-lg-3">
        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=600" alt="Main Twelve Collegia Building">
      </div>
      <div class="col-md-6 col-lg-3">
        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&q=80&w=600" alt="Academic Auditorium Lecture">
      </div>
      <div class="col-md-6 col-lg-3">
        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&q=80&w=600" alt="Historical Archways Plaza">
      </div>
      <div class="col-md-6 col-lg-3">
        <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?auto=format&fit=crop&q=80&w=600" alt="University Library Hall">
      </div>
    </div>
  </div>
</section>

<!-- Student Life & International Students -->
<section class="container py-5">
  <div class="row g-5">
    <div class="col-lg-6">
      <h3 class="fw-bold mb-4">Student Life</h3>
      <p class="text-secondary">
        St. Petersburg is widely considered Russia's cultural capital, and SPbSU offers a vibrant social ecosystem. Students can participate in athletic clubs, campus theatrical productions, university choirs, and student government committees.
      </p>
      <p class="text-secondary">
        Comfortable dormitory halls are located on Vasilyevsky Island and in Peterhof, equipped with libraries, high-speed internet connections, sports fields, and immediate transit routes to central academic halls.
      </p>
    </div>
    <div class="col-lg-6">
      <h3 class="fw-bold mb-4">International Student Support</h3>
      <p class="text-secondary">
        The international affairs board at SPbSU assists scholars coming from India and elsewhere with visa processing, residence registration, health insurance procurement, and peer mentorship matching.
      </p>
      <p class="text-secondary">
        Orientation weeks are scheduled prior to semester starts, including historical city excursions, basic Russian survival language lessons, and legal registration orientations.
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
            Yes, SPbSU offers several dual-degree and semester programs specifically taught in English, notably in International Relations, Computer Science, and Global Economics. Standard Russian Language courses are conducted in Russian with multilingual assistance.
          </div>
        </div>
      </div>
      
      <!-- FAQ 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            What are the visa requirements for Indian exchange candidates?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-secondary">
            Once your admission exchange is approved under the EIFE MoU framework, SPbSU's international office issues an official academic invitation code. You can use this invitation to apply for a student visa at your nearest Russian Embassy or Consulate.
          </div>
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            What is the duration of exchange programs?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-secondary">
            Bilateral exchange options range from short-term summer internships (2-4 weeks) and semester-long study periods (5 months) to complete graduate degree enrollments (2-4 years).
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
          <li><a href="/spbu">St. Petersburg State University</a></li>
          <li><a href="/gnc">Guru Nanak College (Autonomous)</a></li>
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
