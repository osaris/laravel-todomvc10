<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    var $fillable = ['title', 'completed'];

    protected $attributes = [
        'completed' => false,
    ];

    function setTitleOrDelete(String $title)
    {
        if(!empty($title)) {
            $this->title = $title;
            $this->save();
        }
        else {
            $this->delete();
        }
    }
}
