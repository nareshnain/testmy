@extends('layouts.master')
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Test</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>img {width:100%;}</style>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
</head>
<body>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section class="testimonial py-5" id="testimonial">
<div class="container">
    <div class="row ">
        <div class="col-md-4 py-5 bg-primary text-white text-center ">
            <div class=" ">
                <div class="card-body">
                    <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                    <h2 class="py-3">Registration</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    <a href="/" style='color:#fff'>Back To Home</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8 py-5 border">
            <h4 class="pb-4">Please fill with your details</h4>
            @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
            </ul>
            </div>
            @endif

            <form method="POST" action="/register">
            {{ csrf_field() }}
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="mc_company_name">Merchant Company Name* </label>
                        <input type="text" class="form-control input-sm" id="mc_company_name" name="mc_company_name" placeholder="" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mc_grp_name">Merchant Group Name*</label>
                        <input type="text" class="form-control input-sm" id="mc_grp_name" name="mc_grp_name" placeholder="" required>
                    </div>
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="mc_company_profile">Merchant Company Profile*</label>
                        <input type="text" class="form-control input-sm" id="mc_company_profile" name="mc_company_profile" placeholder="" required>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="company_type">Company Type *</label>
                    
                    <select class="form-control input-sm" id="company_type" name="company_type" required>
                <option>-- Select Company Type --</option>
                        <option value="1">WLL</option>
                        <option value="2">Other</option>
                    </select>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="license_reg_date">License Registration Date*</label>
                    <input type="date" class="form-control input-sm" id="license_reg_date" name="license_reg_date" placeholder="" required>
                </div>
                
                <div class="form-group col-md-6">
                    <label for="license_expiry_date">License Expiry Date*</label>
                    <input type="date" class="form-control input-sm" id="license_expiry_date" name="license_expiry_date" placeholder="" required>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col-sm-6">
                    <label for="is_existing_mc">Merchant with AFS? *</label>
                    
                    <select class="form-control input-sm" id="is_existing_mc" name="is_existing_mc" required>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                
                <div class="form-group col-md-6 col-sm-6">
                        <label for="sign_auth_name">Signing Authority*</label>
                        <input type="text" class="form-control input-sm" id="sign_auth_name" name="sign_auth_name" placeholder="" required>
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-md-6 col-sm-6">
                    <label for="desgn_auth">Designation of Signing Authority*</label>
                    <input type="text" class="form-control input-sm" id="desgn_auth" name="desgn_auth" placeholder="" required>
                </div>
            
            <div class="form-group col-md-6 col-sm-6">
                    <label for="web_url_payment">Website Url for Payment Gateway*</label>
                    <input type="text" class="form-control input-sm" id="web_url_payment" name="web_url_payment" placeholder="" required>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col-sm-6">
                    <label for="prod_to_sell">Types of Products to be Sold Online*</label>
                    <input type="text" class="form-control input-sm" id="prod_to_sell" name="prod_to_sell" placeholder="" required>
                </div>
                
                <div class="form-group col-md-6 col-sm-6">
                    <label for="delivery_mode">Delivery Mode of Products/Services*</label>
                    <input type="text" class="form-control input-sm" id="delivery_mode" name="delivery_mode" placeholder="" required>
                </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="bank_name">Bank Name you are banking with*</label>
                        <input type="text" class="form-control input-sm" id="bank_name" name="bank_name" placeholder="" required>
                    </div>
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="office_fax">Registered Office Fax Number*</label>
                        <input type="text" class="form-control input-sm" id="office_fax" name="office_fax" placeholder="" required>
                    </div>
            
                </div>
                <div class="form-row">
                        <div class="form-group col-md-6 col-sm-6">
                        <label for="office_email">Registered Office Email Address*</label>
                        <input type="email" class="form-control input-sm" id="office_email" name="office_email" placeholder="" required>
                    </div>
                    
                    <div class="form-group col-md-6 col-sm-6">
                        <label for="office_phone">Registered Office Phone Number*</label>
                        <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control input-sm" id="office_phone" name="office_phone" placeholder="" required>
                        <small>Format: xxx-xxx-xxxx</small>
                    </div>
                    <div class="form-group col-md-12">
                    <label for="office_addr">Registered Office Address*</label>
                    <textarea class="form-control input-sm" id="office_addr" name="office_addr" rows="3" required></textarea>
                </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6 ">
                                <label for="person_name">Contact Person Name*</label>
                                <input type="text" class="form-control input-sm" id="person_name" name="name" placeholder="" required>
                            </div>
                                <div class="form-group col-md-6">
                            <label for="person_phone">Contact Person Phone*</label>
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control input-sm" id="person_phone" name="person_phone" placeholder="" required>
                            <small>Format: xxx-xxx-xxxx</small>
                        </div>
                            <div class="form-group col-md-6">
                            <label for="person_email">Contact Person Email*</label>
                            <input type="email" class="form-control input-sm" id="person_email" name="email" placeholder="" required>
                        </div>
                        
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 ">
                    <label for="person_name">Card to be Accepted in </label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" checked value=1 class="form-check-input" name="card_accepted">Debit Card
                            </label>
                            </div>
                            <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" value=2 class="form-check-input" name="card_accepted">Credit Card
                            </label>
                         </div>
                    </div>
                    <div class="form-group col-md-6 ">
                    <label for="person_name">Payment Types to be Accepted</label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" checked value=1 class="form-check-input" name="payment_type">Cash
                            </label>
                            </div>
                            <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" value=2 class="form-check-input" name="payment_type">Card
                            </label>
                         </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6 ">
                        <label for="person_name">Transaction Currency*</label>
                        <input type="text" class="form-control input-sm" id="currency" name="currency" placeholder="" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="license_expiry_date">Anticipated Live Date*</label>
                        <input type="date" class="form-control input-sm" id="anticipated_live_date" name="anticipated_live_date" placeholder="" required>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="person_name">Maximum Individual Transaction Amount*</label>
                        <input type="number" class="form-control input-sm" id="individual_transaction_amount" name="individual_transaction_amount" placeholder="" required>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="person_name">Annual Expected eCommerce Volume*</label>
                        <input type="number" class="form-control input-sm" id="annual_expected" name="annual_expected" placeholder="" required>
                    </div>
                </div>
                <div class="form-row">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
</body>
</html>







