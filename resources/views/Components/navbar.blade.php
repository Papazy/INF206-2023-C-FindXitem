<div class="navbar">
    <div class="navbar-logo">FindXitem</div>
    <div class="navbar-navi">
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
            <button class="btn login me-2 rounded-pill">Masuk</button>
            <button class="btn daftar ms-2 rounded-pill">Daftar</button>
        </ul>
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