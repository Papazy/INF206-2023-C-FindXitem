    @extends('Layouts.main')
    @section('container')

<div class="about">
      <div class="about">About</div>
        <div class="kalimat">Website untuk menemukan barang hilang adalah sebuah platform online yang dibuat untuk membantu orang mencari barang yang hilang atau kehilangan milik mereka. Situs web semacam ini dapat memfasilitasi proses pencarian dengan cara mengumpulkan informasi tentang barang yang hilang dan kemudian mempublikasikannya untuk dilihat oleh orang-orang yang mungkin memiliki informasi yang berguna atau bahkan telah menemukannya.</div>
        <div class="anggota">
            <div class="anggota-item">
              <img src="public/img/foto.png" alt="Foto Fajry" style="width: 200px;">
              <span class="anggota-nama">Fajry Ariansyah</span>
              <span class="anggota-nama">2108107010059</span>
            </div>
            <div class="anggota-item">
              <img src="/img/gambar.png" alt="Foto Devi" style="width: 200px;">
              <span class="anggota-nama">Devi Anggraini</span>
              <span class="anggota-nama">2108107010008</span>
            </div>
            <div class="anggota-item">
              <img src="/img/gambar.png" alt="Foto Teuku" style="width: 200px;">
              <span class="anggota-nama">Teuku Rifal Aulia</span>
              <span class="anggota-nama">2108107010064</span>
            </div>
          </div>
        </div>          
        </div>
        <div class="foto"></div>
        <div class="keterangan"></div>
    </div>
<style>


body{
    padding: 30px 100px;
    background-image: url(/img/outer_space_4k.jpg);
    /* font-family: 'Montserrat', sans-serif; */
    font-family: 'Poppins', sans-serif;
    background-repeat: no-repeat;
    background-size: cover;
    color: azure;
}


.about {
  margin: 600;
  font-size: 30px;
  position: relative;
  content: "";
  display: block;
  margin: 0 auto;
  font-family: "Roboto", sans-serif;
  color: white;
  text-align: center;
}


.kalimat {
    margin: 700;
    font-size: 24px;
    margin-top: 30px;
    
}

.anggota {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
    color: white;
    margin: 400;
    font-size: 30px;
  }
  
  .anggota-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 50px;
  }
  
  .anggota-nama {
    margin-top: 10px;
    font-size: 20px;
  }
    </style>

</body>

@endsection