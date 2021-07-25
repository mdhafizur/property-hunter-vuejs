<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('users')->insert([
        //     'user_id' => 3,
        //     'username' => Str::random(10).'@gmail.com',
        //     'password' =>  Str::random(10),
        // ]);
        $date = Carbon::now();
        //
        User::create([
            'first_name' => 'Hafizur',
            'last_name' => 'Rahman',
            'email' => 'h@gmail.com',
            'password' => '$2y$10$VyWrQG50TkIc3BUWRg4z.e4weOl.OavOqjwc4l7g8dUmgB0QlnsEG',
            'email_verified_at' => $date->toDateTimeString(),
            'isVerified' => 1,
        ]);
        User::create([
            'first_name' => 'Public',
            'last_name' => 'Person',
            'email' => 'p@gmail.com',
            'password' => '$2y$10$VyWrQG50TkIc3BUWRg4z.e4weOl.OavOqjwc4l7g8dUmgB0QlnsEG',
            'email_verified_at' => $date->toDateTimeString(),
            'isVerified' => 1,
            'subscription' => 'a'
        ]);
        User::create([
            'first_name' => 'Agent',
            'last_name' => 'Person',
            'email' => 'a@gmail.com',
            'password' => '$2y$10$VyWrQG50TkIc3BUWRg4z.e4weOl.OavOqjwc4l7g8dUmgB0QlnsEG',
            'email_verified_at' => $date->toDateTimeString(),
            'isVerified' => 1,
            'subscription' => 'b'
        ]);
        User::create([
            'first_name' => 'Developer',
            'last_name' => 'Person',
            'email' => 'd@gmail.com',
            'password' => '$2y$10$VyWrQG50TkIc3BUWRg4z.e4weOl.OavOqjwc4l7g8dUmgB0QlnsEG',
            'email_verified_at' => $date->toDateTimeString(),
            'isVerified' => 1,
            'subscription' => 'c'
        ]);
        User::create([
            'first_name' => 'Editor',
            'last_name' => 'Person',
            'email' => 'e@gmail.com',
            'password' => '$2y$10$VyWrQG50TkIc3BUWRg4z.e4weOl.OavOqjwc4l7g8dUmgB0QlnsEG',
            'email_verified_at' => $date->toDateTimeString(),
            'isVerified' => 1,
            'subscription' => 'd'
        ]);
    }
}
