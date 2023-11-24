<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();
         Listing::create(
            [
                'title' => 'Larval Senior Developet',
                'tags' => 'laraval java script',
                'company' => 'Apple',
                'location' => 'Usa',
                'email' => 'usaapple@gmail.com',
                'website' => 'Https://www.apple.com',
                'description' => 'For your business, too, your customers’ wins are your wins. 
                If you’re a small retailer, this is true not just with your in-store customer service,
                 but also your ecommerce website’s overall UX, its check-out flow, 
                 your online return options, and your product descriptions.'
            ]
         );

         Listing::create(
            [
                'title' => 'Full Stack Engineer',
                 'tags' => 'laraval PHP',
                'company' => 'Google',
                'location' => 'Usa',
                'email' => 'google@gmail.com',
                'website' => 'Https://www.google.com',
                'description' => 'For your business, too, your customers’ wins are your wins. 
                If you’re a small retailer, this is true not just with your in-store customer service,
                 but also your ecommerce website’s overall UX, its check-out flow, 
                 your online return options, and your product descriptions.'
            ]
         );
         // using  Factory
         Listing::factory(6)->create();       
         //\App\Models\Listings::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
