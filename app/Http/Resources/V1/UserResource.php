<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            "id" => $this->id,
            "name" => $this->name,
            "bio" => $this->bio,
            "canDmMe" => $this->can_dm_me,
            "canPublicMsgMe" => $this->can_public_msg_me,
            "email" => $this->email,
            "languageId" => $this->language_id,
            "scoreSum" => $this->score_sum
        ];
        // return parent::toArray($request); old code
    }
}
