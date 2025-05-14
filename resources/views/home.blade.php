<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Furniture Manager</title>
    <style>
        :root {
            --glow-color: rgba(37, 255, 106, 0.15);
            --dark-bg: #0a0a0a;
            --card-bg: rgba(17, 17, 17, 0.7);
            --text-color: #e0e0e0;
            --accent-green: #25ff6a;
        }

         body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--dark-bg);
            margin: 0;
            min-height: 100vh;
            color: var(--text-color);
            position: relative;
            overflow-x: hidden;
        }

        /* Glow effect */
        body::before {
            content: '';
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, var(--glow-color) 0%, transparent 50%);
            opacity: 0.6;
            z-index: 0;
            pointer-events: none;
        }

        .navbar {
            position: relative;
            z-index: 10;
            background: rgba(17, 17, 17, 0.8);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
        }

        .nav-brand {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent-green);
            text-decoration: none;
            text-shadow: 0 0 10px rgba(37, 255, 106, 0.3);
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .nav-link {
            color: var(--text-color);
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s;
            font-weight: 500;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-link:hover {
            background: rgba(37, 255, 106, 0.1);
            color: var(--accent-green);
            border-color: var(--accent-green);
        }

        .nav-link.active {
            background: var(--accent-green);
            color: var(--dark-bg);
        }

        .logout-form {
            margin: 0;
        }

        .logout-button {
            background: rgba(255, 69, 58, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid #ff453a;
            color: #ff453a;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .logout-button:hover {
            background: #ff453a;
            color: var(--dark-bg);
            box-shadow: 0 0 20px rgba(255, 69, 58, 0.3);
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .dashboard-header {
            margin-bottom: 2rem;
        }

        .dashboard-title {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, #ffffff, var(--accent-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 10px rgba(37, 255, 106, 0.3);
        }

        .dashboard-subtitle {
            color: rgba(255, 255, 255, 0.6);
            font-size: 1.1rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: rgba(17, 17, 17, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            border-color: var(--accent-green);
        }

        .stat-card h3 {
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .stat-card .value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent-green);
            text-shadow: 0 0 10px rgba(37, 255, 106, 0.3);
        }

        .quick-actions {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }

        .action-button {
            background: rgba(17, 17, 17, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 15px;
            text-decoration: none;
            color: var(--text-color);
            text-align: center;
            transition: all 0.3s;
        }

        .action-button:hover {
            border-color: var(--accent-green);
            transform: translateY(-2px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .action-button svg {
            width: 24px;
            height: 24px;
            margin-bottom: 0.5rem;
            fill: var(--accent-green);
            filter: drop-shadow(0 0 5px rgba(37, 255, 106, 0.3));
        }

        .action-button span {
            display: block;
            font-weight: 500;
            text-shadow: 0 0 10px rgba(224, 224, 224, 0.2);
        }

        @media (max-width: 768px) {
            .nav-content {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
            }

            .logout-form {
                width: 100%;
            }

            .logout-button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <a href="{{ route('home') }}" class="nav-brand">FurnitureManager</a>
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link active">Dashboard</a>
                <a href="{{ route('all_furniture') }}" class="nav-link">View All</a>
                <a href="{{ route('add_page') }}" class="nav-link">Add New</a>
                <form action="{{ route('logout') }}" method="POST" class="logout-form">
                    @csrf
                    <button type="submit" class="logout-button">Sign Out</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <header class="dashboard-header">
            <h1 class="dashboard-title">Welcome Back{{ auth()->user() ? ', ' . auth()->user()->name : '' }}</h1>
            <p class="dashboard-subtitle">Manage and track your furniture inventory</p>
        </header>

        <div class="stats-grid">
            <div class="stat-card">
                <h3>Total Furniture</h3>
                <div class="value">{{ App\Models\Furniture::count() }}</div>
            </div>
            <div class="stat-card">
                <h3>Recent Additions</h3>
                <div class="value">{{ App\Models\Furniture::where('created_at', '>=', now()->subDays(7))->count() }}</div>
            </div>
        </div>

        <div class="quick-actions">
            <a href="{{ route('add_page') }}" class="action-button">
                <svg viewBox="0 0 24 24">
                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                </svg>
                <span>Add Furniture</span>
            </a>
            <a href="{{ route('all_furniture') }}" class="action-button">
                <svg viewBox="0 0 24 24">
                    <path d="M3 13h2v-2H3v2zm0 4h2v-2H3v2zm0-8h2V7H3v2zm4 4h14v-2H7v2zm0 4h14v-2H7v2zM7 7v2h14V7H7z"/>
                </svg>
                <span>View All Furniture</span>
            </a>
            <a href="{{ route('furniture.report.txt') }}" class="action-button">
                <svg viewBox="0 0 24 24">
                    <path d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                <span>Download Report</span>
            </a>
        </div>
    </div>
</body>
</html>
