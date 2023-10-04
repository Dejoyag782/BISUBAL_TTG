<div class="modal fade" id="rooms-modal" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:200px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="RoomsModal" style="color:white;">Add Room</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_AddRoom_modal"></i>
        </div>
        <div class="modal-body">
        <form action="javascript:void(0)" id="RoomsForm" name="RoomsForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Room No</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="room_no" name="room_no" placeholder="Enter Room No" maxlength="50" required="">
            </div>
            </div>  

            <div class="form-group" style="margin-top:15px;">
            <label for="name" class="col-sm-2 control-label">Capacity</label>
            <div class="col-sm-12">
                <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Enter Capacity" maxlength="50" required="">
            </div>
            </div>

            <div class="modal-footer" style="display: flex; flex-direction: row; justify-content: center;">
            <div style="margin-right:20px;">
                <button type="submit" class="btn btn-danger" id="cancel_AddRoom_modal">Cancel
                </button>
            </div>
            <div style="margin-left:20px;">
                <button type="submit" class="btn btn-primary" id="btn-save">Submit
                </button>
            </div>
            </div>
            
        </form>
        </div>
        
    </div>
    </div>
</div>


<div class="modal fade" id="rooms-modal-show" aria-hidden="true" >
    <div class="modal-dialog modal-lg" style="top:200px; width:500px;">
    <div class="modal-content" style="background: rgb(217,219,221); border-radius: 10px; overflow: hidden;">
        <div class="modal-header" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
        <h4 class="modal-title" id="ShowRoomsModal" style="color:white;">Show Room</h4><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_ShowRoom_modal"></i>
        </div>
        <div class="modal-body">
        <form action="javascript:void(0)" id="ShowRoomsForm" name="ShowRoomsForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Room No</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" id="show_room_no" name="show_room_no" placeholder="Enter Room No" maxlength="50" required="" disabled="true">
            </div>
            </div>  

            <div class="form-group" style="margin-top:15px;">
            <label for="name" class="col-sm-2 control-label">Capacity</label>
            <div class="col-sm-12">
                <input type="number" class="form-control" id="show_capacity" name="show_capacity" placeholder="Enter Capacity" maxlength="50" required="" disabled="true">
            </div>
            </div>


            
        </form>
        </div>
    </div>
    </div>
</div>