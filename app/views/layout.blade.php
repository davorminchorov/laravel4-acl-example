<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Authentication</title>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/layout.css"/>

</head>
<body>
    @include("header")

    <div class="content">
        <div class="container">
            @yield("content")
        </div>
    </div>

    @include("footer")

</body>
</html>