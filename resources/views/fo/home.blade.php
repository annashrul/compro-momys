@extends('fo/index')
@section('content')

{{-- *************** BANNER **************--}}
<div data-aos="fade-out" data-aos-duration="4000" class="banner-area-two owl-carousel owl-theme" style="width:100%;">
    <?php foreach ($banner as $row):?>
    <div class="container-fluid p-0" style="position: relative;height:auto;">
        <img style="object-fit: cover;" src="<?=$row['image']?>" onerror="this.onerror=null;this.src='https://wallpaperaccess.com/full/109672.jpg';" alt="Images" class="banner-img">
        <div  class="wrap-text-banner">
            <b class="fs-50 fw-bold"><?=substr($row['detail'],0,30)?></b><br/>
            <b><?=$row['detail']?></b><br/><br/>
            <a href="#" class="default-btn btn-bg-two">SEND COOKIES</a>
            {{--<b><?=substr($row['detail'],0,30)?></b>--}}
            {{--<a href="#" class="default-btn btn-bg-two">SEND BAKERYS</a>--}}
        </div>
    </div>
    <?php endforeach;?>
</div>
{{-- *************** PRODUCT **************--}}
<div class="pt-100 pb-70"  data-aos="fade-in" data-aos-duration="4000" style="background-color: #286389!important;">
    <div class="container">
        <div class="section-title text-center">
            <h2>NOT JUST A BAKERY, BUT *THE* BAKERY</h2><br/>
            <span class="sp-color2">We started baking big, crispy-on-the-outside, gooey-on-the-inside BAKERYs in New York back in 1995. Since then, they’ve become a cult favorite. Made fresh in the Big Apple (and shipped same-day!), a BAKERY gift box shows you care — and that you have great taste.</span>
            <br/><a href="#" class="default-btn btn-bg-two">SHOP ALL BAKERYS</a>
        </div>
        <div class="row pt-45">
            <?php foreach($product as $i=>$row): ?>
            <div class="col-6 col-xs-6 col-lg-3 col-sm-6" data-aos="<?=$i%2==0?'flip-right':'fade-left'?>" >
                <div class="product-card">
                    <div class="product-item-img">
                        <img src="<?=$row['images'][0]?>"  onerror="this.onerror=null;this.src='images/produk/1.png';" alt="blog-bg-image" />
                        {{--<p style="display: <?=$i%2==0?'block':'none'?>" class="tag">NEW</p>--}}
                    </div>
                    <div class="row wrap-content-product">
                        <div class="col-12 col-xs-12 col-md-8">
                            <p class="fw-bold"><?=$row['title']?></p>
                        </div>
                        <div class="col-12 col-xs-12 col-md-4">
                            <p class="fw-500" ><?=$row['price']?></p>
                        </div>
                        <div class="col-12">
                            <button class="default-btn btn-bg-two"  style="float: right" onclick="showDetail('<?=$i?>')">Order</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
{{-- *************** STORY **************--}}
<section class="pb-70"  data-aos="fade-down" data-aos-duration="4000" style="background-color: #286389!important;">
    <div class="container" style="background-color: #286389!important;">
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
<section class="pb-70" data-aos-duration="4000">
    <div class="container">
        <div class="row pt-45">
            <?php foreach ($card as $row): ?>
            <div class="col-12 col-xs-12 col-lg-4 col-6" data-aos="zoom-out">
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

@endsection
