---
layout: post
title: Apache OFBiz News - December 2019
date: '2020-08-19T14:25:39+00:00'
permalink: apache-ofbiz-news-december-2019
---
## Apache OFBiz News December 2019

Welcome to our regular monthly round-up of OFBiz news. This month we share with you details of our usual list of features, improvements and statistics.

## <span style="letter-spacing: -0.018em;">OFBiz Statistics</span>

Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:** 12 issues were opened and 8 issues were closed ( 4 different people helped to close these issues)
- **Code Change and Commit Activity:**
  - **Framework:** 42 commits to the code base that changed 3,027 lines of code ( 5 committers were active)
  - **Plugins:** 4 commits to the code base that changed 331 lines of code ( 2 committers were active)
- **Mailing Lists:**
  - **Dev:** 215 emails sent and 35 topics discussed (22 different people)
  - **User:** 107 emails sent and 26 topics discussed (24 different people) <br>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Removes some explicit transitive dependencies in 'build.gradle' (<a href="https://github.com/apache/ofbiz-framework/commit/815fb528352b4156f0a5c7b4372ae45ac6f43fb4" target="_blank">GitHub Link</a>)
- Upgrades some dependencies in 'build.gradle' (<a href="https://github.com/apache/ofbiz-framework/commit/81f82b12034b7e02827b8ebedf5e5fa544cd0b05" target="_blank">GitHub Link</a>)
- Removes unnecessary 'ofbizDebug' task type (<a href="https://issues.apache.org/jira/browse/OFBIZ-11302" target="_blank">OFBIZ-11302</a>)
- Improves lint method 'SEOContextFilter#doFilter' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11278" target="_blank">OFBIZ-11278</a>)
- Moves 'ComponentContainerTest' data to src/test/resources/ (<a href="https://issues.apache.org/jira/browse/OFBIZ-11275" target="_blank">OFBIZ-11275</a>)
- Resolves classpath conflict on 'freemarkerTransforms.properties' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161" target="_blank">OFBIZ-11161</a>)
- Removes adding classpath info from classloader classpath (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161" target="_blank">OFBIZ-11161</a>)
- Improves lint 'FreeMarkerWorker' class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161" target="_blank">OFBIZ-11161</a>)
- Replaces getLocation with location in 'ComponentConfig.WebappInfo' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11192" target="_blank">OFBIZ-11192</a>)
- Inlines 'StartupControlPanel#createLogDirectoryIfMissing' (<a href="https://github.com/apache/ofbiz-framework/commit/d4c59c3bde56eb3119729ec8f5eae74ef883dbff" target="_blank">GitHub Link</a>)
- Provides equivalent of svn:auto-props properties on the server (<a href="https://issues.apache.org/jira/browse/OFBIZ-11279" target="_blank">OFBIZ-11279</a>)
- Retrieves the included controller files eagerly (<a href="https://issues.apache.org/jira/browse/OFBIZ-11313" target="_blank">OFBIZ-11313</a>)
- Removes 'RequestHandler#ControllerConfig' wrapper (<a href="https://issues.apache.org/jira/browse/OFBIZ-11313" target="_blank">OFBIZ-11313</a>)
- Provides mechanism for saving files before refreshing line endings (<a href="https://github.com/apache/ofbiz-framework/commit/835e8880d1ed0a0c5f46490a5e41033d0df26f8b" target="_blank">GitHub Link</a>)

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes typo in 'GeoData\_ID.xml' (<a href="https://github.com/apache/ofbiz-framework/commit/2da6de1090fd647482330c1ad798ee471546213b" target="_blank">GitHub Link</a>)
- Removes obsolete references to WorkflowActivity (<a href="https://issues.apache.org/jira/browse/OFBIZ-11303" target="_blank">OFBIZ-11303</a>)
- Fixes missing else during previous refactoring (<a href="https://issues.apache.org/jira/browse/OFBIZ-11253" target="_blank">OFBIZ-11253</a>)
- Displays file name in XML parsing errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-6993" target="_blank">OFBIZ-6993</a>)
- Uses 'WebAppUtil#parseWebXmlFile' when handling 'web.xml' files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6993" target="_blank">OFBIZ-6993</a>)
- Adds XML declaration in 'web.xml' files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6993" target="_blank">OFBIZ-6993</a>)
- Fixes: Add button for Gift Message is shown on completed order (<a href="https://issues.apache.org/jira/browse/OFBIZ-11160" target="_blank">OFBIZ-11160</a>)
- Fixes: German translation typo in PartyUiLabels (<a href="https://issues.apache.org/jira/browse/OFBIZ-11308" target="_blank">OFBIZ-11308</a>)
- Revertes: "Uses 'depends-on' attribute instead of 'component-load.xml'" (<a href="https://issues.apache.org/jira/browse/OFBIZ-11296" target="_blank">OFBIZ-11296</a>)

### Plugins

- Adds XML declaration in 'web.xml' files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6993" target="_blank">OFBIZ-6993</a>)
