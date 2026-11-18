---
layout: post
title: Apache OFBiz News - October 2018
date: '2019-01-21T10:10:37+00:00'
permalink: apache-ofbiz-news-october-2018
---
## Apache OFBiz News October 2018

  <p> </p>

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about our new OFBiz release along with&nbsp;our usual list of features and improvements.

  <p> </p>

### Apache OFBiz&nbsp;16.11.05 Released!

During this month the community announced the release of 16.11.05. The new release consolidates all work done since the previous release in January 2018. The release file can be downloaded following the instructions in the&nbsp;<a href="https://ofbiz.apache.org/download.html" style="color: #1155cc;">OFBiz Downloads</a>&nbsp;page. Please refer to the&nbsp;<a href="https://ofbiz.apache.org/release-notes-16.11.05.html" style="color: #1155cc;">Release Notes</a>&nbsp;for more details of the changes introduced with this new version.&nbsp;&nbsp;

Please note that a security vulnerability has been reported in OFBiz releases 16.11.01 to 16.11.04. It is highly recommended that you upgrade to the 16.11.05 release to mitigate this vulnerability. Details can be found on the&nbsp;<a href="https://ofbiz.apache.org/security.html" style="color: #1155cc;">Security</a>&nbsp;page and following&nbsp;<a href="https://markmail.org/message/y2f5c7b6rnrvhkaf" style="color: #1155cc;">mail thread</a>.&nbsp;

### <br>Solr&nbsp;upgraded to version 7.5.0

OFBiz Solr plugins have been upgraded from Solr 7.3.1 to 7.5.0. Please refer to&nbsp;<a href="https://lucene.apache.org/solr/guide/7_5/solr-upgrade-notes.html" target="_blank" style="color: #1155cc;">Upgrade Notes</a>&nbsp;and Jira task&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10589" target="_blank" style="color: #1155cc;">OFBIZ-10589</a>&nbsp;for more information about what has been implemented.

Thanks very much to Jacques Le Roux and also everyone who contributed to getting this upgrade implemented.&nbsp;

<div>

### Missing Security and Cache Headers in CMS Events

Currently, in OFBiz, while rendering the view through the controller request we set the important security headers like x-frame-options, strict-transport-security, x-content-type-options, X-XSS-Protection and Referrer-Policy etc. in the response object. In a similar line, we set the cache related headers like Expires, Last-Modified, Cache-Control, Pragma. But these security headers are missing in the pages rendered through CMS. These headers are very crucial for the security of the application as they help to prevent various security threats like cross-site scripting, cross-site request forgery, clickjacking etc. These security headers will now be available in the response object prepared through the CMS also.

Please refer to&nbsp;<a href="https://markmail.org/message/rubkdyhgr3feykul" style="color: #1155cc;">Mail thread</a>&nbsp;and&nbsp;Jira task <font color="#1155cc"><a href="https://issues.apache.org/jira/browse/OFBIZ-10597" target="_blank" style="color: #1155cc;">OFBIZ-10597</a> </font>for more information about what has been implemented.

A big thank you to Deepak Nigam for initiating the discussion and to everyone who contributed.

</div>

