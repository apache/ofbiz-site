---
layout: post
title: Apache OFBiz News - January 2018
date: '2018-02-06T09:50:16+00:00'
permalink: apache-ofbiz-news-january-2018
---
<h2>Apache OFBiz News January 2018 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about our new OFBiz release, OFBiz volunteers for community metrics, we discuss the implementation of a documentation framework within OFBiz itself and we look at participating in Google Summer of Code.
<!--more--> 
<h2>16.11.04 Released!</h2>
<p>In early January OFBiz 16.11.04 was released. The new release consolidates all work done since the previous release 16.11.03 in July last year. The release file can be downloaded following the instructions on the <a href="http://ofbiz.apache.org/download.html" target="_blank" rel="noopener">  OFBiz Downloads page</a>. Please refer to the <a href="http://ofbiz.apache.org/release-notes-16.11.04.html" target="_blank" rel="noopener">  Release Notes </a> for more details of the changes introduced with this new version. </p>
<p>Please note that a security vulnerability has been reported in OFBiz releases 16.11.01 to 16.11.03. It is highly recommended that you upgrade to the 16.11.04 release to mitigate this vulnerability. Details can be found on "Security Vulnerabilities" section of the  <a href="http://ofbiz.apache.org/download.html" target="_blank" rel="noopener">  OFBiz Downloads page</a>. </p>
<h2>OFBiz as a Kibble Demo Project</h2>
<p>The ASF has a new top level project called Kibble that is focussed on gathering and displaying community metrics.  <a href="http://kibble.apache.org/" target="_blank" rel="noopener"> http://kibble.apache.org/</a>. </p>
<p>The Kibble project sent out a request to all Apache projects asking for volunteers to be be part of the their demo instance. Any volunteer project could also provide feedback to the Kibble project about developing specific metrics that could be useful to the project community. OFBiz responded and has now been setup as one of the Kibble demo projects. As well as details of contributors over time and retention statistics, it also has some statistics on overall community moods. Looking at our "Communication Mood" statistics OFBiz's top three mood readings over the past year are
<ul><li>Positive with a level of 70</l>
<li>Trust with level of  16</li>
<li>Anticipation with a level of 9</li>
</ul>
<p>The OFBiz project overall mood reading is 92.4% which is very good. </p>
<p>If you are interested in seeing more OFBiz statistics and metrics then you can use the <a href="https://demo.kibble.apache.org/" target="_blank" rel="noopener"> Kibble demo</a> to play around and take a look.</p>
<h2>OFBiz Documentation Framework</h2>
<p>During this month there has been a lot of discussion about implementing a documentation framework within OFBiz that will be able to generate documentation in various formats. This means that we could consolidate OFBiz documentation within OFBiz itself and adapt it to any new releases. It will be based on asciidoc and details of the discussion can be found <a href="https://s.apache.org/VfxE" target="_blank" rel="noopener"> here </a>. 
<p>Also discussed was how the documents would be structured, and a general agreement has been reached on this. Next we will be looking to create a documentation team that will work on reviewing the documents we have already available on the wiki and other sources, and then restructure them to fit into the new documentation framework model. If you are interested in being part of the documentation team or helping review or write OFBiz documentation then please volunteer by sending a message to our development mailing list.</p>
<h2>GSoC for OFBiz</h2>
<p>Every year the ASF registers to be a mentor organisation for Google Summer of Code (GSoC). Projects that want to participate have been asked to start creating a list of task ideas that students could work on. Participating in GSoC is a good way of encouraging new people to become involved with OFBiz and maybe help promote it too.</p>
<p><a href="https://s.apache.org/MUUo" target="_blank" rel="noopener"> Some discussions </a> have already taken place on our development mailing list, feedback has been positive and a few people have volunteered to be mentors. We are now in the process of defining a list of suitable tasks, so if you are interested in helping create this or provide mentoring for a student then please join the discussion.</p>
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Make the number of initially visible applications in main menu a property (<a href="https://issues.apache.org/jira/browse/OFBIZ-10132">OFBIZ-10132</a>)</li>
 	<li>Update Geo information according to ISO notifications (<a href="https://issues.apache.org/jira/browse/OFBIZ-10028">OFBIZ-10028</a>)
