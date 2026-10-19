<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Items extends Model
{
    //
    use HasFactory;
    protected $table = "Items";
    protected $primaryKey = 'item_code';
    protected $increment = false;
    protected $keyType = 'string';
    protected $fillable = ['item_code','item','unit_price','company_id'];

    public function Companies(){
        return $this->belongsTo(Companies::class,'company_id','company_id');
    }
    public function Sales(){
        return $this->belongsTo(Sales::class,'item_code','item_code');
    }
}
