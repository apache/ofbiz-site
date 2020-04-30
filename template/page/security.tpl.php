<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Security</title>';
?>

<!-- content -->
  <!-- page content -->
  <section id="content" class="sidebar">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Security</h1>
          <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="#">Community</a><span>/</span> <span class="current">Security</span> </div>
        </div>
      </div>
    </header>
    <div class="slice clearfix">
      <div class="container">
        <div class="row">
            <h2><a id="security"></a>Security Vulnerabilities</h2>
            <div class="divider"><span></span></div>
            <p> <strong> We strongly encourage OfBiz users to report security problems affecting OFBiz to the private security mailing lists (either security@ofbiz.apache.org or security@apache.org), before disclosing them in a public forum.</strong></p>
            <p>Please see the  <a href="https://www.apache.org/security" target="external">ASF Security Team webpage</a> for further information about reporting a security vulnerability as well as their contact information. </p>
            <p>You might be interested by our <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Keeping+OFBiz+secure" target="external">Keeping OFBiz secure wiki page.</a></p>
 
            <h3>List of Known Vulnerabilities</h3>
            <ul class="iconsList">
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-12425" target="external">CVE-2019-12425</a>; affected releases: 17.12.01; fixed in 17.12.03 with commit <a href="//gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=793628b" target="external">793628b</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-0235" target="external">CVE-2019-0235</a>; affected releases: 17.12.01; fixed in 17.12.03 with commits <a href="//gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=82ef7a5" target="external">82ef7a5</a>, <a href="//gitbox.apache.org/repos/asf?p=ofbiz-plugins.git;h=62f9b45" target="external">62f9b45</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-17200" target="external">CVE-2018-17200</a>; affected releases: from 16.11.01 to 16.11.05; fixed in 16.11.06 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1850017" target="external">1850017</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1850019" target="external">1850019</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-0189" target="external">CVE-2019-0189</a>; affected releases: from 16.11.01 to 16.11.05; fixed in 16.11.06 with revisions specified in <a href="//issues.apache.org/jira/browse/OFBIZ-10770" target="external">OFBIZ-10770</a>, <a href="//issues.apache.org/jira/browse/OFBIZ-10837" target="external">OFBIZ-10837</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-10073" target="external">CVE-2019-10073</a>; affected releases: from 16.11.01 to 16.11.05; fixed in 16.11.06 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1858438" target="external">1858438</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1858543" target="external">1858543</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1860595" target="external">1860595</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1860616" target="external">1860616</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-10074" target="external">CVE-2019-10074</a>; affected releases: from 16.11.01 to 16.11.05; fixed in 16.11.06 with revision <a href="//svn.apache.org/viewvc?view=revision&revision=1858533" target="external">1858533</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2018-8033" target="external">CVE-2018-8033</a>; affected releases: from 16.11.01 to 16.11.04; fixed in 16.11.05 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1833708" target="external">1833708</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1836141" target="external">1836141</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2011-3600" target="external">CVE-2011-3600</a>; affected releases: from 16.11.01 to 16.11.04; fixed in 16.11.05 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1833724" target="external">1833724</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1833708" target="external">1833708</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1836141" target="external">1836141</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2017-15714" target="external">CVE-2017-15714</a>; affected releases: from 16.11.01 to 16.11.03; fixed in 16.11.04 with revision <a href="//svn.apache.org/viewvc?view=revision&revision=1818482" target="external">1759065</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-6800" target="external">CVE-2016-6800</a>; affected releases: 13.07.*, 12.04.*, 11.04.*; fixed in 16.11.01 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1759065" target="external">1759065</a> and <a href="//svn.apache.org/viewvc?view=revision&revision=1759218" target="external"> 1759218</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2016-4462" target="external">CVE-2016-4462</a>; affected releases: 13.07.*, 12.04.*, 11.04.*; fixed in 16.11.01 with revisions <a href="//svn.apache.org/viewvc?view=revision&revision=1761978" target="external">1761978</a>, <a href="//svn.apache.org/viewvc?view=revision&revision=1761986" target="external">1761986</a> and <a href="//svn.apache.org/viewvc?view=revision&revision=1761987" target="external"> 1761987</a></li>
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
  </section>

<!-- content -->
