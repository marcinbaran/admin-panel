<!DOCTYPE html>
<html>
<head>
    <title>Resetowanie hasła</title>
</head>
<body>
    <h1>Resetowanie hasła</h1>
    <p>Otrzymałeś ten e-mail, ponieważ otrzymaliśmy prośbę o resetowanie hasła dla Twojego konta.</p>
    <p>Aby zresetować hasło, kliknij w link poniżej:</p>
    <a href="{{ url('reset-password', $token) . '?email=' . $email }}">Zresetuj hasło</a>
    <p>Jeśli to nie Ty prosiłeś o reset hasła, możesz zignorować ten e-mail.</p>
</body>
</html>
