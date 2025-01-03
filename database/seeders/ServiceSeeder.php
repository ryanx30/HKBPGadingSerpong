<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create(['title' => 'Ibadah Minggu Dewasa', 'time' => 'Sunday | 10:00 AM']);
        Service::create(['title' => 'Ibadah Minggu Remaja', 'time' => 'Sunday | 07:00 AM']);
        Service::create(['title' => 'Ibadah Minggu Anak-anak', 'time' => 'Sunday | 08:30 AM']);
        Service::create(['title' => 'Ibadah Khusus', 'time' => 'Friday | 06:00 PM']);
    }
}