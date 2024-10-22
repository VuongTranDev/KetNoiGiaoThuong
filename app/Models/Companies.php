<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    public function companyCategory(){
        return $this->hasMany(CompanyCategory::class,'company_id');
    }
    public function address(){
        return $this->belongsTo(Address::class,'address_id','id');
    }
    public function companyImage(){
        return $this->hasMany(CompanyImage::class,'company_id');
    }
}
