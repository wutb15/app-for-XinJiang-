<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individualcondition extends Model
{
    protected  $primaryKey='Idcardid';
    protected  $keyType='string';
    protected  $fillable=[
        'birthday','income','sex','family_id','name'
    ];
    public  $timestamps=false;

    public function family()
    {
        return $this->belongsTo('App\Familyconditon','family_id','family_id');
    }
    //
}
