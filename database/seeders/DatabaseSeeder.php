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
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 1",
            "department_id" => 1,
            "position_id" => mt_rand(1, 2),
            "status" => 1,
            "office_id" => 1
        ]);
        
        Assign::create([
            "extension_id" => 2,
            "employee_id" => 2
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 1",
            "department_id" => 2,
            "position_id" => mt_rand(1, 2),
            "status" => 1,
            "office_id" => 1
        ]);
        
        Assign::create([
            "extension_id" => 2,
            "employee_id" => 3
        ]);
        
        Assign::create([
            "extension_id" => 2,
            "employee_id" => 5
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 1",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 1,
            "office_id" => 1
        ]);
        
        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 2",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => 1
        ]);
        
        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 3",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => 1
        ]);
        
        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 4",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => mt_rand(1, 2)
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 5",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => mt_rand(1, 2)
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 5",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => mt_rand(1, 2)
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 6",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => mt_rand(1, 2)
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 7",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => mt_rand(1, 2)
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 8",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => mt_rand(1, 2)
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 9",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => mt_rand(1, 2)
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 10",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => mt_rand(1, 2)
        ]);

        Employee::create([
            "no" => strval(mt_rand(0000, 9999)),
            "name" => "Employee 11",
            "department_id" => mt_rand(1, 2),
            "position_id" => mt_rand(1, 2),
            "status" => 0,
            "office_id" => mt_rand(1, 2)
        ]);

        Extension::create([
            "no" => strval(mt_rand(0000, 9999))
        ]);
        
        Extension::create([
            "no" => strval(mt_rand(0000, 9999))
        ]);

        Department::create([
            "name" => "DEPARTMENT15",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT16",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT1",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT2",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT3",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT4",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT5",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT6",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT7",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT8",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT9",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT10",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT11",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT12",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT13",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        Department::create([
            "name" => "DEPARTMENT14",
            "isActive" => mt_rand(1, 2),
            "group_id" => mt_rand(1, 3)
        ]);
        
       

        Position::create([
            "name" => "Position 1",
            "level" => mt_rand(1, 10)
        ]);
        
        Position::create([
            "name" => "Position 2",
            "level" => mt_rand(1, 10)
        ]);

        Group::create([
            "name" => "Company Member"
        ]);
        
        Group::create([
            "name" => "Subcon"
        ]);
       
        Group::create([
            "name" => "Client"
        ]);

        Office::create([
            "name" => "Yard 3"
        ]);
        
        Office::create([
            "name" => "Yard 1"
        ]);

        User::create([
            "name" => "admin1",
            "password" => bcrypt('wasco@123')
        ]);
        User::create([
            "name" => "admin2",
            "password" => bcrypt('wasco@123')
        ]);
        User::create([
            "name" => "admin3",
            "password" => bcrypt('wasco@123')
        ]);
    }
}
