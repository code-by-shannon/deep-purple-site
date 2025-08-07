<?php
$comment_table = 'comments_mark8';
include 'includes/comment_logic.php';
define('PAGE_TITLE', 'Mark VIII - Simon McBride Era');;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php'; ?>
 
</head>
    


<body>
<?php include 'includes/header.php'; ?>

<main>
<!-- INTRO -->
<h1>Mark VIII- <br>Simon McBride</h1>
<p class = 'intro-blurb'>One last go around with a new guitarist</p>

<figure class='group_photo_figure'>
  <img src="imgs/mark8_group_photo.png" class = 'group_photo' alt="photo of the 8th Deep Purple incarnation with newest member Simon McBride">
  <figcaption>
    <br>
    Simon McBride, the new purple guitarist
  </figcaption>
</figure>

<!-- =1 -->
<div class='title_cover_review_rating_div'>
<h3 class='album_title_header'>=1 - <em>2020</em></h3>
<p class='review_text'>
<img class="album_cover" src="imgs/cover_=_1.png" alt="Whoosh"/>
We enter the Simon McBride era.  Steve Morse called it a career after approximately 30 years with the band.  Simon McBride is exactly what you would expect.  Deep Purple would have the pick of the litter available to them and of course, McBride is technically brilliant and an extremely competent guitar player.  A ringer, if you will.  And when it comes to soloing, he is definitely spurring Airey to greater heights.  Airey sounds rejuvenated on this record and has traded in the earthy Hammond B2 tones for a more synthy, lighter, more 'airy' timbre (no pun intended, ok yes it was).  It's a bit jarring, the tone, but the least of our worries.  A lot of the organ vs guitar dueling is really quite exciting, with some good proggy breakdown runs mixed in.  The let down is twofold, in my opinion.  The lack of anything resembling a killer riff, vocal or instrument wise and just a lack luster collection of songs.  After a listen, there's nothing truly memorable about the album.  Nothing that makes you want to go back and have a second listen.  It's not terrible, it's just not great either.  In short, it commits musics greatest sin, it's boring.  And lastly, the production puts Gillans voice above everything else in the mix.  The music could be more accessible if he was blended in with the rest of the band.  Ian isn't the screeching olympiad he used to be.  And he's definitely not Sinatra.  Making him stick out vocally is not doing him or the band any favors</p>
<span class="rating"> (rating: 2/5 whammy bars)</span> 
</div>


</main>


<!-- NAVIGATION THROUGH THE MK LINEUPS BOTTOM OF PAGE -->
<div class="lineup-nav">
  <a href="mark7.php" class="nav-button">← Mark VII</a>
  <!-- <a href="rainbow.php" class="nav-button">Rainbow →</a> -->
</div>

<!-- COMMENT SECTION -->
<div id="comments">
  <h2>Mark I Discussion</h2>

  <form method="POST" action="#comments">
    <p><input type="text" name="name" placeholder="Your name" required></p>
    <p><textarea name="comment" placeholder="Your comment" required></textarea></p>
    <p><button type="submit">Comment</button></p>
  </form>

  <ul>
    <?php if ($comments && $comments->num_rows > 0): ?>
      <?php while ($row = $comments->fetch_assoc()): ?>
        <li>
          <strong><?= htmlspecialchars($row['name']) ?>:</strong><br>
          <?= nl2br(htmlspecialchars($row['comment'])) ?><br>
          <a href="?delete=<?= $row['id'] ?>#comments">Delete</a>
        </li>
      <?php endwhile; ?>
    <?php else: ?>
      <li>No comments yet.</li>
    <?php endif; ?>
  </ul>
</div>


<?php include 'includes/footer.php'; ?>
</body>
</html>