<?= $this->include('admin/cssJS/head') ?>
<body>

<div class="container-fluid mt-4">
<div class="container-fluid mt-4">
    <h1 class="text-center">Puerto Galera Academy</h1>
    <div class="row">
        <div class="col-md-2">
        <?= $this->include('student/body') ?>
           
        </div>
        
        <div class="col-md-20 offset-md-3">
            <!-- Your table content goes here -->
            <div class="row">

                <div class="col-10 mt-5" >
                <h2>LEARNER</h2>
                     <form action="/save" method="post">

                               <div class="form-group">
                                        <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($enrollment['id'])) {echo $enrollment['id'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name"
                                        value="<?php if (isset($enrollment['first_name'])) {echo $enrollment['first_name'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="middle_name">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name" placeholder="Enter Middle Name" 
                                        value="<?php if (isset($enrollment['middle_name'])) {echo $enrollment['middle_name'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" 
                                        value="<?php if (isset($enrollment['last_name'])) {echo $enrollment['last_name'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="nickname">Nickname:</label>
                                        <input type="text" class="form-control" name="nickname" placeholder="Enter Nickname" 
                                        value="<?php if (isset($enrollment['nickname'])) {echo $enrollment['nickname'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="last_name">Age:</label>
                                        <input type="number" class="form-control" name="age" placeholder="Enter Age" 
                                        value="<?php if (isset($enrollment['age'])) {echo $enrollment['age'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="last_name">Gender:</label>
                                        <input type="text" class="form-control" name="gender" placeholder="Enter Gender" 
                                        value="<?php if (isset($enrollment['gender'])) {echo $enrollment['gender'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="birthdate">Birthdate:</label>
                                        <input type="date" class="form-control" name="birthdate" placeholder="Enter Birthdate" 
                                        value="<?php if (isset($enrollment['birthdate'])) {echo $enrollment['birthdate'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="birthplace">Birthplace:</label>
                                        <input type="text" class="form-control" name="birthplace" placeholder="Enter Birthplace" 
                                        value="<?php if (isset($enrollment['birthplace'])) {echo $enrollment['birthplace'];}?>">
                                </div> 
                               
                                <div class="form-group">
                                    <label for="last_name">Address:</label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter Address" 
                                        value="<?php if (isset($enrollment['address'])) {echo $enrollment['address'];}?>">
                                </div> 
                                
                                <div class="form-group">
                                    <label for="last_name">Telphone Number:</label>
                                        <input type="number" class="form-control" name="tel_num" max_length="11" placeholder="Enter Telephone Number" 
                                        value="<?php if (isset($enrollment['tel_num'])) {echo $enrollment['tel_num'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="last_name">Mobile Number:</label>
                                        <input type="number" class="form-control" name="mobile_num" max_length="11" placeholder="Enter Mobile Number" 
                                        value="<?php if (isset($enrollment['mobile_num'])) {echo $enrollment['mobile_num'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="last_name">Postal Code:</label>
                                        <input type="number" class="form-control" name="postal_code" max_length="4" placeholder="Enter Postal Code" 
                                        value="<?php if (isset($enrollment['postal_code'])) {echo $enrollment['postal_code'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="last_name">Nationality:</label>
                                        <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality" 
                                        value="<?php if (isset($enrollment['nationality'])) {echo $enrollment['nationality'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="last_name">Religion:</label>
                                        <input type="text" class="form-control" name="religion" placeholder="Enter Religion" 
                                        value="<?php if (isset($enrollment['religion'])) {echo $enrollment['religion'];}?>">
                                </div> 

                            <button type="submit" class="btn btn-primary">Save</button>
                            </form>  
            
                    <!-- /.card -->
                </div> <!-- /.dito -->


                <div class="col-10 mt-5" >
                     <form action="/saveparent" method="post">

                               <div class="form-group">
                                        <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($enrollment['id'])) {echo $enrollment['id'];}?>">
                                </div> 
                                <h2>MOTHER</h2>
                                <div class="form-group">
                                    <label for="mother_fullname">Mother's Full Name:</label>
                                        <input type="text" class="form-control" name="mother_fullname" placeholder="Enter Mother's Full Name:"
                                        value="<?php if (isset($enrollment['mother_fullname'])) {echo $enrollment['mother_fullname'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="mother_email">Mother's Email:</label>
                                        <input type="email" class="form-control" name="mother_email" placeholder="Mother's Email:" 
                                        value="<?php if (isset($enrollment['mother_email'])) {echo $enrollment['mother_email'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="mother_occupation">Mother's Occupation:</label>
                                        <input type="text" class="form-control" name="mother_occupation" placeholder="Mother's Occupation:" 
                                        value="<?php if (isset($enrollment['mother_occupation'])) {echo $enrollment['mother_occupation'];}?>">
                                </div> 
                               
                                <div class="form-group">
                                    <label for="mom_res_add">Mother's Residential Address:</label>
                                        <input type="text" class="form-control" name="mom_res_add" placeholder="Enter Mother's Residential Address" 
                                        value="<?php if (isset($enrollment['mom_res_add'])) {echo $enrollment['mom_res_add'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="mom_off_add">Mother's Office Address:</label>
                                        <input type="text" class="form-control" name="mom_off_add" placeholder="Enter Mother's Office Address" 
                                        value="<?php if (isset($enrollment['mom_off_add'])) {echo $enrollment['mom_off_add'];}?>">
                                </div> 
                                
                                <div class="form-group">
                                    <label for="mom_mob_num">Mother's Mobile Number:</label>
                                        <input type="number" class="form-control" name="mom_mob_num" max_length="11" placeholder="Enter Mother's Mobile Number" 
                                        value="<?php if (isset($enrollment['mom_mob_num'])) {echo $enrollment['mom_mob_num'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="mom_off_num">Mother's Office Number:</label>
                                        <input type="number" class="form-control" name="mom_off_num" max_length="11" placeholder="Enter Mother's Office Number" 
                                        value="<?php if (isset($enrollment['mom_off_num'])) {echo $enrollment['mom_off_num'];}?>">
                                </div> 
                                <br>
                                <h2>FATHER</h2>
                                <div class="form-group">
                                    <label for="father_fullname">Father's Full Name:</label>
                                        <input type="text" class="form-control" name="father_fullname" placeholder="Enter Father's Full Name:"
                                        value="<?php if (isset($enrollment['father_fullname'])) {echo $enrollment['father_fullname'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="father_email">Father's Email:</label>
                                        <input type="email" class="form-control" name="father_email" placeholder="Father's Email:" 
                                        value="<?php if (isset($enrollment['father_email'])) {echo $enrollment['father_email'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="father_occupation">Father's Occupation:</label>
                                        <input type="text" class="form-control" name="father_occupation" placeholder="Father's Occupation:" 
                                        value="<?php if (isset($enrollment['father_occupation'])) {echo $enrollment['father_occupation'];}?>">
                                </div> 
                               
                                <div class="form-group">
                                    <label for="dad_res_add">Father's Residential Address:</label>
                                        <input type="text" class="form-control" name="dad_res_add" placeholder="Enter Father's Residential Address" 
                                        value="<?php if (isset($enrollment['dad_res_add'])) {echo $enrollment['dad_res_add'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="dad_off_add">Father's Office Address:</label>
                                        <input type="text" class="form-control" name="dad_off_add" placeholder="Enter Father's Office Address" 
                                        value="<?php if (isset($enrollment['dad_off_add'])) {echo $enrollment['dad_off_add'];}?>">
                                </div> 
                                
                                <div class="form-group">
                                    <label for="dad_mob_num">Father's Mobile Number:</label>
                                        <input type="number" class="form-control" name="dad_mob_num" max_length="11" placeholder="Enter Father's Mobile Number" 
                                        value="<?php if (isset($enrollment['dad_mob_num'])) {echo $enrollment['dad_mob_num'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="dad_off_num">Father's Office Number:</label>
                                        <input type="number" class="form-control" name="dad_off_num" max_length="11" placeholder="Enter Father's Office Number" 
                                        value="<?php if (isset($enrollment['dad_off_num'])) {echo $enrollment['dad_off_num'];}?>">
                                </div> 


                            <button type="submit" class="btn btn-primary">Save</button>
                            </form>  
            
                    <!-- /.card -->
                </div> <!-- /.dito -->

            </div>
        </div>
    </div>
    </div>
</div>

<?= $this->include('admin/cssJS/js') ?>
</body>
