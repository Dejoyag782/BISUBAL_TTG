<script type="text/javascript">
      
 $(document).ready( function () {
 
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $('#class-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('classes') }}",
           columns: [
                    // { data: 'id', name: 'id' },
                    { data: 'class_name', name: 'class_name' },
                    { data: 'class_population', name: 'class_population' },
                    { data: 'class_courses', name: 'class_courses' },
                    { data: 'class_unv_rooms', name: 'class_unv_rooms' },
                    // { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
 
  });
   
  function addClass(){
 
       $('#ClassForm').trigger("reset");
       $('#ClassModal').html("Add Class");
       $('#class-modal').modal('show');
       $("#btn-save-class").html('Submit');
       $('#class_id').val('');
 
  }  

  function editClass(class_id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-class') }}",
        data: { class_id: class_id },
        dataType: 'json',
        success: function(res){
          $('#ClassModal').html("Edit Class");
          $('#class-modal').modal('show');
          $("#btn-save-class").html('Save Changes');
          $('#class_id').val(res.class_id);
          $('#class_name').val(res.class_name);
          $('#class_population').val(res.class_population);
          $('#class_courses').val(res.class_courses);
          $('#class_unv_rooms').val(res.class_unv_rooms);
       }
    });
  }  

  function showClass(class_id){
     
     $.ajax({
         type:"POST",
         url: "{{ url('show-class') }}",
         data: { class_id: class_id },
         dataType: 'json',
         success: function(res){
           $('#ShowClassModal').html("Class");
           $('#class-modal-show').modal('show');
           $('#show_class_id').val(res.class_id);
           $('#show_class_name').val(res.class_name);
           $('#show_class_population').val(res.class_population);
           $('#show_class_courses').val(res.class_courses);
           $('#show_class_unv_rooms').val(res.class_unv_rooms);
        }
     });
   }  
 
  function deleteClass(class_id){
        if (confirm("Delete Record?") == true) {
        var class_id = class_id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-class') }}",
              data: { class_id: class_id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#class-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#ClassForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-class')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#class-modal").modal('hide');
          var oTable = $('#class-datatable').dataTable();
          oTable.fnDraw(false);
          $("#btn-save-class").html('Submit');
          $("#btn-save-class"). attr("disabled", false);
        },
        error: function(data){
           console.log(data);
         }
       });
   });
 
</script>