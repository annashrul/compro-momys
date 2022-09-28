<?php

namespace App\Http\Controllers\fo;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use App\Models\Location;

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
        $data['banner'] = Banner::paginate(3);
        $product=$this->getProduct(false);
        $data['product']= $product;

        return view('fo.home',$data);
    }

    public function shop(){
        $data['pages']="shop";
        $product=$this->getProduct();
        $data['product']= $product;
        return view('fo.shop',$data);
    }
    public function location($param=null){
        $data['pages']="location store";
        $data['param']=$param;
        if($param==null){
            $view='index';
            $data['result']=Location::all();
        }else{
            $view='detail';
            $data['result']=Location::where('title', '=', $param)->first();
        }
        return view('fo.location.'.$view,$data);
    }
    public function portofolio(){
        $data['pages']="portofolio";
        return view('fo.portofolio',$data);
    }
    public function about(){
        $data['pages']="about";
        return view('fo.about',$data);
    }
    public function contact(){
        $data['pages']="contact";
        return view('fo.contact',$data);
    }



    public function countProductVisitor(){
        $getVisitor = Products::where('id', $_POST['id'])->first();
        if($getVisitor!=null){
            $count=$getVisitor["visitor_count"];
            $count=$count+1;
            $update=Products::where('id', $_POST['id'])->update(array("visitor_count"=>$count));
            echo json_encode(array("msg"=>$update,'data'=>$count));
        }
        else{
            echo json_encode(array("msg"=>0,'data'=>null));
        }
    }

    public function getProduct($isAll=true){
        if($isAll){
            $product=Products::all();
        }
        else{
            $product=Products::paginate(6);
        }
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
        return $product;
    }
}

