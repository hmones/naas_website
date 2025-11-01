<?php namespace Hmones\Website\Models;

use Model;

/**
 * Model
 */
class Accordion extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hmones_website_accordions';

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title', 'content'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
