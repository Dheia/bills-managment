<?php namespace Layerok\Bills\Models;

use Model;

/**
 * Model
 */
class Bills extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $attachOne = [
        'photo' => ['System\Models\File']
    ];

    public $belongsTo = [
        'type' => ['Layerok\Bills\Models\Types']
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'layerok_bills_records';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function filterFields($fields, $context = null)
    {
        if(isset($this->current_value) && !empty($this->current_value) && isset($this->previous_value) && !empty($this->previous_value)) {
            $fields->delta->value = $this->current_value - $this->previous_value;
        }

        if(isset($this->delta) && !empty($this->delta) && isset($this->rate) && !empty($this->rate)) {
            $fields->total->value = $this->delta * $this->rate;
        }
    }
}
