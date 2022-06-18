<?php

namespace App\Http\Controllers;

use App\Models\publication;
use App\Models\WebGallery;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function lists(Request $request)
    {
        $publication=  publication::all();
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $publication
        ], 200);
    }
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $publication=publication::find($request->id);
        if(!empty($publication)){
            $publication->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'publication deleted successfully',
        ], 200);

    }

    public function store(Request $request) {
        $this->validate($request, [
            'text' => 'required',
        ]);
        $publication =  publication::create([
             "text" =>  $request->text ?? '',
            "url" =>   Controller::UplodFile('url') ?? '',
        ]);
        return response()->json([
            'success' => true,
            'message' => 'store publication',
            'data' => $publication
        ], 200);

    }
}
