const formatter = new Intl.NumberFormat('id-ID', {
  style: 'currency',
  currency: 'IDR',
  minimumFractionDigits: 0
})

function hitung_dp(){
  var dp = document.getElementById("dp").value;
  var persen = parseFloat(dp) / 100;
  var harga = document.getElementById("angka_motor").value;
  var uangmuka = harga*persen;

  var rupiah = formatter.format(uangmuka);

  if(!isNaN(uangmuka)){
    document.getElementById("angka_dp").innerHTML = uangmuka;
    document.getElementById("dp_motor").innerHTML = rupiah;
  }
}

function hitung_kredit(){
  // Hitung Uang Muka
  var dp = document.getElementById("dp").value;
  var persen = parseFloat(dp) / 100;
  var harga = document.getElementById("angka_motor").value;
  var uangmuka = harga*persen;

  //Hitung Sisa Utang
  var bunga = document.getElementById("bunga").value;
  var tenor = document.getElementById("tenor").value;
  var harga = document.getElementById("angka_motor").value;
  var utang = parseFloat(harga)-parseFloat(uangmuka);

  // Hitung Bunga
  if (bunga == 0.0175) {
    var admin = 1700000;
    var perasuransi = 0.0144;
  } else if (bunga == 0.024) {
    var admin = 1200000;
    var perasuransi = 0.008;
  }

  var asuransi = parseFloat(harga)*parseFloat(perasuransi);
  var total = parseFloat(utang)+parseFloat(admin)+parseFloat(asuransi);
  var pokok = parseFloat(total)/parseFloat(tenor);
  var hasilBunga = parseFloat(total)*parseFloat(bunga);

  // Hitung Angsuran
  var hasil = parseFloat(pokok)+parseFloat(hasilBunga);
  var angsuran = hasil.toFixed(0);
  var rupiah = formatter.format(angsuran);

  if (!isNaN(angsuran)) {
    document.getElementById("angsuran").innerHTML = "<p>Angsuran</p><h2>"+rupiah+"</h2>";
  }else{
    document.getElementById("angsuran").innerHTML = "<h2 style='color: #f490c3;'>Informasi Tidak Lengkap</h2>";
  }
}
