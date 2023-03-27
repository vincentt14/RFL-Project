<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Recycler;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'volunteer_date' => date('Y-m-d h:i:s'),
            'phone_number' => '000',
            'is_admin' => true
        ]);

        User::create([
            'username' => 'member1',
            'email' => 'member1@gmail.com',
            'password' => bcrypt('member1'),
            'volunteer_date' => date('Y-m-d h:i:s'),
            'phone_number' => '012345',
        ]);
        User::create([
            'username' => 'member2',
            'email' => 'member2@gmail.com',
            'password' => bcrypt('member2'),
            'volunteer_date' => date('Y-m-d h:i:s'),
            'phone_number' => '012345',
        ]);
        User::create([
            'username' => 'member3',
            'email' => 'member3@gmail.com',
            'password' => bcrypt('member3'),
            'volunteer_date' => date('Y-m-d h:i:s'),
            'phone_number' => '012345',
        ]);
        User::create([
            'username' => 'member4',
            'email' => 'member4@gmail.com',
            'password' => bcrypt('member4'),
            'volunteer_date' => date('Y-m-d h:i:s'),
            'phone_number' => '012345',
        ]);

        Recycler::create([
            'name' => 'USJ 1 Recycling Centre',
            'image' => 'recycler-images/uqIlplSotoNKxhgDVBSkaHaPVP2XaRRLHo19QUyG.jpg',
            'location' => 'Taman Subang Mewah, Subang Jaya, Selangor, Malaysia',
            'description' => 'USJ 1 Recycling Centre is a one of many recycle center in Malaysia, USJ 1 Recycling Centre is located in Kampung Baru Subang, Selangor. This business is working in the following industry: Recycling centers.'
        ]);

        Recycler::create([
            'name' => 'DACING TRADING SDN BHD',
            'image' => 'recycler-images/wLdofoQyWGQt6CdLc4xEkTcxQVN9950rlkEwUSvS.jpg',
            'location' => 'Jalan tiga, Subang Light Industrial Park, Malaysia',
            'description' => 'Established in 2006, Dacing Perkasa SDN BHD is a visionary and innovative organization, specializing in the procurement of recycled products and converting them into products that shall meet the raw material requirements of our clients.'
        ]);
    }
}