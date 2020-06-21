<?php

    use App\Permission;
    use App\Role;
    use Illuminate\Database\Seeder;

    class PermissionRoleTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $permissions = Permission::all();
            Role::orderBy('title', 'desc')->first()->permissions()->sync($permissions->pluck('id'));
        }
    }
