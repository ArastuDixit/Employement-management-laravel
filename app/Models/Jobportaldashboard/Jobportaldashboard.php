<?php
 
namespace App\Models\Jobportaldashboard;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Jobportaldashboard extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'jobportal';
    
    protected $fillable = ['name', 'email', 'image', 'apply_for', 'date', 'status'];

}