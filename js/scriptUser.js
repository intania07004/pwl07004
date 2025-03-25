// Ambil elemen-elemen yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// Tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {
  // Buat objek AJAX
  var xhr = new XMLHttpRequest();

  // Cek kesiapan AJAX
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  xhr.open("GET", "ajax/ajaxUser.php?keyword=" + keyword.value, true);
  xhr.send();
});
