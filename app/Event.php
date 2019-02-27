<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    use Sluggable;

    protected $fillable = [
        'name',
        'venue',
        'city',
        'description',
        'state_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'started_at'
    ]; // per convertire l'eventuale campo 'started_at' in Carbon

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function getNameAttribute($value)
    {
        $ignore = ['a', 'and', 'at', 'but', 'for', 'in', 'the', 'to', 'with'];
        $name = explode(' ', $value);
        $modifiedName = [];

        foreach ($name as $word) {
            if (!in_array(strtolower($word), $ignore)) {
                $modifiedName[] = ucfirst($word);
            } else {
                $modifiedName[] = strtolower($word);
            }
        }

        return implode(' ', $modifiedName);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ],
        ];
    }

    //Metodo per sovrascrivere la key del model builder
    /* public function getRouteKeyName()
{
return 'slug';
} */

}
