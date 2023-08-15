<?php
 
namespace App\Models\Taskboard;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Taskboard extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'taskboard';
    
    protected $fillable = ['task', 'team', 'duration_from', 'duration_to', 'status', 'progress'];

}