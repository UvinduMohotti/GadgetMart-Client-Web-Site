<?php


namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CommonController extends Controller
{


    public function setSessionValues(Request $request){
        $username=$request->input('username');
        $token=$request->input('token');
        Session()->regenerate();
        Session(['username' => $username]);
        Session(['token' => $token]);
        Session(['login' => TRUE]);
        return "success";
    }

    public function brandview($name,$id){
        return view('all-select-brand', ['name' => $name,'id' => $id,]);

    }
    public function categoryview($name,$id){
        return view('all-select-category', ['name' => $name,'id' => $id,]);

    }

    public function logout(Request $request){
        $request->session()->forget(['username', 'token', 'login']);
        $request->session()->flush();


        $request->session()->invalidate();
        return "success";
    }

    public function loadsingleProduct($id){

       $client = new \GuzzleHttp\Client();
        $response = $client->get( 'http://localhost:8086/item/'.$id);
	    $body = $response->getBody()->getContents();

	     $response=json_decode($body,true);
	     $id = $response['id'];
	     $name = $response['name'];
	     $price = $response['price'];
	     $discount = $response['discount'];
	     $warranty = $response['warranty'];
	     $qty= $response['qty'];
	     $imageUrl = $response['imageUrl'];
	     $itemtype = $response['itemtype'];
	     $brand = $response['brand'];
	     $subCategory = $response['subCategory'];
	     $longdes = $response['longdes'];
	     $shortdes = $response['shortdes'];

	     return view('single-product', ['longdes' => $longdes,'shortdes' => $shortdes,'id' => $id,'name' => $name,'price' => $price,'discount' => $discount,'warranty' => $warranty,'qty' => $qty,'imageUrl' => $imageUrl,'itemtype' => $itemtype,'brand' => $brand,'subCategory' => $subCategory]);
    }


}
