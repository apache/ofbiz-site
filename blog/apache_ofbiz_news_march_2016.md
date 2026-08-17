---
layout: post
title: Apache OFBiz News - March 2016
date: '2016-04-04T12:27:15+00:00'
permalink: apache_ofbiz_news_march_2016
---
<h2>Apache OFBiz News March 2016</h2>
Welcome to our monthly round-up of OFBiz news. 
This month we have news about our first Community Day for 2016, OFBiz at Apachecon NA, an update on the code tidy up and re-factoring work and we congratulate two new ASF members from our community.

<!--more-->
<h2>OFBiz Community Day</h2>
Last year the project introduced <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">Community Days</a> where we focus on getting as many people as possible from the community to collaborate and work on improving OFBiz.
<p></p>
Four Community Days are held each year and our first for  2016 was held on Saturday 19th March. Contributors from around the world participated and collaborated. Countries included France, The Netherlands, India and the Czech Republic and work ranged from bug fixes through to documentation.
<p></p>
A total of 39 commits were made to the repository on the Community Day itself although work did span days before and after the event. A Jira Sprint was used to manage the tasks and generate a report for the event.
<p></p>
Our next Community Day is planned for Saturday 18th June.

<h2>Apachecon NA Vancouver 2016</h2>
OFBiz will be represented at Apachecon NA in Vancouver. Over the last few years the community has been consistently submitting presentations with the hope of running OFBiz tracks. This time four presentations from the OFBiz community have been selected and cover several topics including community, functional setup and technical development areas. 
<p></p>
The OFBiz 'mini track' is planned for Friday 13th May.  Please take a look at the full <a href="http://events.linuxfoundation.org/events/apachecon-north-america/program/schedule">Apachecon NA schedule</a> for more details.
<p></p>
A big thank you to everyone that made a submission. 
<h2>OFBiz Re-Factoring</h2>
Work has started on some code re-factoring. The <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Framework+Re-factor">overall objective</a> is to tidy up and improve the code base so that it becomes easier to maintain. 
<p></p>
To help people get started, a list of tasks we'd like to work on has been created. The tasks range from simple straightforward clean up work that anyone can pick up to more complex work that will take a bit more time and effort to complete. We also have a list of general tasks that will also help the clean up effort. 
<p></p>
The community is looking for people to actively help with this so if you are interested in joining the effort then please take a look at the links below:
<p></p>
<a href="https://cwiki.apache.org/confluence/display/OFBIZ/Project+Approach">Re-Factor Approach</a>
<p></p>
<a href="https://cwiki.apache.org/confluence/display/OFBIZ/Re-Factor+To-Do+List">Current Re-Factor To Do List</a>
<p></p>
It is hoped that this work will become part of a continual ongoing effort.

<h2>New ASF Members from the OFBiz Community</h2>
Two people from our community (Jacques Le Roux and Sharan Foga) have become Apache Software Foundation members. Membership is by invitation only so it's a real honour to be invited.
<p></p>
Our congratulations goes out to both Jacques and Sharan.

<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
	<li>Small update mostly about OTP, the "nicely" scripts, and notsoserial Java agent replacing contrast</li>
	<li>Upgrade Axis2 to 1.7.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6916">OFBIZ-6916</a>)</li>
	<li>Remove "ivy:cleancache" from "clean" target (<a href="https://issues.apache.org/jira/browse/OFBIZ-5461">OFBIZ-5461</a>)</li>
	<li>Update Tomcat to 7.0.68 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6913">OFBIZ-6913</a>)</li>
	<li>Update the passport component to use httpclient/core-4.4.1 instead of commons-httpclient-3.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6755">OFBIZ-6755</a>)
<ul>
	<li>Remove commons-httpclient-3.1.jar from passport component.</li>
	<li>Use httpclient 4.4.1 in base/lib instead.</li>
	<li>Remove randomString methods, use RandomStringUtils.randomAlphanumeric instead.</li>
	<li>Move getAllowAllHttpClient to UtilHttp.</li>
