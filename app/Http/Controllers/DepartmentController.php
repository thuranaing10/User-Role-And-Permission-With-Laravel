<?php

namespace App\Http\Controllers;
use App\Http\Utilities\HttpResponseUtility;
use App\Models\Department;
use App\Http\Resources\DepartmentResource;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function __construct(HttpResponseUtility $httpResponseUtility)
    {
        $this->httpResponseUtility = $httpResponseUtility;
    }

    public function departmentsList(){
        $departments = Department::get();

        return $this->httpResponseUtility->successResponse(DepartmentResource::collection($departments));
    }
}
