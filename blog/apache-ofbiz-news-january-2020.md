---
layout: post
title: Apache OFBiz News - January 2020
date: '2020-08-19T14:27:03+00:00'
permalink: apache-ofbiz-news-january-2020
---
<h2>Apache OFBiz News January 2020</h2><p>Welcome to our regular monthly round-up of OFBiz news. This month we 
share with you details of our usual list of features, improvements and 
statistics.</p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 22 issues were opened and 28 issues were closed ( 9 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong>54 commits to the code base that changed 1,880 lines of code ( 9 committers were active)</li><li><strong>Plugins: </strong>17 commits to the code base that changed 160 lines of code ( 4 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev: </strong>340 emails sent and 63 topics discussed (39 different people)</li><li><strong>User: </strong>39 emails sent and 13 topics discussed (32 different people) <br></li></ul></li></ul><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Updates copy right date (<a href="https://github.com/apache/ofbiz-framework/commit/0cddf2168ac328c326fecb9676f25b5f9d80667a" target="_blank">GitHub Link</a>) </li>

    <li>Provides use of 'forEach' in 'RequestHandler' for conciseness (<a href="https://github.com/apache/ofbiz-framework/commit/20e0bbe55c1c0c0d55fccc82afd7789cc22cb538" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused 'ComponentContainer#retrieveComponentConfig' argument (<a href="https://github.com/apache/ofbiz-framework/commit/583f926e0491480b98c29f41a74bad765067dbfc" target="_blank">GitHub Link</a>) </li>

    <li>Provides REST improvement by adding segmented URI support for webtools/entitymaint (<a href="https://issues.apache.org/jira/browse/OFBIZ-11007" target="_blank">OFBIZ-11007</a>) </li>

    <li>Adds 'controlPath' attribute to 'ofbizUrl' Freemarker macro (<a href="https://github.com/apache/ofbiz-framework/commit/05ffbd28177374004a5e63305ba338dc37729fa8" target="_blank">GitHub Link</a>) </li>

    <li>Adds missing uiLabel in in connection and main Webtools screen (<a href="https://github.com/apache/ofbiz-framework/commit/121a91358548022eac7873739a5ea94e9feebd68" target="_blank">GitHub Link</a>) </li>

    <li>Removes white space in uiLabel Main.ftl (<a href="https://github.com/apache/ofbiz-framework/commit/660018a0c403e8b78e7b6fc9ebfec44a9a8942e4" target="_blank">GitHub Link</a>) </li>

    <li>Replaces 'restMethod' by '_method' in request parameters (<a href="https://issues.apache.org/jira/browse/OFBIZ-11332" target="_blank">OFBIZ-11332</a>) </li>

    <li>Provides use of FlexibleStringExpander for field parameter names (<a href="https://issues.apache.org/jira/browse/OFBIZ-11330" target="_blank">OFBIZ-11330</a>) </li>

    <li>Adds Asciidoc template for plugin creation task (<a href="https://issues.apache.org/jira/browse/OFBIZ-10322" target="_blank">OFBIZ-10322</a>) </li>

    <li>Removes unnecessary header-row classes in Upcoming.ftl (<a href="https://issues.apache.org/jira/browse/OFBIZ-11305" target="_blank">OFBIZ-11305</a>) </li>

    <li>Refactors ComponentContainerTest (<a href="https://github.com/apache/ofbiz-framework/commit/0c2124a08a913c6e656ca37122456545465c0304" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused test imports (<a href="https://github.com/apache/ofbiz-framework/commit/259f71dd43029124979dcdb5d9760a63a0c66ed7" target="_blank">GitHub Link</a>) </li>

    <li>Allows ComponentContainerTest to run on windows (#8) (<a href="https://issues.apache.org/jira/browse/OFBIZ-11331" target="_blank">OFBIZ-11331</a>) </li>

    <li>Extends method UtilHttp#urlEncodeArgs with preserveEmpty-parameter (<a href="https://issues.apache.org/jira/browse/OFBIZ-10198" target="_blank">OFBIZ-10198</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Adds 'controlPath' attribute to 'ofbizUrl' Freemarker macro (<a href="https://github.com/apache/ofbiz-framework/commit/7cbc4b6d79a59662679f3bc2f98d9efe2e303b23" target="_blank">GitHub Link</a>) </li>

    <li>Provides a new entity 'CountryDimension' (<a href="https://issues.apache.org/jira/browse/OFBIZ-10954" target="_blank">OFBIZ-10954</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes value of form attribute name (<a href="https://issues.apache.org/jira/browse/OFBIZ-11306" target="_blank">OFBIZ-11306</a>) </li>

    <li>Extends the thru date of the demo financial period (<a href="https://github.com/apache/ofbiz-framework/commit/f9607c0298a4b328421cbc122449797c0d2379d7" target="_blank">GitHub Link</a>) </li>

    <li>Fixes typo in CustRequestForms#EditCustRequest (<a href="https://github.com/apache/ofbiz-framework/commit/c3d53e6b8cfb4b878501efc51ca5a425cd404c6f" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Bug when order contains adjustments with NULL amount (<a href="https://issues.apache.org/jira/browse/OFBIZ-11316" target="_blank">OFBIZ-11316</a>) </li>

    <li>Fixes: updatePassword does not save optional parameter requirePasswordChange (<a href="https://issues.apache.org/jira/browse/OFBIZ-11320" target="_blank">OFBIZ-11320</a>) </li>

    <li>Fixes: Order Status History section broken for anonymous order (<a href="https://issues.apache.org/jira/browse/OFBIZ-11231" target="_blank">OFBIZ-11231</a>) </li>

    <li>Fixes: Page reload after uploading content results in multiple content uploads (<a href="https://issues.apache.org/jira/browse/OFBIZ-11171" target="_blank">OFBIZ-11171</a>) </li>

    <li>Fixes an issue on party page that will upload the data each time after refreshing the page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11325" target="_blank">OFBIZ-11325</a>) </li>

    <li>Fixes: Cannot run ComponentContainerTest on windows (<a href="https://issues.apache.org/jira/browse/OFBIZ-11331" target="_blank">OFBIZ-11331</a>) </li>

    <li>Corrects checkstyle issues in class GenericWebEvent (<a href="https://github.com/apache/ofbiz-framework/commit/fac12a4e6fbcd6892dffa2a75ed83f6bed19a424" target="_blank">GitHub Link</a>) </li>

    <li>Changes 'restMethod' by '_method' in request parameters (<a href="https://issues.apache.org/jira/browse/OFBIZ-11007" target="_blank">OFBIZ-11007</a>) </li>

    <li>Cleans unecessary code and converts code to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/91fa4a958c504c8b88011ea33ba740dbd6451ca6" target="_blank">GitHub Link</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: processorder is submitted as GET instead of POST (<a href="https://github.com/apache/ofbiz-framework/commit/ffb54c218080e2083d4c0aa81e988765084db8f7" target="_blank">GitHub Link</a>) </li>

    <li>Corrects file path for ProcessPaymentSettings.groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11324" target="_blank">OFBIZ-11324</a>) </li>

    <li>Fixes: User should not be directed to main page after adding product to cart from showcart page (<a href="https://issues.apache.org/jira/browse/OFBIZ-11223" target="_blank">OFBIZ-11223</a>) </li>

    <li>Fixes: User is unable to create return (<a href="https://issues.apache.org/jira/browse/OFBIZ-10850" target="_blank">OFBIZ-10850</a>) </li>

    <li>Fixes: service 'loadSalesOrderItemFact' has hard coded currencyUomId (<a href="https://issues.apache.org/jira/browse/OFBIZ-11033" target="_blank">OFBIZ-11033</a>) </li>

</ul>
