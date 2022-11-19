<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeUser ;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array(
              'id' => 1 ,
              'name' => 'Admin'
            ),
            array(
              'id' => 2 ,
              'name' => 'DRH'
            ),
            array(
              'id' => 3 ,
              'name' => 'Accountant'
            ),

          ) ;
  
          foreach ($data as $value){
            $slug = TypeUser::updateOrCreate(
              ['id' => $value['id']] ,
              [
                'name'        => $value['name']
              ]
            ) ;
          }
    }
}
