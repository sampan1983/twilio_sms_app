<?php include_once('header.php')?>



<style type="text/css">





.height {
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    height: 360px;
    border-radius: 0px;
}
button#call_button {
    background: #0c8d43 !important;
    max-width: 100% !important;
    opacity: 1 !important;
    border-radius: 4px !important;
    display: flex;
    justify-content: center;
    align-items: baseline;
    gap: 4px;
}
.call-back {
    background: #0c8d43 !important;
    border-radius: 4px !important;
}
button#hangup_button {
    background: #e41010!important;
    max-width: 100% !important;
    border-radius: 4px !important;
    display: flex;
    justify-content: center;
    align-items: baseline;
    gap: 4px;
}
.call-back h1 {
    font-size: 20px;
    text-shadow: none !important;
}
.hang-back h1 {
    font-size: 20px;
    text-shadow: none !important;
}
.hang-back {
    background: #e41010!important;
     border-radius: 4px !important;
}
.plus-icon {
    text-align: center;
    position: absolute;
    margin-top: -14px;
    margin-left: 64px;
    height: auto;
    width: 4%;
}
.plus-icon img {
    width: 100%;
}
.remove-icon img {
    width: 100%;
}
.row.justify-content-center {
    margin: 0px !important;
}
.col-sm-5.pad {
    padding: 0px !important;
}
.calls-design {
    padding-left: 15px;
    padding-right: 15px;
}
.plus-icon i {
    color: #5A5A5A;
    font-size: 12px;
}
.remove-icon i {
    color: #5A5A5A;
}
.remove-icon {
    text-align: end;
    position: absolute;
    top: 22px;
    right: 14px;
    width: 5%;
    cursor: pointer;
}
.call-icon {
    background: #0c8d43 !important;
    width: 44px;
    margin: auto;
    padding: 13px;
    text-align: center;
    border-radius: 50%;
    height: 44px;
    cursor: pointer;
}
.call-icon i {
    color: #fff;
    font-size: 20px !important;
}
input#number {
    font-size: 16px !important;
}
.flex-calls {
    display: flex;
    align-items: center;
    gap: 10px;
}
select#caller_id {
    width: 50% !important;
}
select#tonumber {
    width: 100%;
}
.flex-calls .col-sm-5 {
    max-width: 50% !important;
    flex: 0 0 50% !important;
    padding: 0px !important;
}


   #dialer_table {
            width: 100%;
            font-size: 1.5em;
        }

        #dialer_table tr td {
            text-align: center;
            height: 50px;
            width: 33%;
        }

        #dialer_table #number {
            border-bottom: 1px solid #20a8d8;
            border-top: none;
    border-bottom: 1px solid #20a8d8;
    border-left: none;
    border-right: none;
    outline: none;
    text-align: center;
        }

        #dialer_table #number input {
            width: 100%;
            border: none;
            font-size: 1.6em;
        }
        .form-control:focus {

    box-shadow: none !important;
}

        /* Remove arrows from type number input : Chrome, Safari, Edge, Opera */
        #dialer_table #number input::-webkit-outer-spin-button,
        #dialer_table #number input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Remove arrows from type number input : Firefox */
        #dialer_table #number input[type=number] {
            -moz-appearance: textfield;
        }

        #dialer_table #number input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #cccccc;
            opacity: 1; /* Firefox */
        }

        #dialer_table #number input:-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: #cccccc;
        }

        #dialer_table #number input::-ms-input-placeholder { /* Microsoft Edge */
            color: #cccccc;
        }

        #dialer_table #dialer_call_btn_td {
            color: #ffffff;
            background-color: green;
            border: none;
            cursor: pointer;
            width: 100%;
            text-decoration: none;
            padding: 5px 32px;
            text-align: center;
            display: inline-block;
            margin: 10px 2px 4px 2px;
            transition: all 300ms ease;
            -moz-transition: all 300ms ease;
            --webkit-transition: all 300ms ease;
        }

        #dialer_table #dialer_call_btn_td:hover {
            background-color: #009d00;
        }

        #dialer_table .dialer_num_tr td {
            -webkit-touch-callout: none; /* iOS Safari */
            -webkit-user-select: none; /* Safari */
            -khtml-user-select: none; /* Konqueror HTML */
            -moz-user-select: none; /* Old versions of Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Non-prefixed version, currently supported by Chrome, Edge, Opera and Firefox */
        }

        #dialer_table .dialer_num_tr td:nth-child(1) {
            border-right: 1px solid #fafafa;
        }

        #dialer_table .dialer_num_tr td:nth-child(3) {
            border-left: 1px solid #fafafa;
        }

        #dialer_table .dialer_num_tr:nth-child(1) td,
        #dialer_table .dialer_num_tr:nth-child(2) td,
        #dialer_table .dialer_num_tr:nth-child(3) td,
        #dialer_table .dialer_num_tr:nth-child(4) td {
            border-bottom: 1px solid #fafafa;
        }

        #dialer_table .dialer_num_tr .dialer_num {
            color: #0B559F;
            cursor: pointer;
        }

        #dialer_table .dialer_num_tr .dialer_num:hover {
            background-color: #fafafa;
        }

        #dialer_table .dialer_num_tr:nth-child(0) td {
            border-top: 1px solid #fafafa;
        }

        #dialer_table .dialer_del_td img {
            cursor: pointer;
        }


        @media (min-width: 240px) and (max-width: 480px){

          select#caller_id {
    width: 100% !important;
    margin-bottom: 10px;
}
input#number {
    font-size: 12px !important;
}
.remove-icon {
    width: 7%;
}
.flex-calls .col-sm-5 {
    max-width: 100% !important;
    padding: 0px !important;
}
.flex-calls {
    display: block;
}
select#tonumber {
    width: 100%;
}
.hangup {
    margin-left: 0px;
}
.call-back {
    margin-bottom: 5px;
}
button#call_button {
    margin-bottom: 0px !important;
}
.plus-icon {
    margin-top: -12px;
    margin-left: 32px;
    height: auto;
}
.height {
    height: auto;
}
}


 @media (min-width: 375px) and (max-width: 425px){

.plus-icon {
    margin-top: -12px;
    margin-left: 41px;
    height: auto;
}
}


 @media (min-width: 425px) and (max-width: 480px){

.plus-icon {
    margin-top: -12px;
    margin-left: 50px;
    height: auto;
}
}


        
        
       @media (min-width: 481px) and (max-width: 767px){

          select#caller_id {
    width: 100% !important;
    margin-bottom: 10px;
}
.height {
    height: auto;
}
.call-back {
    margin-bottom: 10px;
}
.plus-icon {
    margin-left: 50px;
}
.flex-calls .col-sm-5 {
    max-width: 100% !important;
    padding: 0px !important;
}
.flex-calls {
    display: block;
}
select#tonumber {
    width: 100%;
}
.hangup {
    margin-left: 0px;
}
button#call_button {
    margin-bottom: 0px;
}
input#number {
    font-size: 12px !important;
}
}



         @media (min-width: 768px) and (max-width: 1000px){

          select#caller_id {
    width: 100% !important;
    margin-bottom: 10px;
}
.flex-calls .col-sm-5 {
    max-width: 100% !important;
    padding: 0px !important;
}
.flex-calls {
    display: block;
}
select#tonumber {
    width: 100%;
}
.hangup {
    margin-left: 0px;
}
.plus-icon {
    margin-top: -12px;
    margin-left: 32px;
}
}

 @media (min-width: 1001px) and (max-width: 1100px){

.plus-icon {
    margin-top: -14px;
    margin-left: 32px;
    width: 5%;
}
.call-back #call_button {
    font-size: 14px !important;
}
.hang-back #hangup_button {
    font-size: 14px !important;
}
}


