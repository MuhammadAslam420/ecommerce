 <main class="main">
     <div class="page-header breadcrumb-wrap">
         <div class="container">
             <div class="breadcrumb">
                 <a href="/" rel="nofollow">Home</a>
                 <i class="fa fa-arrow-right"></i> Shop
                 <i class="fa fa-arrow-right"></i> Checkout
             </div>
         </div>
     </div>
     <section class="mt-50 mb-50">
         <div class="container">
             <!-- <div class="row">
                 <div class="col-lg-6 mb-sm-15">
                     <div class="toggle_info">
                         <span><i class="fi-rs-user mr-10"></i><span class="text-muted">Already have an account?</span> <a href="#loginform" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login</a></span>
                     </div>
                     <div class="panel-collapse collapse login_form" id="loginform">
                         <div class="panel-body">
                             <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                             <form method="post">
                                 <div class="form-group">
                                     <input type="text" name="email" placeholder="Username Or Email">
                                 </div>
                                 <div class="form-group">
                                     <input type="password" name="password" placeholder="Password">
                                 </div>
                                 <div class="login_footer form-group">
                                     <div class="chek-form">
                                         <div class="custome-checkbox">
                                             <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                             <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                         </div>
                                     </div>
                                     <a href="#">Forgot password?</a>
                                 </div>
                                 <div class="form-group">
                                     <button class="btn btn-md" name="login">Log in</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="toggle_info">
                         <span><i class="fi-rs-label mr-10"></i><span class="text-muted">Have a coupon?</span> <a href="#coupon" data-bs-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code</a></span>
                     </div>
                     <div class="panel-collapse collapse coupon_form " id="coupon">
                         <div class="panel-body">
                             <p class="mb-30 font-sm">If you have a coupon code, please apply it below.</p>
                             <form method="post">
                                 <div class="form-group">
                                     <input type="text" placeholder="Enter Coupon Code...">
                                 </div>
                                 <div class="form-group">
                                     <button class="btn  btn-md" name="login">Apply Coupon</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div> -->
             <div class="row">
                 <div class="col-12">
                     <div class="divider mt-50 mb-50"></div>
                 </div>
             </div>
             <form wire:submit.prevent="placeOrder">
                 <div class="row">

                     <div class="col-md-6">
                         <div class="mb-25">
                             <h4>Billing Details</h4>
                         </div>

                         <div class="form-group">
                             <input type="text" name="firstname" placeholder="First name *" wire:model="firstname">
                             @error('firstname') <span class="text-danger">{{$message}}</span>@enderror
                         </div>
                         <div class="form-group">
                             <input type="text" name="lastname" placeholder="Last name *" wire:model="lastname">
                             @error('lastname') <span class="text-danger">{{$message}}</span>@enderror

                         </div>
                         <div class="form-group">
                             <input type="text" name="email" placeholder="Email" wire:model="email">
                             @error('email') <span class="text-danger">{{$message}}</span>@enderror

                         </div>
                         <div class="form-group">
                             <input type="text" name="mobile" placeholder="Mobile" wire:model="mobile">
                             @error('mobile') <span class="text-danger">{{$message}}</span>@enderror

                         </div>
                         <div class="form-group">
                             <div class="custom_select">
                                 <select class="form-control" wire:model="country">
                                     <option value="">Select an option...</option>
                                     <option value="AX">Aland Islands</option>
                                     <option value="AF">Afghanistan</option>
                                     <option value="AL">Albania</option>
                                     <option value="DZ">Algeria</option>
                                     <option value="AD">Andorra</option>
                                     <option value="AO">Angola</option>
                                     <option value="AI">Anguilla</option>
                                     <option value="AQ">Antarctica</option>
                                     <option value="AG">Antigua and Barbuda</option>
                                     <option value="AR">Argentina</option>
                                     <option value="AM">Armenia</option>
                                     <option value="AW">Aruba</option>
                                     <option value="AU">Australia</option>
                                     <option value="AT">Austria</option>
                                     <option value="AZ">Azerbaijan</option>
                                     <option value="BS">Bahamas</option>
                                     <option value="BH">Bahrain</option>
                                     <option value="BD">Bangladesh</option>
                                     <option value="BB">Barbados</option>
                                     <option value="BY">Belarus</option>
                                     <option value="PW">Belau</option>
                                     <option value="BE">Belgium</option>
                                     <option value="BZ">Belize</option>
                                     <option value="BJ">Benin</option>
                                     <option value="BM">Bermuda</option>
                                     <option value="BT">Bhutan</option>
                                     <option value="BO">Bolivia</option>
                                     <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                     <option value="BA">Bosnia and Herzegovina</option>
                                     <option value="BW">Botswana</option>
                                     <option value="BV">Bouvet Island</option>
                                     <option value="BR">Brazil</option>
                                     <option value="IO">British Indian Ocean Territory</option>
                                     <option value="VG">British Virgin Islands</option>
                                     <option value="BN">Brunei</option>
                                     <option value="BG">Bulgaria</option>
                                     <option value="BF">Burkina Faso</option>
                                     <option value="BI">Burundi</option>
                                     <option value="KH">Cambodia</option>
                                     <option value="CM">Cameroon</option>
                                     <option value="CA">Canada</option>
                                     <option value="CV">Cape Verde</option>
                                     <option value="KY">Cayman Islands</option>
                                     <option value="CF">Central African Republic</option>
                                     <option value="TD">Chad</option>
                                     <option value="CL">Chile</option>
                                     <option value="CN">China</option>
                                     <option value="CX">Christmas Island</option>
                                     <option value="CC">Cocos (Keeling) Islands</option>
                                     <option value="CO">Colombia</option>
                                     <option value="KM">Comoros</option>
                                     <option value="CG">Congo (Brazzaville)</option>
                                     <option value="CD">Congo (Kinshasa)</option>
                                     <option value="CK">Cook Islands</option>
                                     <option value="CR">Costa Rica</option>
                                     <option value="HR">Croatia</option>
                                     <option value="CU">Cuba</option>
                                     <option value="CW">CuraÇao</option>
                                     <option value="CY">Cyprus</option>
                                     <option value="CZ">Czech Republic</option>
                                     <option value="DK">Denmark</option>
                                     <option value="DJ">Djibouti</option>
                                     <option value="DM">Dominica</option>
                                     <option value="DO">Dominican Republic</option>
                                     <option value="EC">Ecuador</option>
                                     <option value="EG">Egypt</option>
                                     <option value="SV">El Salvador</option>
                                     <option value="GQ">Equatorial Guinea</option>
                                     <option value="ER">Eritrea</option>
                                     <option value="EE">Estonia</option>
                                     <option value="ET">Ethiopia</option>
                                     <option value="FK">Falkland Islands</option>
                                     <option value="FO">Faroe Islands</option>
                                     <option value="FJ">Fiji</option>
                                     <option value="FI">Finland</option>
                                     <option value="FR">France</option>
                                     <option value="GF">French Guiana</option>
                                     <option value="PF">French Polynesia</option>
                                     <option value="TF">French Southern Territories</option>
                                     <option value="GA">Gabon</option>
                                     <option value="GM">Gambia</option>
                                     <option value="GE">Georgia</option>
                                     <option value="DE">Germany</option>
                                     <option value="GH">Ghana</option>
                                     <option value="GI">Gibraltar</option>
                                     <option value="GR">Greece</option>
                                     <option value="GL">Greenland</option>
                                     <option value="GD">Grenada</option>
                                     <option value="GP">Guadeloupe</option>
                                     <option value="GT">Guatemala</option>
                                     <option value="GG">Guernsey</option>
                                     <option value="GN">Guinea</option>
                                     <option value="GW">Guinea-Bissau</option>
                                     <option value="GY">Guyana</option>
                                     <option value="HT">Haiti</option>
                                     <option value="HM">Heard Island and McDonald Islands</option>
                                     <option value="HN">Honduras</option>
                                     <option value="HK">Hong Kong</option>
                                     <option value="HU">Hungary</option>
                                     <option value="IS">Iceland</option>
                                     <option value="IN">India</option>
                                     <option value="ID">Indonesia</option>
                                     <option value="IR">Iran</option>
                                     <option value="IQ">Iraq</option>
                                     <option value="IM">Isle of Man</option>
                                     <option value="IL">Israel</option>
                                     <option value="IT">Italy</option>
                                     <option value="CI">Ivory Coast</option>
                                     <option value="JM">Jamaica</option>
                                     <option value="JP">Japan</option>
                                     <option value="JE">Jersey</option>
                                     <option value="JO">Jordan</option>
                                     <option value="KZ">Kazakhstan</option>
                                     <option value="KE">Kenya</option>
                                     <option value="KI">Kiribati</option>
                                     <option value="KW">Kuwait</option>
                                     <option value="KG">Kyrgyzstan</option>
                                     <option value="LA">Laos</option>
                                     <option value="LV">Latvia</option>
                                     <option value="LB">Lebanon</option>
                                     <option value="LS">Lesotho</option>
                                     <option value="LR">Liberia</option>
                                     <option value="LY">Libya</option>
                                     <option value="LI">Liechtenstein</option>
                                     <option value="LT">Lithuania</option>
                                     <option value="LU">Luxembourg</option>
                                     <option value="MO">Macao S.A.R., China</option>
                                     <option value="MK">Macedonia</option>
                                     <option value="MG">Madagascar</option>
                                     <option value="MW">Malawi</option>
                                     <option value="MY">Malaysia</option>
                                     <option value="MV">Maldives</option>
                                     <option value="ML">Mali</option>
                                     <option value="MT">Malta</option>
                                     <option value="MH">Marshall Islands</option>
                                     <option value="MQ">Martinique</option>
                                     <option value="MR">Mauritania</option>
                                     <option value="MU">Mauritius</option>
                                     <option value="YT">Mayotte</option>
                                     <option value="MX">Mexico</option>
                                     <option value="FM">Micronesia</option>
                                     <option value="MD">Moldova</option>
                                     <option value="MC">Monaco</option>
                                     <option value="MN">Mongolia</option>
                                     <option value="ME">Montenegro</option>
                                     <option value="MS">Montserrat</option>
                                     <option value="MA">Morocco</option>
                                     <option value="MZ">Mozambique</option>
                                     <option value="MM">Myanmar</option>
                                     <option value="NA">Namibia</option>
                                     <option value="NR">Nauru</option>
                                     <option value="NP">Nepal</option>
                                     <option value="NL">Netherlands</option>
                                     <option value="AN">Netherlands Antilles</option>
                                     <option value="NC">New Caledonia</option>
                                     <option value="NZ">New Zealand</option>
                                     <option value="NI">Nicaragua</option>
                                     <option value="NE">Niger</option>
                                     <option value="NG">Nigeria</option>
                                     <option value="NU">Niue</option>
                                     <option value="NF">Norfolk Island</option>
                                     <option value="KP">North Korea</option>
                                     <option value="NO">Norway</option>
                                     <option value="OM">Oman</option>
                                     <option value="PK">Pakistan</option>
                                     <option value="PS">Palestinian Territory</option>
                                     <option value="PA">Panama</option>
                                     <option value="PG">Papua New Guinea</option>
                                     <option value="PY">Paraguay</option>
                                     <option value="PE">Peru</option>
                                     <option value="PH">Philippines</option>
                                     <option value="PN">Pitcairn</option>
                                     <option value="PL">Poland</option>
                                     <option value="PT">Portugal</option>
                                     <option value="QA">Qatar</option>
                                     <option value="IE">Republic of Ireland</option>
                                     <option value="RE">Reunion</option>
                                     <option value="RO">Romania</option>
                                     <option value="RU">Russia</option>
                                     <option value="RW">Rwanda</option>
                                     <option value="ST">São Tomé and Príncipe</option>
                                     <option value="BL">Saint Barthélemy</option>
                                     <option value="SH">Saint Helena</option>
                                     <option value="KN">Saint Kitts and Nevis</option>
                                     <option value="LC">Saint Lucia</option>
                                     <option value="SX">Saint Martin (Dutch part)</option>
                                     <option value="MF">Saint Martin (French part)</option>
                                     <option value="PM">Saint Pierre and Miquelon</option>
                                     <option value="VC">Saint Vincent and the Grenadines</option>
                                     <option value="SM">San Marino</option>
                                     <option value="SA">Saudi Arabia</option>
                                     <option value="SN">Senegal</option>
                                     <option value="RS">Serbia</option>
                                     <option value="SC">Seychelles</option>
                                     <option value="SL">Sierra Leone</option>
                                     <option value="SG">Singapore</option>
                                     <option value="SK">Slovakia</option>
                                     <option value="SI">Slovenia</option>
                                     <option value="SB">Solomon Islands</option>
                                     <option value="SO">Somalia</option>
                                     <option value="ZA">South Africa</option>
                                     <option value="GS">South Georgia/Sandwich Islands</option>
                                     <option value="KR">South Korea</option>
                                     <option value="SS">South Sudan</option>
                                     <option value="ES">Spain</option>
                                     <option value="LK">Sri Lanka</option>
                                     <option value="SD">Sudan</option>
                                     <option value="SR">Suriname</option>
                                     <option value="SJ">Svalbard and Jan Mayen</option>
                                     <option value="SZ">Swaziland</option>
                                     <option value="SE">Sweden</option>
                                     <option value="CH">Switzerland</option>
                                     <option value="SY">Syria</option>
                                     <option value="TW">Taiwan</option>
                                     <option value="TJ">Tajikistan</option>
                                     <option value="TZ">Tanzania</option>
                                     <option value="TH">Thailand</option>
                                     <option value="TL">Timor-Leste</option>
                                     <option value="TG">Togo</option>
                                     <option value="TK">Tokelau</option>
                                     <option value="TO">Tonga</option>
                                     <option value="TT">Trinidad and Tobago</option>
                                     <option value="TN">Tunisia</option>
                                     <option value="TR">Turkey</option>
                                     <option value="TM">Turkmenistan</option>
                                     <option value="TC">Turks and Caicos Islands</option>
                                     <option value="TV">Tuvalu</option>
                                     <option value="UG">Uganda</option>
                                     <option value="UA">Ukraine</option>
                                     <option value="AE">United Arab Emirates</option>
                                     <option value="GB">United Kingdom (UK)</option>
                                     <option value="US">USA (US)</option>
                                     <option value="UY">Uruguay</option>
                                     <option value="UZ">Uzbekistan</option>
                                     <option value="VU">Vanuatu</option>
                                     <option value="VA">Vatican</option>
                                     <option value="VE">Venezuela</option>
                                     <option value="VN">Vietnam</option>
                                     <option value="WF">Wallis and Futuna</option>
                                     <option value="EH">Western Sahara</option>
                                     <option value="WS">Western Samoa</option>
                                     <option value="YE">Yemen</option>
                                     <option value="ZM">Zambia</option>
                                     <option value="ZW">Zimbabwe</option>
                                 </select>
                                 @error('country') <span class="text-danger">{{$message}}</span>@enderror

                             </div>
                         </div>
                         <div class="form-group">
                             <input type="text" name="address1" placeholder="Address Line 1 *" wire:model="address1">
                             @error('address1') <span class="text-danger">{{$message}}</span>@enderror

                         </div>
                         <div class="form-group">
                             <input type="text" name="address2" placeholder="Address line 2" wire:model="address2">
                         </div>
                         <div class="form-group">
                             <input type="text" name="city" placeholder="City / Town *" wire:model="city">
                             @error('city') <span class="text-danger">{{$message}}</span>@enderror

                         </div>
                         <div class="form-group">
                             <input type="text" name="province" placeholder="State / Province *" wire:model="province">
                             @error('province') <span class="text-danger">{{$message}}</span>@enderror

                         </div>
                         <div class="form-group">
                             <input type="text" name="zipcode" placeholder="Postcode / ZIP *" wire:model="zipcode">
                             @error('zipcode') <span class="text-danger">{{$message}}</span>@enderror

                         </div>

                         <div class="form-group">
                             <div class="checkbox">
                                 <div >
                                     <input name="ship_to_different" id="ship_to_different" value="1" type="checkbox" style="width:18px; height:18px;border:1px solid black;" wire:model="ship_to_different">
                                     <label class="form-check-label label_info"><span>Ship to a different address?</span></label>
                                 </div>
                             </div>
                         </div>
                         @if($ship_to_different)
                         <div class="ship_detail">
                             <div class="form-group">
                                 <input type="text" name="s_firstname" placeholder="First name *" wire:model="s_firstname">
                                 @error('s_firstname') <span class="text-danger">{{$message}}</span>@enderror

                             </div>
                             <div class="form-group">
                                 <input type="text" name="s_lastname" placeholder="Last name *" wire:model="s_lastname">
                                 @error('s_lastname') <span class="text-danger">{{$message}}</span>@enderror

                             </div>
                             <div class="form-group">
                                 <input type="text" name="s_email" placeholder="Email" wire:model="s_email">
                                 @error('s_email') <span class="text-danger">{{$message}}</span>@enderror

                             </div>
                             <div class="form-group">
                                 <input type="text" name="s_mobile" placeholder="Mobile" wire:model="s_mobile">
                                 @error('s_mobile') <span class="text-danger">{{$message}}</span>@enderror

                             </div>
                             <div class="form-group">
                                 <div class="custom_select">
                                     <select class="form-control" wire:model="s_country">
                                         <option value="">Select an option...</option>
                                         <option value="AX">Aland Islands</option>
                                         <option value="AF">Afghanistan</option>
                                         <option value="AL">Albania</option>
                                         <option value="DZ">Algeria</option>
                                         <option value="AD">Andorra</option>
                                         <option value="AO">Angola</option>
                                         <option value="AI">Anguilla</option>
                                         <option value="AQ">Antarctica</option>
                                         <option value="AG">Antigua and Barbuda</option>
                                         <option value="AR">Argentina</option>
                                         <option value="AM">Armenia</option>
                                         <option value="AW">Aruba</option>
                                         <option value="AU">Australia</option>
                                         <option value="AT">Austria</option>
                                         <option value="AZ">Azerbaijan</option>
                                         <option value="BS">Bahamas</option>
                                         <option value="BH">Bahrain</option>
                                         <option value="BD">Bangladesh</option>
                                         <option value="BB">Barbados</option>
                                         <option value="BY">Belarus</option>
                                         <option value="PW">Belau</option>
                                         <option value="BE">Belgium</option>
                                         <option value="BZ">Belize</option>
                                         <option value="BJ">Benin</option>
                                         <option value="BM">Bermuda</option>
                                         <option value="BT">Bhutan</option>
                                         <option value="BO">Bolivia</option>
                                         <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                         <option value="BA">Bosnia and Herzegovina</option>
                                         <option value="BW">Botswana</option>
                                         <option value="BV">Bouvet Island</option>
                                         <option value="BR">Brazil</option>
                                         <option value="IO">British Indian Ocean Territory</option>
                                         <option value="VG">British Virgin Islands</option>
                                         <option value="BN">Brunei</option>
                                         <option value="BG">Bulgaria</option>
                                         <option value="BF">Burkina Faso</option>
                                         <option value="BI">Burundi</option>
                                         <option value="KH">Cambodia</option>
                                         <option value="CM">Cameroon</option>
                                         <option value="CA">Canada</option>
                                         <option value="CV">Cape Verde</option>
                                         <option value="KY">Cayman Islands</option>
                                         <option value="CF">Central African Republic</option>
                                         <option value="TD">Chad</option>
                                         <option value="CL">Chile</option>
                                         <option value="CN">China</option>
                                         <option value="CX">Christmas Island</option>
                                         <option value="CC">Cocos (Keeling) Islands</option>
                                         <option value="CO">Colombia</option>
                                         <option value="KM">Comoros</option>
                                         <option value="CG">Congo (Brazzaville)</option>
                                         <option value="CD">Congo (Kinshasa)</option>
                                         <option value="CK">Cook Islands</option>
                                         <option value="CR">Costa Rica</option>
                                         <option value="HR">Croatia</option>
                                         <option value="CU">Cuba</option>
                                         <option value="CW">CuraÇao</option>
                                         <option value="CY">Cyprus</option>
                                         <option value="CZ">Czech Republic</option>
                                         <option value="DK">Denmark</option>
                                         <option value="DJ">Djibouti</option>
                                         <option value="DM">Dominica</option>
                                         <option value="DO">Dominican Republic</option>
                                         <option value="EC">Ecuador</option>
                                         <option value="EG">Egypt</option>
                                         <option value="SV">El Salvador</option>
                                         <option value="GQ">Equatorial Guinea</option>
                                         <option value="ER">Eritrea</option>
                                         <option value="EE">Estonia</option>
                                         <option value="ET">Ethiopia</option>
                                         <option value="FK">Falkland Islands</option>
                                         <option value="FO">Faroe Islands</option>
                                         <option value="FJ">Fiji</option>
                                         <option value="FI">Finland</option>
                                         <option value="FR">France</option>
                                         <option value="GF">French Guiana</option>
                                         <option value="PF">French Polynesia</option>
                                         <option value="TF">French Southern Territories</option>
                                         <option value="GA">Gabon</option>
                                         <option value="GM">Gambia</option>
                                         <option value="GE">Georgia</option>
                                         <option value="DE">Germany</option>
                                         <option value="GH">Ghana</option>
                                         <option value="GI">Gibraltar</option>
                                         <option value="GR">Greece</option>
                                         <option value="GL">Greenland</option>
                                         <option value="GD">Grenada</option>
                                         <option value="GP">Guadeloupe</option>
                                         <option value="GT">Guatemala</option>
                                         <option value="GG">Guernsey</option>
                                         <option value="GN">Guinea</option>
                                         <option value="GW">Guinea-Bissau</option>
                                         <option value="GY">Guyana</option>
                                         <option value="HT">Haiti</option>
                                         <option value="HM">Heard Island and McDonald Islands</option>
                                         <option value="HN">Honduras</option>
                                         <option value="HK">Hong Kong</option>
                                         <option value="HU">Hungary</option>
                                         <option value="IS">Iceland</option>
                                         <option value="IN">India</option>
                                         <option value="ID">Indonesia</option>
                                         <option value="IR">Iran</option>
                                         <option value="IQ">Iraq</option>
                                         <option value="IM">Isle of Man</option>
                                         <option value="IL">Israel</option>
                                         <option value="IT">Italy</option>
                                         <option value="CI">Ivory Coast</option>
                                         <option value="JM">Jamaica</option>
                                         <option value="JP">Japan</option>
                                         <option value="JE">Jersey</option>
                                         <option value="JO">Jordan</option>
                                         <option value="KZ">Kazakhstan</option>
                                         <option value="KE">Kenya</option>
                                         <option value="KI">Kiribati</option>
                                         <option value="KW">Kuwait</option>
                                         <option value="KG">Kyrgyzstan</option>
                                         <option value="LA">Laos</option>
                                         <option value="LV">Latvia</option>
                                         <option value="LB">Lebanon</option>
                                         <option value="LS">Lesotho</option>
                                         <option value="LR">Liberia</option>
                                         <option value="LY">Libya</option>
                                         <option value="LI">Liechtenstein</option>
                                         <option value="LT">Lithuania</option>
                                         <option value="LU">Luxembourg</option>
                                         <option value="MO">Macao S.A.R., China</option>
                                         <option value="MK">Macedonia</option>
                                         <option value="MG">Madagascar</option>
                                         <option value="MW">Malawi</option>
                                         <option value="MY">Malaysia</option>
                                         <option value="MV">Maldives</option>
                                         <option value="ML">Mali</option>
                                         <option value="MT">Malta</option>
                                         <option value="MH">Marshall Islands</option>
                                         <option value="MQ">Martinique</option>
                                         <option value="MR">Mauritania</option>
                                         <option value="MU">Mauritius</option>
                                         <option value="YT">Mayotte</option>
                                         <option value="MX">Mexico</option>
                                         <option value="FM">Micronesia</option>
                                         <option value="MD">Moldova</option>
                                         <option value="MC">Monaco</option>
                                         <option value="MN">Mongolia</option>
                                         <option value="ME">Montenegro</option>
                                         <option value="MS">Montserrat</option>
                                         <option value="MA">Morocco</option>
                                         <option value="MZ">Mozambique</option>
                                         <option value="MM">Myanmar</option>
                                         <option value="NA">Namibia</option>
                                         <option value="NR">Nauru</option>
                                         <option value="NP">Nepal</option>
                                         <option value="NL">Netherlands</option>
                                         <option value="AN">Netherlands Antilles</option>
                                         <option value="NC">New Caledonia</option>
                                         <option value="NZ">New Zealand</option>
                                         <option value="NI">Nicaragua</option>
                                         <option value="NE">Niger</option>
                                         <option value="NG">Nigeria</option>
                                         <option value="NU">Niue</option>
                                         <option value="NF">Norfolk Island</option>
                                         <option value="KP">North Korea</option>
                                         <option value="NO">Norway</option>
                                         <option value="OM">Oman</option>
                                         <option value="PK">Pakistan</option>
                                         <option value="PS">Palestinian Territory</option>
                                         <option value="PA">Panama</option>
                                         <option value="PG">Papua New Guinea</option>
                                         <option value="PY">Paraguay</option>
                                         <option value="PE">Peru</option>
                                         <option value="PH">Philippines</option>
                                         <option value="PN">Pitcairn</option>
                                         <option value="PL">Poland</option>
                                         <option value="PT">Portugal</option>
                                         <option value="QA">Qatar</option>
                                         <option value="IE">Republic of Ireland</option>
                                         <option value="RE">Reunion</option>
                                         <option value="RO">Romania</option>
                                         <option value="RU">Russia</option>
                                         <option value="RW">Rwanda</option>
                                         <option value="ST">São Tomé and Príncipe</option>
                                         <option value="BL">Saint Barthélemy</option>
                                         <option value="SH">Saint Helena</option>
                                         <option value="KN">Saint Kitts and Nevis</option>
                                         <option value="LC">Saint Lucia</option>
                                         <option value="SX">Saint Martin (Dutch part)</option>
                                         <option value="MF">Saint Martin (French part)</option>
                                         <option value="PM">Saint Pierre and Miquelon</option>
                                         <option value="VC">Saint Vincent and the Grenadines</option>
                                         <option value="SM">San Marino</option>
                                         <option value="SA">Saudi Arabia</option>
                                         <option value="SN">Senegal</option>
                                         <option value="RS">Serbia</option>
                                         <option value="SC">Seychelles</option>
                                         <option value="SL">Sierra Leone</option>
                                         <option value="SG">Singapore</option>
                                         <option value="SK">Slovakia</option>
                                         <option value="SI">Slovenia</option>
                                         <option value="SB">Solomon Islands</option>
                                         <option value="SO">Somalia</option>
                                         <option value="ZA">South Africa</option>
                                         <option value="GS">South Georgia/Sandwich Islands</option>
                                         <option value="KR">South Korea</option>
                                         <option value="SS">South Sudan</option>
                                         <option value="ES">Spain</option>
                                         <option value="LK">Sri Lanka</option>
                                         <option value="SD">Sudan</option>
                                         <option value="SR">Suriname</option>
                                         <option value="SJ">Svalbard and Jan Mayen</option>
                                         <option value="SZ">Swaziland</option>
                                         <option value="SE">Sweden</option>
                                         <option value="CH">Switzerland</option>
                                         <option value="SY">Syria</option>
                                         <option value="TW">Taiwan</option>
                                         <option value="TJ">Tajikistan</option>
                                         <option value="TZ">Tanzania</option>
                                         <option value="TH">Thailand</option>
                                         <option value="TL">Timor-Leste</option>
                                         <option value="TG">Togo</option>
                                         <option value="TK">Tokelau</option>
                                         <option value="TO">Tonga</option>
                                         <option value="TT">Trinidad and Tobago</option>
                                         <option value="TN">Tunisia</option>
                                         <option value="TR">Turkey</option>
                                         <option value="TM">Turkmenistan</option>
                                         <option value="TC">Turks and Caicos Islands</option>
                                         <option value="TV">Tuvalu</option>
                                         <option value="UG">Uganda</option>
                                         <option value="UA">Ukraine</option>
                                         <option value="AE">United Arab Emirates</option>
                                         <option value="GB">United Kingdom (UK)</option>
                                         <option value="US">USA (US)</option>
                                         <option value="UY">Uruguay</option>
                                         <option value="UZ">Uzbekistan</option>
                                         <option value="VU">Vanuatu</option>
                                         <option value="VA">Vatican</option>
                                         <option value="VE">Venezuela</option>
                                         <option value="VN">Vietnam</option>
                                         <option value="WF">Wallis and Futuna</option>
                                         <option value="EH">Western Sahara</option>
                                         <option value="WS">Western Samoa</option>
                                         <option value="YE">Yemen</option>
                                         <option value="ZM">Zambia</option>
                                         <option value="ZW">Zimbabwe</option>
                                     </select>
                                     @error('s_country') <span class="text-danger">{{$message}}</span>@enderror

                                 </div>
                             </div>
                             <div class="form-group">
                                 <input type="text" name="s_address1" placeholder="Address Line 1 *" wire:model="s_address1">
                                 @error('s_address1') <span class="text-danger">{{$message}}</span>@enderror

                             </div>
                             <div class="form-group">
                                 <input type="text" name="s_address2" placeholder="Address line 2" wire:model="s_address2">
                             </div>
                             <div class="form-group">
                                 <input type="text" name="s_city" placeholder="City / Town *" wire:model="s_city">
                                 @error('s_city') <span class="text-danger">{{$message}}</span>@enderror

                             </div>
                             <div class="form-group">
                                 <input type="text" name="s_province" placeholder="State / Province *" wire:model="s_province">
                                 @error('s_province') <span class="text-danger">{{$message}}</span>@enderror

                             </div>
                             <div class="form-group">
                                 <input type="text" name="s_zipcode" placeholder="Postcode / ZIP *" wire:model="s_zipcode">
                                 @error('s_zipcode') <span class="text-danger">{{$message}}</span>@enderror

                             </div>
                         </div>
                         @endif


                     </div>
                     <div class="col-md-6">
                         <div class="order_review">
                             <div class="mb-20">
                                 <h4>Your Orders</h4>
                             </div>
                             <div class="table-responsive order_table text-center">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th colspan="2">Product</th>
                                             <th>Total</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach(Cart::instance('cart')->content() as $item)
                                         <tr>
                                             <td class="image product-thumbnail"><img src="{{asset('assets/images')}}/{{$item->model->front_image}}" alt="#"></td>
                                             <td>
                                                 <h5><a href="{{route('product-detail',['slug'=>$item->model->slug])}}">{{$item->name}}</a></h5> <span class="product-qty">x {{$item->qty}}</span>
                                             </td>
                                             <td>${{$item->price}}</td>
                                         </tr>
                                         @endforeach
                                         <!-- <tr>
                                         <td class="image product-thumbnail"><img src="assets/imgs/shop/product-2-1.jpg" alt="#"></td>
                                         <td>
                                             <h5><a href="shop-product-full.html">LDB MOON Women Summe</a></h5> <span class="product-qty">x 1</span>
                                         </td>
                                         <td>$65.00</td>
                                     </tr>
                                     <tr>
                                         <td class="image product-thumbnail"><img src="assets/imgs/shop/product-3-1.jpg" alt="#"></td>
                                         <td><i class="ti-check-box font-small text-muted mr-10"></i>
                                             <h5><a href="shop-product-full.html">Women's Short Sleeve Loose</a></h5> <span class="product-qty">x 1</span>
                                         </td>
                                         <td>$35.00</td>
                                     </tr> -->
                                         @if(Session::has('checkout'))
                                         <tr>
                                             <th>SubTotal</th>
                                             <td class="product-subtotal" colspan="2">${{Session::get('checkout')['subtotal']}}</td>
                                         </tr>
                                         <tr>
                                             <th>Shipping Charges</th>
                                             <td colspan="2"><em>{{(Session::get('checkout')['total']) - (Session::get('checkout')['subtotal'] + Session::get('checkout')['tax'])}}</em></td>
                                         </tr>
                                         <tr>
                                             <th>Total</th>
                                             <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">${{Session::get('checkout')['total']}}</span></td>
                                         </tr>
                                         @endif
                                     </tbody>
                                 </table>
                             </div>
                             <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                             <div class="payment_method">
                                 <div class="mb-25">
                                     <h5>Payment</h5>
                                 </div>
                                 <div class="payment_option">
                                     @if($paymentmode == 'card')
                                     <div class="warp-address-billing">
                                         @if(Session::has('message'))
                                         <div class="text-danger">{{Session::get('message')}}</div>
                                         @endif
                                         <p class="row-in-form">
                                             <label for="card-no">Card Number:</label>
                                             <input type="text" name="card-no" value="" class="form-control" placeholder="car number" wire:model="card_no">
                                             @error('card_no') <span class="text-danger">{{$message}}</span> @enderror
                                         </p>
                                         <p class="row-in-form">
                                             <label for="exp-month">Expiry Month:</label>
                                             <input type="text" name="exp-mont" value="" class="form-control" placeholder="MM" wire:model="exp_month">
                                             @error('exp_month') <span class="text-danger">{{$message}}</span> @enderror
                                         </p>
                                         <p class="row-in-form">
                                             <label for="exp-year">Expiry year:</label>
                                             <input type="text" name="exp-year" value="" class="form-control" placeholder="YY" wire:model="exp_year">
                                             @error('exp_year') <span class="text-danger">{{$message}}</span> @enderror
                                         </p>
                                         <p class="row-in-form">
                                             <label for="cvc">CVC:</label>
                                             <input type="password" name="cvc" value="" class="form-control" placeholder="cvc number" wire:model="cvc">
                                             @error('cvc') <span class="text-danger">{{$message}}</span> @enderror
                                         </p>
                                     </div>
                                     @endif
                                     <div class="custome-radio mt-5">
                                         <input type="radio" name="payment-method" id="payment-method-visa" value="card" wire:model="paymentmode">
                                         <label class="form-label">Debit/Credit Card</label>
                                     </div>
                                     <div class="custome-radio">
                                         <input type="radio" name="payment-method" id="payment-method-visa" value="cod" wire:model="paymentmode">
                                         <label class="form-label">Cash on delivery</label>
                                     </div>
                                     <!-- <div class="custome-radio">
                                     <input class="form-check-input"  type="radio" name="payment_option" id="exampleRadios3" checked="">
                                     <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                                     <div class="form-group collapse in" id="bankTranfer">
                                         <p class="text-muted mt-5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration. </p>
                                     </div>
                                 </div>
                                 <div class="custome-radio">
                                     <input class="form-check-input"  type="radio" name="payment_option" id="exampleRadios4" checked="">
                                     <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Check Payment</label>
                                     <div class="form-group collapse in" id="checkPayment">
                                         <p class="text-muted mt-5">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode. </p>
                                     </div>
                                 </div>
                                 <div class="custome-radio">
                                     <input class="form-check-input"  type="radio" name="payment_option" id="exampleRadios5" checked="">
                                     <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Paypal</label>
                                     <div class="form-group collapse in" id="paypal">
                                         <p class="text-muted mt-5">Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                     </div>
                                 </div> -->
                                 </div>
                             </div>
                             <button type="submit" class="btn btn-fill-out btn-block mt-30">Place Order</button>
                         </div>

                     </div>
                 </div>
             </form>
         </div>
     </section>
 </main>
