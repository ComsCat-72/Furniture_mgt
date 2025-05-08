<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redirect to Furniture Form</title>
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
        }

        .container:hover {
            transform: scale(1.02);
        }

        h2 {
            color: #ffffff;
            margin-bottom: 30px;
        }

        .redirect-button {
            background: #2a2a3b;
            border: none;
            padding: 12px 25px;
            border-radius: 30px;
            color: #e0e0e0;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 5px 5px 10px #1a1a28, -5px -5px 10px #343446;
            transition: all 0.3s ease;
        }

        .redirect-button:hover {
            background: #3a3a4b;
            box-shadow: inset 5px 5px 10px #1a1a28, inset -5px -5px 10px #343446;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Ready to Track your furnitures?</h2>
        <!-- <button class="redirect-button" onclick="window.location.href='{{route('add_page')}}'">Continue to add</button>
          -->
        <!-- <button class="redirect-button" onclick="window.location.href='{{route('all_furniture')}}'">View all product</button> -->
        
        <a href="/all_furniture">
        <button class="redirect-button">View all product</button>
        </a>
    </div>

</body>
</html>
