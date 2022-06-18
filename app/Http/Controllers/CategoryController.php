<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{


    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|string|max:255',
        ]);
        $category =  category::create([
            "name" => $request->name,
            "status" => $request->status ?? 1,
            "parent" =>  $request->parent ?? 0,
            "icon" => Controller::UplodFile('icon') ?? '',
        ]);
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $category
        ], 200);

    }

    public function edit(Request $request)
    {
        $this->validate($request, [
        'id' => 'required',
       ]);
        $category =  category::where('id',$request->id)->get();
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $category
        ], 200);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $category =category::find($request->id);
        if(!empty($category)){
            category::where('id',$request->id)->update([
                "name" => $request->name ?? $category->name,
                "status" => $request->status ?? $category->status,
                "parent" =>  $request->parent ?? $category->parent,
                "icon" => Controller::UplodFile('icon') ?? $category->icon,
            ]);
        }
        return response()->json([
            'success' => true,
            'message' => 'Category updated successfully',
        ], 200);

    }


    public function destroy(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
        ]);
        $category =category::find($request->id);
        if(!empty($category)){
            $category->delete();
        }
        return response()->json([
            'success' => true,
            'message' => 'Category deleted successfully',
        ], 200);

    }
    public function lists(Request $request)
    {
        $category =  category::where('status',1)->where('parent',0)->get();
        foreach ($category as $item){
            $item->items=  category::where('status',1)->where('parent',$item->id)->get();
        }
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $category
        ], 200);
    }
    public function listsadmin(Request $request)
    {
        $category =  category::all();
        return response()->json([
            'success' => true,
            'message' => 'lists',
            'data' => $category
        ], 200);
    }
}
