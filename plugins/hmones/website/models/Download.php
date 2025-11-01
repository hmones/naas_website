<?php namespace Hmones\Website\Models;

use Model;

/**
 * Model
 */
class Download extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hmones_website_downloads';

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name'];

    public $attachOne = [
        'file' => 'System\Models\File'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'file' => 'max:10000'
    ];
}
