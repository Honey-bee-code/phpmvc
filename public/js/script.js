$(function () {
  $("#tombolTambah").on("click", function () {
    $("#judulModal").html("Tambah Data Siswa");
    $("#submit").html("Tambah Data");
  });

  $(".tombolUbah").on("click", function () {
    $("#judulModal").html("Ubah Data Siswa");
    $("#submit").html("Ubah Data");
    $(".modal-body form").attr("action", "http://localhost/phpmvc/public/siswa/ubah");

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/phpmvc/public/siswa/detail_ubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama); // cara pertama
        $("#nis").val(data["nis"]); // cara kedua
        $("#email").val(data["email"]);
        $("#kelas").val(data.kelas);
        $("#id").val(data.id);
      },
    });
  });
});
