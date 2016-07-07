<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familycondition extends Model
{
    protected  $primaryKey='family_id';


    public  $timestamps=false;



    protected $fillable=[
        'family_name','family_location'
    ];



    //构建函数




    public function members(){
        return $this->hasMany('App\Individualcondition','family_id');
    }

    public  function returnFamilyIncome(){
        $members= $this->members();
        $mFamilyIncomePerMonth=0.0;
        foreach( $members as $member)
            $mFamilyIncomePerMonth=$mFamilyIncomePerMonth+$member->income;
        return $mFamilyIncomePerMonth;
    }




    }

    //

