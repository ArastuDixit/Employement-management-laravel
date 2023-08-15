<?php
 
namespace App\Models\Projectlist;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Projectlist extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'projectdashboard';
    
    protected $fillable = ['invoice_no', 'client_name', 'team', 'project_cost', 'technology', 'short_description', 'created', 'progress', 'milestone', 'work', 'duration', 'priority', 'payment', 'status'];

}