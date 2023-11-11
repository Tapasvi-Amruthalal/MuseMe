<html>
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link rel="stylesheet" href="style.css">
      
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <style>
          @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
          }

          :root {
            --body-color: #e4e9f7;
            --sidebar-color: #fff;
            --primary-color: #695cfe;
            --primary-color-light: #f6f5ff;
            --toggle-color: #ddd;
            --text-color: #707070;

            --tran-03: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.3s ease;
            --tran-05: all 0.3s ease;
          }

          body {
            min-height: 100vh;
            background-color: var(--body-color);
            transition: var(--tran-05);
          }

          ::selection {
            background-color: var(--primary-color);
            color: #fff;
          }

          .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            padding: 10px;
            background: var(--sidebar-color);
            transition: var(--tran-05);
            z-index: 100;
          }
          .sidebar.close {
            width: 88px;
          }

          .sidebar li {
            height: 50px;
            list-style: none;
            display: flex;
            align-items: center;
            margin-top: 10px;
            padding:10px;
          }

          .sidebar header .image,
          .sidebar .icon {
            min-width: 60px;
            border-radius: 8px;
          }

          .sidebar .icon {
            min-width: 60px;
            border-radius: 6px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
          }

          .sidebar .text,
          .sidebar .icon {
            color: var(--text-color);
            transition: var(--tran-03);
          }

          .sidebar .text {
            font-size: 15px;
            font-weight: 500;
            white-space: nowrap;
            opacity: 1;
            padding:20px;
          }
          .sidebar.close .text {
            opacity: 0;
          }

          .sidebar header {
            position: relative;
          }

          .sidebar header .image-text {
            display: flex;
            align-items: center;
          }
          .sidebar header .logo-text {
            display: flex;
            flex-direction: column;
            padding-left: 0px;
          }
          header .image-text .name {
            margin-top: 2px;
            font-size: 25px;
            font-weight: 1000;
            font-family: "Segoe Script";
          }

          header .image-text {
            font-size: 16px;
            margin-top: -2px;
            display: block;
          }

          .sidebar header .image {
            display: flex;
            align-items: center;
            justify-content: center;
          }

          .sidebar header .image img {
            width: 40px;
            border-radius: 6px;
          }

          .sidebar header .toggle {
            position: absolute;
            top: 50%;
            right: -25px;
            transform: translateY(-50%) rotate(180deg);
            height: 25px;
            width: 25px;
            background-color: var(--primary-color);
            color: var(--sidebar-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            cursor: pointer;
            transition: var(--tran-05);
          }

          body.dark .sidebar header .toggle {
            color: var(--text-color);
          }

          .sidebar.close .toggle {
            transform: translateY(-50%) rotate(0deg);
          }

          .sidebar .menu {
            margin-top: 0px;
            padding-right:10px;
          }


          .sidebar li a {
            padding: 7px;
            list-style: none;
            height: 100%;
            background-color: transparent;
            display: flex;
            align-items: center;
            height: 100%;
            width: 100%;
            border-radius: 3px;
            text-decoration: none;
            transition: var(--tran-03);
          }

          .sidebar li a:hover {
            background-color: var(--primary-color);
          }
          .sidebar li a:hover .icon,
          .sidebar li a:hover .text {
            color: var(--sidebar-color);
          }
          body.dark .sidebar li a:hover .icon,
          body.dark .sidebar li a:hover .text {
            color: var(--text-color);
          }

          .sidebar .menu-bar {
            height: calc(100% - 55px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-y: scroll;
          }
          .menu-bar::-webkit-scrollbar {
            display: none;
          }
          .sidebar .menu-bar .mode {
            border-radius: 6px;
            background-color: var(--primary-color-light);
            position: relative;
            transition: var(--tran-05);
          }

          .menu-bar .mode {
            height: 50px;
            width: 60px;
          }

          .menu-bar .bottom-content .toggle-switch {
            position: absolute;
            right: 0;
            height: 100%;
            min-width: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            cursor: pointer;
          }
          .toggle-switch {
            position: relative;
            height: 22px;
            width: 40px;
            border-radius: 25px;
            background-color: var(--toggle-color);
            transition: var(--tran-05);
          }

          .bi{
            font-size:25px
          }
          .home {
            position: absolute;
            top: 0;
            top: 0;
            left: 250px;
            height: 100vh;
            width: calc(100% - 250px);
            background-color: var(--body-color);
            transition: var(--tran-05);
          }
          .home .text {
            font-size: 30px;
            font-weight: 500;
            color: var(--text-color);
            padding: 12px 60px;
          }

          .sidebar.close ~ .home {
            left: 78px;
            height: 100vh;
            width: calc(100% - 78px);
          }
          
          body {font-family: Arial, Helvetica, sans-serif;}

          .image-container {
            margin: 20px;
            position: relative;
            height: 10vh;
          }
          .nav-link {
            padding-right:20px;
          }
          .text1 {
            background-color: darkslateblue;
            color: white;
            font-size: 25px;
            font-weight: bold;
            width: 35px;
            height:35px;
            text-align: center;
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
          }
        </style>
    </head>
    <body>
    <nav class="sidebar close">
    <header>
      <div class="image-text">
        <span class="image">
          <img src="/images/logo.png" alt="">
        </span>

        <div class="text logo-text">
          <span class="name">MuseMe</span>
        </div>
      </div>

      <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
      <div class="menu">

        <ul class="menu-links">
          <li class="nav-link">
            <div class="image-container">
            <div class="text1">V</div>
            </div>
            <span class="text nav-text" style="margin-top:10px; padding-left:12px">NAME</span>
          </li>
          
          <li class="nav-link">
            <a href="/">
              <i class="bi bi-house-fill"></i>
              <span class="text nav-text">HOME</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="/liked">
              <i class="bi bi-suit-heart-fill"></i>
              <span class="text nav-text">LIKED SONGS</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="/playlist">
              <i class="bi bi-file-earmark-music-fill"></i>
              <span class="text nav-text">MY PLAYLIST</span>
            </a>
          </li>

          <li class="nav-link">
            <a href="/chords">
              <i class="bi bi-music-note-beamed"></i>
              <span class="text nav-text">CHORDS</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="home">
    <div>
      @yield('content')
    </div>
  </section>

  <script>
    const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeText = body.querySelector(".mode-text");
    toggle.addEventListener("click", () => {
      sidebar.classList.toggle("close");
    })
  </script>
  
    </body>
</html>