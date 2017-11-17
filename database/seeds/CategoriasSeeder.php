<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("public/js/categorias.json");
        $data = json_decode($json);
        foreach ($data as $item)
        {
            RamoAtivEmpreendimento::create(array(
                'id' => $item->id,
                'name' => $item->name
            ));
        }
    }
}
