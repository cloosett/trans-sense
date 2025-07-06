<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Адмін-панель') - TransSense</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            --secondary-gradient: linear-gradient(135deg, #333333 0%, #1a1a1a 100%);
            --success-gradient: linear-gradient(135deg, #10b981 0%, #059669 100%);
            --warning-gradient: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            --info-gradient: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            --dark-gradient: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 100%);

            --primary-color: #2d2d2d;
            --secondary-color: #404040;
            --success-color: #10b981;
            --danger-color: #ef4444;
            --warning-color: #f59e0b;
            --info-color: #3b82f6;

            --bg-primary: #0f0f0f;
            --bg-secondary: #1a1a1a;
            --bg-tertiary: #2d2d2d;
            --text-primary: #ffffff;
            --text-secondary: #e5e5e5;
            --text-muted: #a3a3a3;

            --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.5);
            --shadow-md: 0 4px 12px rgba(0, 0, 0, 0.6);
            --shadow-lg: 0 8px 25px rgba(0, 0, 0, 0.7);
            --shadow-xl: 0 20px 40px rgba(0, 0, 0, 0.8);

            --border-radius: 12px;
            --border-radius-lg: 16px;
            --border-radius-xl: 20px;
        }

        * {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        body {
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 50%, #2d2d2d 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            font-weight: 400;
            line-height: 1.6;
            color: var(--text-primary);
            min-height: 100vh;
        }

        .sidebar {
            background: linear-gradient(180deg, #0f0f0f 0%, #1a1a1a 50%, #2d2d2d 100%);
            min-height: 100vh;
            box-shadow: var(--shadow-xl);
            position: relative;
            overflow: hidden;
            border-right: 1px solid #333333;
        }

        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        .sidebar-header {
            position: relative;
            z-index: 2;
            padding: 2rem 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .sidebar-header h5 {
            color: var(--text-primary);
            font-weight: 700;
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .sidebar-header small {
            color: var(--text-muted);
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        .sidebar .nav {
            position: relative;
            z-index: 2;
            padding: 1rem 0;
        }

        .sidebar .nav-link {
            color: var(--text-secondary);
            padding: 0.875rem 1.5rem;
            margin: 0.25rem 1rem;
            border-radius: var(--border-radius);
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(10px);
        }

        .sidebar .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s;
        }

        .sidebar .nav-link:hover::before {
            left: 100%;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: var(--text-primary);
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(8px) scale(1.02);
            box-shadow: var(--shadow-md);
            backdrop-filter: blur(20px);
        }

        .sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.15);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), var(--shadow-lg);
        }

        .sidebar .nav-link i {
            width: 20px;
            margin-right: 12px;
            font-size: 1.1rem;
        }

        .main-content {
            padding: 2rem;
            background: transparent;
        }

        .page-header {
            background: rgba(26, 26, 26, 0.9);
            border-radius: var(--border-radius-lg);
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: var(--shadow-md);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
        }

        .page-header h2 {
            font-weight: 700;
            font-size: 2rem;
            background: linear-gradient(135deg, #ffffff 0%, #e5e5e5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--text-muted);
            font-weight: 500;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-primary);
            font-weight: 600;
            box-shadow: var(--shadow-md);
        }

        .card {
            border: none;
            border-radius: var(--border-radius-lg);
            box-shadow: var(--shadow-md);
            backdrop-filter: blur(20px);
            background: rgba(26, 26, 26, 0.9);
            overflow: visible;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-xl);
            z-index: 2;
        }

        .card-body {
            position: relative;
            overflow: visible;
            color: var(--text-primary);
        }

        .card-header {
            background: var(--dark-gradient);
            color: var(--text-primary);
            border: none;
            padding: 1.5rem;
            font-weight: 600;
            font-size: 1.1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .card-header h5 {
            margin: 0;
            font-weight: 600;
            color: var(--text-primary);
        }

        .stats-card {
            border-radius: var(--border-radius-xl);
            padding: 2rem;
            margin-bottom: 1.5rem;
            color: var(--text-primary);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
        }

        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse"><circle cx="10" cy="10" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23dots)"/></svg>');
        }

        .stats-card>* {
            position: relative;
            z-index: 2;
        }

        .stats-card.primary {
            background: var(--primary-gradient);
        }

        .stats-card.success {
            background: var(--success-gradient);
        }

        .stats-card.warning {
            background: var(--warning-gradient);
        }

        .stats-card.info {
            background: var(--info-gradient);
        }

        .stats-card h3 {
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        }

        .stats-card p {
            font-weight: 500;
            opacity: 0.9;
            margin: 0;
            font-size: 1rem;
        }

        .stats-icon {
            opacity: 0.7;
            font-size: 3rem !important;
        }

        .table {
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            background: rgba(26, 26, 26, 0.9);
        }

        .table th {
            background: var(--dark-gradient);
            color: var(--text-primary);
            border: none;
            font-weight: 600;
            padding: 1rem;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .table td {
            padding: 1rem;
            border-color: rgba(255, 255, 255, 0.1);
            vertical-align: middle;
            background: rgba(26, 26, 26, 0.8);
            color: var(--text-primary);
        }

        .table tbody tr {
            transition: all 0.2s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .table tbody tr:hover {
            background: linear-gradient(135deg, rgba(45, 45, 45, 0.5), rgba(26, 26, 26, 0.5));
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .table tbody tr:last-child {
            border-bottom: none;
        }

        /* Ensure dropdowns work properly in tables */
        .table td .dropdown {
            position: static;
        }

        .table td .dropdown-menu {
            position: absolute !important;
            transform: none !important;
            will-change: transform;
        }

        /* Override any conflicting table styles */
        .table-responsive .dropdown-menu {
            position: absolute !important;
            z-index: 1055 !important;
        }

        .table-responsive {
            position: relative;
            z-index: 1;
        }

        .table {
            position: relative;
            z-index: 1;
        }

        .btn {
            border-radius: var(--border-radius);
            font-weight: 500;
            padding: 0.625rem 1.25rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
        }

        .btn-primary {
            background: var(--primary-gradient);
            border: none;
            box-shadow: var(--shadow-sm);
            color: var(--text-primary);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            color: var(--text-primary);
        }

        .btn-outline-primary {
            border: 2px solid var(--primary-color);
            color: var(--text-secondary);
            background: transparent;
        }

        .btn-outline-primary:hover {
            background: var(--primary-gradient);
            border-color: transparent;
            color: var(--text-primary);
            transform: translateY(-2px);
        }

        .badge {
            font-size: 0.8rem;
            font-weight: 500;
            padding: 0.5rem 0.75rem;
            border-radius: 50px;
            border: none;
        }

        /* Status Badge Styles */
        .status-new {
            background: var(--info-gradient);
            color: var(--text-primary);
            border: none !important;
        }

        .status-processing {
            background: var(--warning-gradient);
            color: #000000;
            border: none !important;
        }

        .status-completed {
            background: var(--success-gradient);
            color: var(--text-primary);
            border: none !important;
        }

        .status-cancelled {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            color: var(--text-primary);
            border: none !important;
        }

        /* Dropdown improvements */
        .dropdown-toggle::after {
            margin-left: 0.5rem;
            vertical-align: middle;
        }

        .dropdown {
            position: relative;
            z-index: 10;
        }

        .dropdown-menu {
            border: none;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-lg);
            backdrop-filter: blur(20px);
            background: rgba(26, 26, 26, 0.95);
            padding: 0.5rem 0;
            min-width: 160px;
            z-index: 1050 !important;
            position: absolute;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transform: translateY(0) !important;
            top: 100% !important;
            left: 0 !important;
            right: auto !important;
            margin-top: 0.25rem;
        }

        .dropdown-menu.show {
            z-index: 1060 !important;
            display: block !important;
            position: absolute !important;
            transform: none !important;
            will-change: auto;
        }

        .dropdown-item {
            padding: 0.75rem 1rem;
            transition: all 0.2s ease;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            color: var(--text-secondary);
            font-weight: 500;
            position: relative;
            z-index: 1051;
        }

        .dropdown-item:hover {
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-primary);
            transform: translateX(4px);
        }

        .dropdown-item:focus {
            background: rgba(255, 255, 255, 0.1);
            color: var(--text-primary);
        }

        .dropdown-item i {
            width: 16px;
            text-align: center;
        }

        /* Mobile-specific dropdown fixes */
        @media (max-width: 768px) {
            .dropdown {
                position: static !important;
            }

            .dropdown-menu {
                position: fixed !important;
                z-index: 9999 !important;
                transform: none !important;
                left: auto !important;
                right: 1rem !important;
                top: auto !important;
                margin: 0;
                min-width: 180px;
                max-width: calc(100vw - 2rem);
            }

            .mobile-item-card .dropdown {
                position: relative !important;
            }

            .mobile-item-card .dropdown-menu {
                position: absolute !important;
                right: 0 !important;
                left: auto !important;
                top: 100% !important;
                z-index: 1060 !important;
                margin-top: 0.25rem;
            }

            .dropdown-toggle {
                position: relative;
                z-index: 1;
            }

            /* Ensure dropdowns work in mobile cards */
            .mobile-item-header {
                position: relative;
                z-index: 1;
            }

            .mobile-item-header .dropdown {
                position: relative;
                z-index: 2;
            }

            .mobile-item-header .dropdown-menu {
                position: absolute !important;
                right: 0;
                left: auto;
                top: 100%;
                z-index: 1070 !important;
                transform: none !important;
                margin-top: 0.5rem;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            }

            /* Fix for table dropdowns */
            .table .dropdown {
                position: relative !important;
            }

            .table .dropdown-menu {
                position: absolute !important;
                right: 0 !important;
                left: auto !important;
                top: 100% !important;
                z-index: 1060 !important;
                transform: none !important;
                margin-top: 0.25rem;
            }

            /* Prevent dropdown from being cut off */
            .table-responsive {
                overflow: visible !important;
            }

            .card-body {
                overflow: visible !important;
            }

            .mobile-card-view {
                overflow: visible !important;
            }

            /* Touch-friendly dropdown items */
            .dropdown-item {
                padding: 1rem;
                font-size: 0.95rem;
                min-height: 48px;
                display: flex;
                align-items: center;
            }

            .dropdown-item:active {
                background: rgba(255, 255, 255, 0.2) !important;
                color: var(--text-primary) !important;
            }
        }

        .alert {
            border: none;
            border-radius: var(--border-radius);
            padding: 1rem 1.5rem;
            backdrop-filter: blur(20px);
        }

        .alert-success {
            background: linear-gradient(135deg, rgba(56, 161, 105, 0.2), rgba(47, 133, 90, 0.2));
            color: #68d391;
            border-left: 4px solid var(--success-color);
        }

        .alert-danger {
            background: linear-gradient(135deg, rgba(229, 62, 62, 0.2), rgba(197, 48, 48, 0.2));
            color: #fc8181;
            border-left: 4px solid var(--danger-color);
        }

        .pagination {
            gap: 0.5rem;
        }

        .page-link {
            border: none;
            border-radius: var(--border-radius);
            color: var(--text-secondary);
            font-weight: 500;
            padding: 0.75rem 1rem;
            margin: 0 0.25rem;
            background: rgba(45, 55, 72, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .page-link:hover {
            background: var(--primary-gradient);
            color: var(--text-primary);
            transform: translateY(-2px);
        }

        .page-item.active .page-link {
            background: var(--primary-gradient);
            border: none;
            color: var(--text-primary);
        }

        .empty-state {
            padding: 4rem 2rem;
            text-align: center;
        }

        .empty-state i {
            font-size: 4rem;
            color: var(--text-muted);
            margin-bottom: 1.5rem;
        }

        .empty-state h5 {
            color: var(--text-secondary);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .empty-state p {
            color: var(--text-muted);
        }

        /* Text colors for better readability */
        .text-muted {
            color: var(--text-muted) !important;
        }

        .fw-semibold {
            color: var(--text-primary);
        }

        .list-group-item {
            background: transparent;
            border-color: rgba(255, 255, 255, 0.1);
            color: var(--text-primary);
        }

        /* Badges in tables */
        .badge.bg-light {
            background: rgba(74, 85, 104, 0.8) !important;
            color: var(--text-primary) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
        }

        /* Button close for modals */
        .btn-close {
            filter: invert(1);
        }

        /* Modal styling */
        .modal-content {
            background: var(--bg-secondary);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: var(--text-primary);
        }

        .modal-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .modal-footer {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .bg-light {
            background: rgba(45, 45, 45, 0.3) !important;
        }

        /* Анімації */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out;
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: -100%;
                width: 280px;
                z-index: 1000;
                transition: left 0.3s ease;
            }

            .sidebar.show {
                left: 0;
            }

            .main-content {
                padding: 1rem;
            }

            .page-header {
                padding: 1.5rem;
            }

            .stats-card {
                padding: 1.5rem;
            }
        }

        /* Mobile Navigation */
        .mobile-nav-toggle {
            display: none;
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
            background: var(--primary-gradient);
            border: none;
            border-radius: var(--border-radius);
            padding: 0.75rem;
            color: var(--text-primary);
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
        }

        .mobile-nav-toggle:hover {
            transform: scale(1.1);
            box-shadow: var(--shadow-xl);
        }

        /* Landscape mobile optimization */
        @media (max-width: 768px) and (orientation: landscape) {
            .main-content {
                padding: 3rem 1rem 1rem;
            }

            .page-header {
                padding: 1rem;
                margin-bottom: 1rem;
            }

            .stats-card {
                padding: 1rem;
            }

            .stats-card h3 {
                font-size: 1.75rem;
            }
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-primary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--dark-gradient);
        }

        /* Touch device improvements */
        .touch-device .btn,
        .touch-device .nav-link,
        .touch-device .dropdown-toggle {
            min-height: 44px !important;
            min-width: 44px !important;
            padding: 0.75rem 1rem;
        }

        .touch-device .mobile-item-card {
            margin-bottom: 1.5rem;
        }

        .touch-device .mobile-item-row {
            padding: 0.5rem 0;
        }

        /* Improved mobile interactions */
        @media (max-width: 768px) {

            /* Better touch targets */
            .btn,
            .nav-link,
            .dropdown-toggle,
            .page-link {
                min-height: 44px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Improved form controls */
            .form-control,
            .form-select {
                min-height: 44px;
                font-size: 16px;
                /* Prevents zoom on iOS */
            }

            /* Better spacing for mobile cards */
            .mobile-item-card {
                margin-bottom: 1.5rem;
                padding: 1.25rem;
            }

            .mobile-item-header {
                margin-bottom: 1rem;
                padding-bottom: 1rem;
            }

            .mobile-item-title {
                font-size: 1.125rem;
                line-height: 1.4;
            }

            .mobile-item-row {
                padding: 0.625rem 0;
                min-height: 44px;
                align-items: center;
            }

            .mobile-item-label {
                font-size: 0.9rem;
                min-width: 100px;
            }

            .mobile-item-value {
                font-size: 0.9rem;
                line-height: 1.4;
            }

            /* Improved dropdown positioning on mobile */
            .dropdown-menu {
                transform: none !important;
                position: absolute !important;
                will-change: transform;
                margin-top: 0.25rem;
            }

            /* Better pagination on mobile */
            .pagination {
                margin: 1rem 0;
            }

            .page-item {
                margin: 0.125rem;
            }

            .page-link {
                border-radius: var(--border-radius);
                min-width: 44px;
                min-height: 44px;
            }

            /* Improved empty state */
            .empty-state {
                padding: 3rem 1rem;
                text-align: center;
            }

            .empty-state i {
                font-size: 4rem;
                margin-bottom: 1.5rem;
                opacity: 0.5;
            }

            .empty-state h5 {
                font-size: 1.25rem;
                margin-bottom: 1rem;
            }

            .empty-state p {
                font-size: 1rem;
                line-height: 1.5;
                margin-bottom: 2rem;
            }

            /* Better modal experience */
            .modal-dialog {
                margin: 0.5rem;
                max-width: calc(100vw - 1rem);
                height: auto;
                max-height: calc(100vh - 1rem);
            }

            .modal-content {
                height: auto;
                max-height: calc(100vh - 1rem);
                overflow-y: auto;
            }

            .modal-body {
                padding: 1.5rem 1rem;
                font-size: 1rem;
                line-height: 1.5;
            }

            /* Improved alert styling */
            .alert {
                margin: 1rem 0;
                padding: 1rem;
                border-radius: var(--border-radius);
                font-size: 0.95rem;
                line-height: 1.4;
            }

            /* Better badge display */
            .badge {
                font-size: 0.8rem;
                padding: 0.5rem 0.75rem;
                border-radius: 20px;
                white-space: nowrap;
            }

            /* Improved card header */
            .card-header {
                padding: 1rem;
                flex-direction: column;
                gap: 0.75rem;
                text-align: center;
            }

            .card-header .d-flex {
                flex-direction: column;
                gap: 0.75rem;
                align-items: center !important;
            }

            .card-header h5 {
                font-size: 1.125rem;
                margin: 0;
            }

            /* Better stats cards layout */
            .stats-card {
                text-align: center;
                padding: 1.5rem 1rem;
            }

            .stats-card .d-flex {
                flex-direction: column;
                gap: 1rem;
                align-items: center !important;
            }

            .stats-icon {
                font-size: 2.5rem !important;
                margin-bottom: 0.5rem;
            }

            /* Improved sidebar for mobile */
            .sidebar {
                width: 300px;
                box-shadow: 2px 0 10px rgba(0, 0, 0, 0.3);
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .sidebar-header {
                padding: 2rem 1.5rem;
                text-align: center;
            }

            .sidebar .nav-link {
                padding: 1rem 1.5rem;
                font-size: 1rem;
                border-radius: 0;
                margin: 0;
            }

            /* Mobile navigation improvements */
            .mobile-nav-toggle {
                width: 50px;
                height: 50px;
                border-radius: 12px;
                font-size: 1.25rem;
            }

            .mobile-nav-toggle:active {
                transform: scale(0.95);
            }

            /* Prevent horizontal scroll */
            body {
                overflow-x: hidden;
            }

            .container-fluid {
                padding: 0;
                overflow-x: hidden;
            }

            /* Better focus states for accessibility */
            .btn:focus,
            .nav-link:focus,
            .dropdown-toggle:focus {
                outline: 2px solid var(--primary-color);
                outline-offset: 2px;
            }

            /* Improved loading states */
            .btn:disabled {
                opacity: 0.6;
                cursor: not-allowed;
            }

            /* Better table responsiveness */
            .table-responsive {
                border-radius: var(--border-radius);
                box-shadow: var(--shadow-sm);
            }

            .table {
                margin-bottom: 0;
            }

            /* Improved user info display */
            .user-info {
                padding: 0.75rem;
                background: rgba(255, 255, 255, 0.1);
                border-radius: var(--border-radius);
            }

            .user-avatar {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }
        }

        /* Landscape mobile adjustments */
        @media (max-width: 768px) and (orientation: landscape) {
            .main-content {
                padding: 2rem 1rem 1rem;
            }

            .mobile-item-card {
                padding: 1rem;
                margin-bottom: 1rem;
            }

            .stats-card {
                padding: 1rem;
            }

            .page-header {
                padding: 1rem;
                margin-bottom: 1rem;
            }

            .page-header .d-flex {
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
            }

            .page-header h2 {
                text-align: left;
                font-size: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .mobile-nav-toggle {
                display: block;
            }

            .container-fluid {
                padding: 0;
            }

            .row {
                margin: 0;
            }

            .col-md-2 {
                padding: 0;
            }

            .col-md-10 {
                padding: 0;
                margin-left: 0;
                width: 100%;
            }

            .main-content {
                padding: 4rem 1rem 1rem;
                margin-left: 0;
            }

            .page-header {
                padding: 1rem;
                margin-bottom: 1rem;
                flex-direction: column;
                gap: 1rem;
            }

            .page-header h2 {
                font-size: 1.5rem;
                text-align: center;
            }

            .user-info {
                justify-content: center;
            }

            .stats-card {
                padding: 1.5rem 1rem;
                margin-bottom: 1rem;
            }

            .stats-card h3 {
                font-size: 2rem;
            }

            .card {
                margin-bottom: 1rem;
            }

            .card-header {
                padding: 1rem;
            }

            .card-body {
                padding: 1rem;
            }

            /* Mobile Table Optimizations */
            .table-responsive {
                border-radius: var(--border-radius);
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table {
                min-width: 800px;
                font-size: 0.875rem;
            }

            .table th,
            .table td {
                padding: 0.75rem 0.5rem;
                white-space: nowrap;
            }

            .table th {
                font-size: 0.8rem;
            }

            /* Mobile Card Layout for Tables */
            .mobile-card-view {
                display: none;
            }

            .table-view {
                display: block;
            }

            /* Alternative mobile layout */
            @media (max-width: 576px) {
                .table-view {
                    display: none;
                }

                .mobile-card-view {
                    display: block;
                }

                .mobile-item-card {
                    background: rgba(26, 26, 26, 0.9);
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    border-radius: var(--border-radius);
                    padding: 1rem;
                    margin-bottom: 1rem;
                    box-shadow: var(--shadow-sm);
                }

                .mobile-item-card:hover {
                    transform: translateY(-2px);
                    box-shadow: var(--shadow-md);
                }

                .mobile-item-header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 0.75rem;
                    padding-bottom: 0.75rem;
                    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                }

                .mobile-item-title {
                    font-weight: 600;
                    color: var(--text-primary);
                    font-size: 1.1rem;
                }

                .mobile-item-body {
                    display: grid;
                    gap: 0.5rem;
                }

                .mobile-item-row {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    padding: 0.25rem 0;
                }

                .mobile-item-label {
                    font-weight: 500;
                    color: var(--text-muted);
                    font-size: 0.875rem;
                }

                .mobile-item-value {
                    color: var(--text-primary);
                    font-size: 0.875rem;
                    text-align: right;
                    flex: 1;
                    margin-left: 1rem;
                }
            }

            /* Buttons and forms on mobile */
            .btn {
                padding: 0.75rem 1rem;
                font-size: 0.9rem;
            }

            .btn-sm {
                padding: 0.5rem 0.75rem;
                font-size: 0.8rem;
            }

            .dropdown-menu {
                min-width: 140px;
                font-size: 0.875rem;
            }

            .dropdown-item {
                padding: 0.5rem 0.75rem;
            }

            /* Pagination on mobile */
            .pagination {
                justify-content: center;
                flex-wrap: wrap;
                gap: 0.25rem;
            }

            .page-link {
                padding: 0.5rem 0.75rem;
                font-size: 0.875rem;
                margin: 0.125rem;
            }

            /* Quick actions grid */
            .row.g-3 .col-md-3 {
                width: 50%;
                padding: 0.5rem;
            }

            .btn.py-3 {
                padding: 1rem !important;
            }

            /* Empty state on mobile */
            .empty-state {
                padding: 2rem 1rem;
            }

            .empty-state i {
                font-size: 3rem;
            }

            .empty-state h5 {
                font-size: 1.1rem;
            }

            .empty-state p {
                font-size: 0.9rem;
            }

            /* Alert messages */
            .alert {
                padding: 0.75rem 1rem;
                font-size: 0.9rem;
            }

            /* Modal improvements for mobile */
            .modal-dialog {
                margin: 1rem;
                max-width: calc(100% - 2rem);
            }

            .modal-content {
                border-radius: var(--border-radius);
            }

            .modal-header {
                padding: 1rem;
            }

            .modal-body {
                padding: 1rem;
            }

            .modal-footer {
                padding: 1rem;
                flex-direction: column;
                gap: 0.5rem;
            }

            .modal-footer .btn {
                width: 100%;
            }

            /* Badges on mobile */
            .badge {
                font-size: 0.75rem;
                padding: 0.375rem 0.5rem;
            }

            /* User avatar in header */
            .user-avatar {
                width: 32px;
                height: 32px;
                font-size: 0.875rem;
            }

            /* List group items */
            .list-group-item {
                padding: 0.75rem;
            }

            /* Card footer */
            .card-footer {
                padding: 0.75rem 1rem;
                flex-direction: column;
                gap: 0.5rem;
                text-align: center;
            }

            .card-footer .text-muted {
                font-size: 0.8rem;
            }
        }

        /* Extra small devices */
        @media (max-width: 480px) {
            .main-content {
                padding: 4rem 0.5rem 0.5rem;
            }

            .page-header {
                padding: 0.75rem;
                margin-bottom: 0.75rem;
            }

            .page-header h2 {
                font-size: 1.25rem;
            }

            .stats-card {
                padding: 1rem 0.75rem;
            }

            .stats-card h3 {
                font-size: 1.75rem;
            }

            .stats-card p {
                font-size: 0.875rem;
            }

            .card-header {
                padding: 0.75rem;
            }

            .card-body {
                padding: 0.75rem;
            }

            .mobile-item-card {
                padding: 0.75rem;
            }

            .mobile-item-title {
                font-size: 1rem;
            }

            .row.g-3 .col-md-3 {
                width: 100%;
                padding: 0.25rem;
            }

            .dropdown-menu {
                min-width: 120px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>
    <!-- Mobile Navigation Toggle -->
    <button class="mobile-nav-toggle" id="mobileNavToggle">
        <i class="fas fa-bars"></i>
    </button>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 p-0">
                <div class="sidebar" id="sidebar">
                    <div class="sidebar-header">
                        <h5>
                            <i class="fas fa-cog"></i> Адмін-панель
                        </h5>
                        <small>TransSense</small>
                    </div>

                    <nav class="nav flex-column">
                        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
                            href="{{ route('admin.dashboard') }}">
                            <i class="fas fa-tachometer-alt"></i> Головна
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.call-requests') ? 'active' : '' }}"
                            href="{{ route('admin.call-requests') }}">
                            <i class="fas fa-phone"></i> Заявки на дзвінок
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.quote-requests') ? 'active' : '' }}"
                            href="{{ route('admin.quote-requests') }}">
                            <i class="fas fa-file-invoice"></i> Запити пропозицій
                        </a>
                        <a class="nav-link {{ request()->routeIs('admin.contact-messages') ? 'active' : '' }}"
                            href="{{ route('admin.contact-messages') }}">
                            <i class="fas fa-envelope"></i> Контактні повідомлення
                        </a>

                        <hr style="border-color: rgba(255,255,255,0.2); margin: 1.5rem 1rem;">

                        <a class="nav-link" href="{{ route('welcome') }}" target="_blank">
                            <i class="fas fa-external-link-alt"></i> Відвідати сайт
                        </a>

                        <form method="POST" action="{{ route('logout') }}"
                            style="margin-top: auto; padding-top: 2rem;">
                            @csrf
                            <button type="submit" class="nav-link btn btn-link text-start w-100"
                                style="color: rgba(255,255,255,0.85); border: none; background: none;">
                                <i class="fas fa-sign-out-alt"></i> Вийти
                            </button>
                        </form>
                    </nav>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-10">
                <div class="main-content">
                    <!-- Header -->
                    <div class="page-header animate-fade-in-up">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>@yield('page-title', 'Адмін-панель')</h2>
                            <div class="user-info">
                                <div class="user-avatar">
                                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                </div>
                                <div>
                                    <div style="font-weight: 600; color: #334155;">{{ auth()->user()->name }}</div>
                                    <small style="color: #64748b;">Адміністратор</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerts -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show animate-fade-in-up" role="alert">
                            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show animate-fade-in-up" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <!-- Content -->
                    <div class="animate-fade-in-up">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileNavToggle = document.getElementById('mobileNavToggle');
            const sidebar = document.getElementById('sidebar');

            // Toggle mobile menu
            function toggleMobileMenu() {
                sidebar.classList.toggle('show');

                // Change icon
                const icon = mobileNavToggle.querySelector('i');
                if (sidebar.classList.contains('show')) {
                    icon.className = 'fas fa-times';
                } else {
                    icon.className = 'fas fa-bars';
                }
            }

            // Close mobile menu
            function closeMobileMenu() {
                sidebar.classList.remove('show');
                mobileNavToggle.querySelector('i').className = 'fas fa-bars';
            }

            // Event listeners
            if (mobileNavToggle) {
                mobileNavToggle.addEventListener('click', toggleMobileMenu);
            }

            // Close menu when clicking on nav links (mobile)
            const navLinks = sidebar.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        setTimeout(closeMobileMenu, 150);
                    }
                });
            });

            // Close menu on window resize
            window.addEventListener('resize', () => {
                if (window.innerWidth > 768) {
                    closeMobileMenu();
                }
            });

            // Close menu when clicking outside on mobile
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768 &&
                    sidebar.classList.contains('show') &&
                    !sidebar.contains(e.target) &&
                    !mobileNavToggle.contains(e.target)) {
                    closeMobileMenu();
                }
            });

            // Handle dropdown show events
            document.querySelectorAll('.dropdown').forEach(function(dropdown) {
                const toggle = dropdown.querySelector('.dropdown-toggle');
                const menu = dropdown.querySelector('.dropdown-menu');

                if (toggle && menu) {
                    dropdown.addEventListener('show.bs.dropdown', function(e) {
                        // Increase z-index when dropdown is shown
                        menu.style.zIndex = '1070';
                        menu.style.position = 'absolute';

                        // For mobile devices, ensure proper positioning
                        if (window.innerWidth <= 768) {
                            setTimeout(() => {
                                const rect = toggle.getBoundingClientRect();
                                const menuRect = menu.getBoundingClientRect();

                                // Position dropdown to the right if there's space, otherwise to the left
                                if (rect.right + menuRect.width > window.innerWidth) {
                                    menu.style.left = 'auto';
                                    menu.style.right = '0';
                                } else {
                                    menu.style.left = '0';
                                    menu.style.right = 'auto';
                                }

                                // Ensure dropdown doesn't go off screen vertically
                                if (rect.bottom + menuRect.height > window.innerHeight) {
                                    menu.style.top = 'auto';
                                    menu.style.bottom = '100%';
                                    menu.style.marginBottom = '0.25rem';
                                    menu.style.marginTop = '0';
                                } else {
                                    menu.style.top = '100%';
                                    menu.style.bottom = 'auto';
                                    menu.style.marginTop = '0.25rem';
                                    menu.style.marginBottom = '0';
                                }
                            }, 10);
                        }
                    });

                    dropdown.addEventListener('hide.bs.dropdown', function() {
                        // Reset z-index when dropdown is hidden
                        menu.style.zIndex = '1050';
                    });

                    // Prevent dropdown from closing when clicking inside (for forms)
                    menu.addEventListener('click', function(e) {
                        if (e.target.tagName === 'FORM' || e.target.closest('form')) {
                            e.stopPropagation();
                        }
                    });
                }
            });

            // Handle table responsive overflow
            const tableResponsive = document.querySelectorAll('.table-responsive');
            tableResponsive.forEach(function(table) {
                table.style.overflow = 'visible';
            });

            // Auto-refresh functionality (if on dashboard)
            if (window.location.pathname.includes('admin') && !window.location.pathname.includes('login')) {
                setInterval(() => {
                    // Only refresh if user is active (not idle)
                    if (document.visibilityState === 'visible') {
                        // Add subtle refresh indicator
                        const refreshIndicator = document.createElement('div');
                        refreshIndicator.innerHTML = '<i class="fas fa-sync-alt fa-spin"></i>';
                        refreshIndicator.style.cssText = `
                            position: fixed;
                            top: 20px;
                            right: 20px;
                            background: var(--primary-gradient);
                            color: white;
                            padding: 8px 12px;
                            border-radius: 20px;
                            font-size: 12px;
                            z-index: 9999;
                            box-shadow: var(--shadow-md);
                        `;
                        document.body.appendChild(refreshIndicator);

                        setTimeout(() => {
                            if (refreshIndicator.parentNode) {
                                refreshIndicator.remove();
                            }
                        }, 2000);
                    }
                }, 300000); // 5 minutes
            }

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Improve touch interactions for mobile dropdowns
            if ('ontouchstart' in window) {
                document.body.classList.add('touch-device');

                // Improve button touch targets
                const buttons = document.querySelectorAll('.btn, .nav-link, .dropdown-toggle');
                buttons.forEach(btn => {
                    btn.style.minHeight = '44px';
                    btn.style.minWidth = '44px';
                });

                document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
                    toggle.addEventListener('touchstart', function(e) {
                        // Add a small delay to prevent accidental touches
                        this.style.transform = 'scale(0.98)';
                        setTimeout(() => {
                            this.style.transform = 'scale(1)';
                        }, 100);
                    });
                });

                document.querySelectorAll('.dropdown-item').forEach(item => {
                    item.addEventListener('touchstart', function(e) {
                        this.style.background = 'rgba(255, 255, 255, 0.2)';
                    });

                    item.addEventListener('touchend', function(e) {
                        setTimeout(() => {
                            this.style.background = '';
                        }, 150);
                    });
                });
            }

            // Keyboard navigation improvements
            document.addEventListener('keydown', function(e) {
                // ESC key closes mobile menu
                if (e.key === 'Escape' && sidebar.classList.contains('show')) {
                    closeMobileMenu();
                }

                // Tab navigation improvements
                if (e.key === 'Tab') {
                    const focusableElements = document.querySelectorAll(
                        'a[href], button:not([disabled]), textarea:not([disabled]), input:not([disabled]), select:not([disabled]), [tabindex]:not([tabindex="-1"])'
                    );

                    const firstElement = focusableElements[0];
                    const lastElement = focusableElements[focusableElements.length - 1];

                    if (sidebar.classList.contains('show')) {
                        // Trap focus within sidebar when open
                        const sidebarElements = sidebar.querySelectorAll(
                            'a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])'
                        );
                        const firstSidebarElement = sidebarElements[0];
                        const lastSidebarElement = sidebarElements[sidebarElements.length - 1];

                        if (e.shiftKey && document.activeElement === firstSidebarElement) {
                            e.preventDefault();
                            lastSidebarElement.focus();
                        } else if (!e.shiftKey && document.activeElement === lastSidebarElement) {
                            e.preventDefault();
                            firstSidebarElement.focus();
                        }
                    }
                }
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
