---
layout: post
title: 'Apache OFBiz News - May 2018 '
date: '2018-07-07T10:11:48+00:00'
permalink: apache-ofbiz-news-may-2018
---
<h2>Apache OFBiz News May 2018 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about improving the OFBiz user interface (UI) using Bootstrap and Vue.js and we discuss how to make the OFBiz accounting module more configurable.
<!--more--> 
<h2>Bootstrap and Vue.js</h2><p>Early in the month a discussion was started on our development mailing about the <a href="https://s.apache.org/RG0j" target="_blank" rel="noopener">introduction of Bootstrap and Vue.js</a>. The OFBiz user interface works well, but can sometime seem a little old fashioned. The proposal was to make use of these technologies to improve the look and feel of the OFBiz. After a detailed discussion the consensus was to to implement Bootstrap and delay Vue.js until we have worked on producing a Web Services API.</p><p>Thanks to Taher Alkhateeb for starting the discussion and to everyone who participated and shared their experiences.</p>
<h2>Making Accounting Configurable</h2><p>Another discussion happening this month was related to the OFBiz accounting module and was a <a href="https://s.apache.org/wgWw" target="_blank" rel="noopener">proposal to make accounting configurable</a>. Not everyone wants to implement or use OFBiz accounting so this proposal was looking at ways to disable accounting for users that don't want to use it. After a discussion, the general consensus was that this was something that would be useful.</p><p>Thanks to Aman Agrawal for the proposal and patch. This has now been implemented under  <a href="https://issues.apache.org/jira/browse/OFBIZ-10391" target="_blank" rel="noopener">OFBIZ-10391.</a>


<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Introduce a quick way for adding Sales Price agreements with customers for any specific product from Catalog. From date is now defaulting to now timestamp improvement suggested in verification. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7713">OFBIZ-7713</a>)</li>
 	<li>Added missing condition-service in entity-eca.xsd file (<a href="https://issues.apache.org/jira/browse/OFBIZ-10220">OFBIZ-10220</a>)</li>
 	<li>Added section for HR process descriptions (<a href="https://issues.apache.org/jira/browse/OFBIZ-10256">OFBIZ-10256</a>)</li>
 	<li>Check for QOH while doing reservations. Change the codition to check ATP instead of QOH. As ATP will be always lesser than QOH, will improved performance with no impact on the reservation logic. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10337">OFBIZ-10337</a>)</li>
 	<li>Convert Requirement related services from simple to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-10395">OFBIZ-10395</a>)</li>
 	<li>Migrate createContent service from Minilang to Entity Auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-10401">OFBIZ-10401</a>)</li>
 	<li>Migrate product promotion condition and action rule on SOA (<a href="https://issues.apache.org/jira/browse/OFBIZ-10370">OFBIZ-10370</a>)</li>
 	<li>XML schemas should use predefined boolean type (<a href="https://issues.apache.org/jira/browse/OFBIZ-10411">OFBIZ-10411</a>)</li>
 	<li>adds a missing ASL2 header. It could be that we don't want one there but then I let Michael decide and put a line in the RAT exclude file. I finally did because I thought that maybe this file will be enhanced</li>
 	<li>Secure HTTP headers,avoid caching in proxy. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6766">OFBIZ-6766</a>)</li>
 	<li>Generic message from entity-auto service can be enhanced. For example ProductStoreFacility Updated Successfully, we can have better success message as Product Store Facility Updated Successfully. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10409">OFBIZ-10409</a>)</li>
 	<li>Empty header row should not render if list to render in file is empty (<a href="https://issues.apache.org/jira/browse/OFBIZ-7598">OFBIZ-7598</a>)</li>
 	<li>New documentation for EntitySync (<a href="https://issues.apache.org/jira/browse/OFBIZ-10390">OFBIZ-10390</a>)</li>
 	<li>Corrected some minor spelling mistakes and modified a few sentences (<a href="https://issues.apache.org/jira/browse/OFBIZ-10306">OFBIZ-10306</a>)</li>
 	<li>Remove createContent Java service implementation (<a href="https://issues.apache.org/jira/browse/OFBIZ-10393">OFBIZ-10393</a>)</li>
 	<li>Remove unused code from ContentServices class file (<a href="https://issues.apache.org/jira/browse/OFBIZ-10397">OFBIZ-10397</a>)</li>
 	<li>Remove `UtilValidate::isEmpty(String)` method (<a href="https://issues.apache.org/jira/browse/OFBIZ-10412">OFBIZ-10412</a>)</li>
 	<li>Remove Entity suffix from title of all entities. In all EntityModel.xml files, title should not contain Entity as suffix. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10408">OFBIZ-10408</a>)</li>
 	<li>Replace deleteRequirement service by entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-10400">OFBIZ-10400</a>)</li>
 	<li>Replace Inline js with External js in renderFormClose macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-9846">OFBIZ-9846</a>)</li>
 	<li>Refactor `JavaEventHandler` class (<a href="https://issues.apache.org/jira/browse/OFBIZ-10410">OFBIZ-10410</a>)</li>
 	<li>Upgraded to latest Tomcat (9.0.7). (<a href="https://issues.apache.org/jira/browse/OFBIZ-10036">OFBIZ-10036</a>)</li>
 	<li>Update DBCP to 2.3.0 (minor release) (<a href="https://issues.apache.org/jira/browse/OFBIZ-10404">OFBIZ-10404</a>)</li>
