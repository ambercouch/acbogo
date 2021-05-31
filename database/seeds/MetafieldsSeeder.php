<?php

use Illuminate\Database\Seeder;

class MetafieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'item1' => [
                'user_id' => 1,
                'resource_id' => 1,
                'group_id' => 1,
                'metafield_name' => 'Additional Info Title',
                'metafield_key' => 'ac_additional_info_title',
                'metafield_namespace' => 'ac111',
                'metafield_type_id' => '1',
                'metafield_label' => 'Title',
                'metafield_info' => 'Add the title of your info',

            ],
            'item2' => [
                'user_id' => 1,
                'resource_id' => 1,
                'group_id' => 1,
                'metafield_name' => 'Additional Info Content',
                'metafield_key' => 'ac_additional_info_content',
                'metafield_namespace' => 'ac111',
                'metafield_type_id' => '1',
                'metafield_label' => 'Title',
                'metafield_info' => 'Add your additional information',

            ],

        ];


        foreach ($data as $item){
            factory(Metafields::class, 1)->create($item);
        }
    }
}
