<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Furniture</title>
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

        .container {
            position: relative;
            z-index: 1;
            max-width: 600px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .title {
            font-size: 2rem;
            font-weight: bold;
            color: var(--text-color);
            margin-bottom: 0.5rem;
            background: linear-gradient(to right, #ffffff, var(--accent-green));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 10px rgba(37, 255, 106, 0.3);
        }

        .form-container {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 2rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-color);
            font-weight: 500;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: var(--text-color);
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--accent-green);
            box-shadow: 0 0 0 2px rgba(37, 255, 106, 0.2);
        }

        .button-group {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .submit-btn {
            flex: 1;
            padding: 0.75rem;
            background: var(--accent-green);
            color: var(--dark-bg);
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }

        .cancel-btn {
            flex: 1;
            padding: 0.75rem;
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-color);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
            transition: all 0.3s;
        }

        .cancel-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 1rem;
            }

            .button-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Add New Furniture</h1>
        </div>

        <div class="form-container">
            <form action="{{ route('add') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="FurnitureName">Furniture Name</label>
                    <input type="text" class="form-input" id="FurnitureName" name="FurnitureName" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="FurnitureOwnerName">Owner Name</label>
                    <input type="text" class="form-input" id="FurnitureOwnerName" name="FurnitureOwnerName" required>
                </div>

                <div class="button-group">
                    <button type="submit" class="submit-btn">Add Furniture</button>
                    <a href="{{ route('all_furniture') }}" class="cancel-btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
