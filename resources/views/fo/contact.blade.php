@extends('fo/index')
@section('content')

    <div  data-aos="fade-in" data-aos-duration="4000" style="margin-top: 150px;">
        <div class="container">
            <div class="section-title text-center" style="display: flex;flex-direction: column;justify-content: center;">
                <h2>CONTACT US</h2>
                <center><div style="margin-top: 15px;border-radius:4px;height: 3px;width: 100px;background-color: white;"></div></center>
            </div>
            <br>
            <div class="row d-flex justify-content-start" style="position: relative">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="text-center">
                        <img style="border-radius: 10px" src="{{asset('images/logo-full-black.png')}}"/>
                    </div>
                    <div class="alert alert-success" role="alert" id="notif" style="margin-top: 20px;display: none">
                        Data saved successfully
                    </div>
                    <form id="form_contact">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required title="ads"/>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea style="height: 161px;" name="message" id="" class="form-control" required></textarea>
                        </div><br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"  style="background-color: transparent;border:1px solid white;color:white;float: right" id="btn_send">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('fo/js/jquery.min.js')}}"></script>


    <script>
        $("#form_contact").on('submit',function(e){
            e.preventDefault();
            $("#btn_send").text("loading ...");
            setTimeout(function(){
                $("#notif").css({"display":"block"}).fadeIn();
                setTimeout(function(){
                    $("#notif").fadeOut();
                    $("#form_contact")[0].reset();
                    $("#btn_send").text("send");
                },2000)
            },200)
        })
    </script>

@endsection


