<?php

use Illuminate\Database\Seeder;
use App\MetafieldGroups;

class MetafieldGroupsSeeder extends Seeder
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
                'metafield_group_name' => 'Content Tabs',
                'user_id' => 1,
                'resource_id' => 1,

            ],
            'item2' => [
                'metafield_group_name' => 'More Info',
                'user_id' => 1,
                'resource_id' => 1,
            ],
            'item3' => [
                'metafield_group_name' => 'Other Tabs',
                'user_id' => 1,
                'resource_id' => 2,
            ],
            'item4' => [
                'metafield_group_name' => 'Some Tabs',
                'user_id' => 2,
                'resource_id' => 1,
            ],
        ];


        foreach ($data as $item){
            factory(MetafieldGroups::class, 1)->create($item);
        }
    }
}
