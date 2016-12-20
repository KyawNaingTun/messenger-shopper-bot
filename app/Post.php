<?php

namespace App;
use Kyawnaingtun\Tounicode\TounicodeTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Notifiable;
    use TounicodeTrait;
    protected $table = 'post';
    protected $fillable = [
        'title', 'content'
    ];
    public function setContentAttribute($value)
    {
        $this->attributes['content'] = $this->toUnicode($value);
    }

}
