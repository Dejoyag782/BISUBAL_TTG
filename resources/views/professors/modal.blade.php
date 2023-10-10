<div class="modal fade" id="professor-modal" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:150px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="ProfessorModal" style="color:white;">Add Room</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_AddProfessor_modal"></i>
        </div>
        <div class="modal-body">
        <form action="javascript:void(0)" id="ProfessorForm" name="ProfessorForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="professor_id" id="professor_id">
            <div class="form-group">
            <label for="prof_code" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="professor_name" name="professor_name" placeholder="Enter  Name" maxlength="50" required="">
            </div>
            </div>  

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_name" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-12">
                <input type="email" class="form-control" id="professor_email" name="professor_email" placeholder="Enter Email" maxlength="50" required="">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_prof" class="col-sm-2 control-label">Courses</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="professor_course" name="professor_course" placeholder="Enter Professors" maxlength="50" required="">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_prof" class="col-sm-4 control-label">Unavailable Time</label>
            <div class="col-sm-12">
                <input type="time" class="form-control" id="professor_unvtime" name="professor_unvtime" placeholder="Enter Unavailable Time" maxlength="50" required="">
            </div>
            </div>

            <div class="modal-footer" style="display: flex; flex-direction: row; justify-content: center; margin-top:20px;">
            <div style="margin-right:20px;">
                <div class="btn btn-danger" id="cancel_AddProfessor_modal">Cancel
                </div>
            </div>
            <div style="margin-left:20px;">
                <button type="submit" class="btn btn-primary" id="btn-save-professor">Submit
                </button>
            </div>
            </div>
            
        </form>
        </div>
        
    </div>
    </div>
</div>


<div class="modal fade" id="professor-modal-show" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:150px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="ShowProfessorModal" style="color:white;">Add Room</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_ShowProfessor_modal"></i>
        </div>
        <div class="modal-body">
        <form action="javascript:void(0)" id="ShowProfessorForm" name="ShowProfessorForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="show_prof_id" id="show_prof_id">
            <div class="form-group">
            <label for="prof_code" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_professor_name" name="show_professor_name" placeholder="Enter  Name" maxlength="50" required="">
            </div>
            </div>  

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_name" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_professor_email" name="show_professor_email" placeholder="Enter Email" maxlength="50" required="">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_prof" class="col-sm-2 control-label">Courses</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_professor_course" name="show_professor_course" placeholder="Enter Professors" maxlength="50" required="">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_prof" class="col-sm-4 control-label">Unavailable Time</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_professor_unvtime" name="show_professor_unvtime" placeholder="Enter Unavailable Time" maxlength="50" required="">
            </div>
            </div>


            
        </form>
        </div>
    </div>
    </div>
</div>