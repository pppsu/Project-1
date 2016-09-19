<?php
use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder  extends Seeder {
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
        Customer::dio_truncate(); //dio_truncate();
        factory(Customer::class,5)->create(); // make

    }
}

