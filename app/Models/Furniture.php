<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;

    protected $fillable = ['FurnitureName','FurnitureOwnerName'];
    protected $table = 'furniture'; // Specify the table name
    protected $primaryKey = 'FurnitureId'; // Specify the primary key column
    public $incrementing = true; // Ensure the primary key is auto-incrementing
    protected $keyType = 'int'; // Specify the type of the primary key
}
