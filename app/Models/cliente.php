<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class cliente
 * @package App\Models
 * @version November 22, 2019, 9:05 pm UTC
 *
 * @property string cc
 * @property string name
 * @property string telefono
 */
class cliente extends Model
{
    use SoftDeletes;

    public $table = 'clientes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'cc',
        'name',
        'telefono'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cc' => 'string',
        'name' => 'string',
        'telefono' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
	
	public function Predios(){
		return $this->hasMany('App\Models\predio');
	}

    
}
