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
            <p>Please see the  <a href="https://www.apache.org/security" target="external">ASF Security Team webpage</a> for further information about reporting a security vulnerability as well as their contact information. </p>

            <p><strong>We strongly encourage OfBiz users to report security problems affecting OFBiz to the private security mailing lists (either security@ofbiz.apache.org or security@apache.org),
             before disclosing them in a public forum. Please don't pack several vulnerabilities in the same report, send them one by one, thanks in advance.</strong></p>

            <p>Note that we no longer create CVEs for post-authN attacks done using demo credentials, notably using the admin user.
            <strong> <a href="https://s.apache.org/dsj2p"> Rather create bugs reports in our issue tracker (Jira) for that.</a><span style="color:red"> Please don't create zero day Jira issues for unauth (aka pre-authN) reports, thanks in advance.</span></strong></p>

            <p>One of the reason we no longer create CVEs for post-authN attacks done using demo credentials is because
            <a href="https://nightlies.apache.org/ofbiz/trunk/readme/html5/README.html#security" target="external"> we highly suggest to OFBiz users to not use credentials demo in production</a>
             and we expect OFBiz users to do so.
            <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Keeping+OFBiz+secure" target="external"> We also warn our users on the "Keeping OFBiz secure wiki page".</a>
             And we finally reject pre-authN vulnerabilities because we have a solid CSRF defense.
            </p>
            <p>
            To clarify the vocabulary used above here are 2 links:
            <ul class="iconsList">
                <li><i class="icon-pin"></i><a href="https://www.scmagazine.com/resource/what-are-post-authentication-attacks-and-how-to-protect-against-them" target="external">pre-authN vs post-authN</a></li>
                <li><i class="icon-pin"></i><a href="https://cwe.mitre.org/data/definitions/863.html#ocimg_863_Alternate_Terms" target="external">authN vs authZ</a></li>
            </ul>
            </p>

            <h3>List of Known Vulnerabilities</h3>
            <ul class="iconsList">
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2025-30676" target="external">CVE-2025-30676</a>; affected releases before 18.12.19; fixed in 18.12.19 with commits <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=ddfe3727b1" target="external">ddfe3727b1</a>, <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=e7b7ae0eaa" target="external">e7b7ae0eaa</a>, <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=dba044c706" target="external">dba044c706</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2025-26865" target="external">CVE-2025-26865</a>; affected OFBiz between releases 18.12.17 and 18.12.18; fixed in 18.12.18 with commits <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=5c725123d2" target="external">5c725123d2</a>, <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=e663c6c1e9" target="external">e663c6c1e9</a>, <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=ce62dce28a" target="external">ce62dce28a</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2024-48962" target="external">CVE-2024-48962</a>; affected releases before 18.12.17; fixed in 18.12.17 with commit <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=761fb67d7f" target="external">761fb67d7f</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2024-47208" target="external">CVE-2024-47208</a>; affected releases before 18.12.17; fixed in 18.12.17 with commit <a href="https://github.com/apache/ofbiz-framework/commit/f044a7e5bf" target="external">f044a7e5bf</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2024-45507" target="external">CVE-2024-45507</a>; affected releases before 18.12.16; fixed in 18.12.16 with commit <a href="https://github.com/apache/ofbiz-framework/commit/ffb1bc4879" target="external">ffb1bc4879</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2024-45195" target="external">CVE-2024-45195</a>; affected releases before 18.12.16; fixed in 18.12.16 with commits <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=ab78769c2d" target="external">ab78769c2d</a>, <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-plugins.git;h=8b95fe6fa" target="external">8b95fe6fa</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2024-38856" target="external">CVE-2024-38856</a>; affected releases before 18.12.15; fixed in 18.12.15 with commit <a href="https://github.com/apache/ofbiz-framework/commit/31d8d7" target="external">31d8d7</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2024-36104" target="external">CVE-2024-36104</a>; affected releases before 18.12.14; fixed in 18.12.14 with commits <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=d33ce31012" target="external">d33ce31012</a>, <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=474e806816" target="external">474e806816</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2024-32113" target="external">CVE-2024-32113</a>; affected releases before 18.12.13; fixed in 18.12.13 with commits <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=b3b87d98dd" target="external">b3b87d98dd</a>, <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=ff316b6e22" target="external">ff316b6e22</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2024-23946" target="external">CVE-2024-23946</a>; affected releases before 18.12.12; fixed in 18.12.12 with commits <a href="https://github.com/apache/ofbiz-framework/commit/b1cf4ef3e1" target="external">b1cf4ef3e1</a>, <a href="https://github.com/apache/ofbiz-framework/commit/93f8a58419" target="external">93f8a58419</a>, <a href="https://github.com/apache/ofbiz-framework/commit/c910e413ba" target="external">c910e413ba</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2024-25065" target="external">CVE-2024-25065</a>; affected releases before 18.12.12; fixed in 18.12.12 with commit <a href="https://github.com/apache/ofbiz-framework/commit/b91a9b7f26" target="external">b91a9b7f26</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2023-51467" target="external">CVE-2023-51467</a>; affected releases before 18.12.11; fixed in 18.12.11 with commits <a href="https://github.com/apache/ofbiz-framework/commit/d8b097f" target="external">d8b097f</a>, <a href="https://github.com/apache/ofbiz-framework/commit/1dcfa07180" target="external">1dcfa07180</a> </li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2023-50968" target="external">CVE-2023-50968</a>; affected releases before 18.12.11; fixed in 18.12.11 with commit <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=82c1737688" target="external">82c1737688</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2023-49070" target="external">CVE-2023-49070</a>; affected release 18.12.09; fixed in 18.12.10 with commit <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=c59336f604" target="external">c59336f604</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2023-46819" target="external">CVE-2023-46819</a>; affected release 18.12.08; fixed in 18.12.09 with commit <a href="https://gitbox.apache.org/repos/asf?p=ofbiz-plugins.git;h=998bf510a" target="external">998bf510a</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2022-25371" target="external">CVE-2022-25371</a>; affected release 18.12.07; fixed in 18.12.08 with commit <a href="https://github.com/apache/ofbiz-plugins/commit/41ff12cf8" target="external">41ff12cf8</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2022-47501" target="external">CVE-2022-47501</a>; affected releases before 18.12.07; fixed in 18.12.07 with commit <a href="https://github.com/apache/ofbiz-plugins/commit/582add7d3" target="external">582add7d3</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2022-25813" target="external">CVE-2022-25813</a>; affected releases before 18.12.06; fixed in 18.12.06 with commits <a href="https://github.com/apache/ofbiz-framework/commit/843b1c7e71" target="external">843b1c7e71</a>, <a href="https://github.com/apache/ofbiz-framework/commit/3797e60375" target="external">3797e60375</a>, <a href="https://github.com/apache/ofbiz-framework/commit/b24dcff344" target="external">b24dcff344</a>, <a href="https://github.com/apache/ofbiz-framework/commit/871ce2aa2e" target="external">871ce2aa2e</a>, <a href="https://github.com/apache/ofbiz-plugins/commit/829e1ca53" target="external">829e1ca53</a>, <a href="https://github.com/apache/ofbiz-framework/commit/16ed130367" target="external">16ed130367</a>, <a href="https://github.com/apache/ofbiz-framework/commit/5cc45e8701" target="external">5cc45e8701</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2022-29063" target="external">CVE-2022-29063</a>; affected releases before 18.12.06; fixed in 18.12.06 with commit <a href="https://github.com/apache/ofbiz-plugins/commit/061252a80" target="external">061252a80</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2022-29158" target="external">CVE-2022-29158</a>; affected releases before 18.12.06; fixed in 18.12.06 with commit <a href="https://github.com/apache/ofbiz-framework/commit/ff92c4bc9" target="external">ff92c4bc9</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2022-25371" target="external">CVE-2022-25371</a>; affected releases before 18.12.06; fixed in 18.12.06 by temporarily disabling Birt component waiting for <a href="https://github.com/eclipse/birt/issues/625" target="external">https://github.com/eclipse/birt/issues/625 to be resolved</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2022-25370" target="external">CVE-2022-25370</a>; affected releases before 18.12.06; fixed in 18.12.06 by temporarily disabling Birt component waiting for <a href="https://github.com/eclipse/birt/issues/625" target="external">https://github.com/eclipse/birt/issues/625 to be resolved</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-45105" target="external">CVE-2021-45105</a>; affected all releases before 17.12.09 and 18.12.04; fixed in 17.12.09 and 18.12.04 with commits <a href="https://github.com/apache/ofbiz-framework/commit/00896e7" target="external">00896e7</a>, <a href="https://github.com/apache/ofbiz-plugins/commit/c69bc8f" target="external">c69bc8f</a>, <a href="https://github.com/apache/ofbiz-framework/commit/4442c2a" target="external">4442c2a</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-44228" target="external">CVE-2021-44228</a>; affected all releases before 17.12.09 and 18.12.03; fixed in 17.12.09 and 18.12.03 with commits <a href="https://github.com/apache/ofbiz-framework/commit/00896e7" target="external">00896e7</a>, <a href="https://github.com/apache/ofbiz-plugins/commit/c69bc8f" target="external">c69bc8f</a>, <a href="https://github.com/apache/ofbiz-framework/commit/bccf140" target="external">bccf140</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-37608" target="external">CVE-2021-37608</a>; affected all releases before 17.12.08; fixed in 17.12.08 with commit <a href="https://github.com/apache/ofbiz-framework/commit/8d49af4/" target="external">8d49af4</a></li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-30128" target="external">CVE-2021-30128</a>; affected all releases before 17.12.07; fixed in 17.12.07 with commits <a href="https://github.com/apache/ofbiz-framework/commit/643b9c7/" target="external">643b9c7</a> <a href="https://github.com/apache/ofbiz-plugins/commit/a343812/" target="external">a343812</a> <a href="https://github.com/apache/ofbiz-framework/commit/62e657f/" target="external">62e657f</a> <a href="https://github.com/apache/ofbiz-framework/commit/fcc0078/" target="external">fcc0078</a> <a href="https://github.com/apache/ofbiz-framework/commit/3f97578/" target="external">3f97578</a> <a href="https://github.com/apache/ofbiz-framework/commit/7fd9d05/" target="external">7fd9d05</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-29200" target="external">CVE-2021-29200</a>; affected all releases before 17.12.07; fixed in 17.12.07 with commit <a href="https://github.com/apache/ofbiz-framework/commit/1bc8a20/" target="external">1bc8a20</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-26295" target="external">CVE-2021-26295</a>; affected all releases before 17.12.07; fixed in 17.12.06 with commit <a href="https://github.com/apache/ofbiz-framework/commit/af9ed4e/" target="external">af9ed4e</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-9496" target="external">CVE-2020-9496</a>; affected releases: 17.12.03; fixed in 17.12.04.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-13923" target="external">CVE-2020-13923</a>; affected all releases before 17.12.04; fixed in 17.12.04.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-12425" target="external">CVE-2019-12425</a>; affected releases: 17.12.01; fixed in 17.12.03 with commit <a href="//gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=793628b" target="external">793628b</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-0235" target="external">CVE-2019-0235</a>; affected releases: 17.12.01; fixed in 17.12.03 with commits <a href="//gitbox.apache.org/repos/asf?p=ofbiz-framework.git;h=82ef7a5" target="external">82ef7a5</a>, <a href="//gitbox.apache.org/repos/asf?p=ofbiz-plugins.git;h=62f9b45" target="external">62f9b45</a>.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2020-1943" target="external">CVE-2020-1943</a>; affected releases: from 16.11.01 to 16.11.07; fixed in 17.12.01.</li>
                <li><i class="icon-pin"></i> <a href="//cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2019-12426" target="external">CVE-2019-12426</a>; affected releases: from 16.11.01 to 16.11.06; fixed in 16.11.07 with revision <a href="//svn.apache.org/viewvc?view=revision&revision=1869887" target="external">1869887</a>.</li>
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
