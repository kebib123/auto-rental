@extends('themes.default.common.master')
@section('post_title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('content')
    <!-- banner -->
    <section class="bg-primary-dark uk-position-relative uk-flex uk-flex-middle " uk-height-viewport="expand: true; min-height: 300;">
        <div class="uk-width-1-1 uk-position-z-index">
            <div class="uk-container uk-container-large uk-position-relative  uk-flex-middle uk-flex" uk-height-viewport="expand: true; min-height: 550;">
                <div class="  uk-width-1-1" uk-scrollspy="cls: uk-animation-slide-top-small; target:h1, p, a;  delay: 100; repeat: false;">
                    <h1 class="uk-text-bold text-white uk-margin-small">Contact Us</h1>
                    <p class="text-white">To help us direct your enquiry, please complete the form below with your details and your reason for contacting us.</p>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- section -->
    <section class="uk-section">
        <div class="uk-container uk-container-large">
            <form>
                <div uk-grid>
                    <div class="uk-width-expand@m">
                        <div  class="uk-grid-medium" uk-grid>
                            <!--  -->
                            <div class="uk-width-1-4">
                                <label for="title">Title <em>*</em></label>
                                <select class="uk-select" name="" id="title">
                                    <option disabled selected>Select</option>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Miss">Miss</option>
                                </select>
                            </div>
                            <!--  -->
                            <div class="uk-width-1-1"></div>
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="firstname">First Name <em>*</em></label>
                                <input class="uk-input" name="firstname" id="firstname" type="text" placeholder="">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="lastname">Last Name <em>*</em></label>
                                <input class="uk-input" name="lastname" id="lastname" type="text" placeholder="">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-1"></div>
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="jobtitle">Job Title</label>
                                <input class="uk-input" name="jobtitle" id="jobtitle" type="text" placeholder="">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="companyname">Company Name</label>
                                <input class="uk-input" name="companyname" id="companyname" type="text" placeholder="">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-1"></div>
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="email">Email <em>*</em></label>
                                <input class="uk-input" name="email" id="email" type="email" placeholder="">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="contactname">Contact Number <em>*</em></label>
                                <input class="uk-input" name="contactname" id="contactname" type="text" placeholder="">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-1"></div>
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="address">Address</label>
                                <input class="uk-input" name="address" id="address" type="text" placeholder="">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="town">Town</label>
                                <input class="uk-input" name="town" id="town" type="text" placeholder="">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-1"></div>
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="Postcode">Postcode</label>
                                <input class="uk-input" name="Postcode" id="Postcode" type="text" placeholder="">
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-2@s">
                                <label for="Country">Country <em>*</em></label>
                                <select class="uk-select" name="Country" id="Country">
                                    <option disabled>Select</option>
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
                            </div>
                            <!--  -->
                            <!--  -->
                            <div class="uk-width-1-1@s">
                                <label for="Comments">Comments</label>
                                <textarea class="uk-textarea" name="Comments" id="Comments"  rows="5"></textarea>
                            </div>
                            <!--  -->
                            <div class="uk-width-1-1">
                                <button class="uk-button uk-button-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <!-- facebook -->
                        <div class="uk-margin">
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="Odv1hw0l"></script>
                            <div class="fb-page" data-href="https://www.facebook.com/nbsm.global/" data-tabs="timeline" data-width="" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/nbsm.global/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/nbsm.global/">NBSM</a></blockquote></div>
                        </div>
                        <!-- end facebook -->


                        <!-- twitter -->
                        <div class="uk-margin">
                            <a class="twitter-timeline" data-width="340" data-height="350" data-theme="light" href="https://twitter.com/nbsmnepal?ref_src=twsrc%5Etfw">Tweets by nbsmnepal</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <!-- end twitter -->
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- end section -->
    <!-- section -->
    <section class="bg-primary uk-contact-details">
        <div class="uk-container uk-container-large">
            <div class="uk-child-width-expand@s" uk-grid>
                <!--  -->
                <div>
                    <div class="uk-padding">
                        <h1 class="uk-h4 uk-text-bold text-white">NBSM Head Office Kathmandu</h1>
                        <ul class="uk-list-varticle ">
                            <li class="uk-flex text-white"><i class="fa fa-map-marker uk-margin-small-right uk-text-large"></i> 6th Floor, Block A, Four Square Complex, Naryanchaur, Naxal, Kathmandu, Nepal </li>
                            <li class="uk-flex text-white"><i class="fa fa-phone uk-margin-small-right uk-text-large"></i> 977-1-4433069, 4415242</li>
                            <li class="uk-flex text-white"><i class="fa fa-envelope uk-margin-small-right uk-text-large"></i>  info@nbsm.com.np</li>
                        </ul>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div>
                    <div class="uk-padding">
                        <h1 class="uk-h4 uk-text-bold text-white uk-margin-small">NBSM Branch Office Butwal</h1>
                        <h2 class="uk-h5 uk-margin-small uk-text-bold text-white">NBSM Consulting Pvt. Limited</h2>
                        <ul class="uk-list-varticle ">
                            <li class="uk-flex text-white"><i class="fa fa-map-marker uk-margin-small-right uk-text-large"></i> Amarbhawan, Kalikanagar, Butwal, Rupandehi </li>
                            <li class="uk-flex text-white"><i class="fa fa-phone uk-margin-small-right uk-text-large"></i> 071-415065</li>
                        </ul>
                    </div>
                </div>
                <!--  -->
                <!--  -->
                <div>
                    <div class="uk-padding">
                        <h1 class="uk-h4 uk-text-bold text-white">NBSM Branch Office Chitwan</h1>
                        <ul class="uk-list-varticle ">
                            <li class="uk-flex text-white"><i class="fa fa-phone uk-margin-small-right uk-text-large"></i> 9851036856, 9851112614 </li>
                            <li class="uk-flex text-white"><i class="fa fa-envelope uk-margin-small-right uk-text-large"></i>  nil.saru@nbsm.com.np, durga.gnawali@nbsm.com.np</li>
                        </ul>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- section -->
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.070504523297!2d85.32468991503372!3d27.715109331757812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190e51f9bdf7%3A0xae7fcfdcb4e9786c!2sNBSM%20%26%20Associates!5e0!3m2!1sen!2snp!4v1617861522759!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
    <!-- section end -->
@endsection
