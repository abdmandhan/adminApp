<?php

use App\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
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
                    'nip'       => '1105098601',
                    'name'      => 'NUR AMINAH'
                ],
                [
                    'nip'       => '1105098602',
                    'name'      => 'CAHAYA MENTARI'
                ],
                [
                    'nip'       => '1105098603',
                    'name'      => 'GARIS MATAHARI'
                ],
                [
                    'nip'       => '1105098604',
                    'name'      => 'SAMUDERA'
                ],
                [
                    'nip'       => '1105098605',
                    'name'      => 'ARAFAT'
                ],
                [
                    'nip'       => '1105098606',
                    'name'      => 'IMAN NUR FATWA'
                ],
                [
                    'nip'       => '1105098607',
                    'name'      => 'PUPUS PUSPITASARI'
                ],
                [
                    'nip'       => '1105098608',
                    'name'      => 'SUTEJO'
                ],
                [
                    'nip'       => '1105098609',
                    'name'      => 'SUMINEM'
                ],
                [
                    'nip'       => '1105098610',
                    'name'      => 'SUTOYO'
                ],
                [
                    'nip'       => '1105098611',
                    'name'      => 'IKA INDAH YUSMINI'
                ],
                [
                    'nip'       => '1105098612',
                    'name'      => 'SUKIMAN'
                ],
                [
                    'nip'       => '1105098613',
                    'name'      => 'SUJADI'
                ],
                [
                    'nip'       => '1105098614',
                    'name'      => 'AMIN IKHWAN RAIS'
                ],
                [
                    'nip'       => '1105098615',
                    'name'      => 'SULASTRI'
                ],
            ];

        foreach ($data as $key => $value) {
            Dosen::create($value);
        }
    }
}
