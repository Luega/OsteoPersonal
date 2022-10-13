<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        wp_head(); // wp inietta lo style che ho scritto in function.php
    ?>
    <title>Osteopati Luca Martinelli</title>
</head>
<body>
    <!-- HEADER -->
    <header class="header px-lg-5 py-3">
        <div class="container-fluid">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid justify-content-end">
                    <!-- hamburger-menu -->
                    <button class="header--hamburgermenu navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- nav-menu -->
                    <div class="collapse justify-content-between navbar-collapse" id="navbarSupportedContent">
                        <ul class="m-lg-0 container-lg w-75 justify-content-around navbar-nav mt-3 mb-2 mt-lg-0 mb-lg-0">
                            <li class="nav-item">
                                <a class="header--link nav-link active text-center" aria-current="page" href="http://localhost/osteo_wp/home/">Hem</a>
                            </li>
                            <li class="nav-item">
                                <a class="header--link nav-link active text-center" aria-current="page" href="http://localhost/osteo_wp/osteopathy/">Osteopati</a>
                            </li>
                            <li class="nav-item">
                                <a class="header--link nav-link active text-center" aria-current="page" href="http://localhost/osteo_wp/whoiam/">Vem jag är?</a>
                            </li>
                            <li class="nav-item">
                                <a class="header--link nav-link active text-center" aria-current="page" href="http://localhost/osteo_wp/products/">Behandlingen</a>
                            </li>
                            <li class="nav-item">
                                <a class="header--link nav-link active text-center" aria-current="page" href="http://localhost/osteo_wp/contacts/">Kontakt</a>
                            </li>
                        </ul>
                        <!-- button cta -->
                        <form class="m-lg-auto m-lg-0 d-flex" action="https://www.bokadirekt.se/places/r%C3%B6relsem%C3%B6nster--20143" target="_blank">
                            <button class="container-lg m-auto btn my--button" type="submit">BOKA NU</button>
                        </form>
                  </div>
                </div>
            </nav>
        </div>
    </header>