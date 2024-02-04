<!-- Modal HTML -->
<div class="modal fade" id="g1_g3Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Grade 1 to 3 School Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <form action="/saveg1_g3" method="post">
                    <!-- Add your form fields and content here -->

                    <div class="form-group">
                    <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($g1_g3['id'])) {echo $g1_g3['id'];}?>">

                    <label for="grade_sch_g1_g3">Grade School(G1-G3):</label>
                                        <input type="text" class="form-control" name="grade_sch_g1_g3" placeholder="Enter Grade School(G1-G3)" 
                                        value="<?php if (isset($g1_g3['grade_sch_g1_g3'])) {echo $g1_g3['grade_sch_g1_g3'];}?>"> 
                                
                                    <label for="grade_g1_g3_level">Grade School(G1-G3) Level:</label>
                                        <input type="text" class="form-control" name="grade_g1_g3_level" placeholder="Enter Grade School(G1-G3) Level:"
                                        value="<?php if (isset($g1_g3['grade_g1_g3_level'])) {echo $g1_g3['grade_g1_g3_level'];}?>"> 

                                    <label for="grade_g1_g3_period">Grade School(G1-G3) Period Covered:</label>
                                        <input type="text" class="form-control" name="grade_g1_g3_period" placeholder="Grade School(G1-G3) Period:" 
                                        value="<?php if (isset($g1_g3['grade_g1_g3_period'])) {echo $g1_g3['grade_g1_g3_period'];}?>"> 
                               
                               
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
