<?php

namespace App\Http\Livewire;

use App\Models\Team;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class TeamTable extends LivewireDatatable
{
    public $model = Team::class;


    public function columns()
    {
        return [

            Column::name('id')
                 ->label('#')
                 ->defaultSort('asc'),
             

            Column::name('firstname')
                ->label('FirstName')
                ->filterable(),

                Column::name('lastname')
                ->label('LastName'),
                
                Column::name('job_title')
                ->label('Job Title'),


            Column::callback(['image'], function ($image) {

                return view('admin.action.columunimage', ['image'=>$image]);
               
            })->label('Image Profile'),

            Column::callback(['id'], function ($id) {
               
                    return view('admin.action.teamaction', ['id' => $id]);
         

            }),
           

        ];
    }
}
