<?php include_once('header.php') ?>    
<script type="text/javascript"

      src="//static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>



      <script>



// function get_template_message(str) {



//     if (str.length == 0) {

//         document.getElementById("showtemplate").innerHTML = "";

//         return;

//     } else {





//         // var xmlhttp = new XMLHttpRequest();

//         // xmlhttp.onreadystatechange = function() {

//         //     if (this.readyState == 4 && this.status == 200) {

//         //         document.getElementById("showtemplate").innerHTML = this.responseText;

//         //     }

//         // };

//         // xmlhttp.open("GET", "< ?php echo base_url();?>Template/" + str, true);

//         // xmlhttp.send();

//     }

// }

function change_message_type(elem)

{



  if(elem == 'custom')

  {



    document.getElementById('custome_messgae').style.display='block';

    document.getElementById('template_message').style.display='none';

  }

  if(elem == 'template')

  {



    document.getElementById('custome_messgae').style.display='none';

    document.getElementById('template_message').style.display='block';

  }

}

</script>

<script>

function select_schedule(elem)

{

  if(elem == 'scheduled')

  {

    document.getElementById('scheduled-dv').style.display='block';

  }

  else{

    document.getElementById('scheduled-dv').style.display='none';

  }

}

</script>

<script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-36251023-1']);

  _gaq.push(['_setDomainName', 'jqueryscript.net']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>

   

   <!--  <link href="http://static0.twilio.com/bundles/quickstart/client.css"

      type="text/css" rel="stylesheet" /> -->

  <!--   <script type="text/javascript">

 //Twilio.Device.setup('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzY29wZSI6InNjb3BlOmNsaWVudDpvdXRnb2luZz9hcHBTaWQ9JmFwcFBhcmFtcz0mY2xpZW50TmFtZT10d2lsaW9fY2FsbCBzY29wZTpjbGllbnQ6aW5jb21pbmc_Y2xpZW50TmFtZT10d2lsaW9fY2FsbCIsImlzcyI6InNpZCIsImV4cCI6MTU3NTYzNjU0MX0.mcoR7gIQJ_uLMmMgCoXo5ut8TiMRBO4LnFAvpNlEEEU', {'debug':true});



      Twilio.Device.setup("eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzY29wZSI6InNjb3BlOmNsaWVudDpvdXRnb2luZz9hcHBTaWQ9JmFwcFBhcmFtcz0mY2xpZW50TmFtZT10d2lsaW9fY2FsbCBzY29wZTpjbGllbnQ6aW5jb21pbmc_Y2xpZW50TmFtZT10d2lsaW9fY2FsbCIsImlzcyI6InNpZCIsImV4cCI6MTU3NTYzNjU0MX0.mcoR7gIQJ_uLMmMgCoXo5ut8TiMRBO4LnFAvpNlEEEU");



      Twilio.Device.ready(function (device) {

        $("#log").text("Ready");

      });



      Twilio.Device.error(function (error) {

        $("#log").text("Error: " + error.message);

      });

alert(error.message);

      Twilio.Device.connect(function (conn) {

        $("#log").text("Successfully established call");

      });



      Twilio.Device.disconnect(function (conn) {

        $("#log").text("Call ended");

      });



      Twilio.Device.incoming(function (conn) {

        $("#log").text("Incoming connection from " + conn.parameters.From);

        // accept the incoming connection and start two-way audio

        conn.accept();

      });



      function call(param) {

 var phone_number = $("#number"+param).val();

 

        var caller_id = $("#caller_id"+param).val();

    

        var myparam = phone_number + "#"+ caller_id;

        if(caller_id == '')

        {

        alert('Please Select Caller ID');    

        }

        else

        {

        params = {"PhoneNumber": myparam};

        Twilio.Device.connect(params);

        }

      }



      function hangup() {

        Twilio.Device.disconnectAll();

      }

    </script> -->

<!-- Main content -->

<head>

<style>

    #call_button { background-color: #0c8d43!important;

    border-color: #0c8d43!important;

    color: #fff!important;

    background: green!important;

    padding: 6px!important;

    margin-top: 0!important;

        font-size: 28px;

font-weight: 500;

    }



  .datatable{ border-collapse: collapse !important}

   #hangup_button {   background-color: #0c8d43 !important;

    border-color: #e41010!important;

    color: #fff!important;

    background: #e41010!important;

    padding: 6px!important;

    margin-top: 0!important;

    font-size: 28px;

