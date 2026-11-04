---
layout: post
title: 'Apache OFBiz News - February 2017 '
date: '2017-03-09T14:22:51+00:00'
permalink: apache-ofbiz-news-february-2017
---
<h2>Apache OFBiz News February 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about our OFBiz Community Days, we re-structure our OFBiz repository, the community decides it's time to deprecate Minilang, we invite our community to become bloggers and our Committer group and PMC grows.
<!--more-->
<h2>OFBiz Community Days - February 2017</h2>
The first of our extended Community Days was held in February. Instead of a single 'community day', we have extended it to cover 5 days so that more of our community will have the chance to contribute. Over the period we have 11 commits to the codebase. The low participation may be related to the timing of the community days as it has moved forward one month (from March to February) so people may not have had time to prepare for the change. <p></p>
We hope to promote and get more community involvement in our next Community Days event in May. Our Community Days are held every quarter and more details can be found on our <a href="https://s.apache.org/l155">OFBiz wiki </a><p><</p>
<p></p>
<h2>Re-structured OFBiz Repository</h2>
Last month we mentioned the renaming of the specialpurpose to plugins. Following on from that we have re-organised our trunk repository and separated plugins from the core framework. <p></p>
Everything except the plugins directory has been moved from http://svn.apache.org/repos/asf/ofbiz/trunk to <strong>http://svn.apache.org/repos/asf/ofbiz/ofbiz-framework/trunk</strong>
<p></p>
The plugins directory has been moved to a brand new repository <strong>http://svn.apache.org/repos/asf/ofbiz/ofbiz-plugins/trunk</strong>.<p></p>
For more information and full details of these changes please refer to our <a href="http://ofbiz.apache.org/source-repositories.html">OFBiz Source Repositories page </a>
<h2>New PMC Member and New Committer</h2>
This Project Management Committee (PMC) has invited both a new Committer and a new PMC member this month. Swapnil Shah has joined the Committers group and Deepak Dixit has joined the PMC.
<p></p>
Congratulations and welcome to both Swapnil and Deepak!
 <h2>Deprecating Minilang</h2>
A key discussion this month was related to Minilang. OFBiz currently uses Minilang as a Domain Specific Language (DSL). The project has been gradually phasing it out in favour of <a href="http://groovy-lang.org/">Apache Groovy. </a> Details of the discussion can be found <a href="https://s.apache.org/frJb">here </a> and the community consensus is that it is time to deprecate it.
 <h2>Contributing to the OFBiz Blog</h2>
We would like to open up our <a href="https://blogs.apache.org/ofbiz/">OFBiz blog</a> to members of the community who would like to publish an article or blog post OFBiz or how they are using it. By sharing information we hope this will help promote OFBiz and also share implementation experiences.<p></p>
If you have an article that you would like to publish on our blog then please send a message to our mailing <a href="https://s.apache.org/NHV1">user@ofbiz.apache.org</a>
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Refactor list related forms in Agreeement widgets (<a href="https://issues.apache.org/jira/browse/OFBIZ-9186">OFBIZ-9186</a>)
Refactoring various list forms into grids and the respective list form references into screens</li>
 	<li>Create new gradle task pullPluginSource using a subversion gradle plugin (<a href="https://issues.apache.org/jira/browse/OFBIZ-9182">OFBIZ-9182</a>)
<ul>
 	<li>Added a new gradle task called pullPluginSource that fetches a plugin from the (yet to be created) plugins repository. Also updated the README.md file to reflect the changes that happened recently on the plugin management tasks This is the last commit required before restructuring the subversion repository as per the discussion thread mentioned in the above JIRA.</li>
 	<li>Moves plugins and creates the new structure.</li>
</ul>
</li>
 	<li>Improve FindGeneric entity screen with a xml form (<a href="https://issues.apache.org/jira/browse/OFBIZ-9217">OFBIZ-9217</a>)
The xml for Groovy and ftl forms is now build by analyzing the entity instead of rendering the forms through a dynamic call-to-screen xml. The find operation is now realized by the perfomFind service.</li>
 	<li>Disable the gradle daemon on embedded plugin tasks (<a href="https://issues.apache.org/jira/browse/OFBIZ-9182">OFBIZ-9182</a>)
In prepartion to update our buildbot scripts, we disable the daemon from running in the plugin API calls. This substantially improves memory consumption. The change applies to both installPlugin function as well as the ofbizBackground task design.</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>After creating a new Flexible Birt Report, visualization is not trivial (<a href="https://issues.apache.org/jira/browse/OFBIZ-9194">OFBIZ-9194</a>)
Steps needed: add the data set fields with the Birt Report Designer and then publish the report. This will be documented in <a href="https://issues.apache.org/jira/browse/OFBIZ-9188">OFBIZ-9188</a>.</li>
 	<li>Missing file in ecomseo (only seo version) results in error (<a href="https://issues.apache.org/jira/browse/OFBIZ-9198">OFBIZ-9198</a>)</li>
 	<li>Cancelled OrderItems are still included in orderGrandTotal. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9204">OFBIZ-9204</a>)</li>
 	<li>Birt log: adjusting the java.util.Logger to the org.apache.log4j.Logger level (<a href="https://issues.apache.org/jira/browse/OFBIZ-9201">OFBIZ-9201</a>)
Currently the class BirtContainer calls the birt engine with the hard coded log level 'ALL' which generated a huge log file. You can select the log level from debug.properties to populate the ReportEngine log file.</li>
 	<li>SimpleMethod: FindByAnd never using EntityListIterator (<a href="https://issues.apache.org/jira/browse/OFBIZ-9152">OFBIZ-9152</a>)</li>
 	<li>Reinstate url cache in UtilURL.fromResource (<a href="https://issues.apache.org/jira/browse/OFBIZ-9208">OFBIZ-9208</a>)</li>
 	<li>Correct svn url for pullPluginSource task (<a href="https://issues.apache.org/jira/browse/OFBIZ-9182">OFBIZ-9182</a>)</li>
 	<li>Remove SalesOrderItemFact related services from order component (<a href="https://issues.apache.org/jira/browse/OFBIZ-9213">OFBIZ-9213</a>)
SalesOrderItemFact entity is defined in bi-component so these services should reside there.</li>
 	<li>Report GL Account Trial Balance execution error (<a href="https://issues.apache.org/jira/browse/OFBIZ-9216">OFBIZ-9216</a>)</li>
 	<li>Login and logout process in demos shows a certificate issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-9206">OFBIZ-9206</a>)</li>
 	<li>ofbizUrl: include host+port and break some reverse-proxy/docker setups (<a href="https://issues.apache.org/jira/browse/OFBIZ-9224">OFBIZ-9224</a>)
import &lt;SystemProperty systemPropertyId="port.https" systemResourceId="url" systemPropertyValue=""/&gt; in trunk demo.</li>
 	<li>Load demo data shows error loading xml files (<a href="https://issues.apache.org/jira/browse/OFBIZ-9211">OFBIZ-9211</a>)
"gradlew cleanAll loadDefault" generates a data loading error. It's logically due to the removing of plugins/component-load.xml in <a href="https://issues.apache.org/jira/browse/OFBIZ-9182">OFBIZ-9182</a>. A temporary solution is to put it in again. A definitive solution is to remove data dependencies. The same problem exists with ecommerce data which create dependencies from applications jleroux.</li>
</ul>
