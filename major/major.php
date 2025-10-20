<!DOCTYPE html>
<html lang="en">
  <head>
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

          <div
            class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
          >
            <img src="../assets/icon/home-icon.png" alt="" />
            <a href="../dashboard.php" class="text-[20px] font-bold">Dashboard</a>
          </div>

          <div
            class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
          >
            <img src="../assets/icon/student-icon.png" alt="" />
            <a href="../student/student.php" class="text-[20px] font-bold"
              >Student</a
            >
          </div>
          <div
            class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
          >
            <img src="../assets/icon/teacher-icon.png" alt="" />
            <a href="../teacher/teacher.php" class="text-[20px] font-bold"
              >Teacher</a
            >
          </div>
          <div
            class="flex items-center gap-3 w-full duration-300 cursor-pointer px-5 py-7 bg-[var(--color-secondary)] hover:bg-[var(--color-accent)]"
          >
            <img src="../assets/icon/major-icon.png" alt="" />
            <a href="../major/major.php" class="text-[20px] font-bold">Major</a>
          </div>
          <div
            class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
          >
            <img src="../assets/icon/subject-icon.png" alt="" />
            <a href="../subject/subject.php" class="text-[20px] font-bold">
              Subjects
            </a>
          </div>
          <div
            class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
          >
            <img src="../assets/icon/extracurricular-icon.png" alt="" />
            <a href="../extra/extra.php" class="text-[20px] font-bold"
              >Extraculliculer</a
            >
          </div>

          <!-- Log out -->
          <div class="flex px-5 py-7 items-center justify-center w-full">
            <div
              class="flex justify-center items-center h-12 w-40 rounded-[12px] gap-3 bg-white"
            >
              <img src="../assets/icon/logout-icon.png" alt="" />
              <a href="../logout.php" class="text-red"> Logout</a>
            </div>
          </div>
        </nav>
      </div>

      <div class="flex flex-col h-full m-10">
        <div
          class="flex flex-col h-40 w-250 mb-26 items-start justify-center shadow-2xl rounded bg-grey pl-15"
        >
          <h1 class="text-5xl font-black">MAJOR</h1>
        </div>
        <div class=" flex flex-col">
          <div class="flex flex-row w-full px-6">
            <div class="relative w-full my-6">
            <input class="w-80 p-4 border-2 border-primary rounded-[10px] focus:" type="text" name="" required placeholder="Find Teacher" />
           
          </div>
           <button type="submit" name="login" class="flex py-4 h-15 rounded-2xl w-50 bg-yellow my-6 justify-center font-bold text-white">Add Data</button>
          
          </div>
        </div>
        <table class="border-collapse w-full">
          <tr class="border border-solid rounded-[10px] h-22 bg-primary">
              <th class=" text-white">NO</th>
              <th class=" text-white">NO</th>
              <th class=" text-white">NO</th>
              <th class=" text-white">NO</th>
              <th class=" text-white">NO</th>
              <th class=" text-white">NO</th>
          </tr>
</table>
    </div>
  </body>
</html>
