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
                    // { data: 'id', name: 'id' },
                    { data: 'course_code', name: 'course_code' },
                    { data: 'course_name', name: 'course_name' },
                    { data: 'course_prof', name: 'course_prof' },
                    // { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false},
                 ],
                 order: [[0, 'desc']]
       });
 
  });
   
  function addCourse(){
 
       $('#CourseForm').trigger("reset");
       $('#CourseModal').html("Add Company");
       $('#course-modal').modal('show');
       $('#course_id').val('');
 
  }  

  function editCourse(course_id){
     
    $.ajax({
        type:"POST",
        url: "{{ url('edit-course') }}",
        data: { course_id: course_id },
        dataType: 'json',
        success: function(res){
          $('#CourseModal').html("Edit Course");
          $('#course-modal').modal('show');
          $('#course_id').val(res.course_id);
          $('#course_code').val(res.course_code);
          $('#course_name').val(res.course_name);
          $('#course_prof').val(res.course_prof);
       }
    });
  }  

  function showCourse(course_id){
     
     $.ajax({
         type:"POST",
         url: "{{ url('show-course') }}",
         data: { course_id: course_id },
         dataType: 'json',
         success: function(res){
           $('#ShowCourseModal').html("Show Course");
           $('#course-modal-show').modal('show');
           $('#show_course_id').val(res.course_id);
           $('#show_course_code').val(res.course_code);
           $('#show_course_name').val(res.course_name);
           $('#show_course_prof').val(res.course_prof);
        }
     });
   }  
 
  function deleteCourse(course_id){
        if (confirm("Delete Record?") == true) {
        var course_id = course_id;
          
          // ajax
          $.ajax({
              type:"POST",
              url: "{{ url('delete-course') }}",
              data: { course_id: course_id },
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
          $("#btn-save-course").html('Submit');
          $("#btn-save-course"). attr("disabled", false);
        },
        error: function(data){
           console.log(data);
         }
       });
   });
 
</script>