function chooseRoom(room){
    if(room === correctRoom){
        window.location.href = "Ultah.php";
    } else {
        // kurangi score lewat PHP
        fetch("index.php?lose=1")
        .then(() => {
            document.getElementById("jumpscare").style.display = "flex";
            document.getElementById("scream").play();

            setTimeout(() => {
                window.location.reload();
            }, 2000);
        });
    }
}
