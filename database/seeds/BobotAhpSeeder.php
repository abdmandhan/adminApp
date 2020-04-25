<?php

use App\BobotAhp;
use Illuminate\Database\Seeder;

class BobotAhpSeeder extends Seeder
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
                    'criteria_1'    => 0.01,
                    'criteria_2'    => 0.01,
                    'criteria_3'    => 0.01,
                    'criteria_4'    => 0.01,
                    'criteria_5'    => 0.01,
                ],
                [
                    'dosen_id'      => 2,
                    'criteria_1'    => 0.01,
                    'criteria_2'    => 0.01,
                    'criteria_3'    => 0.01,
                    'criteria_4'    => 0.01,
                    'criteria_5'    => 0.01,
                ],
                [
                    'dosen_id'      => 3,
                    'criteria_1'    => 0.01,
                    'criteria_2'    => 0.01,
                    'criteria_3'    => 0.01,
                    'criteria_4'    => 0.01,
                    'criteria_5'    => 0.01,
                ],
                [
                    'dosen_id'      => 4,
                    'criteria_1'    => 0.01,
                    'criteria_2'    => 0.01,
                    'criteria_3'    => 0.01,
                    'criteria_4'    => 0.01,
                    'criteria_5'    => 0.01,
                ],
                [
                    'dosen_id'      => 5,
                    'criteria_1'    => 0.01,
                    'criteria_2'    => 0.01,
                    'criteria_3'    => 0.01,
                    'criteria_4'    => 0.01,
                    'criteria_5'    => 0.01,
                ],
            ];

        foreach ($data as $key => $value) {
            BobotAhp::create($value);
        }
    }
}
