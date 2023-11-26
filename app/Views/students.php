<?= $this->include('cssJS/head') ?>
<body>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
  
    <!-- Main content -->
    <section class="content">
    	<div class="row">
        <div class="col-md-6 mx-auto">
        <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Student</h3>
                    </div><!-- /.box-header -->

                    <!-- Display Flash Messages -->
                    <?php if (session()->has('message')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session('message') ?>
                        </div>
                    <?php elseif (session()->has('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session('error') ?>
                        </div>
                    <?php endif; ?>
                    <form role="form" action="/save" method="post" enctype="multipart/form-data" id="form1" class="form-horizontal">
                		<div class="box-body" >
                        	<div class="row">
                        		<div class="col-md-10">
                                	<p class="alert-info ">Student Details </p>
                                    
                                    <input type="hidden" name="id" value="<?= isset($student['id']) ? $student['id'] : '' ?>">
                                    
                                    <div class="form-group" id="idnum">
                                        <div class="col-xs-3">
                                            <label for="id_number">ID Number</label>
                                        </div>
                                        <div class="col-xs-9" id="id_number">
                                           <input type="text" class="form-control" placeholder="Enter ID number" Name="id_Number" id="id_Number" value="<?= isset($student['id_number']) ? $student['id_number'] : '' ?>"required>  
                                        </div>                    
                                    </div>

                                    <div class="form-group" id="fname">
                                        <div class="col-xs-3">
                                            <label for="first_name">First Name</label>
                                        </div>
                                        <div class="col-xs-9" id="fname">
                                           <input type="text" class="form-control" placeholder="Enter first name" Name="first_name" id="first_name" value="<?= isset($student['first_name']) ? $student['first_name'] : '' ?>"required>  
                                        </div>                    
                                    </div>

                                     <div class="form-group" id="midname">
                                        <div class="col-xs-3">
                                            <label for="middle_name">Middle Name</label>
                                        </div>
                                        <div class="col-xs-9" id="midname">
                                           <input type="text" class="form-control" placeholder="Enter middle name" name="middle_name" id="middle_name" value="<?= isset($student['middle_name']) ? $student['middle_name'] : '' ?>"required>  
                                        </div>                    
                                    </div>

                                    <div class="form-group" id="lastname">
                                        <div class="col-xs-3">
                                            <label for="last_name">Last Name</label>
                                        </div>
                                        <div class="col-xs-9" id="lastname">
                                            <input type="text" class="form-control" placeholder="Enter last name" name="last_name" id="last_name" value="<?= isset($student['last_name']) ? $student['last_name'] : '' ?>"required>
                                        </div>                    
                                    </div>

                                    <div class="form-group" id="address">
                                        <div class="col-xs-3">
                                           <label for="address">Address</label>
                                        </div>
                                        <div class="col-xs-9" id="address1">
                                           <input type="text" class="form-control" placeholder="Enter address" name="address" id="address" value="<?= isset($student['address']) ? $student['address'] : '' ?>"required> 
                                        </div>                    
                                    </div>
                                    <div class="form-group" id="Email">
                                        <div class="col-xs-3">
                                           <label for="email">Email</label>
                                        </div>
                                        <div class="col-xs-9" id="Email1">
                                           <input type="email" class="form-control" placeholder="Enter email address" name="email" id="email" value="<?= isset($student['email']) ? $student['email'] : '' ?>"required> 
                                        </div>                    
                                    </div>

                                   
                        				
                                            
                                            <div class="form-group" id="phone_number">
                                                <div class="col-xs-5">
                                                    <label for="phone_number">Phone</label>
                                                </div>
                                                <div class="col-xs-7" id="phone_number1">
                                                	<input type="tel" class="form-control" id="phone_number" name="phone_number" placeholder="09XXXXXXXXX" value="<?= isset($student['phone_number']) ? $student['phone_number'] : '' ?>"required>
                                                </div> 
                                        	</div>  

                                            <div class="form-group" id="dob">
                                                <div class="col-xs-5">
                                                    <label for="dob">Date of Birth</label>
                                                </div>
                                                <div class="col-xs-7" id="dob1">
                                                	<input type="date" class="form-control" id="dob" name="dob" value="<?= isset($student['dob']) ? $student['dob'] : '' ?>"required >
                                                </div> 
                                        	</div>  

                                            <div class="form-group" id="gender" >
                                                <div class="col-xs-5">
                                                    <label for="gender">Gender</label>
                                                </div>
                                                <div class="col-xs-7" id="gender1">
                                                 	<select name="gender" class="form-control" id="gender" >
                                                        <option>Select Gender</option>
                                                        <option value="Male" <?= (isset($student['gender']) && $student['gender'] === 'Male') ? 'selected' : '' ?>>Male</option>
                                                        <option value="Female" <?= (isset($student['gender']) && $student['gender'] === 'Female') ? 'selected' : '' ?>>Female</option>
                                                    </select>                                          
                                                </div> 
                                        	</div> 
                                               	                   
                                    	
                        			   
                                        	<div class="form-group" id="photo">
                                                <div class="col-xs-3">
                                                    <label>Photo</label>
                                                </div>                            
                                                <div class="col-xs-3" id="photo1" style="height:150px;">
                                                    <img id="output" style="width:130px;height:150px;" />
                                                    <input type="file" name="photo" id="photo" style="margin-top:7px;" value="<?= isset($student['photo']) ? $student['photo'] : '' ?>" />
                                                </div>
                                            </div>
                                       
                                                   
                            	</div>
                       


                  
                            </div><br>
                    	</div>
                        <div class="box-footer text-right">
    <input type="hidden" name="do" value="add_student" />
    <button style="width:150px;" type="submit" class="btn btn-success asd d-flex justify-content-center align-items-center" id="btnSubmit">
        Save
    </button>
</div>

</div>


                   </form>
				</div><!-- /.box -->
			</div>
		</div>
	</section><!-- End of form section -->
    <?= $this->include('cssJS/js') ?>
    </body>