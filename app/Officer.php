<?php

namespace App;
use App\Voucher;
use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $fillable = ['firstName','lastName','email','staff_number','rank','address','phone'];


    public function vouchers(){
        return $this->hasMany(Voucher::class);
    }
}
