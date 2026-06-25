@extends('tenants.layout.user_layout')

@section('content')

    @include('components.hero')

<!-- About Section -->

<section id="about" class="section-padding">
    <div class="container">

```
    <div class="section-title text-center mb-5">
        <h2 class="mb-3">About LifeBridge Medical Clinic</h2>
        <p>
            A modern healthcare clinic in the Philippines dedicated to providing accessible, affordable, and patient-centered medical services through innovation and compassionate care.
        </p>
    </div>

    <div class="row g-4 align-items-center">

        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?q=80&w=1200&auto=format&fit=crop"
                 class="img-fluid rounded-4 shadow"
                 alt="Healthcare professionals in a modern clinic">
        </div>

        <div class="col-lg-6">
            <h3 class="mb-3">Healthcare Built Around Patients</h3>

            <p>
                Founded in Quezon City, LifeBridge Medical Clinic was established to improve access to quality healthcare consultation and online medical appointments for busy Filipino families and professionals.
            </p>

            <p>
                We combine experienced doctors, modern facilities, and digital healthcare technology to deliver convenient clinic appointment systems and telemedicine services that prioritize patient comfort and efficiency.
            </p>

            <div class="row g-3 mt-4">

                <div class="col-md-6">
                    <div class="card-custom p-4">
                        <h5>Mission</h5>
                        <p class="mb-0">
                            To provide trusted healthcare consultation through compassionate care, affordable services, and modern medical solutions.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card-custom p-4">
                        <h5>Vision</h5>
                        <p class="mb-0">
                            To become one of the leading healthcare clinics in the Philippines known for innovation and patient satisfaction.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="row g-4 mt-5">

        <div class="col-md-3">
            <div class="card-custom p-4 text-center">
                <i class="bi bi-shield-check fs-1 text-primary"></i>
                <h5 class="mt-3">PHIC Accredited</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-custom p-4 text-center">
                <i class="bi bi-laptop fs-1 text-primary"></i>
                <h5 class="mt-3">Telemedicine</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-custom p-4 text-center">
                <i class="bi bi-heart-pulse fs-1 text-primary"></i>
                <h5 class="mt-3">Patient Care</h5>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card-custom p-4 text-center">
                <i class="bi bi-calendar-check fs-1 text-primary"></i>
                <h5 class="mt-3">Online Booking</h5>
            </div>
        </div>

    </div>

</div>
```

</section>

<!-- Services -->

<section id="services" class="section-padding bg-light">
    <div class="container">

```
    <div class="section-title text-center mb-5">
        <h2 class="mb-3">Healthcare Services</h2>
        <p>
            Comprehensive healthcare consultation and family clinic services designed for modern Filipino patients.
        </p>
    </div>

    <div class="row g-4">

        <!-- Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-custom overflow-hidden">
                <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=1200&auto=format&fit=crop"
                     class="service-img card-img-top"
                     alt="General healthcare consultation">
                <div class="card-body p-4">
                    <h4>General Consultation</h4>
                    <p>
                        Professional healthcare consultation for common illnesses, preventive care, and routine medical checkups.
                    </p>
                    <a href="#contact" class="btn btn-primary-custom btn-sm">
                        Book Appointment
                    </a>
                </div>
            </div>
        </div>

        <!-- Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-custom overflow-hidden">
                <img src="https://images.unsplash.com/photo-1581056771107-24ca5f033842?q=80&w=1200&auto=format&fit=crop"
                     class="service-img card-img-top"
                     alt="Pediatric healthcare services">
                <div class="card-body p-4">
                    <h4>Pediatrics</h4>
                    <p>
                        Child-focused healthcare services including wellness consultations, vaccinations, and developmental assessments.
                    </p>
                    <a href="#contact" class="btn btn-primary-custom btn-sm">
                        Schedule Visit
                    </a>
                </div>
            </div>
        </div>

        <!-- Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-custom overflow-hidden">
                <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?q=80&w=1200&auto=format&fit=crop"
                     class="service-img card-img-top"
                     alt="Dental care clinic">
                <div class="card-body p-4">
                    <h4>Dental Care</h4>
                    <p>
                        Preventive and restorative dental services for individuals and families in a comfortable clinic environment.
                    </p>
                    <a href="#contact" class="btn btn-primary-custom btn-sm">
                        Reserve Dental Visit
                    </a>
                </div>
            </div>
        </div>

        <!-- Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-custom overflow-hidden">
                <img src="https://images.unsplash.com/photo-1579154204601-01588f351e67?q=80&w=1200&auto=format&fit=crop"
                     class="service-img card-img-top"
                     alt="Medical laboratory services">
                <div class="card-body p-4">
                    <h4>Laboratory Services</h4>
                    <p>
                        Fast and accurate laboratory testing including blood chemistry, urinalysis, and routine diagnostics.
                    </p>
                    <a href="#contact" class="btn btn-primary-custom btn-sm">
                        Book Test
                    </a>
                </div>
            </div>
        </div>

        <!-- Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-custom overflow-hidden">
                <img src="https://images.unsplash.com/photo-1631815588090-d4bfec5b1ccb?q=80&w=1200&auto=format&fit=crop"
                     class="service-img card-img-top"
                     alt="Vaccination healthcare service">
                <div class="card-body p-4">
                    <h4>Vaccination</h4>
                    <p>
                        Adult and pediatric vaccination programs administered safely by trained healthcare professionals.
                    </p>
                    <a href="#contact" class="btn btn-primary-custom btn-sm">
                        Get Vaccinated
                    </a>
                </div>
            </div>
        </div>

        <!-- Service -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-custom overflow-hidden">
                <img src="https://images.unsplash.com/photo-1584515979956-d9f6e5d09982?q=80&w=1200&auto=format&fit=crop"
                     class="service-img card-img-top"
                     alt="Telemedicine online medical appointment">
                <div class="card-body p-4">
                    <h4>Telemedicine Services</h4>
                    <p>
                        Convenient online medical appointments with licensed doctors from the comfort of your home.
                    </p>
                    <a href="#contact" class="btn btn-primary-custom btn-sm">
                        Start Consultation
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
```

