<?php include '../koneksi.php'; 

// Ambil data ekstrakurikuler berdasarkan ID
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM ekstra WHERE id='$id'");
    $data = mysqli_fetch_array($query);
    
    if(!$data) {
        echo "<script>alert('Data ekstrakurikuler tidak ditemukan');window.location='extra.php';</script>";
        exit();
    }
    
    // Jika timetable hanya berisi jam mulai saja
    $jam_mulai = $data['timetable']; // Langsung ambil dari timetable
    $hari = $data['hari']; // Ambil hari dari kolom terpisah
    $jam_selesai = ''; // Kosongkan jam selesai atau set default
    
} else {
    echo "<script>alert('ID ekstrakurikuler tidak valid');window.location='extra.php';</script>";
    exit();
}

// Proses update data
if(isset($_POST['update'])){
    $nama_ekstra = $_POST['nama_ekstra'];
    $hari = $_POST['hari'];
    $jam_mulai = $_POST['jam_mulai'];
    $guru_ekstra = $_POST['guru_ekstra'];
    
    // Jika timetable hanya jam mulai
    $timetable = $jam_mulai;
    
    $update_query = "UPDATE ekstra SET 
        nama='$nama_ekstra', 
        hari='$hari', 
        timetable='$timetable', 
        guru='$guru_ekstra'
        WHERE id='$id'";
    
    if(mysqli_query($conn, $update_query)) {
        echo "<script>alert('Data ekstrakurikuler berhasil diperbarui');window.location='extra.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Ekstrakurikuler</title>
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
          
          <a href="../major/major.php" class="flex items-center gap-3 w-full duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
            <img src="../assets/icon/major-icon.png" alt="" />
            <span class="text-[20px] font-bold">Major</span>
          </a>
          
          <a href="../subject/subject.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 hover:bg-[var(--color-accent)]">
            <img src="../assets/icon/subject-icon.png" alt="" />
            <span class="text-[20px] font-bold">Subjects</span>
          </a>
          
          <a href="../extra/extra.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 bg-[var(--color-secondary)] hover:bg-[var(--color-accent)]">
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
          <h1 class="text-5xl font-black text-primary">EDIT EXTRACURRICULAR</h1>
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
                <label class="my-2 text-primary">Extracurricular Name</label>
                <input
                  type="text"
                  id="nama_ekstra"
                  name="nama_ekstra"
                  required
                  placeholder="Extracurricular Name"
                  class="w-full p-4 border-2 border-primary rounded-[10px]"
                  value="<?= $data['nama'] ?>"
                />
              </div>

              <div class="flex flex-row w-full justify-between gap-5">
                <div class="relative w-full my-3">
                  <label class="my-2 text-primary">Day</label>
                  <select
                    name="hari"
                    required
                    class="w-full p-4 border-2 border-primary rounded-[10px] appearance-none"
                  >
                    <option value="">Select Day</option>
                    <option value="Monday" <?= $hari == 'Monday' ? 'selected' : '' ?>>Monday</option>
                    <option value="Tuesday" <?= $hari == 'Tuesday' ? 'selected' : '' ?>>Tuesday</option>
                    <option value="Wednesday" <?= $hari == 'Wednesday' ? 'selected' : '' ?>>Wednesday</option>
                    <option value="Thursday" <?= $hari == 'Thursday' ? 'selected' : '' ?>>Thursday</option>
                    <option value="Friday" <?= $hari == 'Friday' ? 'selected' : '' ?>>Friday</option>
                    <option value="Saturday" <?= $hari == 'Saturday' ? 'selected' : '' ?>>Saturday</option>
                  </select>
                </div>

                <div class="relative w-full my-3">
                  <label class="my-2 text-primary">Time</label>
                  <input
                    type="time"
                    id="jam_mulai"
                    name="jam_mulai"
                    required
                    class="w-full p-4 border-2 border-primary rounded-[10px]"
                    value="<?= $jam_mulai ?>"
                  />
                </div>
              </div>

              <div class="flex flex-row w-full justify-between gap-5">
                <div class="relative w-full my-3">
                  <label class="my-2 text-primary">Extracurricular Teacher</label>
                  <select
                    name="guru_ekstra"
                    required
                    class="w-full p-4 border-2 border-primary rounded-[10px] appearance-none"
                  >
                    <option value="">Select Teacher</option>
                    <?php
                    $teacher_query = mysqli_query($conn, "SELECT * FROM guru ORDER BY nama");
                    while($teacher = mysqli_fetch_array($teacher_query)){
                    ?>
                    <option value="<?= $teacher['nama']; ?>" <?= $data['guru'] == $teacher['nama'] ? 'selected' : '' ?>>
                      <?= $teacher['nama']; ?>
                    </option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              
              <div class="flex justify-end w-full mt-5">
                <button
                  type="submit"
                  name="update"
                  class="flex h-15 w-40 justify-center items-center rounded-[10px] bg-primary text-white"
                >
                  Update
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>