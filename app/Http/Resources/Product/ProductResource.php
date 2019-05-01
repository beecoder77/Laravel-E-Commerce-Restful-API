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
            'stok' => $this->stok == 0 ? 'Stok Habis' : $this->stok,
            'diskon' =>$this->diskon,
            'totalHarga' => round(( 1 - ($this->diskon/100)) * $this->harga,0),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'Belum ada Rating',
            'href' => [
                'reviews' => route('reviews.index',$this->id)
            ]
        ];
    }
}
