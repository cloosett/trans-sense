@extends('admin.layout')

@section('page-title', 'Заявки на дзвінок')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fas fa-phone me-2"></i>
                    Заявки на дзвінок
                </h5>
                <div class="d-flex align-items-center gap-3">
                    <span class="badge bg-primary fs-6 px-3 py-2">
                        Всього: {{ $callRequests->total() }}
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            @if ($callRequests->count() > 0)
                <!-- Desktop Table View -->
                <div class="table-view">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">#</th>
                                    <th style="width: 20%;">
                                        <i class="fas fa-user me-1"></i>
                                        Ім'я
                                    </th>
                                    <th style="width: 20%;">
                                        <i class="fas fa-phone me-1"></i>
                                        Телефон
                                    </th>
                                    <th style="width: 15%;">
                                        <i class="fas fa-boxes me-1"></i>
                                        Тип вантажу
                                    </th>
                                    <th style="width: 15%;">
                                        <i class="fas fa-truck-loading me-1"></i>
                                        Тип завантаження
                                    </th>
                                    <th style="width: 15%;">
                                        <i class="fas fa-info-circle me-1"></i>
                                        Статус
                                    </th>
                                    <th style="width: 10%;">
                                        <i class="fas fa-clock me-1"></i>
                                        Дата
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($callRequests as $index => $request)
                                    <tr>
                                        <td class="fw-semibold text-muted">
                                            {{ $callRequests->firstItem() + $index }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-2"
                                                    style="width: 32px; height: 32px; font-size: 0.8rem;">
                                                    {{ strtoupper(substr($request->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <div class="fw-semibold">{{ $request->name }}</div>
                                                    @if ($request->message)
                                                        <small class="text-muted" title="{{ $request->message }}">
                                                            {{ Str::limit($request->message, 30) }}
                                                        </small>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="tel:{{ $request->phone }}" class="text-decoration-none">
                                                <i class="fas fa-phone me-1 text-success"></i>
                                                {{ $request->phone }}
                                            </a>
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
                                                            action="{{ route('admin.call-requests.update-status', $request) }}"
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
                                                            action="{{ route('admin.call-requests.update-status', $request) }}"
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
                                                            action="{{ route('admin.call-requests.update-status', $request) }}"
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
                                                            action="{{ route('admin.call-requests.update-status', $request) }}"
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
                        @foreach ($callRequests as $index => $request)
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
                                                    action="{{ route('admin.call-requests.update-status', $request) }}"
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
                                                    action="{{ route('admin.call-requests.update-status', $request) }}"
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
                                                    action="{{ route('admin.call-requests.update-status', $request) }}"
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
                                                    action="{{ route('admin.call-requests.update-status', $request) }}"
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
                                            <i class="fas fa-phone me-1"></i>
                                            Телефон:
                                        </span>
                                        <span class="mobile-item-value">
                                            <a href="tel:{{ $request->phone }}" class="text-decoration-none">
                                                {{ $request->phone }}
                                            </a>
                                        </span>
                                    </div>
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
                                    @if ($request->message)
                                        <div class="mobile-item-row">
                                            <span class="mobile-item-label">
                                                <i class="fas fa-comment me-1"></i>
                                                Повідомлення:
                                            </span>
                                            <span class="mobile-item-value">
                                                {{ $request->message }}
                                            </span>
                                        </div>
                                    @endif
                                    <div class="mobile-item-row">
                                        <span class="mobile-item-label">
                                            <i class="fas fa-clock me-1"></i>
                                            Дата:
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
                @if ($callRequests->hasPages())
                    <div class="card-footer bg-transparent border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">
                                Показано {{ $callRequests->firstItem() }} - {{ $callRequests->lastItem() }}
                                з {{ $callRequests->total() }} записів
                            </div>
                            {{ $callRequests->links() }}
                        </div>
                    </div>
                @endif
            @else
                <div class="empty-state">
                    <i class="fas fa-phone"></i>
                    <h5>Немає заявок на дзвінок</h5>
                    <p>Поки що немає жодної заявки на дзвінок. Вони з'являться тут, коли користувачі почнуть залишати
                        заявки.</p>
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
