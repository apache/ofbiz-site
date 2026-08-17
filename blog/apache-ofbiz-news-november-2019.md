---
layout: post
title: Apache OFBiz News - November 2019
date: '2020-08-19T14:24:16+00:00'
permalink: apache-ofbiz-news-november-2019
---
<h2>Apache OFBiz News&nbsp;November&nbsp;2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we 
share with you details of our usual list of features, improvements and 
statistics.<br></p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 36 issues were opened and 27 issues were closed ( 5 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong>87 commits to the code base that changed 3,027 lines of code ( 7 committers were active)</li><li><strong>Plugins: </strong>13 commits to the code base that changed 867 lines of code ( 4 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev: </strong>114 emails sent and 19 topics discussed (17 different people)</li><li><strong>User: </strong>96 emails sent and 23 topics discussed (24 different people) <br></li></ul></li></ul><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:


  <h3>Framework</h3> 
  <ul> 
    <li>Provides a Test Commit that removes an unnecessary blank line (<a href="https://github.com/apache/ofbiz-framework/commit/c449de5f17ce105cbb523b15f904be4cd1f80830" target="_blank">GitHub Link</a>)</li> 
    <li>Creates .sonarcloud.properties (<a href="https://github.com/apache/ofbiz-framework/commit/a62c4e0ac4f8caa66d3159c7082cf302b2a6c64c" target="_blank">GitHub Link</a>)</li> 
    <li>Imporoves Lint 'ServiceEventHandler' class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11260" target="_blank">OFBIZ-11260</a>)</li> 
    <li>Removes 'ServiceEventHandler#checkSecureParameter' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11260" target="_blank">OFBIZ-11260</a>)</li> 
    <li>Adds a reference to remembering warning message  (<a href="https://issues.apache.org/jira/browse/OFBIZ-10019" target="_blank">OFBIZ-10019</a>)</li> 
    <li>Provides a test to show dependency resolution algorithm problem (<a href="https://issues.apache.org/jira/browse/OFBIZ-11275" target="_blank">OFBIZ-11275</a>)</li> 
    <li>Adds a generic directed graph utilitary class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11275" target="_blank">OFBIZ-11275</a>)</li> 
    <li>Improves webtools/control/FindGeneric (<a href="https://issues.apache.org/jira/browse/OFBIZ-11253" target="_blank">OFBIZ-11253</a>)</li> 
    <li>Converts AutoAcctgInvoiceTests Unit Test from XML to Groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11277" target="_blank">OFBIZ-11277</a>)</li> 
    <li>Adds an enconding type attribute for import data file tools (<a href="https://issues.apache.org/jira/browse/OFBIZ-10234" target="_blank">OFBIZ-10234</a>)</li> 
    <li>Defines 'gradlew' variable in 'build.gradle' only once (<a href="https://github.com/apache/ofbiz-framework/commit/174b92475f47997c9ee17fe9a3991ec813997169" target="_blank">GitHub Link</a>)</li> 
    <li>Uses 'depends-on' attribute instead of 'component-load.xml' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11296" target="_blank">OFBIZ-11296</a>)</li> 
    <li>Removes exclusion of files from component 'config' directories (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161" target="_blank">OFBIZ-11161</a>)</li> 
    <li>References the Servlet javadoc from Apache Tomcat (<a href="https://issues.apache.org/jira/browse/OFBIZ-11300" target="_blank">OFBIZ-11300</a>)</li> 
    <li>Removes unnecessary explicit Tomcat dependencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-11300" target="_blank">OFBIZ-11300</a>)</li> 
    <li>Upgrades Tomcat 9.0.27 to 9.0.29 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11300" target="_blank">OFBIZ-11300</a>)</li> 
    <li>Resolves: TODO: Convert this to a <set-calendar> operation (<a href="https://github.com/apache/ofbiz-framework/commit/4ac9ae097eebbbe9d894eb3f0d2959ec739999de" target="_blank">GitHub Link</a>)</set-calendar></li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Creates .sonarcloud.properties (<a href="https://github.com/apache/ofbiz-framework/commit/25733c0981e9e8f651c5a3d0f1b1bdf857c8a58f" target="_blank">GitHub Link</a>)</li> 
  </ul> 
  <h2>Bugfixes</h2>

Functional and technical bugfixes:


  <h3>Framework</h3> 
  <ul> 
    <li>Fixes: baseEcommerceSecureUrl does not work in ecomseo. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11267" target="_blank">OFBIZ-11267</a>)</li> 
    <li>Fixes: content/control/WebSiteCms?webSiteId=CmsSite fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-11266" target="_blank">OFBIZ-11266</a>)</li> 
    <li>Fixes: Getting policy error while editing html text data using cms (<a href="https://issues.apache.org/jira/browse/OFBIZ-11265" target="_blank">OFBIZ-11265</a>)</li> 
    <li>Fixes linting issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11265" target="_blank">OFBIZ-11265</a>)</li> 
    <li>Fixes class SeoContextFilter is not able to handle query strings (<a href="https://issues.apache.org/jira/browse/OFBIZ-11278" target="_blank">OFBIZ-11278</a>)</li> 
    <li>Fixes possible NPE in StringUtil#strToMap (<a href="https://issues.apache.org/jira/browse/OFBIZ-11281" target="_blank">OFBIZ-11281</a>)</li> 
    <li>Adds missing view permissions checks to various screens (<a href="https://github.com/apache/ofbiz-framework/commit/cbad4d3e22feaf931ad77f671fc268e80fb88c3d" target="_blank">GitHub Link</a>)</li> 
    <li>Provides usage of 'include-form' instead of 'include-grid' in PartyScreens.xml for grid elements (<a href="https://issues.apache.org/jira/browse/OFBIZ-11286" target="_blank">OFBIZ-11286</a>)</li> 
    <li>Fixes: Error while CSR creates a return (<a href="https://issues.apache.org/jira/browse/OFBIZ-11068" target="_blank">OFBIZ-11068</a>)</li> 
    <li>Fixes: Production run not created for marketing package auto type product if component inventory is not available (<a href="https://issues.apache.org/jira/browse/OFBIZ-10585" target="_blank">OFBIZ-10585</a>)</li> 
    <li>Fixes: liniting issues introduced by commit 'd00208c' (<a href="https://issues.apache.org/jira/browse/OFBIZ-10585" target="_blank">OFBIZ-10585</a>)</li> 
    <li>Removes unneeded space after parenthesis (<a href="https://github.com/apache/ofbiz-framework/commit/bc0b80b46652ea393cbb2dc0adc824f93f40b8cf" target="_blank">GitHub Link</a>)</li> 
    <li>Fixes: Number problem while cancelling order item (<a href="https://issues.apache.org/jira/browse/OFBIZ-11283" target="_blank">OFBIZ-11283</a>)</li> 
    <li>Removes dependency management from 'ComponentContainer' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11275" target="_blank">OFBIZ-11275</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Removes double forward slashes in ecommerce emails (<a href="https://issues.apache.org/jira/browse/OFBIZ-2618" target="_blank">OFBIZ-2618</a>)</li> 
    <li>Fixes: Link in verification email for Newsletter gives security error (<a href="https://issues.apache.org/jira/browse/OFBIZ-9804" target="_blank">OFBIZ-9804</a>)</li> 
    <li>Adds missing view permissions checks to various screens (<a href="https://github.com/apache/ofbiz-framework/commit/e49b345808f09c441c086b4c1bea30d4d277ce01" target="_blank">GitHub Link</a>)</li> 
    <li>Uses correct package name for 'OrderNotificationTests.groovy' (<a href="https://github.com/apache/ofbiz-framework/commit/c0db78c750e863219edba5c7631c9d426283cfea" target="_blank">GitHub Link</a>)</li> 
  </ul> 
  <h2>Documentation</h2> 
  <h3>Framework</h3> 
  <ul> 
    <li>Adds 'CONTRIBUTING.adoc' file (<a href="https://issues.apache.org/jira/browse/OFBIZ-11271" target="_blank">OFBIZ-11271</a>)</li> 
  </ul>
