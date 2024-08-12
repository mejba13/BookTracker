<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Book updated successfully</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333333;
        }
        p {
            color: #555555;
            line-height: 1.6;
        }
        a {
            display: inline-block;
            background-color: #007BFF;
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }
        a:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888888;
            font-size: 12px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>{{ $book->title }}</h2>
    <p>
        Congrats! Book updated successfully
    </p>
    <p>
        <a href="">View Your Book Listing</a>
    </p>
    <div class="footer">
        <p>&copy; {{ date('Y') }} BookTracker. All rights reserved.</p>
    </div>
</div>
</body>
</html>
