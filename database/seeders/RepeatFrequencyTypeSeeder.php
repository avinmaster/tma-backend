<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RepeatFrequencyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('repeat_frequency_types');
        $types = ['never', 'day', 'week', 'month', 'year'];

        for ($i = 0; $i < count($types); $i++) {
            $now = Carbon::now();

            $table->insert([
                'name' => $types[$i],
                'created_at' => $now,
                'updated_at' => $now
            ]);
        }
    }
}
