<?php

namespace App\Http\Controllers\fo;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $data['banner']=[
            [
                "title"=>"INTRODUCING ROCKY ROAD",
                "img"=>"https://templates.hibootstrap.com/solit/default/assets/img/banner/banner_1.png",
                "desc"=>"The perfect summertime snack!"
            ],
            [
                "title"=>"INTRODUCING ROCKY ROAD",
                "img"=>"images/Rectangle.png",
                "desc"=>"The perfect summertime snack!"
            ]
        ];
        $data['card'] = [
            [
                "title"=>"THE SWEETEST GIFT",
                "desc"=>"Say thanks or send recognition with a gift-wrapped cookie box — big cookies, big impact.",
                "img"=>"https://cdn.shopify.com/s/files/1/0100/4575/1377/files/CorporateGifting-Illustration.png?v=1657150077&width=352"
            ],
            [
                "title"=>"COOKIES, STAT",
                "desc"=>"Stay in your jammies — a local partner will deliver (still warm!) cookies right to you.",
                "img"=>"https://cdn.shopify.com/s/files/1/0100/4575/1377/files/LocalDelivery-Illustration.png?v=1657150077&width=352"
            ],
            [
                "title"=>"COOKIE QS?",
                "desc"=>"Our cookie pros are here to help — no cookie conundrum is too big or too small.",
                "img"=>"https://cdn.shopify.com/s/files/1/0100/4575/1377/files/LetsChat-Illustration.png?v=1657150077&width=352"
            ]
        ];
        $data['footer']=[
            ["0"=>["CORPORATE GIFTING","FAQ","GET IN TOUCH","ABOUT","PARTIES AND EVENTS","TERM OF SERVICE"]],
            ["1"=>["JOIN OUR TEAM","SHIPPING","PRIVACY","TERM OF USE","LOCAL DELIVERY OR PICK UP"]],
        ];
        return view('fo.index',$data);
    }
}
