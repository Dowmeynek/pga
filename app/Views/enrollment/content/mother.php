<!-- Modal HTML -->
<div class="modal fade" id="motherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mother Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <form action="/savemother" method="post">
                    <!-- Add your form fields and content here -->

                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($mother['id'])) {echo $mother['id'];}?>">
                                
                                
                                    <label for="mother_fullname">Mother's Full Name:</label>
                                        <input type="text" class="form-control" name="mother_fullname" placeholder="Enter Mother's Full Name:"
                                        value="<?php if (isset($mother['mother_fullname'])) {echo $mother['mother_fullname'];}?>">
                                 

                                
                                    <label for="mother_email">Mother's Email:</label>
                                        <input type="email" class="form-control" name="mother_email" placeholder="Mother's Email:" 
                                        value="<?php if (isset($mother['mother_email'])) {echo $mother['mother_email'];}?>">
                                 

                                
                                    <label for="mother_occupation">Mother's Occupation:</label>
                                        <input type="text" class="form-control" name="mother_occupation" placeholder="Mother's Occupation:" 
                                        value="<?php if (isset($mother['mother_occupation'])) {echo $mother['mother_occupation'];}?>">
                                 
                               
                                
                                    <label for="mom_res_add">Mother's Residential Address:</label>
                                        <input type="text" class="form-control" name="mom_res_add" placeholder="Enter Mother's Residential Address" 
                                        value="<?php if (isset($mother['mom_res_add'])) {echo $mother['mom_res_add'];}?>">
                                 

                                
                                    <label for="mom_off_add">Mother's Office Address:</label>
                                        <input type="text" class="form-control" name="mom_off_add" placeholder="Enter Mother's Office Address" 
                                        value="<?php if (isset($mother['mom_off_add'])) {echo $mother['mom_off_add'];}?>">
                                 
                                
                                
                                    <label for="mom_mob_num">Mother's Mobile Number:</label>
                                        <input type="number" class="form-control" name="mom_mob_num" max_length="11" placeholder="Enter Mother's Mobile Number" 
                                        value="<?php if (isset($mother['mom_mob_num'])) {echo $mother['mom_mob_num'];}?>">
                                 

                                
                                    <label for="mom_off_num">Mother's Office Number:</label>
                                        <input type="number" class="form-control" name="mom_off_num" max_length="11" placeholder="Enter Mother's Office Number" 
                                        value="<?php if (isset($mother['mom_off_num'])) {echo $mother['mom_off_num'];}?>">
                                 
                               
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
