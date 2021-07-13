<?php 
    // Koneksi ke database
    // mysqli_connect(namahost, username, password, namaadatabase) 
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    
    // Bikin fungsi query sendiri
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        // buat nyimpen per-row
        $rows = []; 
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows; 
    }

    function upload(){
        $nama = $_FILES["gambar"]["name"];
        $ukuran = $_FILES["gambar"]["size"];
        $error = $_FILES["gambar"]["error"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        // cek apakah ada gambar yang diupload
        if($error === 4){
            echo "<script>
                    alert('Upload gambar telerbih dahulu')
                </script>";
            return false;
        }

        // cek apakah  yang diupload adalah gambar
        $extValid = ["jpg", "jpeg", "png"];
        $extFiles = explode(".", $nama);
        $extFiles = strtolower(end($extFiles));
        if(!in_array($extFiles, $extValid)){
            echo "<script>
                    alert('Tolong hanya upload gambar')
                </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if($ukuran > 1000000){
            echo "<script>
                    alert('Ukuran file terlalu besar')
                </script>";
            return false;
        }
        
        // pindahin ke directory 
        //jangan sampe sama nama gambarnya
        $newNama = uniqid();
        $newNama .= "." . $extFiles;

        move_uploaded_file($tmpName, "img/" . $newNama);

        return $newNama;
    }

    function insert($data){
        global $conn;

        // ambil data dari tiap input
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        // upload files 
        $gambar = upload();

        if(!$gambar){
            return false;
        }

        //query insert data
        $query = "INSERT INTO mahasiswa VALUES 
            ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function delete($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
        return mysqli_affected_rows($conn);
    }

    function update($data, $id){
        global $conn;

        // ambil data dari tiap input
        $nrp = htmlspecialchars($data["nrp"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);
        
        if($_FILES["gambar"]["error"] === 4){
            $gambar = $gambarLama;
        }else{
            $gambar = upload();
        }

        //query update data
        $query = "UPDATE mahasiswa SET 
                    nrp='$nrp',
                    nama='$nama',
                    email='$email',
                    jurusan='$jurusan',
                    gambar='$gambar'
                WHERE id=$id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function search($keyword){
        $query = "SELECT * FROM mahasiswa WHERE 
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";

        return query($query);
    }
?>