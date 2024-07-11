<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts'; // Nombre de la tabla en la base de datos (opcional)

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'content' => 'string',
    ];

    protected $appends = ['summary'];
    /**
     * Get the summary attribute.
     *
     * @return string
     */
    public function getSummaryAttribute(): string
    {
        return $this->aux_post_calc(1,2,3);
    }

    public function aux_post_calc($a, $b, $c)
    {
        return $a + $b + $c;
    }
}
