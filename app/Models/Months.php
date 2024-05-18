<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Months extends Model
{
    use HasFactory;
    protected $table = "months";
    protected $primaryKey = "monthId";
    protected $fillable = ["janeiro", "monthNumber"];

}
