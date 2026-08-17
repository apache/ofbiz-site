---
layout: post
title: Apache OFBiz News - April 2015
date: '2015-05-11T07:37:05+00:00'
permalink: apache_ofbiz_april_update
---
Welcome to the first of our regular monthly update of project news and events prepared by community member Michael Brohl.
<ul>

April has shown a lot of movement in the <a title="offizielle Webseite Apache OFBiz" href="http://ofbiz.apache.org">Apache OFBiz</a> community. The Apache OFBiz track at <a title="ApacheCon US" href="http://events.linuxfoundation.org/events/apachecon-north-america">ApacheCon US 2015</a>, exciting architecture and tool discussions on our mailing lists, the introduction of an official <a href="https://twitter.com/ApacheOfbiz">Twitter</a> account as well as the reactivation of the <a href="https://blogs.apache.org/ofbiz/">project blog</a> and of course, the ongoing developments of the codebase has brought up many interesting news items.<!--more-->
<h2>Apache OFBiz at ApacheCon US 2015</h2>
From 13. to 16. April  <a title="ApacheCon US" href="http://events.linuxfoundation.org/events/apachecon-north-america">ApacheCon US 2015</a> was held in Austin, Texas. The OFBiz community was represented with a complete track of six interesting talks. All of these presentations are available on the <a title="Apache OFBiz Tracks im OFBiz Wiki" href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+track+@+Apachecon+US+2015+in+Texas%2C+Austin+-++April+13-17%2C+2015">Apache OFBiz Event Wiki Page</a>.

<a href="https://www.ecomify.de/wp-content/uploads/2015/05/apachecon_na_2015.png"><img class="aligncenter size-full wp-image-873" src="https://www.ecomify.de/wp-content/uploads/2015/05/apachecon_na_2015.png" alt="ApacheCon US 2015" width="800" height="255" /></a>
<h2>ApacheCon EU 2015</h2>
From 28. September to 01. October the <a href="http://events.linuxfoundation.org/events/apachecon-europe">ApacheCon EU 2015</a> will be held in Budapest, Hungary. We hope that OFBiz will once again be represented there with a range of interesting and relevant presentations. More information coming soon here in our blog.
<h2>Exciting discussions in the Apache OFBiz Project</h2>
The community is currently discussing several architecture and tool topics such as
<ul>
	<li>Moving from <a title="Apache Ant Webseite" href="http://ant.apache.org/">Ant</a> to <a title="Maven Webseite" href="http://maven.apache.org/">Maven</a> as the build and deployment tool. Adam Heath has developed a Proof of Concept (PoC) in its own branch so that it can be tested and further discussed on this basis.</li>
	<li>Moving from Subversion (SVN) to Git as the source code management system.</li>
	<li>Moving of the bugtracking system from Jira to Apache OFBiz.</li>
	<li>Moving to David Jones' <a title="Moqui Webseite" href="http://www.moqui.org/">Moqui</a> as the core framework for Apache OFBiz respectively integrating <a title="Moqui Webseite" href="http://www.moqui.org/">Moqui</a> into Apache OFBiz. This was certainly a most exciting discussion which triggered an extensive range of views and comments from the community. Moqui is a very promising basis for an open source enterprise automation system / ERP . A vote was called on whether to move OFBiz to Moqui and was unsuccessful. The main reason being that community still sees the need for more detailed discussion as well as a Moqui Proof of Concept (PoC)  before it can be finally be decided upon.</li>
</ul>
Some of the discussions although quite controversial gave the community an opportunity to share their views and opinions. We will report any further results and updates in future blog posts.

In addition, an extensive refactoring has began thus to replace the use of Javolution FastMap, FastSet and Fast List by default Java object collections.
<h2>Apache OFBiz goes Social Media</h2>
After a long time the official Apache OFBiz <a title="Apache OFBiz auf Twitter" href="https://twitter.com/ApacheOfbiz">Twitter</a> account was launched in April and has since reported on developments and news in the project. In addition, the <a href="https://blogs.apache.org/ofbiz/">official Apache OFBiz blog</a> is revived.

Below now the detailed enhancements and bug fixes from April 2015.
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
	<li>HTML tabindex was added to the widget form fields. It allows to set navigation order when using the tab key (<a href="https://issues.apache.org/jira/browse/OFBIZ-6232">OFBIZ-6232</a>).</li>
	<li>Refactoring: Replacing of javolution FastMap, FastSet und FastList with standard Java object collections  (<a href="https://issues.apache.org/jira/browse/OFBIZ-5781">OFBIZ-5781</a>), default replacements:
<ul>
	<li>FastMap with HashMap</li>
	<li>FastList with LinkedList</li>
	<li>FastSet with HashSet</li>
