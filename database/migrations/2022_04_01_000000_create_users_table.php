<?php

use Lune\Database\DB;
use Lune\Database\Migrations\Migration;

return new class implements Migration {
    /**
     * Run the migration.
     */
    public function up() {
        DB::statement('
            CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(256),
                email VARCHAR(256) UNIQUE,
                created_at DATETIME,
                updated_at DATETIME NULL,
                password VARCHAR(256)
            )
        ');
    }

    /**
     * Reverse the migration.
     */
    public function down() {
        DB::statement('DROP TABLE users');
    }
};
