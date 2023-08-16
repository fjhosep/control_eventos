<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // spatie documentation
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [

            'evaluation_menu',
            'event_menu',
            'config_menu',

            'permission_index',
            'permission_create',
            'permission_show',
            'permission_edit',
            'permission_destroy',

            'role_index',
            'role_create',
            'role_show',
            'role_edit',
            'role_destroy',

            'user_index',
            'user_create',
            'user_show',
            'user_edit',
            'user_destroy',

            'post_index',
            'post_create',
            'post_show',
            'post_edit',
            'post_destroy',

            'scheme_index',
            'scheme_create',
            'scheme_edit',
            'scheme_destroy',

            'criteria_index',
            'criteria_create',
            'criteria_show',
            'criteria_edit',
            'criteria_destroy',

            'item_index',
            'item_create',
            'item_show',
            'item_edit',
            'item_destroy',

            'event_index',
            'event_create',
            'event_show',
            'event_edit',
            'event_destroy',

            'competition_index',
            'competition_create',
            'competition_show',
            'competition_edit',
            'competition_destroy',

            'category_index',
            'category_create',
            'category_show',
            'category_edit',
            'category_destroy',

            'error_index',
            'error_create',
            'error_show',
            'error_edit',
            'error_destroy',

            'academy_index',
            'academy_create',
            'academy_show',
            'academy_edit',
            'academy_destroy',

            'participant_index',
            'participant_create',
            'participant_show',
            'participant_edit',
            'participant_destroy',

        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
    }
}
