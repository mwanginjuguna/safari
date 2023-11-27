<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Branch;
use App\Models\Dish;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
    }

    /**
     * Seed database with content (especially for development).
     */
    public function initialize(): void
    {
        $user = User::factory()->create();

        $branch = Branch::factory()->create([
            'name' => "Golden Safari Restaurant",
            'type' => 'HQ'
        ]);

        $menus = Menu::factory(7)
            ->state(new Sequence(
                ['name' => 'Breakfast'],
                ['name' => 'Lunch'],
                ['name' => 'Dinner'],
                ['name' => 'Beverages'],
                ['name' => 'Drinks'],
                ['name' => 'Coffee'],
                ['name' => 'Steak'],
            ))
            ->for($branch)
            ->create();
        
        foreach($menus as $menu) {
            $dish = Dish::factory()->for($menu)->create();
        }
        
    }
}
