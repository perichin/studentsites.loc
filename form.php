<div id="form-holder" class="col-sm-6 col-md-6 col-lg-5">
    <form id="student-form" method="post" action="process.php" novalidate="novalidate">
        <input name="universal_leadid" id="leadid_token" type="hidden" value=""/>
        <input name="list_id" id="list_id" value="" type="hidden">
        <input name="url" value="<?= $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>" type="hidden">
        <h2 id="form-title" class="title hidden-xs">Start Here</h2>
        <h4 id="form-sub-title" class="title hidden-xs">Safe, Confidential and No Obligation</h4>
        <fieldset id="form-fields" class="row">
            <section class="col-sm-12">
                <div class="col-sm-12 form-group">
                    <div class="col-sm-6">
                        <span class="label">Your Loan Type?</span>
                        <select id="loan_type" class="form-control" name="loan_type">
                            <option value="Federal" selected="">Federal</option>
                            <option value="Private">Private</option>
                            <option value="Both">Both</option>
                            <option value="Unknown">I Don't Know</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <span class="label">Your Loan Amount?</span>
                        <select id="total_loan_amount" class="form-control" name="total_loan_amount">
                            <option value="5000">Below $7,500</option>
                            <option value="10000">$7,500 - $10,000</option>                         
                            <option value="15000">$10,000 - $19,000</option>
                            <option value="25000">$20,000 - $29,000</option>
                            <option value="35000" selected="">$30,000 - $39,000</option>
                            <option value="45000">$40,000 - $49,000</option>
                            <option value="55000">$50,000 - $59,000</option>
                            <option value="65000">$60,000 - $69,000</option>
                            <option value="75000">$70,000 - $79,000</option>
                            <option value="85000">$80,000 - $89,000</option>
                            <option value="95000">$90,000 - $99,000</option>
                            <option value="100000">Over $100,000</option>
                        </select>
                    </div>
                </div>            
                <div class="col-sm-12 form-group">
                    <div class="col-sm-6">
                        <input type="text" name="first_name" id="first_name" class="form-control name-first" value="" placeholder="FIRST NAME">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="last_name" id="last_name" class="form-control name-last" value="" placeholder="LAST NAME">
                    </div>
                </div>
                <div class="col-sm-12 form-group">
                    <div class="col-sm-6">
                        <input type="email" name="email" id="email" class="form-control email" value="" placeholder="EMAIL">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="phone_home_visible" id="phone_home_visible" class="form-control phone-number" value="" placeholder="PHONE NUMBER" pattern="[0-9]*">
                        <input type="hidden" name="phone" id="phone_home" class="form-control phone-number" value="">
                    </div>
                </div>
                <div class="col-sm-12 form-group">
                    <div class="col-sm-6">
                        <input type="number" name="zip" id="zip" class="form-control zip-code" maxlength="5" minlength="5" value="" placeholder="ZIPCODE" pattern="[0-9]*">
                    </div>                            
                    <div class="col-sm-6">
                        <select name="state" id="state" class="form-control state">
                            <option value="">State</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>
                </div>
            </section>
        </fieldset>
        <div id="disclaimer-div" class="col-sm-12">
          <p id="disclaimer" class="disclaimer"></p>
        </div>        
        <div class="row">
            <section id="submit-section" class="col-sm-12">
                <div class="col-sm-12 form-group">
                    <button type="submit" id="submit-form" class="btn btn-large"></button>
                </div>
                <div id="lookingfor" class="" style="display:none;">
                    <img src="/img/ajax.gif" />
                    Please wait while to compile your results
                </div>                
            </section>
        </div>
        <div id="disclaimer-div-mobile" class="col-sm-12">
          <p id="disclaimer-mobile" class="disclaimer"></p>
        </div>        
    </form> 
</div>
