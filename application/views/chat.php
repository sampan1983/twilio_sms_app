<?php include_once('header.php') ?>
 <!-- Main content -->
 <style type="text/css">


  .btn-primary {
    color: #fff;
    background-color: #14bf89 !important;
    border-color: #14bf89 !important;
}
.btn-outline-primary {
    color: #14bf89 !important;
    border-color: #14bf89 !important;
}
.btn-outline-primary:hover {
    color: #fff !important;
    background-color: #14bf89 !important;
    border-color: #14bf89 !important;
}
 .media-body.panel-chat-message2 {
     background-color: #e8f1f3;
 }
 .mut-flx {
    justify-content: left !important;
}
.panel-chat-message2:after {
    bottom: 100%;
    border: solid #e8f1f3;
    content: " ";
    height: 0;
    width: 0;
    position: absolute;
    pointer-events: none;
    border-bottom-color: #e8f1f3;
    border-width: 10px;
    margin-left: -10px;
    rotate: 225deg;
    right: 15px;
    top: -7px;
}
.text-muted {
    font-size: 16px;
    display: flex;
    justify-content: end;
    align-items: center;
}
.col-md-6.padds {
    padding: 0px !important;
    margin: 0px !important;
}
li.media.margin-form {
    justify-content: end;
}
.col-md-12.center-block {
    margin: 0px !important;
    padding: 0px !important;
}
.off-form {
    margin: 0px !important;
    padding: 0px !important;
}
 ul.media-list {
    padding: 0px !important;
}
 .animated.fadeIn .card {
     margin-bottom: 0px;
     height: 54vh;
 }
 .col-md-10.center-block {
    margin-right: 0;
    padding-right: 0;
}
form#sendmsg {
    width: 95%;
    margin: auto;
    margin-top: 10px;
}
.bord-side {
    border: 1px solid #ddd;
}
.container-fluid.bot-side1 {
    padding-bottom: 15px;
}
 .card {
     background: #fff;
     transition: .5s;
     border: 0;
     margin-bottom: 30px;
     border-radius: .55rem;
     position: relative;
     width: 100%;
     box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
 }
 .chat-app .people-list {
     width: 280px;
     position: absolute;
     left: 0;
     top: 0;
     padding: 20px;
     z-index: 7
 }

 .chat-app .chat {
     margin-left: 280px;
     border-left: 1px solid #eaeaea
 }

 .people-list {
     -moz-transition: .5s;
     -o-transition: .5s;
     -webkit-transition: .5s;
     transition: .5s
 }

 .people-list .chat-list li {
     padding: 10px 15px;
     list-style: none;
     border-radius: 3px
 }

 .people-list .chat-list li:hover {
     background: #efefef;
     cursor: pointer
 }

 .people-list .chat-list li.active {
     background: #efefef
 }

 .people-list .chat-list li .name {
     font-size: 15px
 }

 .people-list .chat-list img {
     width: 45px;
     border-radius: 50%
 }

 .people-list img {
     float: left;
     border-radius: 50%
 }

 .people-list .about {
     float: left;
     padding-left: 8px
 }

 .people-list .status {
     color: #999;
     font-size: 13px
 }
 .media.odd-sms {
    justify-content: end;
}
button.btn.btn-primary.chat-right-btn {
    background: #e9ecef !important;
    border-color: #ced4da !important;
    border-radius: 4px 0px 0px 4px !important;
    color: #495057 !important;
    padding: 6.4px 13px !important;
    font-size: 14px;
}
input.form-control {
    font-size: 14px;
}
.media-body.panel-chat-message {
    max-width: fit-content;
    position: relative;
    padding: 18px 20px;
    border-radius: 7px !important;
}
.media-body.panel-chat-message2 {
    max-width: fit-content;
    position: relative;
    padding: 18px 20px;
    border-radius: 7px !important;
}
button.btn.btn-primary.chat-right-btn:focus {
  border-color:1px solid #ddd !important;
    box-shadow: none !important;
}
input.form-control:focus {
    border-color:1px solid #ddd !important;
    box-shadow: none !important;
}
 .chat .chat-header {
     padding: 15px 20px;
     /*border-bottom: 2px solid #f4f7f6*/
 }

 .chat .chat-header img {
     float: left;
     border-radius: 40px;
     width: 40px
 }
