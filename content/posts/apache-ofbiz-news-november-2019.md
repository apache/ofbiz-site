---
layout: post
title: Apache OFBiz News - November 2019
date: '2020-08-19T14:24:16+00:00'
permalink: apache-ofbiz-news-november-2019
---
## Apache OFBiz News&nbsp;November&nbsp;2019

Welcome to our regular monthly round-up of OFBiz news. This month we share with you details of our usual list of features, improvements and statistics.<br>

## <span style="letter-spacing: -0.018em;">OFBiz Statistics</span>

Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:** 36 issues were opened and 27 issues were closed ( 5 different people helped to close these issues)
- **Code Change and Commit Activity:**
  - **Framework:** 87 commits to the code base that changed 3,027 lines of code ( 7 committers were active)
  - **Plugins:** 13 commits to the code base that changed 867 lines of code ( 4 committers were active)
- **Mailing Lists:**
  - **Dev:** 114 emails sent and 19 topics discussed (17 different people)
  - **User:** 96 emails sent and 23 topics discussed (24 different people) <br>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Provides a Test Commit that removes an unnecessary blank line (<a href="https://github.com/apache/ofbiz-framework/commit/c449de5f17ce105cbb523b15f904be4cd1f80830" target="_blank">GitHub Link</a>)
- Creates .sonarcloud.properties (<a href="https://github.com/apache/ofbiz-framework/commit/a62c4e0ac4f8caa66d3159c7082cf302b2a6c64c" target="_blank">GitHub Link</a>)
- Imporoves Lint 'ServiceEventHandler' class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11260" target="_blank">OFBIZ-11260</a>)
- Removes 'ServiceEventHandler#checkSecureParameter' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11260" target="_blank">OFBIZ-11260</a>)
- Adds a reference to remembering warning message (<a href="https://issues.apache.org/jira/browse/OFBIZ-10019" target="_blank">OFBIZ-10019</a>)
- Provides a test to show dependency resolution algorithm problem (<a href="https://issues.apache.org/jira/browse/OFBIZ-11275" target="_blank">OFBIZ-11275</a>)
- Adds a generic directed graph utilitary class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11275" target="_blank">OFBIZ-11275</a>)
- Improves webtools/control/FindGeneric (<a href="https://issues.apache.org/jira/browse/OFBIZ-11253" target="_blank">OFBIZ-11253</a>)
- Converts AutoAcctgInvoiceTests Unit Test from XML to Groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11277" target="_blank">OFBIZ-11277</a>)
- Adds an enconding type attribute for import data file tools (<a href="https://issues.apache.org/jira/browse/OFBIZ-10234" target="_blank">OFBIZ-10234</a>)
- Defines 'gradlew' variable in 'build.gradle' only once (<a href="https://github.com/apache/ofbiz-framework/commit/174b92475f47997c9ee17fe9a3991ec813997169" target="_blank">GitHub Link</a>)
- Uses 'depends-on' attribute instead of 'component-load.xml' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11296" target="_blank">OFBIZ-11296</a>)
- Removes exclusion of files from component 'config' directories (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161" target="_blank">OFBIZ-11161</a>)
- References the Servlet javadoc from Apache Tomcat (<a href="https://issues.apache.org/jira/browse/OFBIZ-11300" target="_blank">OFBIZ-11300</a>)
- Removes unnecessary explicit Tomcat dependencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-11300" target="_blank">OFBIZ-11300</a>)
- Upgrades Tomcat 9.0.27 to 9.0.29 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11300" target="_blank">OFBIZ-11300</a>)
- Resolves: TODO: Convert this to a <set-calendar> operation (<a href="https://github.com/apache/ofbiz-framework/commit/4ac9ae097eebbbe9d894eb3f0d2959ec739999de" target="_blank">GitHub Link</a>)</set-calendar>

### Plugins

- Creates .sonarcloud.properties (<a href="https://github.com/apache/ofbiz-framework/commit/25733c0981e9e8f651c5a3d0f1b1bdf857c8a58f" target="_blank">GitHub Link</a>)

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: baseEcommerceSecureUrl does not work in ecomseo. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11267" target="_blank">OFBIZ-11267</a>)
- Fixes: content/control/WebSiteCms?webSiteId=CmsSite fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-11266" target="_blank">OFBIZ-11266</a>)
- Fixes: Getting policy error while editing html text data using cms (<a href="https://issues.apache.org/jira/browse/OFBIZ-11265" target="_blank">OFBIZ-11265</a>)
- Fixes linting issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11265" target="_blank">OFBIZ-11265</a>)
- Fixes class SeoContextFilter is not able to handle query strings (<a href="https://issues.apache.org/jira/browse/OFBIZ-11278" target="_blank">OFBIZ-11278</a>)
- Fixes possible NPE in StringUtil#strToMap (<a href="https://issues.apache.org/jira/browse/OFBIZ-11281" target="_blank">OFBIZ-11281</a>)
- Adds missing view permissions checks to various screens (<a href="https://github.com/apache/ofbiz-framework/commit/cbad4d3e22feaf931ad77f671fc268e80fb88c3d" target="_blank">GitHub Link</a>)
- Provides usage of 'include-form' instead of 'include-grid' in PartyScreens.xml for grid elements (<a href="https://issues.apache.org/jira/browse/OFBIZ-11286" target="_blank">OFBIZ-11286</a>)
- Fixes: Error while CSR creates a return (<a href="https://issues.apache.org/jira/browse/OFBIZ-11068" target="_blank">OFBIZ-11068</a>)
- Fixes: Production run not created for marketing package auto type product if component inventory is not available (<a href="https://issues.apache.org/jira/browse/OFBIZ-10585" target="_blank">OFBIZ-10585</a>)
- Fixes: liniting issues introduced by commit 'd00208c' (<a href="https://issues.apache.org/jira/browse/OFBIZ-10585" target="_blank">OFBIZ-10585</a>)
- Removes unneeded space after parenthesis (<a href="https://github.com/apache/ofbiz-framework/commit/bc0b80b46652ea393cbb2dc0adc824f93f40b8cf" target="_blank">GitHub Link</a>)
- Fixes: Number problem while cancelling order item (<a href="https://issues.apache.org/jira/browse/OFBIZ-11283" target="_blank">OFBIZ-11283</a>)
- Removes dependency management from 'ComponentContainer' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11275" target="_blank">OFBIZ-11275</a>)

### Plugins

- Removes double forward slashes in ecommerce emails (<a href="https://issues.apache.org/jira/browse/OFBIZ-2618" target="_blank">OFBIZ-2618</a>)
- Fixes: Link in verification email for Newsletter gives security error (<a href="https://issues.apache.org/jira/browse/OFBIZ-9804" target="_blank">OFBIZ-9804</a>)
- Adds missing view permissions checks to various screens (<a href="https://github.com/apache/ofbiz-framework/commit/e49b345808f09c441c086b4c1bea30d4d277ce01" target="_blank">GitHub Link</a>)
- Uses correct package name for 'OrderNotificationTests.groovy' (<a href="https://github.com/apache/ofbiz-framework/commit/c0db78c750e863219edba5c7631c9d426283cfea" target="_blank">GitHub Link</a>)

## Documentation

### Framework

- Adds 'CONTRIBUTING.adoc' file (<a href="https://issues.apache.org/jira/browse/OFBIZ-11271" target="_blank">OFBIZ-11271</a>)
