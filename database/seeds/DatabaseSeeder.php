<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        DB::table('users')->delete();

        $users = array(
            ['name' => 'Gabriel Abud', 'email' => 'g.abud@gmail.com', 'password' => Hash::make('secret')],
            ['name' => 'Andrew Godfrey', 'email' => 'a.godfrey@fakeaddress.com', 'password' => Hash::make('secret')],
            ['name' => 'Michael Roinestad', 'email' => 'm.roinestad@fakeaddress.com', 'password' => Hash::make('secret')]
        );
        
        // Loop through each user above and create the record for them in the database
        foreach ($users as $user) {
            User::create($user);
        }

        Model::reguard();
    }
}
