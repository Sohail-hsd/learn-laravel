<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model // Corrected to use singular name "Customer"
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'customers'; // This can stay as 'customers' if your table is named 'customers'
    protected $primaryKey = 'id';
}
