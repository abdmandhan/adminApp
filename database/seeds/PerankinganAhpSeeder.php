<?php

use App\PerankinganAhp;
use Illuminate\Database\Seeder;

class PerankinganAhpSeeder extends Seeder
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
                    'dosen_id'      => 1,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 2,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 3,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 4,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 5,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 6,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 7,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 8,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 9,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 10,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 11,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 12,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 13,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 14,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],
                [
                    'dosen_id'      => 15,
                    'nilai'         => 0.65,
                    'predikat_id'   => 1,
                ],

            ];

        foreach ($data as $key => $value) {
            PerankinganAhp::create($value);
        }
    }
}
