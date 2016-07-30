<?php include( 'inc/header.php'); ?>
    <div class="container">
        <section id="ty-slider" class="hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/slide02.jpg" alt="">
                </div>
            </div>
        </section>
        <div class="row">
            <div id="thank-you" class="privacy-terms col-md-8 col-md-offset-2">

                <?php
                    if(isset($_GET['ld']) && $_GET['ld'] == 1) {
                        $status = 'lowdebt';
                    } else {
                        $status = isset($_GET['tl_status']) ? $_GET['tl_status'] : '';
                    }

                    switch($status){
                        case 'lowdebt':
                ?>

                <p id="thank-you-big">Borrowers with less than $7,500 in total student debt are unlikely to benefit from our premium consulting services.<br />
                If you still believe you are a good candidate for loan consolidation, or if you have under-reported your debt amount, please call us at <a class="phone-link" href="tel:"></a> to speak to a specialist or take a look at these special offers for borrowers below:<br /><br />

                <?php include('./config/'.$siteName.'/inc/ty-script.php'); ?>

                <?php
                    break;
                    case 'closed':
                        $next_open_date = date('l, F jS', strtotime('+1 Weekday'));
                ?>
                
                <h1>Thank You - You <strong>DO</strong> Qualify To Save On Your Loans!</h1>
                <p id="thank-you-big"><strong style="background: hsla(75,100%,50%,0.56)";>In order to lower your payments our agents need to speak with you</strong> however our call center is currently closed.<br />
                One of our agents will be calling you first thing  <?= $next_open_date ?> from <a class="phone-link" href="tel:"></a>.</p>
                       
                <?php
                    break;
                    case 'open':
                ?>

                <h1>You Qualify To Save On Your Loans!</h1>
                <p id="thank-you-big">
                    Congratulations! Please have your phone ready as one of our loan experts will be calling you within the next 60 seconds from <a class="phone-link" href="tel:"></a> to assist you with the government programs you qualify for. The call takes just a few minutes, and is toll free.<br /><br />
                    If you cannot answer this call now please call us back later to learn about the programs available for you.
                </p>

                <?php
                    break;
                    }
                ?>

            </div>
        </div>
    </div>
    <?php include('inc/footer.php'); ?>

    <?php include('./config/'.$siteName.'/inc/twitter.php'); ?>  

    <!-- Facebook Pixel Code -->
    <script>
        fbq('track', "Lead");
    </script>

  </body>

</html>
