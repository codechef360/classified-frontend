<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    public function getCustomer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function getCategory(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getAdComments(){
        return $this->hasMany(AdComment::class, 'advert_id');
    }


}
