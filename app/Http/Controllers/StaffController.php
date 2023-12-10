<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\StaffResource;
use App\Http\Utilities\HttpResponseUtility;

class StaffController extends Controller
{
    public function __construct(HttpResponseUtility $httpResponseUtility)
    {
        $this->httpResponseUtility = $httpResponseUtility;
    }

    public function staffList(){


        $staff = Staff::where('department_id',Auth::user('api')->staff->department_id)->get();

        $userRoles = UserRole::where('user_id', Auth::user('api')->id)->select('role_id')->get();

        foreach($userRoles as $role){
            if ($role->role_id == 1) {
                $staff = Staff::all();
            }
        }

        return $this->httpResponseUtility->successResponse(StaffResource::collection($staff));
    }
}
