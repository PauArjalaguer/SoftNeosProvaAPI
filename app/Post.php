<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   
    protected $fillable = ['title', 'content'];
    protected $hidden = [];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'content' => 'string',
    ];

    protected $appends = ['summary'];

    public function getSummaryAttribute(): string
    {
        return $this->getSummaryAttributeCalculation(1, 2, 3);
    }

    public function getSummaryAttributeCalculation(int $value1, int $value2, int $value3)
    {
        return (string) $value1 + $value2 + $value3;
    }
}
