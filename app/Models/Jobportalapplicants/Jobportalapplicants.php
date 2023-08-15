<?php
 
namespace App\Models\Jobportalapplicants;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Jobportalapplicants extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'jobportal';
    
    protected $fillable = ['name', 'image', 'apply_for', 'salary', 'job_type', 'address', 'date'];

}