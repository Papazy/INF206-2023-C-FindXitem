<div class="navbar" style="font-family: 'Poppins'">
    <div class="navbar-logo fs-3" style="cursor:pointer;" onclick="window.location='{{ url("/") }}'">FindXitem</div>
    <div class="navbar-navi">
        <ul class="navbar-items-container">
            <li class="navbar-item"><a href="/">Home</a></li>
            <li class="navbar-item ">
                <a class="btnDropdown" href="#" onclick="toggle_dropdown()">Barang</a>
                <div class="wrapper">
                    <div class="drop-down" id="dropdown">
                    <a href="/search">Mencari</a>
                    <a href="/report">Melaporkan</a>
                    <a href="#">Kategori</a>
                    </div>
                </div>
            </li>
            <li class="navbar-item"><a href="/about">About</a></li>
            <button class="btn login me-2 rounded-pill" onclick="window.location='{{ url('/login') }}'">Masuk</button>
            <button class="btn daftar ms-2 rounded-pill" onclick="register()">Daftar</button>
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