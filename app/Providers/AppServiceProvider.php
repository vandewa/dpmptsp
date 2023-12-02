<?php

namespace App\Providers;

use App\Models\InformasiUmum;
use App\Models\Menu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (env('APP_ENV') !== 'local') {
            if (env('APP_DEBUG') != 'true') {
                $this->app['request']->server->set('HTTPS', true);
            }

            $visitor = DB::table('visitors')->count();
            View::share('visitor', $visitor);

            $pembaca = DB::table('views')->count();
            View::share('pembaca', $pembaca);

            $links = DB::table('link_terkaits')->get();
            View::share('links', $links);

            $menus = Menu::with(['childs'])
                ->where('parent_id', '!=', null)
                ->where('parent_id', 1)
                ->orderBy('urutan', 'asc')
                ->get();

            View::share('menus', $menus);

            $info = InformasiUmum::where('id', 1)->first();
            View::share('info', $info);
        }

    }
}
