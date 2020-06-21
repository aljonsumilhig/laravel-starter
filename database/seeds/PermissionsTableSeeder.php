<?php

    use App\Permission;
    use Illuminate\Database\Seeder;

    class PermissionsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $modules = ['role', 'permission', 'user'];
            $actions = ['access', 'create', 'show', 'edit', 'update', 'delete', 'print'];
            foreach ($modules as $module) {
                foreach ($actions as $action) {
                    Permission::create([
                        'title' => $module.'_'.$action
                    ]);
                }
            }
        }
    }
