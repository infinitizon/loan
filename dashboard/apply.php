<?php
require_once './library/config.php';
require_once './library/functions.php';

$errorMessage = '&nbsp;';

if (isset($_POST['firstname']) && isset($_POST['lastname'])) {
	$result = doRegister();
	if ($result != '') {
		$errorMessage = $result;
	}
}

?>

<!DOCTYPE html>
<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
<title>Loan Aplication | <?php echo $site_title; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="Empire is one of the unique admin template built on top of Bootstrap 4 framework. It is easy to customize, flexible code styles, well tested, modern & responsive are the topmost key factors of Empire Dashboard Template" />
<meta name="keywords" content="bootstrap admin template, dashboard template, backend panel, bootstrap 4, backend template, dashboard template, saas admin, CRM dashboard, eCommerce dashboard">
<meta name="author" content="" />
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

<link rel="stylesheet" href="assets/fonts/fontawesome.css">
<link rel="stylesheet" href="assets/fonts/ionicons.css">
<link rel="stylesheet" href="assets/fonts/linearicons.css">
<link rel="stylesheet" href="assets/fonts/open-iconic.css">
<link rel="stylesheet" href="assets/fonts/pe-icon-7-stroke.css">
<link rel="stylesheet" href="assets/fonts/feather.css">

<link rel="stylesheet" href="assets/css/bootstrap-material.css">
<link rel="stylesheet" href="assets/css/shreerang-material.css">
<link rel="stylesheet" href="assets/css/uikit.css">


<link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
<link rel="stylesheet" href="assets/libs/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="assets/libs/bootstrap-multiselect/bootstrap-multiselect.css">
<link rel="stylesheet" href="assets/libs/select2/select2.css">
<link rel="stylesheet" href="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css">

<link rel="stylesheet" href="assets/libs/smartwizard/smartwizard.css">
</head>
<body>

<div class="page-loader">
<div class="bg-primary"></div>
</div>


<div class="layout-wrapper layout-2">
<div class="layout-inner">



<div class="layout-container">



<div class="layout-content">

<div class="container-fluid flex-grow-1 container-p-y">
<h4 class="font-weight-bold py-3 mb-0">Loan Aplication Form</h4>

<p><?php echo $errorMessage; ?></p>

<hr class="border-light container-m--x my-4">

<form   action="#" method="post" enctype="multipart/form-data">

<div class="mb-3">
<div>
<div class="card-body">
<div class="form-group">
<label class="form-label">First Name
<span class="text-danger">*</span>
</label>
<input  name="firstname" type="text" class="form-control required">
</div>
<div class="form-group">
<label class="form-label">Last Name
<span class="text-danger">*</span>
</label>
<input  name="lastname" type="text" class="form-control required">
</div>
<div class="form-group">
<label class="form-label">Mobile Number
<span class="text-danger">*</span>
</label>
<input  name="phone" type="text" class="form-control required">
</div>

<div class="form-group">
<label class="form-label">Email
<span class="text-danger">*</span>
</label>
<input name="email" type="text" class="form-control required email">
</div>

<div class="form-group">
<label class="form-label">Date Of Birth
<span class="text-danger">*</span>
</label>
<input  name="dob" type="date" class="form-control required">
</div>

<div class="form-group">
<div class="col-sm-4 mb-3">
<label class="form-label">Gender
<span class="text-danger">*</span>
</label>
<select class="selectpicker" name="gender" data-style="btn-primary">
<option>--- Select Gender ----</option>
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</div></div>

<div class="form-group">
<div class="col-sm-4 mb-3">
<label class="form-label">Marital Status
<span class="text-danger">*</span>
</label>
<select class="selectpicker" name="marital" data-style="btn-primary">
<option>--- Select Marital Status ----</option>
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Divorced">Divorced</option>
<option value="Other">Other</option>
</select>
</div></div>

</div>
</div>
<div >
<div class="card-body">
<div class="form-group">
<label class="form-label">Address
<span class="text-danger">*</span>
</label>
<input name="address" type="text" class="form-control required">
</div>
<div class="form-group">
<label class="form-label">City
<span class="text-danger">*</span>
</label>
<input name="city" type="text" class="form-control required">
</div>
<div class="form-group">
<label class="form-label">State/County
<span class="text-danger">*</span>
</label>
<input name="state" type="text" class="form-control required ">
</div>

<div class="form-group">
<label class="form-label">Zipcode
<span class="text-danger">*</span>
</label>
<input name="zipcode" type="text" class="form-control required">
</div>
<div class="col-sm-4 mb-3">

<div class="form-group">

<label class="form-label">Country</label>
<select class="selectpicker"  name="country" data-style="btn-primary">
<option>--- Select Country ----</option>
<option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
</select>
</div></div>


<div class="form-group">
<label class="form-label">Occupation / Job Title
<span class="text-danger">*</span>
</label>
<input name="occupation" type="text" class="form-control required">
</div>


</div>
</div>
<div >
<div class="card-body">


<div class="form-group">
<label class="form-label">Company Name

<span class="text-danger">*</span>
</label>
<input name="company" type="text" class="form-control required">
</div>
<div class="form-group">
<label class="form-label">How long at present Employer
<span class="text-danger">*</span>
</label>
<input name="empduration" type="text" class="form-control required">
</div>
<div class="form-group">
<label class="form-label">Employer's Phone Number
<span class="text-danger">*</span>
</label>
<input name="emplphone" type="text" class="form-control required">
</div>


