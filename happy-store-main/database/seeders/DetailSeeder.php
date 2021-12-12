<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DetailSeeder extends Seeder
{ 
      @return void
    public function run()
    {
        DB::table('details')->insert([
            'book_id' => 1,
            'author' => "Erlanggi",
            'publisher' => "Gramedia",
            'year' => "2019",
            'description' => "Pendidikan Agama Umum",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 2,
            'author' => "Erlanggi",
            'publisher' => "Gramedia",
            'year' => "2019",
            'description' => "Pengantar Pembelajaran Pendidikan Kewarganegaraan",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 3,
            'author' => "Yudhistiru",
            'publisher' => "Mentari",
            'year' => "2016",
            'description' => "Pembelajaran Sastra Bahasa terbaru",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 4,
            'author' => "Yudhistiri",
            'publisher' => "Mentari",
            'year' => "2018",
            'description' => "Aku cinta matematika",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('details')->insert([
            'book_id' => 5,
            'author' => "Yudhistiri",
            'publisher' => "Mentari",
            'year' => "2018",
            'description' => "Aku minat matematika",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 6,
            'author' => "ABC",
            'publisher' => "Gramedia",
            'year' => "2019",
            'description' => "pede berbahasa inggris 30menit",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 7,
            'author' => "ABC",
            'publisher' => "Gramedia",
            'year' => "2019",
            'description' => "pede berbahasa mandarin 30menit",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 8,
            'author' => "ABC",
            'publisher' => "Gramedia",
            'year' => "2011",
            'description' => "pede berbahasa jepang 30menit",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 9,
            'author' => "ABC",
            'publisher' => "Gramedia",
            'year' => "2020",
            'description' => "pede berbahasa prancis 30menit",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 10,
            'author' => "Erlanggus",
            'publisher' => "TOBUK",
            'year' => "2015",
            'description' => "khusus ipa",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 11,
            'author' => "Erlanggus",
            'publisher' => "TOBUK",
            'year' => "2007",
            'description' => "khusus ipa",
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('details')->insert([
            'book_id' => 12,
            'author' => "Erlanggus",
            'publisher' => "TOBUK",
            'year' => "2007",
            'description' => "Khusus ipa",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 13,
            'author' => "MATANE",
            'publisher' => "BAPADIALA",
            'year' => "2009",
            'description' => "hehehehehe",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 14,
            'author' => "MATANE",
            'publisher' => "BAPADIALA",
            'year' => "2013",
            'description' => "hehehehehehehe",
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('details')->insert([
            'book_id' => 15,
            'author' => "MATANE",
            'publisher' => "BAPADIALA",
            'year' => "2003",
            'description' => "HEHEHEHE",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
