@extends('fo/index')
@section('content')
<div  data-aos="fade-in" data-aos-duration="4000" style="margin-top: 150px;background-color: #286389!important;">
    <div class="container">
        <div class="section-title text-center">
            <h2>OUR LOCATIONS</h2><br/>
        </div>

    </div>
</div>
<section class="location-section pb-70">
    <div class="container">
        <div class="row">
            <?php foreach($result as $i=>$row): ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="location-item">
                        <div class="location-image">
                            <img src="/location/<?=$row['image']?>" alt="" />
                        </div>
                        <div class="location-content">
                            <h5>
                                <a href="{!! url('pages/location/'.strtolower($row['title'])); !!}" style="color: black"><?=$row['title']?></a>
                            </h5>
                            <p style="color: black"><?=substr($row['detail'],0,40)?></p>
                            <div class="other-info">
                                <a style="color: black" class="bg-tertiary" target="_blank">
                                    <?=$row['phone_number']?>
                                </a><br/>
                                <a style="color: black" class="bg-tertiary" target="_blank">
                                    <?=$row['email']?>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</section>

@endsection
