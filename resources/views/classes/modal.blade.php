<div class="modal fade" id="class-modal" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:130px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="ClassModal" style="color:white;">Add Class</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_AddClass_modal"></i>
        </div>
        <div class="modal-body" style="padding:0px;">
        <form action="javascript:void(0)" id="ClassForm" name="ClassForm" class="form-horizontal" method="POST" enctype="multipart/form-data" style="height:400px;">
        <div style="padding:20px;">
            <input type="hidden" name="class_id" id="class_id">
            <div class="form-group">
            <label for="prof_code" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="class_name" name="class_name" placeholder="Enter Name of Class" maxlength="50" required="">
            </div>
            </div>  

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_name" class="col-sm-3 control-label">Population</label>
            <div class="col-sm-12">
                <input type="number" class="form-control" id="class_population" name="class_population" placeholder="No of Students" maxlength="50" required="">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_prof" class="col-sm-4 control-label">Courses Taken</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="class_courses" name="class_courses" placeholder="Enter Class" maxlength="50" required="">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_prof" class="col-sm-4 control-label">Unavailable Rooms</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="class_unv_rooms" name="class_unv_rooms" placeholder="Enter Unavailable Rooms" maxlength="50" required="">
            </div>
            </div>
        </div>
            <!-- <div class="modal-footer" style="display: flex; flex-direction: row; justify-content: center; margin-top:20px;">
            <div style="margin-right:20px;">
                <div class="btn btn-danger" id="cancel_AddClass_modal">Cancel
                </div>
            </div>
            <div style="margin-left:20px;">
                <button type="submit" class="btn btn-primary" id="btn-save-classes">Submit
                </button>
            </div>
            </div> -->
            
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);">
                <button class="btn btn-primary" id="cancel_AddClass_modal" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button>
                <button class="btn btn-primary" type="submit" id="btn-save-class" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Submit</button>
            </div>
        </form>
        </div>
        
    </div>
    </div>
</div>


<div class="modal fade" id="class-modal-show" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:150px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="ShowClassModal" style="color:white;">Class</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_ShowClass_modal"></i>
        </div>
        <div class="modal-body">
        <form action="javascript:void(0)" id="ShowClassForm" name="ShowClassForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="show_class_id" id="show_class_id">
            <div class="form-group">
            <label for="prof_code" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_class_name" name="show_class_name" placeholder="Enter  Name" maxlength="50" required="">
            </div>
            </div>  

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_name" class="col-sm-3 control-label">Population</label>
            <div class="col-sm-12">
                <input type="number" class="form-control" id="show_class_email" name="show_class_email" placeholder="Enter Email" maxlength="50" required="">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_prof" class="col-sm-4 control-label">Courses Taken</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_class_course" name="show_class_course" placeholder="Enter Classs" maxlength="50" required="">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="prof_prof" class="col-sm-4 control-label">Unavailable Rooms</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_class_unvtime" name="show_class_unvtime" placeholder="Enter Unavailable Time" maxlength="50" required="">
            </div>
            </div>


            
        </form>
        </div>
    </div>
    </div>
</div>