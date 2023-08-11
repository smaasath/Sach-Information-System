/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


function SuperProfile() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/SuperAdminProfile.php", true);
    xhttp.send();

}

function SuperIns(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("col10").innerHTML = this.responseText;
    };
    xhttp.open("GET", "../DashboardFiles/SuperAdminInstitute.php", true);
    xhttp.send();
    
}


function InsDel(value){
        Swal.fire({
        title: 'Are You Sure To Detele This?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'Yes',
        denyButtonText: `No`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({url: "../DashboardPHP/InsDelete.php",
                method: 'post',
                data: {Ins_Id: value},
                success: function (result) {
                    console.log("send");
                }});
            SuperIns();
            Swal.fire('Deleted!', '', 'success');
        } else if (result.isDenied) {

            Swal.fire('Not Deleted', '', 'info');
           SuperIns();
        }
    });
    
    
}