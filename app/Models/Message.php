<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'asunto',
        'mensaje',
        'emisor_id',
        'receptor_id',
    ];




    public function emisor(){
        return $this->hasOne(User::class, 'id', 'emisor_id');   
    }
    
    public function receptor(){
        return $this->hasOne(User::class, 'id', 'receptor_id');   
    }


}
