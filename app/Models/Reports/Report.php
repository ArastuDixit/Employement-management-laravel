<?php
 
namespace App\Models\Reports;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Report extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'reports';
    
    protected $fillable = ['item', 'category', 'order_by', 'order_from', 'date', 'paid_by', 'status', 'amount'];

}