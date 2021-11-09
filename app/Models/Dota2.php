<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dota2
 * @package App\Models
 * @version October 29, 2021, 11:22 pm UTC
 *
 * @property string $name
 * @property string $hero_type
 * @property string $hero_skills
 * @property string $rating
 */
class Dota2 extends Model
{

    use HasFactory;

    public $table = 'dota2_heros_api';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'hero_type',
        'hero_skills',
        'rating'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'hero_type' => 'string',
        'hero_skills' => 'string',
        'rating' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'hero_type' => 'required|string|max:255',
        'hero_skills' => 'required|string|max:255',
        'rating' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
