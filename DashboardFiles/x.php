<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <!-- First Modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal1Label">Modal 1</h5>
        <button type="button" class="close" onclick="closeModals()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This is the content of Modal 1.</p>
        <button type="button" class="btn btn-primary" onclick="openModal2()">Open Modal 2</button>
      </div>
    </div>
  </div>
</div>

<!-- Second Modal -->
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal2Label">Modal 2</h5>
        <button type="button" class="close" onclick="closeModals()" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This is the content of Modal 2.</p>
      </div>
    </div>
  </div>
</div>

<!-- Button to open Modal 1 -->
<button type="button" class="btn btn-primary" onclick="openModal1()">
  Open Modal 1
</button>

<script>
  function openModal1() {
    $('#modal1').modal('show');
  }

  function openModal2() {
    $('#modal2').modal('show');
    $('#modal1').modal('hide');
  }

  function closeModals() {
    $('#modal2').modal('hide');
    $('#modal1').modal('hide');
  }
</script>

        <?php
        // put your code here
        ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>
