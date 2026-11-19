---
layout: post
title: 'Apache OFBiz News - March 2017 '
date: '2017-04-06T13:51:33+00:00'
permalink: apache-ofbiz-news-march-2017
---
<h2>Apache OFBiz News March 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about some new OFBiz tutorials on Youtube, we publish our first blog contributions from the community, work continues on our website, the community decides to remove hot-deploy and we welcome another new committer to the project.
<!--more-->
<h2>New OFBiz Youtube Videos</h2>
Did you know that Apache OFBiz has a <a href="https://www.youtube.com/user/ofbiz">Youtube Channel?</a>. This month one of our community members Pranay Panday created some new introduction videos and uploaded them to our channel. The new videos can be found using the links below:<p></p>
<ol>
<li><a href="https://www.youtube.com/watch?v=bIS2kftvsq4l">How to use Apache OFBiz Mailing Lists</a></li>
<li><a href="https://youtu.be/efkB_aN-ODw">OFBiz Beginners Tutorial - Basic Setup Release16.11</a></li>
</ol>
A big thank you to Pranay for taking the time to make the videos and we hope that our community will find them useful. 
If you would like to create videos for our OFBiz Youtube channel then please send a message with the details to our dev mailing list. <a href="https://lists.apache.org/list.html?dev@ofbiz.apache.org">dev@ofbiz.apache.org</a>
<h2>New Committer</h2>
This month the Project Management Committee (PMC) invited James Yong to become a Committer on the project and he accepted. 
<p></p>
Congratulations and welcome James!
 <h2>OFBiz Blog Articles</h2>
Last month we mentioned that we would be opening up our blog to also accept articles about OFBiz from our community members. During March we received two blog articles from Pranay Pandey. They have been published and you can find them using the links below:<p></p>
<ul>
<li><a href="https://s.apache.org/OXsn">Apache OFBiz - How and Where to Start?</a></li>
<li><a href="https://s.apache.org/lmLI">Omnichannel Orders - Does Your System Support it?</a></li>
</ul>
Thanks very much to Pranay Pandey and remember that if you have an article that you would like to publish on our blog about OFBiz or how you are using it then please send a message to our dev mailing list <a href="https://lists.apache.org/list.html?dev@ofbiz.apache.org">dev@ofbiz.apache.org</a>

<h2>OFBiz Website</h2>
We are still working on our new OFBiz website and to help visibility and collaboration a new branch has been created so that the community can see the work so far, comment and also help out. Please feel free to take a look at and follow our  <a href="http://svn.apache.org/repos/asf/ofbiz/branches/ofbiz-new-website/index.html">Work in Progress </a> and post any feedback to our dev mailing list. <a href="https://lists.apache.org/list.html?dev@ofbiz.apache.org">dev@ofbiz.apache.org</a>
<p></p>
A wiki page has been created to help <a href="https://s.apache.org/UVDq">organise and plan the outstanding work.</a><p><</p>
The new website will include a <a href="http://svn.apache.org/repos/asf/ofbiz/branches/ofbiz-new-website/service-providers.html">Service Providers page</a> so if you are an OFBiz Service Provider and would like your logo displayed then please check that you <a href="https://s.apache.org/SCxg">meet the requirements.</a> for being included.

<h2>Removal of hot-deploy Directory</h2>
The refactoring of the trunk is continuing as more work is being done on standardising and formalising the plugins system. As part of this work the community has <a href="https://s.apache.org/Wygr">discussed and agreed </a>to remove the hot-deploy directory. The hot-deploy directory a way to enable extend OFBiz functionality by including your own specific component. This functionality is now available as part of the integrated plugins system. 
<p></p>
As the plugin system API provides more functionality than hot-deploy such as the automatic control of a plugin, the removal of hot-deploy will help standardise the way that OFBiz can be extended and also help with the ongoing refactoring effort and code clean up.
<p></p>
<strong>IMPORTANT NOTE</strong>: Please note that the removal of hot-deploy only applies to the current trunk and does not affect any of the existing releases.
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Create new task pullAllPluginsSource and make improvements to plugins API (<a href="https://issues.apache.org/jira/browse/OFBIZ-9182">OFBIZ-9182</a>)
This task downloads all the official Apache OFBiz plugins from source control and places them in the /plugins directory inclusive of their .svn directory. It makes it possible to automate buildbot for OFBiz without the need to use something like svn:externals and to have two separate build scripts for framework-alone and framework+plugins.
<ul>
 	<li>Update README.md with new task definition and cleanup.</li>
 	<li>Improve the plugins API in gradle to make use of shared code for calling gradle as a sub-process from multiple locations.</li>
</ul>
</li>
 	<li>Refactor list related forms in BillingAccount (<a href="https://issues.apache.org/jira/browse/OFBIZ-9215">OFBIZ-9215</a>), Cost (<a href="https://issues.apache.org/jira/browse/OFBIZ-9229">OFBIZ-9229</a>), Lookup (<a href="https://issues.apache.org/jira/browse/OFBIZ-9232">OFBIZ-9232</a>), Partymgr (<a href="https://issues.apache.org/jira/browse/OFBIZ-9266">OFBIZ-9266</a>), and Manufacturing (<a href="https://issues.apache.org/jira/browse/OFBIZ-9236">OFBIZ-9236</a>) screen widgets.
