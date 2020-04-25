<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            UserSeeder::class,
            KpiSeeder::class,
            KpiTypeSeeder::class,
            DosenSeeder::class,
            BobotSawSeeder::class,
            PerangkinganSawSeeder::class,
            BobotAhpSeeder::class,
            PerankinganAhpSeeder::class,
            PredikatSeeder::class,
        ]);
    }
}
