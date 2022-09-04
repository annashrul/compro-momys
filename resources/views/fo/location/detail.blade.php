@extends('fo/index')
@section('content')
    <div  data-aos="fade-in" data-aos-duration="4000" style="margin-top: 150px;background-color: #286389!important;">
        <div class="container">
            <div class="section-title text-center" style="display: flex;flex-direction: column;justify-content: center;">
                <h2><?=strtoupper($param)?></h2>
                <center><div style="margin-top: 15px;border-radius:4px;height: 3px;width: 100px;background-color: white;"></div></center>
            </div>
            <br>

            <div class="row">
                <div class="col-md-4">
                    <img style="border-radius: 10px" src="/location/<?=$result['image']?>"/>
                </div>
                <div class="col-md-8" style="display: flex;flex-direction: column;justify-content: center;">

                    <p><?=$result['detail']?></p>
                    <table>
                        <thead>

                        <tr>
                            <th width="2%">Instagram</th>
                            <th width="1%">:</th>
                            <th width="10%"><a style="color: white;" href="<?=$result['instagram']?>"><u><?=$result['instagram']?></u></a></th>
                        </tr>
                        <tr>
                            <th width="2%">Link</th>
                            <th width="1%">:</th>
                            <th width="10%"><a style="color: white;" href="<?=$result['link']?>"><u>klik disini</u></a></th>
                        </tr>
                        <tr>
                            <th width="2%">Phone Number</th>
                            <th width="1%">:</th>
                            <th width="10%"><?=$result['phone_number']?></th>
                        </tr>
                        <tr>
                            <th width="2%">Email</th>
                            <th width="1%">:</th>
                            <th width="10%"><?=$result['email']?></th>
                        </tr>


                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
