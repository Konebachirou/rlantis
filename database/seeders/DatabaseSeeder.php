<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\User_Type;
use App\Models\Publication;
use App\Models\Agenda;
use App\Models\News;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         DB::table('user__types')->insert([
            'nom' => 'Enseignant',
        ]);

         DB::table('user__types')->insert([
            'nom' => 'Doctorant',
        ]);

         DB::table('user__types')->insert([
            'nom' => 'Chercheur',
        ]);

        News::factory(10)->create();
        Agenda::factory(10)->create();
        User::factory(10)->create();
        Publication::factory(20)->create();
    }
}
