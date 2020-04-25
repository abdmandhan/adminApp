<?php

use App\KpiType;
use Illuminate\Database\Seeder;

class KpiTypeSeeder extends Seeder
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
                    'name'          => 'Orientasi Sikap dan Pelayanan'
                ],
                [
                    'name'          => 'Integritas'
                ],
                [
                    'name'          => 'Kedisiplinan'
                ],
                [
                    'name'          => 'Pengajaran'
                ],
            ];

        foreach ($data as $key => $value) {
            KpiType::create($value);
        }
    }
}
