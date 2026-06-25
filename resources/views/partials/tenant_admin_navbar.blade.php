<aside class="sidebar p-3">
    <small class="text-white-50 text-uppercase fw-semibold d-block mb-3">
        Navigation
    </small>

    <ul class="nav nav-pills flex-column gap-1">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i>
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('appointments.index') }}" class="nav-link {{ request()->routeIs('appointments.*') ? 'active' : '' }}">
                <i class="bi bi-calendar-check me-2"></i>
                Appointments
            </a>
        </li>

        <li>
            <a href="{{ route('patients.index') }}" class="nav-link {{ request()->routeIs('patients.*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i>
                Patients
            </a>
        </li>

        <li>
            <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i>
                Users
            </a>
        </li>

        <li>
            <a href="{{ route('doctors.index') }}" class="nav-link {{ request()->routeIs('doctors.*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i>
                Doctors
            </a>
        </li>

        <!-- Sub Navigation -->
        <li>
            <button class="btn w-100 d-flex justify-content-between align-items-center" data-bs-toggle="collapse" data-bs-target="#managementMenu" >
                <span>
                    <i class="bi bi-folder2-open me-2"></i>
                    Settings
                </span>
                <i class="bi bi-chevron-down small"></i>
            </button>

            <div class="collapse mt-2 sub-nav {{ request()->routeIs('content.settings') || request()->routeIs('theme.settings') ? 'show' : '' }}"" id="managementMenu">
                <ul class="nav flex-column gap-1">
                    <li>
                        <a href="{{ route('content.settings') }}" class="nav-link {{ request()->routeIs('content.settings') ? 'active' : '' }}">
                            Content
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('theme.settings') }}" class="nav-link {{ request()->routeIs('theme.settings') ? 'active' : '' }}">
                            Theme
                        </a>
                    </li>

                </ul>
            </div>
        </li>

    </ul>

</aside>