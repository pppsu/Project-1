<?php
use Illuminate\Database\Seeder;
use App\Bear;

class BearTableSeeder  extends Seeder {
    public function run() {
       /* DB::table('students')->delete();
        $students = [
            [  "name" => 'Pp',
                "surname" => 'Zung',  ],
            [   "name" => 'John',
                "surname" => 'Snow',
            ]
        ];
        foreach ($students as $s ) {
            Student::create($s);     
        } */
        Aoop::dio_truncate(); //dio_truncate();
        factory(Bear::class,5)->create(); // make

    }
}

