<?= $this->include('admin/cssJS/head') ?>
<body>

<div class="container-fluid mt-4">
<div class="container-fluid mt-4">
    <h1 class="text-center">Enrollment Forms</h1>
    <div class="row">
        <div class="col-md-2">
        <?= $this->include('admin/body') ?>
           
        </div>
        
        <div class="col-md-20 offset-md-3">
            <!-- Your table content goes here -->
            <div class="row">
                
            <div class="col-10 mt-5" >
                  
                <div class="container" style="width: 900px;">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Enrollment List</h3>
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
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Nickname</th>
                                        <th>Birthdate</th>
                                        <th>Birthplace</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Telephone Number</th>
                                        <th>Mobile Number</th>
                                        <th>Postal Code</th>
                                        <th>Nationality</th>
                                        <th>Religion</th>
                                        <th>Account ID</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($enrollment as $en): ?>
                                    <tr>
                              
                                            <td><?= $en['id'] ?></td>
                                            <td><?= $en['first_name'] ?></td>
                                            <td><?= $en['middle_name'] ?></td>
                                            <td><?= $en['last_name'] ?></td>
                                            <td><?= $en['nickname'] ?></td>
                                            <td><?= $en['birthdate'] ?></td>
                                            <td><?= $en['birthplace'] ?></td>
                                            <td><?= $en['age'] ?></td>
                                            <td><?= $en['gender'] ?></td>
                                            <td><?= $en['address'] ?></td>
                                            <td><?= $en['tel_num'] ?></td>
                                            <td><?= $en['mobile_num'] ?></td>
                                            <td><?= $en['postal_code'] ?></td>
                                            <td><?= $en['nationality'] ?></td>
                                            <td><?= $en['religion'] ?></td>
                                            <td><?= $en['account_id'] ?></td>
                                            <td><?= $en['status'] ?></td>
                                            <td> <a href="/deleteenroll/<?= $en['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                                            <a href="/editenroll/<?= $en['id'] ?>" class="btn btn-primary btn-sm">Edit</a></td>
                                           
                                           
                                          
                                     </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Parents List</h3>
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
                                        <th>Mother's Fullname</th>
                                        <th>Mother's Residential Address</th>
                                        <th>Mother's Office Address</th>
                                        <th>Mother's Mobile Number</th>
                                        <th>Mother's Office Number</th>
                                        <th>Mother's Email</th>
                                        <th>Mother's Occupation</th>
                                        <th>Father's Fullname</th>
                                        <th>Father's Residential Address</th>
                                        <th>Father's Office Address</th>
                                        <th>Father's Mobile Number</th>
                                        <th>Father's Office Number</th>
                                        <th>Father's Email</th>
                                        <th>Father's Occupation</th>
                                        <th>Account ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($parent as $en): ?>
                                    <tr>
                              
                                            <td><?= $en['id'] ?></td>
                                            <td><?= $en['mother_fullname'] ?></td>
                                            <td><?= $en['mom_res_add'] ?></td>
                                            <td><?= $en['mom_off_add'] ?></td>
                                            <td><?= $en['mom_mob_num'] ?></td>
                                            <td><?= $en['mom_off_num'] ?></td>
                                            <td><?= $en['mother_email'] ?></td>
                                            <td><?= $en['mother_occupation'] ?></td>
                                            <td><?= $en['father_fullname'] ?></td>
                                            <td><?= $en['dad_res_add'] ?></td>
                                            <td><?= $en['dad_off_add'] ?></td>
                                            <td><?= $en['dad_mob_num'] ?></td>
                                            <td><?= $en['dad_off_num'] ?></td>
                                            <td><?= $en['father_email'] ?></td>
                                            <td><?= $en['father_occupation'] ?></td>
                                            <td><?= $en['account_id'] ?></td>
                                            <td> <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                                           
                                           
                                           
                                          
                                     </tr>
                                <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Schools Attended List</h3>
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
                                        <th>Pre-School</th>
                                        <th>Pre-School Level</th>
                                        <th>Pre-School Period</th>
                                        <th>Grade School(G1-G3)</th>
                                        <th>Grade School(G1-G3) Level</th>
                                        <th>Grade School(G1-G3) Period</th>
                                        <th>Grade School(G4-G6)</th>
                                        <th>Grade School(G4-G6) Level</th>
                                        <th>Grade School(G4-G6) Period</th>
                                        <th>Junior High School</th>
                                        <th>Junior High School Level</th>
                                        <th>Junior High School Period</th>
                                        <th>Account ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($schools as $en): ?>
                                    <tr>
                              
                                            <td><?= $en['id'] ?></td>
                                            <td><?= $en['pre_school'] ?></td>
                                            <td><?= $en['pre_sch_level'] ?></td>
                                            <td><?= $en['pre_sch_period'] ?></td>
                                            <td><?= $en['grade_sch_g1_g3'] ?></td>
                                            <td><?= $en['grade_g1_g3_level'] ?></td>
                                            <td><?= $en['grade_g1_g3_period'] ?></td>
                                            <td><?= $en['grade_sch_g4_g6'] ?></td>
                                            <td><?= $en['grade_g4_g6_level'] ?></td>
                                            <td><?= $en['grade_g4_g6_period'] ?></td>
                                            <td><?= $en['junior_sch_g7_g10'] ?></td>
                                            <td><?= $en['junior_g7_g10_level'] ?></td>
                                            <td><?= $en['junior_g7_g10_period'] ?></td>
                                            <td><?= $en['account_id'] ?></td>
                                            <td> <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                                           
                                           
                                           
                                          
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
