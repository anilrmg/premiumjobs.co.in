<?php require_once("include_about/header.php"); ?>
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>employer</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>employer</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
	<div class="jp_adp_main_section_wrapper">
		<div class="container">
			<div class="row">
					<div class="custom-login">
                        <a href="login.php"><button type="button"><i class="fa fa-sign-in"></i> LOGIN</button></a>
                        </div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="jp_adp_form_heading_wrapper">
						<h2>Employee-Details</h2>
					</div>
					<div class="jp_adp_form_wrapper">
						 <input type="text" name="field-name" value="" placeholder="Full Name*">
					</div>
					<div class="jp_adp_form_wrapper">
						 <input type="text" name="field-name" value="" placeholder="Email*">
					</div>
					<div class="jp_adp_form_wrapper">
                        <input type="text" name="field-name" value="" placeholder="phone">
                    </div>
					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">

					<div class="jp_adp_form_heading_wrapper">
						<p>Fields with * are mandetory</p>
					</div>
					<div class="jp_adp_form_wrapper">
						 <input type="password" name="field-name" value="" placeholder=" Username*">
					</div>
					<div class="jp_adp_form_wrapper">
						 <input type="password" name="field-name" value="" placeholder=" password*">
					</div>
					<div class="jp_adp_form_wrapper">
						<input type="password" name="field-name" value="" placeholder="re-enter password*">
					</div>
					
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_textarea_main_wrapper">
						<textarea rows="7" placeholder="Job Description"></textarea>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_adp_choose_resume">
						
						<div class="custom-input">
						  <p><i class="fa fa-upload"></i> &nbsp;Upload file</p>
						  <input type="file" name="resume"/>
						</div>
						 <p>DOC, DOCX, RTF, PDF - 300KB MAX PREFERRED CV FORMAT - DOCX FILE</p>
                        <div class="custom-submit">
                         <button type="button">SUBMIT</button>
                        </div>
					</div>
                
				</div>
				
			</div>
		</div>
	</div>
  
   
  <?php require_once("include_about/footer.php"); ?>