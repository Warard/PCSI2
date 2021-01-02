<?php
function generate_songs_list()
{
    // Path to the song folder
    $songs_path = "songs/";
    $id = 0;

    if($handle = opendir($songs_path)) {
        while(false !== ($entry = readdir($handle))) {
            if($entry != "." && $entry != "..") {
                $id += 1;
                // Foreach song :
                
                ?>              
                <div class="songs">
                    <p class="song_caption"><?php echo($entry) ?></p>

                    <audio id="<?php echo($id); ?> ">
                        <source src="songs/<?php echo($entry) ?>" type="audio/mpeg">
                    </audio>

                    <div class="songs_buttonContainer">
                        <button onclick="play(<?php echo($id); ?>)" type="button" class="song_button">Play</button>
                        <button onclick="pause(<?php echo($id); ?>)" type="button" class="song_button">Pause</button>
                    </div>
                </div>
            <br><hr>

            <?php
            // End foreach song
            }
        }
        closedir($handle);
    }
}
?>