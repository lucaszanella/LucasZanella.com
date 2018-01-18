<?php include 'locate.php';?>
<html>
    <?php include 'header.php';?>
    <body>
        <div id='container' align='center'>
            <div id='hhead'>
                <?php include 'banner.php';?>
                <?php 
                if ($articles==true) {
                    include 'articlesMenu_'.$language.'.php';
                } else {
                    include $language.'_menu.php';
                }
                ?>
            </div>
            <div id='content' align='left'>
                <?php
                    $turnOffCommentSection = false;
                    if ($ok and $error404==false and $articles==false) {
                        //include 'pageContents/'.$pageToInclude;
                        if(!@include ('pageContents/'.$pageToInclude)) {include 'error.php';$turnOffCommentSection = true;}
                    } else if ($articles and $error404==false){
                        if(!@include ('pageContents/articles/'.$pageToInclude)) {include 'error.php';$turnOffCommentSection = true;}
                    } else if ($error404) {
                        include 'pageContents/404.php';      
                    }
                    if ($articles and $turnOffCommentSection == false and $error404==false) {
                        echo '<div id="disqus_thread"></div>
                                <script type="text/javascript">
                                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                    var disqus_shortname = \'zanellalucas\';
                                    var disqus_identifier = \''.$disqusIdentifier[0].'\';
                                    (function() {
                                        var dsq = document.createElement(\'script\'); dsq.type = \'text/javascript\'; dsq.async = true;
                                        dsq.src = \'//\' + disqus_shortname + \'.disqus.com/embed.js\';
                                        (document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(dsq);
                                    })();
                                </script>
                                <noscript>Please enable javascript to see the comment section</a></noscript>
                                <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>';   
                    }
                ?>

            </div>
            <?php include 'footer.php'?>
        </div>
    </body>
</html>