</section>

<!-- Why Choose Us -->

<section id="why-us" class="section-padding">
    <div class="container">

```
    <div class="section-title text-center mb-5">
        <h2 class="mb-3">Why Choose Our Healthcare Clinic</h2>
        <p>
            We focus on providing modern medical services that prioritize patient comfort, convenience, and healthcare quality.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-6 col-lg-4">
            <div class="card-custom p-4">
                <div class="icon-box mb-4">
                    <i class="bi bi-person-badge"></i>
                </div>
                <h4>Experienced Doctors</h4>
                <p>
                    Our team consists of trusted doctors and healthcare specialists with years of clinical experience.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card-custom p-4">
                <div class="icon-box mb-4">
                    <i class="bi bi-hospital"></i>
                </div>
                <h4>Modern Facilities</h4>
                <p>
                    Clean and advanced healthcare facilities equipped with modern diagnostic technology.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card-custom p-4">
                <div class="icon-box mb-4">
                    <i class="bi bi-calendar2-check"></i>
                </div>
                <h4>Online Appointment System</h4>
                <p>
                    Book healthcare consultations quickly through our clinic appointment system.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card-custom p-4">
                <div class="icon-box mb-4">
                    <i class="bi bi-wallet2"></i>
                </div>
                <h4>Affordable Healthcare</h4>
                <p>
                    Quality healthcare services at competitive rates for Filipino families and professionals.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card-custom p-4">
                <div class="icon-box mb-4">
                    <i class="bi bi-headset"></i>
                </div>
                <h4>Responsive Support</h4>
                <p>
                    Friendly staff available to assist patients with appointments and healthcare concerns.
                </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card-custom p-4">
                <div class="icon-box mb-4">
                    <i class="bi bi-heart"></i>
                </div>
                <h4>Patient-Centered Care</h4>
                <p>
                    Every healthcare consultation is designed around patient comfort and personalized treatment.
                </p>
            </div>
        </div>

    </div>

</div>
```

</section>

<!-- Testimonials -->

<section id="testimonials" class="section-padding bg-light">
    <div class="container">

```
    <div class="section-title text-center mb-5">
        <h2 class="mb-3">Patient Testimonials</h2>
        <p>
            Hear from patients who trust our healthcare clinic for professional medical consultation and convenient online appointments.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-6">
            <div class="card-custom p-4">
                <div class="testimonial-rating mb-3">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>

                <p>
                    “The online medical appointment system was easy to use and the doctor was very professional during my consultation.”
                </p>

                <h5 class="mb-0">Maria Angela Santos</h5>
                <small>Marketing Manager</small>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-custom p-4">
                <div class="testimonial-rating mb-3">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>

                <p>
                    “Their telemedicine services helped me get healthcare consultation quickly without leaving home.”
                </p>

                <h5 class="mb-0">Jonathan Reyes</h5>
                <small>Business Owner</small>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-custom p-4">
                <div class="testimonial-rating mb-3">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>

                <p>
                    “The clinic environment is clean and modern. Booking appointments online was very convenient.”
                </p>

                <h5 class="mb-0">Camille Dela Cruz</h5>
                <small>Teacher</small>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-custom p-4">
                <div class="testimonial-rating mb-3">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>

                <p>
                    “One of the best affordable healthcare clinics we visited in Quezon City. The staff are accommodating and organized.”
                </p>

                <h5 class="mb-0">Roberto Mendoza</h5>
                <small>Retired Engineer</small>
            </div>
        </div>

    </div>
</div>
```

</section>

<!-- FAQ -->

<section class="section-padding faq-section">
    <div class="container">

