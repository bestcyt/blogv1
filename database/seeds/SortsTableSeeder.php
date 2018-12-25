<?php

use Illuminate\Database\Seeder;
use App\Models\Sort;
use Illuminate\Support\Facades\DB;

class SortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Models\Sort::class ,9)->create()->each(function ($sort){
            $sort->parent_id = Sort::where([])->orderBy(DB::raw('RAND()'))->limit(1)->value('id');
            while ($sort->parent_id > $sort->id){
                $sort->parent_id = Sort::where([])->orderBy(DB::raw('RAND()'))->limit(1)->value('id');
            }
            $sort->save();
        });
//
//        ;
//        \App\Models\Sort::insert($sorts->toArray());



    }
}
