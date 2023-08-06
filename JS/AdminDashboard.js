/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

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
}


function  Addstudent() {
    $('#AddStudentDetail').modal('show');
}

function AddGuardianDetail() {
    var name = document.getElementById("studentName").value;
    var entrlmentNumber = document.getElementById("entrlmentNumber").value;
    var DOB = document.getElementById("DOB").value;
    var studentContactNum = document.getElementById("studentContactNum").value;
    var studentEmail = document.getElementById("studentEmail").value;
    var studentAddress = document.getElementById("studentAddress").value;
    var userName = document.getElementById("userName").value;
    var password = document.getElementById("password").value;



    if (name === "" || entrlmentNumber === "" || DOB === "" || studentContactNum === "" || studentEmail === "" || studentAddress === "" || userName === "" || password === "") {

    } else {
        $('#AddGuardianDetail').modal('show');
        $('#AddStudentDetail').modal('hide');
    }
}

function EditStudent() {
    $('#EditStudentDetail').modal('show');

}

function EditGuardianDetail() {
    $('#EditGuardianDetail').modal('show');
    $('#EditStudentDetail').modal('hide');
}


function savestudent() {
    Swal.fire({
        title: 'Do you want to save the changes?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Save',
        denyButtonText: `Don't save`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            closeModals();
            Swal.fire('Saved!', '', 'success')
        } else if (result.isDenied) {
            closeModals();
            Swal.fire('Changes are not saved', '', 'info')
        }
    })
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



function  OpenStaffStaff() {
    $('#StaffDetail').modal('show');
}

function openstaffCourseDetail() {
    $('#StaffCourseDetail').modal('show');
    $('#StaffDetail').modal('hide');
}

function  AddStaff() {
    $('#AddStaffDetail').modal('show');
}

function  EditStaff() {
    $('#EditStaffDetail').modal('show');
}

function AddCourse() {
    $('#AddCourse').modal('show');
}

function CourseDetail() {
    $('#CourseDetail').modal('show');
}

function EditCourse() {
    $('#EditCourseDetail').modal('show');
}




function changeFunc() {
    var selectBox = document.getElementById("department");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    alert(selectedValue);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../DashboardPHP/DropDown.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText); // Response from PHP
        }
    };
    xhr.send("data=" + encodeURIComponent(selectedValue));


}












