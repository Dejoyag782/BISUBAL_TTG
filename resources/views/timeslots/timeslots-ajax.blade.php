<script type="text/javascript">
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#timeslots-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ url('timeslots') }}",
        columns: [
            { data: 'time', name: 'time' },
            { data: 'action', name: 'action', orderable: false },
        ],
        order: [[0, 'desc']]
    });
});

function addTime() {
    $('#TimeslotsForm').trigger("reset");
    $('#TimeslotsModal').html("Add Room");
    $("#btn-save-timeslot").html('Submit');
    $('#timeslots-modal').modal('show');
    $('#timeslot_id').val('');
    $('#from').val('00:00');
    $('#to').val('00:00');
}

function editTime(timeslot_id) {
    $.ajax({
        type: "POST",
        url: "{{ url('edit-timeslot') }}",
        data: { timeslot_id: timeslot_id },
        dataType: 'json',
        success: function(res) {
            $('#TimeslotsModal').html("Edit Room");
            $("#btn-save-timeslot").html('Save Changes');
            $('#timeslots-modal').modal('show');
            $('#timeslot_id').val(res.timeslot_id);
            $('#time').val(res.time)
            
            // Split the time string using regex
            var timeParts = res.time.match(/(\d{2}:\d{2})\s*-\s*(\d{2}:\d{2})/);
            
            // Set the values for 'from' and 'to' inputs
            $('#from-select').val(timeParts[1]);
            $('#to-select').val(timeParts[2]);
        }
    });
}

function showTime(timeslot_id) {
    $.ajax({
        type: "POST",
        url: "{{ url('show-timeslot') }}",
        data: { timeslot_id: timeslot_id },
        dataType: 'json',
        success: function(res) {
            $('#ShowTimeslotsModal').html("Room");
            $("#btn-save-timeslot").html('Save Changes');
            $('#timeslots-modal-show').modal('show');
            $('#timeslot_id').val(res.timeslot_id);
            $('#show_time').val(res.time);
        }
    });
}

function deleteTime(timeslot_id) {
    if (confirm("Delete Record?") == true) {
        var timeslot_id = timeslot_id;
        // ajax
        $.ajax({
            type: "POST",
            url: "{{ url('delete-timeslot') }}",
            data: { timeslot_id: timeslot_id },
            dataType: 'json',
            success: function(res) {
                var oTable = $('#timeslots-datatable').dataTable();
                oTable.fnDraw(false);
            }
        });
    }
}

$('#TimeslotsForm').submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    var time = $('#from-select').val() + ' - ' + $('#to-select').val();
    formData.append('time', time);
    $.ajax({
        type: 'POST',
        url: "{{ url('store-timeslot') }}",
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            $("#timeslots-modal").modal('hide');
            var oTable = $('#timeslots-datatable').dataTable();
            oTable.fnDraw(false);
            $("#btn-save-timeslot").html('Submit');
            $("#btn-save-timeslot").attr("disabled", false);
            $('#from').val('00:00');
            $('#to').val('00:00');
        },
        error: function(data) {
            console.log(data);
        }
    });
});
</script>