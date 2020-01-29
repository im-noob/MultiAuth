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
        for($i = 0 ; $i <6 ; $i ++){

            $temp = $i + 1;
            factory(App\User::class)->create([
                'phone' => "123456789$temp",
                'state' => 'Gujrat',
                'role' => $temp,
                'status_id' => 1,
                'email' => "admin$temp@admin.com",
                'password' => Hash::make("password$temp"),
            ]);
        }
    }
}