```
    <div class="section-title text-center mb-5">
        <h2 class="mb-3">Frequently Asked Questions</h2>
        <p>
            Common questions about our healthcare consultation and clinic appointment system.
        </p>
    </div>

    <div class="accordion" id="faqAccordion">

        <div class="accordion-item mb-3 border-0 shadow-sm rounded-4 overflow-hidden">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    How do I book an appointment?
                </button>
            </h2>

            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    You can book through our online medical appointment system or contact our clinic directly.
                </div>
            </div>
        </div>

        <div class="accordion-item mb-3 border-0 shadow-sm rounded-4 overflow-hidden">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Do you accept walk-in patients?
                </button>
            </h2>

            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, walk-in consultations are accepted based on doctor availability.
                </div>
            </div>
        </div>

        <div class="accordion-item mb-3 border-0 shadow-sm rounded-4 overflow-hidden">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Is telemedicine available?
                </button>
            </h2>

            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, our telemedicine services are available for selected consultations and follow-up appointments.
                </div>
            </div>
        </div>

        <div class="accordion-item mb-3 border-0 shadow-sm rounded-4 overflow-hidden">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    What are your clinic hours?
                </button>
            </h2>

            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    We are open Monday to Saturday from 8:00 AM to 8:00 PM.
                </div>
            </div>
        </div>

    </div>
</div>
```

</section>

<!-- Blogs -->

<section id="blogs" class="section-padding bg-light">
    <div class="container">

```
    <div class="section-title text-center mb-5">
        <h2 class="mb-3">Healthcare Articles & Wellness Tips</h2>
        <p>
            Read useful healthcare information and wellness tips from our medical professionals.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-md-6 col-lg-4">
            <div class="card card-custom overflow-hidden">
                <img src="https://images.unsplash.com/photo-1584982751601-97dcc096659c?q=80&w=1200&auto=format&fit=crop"
                     class="blog-img card-img-top"
                     alt="Benefits of telemedicine services">
                <div class="card-body p-4">
                    <h5>Benefits of Online Medical Consultation</h5>
                    <p>
                        Learn how telemedicine services improve healthcare accessibility and convenience.
                    </p>
                    <a href="#" class="btn btn-outline-custom btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-custom overflow-hidden">
                <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?q=80&w=1200&auto=format&fit=crop"
                     class="blog-img card-img-top"
                     alt="Routine healthcare checkup">
                <div class="card-body p-4">
                    <h5>Signs You Need a Health Checkup</h5>
                    <p>
                        Early healthcare consultation can help prevent serious medical conditions.
                    </p>
                    <a href="#" class="btn btn-outline-custom btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card card-custom overflow-hidden">
                <img src="https://images.unsplash.com/photo-1516549655669-df2c6f83e98b?q=80&w=1200&auto=format&fit=crop"
                     class="blog-img card-img-top"
                     alt="Healthy lifestyle tips">
                <div class="card-body p-4">
                    <h5>Healthy Lifestyle Tips for Busy Professionals</h5>
                    <p>
                        Simple habits that support long-term health and overall wellness.
                    </p>
                    <a href="#" class="btn btn-outline-custom btn-sm">Read More</a>
                </div>
            </div>
        </div>

    </div>
</div>
```

</section>

<!-- Contact -->

<section id="contact" class="section-padding">
    <div class="container">

```
    <div class="section-title text-center mb-5">
        <h2 class="mb-3">Contact Our Clinic</h2>
        <p>
            Schedule your healthcare consultation or reach out for inquiries about our medical services.
        </p>
    </div>

    <div class="row g-4">

        <div class="col-lg-7">
            <div class="contact-box p-4 bg-white">
                <form>
                    <div class="row g-3">

                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg" placeholder="Full Name">
                        </div>

                        <div class="col-md-6">
                            <input type="email" class="form-control form-control-lg" placeholder="Email Address">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control form-control-lg" placeholder="Phone Number">
                        </div>

                        <div class="col-md-6">
                            <select class="form-select form-select-lg">
                                <option>Select Service</option>
                                <option>General Consultation</option>
                                <option>Pediatrics</option>
                                <option>Dental Care</option>
                                <option>Telemedicine</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <textarea rows="5" class="form-control form-control-lg" placeholder="Your Message"></textarea>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary-custom">
                                Submit Appointment Request
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="col-lg-5">

            <div class="contact-box p-4 bg-white mb-4">
                <h4 class="mb-4">Clinic Information</h4>

                <p>
                    <i class="bi bi-geo-alt-fill text-primary me-2"></i>
                    Katipunan Avenue, Quezon City, Metro Manila
                </p>

                <p>
                    <i class="bi bi-telephone-fill text-primary me-2"></i>
                    +63 917 845 2231
                </p>

                <p>
                    <i class="bi bi-envelope-fill text-primary me-2"></i>
                    inquiries@lifebridgemedical.ph
                </p>

                <p>
                    <i class="bi bi-clock-fill text-primary me-2"></i>
                    Monday - Saturday | 8:00 AM - 8:00 PM
                </p>
            </div>

            <div class="contact-box overflow-hidden">
                <iframe
                    src="https://maps.google.com/maps?q=Quezon%20City&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="100%"
                    height="280"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    title="Clinic Location">
                </iframe>
            </div>

        </div>

    </div>
</div>
```

</section>
@endsection