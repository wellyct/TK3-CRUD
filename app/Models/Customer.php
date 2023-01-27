<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['cust_name', 'cust_username', 'cust_password',
    'cust_bod', 'cust_gender','cust_address', 'cust_idcard'];
}
