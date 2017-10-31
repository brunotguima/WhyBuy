<?php

use Illuminate\Database\Seeder;

class ramoAtividadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ramoatividade')->insert([
            'name' => '..',
        ]);
    }
}
