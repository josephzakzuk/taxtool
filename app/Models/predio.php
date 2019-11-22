<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class predio
 * @package App\Models
 * @version November 22, 2019, 9:20 pm UTC
 *
 * @property string referencia
 * @property string area
 * @property integer cliente_id
 */
class predio extends Model
{
    use SoftDeletes;

    public $table = 'predios';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'referencia',
        'area',
        'cliente_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'referencia' => 'string',
        'area' => 'string',
        'cliente_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
	
	public function Cliente(){
		return $this->hasOne('App\Models\cliente','id');
	}

    
}
