    <?php include('inc/session.php'); ?>
    <?php include('inc/affil.php'); ?>
    <?php include('inc/header.php'); ?>
    <div class="jumbotron">
        <div class="container">
        <div id="slider" class="hidden-xs hidden-sm">
            <div id="slider1"></div>
        </div>
        <div id="home-header-left-mobile" class="col-sm-7 hidden-lg hidden-md hidden-sm">
            <center><h1><a class="phone-link" href="" style="text-decoration: underline;"></a></h1></center>
            <h4 class="slider-headline-mobile slider-headline-mobile-small">
                Click to Call Toll-Free. Live Agents Waiting. No Obligation.
            </h4>
            <h4 class="slider-headline-mobile">
                Millions Qualify For Student Debt Forgiveness And Stop Making Payments Immediately. Find Out If You Qualify By Calling The Number Above or Filling Out The Form Below!
            </h4>
            <h4 class="slider-headline-mobile">
                It's 100% Free To Find Out If You Qualify And The Call Takes Just A Few Minutes.
            </h4>
          </div>
          <?php include('form.php'); ?>
          <div id="home-header-left" class="col-sm-6 col-md-6 col-lg-7 hidden-xs">
            <h2 class="slider-headline"></h2>
            <ul id="slider-list" class="list-unstyled">
                <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>One Low Monthly Payment</li>
                <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Deferment Time Renewed</li>
                <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Forgiveness Programs</li>
                <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Change Repayment Routinely</li>
                <li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>No Upfront Fees</li>
            </ul>
          </div>
        </div>
    </div>
    <div id="blog-content-holder" class="">
        <div class="blog-container container">
            <div class="row">
                <div class="col-md-12">
                    <p>We are not and do not claim to be affiliated with the following: any local, state or federal government agencies; Department of Education; or any student loan servicers, lenders or providers. We are not a lender, and we are not a legal advice service. We an independent preparer of documents and forms to assist debtors with the necessary paperwork needed to complete the student loan consolidation or forgiveness process. If you need Legal or Financial advice please contact a Lawyer or other financial professional.</p>
                </div>
            </div>
        </div>
    </div>
    <?php include('inc/footer.php'); ?>

    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.fieldmask.min.js"></script>
    <script src="js/jquery.validate.js"></script>    
    <script src="js/index.js"></script>

    <?php include('./config/'.$siteName.'/inc/leadid.php'); ?>

</body>

</html>
