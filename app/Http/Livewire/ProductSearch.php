<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination;

    public string $search = '';
    protected $queryString = ['search']; 

    public function render() 
    {
        // Set the search query 
        $query = Product::query();
        if ($this->search) {
            $query->where('title', 'like', "%{$this->search}%")
                ->orWhere('description', 'like', "%{$this->search}%");
        }

        // Return the view with pagination
        return view('livewire.product-search', [
            'products' => $query->paginate(20)
        ]);

    }

    // Listen for the updated hook then reset the page
    public function updated($property)
    {
        if ($property === 'search') {
            $this->resetPage();
        }

    }
}
