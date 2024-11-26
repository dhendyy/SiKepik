<?php

public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone')->after('email'); // Menambahkan kolom phone
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('phone'); // Menghapus kolom phone jika rollback
    });
}