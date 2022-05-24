<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion_perso</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
        <div class="container-fluid">
            <img src="{{ asset('Images/hcr1.png') }}" style="max-width:80px" alt="">
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{url('/') }}">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{route('gestion_personnel.create') }}">FORMULAIRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{route('gestion_personnel.index') }}">LISTE</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2 text-light" type="search" placeholder="Recherche" aria-label="Search">
                    <button class="btn btn-outline-light" id="myInput" onkeyup="myFunction()" type="submit">Recherche</button>
                </form>
            </div>
        </div>
    </nav>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
    @yield('contenu')

</body>

</html>