<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status'
    ];


    //creating relationships between tickets and category 
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