For the countries:
<ul>
 	<li>Cyprus</li>
 	<li>Iceland</li>
 	<li>Ecuador</li>
 	<li>China</li>
 	<li>Germany</li>
 	<li>Hungary</li>
 	<li>Indonesia</li>
 	<li>Korea (the Democratic People's Republic of)</li>
 	<li>Lao People's Democratic Republic (the)</li>
 	<li>Moldova (the Republic of)</li>
 	<li>Mali</li>
</ul>
</li>
 	<li>Fix the mockito library version to stay consistent in versioning</li>
 	<li>Replace Asm select plugin with Select2 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10113">OFBIZ-10113</a>)</li>
 	<li>Create missing services definitions in WorkEffortSimpleServices.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-9708">OFBIZ-9708</a>)</li>
 	<li>Remove ftl dependency in order on ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-6946">OFBIZ-6946</a>)
Order management should work without the ecommerce component.</li>
 	<li>Make xssi prefix configurable (<a href="https://issues.apache.org/jira/browse/OFBIZ-9169">OFBIZ-9169</a>)</li>
 	<li>Add ability to record return communication, support to record communication event against return and new entity CommunicationEventReturn, crund and supporting screens. Also added support in the existing email services to handle the return cases. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9911">OFBIZ-9911</a>)</li>
 	<li>Token based authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-9833">OFBIZ-9833</a>)</li>
 	<li>rename the common theme directory from "common" to "common-theme" (<a href="https://issues.apache.org/jira/browse/OFBIZ-10175">OFBIZ-10175</a>)</li>
 	<li>When completing communicationEvent through setCommEventComplete, if datetimeEnded is null, set it to nowTimestamp (<a href="https://issues.apache.org/jira/browse/OFBIZ-10181">OFBIZ-10181</a>)</li>
 	<li>Complete service order items are being allowed to be received along with finished goods over Approved purchase order. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7183">OFBIZ-7183</a>)</li>
 	<li>Implement and apply return lookup and add lookup with screen forms and controller entry. Use the same lookup on communication event return screen. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10171">OFBIZ-10171</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Clean images, among them logos, in all locations used (<a href="https://issues.apache.org/jira/browse/OFBIZ-10128">OFBIZ-10128</a>)</li>
 	<li>Message page markup improvement (<a href="https://issues.apache.org/jira/browse/OFBIZ-10090">OFBIZ-10090</a>)</li>
 	<li>Update Bootstrap 4.0 library to stable version from bootstrap 4.0 beta-2 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10179">OFBIZ-10179</a>)</li>
 	<li>Update markup according to standard markup given by Bootstrap v4.0.0 for:
<ul>
 	<li>OrderHistory page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10135">OFBIZ-10135</a>)</li>
 	<li>Quick checkout page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10136">OFBIZ-10136</a>)</li>
 	<li>Last products section (<a href="https://issues.apache.org/jira/browse/OFBIZ-10169">OFBIZ-10169</a>)</li>
 	<li>Quick recorder section (<a href="https://issues.apache.org/jira/browse/OFBIZ-10163">OFBIZ-10163</a>)</li>
 	<li>Advanced search page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10162">OFBIZ-10162</a>)</li>
 	<li>Quick add page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10161">OFBIZ-10161</a>)</li>
 	<li>Checkout page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10105">OFBIZ-10105</a>)</li>
 	<li>Shopping lists page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10119">OFBIZ-10119</a>)</li>
</ul>
</li>
 	<li>Replace Asm select plugin with Select2. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10113">OFBIZ-10113</a>)</li>
 	<li>Update Solr/Lucene to 7.2.1. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10166">OFBIZ-10166</a>)</li>
 	<li>Improvement in UI of various pages of ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-10182">OFBIZ-10182</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>Add WebSocket support in OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-7073">OFBIZ-7073</a>)</li>
 	<li>ID should be the abbreviation for identity in English (<a href="https://issues.apache.org/jira/browse/OFBIZ-10131">OFBIZ-10131</a>)</li>
 	<li>Trailing fraction are not entertained by formatCurrency method of UtilFormatOut (<a href="https://issues.apache.org/jira/browse/OFBIZ-10142">OFBIZ-10142</a>)</li>
 	<li>Hardcoded String in PaymentGatewayServices (<a href="https://issues.apache.org/jira/browse/OFBIZ-10143">OFBIZ-10143</a>)</li>
 	<li>Display the included vat amount on order item detail instead of 0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10148">OFBIZ-10148</a>)</li>
 	<li>Shipping label printing does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-10153">OFBIZ-10153</a>)</li>
 	<li>Employee Position does not allow "don't care" for boolean fields (<a href="https://issues.apache.org/jira/browse/OFBIZ-10158">OFBIZ-10158</a>)</li>
 	<li>Correcting findOne() in OfbizDslDescriptorForEclipse.dsld (<a href="https://issues.apache.org/jira/browse/OFBIZ-10159">OFBIZ-10159</a>)</li>
 	<li>Pagination errors in "KeywordSearch.ftl" and "ProductSearchSession.java" (<a href="https://issues.apache.org/jira/browse/OFBIZ-10154">OFBIZ-10154</a>)</li>
 	<li>Streaming large content cause out of memory exception. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10133">OFBIZ-10133</a>)</li>
 	<li>Error on updating sub content of CMS webSite (<a href="https://issues.apache.org/jira/browse/OFBIZ-10096">OFBIZ-10096</a>)</li>
 	<li>Fix the HttpServletRequestWrapper in ContextFilter.doFilter() (<a href="https://issues.apache.org/jira/browse/OFBIZ-10167">OFBIZ-10167</a>)</li>
 	<li>Replace Asm select plugin with Select2. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10113">OFBIZ-10113</a>)</li>
 	<li>Not able to add the requirement, broken screen with the error message in workeffort component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10122">OFBIZ-10122</a>)</li>
 	<li>GeoAssoc data is missing for Telangana state of India (<a href="https://issues.apache.org/jira/browse/OFBIZ-10172">OFBIZ-10172</a>)</li>
 	<li>Rainbow theme: bug in avatar.ftl when the last name does not exist (<a href="https://issues.apache.org/jira/browse/OFBIZ-10177">OFBIZ-10177</a>)</li>
 	<li>EntitySaxReader mostly-insert (store after create-error) Fix (<a href="https://issues.apache.org/jira/browse/OFBIZ-1032">OFBIZ-1032</a>)</li>
 	<li>Add/modify Calender Event Screen is Broken. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10173">OFBIZ-10173</a>)</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Birt plugin depends on example plugin (<a href="https://issues.apache.org/jira/browse/OFBIZ-9383">OFBIZ-9383</a>)</li>
 	<li>Recent markup changed breaks Product view page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10117">OFBIZ-10117</a>)</li>
 	<li>Incorrect closign of div tag on one page checkout page.</li>
 	<li>Error on My Portal Request Overview Page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10183">OFBIZ-10183</a>)</li>
</ul>
