<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tenant;


class CreateTenant extends Command
{
    protected $signature = 'tenants:create {domain}';
    protected $description = 'Creates a new tenant with the specified domain';

    public function handle()
    {
        $domain = $this->argument('domain');

        $tenant = Tenant::create(['id' => $domain]);

        $tenant->domains()->create(['domain' => $domain]);

        $this->info("Tenant created successfully!");
        $this->info("Domain: {$domain}");

        $this->call('tenants:migrate');
    }
}
