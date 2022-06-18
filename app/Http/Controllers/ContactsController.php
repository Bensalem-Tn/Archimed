<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function listsadmin(Request $request)
    {
        $contacts =  contacts::all();
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $contacts
        ], 200);
    }
    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $contacts =contacts::find($request->id);
        if(!empty($contacts)){
            $contacts->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'contacts deleted successfully',
        ], 200);

    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $contacts =  contacts::create([
            "email" => $request->email,
            "username" => $request->username,
            "subject" =>  $request->subject,
            "message" =>  $request->message,
            "ip" => $request->ip(),
        ]);
        return response()->json([
            'success' => true,
            'message' => 'store',
            'data' => $contacts
        ], 200);

    }
}
