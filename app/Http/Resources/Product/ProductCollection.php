<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {  
        return [
            'nama' => $this->nama,
            'totalHarga' => round(( 1 - ($this->diskon/100)) * $this->harga,0),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No rating yet',
            'diskon' => $this->diskon,
            'href' => [
                'link' => route('products.show',$this->id)
            ]
        ];
    }
}
