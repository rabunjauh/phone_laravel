<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assign;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Extension;
use App\Models\Group;
use App\Models\Office;
use App\Models\Position;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Assign::create([
            "extension_id" => 1,
            "employee_id" => 1
        ]);

        Employee::create([
            "no" => "6689",
            "name" => "Mustafa",
            "department_id" => 4,
            "position_id" => 4,
            "status" => 1,
            "office_id" => 3
        ]);

        Extension::create([
            "no" => "8503"
        ]);

        Department::create([
            "description" => "MIS",
            "status_active" => 1,
            "group_id" => 1,
        ]);
    }
}
