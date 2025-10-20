<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Jurusan</title>
    <link href="../output.css" rel="stylesheet" />
  </head>
  <body>
    <div class="flex gap-5">
      <!-- SideBar -->
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
          
          <a href="../major/major.php" class="flex items-center gap-3 w-full duration-300 cursor-pointer px-5 py-7 bg-[var(--color-secondary)] hover:bg-[var(--color-accent)]">
            <img src="../assets/icon/major-icon.png" alt="" />
            <span class="text-[20px] font-bold">Major</span>
          </a>
          
          <a href="../subject/subject.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
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

      <!-- Main Content -->
      <div class="flex flex-col h-full m-10">
        <div
          class="flex flex-col h-40 w-250 mb-26 items-start justify-center shadow-2xl rounded bg-grey pl-15"
        >
          <h1 class="text-5xl font-black text-primary">EDIT MAJOR</h1>
        </div>
        <div
          class="flex flex-col h-120 w-250 items-start justify-center shadow-2xl rounded bg-grey p-7"
        >
          <div class="flex flex-col w-full">
            <form
              method="POST"
              class="flex w-full items-start justify-center flex-col"
            >
              <div class="relative w-full my-3">
                <label class="my-2 text-primary">Major Code</label>
                <input
                  type="number"
                  id="kode"
                  name="kode"
                  required
                  placeholder="Major Code (e.g., RPL, TKJ, MM)"
                  class="w-full p-4 border-2 border-primary rounded-[10px]"
                />
              </div>

              <div class="relative w-full my-3">
                <label class="my-2 text-primary">Major Name</label>
                <input
                  class="w-full p-4 border-2 border-primary rounded-[10px] focus:"
                  type="text"
                  id="nama"
                  name="nama"
                  required
                  placeholder="Major Name (e.g., Rekayasa Perangkat Lunak)"
                />
              </div>

              <div class="relative w-full my-3">
                <label class="my-2 text-primary">Information</label>
                <textarea
                  name="informasi"
                  required
                  placeholder="Major description and information"
                  class="w-full p-4 border-2 border-primary rounded-[10px] h-32 resize-none"
                ></textarea>
              </div>
              
              <div class="flex justify-end w-full mt-5">
                <button
                  type="submit"
                  name="simpan"
                  class="flex h-15 w-40 justify-center items-center rounded-[10px] bg-primary text-white"
                >
                  Confirm
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

<?php
if(isset($_POST['simpan'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $informasi = $_POST['informasi'];

    mysqli_query($conn, "INSERT INTO jurusan (code, nama, informasi) 
                        VALUES ('$kode', '$nama', '$informasi')");
    
    echo "<script>alert('Data jurusan berhasil disimpan');window.location='major.php';</script>";
}
?>
  </body>
</html>