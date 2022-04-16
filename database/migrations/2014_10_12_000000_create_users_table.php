<?php

use App\Models\UserType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserType::class);
            $table->string('name');
            $table->string('email')->unique();
            $table->date('birth')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->integer('status');
            $table->rememberToken();
            $table->timestamps();
            $table->date('inactivated_at')->nullable()->default(Null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
