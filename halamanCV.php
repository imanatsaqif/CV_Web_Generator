<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: serif;
}

/* Style the header */
.header {
  grid-area: header;
  padding: 5px;
  text-align: center;
  font-size: 35px;
}

/* The grid container */
.grid-container {
  display: grid;
  grid-template-areas: 
    'blank header header header header left' 
    'top top top top top top'
    'middle middle middle middle middle middle'
    'bottom bottom bottom bottom bottom bottom'
    'footer footer footer footer footer footer';
  /* grid-column-gap: 10px; - if you want gap between the columns */
} 

.left,
.blank
.top,
.middle,
.bottom {
  padding: 10px;
}

/* Style the left column */
.left {
  grid-area: left;
  text-align: right;
}

.blank {
  grid-area: blank;
  color: white;
}

/* Style the middle column */
.middle {
  grid-area: middle;
}
.top {
  grid-area: top;
}

.bottom {
  grid-area: bottom;
}

/* Style the footer */
.footer {
  grid-area: footer;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas: 
      'header header header header header header' 
      'left left left left left left'
      'top top top top top top'
      'middle middle middle middle middle middle'
      'bottom bottom bottom bottom bottom'
      'footer footer footer footer footer footer';
  }
}

/* ngatur font */

.header {
  font-family: Garamond;
}
</style>
</head>
<body>
<div class="grid-container">
  <div class="header">
    <h2>Imana Tsaqif Ariyadi</h2>
    <h5>G6401201080</h5>
  </div>

  <div class="left">
  Mahasiswa di IPB University   <img src="tas.png" alt="logo tas" width="20"> <br><br>
  Purworejo, 19 Agustus 2002   <img src="kalender.png" alt="logo tas" width="20"><br><br>
  Kel. Sucen Jurutengah, Kec. Bayan, Kab. Purworejo, Jawa Tengah   <img src="alamat.png" alt="logo tas" width="19"><br><br>
  iimtsaqif@apps.ipb.ac.id   <img src="email.png" alt="logo tas" width="20"><br><br>
  0812-4998-7430   <img src="telpon.png" alt="logo tas" width="18"> <br>
  </div>
  <div class="blank">
  Mahasiswa di IPB University <br>
  Purworejo, 19 Agustus 2002<br>
  Kel. Sucen Jurutengah, Kec. Bayan, Kab. Purworejo, Jawa Tengah<br>
  iimtsaqif@apps.ipb.ac.id<br>
  0812-4998-7430<br>
  </div>

  <div class="top">
  Profile:<br>
  <!-- Tambah Tabel yang disambungkan ke database -->
  Saya adalah seorang yang ambisius dan dapat bekerja dengan baik di dalam tim serta di bawah tekanan.<br><hr>
  </div>

  <div class="middle">
  Skill:<br>
  <!-- Tambah Tabel yang disambungkan ke database -->
  Menghias pot bunga.<br><hr>
  </div>
  
  <div class="bottom">
  Pengalaman:<br>
  <!-- Tambah Tabel yang disambungkan ke database -->
  Memenangkan Turnamen Sains Kabupaten Purworejo.<br><hr>
  </div>


  <div class="footer">
    <p>CV ini dibuat oleh kelompok 5<br>
    Zahra, Wan, Arvie, Imana<br><br>
    Tombol Navigasi:<br>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="home.png" alt="home page" width="20"></a>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="edit.png" alt="edit page" width="20"></a></p>
  </div>
</div>

</body>
</html>


