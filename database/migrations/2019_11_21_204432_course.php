<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Course extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("create table course (course_id varchar(8), title varchar(50), dept_name varchar(20), credits numeric(2,0) check (credits >0), primary key (course_id), foreign key (dept_name) references department(dept_name) on delete set null);");
        DB::statement("INSERT INTO course (course_id, title, dept_name, credits) VALUES ('BIO-101', 'Intro.to Biology', 'Biology', 4), ('BIO-301', 'Genetics', 'Biology', 4), ('BIO-399', 'Computational Biology', 'Biology', 3), ('CS-101', 'Intro. to Computer Science', 'Comp. Sci.', 4), ('CS-190', 'Game Design', 'Comp. Sci.', 4), ('CS-315', 'Robotics', 'Comp. Sci.', 3), ('CS-319', 'Image Processing', 'Comp. Sci.', 3), ('CS-347', 'Database System Concepts', 'Comp. Sci.', 3), ('EE-181', 'Intro. to Digital Systems', 'Elec. Eng.', 3), ('FIN-201', 'Investment Banking', 'Finance', 3), ('HIS-351', 'World History', 'History', 3), ('MU-191', 'Music Video Production', 'Music', 3), ('PHY-101', 'Physical Principles', 'Physics', 4);");
      /*
      Schema::create('course', function (Blueprint $table) {
      $table->string('course_id',8);
      $table->primary('course_id');
      $table->string('title',50);
      $table->string('dept_name')->nullable();
      $table->foreign('dept_name')->refrences('dept_name')->on('department')->onDelete('set null');
      $table->unsignedDecimal('credits', 2,0);

    });*/
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
