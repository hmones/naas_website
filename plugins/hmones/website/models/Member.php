<?php namespace Hmones\Website\Models;

use Model;

/**
 * Model
 */
class Member extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hmones_website_members';

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name', 'content', 'location'];

    public function getMemberRoleAttribute(){
        switch($this->role){
            case 0:
                return "Core";
            case 1: 
                return "Affiliate";
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
