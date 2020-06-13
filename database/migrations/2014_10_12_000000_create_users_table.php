<?php

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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('mc_company_name')->nullable();
            $table->string('mc_grp_name')->nullable();
            $table->string('mc_company_profile')->nullable();
            $table->integer('company_type')->default(1);
            $table->string('license_reg_date')->nullable();
            $table->string('license_expiry_date')->nullable();
            $table->integer('is_existing_mc')->nullable();
            $table->string('desgn_auth')->nullable();
            $table->string('web_url_payment')->nullable();
            $table->string('prod_to_sell')->nullable();
            $table->string('delivery_mode')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('office_fax')->nullable();
            $table->string('office_email')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('office_addr')->nullable();
            $table->string('person_phone')->nullable();
            $table->integer('card_accepted')->nullable();
            $table->integer('payment_type')->nullable();
            $table->string('currency')->nullable();
            $table->string('anticipated_live_date')->nullable();
            $table->bigInteger('individual_transaction_amount')->nullable();
            $table->bigInteger('annual_expected')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
