<?php

namespace App\Repositories;

use App\Models\cliente;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class clienteRepository
 * @package App\Repositories
 * @version November 22, 2019, 9:05 pm UTC
 *
 * @method cliente findWithoutFail($id, $columns = ['*'])
 * @method cliente find($id, $columns = ['*'])
 * @method cliente first($columns = ['*'])
*/
class clienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cc',
        'name',
        'telefono'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return cliente::class;
    }
}
