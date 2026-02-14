---
layout: post
title: 'Apache OFBiz News - September 2017 '
date: '2017-10-11T09:40:07+00:00'
permalink: apache-ofbiz-news-september-2017
---
<h2>Apache OFBiz News September 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about another documentation effort but this time it is around our existing Data Model, we continue to tidy up our new website, we discuss the possibility of adding bitcoin support to OFBiz and we take a look at some of our Twitter statistics.
<!--more--> 
<h2>Updated OFBiz Data Model Book</h2> 
Recently we have been looking at ways to improve our documentation and it has been a focus of the project and over the last month and contributors in our community are working hard to update our review and update our existing documentation. Many of you may already know about the OFBiz Data Model diagrams that were put together by David E. Jones. Over time OFBiz has changed, so we have had to make adjustments and improvements to the original Data Model. 
<p></p>
Last week Aditya Sharma announced an updated version of the OFBiz Data Model  that has been published on our wiki. Details can be found at the link below:
<a href="https://cwiki.apache.org/confluence/display/OFBIZ/Data+Model+Diagrams" target="_blank" rel="noopener"> Big Book for Apache OFBiz Data Model 2017</a>
<p></p>
The main key changes are as follows: 
<ul>
 <li> Colored content with titles according to the internal color pattern.</li>
 <li>  Added a separate page for integration specific entities.</li>
 <li> Removed technical process diagrams, making it specific for entities.</li>
 <li> Added 77 new entities.</li>
 <li>   Removed 8 entities.</li>
  <li> Added around 200+ new fields in entities (Though major portion includes the addition of description or attrDescription fields in *Attribute or *TypeAttr entities).</l>
 <li>Removed 24 fields.</li>
</ul>
This is a great resource for anyone wanting to understand the OFBiz Data Model and its relationships. A big thank you to Aditya Sharma, Sonal Patwari and everyone who contributed to this effort.
<h2>Ongoing Website Improvements</h2> 
Last month we told you about our new website going live. Over the last few weeks, we have continued to do some minor corrections and other small tasks associated with tidying up the site. We hope that the community is finding the new site useful and easy to navigate.Thanks very much to everyone who is helping out with these tasks especially Jacques Le Roux.
<p></p>
Also contributors from our French community are keen to promote OFBiz in France and have proposed ways to make the content from our website available in French. Work is already in progress around this and a Jira has been created with the details.
<p></p>
Our next step will be to put together our plans to continue to improve the site and information. 
<h2>Adding Bitcoin Support in OFBiz</h2> 
One of the discussions raised this month was regarding a proposal to add Bitcoin support to OFBiz. Details of the thread can be found below:
 <a href="https://s.apache.org/UgKF" target="_blank" rel="noopener"> Bitcoin Discussion</a>
As feedback was very positive and a  <a href="https://issues.apache.org/jira/browse/OFBIZ-9699" target="_blank" rel="noopener"> Jira Ticket</a> has been created which is to be used to monitor the progress of adding and testing this new feature.
<p></p>
Thanks very much to Julian Smith for the proposal and the offer to provide a patch for this functionality. We look forward to seeing the results.
<h2>Apache OFBiz on Twitter</h2> 
The project has been using its Twitter account to promote OFBiz and its features, community and the ASF. Currently, we have made over 1700 tweets and have 469 followers. Over the last month, our tweets are gained over 2000 impressions which means that we are successfully spreading the word. Guess what tends to be our most popular monthly tweet? - The answer is a link to this monthly blog update!
<p></p>
We would like to continue to increase our following so if you would like to keep up to date with what is happening on the project then please follow <a href="https://twitter.com/ApacheOfbiz" target="_blank" rel="noopener">@ApacheOfbiz</a>.

<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>CommonEvents improvements (<a href="https://issues.apache.org/jira/browse/OFBIZ-9673">OFBIZ-9673</a>)</li>
 	<li>Missing foreign key constraint
<ul>
 	<li>for fields userLoginId &amp; userPrefGroupTypeId in UserPreference entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-9678">OFBIZ-9678</a>)</li>
 	<li>OrderItem entity for ShoppingListItem (<a href="https://issues.apache.org/jira/browse/OFBIZ-9767">OFBIZ-9767</a>)</li>
</ul>
</li>
 	<li>Merge extended entity definition in data model component into the existing entity definition (<a href="https://issues.apache.org/jira/browse/OFBIZ-9581">OFBIZ-9581</a>)</li>
 	<li>Required field indicator (*) is missing
<ul>
 	<li>from the required field on add content role. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9749">OFBIZ-9749</a>)</li>
 	<li>on the Add an association section (<a href="https://issues.apache.org/jira/browse/OFBIZ-9748">OFBIZ-9748</a>)</li>
 	<li>from the required field on create website content form, applied patch from jira issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-9741">OFBIZ-9741</a>)</li>
 	<li>from the required field on create website form, applied patch from jira issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-9739">OFBIZ-9739</a>)</li>
 	<li>from create web site parties. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9754">OFBIZ-9754</a>)</li>
</ul>
</li>
 	<li>Extend SecurityGroup entity and add name/groupName field. Added groupName field to entity SecurityGroup and related changes done in the data, services and UI. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9620">OFBIZ-9620</a>)</li>
 	<li>Moved to common-theme
