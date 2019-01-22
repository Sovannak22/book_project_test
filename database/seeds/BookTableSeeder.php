<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'category_id' => '1',
            'store_id'=>'2',
            'title'=>'Iron man 3',
            'author'=>'Stan Lee',
            'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi in ipsa sint dolores adipisci soluta dolore amet impedit autem praesentium?',
            'book_img'=>'Invincible-Iron-Man-Number-1-2137789_1024x1024.jpg',
            
        ]);
    }
}
