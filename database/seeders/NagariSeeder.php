<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Nagari;

class NagariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nagaris = ['Suliki', 'Tanjuang Pati', 'Sarilamak', 'Andaleh'];
        foreach ($nagaris as $nagari):
            Nagari::create([
                'nama'=>$nagari
            ]);
        endforeach;
    }
}
