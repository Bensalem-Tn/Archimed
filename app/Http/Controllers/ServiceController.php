<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);
        $service =  service::create([
            "name" => $request->name,
            "status" => $request->status ?? 1,
            "parent" =>  $request->parent ?? 0,
            "icon" => Controller::UplodFile('icon') ?? '',
        ]);
        return response()->json([
            'success' => true,
            'message' => 'store',
            'data' => $service
        ], 200);

    }

    public function edit(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $service =  service::where('id',$request->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'edit',
            'data' => $service
        ], 200);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $service =service::find($request->id);
        if(!empty($service)){
            category::where('id',$request->id)->update([
                "name" => $request->name ?? $service->name,
                "status" => $request->status ?? $service->status,
                "parent" =>  $request->parent ?? $service->parent,
                "icon" => Controller::UplodFile('icon') ?? $service->icon,
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'service updated successfully',
        ], 200);

    }


    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $service =service::find($request->id);
        if(!empty($service)){
            $service->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'service deleted successfully',
        ], 200);

    }
    public function lists(Request $request)
    {
        $service =  service::where('status',1)->where('parent',0)->get();
        foreach ($service as $item){
            $item->items=  service::where('status',1)->where('parent',$item->id)->get();
        }
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $service
        ], 200);
    }
    public function listsadmin(Request $request)
    {
        $service=  service::all();
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $service
        ], 200);
    }
}
