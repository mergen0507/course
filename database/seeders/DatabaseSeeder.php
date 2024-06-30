<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Branch;
use App\Models\Student;
use App\Models\Lesson;
use App\Models\Registration;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Location::factory(3)->create();
        Classroom::factory(10)->create();
        Teacher::factory(10)->create();
        Branch::factory(5)->create();
        Student::factory(50)->create();
        Lesson::factory(50)->create();
        Registration::factory(100)->create();
    }
}
