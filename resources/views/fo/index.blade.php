<?php
$urlCss = 'fo/css/';
$urlJs = 'fo/js/';
$logo="images/logo-text-transparent.png";
$menu=["shop",'location','local delivery or pickup','grocery stores'];

?>
        <!doctype html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$urlCss.'bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=$urlCss.'animate.min.css'?>">
    <link rel="stylesheet" href="<?=$urlCss.'boxicons.min.css'?>" />
    <link rel="stylesheet" href="<?=$urlCss.'owl.carousel.min.css'?>" />

    <link rel="stylesheet" href="<?=$urlCss.'meanmenu.css'?>">
    <link rel="stylesheet" href="<?=$urlCss.'style.css'?>">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <title>MOMMYS</title>
</head>
<body>


{{-- *************** LOADING **************--}}
<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner"></div>
        </div>
    </div>
</div>

{{-- *************** NAVBAR **************--}}
<div class="navbar-area">
    <div class="mobile-nav">

        <a href="#" class="logo">
            <img src="<?=$logo?>" class="logo-one h-50" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container-fluid">
            <div class="container-max">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <a class="navbar-brand" href="#">
                        <img src="<?=$logo?>" class="logo-one h-70" alt="Logo" style="margin-left: 20%">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <div class=" m-auto"></div>
                        <ul class="nav navbar-nav mx-auto">
                            <?php foreach ($menu as $row): ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <?=strtoupper($row)?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                            <li class="nav-item mobile-nav-icon">
                                <a href="#" class="nav-link" style="display: flex">
                                    <i class="bx bx-user fs-30" style="margin-right: 10px"></i>
                                    <i class="bx bx-cart fs-30"></i>
                                </a>
                            </li>
                        </ul>
                        <div class=" m-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="bx bx-user fs-30"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="bx bx-cart fs-30"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- *************** BANNER **************--}}
<div class="banner-area-two owl-carousel owl-theme" style="width:100%;">
    <?php foreach ($banner as $row):?>
    <div class="container-fluid p-0" style="position: relative;height:600px;">
        <img style="object-fit: cover;" src="<?=$row['img']?>" alt="Images" class="banner-img">
        <div  class="wrap-text-banner">
            <b class="fs-50 fw-bold"><?=$row['title']?></b><br/>
            <b><?=$row['desc']?></b><br/><br/>
            <a href="#" class="default-btn btn-bg-two">SEND BAKERYS</a>
        </div>
    </div>
    <?php endforeach;?>
</div>
{{-- *************** PRODUCT **************--}}
<div class="pt-100 pb-70" style="background-color:rgba(0, 0, 0, 0.1);background-image: url('{{asset("images/Group-1.png")}}');background-repeat: repeat;">
    <div class="container">
        <div class="section-title text-center">
            <h2>NOT JUST A BAKERY, BUT *THE* BAKERY</h2><br/>
            <span class="sp-color2">We started baking big, crispy-on-the-outside, gooey-on-the-inside BAKERYs in New York back in 1995. Since then, they’ve become a cult favorite. Made fresh in the Big Apple (and shipped same-day!), a BAKERY gift box shows you care — and that you have great taste.</span>
            <br/><a href="#" class="default-btn btn-bg-two">SHOP ALL BAKERYS</a>
        </div>
        <div class="row pt-45">
           <?php for($i=0;$i<8;$i++): ?>
            <div class="col-6 col-xs-6 col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-item-img">
                        <img src="images/produk/1.png" alt="blog-bg-image" />
                        <p style="display: <?=$i%2==0?'block':'none'?>" class="tag">NEW</p>
                    </div>
                    <div class="row wrap-content-product">
                        <div class="col-12 col-xs-12 col-md-8">
                            <p class="fw-500">$600</p>
                            <p class="fw-bold">Whole Graint Spelt</p>
                        </div>
                        <div class="col-12 col-xs-12 col-md-4">
                            <p class="fw-500">290g</p>
                            <button class="btn-add">Add</button>
                        </div>
                    </div>
                </div>
            </div>
           <?php endfor; ?>
        </div>
    </div>
