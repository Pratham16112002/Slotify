<?php include("includes/header.php");
        
 if(isset($_GET['id'])){
    $albumId = $_GET['id'];
 }
 else{
     header("Location: index.php");
 }
 $album = new Album($con , $albumId);
 // $artist = new Artist($con,$album['artist ']);
 
 $artist = $album->getArtist();
 // echo $artist->getName();
?>
<div class="entityInfo">
    <div class="leftSection">
        <img src="<?php echo $album->getArtworkPath()?>" alt="">
    </div>
    <div class="rightSection">
        <h2><?php echo $album->getTitle()?></h2>
        <span>By <?php  echo $artist->getName()?></span>
    </div>  
</div>
<div class="trackListContainer">
    <ul class="trackList">
        <?php 
        $songIdArray= $album->getSongIds();
        $i = 1;
            foreach($songIdArray as $songId){
                $albumSong = new Song($con , $songId);
                $albumArtist = $albumSong->getArtist();
                echo "<li class='trackListRow'>
                    <div class='trackCount'>
                    <img class='play' src='assets/images/icons/play-white.png'>
                        <span>$i</span>
                    </div>
                    <div class='trackInfo'>
                        <span class='trackName'>".$albumSong->getTitle()."</span>
                        <span class='artistName'>".$albumArtist->getName()."</span>
                    </div>
                    <div class='trackOptions'>
                        <img class='optionsButton' src='assets/images/icons/more.png'>
                    </div>
                    <div class='trackDuration'>
                    <span class='duration'>".$albumSong->getDuration()."</span>
                    </div>
                </li>";
                $i = $i +1;
            }
        ?>
        
    </ul>
</div>



<?php include("includes/footer.php");?>