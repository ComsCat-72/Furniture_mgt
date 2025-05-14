<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Furniture Manager</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
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

        .form-container {
            position: relative;
            z-index: 1;
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 20px;
            width: 400px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 20px;
            border: 1px solid transparent;
            background: linear-gradient(45deg, rgba(255,255,255,0.1), rgba(255,255,255,0)) border-box;
            -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: destination-out;
            mask-composite: exclude;
            pointer-events: none;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo-section a {
            color: var(--accent-green);
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: 700;
            text-shadow: 0 0 10px rgba(37, 255, 106, 0.3);
        }

        h2 {
            color: var(--text-color);
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.8rem;
            text-shadow: 0 0 10px rgba(224, 224, 224, 0.3);
        }

        .success {
            background: rgba(37, 255, 106, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid var(--accent-green);
            color: var(--accent-green);
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .error {
            background: rgba(255, 69, 58, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid #ff453a;
            color: #ff453a;
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-color);
            font-weight: 500;
            text-shadow: 0 0 10px rgba(224, 224, 224, 0.2);
        }

        input {
            width: 100%;
            padding: 0.75rem 1rem;
            background: rgba(10, 10, 10, 0.3);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            color: var(--text-color);
            font-size: 1rem;
            transition: all 0.3s;
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
            border-color: var(--accent-green);
            box-shadow: 0 0 15px rgba(37, 255, 106, 0.2);
            background: rgba(10, 10, 10, 0.5);
        }

        button {
            width: 100%;
            padding: 0.75rem;
            background: rgba(37, 255, 106, 0.2);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            color: var(--accent-green);
            border: 1px solid var(--accent-green);
            border-radius: 10px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            background: var(--accent-green);
            color: var(--dark-bg);
            box-shadow: 0 0 20px var(--glow-color);
        }

        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            color: rgba(255, 255, 255, 0.6);
        }

        .register-link a {
            color: var(--accent-green);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .register-link a:hover {
            text-shadow: 0 0 10px var(--accent-green);
        }

        @media (max-width: 480px) {
            .form-container {
                width: 90%;
                margin: 1rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="logo-section">
            <a href="/">FurnitureManager</a>
        </div>
        
        <h2>Welcome Back</h2>
        
        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="error">
                <ul style="margin: 0; padding-left: 1rem;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Sign In</button>
        </form>

        <div class="register-link">
            Don't have an account? <a href="{{ route('register.show') }}">Create one</a>
        </div>
    </div>
</body>
</html>
