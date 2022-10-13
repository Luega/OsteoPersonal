<?php
        get_header(); // inserisce ció che ce scritto in header.php
    ?>




    <!-- SECTION_CONTACTS -->
    <main id="contactsPage__main">
        <div class="container py-5">
            <!-- TOP maps -->
            <div id="contacsPage__maps" class="row mb-5 p-5">
                <!-- left -->
                <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8132.196122887309!2d17.9974977!3d59.3655206!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3487213898a5d39b!2zUsO2cmVsc2Vtw7Zuc3RlciBBQg!5e0!3m2!1sit!2sse!4v1665661322260!5m2!1sit!2sse" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- right -->
                <div class="col-12 col-lg-7 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                    <h1 class="mb-3 text-uppercase myAnimation fade-in-right duration1 text-center">CONTATTI</h1>
                    <div class="myAnimation fade-in-right duration2">
                        <div class="row">
                            <div class="text-center">
                                <div  class="py-2">
                                    <a class="me-sm-3" href="https://www.google.com/maps/place/R%C3%B6relsem%C3%B6nster+AB/@59.3655206,17.9974977,15z/data=!4m5!3m4!1s0x0:0x3487213898a5d39b!8m2!3d59.3655206!4d17.9974977" target="_blank">
                                        <i class="d-none d-sm-inline fa-solid fa-location-dot m-3"></i><span class="my-3 my-md-0">Råsundavägene 104, Solna, Stockholm</span>
                                    </a>
                                </div>
                                <div  class="py-2">
                                    <a class="me-sm-3" href="mailto:luca.theosteopath@gmail.com" target="_blank">
                                        <i class="d-none d-sm-inline fa-solid fa-envelope m-3"></i>
                                        <span class="my-3 my-md-0">luca.theosteopath@gmail.com</span>
                                    </a>
                                </div>
                                <div  class="py-2">
                                    <a class="me-sm-3" href="tel:0046739359154" target="_blank">
                                        <i class="d-none d-sm-inline fa-solid fa-phone m-3"></i>
                                        <span class="my-3 my-md-0">+46 739359154</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>         
            </div>
            <!-- BOTTOM email form -->
            <div class="row mt-5 d-flex justify-content-around align-items-center">
                <!-- left -->
                <div class="col-11 col-lg-5 d-flex flex-column justify-content-between">
                    <!-- titles -->
                    <div>
                        <div>
                            <h1 class="contacts__title mb-3 text-uppercase myAnimation fade-in-left duration1">Torna in salute insieme a me</h1>
                        </div>
                        <div>
                            <h3 class="contacts__subtitle myAnimation fade-in-left duration3">Fai il il primo passo chiedendomi informazioni</h3>
                        </div>
                    </div>
                </div>
                <!-- right -->
                <div class="col-11 col-lg-5">
                    <!-- form with formsubmit -->
                    <form action="https://formsubmit.co/42f9374e798f52d433b25cde35b05c72" method="POST" target="_blank">
                        <input type="hidden" name="_subject" value="New OsteoMessage!">
                        <input type="hidden" name="_autoresponse" value="Il tuo messaggio é stato spedito correttamente">
                        <input class="w-100" type="text" name="name" placeholder="Full Name" required>
                        <input class="w-100 my-3" type="email" name="email" placeholder="Email Address" required>
                        <textarea class="w-100" name="textarea" placeholder="Message..." required cols="30" rows="10"></textarea>
                        <button type="submit" class="w-100 mt-3 py-3 px-5 btn my--button text-uppercase myAnimation fade-in-left duration3">send the message</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- BANNER -->
        <div class="banner-light container-fluid py-2 text-center">
            <div class="row p-5 d-flex flex-column align-items-center">
                <div class="col-7 d-flex justify-content-center align-items-center">
                    <h4 class="mb-4 fw-bolder text-uppercase myAnimation show duration4">Non aspettare</h4>
                </div>
                <div class="col-5 d-flex justify-content-center align-items-center">
                    <form class="lastBanner__button" action="https://www.bokadirekt.se/places/r%C3%B6relsem%C3%B6nster--20143" target="_blank">
                        <button class="lastBanner__button fs-4 p-3 btn my--button myAnimation show duration4">BOOK NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </main>





    <?php
        get_footer(); // inserisce ció che ce scritto in footer.php
    ?>