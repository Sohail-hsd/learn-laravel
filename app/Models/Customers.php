<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model // Corrected to use singular name "Customer"
{
    use HasFactory;
    protected $table = 'customers'; // This can stay as 'customers' if your table is named 'customers'
    protected $primaryKey = 'id';
}
