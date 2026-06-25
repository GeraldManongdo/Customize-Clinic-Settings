<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <!-- Meta -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>LifeBridge Medical Clinic | Trusted Healthcare Clinic in the Philippines</title>
    <meta name="description" content="LifeBridge Medical Clinic provides affordable healthcare consultation, online medical appointments, telemedicine services, family healthcare, and trusted doctors in the Philippines.">
    <meta name="keywords" content="clinic appointment system, healthcare clinic Philippines, online medical appointment, affordable healthcare clinic, family clinic, telemedicine services, trusted doctors, healthcare consultation, medical clinic in the Philippines">
    <meta name="author" content="LifeBridge Medical Clinic">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.lifebridgesmedical.ph">

    <!-- Open Graph -->
    <meta property="og:title" content="LifeBridge Medical Clinic">
    <meta property="og:description" content="Modern healthcare clinic in the Philippines offering online appointments, telemedicine services, and family healthcare consultation.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.lifebridgesmedical.ph">
    <meta property="og:image" content="https://images.unsplash.com/photo-1584515933487-779824d29309">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="LifeBridge Medical Clinic">
    <meta name="twitter:description" content="Trusted healthcare clinic with online appointment system and modern medical services in the Philippines.">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1584515933487-779824d29309">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Styles -->

    @vite(['resources/css/tenant_user_page.css'])

  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3">
      <div class="container">
          <a class="navbar-brand" href="#">
              <i class="bi bi-heart-pulse-fill text-primary"></i>
              LifeBridge Medical
          </a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                  <li class="nav-item"><a href="#why-us" class="nav-link">Why Choose Us</a></li>
                  <li class="nav-item"><a href="#testimonials" class="nav-link">Testimonials</a></li>
                  <li class="nav-item"><a href="#blogs" class="nav-link">Blogs</a></li>
                  <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
              </ul>

              <a href="#contact" class="btn btn-primary-custom">
                  Book Appointment
              </a>
          </div>
      </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="pt-5 pb-4">
      <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <h4 class="text-white mb-4">LifeBridge Medical</h4>
                <p>Trusted healthcare clinic in the Philippines providing online medical appointments, telemedicine services, and affordable healthcare consultation.</p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="social-icon">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="#" class="social-icon">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="#" class="social-icon">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-lg-2">
                <h5 class="text-white mb-4">Quick Links</h5>

                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#about">About</a></li>
                    <li class="mb-2"><a href="#services">Services</a></li>
                    <li class="mb-2"><a href="#blogs">Blogs</a></li>
                    <li class="mb-2"><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3">
                <h5 class="text-white mb-4">Services</h5>

                <ul class="list-unstyled">
                    <li class="mb-2">General Consultation</li>
                    <li class="mb-2">Pediatrics</li>
                    <li class="mb-2">Dental Care</li>
                    <li class="mb-2">Telemedicine</li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3">
                <h5 class="text-white mb-4">Contact</h5>

                <ul class="list-unstyled">
                    <li class="mb-2">Quezon City, Philippines</li>
                    <li class="mb-2">+63 917 845 2231</li>
                    <li class="mb-2">inquiries@lifebridgemedical.ph</li>
                </ul>
            </div>

        </div>

        <hr class="border-light my-4">

        <div class="text-center">
            <small>
                © 2026 LifeBridge Medical Clinic. All Rights Reserved.
            </small>
        </div>

      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>