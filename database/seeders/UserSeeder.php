<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $k = 10;

        for($i = 1; $i < $k; $i++) {
            User::create([
                'name' => "Awais ".$i,
                'email' => "awais".$i."@gmail.com",
                'password' => Hash::make('12345')
            ]);
        }
    }
}
