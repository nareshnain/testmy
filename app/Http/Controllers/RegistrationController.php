<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        ini_set("memory_limit", "-1");
        $this->validate(request(), [
            'mc_company_name' => 'required', 
            'mc_grp_name' => 'required',
            'mc_company_profile' => 'required',
            'company_type' => 'required',
            'license_reg_date' => 'required',
            'license_expiry_date' => 'required',
            'is_existing_mc' => 'required',
            'desgn_auth' => 'required',
            'web_url_payment' => 'required',
            'prod_to_sell' => 'required',
            'delivery_mode' => 'required',
            'bank_name' => 'required',
            'office_fax' => 'required',
            'office_email' => 'required',
            'office_phone' => 'required',
            'office_addr' => 'required',
            'name' => 'required',
            'person_phone' => 'required',
            'email' => 'required|email|unique:users,email',
            'card_accepted' => 'required',
            'payment_type' => 'required',
            'currency' => 'required',
            'anticipated_live_date' => 'required',
            'individual_transaction_amount' => 'required',
            'annual_expected' => 'required',
        ]);
        User::create($request->all());
        return redirect('/')->with('message', 'Your request has been successfully submitted.');
    }
}
