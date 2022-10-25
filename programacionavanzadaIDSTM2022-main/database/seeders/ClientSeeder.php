<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client=new Client();
        $client->name='Jonathan';
        $client->phone_number='61200000';
        $client->email='jleon_19@gmail.com';
        $client->save();

        $client=new Client();
        $client->name='angel';
        $client->phone_number='61200000';
        $client->email='Angel@gmail.com';
        $client->save();
    }
}