</ul>
</li>
	<li>Use of EntityUtilProperties instead of UtilProperties to retrieve the website properties. This prevents from reading the wrong properties in a multi-tenant environment (<a href="https://issues.apache.org/jira/browse/OFBIZ-6205">OFBIZ-6205</a>)</li>
	<li>Component specialpurpose/jetty was moved to attic (<a href="https://issues.apache.org/jira/browse/OFBIZ-6223">OFBIZ-6223</a>)</li>
	<li>Refactoring: Reduction of compiler warnings (<a href="https://issues.apache.org/jira/browse/OFBIZ-6217">OFBIZ-6217</a>)</li>
	<li>Optimized the UtilProperties.createProperties() method: returns null instead of throwing an exception when a file was not found (<a href="https://issues.apache.org/jira/browse/OFBIZ-6261">OFBIZ-6261</a>)</li>
	<li>Accounting: added a basic VAT report with frequency setting (<a href="https://issues.apache.org/jira/browse/OFBIZ-6225">OFBIZ-6225</a>)</li>
	<li>FOP Reporting: defined NotoSans font as default for reports and FOP-PDF examples. Removes the need to specify the NotoSans "font-family" in the example reports when special characters are used.</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
	<li>updateNote service returned an error ("Outgoing result (in runSync : updateNote) does not match expected requirements (The following required parameter is missing: [OUT] [updateNote.noteId])]"), because the entity engine returned no primary keys (<a href="https://issues.apache.org/jira/browse/OFBIZ-6209">OFBIZ-6209</a>)</li>
	<li>check-role-member was marked as deprecated in services.xsd (<a href="https://issues.apache.org/jira/browse/OFBIZ-6228">OFBIZ-6228</a>)</li>
	<li>htmlFormMacroLibrary.ftl, htmlTemplate.ftl: bugfixes in renderDateTimeField and renderLookupField</li>
	<li>Catalog main page throws a Freemarker Exception ("Error executing FreeMarker template
freemarker.core._MiscTemplateException: Can't compare values of these types. Allowed comparisons are between two numbers, two strings, two dates, or two booleans. Left hand operand is a boolean (wrapper: f.t.TrueTemplateBooleanModel). Right hand operand is a string (wrapper: f.t.SimpleScalar).") (<a href="https://issues.apache.org/jira/browse/OFBIZ-6234">OFBIZ-6234</a>)</li>
	<li>Updated an Ant target to use the new commons-codec.jar</li>
	<li>Special characters entered in a form field were not processed correctly in the ecommerce application (<a href="https://issues.apache.org/jira/browse/OFBIZ-5035">OFBIZ-5035</a>)</li>
	<li>Field name "tenantId" renamed to "userTenantId" for login page and ContextFilter. The field name "tenantId" caused an unintended change of the delegator in the webtools (<a href="https://issues.apache.org/jira/browse/OFBIZ-6222">OFBIZ-6222</a>).</li>
	<li>Error in the quote report if it contains no positions ("FOUserAgent |W|"fo:table-body" is missing child elements. Required content model: marker* (table-row+|table-cell+)" und "ScreenFopViewHandler |E| Unable to transform FO file: org.apache.fop.apps.FOPException
java.lang.NullPointerException; Screen XSL:FO text was:") (<a href="https://issues.apache.org/jira/browse/OFBIZ-6077">OFBIZ-6077</a>)</li>
	<li>Quote report positions view throws a freemarker.core.InvalidReferenceException (Freemarker Version &gt; 2.3.19) (<a href="https://issues.apache.org/jira/browse/OFBIZ-6057">OFBIZ-6057</a>)</li>
	<li>PerformFindTests: random error in DBCP (<a href="https://issues.apache.org/jira/browse/OFBIZ-6218">OFBIZ-6218</a>)</li>
	<li>Minilang: type="NewMap" and type="NewList" does not work for the Set element (<a href="https://issues.apache.org/jira/browse/OFBIZ-6254">OFBIZ-6254</a>)</li>
	<li>Data File Tools: error if the configured separator character occured in the payload data (<a href="https://issues.apache.org/jira/browse/OFBIZ-4837">OFBIZ-4837</a>)</li>
	<li>web.xml Datei was read from the wrong directory (<a href="https://issues.apache.org/jira/browse/OFBIZ-6259">OFBIZ-6259</a>)</li>
	<li>FindInventoryPlan: error message in FindInventoryEventPlan ("Expected hash. initialQohEvent evaluated instead to freemarker.template.SimpleScalar on line 165, column 26 in component://manufacturing/webapp/manufacturing/mrp/findInventoryEventPlan.ftl") (<a href="https://issues.apache.org/jira/browse/OFBIZ-6202">OFBIZ-6202</a>)</li>
	<li>Manufacturing shipment plan
<ul>
	<li>task report error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6188">OFBIZ-6188</a>)</li>
	<li>package labels error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6196">OFBIZ-6196</a>)</li>
</ul>
</li>
	<li>Bugfix in CategoryTree.groovy: wrong map</li>
	<li>foScreenMacroLibrary.ftl: renderLabel does not apply style parameter (<a href="https://issues.apache.org/jira/browse/OFBIZ-6260">OFBIZ-6260</a>)</li>
	<li>Pro-rate shipping calculation is generating incorrect invoice in case of order with subtotal $0.00 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6269">OFBIZ-6269</a>)</li>
	<li>Accounting: Fixed the order in which invoice and payment transactions are created.</li>
	<li>Field order in auto-complete for lookups was wrong (<a href="https://issues.apache.org/jira/browse/OFBIZ-6299">OFBIZ-6299</a>)</li>
	<li>PayflowPro.java: fixed compile error</li>
	<li>UtilMisc.java: returned list by the availableLocales() method contains empty locale which causes errors in Freemarker templates.</li>
	<li>Bugfixes in the startup code (<a href="https://issues.apache.org/jira/browse/OFBIZ-6268">OFBIZ-6268</a>)
<ul>
	<li>Class path loading was ignoring component settings, so class paths for disabled components were being loaded</li>
	<li>Configuration files were parsed twice</li>
	<li>Potential problem with unloading a loader that failed loading</li>
</ul>
</li>
</ul>
<h2>Documentation</h2>
Updates and improvements of the documentation:
<ul>
	<li>README files for the components Manufacturing, Projectmgr, Scrum, Assetmaint and MyPortal added (<a href="https://issues.apache.org/jira/browse/OFBIZ-6243">OFBIZ-6243</a>)</li>
	<li>Missing license information for the components Accounting and Content added</li>
</ul>
&nbsp;
