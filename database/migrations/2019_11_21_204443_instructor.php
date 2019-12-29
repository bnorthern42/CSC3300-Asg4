<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Instructor extends Migration
{
    /**
     * Run the migrations.
     *
     *   @return void
     **/

    public function up()
    {
    DB::statement("create table instructor (ID varchar(5), name varchar(20) not null, dept_name varchar(20), salary numeric(8,2) check (salary > 29000), primary key (ID), foreign key (dept_name) references department(dept_name) on delete set null);");
    DB::statement("INSERT INTO instructor (ID, name, dept_name, salary) VALUES ('10101', 'Srinivasan', 'Comp. Sci.', 65000), ('12121', 'Wu', 'Finance', 90000), ('15151', 'Mozart', 'Music', 40000), ('22222', 'Einstein', 'Physics', 95000), ('32343', 'El Said', 'History', 60000), ('33456',  'Gold', 'Physics', 87000), ('45565', 'Katz', 'Comp. Sci.', 75000), ('58582', 'Califieri',  'History', 62000), ('76543', 'Singh', 'Finance', 80000), ('76766', 'Crick', 'Biology',  72000), ('83821', 'Brandt', 'Comp. Sci.', 92000), ('98345', 'Kim', 'Elec. Eng.', 80000);");
      /*
      Schema::create('instructor', function (Blueprint $table) {
      $table->string('ID',5);
      $table->primary('ID');
      $table->string('name',20)->nullable($value = false);
      $table->string('dept_name',20)->nullable();
      $table->foreign('dept_name')->refrences('dept_name')->on('department')->onDelete('set null');
      $table->unsignedDecimal('salary',8,2)->default('credits' > 29000);
    });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructor');
    }
}
