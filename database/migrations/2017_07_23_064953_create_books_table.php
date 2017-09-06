<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
        $table->increments('id');
        $table->string('ISBN');
        $table->string('judul');
        $table->string('penulis');
        $table->string('penerbit');
        $table->text('keterangan');
        $table->integer('harga');
        $table->string('images');
        $table->timestamps();//005
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');//006
    }
}
