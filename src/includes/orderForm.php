<?php if ($startTrial) { 
    $formKey = "startTrial";
}
?>
    <div id="orderForm" class="container-fluid" data-order-form="<?php echo $formKey ?>">
    <form action="https://app.britebiz.com/webToContact" method="POST" id="<?php echo $formKey; ?>" accept-charset="UTF-8" onSubmit="return <?php echo $formKey; ?>_validateForm();" name="<?php echo $formKey; ?>">
        <div class="hide">
            <input type="hidden" value="NB79YK" name="form_id" id="form_id"/>
            <input type="hidden" value="57f3c21fac73aa8" name="wtc" id="wtc"/>
<!--            <input type="hidden" value="https://www.ag-grid.com/license-pricing.php?submitted=true" name="return_url" id="return_url"/>-->
            <?php if ($startTrial) { ?>
                <input type="hidden" value="https://www.ag-grid.com/thank-you-trial.php" name="return_url" id="return_url"/>
            <?php } else { ?>
                <input type="hidden" value="https://www.ag-grid.com/thank-you-enquiry.php" name="return_url" id="return_url"/>
            <?php } ?>
            <input type="hidden" value="" name="WebToContact[gclid]" id="WebToContact_gclid"/>
        </div>
        <div class="hide"><input type="hidden" value="Website" name="WebToContact[source]" id="WebToContact_source"/></div>
        <div class="hide"><input type="hidden" value="Web Form" name="WebToContact[source_detail]" id="WebToContact_source_detail"/></div>
        <div class="hide"><input type="hidden" value="Primary - Contact" name="WebToContact[type]" id="WebToContact_type"/></div>

<div>
  <form>  
  <div class="row"> 
    <div class="col" class="row-6">
      <input for="webToContact" type="text" class="form-control" placeholder="First name">
    </div>
    <div class="col">
      <input for="webToContact" type="text" class="form-control" placeholder="Last name">
    </div>
  </div>
  <div class="row" style="margin-top: -15px;">
    <div class="col">
      <input for="WebToContact_company_name" type="text" class="form-control" placeholder="Company Name">
    </div>
    <div class="col">
      <input for="WebToContact_email" type="text" class="form-control" placeholder="Email">
    </div>
  </div>


</form>
</div>

<!-- <div>
    <form>
  <div class="row">
    <div class="col">
      <input for="WebToContact_company_name" type="text" class="form-control" placeholder="Company Name">
    </div>
    <div class="col">
      <input for="WebToContact_email" type="text" class="form-control" placeholder="Email">
    </div>
  </div>
</form>
 -->

        <div class="form-group" style="margin-top: 10px"> 
           <select for="WebToContact[_cf_NXMIJJ]" class="form-control">
  <option>Please select which Framework you are using, if applicable</option>
  <option>Angular 2</option>
  <option>React</option>
  <option>Javascript</option>
  <option>Angularjs</option>
  <option>Vuejs</option>
  <option>Web Components</option>
  <option>Aurelia</option>
  <option>Polymer</option>
</select>
        </div>


 
        <div class="form-group">
            <?php if ($startTrial) { ?>
            <?php } else { ?>
                <label for="WebToContact_message">Your message to us below. If ordering, please provide the following information:</label>
                <ul>
                    <li>Company Address and VAT Number (EU only for VAT number).</li>
                    <li>Number of Licenses that you require.</li>

                    <?php if( $formKey == "applicationDeveloper") { ?>
                    <li>Application Name</li>
                    <?php } ?>

                    <?php if( $formKey == "saasAndOEM") { ?>
                    <li>Will you be selling ag-Grid as part of a SAAS (Software as a Service) offering?
                        <i data-toggle="popover"
                           title="<strong>SaaS</strong"
                           data-content="
                                <p>SaaS is Software as a Service.
                                   If you will be <span style='text-decoration: underline;'>selling</span>
                                   ag-Grid as part of a SaaS then you require an additional SaaS license.</p>"
                           class="fa fa-question-circle-o"
                           aria-hidden="true"></i>
                    </li>
                    <li>Will you be selling ag-Grid as part of an application (OEM)?
                        <i data-toggle="popover"
                           title="<strong>OEM</strong"
                           data-content="<p>OEM is Original Equipment Manufacturer. If you will be <span style='text-decoration: underline;'>selling</span> ag-Grid as part of your product then you require additional OEM license.</p>"
                           class="fa fa-question-circle-o"
                           aria-hidden="true"></i>
                    </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <textarea rows="8" class="form-control" name="WebToContact[message]" id="WebToContact_message"><?php if ($startTrial) { ?>
Dear ag-Grid Team,

I am interested in taking a two month trial of ag-Grid Enterprise.

Please email me back with a license key that I can use for my trial.

Thank you.
<?php } ?></textarea>

        <div class="form-group text-right" style="margin-top: 10px;">
            <?php if ($startTrial) { ?>
                <input id="btn_submit" name="btn_submit" type="submit" class="btn btn-primary btn-lg btn-block" value="Begin Trial"/>
            <?php } else { ?>
                <input id="btn_submit" name="btn_submit" type="submit" class="btn btn-primary" value="Send your info to ag-Grid"/>
            <?php } ?>
        </div>
    </form>
</div>

<div>
    <p class="text-center">
        <strong>An evaluation license for ag-Grid Enterprise is granted to anyone wishing evaluate ag-Grid Enterprise. All we ask in return is the following:</strong>
    </p>

<p class="text-center">
You agree to use the Evaluation License only for evaluation of ag-Grid Enterprise.
<br>
You do not enter production with ag-Grid Enterprise.
<br>
You limit your trial to two months (after that, either uninstall or purchase).
</p>
</div>
