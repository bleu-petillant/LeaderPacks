<?php

namespace Database\Seeders;

use App\Models\AboutPage;
use App\Models\ContactPage;
use App\Models\HomePage;
use App\Models\ProductPage;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdminSeeder::class
        ]);
        $homepage = HomePage::factory()->create();
        $team = Team::factory()->count(5)->create();
        $aboutpage = AboutPage::factory()->create();
        $productpage = ProductPage::factory()->create();
        $contactpage = ContactPage::factory()->create();
    }
}
