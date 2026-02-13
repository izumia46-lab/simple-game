<?php
session_start();

if(!isset($_SESSION['score'])){
    $_SESSION['score'] = 3;
}

if(isset($_GET['lose'])){
    $_SESSION['score']--;
    if($_SESSION['score'] <= 0){
        session_destroy();
        echo "<script>alert('Game Over 😈'); window.location.href='index.php';</script>";
        exit();
    }
}

$correctRoom = rand(1,3);
$_SESSION['correct'] = $correctRoom;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Game Misterius 👁️</title>
    <link rel="stylesheet" href="game.css">
</head>
<body>

<h1>🏚️ Pilih Ruangan yang Benar!</h1>
<p>Score: <span id="score"><?php echo $_SESSION['score']; ?></span></p>

<div class="rooms">
    <button onclick="chooseRoom(1)">🚪 Ruangan 1</button>
    <button onclick="chooseRoom(2)">🚪 Ruangan 2</button>
    <button onclick="chooseRoom(3)">🚪 Ruangan 3</button>
</div>

<div id="jumpscare">
    <img src="Black-man-screaming-meme-6.jpg">
    <audio id="scream" src="flightreacts-dolphin-laugh_q1BrFiY.mp3"></audio>
</div>

<script>
const correctRoom = <?php echo $_SESSION['correct']; ?>;
</script>

<script src="game.js"></script>

</body>
</html>
