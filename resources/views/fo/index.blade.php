<?php
$urlCss = 'fo/css/';
$urlJs = 'fo/js/';
$logo="http://localhost:8000/images/logo-full-black.png";
$menu=["Home",'Shop','Location Store'];
$menuLink=["pages",'pages/shop','pages/location'];
$footer=[
    ["0"=>["CORPORATE GIFTING","FAQ","GET IN TOUCH","ABOUT","PARTIES AND EVENTS","TERM OF SERVICE"]],
    ["1"=>["JOIN OUR TEAM","SHIPPING","PRIVACY","TERM OF USE","LOCAL DELIVERY OR PICK UP"]],
];
?>
        <!doctype html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<link rel="stylesheet" href="<?=$urlCss.'bootstrap.min.css'?>">--}}
    <link rel="stylesheet" href="{{asset($urlCss."bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset($urlCss."animate.min.css")}}">
    <link rel="stylesheet" href="{{asset($urlCss.'boxicons.min.css')}}" />
    <link rel="stylesheet" href="{{asset($urlCss.'owl.carousel.min.css')}}" />

    <link rel="stylesheet" href="{{asset($urlCss.'meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset($urlCss.'style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
<header class="navbar-area">

    <div class="mobile-nav">
        <a href="{!! url($menuLink[0]); !!}" class="logo">
            {{--<img src="<?=$logo?>" class="logo-one h-50" alt="Logo">--}}
            <img src="<?=$logo?>" alt="logo_light" class="h-50"/>
            {{--<img src="<?=$logo?>" alt="logo-dark" />--}}
        </a>
    </div>

    <div class="main-nav">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{!! url($menuLink[0]); !!}">
                    <img src="<?=$logo?>" alt="logo_light" style="height: 50px;"/>
                    <img src="<?=$logo?>" alt="logo-dark" style="height: 50px;"/>
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <div class=" m-auto"></div>
                    <ul class="nav navbar-nav">
                        <?php foreach ($menu as $key=>$row): ?>
                        <li class="nav-item ">
                            <a href="{!! url($menuLink[$key]); !!}" class="nav-link" style="border-bottom:2px solid <?=strtolower($pages)==strtolower($row)?'white':'transparent'?>">
                                <?=strtoupper($row)?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

@yield('content')


{{-- *************** FOOTER **************--}}
<footer class="footer-area footer-bg" data-aos="fade-down" data-aos-duration="4000">
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
<div class="modal fade modalDetailProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleProduct">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:transparent;color:white;border:none">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="resultProduct">

            </div>
            <div class="modal-footer" style="">
                <button type="button" class="btn btn-primary default-btn btn-bg-two" onclick="sendWa()">Order</button>
            </div>
        </div>
    </div>
</div>
<script src="{{asset($urlJs.'jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{asset($urlJs.'wow.min.js')}}"></script>
<script src="{{asset($urlJs.'owl.carousel.min.js')}}"></script>
<script src="{{asset($urlJs.'meanmenu.js')}}"></script>
<script src="{{asset($urlJs.'custom.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
    let datas = <?=json_encode(isset($product)?$product:array())?>;
    let idxImagesActive=0;
    let idxProduct=0;
    function setId(id){
        return $(`#${id}`);
    }
    function showDetail(index){
        console.log(datas);
        idxProduct=index;
        let res=datas['data']===undefined?datas[index]:datas['data'][index];
        $('.modalDetailProduct').modal("show");
        setId('titleProduct').html(res.title);
        let html=`<img id="main${res.id}" src="${res.images[0]}"/>`;
        if(res.images.length>1){
            html+='<div class="row" style="margin-top: 10px">';
            res.images.forEach((row,key)=>{
                html+='<div class="col-3 col-xs-3 col-md-2"  style="cursor: pointer" onclick="setImages('+key+')">';
                html+='<img src="'+row+'" id="row'+key+'" style="width: 100%;height: 100%;border-radius: 10px"/>';
                html+='</div>';
            });
            html+='</div>';
            html+='<hr/>';
        }
        html+='<div style="justify-content: space-between;display: flex">';
        html+='<h4>'+res.tagline+'</h4>';
        html+='<h4>Rp. '+res.price+',-</h4>';
        html+='</div>';
        html+='<p>'+res.content+'</p>';
        setId('resultProduct').html(html);
        setTimeout(function(){
            setIsActiveImages(0,true);
        },200)
    }

    function setImages(key){
        setIsActiveImages(idxImagesActive,false);
        idxImagesActive=key;
        let res=datas['data']===undefined?datas[idxProduct]:datas['data'][idxProduct];
//        let res=datas['data'][idxProduct];
        let newImg=res["images"][key];
        setId(`main${res.id}`).attr('src',newImg);
        setTimeout(function(){
            setIsActiveImages(key,true);
        },200)
    }

    function setIsActiveImages(idx,status){
        setId(`row${idx}`).css({"border":status?"2px solid white":"none"})
    }

    function sendWa(){
        const enter="%0a";
//        let res=datas['data'][idxProduct];
        let res=datas['data']===undefined?datas[idxProduct]:datas['data'][idxProduct];

        let message=`Hallo admin.. ${enter}saya pesan *${res.title} - Rp. ${res.price},-* yaaaaah${enter}Terimakasih ...`;
        window.open("https://api.whatsapp.com/send/?phone=6281223165037&text="+message,"_blank")
    }
</script>

</body>
</html>