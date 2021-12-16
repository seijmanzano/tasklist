<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    //table name
    protected $table = 'tasks';
    //primary key
    public $primaryKey = 'id';
    //timestamp
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\Models\User');

    }
}
