<?php

namespace App\Http\Controllers;

use App\Models\architect;
use App\Models\architecteTimeline;
use App\Models\catalogue;
use App\Models\demande;
use App\Models\loginLogs;
use App\Models\offre;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;

class ArchitectController extends Controller
{
   public function create(Request $request){
           $this->validate($request, [
               'name' => 'required|string|max:255',
               'email' => 'required|string|max:255',
               'password' => 'required|string|max:255',
               'phone' => 'required|string|max:255',
           ]);
           $architect =  architect::create([
               "name" => $request->name,
               "email" => $request->email,
               "phone" => $request->phone,
               "description" => $request->description ?? '',
               "adresse" => $request->adresse ?? '',
               'password' => bcrypt($request->password),
                "status" => $request->status ?? 1,
               "category" => $request->category ?? null,
               'last_active_connection' => Carbon::now(),
               'last_ip_connection' => request()->ip(),
                "photo" => Controller::UplodFile('photo') ?? '',
           ]);
           return response()->json([
               'success' => true,
               'message' => 'add architect',
               'data' => $architect
           ], 200);

   }
    public function getProfile(Request $request){
            if(!empty($request->id)){
                $architect = architect::where('id',$request->id)->first();
                $architect->catalogue = catalogue::where('architect_id',$request->id)->get();
                $architect->timeline = architecteTimeline::where('architect_id',$request->id)->get();
                return response()->json([
                    'success' => true,
                    'message' => 'profile',
                    'data' => $architect
                ], 200);
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'empty params',
                    'data' => array()
                ], 200);
            }
    }
    public function getListAdmin(Request $request){
        $architect = architect::all();
        return response()->json([
            'success' => true,
            'message' => 'list admin architect',
            'data' => $architect
        ], 200);
    }
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->guard('architect')->attempt($validator->validated())) {

            $loginlog = new loginLogs();
            $loginlog->email =  $request['email'];
            $loginlog->message = 'Unauthorized';
            $loginlog->ip = request()->ip();
            $loginlog->location = '';
            $loginlog->save();
            return response()->json(['error' => true, 'message' => 'Unauthorized'], 401);
        }

        //    $auth = AuthController::register($request);

        return $this->createNewToken($token, $request);
    }
    protected function createNewToken($token , $request)
    {
        if ($token) {
            $loginlog = new loginLogs();
            $loginlog->email =  $request['email'];
            $loginlog->message = 'success to login';
            $loginlog->ip = request()->ip();
            $loginlog->location = '';
            $loginlog->save();

            $user = auth()->guard('architect')->user();
            $admin = architect::find($user->getAuthIdentifier());
            $admin->remember_token = $token;
            $admin->last_active_connection = Carbon::now();
            $admin->last_ip_connection =  request()->ip();
            $admin->save();
            return response()->json([
                'error' => false,
                'accessToken' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->guard('architect')->factory()->getTTL() * 60,
                'user' => auth()->guard('architect')->user()
            ]);
        } else {
            return response()->json([
                'error' => true,
                'message' => 'expired',
            ]);
        }
    }


    public function ListOffert(Request $request){
        if(!empty($request->id)){
            $architect = offre::where('architect_id',$request->id)->get();

            foreach ($architect as $item){
                $item->demande= demande::find($item->id_demande);
            }
          return response()->json([
                'success' => true,
                'message' => 'list offert',
                'data' => $architect
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'empty params',
                'data' => array()
            ], 200);
        }

    }

    public function ListCatalogue(Request $request){
        if(!empty($request->id)){
            $catalogue = catalogue::where('architect_id',$request->id)->get();
            return response()->json([
                'success' => true,
                'message' => 'ListCatalogue',
                'data' => $catalogue
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'empty params',
                'data' => array()
            ], 200);
        }
    }
    public function AddCatalogue(Request $request){
       if(!empty($request->architect_id)&& !empty($request->url)){
           $catalogue = new catalogue();
           $catalogue->url = $request->url;
           $catalogue->architect_id = $request->architect_id;
           $catalogue->save();
           return response()->json([
               'success' => true,
               'message' => 'add Catalogue',
               'data' => $catalogue
           ], 200);
       }else{
           return response()->json([
               'success' => false,
               'message' => 'empty params',
               'data' => array()
           ], 200);
       }

    }
    public function DeleteCatalogue(Request $request){
        if(!empty($request->id)){
            $catalogue = catalogue::find($request->id);
            if(!empty($catalogue)){
                $catalogue->delete();
            }

            return response()->json([
                'success' => true,
                'message' => 'delete Catalogue',
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'empty params',
            ], 200);
        }
    }
    public function TimeLine(Request $request){
        if(!empty($request->id)){
            $timeline = architecteTimeline::where('architect_id',$request->id)->get();
            return response()->json([
                'success' => true,
                'message' => 'architecte Timeline',
                'data' => $timeline
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'empty params',
                'data' => array()
            ], 200);
        }
    }
}
