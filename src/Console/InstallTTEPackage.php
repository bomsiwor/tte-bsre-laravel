<?php

namespace Bomsiwor\TteBsre\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallTTEPackage extends Command
{

  protected $signature = "tte-bsre:install";

  protected $description = "Mempersiapkan file untuk pustaka TTE";

  public function handle()
  {
    $this->info("Mempersiapkan pustaka...");
  }
}
