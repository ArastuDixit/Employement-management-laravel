<?php
 
namespace App\Models\Jobportalresumes;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Jobportalresumes extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'jobportal';
    
    protected $fillable = ['name', 'image', 'email', 'apply_for', 'salary', 'experience', 'address', 'skills'];

}