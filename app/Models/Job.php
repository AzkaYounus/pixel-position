<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    

    public function employer(){
         
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->BelongsToMany(Tag::class);
    }

}
