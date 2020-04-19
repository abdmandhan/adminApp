<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =
            [
                [
                    'name'      => 'admin',
                    'address'   => 'depok',
                    'phone'     => '021021021',
                    'email'     => 'admin@admin.com',
                    'password'  => Hash::make('12341234')
                ]
            ];

        foreach ($data as $key => $value) {
            $user = User::create($value);
            $user->assignRole('admin');
        }
    }
}
