<?php

use Faker\Generator as Faker;
use App\Models\Sort;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Sort::class, function (Faker $faker) {

    $sentence   = $faker->sentence();
    $updated_at = $faker->dateTimeThisMonth();
    $created_at = $faker->dateTimeThisMonth($updated_at);
    $parent_id  = Sort::where([])->orderBy(DB::raw('RAND()'))->limit(1)->value('id') ?? 0;

    return [
        'sort_name'  => $faker->text(20),
        'desc'       => $sentence, // secret
//        'parent_id'  => $parent_id, // secret
        'created_at' => $created_at,
        'updated_at' => $updated_at,
    ];
});
