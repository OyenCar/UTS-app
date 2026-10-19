<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Companies extends Model
{
    //
    use HasFactory;
    protected $table = "Companies";
    protected $primaryKey = 'company_id';
    protected $increment = true;
    protected $keyType = 'integer';
    protected $fillable = ['company_name','headquarters_phone_number'];

    public function Items(){
        return $this->hasMany(Items::class,'item_code','item_code');
    }
}