font-weight: 500;



}

button.call::before {

    background-position: 0 -48px;

    display: none;

}

button.hangup::before {

    background-position: 0 -131px;

    display: none;

}

body {

    text-align: left;

    background:none;

}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- <script>

      $( document ).ready(function() {





var table = $('#dataTable').DataTable();



// Sort by columns 1 and 2 and redraw

table

    .order( [ 7, 'desc' ] )

    .draw();

 });

</script> -->

<script>

      $( document ).ready(function() {





var table = $('#dataTable').DataTable();



// Sort by columns 1 and 2 and redraw

table

    .order( [ 4, 'desc' ] )

    .draw();

 });

</script>

    <main class="main">







    <!-- Breadcrumb -->



      <ol class="breadcrumb">



        <li class="breadcrumb-item">Home</li>



        <!--li class="breadcrumb-item"><a href="#">Message Center</a></li-->



        <li class="breadcrumb-item active">Bulk SMS</li>



        <!-- Breadcrumb Menu-->



        <!-- <li class="breadcrumb-menu d-md-down-none">



          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">



            <a class="btn" href="#"><i class="icon-speech"></i></a>



            <a class="btn" href="index-2.html"><i class="icon-graph"></i> &nbsp;Dashboard</a>



            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>



          </div>



        </li> -->



      </ol>







      <div class="container-fluid">







        <div class="animated fadeIn">











          <div class="row">



            <div class="col-lg-12">



              <div class="card">



                <div class="card-header">



                  <i class="fa fa-edit"></i>Compose Message



                  <!-- <div class="card-actions">



                    <a href="#" class="btn-setting"><i class="icon-settings"></i></a>



                    <a href="#" class="btn-minimize"><i class="icon-arrow-up"></i></a>



                    <a href="#" class="btn-close"><i class="icon-close"></i></a>



                  </div> -->



                </div>



                <div class="card-body col-lg-7">



                  <form class="form-horizontal" action="Bulk_mail/send_bulk" data-validate="parsley" method="post" name="client_record" enctype="multipart/form-data" novalidate>



                    <div class="form-group">



                      <label class="col-form-label" for="prependedInput">upload Type</label>



                      <div class="controls">



                        <div class="input-prepend input-group">



                  <select name="msg_type" class="form-control" onChange="show(this.value);">



                            <option  value="">Select</option>



<!--                             <option value="group">Group Number</option> -->



                            <option value="file">Upload File</option>

                            <option value="clients">Contacts</option>







                          </select>







                          <datalist id='listid'>





            </datalist>



                      </div>







                      </div>



                    </div>



          <!--div class="form-group">



                      <label class="col-form-label" for="appendedInput">Select Country</label>



                      <div class="controls">



                        <div class="input-group">

          <select id="select2-1" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="country_code" onchange="" required>







          <option value="">Select</option>





         </select>







                     </div>







                      </div>



                    </div-->







          <div class="form-group">



                      <label class="col-form-label" for="appendedInput">Select Schedule</label>



                      <div class="controls">



                        <div class="input-group">



          <select id="select2-1" class="form-control select2-single select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="sending_type" onchange="select_schedule(this.value)" required>







          <option value="">Select</option>







    <option value="send_now">Send Now</option>

    <option value="scheduled">Make A Schedule</option>



         </select>







                     </div>







                      </div>



                    </div>



          <div class="form-group" id="scheduled-dv" style="display:none">

          <div style="width:50%;float:left;padding-right:5px">



                      <label class="col-form-label" for="appendedInput">Date </label>



                      <div class="controls" >





                   <input type='date' class="form-control" id='datetimepicker3' name="scheduled"/>









                      </div>

</div>

<div style="width:50%;float:right;padding-left:5px">



                      <label class="col-form-label" for="appendedInput">Time </label>



                      <div class="controls" >









<input type='time' class="form-control" id='datetimepicker3' name="time"/>





                      </div>

</div>

                    </div>



