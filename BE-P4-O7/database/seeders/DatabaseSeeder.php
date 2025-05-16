<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'Test1234'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'Admin1234'
        ]);

        DB::table('vehicle_types')->insert([
            ['id' => 1, 'vehicle_type' => 'Passenger Car', 'license_category' => 'B'],
            ['id' => 2, 'vehicle_type' => 'Truck',          'license_category' => 'C'],
            ['id' => 3, 'vehicle_type' => 'Bus',            'license_category' => 'D'],
            ['id' => 4, 'vehicle_type' => 'Moped',          'license_category' => 'AM'],
        ]);

        // Vehicles
        DB::table('vehicles')->insert([
            ['id' => 1,  'license_plate' => 'AU-67-IO',  'model' => 'Golf',      'manufacture_date' => '2017-06-12', 'fuel_type' => 'Diesel',   'vehicle_type_id' => 1],
            ['id' => 2,  'license_plate' => 'TR-24-OP',  'model' => 'DAF',       'manufacture_date' => '2019-05-23', 'fuel_type' => 'Diesel',   'vehicle_type_id' => 2],
            ['id' => 3,  'license_plate' => 'TH-78-KL',  'model' => 'Mercedes',  'manufacture_date' => '2023-01-01', 'fuel_type' => 'Gasoline', 'vehicle_type_id' => 1],
            ['id' => 4,  'license_plate' => '90-KL-TR',  'model' => 'Fiat 500',  'manufacture_date' => '2021-09-12', 'fuel_type' => 'Gasoline', 'vehicle_type_id' => 1],
            ['id' => 5,  'license_plate' => '34-TK-LP',  'model' => 'Scania',    'manufacture_date' => '2015-03-13', 'fuel_type' => 'Diesel',   'vehicle_type_id' => 2],
            ['id' => 6,  'license_plate' => 'YY-OP-78',  'model' => 'BMW M5',    'manufacture_date' => '2022-05-13', 'fuel_type' => 'Diesel',   'vehicle_type_id' => 1],
            ['id' => 7,  'license_plate' => 'UU-HH-JK',  'model' => 'M.A.N',     'manufacture_date' => '2017-12-03', 'fuel_type' => 'Diesel',   'vehicle_type_id' => 2],
            ['id' => 8,  'license_plate' => 'ST-FZ-28',  'model' => 'Citroën',   'manufacture_date' => '2018-01-20', 'fuel_type' => 'Electric', 'vehicle_type_id' => 1],
            ['id' => 9,  'license_plate' => '123-FR-T',  'model' => 'Piaggio ZIP','manufacture_date' => '2021-02-01','fuel_type' => 'Gasoline', 'vehicle_type_id' => 4],
            ['id' => 10, 'license_plate' => 'DRS-52-P',  'model' => 'Vespa',     'manufacture_date' => '2022-03-21', 'fuel_type' => 'Gasoline', 'vehicle_type_id' => 4],
            ['id' => 11, 'license_plate' => 'STP-12-U',  'model' => 'Kymco',     'manufacture_date' => '2022-07-02', 'fuel_type' => 'Gasoline', 'vehicle_type_id' => 4],
            ['id' => 12, 'license_plate' => '45-SD-23',  'model' => 'Renault',   'manufacture_date' => '2023-01-01', 'fuel_type' => 'Diesel',   'vehicle_type_id' => 3],
        ]);

        // Instructors
        DB::table('instructors')->insert([
            ['id' => 1, 'first_name' => 'Li',       'infix' => null,      'last_name' => 'Zhan',         'mobile' => '06-28493827', 'hired_date' => '2015-04-17', 'star_rating' => '***'],
            ['id' => 2, 'first_name' => 'Leroy',    'infix' => null,      'last_name' => 'Boerhaven',    'mobile' => '06-39398734', 'hired_date' => '2018-06-25', 'star_rating' => '*'],
            ['id' => 3, 'first_name' => 'Yoeri',    'infix' => 'Van',     'last_name' => 'Veen',         'mobile' => '06-24383291', 'hired_date' => '2010-05-12', 'star_rating' => '***'],
            ['id' => 4, 'first_name' => 'Bert',     'infix' => 'Van',     'last_name' => 'Sali',         'mobile' => '06-48293823', 'hired_date' => '2023-01-10', 'star_rating' => '****'],
            ['id' => 5, 'first_name' => 'Mohammed', 'infix' => 'El',      'last_name' => 'Yassidi',      'mobile' => '06-34291234', 'hired_date' => '2010-06-14', 'star_rating' => '*****'],
        ]);

        // Vehicle-Instructor Assignments
        DB::table('vehicle_instructor')->insert([
            ['id' => 1, 'vehicle_id' => 1,  'instructor_id' => 5, 'assignment_date' => '2017-06-18'],
            ['id' => 2, 'vehicle_id' => 3,  'instructor_id' => 1, 'assignment_date' => '2021-09-26'],
            ['id' => 3, 'vehicle_id' => 9,  'instructor_id' => 1, 'assignment_date' => '2021-09-27'],
            ['id' => 4, 'vehicle_id' => 4,  'instructor_id' => 4, 'assignment_date' => '2022-08-01'],
            ['id' => 5, 'vehicle_id' => 5,  'instructor_id' => 1, 'assignment_date' => '2019-08-30'],
            ['id' => 6, 'vehicle_id' => 10, 'instructor_id' => 5, 'assignment_date' => '2020-02-02'],
        ]);
    }
}
