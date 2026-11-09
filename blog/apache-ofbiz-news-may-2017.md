---
layout: post
title: Apache OFBiz News - May 2017
date: '2017-06-09T15:59:04+00:00'
permalink: apache-ofbiz-news-may-2017
---
<h2>Apache OFBiz News May 2017 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about our new OFBiz release, we begin work on tidying up and re-structuring our wiki, work starts on improving end user documentation for our users and creating reports in OFBiz gets easier.
<!--more--> 
<h2>Apache OFBiz 16.11.02 Released</h2>
During this month the community announced the release of 16.11.02. This release consolidates all work done since the previous release in November last year. The complete OFBiz 16.11 series of releases is dedicated to the memory of <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Memorial+-+Adrian+Crum" target="_blank" rel="noopener">Adrian Crum</a>, OFBiz Committer and former PMC member who died last year.
<p></p>
The release file can be downloaded following the instructions in the OFBiz <a href="http://ofbiz.apache.org/download.html" target="_blank" rel="noopener">Downloads page.</a>
<p></p>
Please refer to the <a href="http://ofbiz.apache.org/release-notes-16.11.02.html" target="_blank" rel="noopener">Release Notes</a> for more details of the changes introduced with this new version.
<p></p>
A big thank you to everyone from the community who was involved in helping to get the release done.
<h2>Re-structuring the OFBiz Wiki</h2>
A key discussion this month was about a proposal to re-organize and restructure our existing wiki. The main aim will be to get it clean and more user friendly so that people can easily navigate and locate the information they need.
Over the years our wiki has evolved and has become a little cluttered, meaning that information is spread across several pages or even workspaces. This can make it difficult for the community to find what they need. Documentation is extremely important for new users so this effort is more than welcome.
<p></p>
Our wiki contains lots of useful information but also some older or outdated resources, so we need to work on tidying it up. An initial basic structure has been agreed upon as follows:
<ul>
 	<li>Apache OFBiz - How and where to start?</li>
 	<li>Documentation</li>
 	<li>Community</li>
 	<li>Developers</li>
 	<li>Apache Software Foundation</li>
 	<li>Wiki Attic</li>
</ul>
Please note that this structure has already been implemented as the main wiki navigation menu. The next focus will be on reviewing the wiki pages and re-organizing them into these main categories.
<p></p>
Many thanks to Michael Brohl for proposing and kickstarting this effort. We are looking for people to contribute to this work so if you are interested in helping with the wiki clean up effort then please join the <a href="https://s.apache.org/yBOC" target="_blank" rel="noopener">discussion on the development mailing list.</a>
<h2>End User Documentation</h2>
Another community initiative that was launched last month was about end user documentation. We currently do not have a consolidated end user guide that gives practical information about the setup and use of the standard OFBiz applications. Feedback from the community has shown that this is an important area that we need to address.
<p></p>
Please note that the focus of this effort will be to provide information for users and non-technical people.
<p></p>
The following points are part of the proposal:
<ul>
 	<li>OFBiz Glossary : Putting together a full glossary of OFBiz words, definitions and concepts so that the people have a common understanding of what things mean</li>
 	<li>End User Guide : This guide will give users an overview of the applications and processes of OFBiz and will include a basic list of tasks for each process</li>
 	<li>Menu Structured Documentation : Documentation that follows the existing menu structure and provides details about a specific screen. Hopefully this will eventually
replace or update the current in-application screen help that is available already within OFBiz</li>
 	<li>How-Tos : This will be a quick reference How-To by topic</li>
 	<li>Examples and Tutorials : These will provide practical examples of using the applications in a real life scenario</li>
</ul>
We will be temporarily using our existing <a href="https://s.apache.org/iYK3" target="_blank" rel="noopener">End User Documentation</a> confluence workspace to work on and prepare these. As the documentation sections are completed, they will be moved back onto our re-structured wiki.
<p></p>
Thanks very much to Craig Parker and Sharan Foga, who are leading and co-ordinating this effort. If you are interested in helping contribute or would like to be involved then please join the <a href="https://s.apache.org/K7CA" target="_blank" rel="noopener">End User Documentation discussion</a> on our development mailing list.
<h2>OFBiz Flexible Reports</h2>
Also announced this month was the creation of OFBiz Flexible Reports. This is a new feature that was recently added. Documentation about Flexible Reports is included in the OFBiz Birt component as part of the markdown files.
<p></p>
This is a major improvement for creating reports in OFBiz. Essentially it is now a lot simpler for users to use the Birt component within OFBiz to easily create, modify and update reports.
<p></p>
More details about the changes can be found <a href="https://blogs.apache.org/ofbiz/entry/the-birt-flexible-reports-a" target="_blank" rel="noopener">here.</a>
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<h3>Framework</h3>
<ul>
 	<li>Update msyql sql-type for datetime field-type to support Fractional Seconds in Time Values (<a href="https://issues.apache.org/jira/browse/OFBIZ-9337">OFBIZ-9337</a>)</li>
 	<li>Remove final remaining dependencies from framework on plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-9322">OFBIZ-9322</a>)</li>
 	<li>Add support for 'set-if-null' and 'set-if-empty' attributes on screens for "set" element (<a href="https://issues.apache.org/jira/browse/OFBIZ-9251">OFBIZ-9251</a>)
