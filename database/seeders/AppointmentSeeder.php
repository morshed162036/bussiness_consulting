<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Server\Appointment;
class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $appointment = [
            [
                'id' => 1,
                'service_id' => 1,
                'setup_id' => 0,
                'name' => 'mehejabul',
                'email' => 'mehejabul@gmail.com',
                'phone' => '01714294499',
                'description' => 'This is my website',
                'date' => '2023-12-10',
            ],
        ];
        Appointment::insert($appointment);
    }
}
