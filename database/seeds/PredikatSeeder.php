<?php

use App\Predikat;
use Illuminate\Database\Seeder;

class PredikatSeeder extends Seeder
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
                    'name'      => 'Sangat Tidak Baik'
                ],
                [
                    'name'      => 'Tidak Baik'
                ],
                [
                    'name'      => 'Cukup Baik'
                ],
                [
                    'name'      => 'Baik'
                ],
                [
                    'name'      => 'Sangat Baik'
                ],
            ];

        foreach ($data as $key => $value) {
            Predikat::create($value);
        }
    }
}
