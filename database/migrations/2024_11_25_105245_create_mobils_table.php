<?php

public function up()
{
    Schema::create('mobils', function (Blueprint $table) {
        $table->id();
        $table->string('kategori');
        $table->string('no_polisi');
        $table->string('merk_type');
        $table->string('noka');
        $table->string('nosin');
        $table->integer('tahun_pembuatan');
        $table->string('gambar')->nullable();
        $table->timestamps();
    });
}
