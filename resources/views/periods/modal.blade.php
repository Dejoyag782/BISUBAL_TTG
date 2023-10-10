<div id="addPeriod_modal">
    <div class="d-xxl-flex flex-column" id="dash_addPeriod_modal_view" style="width: 650px;height: 380px;background: rgb(217,219,221);margin-top: 50px;border-radius: 10px;">
        <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 40px;color: var(--bs-indigo);background: var(--e-global-color-b068fc5);border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 10px;border-bottom-style: solid;border-bottom-color: var(--bs-orange);">
            <h5 style="color: rgb(255,255,255);width: 95%;margin-bottom: 0px;">Add New Period</h5><i class="fa fa-close d-xxl-flex justify-content-xxl-center align-items-xxl-center" id="close_addPeriod_modal"></i>
        </div>
        <form class="form" method="POST" action="" id="resource-form">
                <input type="hidden" name="_method" value="">
                <div class="modal-body" style="height:250px;">
                    <div id="errors-container">
                        
                    </div>

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

                <div class="d-flex d-sm-flex d-xl-flex d-xxl-flex flex-row justify-content-center align-items-center justify-content-sm-center align-items-sm-center justify-content-xl-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="height: 90px;color: var(--bs-indigo);background: rgba(108,117,125,0.57);padding: 10px;border-bottom-right-radius: 10px;border-bottom-left-radius: 10px;border-bottom-color: var(--bs-orange);">
                <button class="btn btn-primary" id="cancel_modal_AddPeriod" type="button" style="width: 230px;height: 45px;background: var(--bs-red);border-style: none;border-bottom-style: none;">Cancel</button>
                <button class="btn btn-primary" type="button" style="margin-left: 20px;width: 230px;height: 45px;background: var(--bs-blue);border-style: none;">Add New Period</button>
                </div>
            </form>
        
    </div>
</div>