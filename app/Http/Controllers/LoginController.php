<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\LoginResource;
use App\Http\Resources\ProfileResource;
use App\Http\Utilities\HttpResponseUtility;

class LoginController extends Controller
{

    public function __construct(HttpResponseUtility $httpResponseUtility)
    {
        $this->httpResponseUtility = $httpResponseUtility;
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $data = [
                "user" => new LoginResource(Auth::user()),
                'token' =>  Auth::user()->createToken('laravel')->plainTextToken

            ];

            return $this->httpResponseUtility->successResponse($data, "Login successfully");
        } else {
            return $this->httpResponseUtility->badRequestResponse(null, "Login Failed");
        }
    }
}
