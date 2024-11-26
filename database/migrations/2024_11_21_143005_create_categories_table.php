<?php

public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Nama kategori
        $table->string('email')->nullable(); // Email (opsional)
        $table->timestamps(); // created_at dan updated_at
    });
}
