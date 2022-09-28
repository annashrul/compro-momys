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
            /*top:-100px;*/
            height: 100%;
            bottom: 100%;
            background-color: rgba(0, 0, 0, 0.5)!important;
            /*left: 50%;*/
            /*text-align: center;*/
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            /*-webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.9);*/
            font-weight: bold;            border-radius: 10px;

            /*-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5)*/

        }
        .wrap-card-porto{
            /*padding: 10px;*/
            height: 175px;
            /*-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.9);*/
            align-content: center;
            vertical-align: middle;
            text-align: center;
            /*background-color: rgba(0, 0, 0, 0.1)!important;*/
        }


    </style>
    <section class="location-section pb-70">
        <div class="container">
            <div class="row">
                <?php $result=[
                    ["image"=>"https://upload.wikimedia.org/wikipedia/id/9/95/Logo_Institut_Teknologi_Bandung.png","title"=>"INSTITUT TEKNOLOGI BANDUNG"],
                    ["image"=>"https://rekreartive.com/wp-content/uploads/2018/10/Logo-Polban-Politeknik-Negeri-Bandung-PNG.png","title"=>"POLITEKNIK NEGERI BANDUNG"],
                    ["image"=>"https://lppm.unjani.ac.id/wp-content/uploads/2018/08/cropped-LOGO-UNJANI-DESIGN-DARI-BEM-KM-UNJANI-2011COMPRESS-286x300-300x300.png","title"=>"UNIVERSITAS JENDRAL A. YANI CIMAHI"],
                    ["image"=>"https://www.unikom.ac.id/img/logo_unikom_kuning.png","title"=>"UNIVERSITAS KOMPUTER INDONESIA"],
                    ["image"=>"http://stikesayani.ac.id/medias/partner/Logo%20LPPM%20Stikes%20A.Yani%20Cimahi.png","title"=>"STIKES A. YANI CIMAHI"],
                    ["image"=>"https://lpm.unpas.ac.id/wp-content/uploads/2020/07/Logo-Unpas-New.png","title"=>"UNIVERSITAS PASUNDAN"],
                    ["image"=>"https://cdn.kibrispdr.org/data/768/logo-upi-png-5.png","title"=>"UNIVERSITAS PENDIDIKAN INDONESIA"],
                    ["image"=>"https://fst.uinsgd.ac.id/wp-content/uploads/2020/05/cropped-logo-uin.png","title"=>"UNIVERSITAS NEGERI ISLAM BANDUNG"],
                    ["image"=>"https://upload.wikimedia.org/wikipedia/id/e/ed/Politeknik_Piksi_Ganesha_Bandung.png","title"=>"POLITEKNI PIKSI GANESHA"],
                    ["image"=>"https://cdnwpedutorepartner.gramedia.net/wp-content/uploads/2020/06/24104823/logo-unisba.png","title"=>"UNIVERSITAS ISLAM BANDUNG"],
                ];
                foreach($result as $i=>$row): ?>
                <div class="col-lg-2 col-md-2 col-sm-6" style="padding: 10px">
                    <div class="wrap-card-porto">
                        <img src="<?=$row["image"]?>" alt="Snow" style="width:100%;height: 100%;padding: 5px">
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
