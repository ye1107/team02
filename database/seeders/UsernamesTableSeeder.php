<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsernamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
     public function generateRandomNumber(){
        $number = [
            'D1104181037',
            'D1104181038',
            'D1104181039',
            'D1104181040',
            'D1104181041',
            'D1104181042',
            'D1104181043',
            'D1104181044',
            'D1104181045',
            'D1104181046',
            'PP110',
            'PP111',
            'PP112',
            'PP113',
            'PP114',
            'PP115',
            'PP130',
            'PP140',
            'PP150',
            'PP120'

        ];
        return $number[rand(0,count($number)-1)];
    }
    public function generateRandomName(){
        $name = [
            'John',
            'Sarah',
            'Michael',
            'Emily',
            'William',
            'Sophia',
            'James',
            'Olivia',
            'Benjamin',
            'Ava',
            'Robert',
            'Mia',
            'David',
            'Charlotte',
            'Joseph',
            'Amelia',
            'Daniel',
            'Ella'
        ];
        return $name[rand(0,count($name)-1)];
    }
    public function generateRandomPhoto(){
        $photo = [
            'C:\Program Files\Software1',
            'C:\Users\User1\Documents\Folder1',
            'C:\Windows\System32',
            'C:\Program Files (x86)\Software2',
            'C:\Users\User2\Downloads',
            'C:\Program Files\Software3',
            'C:\Users\User3\Documents\Folder2',
            'C:\Windows\System64',
            'C:\Program Files (x86)\Software4',
            'C:\Users\User4\Downloads',
            'C:\Program Files\Software5',
            'C:\Users\User5\Documents\Folder3',
            'C:\Windows\System128',
            'C:\Program Files (x86)\Software6',
            'C:\Users\User6\Downloads',
            'C:\Program Files\Software7',
            'C:\Users\User7\Documents\Folder4',
            'C:\Windows\System256',
            'C:\Program Files (x86)\Software8',
        ];
    
        return $photo[rand(0, count($photo) - 1)];
    }
    public function run()
    {
        for ($i=0; $i<25; $i++){
            $number = $this->generateRandomNumber();
            $name = $this->generateRandomName();
            $photo = $this->generateRandomPhoto();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));
           
            DB::table('usernames')->insert([
            'number' => $number,
            'name' => $name,
            'photo' => $photo,
            'created_at' =>$random_datetime,
            'updated_at' =>$random_datetime
         ]);
        }
    }
    
}
