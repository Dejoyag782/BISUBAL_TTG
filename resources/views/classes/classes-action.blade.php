<div class="d-flex flex-row" style="width:70px">
<div  style="height: 30px;width: 50%;margin-right: 5px;">
    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit" onClick="showClass({{ $class_id }})" class="btn btn-success d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;">
        <i class="fa fa-eye"></i>
    </a>
</div>
<div  style="height: 30px;width: 50%;margin-right: 5px;">
    <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Edit" onClick="editClass({{ $class_id }})" class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;">
        <i class="fa fa-pencil"></i>
    </a>
</div>
<div  style="height: 30px;width: 50%;">
    <a href="javascript:void(0);" id="delete-class" onClick="deleteClass({{ $class_id }})" data-toggle="tooltip" data-original-title="Delete" class="btn btn-primary d-xxl-flex justify-content-xxl-center align-items-xxl-center" type="button" style="width: 100%;height: 100%;background: var(--bs-red);">
        <i class="fa fa-trash-o"></i>
    </a>
</div>
</div>