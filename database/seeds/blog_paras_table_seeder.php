<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogParasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_paras')->insert([
            'id' => 1,
            'blog_id' => 1,
            'para' => 'Paragraph one of Blog One',
            'para_pic' => 'http://via.placeholder.com/250x150',
            'para_pic_alt' => 'Paragraph 1 pic',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
