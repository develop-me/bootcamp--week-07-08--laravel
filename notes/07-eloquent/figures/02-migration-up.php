<?php

public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string("title", 100);
        $table->text("article");
        $table->timestamps();
    });
}
