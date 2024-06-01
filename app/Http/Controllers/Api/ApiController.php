<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Console\Migrations\StatusCommand;
use illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\hash;
use illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    public function register(Request $request)
    {
        try{
                $validateUser = Validator::make($request->all().
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required',

            ]);

            if($validateUser->fails()){
                return response()->json([
                    'stasus' => false,
                    'mesage'=> 'validation error',
                    'errors' => $validateUser->errors()
                ],422);

            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

            return response()->json([
                'stasus' => true,
                'mesage'=> 'User created successfully',
                'token' => $user->createToken("API TOKEN")->plainTextToken
            ],200);
        } catch(\Throwable $th) {
            return response()->json([
                'stasus' => false,
                'mesage'=> $th->getMessage(),
            ],500);
        }
    }

}


