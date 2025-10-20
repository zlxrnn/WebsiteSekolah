<?php
session_start();
if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.cdnfonts.com/css/jokerman" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pixelify+Sans:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />

    <title>Database</title>
  </head>
  <body class="w-full h-full overflow-hidden">
    <section class="flex gap-6 w-full h-screen">
      <div
        class="flex flex-col bg-[url('./assets/img_hero.png')] w-150 bg-cover bg-center bg-no-repeat relative text-left justify-center items-center"
      >
        <div class="flex flex-col items-start justify-center">
          <h1 class="text-7xl font-bold text-white text-left mb-5 max-w-82">
            Hello, Welcome!
          </h1>
          <p class="text-[15px] text-white max-w-80">
            Welcome to the TI Bali Denpasar Global Vocational School Management
            Website!
          </p>
        </div>
      </div>

      <div class="flex flex-col flex-1 min-w-50 justify-center items-start p-8">
        <form
          method="POST"
          class="flex w-4/5 items-start justify-center flex-col max-w-95"
        >
          <div class="relative w-full my-3">
            <label class="my-2 text-primary">Username</label>
            <input
              type="text"
              id="name"
              name="username"
              required
              placeholder="Your Username"
              class="w-full p-4 border-2 border-primary rounded-[10px]"
            />
          </div>

          <div class="relative w-full my-3">
            <label class="my-2 text-primary">Password</label>
            <input
              class="w-full p-4 border-2 border-primary rounded-[10px] focus:"
              type="password"
              id="Password"
              name="Password"
              required
              placeholder="Your Password"
            />
          </div>
        </form>
        <button type="submit" class="flex justify-center mt-4 items-center rounded h-10 bg-primary text-white w-26">Login</button>
      </div>
    </section>
  </body>
</html>
