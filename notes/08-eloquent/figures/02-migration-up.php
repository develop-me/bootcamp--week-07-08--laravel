<?php

public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string("title", 100);
        $table->text("article");
        $table->timestamps();
    });
}
