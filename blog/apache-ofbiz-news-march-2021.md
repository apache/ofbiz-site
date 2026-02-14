---
layout: post
title: Apache OFBiz News - March 2021
date: '2021-04-29T12:53:45+00:00'
permalink: apache-ofbiz-news-march-2021
---
<p>  </p><h2>Apache OFBiz News March 2021</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we 
have news about the new release, and new committers along with our 
usual list of features, improvements, and Statistics.
</p><h3>Apache OFBiz&nbsp;17.12.06 Released!</h3> 
  <p>During this month the community announced the release of 17.12.06. 
The new release consolidates all work done since the previous release in Jan 2021.<br><br>The release file can be downloaded following the 
instructions on the Downloads page:<br><a href="https://ofbiz.apache.org/download.html" target="_blank">https://ofbiz.apache.org/download.html</a><br><br> Please refer to the Release Notes<span style="color: rgb(17, 85, 204); --darkreader-inline-color:#3e609c;" data-darkreader-inline-color=""></span> for more details of the changes introduced with this new version:<br><a href="https://ofbiz.apache.org/release-notes-17.12.06.html" target="_blank">https://ofbiz.apache.org/release-notes-17.12.06.html</a><br><br>Please note that a security vulnerability has been reported for the previous releases. It is highly recommended that you upgrade to the 
17.12.06 release to mitigate this vulnerability. <br><br>Refer following links to know more about security vulnerabilities:<br><a href="https://ofbiz.apache.org/security.html" target="_blank">https://ofbiz.apache.org/security.html</a><br><a href="https://s.apache.org/y282j" target="_blank">https://s.apache.org/y282j</a> <br><br>As shared in our previous blog, JFrog announced to shut down JCenter services on May 1st, 2021. 17.12.06 comes with migration to the Maven Central repository, hence we highly recommend an upgrade to have a smooth running of systems post-shutdown.</p><h3>New Committers</h3> 
  <p>During this month, the Project Management Committee (PMC) invited Priya Sharma and Martin Becker to become new committers. Please join us in welcoming and congratulating them in their new role on the project, and also thanking them for all their contributions.</p><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span></span></span></p><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span></span></span></p><h3>Statistics</h3><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span></span></span>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p><p> 
  </p><ul><li><b>Code Change and Commit Activity:</b> 
      <ul><li><b>Framework: </b>98 commits to the code base that changed 2,050 lines of code ( 9 committers were active)</li><li><b>Plugins: </b>15 commits to the code base that changed 739 lines of code ( 5 committers were active)</li></ul> 
    </li><li><b>Mailing Lists:</b> 
      <ul><li><b>Dev: </b>79 emails sent and 20 topics discussed ( 29 different people)</li><li><b>User: </b>68 emails sent and 27 topics discussed ( 29 different people) <br></li></ul></li></ul>


