<div id="addClass_modal">
    <div class="d-xxl-flex flex-column" id="dash_addClass_modal_view" style="width: 650px;height: 500px;background: rgb(217,219,221);margin-top: 50px;border-radius: 10px;">
        <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
            <h5 style="color: rgb(255,255,255);width: 95%;margin-bottom: 0px;">Add New Class</h5><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_addClass_modal"></i>
        </div>
        <div class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-start" style="height: 100%;padding-top: 5px;padding-right: 100px;padding-bottom: px;padding-left: 100px;">
            <h5 style="margin-bottom: 5px;margin-top: 10px;">Name</h5><input type="text" style="width: 100%;">
            <div class="d-xxl-flex">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Courses<i class="fa fa-plus" id="add_courses" style="margin-left: 5px;font-size: 15px;"></i></h5>
            </div>
            <div class="d-xxl-flex flex-row">
                <div class="flex-column"><label class="form-label" style="color: var(--bs-gray-dark);font-size: 12px;margin-bottom: 2px;">Course</label>
                    <div class="dropdown" style="height: 30px;width: 150px;"><button class="btn btn-primary dropdown-toggle text-end" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="border-radius: 0px;border-color: rgb(0,0,0);background: var(--bs-gray-100);height: 30px;font-size: 12px;color: rgb(108,108,108);width: 150px;">Select a course&nbsp;</button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </div>
                </div>
                <div class="d-xxl-flex flex-column justify-content-xxl-end" style="margin-left: 5px;font-size: 12px;"><label class="form-label" style="color: var(--bs-gray-dark);margin-bottom: 2px;">Academic Period</label>
                    <div class="dropdown" style="height: 30px;width: 150px;"><button class="btn btn-primary dropdown-toggle text-end" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="border-radius: 0px;border-color: rgb(0,0,0);background: var(--bs-gray-100);height: 30px;font-size: 12px;color: rgb(108,108,108);width: 150px;">Select academic period&nbsp;</button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                    </div>
                </div>
                <div class="d-xxl-flex flex-column justify-content-xxl-end align-items-xxl-start" style="margin-left: 5px;"><label class="form-label" style="color: var(--bs-gray-dark);font-size: 12px;margin-bottom: 2px;">Meetings Per Week</label><input class="d-xxl-flex align-items-xxl-end" type="number" style="width: 109px;"></div>
                <div class="text-center d-xxl-flex flex-row justify-content-center justify-content-xxl-center align-items-xxl-center" style="margin-left: 5px;"><i class="fa fa-remove d-xxl-flex align-items-xxl-center" id="add_courses" style="margin-left: 13px;font-size: 15px;color: rgb(0,0,0);margin-top: 25px;"></i></div>
            </div>
            <h5 style="margin-bottom: 5px;margin-top: 10px;">Population</h5><input type="text" style="width: 100%;" inputmode="numeric">
            <h5 style="margin-bottom: 5px;margin-top: 10px;">Unavailable Rooms</h5><input type="text" style="width: 100%;" inputmode="numeric">
        </div>
        <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);">
            <button class="btn btn-primary" id="cancel_modal_AddClass" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button>
            <button class="btn btn-primary" type="button" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Add New Class</button>
        </div>
    </div>
</div>