<input type="hidden" name="service_type" value="twilio">





  <div id="leads_wrap" style="display:none">

          <label class="col-form-label" for="prependedInput">Select Leads</label><div class="form-control" style=" padding: 7px 7px 7px 17px;" onclick="showCheckboxes()">Select<img src="<?php echo base_url(); ?>dropdown.png" style="float:right;float: right;    height: 15px;    width: 6px;    margin-top: 4px;    "></div>

          <div class="form-group" style="display:none;max-height:250px;overflow:auto" id="leads_holder">

          <input type="checkbox" name="leads_name[]" value="select_all" id="select_all" onclick="selector123()">&nbsp;Select All<br>

</div></div>











<div id="clients_wrap" style="display:none">

          <label class="col-form-label" for="prependedInput">Select Contacts</label><div class="form-control" style=" padding: 7px 7px 7px 17px;" onclick="showCheckboxes_clients()">Select<img src="<?php echo base_url(); ?>dropdown.png" style="float:right;float: right;    height: 15px;    width: 6px;    margin-top: 4px;    "></div>

          <div class="form-group" style="display:none;max-height:250px;overflow:auto" id="clients_holder">

          <input type="checkbox" name="clients_name[]" value="select_all_clients" id="select_all_clients" onclick="selector1234()" >&nbsp;Select All<br>

          <?php

          if ($clientdata =='No') {

            echo "";

          }

          else{

          for($i = 0; $i<sizeof($clientdata); $i++){

           echo '<input type="checkbox" name="clients_name[]" class="checkboxes" onclick="single_select_clients(this)" value="'.$clientdata[$i]['email'].'">&nbsp;'.$clientdata[$i]['first_name'].'  '.$clientdata[$i]['last_name'].'<br>';

           

          }

        }

          ?>

</div></div>



                     <div class="row" id="first_box" style=" display:none;">



            <div class="col-md-12">



<div class="form-group">



<label class="control-label">Select a Group</label>



 <select name="group_name"  class="form-control ">



<option value="">Select</option>

<?php
print_r($getgroup);

if ($getgroup=='No') {

  echo "";

}

else{

  for($i=0;$i<sizeof($getgroup);$i++){

      echo '<option value="'.$getgroup[$i]['name'].'">'.$getgroup[$i]['name'].'</option>';

  }

}

?>





 </select>



</div>



</div>







</div>











<div class="row" id="second_box" style=" display:none;">



           <div class="col-md-12">



<div class="form-group">



            <label class="control-label">Upload File</label>



            <div class="upload-file">



                    <input style="cursor:pointer;" type="file" id="upload-demo" name="filex" class="upload-demo" accept=".xlsx,.csv,.txt">

<a href="<?php echo base_url(); ?>upload/bulk_mail.xlsx"><input type="button" class="btn btn-success" value="Download Sample"/></a>

                    <label data-title="Select file" for="upload-demo">



                     <span data-title="No file selected..."></span>



                    </label>



                  </div>



            <input type="hidden" id="dtp_input1" value="" /><br/>



           </div>



</div>



</div>

<div class="form-group emoji-contant-align">
                      <label class="col-form-label" for="appendedPrependedInput">Subject</label>
                      <div class="controls">
                        <div class="input-prepend input-group">
                         <span class="input-group-addon"><i class="fa fa-envira"></i></span>
                          <input id="prependedInput" class="form-control" name="subject" size="16" type="text" placeholder="Write Subject Here!" list="listid" required>
                        </div>
                      </div>
                    </div>



                   <div class="form-group emoji-contant-align">

                      <label class="col-form-label" for="appendedPrependedInput">Message</label>

                      <div class="controls">

                        <div class="input-prepend input-group">

                         <select class="form-control" name="message_type" onchange="change_message_type(this.value)" >

             <option value="custom">Custom message</option>

             <option value="template">Template message</option>

             </select>

                        </div>

                      </div>

                    </div>



                    <div class="form-group emoji-contant-align" id="custome_messgae">

                      <label class="col-form-label" for="appendedPrependedInput">Message</label>

                      <div class="controls">

                        <div class="input-prepend input-group">

                         <textarea id="examplename" name="mymessage" data-control="exname-control" rows="9" class="form-control" placeholder="Write your Message Here!"></textarea>

                        </div>

                      </div>

                    </div>

          <div id="template_message" style="display:none">



          <div class="form-group emoji-contant-align" id="template_message">

                      <label class="col-form-label" for="appendedPrependedInput">Select Template</label>

                      <div class="controls">

                       <select class="form-control" name="" id="temp"  >

             <option value="custom">Select</option>

             <?php 
             print_r($tapp_template_msg);
             if ($tapp_template_msg=="") {

               echo "";

             }

             else{

             for($i=0;$i<sizeof($tapp_template_msg);$i++)

             {

              echo '<option value = '.$tapp_template_msg[$i]['id'].'>'.$tapp_template_msg[$i]['title'].'</option>';

             } 

           }

             ?>

                         </select>

                      </div>

                    </div>



           <div class="form-group emoji-contant-align" id="showtemplate">

                      <label class="col-form-label" for="appendedPrependedInput">Message</label>

                      <div class="controls">

                        <div class="input-prepend input-group">

                         <textarea name="message" id="temptext" data-control="exname-control" rows="9" class="form-control" placeholder="Write your Message Here!" value = ""  ></textarea>

                        </div>

                      </div>

                    </div>

                    </div>



                    <div class="form-actions">



                      <button type="submit" id="send_btn" class="btn btn-primary">Send Now</button>



                      <button type="reset" class="btn btn-secondary">Cancel</button>



                    </div>



                  </form>



                </div>



              </div>



            </div>



            <!--/.col-->



          </div>







          <!--/.row-->















        </div>







      </div>



      <!-- /.conainer-fluid -->



      <!-- /.conainer-fluid -->



    </main>







    <!--  -->







  </div>







  <?php include_once('footer.php') ?>




