<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use App\Models\FeedBackApp;
use Illuminate\Http\Request;

class FeedBackAppController extends Controller
{
    public function listsadmin(Request $request)
    {
        $FeedBackApp=  FeedBackApp::all();
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $FeedBackApp
        ], 200);
    }
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $FeedBackApp =FeedBackApp::find($request->id);
        if(!empty($FeedBackApp)){
            $FeedBackApp->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'FeedBackApp deleted successfully',
        ], 200);

    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|string|max:255',
            'text' => 'required',
         ]);
        $FeedBackApp =  FeedBackApp::create([
            "email" =>  $request->email,
            "text" =>  $request->text,
            "rating" =>  $request->rating??0,
            "ip" => $request->ip(),
        ]);
        return response()->json([
            'success' => true,
            'message' => 'store FeedBackApp',
            'data' => $FeedBackApp
        ], 200);

    }
}
