<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10) {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomName() {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " ". $last_name;
        return $name;
    }
    public function run(){
        for ($i=0; $i<500; $i++)
        {
            $name = $this->generateRandomName();
            //$position = $this->generateRandomPosition();
            //$nationality = $this->generateRandomNationality();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            //$birthdate = Carbon::now()->subYears(rand(48, 60))->subMonths(rand(0, 12))->subRealDays(rand(0,31));
            //$onboarddate = Carbon::now()->subYears(rand(18, 30))->subMonths(rand(0, 12))->subRealDays(rand(0,31));
            DB::table('cars')->insert([
                'car' => $name,
                'vid' => rand(1, 25),
                'selling_price' => rand(50, 1000),
                'displacement' => rand(1000, 4000),
                'energy_consumption' => rand(5, 20),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
