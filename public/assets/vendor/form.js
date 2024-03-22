function checkinput() {
    if ($("input[name=nama]").val() == "") {
        alert("Masukkan Nama Lengkap!");
        $("input[name=nama]").focus();
        return false;
    }
    else if ($("input[name=ktp]").val() == "") {
        alert("Masukkan Nomor Identitas!");
        $("input[name=ktp]").focus();
        return false;
    }
    else if ($("select[name=jenis_kelamin]").val() == "") {
        alert("Masukkan Jenis Kelamin!");
        $("select[name=jenis_kelamin]").focus();
        return false;
    }
    else if ($("input[name=domisili]").val() == "") {
        alert("Masukkan Domisili!");
        $("input[name=domisili]").focus();
        return false;
    }
    else if ($("input[name=email]").val() == "") {
        alert("Masukkan Email!");
        $("input[name=email]").focus();
        return false;
    }
    else if ($("input[name=hp]").val() == "") {
        alert("Masukkan nomor handphone!");
        $("input[name=hp]").focus();
        return false;
    }
    else if ($("textarea[name=description]").val() == "") {
        alert("Masukkan Ringkasan Pengaduan!");
        $("textarea[name=description]").focus();
        return false;
    }
    else if ($("input[name=pujk]").val() == "") {
        alert("Masukkan Nama PUJK!");
        $("input[name=pujk]").focus();
        return false;
    }
    else if ($("input[name=produk]").val() == "") {
        alert("Masukkan Nama Produk!");
        $("input[name=produk]").focus();
        return false;
    }
    else if ($("input[name=identitas]").val() == "") {
        alert("Masukkan Identitas Diri!");
        $("input[name=identitas]").focus();
        return false;
    }
    else if ($("input[name=kronologis]").val() == "") {
        alert("Masukkan Kronologis Pengaduan!");
        $("input[name=kronologis]").focus();
        return false;
    }
    else if ($("input[name=bukti]").val() == "") {
        alert("Masukkan Bukti Pengaduan PUJK!");
        $("input[name=bukti]").focus();
        return false;
    }
    else if ($("input[name=surat_pernyataan]").val() == "") {
        alert("Masukkan Surat Pernyataan!");
        $("input[name=surat_pernyataan]").focus();
        return false;
    }
    else if (!$("input[name=disclaimer]").is(":checked")) {
        alert("Anda Belum Menyetujui Disclaimer Pengaduan OJK!");
        $("input[name=disclaimer]").focus();
        return false;
    }
    else if ($("input[name=captcha]").val() == "") {
        alert("Masukkan Captcha!");
        $("input[name=captcha]").focus();
        return false;
    }
    else {
        return true;
    }
    
}