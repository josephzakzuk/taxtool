<?php

namespace App\Repositories;

use App\Models\predio;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class predioRepository
 * @package App\Repositories
 * @version November 22, 2019, 9:20 pm UTC
 *
 * @method predio findWithoutFail($id, $columns = ['*'])
 * @method predio find($id, $columns = ['*'])
 * @method predio first($columns = ['*'])
*/
class predioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'referencia',
        'area',
        'cliente_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return predio::class;
    }
}
