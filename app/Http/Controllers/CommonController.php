<?php


namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Session;

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
        return view('all-select-category', ['name' => $name,'id' => $id]);

    }
    public function orderhistory(){
        if(Session::get('login') == TRUE){
            $client = new \GuzzleHttp\Client();
            $response = $client->get( 'http://localhost:8086/order/'.Session::get('username'));
            $response2 = $client->get( 'http://localhost:8086/item');
            $body = $response->getBody()->getContents();
            $body2 = $response2->getBody()->getContents();

            $response=json_decode($body);
            $response2=json_decode($body2);
            return view('user-order-history',['data' => $response,'item' => $response2]);

        }else{
            return redirect('/');
        }


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

    public function retailerreport(){
        return view('admin-daily-report');
    }

    public function searchretailer(Request $request){
        $retailer = $request->input('retailer');
        $selectdate = $request->input('selectdate');
        $uroles = array();
        $client = new \GuzzleHttp\Client();
        $response = $client->get( 'http://localhost:8086/order');
        $response2 = $client->get( 'http://localhost:8086/item');
        $body = $response->getBody()->getContents();
        $body2 = $response2->getBody()->getContents();

        $selectdate=date("Y/m/d", strtotime($selectdate));
        $response=json_decode($body);
        $response2=json_decode($body2);
        $i = 0;
        $j = 0;
        foreach ($response as $row) {

            foreach ($row->orderDetailsModels as $row1){

                $date=date("Y/m/d", strtotime($row->date));
                if ($retailer==$row1->itemtype && $date==$selectdate){
                    $uroles[$j]['OrderId'] = $row->id;
                    $uroles[$j]['customer'] = $row->customer;
                    $uroles[$j]['contact'] = $row->contact;

                    foreach ($response2 as $row3) {
                        if ($row3->id==$row1->item) {
                            $uroles[$j]['item'] = $row3->name;
                        }
                    }
                    $uroles[$j]['itemtype'] = $row1->itemtype;
                    $uroles[$j]['qty'] = $row1->qty;
                    $uroles[$j]['orderAddress'] = $row->orderAddress;
                    $uroles[$j]['fullAmount'] = $row->fullAmount;
                    $uroles[$j]['date'] = $row->date;

                    $j++;
                }

            }


            $i++;
        }

        return $uroles;
    }


}
