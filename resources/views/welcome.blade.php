<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Witamy!</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }
        .welcome-box {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
            margin-bottom: 20px;
        }
        h1 {
            color: #343a40;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2rem;
            color: #6c757d;
        }
        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        footer {
            font-size: 0.9rem;
            color: #adb5bd;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>
<div class="welcome-box">
    <h1>Witamy w aplikacji!</h1>
    <p>Aby kontynuować, prosimy o <a href="{{ route('login') }}">zalogowanie się</a> lub <a href="{{ route('register') }}">zarejestrowanie</a>.</p>
</div>

<footer>
    <p>&copy; {{ date('Y') }} Twoja Aplikacja. Wszelkie prawa zastrzeżone.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
