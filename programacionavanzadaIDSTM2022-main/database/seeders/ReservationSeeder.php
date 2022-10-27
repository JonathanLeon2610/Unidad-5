<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reservation;


class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation=new Reservation();
        $reservation->date='2022-10-27';
        $reservation->price='1985';
        $reservation->client_id=1;
        $reservation->save();

        $reservation=new Reservation();
        $reservation->date='2022-10-30';
        $reservation->price='2500';
        $reservation->client_id=1;
        $reservation->save();

        $reservation=new Reservation();
        $reservation->date='2022-09-27';
        $reservation->price='1985';
        $reservation->client_id=2;
        $reservation->save();
    }
}
