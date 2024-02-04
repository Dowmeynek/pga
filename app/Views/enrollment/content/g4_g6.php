<!-- Modal HTML -->
<div class="modal fade" id="g4_g6Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Grade 4 to 6 School Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Your form content goes here -->
                <form action="/saveg4_g6" method="post">
                    <!-- Add your form fields and content here -->

                    <div class="form-group">
                    <input type="hidden" class="form-control" name="id"
                                        value="<?php if (isset($g4_g6['id'])) {echo $g4_g6['id'];}?>">

                    <label for="grade_sch_g4_g6">Grade School(G4-G6):</label>
                                        <input type="text" class="form-control" name="grade_sch_g4_g6" placeholder="Enter Grade School(G4-G6)" 
                                        value="<?php if (isset($g4_g6['grade_sch_g4_g6'])) {echo $g4_g6['grade_sch_g4_g6'];}?>"> 
                                
                                    <label for="grade_g4_g6_level">Grade School(G4-G6) Level:</label>
                                        <input type="text" class="form-control" name="grade_g4_g6_level" placeholder="Enter Grade School(G4-G6) Level:"
                                        value="<?php if (isset($g4_g6['grade_g4_g6_level'])) {echo $g4_g6['grade_g4_g6_level'];}?>"> 

                                    <label for="grade_g4_g6_period">Grade School(G4-G6) Period Covered:</label>
                                        <input type="text" class="form-control" name="grade_g4_g6_period" placeholder="Grade School(G4-G6) Period:" 
                                        value="<?php if (isset($g4_g6['grade_g4_g6_period'])) {echo $g4_g6['grade_g4_g6_period'];}?>"> 
                               
                               
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
