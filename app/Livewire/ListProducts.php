<?php

namespace App\Livewire;

use App\Models\Manufacturer;
use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class ListProducts extends Component
{
    public int $manufacturer = 0;

    public bool $stock = true;

    public Collection $manufacturers;

    public function mount(): void
    {
        $this->manufacturers = Manufacturer::all();
    }

    public function render()
    {
        $products = Product::with('manufacturer')->when($this->manufacturer, function ($query, $manufacturer) {
            return $query->where('manufacturer_id', $manufacturer);
        })->when($this->stock === true, function ($query) {
            return $query->where('stock' ,'>', 0);
        })->when($this->stock === false, function ($query) {
            return $query->where('stock', '<=', 0);
        })->get();

        return view('livewire.list-products', [
            'products' => $products
        ]);

    }
}
