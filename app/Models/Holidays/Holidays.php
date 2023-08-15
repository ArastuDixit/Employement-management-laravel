<?php
 
namespace App\Models\Holidays;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Holidays extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'holidays';
    
    protected $fillable = ['day', 'date', 'holiday'];

}