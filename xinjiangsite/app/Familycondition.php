<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familycondition extends Model
{
    protected  $primaryKey='family_id';
    public  $timestamps=false;
    protected $fillable=[
        'familyname','familylocation'
    ];
    protected $mFamilyIncomePerMonth;
    protected $mFamilyLevel;
    private function members(){
        return $this->hasMany('App\Individualcondition');
    }

    private  function calFamilyIncome(){
        $members= Familycondition::members();
        foreach( $members as $member)
            $this->mFamilyIncomePerMonth=$this->mFamilyIncomePerMonth+$member->Income;
    }
    private  function calFamilyLevel(){
        if ($this->mFamilyIncomePerMonth <= 1000)
            $this->mFamilyLevel = "非常贫困";
        else if ($this->mFamilyIncomePerMonth <= 3000)
            $this->mFamilyLevel = "较为贫困";
        else if ($this->mFamilyIncomePerMonth <= 4000)
            $this->mFamilyLevel = "一般";
        else  $this->mFamilyLevel = "富裕";
    }
    public  function getFamilyIncome(){
        return $this->mFamilyIncomePerMonth;
    }
    public  function getFamilyLevel()
    {
      return $this->mFamilyLevel;
    }

    }

    //