</style>
<script type="text/javascript" 


      src="//static.twilio.com/libs/twiliojs/1.2/twilio.min.js"></script>



   



    <link href="https://static0.twilio.com/bundles/quickstart/client.css" 


       type="text/css" rel="stylesheet" />

      <?php

    include 'twilio/Services/Twilio/Capability.php';

    $query = $this->db->query("Select * from tapp_twilio_account");

    if ($query->num_rows()>0) {

      $getData = $query->result_array();

      $AccountSid = $getData[0]['twilio_sid'];

      $AuthToken = $getData[0]['twilio_token'];

    }

    if (!empty($getData[0]['app_sid'])) {

    $appSid = $getData[0]['app_sid'];      

    }

    else{

          $appSid = '';

    }

    if (!empty($getData[0]['twilio_sid'])) {

    $AccountSid = $getData[0]['twilio_sid'];      

    }

    else{

          $AccountSid = '';

    }

    if (!empty($getData[0]['twilio_token'])) {

    $AuthToken = $getData[0]['twilio_token'];      

    }

    else{

          $AuthToken = '';

    }

    $capability = new Services_Twilio_Capability($AccountSid,$AuthToken);

    $capability->allowClientOutgoing($appSid);

    $capability->allowClientIncoming('Twilio');

    $token = $capability->generateToken();

      ?>



    <script type="text/javascript">








      Twilio.Device.setup("<?php echo trim($token); ?>",{'debug':true});

      Twilio.Device.ready(function (device)

      {

        $("#log").text("Ready");

      });

      Twilio.Device.error(function (error) 
      {
        // $("#log").text("Error: " + error.message);
         toastr.error(error.message);
      });

      Twilio.Device.connect(function (conn) 

      {

       toastr.success("Successfully established call");

      });

      Twilio.Device.disconnect(function (conn) 

      {

        $("#log").text("Call ended");

      });

      Twilio.Device.incoming(function (conn) 

      {

        $("#log").text("Incoming connection from " + conn.parameters.From);

        // accept the incoming connection and start two-way audio

        conn.accept();

      });



      function call() 

      {

       var phone_number = $("#number").val();

       var caller_id = $("#caller_id").val();

       var myparam = phone_number + "#"+ caller_id;

       if(caller_id == '')

       {

        toastr.info('Please Select Caller ID');    

       }

       else

       {

        params = {"PhoneNumber": myparam};

        Twilio.Device.connect(params);

       }

      }

