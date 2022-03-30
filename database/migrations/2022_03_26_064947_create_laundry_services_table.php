<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaundryServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundry_services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('description')->nullable();
            $table->string('kilo');
            $table->string('credit');
            $table->string('paymentReceipt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laundry_services');
    }
}
