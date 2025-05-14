<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;

    protected $fillable = ['FurnitureName','FurnitureOwnerName'];
    protected $table = 'Furniture'; // Updated to match migration case
    protected $primaryKey = 'FurnitureId'; // Specify the primary key column
    public $incrementing = true;
    protected $keyType = 'int'; 
}
