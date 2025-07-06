@extends('admin.layout')

@section('page-title', 'Головна')

@section('content')
    <!-- Statistics Cards -->
    <div class="row g-4 mb-5">
        <div class="col-lg-3 col-md-6">
            <div class="stats-card primary">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3>{{ $stats['call_requests'] }}</h3>
                        <p>Заявок на дзвінок</p>
                    </div>
                    <i class="fas fa-phone stats-icon"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stats-card success">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3>{{ $stats['quote_requests'] }}</h3>
                        <p>Запитів пропозицій</p>
                    </div>
                    <i class="fas fa-file-invoice stats-icon"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stats-card warning">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3>{{ $stats['contact_messages'] }}</h3>
                        <p>Контактних повідомлень</p>
                    </div>
                    <i class="fas fa-envelope stats-icon"></i>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stats-card info">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3>{{ $stats['total_submissions'] }}</h3>
                        <p>Всього звернень</p>
                    </div>
                    <i class="fas fa-chart-line stats-icon"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="row g-4">
        <!-- Recent Call Requests -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-phone me-2"></i>
                        Останні заявки на дзвінок
                    </h5>
                </div>
                <div class="card-body">
                    @if ($recent_submissions['call_requests']->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach ($recent_submissions['call_requests'] as $request)
                                <div class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 fw-semibold">{{ $request->name }}</h6>
                                            <p class="mb-1 text-muted small">
                                                <i class="fas fa-phone me-1"></i>
                                                {{ $request->phone }}
                                            </p>
                                            <small class="text-muted">
                                                <i class="fas fa-clock me-1"></i>
                                                {{ $request->created_at->diffForHumans() }}
                                            </small>
                                        </div>
                                        <span class="badge status-{{ $request->status }}">
                                            {{ ucfirst($request->status) }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="empty-state">
                            <i class="fas fa-phone"></i>
                            <h5>Немає заявок</h5>
                            <p>Поки що немає заявок на дзвінок</p>
                        </div>
                    @endif
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="{{ route('admin.call-requests') }}" class="btn btn-outline-primary btn-sm w-100">
                        <i class="fas fa-arrow-right me-1"></i>
                        Переглянути всі
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Quote Requests -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-file-invoice me-2"></i>
                        Останні запити пропозицій
                    </h5>
                </div>
                <div class="card-body">
                    @if ($recent_submissions['quote_requests']->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach ($recent_submissions['quote_requests'] as $request)
                                <div class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 fw-semibold">{{ $request->name }}</h6>
                                            <p class="mb-1 text-muted small">
                                                <i class="fas fa-envelope me-1"></i>
                                                {{ $request->email }}
                                            </p>
                                            <small class="text-muted">
                                                <i class="fas fa-clock me-1"></i>
                                                {{ $request->created_at->diffForHumans() }}
                                            </small>
                                        </div>
                                        <span class="badge status-{{ $request->status }}">
                                            {{ ucfirst($request->status) }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="empty-state">
                            <i class="fas fa-file-invoice"></i>
                            <h5>Немає запитів</h5>
                            <p>Поки що немає запитів пропозицій</p>
                        </div>
                    @endif
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="{{ route('admin.quote-requests') }}" class="btn btn-outline-primary btn-sm w-100">
                        <i class="fas fa-arrow-right me-1"></i>
                        Переглянути всі
                    </a>
                </div>
            </div>
        </div>

        <!-- Recent Contact Messages -->
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-envelope me-2"></i>
                        Останні контактні повідомлення
                    </h5>
                </div>
                <div class="card-body">
                    @if ($recent_submissions['contact_messages']->count() > 0)
                        <div class="list-group list-group-flush">
                            @foreach ($recent_submissions['contact_messages'] as $message)
                                <div class="list-group-item border-0 px-0 py-3">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1 fw-semibold">{{ $message->name }}</h6>
                                            <p class="mb-1 text-muted small">
                                                <i class="fas fa-tag me-1"></i>
                                                {{ $message->subject }}
                                            </p>
                                            <small class="text-muted">
                                                <i class="fas fa-clock me-1"></i>
                                                {{ $message->created_at->diffForHumans() }}
                                            </small>
                                        </div>
                                        <span class="badge status-{{ $message->status }}">
                                            {{ ucfirst($message->status) }}
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="empty-state">
                            <i class="fas fa-envelope"></i>
                            <h5>Немає повідомлень</h5>
                            <p>Поки що немає контактних повідомлень</p>
                        </div>
                    @endif
                </div>
                <div class="card-footer bg-transparent border-0">
                    <a href="{{ route('admin.contact-messages') }}" class="btn btn-outline-primary btn-sm w-100">
                        <i class="fas fa-arrow-right me-1"></i>
                        Переглянути всі
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-rocket me-2"></i>
                        Швидкі дії
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <a href="{{ route('admin.call-requests') }}" class="btn btn-outline-primary w-100 py-3">
                                <i class="fas fa-phone d-block mb-2" style="font-size: 1.5rem;"></i>
                                Управління заявками
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.quote-requests') }}" class="btn btn-outline-primary w-100 py-3">
                                <i class="fas fa-file-invoice d-block mb-2" style="font-size: 1.5rem;"></i>
                                Запити пропозицій
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.contact-messages') }}" class="btn btn-outline-primary w-100 py-3">
                                <i class="fas fa-envelope d-block mb-2" style="font-size: 1.5rem;"></i>
                                Контактні повідомлення
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('welcome') }}" target="_blank" class="btn btn-outline-primary w-100 py-3">
                                <i class="fas fa-external-link-alt d-block mb-2" style="font-size: 1.5rem;"></i>
                                Переглянути сайт
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
