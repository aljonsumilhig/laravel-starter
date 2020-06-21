<?php

    use App\User;
    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $user = [
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => 'P@ssw0rd',
            ];
            User::create($user);
        }
    }
