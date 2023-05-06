<?php 
session_start();
include('../common/document_head.html');
include('../common/navbar.php');
include('../scripts/connectToDatabase.php');

$result = mysqli_query($db, "SELECT * FROM Classes");

?>
<link rel="stylesheet" href="styles/subject_page.css" />

<body>
  <main>
    <div class="page-header">
      <p id="page-heading">Coding</p>
    </div>
    <div id="class-container">
      <?php
      while ($row = mysqli_fetch_row($result)){
      echo "
      <a class='class-block' href='pages/class.php?Id=$row[0]'>
        <div class='block-info'>
          <p class='block-title'>$row[1]</p>
          <p class='block-desc'>
            $row[2]
          </p>
        </div>
        <img src='$row[3]' alt='' class='class-img' />
      </a>
      ";
      }
      ?>
    </div>
  </main>
</body>
<script src="scripts/class_block.js"></script>
