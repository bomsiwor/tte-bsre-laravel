<?php

declare(strict_types=1);

namespace Bomsiwor\TTEBsre\Providers;

use Bomsiwor\Services\TteBsre\UserService;
use Illuminate\Support\ServiceProvider;

final class TTEServiceProvider extends ServiceProvider
{
  public function register()
  {
    $this->app->bind('user', function () {
      return new UserService;
    });

    $this->mergeConfigFrom(__DIR__ . '../config/config.php', 'tteBsre');
  }

  public function boot(): void
  {
    if ($this->app->runningInConsole()) {
      $this->publishes([
        __DIR__ . '../config/config.php' => config_path("tteBsre.php")
      ], "config");
    }
  }
}
