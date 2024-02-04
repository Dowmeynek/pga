<!-- Modal HTML -->
<div class="modal fade" id="fatherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Father Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <form action="/savefather" method="post">
                    <!-- Add your form fields and content here -->

                    <div class="form-group">
                    <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($father['id'])) {echo $father['id'];}?>">
                                
                                
                    <label for="father_fullname">Father's Full Name:</label>
                                        <input type="text" class="form-control" name="father_fullname" placeholder="Enter Father's Full Name:"
                                        value="<?php if (isset($father['father_fullname'])) {echo $father['father_fullname'];}?>">
                                 

                                    <label for="father_email">Father's Email:</label>
                                        <input type="email" class="form-control" name="father_email" placeholder="Father's Email:" 
                                        value="<?php if (isset($father['father_email'])) {echo $father['father_email'];}?>">
                                 

                                    <label for="father_occupation">Father's Occupation:</label>
                                        <input type="text" class="form-control" name="father_occupation" placeholder="Father's Occupation:" 
                                        value="<?php if (isset($father['father_occupation'])) {echo $father['father_occupation'];}?>">
                                 
                               
                                    <label for="dad_res_add">Father's Residential Address:</label>
                                        <input type="text" class="form-control" name="dad_res_add" placeholder="Enter Father's Residential Address" 
                                        value="<?php if (isset($father['dad_res_add'])) {echo $father['dad_res_add'];}?>">
                                 

                                    <label for="dad_off_add">Father's Office Address:</label>
                                        <input type="text" class="form-control" name="dad_off_add" placeholder="Enter Father's Office Address" 
                                        value="<?php if (isset($father['dad_off_add'])) {echo $father['dad_off_add'];}?>">
                                 
                                
                                    <label for="dad_mob_num">Father's Mobile Number:</label>
                                        <input type="number" class="form-control" name="dad_mob_num" max_length="11" placeholder="Enter Father's Mobile Number" 
                                        value="<?php if (isset($father['dad_mob_num'])) {echo $father['dad_mob_num'];}?>">
                                 

                                    <label for="dad_off_num">Father's Office Number:</label>
                                        <input type="number" class="form-control" name="dad_off_num" max_length="11" placeholder="Enter Father's Office Number" 
                                        value="<?php if (isset($father['dad_off_num'])) {echo $father['dad_off_num'];}?>">
                                 

                               
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
