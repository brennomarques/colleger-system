<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ];
        // return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            'metadata' => 'Essa API não está em produção, é apenas de homologação e testes',
        ];
    }
}
