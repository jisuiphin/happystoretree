<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Pendidikan Agama",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Pendidikan Pancasila dan Kewarganegaraan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Bahasa Indonesia",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Matematika Wajib",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Matematika Peminatan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Bahasa Inggris",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Bahasa Mandarin",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Bahasa Jepang",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Bahasa Prancis",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Biologi",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Fisika",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Kimia",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Penjasorkes",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Seni Budaya",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('books')->insert([
            'category_id' => random_int(1, 4),
            'title' => "Kewirausahaan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
