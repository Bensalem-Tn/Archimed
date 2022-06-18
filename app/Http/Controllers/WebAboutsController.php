<?php

namespace App\Http\Controllers;

use App\Models\Terms;
use App\Models\WebAbouts;
use Illuminate\Http\Request;

class WebAboutsController extends Controller
{
    public function lists(Request $request)
    {
        $WebAbouts=  WebAbouts::all();
        if(sizeof($WebAbouts)==0){
            $WebAbouts = new WebAbouts();
            $WebAbouts->text= '';
            $WebAbouts->save();
        }
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $WebAbouts
        ], 200);
    }
    public function update(Request $request)
    {
        $WebAbouts=  WebAbouts::update(['text'=>$request->text]);

        return response()->json([
            'success' => true,
            'message' => 'update',
            'data' => $WebAbouts
        ], 200);
    }
}