"set-if-null" controls if field can be set to null and "set-if-empty" controls if field can be set to an empty value.</li>
 	<li>Refactor fields with "id-ne", "id-long-ne" and "id-vlong-ne" to "id", "id-long" and "id-vlong" respectively which are primary keys (<a href="https://issues.apache.org/jira/browse/OFBIZ-9354">OFBIZ-9354</a>)
The new field types will be given the "not-null=true" attribute in order to make the fields NOT NULL in the database (similarly to primary keys). This change will be reflected in the documentation. This <a href="http://markmail.org/message/d2tpovewhtotukwa">discussion</a> sparked the change.</li>
 	<li>Split the tools folder from the trunk and put it in another branch (<a href="https://issues.apache.org/jira/browse/OFBIZ-9256">OFBIZ-9256</a>)
The tools folder contains only tools used by the OFBiz team and is of no help for OFBiz users. So this should not be delivered with the OFBiz trunk, plugins or releases.</li>
 	<li>Improvement of String Comparisons (<a href="https://issues.apache.org/jira/browse/OFBIZ-9254">OFBIZ-9254</a>)
There is an inconsistency in the code for string comparisons. For example statusId.equals("PRUN_COMPLETED") should be written as "PRUN_COMPLETED".equals(statusId) because the former can throw NullPointerException if the variable is found to be NULL.</li>
 	<li>Upgrade Tomcat to 8.5.15 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9366">OFBIZ-9366</a>)</li>
 	<li>Convert RateServices.xml from mini-lang to groovyDSL (<a href="https://issues.apache.org/jira/browse/OFBIZ-9381">OFBIZ-9381</a>)
Related to task <a href="https://issues.apache.org/jira/browse/OFBIZ-9350">OFBIZ-9350</a> . Deprecate mini-lang by converting the services updateRateAmount, deleteRateAmount, updatePartyRate and deletePartyRate from mini-ang to groovyDSL.</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Update Apache Solr/Lucene to release 6.2.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-8316">OFBIZ-8316</a>)</li>
 	<li>Rename Lucene runtime folders to clearly show the origin (<a href="https://issues.apache.org/jira/browse/OFBIZ-9357">OFBIZ-9357</a>)</li>
 	<li>Improvement of String Comparisons (see above) (<a href="https://issues.apache.org/jira/browse/OFBIZ-9254">OFBIZ-9254</a>)</li>
 	<li>Refactor fields which are primary keys for plugin components (see above) (<a href="https://issues.apache.org/jira/browse/OFBIZ-9351">OFBIZ-9351</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<h3>Framework</h3>
<ul>
 	<li>Remove duplicated data for PartyStatus
Reference discussion: <a href="https://s.apache.org/T2UD">https://s.apache.org/T2UD</a></li>
 	<li>Error viewing tomahawk-themed page when externalLoginKey is not enabled (<a href="https://issues.apache.org/jira/browse/OFBIZ-9345">OFBIZ-9345</a>)</li>
 	<li>In TemporalExpressions.Frequency the starting times of a job move away from given freqCount raster (<a href="https://issues.apache.org/jira/browse/OFBIZ-9374">OFBIZ-9374</a>)
If a job is scheduled using TemporalExpressions.Frequency the start time of the job will gradually move forward when the excecution of the job is delayed by one or more units of the frequency type.</li>
</ul>
<h3>Plugins</h3>
<ul>
 	<li>Multisite feature not working properly due to URL modification (<a href="https://issues.apache.org/jira/browse/OFBIZ-7120">OFBIZ-7120</a>)</li>
</ul>
<h2> Documentation</h2>
<h3>Framework</h3>
<ul>
 	<li>Remove unnecessary field types (see above) (<a href="https://issues.apache.org/jira/browse/OFBIZ-9351">OFBIZ-9351</a>)</li>
</ul>
