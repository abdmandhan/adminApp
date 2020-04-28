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

        $admin =
            [
                'name'      => 'admin',
                'address'   => 'indonesia',
                'phone'     => '021021021',
                'email'     => 'admin@admin.com',
                'password'  => Hash::make('12341234')
            ];

        $admin = User::create($admin);
        $admin->assignRole('admin');

        $dosen =
            [
                'name'      => 'dosen',
                'address'   => 'indonesia',
                'phone'     => '021021021',
                'email'     => 'dosen@dosen.com',
                'password'  => Hash::make('12341234')
            ];

        $dosen = User::create($dosen);
        $dosen->assignRole('dosen');

        $mahasiswa =
            [
                'name'      => 'mahasiswa',
                'address'   => 'indonesia',
                'phone'     => '021021021',
                'email'     => 'mahasiswa@mahasiswa.com',
                'password'  => Hash::make('12341234')
            ];

        $mahasiswa = User::create($mahasiswa);
        $mahasiswa->assignRole('mahasiswa');

        $atasan =
            [
                'name'      => 'atasan',
                'address'   => 'indonesia',
                'phone'     => '021021021',
                'email'     => 'atasan@atasan.com',
                'password'  => Hash::make('12341234')
            ];

        $atasan = User::create($atasan);
        $atasan->assignRole('atasan');

        $teman_sejawat =
            [
                'name'      => 'teman sejawat',
                'address'   => 'indonesia',
                'phone'     => '021021021',
                'email'     => 'teman@teman.com',
                'password'  => Hash::make('12341234')
            ];

        $teman_sejawat = User::create($teman_sejawat);
        $teman_sejawat->assignRole('teman_sejawat');
    }
}
