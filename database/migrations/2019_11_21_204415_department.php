<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Department extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      DB::statement("create table department (dept_name varchar(20), building varchar(15), budget numeric(12,2) check (budget > 0), primary key (dept_name));");
      DB::statement("INSERT INTO department (dept_name, building, budget) VALUES ('Biology', 'Watson', 90000), ('Comp. Sci.', 'Taylor', 100000), ('Elec. Eng.', 'Taylor', 85000), ('Finance', 'Painter', 120000), ('History', 'Painter', 50000), ('Music', 'Packard', 80000), ('Physics', 'Watson', 70000);");
      /*
      Schema::create('department', function (Blueprint $table) {
      $table->string('dept_name',20)->primary();
      $table->string('building',15);
      $table->unsignedDecimal('budget', 12,2)->default('credits' > 0);
  });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department');
    }
}
