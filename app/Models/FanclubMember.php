<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FanclubMember extends Model
{
    use HasFactory;

    protected $fillable = ['fanname', 'favorite_aspect', 'support_comment'];
}
