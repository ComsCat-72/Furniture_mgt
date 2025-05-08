<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Furniture</title>
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

        .top-left {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .top-left a button {
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

        .top-left a button:hover {
            background: #3a3a4b;
            box-shadow: inset 5px 5px 10px #1a1a28, inset -5px -5px 10px #343446;
        }

        .form-container {
            background: #2a2a3b;
            padding: 30px 40px;
            border-radius: 25px;
            box-shadow: 20px 20px 60px #1a1a28, -20px -20px 60px #343446;
            width: 350px;
            transition: all 0.3s ease;
        }

        .form-container:hover {
            transform: scale(1.02);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #ffffff;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #cccccc;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 12px;
            background-color: #2a2a3b;
            color: #e0e0e0;
            box-shadow: inset 2px 2px 5px #1a1a28, inset -2px -2px 5px #343446;
        }

        input[type="text"]::placeholder {
            color: #aaa;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #2a2a3b;
            color: #e0e0e0;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            font-weight: bold;
            box-shadow: 5px 5px 10px #1a1a28, -5px -5px 10px #343446;
            transition: all 0.3s ease;
        }

        button[type="submit"]:hover {
            background: #3a3a4b;
            box-shadow: inset 5px 5px 10px #1a1a28, inset -5px -5px 10px #343446;
        }

    </style>
</head>
<body>
    <div class="top-left">
        <a href="/home">
            <button>Home</button>
        </a>
    </div>

    <form class="form-container" action="{{route('add')}}" method="post">
        @csrf
        <h2>Add Furniture</h2>

        <label for="FurnitureName">Furniture Name</label>
        <input type="text" id="FurnitureName" name="FurnitureName" >

        <label for="FurnitureOwnerName">Furniture Owner Name</label>
        <input type="text" id="FurnitureOwnerName" name="FurnitureOwnerName">

        <button type="submit">Add Furniture</button>
    </form>
</body>

</html>
