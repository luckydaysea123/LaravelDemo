<?php

use Illuminate\Database\Seeder;
use App\Model\Employee;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name' => "Nguyễn Văn A",
            'phone'=>"098989878789",
            "address"=>'Quy Nhơn',
            "gender"=>TRUE,
            "department_id"=>1
        ]);
        Employee::create([
            'name' => "Đặng Duy Dương",
            'phone'=>"098123123123",
            "address"=>'Quy Nhơn',
            "gender"=>TRUE,
            "department_id"=>1
        ]);
        Employee::create([
            'name' => "Nguyễn Thị Mỹ Hằng",
            'phone'=>"09893534534",
            "address"=>'Gia Lai',
            "gender"=>FALSE,
            "department_id"=>2
        ]);
        Employee::create([
            'name' => "Trương Đình Hân",
            'phone'=>"09898987589",
            "address"=>'Quy Nhơn',
            "gender"=>TRUE,
            "department_id"=>2
        ]);
        Employee::create([
            'name' => "Bùi Bách",
            'phone'=>"09891231589",
            "address"=>'Sao hỏa',
            "gender"=>TRUE,
            "department_id"=>3
        ]);
    }
}
