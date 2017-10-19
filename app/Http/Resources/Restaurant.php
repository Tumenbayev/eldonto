<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

/**
 * Class MenuItem
 *
 * @package App\Http\Resources
 */
class Restaurant extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'description' => $this->description,
            'contacts'    => $this->contacts,
            'owner'       => $this->owner,
        ];
    }
}
