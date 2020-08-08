<?php 
  require_once "../../core/init.php";
  templateController::get('header');
  templateController::get('navigation');
  templateController::setTitle("Sessions Scheduler | CURE");
  $patient = new patient();
?>
   <div class="content-wrapper">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Register Branch Sessions Schedule</h3>
                </div>
                  <div class="box-body">
                    <div class="row">
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                        <input type="hidden" class="hide" id="orgId" value="<?php echo session::get('orgnizationId');?>">
                            <label>Day Name</label>
                            <select class="form-control input-sm" id="dayname">
                                <option value="saturday" selected>Saturday</option>
                                <option value="sunday">Sunday</option>
                                <option value="monday">Monday</option>
                                <option value="tuesday">Tuesday</option>
                                <option value="wednesday">Wednesday</option>
                                <option value="thursday">Thursday</option>
                                <option value="friday">Friday</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>Start time</label>
                            <select class="form-control input-sm" id="starttime">
                                <option value="1:00" selected>1:00</option>
                                <option value="1:30">1:30</option>
                                <option value="2:00">2:00</option>
                                <option value="2:30">2:30</option>
                                <option value="3:00">3:00</option>
                                <option value="3:30">3:30</option>
                                <option value="4:00">4:00</option>
                                <option value="4:30">4:30</option>
                                <option value="5:30">5:30</option>
                                <option value="6:00">6:00</option>
                                <option value="6:30">6:30</option>
                                <option value="7:00">7:00</option>
                                <option value="7:30">7:30</option>
                                <option value="8:00">8:00</option>
                                <option value="8:30">8:30</option>
                                <option value="9:00">9:00</option>
                                <option value="9:30">9:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-6 col-xs-12">
                            <label>End Time</label>
                            <select class="form-control input-sm" id="endtime">
                                <option value="1:00">1:00</option>
                                <option value="1:30" selected>1:30</option>
                                <option value="2:00">2:00</option>
                                <option value="2:30">2:30</option>
                                <option value="3:00">3:00</option>
                                <option value="3:30">3:30</option>
                                <option value="4:00">4:00</option>
                                <option value="4:30">4:30</option>
                                <option value="5:30">5:30</option>
                                <option value="6:00">6:00</option>
                                <option value="6:30">6:30</option>
                                <option value="7:00">7:00</option>
                                <option value="7:30">7:30</option>
                                <option value="8:00">8:00</option>
                                <option value="8:30">8:30</option>
                                <option value="9:00">9:00</option>
                                <option value="9:30">9:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                            </select>
                        </div>
                      </div> 
                  </div>
                  <div class="box-footer">
                    <button type="button"  class="btn btn-primary" onclick="createSchedule(<?php echo session::get('orgnizationId');?>)">Register</button>
                  </div>
              </div>
              <div id="responserWrapper"></div>
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Registered Schedules</h3>
                </div>
                  <div class="box-body">
                  <table class="table table-striped table-responsive table-hover">
                    <thead>
                      <tr>
                        <th >Day Name</th>
                        <th >Start Time</th>
                        <th >End Time</th>
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
  templateController::getScript('reservations','sessionsSchedule');
?>
