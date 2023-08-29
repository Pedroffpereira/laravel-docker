<?php

use App\Bicycle;
use Illuminate\Database\Seeder;

class BicycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 100; $i++) {

            factory(Bicycle::class, 1000)->create(['user_id' => $i]);
            factory(Bicycle::class, 1000)->create(['user_id' => $i]);
        }
    }
}
