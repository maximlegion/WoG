<?php

use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::connection('pgsql')->table('organizations')->delete();
        
        \DB::connection('pgsql')->table('organizations')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'MegaFon',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'code' => 'MegaFon                       ',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Test2',
                'description' => 'Для тестирования но другой группы',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'code' => 'Test2                         ',
            ),
            2 => 
            array (
                'id' => 2,
                'name' => 'Test1',
                'description' => 'Для тестирования',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'code' => 'Test1                         ',
            ),
            3 => 
            array (
                'id' => 1,
                'name' => 'Demo',
                'description' => 'Для показа',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'code' => 'Demo                          ',
            ),
            4 => 
            array (
                'id' => 0,
                'name' => 'Def',
                'description' => 'Значения по умолчанию',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'code' => 'Def                           ',
            ),
        ));
        
    	
    }
}
