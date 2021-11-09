<?php

namespace App\Repositories;

use App\Models\logs;
use App\Repositories\BaseRepository;

/**
 * Class logsRepository
 * @package App\Repositories
 * @version November 9, 2021, 2:44 am UTC
*/

class logsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userid',
        'log',
        'logdetails',
        'logtype'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return logs::class;
    }
}