Refactor various list forms into grids and various list form references in screen widgets.</li>
 	<li>Change to only handle labels with the "_" separator between languages and countries in LabelManagerFactory.java (<a href="https://issues.apache.org/jira/browse/OFBIZ-9261">OFBIZ-9261</a>)</li>
 	<li>Remove the now useless hot-deploy directory (<a href="https://issues.apache.org/jira/browse/OFBIZ-9268">OFBIZ-9268</a>)
The hot-deploy removal was discussed <a href="https://s.apache.org/7Y2w">here</a>.</li>
 	<li>Convert CarrierShipmentMethod (<a href="https://issues.apache.org/jira/browse/OFBIZ-8657">OFBIZ-8657</a>), QuoteTerm  (<a href="https://issues.apache.org/jira/browse/OFBIZ-8903">OFBIZ-8903</a>), and ShipmentMethodType (<a href="https://issues.apache.org/jira/browse/OFBIZ-8664">OFBIZ-8664</a>) entities respective CRUD services to entity-auto.</li>
 	<li>Use try-with-resources statement wherever possible (<a href="https://issues.apache.org/jira/browse/OFBIZ-8202">OFBIZ-8202</a>).</li>
 	<li>Makes sure the local date time uses the time zone from the local browser (<a href="https://issues.apache.org/jira/browse/OFBIZ-9264">OFBIZ-9264</a>).
The user can still set his own time zone though.</li>
 	<li>Implement OFBiz startup message which shows after all containers/components are loaded (<a href="https://issues.apache.org/jira/browse/OFBIZ-9285">OFBIZ-9285</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>Login and logout process in demos show a certificate issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-9206">OFBIZ-9206</a>)</li>
 	<li>Missing reference to the delegator in HtmlFormMacroLibrary.ftl (<a href="https://issues.apache.org/jira/browse/OFBIZ-9230">OFBIZ-9230</a>)
The delegatorName needs to be passed on to a macro. This was achieved by creating an EntityUtilProperties.getPropertyValueFromDelegatorName() method for the macros renderLookupField and renderTextField.</li>
 	<li>compareBigDecimals in org.ofbiz.minilang.method.conditional.Compare does not compare certain values correctly (<a href="https://issues.apache.org/jira/browse/OFBIZ-6386">OFBIZ-6386</a>)
compareBigDecimals scales down and rounds up meaning you lose information and the comparison result is not as expected</li>
 	<li>catalog/control/FindReviews does not render proper column data
Replace "use-when" attribute with "ignore-when" attribute in ListReviews form amending conditions used accordingly.</li>
 	<li>While re-ordering an order, OrderTerms field doesn't set (<a href="https://issues.apache.org/jira/browse/OFBIZ-9252">OFBIZ-9252</a>)</li>
 	<li>Error message when svn is updating due to pullAllPluginsSource (<a href="https://issues.apache.org/jira/browse/OFBIZ-9262">OFBIZ-9262</a>)
Remove the duplicate plugins directory.</li>
 	<li>Error in accounting report InventoryValuation with thruDate with an empty value (<a href="https://issues.apache.org/jira/browse/OFBIZ-9265">OFBIZ-9265</a>)
The provided patch fixes this by setting the default thruDate to now.</li>
 	<li>Renamed internal task to avoid collission on regex task name matching (<a href="https://issues.apache.org/jira/browse/OFBIZ-9262">OFBIZ-9262</a>)
A bug was detected in which a task activates when calling cleanAll because it starts with the word "clean" which is matched automatically in a regex.</li>
 	<li>Induce Model XML from Database throws exception (<a href="https://issues.apache.org/jira/browse/OFBIZ-7473">OFBIZ-7473</a>)</li>
 	<li>Regression: a commit between the R15 branch and the Gradle switch uses/blocks the ports (<a href="https://issues.apache.org/jira/browse/OFBIZ-9196">OFBIZ-9196</a>)
Disabled the admin server from starting on contexts other than "start". This commit has reference to this <a href="https://s.apache.org/xfxS">discussion thread</a> in which buildbot is failing in between commits due to blocking the admin server thread.</li>
 	<li>Error: Cannot do a find that returns an EntityListIterator with no transaction in place (<a href="https://issues.apache.org/jira/browse/OFBIZ-9286">OFBIZ-9286</a>)</li>
</ul>
<h2>Documentation</h2>
<ul>
 	<li>Update \tools\demo-backup\README.MD now that "Let's encrypt" is used on demos (<a href="https://issues.apache.org/jira/browse/OFBIZ-9203">OFBIZ-9203</a>)
Change derived from <a href="https://issues.apache.org/jira/browse/OFBIZ-7928">OFBIZ-7928</a>.</li>
</ul>
