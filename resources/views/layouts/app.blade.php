<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>App - @yield('title')</title>
  @stack('styles')
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <header>
    <a href="/">Welcome page</a>
    <a href="quiz">Countries Quiz</a>
    @yield('header')</header>
  <main>
    @yield('content')
  </main>
</body>

</html>