<ul>
 	<li>jquery related js/plugins from images to webapp (<a href="https://issues.apache.org/jira/browse/OFBIZ-5776">OFBIZ-5776</a>)</li>
 	<li>Moved OfbizUtil.js and fieldlookup.js from images to common-theme and made changes accordingly. (<a href="https://issues.apache.org/jira/browse/OFBIZ-5776">OFBIZ-5776</a>)</li>
</ul>
</li>
 	<li>Removed unused file categorytree.css from code</li>
 	<li>Moved images from webapp/multiflex/* to webapp/multiflex/images and updated references</li>
 	<li>Add session tracking mode and make cookie secure (<a href="https://issues.apache.org/jira/browse/OFBIZ-6655">OFBIZ-6655</a>)</li>
 	<li>Missing Relationship from OrderHeader to WebSite (<a href="https://issues.apache.org/jira/browse/OFBIZ-9647">OFBIZ-9647</a>)
<ul>
 	<li>Upgrade and clean the implementation for OWASP dependency checker</li>
 	<li>Upgrade the version from 1.4.0 to 2.1.1</li>
 	<li>Remove the dependency on MavenCentral and replace it with a custom link to the original source of work using a custom maven URL. Thus all dependencies are downloaded from JCenter to avoid duplication of library downloads.</li>
 	<li>Update README.md on how to use this task</li>
</ul>
</li>
 	<li>Updated phone validation method to validate phone for specific geo. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9358">OFBIZ-9358</a>)</li>
 	<li>New Rule Based Number Format for Indian Number System in International Components for Unicode (ICU) OFBiz usage. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9489">OFBIZ-9489</a>)</li>
 	<li>Update UtilMisc.formatRuleBasedAmount() method to take rules and ruleSet and formatting can be done, rather than system providing all ruleset support. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9490">OFBIZ-9490</a>)</li>
 	<li>Apply new ruleSet definition into Ofbiz files. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9515">OFBIZ-9515</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Updated moved file references for plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-5776">OFBIZ-5776</a>)</li>
 	<li>Apply new ruleSet definition into Ofbiz files. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9515">OFBIZ-9515</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>Fix references where Mime type is displayed in HTML encoded pattern (<a href="https://issues.apache.org/jira/browse/OFBIZ-9644">OFBIZ-9644</a>)</li>
 	<li>Fix Default or Empty Catch block in Java and Groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8341">OFBIZ-8341</a>)</li>
 	<li>Can enter empty content for product facility (<a href="https://issues.apache.org/jira/browse/OFBIZ-8323">OFBIZ-8323</a>). A Generic Issue with EntityAutoEngine in which success message is appended to result after invoking create, update, delete, expire methods.</li>
 	<li>FacilityId should be mandatory for Create Inventory Item form in EditInventoryItem screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-9499">OFBIZ-9499</a>)</li>
 	<li>Error in payment address for purchase invoice via service createinvoicefororder (<a href="https://issues.apache.org/jira/browse/OFBIZ-9535">OFBIZ-9535</a>)</li>
 	<li>Add JsLanguageFilesMapping.java location to createJsLanguageFileMapping service</li>
 	<li>Add auto generated java file for language mapping js.</li>
 	<li>Fix missing UiLabels (<a href="https://issues.apache.org/jira/browse/OFBIZ-9745">OFBIZ-9745</a>)</li>
 	<li>MRP incorrectly computes quantity already received in open purchase order shipments. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9525">OFBIZ-9525</a>)
The MRP algorithm incorrectly computed the quantity of items partially received in a purchase shipment because it leveraged the OrderReadHelper.getItemShippedQuantity(...) method that is intended to be used only to count the quantity shipped of sales order.</li>
 	<li>Corrected Readme.md file path.</li>
 	<li>Transaction Timeout in JavaEventHandler (<a href="https://issues.apache.org/jira/browse/OFBIZ-9725">OFBIZ-9725</a>)
When running a service from webtools (not scheduling it) the duration of the service is limited to the transaction default timeout (60 seconds)</li>
 	<li>'Find Opportunities' field name is reflecting in place of 'Opportunity Id' on FindSalesOpportunity screen, applied patch from jira issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-9753">OFBIZ-9753</a>)</li>
 	<li>Creating Lead Source from profile page it redirects to empty profile page (<a href="https://issues.apache.org/jira/browse/OFBIZ-9553">OFBIZ-9553</a>)</li>
 	<li>UI issue in Lead Lookup on find opportunity (<a href="https://issues.apache.org/jira/browse/OFBIZ-9477">OFBIZ-9477</a>)</li>
 	<li>Fix type entities to follow convention of hasTable (<a href="https://issues.apache.org/jira/browse/OFBIZ-9696">OFBIZ-9696</a>)</li>
 	<li>UI issue on web pos for different themes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7253">OFBIZ-7253</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Fix references where Mime type is displayed in HTML encoded pattern (<a href="https://issues.apache.org/jira/browse/OFBIZ-9644">OFBIZ-9644</a>)</li>
 	<li>Empty rows in Excel files affect the imported data (<a href="https://issues.apache.org/jira/browse/OFBIZ-9728">OFBIZ-9728</a>)</li>
 	<li>Ftl error shown on Edit Shopping List page in ecommerce component (<a href="https://issues.apache.org/jira/browse/OFBIZ-9742">OFBIZ-9742</a>)</li>
 	<li>Getting error in select frequency drop down on eCommerce shopping list screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-9762">OFBIZ-9762</a>)</li>
 	<li>UI issue on Web POS for different themes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7253">OFBIZ-7253</a>)</li>
</ul>
