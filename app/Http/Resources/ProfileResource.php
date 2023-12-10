<?php

namespace App\Http\Resources;

use App\Http\Resources\PermissionResource;
use App\Http\Resources\PermissionRoleResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => @$this->name,
            'email' => @$this->email,
            'code' => $this->staff->code,
            'mobile' => $this->staff->mobile,
            'join_date' => $this->staff->join_date,
            'department_name' => $this->staff->department->name,
            'position' => $this->staff->position,
            'age' => $this->staff->age,
            'gender' => $this->staff->gender,
            'status' => $this->staff->status,
            'roles' => RoleResource::collection($this->userRoles),
            'permissions' => PermissionRoleResource::collection($this->userRoles),
        ];
    }
}
