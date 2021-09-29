<!DOCTYPE html>
<html lang="en">

<head>
    <title>@hasSection ('title') @yield('title') @else CRUD Operations @endif</title>
    <link href="/styles.css" rel="stylesheet" />
</head>

<body>
    <header>
        @hasSection ('title') @yield('title') @else Products @endif
    </header>

    @yield('content')

    <div class="product-footer">
        @yield('footer')
    </div>
</body>

</html>