<?php

namespace Database\Seeders;

use App\Models\pesananMod;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        pesananMod::truncate();
        Schema::enableForeignKeyConstraints();

        $pesananData = [
            ['username' => 'muymuy', 'password' => ''],
            ['username' => 'amoy', 'password' => '']
        ];

        foreach ($pesananData as $value) {
            pesananMod::insert([
                'username' => $value['username'],
                'password' => $value['password'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
