<?php

namespace Ibermedia\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');
      $this->loadViewsFrom(__DIR__.'/views', 'contact');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');
      $this->publishes([__DIR__.'/Http/Controllers' => app_path('Http/Controllers')]);
      $this->publishes([__DIR__.'/Models' => app_path('Http/Models')]);
  



    }

    public function register()
    {


    }
}


 ?>
