<?php

namespace App\Providers;

use App\Models\RoleHasPermission;
use App\Models\RoleToUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;

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
        Blade::if('permission', function ($permission_name) {

            $user = Auth::user();
            $permission = RoleToUser::where('user_id', optional($user)->id)->value('role_id');
            $data = RoleHasPermission::byRole($permission)->get()->toArray();
            // dd(in_array(str_replace("'", "", $permission_name), array_column($data, 'key')));
            return in_array(str_replace("'", "", $permission_name), array_column($data, 'key'));

        });
    }


}
