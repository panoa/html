    <table id="movieList">
      <tbody>
        <?php
  foreach($movies as $movieTitle) {
      echo "<tr>";
        echo "<td class=\"thumb\">";
          echo "<a href=\"$movieDir/$movieTitle.mp4\"><img src=\"$thumbDir/$movieTitle.jpg\" /></a>";
        echo "</td>";
        echo "<td class=\"link\">";
          echo "<a href=\"$movieDir/$movieTitle.mp4\">$movieTitle</a>";
        echo "</td>";
      echo "</tr>";
  }
        ?>
      </tbody>
    </table>
