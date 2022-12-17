@extends('fo/index')
@section('content')
    <div  data-aos="fade-in" data-aos-duration="4000" style="margin-top: 150px;">
        <div class="container">
            <div class="section-title text-center">
                <h2>OUR PORTOFOLIO</h2><br/>
            </div>

        </div>
    </div>
    <style>
        .display-middle {
            position: relative;
            height: 100%;
            bottom: 100%;
            background-color: rgba(0, 0, 0, 0.5)!important;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            border-radius: 10px;
        }
        .wrap-card-porto{
            height: 175px;
            align-content: center;
            vertical-align: middle;
            text-align: center;
        }
        @media only screen and (max-width: 425px){
            .wrap-card-porto{
                height: 190px !important;
                align-content: center;
                vertical-align: middle;
                text-align: center;
            }
        }



    </style>
    <section class="location-section pb-70">
        <div class="container">
            <div class="row">
                <?php $result=[
                    ["image"=>"itb.png","title"=>"INSTITUT TEKNOLOGI BANDUNG"],
                    ["image"=>"polban.png","title"=>"POLITEKNIK NEGERI BANDUNG"],
                    ["image"=>"unjani.png","title"=>"UNIVERSITAS JENDRAL A. YANI CIMAHI"],
                    ["image"=>"unikom.png","title"=>"UNIVERSITAS KOMPUTER INDONESIA"],
                    ["image"=>"ayani.png","title"=>"STIKES A. YANI CIMAHI"],
                    ["image"=>"unpas.png","title"=>"UNIVERSITAS PASUNDAN"],
                    ["image"=>"upi.jpg","title"=>"UNIVERSITAS PENDIDIKAN INDONESIA"],
                    ["image"=>"uin.png","title"=>"UNIVERSITAS NEGERI ISLAM BANDUNG"],
                    ["image"=>"piksi.png","title"=>"POLITEKNIK PIKSI GANESHA"],
                    ["image"=>"unisba.png","title"=>"UNIVERSITAS ISLAM BANDUNG"],
                ];
                foreach($result as $i=>$row): ?>
                <div class="col-6 col-xs-6 col-lg-2 col-md-2 col-sm-6" style="padding: 10px">
                    <div class="wrap-card-porto">
                        <img src="<?=asset('fo/images/'.$row["image"])?>" alt="Snow" style="width:100%;height: 100%;padding: 5px">
                        <div class="display-middle" style="">
                            <?=$row['title']?>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>

@endsection
