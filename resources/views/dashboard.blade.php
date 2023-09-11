@extends('layouts.app')

@section('content')
<div id="form_cont">
        <div class="d-xxl-flex flex-column" id="Dash_CreateTT_Modal_Viewer" style="width: 650px;height: 500px;background: rgb(217,219,221);margin-top: 50px;border-radius: 10px;">
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
                <h5 style="color: rgb(255,255,255);width: 95%;margin-bottom: 0px;">Create New Timetable Set</h5><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_modal"></i>
            </div>
            <div style="height: 100%;padding-top: 5px;padding-right: 100px;padding-bottom: px;padding-left: 100px;">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Timetable Name</h5><input type="text" style="width: 100%;">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Academic period</h5>
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle text-start" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 100%;background: rgb(255,255,255);color: rgb(119,117,117);border-radius: 0px;">Select an academic period&nbsp;</button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a></div>
                </div>
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Select Days</h5>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1"><strong>Monday</strong></label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-1"><strong>Tuesday</strong></label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-1"><strong>Wednesday</strong></label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-1"><strong>Thursday</strong></label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-1"><strong>Friday</strong></label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-1"><strong>Saturday</strong></label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-1"><strong>Sunday</strong></label></div>
            </div>
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);"><button class="btn btn-primary" id="cancel_modal_GenTT" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button><button class="btn btn-primary" type="button" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Generate</button></div>
        </div>
    </div>
    <div id="addRoom_modal">
        <div class="d-xxl-flex flex-column" id="dash_addroom_modal_view" style="width: 650px;height: 500px;background: rgb(217,219,221);margin-top: 50px;border-radius: 10px;">
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
                <h5 style="color: rgb(255,255,255);width: 95%;margin-bottom: 0px;">Add New Room</h5><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_addRoom_modal"></i>
            </div>
            <div class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-start" style="height: 100%;padding-top: 5px;padding-right: 100px;padding-bottom: px;padding-left: 100px;">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Room No</h5><input type="text" style="width: 100%;">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Capacity</h5><input type="text" style="width: 100%;" inputmode="numeric">
            </div>
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);"><button class="btn btn-primary" id="cancel_modal_AddRoom" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button><button class="btn btn-primary" type="button" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Add Room</button></div>
        </div>
    </div>
    <div id="addCourse_modal">
        <div class="d-xxl-flex flex-column" id="dash_addcourse_modal_view" style="width: 650px;height: 500px;background: rgb(217,219,221);margin-top: 50px;border-radius: 10px;">
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
                <h5 style="color: rgb(255,255,255);width: 95%;margin-bottom: 0px;">Add New Course</h5><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_addCourse_modal"></i>
            </div>
            <div class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-start" style="height: 100%;padding-top: 5px;padding-right: 100px;padding-bottom: px;padding-left: 100px;">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Name</h5><input type="text" style="width: 100%;">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Course Code</h5><input type="text" style="width: 100%;" inputmode="numeric">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Professors</h5><input type="text" style="width: 100%;" inputmode="numeric">
            </div>
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);"><button class="btn btn-primary" id="cancel_modal_AddCourse" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button><button class="btn btn-primary" type="button" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Add Course</button></div>
        </div>
    </div>
    <div id="addProfessor_modal">
        <div class="d-xxl-flex flex-column" id="dash_addprofessor_modal_view" style="width: 650px;height: 500px;background: rgb(217,219,221);margin-top: 50px;border-radius: 10px;">
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
                <h5 style="color: rgb(255,255,255);width: 95%;margin-bottom: 0px;">Add New Professor</h5><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_addProfessor_modal"></i>
            </div>
            <div class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-start" style="height: 100%;padding-top: 5px;padding-right: 100px;padding-bottom: px;padding-left: 100px;">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Name</h5><input type="text" style="width: 100%;">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Email</h5><input type="text" style="width: 100%;" inputmode="numeric">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Courses</h5><input type="text" style="width: 100%;" inputmode="numeric">
                <h5 style="margin-bottom: 5px;margin-top: 10px;">Unavailable Periods</h5><input type="text" style="width: 100%;" inputmode="numeric">
            </div>
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);"><button class="btn btn-primary" id="cancel_modal_AddProfessor" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button><button class="btn btn-primary" type="button" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Add Professor</button></div>
        </div>
    </div>
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
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);"><button class="btn btn-primary" id="cancel_modal_AddClass" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button><button class="btn btn-primary" type="button" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Add New Class</button></div>
        </div>
    </div>
    <div id="addPeriod_modal">
        <div class="d-xxl-flex flex-column" id="dash_addPeriod_modal_view" style="width: 650px;height: 500px;background: rgb(217,219,221);margin-top: 50px;border-radius: 10px;">
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
                <h5 style="color: rgb(255,255,255);width: 95%;margin-bottom: 0px;">Add New Class</h5><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_addPeriod_modal"></i>
            </div>
            <div class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-start" style="height: 100%;padding-top: 5px;padding-right: 100px;padding-bottom: px;padding-left: 100px;">
                <div class="d-xxl-flex" style="margin-left: 65px;">
                    <h5 style="margin-bottom: 5px;margin-top: 10px;">Time</h5>
                </div>
                <div class="d-xxl-flex flex-row" style="margin-left: 65px;">
                    <div class="flex-column"><label class="form-label" style="color: var(--bs-gray-dark);font-size: 12px;margin-bottom: 2px;">Start</label>
                        <div class="dropdown" style="height: 30px;width: 150px;"><button class="btn btn-primary dropdown-toggle text-end" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="border-radius: 0px;border-color: rgb(0,0,0);background: var(--bs-gray-100);height: 30px;font-size: 12px;color: rgb(108,108,108);width: 150px;">00:00</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </div>
                    <div class="d-xxl-flex flex-column justify-content-xxl-end" style="margin-left: 5px;font-size: 12px;"><label class="form-label" style="color: var(--bs-gray-dark);margin-bottom: 2px;">End</label>
                        <div class="dropdown" style="height: 30px;width: 150px;"><button class="btn btn-primary dropdown-toggle text-end" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="border-radius: 0px;border-color: rgb(0,0,0);background: var(--bs-gray-100);height: 30px;font-size: 12px;color: rgb(108,108,108);width: 150px;">00:00</button>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);"><button class="btn btn-primary" id="cancel_modal_AddPeriod" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button><button class="btn btn-primary" type="button" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Add New Period</button></div>
        </div>
    </div>
    <section>
        <div class="container subsection">
            <div class="row">
                <!--Main View Container-->
                <div class="col-md-6 left-col" id="left-container">
                    <div class="d-xxl-flex flex-column align-items-xxl-center left-nav-container" id="left-nav-container">
                        <div class="d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center left-nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" data-aos="fade-right" data-aos-once="true" id="left-nav-item-dash" title="Dashboard">
                            <div class="d-sm-flex d-md-flex justify-content-sm-center align-items-sm-center justify-content-md-center align-items-md-end justify-content-lg-start align-items-lg-center justify-content-xl-start align-items-xl-center justify-content-xxl-start align-items-xxl-center left-nav-item-subcont" style="width: 100%;height: 100%;"><i class="fa fa-dashboard" style="padding-right: 10px;font-size: 25px;"></i>
                                <h4 class="nav-item-name">Dashboard</h4>
                            </div>
                        </div>
                        <div class="d-xl-flex d-xxl-flex align-content-center justify-content-xl-start justify-content-xxl-center align-items-xxl-center left-nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" data-aos="fade-right" data-aos-delay="100" data-aos-once="true" id="left-nav-item-rooms" title="Rooms">
                            <div class="d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-start align-items-lg-center justify-content-xl-start align-items-xl-center justify-content-xxl-start align-items-xxl-center left-nav-item-subcont" style="width: 100%;height: 100%;"><i class="fa fa-home" style="padding-right: 10px;font-size: 25px;"></i>
                                <h4 class="nav-item-name">Rooms</h4>
                            </div>
                        </div>
                        <div class="d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center left-nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" data-aos="fade-right" data-aos-delay="150" data-aos-once="true" id="left-nav-item-courses" title="Courses">
                            <div class="d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-start align-items-lg-center justify-content-xl-start align-items-xl-center justify-content-xxl-start align-items-xxl-center left-nav-item-subcont" style="width: 100%;height: 100%;"><i class="fa fa-book" style="padding-right: 10px;font-size: 25px;"></i>
                                <h4 class="nav-item-name">Courses</h4>
                            </div>
                        </div>
                        <div class="d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center left-nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" data-aos="fade-right" data-aos-delay="200" data-aos-once="true" id="left-nav-item-professors" title="Professors">
                            <div class="d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-start align-items-lg-center justify-content-xl-start align-items-xl-center justify-content-xxl-start align-items-xxl-center left-nav-item-subcont" style="width: 100%;height: 100%;"><i class="fa fa-graduation-cap" style="padding-right: 10px;font-size: 25px;"></i>
                                <h4 class="nav-item-name">Professors</h4>
                            </div>
                        </div>
                        <div class="d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center left-nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" data-aos="fade-right" data-aos-delay="250" id="left-nav-item-classes" title="Classes">
                            <div class="d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-start align-items-lg-center justify-content-xl-start align-items-xl-center justify-content-xxl-start align-items-xxl-center left-nav-item-subcont" style="width: 100%;height: 100%;"><i class="fa fa-users" style="padding-right: 10px;font-size: 25px;"></i>
                                <h4 class="nav-item-name">Classes</h4>
                            </div>
                        </div>
                        <div class="d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center left-nav-item" data-bs-toggle="tooltip" data-bss-tooltip="" data-bs-placement="right" data-aos="fade-right" data-aos-delay="300" data-aos-once="true" id="left-nav-item-periods" title="Periods">
                            <div class="d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-sm-center align-items-sm-center justify-content-md-center justify-content-lg-start align-items-lg-center justify-content-xl-start align-items-xl-center justify-content-xxl-start align-items-xxl-center left-nav-item-subcont" style="width: 100%;height: 100%;"><i class="fa fa-clock-o" style="padding-right: 10px;font-size: 25px;"></i>
                                <h4 class="nav-item-name">Periods</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Left Nav Container-->
                <div class="col-md-6 main-container" id="main-container">
                    <!--Dash View Container-->
                    <div id="dash-container" class="main-contained-viewbox">
                        <div class="row">
                            <div class="col text-center d-xxl-flex justify-content-xxl-center main-dash-top-item-container">
                                <div class="d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center main-dash-top-item" id="main-dash-top-item1">
                                    <div class="left-nav-item-subcont" style="width: 100%;height: 100%;">
                                        <h4>Classrooms</h4>
                                        <h1>0</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center main-dash-top-item-container">
                                <div class="text-center d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center main-dash-top-item" id="main-dash-top-item-2">
                                    <div class="left-nav-item-subcont" style="width: 100%;height: 100%;">
                                        <h4>Courses</h4>
                                        <h1>0</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center main-dash-top-item-container">
                                <div class="text-center d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center main-dash-top-item" id="main-dash-top-item-3">
                                    <div class="left-nav-item-subcont" style="width: 100%;height: 100%;">
                                        <h4>Professors</h4>
                                        <h1>0</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center main-dash-top-item-container">
                                <div class="text-center d-xxl-flex align-content-center justify-content-xxl-center align-items-xxl-center main-dash-top-item" id="main-dash-top-item-4">
                                    <div class="left-nav-item-subcont" style="width: 100%;height: 100%;">
                                        <h4>Classes</h4>
                                        <h1>0</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col text-center"><button class="btn btn-primary generate-ttb" id="open_modal" type="button">GENERATE TIMETABLE</button></div>
                        </div>
                        <div class="table-responsive bg-light" style="margin-top: 20px;color: rgb(255,255,255);">
                            <table class="table table-striped table-hover">
                                <thead style="background: linear-gradient(180deg, #fd7e14 0%, rgb(183,91,15) 96%, #000000 100%, rgb(121,60,10) 100%);color: var(--bs-gray-300);">
                                    <tr style="border: 3px solid var(--bs-gray-800) ;">
                                        <th>Timetable Name</th>
                                        <th>Status&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</th>
                                        <th style="width: 100px;">Print</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                        <td><button class="btn btn-primary" type="button"><strong>Print</strong></button></td>
                                    </tr>
                                    <tr>
                                        <td>Cell 4</td>
                                        <td>Cell 5</td>
                                        <td><button class="btn btn-primary" type="button"><strong>Print</strong></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Room View Container-->
                    <div id="room-container" class="main-contained-viewbox">
                        <div class="row Search-add-sector" style="margin-top: 10px;">
                            <div class="col text-center d-xxl-flex justify-content-xxl-start align-items-xxl-center">
                                <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="width: 100%;color: rgb(255,255,255);background: var(--bs-blue);height: 100%;"><input type="search" class="room-search" placeholder="Search Input here..."><i class="fa fa-search" style="font-size: 25px;padding: 4px;"></i></div>
                            </div>
                            <div class="col text-center d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-end align-items-center justify-content-sm-end align-items-sm-center justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xxl-end align-items-xxl-center"><button class="btn btn-primary d-xxl-flex align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" id="open_addRoom_modal" type="button" style="height: 35px;width: auto; margin:5px;"><i class="fa fa-plus" style="font-size: 10px;padding-right:10px; font-size:20px;"></i>Add New Room</button></div>
                        </div>
                        <div class="table-responsive" style="margin-top: 20px;color: rgb(255,255,255);">
                            <table class="table table-striped table-hover">
                                <thead style="background: linear-gradient(180deg, #fd7e14 0%, rgb(183,91,15) 96%, #000000 100%, rgb(121,60,10) 100%);color: var(--bs-gray-300);">
                                    <tr style="border: 3px solid var(--bs-gray-800) ;">
                                        <th>Room Number</th>
                                        <th>Capacity&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</th>
                                        <th style="width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Room No#</td>
                                        <td>000</td>
                                        <td class="d-flex flex-row">
                                            <div style="height: 30px;width: 50%;margin-right: 5px;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;"><i class="fa fa-pencil"></i></button></div>
                                            <div style="height: 30px;width: 50%;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;background: var(--bs-red);"><i class="fa fa-trash-o"></i></button></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Room No#</td>
                                        <td>000</td>
                                        <td class="d-flex flex-row">
                                            <div style="height: 30px;width: 50%;margin-right: 5px;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;"><i class="fa fa-pencil"></i></button></div>
                                            <div style="height: 30px;width: 50%;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;background: var(--bs-red);"><i class="fa fa-trash-o"></i></button></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Room No#</td>
                                        <td>000</td>
                                        <td class="d-flex flex-row">
                                            <div style="height: 30px;width: 50%;margin-right: 5px;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;"><i class="fa fa-pencil"></i></button></div>
                                            <div style="height: 30px;width: 50%;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;background: var(--bs-red);"><i class="fa fa-trash-o"></i></button></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Courses View Container-->
                    <div id="courses-container" class="main-contained-viewbox">
                        <div class="row Search-add-sector" style="margin-top: 10px;">
                            <div class="col text-center d-xxl-flex justify-content-xxl-start align-items-xxl-center">
                                <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="width: 100%;color: rgb(255,255,255);background: var(--bs-blue);height: 100%;"><input type="search" class="room-search" placeholder="Search Input here..."><i class="fa fa-search" style="font-size: 25px;padding: 4px;"></i></div>
                            </div>
                            <div class="col text-center d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-end align-items-center justify-content-sm-end align-items-sm-center justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xxl-end align-items-xxl-center"><button class="btn btn-primary d-xxl-flex align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" id="open_addCourse_modal" type="button" style="height: 35px;width: auto; margin:5px;"><i class="fa fa-plus" style="font-size: 10px;padding-right:10px; font-size:20px;"></i>Add New Course</button></div>
                        </div>
                        <div class="table-responsive" style="margin-top: 20px;color: rgb(255,255,255);">
                            <table class="table table-striped table-hover">
                                <thead style="background: linear-gradient(180deg, #fd7e14 0%, rgb(183,91,15) 96%, #000000 100%, rgb(121,60,10) 100%);color: var(--bs-gray-300);">
                                    <tr style="border: 3px solid var(--bs-gray-800) ;">
                                        <th>Course Code</th>
                                        <th>Name</th>
                                        <th>Professor&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</th>
                                        <th style="width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Course Code#</td>
                                        <td>Course Name</td>
                                        <td>Prof Name</td>
                                        <td class="d-flex flex-row">
                                            <div style="height: 30px;width: 50%;margin-right: 5px;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;"><i class="fa fa-pencil"></i></button></div>
                                            <div style="height: 30px;width: 50%;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;background: var(--bs-red);"><i class="fa fa-trash-o"></i></button></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Professors View Container-->
                    <div id="professors-container" class="main-contained-viewbox">
                        <div class="row Search-add-sector" style="margin-top: 10px;">
                            <div class="col text-center d-xxl-flex justify-content-xxl-start align-items-xxl-center">
                                <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="width: 100%;color: rgb(255,255,255);background: var(--bs-blue);height: 100%;"><input type="search" class="room-search" placeholder="Search Input here..."><i class="fa fa-search" style="font-size: 25px;padding: 4px;"></i></div>
                            </div>
                            <div class="col text-center d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-end align-items-center justify-content-sm-end align-items-sm-center justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xxl-end align-items-xxl-center"><button class="btn btn-primary d-xxl-flex align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" id="open_addProfessor_modal" type="button" style="height: 35px;width: auto; margin:5px;"><i class="fa fa-plus" style="font-size: 10px;padding-right:10px; font-size:20px;"></i>Add New Professor</button></div>
                        </div>
                        <div class="table-responsive" style="margin-top: 20px;color: rgb(255,255,255);">
                            <table class="table table-striped table-hover">
                                <thead style="background: linear-gradient(180deg, #fd7e14 0%, rgb(183,91,15) 96%, #000000 100%, rgb(121,60,10) 100%);color: var(--bs-gray-300);">
                                    <tr style="border: 3px solid var(--bs-gray-800) ;">
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Courses Mentoring&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</th>
                                        <th>Unavailable Periods</th>
                                        <th style="width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Prof Name</td>
                                        <td>Prof Email</td>
                                        <td>Course Name</td>
                                        <td>0:00 - 0:00</td>
                                        <td class="d-flex flex-row">
                                            <div style="height: 30px;width: 50%;margin-right: 5px;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;"><i class="fa fa-pencil"></i></button></div>
                                            <div style="height: 30px;width: 50%;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;background: var(--bs-red);"><i class="fa fa-trash-o"></i></button></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Classes View Container-->
                    <div id="classes-container" class="main-contained-viewbox">
                        <div class="row Search-add-sector" style="margin-top: 10px;">
                            <div class="col text-center d-xxl-flex justify-content-xxl-start align-items-xxl-center">
                                <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="width: 100%;color: rgb(255,255,255);background: var(--bs-blue);height: 100%;"><input type="search" class="room-search" placeholder="Search Input here..."><i class="fa fa-search" style="font-size: 25px;padding: 4px;"></i></div>
                            </div>
                            <div class="col text-center d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-end align-items-center justify-content-sm-end align-items-sm-center justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xxl-end align-items-xxl-center"><button class="btn btn-primary d-xxl-flex align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" id="open_addClass_modal" type="button" style="height: 35px;width: auto; margin:5px;"><i class="fa fa-plus" style="font-size: 10px;padding-right:10px; font-size:20px;"></i>Add New Class</button></div>
                        </div>
                        <div class="table-responsive" style="margin-top: 20px;color: rgb(255,255,255);">
                            <table class="table table-striped table-hover">
                                <thead style="background: linear-gradient(180deg, #fd7e14 0%, rgb(183,91,15) 96%, #000000 100%, rgb(121,60,10) 100%);color: var(--bs-gray-300);">
                                    <tr style="border: 3px solid var(--bs-gray-800) ;">
                                        <th>Name</th>
                                        <th>Population</th>
                                        <th>Courses&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</th>
                                        <th>Unavailable Rooms</th>
                                        <th style="width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Class Name</td>
                                        <td>Class Size</td>
                                        <td>Courses Taken</td>
                                        <td>Room No#</td>
                                        <td class="d-flex flex-row">
                                            <div style="height: 30px;width: 50%;margin-right: 5px;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;"><i class="fa fa-pencil"></i></button></div>
                                            <div style="height: 30px;width: 50%;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;background: var(--bs-red);"><i class="fa fa-trash-o"></i></button></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--Periods View Container-->
                    <div id="periods-container" class="main-contained-viewbox">
                        <div class="row Search-add-sector" style="margin-top: 10px;">
                            <div class="col text-center d-xxl-flex justify-content-xxl-start align-items-xxl-center">
                                <div class="d-xxl-flex justify-content-xxl-center align-items-xxl-center" style="width: 100%;color: rgb(255,255,255);background: var(--bs-blue);height: 100%;"><input type="search" class="room-search" placeholder="Search Input here..."><i class="fa fa-search" style="font-size: 25px;padding: 4px;"></i></div>
                            </div>
                            <div class="col text-center d-flex d-sm-flex d-md-flex d-lg-flex d-xxl-flex justify-content-end align-items-center justify-content-sm-end align-items-sm-center justify-content-md-end align-items-md-center justify-content-lg-end align-items-lg-center justify-content-xxl-end align-items-xxl-center"><button class="btn btn-primary d-xxl-flex align-items-center align-content-center justify-content-xxl-center align-items-xxl-center" id="open_addPeriod_modal" type="button" style="height: 35px;width: auto; margin:5px;"><i class="fa fa-plus" style="font-size: 10px;padding-right:10px; font-size:20px;"></i>Add New Timeslot</button></div>
                        </div>
                        <div class="table-responsive table-header" style="margin-top: 20px;color: rgb(255,255,255);">
                            <table class="table table-striped table-hover">
                                <thead style="background: linear-gradient(180deg, #fd7e14 0%, rgb(183,91,15) 96%, #000000 100%, rgb(121,60,10) 100%);color: var(--bs-gray-300);">
                                    <tr style="border: 3px solid var(--bs-gray-800) ;">
                                        <th>Period</th>
                                        <th style="width: 100px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>00:00 - 00:00</td>
                                        <td class="d-flex flex-row">
                                            <div style="height: 30px;width: 50%;margin-right: 5px;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;"><i class="fa fa-pencil"></i></button></div>
                                            <div style="height: 30px;width: 50%;"><button class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;background: var(--bs-red);"><i class="fa fa-trash-o"></i></button></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--End of Periods Container-->
                </div>
            </div>
        </div>
    </section>
@endsection
