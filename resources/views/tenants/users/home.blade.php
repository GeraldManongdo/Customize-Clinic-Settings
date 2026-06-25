@extends('layouts.tenant_user_layout')

@section('content')

    {{-- Hero Section --}}
    @include('components.tenant_hero_section')

    {{-- About Us Section --}}
    @include('components.tenant_about_section')

    {{-- Services Section --}}
    @include('components.tenant_services_section')

    {{-- Why Us Section --}}
    @include('components.tenant_why_us_section')

    {{-- Testimonials Section --}}
    @include('components.tenant_testimonials_section')

    {{-- FAQ Section --}}
    @include('components.tenant_FAQ_section')

    {{-- Contact Us Section --}}
    @include('components.tenant_contact_section')


@endsection