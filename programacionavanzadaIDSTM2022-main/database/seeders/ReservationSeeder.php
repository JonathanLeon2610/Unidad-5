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
        $reservation->nombre_cliente='Jonathan';
        $reservation->telefono_cliente='61200000';
        $reservation->tipo_habitacion='sencilla';
        $reservation->fecha_entrada='2022-10-07';
        $reservation->fecha_salida='2022-10-15';
        $reservation->total='6500';
        $reservation->save();
    }
}
