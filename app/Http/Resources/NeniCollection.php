<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class NeniCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Las nenis de chemaaaaa' => $this->collection,
            'ex nenis' => ['La ets de run run' => [
                'Razon de salida' => 'dejo al run run',
                'maflai pq pto' => 'pq pto'
            ]]
        ];
    }
}
