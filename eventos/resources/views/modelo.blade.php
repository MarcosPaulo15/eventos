<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Document</title>
</head>
<body>
    <header>
        @yield('header')
        
    </header>
    <main class="container-fluid">
        @yield('main') 
    </main>
    <footer> 
        @yield('footer')
    </footer>

@yield('modeloBody')    
</body>
</html>