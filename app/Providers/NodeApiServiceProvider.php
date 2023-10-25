<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Services\NodeAPIService;

class NodeApiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(NodeAPIService::class, function ($app) {
            return new NodeAPIService(config('services.nodeApiService.base_url'));
        });
    }
}

