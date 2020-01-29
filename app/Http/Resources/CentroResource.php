<?php

namespace App\Http\Resources;

use App\Centro;
use Illuminate\Http\Resources\Json\JsonResource;

class CentroResource extends JsonResource
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
            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'web' => $this->web,
            'situacion' => $this->situacion,
            'coordinador' => $this->coordinadorObject, // relación con el coordinador
        ];;
    }
}
