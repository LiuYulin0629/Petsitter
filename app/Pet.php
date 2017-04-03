<?php

namespace petsitter;

use petsitter\User;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function getOwner()
    {
        return $this->belongsTo(User::class, 'owner');
    }
}
