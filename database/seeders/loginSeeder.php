<?php

namespace Database\Seeders;

use App\Models\loginMod;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        loginMod::truncate();
        Schema::enableForeignKeyConstraints();

        $loginData = [
            ['username' => 'muymuy', 'password' => ''],
            ['username' => 'amoy', 'password' => '']
        ];

        foreach ($loginData as $value) {
            loginMod::insert([
                'username' => $value['username'],
                'password' => $value['password'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
