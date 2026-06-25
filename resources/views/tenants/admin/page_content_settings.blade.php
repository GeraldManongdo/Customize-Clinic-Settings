@extends('layouts.tenant_admin_layout')

@section('content')
<!-- Header -->
    <div class="card-custom p-4 mb-4 d-flex flex-wrap justify-content-between align-items-center">

        <div>
            <h4 class="fw-bold text-dark mb-1">
                Hero Section
            </h4>

            <small>
                Manage homepage hero content and design
            </small>
        </div>

        <button class="btn-primary-custom mt-3 mt-lg-0">
            Save Changes
        </button>

    </div>

    <div class="row g-4">

        <!-- Form -->
        <div class="col-xl-6">

            <div class="card-custom p-4">

                <div class="mb-4">
                    <h5 class="fw-bold text-dark">
                        Hero Content
                    </h5>
                </div>

                <form class="d-grid gap-4">

                    <div>
                        <label class="form-label fw-semibold text-dark">
                            Headline
                        </label>

                        <input type="text"
                               class="form-control"
                               value="Modern Healthcare Made Simple">
                    </div>

                    <div>
                        <label class="form-label fw-semibold text-dark">
                            Description
                        </label>

                        <textarea rows="5"
                                  class="form-control">Provide trusted healthcare consultation, online appointments, and telemedicine services for Filipino families.</textarea>
                    </div>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">
                                Primary Button
                            </label>

                            <input type="text"
                                   class="form-control"
                                   value="Book Appointment">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold text-dark">
                                Secondary Button
                            </label>

                            <input type="text"
                                   class="form-control"
                                   value="Learn More">
                        </div>

                    </div>

                    <div>
                        <label class="form-label fw-semibold text-dark">
                            Hero Status
                        </label>

                        <select class="form-select">
                            <option selected>
                                Active
                            </option>

                            <option>
                                Draft
                            </option>

                            <option>
                                Hidden
                            </option>
                        </select>
                    </div>

                    <div>
                        <label class="form-label fw-semibold text-dark">
                            Background Image
                        </label>

                        <input type="file" class="form-control">
                    </div>

                    <div class="form-check form-switch border rounded-4 p-3">

                        <input class="form-check-input me-3"
                               type="checkbox"
                               checked>

                        <label class="form-check-label">
                            Enable Hero Animation
                        </label>

                    </div>

                </form>

            </div>

        </div>

        <!-- Preview -->
        <div class="col-xl-6">

            <div class="card-custom p-3">

                <div class="d-flex justify-content-between align-items-center mb-3">

                    <h5 class="fw-bold text-dark mb-0">
                        Live Preview
                    </h5>

                    <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">
                        Active
                    </span>

                </div>

                <div class="preview d-flex align-items-center p-5 text-white">

                    <div>

                        <span class="badge bg-primary px-3 py-2 rounded-pill mb-3">
                            Trusted Healthcare Clinic
                        </span>

                        <h1 class="fw-bold display-6 mb-4">
                            Modern Healthcare Made Simple
                        </h1>

                        <p class="mb-4 text-light">
                            Provide trusted healthcare consultation, online appointments, and telemedicine services for Filipino families.
                        </p>

                        <div class="d-flex gap-3 flex-wrap">

                            <button class="btn btn-light rounded-pill px-4">
                                Book Appointment
                            </button>

                            <button class="btn btn-outline-light rounded-pill px-4">
                                Learn More
                            </button>

                        </div>

                        <div class="row g-3 mt-4">

                            <div class="col-4">
                                <div class="bg-white bg-opacity-10 rounded-4 p-3 text-center">
                                    <h5 class="fw-bold mb-1">
                                        15K+
                                    </h5>

                                    <small>
                                        Patients
                                    </small>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="bg-white bg-opacity-10 rounded-4 p-3 text-center">
                                    <h5 class="fw-bold mb-1">
                                        24/7
                                    </h5>

                                    <small>
                                        Support
                                    </small>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="bg-white bg-opacity-10 rounded-4 p-3 text-center">
                                    <h5 class="fw-bold mb-1">
                                        10+
                                    </h5>

                                    <small>
                                        Years
                                    </small>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection