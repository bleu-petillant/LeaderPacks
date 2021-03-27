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
             

            Column::name('teammates')
                ->label('Department')
                ->filterable(),
                
                Column::name('job_title')
                ->label('Slogan'),


            Column::callback(['image'], function ($image) {

                return view('admin.action.columunimage', ['image'=>$image]);
               
            })->label('Profile Picture'),

            Column::callback(['id'], function ($id) {
               
                return view('admin.action.teamaction', ['id' => $id]);
         
            }),
           

        ];
    }
}
