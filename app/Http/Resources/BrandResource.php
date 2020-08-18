<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public static $wrap = 'brand';
    public function toArray($request)
    {
        // return parent::toArray($request);
        return[
            'band_id' => $this->id,
            'band_name' => $this->name,
            'brand_photo' => url($this->photo),
            
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,


        ];
    }
}
