<!-- Modal HTML -->
<div class="modal fade" id="juniorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Junior School Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <form action="/savejunior" method="post">
                    <!-- Add your form fields and content here -->

                    <div class="form-group">
                    <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($junior['id'])) {echo $junior['id'];}?>">
                                
                                
                                        <label for="junior_sch_g7_g10">Junior High School(G7-G10):</label>
                                        <input type="text" class="form-control" name="junior_sch_g7_g10" placeholder="Enter Junior High School(G4-G6)" 
                                        value="<?php if (isset($junior['junior_sch_g7_g10'])) {echo $junior['junior_sch_g7_g10'];}?>">

                                    <label for="junior_g7_g10_level">Junior High School(G7-G10) Level:</label>
                                        <input type="text" class="form-control" name="junior_g7_g10_level" placeholder="Enter Junior High School(G7-G10) Level" 
                                        value="<?php if (isset($junior['junior_g7_g10_level'])) {echo $junior['junior_g7_g10_level'];}?>">

                                    <label for="junior_g7_g10_period">Junior High School(G7-G10) Period Covered:</label>
                                        <input type="text" class="form-control" name="junior_g7_g10_period" placeholder="Enter Junior High School(G7-G10) Period" 
                                        value="<?php if (isset($junior['junior_g7_g10_period'])) {echo $junior['junior_g7_g10_period'];}?>">

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
