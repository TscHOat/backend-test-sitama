<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    private $DEPARTMENT_TECHNOLOGY = 1;
    private $DEPARTMENT_SALES_MARKETING = 2;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => "Rudi",
                'username' => "rudi",
                'password' => Hash::make("rudi"),
                'department_id' => $this->DEPARTMENT_TECHNOLOGY,
            ],
            [
                'name' => "Joko",
                'username' => "joko",
                'password' => Hash::make("joko"),
                'department_id' => $this->DEPARTMENT_TECHNOLOGY,
            ],
            [
                'name' => "Irwan",
                'username' => 'irwan',
                'password' => Hash::make("irwan"),
                'department_id' => $this->DEPARTMENT_TECHNOLOGY,
            ],
            [
                'name' => "Lusi",
                'username' => 'lusi',
                'password' => Hash::make("lusi"),
                'department_id' => $this->DEPARTMENT_SALES_MARKETING,
            ],
            [
                'name' => "Komar",
                'username' => 'komar',
                'password' => Hash::make("komar"),
                'department_id' => $this->DEPARTMENT_SALES_MARKETING,
            ],
            [
                'name' => "Ambar",
                'username' => 'ambar',
                'password' => Hash::make("ambar"),
                'department_id' => $this->DEPARTMENT_SALES_MARKETING,
            ],

        ]);
    }
}
