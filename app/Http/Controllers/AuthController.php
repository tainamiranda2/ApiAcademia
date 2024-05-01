<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use Illuminate\Http\Request;
use Illuminate\Http\ResponseTrait;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
//PY5uq08J9O30MipBcyFlFYKB0yH60m86XWxwyigX0bc9c276
   // use MakesHttpRequests;
    public function login (Request $request){
       if(Auth::attempt($request->only('email', 'password'))){
        $token = $request->user()->createToken('academia', ['academia-store', 'academia-update'])->plainTextToken;
        return response('Authorized', 200)->header('Authorizationnnn', 'Bearer ' . $token);
       }else{
        return response('Not Authorized', 403);

       }
    }

    public function logout (Request $request){
      
      if ($request->user()) {
         $request->user()->currentAccessToken()->delete();
         return response('Token Revoked', 200);
     } else {
         return response('User not authenticated', 401);
     }
    }
}