</div>

{{-- *************** STORY **************--}}
<section class="pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>THE STORY BEHIND THE BAKERY THAT BECAME A NEW YORK INSTITUTION</h2><br/>
            <p class="sp-color2">Baking hobbyists Pam Weekes & Connie McDonald started Levain to sell fresh-baked breads. In 1995, they whipped up a batch of big chocolate chip walnut BAKERYs, and their neighborhood shop became so much more. “The BAKERY” earned a spot in the hearts of locals and visitors alike, taking on a life of its own as a New York City icon. Nearly 30 years later, not much has changed — we’re still baking beloved BAKERYs with simple ingredients and a lot of love.</p>
        </div>
        <div class="row pt-45 pr-10 pl-10">
            <div class="col-lg-6 p-0">
                <img class="img-story" src="https://cdn.shopify.com/s/files/1/0100/4575/1377/files/50-50-Homepage_1400x.jpg?v=1655342627" alt="Images">
            </div>
            <div class="col-lg-6 wrap-text-story">
                <h2 class="text-center">WE’RE BAKERY PEOPLE, BUT ALSO PEOPLE PEOPLE
                </h2><br/>
                <p class="text-center">
                    Stop by for a fresh-out-of-the-oven BAKERY if you’re in the neighborhood — you’ll smell when you’re close :)
                </p>
                <a href="#" class="default-btn btn-bg-two">FIND A BAKERY</a>
            </div>

        </div>
    </div>
</section>


{{-- *************** SERVICE **************--}}
<section class="pb-70">
    <div class="container">
        <div class="row pt-45">
            <?php foreach ($card as $row): ?>
            <div class="col-12 col-xs-12 col-lg-4 col-6">
                <div class="service-card service-card-color">
                    <img src="<?=$row["img"]?>" alt="">
                    <h3><?=$row["title"]?></h3><br/>
                    <p><?=$row["desc"]?></p><br/>
                    <a href="#" class="default-btn btn-bg-two">FIND OUT MORE</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


{{-- *************** FOOTER **************--}}
<footer class="footer-area footer-bg">
    <div class="container">
        <div class="footer-top pt-100 pb-70">
            <div class="row">
                <div class="col-12 col-xs-12 col-lg-6 pr-40">
                    <h3 style="line-height: 40px;color:white">WE BAKE EMAILS TOO. <br/>SIGN UP TO RECEIVE THE LATEST NEWS.</h3>
                    <br>
                    <div class="input-group">
                        <input type="text" class="custom-input form-control" id="inlineFormInputGroupUsername" placeholder="Email Address">
                        <div class="input-group-prepend">
                            <div class="input-group-text input-group-text-custom">
                                <i class="bx bx-send"></i>
                            </div>
                        </div>
                    </div>
                    <?php $socmed=["facebook","twitter","instagram","whatsapp","gmail"] ?>
                    <div class="wrap-socmed">
                        <?php foreach ($socmed as $key=>$row):?>
                        <i class="bx bxl-<?=$row?> <?=$key>0?'ml':''?>"></i>
                        <?php endforeach;?>
                    </div>
                </div>
                <?php foreach ($footer as $key=>$row):?>
                <div class="col-lg-3">
                    <?php foreach ($row[$key] as $val): ?>
                    <p class="text-footer-2"><?=$val?></p>
                    <?php endforeach;?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</footer>

<script src="<?=$urlJs?>jquery.min.js"></script>
<script src="<?=$urlJs?>wow.min.js"></script>
<script src="<?=$urlJs?>owl.carousel.min.js"></script>
<script src="<?=$urlJs?>meanmenu.js"></script>
<script src="<?=$urlJs?>custom.js"></script>
</body>
</html>