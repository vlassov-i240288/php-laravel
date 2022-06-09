<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'inform',
        'image',
        'category_id'
    ];








//    public $timestamps = false;

//    public static function rules()
//    {
////       $tableNameCategory = (new Categories())->getTable();
//       return [
//           'title' => 'required|max:255',
//           'inform' => 'required',
////           'category_id' => "required|exists:{$tableNameCategory}, id",
//       ];
//    }

}


