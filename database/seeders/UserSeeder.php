<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user 1 ... 
        $record = new User;
        $record->name = "Rahma";
        $record->email = "rahma@rahma.com";
        $record->phone = "97714855";
        $record->password = Hash::make('111');
        $record->save();

        //user 2 ... 
        $record = new User;
        $record->name = "Juwayriya";
        $record->email = "juwayriya@juwayriya.com";
        $record->phone = "72687738";
        $record->password = Hash::make('222');
        $record->save();

        //user 3 ... 
        /*$record = new User;
        $record->name = "Aisha";
        $record->email = "aisha@aisha.com";
        $record->phone = "94996201";
        $record->password = Hash::make('333');
        $record->save();

        //user 4 ... 
        $record = new User;
        $record->name = "Sheikha";
        $record->email = "sheikha@sheikha.com";
        $record->phone = "93845692";
        $record->password = Hash::make('444');
        $record->save();*/
    }
}
