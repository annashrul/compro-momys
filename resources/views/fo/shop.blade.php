@extends('fo/index')
@section('content')
    <div class=""  data-aos="fade-in" data-aos-duration="4000" style="margin-top: 150px;background-color: #286389!important;">
        <div class="container">
            <div class="section-title text-center">
                <h2>NOT JUST A BAKERY, BUT *THE* BAKERY</h2><br/>
                <span class="sp-color2">We started baking big, crispy-on-the-outside, gooey-on-the-inside BAKERYs in New York back in 1995. Since then, they’ve become a cult favorite. Made fresh in the Big Apple (and shipped same-day!), a BAKERY gift box shows you care — and that you have great taste.</span>
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
@endsection
