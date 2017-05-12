<?php namespace WouterFlorijn\Content\Models;

use Model;

/**
 * Model
 */
class Work extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'wouterflorijn_content_';
}