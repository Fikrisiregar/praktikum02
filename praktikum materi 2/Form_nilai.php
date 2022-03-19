<option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Pemograman Web II">Pemograman Web II</option>
                    <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                    <option value="Statistika & Probabilitas">Statistika & Probabilitas</option>
             <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    .container-fluid {
      padding : 1rem;
    }
  </style>

  <title>Form Nilai - Muhamad Faqih Azhar</title>
</head>
<body>
  <div class="card">
    <div class="card-header">
      <h5>Sistem Penilaian</h5>
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="nilai_siswa.php">
              <div class="form-group row">
                <label for="nama" class="col-4 col-form-label text-right"><strong>Nama Lengkap</strong></label> 
                <div class="col-8">
                  <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label text-right"><strong>Mata Kuliah</strong></label> 
                <div class="col-8">
                  <select id="matkul" name="matkul" class="custom-select">
                    <option value="PPKn">PPKn</option>
                    <option value="Basis Data I">Basis Data I</option>
                     <option value="User Interface & User Experience">User Interface & User Experience</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label text-right"><strong>Nilai UTS</strong></label> 
                <div class="col-4">
                  <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label text-right"><strong>Nilai UAS</strong></label> 
                <div class="col-4">
                  <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label text-right"><strong>Nilai Praktikum/Tugas</strong></label> 
                <div class="col-4">
                  <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control" required="required">
                </div>
              </div> 
              <div class="form-group row">
                <div class="offset-4 col-8">
                  <input type="submit" name="proses" value="Simpan" class="bg-primary text-white rounded border-0 p-2">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-3">
          </div>
        </div>
      </div>
<?php 
  $nama_lengkap = isset ($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '';
  $matkul = isset ($_POST['matkul']) ? $_POST['matkul'] : '';
  $nilai_uts = isset ($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
  $nilai_uas = isset ($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
  $nilai_tugas = isset ($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

//penggunaan if..else

 if($nilai_tugas > 50){
        echo "lulus";
    }else{
        echo "tidak lulus";
    }


//penggunaan if..elseif

  if($nilai_uas = 100){
        $nilai_uas = "A";
    }elseif($nilai_uas > 80){
        $nilai_uas = "B";
    }elseif ($nilai_uas > 60){
        $nilai_uas = "C";
    }elseif($nilai_uas > 40){
      $nilai_uas = "D";
    }elseif($nilai_uas > 20){
      $nilai_uas = "E";
    }


//penggunaan switch case

 switch ($nilai_uts) {
   case 'A':
     $info = "Sangat Memuaskan";
     break;
    case 'B':
      $info = "Memuaskan";
      break;
    case 'C':
      $info = "Cukup";
      break;
    case 'D':
      $info = "Kurang";
      break;
    case 'E':
      $info = "Sangat Kurang";
      break;
 }

  echo 'Nama Lengkap : '.$nama_lengkap;
  echo '<br/>Mata Kuliah : '.$matkul;
  echo '<br/>Nilai UTS : '.$info;
  echo '<br/>Nilai UAS : '.$nilai_uas;
  echo '<br/>Nilai Tugas : '.$nilai_uas;