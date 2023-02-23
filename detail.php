<?php
$pageId = "detail";
$headerData = '<link rel="stylesheet" href="/css/index.css">';
$headerData = '<link rel="stylesheet" href="/css/responsive.css">';
require_once 'inc/header.php';
?>
<section>
    <div class="container-fluid px-md-5">
        <div class="row">
            <div class="col-md-8">
                <video width="100%" controls autoplay>
                    <source src="assets/img/trailer.mp4" type="">
                </video>
                <div class="offer">
                    <div class="offer-banner">
                        <div class="offer-banner-txt">
                            <h3>Ad-Free with Premium now at 30%OFF : ₹ 699/year</h3>
                        </div>
                        <div class="subp" style=" display: flex; align-items: center;">
                            <a href="" class="d-flex btn btn-sm pffer-banner-btn">
                                <img src="assets/img/premium-quality.png" alt=""
                                    style="margin-right: 10px; padding-bottom:  0 !important;">
                                Buy Plan</a>
                        </div>
                    </div>
                </div>
                <div class="movie-details">
                    <div class="movie-heading">
                        <h2>Chhatriwali</h2>
                    </div>
                    <div class="movie-years">
                        <a href="" class="cmn-a dot">Moives</a>
                        <a href="" class="cmn-a">2023</a>
                    </div>
                    <div class="mv-details">
                        <span class="dot">1h 56m</span>
                        <a href="" class="cmn-a dot">Comedy</a>
                        <a href="" class="cmn-a dot">Drama</a>
                        <a href="" class="cmn-a dot">Romance</a>
                        <span>U/A 13+</span>
                    </div>
                    <div class="more-btn">
                        <div class="more-btn-shwh">
                            <div class="more-btn-share">
                                <img src="assets/img/share.png" alt="">
                                <a href="">
                                    Share</a>
                            </div>
                            <div class="more-btn-wish">
                                <img src="assets/img/add-list.png" alt="">
                                <a href="">
                                    Watchlist
                                </a>
                            </div>
                        </div>
                        <div class="watchbtn">
                            <img src="assets/img/play-button.png" alt="">
                            <a href="">Watch Trailer</a>
                        </div>
                    </div>
                    <div class="langs">
                        <p>Audio Languages :</p>
                        <a href="" class="cmn-a">Hindi</a>
                    </div>
                    <div class="sub-titles">
                        <p>Subtitle :</p>
                        <span>English</span>
                    </div>
                </div>
                
            </div>
            <div class="col-md-4">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni repellendus est doloremque cum sequi
                enim, libero ea praesentium nulla at vel ad, laborum fugit consectetur! Tempore magnam quibusdam
                quas
                eius!
            </div>
        </div>
    </div>
</section>



<?php
// $footerData = '<script src="/js/hotel-detail.js?v"></script>';
require_once 'inc/footer.php';
?>