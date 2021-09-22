<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title ?? 'My Blog Posts' }}</title>
    <link href="/styles.css" rel="stylesheet" />
</head>

<body>
    <header>
        This is a blog
    </header>

    <body>
        {{ $slot }}
    </body>

    <footer>
        <img src="https://github.githubassets.com/images/modules/logos_page/Octocat.png" alt="">
        You can find me on github
    </footer>

</html>