<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
      <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
      <title>T2S-EOD</title>
      <style>
         h2 {
         padding-bottom: 0.5em;
         }
         .btn-outline-danger {
         position: relative;
         left: 7em;
         }
         .btn-outline-success {
         position: relative;
         left: 5em;
         }
         .r2 {
         margin-left: 1em;
         }
         .r4 {
         margin-left: 1em;
         }
         label {
         font-size: 1.3em;
         }
         .star{
         color:red;
         }
         .buttons {
         margin:auto;
         }
         .testing_radio {
         margin-left: 1em;
         }
         .is_subticket_radio
         {
          margin-left: 1em;
         }
         .subdiv
         {
          display: none;
         }
         .iterationdiv

         {
          display: none;
         }
      </style>
   </head>
   <body style="align-content:center;">
      <div class="container">
      <div class="jumbotron">
         <div id="success_div" class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <h4 id="success_msg"></h4>
         </div>
         <div id="error_div" class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <h4 id="error_msg"></h4>
         </div>
         <div id="form">
            <form class ="eodform" action="" id="eodform1" method="POST">
               <h2>EOD</h2>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group row">
                        <label for="ticketnumber" class="col-sm-6">Ticket Number<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="number" class="form-control" name="ticketnumber[]" id="ticketnumber1" onblur="get_estimation_function($(this).val())"  placeholder="Ticket Number" autofocus required >
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="desc" class="col-sm-6">Description</label>
                        <div class="col-sm-6">
                           <textarea  type="text" class="form-control" cols="10" rows="5" name="description[]" id="description1" placeholder="Decription"></textarea>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="status" class="col-sm-6">Status<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <select  class="form-control" id="status1" name="status[]">
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
                           <textarea class="form-control" cols="10" rows="5" name="comments[]" id="comments1" placeholder="Eg: Local & staging setup completed"></textarea>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="istesting" class="col-sm-6">Went for Testing<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="radio"  value="yes" class="testing_radio" name="istesting[]" required>Yes
                           <input type="radio"  value="no" class="testing_radio" name="istesting[]">No
                        </div>
                     </div>
                     <div id ="iterationdiv1" class="iterationdiv">
                     <div class="form-group row">
                        <label for="iteration_no" class="col-sm-6">Iteration Number<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input class="form-control col-sm-6" type="number" id="iteration_no1" name="iteration_no[]">
                        </div>
                     </div>
                   </div>
                  </div>
                  <div class="col-sm-1"></div>
                  <div class="col-sm-5">
                     <div class="form-group row">
                        <label for="estimatedtime" class="col-sm-6">Estimated Time<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control col-sm-7" name="estimatedtime[]" id="estimatedtime1" placeholder="Eg: 1hr"  onblur="get_remainingtime_function($(this).val())" required >
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="login" class="col-sm-6">Login Time<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="time" class="form-control col-sm-7" name="login_time[]" id="login_time1" placeholder="Eg: 10:00 " required>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label for="logout " class="col-sm-6 ">Logout Time<span class="star">*</span></label>
                        <div class="col-sm-6 ">
                           <input type="time" class="form-control col-sm-7" name="logout_time[]" id="logout_time1" placeholder="Eg: 19:00" required>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="remainingtime" class="col-sm-6">Remaining Time<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <select class="form-control col-sm-7" name="remainingtime[]" id="remainingtime1">
                           </select>
                        </div>
                     </div>
                     <div class="form-group row ">
                        <label for="completepercentage" class="col-sm-6 ">Work Completed<span class="star">*</span></label>
                        <div class="col-sm-6 ">
                           <select class="form-control col-sm-7" name="completepercentage[]" id="completepercentage1">
                              
                           </select>
                        </div>
                     </div>
                     <div class="form-group row">
                        <label for="is_subticket" class="col-sm-6">Sub Ticket<span class="star">*</span></label>
                        <div class="col-sm-6">
                           <input type="radio"  value="yes" class="is_subticket_radio" name="is_subticket[]" required>Yes
                           <input type="radio"  value="no" class="is_subticket_radio" name="is_subticket[]">No
                        </div>
                     </div>
                     <div id="subdiv1" class="subdiv">
                        <div class="form-group row">
                           <label for="main_ticket_no" class="col-sm-6">Main Ticknet no:<span class="star">*</span></label>
                           <div class="col-sm-6">
                              <input class="form-control col-sm-7" type="number" id="main_ticket_no1`" name="main_ticket_no[]">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="buttons" style="text-align: center;">
                  <button type="reset" name="clear" id="clear" class="btn btn-danger clear">Clear</button>
               </div>
 -->               
            </form>
         </div>
         <br>
         <div class="buttons" style="text-align: center;">
            <button type="button" name="add_more" id="add_more" class="btn btn-primary">Add more</button>
            <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
            <!-- <button type="reset" name="clear" id="clear" class="btn btn-danger">Clear</button> -->
         </div>
         <div id="example">
         </div>
      </div>
      <script type="text/javascript">
         function get_estimation_function(ticketnumber) {
                    var index=$("input[name='ticketnumber[]']").length;
                    $.ajax({
                    type: "POST",
                    url: "get_estimatedtime.php",
                    dataType: 'json',
                    data: {
                        ticketnumber: ticketnumber
                    },
                    cache: false,
                    success: function(response) {
                        
                        var idname = ["completepercentage","estimatedtime","remainingtime"];
                        for (i=0;i<idname.length;i++)
                        {
                            idname[i]+=index;
                            $('#'+idname[i]).find('option').remove();
                        
                        } 
                        $('#'+idname[1]).val("");
                        for(var i = parseInt(response.prev_completepercentage); i <=100; i+=5)
                        {   var option="";
                            option = '<option value="'+i+'">' +i+ '</option>';
                            $('#'+idname[0]).append(option);
                        }
                        if(response.prev_estimatedtime){
                        $('#'+idname[1]).val(response.prev_estimatedtime);
                        for(var i = parseInt(response.prev_remainingtime); i>=0; i--)
                        {   var option="";
                            option = '<option value="'+i+'">' +i+ '</option>';
                            $('#'+idname[2]).append(option);
                        }
                        }
                    }
                });
                }
         
            function get_remainingtime_function(estimatedtime)
            {
                var index=$("input[name='estimatedtime[]']").length;
                var idname ="remainingtime";
                idname+=index;
                $('#'+idname).find('option').remove();

               for(var i = estimatedtime ; i >=0; i--)
               {
                var option="";
                option = '<option value="'+i+'">' +i+ '</option>';
                $('#'+idname).append(option);
         
               }
         
            }
            function clear_function(idname){
              $('#'+idname).trigger('reset');
            }

            
            $(document).on('change','.testing_radio',function(){
              var yesorno = $(this).val();
              var div_id = $(this).closest('.eodform').find('.iterationdiv').attr('id');
              if(yesorno === 'yes')
              {
                $('#'+div_id).show();
              } 

              else{
                $('#'+div_id).hide();
              }      
            });
            
            $(document).on('change','.is_subticket_radio',function(){
              var yesorno = $(this).val();
              var div_id = $(this).closest('.eodform').find('.subdiv').attr('id');
              if(yesorno === 'yes')
              {
                $('#'+div_id).show();
              }
              else{
                $('#'+div_id).hide();

              }     
            });

            
            $(document).on('click', '.clear', function(){ 
            console.log("inside the click function");
                var form_id = $(this).closest('.eodform').attr('id');  
                console.log(form_id);
                $('#'+form_id).trigger('reset');
            });


         $(document).ready(function() {
            var form_time=1;
            $('#error_div').delay(0).hide(0);
            $('#success_div').delay(0).hide(0);

            $('#add_more').click(function(e){
                form_time=form_time+1;
                var val="eodform";
                  val+=form_time;
                $.ajax({
                    type: "POST",
                    url: "addform.php",
                    cache: false,
                    data:{
                        form_time:form_time
                    },
                    success: function(response) {
                        $('#form').append(response);                       
                    }
                });         
            });
         
            $('#submit').click(function(e) {
         
                e.preventDefault();

        var ticketnumber = $("input[name='ticketnumber[]']").map(function(){return $(this).val();}).get();
        var description = $("textarea[name='description[]']").map(function(){return $(this).val();}).get();
        var status = $("select[name='status[]']").map(function(){return $(this).val();}).get();
        var estimatedtime = $("input[name='estimatedtime[]']").map(function(){return $(this).val();}).get();
        var login_time = $("input[name='login_time[]']").map(function(){return $(this).val();}).get();
        var logout_time = $("input[name='logout_time[]']").map(function(){return $(this).val();}).get();
        var remainingtime = $("select[name='remainingtime[]']").map(function(){return $(this).val();}).get();
        var completepercentage = $("select[name='completepercentage[]']").map(function(){return $(this).val();}).get();
        var comments = $("textarea[name='comments[]']").map(function(){return $(this).val();}).get();
        var is_subticket = $("input[name='is_subticket[]']:checked").map(function(){return $(this).val();}).get();
        var main_ticket_no = $("input[name='main_ticket_no[]']").map(function(){return $(this).val();}).get();
        var istesting = $("input[name='istesting[]']:checked").map(function(){return $(this).val();}).get();
        var iteration_no = $("input[name='iteration_no[]']").map(function(){return $(this).val();}).get();
                              
                $.ajax({
         
                    type: "POST",
                    url: "submit_details.php",
                    dataType: "json",
                    data: {
                        ticketnumber: ticketnumber,
                        description: description,
                        status: status,
                        estimatedtime: estimatedtime,
                        login_time: login_time,
                        logout_time: logout_time,
                        remainingtime: remainingtime,
                        completepercentage: completepercentage,
                        comments: comments,
                        is_subticket: is_subticket,
                        main_ticket_no: main_ticket_no,
                        istesting: istesting,
                        iteration_no: iteration_no
         
                    },
                    cache: false,
                    success: function(response) {
                        
                      
                        if (response.status === "success") {
                            $(".eodform").trigger("reset");
                            if(response.error_msg) {
                            $('#error_msg').html(response.error_msg);
                            $('#error_div').show().delay(8000).fadeOut();
                            }
                            else{
                            $("#success_msg").html(response.message);
                            $(".eodform").trigger("reset");
                            $('#success_div').show().delay(8000).fadeOut();
                            //setTimeout(location.reload.bind(location), 1000);
                          }
                          setTimeout(location.reload.bind(location), 1000);
                        }
                        if (response.status === "error") {
                            $('#error_msg').html(response.message);
                            $('#error_div').show().delay(8000).fadeOut();
                        }
                        
                    }
                });
            });


            
            
         });
      </script>
   </body>
</html>