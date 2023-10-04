<script type="text/javascript">
      
 $(document).ready( function () {
 
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
    $('#course-datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('course-datatable') }}",
           columns: [
                    { data: 'course_code', name: 'course_code' },
                    { data: 'course_name', name: 'course_name' },
                    { data: 'course_prof', name: 'course_prof' },
                    { data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
 
  });
   
  function addCourse(){
 
       $('#CourseForm').trigger("reset");
       $('#CourseModal').html("Add Room");
       $("#btn-save").html('Submit');
       $('#course-modal').modal('show');
       $('#id').val('');
 
  }   
  
  function editCourse(id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-course') }}",
        data: { id: id },
        dataType: 'json',
        success: function(res){
          $('#CourseModal').html("Edit Room");
          $("#btn-save").html('Save Changes');
          $('#course-modal').modal('show');
          $('#id').val(res.id);
          $('#course_code').val(res.course_code);
          $('#course_name').val(res.course_name);
          $('#course_prof').val(res.course_prof);
       }
    });
  }  

  function showCourse(id) {
  $.ajax({
    type: "POST",
    url: "{{ url('show-course') }}",
    data: { id: id },
    dataType: 'json',
    success: function(res) {
      $('#ShowCourseModal').html("Show Course"); // Update the modal title to "Show Course"
      $("#btn-save").html('Submit'); // Update the button text to "Submit"
      $('#course-modal-show').modal('show');
      $('#id').val(res.id);
      $('#show_course_code').val(res.course_code);
      $('#show_course_name').val(res.course_name);
      $('#show_course_prof').val(res.course_prof);
    }
  });
}
 
  function deleteCourse(id){
        if (confirm("Delete Record?") == true) {
        var id = id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-course') }}",
              data: { id: id },
              dataType: 'json',
              success: function(res){
 
                var oTable = $('#course-datatable').dataTable();
                oTable.fnDraw(false);
             }
          });
       }
  }
 
  $('#CourseForm').submit(function(e) {
 
     e.preventDefault();
   
     var formData = new FormData(this);
   
     $.ajax({
        type:'POST',
        url: "{{ url('store-course')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
          $("#course-modal").modal('hide');
          var oTable = $('#course-datatable').dataTable();
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