function onNumberPress(number){
  alert(number);
   var connection = Twilio.Device.activeConnection();
   connection.sendDigits(number);
}

      function hangup() 

      {

        Twilio.Device.disconnectAll();

      }

    </script>



<!-- Main content -->



<head>



<style>


  @media(min-width: 768px) and (max-width: 999px){
    .row.justify-content-center .col-sm-5 {
    flex: 0 0 39.66667%;
    max-width: 39.66667%;
}
input#number {
    font-size: 12px !important;
}
 .call-back #call_button {
    border-color: #0c8d43!important;
    color: #fff!important;
    padding: 6px!important;
    margin-top: 0!important;
    font-size: 14px !important;
    font-weight: 400;
}
.hang-back #hangup_button {
    color: #fff!important;
    padding: 6px!important;
    margin-top: 0!important;
    font-size: 14px !important;
    font-weight: 400;
}
}  


    #call_button { 



    border-color: #0c8d43!important;



    color: #fff!important;






    padding: 6px 6px 0px 6px!important;



    margin-top: 0!important;



        


font-weight: 400;



    }
    .card-body {
        background: #00000012;
    }




   #hangup_button {  



    border-color: #e41010!important;



    color: #fff!important;



    padding: 6px 6px 0px 6px!important;



    margin-top: 0!important;





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



</head>



<main class="main">







  <!-- Breadcrumb -->







  <ol class="breadcrumb">







    <li class="breadcrumb-item">Home</li>







    <!--li class="breadcrumb-item">







      <a href="#">Admin</a>







    </li-->







    <li class="breadcrumb-item active">Outgoing Calls</li>







    <!-- Breadcrumb Menu-->







  







  </ol>







  <div class="container-fluid">







    <div class="animated fadeIn">







      <div class="card">







        <div class="card-header">







          <i class="icon-people"></i> Outgoing Calls







             







            







        </div>







        <div class="card-body">







          <!-- <br> -->






          
          <!-- <div class="row justify-content-center">







            <div class="col-sm-5 pad"> -->










