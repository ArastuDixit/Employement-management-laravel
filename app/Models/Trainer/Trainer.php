<?php
 
namespace App\Models\Trainer;
 
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
 
class Trainer extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'emp_id';

     
    const CREATED_AT = 'emp_create_date';
    const UPDATED_AT = 'emp_update_date';
     
    protected $table = 'employees';

    protected $fillable = [

        'emp_first_name', 
        'emp_last_name', 
        'emp_role', 
        'emp_skill', 
        'emp_description', 
        'emp_short_description', 
        'emp_image', 
        'emp_phone', 
        'emp_start_date', 
        'emp_create_date', 
        'emp_email', 
        'emp_facebook', 
        'emp_twitter', 
        'emp_linked_in', 
        'emp_instagram', 
        'emp_update_date',
        
            'emp_gender',
            'emp_resume',
            'emp_resume_text',
            'emp_local_address',
            'emp_local_pincode',
            'emp_local_landmark',
            'emp_local_city',
            'emp_local_state',
            'emp_local_country',
            'emp_local_phone',
            'emp_parents_address',
            'emp_parents_pincode',
            'emp_parents_landmark',
            'emp_parents_city',
            'emp_parents_state',
            'emp_parents_country',
            'emp_parents_phone',
            'emp_friends_guardians_address',
            'emp_friends_guardians_pincode',
            'emp_friends_guardians_landmark',
            'emp_friends_guardians_city',
            'emp_friends_guardians_state',
            'emp_friends_guardians_country',
            'emp_friends_guardians_friend_phone',
            'emp_document_submitted',
            'emp_documnet_other',
            'emp_documnet_other_provided',
            'emp_relieving_date',
            'emp_notice_period', 
            'emp_notice_period_staus', 
            'emp_bond_status', 
            'emp_comment_text'

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