<?php

use Illuminate\Database\Seeder;

class OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $org = new  App\Organization;

      $org->name = 'DBKL';
      $org->full_name = 'Dewan Bandaraya Kuala Lumpur';
      $org->save();
    }
}
