<div class="modal fade" id="course-modal" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:150px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="CourseModal" style="color:white;">Add Room</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_AddCourse_modal"></i>
        </div>
        <div class="modal-body" style="padding:0px;">
        <form action="javascript:void(0)" id="CourseForm" name="CourseForm" class="form-horizontal" method="POST" enctype="multipart/form-data" style="height:325px;">
        
        <div style="padding:20px;"> 
            <input type="hidden" name="course_id" id="course_id">
            <div class="form-group">
            <label for="course_code" class="col-sm-3 control-label">Course Code</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="course_code" name="course_code" placeholder="Enter Course Code" maxlength="50" required="">
            </div>
            </div>  

            <div class="form-group" style="margin-top:15px;">
            <label for="course_name" class="col-sm-3 control-label">Course Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="course_name" name="course_name" placeholder="Enter Course Name" maxlength="50" required="">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="course_prof" class="col-sm-2 control-label">Professor</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="course_prof" name="course_prof" placeholder="Enter Professor Name" maxlength="50" required="">
            </div>
            </div>
        </div>
            <!-- <div class="modal-footer" style="display: flex; flex-direction: row; justify-content: center; margin-top:20px;">
                <div style="margin-right:20px;">
                    <div class="btn btn-danger" id="cancel_AddCourse_modal">Cancel
                    </div>
                </div>
                <div style="margin-left:20px;">
                    <button type="submit" class="btn btn-primary" id="btn-save-course">Submit
                    </button>
                </div>
            </div> -->

            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);">
                <button class="btn btn-primary" id="cancel_AddCourse_modal" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button>
                <button class="btn btn-primary" type="submit" id="btn-save-course" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Submit</button>
            </div>
            
        </form>
        </div>
        
    </div>
    </div>
</div>


<div class="modal fade" id="course-modal-show" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:150px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="ShowCourseModal" style="color:white;">Room</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_ShowCourse_modal"></i>
        </div>
        <div class="modal-body">
        <form action="javascript:void(0)" id="ShowCourseForm" name="ShowCourseForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="show_course_id" id="show_course_id">
            <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Course Code</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_course_code" name="show_course_code" placeholder="Enter Room No" maxlength="50" required="" disabled="true">
            </div>
            </div>  

            <div class="form-group" style="margin-top:15px;">
            <label for="name" class="col-sm-3 control-label">Course Name</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_course_name" name="show_course_name" placeholder="Enter Capacity" maxlength="50" required="" disabled="true">
            </div>
            </div>

            <div class="form-group" style="margin-top:15px;">
            <label for="name" class="col-sm-3 control-label">Professor</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_course_prof" name="show_course_prof" placeholder="Enter Capacity" maxlength="50" required="" disabled="true">
            </div>
            </div>


            
        </form>
        </div>
    </div>
    </div>
</div>