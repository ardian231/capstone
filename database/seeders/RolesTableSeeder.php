<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() {
    DB::table('roles')->insert([
        ['name' => 'admin'],
        ['name' => 'umkm'],
        ['name' => 'investor'],
    ]);
}
}
