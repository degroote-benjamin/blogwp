

    <!--

     start footer

    ------------------->

    <footer class="container-fluid">
        <div class="container">
            <div class="col-12 footericon">
                <a href="https://twitter.com/degrootebenjam1"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
                <a href="https://github.com/degroote-benjamin"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a>
                <a href="https://fr.linkedin.com/"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a>
            </div>
        </div>
        <section class="col-12 py-2">
            <p id="date" class="text-right my-1"></p>
            <h6 class="text-right my-2">Vous êtes sur le site depuis <span id="compteur"></span> secondes</h6>
        </section>
    </footer>

    <!--

     end footer

    ------------------->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b, o, i, l, e, r) {
            b.GoogleAnalyticsObject = l;
            b[l] || (b[l] =
                function() {
                    (b[l].q = b[l].q || []).push(arguments)
                });
            b[l].l = +new Date;
            e = o.createElement(i);
            r = o.getElementsByTagName(i)[0];
            e.src = 'https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e, r)
        }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
