<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class NeniCollection extends ResourceCollection
{

    public function toArray($request): array
    {
        return [
            'Las nenis de chemaaaaa' => $this->collection,
            'ex nenis' => [
                'La ets de run run' => [
                    'Razon de salida' => 'dejo al run run',
                ],
                'maflais' => [
                    'Razon de salida' => 'pq pto'
                ],
            ],
            'proximas nenis' => [
                'gabys' => ['razon de ser neni' => 'pq me gustasiquesi'],
                'joce' => ['razon de ser neni' => 'pq nos trai el chismecito'],
            ]
        ];
    }
}
