<?php

    use App\Role;
    use App\User;
    use Illuminate\Database\Seeder;

    class RoleUserTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $role = Role::orderBy('title', 'desc')->first();
            User::first()->roles()->sync($role->id);
        }
    }
