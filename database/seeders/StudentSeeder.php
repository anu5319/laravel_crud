<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        // Student::create([
        //     'first_name' => 'anu',
        //     'last_name' => 'sree',
        //     'gender'=>'female',
        //     'qualifications'=>'MCA',
        // ]);
        Student::factory()->count(10)->create();

    }
}
