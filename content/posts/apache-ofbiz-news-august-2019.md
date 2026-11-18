---
layout: post
title: Apache OFBiz News - August 2019
date: '2019-12-27T06:54:46+00:00'
permalink: apache-ofbiz-news-august-2019
---
## Apache OFBiz News <span>August</span> 2019

Welcome to our regular monthly round-up of OFBiz news. This month we have news about Apache OFBiz presence in ApacheCon and OFBiz community days along with our usual list of features, improvements and Statistics.

## Apache OFBiz presence in ApacheCon North America 2019

The OFBiz community is pleased to announce our presence in [ApacheCon North America](https://www.apachecon.com/acna19/).<br>We have following OFBiz tracks in ApacheCon,<br>

  <p> </p>

\1. Apache OFBiz in the Cloud(s) by Deepak Dixit <br>2. OFBiz in the fashion Industry, an omnichannel approach by Nicola Mazzoni <br>3. The ASF and OFBiz - How Community Makes It All Possible by Mike Bates

More details on schedule can be found [here](https://www.apachecon.com/acna19/s/#/schedule/2019-09-12).<span class="css-901oao css-16my406 r-1qd0xha r-ad9z0x r-bcqeeo r-qvutc0"><br>Many other OFBiz folks will also join the </span><span class="css-901oao css-16my406 r-1qd0xha r-ad9z0x r-bcqeeo r-qvutc0">ApacheCon, the OFBiz team will be happy to assist you at </span><span class="css-901oao css-16my406 r-1qd0xha r-ad9z0x r-bcqeeo r-qvutc0"><span class="css-901oao css-16my406 r-1qd0xha r-ad9z0x r-bcqeeo r-qvutc0">ApacheCon.</span></span>

## OFBiz Community Days

In year 2017, we started celebrating the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days" target="_blank">OFBiz community days</a>. The contribution during these days plays a very significant role in overall progress of project. The community days are organized once per quarter so a total of four (4) events throughout the year. Here dates for this year's community day decided such that.

- Quarter 1 - Community Days - February 2019 - N/A (Since we already skipped the February 2019 month)
- Quarter 2 - Community Days - May 2019 - Friday 24th, Saturday 25th, Sunday 26th, Monday 27th and Tuesday 28th
- Quarter 3 - Community Days - August 2019 - Friday 23rd, Saturday 24th, Sunday 25th, Monday 26th and Tuesday 27th
- Quarter 4 - Community Days - November 2019 - Friday 22nd, Saturday 23rd, Sunday 24th, Monday 25th and Tuesday 26th

Contributors can select any single day based on there availability and preferences.

We are pleased to inform that this month we have successfully organized the community days of this quarter.&nbsp;

Please refer to this [mail thread](https://lists.apache.org/thread.html/f3221b46f494a343eaef81e2ecbbe5b0753eb239ba2a2dfb49cfab1e@%3Cuser.ofbiz.apache.org%3E)&nbsp;for more details.

Indeed it was a very impactful community day, the community worked on around 20 issues, more details can be found [here](https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=318&projectKey=OFBIZ&view=reporting&chart=sprintRetrospective&sprint=560) (requires Jira Login).

To get the more insights, we run a brief survey for the participants of community days. Responses can be found [here](https://cwiki.apache.org/confluence/display/OFBIZ/August+2019+-+Community+Day+Survey).

Our next community day is planned on <span>**22nd to <span>**26th November<span> **2019**</span>**</span>**<span><span>, for more detail please refer to this [document](https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days+Dates), stay tuned!</span></span></span>

## <span style="letter-spacing: -0.018em;">OFBiz Statistics</span>

Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:** 33 issues were opened and 37 issues were closed (6 different people helped to close these issues)
- **Code Change and Commit Activity:**
  - **Framework:** 93 commits to the code base that changed 5,432 lines of code (5 committers were active)
  - **Plugins:** 14 commits to the code base that changed 84 lines of code (4 committers were active)
- **Mailing Lists:**
  - **Dev:** 124 emails sent and 35 topics discussed (28 different people)
  - **User:** 97 emails sent and 35 topics discussed (41 different people)

  <p> </p>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Provides a service for moving data for marital status field ([OFBIZ-10977](https://issues.apache.org/jira/browse/OFBIZ-10977))
- Provides helper script to download the gradle wrapper ([OFBIZ-10145](https://issues.apache.org/jira/browse/OFBIZ-10145))
- Homogenize displaying number with multiple formats ([OFBIZ-7532](https://issues.apache.org/jira/browse/OFBIZ-7532))
- Removes the Gradle wrapper from our release packages and adds a step to our build notes ([OFBIZ-10145](https://issues.apache.org/jira/browse/OFBIZ-10145))
- Provides use of method references instead of lambda inside variables ([OFBIZ-10817](https://issues.apache.org/jira/browse/OFBIZ-10817))
- Updates build.gradle to the latest dependencies ([OFBIZ-11151](https://issues.apache.org/jira/browse/OFBIZ-11151))
- Changes the old favicon with the new one ([OFBIZ-10522](https://issues.apache.org/jira/browse/OFBIZ-10522))
- Uses labels in themes names ([OFBIZ-9863](https://issues.apache.org/jira/browse/OFBIZ-9863))
- Adds the component name in &quot;Request Begun/Done&quot; lines in log ([OFBIZ-11153](https://issues.apache.org/jira/browse/OFBIZ-11153))
- Separates resources from Java source files ([OFBIZ-11161](https://issues.apache.org/jira/browse/OFBIZ-11161))
- Makes task &quot;gradlew ofbiz&quot; depend on :classes instead of :build ([OFBIZ-11162](https://issues.apache.org/jira/browse/OFBIZ-11162))
- Makes &quot;gradlew&quot; depend on :jar and :test ([OFBIZ-11162](https://issues.apache.org/jira/browse/OFBIZ-11162))
- Updates Freemarker to 2.3.29 ([OFBIZ-11163](https://issues.apache.org/jira/browse/OFBIZ-11163))
- Compiles groovy integration tests ([OFBIZ-11165](https://issues.apache.org/jira/browse/OFBIZ-11165))
- Removes useless &quot;GroovyScriptTestCase&quot; ([OFBIZ-11165](https://issues.apache.org/jira/browse/OFBIZ-11165))
- Removes redundant &quot;dtd&quot; directory from classpath ([OFBIZ-11161](https://issues.apache.org/jira/browse/OFBIZ-11161))
- Provides UI improvement for drop-down fields on order report screen ([OFBIZ-11166](https://issues.apache.org/jira/browse/OFBIZ-11166))
- Removes &quot;Competitors &amp; Partners&quot; and &quot;Documents&quot; from SFA ([OFBIZ-10823](https://issues.apache.org/jira/browse/OFBIZ-10823))
- Inlines &quot;UtilValidate#areEqual&quot; ([OFBIZ-11172](https://issues.apache.org/jira/browse/OFBIZ-11172))
- Removes unused code in &quot;UtilValidate&quot; ([OFBIZ-11172](https://issues.apache.org/jira/browse/OFBIZ-11172))
- Removes unused imports ([r1865845](https://svn.apache.org/viewvc?view=revision&revision=1865845))
- Adds missing override annotation ([r1865846](https://svn.apache.org/viewvc?view=revision&revision=1865846))
- Improves log message after missing labels ([OFBIZ-11159](https://issues.apache.org/jira/browse/OFBIZ-11159))
- Replaces hard coded &quot;PDF&quot; instead of uiLabel on various places ([OFBIZ-11169](https://issues.apache.org/jira/browse/OFBIZ-11169))
- Provides nested requests related with checkLogin a propper Error-Message in log ([OFBIZ-11154](https://issues.apache.org/jira/browse/OFBIZ-11154))
- Converts mini lang in CatalogServices to groovy ([OFBIZ-9992](https://issues.apache.org/jira/browse/OFBIZ-9992))
- Converts mini lang in CommunicationEventServices to groovy ([OFBIZ-9992](https://issues.apache.org/jira/browse/OFBIZ-9992))
- Adds missing ASL2 header to number.properties ([r1865925](https://svn.apache.org/viewvc?view=revision&revision=1865925))
- Adds possibility to search in find order screen without &quot;ship to country&quot; ([OFBIZ-11176](https://issues.apache.org/jira/browse/OFBIZ-11176))
- Refactors permission model call ([OFBIZ-7113](https://issues.apache.org/jira/browse/OFBIZ-7113))

### Plugins

- Updates build.gradle to the latest dependencies ([OFBIZ-11151](https://issues.apache.org/jira/browse/OFBIZ-11151))
- Removes redundant &quot;dtd&quot; directory from classpath ([OFBIZ-11161](https://issues.apache.org/jira/browse/OFBIZ-11161))
- Replaces hard coded &quot;PDF&quot; instead of uiLabel on various places ([OFBIZ-11169](https://issues.apache.org/jira/browse/OFBIZ-11169))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: favicon.ico missing for LookupDecorator ([OFBIZ-11146](https://issues.apache.org/jira/browse/OFBIZ-11146))
- Fixes: [FB] Find Security Bugs ([OFBIZ-9973](https://issues.apache.org/jira/browse/OFBIZ-9973))
- Fixes: In &quot;Product Image Management&quot; uploading file fails due to missing StatusValidChange ([OFBIZ-11148](https://issues.apache.org/jira/browse/OFBIZ-11148))
- Fixes: Issue loading solr component (JNDI timeout) ([OFBIZ-11156](https://issues.apache.org/jira/browse/OFBIZ-11156))
- Fixes: Description of visual-themes does not work ([OFBIZ-9867](https://issues.apache.org/jira/browse/OFBIZ-9867))
- Fixes: Order status history should show party id instead of user login id ([OFBIZ-11121](https://issues.apache.org/jira/browse/OFBIZ-11121))
- Fixes: Issue creating a promotion action ([OFBIZ-11058](https://issues.apache.org/jira/browse/OFBIZ-11058))
- Fixes: Unable to view partyContent in party's profile page ([OFBIZ-11038](https://issues.apache.org/jira/browse/OFBIZ-11038))
- Fixes: Classpath too long on Windows ([OFBIZ-11173](https://issues.apache.org/jira/browse/OFBIZ-11173))
- Fixes: UiLabel is missing for Web Analytics Type on content component ([OFBIZ-11170](https://issues.apache.org/jira/browse/OFBIZ-11170))
- Fixes: CategoryServices returns null when opening Product main page ([OFBIZ-11175](https://issues.apache.org/jira/browse/OFBIZ-11175))

### Plugins

- Fixes: Issue loading solr component (JNDI timeout) ([OFBIZ-11156](https://issues.apache.org/jira/browse/OFBIZ-11156))
- Fixes: Description of visual-themes does not work ([OFBIZ-9867](https://issues.apache.org/jira/browse/OFBIZ-9867))
- Fixes: Scrum parties don't have partyTypeId set ([OFBIZ-11013](https://issues.apache.org/jira/browse/OFBIZ-11013))
