<?php

namespace Database\Seeders;
use App\Models\Urun;
use App\Models\UrunDetay;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class UrunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Urun::truncate();
        UrunDetay::truncate();
        $faker = Faker::create();
        for($i=0; $i<30;$i++)
        {
            $urun=Urun::create([
                'urun_adi'=>$faker->title,
                'slug'=>$faker->title,
                'aciklama'=>$faker->sentence(20),
                'fiyati'=>$faker->randomFloat(3,1,20)//Bir ve 20 arasında 3 ve 1 arası  basamaklı sayılar oluşturur
            ]);
                     $detay = $urun->detay()->create([
                         'goster_slider'=>rand(0,1),
                         'goster_gunun_firsati'=>rand(0,1),
                         'goster_one_cikan'=>rand(0,1),
                         'goster_indirimli'=>rand(0,1)

                     ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
