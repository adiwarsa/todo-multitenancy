<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;
use Stancl\Tenancy\Facades\Tenancy;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Fetch all tenants
        $tenants = Tenant::all();

        // // Iterate over each tenant
        // foreach ($tenants as $tenant) {
        //     Tenancy::initialize($tenant);
        //     // Call individual seeders for this tenant
        //     $this->call(UserSeeder::class);
        //     $this->call(CategorySeeder::class);
        //     Tenancy::end();
        // }
        $this->call(UserSeeder::class);
    }
}
