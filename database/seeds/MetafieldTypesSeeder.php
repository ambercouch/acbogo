<?php

use Illuminate\Database\Seeder;
use App\MetafieldTypes;

class MetafieldTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'item1' => [
                'metafield_type_name' => 'String'
            ],
            'item2' => [
                'metafield_type_name' => 'Integer'
            ],
            'item3' => [
                'metafield_type_name' => 'JSON String'
            ],
        ];


        foreach ($data as $item){
            factory(MetafieldTypes::class, 1)->create($item);
        }

    }
}
