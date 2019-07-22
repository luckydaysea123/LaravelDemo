<?php

use Illuminate\Database\Seeder;
use App\Model\Department;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => "Nhân sự",
            'phone'=>"098989878789"
        ]);
        Department::create([
            'name' => "Bảo vệ",
            'phone'=>"098989878999"
        ]);
      
    }
}
