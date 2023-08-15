<?php
 
namespace App\Models\Projectdashboard;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Projectdashboard extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'projectdashboard';
    
    protected $fillable = ['invoice_no', 'client_name', 'team', 'project_name', 'project_cost', 'payment', 'status'];

}