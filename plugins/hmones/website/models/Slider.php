<?php namespace Hmones\Website\Models;

use Model;

/**
 * Model
 */
class Slider extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'hmones_website_slider';

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title', 'subtitle', 'btn_txt'];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $rules = [
        'image' => 'file|max:10000'
    ];
}
