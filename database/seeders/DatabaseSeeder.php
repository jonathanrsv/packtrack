<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\Unidade;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(10)->create();
         DB::table('users')->insert([
            'name' => 'Tester',
            'email' => 'teste@teste.com',
            'is_admin' => 1,
            'password' => Hash::make('12345678'),
        ]);

        DB::table('unidades')->insert([
            'bloco' => 'A',
            'unidade' => '1108',
            'condominio_id' => '1'
        ]);
        
        DB::table('unidades')->insert([
            'bloco' => 'A',
            'unidade' => '1109',
            'condominio_id' => '1'
        ]);
        

        DB::table('moradores')->insert([
            'name' => 'Fulano',
            'lastname' => 'Silva',
            'celphone' => '11965454544',
            'email' => 'fulanosilva@gmail.com',
            'unidade_id' => '1',
        ]);

        DB::table('moradores')->insert([
            'name' => 'Maria',
            'lastname' => 'Silva',
            'celphone' => '11965454544',
            'email' => 'marisilva@gmail.com',
            'unidade_id' => '1',
        ]);

        

    }
}
