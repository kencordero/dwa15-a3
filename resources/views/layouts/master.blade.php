<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        @yield('title')
    </title>

    <!-- image source: http://paulferrett.com/fontawesome-favicon/ -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon-credit-card.ico">
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/global.css">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
