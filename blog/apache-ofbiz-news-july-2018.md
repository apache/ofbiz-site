---
layout: post
title: 'Apache OFBiz News - July 2018 '
date: '2018-08-28T07:40:10+00:00'
permalink: apache-ofbiz-news-july-2018
---
<h2>Apache OFBiz News July 2018 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have more news about our ongoing refactoring work, we discuss managing Tax and VAT in OFBiz, we consider the impacts of the change of Oracle's Java release model, our community continues to come with suggestions to improve the codebase and OFBiz is Super Healthy!
<!--more--> 
<h2>Ongoing Refactoring</h2>The work to re-factor and improve the OFBiz framework is continuing. During July our development list included a some detailed discussions about ways to clean up and improve the existing code. A special mention goes to contributor Mathieu Lirzin who has been very active and has currently provided patches for quite a few different JIRA issues. </p><ul><li><a href="https://issues.apache.org/jira/browse/OFBIZ-10411" target="_blank" rel="noopener"> OFBIZ-10411- XML schemas should use predefined boolean type</a></li>
<li><a href="https://issues.apache.org/jira/browse/OFBIZ-10488" target="_blank" rel="noopener">  OFBIZ-10488 - Replace Callable objects with lambda expressions.</a></li>
<li><a href="https://issues.apache.org/jira/browse/OFBIZ-10450" target="_blank" rel="noopener"> OFBIZ-10450 - Extract verification of certificates in ‘RequestHandler’ </a> </li>
<li><a href="https://issues.apache.org/jira/browse/OFBIZ-10474" target="_blank" rel="noopener"> OFBIZ-10474 - Remove duplicated code when running login/logout events </a> </li>
<li><a href="https://issues.apache.org/jira/browse/OFBIZ-10452" target="_blank" rel="noopener"> OFBIZ-10452 - Remove unused ‘RequestHandler::doRequest’ m
</ul>
<p>Also normally a Jira ticket contains a single patch file but as refactoring sometimes become complex, 13 patches have so far been submitted for one Jira ticket! (
See <a href="https://issues.apache.org/jira/browse/OFBIZ-10485" target="_blank" rel="noopener"> OFBIZ-10485 - Refactor MapContext </a>). Thanks very much for your contributions Mathieu and also everyone from the community that is working on making OFBiz better! </p>
<p>If you are interested in helping us with the continued refactoring work then please post a message to our dev mailing list. </p>
<h2>Managing VAT and Tax Exemptions</h2>
<p>Another discussion topic that was raised this month was about how  <a href="https://s.apache.org/xGbT" target="_blank" rel="noopener"> VAT and tax exemptions can be managed in OFBiz. </a>. There are many tax rules about how taxes should be calculated and the discussion was focussed on European cross border rules for business and non business customers. The discussion highlighted that we may need to do some additional analysis and work to ensure that OFBiz can be configured to manage these specific tax rules correctly.</p>
<p>The discussion also highlighted that the flags in Tax Authorities and Product setup used to include or exclude VAT were not functioning as expected. A  JIRA <a href="https://issues.apache.org/jira/browse/OFBIZ-10500" target="_blank" rel="noopener"> OFBIZ-10500 - Tax calculation incorrect when creating orders . </a> has been created to manage the investigation and any work to correct the issues found.</p>
<p>If you are interested in contributing or helping us produce a solution for managing VAT and Tax Exemptions then please feel free to join any discussions on the JIRA ticket or the dev mailing list.</p>
<h2>Suggested OFBiz Improvements</h2>
<p>We are always looking for ways to improve OFBiz and this month several members from our community came up with some suggestions. See below for detail of proposed enhancements:</p>
<ul>
<li><a href="https://s.apache.org/QHWi" target="_blank" rel="noopener">  Proposal to add SMS integration for OFBiz</a></li>
<li><a href="https://s.apache.org/FBPg" target="_blank" rel="noopener">  Inventory Cycle Count Gap</a></li>
<li><a href="https://s.apache.org/NkSe" target="_blank" rel="noopener">  Suggested improvement for Manufacturing Workflow</a> </li>
</ul>
<p>Remember that improvements can be suggested by anyone in the community, so if you are using OFBiz and have a suggestion for improvement then please post the details about your idea on our mailing list.</p>
<h2>Oracle Java Release Model Changes and Potential Consequences for OFBiz</h2>
<p>Another discussion topic raised this month was related to changes in the release model for Oracle Java. Oracle is changing from a feature based model to a time based one. One of the potential negative aspects of this is that they may not continue to release patches for older versions once a new Java release has been published. This affects the project because we may have to look at changing the support for our OFBiz releases to make sure they are aligned with the Oracle model.</p>
<p>Options for using OpenJDK rather than Oracle Java are also being disucussed. If you have an opinion or would like to be involved in the discussion then you can find out more on the <a href="https://s.apache.org/zLah" target="_blank" rel="noopener"> dev mailing list thread. </a>

