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
                <?php for($i=0;$i<12;$i++): ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="location-item">
                        <div class="location-image">
                            <img src="<?=$i%2==0?'https://cdn.shopify.com/s/files/1/0100/4575/1377/files/MicrosoftTeams-image_7_1400x.png?v=1636129664':'https://cdn.shopify.com/s/files/1/0100/4575/1377/files/Levain_LocationLanding_AmsterdamAve_1400x.jpg?v=1571850368'?>" alt="team-member" />
                        </div>
                        <div class="location-content">
                            <h5>
                                <a href="#" style="color: black">BOSTON</a>
                            </h5>
                            <p style="color: black">180 NEWBURY STREET BOSTON, MA 02116</p>
                            <div class="other-info">
                                <a style="color: black" href="#" class="bg-tertiary" target="_blank">
                                    617-390-7799
                                </a><br/>
                                <a style="color: black" href="#" class="bg-success" target="_blank">
                                    8AM - 8PM
                                </a>
                                <a href="#" class="bg-danger" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#" class="bg-info" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor;?>
            </div>
        </div>
    </section>

@endsection
