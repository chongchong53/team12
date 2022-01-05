<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class VendorsTableSeeder extends Seeder
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
    public function generateRandomCountry() {
        $country = ['義大利', '英國','德國','美國','日本'];
        return $country[rand(0, count($country)-1)];

    }

    public function run()
    {
        for ($i=0; $i<25; $i++) {
            $vendor= $this->generateRandomName();
            $country = $this->generateRandomCountry();
            //$founded_time = $this->generateRandomZone();
            //$home = $city . "球場";
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            //$founded_time = Carbon::now()->subYears(rand(73, 121))->subMonths(rand(0, 12))->subRealDays(rand(0,31));


            DB::table('vendors')->insert([
                'vendor' => $vendor,
                'country' => $country,
                'founded_time' => rand(1900, 2000),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
