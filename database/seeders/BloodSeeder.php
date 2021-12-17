<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blood;
use Illuminate\Support\Facades\DB;

class BloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('bloods')->delete();
        $bgs = ['O-','O+','A-','A+','AB+','AB-'];
        foreach ($bgs as $b) {
             Blood::create(['type' => $b]);
        }
    }
}
