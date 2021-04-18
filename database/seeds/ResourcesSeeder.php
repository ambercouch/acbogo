<?php

use Illuminate\Database\Seeder;
use App\Resources;


class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
            'resource1' => [
                'resource_name' => 'Pages'
            ],
            'resource2' => [
                'resource_name' => 'Products and Variants'
            ],
            'resource3' => [
                'resource_name' => 'Blogs and Posts'
            ],
        ];


        foreach ($resources as $resource){
            factory(Resources::class, 1)->create($resource);
        }

    }
}
