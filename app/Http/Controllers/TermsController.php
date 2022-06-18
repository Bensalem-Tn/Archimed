<?php

namespace App\Http\Controllers;

use App\Models\FeedBackCustomer;
use App\Models\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function lists(Request $request)
    {
        $Terms=  Terms::all();
        if(sizeof($Terms)==0){
            $Terms = new Terms();
            $Terms->text= '';
            $Terms->save();
        }
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $Terms
        ], 200);
    }
    public function update(Request $request)
    {
        $Terms=  Terms::update(['text'=>$request->text]);

        return response()->json([
            'success' => true,
            'message' => 'update',
            'data' => $Terms
        ], 200);
    }
}
