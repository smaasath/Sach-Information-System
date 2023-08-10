



function Admindashborad() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/InstituteFirstPage.php", true);
    xhttp.send();

}

function AdminStudent() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/InstituteStudent.php", true);
    xhttp.send();
}

function AdminStaff() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/InstituteStaff.php", true);
    xhttp.send();
}

function Adminprofile() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/InstituteAdminProfile.php", true);
    xhttp.send();

}

function AdminCourse() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/InstituteCourse.php", true);
    xhttp.send();

}

function AdminWebinar(){
      const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/InstituteWebinar.php", true);
    xhttp.send();

}

function AdminDegree(){
      const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/InstituteDegree.php", true);
    xhttp.send();

}

function openStudentDetails(value) {


    console.log(value);
    $.ajax({url: "../PopupBody/sudentDetailPopupBody.php",
        method: 'post',
        data: {std_ID: value},
        success: function (result) {
            $(".modal-body").html(result);
        }});
    $('#StudentDetail').modal('show');



}

function openGuardianDetail(value) {
    console.log(value);
    $.ajax({url: "../PopupBody/StudentGurdianPopup.php",
        method: 'post',
        data: {std_ID: value},
        success: function (result) {
            $(".modal-body").html(result);
        }});
    $('#GuardianDetail').modal('show');
    $('#StudentDetail').modal('hide');
}
function openCourseDetail(value) {
    console.log(value);
    $.ajax({url: "../PopupBody/StudentCoursePopup.php",
        method: 'post',
        data: {std_ID: value},
        success: function (result) {
            $(".modal-body").html(result);
        }});
    $('#GuardianDetail').modal('hide');
    $('#CourseDetail').modal('show');
    $('#StudentDetail').modal('hide');
}

function openeditDetailsStudent(value) {
    console.log(value);
    $.ajax({url: "../PopupBody/StudentEditPopup.php",
        method: 'post',
        data: {std_ID: value},
        success: function (result) {
            $(".modal-body").html(result);
        }});
    $.ajax({url: "../DashboardPHP/studentEdit.php",
        method: 'post',
        data: {std_ID: value},
        success: function (result) {
            console.log("send");
        }});
    $('#stdEdit').modal('show');
}

function closeModals() {
    $('#GuardianDetail').modal('hide');
    $('#StudentDetail').modal('hide');
    $('#CourseDetail').modal('hide');
    $('#AddStudentDetail').modal('hide');
    $('#AddGuardianDetail').modal('hide');
    $('#EditStudentDetail').modal('hide');
    $('#EditGuardianDetail').modal('hide');
    $('#StaffDetail').modal('hide');
    $('#StaffCourseDetail').modal('hide');
    $('#AddStaffDetail').modal('hide');
    $('#EditStaffDetail').modal('hide');
    $('#courseDetails').modal('hide');
    $('#AddCourse').modal('hide');
    $('#CourseDetail').modal('hide');
    $('#EditCourseDetail').modal('hide');
    $('#stdEdit').modal('hide');
}


function  Addstudent(value) {
    $.ajax({url: "../PopupBody/StudentAdd.php",
        method: 'post',
        data: {Ins_ID: value},
        success: function (result) {
             $(".modal-body").html(result);
        }});
     $.ajax({url: "../DashboardPHP/StudentAdd.php",
        method: 'post',
        data: {Ins_ID: value},
        success: function (result) {
            console.log("send");
        }});
    
    $('#AddStudentDetail').modal('show');
}



function EditStudent() {
    console.log("asth");
    $('#EditStudentDetail').modal('show');

}



function EditGuardianDetail() {
    $('#EditGuardianDetail').modal('show');
    $('#EditStudentDetail').modal('hide');
}





function enrollstudent() {
    Swal.fire({
        title: 'Do you want to enroll to this webinar?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Enroll',
        denyButtonText: `No`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            closeModals();
            Swal.fire('Enrolled!', '', 'success')
        } else if (result.isDenied) {
            closeModals();
            Swal.fire('Not enrolled', '', 'info')
        }
    })
}




