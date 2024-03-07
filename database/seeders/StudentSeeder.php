<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'nama' => 'Dirga',
                'nim' => '123',
                'jurusan' => 'SI',
            ]
            ];

        DB::table('students')->insert($students);
    }
}
