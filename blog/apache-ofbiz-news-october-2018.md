---
layout: post
title: Apache OFBiz News - October 2018
date: '2019-01-21T10:10:37+00:00'
permalink: apache-ofbiz-news-october-2018
---
<h2>Apache OFBiz News October 2018</h2> 
  <p> </p> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have more news about our new OFBiz release along with&nbsp;our usual list of features and improvements.</p> 
  <p> </p> 
  <h3>Apache OFBiz&nbsp;16.11.05 Released!</h3> 
  <p>During this month the community announced the release of 16.11.05. The new release consolidates all work done since the previous release in January 2018. The release file can be downloaded following the instructions in the&nbsp;<a href="https://ofbiz.apache.org/download.html" style="color: #1155cc;">OFBiz Downloads</a>&nbsp;page. Please refer to the&nbsp;<a href="https://ofbiz.apache.org/release-notes-16.11.05.html" style="color: #1155cc;">Release Notes</a>&nbsp;for more details of the changes introduced with this new version.&nbsp;&nbsp;</p> 
  <p>Please note that a security vulnerability has been reported in OFBiz releases 16.11.01 to 16.11.04. It is highly recommended that you upgrade to the 16.11.05 release to mitigate this vulnerability. Details can be found on the&nbsp;<a href="https://ofbiz.apache.org/security.html" style="color: #1155cc;">Security</a>&nbsp;page and following&nbsp;<a href="https://markmail.org/message/y2f5c7b6rnrvhkaf" style="color: #1155cc;">mail thread</a>.&nbsp;</p> 
  <h3><br class="Apple-interchange-newline" />Solr&nbsp;upgraded to version 7.5.0</h3> 
  <p>OFBiz Solr plugins have been upgraded from Solr 7.3.1 to 7.5.0. Please refer to&nbsp;<a href="https://lucene.apache.org/solr/guide/7_5/solr-upgrade-notes.html" target="_blank" style="color: #1155cc;">Upgrade Notes</a>&nbsp;and Jira task&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10589" target="_blank" style="color: #1155cc;">OFBIZ-10589</a>&nbsp;for more information about what has been implemented.</p> 
  <p>Thanks very much to Jacques Le Roux and also everyone who contributed to getting this upgrade implemented.&nbsp;</p> 
  <div> 
    <h3>Missing Security and Cache Headers in CMS Events</h3> 
    <p>Currently, in OFBiz, while rendering the view through the controller request we set the important security headers like x-frame-options, strict-transport-security, x-content-type-options, X-XSS-Protection and Referrer-Policy etc. in the response object. In a similar line, we set the cache related headers like Expires, Last-Modified, Cache-Control, Pragma. But these security headers are missing in the pages rendered through CMS. These headers are very crucial for the security of the application as they help to prevent various security threats like cross-site scripting, cross-site request forgery, clickjacking etc. These security headers will now be available in the response object prepared through the CMS also.</p> 
    <p>Please refer to&nbsp;<a href="https://markmail.org/message/rubkdyhgr3feykul" style="color: #1155cc;">Mail thread</a>&nbsp;and&nbsp;Jira task <font color="#1155cc"><a href="https://issues.apache.org/jira/browse/OFBIZ-10597" target="_blank" style="color: #1155cc;">OFBIZ-10597</a> </font>for more information about what has been implemented.</p> 
    <p>A big thank you to Deepak Nigam for initiating the discussion and to everyone who contributed.</p> 
  </div> 
  <h3>New features and improvements</h3>Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
  
  <ul> 
    <li>Fixes missing ASL2 headers.</li> 
    <li>Sorts labels and removes a duplicated ones.</li> 
    <li>Rewrites EntityConditionVisitor interface to respect visitor Pattern (<a href="https://issues.apache.org/jira/browse/OFBIZ-10593">OFBIZ-10593</a>).
      
      <ul> 
        <li>Removes visit methods from current EntityConditionBase type hierarchy.</li> 
        <li>Adds or rewrites accept method in EntityCondition type hierachy.</li> 
        <li>Adds documentation in EntityConditionVisitor, introducing implementation examples.</li> 
        <li>Adds junit test validating documented examples.</li> 
      </ul> 
    </li> 
    <li>Cleans up JavaDocs to be standards compliant (<a href="https://issues.apache.org/jira/browse/OFBIZ-7775">OFBIZ-7775</a>).</li> 
    <li>Adds links to external documentation to Javadoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10603">OFBIZ-10603</a>).</li> 
    <li>Refactors ICalendar support (<a href="https://issues.apache.org/jira/browse/OFBIZ-10602">OFBIZ-10602</a>).</li> 
    <li>Changes the Menu extends-resource management to allow structure changes by themes (<a href="https://issues.apache.org/jira/browse/OFBIZ-10600">OFBIZ-10600</a>).</li> 
    <li>Creates an &quot;url-redirect&quot; response type (<a href="https://issues.apache.org/jira/browse/OFBIZ-10599">OFBIZ-10599</a>).</li> 
    <li>Removes unused request-map &quot;edit&quot; attributes in controllers (<a href="https://issues.apache.org/jira/browse/OFBIZ-10608">OFBIZ-10608</a>).</li> 
    <li>Uses the JJWT library to implement a lightweight but complete solution to provide a web token authentication mechanism (<a href="https://issues.apache.org/jira/browse/OFBIZ-9833">OFBIZ-9833</a>).</li> 
    <li>Enables the navigation from a domain to another with automated signed in authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-10307">OFBIZ-10307</a>).</li> 
    <li>Updates google libphonenumber to v8.9.16 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10618">OFBIZ-10618</a>)</li> 
    <li>Updates Apache FOP jar to 2.3 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10619">OFBIZ-10619</a>)</li> 
    <li>Improves consistency and readability for condition tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-8991">OFBIZ-8991</a>).</li> 
    <li>Improves consistency and readability for log tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-8929">OFBIZ-8929</a>).</li> 
    <li>Improves consistency and readability for option (form widget) tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-8930">OFBIZ-8930</a>).</li> 
    <li>Improves consistency and readability for event tag (controller.xml) (<a href="https://issues.apache.org/jira/browse/OFBIZ-8965">OFBIZ-8965</a>).</li> 
    <li>Improves consistency and readability for include-menu tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-8972">OFBIZ-8972</a>).</li> 
    <li>Adds the prefix &quot;OfbizSetup-&quot; to the names of data files that are used by the ofbizsetup app (<a href="https://issues.apache.org/jira/browse/OFBIZ-10598">OFBIZ-10598</a>).</li> 
    <li>Removes unused RequestHandler::doRequest method (<a href="https://issues.apache.org/jira/browse/OFBIZ-10452">OFBIZ-10452</a>).</li> 
  </ul> 
  <h4>Plugins</h4> 
  <ul> 
    <li>Updates Solr and Lucene from 7.3.1 to Solr 7.5.0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10589">OFBIZ-10589</a>).</li> 
  </ul> 
  <h3>Bugfixes</h3>Functional and technical bugfixes:
  
  <h4>Framework</h4> 
  <ul> 
    <li>Execution of the query iCalendar/CALENDAR_PUB_DEMO/ fails(<a href="https://issues.apache.org/jira/browse/OFBIZ-10595">OFBIZ-10595</a>).</li> 
    <li>Creating Javadoc on Windows fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-10605">OFBIZ-10605</a>).</li> 
    <li>Xsd file lacks the menu theme definition.</li> 
    <li>Typo exists in r#1825350 (ignorease =&gt; ignoreCase) (<a href="https://issues.apache.org/jira/browse/OFBIZ-10195">OFBIZ-10195</a>).</li> 
    <li>Issue while creating new events (<a href="https://issues.apache.org/jira/browse/OFBIZ-10583">OFBIZ-10583</a>).</li> 
  </ul> 
  <h4>Plugins</h4> 
  <ul> 
    <li>ECommerce landing page breaks if popular category does not exists (<a href="https://issues.apache.org/jira/browse/OFBIZ-10617">OFBIZ-10617</a>).</li> 
    <li>Multiple records are shown in search modal in webpos (<a href="https://issues.apache.org/jira/browse/OFBIZ-10314">OFBIZ-10314</a>).</li> 
    <li>Import is missing (<a href="https://issues.apache.org/jira/browse/OFBIZ-10314">OFBIZ-10314</a>).</li> 
  </ul> 
  <h3>Documentation</h3> 
  <ul> 
    <li>Adds documentation content for Financial Accounts in Accounting (<a href="https://issues.apache.org/jira/browse/OFBIZ-10296">OFBIZ-10296</a>).</li> 
    <li>Corrects documentation for response type &quot;cross-redirect&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-10569">OFBIZ-10569</a>).</li> 
    <li>Documents the automated authentification from a domain to another (<a href="https://issues.apache.org/jira/browse/OFBIZ-10562">OFBIZ-10562</a>).</li> 
    <li>Completes Birt Flexible Reports documentation (<a href="https://issues.apache.org/jira/browse/OFBIZ-9188">OFBIZ-9188</a>).</li> 
    <li>Converts Birt Flexible Reports documentation to Asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10594">OFBIZ-10594</a>).</li> 
  </ul>
