<?php 
session_start();
include('../common/document_head.html');
include('../common/navbar.php');
include('../scripts/connectToDatabase.php');

$class_id = $_GET['Id'];
?>

<link rel="stylesheet" href="styles/class_page.css" />

<main>
  <div id="container">
    <div id="info_card">
      <?php 

        $select_info = mysqli_prepare($db, "SELECT Classes.Name, Classes.Description, Classes.img_url, ClassInfo.AuthorFirstname, ClassInfo.AuthorLastname, ClassInfo.StartDate, ClassInfo.EndDate FROM Classes LEFT JOIN ClassInfo on ClassInfo.ClassId = Classes.Id WHERE Classes.Id = ?");

        mysqli_stmt_bind_param($select_info, "s", $class_id);
        mysqli_stmt_execute($select_info);
        mysqli_stmt_bind_result($select_info, $name,$description,$url, $firstname, $lastname, $start, $end);

        while(mysqli_stmt_fetch($select_info)){

          $start = date_create($start);
          $start = date_format($start, "m/d/Y");

          $end = date_create($end);
          $end = date_format($end, "m/d/Y");

          echo "<div><img src='$url' id='card_pic'/></div>
              <div id='card_info'>
              <p class='card_info'>Title: <span class='info'>$name</span></p>
              <p class='card_info'>Description: <span class='info'>$description</span></p>
              <p class='card_info'>Instructor: <span class='info'>$firstname $lastname</span></p>
              <p class='card_info'>Start Date: <span class='info'>$start</span></p>
              <p class='card_info'>End date: <span class='info'>$end</span></p>
              </div>";
      };

        mysqli_stmt_free_result($select_info);
      ?>
    </div>
    <div id="chapters_card">
      <p id="chapter_header">Chapters</p>
      <div id="chapter_list">
        <?php

          $select_chapters = mysqli_prepare($db, "SELECT Chapters.Title FROM Classes LEFT JOIN ClassChapters on ClassChapters.ClassId = Classes.Id LEFT JOIN Chapters on Chapters.Id = ClassChapters.ChapterId WHERE Classes.Id = ?");

          mysqli_stmt_bind_param($select_chapters, "s", $class_id);
          mysqli_stmt_execute($select_chapters);
          mysqli_stmt_bind_result($select_chapters, $title);

          while(mysqli_stmt_fetch($select_chapters)){
            echo "<button class='chapter_btn'>
              <svg class='lock_icon' xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 96 960 960' width='24'><path d='M240 976q-33 0-56.5-23.5T160 896V496q0-33 23.5-56.5T240 416h40v-80q0-83 58.5-141.5T480 136q83 0 141.5 58.5T680 336v80h40q33 0 56.5 23.5T800 496v400q0 33-23.5 56.5T720 976H240Zm0-80h480V496H240v400Zm240-120q33 0 56.5-23.5T560 696q0-33-23.5-56.5T480 616q-33 0-56.5 23.5T400 696q0 33 23.5 56.5T480 776ZM360 416h240v-80q0-50-35-85t-85-35q-50 0-85 35t-35 85v80ZM240 896V496v400Z'/></svg>
              <p class='chapter_title'>$title</p>
              </button>";
          }
        ?>
      </div>
    </div>
  </div>
</main>

