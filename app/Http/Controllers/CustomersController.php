<?php

namespace App\Http\Controllers;

use App\Models\architect;
use App\Models\architecteTimeline;
use App\Models\catalogue;
use App\Models\customers;
use App\Models\demande;
use App\Models\loginLogs;
use App\Models\offre;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;
class CustomersController extends Controller
{
    public function create(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
        ]);
        $customers =  customers::create([
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
            'message' => 'add customers',
            'data' => $customers
        ], 200);

    }
    public function getProfile(Request $request){
        if(!empty($request->id)){
            $customers = customers::where('id',$request->id)->first();
            return response()->json([
                'success' => true,
                'message' => 'profile',
                'data' => $customers
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
        $customers = customers::all();
        return response()->json([
            'success' => true,
            'message' => 'list admin customers',
            'data' => $customers
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

        if (!$token = auth()->guard('customers')->attempt($validator->validated())) {

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

            $user = auth()->guard('customers')->user();
            $admin = customers::find($user->getAuthIdentifier());
            $admin->remember_token = $token;
            $admin->last_active_connection = Carbon::now();
            $admin->last_ip_connection =  request()->ip();
            $admin->save();
            return response()->json([
                'error' => false,
                'accessToken' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->guard('customers')->factory()->getTTL() * 60,
                'user' => auth()->guard('customers')->user()
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
            $architect = demande::where('customer_id',$request->id)->get();

            foreach ($architect as $item){
                $item->offers= offre::where('id_demande',$item->id_demande)->get();
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

    public function AddDemande(Request $request){
        $this->validate($request, [
            'customer_id' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'id_service' => 'required|string|max:255',
            'min_budget' => 'required|string|max:255',
            'max_budget' => 'required|string|max:255',
        ]);
        $demandes =  demande::create([
            "customer_id" => $request->customer_id,
            "title" => $request->title,
             "description" => $request->description ?? '',
            "id_service" => $request->id_service ??0,
            "min_budget" => $request->min_budget ??0,
            "max_budget" => $request->max_budget ??0,
             "status" => $request->status ?? 1,
             "attached_file_1" => Controller::UplodFile('attached_file_1') ?? '',
             "attached_file_2" => Controller::UplodFile('attached_file_2') ?? '',
             "attached_file_3" => Controller::UplodFile('attached_file_3') ?? '',
        ]);
        return response()->json([
            'success' => true,
            'message' => 'add demande',
            'data' => $demandes
        ], 200);
    }
}
