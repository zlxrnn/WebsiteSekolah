<?php include '../koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../output.css" rel="stylesheet" />
    <title>Siswa - Dashboard</title>
  </head>
  <body>
    <div class="flex gap-5">
      <!-- SIDE BAR -->
        <div class="flex w-70">
        <nav
          class="flex absolute h-screen w-70 flex-col justify-center items-start bg-[var(--color-primary)] text-[var(--color-white)]"
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

          <a href="../student/student.php" class="flex items-center w-full gap-3 duration-300 cursor-pointer px-5 py-7 bg-[var(--color-secondary)] hover:bg-[var(--color-accent)]">
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
          <h1 class="text-5xl font-black">STUDENT</h1>
        </div>
        <div class=" flex flex-col">
          <div class="flex flex-row w-full px-6">
            <div class="relative w-full my-6">
              <form method="GET" action="" class="flex items-center gap-4">
                <input 
                  class="w-80 p-4 border-2 border-primary rounded-[10px] focus:outline-none focus:border-primary-dark" 
                  type="text" 
                  name="search" 
                  value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>" 
                  placeholder="Search by Name or NIS"
                />
                <button 
                  type="submit" 
                  class="px-6 py-4 bg-primary text-white rounded-[10px] hover:bg-primary-dark transition-colors"
                >
                  Search
                </button>
                <?php if(isset($_GET['search'])): ?>
                  <a
                    href="./student.php" 
                    class="px-6 py-4 bg-gray-400 !important text-white rounded-[10px] hover:bg-primary-dark transition-colors no-underline inline-flex items-center justify-center"
                    style="background-color: #99a1af !important;"
                  >
                    Clear
                  </a>
                <?php endif; ?>
              </form>
            </div>
            <a href="./tambah.php" class="flex py-4 h-15 rounded-2xl w-50 bg-yellow my-6 justify-center font-bold text-white">Add Data</a>
          </div>
        </div>
      
      <div class="overflow-x-auto max-h-96">
        <table class="border-collapse w-full">
          <thead>
            <tr class="border border-solid rounded-[10px] h-22 bg-primary">
                <th class="text-white py-3 px-4 text-center">NO</th>
                <th class="text-white py-3 px-4 text-center">NIS</th>
                <th class="text-white py-3 px-4 text-center">NAME</th>
                <th class="text-white py-3 px-4 text-center">CLASS</th>
                <th class="text-white py-3 px-4 text-center">MAJOR</th>
                <th class="text-white py-3 px-4 text-center">ACTION</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $limit = 4;
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $offset = ($page - 1) * $limit;
            
            $search_query = "";
            $count_query = "SELECT COUNT(*) as total FROM siswa";
            $data_query = "SELECT * FROM siswa";
            
            if(isset($_GET['search']) && !empty($_GET['search'])) {
              $search_term = mysqli_real_escape_string($conn, $_GET['search']);
              $search_condition = " WHERE nama LIKE '%$search_term%' OR nis LIKE '%$search_term%'";
              $search_query = $search_condition;
            }
            
            $total_query = mysqli_query($conn, $count_query . $search_query);
            $total_data = mysqli_fetch_assoc($total_query)['total'];
            $total_pages = ceil($total_data / $limit);
            
            $data_query .= $search_query . " LIMIT $offset, $limit";
            $data = mysqli_query($conn, $data_query);
            
            $no = $offset + 1;
            if (mysqli_num_rows($data) > 0) {
              while($d = mysqli_fetch_array($data)){
              ?>
                  <tr class="border-solid border h-22 transition-all duration-200 hover:bg-gray-100">
                      <td class="py-3 px-4 text-center"><?= $no++; ?></td>
                      <td class="py-3 px-4 text-center"><?= $d['nis']; ?></td>
                      <td class="py-3 px-4 text-center"><?= $d['nama']; ?></td>
                      <td class="py-3 px-4 text-center"><?= $d['kelas']; ?></td>
                      <td class="py-3 px-4 text-center"><?= $d['jurusan']; ?></td>
                      <td class="py-3 px-4 text-center">
                          <div class="flex gap-3 justify-center">
                              <a href="edit.php?id=<?= $d['id']; ?>" class="abtn flex w-14 rounded-full h-13 justify-center items-center bg-primary hover:bg-primary-dark transition-colors">
                                  <img src="../assets/icon/edit.png" alt="Edit">
                              </a>
                              <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Are you sure you want to delete this student?')" class="abtn flex w-14 rounded-full h-13 justify-center items-center bg-red hover:bg-red-dark transition-colors">
                                  <img src="../assets/icon/sampah-icon.png" alt="Delete">
                              </a>
                          </div>
                      </td>
                  </tr>
            <?php }
            } else {
              ?>
              <tr>
                <td colspan="6" class="py-4 px-4 text-center text-gray-500">
                  <?= isset($_GET['search']) ? 'No students found for "' . htmlspecialchars($_GET['search']) . '"' : 'No data available' ?>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>

        <div class="flex justify-between items-center mt-4 px-6">
          <div class="text-sm text-gray-600">
            Showing <?= $offset + 1 ?> to <?= min($offset + $limit, $total_data) ?> of <?= $total_data ?> entries
            <?= isset($_GET['search']) ? ' for "' . htmlspecialchars($_GET['search']) . '"' : '' ?>
          </div>
          <div class="flex gap-3">
            <?php if ($page > 1): ?>
              <a href="?page=<?= $page - 1 ?><?= isset($_GET['search']) ? '&search=' . urlencode($_GET['search']) : '' ?>" class="px-5 py-3 bg-primary text-white rounded-[10px] hover:bg-primary-dark transition-colors">
                Previous
              </a>
            <?php endif; ?>
            
            <?php 
            $start_page = max(1, $page - 2);
            $end_page = min($total_pages, $page + 2);
            
            for ($i = $start_page; $i <= $end_page; $i++): 
            ?>
              <a href="?page=<?= $i ?><?= isset($_GET['search']) ? '&search=' . urlencode($_GET['search']) : '' ?>" class="px-5 py-3 rounded-[10px] <?= $i == $page ? 'bg-primary text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' ?> transition-colors">
                <?= $i ?>
              </a>
            <?php endfor; ?>
            
            <?php if ($page < $total_pages): ?>
              <a href="?page=<?= $page + 1 ?><?= isset($_GET['search']) ? '&search=' . urlencode($_GET['search']) : '' ?>" class="px-5 py-3 bg-primary text-white rounded-[10px] hover:bg-primary-dark transition-colors">
                Next
              </a>
            <?php endif; ?>
          </div>
        </div>
    </div>
  </body>
</html>