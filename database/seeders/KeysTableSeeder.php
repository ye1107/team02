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
    
    public function generateRandomKey(){
        $key= [
            'F308',
            'F309',
            'F310A',
            'F310B',
            'F311A',
            'F311B',
            'F312A',
            'F312B',
            'F313' ,
            'F314' ,
            'F318',
        ];
        return $key[rand(0,count($key)-1)];
    }
    public function run()
    {
        for ($i=0; $i<30; $i++){
            $key = $this->generateRandomKey();
            $room = $key . "教室";
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
           
            DB::table('keys')->insert([
            'key' => $key,
            'room' => $room,
            'created_at' =>$random_datetime,
            'updated_at' =>$random_datetime
            
         ]);
        }
    }
}
