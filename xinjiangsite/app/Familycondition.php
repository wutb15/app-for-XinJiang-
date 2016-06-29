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
    protected $mFamilyIncome;
    protected $mFamilyLevel;
    private  function calFamilyIncome(){}
    private  function calFamilyLevel(){}
    
    public  function getFamilyIncome(){}
    public  function getFamilyLevel(){}
    //
}
