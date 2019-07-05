function cari() { //membuat function cari() yang dapat dipanggil pada html
	var kata = document.formcari.keyword.value; //memasukkan kata untuk mencari hal yang diinginkan
	var hasil = "http://www.google.com/search?q=" + kata ; //mesin pencari google yang dapat digunakan
	window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes'); //membuka window baru pada pencarian google dengan lebar dan panjang yang telah ditentukan
}
function daftar() { //membuat function daftar() yang dapat dipanggil pada html
var nama = document.formdaftar.nama.value; //menginputkan nama untuk dituliskan pada html
if (nama == "") {alert("Nama Yang Di Masukkan Tidak Boleh Kosong")} //jika tidak ada nama yang dimasukkan maka akan muncul alert tidak boleh kosong
	else alert("Selamat Datang, "+nama); //menuliskan Selamat Datang dan nama inputan yang telah diisi
}