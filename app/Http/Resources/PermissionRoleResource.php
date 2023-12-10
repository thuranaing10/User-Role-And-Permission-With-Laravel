<?php

namespace App\Http\Resources;

use App\Http\Resources\PermissionResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PermissionRoleResource extends JsonResource
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
            'permissions'=> PermissionResource::collection($this->role->rolePermissions)
        ];
    }
}
