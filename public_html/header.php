<head>
	<!--
	Desenvolvido por: Lucas Zanella
	Pare de espiar o código fonte. Obrigado.
	-->
	<meta http-equiv="content-Type" content="text/html; charset=UTF-8"/>
    <title><?php echo $title;?></title>
    <?php 
    if ($articles==false) {
        echo "<link rel='stylesheet' type='text/css' href=".$site_root."Layout.css>\n";
    } elseif ($articles==true){
        echo "<link rel='stylesheet' type='text/css' href=".$site_root."articlesLayout.css>\n";
        echo "    <script>var disqus_config = function () { this.language = \"".$language."\";};</script>\n";
    }
    ?>
    <script type="text/javascript">
    var sc_project=6440563; 
    var sc_invisible=1; 
    var sc_security="78bf6558"; 
    </script>
    <script type="text/javascript"
    src="http://www.statcounter.com/counter/counter.js"></script>
    <noscript><div class="statcounter"><a title="site stats"
    href="http://statcounter.com/" target="_blank"><img
    class="statcounter"
    src="http://c.statcounter.com/6440563/0/78bf6558/1/"
    alt="site stats"></a></div></noscript>
    <?php echo "<link rel='shortcut icon' href='/images/favicon.ico' type='image/x-icon' />\n"; ?>
    <?php echo "<meta name=\"description\" content=\"".$description."\">\n"?>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,300,600|Bree+Serif" rel="stylesheet" type="text/css">
    <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?skin=desert"></script>
    <script type="text/x-mathjax-config">
                MathJax.Hub.Config({"HTML-CSS": { preferredFont: "TeX", availableFonts: ["STIX","TeX"], linebreaks: { automatic:true }, EqnChunk: (MathJax.Hub.Browser.isMobile ? 10 : 50) },
                                    tex2jax: { inlineMath: [ ["$", "$"], ["\\\\(","\\\\)"] ], displayMath: [ ["$$","$$"], ["\\[", "\\]"] ], processEscapes: true, ignoreClass: "tex2jax_ignore|dno" },
                                    TeX: {  noUndefined: { attributes: { mathcolor: "red", mathbackground: "#000000", mathsize: "90%" } } },
                                    messageStyle: "none"
                });
    </script>
		 
    <script type="text/javascript"
       src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>
</head>