<h2>OFBiz is Super Healthy!</h2>
<p>OFBiz has a been given a super healthy classification of 10. Projects are assessed using a range of criteria including the mailing list activity, committers activity and also how frequently new releases are made. Together it can give a high level picture of how the project community is working and interacting. The scores ranges from -10 to +10 and OFBiz is currenty has a 10.</p>
 
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Resolves shipping address from Invoice (<a href="https://issues.apache.org/jira/browse/OFBIZ-10249">OFBIZ-10249</a>). In some country (like european) you need to indicate on your sales invoice where you ship the finish good product related. To help this case, a new worker function (InvoiceWorker.getShippingAddress) was added to found information from an invoice and improve the generic EditInvoice.groovy and the invoice ftl template to display it as example. To homogenize postal address displaying with order the subscreen PartyScreens.xml#postalAddressPdfFormatter was used on the invoice ftl template.</li>
 	<li>Converts CategoryServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-10031">OFBIZ-10031</a>).</li>
 	<li>Adds a mechanism to prevent the usage of EntitySyncRemove (<a href="https://issues.apache.org/jira/browse/OFBIZ-10008">OFBIZ-10008</a>).
No configurations is available to disable usage of EntitySyncRemove. And it's creating problems when having a large database and frequent delete operations. saveEntitySyncRemoveInfo is used to create EntitySyncRemove records in GenericDelegator.removeValue() and removeByPrimaryKey(). This adds a mechanism to prevent the usage of EntitySyncRemove by adding a property in general.properties file used to configure in entityengine.xml</li>
 	<li>Uses SessionStorage to call setLocaleFromBrowser only once per session (<a href="https://issues.apache.org/jira/browse/OFBIZ-10471">OFBIZ-10471</a>).</li>
 	<li>Improve Dutch UiLabels in Accounting component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10363">OFBIZ-10363</a>).</li>
 	<li>Uses 'buttontext' styling for the index of service engine (<a href="https://issues.apache.org/jira/browse/OFBIZ-10467">OFBIZ-10467</a>). To improve the consitancy in the look of OFBiz, the style buttontext can be added for the alphabetical index of the service engine main page. This makes the buttons look like the ones that are already there for the entity engine main page.</li>
 	<li>Aligns the input fields at catalog/control/main (<a href="https://issues.apache.org/jira/browse/OFBIZ-10454">OFBIZ-10454</a>)</li>
 	<li>Renames the misnamed setUserLocale.js to setUserTimeZone.js (<a href="https://issues.apache.org/jira/browse/OFBIZ-10472">OFBIZ-10472</a>).
