<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    public $fillable = ['name','description'];
    public function filieres(){
        return $this->hasMany(Filiere::class);
    }
}
