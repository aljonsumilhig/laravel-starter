<?php

    use App\Role;
    use Illuminate\Database\Seeder;

    class RolesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            for ($i = 1; $i <= 9; $i++) {
                Role::create([
                    'title' => 'level'.$i,
                ]);
            }
        }
    }
