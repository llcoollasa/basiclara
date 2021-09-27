<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <link href="/styles.css" rel="stylesheet" />
</head>

<body>
    <header>
        This is a blog
    </header>

    @yield('content')

    <footer>
        <img src="https://github.githubassets.com/images/modules/logos_page/Octocat.png" alt="">
        You can find me on github
    </footer>
</body>

</html>