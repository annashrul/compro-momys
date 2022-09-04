@extends('fo/index')
@section('content')
    <div  data-aos="fade-in" data-aos-duration="4000" style="margin-top: 150px;background-color: #286389!important;">
        <div class="container">
            <div class="section-title text-center" style="display: flex;flex-direction: column;justify-content: center;">
                <h2><?=strtoupper($param)?></h2>
                <center><div style="margin-top: 15px;border-radius:4px;height: 3px;width: 100px;background-color: white;"></div></center>
            </div>
            <br>

            <div class="row" style="position: relative">
                <div class="col-md-4">
                    <img style="border-radius: 10px" src="https://cdn.shopify.com/s/files/1/0100/4575/1377/files/MicrosoftTeams-image_7_1400x.png?v=1636129664"/>
                </div>
                <div class="col-md-8" style="display: flex;flex-direction: column;justify-content: center;">

                    <p>Pasaraya Blok M Gedung B Lt. 6, Jl. Iskandarsyah II No.7, RT.3/RW.1, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160</p>
                    <table>
                        <thead>
                        <tr>
                            <th width="2%">Whatsapp</th>
                            <th width="1%">:</th>
                            <th width="10%">0892346389432</th>
                        </tr>
                        <tr>
                            <th width="2%">Instagram</th>
                            <th width="1%">:</th>
                            <th width="10%"><a style="color: white;" href="https://instagram.com"><u>https://instagram.com</u></a></th>
                        </tr>
                        <tr>
                            <th width="2%">Facebook</th>
                            <th width="1%">:</th>
                            <th width="10%"><a style="color: white;" href="https://facebook.com"><u>https://facebook.com</u></a></th>
                        </tr>
                        <tr>
                            <th width="2%">Email</th>
                            <th width="1%">:</th>
                            <th width="10%">email@gmail.com</th>
                        </tr>
                        <tr>
                            <th width="2%">Link Google Map</th>
                            <th width="1%">:</th>
                            <th width="10%"><a style="color: white;" href="https://facebook.com"><u>Klik Disini</u></a></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
