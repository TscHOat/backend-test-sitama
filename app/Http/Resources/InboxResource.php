<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InboxResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'department_id' => $this->department_id,
            'cc_id' => $this->cc_id,
            'assign_id' => $this->assign_id,
            'department' => $this->department->name,
            'cc' => $this->cc->name,
            'assign' => $this->assign->name,
        ];
    }
}
