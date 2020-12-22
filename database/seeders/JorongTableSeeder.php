<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jorong;
use App\Models\Nagari;

class JorongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seeder untuk jorong sekaligus nagari
        $nagaris = Nagari::all();

        foreach ($nagaris as $nagari):
            Jorong::factory()
                ->count(2)
                ->hasKeluargas(20)
                ->create(['nagari_id'=>$nagari->id]);
        endforeach;
    }
}
