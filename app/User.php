<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'mc_company_name', 'mc_grp_name', 'mc_company_profile'
        , 'company_type', 'license_reg_date', 'license_expiry_date', 'is_existing_mc', 'desgn_auth'
        , 'web_url_payment', 'prod_to_sell', 'delivery_mode', 'bank_name', 'office_fax', 'office_email'
        , 'office_phone', 'office_addr', 'person_phone', 'card_accepted', 'payment_type', 'currency'
        , 'anticipated_live_date', 'individual_transaction_amount', 'annual_expected'
        , 'partners', 'cr_copy', 'owners_personal_id', 'moa_doc', 'contract_doc'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
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
