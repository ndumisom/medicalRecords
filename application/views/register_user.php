<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html>

    <head>

        <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

        <?php include 'includes.php';?>

        <title><?php echo get_phrase('login');?> | <?php echo $system_title;?></title>

    </head>

    <body>

        <?php if($this->session->flashdata('flash_message') != ""):?>

        <script>

            $(document).ready(function() {

                Growl.info({title:"<?php echo $this->session->flashdata('flash_message');?>",text:" "})

            });

        </script>

        <?php endif;?>

        <div class="navbar navbar-top navbar-inverse">

            <div class="navbar-inner">

                <div class="container-fluid">

                    <a class="brand" href="<?php echo base_url();?>"><?php echo $system_name;?></a>
                   

                </div>

            </div>

        </div>

        <div class="container">

            <div class="span4 offset4">

                <div class="padded">

                    <center>

                        <img src="<?php echo base_url();?>uploads/logo.png" style="height:50px;" />

                    </center>

                    <div class="login box" style="margin-top: 10px;">

                        <div class="box-header">

                            <span class="title"><?php echo get_phrase('Register');?></span>

                        </div>

                        <div class="box-content padded">

                        <i class="m-icon-swapright m-icon-white"></i>

                            <?php echo form_open('register/add_user/adduser/',array('class' => 'validatable') );?>

                
                                <div class="input-prepend">
                                 

                                <label class="control-label"><?php echo get_phrase('name');?></label>


                                    <input type="text" class="validate[required]" name="name"/>
								<label class="control-label"><?php echo get_phrase('Surname');?></label>


                                    <input type="text" class="validate[required]" name="surname"/>	

                                <label class="control-label"><?php echo get_phrase('email');?></label>


                                    <input type="text" class="validate[required]" name="email"/>   

                                <label class="control-label"><?php echo get_phrase('password');?></label>


                                    <input type="text" class="validate[required]" name="password"/> 


                                <label class="control-label"><?php echo get_phrase('address');?></label>


                                    <input type="text" class="validate[required]" name="address"/> 


                                <label class="control-label"><?php echo get_phrase('phone');?></label>


                                    <input type="text" class="validate[required]" name="phone"/> 



                                <label class="control-label"><?php echo get_phrase('sex');?></label>

                                

                                    <select name="sex" class="uniform" style="width:100%;">

                                        <option value="male"><?php echo get_phrase('male');?></option>

                                        <option value="female"><?php echo get_phrase('female');?></option>

                                    </select>


                                

                                <label class="control-label"><?php echo get_phrase('birth_date');?></label>


                                    <input type="text"  class="datepicker fill-up" name="birth_date"/>
                                <label class="control-label"><?php echo get_phrase('next_of_kin_name');?></label>


                                    <input type="text" class="validate[required]" name="next_of_kin_full_name"/> 

                                <label class="control-label"><?php echo get_phrase('next_of_kin_phone');?></label>


                                    <input type="text" class="validate[required]" name="next_of_kin_phone"/>   
      

                                     <div class="form-actions">
                                      <div class="input-prepend">
                                  <button type="submit" class="btn btn-blue"><?php echo get_phrase('Register');?></button>
                                </div>
                                <div class="">
									<button type="button" class="btn btn-blue"><a href="index.php"><?php echo get_phrase('Cancel');?></a></button>
                                </div>   
                                    

                                     </div>

                                 </div>

                                </div>

                                <div class="input-prepend">
                                  
                                </div>

                            <?php echo form_close();?>

                            <div>


                            </div>

                        </div>

                    </div>

                    <?php include 'application/views/footer.php';?>

                </div>

            </div>

        </div>

        

        

        <!-----------password reset form ------>

        <div id="modal-simple" class="modal hide fade">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            <h6 id="modal-tablesLabel"><?php echo get_phrase('reset_password');?></h6>

          </div>

          <div class="modal-body">


          <div class="modal-footer">

            <button class="btn btn-default" data-dismiss="modal">Close</button>

          </div>

        </div>

        <!-----------password reset form ------>

        

        

    </body>

</html>
<style type="text/css">
.login, .box {
    margin-top: 10px;
    height: 800px;
}

.formError .formErrorContent {
    background: #FF0000;
    left: 311px;
}

.formError:after {
    border-top-color: #FF0000;
    border-width: 7px;
    left: 7px;
}

.gritter-item {
    width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    opacity: 0;
    z-index: 100000;
    background-color: green;
    background-color: green;
    overflow: hidden;
    display: none;
    -moz-transition: opacity 1s ease;
    -webkit-transition: opacity 1s ease;
    transition: opacity 1s ease;
}
</style>