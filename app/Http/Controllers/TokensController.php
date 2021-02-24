<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Contracts\Providers\JWT;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

// https://www.youtube.com/watch?v=KI2Qoa3PKtU

class TokensController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator -> fails()) {
            return response()-> json([
                'success' => false,
                'message' => 'Wrong validation',
                'errors' => $validator->errors()
            ], 422);
        }

        $token = JWTAuth::attempt($credentials);

        if ($token) {
            return response()-> json([
                'success' => true,
                'token' => $token,
                'user' => User::where('email', $credentials['email'])->get()->first()
            ], 200);
        } else {
            return response()-> json([
                'success' => false,
                'message' => 'Wrong credential '.$token,
                'errors' => $validator->errors()
            ], 401);    // No autorizado
        }
    }

    public function refreshToken() {
        $token = JWTAuth::getToken();

        try {
            $token = JWTAuth::refresh($token);

            return response()->json([
                'success' => true,
                'token' => $token
            ], 200);
        } catch (TokenExpiredException $ex) {
            return response()->json([
                'success' => false,
                'message' => 'Need to login again please (expired)'
            ], 422);
        } catch (TokenBlacklistedException $ex) {
            return response()->json([
                'success' => false,
                'message' => 'Need to login again please (blacklist)'
            ], 422);
        }
    }

    public function logOut() {
        $token = JWTAuth::getToken();

        try {
            JWTAuth::invalidate($token);

            return response()->json([
                'success' => true,
                'message' => 'logout successfull'
            ], 200);
        } catch (JWTException $ex) {
            return response()->json([
                'success' => false,
                'message' => 'Failed logout, please tra again'
            ], 422);
        }
    }

}
