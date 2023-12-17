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
                                    <label for="last_name">Age:</label>
                                        <input type="number" class="form-control" name="age" placeholder="Enter Age" 
                                        value="<?php if (isset($enrollment['age'])) {echo $enrollment['age'];}?>">
                                </div> 

                                <div class="form-group">
                                    <label for="last_name">Birthdate:</label>
                                        <input type="date" class="form-control" name="birthdate" placeholder="Enter Birthdate" 
                                        value="<?php if (isset($enrollment['age'])) {echo $enrollment['age'];}?>">
                                </div> 
                               
                                <div class="form-group">
                                    <label for="last_name">Address:</label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter Address" 
                                        value="<?php if (isset($enrollment['address'])) {echo $enrollment['address'];}?>">
                                </div> 
                                
                                <div class="form-group">
                                    <label for="last_name">Phone Number:</label>
                                        <input type="number" class="form-control" name="phone" placeholder="Enter Phone Number" 
                                        value="<?php if (isset($enrollment['phone'])) {echo $enrollment['phone'];}?>">
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
