<?php

    $i=$_POST['form_time'];

echo '<br<form action=""  class="eodform" name="eodform" id="eodform'.$i.'" method="POST">
               <h2>EOD</h2>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group row">
                        <label for="ticketnumber" class="col-sm-6">Ticket Number<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="number" class="form-control" name="ticketnumber[]" id="ticketnumber'.$i.'" onblur="get_estimation_function()" placeholder="Ticket Number" autofocus required >
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="desc" class="col-sm-6">Description</label>
                        <div class="col-sm-6">
                           <textarea class="form-control" cols="10" rows="5" name="description[]" id="description'.$i.'" placeholder="Decription"></textarea>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="status" class="col-sm-6">Status<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <select  class="form-control" id="status'.$i.'" name="status[]">
                              <option value="initiated">Initiated</option>
                              <option value="started">Started</option>
                              <option value="middle level">Middle level</option>
                              <option value="unit testing">Unit testing</option>
                              <option value="prior review">Prior review</option>
                              <option value="staging testing">Staging testing</option>
                              <option value="bug fixes">Bug fixes</option>
                              <option value="waitng for production">Waiting for production</option>
                              <option value="Production">Production</option>
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="comments" class="col-sm-6">Comments</label>
                        <div class="col-sm-6">
                           <textarea class="form-control" cols="10" rows="5" name="comments[]" id="comments'.$i.'" placeholder="Eg: Local & staging setup completed"></textarea>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="istesting" class="col-sm-6">Went for Testing<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="radio" class="r3" value="yes" class="radio" name="istesting[]" required>Yes
                           <input type="radio" class="r4" value="no" class="radio" name="istesting[]">No
                        </div>
                     </div>
                     <div id="iterationdiv" class="form-group row">
                        <label for="iteration_no" class="col-sm-6">Iteration Number<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input class="form-control col-sm-6" type="number" id="iteration_no'.$i.'" name="iteration_no[]">
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-1"></div>
                  <div class="col-sm-5">
                     <div class="form-group row">
                        <label for="estimatedtime" class="col-sm-6">Estimated Time<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control col-sm-7" name="estimatedtime[]" id="estimatedtime'.$i.'" onblur="get_remainingtime_function()" placeholder="Eg: 1hr" required >
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="login" class="col-sm-6">Login Time<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="time" class="form-control col-sm-7" name="login_time[]" id="login_time'.$i.'" placeholder="Eg: 10:00 " required>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label for="logout " class="col-sm-6 ">Logout Time<span class="star">*</span></label>
                        <div class="col-sm-6 ">
                           <input type="time" class="form-control col-sm-7" name="logout_time[]" id="logout_time'.$i.'" placeholder="Eg: 19:00" required>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="remainingtime" class="col-sm-6">Remaining Time<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <select class="form-control col-sm-7" name="remainingtime[]" id="remainingtime'.$i.'">
                           </select>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label for="completepercentage" class="col-sm-6 ">Work Completed<span class="star">*</span></label>
                        <div class="col-sm-6 ">
                           <select class="form-control col-sm-7" name="completepercentage[]" id="completepercentage'.$i.'">
                              
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="is_subticket" class="col-sm-6">Sub Ticket<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="radio" class="r1" value="yes" class="radio" name="is_subticket[]" required>Yes
                           <input type="radio" class="r2" value="no" class="radio" name="is_subticket[]">No
                        </div>
                     </div>
                     <div id="subdiv">
                        <div class="form-group row">
                           <label for="main_ticket_no" class="col-sm-6">Main Ticknet no:<span class="star">*</span></label>
                           <div class="col-sm-6">
                              <input class="form-control col-sm-7" type="number" id="main_ticket_no'.$i.'" name="main_ticket_no[]">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="buttons" style="text-align: center;">
                  <button type="reset" name="clear" class="btn btn-danger clear">Clear</button>
               </div>
            </form>';


?>