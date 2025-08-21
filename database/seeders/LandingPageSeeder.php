<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LandingPage;
use Illuminate\Support\Str;

class LandingPageSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            LandingPage::create([
                'title' => "Landing Page $i",
                'slug' => Str::slug("Landing Page $i"),
                'image_path' => "uploads/dummy$i.jpg",
                'description' => "This is a short description for landing page $i.",
                'content' => "Full content of landing page $i goes here.",
            ]);
        }
    }
}
# php artisan db:seed --class=LandingPageSeeder
