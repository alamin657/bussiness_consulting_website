<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //$this->call(SuperAdminSeeder::class);
        //$this->call(CompanyDetailsSeeder::class);
        //$this->call([ServiceSeeder::class,ServiceDetailsSeeder::class]);
        //$this->call([SetupSeeder::class,SetupDetailsSeeder::class]);
        //$this->call(BannerSeeder::class);
        //$this->call(CounterSeeder::class);
        //$this->call(ReviewSeeder::class);
        //$this->call(ContactSeeder::class);
        //$this->call(PricingPlaneSeeder::class);
        //$this->call([BlogCategorySeeder::class,BlogPostSeeder::class]);
        //$this->call(AboutCompanySeeder::class);
        //$this->call(AppointmentSeeder::class);
        $this->call(CEOMessageSeeder::class);
    }
}
