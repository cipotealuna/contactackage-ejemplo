<?php

namespace Ibermedia\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
      $this->loadRoutesFrom(__DIR__.'/routes/web.php','contact');
      $this->loadViewsFrom(__DIR__.'/views','contact');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations','contact');


      //CONTROLADORES
      $this->publishes([__DIR__.'/Http/Controllers' => app_path('Http/Controllers')],'contact');

      //MODELOS
      $this->publishes([__DIR__.'/Models' => app_path('Http/Models')],'contact');

      //VISTAS
      $this->publishes([__DIR__.'/views' => app_path('/resources/views')],'contact');

      //MIGRACIONES
      $this->publishes([__DIR__.'/database/migrations' => base_path('/database/migrations')],'contact');

     
    }

    public function register()
    {
       $this->app->make('Ibermedia\Contact\Http\Controllers\ContactController');
    }
}


 ?>