.hid-col {
    padding-left: 0px !important;
}
.hidden-sm.text-right {
    padding-right: 0px !important;
}
 .chat .chat-header .chat-about {
     float: left;
     padding-left: 0px
 }

 .chat .chat-history {
     padding: 20px;
     border-bottom: 2px solid #fff
 }

 .chat .chat-history ul {
     padding: 0
 }

 .chat .chat-history ul li {
     list-style: none;
     margin-bottom: 30px
 }

 .chat .chat-history ul li:last-child {
     margin-bottom: 0px
 }

 .chat .chat-history .message-data {
     margin-bottom: 15px
 }

 .chat .chat-history .message-data img {
     border-radius: 40px;
     width: 40px
 }

 .chat .chat-history .message-data-time {
     color: #434651;
     padding-left: 6px
 }

 .chat .chat-history .message {
     color: #444;
     padding: 18px 20px;
     line-height: 26px;
     font-size: 16px;
     border-radius: 7px;
     display: inline-block;
     position: relative
 }

 .chat .chat-history .message:after {
     bottom: 100%;
     left: 7%;
     border: solid transparent;
     content: " ";
     height: 0;
     width: 0;
     position: absolute;
     pointer-events: none;
     border-bottom-color: #fff;
     border-width: 10px;
     margin-left: -10px
 }

 .chat .chat-history .my-message {
     background: #efefef
 }

 .chat .chat-history .my-message:after {
     bottom: 100%;
     left: 30px;
     border: solid transparent;
     content: " ";
     height: 0;
     width: 0;
     position: absolute;
     pointer-events: none;
     border-bottom-color: #efefef;
     border-width: 10px;
     margin-left: -10px
 }

 .chat .chat-history .other-message {
     background: #e8f1f3;
     text-align: right
 }

 .chat .chat-history .other-message:after {
     border-bottom-color: #e8f1f3;
     left: 93%
 }

 .chat .chat-message {
     padding: 20px
 }

 .online,
 .offline,
 .me {
     margin-right: 2px;
     font-size: 8px;
     vertical-align: middle
 }

 .online {
     color: #86c541
 }

 .offline {
     color: #e47297
 }

 .me {
     color: #1d8ecd
 }

 .float-right {
     float: right
 }

 .clearfix:after {
     visibility: hidden;
     display: block;
     font-size: 0;
     content: " ";
     clear: both;
     height: 0
 }

 @media only screen and (max-width: 767px) {
     .chat-app .people-list {
         height: 465px;
         width: 100%;
         overflow-x: auto;
         background: #fff;
         left: -400px;
         display: none
     }
     .chat-app .people-list.open {
         left: 0
     }
     .chat-app .chat {
         margin: 0
     }
     .chat-app .chat .chat-header {
         border-radius: 0.55rem 0.55rem 0 0
     }
     .chat-app .chat-history {
         height: 300px;
         overflow-x: auto
     }
 }

 @media only screen and (min-width: 768px) and (max-width: 992px) {
     .chat-app .chat-list {
         height: 650px;
         overflow-x: auto
     }
     .chat-app .chat-history {
         height: 600px;
         overflow-x: auto
     }
 }

 @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 1) {
     .chat-app .chat-list {
         height: 480px;
         overflow-x: auto
     }
     .chat-app .chat-history {
         height: calc(100vh - 350px);
         overflow-x: auto
     }
 }
 .card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
    height: 300px;
    overflow-y: scroll;
}

     </style>
 <main class="main">

 <!-- Breadcrumb -->

 <ol class="breadcrumb">

 <li class="breadcrumb-item">Home</li>

 <!--li class="breadcrumb-item"><a href="#">Admin</a></li-->

 <li class="breadcrumb-item active">Chat</li>


 </ol>

<!-- chat start -->
<div class="container-fluid bord-txt">
  <div class="bord-side">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="bot-side">
<div class="container-fluid">
<div class="row clearfix">
<div class="col-lg-12">
<!-- <div class="card chat-app"> -->

<div class="chat">
<div class="chat-header clearfix">
<div class="row">
<div class="col-lg-6 hid-col">
<a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
</a>
<div class="chat-about">
<h6 class="m-b-0">You are chatting with : <?php if ($_SESSION['number'] == null) {

   echo "";

 }

 else{echo $_SESSION['number']; } ?></h6>
</div>
</div>
<div class="col-lg-6 hidden-sm text-right">

   <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal"><i class="fa fa-minus fa-sm"></i> Delete chat</button>
<!-- <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a> -->
<a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
<!-- <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
<a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a> -->
</div>
</div>
</div>

<!-- <div class="chat-message clearfix">
<div class="input-group mb-0">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fa fa-send"></i></span>
</div>
<input type="text" class="form-control" placeholder="Enter text here...">
</div>
</div> -->
</div>
<!-- </div> -->
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