</ul>
</li>
	<li>Improve the decorator for manufacturing/order/facility component for re-use (<a href="https://issues.apache.org/jira/browse/OFBIZ-6923">OFBIZ-6923</a>)</li>
	<li>Comments on ordering products should be store driven (<a href="https://issues.apache.org/jira/browse/OFBIZ-6924">OFBIZ-6924</a>)</li>
	<li>Company check payment method should be shown when issuing check (<a href="https://issues.apache.org/jira/browse/OFBIZ-6937">OFBIZ-6937</a>)</li>
	<li>Change how the action expire on entity-auto engine is managed (<a href="https://issues.apache.org/jira/browse/OFBIZ-6892">OFBIZ-6892</a>)
<ul>
	<li>if a date field is present on service attribute, OFBiz tries to expire it with the given value or with now date</li>
	<li>else try to expire thruDate field</li>
	<li>else try to expire *ThruDate or thru*Date field</li>
</ul>
</li>
	<li>Add width and height attributes retrieval in renderLink method in MacroMenuRenderer (<a href="https://issues.apache.org/jira/browse/OFBIZ-6927">OFBIZ-6927</a>)</li>
	<li>For screen engine drop-down, sort with the locale the entity-list if the related entity have a default resource defined. (<a href="https://issues.apache.org/jira/browse/OFBIZ-3311">OFBIZ-3311</a>)</li>
	<li>Update entity definition of OtherDataResource, VideoDataResource and AudioDataResource replacing object to byte-array data type and title correction (<a href="https://issues.apache.org/jira/browse/OFBIZ-6943">OFBIZ-6943</a>)</li>
	<li>Allowing inventory transfers based on Product instead of only InventoryItem. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6042">OFBIZ-6042</a>)</li>
	<li>Move forms in ProductStoreForms.xml to StoreForms.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-6938">OFBIZ-6938</a>)</li>
	<li>Adding event definitions for inbound and outbound shipments (<a href="https://issues.apache.org/jira/browse/OFBIZ-6958">OFBIZ-6958</a>)</li>
	<li>Enhancing *Attribute entities with a description field (<a href="https://issues.apache.org/jira/browse/OFBIZ-6962">OFBIZ-6962</a>)</li>
	<li>Have the ability to test solr queries through widgets (screens &amp; forms) (<a href="https://issues.apache.org/jira/browse/OFBIZ-6595">OFBIZ-6595</a>)</li>
	<li>Ensure a ModelField is set for rhs EntityConditionValues that don't already have it, such as the EntityFunction classes</li>
	<li>Remove antwebsystems.com references</li>
	<li>Adding some translations for French (<a href="https://issues.apache.org/jira/browse/OFBIZ-4761">OFBIZ-4761</a>)</li>
	<li>Update various manufacturing labels regarding the dutch locale (<a href="https://issues.apache.org/jira/browse/OFBIZ-6876">OFBIZ-6876</a>)</li>
	<li>Dutch translations for catalog labels (<a href="https://issues.apache.org/jira/browse/OFBIZ-6890">OFBIZ-6890</a>)</li>
	<li>Enhancement of Dutch labels (<a href="https://issues.apache.org/jira/browse/OFBIZ-6850">OFBIZ-6850</a>)</li>
	<li>Adding some translations for French (<a href="https://issues.apache.org/jira/browse/OFBIZ-4761">OFBIZ-4761</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
	<li>Temporarily replaced the demo-trunk.ofbiz.apache.org domain by ofbiz-vm.apache.org:8080 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6922">OFBIZ-6922</a>)</li>
	<li>Incorrect content length in response from HTTP service engine (<a href="https://issues.apache.org/jira/browse/OFBIZ-6925">OFBIZ-6925</a>)</li>
	<li>GroovyEngine.serviceInvoker masks Groovy script exceptions in some cases (<a href="https://issues.apache.org/jira/browse/OFBIZ-6888">OFBIZ-6888</a>)</li>
	<li>Fixed broken 'run-test-list' target (<a href="https://issues.apache.org/jira/browse/OFBIZ-6936">OFBIZ-6936</a>)</li>
	<li>Credit card details cannot be updated (<a href="https://issues.apache.org/jira/browse/OFBIZ-6920">OFBIZ-6920</a>)</li>
	<li>Comment out RMI related code because of the Java deserialization issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-6942">OFBIZ-6942</a>)</li>
	<li>Currently the View Profit overview is only visible when the quote has the status 'QUO_CREATED'. It should be visible independently of the status. (<a href="https://issues.apache.org/jira/browse/OFBIZ-5868">OFBIZ-5868</a>)</li>
	<li>When updating the allow order decimal quantity to N for the product store and then updating the unit price of an item in the shopping cart an error is shown (<a href="https://issues.apache.org/jira/browse/OFBIZ-6933">OFBIZ-6933</a>)</li>
	<li>Added missing jgrowl js and css file for ecommerce main-decorator.</li>
	<li>Cannot find linkToProduct from createCommunicationEvent SECA (<a href="https://issues.apache.org/jira/browse/OFBIZ-6894">OFBIZ-6894</a>)</li>
	<li>ProductSearch generates an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6860">OFBIZ-6860</a>)</li>
	<li>Fixed Search.groovy, use correct method for analyzer, QueryParser and TopScoreDocCollector. in both lucene and ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-6859">OFBIZ-6859</a>) and (<a href="https://issues.apache.org/jira/browse/OFBIZ-6861">OFBIZ-6861</a>)</li>
	<li>Fixed NPE for ecommerce/products url, if user enters invalid url ecommerce/products then redirect it to main. (<a href="https://issues.apache.org/jira/browse/OFBIZ-5918">OFBIZ-5918</a>)</li>
	<li>Credit Card validation does not work properly during anonymous quick checkout process. Added new method checkoutValidation which will validate if the shipping method and payment method are in the cart and if not available then this method will return an error.</li>
	<li>Project contents were not getting deleted. auto-parameters-entity does not seem to be working, for now passed all the needed parameters (<a href="https://issues.apache.org/jira/browse/OFBIZ-5703">OFBIZ-5703</a>)</li>
	<li>Comment out RMI related code because of the Java deserialization issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-6942">OFBIZ-6942</a>)</li>
	<li>Update XStream lib to prevent XML External Entity (XXE) Processing (<a href="https://issues.apache.org/jira/browse/OFBIZ-6959">OFBIZ-6959</a>)</li>
	<li>jQuery plugin jGrowl is loaded before jQuery in ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-6957">OFBIZ-6957</a>)</li>
	<li>Correct setting of the WorkEffortPurposeTypeId on production run tasks (<a href="https://issues.apache.org/jira/browse/OFBIZ-6954">OFBIZ-6954</a>)</li>
	<li>Failed to load contentForum.css (<a href="https://issues.apache.org/jira/browse/OFBIZ-6956">OFBIZ-6956</a>)</li>
	<li>Rename AccountingConfig.properties to accounting.properties (<a href="https://issues.apache.org/jira/browse/OFBIZ-6954">OFBIZ-6954</a>)</li>
	<li>Popup fades in and out non-stop when hovers on a product image in list view (<a href="https://issues.apache.org/jira/browse/OFBIZ-6961">OFBIZ-6961</a>)</li>
	<li>Relocate .ftl files in the components
<ul>
	<li>humanres (<a href="https://issues.apache.org/jira/browse/OFBIZ-6816">OFBIZ-6816</a>)</li>
	<li>manufacturing (<a href="https://issues.apache.org/jira/browse/OFBIZ-6817">OFBIZ-6817</a>)</li>
	<li>order (<a href="https://issues.apache.org/jira/browse/OFBIZ-6819">OFBIZ-6819</a>)</li>
	<li>webPOS (<a href="https://issues.apache.org/jira/browse/OFBIZ-6837">OFBIZ-6837</a>)</li>
	<li>myportal (<a href="https://issues.apache.org/jira/browse/OFBIZ-6860">OFBIZ-6860</a>)</li>
	<li>project (<a href="https://issues.apache.org/jira/browse/OFBIZ-6812">OFBIZ-6812</a>)</li>
</ul>
</li>
	<li>There is no commons-httpclient-3.1.jar in the project but the .classpath file still links to it (<a href="https://issues.apache.org/jira/browse/OFBIZ-6755">OFBIZ-6755</a>)</li>
	<li>Unable to change language in ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-6966">OFBIZ-6966</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
	<li>Add a comment to the testRemoteSoap service to clarify when to use it and how it works.</li>
	<li>Improve uom convert error message</li>
	<li>Improved the documentation about the purpose and behavior of the "auth" and "in-validate" secas events.</li>
</ul>






