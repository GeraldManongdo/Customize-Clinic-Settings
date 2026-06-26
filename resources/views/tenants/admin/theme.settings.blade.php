@extends('layouts.tenant_admin_layout')

@section('page_title', 'Theme Settings')

@php
    $breadcrumbs = [
        ['label' => 'Dashboard', 'route' => route('dashboard')],
        ['label' => 'Settings'],
        ['label' => 'Theme Settings'],
    ];
@endphp

@section('content')

@endsection