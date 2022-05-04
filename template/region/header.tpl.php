<?php 
/*
 * arguments:
 *   $page_name
 */
?>
<!-- header -->
<header id="mainHeader" class="clearfix">
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container"> <a href="index.html" class="brand"><img src="images/ofbiz_logo.png" alt="Apache OFBiz Logo"/></a>
        <nav id="mainMenu" class="clearfix">
          <ul>
            <li><a href="index.html" class="firstLevel<?php if (basename($page_name) == 'index.tpl.php'):?> active<?php endif;?>">Home</a></li>
            <li><a href="#" class="firstLevel<?php if ($page_name == 'getting-started.tpl.php'):?> active<?php endif;?>">Getting Started</a>
              <ul>
                <li><a href="developers.html" class="">Developers</a></li>
                <li><a href="business-users.html" class="last">Business Users</a></li>
              </ul>
            </li>
            <li><a href="#" class="firstLevel<?php if (basename($page_name) == 'news.tpl.php'):?> active<?php endif;?>">News</a>
              <ul>
                <li><a href="//twitter.com/apacheofbiz" target="external">Twitter</a></li>
                <li><a href="//blogs.apache.org/ofbiz/" target="external" class="last">Blog</a></li>
              </ul>
            </li>
            <li><a href="#" class="firstLevel<?php if (basename($page_name) == 'documentation.tpl.php'):?> active<?php endif;?>">Documentation</a>
              <ul>
                <li><a href="//cwiki.apache.org/confluence/display/OFBIZ/Documentation" target="external" class="">User Documentation</a></li>
                <li><a href="//cwiki.apache.org/confluence/display/OFBIZ/Technical+Documentation" target="external" class="">Technical Documentation</a></li>
                <li><a href="//cwiki.apache.org/confluence/display/OFBIZ/Home" target="external" class="">Wiki</a></li>
                <li><a href="#" class="firstLevel">API Reference</a>
                  <ul>
                    <li title="Trunk API">
                      <a href="https://nightlies.apache.org/ofbiz/trunk/javadoc/" target="external">Trunk API</a></li>
                    </li>
                    <li title="Stable release  API">
                      <a href="https://nightlies.apache.org/ofbiz/stable/javadoc/" target="external">Stable Release API</a></li>
                    </li>
                    <li title="Next release API">
                      <a href="https://nightlies.apache.org/ofbiz/next/javadoc/" target="external">Next Release API</a></li>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li><a href="#" class="firstLevel<?php if (basename($page_name) == 'community.tpl.php'):?> active<?php endif;?>">Community</a>
              <ul>
                <li><a href="getting-involved.html">Getting Involved</a></li>                
                <li><a href="mailing-lists.html">Mailing Lists</a></li>
                <li><a href="source-repositories.html">Source Repository</a></li>
                <li><a href="download.html">Downloads</a></li>
                <li><a href="https://s.apache.org/dsj2p" target="external" >Issue Tracker</a></li>
                <li><a href="faqs.html" class="last">FAQ</a></li>
              </ul>
            </li>
            <li><a href="ofbiz-demos.html" class="firstLevel<?php if (basename($page_name) == 'ofbiz-demos.tpl.php'):?> active<?php endif;?>">Demos</a></li>
		  <li>
		    <a href="//twitter.com/ApacheOfbiz" class="icon-twitter-bird socialIcon tips"
		      target="external" title="follow us on Twitter"><span>twitter</span></a>
		  </li>
		  <li><a href="//www.linkedin.com/company/apache-ofbiz/" target="external"  class="icon-linkedin socialIcon tips"  title="follow us on Linkedin"><span>linkedin</span></a></li>
		  <li><a href="//www.facebook.com/Apache-OFBiz-1478219232210477/?ref=page_internal" target="external" class="icon-facebook socialIcon tips"  title="follow us on Facebook"><span>facebook</span></a></li>
		  <li><a href="//www.youtube.com/user/ofbiz" class="icon-play socialIcon tips" target="external" title="follow us on Youtube"><span>Youtube</span></a></li>
		  <!--<li><a href="#" class="icon-rss socialIcon tips"  title="Our rss feed"><span>rss feed</span></a></li>         
		  <li><a href="#" class="icon-gplus socialIcon tips"  title="follow us on Google +"><span>google +</span></a></li>
		  <li><a href="#" class="icon-instagram socialIcon tips"  title="follow us on Instagram"><span>instagram</span></a></li>
		  <li><a href="#" class="icon-linkedin socialIcon tips"  title="follow us on Linkedin"><span>linkedin</span></a></li>
		  <li><a href="#" class="icon-pinterest-circled socialIcon tips"  title="follow us on Pinterest"><span>Pinterest</span></a></li>-->
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- header -->
