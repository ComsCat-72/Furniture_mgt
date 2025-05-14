<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Furniture</title>
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
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .title {
            font-size: 2rem;
            font-weight: bold;
            color: var(--text-color);
            text-shadow: 0 0 10px rgba(224, 224, 224, 0.3);
        }

        .button-group {
            display: flex;
            gap: 1rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 0.75rem 1.5rem;
            background: rgba(17, 17, 17, 0.7);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0.5rem;
            color: var(--text-color);
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn:hover {
            background: rgba(37, 255, 106, 0.1);
            border-color: var(--accent-green);
            color: var(--accent-green);
            transform: translateY(-2px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .btn svg {
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 0.5rem;
            stroke: currentColor;
        }

        .table-container {
            background: rgba(17, 17, 17, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 1rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            overflow: hidden;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            padding: 1rem;
            text-align: left;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-color);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-shadow: 0 0 10px rgba(224, 224, 224, 0.2);
        }

        td {
            padding: 1rem;
            color: var(--text-color);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.01);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        tr:hover td {
            background: rgba(255, 255, 255, 0.05);
        }

        .action-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }

        .action-btn {
            background: none;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 0.5rem;
        }

        .edit-btn {
            color: var(--accent-green);
        }

        .edit-btn:hover {
            background: rgba(37, 255, 106, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 0 15px rgba(37, 255, 106, 0.2);
        }

        .delete-btn {
            color: #ff4444;
        }

        .delete-btn:hover {
            background: rgba(255, 68, 68, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 0 15px rgba(255, 68, 68, 0.2);
        }

        .action-btn svg {
            width: 1.25rem;
            height: 1.25rem;
            stroke: currentColor;
            filter: drop-shadow(0 0 5px currentColor);
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 1rem;
                text-align: center;
            }

            .button-group {
                width: 100%;
                justify-content: center;
            }

            .table-container {
                overflow-x: auto;
            }

            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">All Furniture</h1>
            <div class="button-group">
                <a href="/home" class="btn">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Home
                </a>
            </div>
        </div>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Owner</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($furniture as $item)
                    <tr>
                        <td>{{ $item->FurnitureName }}</td>
                        <td>{{ $item->FurnitureOwnerName }}</td>
                        <td>
                            <div class="action-buttons">
                                <form action="{{ route('update_form', $item->FurnitureId) }}" method="GET">
                                    @csrf
                                    <button type="submit" class="action-btn edit-btn">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </button>
                                </form>

                                <form action="{{ route('delete_furniture', $item->FurnitureId) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="action-btn delete-btn" onclick="return confirm('Are you sure you want to delete this item?')">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>