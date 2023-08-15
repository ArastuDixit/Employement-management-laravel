<?php
 
namespace App\Models\Projecttodo;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Projecttodo extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'projecttodo';
    
    protected $fillable = ['short_description', 'due', 'priority', 'user'];

}