At the same time renames setLocaleFromBrowser to SetTimeZoneFromBrowser everywhere it's needed.</li>
 	<li>Deletes existing party contact mechs before new one are created (<a href="https://issues.apache.org/jira/browse/OFBIZ-10396">OFBIZ-10396</a>).</li>
 	<li>Improves Order layout (<a href="https://issues.apache.org/jira/browse/OFBIZ-10331">OFBIZ-10331</a>).</li>
 	<li>Standardise layout for Party (<a href="https://issues.apache.org/jira/browse/OFBIZ-10334">OFBIZ-10334</a>).</li>
 	<li>Handles File transfer management with communicationEvent and new contactMech FTP_ADDRESS (<a href="https://issues.apache.org/jira/browse/OFBIZ-10245">OFBIZ-10245</a>).</li>
 	<li>Sanitizes the output of XML-RPC when errors are reported (<a href="https://issues.apache.org/jira/browse/OFBIZ-10848">OFBIZ-10848</a>).</li>
 	<li>Removes the usage of deprecated language attribute from script tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-10491">OFBIZ-10491</a>).</li>
 	<li>Refactors MapContext by removing unused code (<a href="https://issues.apache.org/jira/browse/OFBIZ-10485">OFBIZ-10485</a>).</li>
 	<li>Adds missing @override annotations in MapContext (<a href="https://issues.apache.org/jira/browse/OFBIZ-10485">OFBIZ-10485</a>).</li>
 	<li>Refactors the MapContext to use a Deque instead of List interface (<a href="https://issues.apache.org/jira/browse/OFBIZ-10485">OFBIZ-10485</a>).</li>
 	<li>Uses application/javascript instead of text/javascript (<a href="https://issues.apache.org/jira/browse/OFBIZ-10492">OFBIZ-10492</a>). Also updates compressibleMimeType list.</li>
 	<li>Renames deletePartyContactMechPurpose* services to expirePartyContactMechPurpose* (<a href="https://issues.apache.org/jira/browse/OFBIZ-10398">OFBIZ-10398</a>).</li>
 	<li>Verifies contact mech details (expired or not) before copying it to new order while re-ordering (<a href="https://issues.apache.org/jira/browse/OFBIZ-9544">OFBIZ-9544</a>).</li>
 	<li>Uses input type=submit instead of anchor and javascript code to submit form where applicable (<a href="https://issues.apache.org/jira/browse/OFBIZ-10482">OFBIZ-10482</a>).</li>
 	<li>Adds the option to update Facility Party Role on Edit Facility Party Role screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-9085">OFBIZ-9085</a>).</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>&lt;#if containerId?has_content&gt; id=''&lt;/#if&gt; is missed in renderFormOpen (<a href="https://issues.apache.org/jira/browse/OFBIZ-10437">OFBIZ-10437</a>)</li>
 	<li>Framework webapp freemarkerTransform.properties has dependency on product component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10463">OFBIZ-10463</a>)</li>
 	<li>GetLocaleList call can provide duplicate results (<a href="https://issues.apache.org/jira/browse/OFBIZ-10458">OFBIZ-10458</a>)</li>
 	<li>Upper case styling for buttontext in Tomahawk theme causing wrong behaviour for alphabetical index of the service engine page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10473">OFBIZ-10473</a>)</li>
 	<li>Invalid content was found starting with element 'field'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10391">OFBIZ-10391</a>)</li>
 	<li>Not able to expire the rate amount and an error is displayed in Workeffort (<a href="https://issues.apache.org/jira/browse/OFBIZ-10114">OFBIZ-10114</a>)</li>
 	<li>Possible NullPointerException in getProductCategoryContentAsText()  (<a href="https://issues.apache.org/jira/browse/OFBIZ-9164">OFBIZ-9164</a>)</li>
 	<li>Missing Import in CmsEditAddPrep.groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-10475">OFBIZ-10475</a>)</li>
 	<li>Not able to delete PartyRate (<a href="https://issues.apache.org/jira/browse/OFBIZ-10483">OFBIZ-10483</a>)</li>
 	<li>compressableMimeType is not a valid attribute of apache http connector (<a href="https://issues.apache.org/jira/browse/OFBIZ-10487">OFBIZ-10487</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
 	<li>Adds content for Performance Reviews, Employee Benefits and Training to HR introduction document (<a href="https://issues.apache.org/jira/browse/OFBIZ-10256">OFBIZ-10256</a>).</li>
</ul>
