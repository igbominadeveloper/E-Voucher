<?php

namespace App;
use App\User;
use App\Officer;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['user_id','amount','description','status'];

    public function creator(){
        return $this->belongsTo(User::class);
    }

    public function officer(){
        return $this->belongsTo(Officer::class);
    }
}
