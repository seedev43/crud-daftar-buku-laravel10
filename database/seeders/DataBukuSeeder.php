<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DataBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('list_books')->insert([
            [
                'author_id' => '1',
                'category_id' => '1',
                'publisher_id' => '1',
                'sampul' => 'https://cdn.gramedia.com/uploads/items/9789793062792_New-Edition-Laskar-Pelangi.jpg',
                'judul' => 'Laskar Pelangi',
                'slug' => 'laskar-pelangi',
                'deskripsi' => 'Laskar Pelangi telah menjadi international best seller, diterjemahkan ke dalam 40 bahasa asing. Telah terbit dalam 22 bahasa, diedarkan di lebih dari 130 negara. Melalui program beasiswa, Hirata meraih Master of Science (M.Sc.) bidang teori ekonomi dari Sheffield Hallam University, UK. Hirata juga mendapat beasiswa pendidikan sastra di IWP (International Writing Program), University of Iowa, USA.',
                'tahun_terbit' => '2011',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'author_id' => '1',
                'category_id' => '1',
                'publisher_id' => '1',
                'sampul' => 'https://cdnwpseller.gramedia.net/wp-content/uploads/2021/12/20114540/9786022915249_orang-orang-b-2-561x892.jpg',
                'judul' => 'Orang-orang Biasa',
                'slug' => 'orang-orang-biasa',
                'deskripsi' => '"The Rainbow Troops is the first Indonesian novel to find its way into the international general fiction market."

                -The Sydney Morning Herald',
                'tahun_terbit' => '2019',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'author_id' => '2',
                'category_id' => '2',
                'publisher_id' => '2',
                'sampul' => 'https://s3-ap-southeast-1.amazonaws.com/ebook-previews/31752/100792/1.jpg',
                'judul' => 'Perahu Kertas',
                'slug' => 'perahu-kertas',
                'deskripsi' => 'Namanya Kugy. Mungil, pengkhayal, dan berantakan. Dari benaknya, mengalir untaian dongeng indah. Keenan belum pernah bertemu manusia seaneh itu ....  Namanya Keenan. Cerdas, artistik, dan penuh kejutan. Dari tangannya, mewujud lukisan-lukisan magis. Kugy belum pernah bertemu manusia seajaib itu ....  Dan kini mereka berhadapan di antara hamparan misteri dan rintangan. Akankah dongeng dan lukisan itu bersatu? Akankah hati dan impian mereka bertemu?',
                'tahun_terbit' => '2016',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
