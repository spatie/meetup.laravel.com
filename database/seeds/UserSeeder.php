<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Models\User::class)->create([
            'email' => 'freek@spatie.be',
        ]);
    }
}
