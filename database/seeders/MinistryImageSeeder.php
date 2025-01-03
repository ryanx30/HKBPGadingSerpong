<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MinistryImage;

class MinistryImageSeeder extends Seeder
{
    public function run()
    {
        MinistryImage::create(['image_path' => '/images/church1.jpg']);
        MinistryImage::create(['image_path' => '/images/church2.jpg']);
        MinistryImage::create(['image_path' => '/images/church3.jpg']);
    }
}