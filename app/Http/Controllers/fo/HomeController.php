<?php

namespace App\Http\Controllers\fo;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
    public function index(){
        $data['pages']="home";

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
//        $data['footer']=;
        $product=Products::paginate(6);
        foreach ($product as $row){
            $images    = DB::table('image_products')->where('product_id','=',$row["id"])->select('image')->get();
            $result    = $images->toArray();
            $resultImg =[];
            if($result!=null){
                foreach ($result as $img){
                    $resultImg[]=$img->image;
                }
            }else{
                $resultImg[]=asset('images/produk/1.png');
            }
            $row->images= $resultImg;
            $row->price = number_format($row["price"]);
        }
        $data['banner'] = Banner::paginate(3);
        $data['product']= $product;

        return view('fo.home',$data);
    }


    public function shop(){
        $data['pages']="shop";
        $product=Products::all();
        foreach ($product as $row){
            $images    = DB::table('image_products')->where('product_id','=',$row["id"])->select('image')->get();
            $result    = $images->toArray();
            $resultImg =[];
            if($result!=null){
                foreach ($result as $img){
                    $resultImg[]=$img->image;
                }
            }else{
                $resultImg[]=asset('images/produk/1.png');
            }
            $row->images= $resultImg;
            $row->price = number_format($row["price"]);
        }
        $data['product']= $product;
        return view('fo.shop',$data);
    }
    public function location(){
        $data['pages']="location store";
        return view('fo.location',$data);
    }
}
