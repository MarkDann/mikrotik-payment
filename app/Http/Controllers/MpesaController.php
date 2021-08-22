<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mpesa;


class MpesaController extends Controller
{ //function to initiate a transaction
    public function stkSimulation( Request $request){
        //to check all the datas dumped from the form
        //if your want to get single element,someName in this case
        $amount = $request->amount; 
        $phone=$request->phone;
        //dd($phone,$amount);

    $mpesa= new \Safaricom\Mpesa\Mpesa();

    $BusinessShortCode =174379;
    $LipaNaMpesaPasskey="bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
    $TransactionType="CustomerPayBillOnline";
    $Amount=$amount;
    $PartyA=$phone;
    $PartyB=174379; 
    $PhoneNumber=$phone;
    $CallBackURL="https://fbbd-105-163-175-148.ngrok.io/api/mpesa/stkpush/response";
    $AccountReference="Legendwifi";
    $TransactionDesc="Internet Payment";
    $Remarks="Thank you for choosing us";


    $stkPushSimulation=$mpesa->STKPushSimulation(
        $BusinessShortCode, 
        $LipaNaMpesaPasskey, 
        $TransactionType, 
        $Amount,
        $PartyA,
        $PartyB, 
        $PhoneNumber, 
        $CallBackURL,
        $AccountReference,
        $TransactionDesc,
        $Remarks
    );
dd($stkPushSimulation);
    
}

}

