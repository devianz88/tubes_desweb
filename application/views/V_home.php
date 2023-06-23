<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jual Voucher Game</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand ms-3" href="V_home.html">IsiVoucher</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item ms-2">
                                <a href="<?php echo site_url ('C_Beranda/gotoHome'); ?>" class="nav-link" aria-current="page" href="V_home.html">Home</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a href="<?php echo site_url ('C_Beranda/gotoHome'); ?>" class="nav-link" href="V_home.html#tentangkita">About Us</a>
                            </li>
                            <li class="nav-item ms-2">
                                <a href="<?php echo site_url ('C_Beranda/FAQ'); ?>" class="nav-link" href="V_faq.html">FAQ</a>
                            </li>
                        </ul>
                        <a class="btn btn-primary ml-auto" href="V_contact.html" role="button">Contact Us</a>
                    </div>
                </div>
            </nav>
        </header>

        <section>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="assets/images/gaming1.jpg" class="d-block w-100" style="height: 80vh;" alt="gaming1">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/gaming2.jpg" class="d-block w-100" style="height: 80vh;" alt="gaming2">
                    </div>
                    <div class="carousel-item">
                    <img src="assets/images/gaming3.jpg" class="d-block w-100" style="height: 80vh;" alt="gaming3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <section>
            <h2 class="text-center my-4">Voucher Games</h2>
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col col-lg-2">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/icons/ff.jpg" class="card-img-top" alt="freefire">
                            <div class="card-body text-center" data-value="freefire" data-title="Free Fire">
                                <h5 class="card-title">Free Fire</h5>
                                <a href="V_detail.html?game=freefire" data-product="freefire" class="btn btn-primary">Top Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/icons/genshin.jpg" class="card-img-top" alt="genshin">
                            <div class="card-body text-center" data-value="genshin" data-title="Genshin Impact">
                                <h5 class="card-title">Genshin Impact</h5>
                                <a href="V_detail.html?game=genshin" data-product="genshin" class="btn btn-primary">Top Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/icons/hsr.png" class="card-img-top" alt="hsr">
                            <div class="card-body text-center" data-value="hsr" data-title="Honkai Star Rail">
                                <h5 class="card-title">Honkai Star Rail</h5>
                                <a href="V_detail.html?game=hsr" data-product="hsr" class="btn btn-primary">Top Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center mt-4">
                <div class="row justify-content-center">
                    <div class="col col-lg-2">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/icons/ml.jpg" class="card-img-top" alt="ml">
                            <div class="card-body text-center" data-value="ml" data-title="Mobile Legends">
                                <h5 class="card-title">Mobile Legends</h5>
                                <a href="V_detail.html?game=ml" data-product="ml" class="btn btn-primary">Top Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/icons/pubg.jpg" class="card-img-top" alt="pubg">
                            <div class="card-body text-center" data-value="pubg" data-title="PUBG">
                                <h5 class="card-title">PUBG</h5>
                                <a href="V_detail.html?game=pubg" data-product="pubg" class="btn btn-primary">Top Up</a>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-2">
                        <div class="card" style="width: 10rem;">
                            <img src="assets/icons/valo.jpg" class="card-img-top" alt="valorant">
                            <div class="card-body text-center" data-value="valorant" data-title="Valorant">
                                <h5 class="card-title">Valorant</h5>
                                <a href="V_detail.html?game=valorant" data-product="valorant" class="btn btn-primary">Top Up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div id="tentangkita">
                <h2 class="text-center my-4">About Us</h2>
                <p class="text-center">IsiVoucher adalah website yang menyediakan layanan untuk membeli voucher game secara online dengan mudah.</p>
            </div>
        </section>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>          
        
        <!-- Mengambil gambar dan judul game -->
        <script>
            // Mengambil selected product details
            var productButtons = document.querySelectorAll('.card-body .btn');
        
            // Menambah click event listener ke setiap product button
            productButtons.forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
        
                    var selectedProduct = button.getAttribute('data-product');
        
                    // Menyimpan selected product details in Local Storage
                    localStorage.setItem('selectedProduct', selectedProduct);
        
                    // Pergi ke detail.html
                    window.location.href = button.href;
                });
            });
        </script>
    </body>
</html>