function showpassword() {
    var x = document.getElementById("mypass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}



function  OpenStaffStaff(value) {
        console.log(value);
    $.ajax({url: "../PopupBody/staffDetailsPopup.php",
        method: 'post',
        data: {staffId: value},
        success: function (result) {
            $(".modal-body").html(result);
        }});
    $('#StaffDetail').modal('show');
}

function openstaffCourseDetail(value) {
     console.log(value);
    $.ajax({url: "../PopupBody/staffCoursePopup.php",
        method: 'post',
        data: {staffId: value},
        success: function (result) {
            $(".modal-body").html(result);
        }});
    $('#StaffCourseDetail').modal('show');
    
}

function  AddStaff(value) {
     $.ajax({url: "../PopupBody/staffAddPopup.php",
        method: 'post',
        data: {Ins_ID: value},
        success: function (result) {
             $(".modal-body").html(result);
             console.log("kkkk");
        }});
      $.ajax({url: "../DashboardPHP/staffAdd.php",
        method: 'post',
        data: {Ins_ID: value},
        success: function (result) {
            console.log("send");
        }});
     
    
    $('#AddStaffDetail').modal('show');
}

function  EditStaff(value) {
    console.log(value);
    $.ajax({url: "../PopupBody/staffEditPopup.php",
        method: 'post',
        data: {staffId: value},
        success: function (result) {
            $(".modal-body").html(result);
        }});
    $.ajax({url: "../DashboardPHP/staffEdit.php",
        method: 'post',
        data: {staffId: value},
        success: function (result) {
            console.log("send");
        }});
    $('#EditStaffDetail').modal('show');
}

function AddCourse(value) {
     $.ajax({url: "../PopupBody/courseAddPopup.php",
        method: 'post',
        data: {Ins_ID: value},
        success: function (result) {
             $(".modal-body").html(result);
        }});
      $.ajax({url: "../DashboardPHP/courseAdd.php",
        method: 'post',
        data: {Ins_ID: value},
        success: function (result) {
            console.log("send");
        }});
     
    $('#AddCourse').modal('show');
}

function CourseDetail() {
    $('#CourseDetail').modal('show');
}

function EditCourse(value) {
        console.log(value);
    $.ajax({url: "../PopupBody/CourseEditPopup.php",
        method: 'post',
        data: {course_id: value},
        success: function (result) {
            $(".modal-body").html(result);
        }});
    $.ajax({url: "../DashboardPHP/courseEdit.php",
        method: 'post',
        data: {course_id: value},
        success: function (result) {
            console.log("send");
        }});
    $('#EditCourseDetail').modal('show');
}




function studel(value) {
    Swal.fire({
        title: 'Are You Sure To Detele This?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: `No`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({url: "../DashboardPHP/stdDelete.php",
                method: 'post',
                data: {std_ID: value},
                success: function (result) {
                    console.log("send");
                }});
            Swal.fire('Deleted!', '', 'success')
        } else if (result.isDenied) {

            Swal.fire('Not Deleted', '', 'info')
        }
    });

}


function staffDel(value){
        Swal.fire({
        title: 'Are You Sure To Detele This?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: `No`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({url: "../DashboardPHP/staffDelete.php",
                method: 'post',
                data: {staffId: value},
                success: function (result) {
                    console.log("send");
                }});
            Swal.fire('Deleted!', '', 'success')
        } else if (result.isDenied) {

            Swal.fire('Not Deleted', '', 'info')
        }
    });
    
}


function CoutseDel(value){
        Swal.fire({
        title: 'Are You Sure To Detele This?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: `No`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({url: "../DashboardPHP/courseDelete.php",
                method: 'post',
                data: {courseId: value},
                success: function (result) {
                    console.log("send");
                }});
            Swal.fire('Deleted!', '', 'success')
        } else if (result.isDenied) {

            Swal.fire('Not Deleted', '', 'info')
        }
    });
    
}

function WebDel(value){
        Swal.fire({
        title: 'Are You Sure To Detele This?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: `No`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({url: "../DashboardPHP/WebinarDelete.php",
                method: 'post',
                data: {webid: value},
                success: function (result) {
                    console.log("send");
                }});
            AdminWebinar();
            Swal.fire('Deleted!', '', 'success')
        } else if (result.isDenied) {

            Swal.fire('Not Deleted', '', 'info')
            AdminWebinar();
        }
    });
    
    
}


function DegDel(value){
        Swal.fire({
        title: 'Are You Sure To Detele This?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: `No`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({url: "../DashboardPHP/DeleteDegree.php",
                method: 'post',
                data: {degreeId: value},
                success: function (result) {
                    console.log(send);
                }});
            AdminDegree();
            Swal.fire('Deleted!', '', 'success')
        } else if (result.isDenied) {

            Swal.fire('Not Deleted', '', 'info')
            AdminDegree();
        }
    });
    
    
}

function Addwebinar(value) {
     $.ajax({url: "../PopupBody/AddWebinarPopup.php",
        method: 'post',
        data: {Ins_ID: value},
        success: function (result) {
             $(".modal-body").html(result);
        }});
      $.ajax({url: "../DashboardPHP/AddWeninar.php",
        method: 'post',
        data: {Ins_ID: value},
        success: function (result) {
            console.log("send");
        }});
     
    $('#AddWebinar').modal('show');
    
}