<div class="container-fluid bot-side1">

   <div class="animated fadeIn">

   <div class="card">




  <div class="card-body">

  <div class="row">
    <div class="container">

  <div class="col-lg-12">

  <div class="add-btn-group-padding text-center">

  <div class="page-content-inner align-items-center">

  <div class="row">

  <div class="col-md-12 center-block">

  <div class="panel panel-info twillo-chat-panel">



  <div class="panel-body scrollbar" id="style-3">



  <div class="force-overflow">

  <ul class="media-list">



  <?php

  if ($chatdata=='No') {

    echo "";

  }

  else{

for ($i=0; $i <sizeof($chatdata) ; $i++)

{

  // echo $data1['sending_status'];



  if($chatdata[$i]['sending_status']=='S') { ?>

                                   <li class="media">

                   <div class="offset-md-1 col-md-6 off-form">
<small class="text-muted mut-flx"> <?php echo $chatdata[$i]['date_time'];?> </small>
                   <div class="media even-sms">

                   <div class="media-body panel-chat-message" >

                   <?php echo $chatdata[$i]['body'];?>

                  <!--  <br /> -->

                   

                   </div>

                   </div>

                   </div>

                   </li>

                   <?php }

                   else { ?>



     <li class="media margin-form">



                                        <div class="col-md-6 padds">



                                                    <small class="text-muted"> <?php echo $chatdata[$i]['date_time'];?></small>
                                            <div class="media odd-sms">



                                                <div class="media-body panel-chat-message2" >
                                                     
                                                    <?php echo $chatdata[$i]['body'];?>                                                    <br />                                                   



                                                </div>

                                            </div>



                                        </div>

                                    </li><?php } }

                                  }?>







                                </ul>

                </div>

            </div>

            <div class="panel-footer twillo-chat-footer">



            </div>

        </div>

    </div></div>

                                    </div>

              </div>

            </div>
</div>
            </div>

            </div>


          </div>
          <form id="sendmsg">

          <div class="input-group">

                           <input type="hidden" name="number1" value="<?php echo $gettwilio[0]['sender']; ?>">

                   <input type="hidden" name="twilio_num" value="<?php echo $gettwilio[0]['twilio_num']; ?>">
                   <span class="input-group-btn">
                       <button class="btn btn-primary chat-right-btn" type="submit"><i class="fa fa-send"></i></button>

                   </span>
                                            <input type="text" name="msg" required="true" class="form-control" placeholder="Enter Text Here.." oninvalid="this.setCustomValidity('Please Write Your Message First')" oninput="setCustomValidity('')"/>



                                        </div>

                        </form>

        </div>
<!-- </div> -->


      </div>
    </div>
    </div>
</div>
      <!-- /.conainer-fluid -->

    </main>

</div>



  <div class="modal fade" id="myModal">

    <div class="modal-dialog">

      <div class="modal-content">



        <!-- Modal Header -->

        <div class="modal-header">

          <h4 class="modal-title text-center">Delete Conversation?</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>



        <!-- Modal body -->

        <div class="modal-body">

         <div class="row">



                    <div class="col-sm-12">



                    <label>Are you sure you want to Delete Conversation? This action can't be undone.</label>



                    </div>



                  </div>





        </div>



        <!-- Modal footer -->

        <div class="modal-footer">

          <form id="delete" action="Chat/delete" method="POST">







<input type="hidden" name="number1" value="<?php echo $_SESSION['number']; ?>">





          <button type="submit" class="btn btn-primary"><i class="fa fa-dot-circle-o"></i> Submit</button>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </form>

        </div>



      </div>

    </div>

  </div>


<?php include_once('footer.php') ?>


<!-- Plugins and scripts required by this views -->

  <script src="<?php echo base_url(); ?>vendors/js/jquery.dataTables.min.js"></script>

  <script src="<?php echo base_url(); ?>vendors/js/dataTables.bootstrap4.min.js"></script>



  <!-- Custom scripts required by this view -->

  <script src="<?php echo base_url(); ?>js/views/tables.js"></script>

<script type="text/javascript">

  $('#sendmsg').submit(function(evt){

    evt.preventDefault();

    var form = $(this).serialize();
console.log(form);
    $.ajax({

            type : 'ajax',

            method : 'post',

            data : form,

            dataType : 'json',

            url : '<?php echo base_url();?>Chat/sendmsg',

            success:function(r){

              console.log(r);

             location.reload();

            },

            error:function(xhr,status,error){

              console.log(xhr.responseText);

            }

    });

  });

</script>



<script type="text/javascript">

<?php if(isset($_SESSION['true']) && $_SESSION['true']=="200"){ ?>



  toastr.success('Message deleted successfully');

 <?php unset($_SESSION['true']); } if(isset($_SESSION['true']) && $_SESSION['true']=="201") { ?>



    toastr.error('Message not deleted','Failed');

 <?php unset($_SESSION['true']); } ?>



 <?php if(isset($_SESSION['fail_chat'])) {?>



  toastr.error("<?php echo $_SESSION['fail_chat']; ?>");



  <?php unset($_SESSION['fail_chat']); } ?>

</script>
