<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/css/novo.css">
    <title>Document</title>

    <script>
        function mostrarCheckboxes() {
            
            var pagoCheckbox = document.getElementById("pago");
            var cartaoEstrangeiro = document.getElementById("cartaoEstrangeiro");
            var cartaoNacional = document.getElementById("cartaoNacional");
            var cartaoEstrangeiro1 = document.getElementById("cartaoEstrangeiro1");
            var cartaoNacional1 = document.getElementById("CartãoNac1");

            
            
            var ckbarcon = document.getElementById("ArCon");  
            var cmbarcon = document.getElementById("cmbArCon"); 

            var areaId = document.getElementById("areaId");
            var cmbArCon = document.getElementById("cmbArCon1"); 
            

            if (pagoCheckbox.checked) {
                cartaoEstrangeiro.style.display = "block";
                cartaoNacional.style.display = "block";
                cartaoEstrangeiro1.style.display = "block";
                cartaoNacional1.style.display = "block";
                cartaoEstrangeiro.style.marginLeft = "50px";
                cartaoNacional.style.marginLeft = "60px";
            } else {
                cartaoEstrangeiro.style.display = "none";
                cartaoNacional.style.display = "none";
                cartaoEstrangeiro1.style.display = "none";
                cartaoNacional1.style.display = "none";
            }
            
        }
    </script>
</head>
<body>

<header>
    @yield('header')
    <div class="toolbar"> 
        <img src="{{ asset('images/logo_imepac_geral.png') }}" alt="Logo IMEPAC" class="logo">
    </div>
</header>

<main >

    @yield('main')
        
</main>
</body>
</html>