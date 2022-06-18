<?php

namespace App\Http\Controllers;

use App\Models\socialMedia;
use App\Models\WebGallery;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function lists(Request $request)
    {
        $socialMedia=  socialMedia::first();
        if(empty($socialMedia)){
            $socialMedia =  socialMedia::create([
                "facebook_id" =>  $request->facebook_id?? '',
                "instagram_id" =>  $request->instagram_id ?? '',
                "twitter_id" =>  $request->twitter_id ?? '',
                "youtube_id" =>  $request->youtube_id ?? '',
                "linkedin_id" =>  $request->linkedin_id ?? '',
                "telegram_id" =>  $request->telegram_id ?? '',
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $socialMedia
        ], 200);
    }
    public function update(Request $request)
    {
        $socialMedia=  socialMedia::first();
        if(!empty($socialMedia)){
            if(!empty($request->facebook_id))
                $socialMedia->facebook_id =  $request->facebook_id;
            if(!empty($request->instagram_id))
                $socialMedia->instagram_id =  $request->instagram_id;
            if(!empty($request->twitter_id))
                $socialMedia->twitter_id =  $request->twitter_id;
            if(!empty($request->youtube_id))
                $socialMedia->youtube_id =  $request->youtube_id;
            if(!empty($request->linkedin_id))
                $socialMedia->linkedin_id =  $request->linkedin_id;
            if(!empty($request->telegram_id))
                $socialMedia->telegram_id =  $request->telegram_id;
            $socialMedia->save();
        }
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $socialMedia
        ], 200);
    }

    public function store(Request $request) {

        $socialMedia =  socialMedia::create([
            "facebook_id" =>  $request->facebook_id?? '',
            "instagram_id" =>  $request->instagram_id ?? '',
            "twitter_id" =>  $request->twitter_id ?? '',
            "youtube_id" =>  $request->youtube_id ?? '',
            "linkedin_id" =>  $request->linkedin_id ?? '',
            "telegram_id" =>  $request->telegram_id ?? '',
         ]);
        return response()->json([
            'success' => true,
            'message' => 'store socialMedia',
            'data' => $socialMedia
        ], 200);

    }
}
