$(document).ready(function () {
  // hilangkan tombol cari
  $("#search-btn").hide();

  //event ketika keyword dimasukkan
  $("#keyword").on("keyup", function () {
    //   munculin icon loading
    $(".loader").show();

    // ajax menggunakan load
    // $(".container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

    // $.get
    $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
      $(".container").html(data);
      $(".loader").hide();
    });
  });
});
