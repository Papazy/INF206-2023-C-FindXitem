
var cards = document.querySelectorAll('.kategori > div');
for (var i = 0; i < cards.length ; i++){
cards[i].onclick = function(){
// Ambil elemen gambar dan deskripsi pada card yang ditekan
var gambar = this.querySelector('img');
var deskripsi = this.querySelector('p');

// Toggle kelas untuk menampilkan atau menyembunyikan elemen gambar dan deskripsi
if (gambar.classList.contains('active')){
gambar.classList.remove('active');
deskripsi.classList.remove('active');
gambar.setAttribute('src', ''); // Menghapus src saat elemen disembunyikan
} else {
gambar.classList.add('active');
deskripsi.classList.add('active');
gambar.setAttribute('src', gambar.dataset.src); // Menambahkan src baru saat elemen ditampilkan
}
}
}

