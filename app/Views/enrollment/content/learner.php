<!-- Modal HTML -->
<div class="modal fade" id="learnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Learner Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <form action="/save" method="post">
                    <!-- Add your form fields and content here -->

                    <div class="form-group">
                
                                        <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($learner['id'])) {echo $learner['id'];}?>">
                        

                            
                                    <label for="first_name">First Name:</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Enter First Name"
                                        value="<?php if (isset($learner['first_name'])) {echo $learner['first_name'];}?>">
                        

                            
                                    <label for="middle_name">Middle Name:</label>
                                        <input type="text" class="form-control" name="middle_name" placeholder="Enter Middle Name" 
                                        value="<?php if (isset($learner['middle_name'])) {echo $learner['middle_name'];}?>">
                        

                            
                                    <label for="last_name">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" 
                                        value="<?php if (isset($learner['last_name'])) {echo $learner['last_name'];}?>">
                        

                            
                                    <label for="nickname">Nickname:</label>
                                        <input type="text" class="form-control" name="nickname" placeholder="Enter Nickname" 
                                        value="<?php if (isset($learner['nickname'])) {echo $learner['nickname'];}?>">
                        

                            
                                    <label for="last_name">Age:</label>
                                        <input type="number" class="form-control" name="age" placeholder="Enter Age" 
                                        value="<?php if (isset($learner['age'])) {echo $learner['age'];}?>">
                        

                            
                                    <label for="last_name">Gender:</label>
                                        <input type="text" class="form-control" name="gender" placeholder="Enter Gender" 
                                        value="<?php if (isset($learner['gender'])) {echo $learner['gender'];}?>">
                        

                            
                                    <label for="birthdate">Birthdate:</label>
                                        <input type="date" class="form-control" name="birthdate" placeholder="Enter Birthdate" 
                                        value="<?php if (isset($learner['birthdate'])) {echo $learner['birthdate'];}?>">
                        

                            
                                    <label for="birthplace">Birthplace:</label>
                                        <input type="text" class="form-control" name="birthplace" placeholder="Enter Birthplace" 
                                        value="<?php if (isset($learner['birthplace'])) {echo $learner['birthplace'];}?>">
                        
                               
                            
                                    <label for="last_name">Address:</label>
                                        <input type="text" class="form-control" name="address" placeholder="Enter Address" 
                                        value="<?php if (isset($learner['address'])) {echo $learner['address'];}?>">
                        
                                
                            
                                    <label for="last_name">Telphone Number:</label>
                                        <input type="number" class="form-control" name="tel_num" max_length="11" placeholder="Enter Telephone Number" 
                                        value="<?php if (isset($learner['tel_num'])) {echo $learner['tel_num'];}?>">
                        

                            
                                    <label for="last_name">Mobile Number:</label>
                                        <input type="number" class="form-control" name="mobile_num" max_length="11" placeholder="Enter Mobile Number" 
                                        value="<?php if (isset($learner['mobile_num'])) {echo $learner['mobile_num'];}?>">
                        

                            
                                    <label for="last_name">Postal Code:</label>
                                        <input type="number" class="form-control" name="postal_code" max_length="4" placeholder="Enter Postal Code" 
                                        value="<?php if (isset($learner['postal_code'])) {echo $learner['postal_code'];}?>">
                        

                            
                                    <label for="last_name">Nationality:</label>
                                        <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality" 
                                        value="<?php if (isset($learner['nationality'])) {echo $learner['nationality'];}?>">
                        

                            
                                    <label for="last_name">Religion:</label>
                                        <input type="text" class="form-control" name="religion" placeholder="Enter Religion" 
                                        value="<?php if (isset($learner['religion'])) {echo $learner['religion'];}?>">
                        

                    </div>
                    
                    <!-- Add other form fields as needed -->
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
