<?php namespace Bernardo\EmpresasJuniores\Models;

use Model;

/**
 * Model
 */
class Empresa extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'bernardo_empresasjuniores_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array relations
     */

     public $attachOne = [

        'logoEmpresa' => 'System\Models\File'

     ];

}
