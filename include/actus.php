<aside id="feed">
    <h2>Actualités</h2>
    <?php 
        $rss = new DOMDocument();
        $rss->load('http://www.legorafi.fr/feed/');
        $feed = array();
        $count = 0;
        foreach ($rss->getElementsByTagName('item') as $node) {
            if($count < 3){
                $title = $node->getElementsByTagName('title')->item(0)->nodeValue;
                $desc = $node->getElementsByTagName('description')->item(0)->nodeValue;
                $link = $node->getElementsByTagName('link')->item(0)->nodeValue;
                $date = $node->getElementsByTagName('pubDate')->item(0)->nodeValue;
                $count = $count+1;
                
                echo "<article>
                    <h3>".$title."</h3>
                    <small>Le ".$date."</small>
                    <br>
                    <br>
                    <p>".$desc."</p>
                    <a href='".$link."'>Lire l'article (nouvel onglet)</a>
                </article>";
                
            }
        }        
    ?>
</aside>