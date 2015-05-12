<?php namespace AdamWathan\Form\Elements;

class Datetime extends Text
{
    protected $attributes = array(
        'type' => 'datetime-local',
    );

    public function value($value)
    {
        if ($value instanceof \DateTime) {
            $value = $value->format('Y-m-d')."T".$value->format('H:i:s');
        }
        return parent::value($value);
    }
}
