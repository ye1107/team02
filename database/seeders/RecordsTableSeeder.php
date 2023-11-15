<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


     Public function generateRandomUid(){
        $uid = range(1, 25);
        return $uid[rand(0, count($uid) - 1)];
    }
    public function generateRandomKid(){
        $kid = range(1, 11);
        return $kid[rand(0,count($kid)-1)];
    }

    public function run()
    {
        for ($i=0; $i<25; $i++){
            $uid = $this->generateRandomUid();
            $kid = $this->generateRandomKid();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
            $random_date = Carbon::now()->subMonths(rand(0, 12))->subRealDays(rand(0, 31));
            $random_lend_date = $random_date->copy();
            $random_back_date = $random_date->copy();
            $lend_time = Carbon::createFromTime(rand(0, 23), rand(0, 59));
            $back_time = $lend_time->copy()->addMinutes(50);
        
            DB::table('records')->insert([
            'uid' => $uid,
            'kid' => $kid,
            'lend_date' => $random_lend_date,
            'lend_time' => $lend_time,
            'back_date' => $random_back_date,
            'back_time' => $back_time,
            'created_at' =>$random_datetime,
            'updated_at' =>$random_datetime
            ]);
        }
    }
}

    

