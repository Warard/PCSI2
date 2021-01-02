// Play a song
function play(id) {
    id = id + " "
    console.log("Playing song : " + id);
    
    // Getting the audio tag with the data to stock those data in the variable, and then play it
    var music = document.getElementById(id);
    music.play();
}


// Pause a song
function pause(id) {
    id = id + " "
    console.log("Pausing song : " + id);
    var music = document.getElementById(id);
    music.pause();
}



// ?><!--
// <div class="songs">
//     <p class="song_caption"><?php //echo($entry) ?></p>
//     <button class="song_button">Play</button>
// </div>  
// <hr>
// -->
// <?php


        //     <!-- 
        //     <div class="songs">
        //         <p class="song_caption">Test avec une phrase très longue une phrase très longue</p>
        //         <button class="song_button">Read</button>
        //     </div>
        //     <hr>

        //     <div class="songs">
        //         <p class="song_caption">Test avec une phrase très longue une phrase très longue</p>

        //         <audio id="musique">
        //             <source src="songs/Je suis un test.mp3" type="audio/mpeg">
        //         </audio>

        //         <div class="songs_buttonContainer">
        //             <button onclick="play()" type="button" class="song_button">Play</button>
        //             <button onclick="pause()" type="button" class="song_button">Pause</button>
        //         </div>
        //     </div>
        // </div>

        //  -->
