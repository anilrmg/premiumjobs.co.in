<?php require_once("include_about/header.php"); ?>

<div class="jp_tittle_main_wrapper">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_tittle_heading_wrapper">
                    <div class="jp_tittle_heading">
                        <h2>Register</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li>Register</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register_section">
    
    <div class="register_tab_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="col-md-10 col-md-offset-1">
                        <div role="tabpanel">
                            
                            <ul id="tabOne" class="nav register-tabs">
                                <li class="active"><a href="#contentOne-1" data-toggle="tab">Sign Up</a>
                            </li>
                        </ul>
                        <div class="col-md-6 sign-img">
                            <img src="images/secton-img/sign-up.jpg">
                        </div>
                        
                        <div class="col-md-6">
                            <div class="tab-content">
                                <div class="tab-pane fade in active register_left_form" id="contentOne-1">
                                    
                                    <div class="jp_regiter_top_heading">
                                        <p>Fields with * are mandetory </p>
                                    </div>
                                    <div class="row">
                                        
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="field-name" value="" placeholder="Full Name*">
                                        </div>
                                        
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="field-name" value="" placeholder="Email*">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="field-name" value="" placeholder="phone">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="password" name="field-name" value="" placeholder=" Username*">
                                        </div>
                                        
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="password" name="field-name" value="" placeholder=" password*">
                                        </div>
                                        
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <input type="password" name="field-name" value="" placeholder="re-enter password*">
                                        </div>
                                        
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="check-box text-center">
                                                <input type="checkbox" name="shipping-option" id="account-option_1"> &ensp;
                                                <label for="account-option_1">I agreed to the <a href="#" class="check_box_anchr">Terms and Conditions</a> governing the use of jobportal</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                                        <a href="#" class="btn btn-primary login_btn"> register </a>
                                    </div>
                                    <div class="login_message">
                                        <p>Already a member? <a href="login.php"> Login Here </a> </p>
                                    </div>
                                    <div class="borader"></div>
                                </div>
                                <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php require_once("include_about/Footer.php"); ?>