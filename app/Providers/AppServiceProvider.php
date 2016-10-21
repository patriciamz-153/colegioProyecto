<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Blade;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::extend(function($value) {
            return preg_replace('/\@json(.+)/', '<?php echo json_encode(${1}); ?>;', $value);
        });
        Validator::extend('alpha_spaces', function($attribute, $value, $parameters, $validator) {
            $reg = "#[^\p{L}\s-]#u";
            $count = preg_match_all($reg, $value, $matches, PREG_OFFSET_CAPTURE);
            return ($matches == 0);
        });
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
