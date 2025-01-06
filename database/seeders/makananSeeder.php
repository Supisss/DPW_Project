<?php

namespace Database\Seeders;


use App\Models\makananMod;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class makananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $makananData = [
            ['username' => 'muymuy', 'password' => ''],
            ['username' => 'amoy', 'password' => '']
        ];

        foreach ($makananData as $value) {
            makananMod::insert([
                'username' => $value['username'],
                'password' => $value['password'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
