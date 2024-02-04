<!-- Modal HTML -->
<div class="modal fade" id="guaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guardian Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <form action="/saveguardian" method="post">
                    <!-- Add your form fields and content here -->

                    <div class="form-group">
                    <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($guardian['id'])) {echo $guardian['id'];}?>">
                                
                                
                    <label for="gua_fullname">Guardian's Full Name:</label>
                                        <input type="text" class="form-control" name="gua_fullname" placeholder="Enter Guardian's Full Name:"
                                        value="<?php if (isset($gua['gua_fullname'])) {echo $gua['gua_fullname'];}?>">
                                 

                                    <label for="gua_email">Guardian's Email:</label>
                                        <input type="email" class="form-control" name="gua_email" placeholder="Guardian's Email:" 
                                        value="<?php if (isset($gua['gua_email'])) {echo $gua['gua_email'];}?>">
                                 

                                    <label for="gua_occupation">Guardian's Occupation:</label>
                                        <input type="text" class="form-control" name="gua_occupation" placeholder="Guardian's Occupation:" 
                                        value="<?php if (isset($gua['gua_occupation'])) {echo $gua['gua_occupation'];}?>">
                                 
                               
                                    <label for="gua_res_add">Guardian's Residential Address:</label>
                                        <input type="text" class="form-control" name="gua_res_add" placeholder="Enter Guardian's Residential Address" 
                                        value="<?php if (isset($gua['gua_res_add'])) {echo $gua['gua_res_add'];}?>">
                                 

                                    <label for="gua_off_add">Guardian's Office Address:</label>
                                        <input type="text" class="form-control" name="gua_off_add" placeholder="Enter Guardian's Office Address" 
                                        value="<?php if (isset($gua['gua_off_add'])) {echo $gua['gua_off_add'];}?>">
                                 
                                
                                    <label for="gua_mob_num">Guardian's Mobile Number:</label>
                                        <input type="number" class="form-control" name="gua_mob_num" max_length="11" placeholder="Enter Guardian's Mobile Number" 
                                        value="<?php if (isset($gua['gua_mob_num'])) {echo $gua['gua_mob_num'];}?>">
                                 

                                    <label for="gua_off_num">Guardian's Office Number:</label>
                                        <input type="number" class="form-control" name="gua_off_num" max_length="11" placeholder="Enter Guardian's Office Number" 
                                        value="<?php if (isset($gua['gua_off_num'])) {echo $gua['gua_off_num'];}?>">
                                 

                               
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
