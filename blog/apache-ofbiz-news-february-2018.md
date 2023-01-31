---
layout: post
title: 'Apache OFBiz News - February 2018 '
date: '2018-03-07T14:04:40+00:00'
permalink: apache-ofbiz-news-february-2018
---
<h2>Apache OFBiz News February 2018 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about our new OFBiz documentation framework, we recruit a team of OFBIz volunteers to help with documentation and we look a some of our community metrics.
<!--more--> 
<h2>OFBiz Documentation Framework</h2><p>Last month we mentioned the discussions that were happening around the proposal for an OFBiz Documentation Framework, The framework would be used to allow us to include OFBiz documentation within the codebase. This would mean that each version of OFBiz would contain its own complete documentation. During this month, an actual <a href="https://issues.apache.org/jira/browse/OFBIZ-9873" target="_blank" rel="noopener"> Proof of Concept (POC) for the framework </a> was created by Taher Alkhateeb.</p>
<p>Some tests have already been carried out using the PoC and feedback from the community has been positive. The next step is to look at <a href="https://s.apache.org/x8nM" target="_blank" rel="noopener">moving the code into the OFBiz trunk.  </a></p>
<p>Thanks very much to Taher for his work and to all those who have helped so far with feedback and testing. It is expected that the framework will evolve over time, so the more people that understand how it works, the better. So if you would like to help out with the work involved in the Documentation Framework then please send a message to our development mailing list.</p>
<h2>OFBiz Documentation Team</h2>
<p>During this  month in preparation for the implementation of a documentation framework in OFBiz, we made a  <a href="https://s.apache.org/FfRF" target="_blank" rel="noopener"> request for volunteers from the community  </a> to become part of a documentation team that would be responsible for working on completing the documentation. </p>
<p>We had over 15 responses which shows that our community think that documentation is important. A <a href="https://s.apache.org/Rnfa" target="_blank" rel="noopener">  Documentation Team wiki page </a> has been setup to help plan and co-ordinate the work. To kickstart the work for the Documentation Team, an initial call was setup to give the everyone some background and an introduction to the project. It was also used to create some action points for the next steps. Notes from the call are available on the wiki at the following link </p>
<ul><li><a href="https://s.apache.org/R6ft" target="_blank" rel="noopener"> Documentation Team Call Notes </a> </li></ul>
<p>If you are interested in helping with documentation or being part of the documentation team then please send a message to our user or development mailing lists.</p>
<p>The next steps will be to define the roles and processes to follow, as well as organising as creating a first example document that the team can use as a reference.</p>
<h2>OFBiz Statistics - February</h2><p>Last month we mentioned that OFBiz is tracking some community statistics using Apache Kibble, so we have highlighted a few of our stats for the last month:</p>
<ul><li><strong>JIRA Issue Tracker:</strong>  55 issues were opened and 45 issues were closed (11 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong>  114 commits to the codebase that changed 35,994 lines of code (10 committers were active)</li><li><strong>Mailing Lists:</strong>  372 emails sent and 92 topics discussed on the mailing lists (67 different people)</l></ul>
<p>It is great to see OFBiz community active and also continue to attract new contributors.</p>
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Token based Authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-9833">OFBIZ-9833</a>)</li>
 	<li>Set security object on groovy context (<a href="https://issues.apache.org/jira/browse/OFBIZ-10196">OFBIZ-10196</a>) In a groovy service to call the security object you need to do : Security security = dispatcher.dispatchContext.security</li>
 	<li>Convert CategoryServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-10031">OFBIZ-10031</a>)</li>
 	<li>Convert CommonPermissionServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-9993">OFBIZ-9993</a>)</li>
 	<li>Remove of loadBestSellingCategory and all related methods in CategoryServices.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-10146">OFBIZ-10146</a>)</li>
 	<li>Move all data in applications to the data model component, move demo data from some components to datamodel component and remove unused files as no data in it(<a href="https://issues.apache.org/jira/browse/OFBIZ-9501">OFBIZ-9501</a>)</li>
 	<li>Security issue in Token Based Authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-10206">OFBIZ-10206</a>) Update the security.properties content related to JWT.</li>
 	<li>Add seqId to GlAccountClass table to support the sorting of GLAccount sub classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-10209">OFBIZ-10209</a>)</li>
 	<li>Replace BigDecimal.ROUND_* by RoundingMode.* (<a href="https://issues.apache.org/jira/browse/OFBIZ-9571">OFBIZ-9571</a>)</li>
 	<li>Replace all "BigDecimal ZERO" by BigDecimal.ZERO (<a href="https://issues.apache.org/jira/browse/OFBIZ-9572">OFBIZ-9572</a>)</li>
 	<li>General refactoring and code improvements for package org.apache.ofbiz.product.category.ftl (<a href="https://issues.apache.org/jira/browse/OFBIZ-10138">OFBIZ-10138</a>)</li>
 	<li>Add CustomScreen entity copy from CustomMethod pattern, add PartyPrefDocTypeTpl entity to link official template document to organisational party (<a href="https://issues.apache.org/jira/browse/OFBIZ-10186">OFBIZ-10186</a>)</li>
 	<li>Use Tomcat default ciphers (<a href="https://issues.apache.org/jira/browse/OFBIZ-10223">OFBIZ-10223</a>)</li>
 	<li>Fix default or empty catch block in Java and Groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8341">OFBIZ-8341</a>)</li>
 	<li>Show title information on Entity Data Maintenance page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10207">OFBIZ-10207</a>)</li>
 	<li>Use agreement on drop shipment process (<a href="https://issues.apache.org/jira/browse/OFBIZ-10227">OFBIZ-10227</a>) Extend the drop shipment process to manage an agreement for the supplier related to the order context.</li>
 	<li>Introduce support for condition-service tags for entity eca's (<a href="https://issues.apache.org/jira/browse/OFBIZ-10220">OFBIZ-10220</a>)</li>
 	<li>In 'ValidateMethod.java', don't pass any className from xml files (<a href="https://issues.apache.org/jira/browse/OFBIZ-9969">OFBIZ-9969</a>)</li>
 	<li>Improve all the service level error messages for missing required field for workeffort component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7738">OFBIZ-7738</a>)</li>
 	<li>Update regex for validating credit cards (<a href="https://issues.apache.org/jira/browse/OFBIZ-9761">OFBIZ-9761</a>)</li>
 	<li>Improve layout and structure of forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-10221">OFBIZ-10221</a>)</li>
 	<li>Convert createContactList service from simple to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-9585">OFBIZ-9585</a>)</li>
 	<li>Resolve invoiceItem description from InvoiceWorker (<a href="https://issues.apache.org/jira/browse/OFBIZ-10240">OFBIZ-10240</a>)</li>
 	<li>Add the ability in performFind service to set OR search criteria (<a href="https://issues.apache.org/jira/browse/OFBIZ-10195">OFBIZ-10195</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Fix UI issue for error messages (<a href="https://issues.apache.org/jira/browse/OFBIZ-10185">OFBIZ-10185</a>)</li>
 	<li>Update markup of various product pages according to standard markup given by Bootstrap v4.0.0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10160">OFBIZ-10160</a>)</li>
 	<li>UI improvement on various pages
1) Improvement of various button UI
2) Improvement in layout at some screens
3) Alignment issues of some card-header</li>
 	<li>Do some markup cleanup, remove some unused html tag, add css rule to set padding=0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9760">OFBIZ-9760</a>)</li>
 	<li>Add examples for call_fieldlookup3 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10012">OFBIZ-10012</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>Security issue in Token Based Authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-10206">OFBIZ-10206</a>)</li>
 	<li>Rename the common-theme component directory (<a href="https://issues.apache.org/jira/browse/OFBIZ-10175">OFBIZ-10175</a>)</li>
 	<li>UtilNumber.getBigDecimalRoundingMode() returns a wrong value (<a href="https://issues.apache.org/jira/browse/OFBIZ-10218">OFBIZ-10218</a>)</li>
 	<li>Fix default or empty catch block in java and groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8341">OFBIZ-8341</a>)</li>
 	<li>Access the online help in Rainbow themes (<a href="https://issues.apache.org/jira/browse/OFBIZ-10222">OFBIZ-10222</a>)</li>
 	<li>The invoiceTaxTotal value is missing from createAcctgTransForPurchaseInvoice service (<a href="https://issues.apache.org/jira/browse/OFBIZ-6330">OFBIZ-6330</a>)</li>
 	<li>Logout do not remove autoLogin (<a href="https://issues.apache.org/jira/browse/OFBIZ-4959">OFBIZ-4959</a>)</li>
 	<li>Survey response data lost on loadCartFromOrder service. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10232">OFBIZ-10232</a>)</li>
 	<li>Alert message : "Developer: for lookups to work you must provide a form name!" appears when try to select contentId from lookup (<a href="https://issues.apache.org/jira/browse/OFBIZ-10012">OFBIZ-10012</a>)</li>
 	<li>Incorrect Party profile view redirection in SFA due to missing roleType (<a href="https://issues.apache.org/jira/browse/OFBIZ-10121">OFBIZ-10121</a>)</li>
 	<li>Unable to create inventory item label. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10015">OFBIZ-10015</a>)</li>
 	<li>Fix french typo (<a href="https://issues.apache.org/jira/browse/OFBIZ-10244">OFBIZ-10244</a>)</li>
 	<li>Error in service definition for deleteOrderHeaderWorkEffort (<a href="https://issues.apache.org/jira/browse/OFBIZ-10243">OFBIZ-10243</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Logout do not remove autoLogin (<a href="https://issues.apache.org/jira/browse/OFBIZ-4959">OFBIZ-4959</a>)</li>
 	<li>Change org.ofbiz package to org.apache.ofbiz in missing files (<a href="https://issues.apache.org/jira/browse/OFBIZ-10235">OFBIZ-10235</a>)</li>
 	<li></li>
</ul>
