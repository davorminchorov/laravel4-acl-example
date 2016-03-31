<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
</head>
<body>
    <h1> Password Reset </h1>
    To reset your password, complete this form:
    {{ URL::route("users/reset", compact("token")) }}
</body>
</html>