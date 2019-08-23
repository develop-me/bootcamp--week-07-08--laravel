<?php

class ModifyUsersTable extends Migration
{
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->string('role')->after('name')->default('subscriber');
    });
  }

  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
      $table->dropColumn('role');
    });
  }
}
