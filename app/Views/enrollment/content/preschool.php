<!-- Modal HTML -->
<div class="modal fade" id="preschoolModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pre-School Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <form action="/savepreschool" method="post">
                    <!-- Add your form fields and content here -->

                    <div class="form-group">
                                        <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($preschool['id'])) {echo $preschool['id'];}?>">

                                    <label for="pre_school">Pre-School(Kinder):</label>
                                        <input type="text" class="form-control" name="pre_school" placeholder="Enter Pre-School(Kinder):"
                                        value="<?php if (isset($preschool['pre_school'])) {echo $preschool['pre_school'];}?>">

                                    <label for="pre_sch_level">Pre-School(Kinder) Level:</label>
                                        <input type="text" class="form-control" name="pre_sch_level" placeholder="Pre-School(Kinder) Level:" 
                                        value="<?php if (isset($preschool['pre_sch_level'])) {echo $preschool['pre_sch_level'];}?>">
                               
                                    <label for="pre_sch_period">Pre-School(Kinder) Period Covered:</label>
                                        <input type="text" class="form-control" name="pre_sch_period" placeholder="Enter Pre-School(Kinder) Period" 
                                        value="<?php if (isset($preschool['pre_sch_period'])) {echo $preschool['pre_sch_period'];}?>">

                               
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
