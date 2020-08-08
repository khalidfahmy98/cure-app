<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Reservation Operations | CURE");
  $patient = new patient();
  $schedule = new schedule()
?>
   <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Register Reservation</h3>
                </div>
                  <div class="box-body">
                    <div class="row">
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                        <input type="hidden" class="hide" id="orgId" value="<?php echo session::get('orgnizationId');?>">
                            <label>Session Time</label>
                            <select class="form-control input-sm" id="sessiontime">
                                <?php 
                                    foreach ( $schedule->getSchedules(session::get('orgnizationId')) as $info ){
                                        ?>
                                            <option value="<?php echo $info->sched_id ;?>"><?php echo $info->day_name . '-' . $info->time_start . '::' . $info->time_end ;?></option>
                                        <?php 
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Patient Name</label>
                            <select class="form-control input-sm" id="patientname">
                            <?php 
                                    foreach ( $patient->getUsers() as $info ){
                                        ?>
                                            <option value="<?php echo $info->patient_id ;?>"><?php echo $info->patient_username ;?></option>
                                        <?php 
                                    } 
                                ?>
                            </select>
                        </div>
                      </div> 
                  </div>
                  <div class="box-footer">
                    <button type="button"  class="btn btn-primary" onclick="createReservation(<?php echo session::get('orgnizationId');?>)">Register</button>
                  </div>
              </div>
              <div id="responserWrapper"></div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Reservations</h3>
                </div>
                  <div class="box-body">
                  <table class="table table-striped table-responsive table-hover">
                    <thead>
                      <tr>
                        <th >Patient name </th>
                        <th >Day</th>
                        <th >Session start</th>
                        <th >Session end</th>
                        <th >Reservation date</th>
                        <th >OPR </th>
                      </tr>
                    </thead>
                    <tbody id="liveTableData">
                    </tbody>
                  </table>
                   </div>
              </div>


                </div>
            </div>
        </section>
    </div>


<?php 
  templateController::get('footer');
  templateController::getScript('reservations','reservationList');
?>
