<div class="modal fade" id="professor-modal" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:130px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="ProfessorModal" style="color:white;">Add Professor</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_AddProfessor_modal"></i>
        </div>
        <div class="modal-body" style="padding:0px;">
        <form action="javascript:void(0)" id="ProfessorForm" name="ProfessorForm" class="form-horizontal" method="POST" enctype="multipart/form-data" style="height:400px;">
        <div style="padding:20px;">
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
        </div>
            <!-- <div class="modal-footer" style="display: flex; flex-direction: row; justify-content: center; margin-top:20px;">
            <div style="margin-right:20px;">
                <div class="btn btn-danger" id="cancel_AddProfessor_modal">Cancel
                </div>
            </div>
            <div style="margin-left:20px;">
                <button type="submit" class="btn btn-primary" id="btn-save-professor">Submit
                </button>
            </div>
            </div> -->
            
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);">
                <button class="btn btn-primary" id="cancel_AddProfessor_modal" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button>
                <button class="btn btn-primary" type="submit" id="btn-save-professor" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Submit</button>
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
        <h4 class="modal-title" id="ShowProfessorModal" style="color:white;">Professor</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_ShowProfessor_modal"></i>
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