<!-- Plugins and scripts required by this views -->



  <script src="<?php echo base_url(); ?>vendors/js/jquery.dataTables.min.js"></script>



  <script src="<?php echo base_url(); ?>vendors/js/dataTables.bootstrap4.min.js"></script>







  <!-- Custom scripts required by this view -->



  <script src="<?php echo base_url(); ?>js/views/tables.js"></script>
  <script>



  function show(str)



    {







    if(str=='file')



    {



    $("#second_box").show();



    $("#scheduled_btn").hide();



    $("#send_btn").show();



    $("#first_box").hide();

    $("#clients_wrap").hide();

    $("#leads_wrap").hide();



    }

  else if(str=='leads')

  {

    $("#second_box").hide();



    $("#scheduled_btn").hide();



    $("#send_btn").show();



    $("#first_box").hide();

    $("#clients_wrap").hide();

    $("#leads_wrap").show();

  }

  else if(str=='clients')

  {

    $("#second_box").hide();



    $("#scheduled_btn").hide();



    $("#send_btn").show();



    $("#first_box").hide();

    $("#clients_wrap").show();

    $("#leads_wrap").hide();

  }

    else



    {



    $("#second_box").hide();



    $("#scheduled_btn").hide();



    $("#send_btn").show();



    $("#first_box").show();

$("#clients_wrap").hide();

    $("#leads_wrap").hide();

    }



  }





function showCheckboxes_clients()

       {



       var expanded = false;

       var checkboxes = document.getElementById("clients_holder");

       if (!expanded) {

       checkboxes.style.display = "block";

       expanded = true;

       }

       else

         {

       checkboxes.style.display = "none";

       expanded = false;

       }

       /* if(checkboxes.style.display === 'none' )  {   checkboxes.style.display = "block";  }  else{    checkboxes.style.display = "none";  } */

       }











        function showCheckboxes()

       {

       var expanded1 = false;

       var checkboxes = document.getElementById("leads_holder");

       if (!expanded1) {

       checkboxes.style.display = "block";

       expanded1 = true;

       }

       else

         {

       checkboxes.style.display = "none";

       expanded1 = false;

       }

       /* if(checkboxes.style.display === 'none' )  {   checkboxes.style.display = "block";  }  else{    checkboxes.style.display = "none";  } */

       }











         function single_select(elem)

   {

   if(elem.checked == true) {

     }

     else {

       document.getElementById("select_all").checked = false;

       }

       }





         function single_select_clients(elem)

   {

   if(elem.checked == true) {

     }

     else {

       document.getElementById("select_all_clients").checked = false;

       }

       }









       function selector1234()

{

  var total_freelancer = $('input:checkbox.checkboxes').length;



var total_freelancer1 = $('input:checkbox.checkboxes');

// console.log(total_freelancer1[i]);

var i = 0;for(i=0; i<total_freelancer;i++)

{ if(document.getElementById("select_all_clients").checked == true){

  

total_freelancer1[i].checked = true;



}

else

{

total_freelancer1[i].checked = false;

}

   }

   }







   function selector123()

