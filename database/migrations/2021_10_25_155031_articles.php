<?php

use App\Models\Categorie;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Articles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string("titre");
            $table->binary("image_article");
            $table->date("date");
            $table->string("libelle");
            $table->foreignIdFor(User::class)->onDelete("cascade");;
            $table->foreignIdFor(Categorie::class)->onDelete("cascade");;
            $table->timestamps();
        });

//        DB::unprepared("ALTER TABLE `articles`ADD FOREIGN KEY (users.id) REFERENCES `users`(id)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
