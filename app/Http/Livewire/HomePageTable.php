<?php

namespace App\Http\Livewire;


use App\Models\HomePage;
use Illuminate\Support\Facades\Auth;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class HomepageTable extends LivewireDatatable
{
    public $model = HomePage::class;

    public function columns()
    {
        return [

            Column::name('id')
                 ->label('#')
                 ->defaultSort('asc')
                 ->filterable(),

            Column::callback(['product_image'], function ($product_image) {
                
                return view('admin.action.columunimage', ['product_image'=>$product_image]);
               
            }),

            Column::callback(['id'], function ($id) {

                 return view('admin.action.homepageaction', ['id' => $id]);

            }),


        ];
    }
}
