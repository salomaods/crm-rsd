<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        DB::beginTransaction();

        //Cria tabela para guardar clientes
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('nameJudicial')->nullable();
            $table->string('razaoSocial')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('cep');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('telefone');
            $table->string('celular');
            $table->timestamps();
        });

        //Cria tabela para associar cliente ao usuario
        Schema::create('client_user', function (Blueprint $table){
            $table->integer('user_id')->unsigned();
            $table->integer('client_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['user_id', 'client_id']);
        });

        //Cria tabela plano para guardar planos
        Schema::create('planos', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('descricao');
            $table->string('valor');
            $table->string('ativo');
        });

        //Cria tabela para associar plano ao cliente
        Schema::create('plano_client', function(Blueprint $table){
            $table->integer('plano_id')->unsigned();
            $table->integer('client_id')->unsigned();

            $table->foreign('plano_id')->references('id')->on('planos')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['plano_id', 'client_id']);
        });

        
        DB::commit();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
        Schema::dropIfExists('planos');
        Schema::dropIfExists('plano_client');
        Schema::dropIfExists('client_user');
    }
}
