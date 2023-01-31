---
layout: post
title: Apache OFBiz News - December 2019
date: '2020-08-19T14:25:39+00:00'
permalink: apache-ofbiz-news-december-2019
---
<h2>Apache OFBiz News December 2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we 
share with you details of our usual list of features, improvements and 
statistics.</p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 12 issues were opened and 8 issues were closed ( 4 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong>42 commits to the code base that changed 3,027 lines of code ( 5 committers were active)</li><li><strong>Plugins: </strong>4 commits to the code base that changed 331 lines of code ( 2 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev: </strong>215 emails sent and 35 topics discussed (22 different people)</li><li><strong>User: </strong>107 emails sent and 26 topics discussed (24 different people) <br></li></ul></li></ul><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Removes some explicit transitive dependencies in 'build.gradle' (<a href="https://github.com/apache/ofbiz-framework/commit/815fb528352b4156f0a5c7b4372ae45ac6f43fb4" target="_blank">GitHub Link</a>) </li>

    <li>Upgrades some dependencies in 'build.gradle' (<a href="https://github.com/apache/ofbiz-framework/commit/81f82b12034b7e02827b8ebedf5e5fa544cd0b05" target="_blank">GitHub Link</a>) </li>

    <li>Removes unnecessary 'ofbizDebug' task type (<a href="https://issues.apache.org/jira/browse/OFBIZ-11302" target="_blank">OFBIZ-11302</a>) </li>

    <li>Improves lint method 'SEOContextFilter#doFilter' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11278" target="_blank">OFBIZ-11278</a>) </li>

    <li>Moves 'ComponentContainerTest' data to src/test/resources/ (<a href="https://issues.apache.org/jira/browse/OFBIZ-11275" target="_blank">OFBIZ-11275</a>) </li>

    <li>Resolves classpath conflict on 'freemarkerTransforms.properties' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161" target="_blank">OFBIZ-11161</a>) </li>

    <li>Removes adding classpath info from classloader classpath (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161" target="_blank">OFBIZ-11161</a>) </li>

    <li>Improves lint 'FreeMarkerWorker' class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161" target="_blank">OFBIZ-11161</a>) </li>

    <li>Replaces getLocation with location in 'ComponentConfig.WebappInfo' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11192" target="_blank">OFBIZ-11192</a>) </li>

    <li>Inlines 'StartupControlPanel#createLogDirectoryIfMissing' (<a href="https://github.com/apache/ofbiz-framework/commit/d4c59c3bde56eb3119729ec8f5eae74ef883dbff" target="_blank">GitHub Link</a>) </li>

    <li>Provides equivalent of svn:auto-props properties on the server (<a href="https://issues.apache.org/jira/browse/OFBIZ-11279" target="_blank">OFBIZ-11279</a>) </li>

    <li>Retrieves the included controller files eagerly (<a href="https://issues.apache.org/jira/browse/OFBIZ-11313" target="_blank">OFBIZ-11313</a>) </li>

    <li>Removes 'RequestHandler#ControllerConfig' wrapper (<a href="https://issues.apache.org/jira/browse/OFBIZ-11313" target="_blank">OFBIZ-11313</a>) </li>

    <li>Provides mechanism for saving files before refreshing line endings (<a href="https://github.com/apache/ofbiz-framework/commit/835e8880d1ed0a0c5f46490a5e41033d0df26f8b" target="_blank">GitHub Link</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes typo in 'GeoData_ID.xml' (<a href="https://github.com/apache/ofbiz-framework/commit/2da6de1090fd647482330c1ad798ee471546213b" target="_blank">GitHub Link</a>) </li>

    <li>Removes obsolete references to WorkflowActivity (<a href="https://issues.apache.org/jira/browse/OFBIZ-11303" target="_blank">OFBIZ-11303</a>) </li>

    <li>Fixes missing else during previous refactoring (<a href="https://issues.apache.org/jira/browse/OFBIZ-11253" target="_blank">OFBIZ-11253</a>) </li>

    <li>Displays file name in XML parsing errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-6993" target="_blank">OFBIZ-6993</a>) </li>

    <li>Uses 'WebAppUtil#parseWebXmlFile' when handling 'web.xml' files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6993" target="_blank">OFBIZ-6993</a>) </li>

    <li>Adds XML declaration in 'web.xml' files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6993" target="_blank">OFBIZ-6993</a>) </li>

    <li>Fixes: Add button for Gift Message is shown on completed order (<a href="https://issues.apache.org/jira/browse/OFBIZ-11160" target="_blank">OFBIZ-11160</a>) </li>

    <li>Fixes: German translation typo in PartyUiLabels (<a href="https://issues.apache.org/jira/browse/OFBIZ-11308" target="_blank">OFBIZ-11308</a>) </li>

    <li>Revertes: "Uses 'depends-on' attribute instead of 'component-load.xml'" (<a href="https://issues.apache.org/jira/browse/OFBIZ-11296" target="_blank">OFBIZ-11296</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Adds XML declaration in 'web.xml' files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6993" target="_blank">OFBIZ-6993</a>) </li>

</ul>
