<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Furniture - Furniture Manager</title>
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
            background: var(--card-bg);
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
        }

        .nav-link:hover {
            background: rgba(37, 255, 106, 0.1);
            color: var(--accent-green);
        }

        .nav-link.active {
            background: var(--accent-green);
            color: var(--dark-bg);
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 600px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .form-container {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        h2 {
            color: var(--text-color);
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.8rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-color);
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 0.75rem 1rem;
            background: var(--dark-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: var(--text-color);
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--accent-green);
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background: var(--accent-green);
            color: var(--dark-bg);
            border: none;
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px var(--glow-color);
        }

        button svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        @media (max-width: 768px) {
            .nav-content {
                flex-direction: column;
                gap: 1rem;
            }

            .nav-links {
                flex-direction: column;
                width: 100%;
            }

            .nav-link {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-content">
            <a href="{{ route('home') }}" class="nav-brand">FurnitureManager</a>
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link">Dashboard</a>
                <a href="{{ route('all_furniture') }}" class="nav-link">View All</a>
                
            </div>
        </div>
    </nav>

    <div class="container">
        <form class="form-container" action="{{ route('add') }}" method="post">
            @csrf
            <h2>Add New Furniture</h2>

            <div class="form-group">
                <label for="FurnitureName">Furniture Name</label>
                <input type="text" id="FurnitureName" name="FurnitureName" required>
            </div>

            <div class="form-group">
                <label for="FurnitureOwnerName">Furniture Owner Name</label>
                <input type="text" id="FurnitureOwnerName" name="FurnitureOwnerName" required>
            </div>

            <button type="submit">
                <svg viewBox="0 0 24 24">
                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                </svg>
                Add Furniture
            </button>
        </form>
    </div>
</body>
</html>
