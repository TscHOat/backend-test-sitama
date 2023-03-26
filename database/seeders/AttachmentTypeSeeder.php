<?php

namespace Database\Seeders;

use App\Models\AttachmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttachmentType::create([
            ["other"],
            ['image'],
        ]);
    }
}
