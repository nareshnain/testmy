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

            <form method="POST" action="/register" id="myForm">
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
                        <option value="3">Individual Establishment</option>
                        <option value="4">Local only</option>
                        <option value="1">WLL</option>
                        <option value="2">SPC</option>
                </select>
					
                </div>
                </div>
				<div class="form-row">
				<div class="form-group col-md-6" id="partners-count">
                    <label for="partners">How many partners? *</label>
				<select class="form-control input-sm" id="partners" name="partners" required>
                <option>-- How many partners? --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10+</option>
                    </select>
					</div>
					 <div class="form-group col-md-6" id="delivery-mode-box">
                    <label for="delivery_mode">Delivery Mode *</label>
                    
                <select class="form-control input-sm" id="delivery_mode" name="delivery_mode" required>
                        <option>-- Delivery Mode --</option>
                        <option value="1">Aramex</option>
                        <option value="2">DHL</option>
						 <option value="3">UPS</option>
						  <option value="4">Local Delivery</option>
						   <option value="5">UBEX</option>
						   <option value="6">Parcel</option>
						   <option value="7">Fetchr</option>
						   <option value="8">Postaplus</option>
						   <option value="9">other</option>
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
                    <div class="form-group col-md-6 " id="card-accepted-box">
                    <label for="person_name">Card to be Accepted in </label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox"  value=1 class="form-check-input cls-card-accepted" name="" >Debit Card
                            </label>
                            </div>
                            <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox" value=2 class="form-check-input cls-card-accepted" name="" >Credit Card
                            <input id='card_accepted' name="card_accepted" type='hidden' required>
                            </label>
                         </div>
                    </div>
                    <div class="form-group col-md-6 " id="payment-type-box">
                    <label for="person_name">Payment Types to be Accepted</label>
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="checkbox"  value=1 class="form-check-input cls-payment-type" name="" >Cash
                            </label> 
							</div>
                            <div class="form-check">							
                            <label class="form-check-label">
                            <input type="checkbox" value=2 class="form-check-input cls-payment-type" name="" >Card
                            <input id='payment_type' name="payment_type" type='hidden' required>
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
                <input id='cr_copy' name="cr_copy" type='hidden'>
                <input id='owners_personal_id' name="owners_personal_id" type='hidden'>
                <input id='moa_doc' name="moa_doc" type='hidden'>
                <input id='contract_doc' name="contract_doc" type='hidden'>
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
</body>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
var companyType = {
    individual: 3,
    local: 4,
    wll: 1,
    spc: 2
};
$("#myForm").validate({
  submitHandler: function(form) {
    // do other things for a valid form
    form.submit();
  }
});
$(function() {
    $('#delivery-mode-box').hide();
    $('#partners-count').hide(); 
    $('#company_type').change(function(){
        var companyTypeValue = $('#company_type').val();
        if(companyTypeValue == companyType.wll) {
            $('#partners-count').show(); 
        } else {
            $('#partners-count').hide(); 
        }
        if(companyTypeValue == companyType.spc) {
            $('#delivery-mode-box').show();
        } else {
            $('#delivery-mode-box').hide(); 
        } 
    });
    $('.cls-card-accepted').change(function() {
        onClickCardAccepted();
    });
    $('.cls-payment-type').change(function() {
        onClickPaymentType();
    });
});
function onClickCardAccepted() {
     var selectedCheckBoxesValue = '';
    $('#card-accepted-box input:checked').each(function (i, selected) {
    if (selectedCheckBoxesValue.length == 0) {
        selectedCheckBoxesValue += $(selected).val();
    }
    else {
        selectedCheckBoxesValue += ',' + $(selected).val();
    }});                                                        
    $('#card_accepted').val(selectedCheckBoxesValue);
}
function onClickPaymentType() {
     var selectedValue = '';
    $('#payment-type-box input:checked').each(function (i, selected) {
    if (selectedValue.length == 0) {
        selectedValue += $(selected).val();
    }
    else {
        selectedValue += ',' + $(selected).val();
    }});                                                        
    $('#payment_type').val(selectedValue);
}
</script>
<style>
.error{
	border-color:#dc3545;
}
label.error{
	color: #dc3545;
	float:right;
}
</style>
</html>







