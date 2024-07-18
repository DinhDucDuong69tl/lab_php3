<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                ['name' => 'Tiểu thuyết'],
                ['name' => 'Phi tiểu thuyết'],
                ['name' => 'Sách giáo khoa'],
                ['name' => 'Sách tham khảo'],
                ['name' => 'Sách thiếu nhi'],
            ]
        );
    }
}
