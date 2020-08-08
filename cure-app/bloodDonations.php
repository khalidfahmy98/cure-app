<?php 
    require 'core/init.php';
    templateController::setTitle('Blood Donation | Cure');
    templateController::get('header');
    $treatment = new treatments();
    $doantions = new doantions();
    if ( $patient->isLogged() ) {
?>
        <!--Start Blood Donation-->
        <div class="blood-donation col-md-7"> 
          <div id="responserWrapper"></div>
            <h2>Blood Donation <button class="btn btn-sm btn-primary" data-target="#createDonationRequest" data-toggle="modal">Create Request</button></h2>   
            <div class="row">
              <?php 
                foreach ( $doantions->getDonations() as $info ){
                  ?>
                  <div class="col-sm-6 col-md-6 col-xs-12">
                      <div class="thumbnail">
                      <div class="caption">
                          <h3><?php echo $info->patient_username; ?></h3>
                          <p>Location : <?php echo $info->donation_address; ?></p>
                          <p>Blood Type : <?php echo $info->blood_type; ?></p>
                          <p>Donators Needed : <?php echo $info->donators_qunatity; ?></p>
                          <p><button onclick="registerDonation(<?php echo $info->reqeust_id;?> , <?php echo $patient->data()->patient_id;?>)" class="btn btn-primary" role="button">Donate</button> </p>
                      </div>
                      </div>
                  </div>
                  <?php 
                } 
              ?>

            <div>
        </div>
              </div>
              </div>
        <!--End Blood Donation-->
<!-- Modal -->
<div class="modal fade" id="createDonationRequest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request Now Blood Donation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <label> Blood Type </label>
                    <select class="form-control input-sm" id="bloodType">
                        <option value="A"> A </option>
                        <option value="B"> B </option>
                        <option value="O"> O </option>
                        <option value="Aplus"> A+ </option>
                        <option value="Bplus"> B+ </option>
                    </select>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <label> Quantity Of Donators <label>
                    <input type="text" class="form-control input-sm" id="quantity">
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                  <label> Donation Address <label>
                    <input type="text" class="form-control input-sm" id="donationAddress">
              </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="registerRequest(<?php echo $patient->data()->patient_id;?>)">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php 
      }else{
        redirect::to('login.php');
      }
      templateController::get('footer');
      templateController::getScript('donation','operations');
?>