</ul>
&nbsp;
<h3>Plugins</h3>
<ul>
 	<li>Upgraded to latest Tomcat (9.0.7), Updated tomcat embed websocket jar to 9.0.7 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10036">OFBIZ-10036</a>)</li>
 	<li>Update Solr and Lucene from 7.2.1 to Solr 7.3.1 for security reason (CVE-2018-8010) (<a href="https://issues.apache.org/jira/browse/OFBIZ-10415">OFBIZ-10415</a>)</li>
</ul>
&nbsp;
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>Fix typo 'paramters' =&gt; 'parameters' (<a href="https://issues.apache.org/jira/browse/OFBIZ-10394">OFBIZ-10394</a>)</li>
 	<li>The "request" attribute type of the userLogin service is wrong (<a href="https://issues.apache.org/jira/browse/OFBIZ-10304">OFBIZ-10304</a>)
Now that we use Tomcat 9 this problem is over</li>
 	<li>Existing BILLING_LOCATION record of party should expire while creating a new one. Now service will first expires all the billing location against party and create new one. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10374">OFBIZ-10374</a>)</li>
 	<li>Sending mail button from viewProfile doesn't work (<a href="https://issues.apache.org/jira/browse/OFBIZ-7075">OFBIZ-7075</a>)</li>
 	<li>Removed unnecessary class and folders.</li>
 	<li>Wrong permission action leads to error (<a href="https://issues.apache.org/jira/browse/OFBIZ-10405">OFBIZ-10405</a>)</li>
 	<li>bugs with asciidoctor PDF generation in Windows (<a href="https://issues.apache.org/jira/browse/OFBIZ-9873">OFBIZ-9873</a>)</li>
 	<li>Dynamic values not rendering properly in property tag of fail-property attribute (<a href="https://issues.apache.org/jira/browse/OFBIZ-10406">OFBIZ-10406</a>)</li>
 	<li>Escape NullPointerException with test ProductPromo.testProductShipCharge (<a href="https://issues.apache.org/jira/browse/OFBIZ-10370">OFBIZ-10370</a>)</li>
</ul>

<h2>Documentation</h2>
<ul>
 	<li>New documentation for EntitySync (<a href="https://issues.apache.org/jira/browse/OFBIZ-10390">OFBIZ-10390</a>)</li>
</ul>