<div class="form-group">
<label class="form-label">Monthly Income
<span class="text-danger">*</span>
</label>
<input name="monthlyincome" type="text" class="form-control required">
</div>

<div class="form-group">
<label class="form-label">Purpose of Loan
<span class="text-danger">*</span>
</label>
<input name="purpose" type="text" class="form-control required">
</div>
<div class="col-sm-4 mb-3">

<div class="form-group">

<label class="form-label">Loan Category</label>
<select class="selectpicker" name="loancategory"  data-style="btn-primary">
<option>--- Select Loan Category ----</option>
<option value="Personal Loan">Personal Loan</option>
<option value="Business Loan">Business Loan</option>
<option value="Car Loan">Car Loan</option>
<option value="Mortage Loan">Mortage Loan</option>
<option value="Debt Consolidation Loan"> Debt Consolidation Loan</option>
<option value="Education Loan"> Education Loan</option>
<option value="Refinance Loan">Refinance Loan</option>
<option value="Construction  Loan">Construction  Loan</option>
</select>
</div></div>


<div class="col-sm-4 mb-3">

<div class="form-group">

<label class="form-label">Loan Type</label>
<select class="selectpicker" name="acctype"  data-style="btn-primary">
<option>--- Select Loan Type ----</option>
<option value="Short Term">Short Term </option>
<option value="Long Term">Long Term</option>
</select>
</div></div>



</div>
</div>
<div>
<div class="card-body">

<div class="form-group">
<label class="form-label">How much do you need?

<span class="text-danger">*</span>
</label>
<input name="lamount" type="text" class="form-control required">
</div>

<div class="col-sm-4 mb-3">

<div class="form-group">

<label class="form-label">Loan Duration </label>
<select class="selectpicker" name="repayment" data-style="btn-primary">
<option>--- Select Repayment Period----</option>
<option value="1 Year">1 Year </option>
<option value="2 Years">2 Years </option>
<option value="3 Years">3 Years </option>
<option value="4 Years">4 Years </option>
<option value="5 Years">5 Years </option>
<option value="6 Year">6 Years </option>
<option value="7 Years">7 Years </option>
<option value="8 Years">8 Years </option>
<option value="9 Years">9 Years </option>
<option value="10 Years">10 Years </option>
<option value="11 Years">11 Years </option>
<option value="12 Years">12 Years </option>
<option value="13 Years">13 Years </option>
<option value="14 Years">14 Years </option>
<option value="15 Years">15 Years </option>
</select>
</div></div>

<div class="form-group">
<label class="form-label">Are you a home owner?</label>
<div class="custom-controls-stacked">
<label class="custom-control custom-radio">
<input name="homeowner" type="radio" class="custom-control-input">
<span class="custom-control-label">Yes</span>
</label>
<label class="custom-control custom-radio">
<input name="homeowner" type="radio" class="custom-control-input">
<span class="custom-control-label">No</span>
</label>

</div>
</div>

<div class="form-group">
<label class="form-label">Credit Status
<span class="text-danger">*</span>
</label>
<input name="creditstatus" type="text" class="form-control required">
</div>

<div class="form-group">
<label class="form-label">Tax ID Number

<span class="text-danger">*</span>
</label>
<input name="taxid" type="text" class="form-control required">
</div>

<div class="form-group">
<label class="form-label">Social Security Number(SSN)

<span class="text-danger">*</span>
</label>
<input name="ssn" type="text" class="form-control required">
</div>






</div>

</div>



<div >
<div class="card-body">

<div class="form-group">
<label class="form-label">Account Password

<span class="text-danger">*</span>
</label>
<input name="password" type="password" class="form-control required">
</div>



<div class="form-group">
<label class="form-label">Repeat Password

<span class="text-danger">*</span>
</label>
<input name="cpassword" type="password" class="form-control required">
</div>



<div class="form-group">
<label class="form-label">Account Pin
<span class="text-danger">*</span>
</label>
<input name="pin" type="text" class="form-control required">
</div>


<div class="form-group">
<label class="form-label">Repeat Pin
<span class="text-danger">*</span>
</label>
<input name="cpin" type="text" class="form-control required">
</div>

<input name="loandate" type="hidden"  value="<?php echo date("m/d/y");?>" class="form-control required">

<input name="loanstat" type="hidden"  value="Pending" class="form-control required">
<input name="due" type="hidden"  value="No Data" class="form-control required">

<center>
    <button class=" btn btn-primary mr-2"  name="submitButton"  type="submit">Finish</button>
</center>
</div>

</div>
</div>
</div>
</form>
</div>




 </div>

</div>

</div>

</div>


<script src="assets/js/pace.js"></script>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/libs/popper/popper.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/sidenav.js"></script>
<script src="assets/js/layout-helpers.js"></script>
<script src="assets/js/material-ripple.js"></script>

<script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="assets/libs/validate/validate.js"></script>

<script src="assets/libs/bootstrap-select/bootstrap-select.js"></script>
<script src="assets/libs/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="assets/libs/select2/select2.js"></script>
<script src="assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="assets/js/analytics.js"></script>
</body>
</html>