<h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Form widget "checkbox" do not persist selected value with multiple options checked (<a href="https://issues.apache.org/jira/browse/OFBIZ-12154" target="_blank">OFBIZ-12154</a>) </li>

    <li>Improves encoding in 3 classes (<a href="https://github.com/apache/ofbiz-framework/commit/8243d926d0b8c56fbffc3fb93d639d0d843465e8" target="_blank">GitHub Link</a>) </li>

    <li>Removes deprecated ByteWrapper class (<a href="https://issues.apache.org/jira/browse/OFBIZ-12194" target="_blank">OFBIZ-12194</a>) </li>

    <li>Converts CheckoutServices.xml minilang to groovy (<a href="https://github.com/apache/ofbiz-framework/pull/75" target="_blank">#75</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/b1d4dc6ea01e961c1c7d70d5fae356f218b5149c" target="_blank">GitHub Link</a>) </li>

    <li>Have a status on agreement records (<a href="https://issues.apache.org/jira/browse/OFBIZ-10902" target="_blank">OFBIZ-10902</a>) </li>

    <li>Removes extra space from eecas.xml file (<a href="https://github.com/apache/ofbiz-framework/commit/00b92f4a254de1f256d6db7db7bea34f5b750202" target="_blank">GitHub Link</a>) </li>

    <li>Replaces java.rmi.server.UID by java.util.UUID (<a href="https://github.com/apache/ofbiz-framework/commit/75d3367d47abae604126a97a80e715a798e7fc55" target="_blank">GitHub Link</a>) </li>

    <li>Adds german translation for OrderShoppingList Labels (<a href="https://issues.apache.org/jira/browse/OFBIZ-12208" target="_blank">OFBIZ-12208</a>) </li>

    <li>Secure the uploads (<a href="https://issues.apache.org/jira/browse/OFBIZ-12080" target="_blank">OFBIZ-12080</a>) </li>

    <li>Improves all the service level error messages for missing required field for webtools component (<a href="https://issues.apache.org/jira/browse/OFBIZ-8717" target="_blank">OFBIZ-8717</a>) </li>

    <li>Comments out the SOAP and HTTP engines (<a href="https://issues.apache.org/jira/browse/OFBIZ-12212" target="_blank">OFBIZ-12212</a>) </li>

    <li>Improves UtilObject class (<a href="https://issues.apache.org/jira/browse/OFBIZ-12216" target="_blank">OFBIZ-12216</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Adds JAX-RS capabilities (Jersey) (<a href="https://github.com/apache/ofbiz-plugins/commit/3ade20a4f8f9b983584b2df92d61f61f69fba55f" target="_blank">GitHub Link</a>) </li>

    <li>Removes "ofbiz" prefix from files and folders, code cleanup (<a href="https://issues.apache.org/jira/browse/OFBIZ-12197" target="_blank">OFBIZ-12197</a>) </li>

    <li>Corrects asciidoc levels and follows one-sentence-per-line rule (<a href="https://issues.apache.org/jira/browse/OFBIZ-12197" target="_blank">OFBIZ-12197</a>) </li>

    <li>Fixes html bugs spotted by sonarcloud (<a href="https://issues.apache.org/jira/browse/OFBIZ-12197" target="_blank">OFBIZ-12197</a>) </li>

    <li>Fixes sonarcloud error by using the resource integrity feature for embedding external redoc javascript file (<a href="https://issues.apache.org/jira/browse/OFBIZ-12197" target="_blank">OFBIZ-12197</a>) </li>

    <li>Updates Redoc version and makes it locally available (<a href="https://issues.apache.org/jira/browse/OFBIZ-12207" target="_blank">OFBIZ-12207</a>) </li>

    <li>Updates swagger ui version to 3.45.1, moves and updates README (<a href="https://issues.apache.org/jira/browse/OFBIZ-12207" target="_blank">OFBIZ-12207</a>) </li>

    <li>Comments out the SOAP and HTTP engines (<a href="https://issues.apache.org/jira/browse/OFBIZ-12212" target="_blank">OFBIZ-12212</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes error in deleting Financial Account (<a href="https://issues.apache.org/jira/browse/OFBIZ-12153" target="_blank">OFBIZ-12153</a>) </li>

    <li>Fixes: When creating blog or forums, it failed to save (<a href="https://issues.apache.org/jira/browse/OFBIZ-10426" target="_blank">OFBIZ-10426</a>) </li>

    <li>Fixes: Can't search ViewEntity InventoryItemDetailForSum (<a href="https://issues.apache.org/jira/browse/OFBIZ-12193" target="_blank">OFBIZ-12193</a>) </li>

    <li>Fixes: webtools/control/threadList no longer works on trunk (only) (<a href="https://issues.apache.org/jira/browse/OFBIZ-12195" target="_blank">OFBIZ-12195</a>) </li>

    <li>Fixes: Use Labels in themes names (<a href="https://issues.apache.org/jira/browse/OFBIZ-9863" target="_blank">OFBIZ-9863</a>) </li>

    <li>Fixes: Replace Bintray by a new place to upload the Gradle Wrapper (<a href="https://issues.apache.org/jira/browse/OFBIZ-12192" target="_blank">OFBIZ-12192</a>) </li>

    <li>Fixes bug preventing proper explosion of BOM containing virtual nodes (<a href="https://issues.apache.org/jira/browse/OFBIZ-12191" target="_blank">OFBIZ-12191</a>) </li>

    <li>Fixes: Page selection is not working correctly in the lookup-dialog (<a href="https://github.com/apache/ofbiz-framework/pull/287" target="_blank">#287</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/d6eaef2f9bf4935e786defc934f7944b8c8bbe56" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: createGlReconciliation throws an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-10675" target="_blank">OFBIZ-10675</a>) </li>

    <li>Fixes: EditFinAccountReconciliations does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-12198" target="_blank">OFBIZ-12198</a>) </li>

    <li>Fixes: Upgrade Apache PDFBox to 2.0.23  because of CVE-2021-27807 and CVE-2021-27906 (<a href="https://issues.apache.org/jira/browse/OFBIZ-12205" target="_blank">OFBIZ-12205</a>) </li>

    <li>Fixes: ChangeReason was not being set on OrderStatus when orderItem was marked cancelled with reason (<a href="https://issues.apache.org/jira/browse/OFBIZ-12210" target="_blank">OFBIZ-12210</a>) </li>

    <li>Fixes invalid Currency symbol in income statement csv export (<a href="https://issues.apache.org/jira/browse/OFBIZ-12108" target="_blank">OFBIZ-12108</a>) </li>

    <li>Fixes: Convert ImageManagementServices.xml minilang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11604" target="_blank">OFBIZ-11604</a>) </li>

    <li>Fixes: addImageForProduct fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-12211" target="_blank">OFBIZ-12211</a>) </li>

    <li>Updates Tika because of CVE-2021-2865 (<a href="https://github.com/apache/ofbiz-framework/commit/0631278fd537affbacbcfca008fe0fb8cef0c99a" target="_blank">GitHub Link</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: Incorrect display name for the Swagger component corrected (<a href="https://issues.apache.org/jira/browse/OFBIZ-12197" target="_blank">OFBIZ-12197</a>) </li>

    <li>Fixes: Error message is displayed when user clicks on create link after the user quick checkout and user is not logged in (<a href="https://issues.apache.org/jira/browse/OFBIZ-12188" target="_blank">OFBIZ-12188</a>)</li>

</ul>

<h2>Documentation</h2>

<h3>Framework</h3>

<ul>

    <li>Puts end of quote block on a newline (<a href="https://github.com/apache/ofbiz-framework/commit/5933087a7e5afec14635a9bd0f522adb4b1658a1" target="_blank">GitHub Link</a>) </li>

    <li>Orders component documentation in the same order than application menu (<a href="https://issues.apache.org/jira/browse/OFBIZ-12166" target="_blank">OFBIZ-12166</a>) </li>

    <li>Migrates Wiki How to Create the main Company in Party Manager to user-manual (<a href="https://issues.apache.org/jira/browse/OFBIZ-12065" target="_blank">OFBIZ-12065</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Orders component documentation in the same order than application menu (<a href="https://issues.apache.org/jira/browse/OFBIZ-12166" target="_blank">OFBIZ-12166</a>) </li>

    <li>Fixes ldap documentation (<a href="https://github.com/apache/ofbiz-plugins/commit/cf1cb404799a06e9af6cc643c75f24579781579f" target="_blank">GitHub Link</a>) </li>

</ul>
