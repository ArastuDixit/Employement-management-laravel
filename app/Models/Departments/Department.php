<?php
 
namespace App\Models\Departments;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Department extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'departments';
    
    protected $fillable = ['department_name', 'department_head', 'total_employee'];

}