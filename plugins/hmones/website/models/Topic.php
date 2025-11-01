<?php namespace Hmones\Website\Models;

use Model;

/**
 * Model
 */
class Topic extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'hmones_website_topics';

    /**
     * date fields
     * @var [type]
     */
    protected $dates = ['published_at'];

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title', 'content', 'img_credits'];

    public function getTopicCategoryAttribute(){
        switch($this->category){
            case 0:
                return "News";
            case 1:
                return "Programs";
            case 2:
                return "Research and Publications";
            case 3:
                return "Resources";
            case 4:
                return "Malaffat";
            case 5:
                return "Fellowship";
            default:
                return "Unspecified";
        }
    }

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'image' => 'image|max:2000|dimensions:min_width=100,min_height=100'
    ];

}
