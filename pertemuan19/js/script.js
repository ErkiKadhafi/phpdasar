let keyword = document.querySelector("#keyword");
let btnSearch = document.querySelector("#search-btn");
let container = document.querySelector(".container");

keyword.addEventListener("keyup", () => {
  //console.log(keyword.value);

  //buat object ajax
  let xhr = new XMLHttpRequest();

  //cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      //   console.log(xhr.responseText);
      container.innerHTML = xhr.responseText;
    }
  };

  //eksekusi ajax
  xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
  xhr.send();
});
