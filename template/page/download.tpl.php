<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Downloads</title>';
?>

<!-- content -->
  <!-- page content -->
  <section id="content" class="sidebar">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Downloads</h1>
          <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="#">Community</a><span>/</span> <span class="current">Downloads</span> </div>
        </div>
      </div>
    </header>
    <div class="slice clearfix">
      <div class="container">
        <div class="row">
          <!-- sidebar -->
          <aside class="span4" id="sidebar">
         
            <section class="widget blogUpdates">
              <h2>Releases for Download</h2>
              <div class="divider"><span></span></div>
              <ul class="nav nav-tabs " id="myTab">
                <li class="active"><a href="#tabs-1" data-toggle="tab">Downloads</a></li>
                <li><a href="#tabs-2" data-toggle="tab">Release Notes</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tabs-1">
                  <ul>
                    <li>
                      <h2>OFBiz 16.11.03</h2>
                      <a href="//www.apache.org/dyn/closer.lua/ofbiz/apache-ofbiz-16.11.03.zip" target="external" class="moreLink">&rarr; Download</a> </li>
                    <li>
                      <h2>OFBiz 13.07.03</h2>
                      <a href="//www.apache.org/dyn/closer.lua/ofbiz/apache-ofbiz-13.07.03.zip" target="external" class="moreLink">&rarr; Download</a> </li>
                     </ul>
                </div>
                <div class="tab-pane" id="tabs-2">
                  <ul>
                    <li>
                      <h2>OFBiz 16.11.03</h2>
                      <a href="release-notes-16.11.03.html" class="moreLink">&rarr; View</a></li>
                    </li>
                    <li>
                    <h2>OFBiz 13.07.03</h2>
                    <a href="release-notes-13.07.03.html" class="moreLink">&rarr; View</a></li>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </aside>
          <!-- sidebar -->
          <div class="span8">
            <h2>Download Apache OFBiz</h2>
            <div class="divider"><span></span></div>
            <div class="imgWrapper"> <img src="images/Download.jpg" alt="image fullwidth"> </div>
            <p> <strong> Use the links below to download Apache OFBiz releases from the "Apache Download Mirrors" page. The download page also includes instructions on how to verify the integrity of the release file using the signature and hashes (PGP, MD5, SHA512) available for each release. </strong> </p>
            <p> <strong>PLEASE NOTE:</strong> Despite our best efforts to maintain up to three active release branches, support for older branches can decrease because our project volunteers may be focused on other issues. We recommend using releases from the most recent branch wherever possible. </p>
            <h2>Apache OFBiz 16.11.03</h2>
            <div class="divider"><span></span></div>
            <p> Released in June 2017, this is the third release of the 16.11 series, that has been stabilized since November 2016. </p>
            <a href ="//www.apache.org/dyn/closer.lua/ofbiz/apache-ofbiz-16.11.03.zip" target="external" >Download OFBiz 16.11.03</a>
            <a href ="//www.apache.org/dist/ofbiz/apache-ofbiz-16.11.03.zip.asc" target="external">[PGP]</a>
      <a href ="//www.apache.org/dist/ofbiz/apache-ofbiz-16.11.03.zip.md5" target="external">[MD5]</a>
            <a href ="//www.apache.org/dist/ofbiz/apache-ofbiz-16.11.03.zip.sha" target="external">[SHA12]</a>
            <a href ="release-notes-16.11.03.html">[Release Notes]</a></p>
            <h2>Apache OFBiz 13.07.03</h2>
            <div class="divider"><span></span></div>
            <p> Released in April 2016, is the third and final release of the 13.07 series, that has been stabilized with bug fixes since July 2013. </p>
      <p> Please note that in the 13.07 series the specialpurpose components are no longer inccluded as part of the release files. The only exception is the the ecommerce component due to specific dependencies. </p>
       <a href ="//www.apache.org/dyn/closer.lua/ofbiz/apache-ofbiz-13.07.03.zip" target="external">Download OFBiz 13.07.03</a>
            <a href ="//www.apache.org/dist/ofbiz/apache-ofbiz-13.07.03.zip.asc" target="external">[PGP]</a>
      <a href ="//www.apache.org/dist/ofbiz/apache-ofbiz-13.07.03.zip.md5" target="external">[MD5]</a>
            <a href ="//www.apache.org/dist/ofbiz/apache-ofbiz-13.07.03.zip.sha" target="external">[SHA12]</a>
            <a href ="release-notes-13.07.03.html">[Release Notes]</a></p>
       <h2>Special Notice Regarding Branches 14.12 and 15.12</h2>
            <p>The branches 14.12 and 15.12 contain the complete codebase including the specialpurpose components and will remain as unreleased branches so will be accessible for developers and service providers to support their client base. The project has changed the Apache OFBiz build system from Apache Ant to Gradle beginning with the 16.11* series of releases so 14.12 and 15.12 are still using Ant.</p>
      <p>Branches 14.12 and 15.12 will be no longer supported</p>


            <h2>Apache OFBiz 12.04 and earlier</h2>
            <div class="divider"><span></span></div>
            <p>Older superseded releases of Apache OFBiz can be found in the <a href="//archive.apache.org/dist/ofbiz/" target="external">Apache OFBiz archive</a></p>
            <p><strong>NOTE: To avoid any security vulnerabilities the Apache OFBiz community highly recommend that all users upgrade to the latest stable release.</strong></p>
      <p> A descriptions of each release in the history of OFBiz can be <a href="//www.apache.org/dist/ofbiz/" target="external">found here</a></p>
      <h2><a id="security"></a>Security Vulnerabilities</h2>
            <div class="divider"><span></span></div>
            <p> <strong> We strongly encourage OfBiz users to report security problems affecting OFBiz to the private security mailing lists (either security@ofbiz.apache.org or security@apache.org), before disclosing them in a public forum.</strong></p>
