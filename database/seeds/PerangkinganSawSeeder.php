<?php

use App\PerangkinganSaw;
use Illuminate\Database\Seeder;

class PerangkinganSawSeeder extends Seeder
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
                    'nilai'         => 65,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 2,
                    'nilai'         => 59,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 3,
                    'nilai'         => 46,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 4,
                    'nilai'         => 49,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 5,
                    'nilai'         => 68,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 6,
                    'nilai'         => 84,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 7,
                    'nilai'         => 56,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 8,
                    'nilai'         => 63,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 9,
                    'nilai'         => 61,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 10,
                    'nilai'         => 64,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 11,
                    'nilai'         => 52,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 12,
                    'nilai'         => 59,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 13,
                    'nilai'         => 78,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 14,
                    'nilai'         => 79,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
                [
                    'dosen_id'      => 15,
                    'nilai'         => 71,
                    'evaluated_by'  => '20 Mahasiswa, 2 Rekan Sejawat, 1 Atasan, 2 Dosen'
                ],
            ];

        foreach ($data as $key => $value) {
            PerangkinganSaw::create($value);
        }
    }
}
