<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey='order_id';
    protected $fillable=[
        'handleId','ordertype','user_id'
    ];
    //
    public function user()
    {
        return $this->belongsTo('App/User','user_id','id');
    }
}
