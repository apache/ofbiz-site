---
layout: post
title: Apache OFBiz News - April 2021
date: '2021-05-13T04:48:01+00:00'
permalink: apache-ofbiz-news-april-2021
---
<p>  </p><h2>Apache OFBiz News April 2021</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we 
have news about the new release, new contributors, and ongoing effort to improve REST support along with
the usual list of features, improvements, and Statistics.
</p><h3>Apache OFBiz&nbsp;17.12.07 Released!</h3> 
  <p>During this month the community announced the release of 17.12.07. 
The new release consolidates all work done since the previous release in March 2021.<br><br>The release file can be downloaded following the 
instructions on the Downloads page:<br><a href="https://ofbiz.apache.org/download.html" target="_blank">https://ofbiz.apache.org/download.html</a><br><br> Please refer to the Release Notes<span style="color: rgb(17, 85, 204); --darkreader-inline-color:#3e609c;" data-darkreader-inline-color=""></span> for more details of the changes introduced with this new version:<br><a href="https://ofbiz.apache.org/release-notes-17.12.07.html" target="_blank">https://ofbiz.apache.org/release-notes-17.12.07.html</a><br><br>Please
 note that a security vulnerability has been reported for the previous releases. It is highly recommended that you upgrade to the 
17.12.07 release to mitigate this vulnerability. <br><br>Refer following links to know more about security vulnerabilities:<br><a href="https://ofbiz.apache.org/security.html" target="_blank">https://ofbiz.apache.org/security.html</a><br><a href="https://s.apache.org/CVE-2021-29200" target="_blank">https://s.apache.org/CVE-2021-29200</a><br><a href="https://s.apache.org/CVE-2021-30128" target="_blank">https://s.apache.org/CVE-2021-30128</a><a href="https://s.apache.org/CVE-2021-30128" target="_blank"></a></p><h3>Ongoing efforts to improve REST support<br></h3> 
  During this month, the community had various discussions and efforts towards improving the REST support for the OFBiz. <br><p><br>Here are the links to the active tickets with discussion and efforts:<br><br>New Response Filter/Interceptor for REST-Api calls resolving CORS issues<br><a href="https://issues.apache.org/jira/browse/OFBIZ-12220" target="_blank">https://issues.apache.org/jira/browse/OFBIZ-12220</a><br><br>Separate login service for API calls<br><a href="https://issues.apache.org/jira/browse/OFBIZ-12033" target="_blank">https://issues.apache.org/jira/browse/OFBIZ-12033</a><br><br>Here is the link to the umbrella ticket for all the efforts related to REST:<br><br>Add JAX-RS capabilities (Jersey)<br><a href="https://issues.apache.org/jira/browse/OFBIZ-11328" target="_blank">https://issues.apache.org/jira/browse/OFBIZ-11328</a><br><br>Thanks to Girish Vasmatkar, Alexander Gepting, and to everyone who contributed to these efforts.</p><h3>New Contributors<br></h3>During this month, we have 3 new contributors joining the community. We would like to welcome Alexis Tadifo, Anibal Morales Soto, and Sumiti Joshi into the community and look forward to a deeper collaboration with them.<h3>Statistics</h3><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span></span></span>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p><p> 
  </p><ul><li><b>Code Change and Commit Activity:</b> 
      <ul><li><b>Framework: </b>28 commits to the code base that changed 2,395 lines of code ( 2 committers were active)</li><li><b>Plugins: </b>2 commits to the code base that changed 104 lines of code ( 1 committer was active)</li></ul> 
    </li><li><b>Mailing Lists:</b> 
      <ul><li><b>Dev: </b>28 emails sent and 11 topics discussed ( 12 different people)</li><li><b>User: </b>82 emails sent and 24 topics discussed ( 23 different people)&nbsp; <br>


</li></ul></li></ul><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Improves ObjectInputStream denyList (<a href="https://issues.apache.org/jira/browse/OFBIZ-12221" target="_blank">OFBIZ-12221</a>) </li>

    <li>Replaces Bintray by a new place to upload the Gradle Wrapper (<a href="https://issues.apache.org/jira/browse/OFBIZ-12192" target="_blank">OFBIZ-12192</a>) </li>

    <li>Adds new party while placing quotes (<a href="https://issues.apache.org/jira/browse/OFBIZ-7456" target="_blank">OFBIZ-7456</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/294" target="_blank">#294</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Adds CORS filter for the rest-api (<a href="https://issues.apache.org/jira/browse/OFBIZ-12220" target="_blank">OFBIZ-12220</a>). </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes: Induction from DB does not represent relations properly (<a href="https://github.com/apache/ofbiz-framework/pull/290" target="_blank">#290</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-12178" target="_blank">OFBIZ-12178</a>) </li>

    <li>Fixes: Service calls of "createPartyContactMech" now include the needed contactMechTypeId (<a href="https://issues.apache.org/jira/browse/OFBIZ-12175" target="_blank">OFBIZ-12175</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/292" target="_blank">#292</a>) </li>

    <li>Fixes: Error while deleting a Facility because of an existing FacilityLocationGeoPoint (<a href="https://github.com/apache/ofbiz-framework/pull/291" target="_blank">#291</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/bec5ba87f3ae44bf525b5c22214131b45afe72ea" target="_blank">GitHub Link</a>) </li>

    <li>Secure the uploads (<a href="https://issues.apache.org/jira/browse/OFBIZ-12080" target="_blank">OFBIZ-12080</a>) </li>

    <li>Fixes: Order processing issue for dropship only products (<a href="https://issues.apache.org/jira/browse/OFBIZ-12068" target="_blank">OFBIZ-12068</a>) </li>

</ul>
