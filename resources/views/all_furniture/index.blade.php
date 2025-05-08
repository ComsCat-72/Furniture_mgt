<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Furniture</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e1e2f, #2a2a3b);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #e0e0e0;
        }

        .top-buttons {
            display: flex;
            gap: 20px;
            margin: 20px 0;
        }

        .top-buttons a button {
            background: #2a2a3b;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 14px;
            color: #e0e0e0;
            cursor: pointer;
            box-shadow: 5px 5px 10px #1a1a28, -5px -5px 10px #343446;
            transition: all 0.3s ease;
        }

        .top-buttons a button:hover {
            background: #3a3a4b;
            box-shadow: inset 5px 5px 10px #1a1a28, inset -5px -5px 10px #343446;
        }

        .container {
            background: #2a2a3b;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 20px 20px 60px #1a1a28, -20px -20px 60px #343446;
            text-align: center;
            transition: all 0.3s ease;
            width: 80%;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h2 {
            color: #ffffff;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #2a2a3b;
            border-radius: 15px;
            box-shadow: inset 10px 10px 20px #1a1a28, inset -10px -10px 20px #343446;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            font-size: 16px;
        }

        table th {
            background: #2a2a3b;
            color: #e0e0e0;
            box-shadow: inset 5px 5px 10px #1a1a28, inset -5px -5px 10px #343446;
        }

        table tr:nth-child(even) {
            background-color: #3a3a4b;
        }

        table tr:hover {
            background-color: #444455;
        }

        table td {
            box-shadow: inset 5px 5px 10px #1a1a28, inset -5px -5px 10px #343446;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .action-buttons button {
            background: #2a2a3b;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 14px;
            color: #e0e0e0;
            cursor: pointer;
            box-shadow: 5px 5px 10px #1a1a28, -5px -5px 10px #343446;
            transition: all 0.3s ease;
        }

        .action-buttons button:hover {
            background: #3a3a4b;
            box-shadow: inset 5px 5px 10px #1a1a28, inset -5px -5px 10px #343446;
        }
    </style>
</head>
<body>
<div class="top-buttons">
        <a href="/add_furniture">
            <button>Add new</button>
        </a>
        <a href="/home">
            <button>Home</button>
        </a>
    </div>
    <div class="container">
        <h2>All Furniture</h2>
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
                                <button type="submit">EDIT</button>
                            </form>

                            <form action="{{ route('delete_furniture', $item->FurnitureId) }}" method="POST">
                                @csrf
                                <!-- @method('DELETE') -->
                                <button type="submit">DELETE</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>