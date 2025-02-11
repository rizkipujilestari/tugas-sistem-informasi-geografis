<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'      => 'Super Admin',
                'email'     => 'superadmin@praymyway.com',
                'phone'     => '081947047719',
                'role'      => 'admin',
                'password'  => \bcrypt('admin123'),
            ],
            [
                'name'      => 'Admin Rizki',
                'email'     => 'rizkipuj@gmail.com',
                'phone'     => '081322286797',
                'role'      => 'admin',
                'password'  => \bcrypt('admin123'),
            ],
            [
                'name'      => 'Admin Neni',
                'email'     => 'neinee033@gmail.com',
                'phone'     => '001',
                'role'      => 'admin',
                'password'  => \bcrypt('admin123'),
            ],
            [
                'name'      => 'Admin Anissa',
                'email'     => 'annisaistikoomah2312@gmail.com',
                'phone'     => '002',
                'role'      => 'admin',
                'password'  => \bcrypt('admin123'),
            ],
            [
                'name'      => 'Admin Adhika',
                'email'     => 'adhikafebrian7@gmail.com',
                'phone'     => '003',
                'role'      => 'admin',
                'password'  => \bcrypt('admin123'),
            ],
        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }

    }
}
