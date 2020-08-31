<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
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
          [
              'cate_name' => 'iPhone',
              'cate_slug' => str::slug('iPhone')
          ],
          [
               'cate_name' =>'SamSung',
                'cate_slug' =>str::slug('SamSung')

          ],
        ];
        \Illuminate\Support\Facades\DB::table('vp_categories')->insert($data);
    }
}
