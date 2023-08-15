<?php
 
namespace App\Models\Accounts;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 
class Account extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'accounts';
    
    protected $fillable = ['invoice_no', 'clients', 'date', 'type,', 'status', 'amount'];

}