@extends('admin.layout')

@section('page-title', 'Контактні повідомлення')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="fas fa-envelope me-2"></i>
                    Контактні повідомлення
                </h5>
                <div class="d-flex align-items-center gap-3">
                    <span class="badge bg-primary fs-6 px-3 py-2">
                        Всього: {{ $contactMessages->total() }}
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body p-0">
            @if ($contactMessages->count() > 0)
                <!-- Desktop Table View -->
                <div class="table-view">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">#</th>
                                    <th style="width: 20%;">
                                        <i class="fas fa-user me-1"></i>
                                        Контактна інформація
                                    </th>
                                    <th style="width: 15%;">
                                        <i class="fas fa-tag me-1"></i>
                                        Тема
                                    </th>
                                    <th style="width: 35%;">
                                        <i class="fas fa-comment me-1"></i>
                                        Повідомлення
                                    </th>
                                    <th style="width: 12%;">
                                        <i class="fas fa-info-circle me-1"></i>
                                        Статус
                                    </th>
                                    <th style="width: 13%;">
                                        <i class="fas fa-clock me-1"></i>
                                        Дата створення
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contactMessages as $index => $message)
                                    <tr>
                                        <td class="fw-semibold text-muted">
                                            {{ $contactMessages->firstItem() + $index }}
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-2"
                                                    style="width: 32px; height: 32px; font-size: 0.8rem;">
                                                    {{ strtoupper(substr($message->name, 0, 1)) }}
                                                </div>
                                                <div>
                                                    <div class="fw-semibold">{{ $message->name }}</div>
                                                    <div class="text-muted small">
                                                        <i class="fas fa-envelope me-1"></i>
                                                        <a href="mailto:{{ $message->email }}" class="text-decoration-none">
                                                            {{ $message->email }}
                                                        </a>
                                                    </div>
                                                    @if ($message->phone)
                                                        <div class="text-muted small">
                                                            <i class="fas fa-phone me-1"></i>
                                                            <a href="tel:{{ $message->phone }}"
                                                                class="text-decoration-none">
                                                                {{ $message->phone }}
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($message->subject)
                                                <span class="badge bg-light text-dark border px-2 py-1">
                                                    <i class="fas fa-tag me-1"></i>
                                                    {{ $message->subject }}
                                                </span>
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($message->message)
                                                <div class="message-preview">
                                                    <div class="message-text" title="{{ $message->message }}">
                                                        {{ Str::limit($message->message, 100) }}
                                                    </div>
                                                    @if (strlen($message->message) > 100)
                                                        <button class="btn btn-link btn-sm p-0 text-primary" type="button"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#messageModal{{ $message->id }}">
                                                            <i class="fas fa-expand-alt me-1"></i>
                                                            Читати повністю
                                                        </button>
                                                    @endif
                                                </div>

                                                <!-- Message Modal -->
                                                <div class="modal fade" id="messageModal{{ $message->id }}"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">
                                                                    <i class="fas fa-comment me-2"></i>
                                                                    Повідомлення від {{ $message->name }}
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <strong>Тема:</strong>
                                                                    {{ $message->subject ?? 'Без теми' }}
                                                                </div>
                                                                <div class="mb-3">
                                                                    <strong>Повідомлення:</strong>
                                                                </div>
                                                                <div class="p-3 bg-light rounded">
                                                                    {{ $message->message }}
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    Закрити
                                                                </button>
                                                                <a href="mailto:{{ $message->email }}"
                                                                    class="btn btn-primary">
                                                                    <i class="fas fa-reply me-1"></i>
                                                                    Відповісти
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <span class="text-muted">—</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-sm status-{{ $message->status }} dropdown-toggle"
                                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    {{ ucfirst($message->status) }}
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <form method="POST"
                                                            action="{{ route('admin.contact-messages.update-status', $message) }}"
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
                                                            action="{{ route('admin.contact-messages.update-status', $message) }}"
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
                                                            action="{{ route('admin.contact-messages.update-status', $message) }}"
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
                                                            action="{{ route('admin.contact-messages.update-status', $message) }}"
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
                                                <div class="fw-semibold">{{ $message->created_at->format('d.m.Y') }}</div>
                                                <small
                                                    class="text-muted">{{ $message->created_at->format('H:i') }}</small>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Mobile Card View -->
                <div class="mobile-card-view d-block d-md-none">
                    <div class="p-3">
                        @foreach ($contactMessages as $index => $message)
                            <div class="mobile-item-card">
                                <div class="mobile-item-header">
                                    <div class="mobile-item-title">
                                        <i class="fas fa-user me-2"></i>
                                        {{ $message->name }}
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-sm status-{{ $message->status }} dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ ucfirst($message->status) }}
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <form method="POST"
                                                    action="{{ route('admin.contact-messages.update-status', $message) }}"
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
                                                    action="{{ route('admin.contact-messages.update-status', $message) }}"
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
                                                    action="{{ route('admin.contact-messages.update-status', $message) }}"
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
                                                    action="{{ route('admin.contact-messages.update-status', $message) }}"
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
                                            <a href="mailto:{{ $message->email }}" class="text-decoration-none">
                                                {{ $message->email }}
                                            </a>
                                        </span>
                                    </div>
                                    @if ($message->phone)
                                        <div class="mobile-item-row">
                                            <span class="mobile-item-label">
                                                <i class="fas fa-phone me-1"></i>
                                                Телефон:
                                            </span>
                                            <span class="mobile-item-value">
                                                <a href="tel:{{ $message->phone }}" class="text-decoration-none">
                                                    {{ $message->phone }}
                                                </a>
                                            </span>
                                        </div>
                                    @endif
                                    @if ($message->subject)
                                        <div class="mobile-item-row">
                                            <span class="mobile-item-label">
                                                <i class="fas fa-tag me-1"></i>
                                                Тема:
                                            </span>
                                            <span class="mobile-item-value">
                                                <span class="badge bg-light text-dark border">
                                                    {{ $message->subject }}
                                                </span>
                                            </span>
                                        </div>
                                    @endif
                                    @if ($message->message)
                                        <div class="mobile-item-row">
                                            <span class="mobile-item-label">
                                                <i class="fas fa-comment me-1"></i>
                                                Повідомлення:
                                            </span>
                                            <span class="mobile-item-value">
                                                {{ Str::limit($message->message, 100) }}
                                                @if (strlen($message->message) > 100)
                                                    <button class="btn btn-link btn-sm p-0 ms-1" data-bs-toggle="modal"
                                                        data-bs-target="#messageModal{{ $message->id }}">
                                                        Читати далі
                                                    </button>
                                                @endif
                                            </span>
                                        </div>
                                    @endif
                                    <div class="mobile-item-row">
                                        <span class="mobile-item-label">
                                            <i class="fas fa-clock me-1"></i>
                                            Створено:
                                        </span>
                                        <span class="mobile-item-value">
                                            {{ $message->created_at->format('d.m.Y H:i') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Pagination -->
                @if ($contactMessages->hasPages())
                    <div class="card-footer bg-transparent border-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="text-muted">
                                Показано {{ $contactMessages->firstItem() }} - {{ $contactMessages->lastItem() }}
                                з {{ $contactMessages->total() }} записів
                            </div>
                            {{ $contactMessages->links() }}
                        </div>
                    </div>
                @endif
            @else
                <div class="empty-state">
                    <i class="fas fa-envelope"></i>
                    <h5>Немає контактних повідомлень</h5>
                    <p>Поки що немає жодного контактного повідомлення. Вони з'являться тут, коли користувачі почнуть писати
                        через форму зворотного зв'язку.</p>
                    <a href="{{ route('contact') }}" target="_blank" class="btn btn-outline-primary">
                        <i class="fas fa-external-link-alt me-1"></i>
                        Переглянути форму контактів
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Auto-refresh page every 5 minutes to show new messages
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

    <style>
        .message-preview {
            max-width: 300px;
        }

        .message-text {
            line-height: 1.4;
            margin-bottom: 0.5rem;
        }
    </style>
@endsection
