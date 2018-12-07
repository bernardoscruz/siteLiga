<?php namespace Bernardo\EmpresasJuniores\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBernardoEmpresasjuniores extends Migration
{
    public function up()
    {
        Schema::create('bernardo_empresasjuniores_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome');
            $table->text('descricao');
            $table->string('contato');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bernardo_empresasjuniores_');
    }
}
