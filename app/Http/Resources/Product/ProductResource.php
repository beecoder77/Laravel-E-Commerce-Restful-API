<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
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
            'nama' => $this->nama,
            'deskripsi' => $this->detail,
            'harga' => $this->harga,
            'stok' => $this->stok,
            'diskon' =>$this->diskon,
        ];
    }
}
