<!-- ======================================================================= -->
<!-- Include header php -->
<!-- ======================================================================= -->
<?php include('php-parts/header.php'); ?>

        <!-- ======================================================================= -->
        <!-- Begin main page conent php -->
        <!-- ======================================================================= -->
        <script>
            $(document).ready(function(){$("#tak-nav-bar>.resources").addClass("active");});
            document.title='Resources';
        </script>

        <h2>Seminars at Penn</h2>
        <ul>
            <li><a href="https://statistics.wharton.upenn.edu/research/seminars-conferences/" target="_blank">
                Wharton Statistics Seminars</a>
            </li>
            <li><a href="http://www.cis.upenn.edu/about-cis/events/" target="_blank">
                Computer and Information Science (CIS) Seminars</a>
            </li>            
            <li><a href="http://www.ese.upenn.edu/about-ese/events/" target="_blank">
                Electrical and Systems Engineering (ESE) Seminars</a>
            </li>
        </ul>        
        <h2>Reading Groups/Seminars at Michigan</h2>
        <ul>
            <!-- <li><a href="http://web.eecs.umich.edu/~cscott/smlrg/">Statistical Machine Learning Reading Group</a></li> -->
            <li><a href="https://ctools.umich.edu/wiki/sml/home.html" target="_blank">
                Statistical Machine Learning Reading Group</a></li>
            <li><a href="http://www.lsa.umich.edu/stats/newsevents/departmentseminarseries" target="_blank">
                Department of Statistics Seminar Series</a></li>
            <li><a href="https://www.eecs.umich.edu/eecs/etc/events/getone.cgi?CSP-Seminars" target="_blank">
                Communications & Signal Processing seminars</a></li>
        </ul>

        <h2>Recommended Readings for Graduate Students</h2>
        <ul>
            <li><a href="http://dx.doi.org/10.1242/jcs.033340" target="_blank">
                    The importance of stupidity in scientific research</a>, by Martin A. Schwartz</li>
            <li><a href="http://sciencecareers.sciencemag.org/career_magazine/previous_issues/articles/2013_09_04/caredit.a1300188"
                   target="_blank">
                    An article about the "impostor syndrome"</a></li>
            <li><a href="http://www-stat.wharton.upenn.edu/~buja/sci.pdf" target="_blank">
                    The Science of Scientific Writing</a>, by George D. Gopen and Judith A. Swan</li>
<!--             <li><a href="http://chronicle.com/article/10-Tips-on-How-to-Write-Less/124268" target="_blank">
                    10 Tips on How to Write Less Badly</a></li> -->
            <li><a href="http://matt.might.net/articles/phd-school-in-pictures/" target="_blank">
                    The illustrated guide to a Ph.D.</a> &ndash; perfectly explained in pictures by 
                <a href="http://matt.might.net/" target="_blank">Matt Might</a></li>
        </ul>

        <h2>Personal Coding Notes</h2>
        <ul>
            <li><a href="https://wtak23.github.io/snippets/" target="_blank">Snippets notebook</a></li>
            <li><a href="https://wtak23.github.io/coding_notes/" target="_blank">Coding notebook</a></li>
            <li><a href="https://wtak23.github.io/configs/" target="_blank">Computer configuration notebook</a></li>
            <li>Personal <a href="https://wtak23.github.io/pyspark/" target="_blank">PySpark API</a> I created since I found the <a href="http://spark.apache.org/docs/latest/api/python/index.html">official API</a> hard to navigate</li>
        </ul>
        <!-- ======================================================================= -->
        <!-- Include footer php -->
        <!-- ======================================================================= -->
        <?php include('php-parts/footer.php'); ?>
