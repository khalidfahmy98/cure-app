<?php 
    require 'core/init.php';
    templateController::setTitle('Blood Donation | Cure');
    templateController::get('header');
    $treatment = new treatments();
    if ( $patient->isLogged() ) {
?>

        <!--Start Blood Donation-->
        <div class="blood-donation col-md-7"> 
            <h2>Blood Donation</h2>   
            <div class="col-md-3">    
                <div class="sidebar">
                <div class="location-image row">
                  <img src="assets/imgs/profile.png"/>
                  <div class="acc-write">
                    <h4>Tarek NeGm</h4>
                    <span class="text-center"><i class="location fas fa-map-marker-alt"></i>Egypt</span>
                  </div>
                </div>
                <div>
                    <div class="choose">
                        <span><i class="fas fa-times"></i>5 Accepted From 12</span>
                        <button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="btn btn-secondary">Edit Profile</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Name</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Location</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Website</label>
                                <input type="text" class="form-control" id="recipient-name">
                              </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="close-model btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="save-model btn btn-primary">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                        <div class="choose-btn">
                            <button type="button" class="btn btn-success">Accept</button>
                            <button type="button" class="btn btn-danger">Refuse</button>
                            <button type="button" class="btn btn-primary">Share</button>
                        </div>
                    </div>
                </div>
                </div>
              </div>
        </div>
        <!--End Blood Donation-->

<?php 
      }else{
        redirect::to('login.php');
      }
      templateController::get('footer');
?>
