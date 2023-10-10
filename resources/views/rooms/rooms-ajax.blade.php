<script type="text/javascript">
      
 $(document).ready( function () {
 
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $('#rooms-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('rooms') }}",
           columns: [
                    { data: 'room_no', name: 'room_no' },
                    { data: 'capacity', name: 'capacity' },
                    { data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
 
  });
   
  function add(){
 
       $('#RoomsForm').trigger("reset");
       $('#RoomsModal').html("Add Room");
       $("#btn-save").html('Submit');
       $('#rooms-modal').modal('show');
       $('#id').val('');
 
  }   
  
  function editFunc(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-room') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#RoomsModal').html("Edit Room");
          $("#btn-save").html('Save Changes');
          $('#rooms-modal').modal('show');
          $('#id').val(res.id);
          $('#room_no').val(res.room_no);
          $('#capacity').val(res.capacity);
       }
    });
  }  

  function showFunc(id){
     
     $.ajax({
         type:"POST",
         url: "{{ url('show-room') }}",
         data: { id: id },
         dataType: 'json',
         success: function(res){
           $('#ShowRoomsModal').html("Room");
           $("#btn-save").html('Save Changes');
           $('#rooms-modal-show').modal('show');
           $('#id').val(res.id);
           $('#show_room_no').val(res.room_no);
           $('#show_capacity').val(res.capacity);
        }
     });
   }  
 
  function deleteFunc(id){
        if (confirm("Delete Record?") == true) {
        var id = id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-room') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#rooms-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#RoomsForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-room')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#rooms-modal").modal('hide');
          var oTable = $('#rooms-datatable').dataTable();
          oTable.fnDraw(false);
          $("#btn-save").html('Submit');
          $("#btn-save"). attr("disabled", false);
        },
        error: function(data){
           console.log(data);
         }
       });
   });
 
</script>