<!-- 
              <button onclick="onNumberPress('1')" class="call btn btn-lg col-sm-5 "> 1 </button>
              <button onclick="onNumberPress('2')" class="call btn btn-lg col-sm-5 "> 2 </button>
              <button onclick="onNumberPress('3')" class="call btn btn-lg col-sm-5 "> 3 </button> -->





              







            <!-- </div>







          </div> -->








            <!-- <br> -->



 <div class="row justify-content-center">

  <div class=" col-sm-5 pad">

    <div class="flex-calls">

  <select name="caller_id" class="form-control" id="caller_id">

  <?php if ($data=='No') 

  {

    echo '<option value="">Select Caller ID</option>';

  } 

  else

  {

   for ($i=0; $i <sizeof($data) ; $i++)

   { 

    if ($i==0) 

    {

     echo '<option value="">Select Caller ID</option><option value="'.$data[$i]['number'].'">'.$data[$i]['number'].'</option>';

     }

    else

    {

     echo '<option value="'.$data[$i]['number'].'">'.$data[$i]['number'].'</option>';

    }

   }

  }

    ?>

  </select>


<div class=" col-sm-5">

  <select name="tonumber" class="form-control" id="tonumber" onchange="get_tonum()">

  <option value="">Select Contact</option>

<?php 

foreach ($contact_data as $key) { ?>

 <option value="<?php echo $key->sender; ?>"><?php echo $key->first_name;?> - <?php echo $key->sender; ?></option> 

<?php } ?>



</select>



              



              </div>



  </div>

</div>

 </div>

  <br>

 <!-- <div class="row justify-content-center">

  







            </div>
 -->




<!--       <br> -->



          <div class="row justify-content-center">







            <div class=" col-sm-5 pad">


             




<!-- Modal -->
        <div class="modal-content height">

            <div class="modal-body">
                <table id="dialer_table">
                    <tr>
                        <td id="number_out" colspan="3">

                          <input style="font-size: 1.3rem;" class="form-control " type="text" id="number" onkeyup="check_blacklist(this.value)" name="number" placeholder="Enter number with country code"><div class="remove-icon">
                      <img src="http://103.173.215.7/democalling/img/backspace-thin-svgrepo-com.svg">
                    </div></td>
                    </tr>
                    <tr class="dialer_num_tr">
                        <td class="dialer_num" onclick="dialerClick('dial', '1')">1</td>
                        <td class="dialer_num" onclick="dialerClick('dial', '2')">2</td>
                        <td class="dialer_num" onclick="dialerClick('dial', '3')">3</td>
                    </tr>
                    <tr class="dialer_num_tr">
                        <td class="dialer_num" onclick="dialerClick('dial', '4')">4</td>
                        <td class="dialer_num" onclick="dialerClick('dial', '5')">5</td>
                        <td class="dialer_num" onclick="dialerClick('dial', '6')">6</td>
                    </tr>
                    <tr class="dialer_num_tr">
                        <td class="dialer_num" onclick="dialerClick('dial', '7')">7</td>
                        <td class="dialer_num" onclick="dialerClick('dial', '8')">8</td>
                        <td class="dialer_num" onclick="dialerClick('dial', '9')">9</td>
                    </tr>
                   <tr class="dialer_num_tr">
                        <td class="dialer_num" onclick="dialerClick('dial', '*')">*</td>
                        <td class="dialer_num" onclick="dialerClick('dial', '0')">0</td>
                        <td class="dialer_num" onclick="dialerClick('dial', '#')">#</td>
                    </tr>
