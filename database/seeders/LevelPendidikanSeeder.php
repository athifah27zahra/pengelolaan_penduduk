<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LevelPendidikan;

class LevelPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = ['Tidak Sekolah', 'SD', 'SLTP', 'SLTA', 'D1', 'D2', 'D3', 'S1/D4', 'S2', 'S3'];

        foreach ($level as $peringkat):
            LevelPendidikan::create([
                'nama'=>$peringkat
            ]);
        endforeach;
    }
}
