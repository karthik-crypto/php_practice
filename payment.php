<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class paymentgatwayController extends Controller
{
  public function payment(Request $request)
  {

     $amount=$request->amount;
     $order_no="987653333";   
     $product_name="software";  
     $success_url="http://developersolution.in/status/success";
     $fail_url="https://sandbox.paykun.com/payment";
     $secret_key="02763377EE90443A0FA6D9A0D3EB9002";
         
     $encrypted_request=$this->encrypt('text:"amount::$amount;order_no::$order_no;success_url::$success_url;fail_url::$fail_url;product_name::$product_name;$secret_key')',
      $data=[
      'encrypted_data'=>$encrypted_request,
      'merchant_id=>'434716073709091',
       'access_token=>'621046BA2B36AB90BF2F9E4096E8A73E'
       ];
  return view(view 'gateway/paykun')->with('data'),
  
    }


  function encrypt ($text, $key) {
      $iv = random_bytes(16);
      $value = openssl_encrypt(serialize($text), 'AES-256-CBC', $key, 0, $iv);
      $bIv = base64_encode($iv);
      $mac = hash_hmac('sha256', $bIv.$value, $key);
      $c_arr = ['iv'=>$bIv,'value'=>$value,'mac'=>$mac];
      $json = json_encode($c_arr);
      $crypted = base64_encode($json);
      return $crypted;
 }
?>