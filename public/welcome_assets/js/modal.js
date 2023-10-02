// Generate Timetable
var openModalBtn = document.getElementById("open_modal");
var closeModalBtn = document.getElementById("close_modal");
var cancelModalBtn = document.getElementById("cancel_modal_GenTT");
var timetableModal = document.getElementById("form_cont");

openModalBtn.addEventListener("click", function() {
  timetableModal.style.display = "inline-flex";
});
closeModalBtn.addEventListener("click", function() {
  timetableModal.style.display = "none";
});
cancelModalBtn.addEventListener("click", function() {
  timetableModal.style.display = "none";
});

// Add Room
var closeAddRoomBtn = document.getElementById("close_AddRoom_modal");
var cancelAddRoomBtn = document.getElementById("cancel_AddRoom_modal");
var addRoomModal = document.getElementById("rooms-modal");


function closeAddRoomModal() {
  addRoomModal.classList.remove('show');
  setTimeout(function() {
    var modalBackdrop = document.querySelector('.modal-backdrop.fade.show');
    if (modalBackdrop) {
      modalBackdrop.remove('show');
    }
  }, 400);
}

closeAddRoomBtn.addEventListener("click", closeAddRoomModal);
cancelAddRoomBtn.addEventListener("click", closeAddRoomModal);

// Show Room
var closeShowRoomBtn = document.getElementById("close_ShowRoom_modal");
var showRoomModal = document.getElementById("rooms-modal-show");


function closeShowRoomModal() {
  showRoomModal.classList.remove('show');
  setTimeout(function() {
    var modalBackdrop = document.querySelector('.modal-backdrop.fade.show');
    if (modalBackdrop) {
      modalBackdrop.remove('show');
    }
  }, 400);
}

closeShowRoomBtn.addEventListener("click", closeShowRoomModal);


// Add Course
var openAddCourseBtn = document.getElementById("open_addCourse_modal");
var closeAddCourseBtn = document.getElementById("close_addCourse_modal");
var cancelAddCourseBtn = document.getElementById("cancel_modal_AddCourse");
var addCourseModal = document.getElementById("addCourse_modal");

openAddCourseBtn.addEventListener("click", function() {
  addCourseModal.style.display = "inline-flex";
});
closeAddCourseBtn.addEventListener("click", function() {
  addCourseModal.style.display = "none";
});
cancelAddCourseBtn.addEventListener("click", function() {
  addCourseModal.style.display = "none";
});

// Add Professor
var openAddProfessorBtn = document.getElementById("open_addProfessor_modal");
var closeAddProfessorBtn = document.getElementById("close_addProfessor_modal");
var cancelAddProfessorBtn = document.getElementById("cancel_modal_AddProfessor");
var addProfessorModal = document.getElementById("addProfessor_modal");

openAddProfessorBtn.addEventListener("click", function() {
  addProfessorModal.style.display = "inline-flex";
});
closeAddProfessorBtn.addEventListener("click", function() {
  addProfessorModal.style.display = "none";
});
cancelAddProfessorBtn.addEventListener("click", function() {
  addProfessorModal.style.display = "none";
});

// Add Class
var openAddClassBtn = document.getElementById("open_addClass_modal");
var closeAddClassBtn = document.getElementById("close_addClass_modal");
var cancelAddClassBtn = document.getElementById("cancel_modal_AddClass");
var addClassModal = document.getElementById("addClass_modal");

openAddClassBtn.addEventListener("click", function() {
  addClassModal.style.display = "inline-flex";
});
closeAddClassBtn.addEventListener("click", function() {
  addClassModal.style.display = "none";
});
cancelAddClassBtn.addEventListener("click", function() {
  addClassModal.style.display = "none";
});

// Add Period
var openAddPeriodBtn = document.getElementById("open_addPeriod_modal");
var closeAddPeriodBtn = document.getElementById("close_addPeriod_modal");
var cancelAddPeriodBtn = document.getElementById("cancel_modal_AddPeriod");
var addPeriodModal = document.getElementById("addPeriod_modal");

openAddPeriodBtn.addEventListener("click", function() {
  addPeriodModal.style.display = "inline-flex";
});
closeAddPeriodBtn.addEventListener("click", function() {
  addPeriodModal.style.display = "none";
});
cancelAddPeriodBtn.addEventListener("click", function() {
  addPeriodModal.style.display = "none";
});