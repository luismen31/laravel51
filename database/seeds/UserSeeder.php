<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name' => 'admin',
            'email' => 'admin@ejemplo.com',
            'password' => bcrypt('123456'),            
        ]);

         factory(App\User::class)->create([
            'name' => 'user',
            'email' => 'user@ejemplo.com',
            'password' => bcrypt('123456'),            
        ]);

        factory(App\User::class)->create([
            'name' => 'maria',
            'email' => 'maria@ejemplo.com',
            'password' => bcrypt('123456'),            
        ]);
    }
}
