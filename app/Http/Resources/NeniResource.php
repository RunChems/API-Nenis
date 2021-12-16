<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NeniResource extends JsonResource
{

    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'Neni Nombre' => $this->name,
            'Dia de la neni' => $this->neni_day,
            'Actividad principal como neni' => $this->main_activity,
            'Imagen de neni' => $this->image,
            'Tipo de chems' => [
                "Chems Nombre" => $this->chems_type->name,
                "Chems Descripcion" => $this->chems_type->description
            ]
        ];
    }
}
