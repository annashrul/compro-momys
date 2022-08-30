<?php

namespace App\Http\Controllers\fo;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Products;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){
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

        $data['banner']=Banner::paginate(3);
        $product=Products::paginate(12);
        foreach ($product as $row){
            $images = DB::table('image_products')->where('product_id','=',$row["id"])->select('image')->get();
            $result = $images->toArray();
            $resultImg=[];
            if($result!=null){
                foreach ($result as $img){
                    $resultImg[]=$img->image;
                }
            }else{
                $resultImg[]='images/produk/1.png';
            }
            $row->images=$resultImg;
            $row->price=number_format($row["price"]);
        }
        $data['product']=$product;
        return view('fo.index',$data);
    }
}
