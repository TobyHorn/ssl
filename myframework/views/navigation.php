<header>
<?php

echo "<nav style='width:100%; background-color: #ccc; text-align: center;'><ul style='margin:0px; list-style: none;'>";
foreach ($data as $key => $item) {

    echo "<li style='display: inline-block; margin:5px;'><a href='$key' alt='$item Page' style='font-size: 1.5em; text-decoration: none; font-weight: bold; padding:5px 10px 5px 10px; color: #b22222;' onmouseover='this.style.color=\"#fff\"; this.style.backgroundColor=\"#666\"' onmouseout='this.style.color=\"#b22222\"; this.style.backgroundColor=\"transparent\"'>".$item."</a></li>";
}
echo "</ul></nav>";

?>
</header>