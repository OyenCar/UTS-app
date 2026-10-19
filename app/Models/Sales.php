<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Iterator;

class Sales extends Model
{
    //
    use HasFactory;
    protected $table = "Sales";
    protected $primaryKey = 'purchase_number';
    protected $increment = false;
    protected $keyType = 'string';
    protected $fillable = ['purchase_number','date_of_purchase','customer_id','item_code'];

    public function Customers(){
        return $this->belongsTo(Customers::class,'customer_id','customer_id');
    }

    public function Items(){
        return $this->belongsTo(Items::class,'item_code','item_code'); //Rawan Error
    }
}
