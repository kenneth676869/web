<?php

namespace App\Repositories;

use App\Models\Dota2;
use App\Repositories\BaseRepository;

/**
 * Class Dota2Repository
 * @package App\Repositories
 * @version October 29, 2021, 11:22 pm UTC
*/

class Dota2Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'hero_type',
        'hero_skills',
        'rating'
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
        return Dota2::class;
    }
}