<p>Please see the  <a href="//www.apache.org/security/" target="external">ASF Security Team webpage</a> for further information about reporting a security vulnerability as well as their contact information. </p>
 
            <h3>List of Known Vulnerabilities</h3>
            <ul class="iconsList">
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-6800" target="external">CVE-2016-6800</a>; affected releases: 13.07.*, 12.04.*, 11.04.*; fixed in 16.11.01 with revisions </li><a href="//svn.apache.org/viewvc?view=revision&revision=1759065" target="external">1759065</a> and <a href="//svn.apache.org/viewvc?view=revision&revision=1759218" target="external"> 1759218</a>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-4462" target="external">CVE-2016-4462</a>; affected releases: 13.07.*, 12.04.*, 11.04.*; fixed in 16.11.01 with revisions</li><a href="//svn.apache.org/viewvc?view=revision&revision=1761978" target="external">1761978</a>, </li><a href="//svn.apache.org/viewvc?view=revision&revision=1761986" target="external">1761986</a> and <a href="//svn.apache.org/viewvc?view=revision&revision=1761987" target="external"> 1761987</a>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-2170" target="external">CVE-2016-2170</a>; affected releases: 13.07.02 and earlier versions (13.07.*), 12.04.05 and earlier versions (12.04.*); fixed in 13.07.03 and 12.04.06</li>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2015-3268" target="external">CVE-2015-3268</a>; affected releases: 13.07.02 and earlier versions (13.07.*), 12.04.05 and earlier versions (12.04.*); fixed in 13.07.03 and 12.04.06</li>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2014-0232" target="external">CVE-2014-0232</a>; affected releases: 12.04.03 and earlier versions (12.04.*), 11.04.04 and earlier versions (11.04.*); fixed in 12.04.04 and 11.04.05</li>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2013-2250" target="external">CVE-2013-2250</a>; affected releases: 12.04.01, 11.04.02 and earlier versions (11.04.*), 10.04.05 and earlier versions (10.04.*); fixed in 12.04.02, 11.04.03 and 10.04.06</li>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2013-2137" target="external">CVE-2013-2137</a>; affected releases: 12.04.01, 11.04.02 and earlier versions (11.04.*), 10.04.05 and earlier versions (10.04.*); fixed in 12.04.02, 11.04.03 and 10.04.06</li>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2013-0177" target="external">CVE-2013-0177</a>; affected releases: 11.04.01, 10.04.04 and earlier versions (10.04.*); fixed in 11.04.02 and 10.04.05</li>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2012-3506" target="external">CVE-2012-3506</a>; affected releases: 10.04.02, 10.04 (10.04.01); fixed in 10.04.03</li>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2012-1622" target="external">CVE-2012-1622</a>; affected releases: 10.04 (10.04.01); fixed in 10.04.02</li>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2012-1621" target="external">CVE-2012-1621</a>; affected releases: 10.04 (10.04.01); fixed in 10.04.02</li>
        <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2010-0432" target="external">CVE-2010-0432</a>; affected releases: 09.04; fixed in 09.04.01</li>
            </ul>
        </div>
        </div>
      </div>
    </div>
  </section>

<!-- content -->
