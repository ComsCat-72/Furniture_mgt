<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Manager</title>
    <style>
        :root {
            --glow-color: rgba(37, 255, 106, 0.15);
            --dark-bg: #0a0a0a;
            --card-bg: #111111;
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
            position: absolute;
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
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-color);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-link {
            color: var(--text-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: var(--accent-green);
        }

        .main-content {
            position: relative;
            z-index: 1;
            max-width: 1200px;
            margin: 6rem auto 0;
            padding: 0 2rem;
            text-align: center;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, #ffffff, var(--accent-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: #888;
            margin-bottom: 3rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--accent-green);
            color: var(--dark-bg);
            padding: 1rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px var(--glow-color);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 6rem;
            padding: 2rem;
        }

        .feature-card {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 20px;
            text-align: left;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .feature-card h3 {
            color: var(--accent-green);
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: #888;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <a href="/" class="logo">FurnitureManagement System Comscat<i>By</i><br>Comscat </a>
        <div class="nav-links">
            <a href="{{ route('login') }}" class="nav-link">Login</a>
            <a href="{{ route('register.show') }}" class="nav-link">Register</a>
        </div>
    </nav>

    <main class="main-content">
        <h1 class="hero-title">The Smart Furniture<br>Management System</h1>
        <p class="hero-subtitle">
            Efficiently manage your furniture inventory with our modern, intuitive platform. 
            Track, organize, and maintain your furniture collection with ease.
        </p>
        <a href="{{ route('register.show') }}" class="cta-button">
            Get Started
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M12 4L10.59 5.41L16.17 11H4V13H16.17L10.59 18.59L12 20L20 12L12 4Z" fill="currentColor"/>
            </svg>
        </a>

        <div class="features">
            <div class="feature-card">
                <h3>Easy Management</h3>
                <p>Add, update, and track your furniture inventory with just a few clicks. Our intuitive interface makes management simple.</p>
            </div>
            <div class="feature-card">
                <h3>Secure Access</h3>
                <p>Your data is protected with modern security practices. Control who has access to your furniture inventory.</p>
            </div>
            <div class="feature-card">
                <h3>Real-time Updates</h3>
                <p>Keep track of your furniture in real-time. Get instant updates when changes are made to your inventory.</p>
            </div>
        </div>
    </main>
</body>
</html> 