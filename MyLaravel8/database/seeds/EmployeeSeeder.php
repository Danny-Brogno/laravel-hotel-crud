<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run() {

      factory(Employee::class, 50) -> create();
      // FACTORY IS USED TO GENERATE THE ROWS OF A TEBLE
    }
}
