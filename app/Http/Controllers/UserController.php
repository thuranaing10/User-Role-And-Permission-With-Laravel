<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ProfileResource;
use App\Http\Utilities\HttpResponseUtility;

class UserController extends Controller
{
    public function __construct(HttpResponseUtility $httpResponseUtility)
    {
        $this->httpResponseUtility = $httpResponseUtility;
    }

    public function getProfile(){
        $user = User::where('id',Auth::user('api')->id)->first();

        return $this->httpResponseUtility->successResponse(new ProfileResource($user));
    }
}
