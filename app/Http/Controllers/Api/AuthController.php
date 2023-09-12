<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;



class AuthController extends Controller
{
    public function register (Request $request) {
        $fields= $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users',
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' =>['string','min:8', 'max:11'],
            'image' => ['image']
        ]);

        $user= User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => bcrypt($fields['password']),

        ])->assignRole('guest');

        $token = $user->createToken('usertoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];

        return UserResource::make($user)->additional(['token' => $token]);
    }


    public function login (Request $request){
        $fields= $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        $user = User::where('email',$fields['email'])->first();
        if(!$user || !Hash::check($fields['password'] , $user->password)){
            return response( [
                'message' => 'Bad creds'
            ], 401);
        }

        if ($user->hasRole('guest')){
            return response( [
                'message' => "You are unauthorized to log in. Please wait for your account activation."
            ], 401);

        }
        $token = $user->createToken('usertoken')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];


        return UserResource::make($user)->additional(['token' => $token]);
    }



    public function logout (Request $request) {
        auth()->user()->tokens()->delete() ;
        return [
            'message' => 'Logged out'
        ];
    }
}
