@extends('admin.layout')

@section('page-title', 'Запити пропозицій')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fas fa-file-invoice me-2"></i>
                    Запити пропозицій
                </h5>
                <div class="d-flex align-items-center gap-3">
                    <span class="badge bg-primary fs-6 px-3 py-2">
                        Всього: {{ $quoteRequests->total() }}
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            @if ($quoteRequests->count() > 0)
                <!-- Desktop Table View -->
                <div class="table-view">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">#</th>
                                    <th style="width: 18%;">
                                        <i class="fas fa-user me-1"></i>
                                        Контактна інформація
                                    </th>
                                    <th style="width: 12%;">
                                        <i class="fas fa-calendar me-1"></i>
                                        Дата запиту
                                    </th>
                                    <th style="width: 15%;">
                                        <i class="fas fa-route me-1"></i>
                                        Відстань (км)
                                    </th>
                                    <th style="width: 15%;">
                                        <i class="fas fa-boxes me-1"></i>
                                        Тип вантажу
                                    </th>
                                    <th style="width: 15%;">
                                        <i class="fas fa-truck-loading me-1"></i>
                                        Тип завантаження
                                    </th>
                                    <th style="width: 12%;">
                                        <i class="fas fa-info-circle me-1"></i>
                                        Статус
                                    </th>
                                    <th style="width: 8%;">
                                        <i class="fas fa-clock me-1"></i>
                                        Створено
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($quoteRequests as $index => $request)
                                    <tr>
                                        <td class="fw-semibold text-muted">
                                            {{ $quoteRequests->firstItem() + $index }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-2"
                                                    style="width: 32px; height: 32px; font-size: 0.8rem;">
                                                    {{ strtoupper(substr($request->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <div class="fw-semibold">{{ $request->name }}</div>
                                                    <div class="text-muted small">
                                                        <i class="fas fa-envelope me-1"></i>
                                                        <a href="mailto:{{ $request->email }}" class="text-decoration-none">
                                                            {{ $request->email }}
                                                        </a>
                                                    </div>
                                                    <div class="text-muted small">
                                                        <i class="fas fa-phone me-1"></i>
                                                        <a href="tel:{{ $request->phone }}" class="text-decoration-none">
                                                            {{ $request->phone }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($request->request_date)
                                                <div class="text-nowrap">
                                                    <div class="fw-semibold">
                                                        {{ \Carbon\Carbon::parse($request->request_date)->format('d.m.Y') }}
                                                    </div>
                                                    <small class="text-muted">
                                                        {{ \Carbon\Carbon::parse($request->request_date)->diffForHumans() }}
                                                    </small>
                                                </div>
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->distance_min && $request->distance_max)
                                                <div class="d-flex align-items-center">
                                                    <span class="badge bg-light text-dark border px-2 py-1">
                                                        <i class="fas fa-route me-1"></i>
                                                        {{ $request->distance_min }} - {{ $request->distance_max }} км
                                                    </span>
                                                </div>
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->cargo_type)
                                                <span class="badge bg-light text-dark border">
                                                    <i class="fas fa-box me-1"></i>
                                                    {{ $request->cargo_type }}
                                                </span>
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($request->loading_type)
                                                <span class="badge bg-light text-dark border">
                                                    <i class="fas fa-truck me-1"></i>
                                                    {{ $request->loading_type }}
                                                </span>
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm status-{{ $request->status }} dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ ucfirst($request->status) }}
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <form method="POST"
                                                            action="{{ route('admin.quote-requests.update-status', $request) }}"
                                                            class="d-inline w-100">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="status" value="new">
                                                            <button type="submit" class="dropdown-item">
                                                                <i class="fas fa-circle text-info me-2"></i>
                                                                New
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form method="POST"
                                                            action="{{ route('admin.quote-requests.update-status', $request) }}"
                                                            class="d-inline w-100">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="status" value="processing">
                                                            <button type="submit" class="dropdown-item">
                                                                <i class="fas fa-circle text-warning me-2"></i>
                                                                Processing
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form method="POST"
                                                            action="{{ route('admin.quote-requests.update-status', $request) }}"
                                                            class="d-inline w-100">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="status" value="completed">
                                                            <button type="submit" class="dropdown-item">
                                                                <i class="fas fa-circle text-success me-2"></i>
                                                                Completed
                                                            </button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <form method="POST"
                                                            action="{{ route('admin.quote-requests.update-status', $request) }}"
                                                            class="d-inline w-100">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input type="hidden" name="status" value="cancelled">
                                                            <button type="submit" class="dropdown-item">
                                                                <i class="fas fa-circle text-danger me-2"></i>
                                                                Cancelled
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-nowrap">
                                                <div class="fw-semibold">{{ $request->created_at->format('d.m.Y') }}</div>
                                                <small class="text-muted">{{ $request->created_at->format('H:i') }}</small>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Mobile Card View -->
                <div class="mobile-card-view">
                    <div class="p-3">
                        @foreach ($quoteRequests as $index => $request)
                            <div class="mobile-item-card">
                                <div class="mobile-item-header">
                                    <div class="mobile-item-title">
                                        <i class="fas fa-user me-2"></i>
                                        {{ $request->name }}
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm status-{{ $request->status }} dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ ucfirst($request->status) }}
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <form method="POST"
                                                    action="{{ route('admin.quote-requests.update-status', $request) }}"
                                                    class="d-inline w-100">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="new">
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fas fa-circle text-info me-2"></i>
                                                        New
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <form method="POST"
                                                    action="{{ route('admin.quote-requests.update-status', $request) }}"
                                                    class="d-inline w-100">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="processing">
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fas fa-circle text-warning me-2"></i>
                                                        Processing
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <form method="POST"
                                                    action="{{ route('admin.quote-requests.update-status', $request) }}"
                                                    class="d-inline w-100">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="completed">
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fas fa-circle text-success me-2"></i>
                                                        Completed
                                                    </button>
                                                </form>
                                            </li>
                                            <li>
                                                <form method="POST"
                                                    action="{{ route('admin.quote-requests.update-status', $request) }}"
                                                    class="d-inline w-100">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input type="hidden" name="status" value="cancelled">
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fas fa-circle text-danger me-2"></i>
                                                        Cancelled
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mobile-item-body">
                                    <div class="mobile-item-row">
                                        <span class="mobile-item-label">
                                            <i class="fas fa-envelope me-1"></i>
                                            Email:
                                        </span>
                                        <span class="mobile-item-value">
                                            <a href="mailto:{{ $request->email }}" class="text-decoration-none">
                                                {{ $request->email }}
                                            </a>
                                        </span>
                                    </div>
                                    <div class="mobile-item-row">
                                        <span class="mobile-item-label">
                                            <i class="fas fa-phone me-1"></i>
                                            Телефон:
                                        </span>
                                        <span class="mobile-item-value">
                                            <a href="tel:{{ $request->phone }}" class="text-decoration-none">
                                                {{ $request->phone }}
                                            </a>
                                        </span>
                                    </div>
                                    @if ($request->request_date)
                                        <div class="mobile-item-row">
                                            <span class="mobile-item-label">
                                                <i class="fas fa-calendar me-1"></i>
                                                Дата запиту:
                                            </span>
                                            <span class="mobile-item-value">
                                                {{ \Carbon\Carbon::parse($request->request_date)->format('d.m.Y') }}
                                            </span>
                                        </div>
                                    @endif
                                    @if ($request->distance_min && $request->distance_max)
                                        <div class="mobile-item-row">
                                            <span class="mobile-item-label">
                                                <i class="fas fa-route me-1"></i>
                                                Відстань:
                                            </span>
                                            <span class="mobile-item-value">
                                                <span class="badge bg-light text-dark border">
                                                    {{ $request->distance_min }} - {{ $request->distance_max }} км
                                                </span>
                                            </span>
                                        </div>
                                    @endif
                                    @if ($request->cargo_type)
                                        <div class="mobile-item-row">
                                            <span class="mobile-item-label">
                                                <i class="fas fa-boxes me-1"></i>
                                                Тип вантажу:
                                            </span>
                                            <span class="mobile-item-value">
                                                <span class="badge bg-light text-dark border">
                                                    {{ $request->cargo_type }}
                                                </span>
                                            </span>
                                        </div>
                                    @endif
                                    @if ($request->loading_type)
                                        <div class="mobile-item-row">
                                            <span class="mobile-item-label">
                                                <i class="fas fa-truck-loading me-1"></i>
                                                Тип завантаження:
                                            </span>
                                            <span class="mobile-item-value">
                                                <span class="badge bg-light text-dark border">
                                                    {{ $request->loading_type }}
                                                </span>
                                            </span>
                                        </div>
                                    @endif
                                    <div class="mobile-item-row">
                                        <span class="mobile-item-label">
                                            <i class="fas fa-clock me-1"></i>
                                            Створено:
                                        </span>
                                        <span class="mobile-item-value">
                                            {{ $request->created_at->format('d.m.Y H:i') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pagination -->
                @if ($quoteRequests->hasPages())
                    <div class="card-footer bg-transparent border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">
                                Показано {{ $quoteRequests->firstItem() }} - {{ $quoteRequests->lastItem() }}
                                з {{ $quoteRequests->total() }} записів
                            </div>
                            {{ $quoteRequests->links() }}
                        </div>
                    </div>
                @endif
            @else
                <div class="empty-state">
                    <i class="fas fa-file-invoice"></i>
                    <h5>Немає запитів пропозицій</h5>
                    <p>Поки що немає жодного запиту пропозиції. Вони з'являться тут, коли користувачі почнуть залишати
                        запити.</p>
                    <a href="{{ route('welcome') }}" target="_blank" class="btn btn-outline-primary">
                        <i class="fas fa-external-link-alt me-1"></i>
                        Переглянути сайт
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Auto-refresh page every 5 minutes to show new requests
        setTimeout(function() {
            location.reload();
        }, 300000);

        // Add loading state to status update forms
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function() {
                const button = this.querySelector('button[type="submit"]');
                if (button) {
                    button.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Оновлення...';
                    button.disabled = true;
                }
            });
        });
    </script>
@endsection
