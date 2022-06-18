<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use App\Models\FeedBackArchitect;
use App\Models\FeedBackCustomer;
use Illuminate\Http\Request;

class FeedBackCustomerController extends Controller
{
    public function listsadmin(Request $request)
    {
        $FeedBackCustomer=  FeedBackCustomer::all();
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $FeedBackCustomer
        ], 200);
    }
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $FeedBackCustomer =FeedBackCustomer::find($request->id);
        if(!empty($FeedBackCustomer)){
            $FeedBackCustomer->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'FeedBackCustomer deleted successfully',
        ], 200);

    }

    public function store(Request $request) {
        $this->validate($request, [
            'customer_id' => 'required',
            'text' => 'required',
        ]);
        $FeedBackCustomer =  FeedBackCustomer::create([
            "customer_id" =>  $request->customer_id,
            "text" =>  $request->text,
            "rating" =>  $request->rating??0,
            "ip" => $request->ip(),
        ]);
        return response()->json([
            'success' => true,
            'message' => 'store FeedBackCustomer',
            'data' => $FeedBackCustomer
        ], 200);

    }
}
