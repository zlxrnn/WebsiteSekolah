<?php include './koneksi.php'; ?>
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
      <nav
        class="flex h-225 w-70 flex-col justify-center items-start bg-[var(--color-primary)] text-[var(--color-white)]"
      >
        <h1 class="px-5 font-bold mb-17">SMK TI BALI GLOBAL DENPASAR</h1>
        <p class="text-sm text-grey my-4 px-5">OVERVIEW</p>

        <div
          class="flex items-center w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
        >
          <a href="/dashboard.html" class="text-[20px] font-bold">Dashboard</a>
        </div>
        <div
          class="flex items-center w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)] "
        >
          <a href="/student/student.html" class="text-[20px] font-bold">Student</a>
        </div>
        <div
          class="flex items-center w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)] bg-[var(--color-secondary)]"
        >
          <a href="#Teacher" class="text-[20px] font-bold"
            >Teacher</a
          >
        </div>
        <div
          class="flex items-center w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
        >
          <a href="/major/major.html" class="text-[20px] font-bold">Major</a>
        </div>
        <div
          class="flex items-center w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
        >
          <a href="/subject/subject.html" class="text-[20px] font-bold"
            >Subjects</a
          >
        </div>
        <div
          class="flex items-center w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]"
        >
          <a href="/extra/extra.html" class="text-[20px] font-bold"
            >Extraculliculer</a
          >
        </div>
      </nav>

      <div class="flex flex-col h-full m-10">
        <div
          class="flex flex-col h-40 w-250 mb-26 items-start justify-center shadow-2xl rounded bg-grey pl-15"
        >
          <h1 class="text-5xl font-black">TEACHER</h1>
        </div>
        <div class=" flex flex-col">
          <div class="flex flex-row w-full px-6">
            <div class="relative w-full my-6">
            <input class="w-80 p-4 border-2 border-primary rounded-[10px] focus:" type="text" name="" required placeholder="Find Teacher" />
           
          </div>
           <button type="submit" name="add" class="flex py-4 h-15 rounded-2xl w-50 bg-yellow my-6 justify-center font-bold text-white">Add Data</button>
          
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
