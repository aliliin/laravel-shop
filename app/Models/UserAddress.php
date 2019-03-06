<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    //
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];
    //last_used_at 返回一个时间对象
    protected $dates = ['last_used_at'];
    //一对多关联
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //拼接地址
    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
