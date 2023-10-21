<div class="modal fade" id="timeslots-modal" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:200px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="TimeslotsModal" style="color:white;">Add Room</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_AddTimeslot_modal"></i>
        </div>
        <div class="modal-body" style="padding:0px;">
        <form action="javascript:void(0)" id="TimeslotsForm" name="TimeslotsForm" class="form-horizontal" method="POST" enctype="multipart/form-data" style="height:175px;">
            
        <div style="padding:20px;">
            <input type="hidden" name="timeslot_id" id="timeslot_id">
            <div class="form-group">
            <!-- <label for="name" class="col-sm-2 control-label">Add Timeslot</label> -->
            <div class="col-sm-12">
                <input type="text" style="display:none;" class="form-control" id="time" name="time" placeholder="Enter Room No" maxlength="50">

                <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Time</label>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="select2-wrapper">
                                            <select id="from-select" name="from" class="form-control select2">
                                                @for($i = 0; $i <= 23; $i++)
                                                   @foreach(['00', '30'] as $subPart)
                                                    <option value="{{ (($i < 10) ? "0" : "") . $i . ":" . $subPart }}">
                                                        {{ (($i < 10) ? "0" : "") . $i . ":" . $subPart }}
                                                    </option>
                                                    @endforeach
                                                @endfor
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="select2-wrapper">
                                            <select id="to-select" name="to" class="form-control select2">
                                                @for($i = 0; $i <= 23; $i++)
                                                    @foreach(['00', '30'] as $subPart)
                                                    <option value="{{ (($i < 10) ? "0" : "") . $i . ":" . $subPart }}">
                                                        {{ (($i < 10) ? "0" : "") . $i . ":" . $subPart }}
                                                    </option>
                                                    @endforeach
                                                @endfor
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>  

        </div>
            <!-- <div class="modal-footer" style="display: flex; flex-direction: row; justify-content: center;">
                <div style="margin-right:20px;">
                    <div class="btn btn-danger" id="cancel_AddRoom_modal">Cancel
                    </div>
                </div>
                <div style="margin-left:20px;">
                    <button type="submit" class="btn btn-primary" id="btn-save">Submit
                    </button>
                </div>
            </div> -->
            
            <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);">
                <button class="btn btn-primary" id="cancel_AddTimeslot_modal" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button>
                <button class="btn btn-primary" type="submit" id="btn-save-timeslot" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Submit</button>
            </div>

        </form>
        </div>
        
    </div>
    </div>
</div>


<div class="modal fade" id="timeslots-modal-show" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:200px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="ShowTimeslotsModal" style="color:white;">Show TImeslot</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_ShowTimeslot_modal"></i>
        </div>
        <div class="modal-body">
        <form action="javascript:void(0)" id="ShowTimeslotsForm" name="ShowTimeslotsForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Timeslot</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_time" name="show_time" placeholder="Enter Room No" maxlength="50" required="" disabled="true">
            </div>
            </div>  

            
        </form>
        </div>
    </div>
    </div>
</div>