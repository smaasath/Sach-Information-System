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

function webiner() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/Webinar.php", true);
    xhttp.send();
}

function profile() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/StudentProfile.html", true);
    xhttp.send();
}


function openStudentDetails() {
                $('#StudentDetail').modal('show');
            }

            function openGuardianDetail() {
                $('#GuardianDetail').modal('show');
                $('#StudentDetail').modal('hide');
            }
            function openCourseDetail() {
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
            }


            function  Addstudent() {
                $('#AddStudentDetail').modal('show');
            }

            function AddGuardianDetail() {
                $('#AddGuardianDetail').modal('show');
                $('#AddStudentDetail').modal('hide');
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



            function showpassword() {
                var x = document.getElementById("mypass");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }