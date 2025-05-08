<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Furniture</title>
    <style>
       body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e1e2f, #2a2a3b);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #e0e0e0;
        }

        .container {
            background: #2a2a3b;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 20px 20px 60px #1a1a28, -20px -20px 60px #343446;
            text-align: center;
            transition: all 0.3s ease;
            width: 400px;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h2 {
            color: #ffffff;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"] {
            padding: 12px;
            border-radius: 12px;
            border: none;
            background-color: #2a2a3b;
            color: #e0e0e0;
            box-shadow: inset 2px 2px 5px #1a1a28, inset -2px -2px 5px #343446;
        }

        input[type="text"]::placeholder {
            color: #aaa;
        }

        button {
            padding: 12px;
            background: #2a2a3b;
            color: white;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 5px 5px 10px #1a1a28, -5px -5px 10px #343446;
            transition: 0.3s ease;
        }

        button:hover {
            background: #3a3a4b;
            box-shadow: inset 5px 5px 10px #1a1a28, inset -5px -5px 10px #343446;
        }git
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Furniture</h2>
        <form action="{{ route('update_furniture', $data->FurnitureId ) }}" method="POST">
            @csrf
            <label for="FurnitureName">Furniture Name:</label>
            <input type="text" id="FurnitureName" name="FurnitureName" value="{{ $data->FurnitureName }}" required>

            <label for="FurnitureOwnerName">Furniture Owner Name:</label>
            <input type="text" id="FurnitureOwnerName" name="FurnitureOwnerName" value="{{ $data->FurnitureOwnerName }}" required>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>