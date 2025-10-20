<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
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

        <div
          class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)] bg-[var(--color-secondary)]"
        >
          <img src="assets/icon/home-icon.png" alt="" />
          <a href="#" class="text-[20px] font-bold">Dashboard</a>
        </div>

        <div
          class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
        >
          <img src="assets/icon/student-icon.png" alt="" />
          <a href="student/student.php" class="text-[20px] font-bold"
            >Student</a
          >
        </div>
        <div
          class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
        >
          <img src="assets/icon/teacher-icon.png" alt="" />
          <a href="teacher/teacher.php" class="text-[20px] font-bold"
            >Teacher</a
          >
        </div>
        <div
          class="flex items-center gap-3 w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
        >
          <img src="assets/icon/major-icon.png" alt="" />
          <a href="major/major.php" class="text-[20px] font-bold">Major</a>
        </div>
        <div
          class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
        >
          <img src="assets/icon/subject-icon.png" alt="" />
          <a href="subject/subject.php" class="text-[20px] font-bold">
            Subjects
          </a>
        </div>
        <div
          class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
        >
          <img src="assets/icon/extracurricular-icon.png" alt="" />
          <a href="extra/extra.php" class="text-[20px] font-bold"
            >Extraculliculer</a
          >
        </div>

        <!-- Log out -->
        <div class="flex px-5 py-7 items-center w-full">
          <div
            class="flex justify-center items-center h-12 w-40 rounded-[12px] gap-3 bg-white"
          >
            <img src="assets/icon/logout-icon.png" alt="" />
            <a href="logout.php" class="text-red"> Logout</a>
          </div>
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
          <div
            class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl"
          >
            <h1 class="text-2xl mb-2 font-bold">Teacher</h1>
            <div class="flex flex-row gap-3">
              <img src="assets/icon/teacher-icon.png" alt="" class="bg-black" />
              <h1 class="text-4xl font-extrabold">6</h1>
            </div>
          </div>
          <div
            class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl"
          >
            <h1 class="text-2xl mb-2 font-bold">Student</h1>
            <h1 class="text-4xl font-extrabold">6</h1>
          </div>
          <div
            class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl"
          >
            <h1 class="text-2xl mb-2 font-bold">Major</h1>
            <h1 class="text-4xl font-extrabold">6</h1>
          </div>
          <div
            class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl"
          >
            <h1 class="text-2xl mb-2 font-bold">Subject</h1>
            <h1 class="text-4xl font-extrabold">6</h1>
          </div>
          <div
            class="my-10 flex flex-col justify-center items-center h-37 w-44 bg-grey rounded shadow-2xl"
          >
            <h1 class="text-2xl mb-2 font-bold">Extraculliculer</h1>
            <h1 class="text-4xl font-extrabold">6</h1>
          </div>
        </div>
      </div>

      
    </div>
  </body>
</html>