### New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Fixes missing ASL2 headers.
- Sorts labels and removes a duplicated ones.
- Rewrites EntityConditionVisitor interface to respect visitor Pattern ([OFBIZ-10593](https://issues.apache.org/jira/browse/OFBIZ-10593)).
  - Removes visit methods from current EntityConditionBase type hierarchy.
  - Adds or rewrites accept method in EntityCondition type hierachy.
  - Adds documentation in EntityConditionVisitor, introducing implementation examples.
  - Adds junit test validating documented examples.
- Cleans up JavaDocs to be standards compliant ([OFBIZ-7775](https://issues.apache.org/jira/browse/OFBIZ-7775)).
- Adds links to external documentation to Javadoc ([OFBIZ-10603](https://issues.apache.org/jira/browse/OFBIZ-10603)).
- Refactors ICalendar support ([OFBIZ-10602](https://issues.apache.org/jira/browse/OFBIZ-10602)).
- Changes the Menu extends-resource management to allow structure changes by themes ([OFBIZ-10600](https://issues.apache.org/jira/browse/OFBIZ-10600)).
- Creates an &quot;url-redirect&quot; response type ([OFBIZ-10599](https://issues.apache.org/jira/browse/OFBIZ-10599)).
- Removes unused request-map &quot;edit&quot; attributes in controllers ([OFBIZ-10608](https://issues.apache.org/jira/browse/OFBIZ-10608)).
- Uses the JJWT library to implement a lightweight but complete solution to provide a web token authentication mechanism ([OFBIZ-9833](https://issues.apache.org/jira/browse/OFBIZ-9833)).
- Enables the navigation from a domain to another with automated signed in authentication ([OFBIZ-10307](https://issues.apache.org/jira/browse/OFBIZ-10307)).
- Updates google libphonenumber to v8.9.16 ([OFBIZ-10618](https://issues.apache.org/jira/browse/OFBIZ-10618))
- Updates Apache FOP jar to 2.3 ([OFBIZ-10619](https://issues.apache.org/jira/browse/OFBIZ-10619))
- Improves consistency and readability for condition tag ([OFBIZ-8991](https://issues.apache.org/jira/browse/OFBIZ-8991)).
- Improves consistency and readability for log tag ([OFBIZ-8929](https://issues.apache.org/jira/browse/OFBIZ-8929)).
- Improves consistency and readability for option (form widget) tag ([OFBIZ-8930](https://issues.apache.org/jira/browse/OFBIZ-8930)).
- Improves consistency and readability for event tag (controller.xml) ([OFBIZ-8965](https://issues.apache.org/jira/browse/OFBIZ-8965)).
- Improves consistency and readability for include-menu tag ([OFBIZ-8972](https://issues.apache.org/jira/browse/OFBIZ-8972)).
- Adds the prefix &quot;OfbizSetup-&quot; to the names of data files that are used by the ofbizsetup app ([OFBIZ-10598](https://issues.apache.org/jira/browse/OFBIZ-10598)).
- Removes unused RequestHandler::doRequest method ([OFBIZ-10452](https://issues.apache.org/jira/browse/OFBIZ-10452)).

#### Plugins

- Updates Solr and Lucene from 7.3.1 to Solr 7.5.0 ([OFBIZ-10589](https://issues.apache.org/jira/browse/OFBIZ-10589)).

### Bugfixes

Functional and technical bugfixes:

#### Framework

- Execution of the query iCalendar/CALENDAR\_PUB\_DEMO/ fails([OFBIZ-10595](https://issues.apache.org/jira/browse/OFBIZ-10595)).
- Creating Javadoc on Windows fails ([OFBIZ-10605](https://issues.apache.org/jira/browse/OFBIZ-10605)).
- Xsd file lacks the menu theme definition.
- Typo exists in r#1825350 (ignorease =&gt; ignoreCase) ([OFBIZ-10195](https://issues.apache.org/jira/browse/OFBIZ-10195)).
- Issue while creating new events ([OFBIZ-10583](https://issues.apache.org/jira/browse/OFBIZ-10583)).

#### Plugins

- ECommerce landing page breaks if popular category does not exists ([OFBIZ-10617](https://issues.apache.org/jira/browse/OFBIZ-10617)).
- Multiple records are shown in search modal in webpos ([OFBIZ-10314](https://issues.apache.org/jira/browse/OFBIZ-10314)).
- Import is missing ([OFBIZ-10314](https://issues.apache.org/jira/browse/OFBIZ-10314)).

### Documentation

- Adds documentation content for Financial Accounts in Accounting ([OFBIZ-10296](https://issues.apache.org/jira/browse/OFBIZ-10296)).
- Corrects documentation for response type &quot;cross-redirect&quot; ([OFBIZ-10569](https://issues.apache.org/jira/browse/OFBIZ-10569)).
- Documents the automated authentification from a domain to another ([OFBIZ-10562](https://issues.apache.org/jira/browse/OFBIZ-10562)).
- Completes Birt Flexible Reports documentation ([OFBIZ-9188](https://issues.apache.org/jira/browse/OFBIZ-9188)).
- Converts Birt Flexible Reports documentation to Asciidoc ([OFBIZ-10594](https://issues.apache.org/jira/browse/OFBIZ-10594)).
