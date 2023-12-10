<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StaffResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => @$this->name,
            'email' => @$this->email,
            'code' => $this->code,
            'mobile' => $this->mobile,
            'join_date' => $this->join_date,
            'department_name' => $this->department->name,
            'position' => $this->position,
            'age' => $this->age,
            'gender' => $this->gender,
            'status' => $this->status,
            'roles' => RoleResource::collection($this->user->userRoles),
            'permissions' => PermissionRoleResource::collection($this->user->userRoles),
        ];
    }
}
