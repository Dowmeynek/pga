<?= $this->include('admin/cssJS/head') ?>
<body>

<div class="container-fluid mt-4">
<div class="container-fluid mt-4">
    <h1 class="text-center">Puerto Galera Academy Teachers</h1>
    <div class="row">
        <div class="col-md-2">
        <?= $this->include('admin/body') ?>
           
        </div>
        
        <div class="col-md-20 offset-md-3">
            <!-- Your table content goes here -->
            <div class="row">
                
                <div class="col-10 mt-5" >
                     <form action="/saveteacher" method="post">

                               <div class="form-group">
                                    <label for="idnum">ID number:</label>
                                    <input type="hidden" name="id" value="<?= isset($teacher['id']) ? $teacher['id'] : '' ?>">
                                        <input type="text" class="form-control" name="idnum" placeholder="Enter ID number"
                                        value="<?= isset($teacher['idnum']) ? $teacher['idnum'] : '' ?>">
                                </div> 

                                <div class="form-group">
                                    <label for="fname">First Name:</label>
                                        <input type="text" class="form-control" name="fname" placeholder="Enter First Name"
                                        value="<?= isset($teacher['fname']) ? $teacher['fname'] : '' ?>">
                                </div> 

                                <div class="form-group">
                                    <label for="mname">Middle Name:</label>
                                        <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name" 
                                        value="<?= isset($teacher['mname']) ? $teacher['mname'] : '' ?>">
                                </div> 

                                <div class="form-group">
                                    <label for="lname">Last Name:</label>
                                        <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" 
                                        value="<?= isset($teacher['lname']) ? $teacher['lname'] : '' ?>">
                                </div> 

                                <div class="form-group">
                                    <label for="dob">Date of Birth:</label>
                                        <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" 
                                        value="<?= isset($teacher['dob']) ? $teacher['dob'] : '' ?>">
                                </div>
                                
                                










                            <button type="submit" class="btn btn-primary">Save</button>
                            </form>  
                <div class="container" style="width: 900px;">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Teacher List</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                         <table class="table table-hover text-nowrap">
                    
                            <thead>
                                    <tr>
                                        <th>ID Number</th>
                                        <th>Firt Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Date of Birth</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($teacher as $teach): ?>
                                    <tr>
                              
                                            <td><?= $teach['idnum'] ?></td>
                                            <td><?= $teach['fname'] ?></td>
                                            <td><?= $teach['mname'] ?></td>
                                            <td><?= $teach['lname'] ?></td>
                                            <td><?= $teach['dob'] ?></td>
                                            <td> <a href="/deleteteacher/<?= $teach['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                            <a href="/editteacher/<?= $teach['id'] ?>" class="btn btn-primary btn-sm">Edit</a></td>
                                           
                                           
                                          
                                     </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </div>
                    <!-- /.card -->
                </div> <!-- /.dito -->
            </div>
        </div>
    </div>
    </div>
</div>

<?= $this->include('admin/cssJS/js') ?>
</body>
