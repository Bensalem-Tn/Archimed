<?php

namespace App\Http\Controllers;

use App\Models\FeedBackArchitect;
use App\Models\WebGallery;
use Illuminate\Http\Request;

class WebGalleryController extends Controller
{
    public function lists(Request $request)
    {
        $WebGallery=  WebGallery::all();
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $WebGallery
        ], 200);
    }
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $WebGallery =WebGallery::find($request->id);
        if(!empty($WebGallery)){
            $WebGallery->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'WebGallery deleted successfully',
        ], 200);

    }

    public function store(Request $request) {
        $this->validate($request, [
             'title' => 'required',
        ]);
        $WebGallery =  WebGallery::create([
            "title" =>  $request->title,
            "text" =>  $request->text ?? '',
            "url" =>   Controller::UplodFile('url') ?? '',
         ]);
        return response()->json([
            'success' => true,
            'message' => 'store WebGallery',
            'data' => $WebGallery
        ], 200);

    }
}
