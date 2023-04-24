<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindXitem | Melaporkan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="navbar-logo">FindXitem</div>
        <div class="navbar-nav">
            <ul class="navbar-items-container">
                <li class="navbar-item"><a href="#">Home</a></li>
                <li class="navbar-item ">
                    <a class="btnDropdown" href="#" onclick="toggle_dropdown()">Barang</a>
                    <div class="wrapper">
                        <div class="dropdown" id="dropdown">
                        <a href="hal-pencarian">Mencari</a>
                        <a href="hal-pelaporan">Melaporkan</a>
                        <a href="#">Kategori</a>
                        </div>
                    </div>
                </li>
                <li class="navbar-item"><a href="#">About</a></li>
            </ul>
            <button class="btn login">Masuk</button>
            <button class="btn daftar">Daftar</button>
        </div>
    </div>
    <script>
        function toggle_dropdown(){
            document.getElementById('dropdown').classList.toggle('show');
        }

        // tutup boila di click di luar
        window.onclick = function(e){
            if(!e.target.matches('.btnDropdown')){
                var myDropdown = document.getElementById("dropdown");
                if(myDropdown.classList.contains('show')){
                    myDropdown.classList.remove('show')
                }
            }
        }
    </script>
    <div class="content content-not-found">
        <img class="img-not-found" src="img/no-result-found.png" alt="No-result-found img">
        <div class="desc">
            <p style="font-size: 2rem;font-weight: 700;">Maaf barang yang anda cari belum ditemukan</p>
            <p>Coba masukkan deskripsi lain tentang barang anda</p>
            <p>Anda dapat menunggu notifikasi hingga barang anda ditemukan</p>
            <br>
            <button ><a class="btn" href="hal-pencarian">Cari kembali</a></button>
        </div>
    </div>

    
</body>
</html>