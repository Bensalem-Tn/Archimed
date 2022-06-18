<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use App\Models\FeedBackApp;
use App\Models\FeedBackArchitect;
use Illuminate\Http\Request;

class FeedBackArchitectController extends Controller
{
    public function listsadmin(Request $request)
    {
        $FeedBackArchitect=  FeedBackArchitect::all();
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $FeedBackArchitect
        ], 200);
    }
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $FeedBackArchitect =FeedBackArchitect::find($request->id);
        if(!empty($FeedBackArchitect)){
            $FeedBackArchitect->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'FeedBackArchitect deleted successfully',
        ], 200);

    }

    public function store(Request $request) {
        $this->validate($request, [
            'architect_id' => 'required',
            'text' => 'required',
        ]);
        $FeedBackArchitect =  FeedBackArchitect::create([
            "architect_id" =>  $request->architect_id,
            "text" =>  $request->text,
            "rating" =>  $request->rating??0,
            "ip" => $request->ip(),
        ]);
        return response()->json([
            'success' => true,
            'message' => 'store FeedBackArchitect',
            'data' => $FeedBackArchitect
        ], 200);

    }
}
