<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../output.css" rel="stylesheet" />
    <title>Document</title>
  </head>
  <body>
    <div class="flex gap-5">
        <div class="flex w-70">
        <nav
          class="flex absolute h-225 w-70 flex-col justify-center items-start bg-[var(--color-primary)] text-[var(--color-white)]"
        >
          <div
            class="flex flex-row mb-15 p-6 gap-3 items-center justify-center"
          >
            <img src="../assets/logo_TI.png" alt="" class="w-14" />
            <h1 class="font-bold">SMK TI BALI GLOBAL DENPASAR</h1>
          </div>

          <!-- Side Bar Part 2 -->
          <p class="text-sm text-grey my-4 px-5">OVERVIEW</p>

          <a href="../dashboard.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
            <img src="../assets/icon/home-icon.png" alt="" />
            <span class="text-[20px] font-bold">Dashboard</span>
          </a>

          <a href="../student/student.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
            <img src="../assets/icon/student-icon.png" alt="" />
            <span class="text-[20px] font-bold">Student</span>
          </a>
          
          <a href="../teacher/teacher.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
            <img src="../assets/icon/teacher-icon.png" alt="" />
            <span class="text-[20px] font-bold">Teacher</span>
          </a>
          
          <a href="../major/major.php" class="flex items-center gap-3 w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
            <img src="../assets/icon/major-icon.png" alt="" />
            <span class="text-[20px] font-bold">Major</span>
          </a>
          
          <a href="../subject/subject.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 bg-[var(--color-secondary)] hover:bg-[var(--color-accent)]">
            <img src="../assets/icon/subject-icon.png" alt="" />
            <span class="text-[20px] font-bold">Subjects</span>
          </a>
          
          <a href="../extra/extra.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
            <img src="../assets/icon/extracurricular-icon.png" alt="" />
            <span class="text-[20px] font-bold">Extraculliculer</span>
          </a>

          <div class="flex px-5 py-7 items-center justify-center w-full">
            <a href="../logout.php" class="flex justify-center items-center h-12 w-40 rounded-[12px] gap-3 bg-white text-red">
              <img src="../assets/icon/logout-icon.png" alt="" />
              <span>Logout</span>
            </a>
          </div>
        </nav>
      </div>

      <div class="flex flex-col h-full m-10">
        <div
          class="flex flex-col h-40 w-250 mb-26 items-start justify-center shadow-2xl rounded bg-grey pl-15"
        >
          <h1 class="text-5xl font-black">SUBJECTS</h1>
        </div>
        <div class=" flex flex-col">
          <div class="flex flex-row w-full px-6">
            <div class="relative w-full my-6">
            <input class="w-80 p-4 border-2 border-primary rounded-[10px] focus:" type="text" name="" required placeholder="Find Teacher" />
          
          </div>
            <a href="./tambah.php" class="flex py-4 h-15 rounded-2xl w-50 bg-yellow my-6 justify-center font-bold text-white">Add Data</a>
          
          </div>
        </div>
        <table class="border-collapse w-full">
          <tr class="border border-solid rounded-[10px] h-22 bg-primary">
              <th class=" text-white">NO</th>
              <th class=" text-white">SUBJECT</th>
              <th class=" text-white">CLASS</th>
              <th class=" text-white">SUBJECT TEACHER</th>
          </tr>
          <?php
          $no = 1;
          $data = mysqli_query($conn, "SELECT * FROM mapel");
          while($d = mysqli_fetch_array($data)){
          ?>
              <tr class="border-solid border h-22 transition-all duration-200 hover:bg-gray-100">
                  <td class="py-3 px-4"><?= $no++; ?></td>
                  <td class="py-3 px-4"><?= $d['nama']; ?></td>
                  <td class="py-3 px-4"><?= $d['kelas']; ?></td>
                  <td class="py-3 px-4"><?= $d['guru']; ?></td>
                  <td class="py-3 px-4">
                      <div class="flex gap-3 justify-center">
                          <a href="edit.php?id=<?= $d['id']; ?>" class="abtn flex w-14 rounded-full h-13 justify-center items-center bg-primary hover:bg-primary-dark transition-colors">
                              <img src="../assets/icon/edit.png" alt="Edit">
                          </a>
                          <a href="hapus.php?id=<?= $d['id']; ?>" class="abtn flex w-14 rounded-full h-13 justify-center items-center bg-red hover:bg-red-dark transition-colors">
                              <img src="../assets/icon/sampah-icon.png" alt="Delete">
                          </a>
                      </div>
                  </td>
              </tr>
          <?php }
          ?>
      </table>
    </div>
  </body>
</html>
