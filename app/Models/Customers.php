<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customers extends Model
{
    //
    use HasFactory;
    protected $table = "Customers";
    protected $primaryKey = 'customers_id';
    protected $increment = true;
    protected $keyType = 'integer';
    protected $fillable = ['first_name','last_name','email_address'];

    public function Sales(){
        return $this->hasMany(Sales::class,'customer_id','customer_id');
    }
}