{

  var total_freelancer = $('input:checkbox.checkboxes').length;

  alert(total_freelancer);

var total_freelancer1 = $('input:checkbox.checkboxes');

var i = 0;for(i=0; i<=total_freelancer;i++)

{ if(document.getElementById("select_all").checked == true)

{

total_freelancer1[i].checked = true;

}

else

{

total_freelancer1[i].checked = false;

}

   }

   }

</script>



<script type="text/javascript">



   $(document).ready(function() {



              /*  $('#datetimepicker1').datetimepicker();*/



      $("#demo1").emojioneArea({



       container: "#container",



       hideSource: false,



       useSprite: false



      });



    });





</script>



 <script>







    $(function() {



      // Initializes and creates emoji set from sprite sheet



      window.emojiPicker = new EmojiPicker({



        emojiable_selector: '[data-emojiable=true]',



        assetsPath: 'lib/img/',



        popupButtonClasses: 'fa fa-smile-o'



      });































      // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields































      // You may want to delay this step if you have dynamically created input fields that appear later in the loading process































      // It can be called as many times as necessary; previously converted input fields will not be converted again































      window.emojiPicker.discover();































    });































  </script>



<script type="text/javascript">

   $('#checkAll').click(function () {    

     $('input:checkbox').prop('checked', this.checked);    

 });

</script>











<script>

function select_n(str) {



    if (str.length == 0) {

        document.getElementById("sl").innerHTML = "";

        return;

    } else {

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {

            if (this.readyState == 4 && this.status == 200) {

                document.getElementById("sl").innerHTML = this.responseText;

            }

        };

        xmlhttp.open("GET", "getn.php?q=" + str, true);

        xmlhttp.send();

    }

}

</script>
<script type="text/javascript">

  $('#temp').change(function(){

    var id = $(this).val();



   $.ajax({

              type : 'ajax',

              method : 'post',

              dataType : 'json',

              url : '<?php echo base_url(); ?>Bulk_sms/getdatamsg/'+id,

              success:function(r){



                if (r==null) {

                  html = r;

                }

                else{

                html = r[0].message;

              }



                $('#temptext').val(html);



              },

              error:function(xhr,status,error){

                console.log(xhr.responseText);

                

              }

   });

  });

</script>
<script type="text/javascript">

  <?php if (isset($_SESSION['invalid']) && $_SESSION['invalid']=='invalid process') {?>



 toastr.error('<?php echo $_SESSION['invalid']; ?>')   



  <?php unset($_SESSION['invalid']);} 

  if (isset($_SESSION['clients_fail'])) { ?>



    toastr.error('<?php echo $_SESSION['clients_fail']; ?>');



  <?php unset($_SESSION['clients_fail']); } 

  if (isset($_SESSION['clients'])) { ?> 



    toastr.success('<?php echo $_SESSION['clients']; ?>');



    <?php unset($_SESSION['clients']);} 



    if (isset($_SESSION['imported']) && $_SESSION['imported']=='imported') {?> 



      toastr.success('Congrats! Number imported Successfully');

    

    <?php unset($_SESSION['imported']);} 



    if (isset($_SESSION['group']) && $_SESSION['group']=='Group') {?>

      

      toastr.success('Group number imported Successfully');

      

      <?php unset($_SESSION['group']);} 





      if (isset($_SESSION['group_fail'])) {?>

        toastr.error('<?php echo $_SESSION['group_fail'] ;?>');

        <?php unset($_SESSION['group_fail']);}



        if (isset($_SESSION['file_error'])) {?>

        toastr.error('<?php $_SESSION['file_error'];?>');



        <?php unset($_SESSION['file_error']);} if (isset($_SESSION['already_filex'])) {?>

          toastr.error('<?php echo $_SESSION['already_filex']; ?>');

          <?php unset($_SESSION['already_filex']); } 



          if (isset($_SESSION['fail'])) {?>

            toastr.error('<?php echo $_SESSION['fail'] ?>','Failed');

            <?php unset($_SESSION['fail']); }

            if (isset($_SESSION['file_size_error'])) {?>

              toastr.error('<?php echo $_SESSION['file_size_error']; ?>');

              <?php unset($_SESSION['file_size_error']);}?>

</script>