<?= $this->include('admin/cssJS/head') ?>
<body>

<div class="container-fluid mt-4">
<div class="container-fluid mt-4">
    <h1 class="text-center">Puerto Galera Academy</h1>
    <div class="row">
        <div class="col-md-2">
        <?= $this->include('admin/body') ?>
           
        </div>
        
        <div class="col-md-20 offset-md-3">
            <!-- Your table content goes here -->
            <div class="row">
                
                <div class="col-10 mt-5" >
                     <form action="/save" method="post">

                               <div class="form-group">
                                    <label for="idnum">ID number:</label>
                                    <input type="hidden" name="idnum" value="<?= isset($enrollmet['idnum']) ? $enrollmet['idnum'] : '' ?>">
                                        <input type="text" class="form-control" name="idnum" placeholder="Enter ID number"
                                        value="<?= isset($enrollment['idnum']) ? $enrollment['idnum'] : '' ?>">
                                </div> 

                                <div class="form-group">
                                    <label for="first_name">First Name:</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name"
                                        value="<?= isset($enrollment['first_name']) ? $enrollment['first_name'] : '' ?>">
                                </div> 

                                <div class="form-group">
                                    <label for="middle_name">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name" placeholder="Enter Middle Name" 
                                        value="<?= isset($enrollment['middle_name']) ? $enrollment['middle_name'] : '' ?>">
                                </div> 

                                <div class="form-group">
                                    <label for="last_name">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" 
                                        value="<?= isset($enrollment['last_name']) ? $enrollment['last_name'] : '' ?>">
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
