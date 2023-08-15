<?php
 
namespace App\Models\Jobportalsettings;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Jobportalsettings extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'jobportal';
    
    protected $fillable = ['name', 'image', 'email', 'gander', 'country', 'state', 'city', 'contact_number', 'apply_for', 'salary', 'experience', 'address', 'date', 'skills'];

}