<!--                     <tr class="dialer_num_tr">
                        <td class="dialer_del_td">
                            <img alt="clear" onclick="dialerClick('clear', 'clear')" src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhcyIgZGF0YS1pY29uPSJlcmFzZXIiIHJvbGU9ImltZyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgY2xhc3M9InN2Zy1pbmxpbmUtLWZhIGZhLWVyYXNlciBmYS13LTE2IGZhLTd4Ij48cGF0aCBmaWxsPSIjYjFiMWIxIiBkPSJNNDk3Ljk0MSAyNzMuOTQxYzE4Ljc0NS0xOC43NDUgMTguNzQ1LTQ5LjEzNyAwLTY3Ljg4MmwtMTYwLTE2MGMtMTguNzQ1LTE4Ljc0NS00OS4xMzYtMTguNzQ2LTY3Ljg4MyAwbC0yNTYgMjU2Yy0xOC43NDUgMTguNzQ1LTE4Ljc0NSA0OS4xMzcgMCA2Ny44ODJsOTYgOTZBNDguMDA0IDQ4LjAwNCAwIDAgMCAxNDQgNDgwaDM1NmM2LjYyNyAwIDEyLTUuMzczIDEyLTEydi00MGMwLTYuNjI3LTUuMzczLTEyLTEyLTEySDM1NS44ODNsMTQyLjA1OC0xNDIuMDU5em0tMzAyLjYyNy02Mi42MjdsMTM3LjM3MyAxMzcuMzczTDI2NS4zNzMgNDE2SDE1MC42MjhsLTgwLTgwIDEyNC42ODYtMTI0LjY4NnoiIGNsYXNzPSIiPjwvcGF0aD48L3N2Zz4=" width="22px" title="Clear" />
                        </td>
                        <td class="dialer_num" onclick="dialerClick('dial', 0)">0</td>
                        <td class="dialer_del_td">
                            <img alt="delete" onclick="dialerClick('delete', 'delete')" src="data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhciIgZGF0YS1pY29uPSJiYWNrc3BhY2UiIHJvbGU9ImltZyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgNjQwIDUxMiIgY2xhc3M9InN2Zy1pbmxpbmUtLWZhIGZhLWJhY2tzcGFjZSBmYS13LTIwIGZhLTd4Ij48cGF0aCBmaWxsPSIjREMxQTU5IiBkPSJNNDY5LjY1IDE4MS42NWwtMTEuMzEtMTEuMzFjLTYuMjUtNi4yNS0xNi4zOC02LjI1LTIyLjYzIDBMMzg0IDIyMi4wNmwtNTEuNzItNTEuNzJjLTYuMjUtNi4yNS0xNi4zOC02LjI1LTIyLjYzIDBsLTExLjMxIDExLjMxYy02LjI1IDYuMjUtNi4yNSAxNi4zOCAwIDIyLjYzTDM1MC4wNiAyNTZsLTUxLjcyIDUxLjcyYy02LjI1IDYuMjUtNi4yNSAxNi4zOCAwIDIyLjYzbDExLjMxIDExLjMxYzYuMjUgNi4yNSAxNi4zOCA2LjI1IDIyLjYzIDBMMzg0IDI4OS45NGw1MS43MiA1MS43MmM2LjI1IDYuMjUgMTYuMzggNi4yNSAyMi42MyAwbDExLjMxLTExLjMxYzYuMjUtNi4yNSA2LjI1LTE2LjM4IDAtMjIuNjNMNDE3Ljk0IDI1Nmw1MS43Mi01MS43MmM2LjI0LTYuMjUgNi4yNC0xNi4zOC0uMDEtMjIuNjN6TTU3NiA2NEgyMDUuMjZDMTg4LjI4IDY0IDE3MiA3MC43NCAxNjAgODIuNzRMOS4zNyAyMzMuMzdjLTEyLjUgMTIuNS0xMi41IDMyLjc2IDAgNDUuMjVMMTYwIDQyOS4yNWMxMiAxMiAyOC4yOCAxOC43NSA0NS4yNSAxOC43NUg1NzZjMzUuMzUgMCA2NC0yOC42NSA2NC02NFYxMjhjMC0zNS4zNS0yOC42NS02NC02NC02NHptMTYgMzIwYzAgOC44Mi03LjE4IDE2LTE2IDE2SDIwNS4yNmMtNC4yNyAwLTguMjktMS42Ni0xMS4zMS00LjY5TDU0LjYzIDI1NmwxMzkuMzEtMTM5LjMxYzMuMDItMy4wMiA3LjA0LTQuNjkgMTEuMzEtNC42OUg1NzZjOC44MiAwIDE2IDcuMTggMTYgMTZ2MjU2eiIgY2xhc3M9IiI+PC9wYXRoPjwvc3ZnPg==" width="25px" title="Delete" />
                        </td>
                    </tr> -->
            <!--         <tr>
                        <td colspan="3"><a href="#" type="button" id="dialer_call_btn_td">Call</a></td>
                    </tr> -->
                      

                </table>
                  <br>
                  <div class="row calls-design">
                    <div class="col-sm-6">
                    <div class="call-back">
              <button  class="call btn btn-lg col-sm-5 " id="call_button" onclick="call();">







                <i class="fa fa-phone"></i>







      <h1>Call</h1>







    







              </button>
            </div>
                  </div>
                  <!-- <div class="col-sm-4">
                    <div class="call-icon">
                      <i class="fa fa-phone"></i>
                    </div>
                  </div> -->
                  <div class="col-sm-6">
                    <div class="hang-back">
                    <button class="hangup btn btn-lg col-sm-6" id="hangup_button" onclick="hangup();">







                <i class="fa fa-headphones"></i>







     <h1>Hangup</h1>







    







              </button>
            </div>
                  </div>
            </div>
        </div>




              </div>







            </div>







            <div class="row justify-content-center">







              <!-- <div id="log" class="col-sm-3 btn btn-primary text-center" style="background: #20a8d8;">Ready </div> -->

              <div>

                <!-- <?php echo $AccountSid; echo "<br>"; echo $AuthToken; ?> -->

              </div>





            </div>







          </div>







        </div>







      </div>







    </div>







    <!-- /.conainer-fluid -->







  </main>







