<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Explore</title>

   <link rel="stylesheet" href="styles.css">
   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css">
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

      body {
         color: var(--text-color);
         background: var(--bg-color);
         padding-top: 110px;
         transition: opacity 0.5s ease;
      }

      * {
         padding: 0;
         margin: 0;
         box-sizing: border-box;
         list-style: none;
         text-decoration: none;
         border: none;
         outline: none;
         font-family: 'Montserrat', sans-serif;
      }

      :root {
         --text-color: #fff;
         --bg-color: #fff;
         --main-color: #ffa343;
         --black-color: #000;
         --nav-color: #80EF80;

         --font-1: 'Montserrat', sans-serif;
         --h1-font: 6rem;
         --h2-font: 3rem;
         --p-font: 1rem;
      }

      header {
         position: fixed;
         top: 0;
         right: 0;
         z-index: 1000;
         width: 100%;
         background: var(--nav-color);
         padding: 23px 12%;
         display: flex;
         align-items: center;
         justify-content: space-between;
         transition: .50s ease;
         border-bottom: 2px solid #000;
      }

      span {
         color: #0F5132;
      }

      .logo {
         font-size: 33px;
         color: var(--black-color);
         font-weight: 700;
         letter-spacing: 2px;
      }

      .navbar {
         display: flex;
      }

      .navbar a {
         color: var(--black-color);
         font-size: var(--p-font);
         font-weight: 500;
         margin: 15px 22px;
         transition: all .40s ease;
      }

      .navbar a:hover {
         color: var(--text-color);
      }

      .h-right {
         display: flex;
         align-items: center;
         justify-content: center;
         background: var(--nav-color);
         height: 40px;
         padding: 10px;
      }

      .h-right input[type="text"] {
         padding: 8px;
         border: 2px solid #000;
         border-radius: 6px;
         font-size: 16px;
         background-color: #72BF6A;
         width: 200px;
         transition: width 0.3s ease;
      }

      .h-right input[type="text"]:focus {
         width: 250px;
         border-color: var(--main-color);
      }

      .quiz-container {
         background-color: #fff;
         padding: 40px;
         width: 60%;
         max-width: 600px;
         border: 2px solid #000;
         border-radius: 10px;
         text-align: center;
         box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
         margin: 0 auto;
         margin-top: 85px;
         position: relative;
      }

      .quiz-title {
         font-size: 2.5rem;
         font-weight: bold;
         margin-bottom: 20px;
      }

      .quiz-description p {
         font-size: 1.4rem;
         margin-bottom: 100px;
         color: #333;
      }

      .start-button {
         font-size: 1.5rem;
         font-weight: bold;
         text-decoration: none;
         color: #fff;
         background-color: #000;
         padding: 15px 30px;
         border-radius: 30px;
         display: inline-flex;
         align-items: center;
         gap: 10px;
         transition: background-color 0.3s ease;
         position: absolute;
         bottom: -200px;
         left: 50%;
         transform: translateX(-50%);
      }

      .start-button:hover {
         background-color: #72BF6A;
      }

      .start-button span {
         font-size: 1.8rem;
      }
   </style>
</head>

<body>
   <header>
      <a href="" class="logo">Learn<span>leap</a>
      <ul class="navbar">
         <li><a href="">Home</a></li>
         <li><a href="explore.php">Explore</a></li>
         <li><a href="">Join Private Quiz</a></li>
         <li><a href="">Contact</a></li>
      </ul>

      <div class="h-right">
         <input type="text" placeholder="Search">
      </div>
   </header>
   <div class="quiz-container">
      <h1 class="quiz-title">Quiz Name</h1>
      <div class="quiz-description">
         <p>About Quiz</p>
      </div>
      <a href="" class="start-button">START <span>&rarr;</span></a>
   </div>

   <script>
      document.querySelectorAll('a').forEach(link => {
         link.addEventListener('click', (e) => {
            e.preventDefault();
            const href = link.getAttribute('href');

            document.body.classList.add('fade-out');

            setTimeout(() => {
               window.location.href = href;
            }, 500);
         });
      });
   </script>
</body>

</html>
