<?php

use App\BobotSaw;
use Illuminate\Database\Seeder;

class BobotSawSeeder extends Seeder
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
                    'criteria'      => 'OREANTASI SIKAP DAN PELAYANAN',
                    'weight'        => 5
                ],
                [
                    'criteria'      => 'INTEGRITAS',
                    'weight'        => 20
                ],
                [
                    'criteria'      => 'KEDISIPLINAN',
                    'weight'        => 20
                ],
                [
                    'criteria'      => 'PENGAJARAN',
                    'weight'        => 30
                ],
                [
                    'criteria'      => 'PENGALAMAN',
                    'weight'        => 25
                ],
            ];

        foreach ($data as $key => $value) {
            BobotSaw::create($value);
        }
    }
}