</div>

<?php include_once('footer.php')?>



<script>



function check_blacklist(elem) {







  var xhttp = new XMLHttpRequest();







  xhttp.onreadystatechange = function() {



    if (this.readyState == 4 && this.status == 200) {



      document.getElementById("log").innerHTML =



      this.responseText;



      if(this.responseText == 'Ready')



    {



      $('#call_button').prop('disabled', false);

      $('#log').css('background-color','green');



      //document.getElementById('call_button').disabled='false';



    }



    else{



      $('#call_button').prop('disabled', true);



      $('#log').css('background-color','red');



      //document.getElementById('call_button').disabled='true';



    }



    }



  };



  if (elem=='') {



      $('#call_button').prop('disabled', true);



      $('#log').css('background-color','#20a8d8'); 



      document.getElementById("log").innerHTML = 'Ready';  



  //     xhttp.open("GET", 'Outgoing_calls/blackList/'+elem, true);



  // xhttp.send();



  }



  else{







  xhttp.open("GET", 'Outgoing_calls/blackList/'+elem, true);



  xhttp.send();



}



}

function get_tonum() {

  var to_number = $("#tonumber").val();

  $("#number").val(to_number);

}

</script>















<!-- Plugins and scripts required by this views -->







<script src="<?php echo base_url(); ?>vendors/js/jquery.dataTables.min.js"></script>







<script src="<?php echo base_url(); ?>vendors/js/dataTables.bootstrap4.min.js"></script>







<!-- Custom scripts required by this view -->







<script src="<?php echo base_url(); ?>js/views/tables.js"></script>




<script type="text/javascript">
     function dialerClick(type, value) {
        let input = $('#number_out input');
        let input_val = $('#number_out input').val();
        if (type == 'dial') {
            input.val(input_val + value);
        } else if (type == 'delete') {
            input.val(input_val.substring(0, input_val.length - 1));
        } else if (type == 'clear') {
            input.val("");
        }
                 var connection = Twilio.Device.activeConnection();
                    connection.sendDigits(value);
    }
</script>










