<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Builderinfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('builderinfos', function (Blueprint $table) {
            //$table->string('email')->index();
            $table->string('Organisationtype',180);
            $table->string('registrationno',180);
            $table->string('organisationname',180);
            $table->string('emailid',180)->primary();
            $table->string('rocfile',180)->default('-1');
            $table->string('pannumber',180);
            $table->string('pannumberfile',180)->default('-1');
            $table->string('gstno',180);
            $table->string('gstnofile',180)->default('-1');

            $table->string('addressline1',180);
            $table->string('addressline2',180);
            $table->string('mandal',180);
            $table->string('localarea',180);
            $table->string('district',180);
            $table->string('state',180);
            $table->string('pincode',180);
            $table->string('addressfile',180)->default('-1');

            $table->string('aname',180);
            $table->string('aemailid',180);
            $table->string('amobile',180);
            $table->string('ahoto',180)->default('-1');
            $table->string('boardresolutionfile',180)->default('-1');
            $table->string('aaddressline1',180);
            $table->string('aaddressline2',180);
            $table->string('amandal',180);
            $table->string('alocalarea',180);
            $table->string('adistrict',180);
            $table->string('astate',180);
            $table->string('apincode',180);
            $table->string('aaddressfile',180)->default('-1');
            

            //$table->timestamp('created_at')->nullable();
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
        //
        Schema::dropIfExists('builderinfos');
    }
}
