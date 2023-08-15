<?php
 
namespace App\Models\Payroll;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
 
class Payroll extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'payroll';

    protected $fillable = [

        'emp_id',
        'emp_first_name',
        'emp_last_name',
        'emp_role',
        'emp_image',
        'emp_email',
        'basic_salary',
        'hra',
        'tds',
        'pf',
        'esic',
        'bank_loan',
        'allowance',
        'total_salary',
        'status', 
    ];
        
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
 
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
