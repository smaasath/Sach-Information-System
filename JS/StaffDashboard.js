/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function StaffProfile() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/StaffProfile.php", true);
    xhttp.send();

}

function StaffCourse() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/StaffCourse.php", true);
    xhttp.send();

}

function opencoursedetailss(){
   const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/StaffEditCourse.php", true);
    xhttp.send();
}


       function EditstaffStudent(){
    $('#Studentmarkadd').modal('show');
}


function savestudentatendance() {
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