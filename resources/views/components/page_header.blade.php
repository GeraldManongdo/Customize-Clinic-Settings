@php
    $title = $title ?? 'Dashboard';
    $breadcrumbs = $breadcrumbs ?? null;

    if (!is_array($breadcrumbs)) {
        $breadcrumbs = [
            ['label' => 'Dashboard', 'route' => route('dashboard')],
        ];

        if ($title !== 'Dashboard') {
            $breadcrumbs[] = ['label' => $title];
        }
    }
@endphp

<div class="container-fluid">
    <div class="row mb-2">
        <div class="col">
            <!-- Page Header -->
            <h2 class="fw-bold">{{ $title }}</h2>
        </div>

        <nav aria-label="breadcrumb">
            <!-- Breadcrumb -->
            <ol class="breadcrumb mb-0">
                @foreach ($breadcrumbs as $crumb)
                    @if ($loop->last)
                        <li class="breadcrumb-item active" aria-current="page">{{ $crumb['label'] }}</li>
                    @elseif (!empty($crumb['route']))
                        <li class="breadcrumb-item">
                            <a href="{{ $crumb['route'] }}">{{ $crumb['label'] }}</a>
                        </li>
                    @else
                        <li class="breadcrumb-item">{{ $crumb['label'] }}</li>
                    @endif
                @endforeach
            </ol>
        </nav>
    </div>
</div>