<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KeysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomRoom(){
        $roomMap = [
            'F308' => 'F308-微處理機實驗室',
            'F309' => 'F309-人工智慧/物聯網聯合實驗室',
            'F310A' => 'F310A-材料室',
            'F310B' => 'F310B-材料室',
            'F311A' => 'F311A-資網系辦公室',
            'F311B' => 'F311B-主任辦公室',
            'F312A' => 'F312A-會議室',
            'F312B' => 'F312B-機房',
            'F313' => 'F313-程式設計多媒體實驗室',
            'F314' => 'F314-網路工程實驗室',
            'F318' => 'F318-專題研究室',
        ];
    
        $key = array_rand($roomMap);
        $room = $roomMap[$key];
    
        return [
            'key' => $key,
            'room' => $room,
        ];
    }
    
    public function generateRandomKey(){
        $roomMap = [
            'F308' => 'F308-微處理機實驗室',
            'F309' => 'F309-人工智慧/物聯網聯合實驗室',
            'F310A' => 'F310A-材料室',
            'F310B' => 'F310B-材料室',
            'F311A' => 'F311A-資網系辦公室',
            'F311B' => 'F311B-主任辦公室',
            'F312A' => 'F312A-會議室',
            'F312B' => 'F312B-機房',
            'F313' => 'F313-程式設計多媒體實驗室',
            'F314' => 'F314-網路工程實驗室',
            'F318' => 'F318-專題研究室',
        ];
    
        $key = array_rand($roomMap);
        $room = $roomMap[$key];
    
        return [
            'key' => $key,
            'room' => $room,
        ];
    }
    public function run()
    {
        for ($i=0; $i<25; $i++){
            $keys = $this->generateRandomKey();
            $rooms = $this->generateRandomRoom();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
           
            DB::table('keys')->insert([
            'key' => $keys,
            'room' => $rooms,
            'created_at' => $random_datetime,
            'updated_at' => $random_datetime,
         ]);
        }
    }
}
