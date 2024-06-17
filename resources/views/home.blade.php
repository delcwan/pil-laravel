<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> KELOMPOK 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>

.section-title {
    margin-bottom: 5px;
    font-size: 24px;
    font-weight: bold;
    margin-left: 1%;
    color: #fff
    
    
}



.carousel-item {
    display: flex;
    justify-content: space-around;
    width: 100%; /* Sesuaikan dengan lebar yang diinginkan */
    height: auto; /* Sesuaikan dengan tinggi yang diinginkan */

}

.carousel-control-prev,
.carousel-control-next {
    margin-left: 1%;
    color: #ff0000;  /* Warna ikon */
}
.carousel-inner {
    display: flex;
    flex-direction: row;
    padding: 10px; /* Sesuaikan dengan kebutuhan */
    margin-left: 5%;

}

.carousel-item:not(.active) .film-container {
    display: none;

}

    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
    }

    .main {

      background: url('film.jpg') center/cover no-repeat;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #fff;
      padding-left: 20px;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0));
      z-index: 1;
    }

    .logo {
      width: 100%;
      margin-bottom: 10%;
      filter: brightness(100%);
      z-index: 9;
    }



    .content {
      text-align: center;
      line-height: 1.5;
      z-index: 2;
      margin-bottom: 20%



    }

    .content h1 {
      margin-bottom: 10px;
    }

    .content p {
      margin-bottom: 10px;
    }

    .content button {
      background: #e50914;
      color: #fff;
      padding: 10px 20px;
      font-size: 1.2em;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }

    .film-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: flex-start;
      padding: 20px;
      background-color: #000;
      overflow: auto;
    }

    .film-card {
      position: relative;
      width: calc(16.666% - 20px);
      margin-bottom: 20px;
      overflow: hidden;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: #111;
      cursor: pointer;
    }


    .film-card img {
      width: 100%;
      height: auto;
      border-radius: 8px 8px 0 0;
      transition: filter 0.3s, transform 0.3s;
    }

    .play-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0;
      transition: opacity 0.3s;
      font-size: 2em; /* Ukuran teks */
      color: #fff; /* Warna teks */
    }

    .film-card:hover img {
      filter: blur(3px);
      transform: scale(1.1);
    }

    .film-card:hover .play-icon {
      opacity: 1;
    }
    
  .film-info {
  padding: 10px;
  background-color: #111;
  color: #fff; /* Menyesuaikan warna tulisan judul film */
  text-align: center;
}
  
.black-box {

  background-color: #000; /* Hitam */


}

.black-box form {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #000; /* Hitam */
  padding: 10px;
  border-radius: 8px;
}


.black-box input {
  flex-grow: 1;
  margin-right: 10px;
  background-color: #333; /* Warna abu-abu yang lebih gelap */
  color: #fff; /* Warna teks putih */
  border: none;
  padding: 8px;
  border-radius: 4px;
  margin-top: 2%
}

.black-box button {
  background-color: #ff0000; /* Warna abu-abu yang lebih gelap */
  color: #ffffff; /* Warna teks putih */
  border: none;
  padding: 8px 20px;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 2%
}

a {
  text-decoration: none;
  color: inherit; /* Menyesuaikan warna tautan dengan warna teks */
}



  </style>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const filmCards = document.querySelectorAll('.film-card');

    searchInput.addEventListener('input', function () {
      const searchKeyword = searchInput.value.toLowerCase();

      filmCards.forEach(function (filmCard) {
        const filmInfo = filmCard.querySelector('.film-info');
        const filmTitle = filmInfo.innerText.toLowerCase();

        // Tampilkan atau sembunyikan card berdasarkan pencarian
        filmCard.style.display = filmTitle.includes(searchKeyword) ? 'block' : 'none';
      });
    });
  });
</script>

</head>
<body>
  <div class="main">
    
    <div class="overlay"></div>
    
    <div class="logo">
      <img src="idlix.png" alt="logo idlix">

    </div>
    <div class="content">
      <h1><b>Selamat Datang di Idlix</b></h1>
      <p><b>Selamat Menonton Sahabat Sahabatku </b></p>
    </div>

  </div>

<div class="black-box">
  <form class="d-flex">
    <input id="searchInput" class="form-control me-2" type="search" placeholder="Cari Film" aria-label="Search">
    <button class="btn btn-outline-light" type="submit">Search</button>
  </form>



</div>


<div class="film-container">
  <!-- Film Card 1 -->
  <div class="film-card" id="filmCard1">
    <a href="/film">
      <img src="film6.png" alt="Film 1">
      <div class="play-icon">▶</div>
      <div class="film-info">
        Saltburn (2023)
      </div>
    </a>
  </div>

<!-- Film Card 2 -->
<div class="film-card" id="filmCard2">
  <a href="/comingsoon">
  <img src="SOLO.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    Solo Leveling (2024)
  </div>
</a>
</div>

<!-- Film Card 3 -->
<div class="film-card" id="filmCard3">
  <a href="/comingsoon">
  <img src="film2.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    Reacher (2022)
  </div>
  </a>
</div>

<!-- Film Card 4 -->
<div class="film-card" id="filmCard4">
  <a href="/comingsoon">
  <img src="film3.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    Sweet Home (2020)
  </div>
  </a>
</div>

<!-- Film Card 5 -->
<div class="film-card" id="filmCard5">
  <a href="/comingsoon">
  <img src="film4.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    The Marvels (2023)
  </div>
  </a>
</div>

<!-- Film Card 6 -->
<div class="film-card" id="filmCard6">
  <a href="/comingsoon">
  <img src="film5.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    Vigilante (2023)
  </div>
  </a>
</div>

<div class="film-card" id="filmCard6">
  <a href="/comingsoon">
  <img src="film11.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    The Bricklayer (2023)
  </div>
  </a>
</div>


<div class="film-card" id="filmCard6">
  <a href="/comingsoon">
  <img src="film12.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    Tiger 3 (2023)
  </div>
  </a>
</div>

<div class="film-card" id="filmCard6">
  <a href="/comingsoon">
  <img src="film13.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    Z Nation (2014)
  </div>
  </a>
</div>

<div class="film-card" id="filmCard6">
  <a href="/comingsoon">
  <img src="film14.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    Lawmen: Bass Reeves
  </div>
  </a>
</div>

<div class="film-card" id="filmCard6">
  <a href="/comingsoon">
  <img src="film15.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    Yu Yu Hakusho (2023)
  </div>
  </a>
</div>

<div class="film-card" id="filmCard6">
  <a href="/comingsoon">
  <img src="film16.png" alt="Film 1">
  <div class="play-icon">▶</div>
  <div class="film-info">
    What If…? (2021)
  </div>
  </a>
</div>
  </div>

  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>
