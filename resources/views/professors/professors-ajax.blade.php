<script type="text/javascript">
      
 $(document).ready( function () {
 
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $('#professor-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('professors') }}",
           columns: [
                    // { data: 'id', name: 'id' },
                    { data: 'professor_name', name: 'professor_name' },
                    { data: 'professor_email', name: 'professor_email' },
                    { data: 'professor_course', name: 'professor_course' },
                    { data: 'professor_unvtime', name: 'professor_unvtime' },
                    // { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
 
  });
   
  function addProf(){
 
       $('#ProfessorForm').trigger("reset");
       $('#ProfessorModal').html("Add Professor");
       $('#professor-modal').modal('show');
       $("#btn-save-professor").html('Submit');
       $('#professor_id').val('');
 
  }  

  function editProf(professor_id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-professor') }}",
        data: { professor_id: professor_id },
        dataType: 'json',
        success: function(res){
          $('#ProfessorModal').html("Edit Professor");
          $('#professor-modal').modal('show');
          $("#btn-save-professor").html('Save Changes');
          $('#professor_id').val(res.professor_id);
          $('#professor_name').val(res.professor_name);
          $('#professor_email').val(res.professor_email);
          $('#professor_course').val(res.professor_course);
          $('#professor_unvtime').val(res.professor_unvtime);
       }
    });
  }  

  function showProf(professor_id){
     
     $.ajax({
         type:"POST",
         url: "{{ url('show-professor') }}",
         data: { professor_id: professor_id },
         dataType: 'json',
         success: function(res){
           $('#ShowProfessorModal').html("Professor");
           $('#professor-modal-show').modal('show');
           $('#show_professor_id').val(res.professor_id);
           $('#show_professor_name').val(res.professor_name);
           $('#show_professor_email').val(res.professor_email);
           $('#show_professor_course').val(res.professor_course);
           $('#show_professor_unvtime').val(res.professor_unvtime);
        }
     });
   }  
 
  function deleteProf(professor_id){
        if (confirm("Delete Record?") == true) {
        var professor_id = professor_id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-professor') }}",
              data: { professor_id: professor_id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#professor-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#ProfessorForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-professor')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#professor-modal").modal('hide');
          var oTable = $('#professor-datatable').dataTable();
          oTable.fnDraw(false);
          $("#btn-save-professor").html('Submit');
          $("#btn-save-professor"). attr("disabled", false);
        },
        error: function(data){
           console.log(data);
         }
       });
   });
 
</script>