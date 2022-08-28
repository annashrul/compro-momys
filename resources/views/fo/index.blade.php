<?php
$urlCss = 'fo/css/';
$urlJs = 'fo/js/';
$logo="images/logo-text-transparent.png";
$menu=["shop",'local delivery or pickup','corporate gifting'];

?>
        <!doctype html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$urlCss.'bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?=$urlCss.'animate.min.css'?>">
    <link rel="stylesheet" href="<?=$urlCss.'boxicons.min.css'?>" />
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
                        <img src="<?=$logo?>" class="logo-one h-70" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <?php foreach ($menu as $row): ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                   <?=strtoupper($row)?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class=" m-auto"></div>
                        <div class="nav-side d-display nav-side-mt">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        OUR STORIES
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        OUR BAKERIES
                                    </a>
                                </li>
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
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

{{-- *************** BANNER **************--}}
<div class="banner-area-two">
    <div class="container-fluid p-0" style="position: relative;">
        <img style="width: 100%;" src="images/Rectangle.png" alt="Images">
        <div  class="wrap-text-banner">
            <b>The perfect summertime snack!</b><br/>
            <b class="fs-50 fw-bold">INTRODUCING ROCKY ROAD</b><br/>
            <a href="#" class="default-btn btn-bg-two">SEND COOKIES</a>
        </div>

    </div>
</div>
{{-- *************** PRODUCT **************--}}
<div class="pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>NOT JUST A COOKIE, BUT *THE* COOKIE</h2><br/>
            <span class="sp-color2">We started baking big, crispy-on-the-outside, gooey-on-the-inside cookies in New York back in 1995. Since then, they’ve become a cult favorite. Made fresh in the Big Apple (and shipped same-day!), a cookie gift box shows you care — and that you have great taste.</span>
            <br/><a href="#" class="default-btn btn-bg-two">SHOP ALL COOKIES</a>
        </div>
        <div class="row pt-45">
           <?php for($i=0;$i<8;$i++): ?>
            <div class="col-lg-3 col-sm-6">
                <div class="product-card">
                    <div class="product-item-img">
                        <a href="">
                            <img src="images/produk/1.png" alt="blog-bg-image" />
                        </a>
                        <p style="display: <?=$i%2==0?'block':'none'?>" class="tag">NEW</p>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p class="fw-500">$600</p>
                            <p class="fw-bold">Whole Graint Spelt</p>
                        </div>
                        <div class="col-md-4">
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
<section class="pt-70 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>THE STORY BEHIND THE COOKIE THAT BECAME A NEW YORK INSTITUTION</h2><br/>
            <p class="sp-color2">Baking hobbyists Pam Weekes & Connie McDonald started Levain to sell fresh-baked breads. In 1995, they whipped up a batch of big chocolate chip walnut cookies, and their neighborhood shop became so much more. “The cookie” earned a spot in the hearts of locals and visitors alike, taking on a life of its own as a New York City icon. Nearly 30 years later, not much has changed — we’re still baking beloved cookies with simple ingredients and a lot of love.</p>
        </div>
        <div class="row pt-45 pr-10 pl-10">
            <div class="col-lg-6 p-0">
                <img class="img-story" src="https://cdn.shopify.com/s/files/1/0100/4575/1377/files/50-50-Homepage_1400x.jpg?v=1655342627" alt="Images">
            </div>
            <div class="col-lg-6 wrap-text-story">
                <h2 class="text-center">WE’RE COOKIE PEOPLE, BUT ALSO PEOPLE PEOPLE
                </h2><br/>
                <p class="text-center">
                    Stop by for a fresh-out-of-the-oven cookie if you’re in the neighborhood — you’ll smell when you’re close :)
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
            <div class="col-lg-4 col-6">
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
                <div class="col-lg-6 pr-40">
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
<script src="<?=$urlJs?>meanmenu.js"></script>
<script src="<?=$urlJs?>custom.js"></script>
</body>
</html>