<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCaegories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("INSERT INTO categories (id, name, created_at, updated_at, href_category) VALUES (1, 'Кулоны', null, null, 'pendants');");
        DB::statement("INSERT INTO categories (id, name, created_at, updated_at, href_category) VALUES (2, 'Комплекты', null, null, 'kits');");
        DB::statement("INSERT INTO categories (id, name, created_at, updated_at, href_category) VALUES (3, 'Аксессуары', null, null, 'accessories');");
        DB::statement("INSERT INTO categories (id, name, created_at, updated_at, href_category) VALUES (4, 'Заготовки', null, null, 'blanks');");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
