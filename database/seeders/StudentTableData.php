<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentTableData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'sunny',
            'section'=>'block2',
            'address'=>'vadodara',
        ]);
    }
}
