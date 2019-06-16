<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $app = new User;
        $app->name = "karthick";
        $app->email = "karthi@test.com";
        $app->password = bcrypt("helloworld");
        $app->admin = 1;
        $app->save();
    }
}
