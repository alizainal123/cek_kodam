<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Khodam</title>
    <style>
      
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a3093, #a044ff); 
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff; 
        }

        .container {
            width: 400px;
            background: rgba(255, 255, 255, 0.1); 
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2); 
            backdrop-filter: blur(12px);
            text-align: center;
            border: 2px solid rgba(255, 255, 255, 0.2); 
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: translateY(-10px); 
        }

        h1 {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #ffebf0;
        }

        input {
            padding: 12px;
            width: 80%;
            border: none;
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.3); 
            font-size: 16px;
            color: white;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1); 
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7); 
        }

        button {
            padding: 12px 30px;
            background: linear-gradient(135deg, #ff4b2b, #ff416c);
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
            transition: background 0.3s, transform 0.3s;
        }

        button:hover {
            background: linear-gradient(135deg, #ff416c, #ff4b2b); 
            transform: translateY(-5px);
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
            color: #ffebf0; 
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        }

        p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cek Khodam Anda</h1>
    
    
    <form method="POST" action="">
        <input type="text" name="nama" placeholder="Masukkan Nama Anda" required>
        <br>
        <button type="submit">Cek Khodam</button>
    </form>

    <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $nama = htmlspecialchars($_POST['nama']);

           
            $khodams = array(
                "Rawa rontek" => "",
                "Sate Padang" => "",
                "Tutup Odol" => "",
                "Tutup panci" => "",
                "Siluman tutup Termos" => "",
                "Singa introvert" => "",
                "Sandal jepit" => "",
                "Tikus got" => "",
                "Monyet depresi" => "",
                "Kudanil Sad" => "",
                "Babi Malu malu" => "",
                "Gardan fu" => "",
                "Gardan fuso" => "",
                "Ratu kegelapan" => "",
                "Panci bolong" => "",
                "Batu Bata" => "",
                "Tuyul Jago Coding" => "",
                

            );

            
            $randomKey = array_rand($khodams);
            $khodamAnda = $randomKey;
            $deskripsiKhodam = $khodams[$randomKey];

           
            echo"<b>nama: " .$nama ."</b> <br/>";
            echo "<b>Khodam Anda: " . $khodamAnda . "</b><br>";
            echo "<p>" . $deskripsiKhodam . "</p>";
        }
        ?>
    </div>
</div>

</body>
</html>
