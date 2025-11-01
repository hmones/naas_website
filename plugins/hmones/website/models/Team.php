<?php namespace Hmones\Website\Models;

use Model;

/**
 * Model
 */
class Team extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'hmones_website_teams';

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['bio', 'name', 'img_credits', 'position', 'bio_summary'];

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $rules = [
        'image' => 'image|max:2000|dimensions:min_width=100,min_height=100'
    ];

    public function getTeamCategoryAttribute()
    {
        switch ($this->category) {
            case 0:
                return "Core Team";
            case 1:
                return "Steering Committee";
            case 2:
                return "Administrative Board";
            case 3:
                return "German Board";
            default:
                return "Unspecified";
        }
    }
}
