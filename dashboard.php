<?php
  include "./koneksi.php";
  session_start();
  if(!isset($_SESSION['username'])){
      header("Location: index.php");
  }

  $data_teacher = ['total' => 0];
  $data_student = ['total' => 0];
  $data_major = ['total' => 0];
  $data_subject = ['total' => 0];
  $data_extracurricular = ['total' => 0];

  $query_teacher = "SELECT COUNT(*) AS total FROM guru";
  $result_teacher = mysqli_query($conn, $query_teacher);
  if ($result_teacher) {
      $data_teacher = mysqli_fetch_assoc($result_teacher);
  } else {
      echo "Error query teacher: " . mysqli_error($conn) . "<br>";
  }

  $query_student = "SELECT COUNT(*) AS total FROM siswa";
  $result_student = mysqli_query($conn, $query_student);
  if ($result_student) {
      $data_student = mysqli_fetch_assoc($result_student);
  } else {
      echo "Error query student: " . mysqli_error($conn) . "<br>";
  }

  $query_major = "SELECT COUNT(*) AS total FROM jurusan";
  $result_major = mysqli_query($conn, $query_major);
  if ($result_major) {
      $data_major = mysqli_fetch_assoc($result_major);
  } else {
      echo "Error query major: " . mysqli_error($conn) . "<br>";
  }

  $query_subject = "SELECT COUNT(*) AS total FROM mapel";
  $result_subject = mysqli_query($conn, $query_subject);
  if ($result_subject) {
      $data_subject = mysqli_fetch_assoc($result_subject);
  } else {
      echo "Error query subject: " . mysqli_error($conn) . "<br>";
  }

  $query_extracurricular = "SELECT COUNT(*) AS total FROM ekstra";
  $result_extracurricular = mysqli_query($conn, $query_extracurricular);
  if ($result_extracurricular) {
      $data_extracurricular = mysqli_fetch_assoc($result_extracurricular);
  } else {
      echo "Error query extracurricular: " . mysqli_error($conn) . "<br>";
  }

  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
    <title>Dashboard</title>
  </head>
  <body class="leading-1.6 relative">
    <div class="flex gap-5">
      <!-- SideBar -->
      <nav
        class="flex h-225 w-70 flex-col justify-center items-start bg-[var(--color-primary)] text-[var(--color-white)]"
      >
        <div class="flex flex-row mb-15 p-6 gap-3 items-center justify-center">
          <img src="assets/logo_TI.png" alt="" class="w-14" />
          <h1 class="font-bold">SMK TI BALI GLOBAL DENPASAR</h1>
        </div>

        <!-- Side Bar Part 2 -->
        <p class="text-sm text-grey my-4 px-5">OVERVIEW</p>

        <a href="#" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)] bg-[var(--color-secondary)]">
          <img src="assets/icon/home-icon.png" alt="" />
          <span class="text-[20px] font-bold">Dashboard</span>
        </a>

        <a href="student/student.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
          <img src="assets/icon/student-icon.png" alt="" />
          <span class="text-[20px] font-bold">Student</span>
        </a>
        
        <a href="teacher/teacher.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
          <img src="assets/icon/teacher-icon.png" alt="" />
          <span class="text-[20px] font-bold">Teacher</span>
        </a>
        
        <a href="major/major.php" class="flex items-center gap-3 w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
          <img src="assets/icon/major-icon.png" alt="" />
          <span class="text-[20px] font-bold">Major</span>
        </a>
      
        <a href="subject/subject.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
          <img src="assets/icon/subject-icon.png" alt="" />
          <span class="text-[20px] font-bold">Subjects</span>
        </a>
        
        <a href="extra/extra.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
          <img src="assets/icon/extracurricular-icon.png" alt="" />
          <span class="text-[20px] font-bold">Extraculliculer</span>
        </a>

        <div class="flex px-5 py-7 items-center justify-center w-full">
          <a href="./logout.php" class="flex justify-center items-center h-12 w-40 rounded-[12px] gap-3 bg-white text-red">
            <img src="./assets/icon/logout-icon.png" alt="" />
            <span>Logout</span>
          </a>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="flex flex-col h-full m-10">
        <div
          class="flex flex-col h-40 w-250 items-start justify-center shadow-2xl rounded bg-grey pl-15"
        >
          <h1 class="text-3xl font-black">DASHBOARD</h1>
          <p class="pt-1 text-sm">Welcome Back!</p>
        </div>

        <div
          class="my-10 flex items-center gap-5 h-81 w-250 bg-grey rounded shadow-2xl p-5"
        >
          <div>
            <img class="h-[278px] w-[509px]" src="assets/gdng_ti.png" alt="" />
          </div>
          <div class="flex flex-col item-center justify-center">
            <h1 class="text-3xl font-bold">Website Information</h1>
            <p class="max-w-70">
              SMK TI Bali Global Denpasar is a vocational school that operates
              in the Technologies sector
            </p>
          </div>
        </div>

        <div class="flex flex-row gap-8">
          <div class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl">
            <h1 class="text-2xl mb-2 font-bold">Teacher</h1>
            <div class="flex flex-row gap-3">
              <img src="assets/icon/guru.png" alt=""/>
              <h1 class="text-4xl font-extrabold"> <?php echo $data_teacher['total']; ?></h1>
            </div>
          </div>

          <div class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl">
            <h1 class="text-2xl mb-2 font-bold">Student</h1>
            <img src="assets/icon/siswa.png" alt="" />
            <h1 class="text-4xl font-extrabold"><?php echo $data_student['total']; ?></h1>
          </div>

          <div class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl">
            <h1 class="text-2xl mb-2 font-bold">Major</h1>
            <img src="assets/icon/jurusan.png" alt=""/>
            <h1 class="text-4xl font-extrabold"><?php echo $data_major['total']; ?></h1>
          </div>

          <div class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl">
            <h1 class="text-2xl mb-2 font-bold">Subject</h1>
            <img src="assets/icon/mapel.png" alt=""/>
            <h1 class="text-4xl font-extrabold"><?php echo $data_subject['total']; ?></h1>
          </div>

          <div class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl">
            <h1 class="text-2xl mb-2 font-bold">Extraculliculer</h1>
            <img src="assets/icon/ekstra.png" alt=""/>
            <h1 class="text-4xl font-extrabold"><?php echo $data_extracurricular['total']; ?></h1>
          </div>
        </div>
      </div>

      
    </div>
  </body>
</html>
