<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ucapan Terima Kasih</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #87CEEB;
            background-image: url('https://i.imgur.com/7bnKwE2.png');
            background-size: cover;
            text-align: center;
            color: white;
        }
        .container {
            margin-top: 150px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            display: inline-block;
        }
        h1 {
            font-size: 48px;
            color: #D4AF37;
            text-shadow: 3px 3px 0px black;
        }
        p {
            font-size: 24px;
            color: #FFFFFF;
            text-shadow: 2px 2px 0px black;
        }
        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #228B22;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 3px 3px 0px black;
        }
        .btn:hover {
            background-color: #006400;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Terima Kasih, Sobat!</h1>
        <p>Halo, <?php echo htmlspecialchars($_GET['nama']); ?>!<br>
        Terima kasih banyak atas semua bantuanmu. Aku sangat menghargainya, seperti diamond di Minecraft!</p>
        <a class="btn" href="https://www.minecraft.net">Main Minecraft</a>
    </div>
</body>
</html>