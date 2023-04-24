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
    <div class="content">
        <p style="font-size: 2.5rem;margin-bottom: 20px;">Submit Barang temuan</p>
        <div class="form">
            <div class="form-grid">

                <div class="input_field">
                    <label for="">Barang temuan</label>
                    <p class="deskripsi-input">(Handphone, Jaket, Dompet, Hewan, Tas dll). </p>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label for="">Kategori Barang</label>
                    <p class="deskripsi-input">(Hewan, Pakaian, Elektronik dll). </p>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label for="">Warna utama Barang</label>
                    <p class="deskripsi-input">(Warna utama dari barang anda). </p>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label for="">Warna kedua Barang</label>
                    <p class="deskripsi-input">(Warna-warna kecil dari barang anda). </p>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label for="">Brand Barang</label>
                    <p class="deskripsi-input">(Samsung, Iphone, Nike, Adidas). </p>
                    <input type="text" class="input">
                </div>
            </div>
            
            <p style="font-size: 2.5rem;margin: 10px;   ">Lokasi dan Waktu</p>
            <div class="form-grid">
                <div class="input_field">
                    <label for="">Lokasi Penemuan</label>
                    <p class="deskripsi-input">(Tuliskan lokasi kira-kira ditemukan barang). </p>
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label for="">Tanggal Penemuan</label>
                    <p class="deskripsi-input">(Estimasi waktu penemuan). </p>
                    <input type="date" class="input" value="">
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31768.869652099464!2d95.32211199999999!3d5.550899200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3040374934a943ab%3A0xbabe816ca4be1e2f!2sMasjid%20Raya%20Baiturrahman!5e0!3m2!1sid!2sid!4v1681398032351!5m2!1sid!2sid" width="480" height="300" style="border:solid 2px rgb(143, 143, 143);border-radius: 20px; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
                
            </div>
            <br>
            <p style="font-size: 2.5rem;margin: 10px;   ">Informasi Pengirim</p>
            <div class="form-grid">
                <div class="input_field">
                    <label for="">Nama</label>
                    <br>
                    <input type="date" class="input" value="">
                </div>
                <div class="input_field">
                    <label for="">No HP</label>
                    
                    <br>
                    
                    <input type="text" class="input">
                </div>
                <div class="input_field">
                    <label for="">Email</label>
                    <br>
                    
                    <input type="text" class="input">
                </div>
                
            </div>


        <input type="submit" name="submit"  id="submit" value="Submit">
        </div>
        
    </div>
    <div class="footer"></div>

    
</body>
</html>