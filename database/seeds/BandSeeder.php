<?php

use Illuminate\Database\Seeder;


class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            "nazov" => "The Prodigy",
            "pocet_clenov" => 3,
            "zaner" => "Electronic Rock"
        ]);
    }
}
