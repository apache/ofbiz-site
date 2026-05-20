---
layout: post
title: Apache OFBiz News - July 2020
date: '2020-08-20T04:35:07+00:00'
permalink: apache-ofbiz-news-july-2020
---
<p> </p> 
  <p> </p> 
  <h2>Apache OFBiz News July 2020</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have news about the new release, PMC members, and screen engine improvements along with our usual list of features, improvements, and Statistics.</p><h3>Apache OFBiz&nbsp;17.12.04 Released!</h3> 
  <p>During this month the community announced the release of 17.12.04. 
The new release consolidates all work done since the previous release in April 2020. The release file can be downloaded following the instructions in the&nbsp;<a href="https://ofbiz.apache.org/download.html" style="color: #1155cc;">OFBiz Downloads</a>&nbsp;page. Please refer to the&nbsp;<a href="https://ofbiz.apache.org/release-notes-17.12.04.html" style="color: #1155cc;">Release Notes</a>&nbsp;for more details of the changes introduced with this new version.&nbsp;&nbsp;</p> 
  <p>Please note that a security vulnerability has been reported for the previous OFBiz releases. It is highly recommended that you upgrade to the 17.12.04 release to mitigate this vulnerability. Details can be found on the&nbsp;<a href="https://ofbiz.apache.org/security.html" style="color: #1155cc;">Security</a>&nbsp;page, mail  <a href="https://markmail.org/message/vxzbxad2lr2zxw2d">thread1</a>, and <a href="https://markmail.org/message/ro4tdr2dpr2ixlfx" style="color: #1155cc;">thread2</a>.&nbsp;</p> 
  <h3>New PMC Members</h3> 
   
  <p>The OFBiz PMC has invited Suraj Khurana, Aditya Sharma, and Arun Patidar to become new members of 
the committee and we are glad to announce that they have accepted the 
nomination.
Please join us in welcoming and congratulating them in their new role on
 the project, and also thanking them for all their contributions.<br></p><h3>Screen engine improvements<br></h3>During this month, the community discussed the proposal presentation by Nicolas Malin to homogenize and empower the<br>screen
 engine. The changes aim to improve the end-user experience on the 
back-office screen and designed to decrease the XML form definition, 
based upon the functional concept of various technologies.<br>Here are some links for more insights:<br>
<ol>
<li><a href="https://s.apache.org/EmpowerOFBizScreen" target="_blank">Presentation</a></li>
<li><a href="https://issues.apache.org/jira/browse/OFBIZ-11808" target="_blank">OFBIZ-11808</a></li>
<li><a href="https://markmail.org/message/p6hlyp3e3ofiye2z" target="_blank">Mail thread</a></li>

</ol>
<p>Thank you Nicolas for the proposal and to everyone who provided valuable input to his proposal.</p><h3>Ongoing efforts to fix lint issues<br></h3>Linting is the software 
engineering practice involving automated checking of source code for 
programming errors, bugs, stylistic errors, and suspicious constructs. 
This is achieved by using a lint tool or linter which is basically a 
static code analyzer. During this month, the community discussed fixing 
various issues identified using the linting tool <a href="https://checkstyle.org/" target="_blank">checkstyle</a> available with OFBiz as <a href="https://docs.gradle.org/current/userguide/checkstyle_plugin.html" target="_blank">Gradle plugin</a>.<br>Here are some links for more insights:<br>
<ol><li><a href="https://issues.apache.org/jira/browse/OFBIZ-11350" target="_blank">OFBIZ-11350</a></li><li><a href="https://markmail.org/message/467cbcmc3rid7r5c" target="_blank">Mail thread 1</a>,<a href="https://markmail.org/message/ahf373lljgkypkxn" target="_blank"> Mail thread 2</a>, <a href="https://markmail.org/message/y4uuqrjsu5mtztwz" target="_blank">Mail thread 3</a> and <a href="https://markmail.org/message/uyzaxwskrkwovyod" target="_blank">Mail thread 4</a><br></li></ol>
<p>Thank you, Suraj Khurana, Jacques Le Roux, Pritam Kute, and to everyone who contributed to the discussion and the effort.</p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 70 issues were opened and 90 issues were closed ( 12 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong><strong></strong>168 commits to the code base that changed 35,898 lines of code ( 9 committers were active)</li><li><strong>Plugins: </strong>41 commits to the code base that changed 9,436 lines of code ( 5 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev: </strong>246 emails sent and 49 topics discussed (39 different people)</li><li><strong>User: </strong>65 emails sent and 16 topics discussed (22 different people) <br></li></ul></li></ul>


<h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Converts AutoAcctgTransTestsSales tests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11526" target="_blank">OFBIZ-11526</a>) </li>

    <li>Converts cancelPaymentBatch service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11489" target="_blank">OFBIZ-11489</a>) </li>

    <li>Converts getDataResource service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11381" target="_blank">OFBIZ-11381</a>) </li>

    <li>Converts getPayments service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11495" target="_blank">OFBIZ-11495</a>) </li>

    <li>Converts AutoInvoiceTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11531" target="_blank">OFBIZ-11531</a>) </li>

    <li>Adds new MacroFormRenderer unit tests (<a href="https://issues.apache.org/jira/browse/OFBIZ-11456" target="_blank">OFBIZ-11456</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/213" target="_blank">#213</a>) </li>

    <li>Converts getContentAndDataResource service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11382" target="_blank">OFBIZ-11382</a>) </li>

    <li>Converts createContentFromDataResource service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11377" target="_blank">OFBIZ-11377</a>) </li>

    <li>Converts getInvoicePaymentInfoList service from mini-lang to groovy (<a href="https://github.com/apache/ofbiz-framework/pull/148" target="_blank">#148</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/18b21c1e948f213e82682677a75839ddc0419456" target="_blank">GitHub Link</a>) </li>

    <li>Converts deleteContentKeywords service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11391" target="_blank">OFBIZ-11391</a>) </li>

    <li>Converts AutoPaymentTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11535" target="_blank">OFBIZ-11535</a>) </li>

    <li>Provides EntityBatchIterator which pages through large resultsets and adds support for EntityBatchIterator to EntityQuery via 'queryBatchIterator' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11789" target="_blank">OFBIZ-11789</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/191" target="_blank">#191</a>) </li>

    <li>Corrects all 'if is not followed by whitespace' checkstyle errors. Also corrects few ', is not followed by whitespace' checkstyle errors in framework component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11805" target="_blank">OFBIZ-11805</a>) </li>

    <li>Corrects all 'if is not followed by whitespace' checkstyle errors. Also corrects few ', is not followed by whitespace' checkstyle errors in applications component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11805" target="_blank">OFBIZ-11805</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 26432 (-249) (<a href="https://github.com/apache/ofbiz-framework/commit/6f4cd4d7821dd55b8e6ae78a94ac278008743733" target="_blank">GitHub Link</a>) </li>

    <li>Moves a comment to its right location (<a href="https://github.com/apache/ofbiz-framework/commit/05b62d7476b475ce30ffaae2b8d325635b79cf0e" target="_blank">GitHub Link</a>) </li>

    <li>Converts OrderTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11849" target="_blank">OFBIZ-11849</a>) </li>

    <li>Converts ShipmentTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11850" target="_blank">OFBIZ-11850</a>) </li>

    <li>Removes trailing blanks found by chance and updates checkstyleMain.maxErrors (<a href="https://github.com/apache/ofbiz-framework/commit/c52e437eca297dda25894f4118a731d0d1afea31" target="_blank">GitHub Link</a>) </li>

    <li>Corrects remaining ', is not followed by whitespace' checkstyle errors in framework component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11805" target="_blank">OFBIZ-11805</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 26161 ~(-270) (<a href="https://github.com/apache/ofbiz-framework/commit/34cc4d345246b8303e37ba007be0d6e01cf179ed" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused SuppressWarnings and adds proper space after comma and before '{' in class LoginServices (<a href="https://issues.apache.org/jira/browse/OFBIZ-11805" target="_blank">OFBIZ-11805</a>) </li>

    <li>Corrects typo in license header text in classes ModelActionVisitor, ModelConditionVisitor and ModelFieldVisitor (<a href="https://github.com/apache/ofbiz-framework/commit/a38fa69e572d81dbc3eadacf73bb669e56492fde" target="_blank">GitHub Link</a>) </li>

    <li>Converts InventoryTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11851" target="_blank">OFBIZ-11851</a>) </li>

    <li>Adds information to install without the demo data (<a href="https://github.com/apache/ofbiz-framework/commit/0176270d88d2f30039a0bf11316c659d0805f89d" target="_blank">GitHub Link</a>) </li>

    <li>Corrects all checkstyle issues related to succeeding space for comma in applications directory (<a href="https://issues.apache.org/jira/browse/OFBIZ-11805" target="_blank">OFBIZ-11805</a>) </li>

    <li>Corrects all checkstyle issues related to succeeding space for comma in framework directory (<a href="https://issues.apache.org/jira/browse/OFBIZ-11805" target="_blank">OFBIZ-11805</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 25829 ~(-327) (<a href="https://github.com/apache/ofbiz-framework/commit/0471251561eeebc6145cf1661d245e3ddc97718d" target="_blank">GitHub Link</a>) </li>

    <li>Converts getPaymentGroupReconciliationId service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11496" target="_blank">OFBIZ-11496</a>) </li>

    <li>Introduces support for having condition in EntityQuery#queryList method (<a href="https://issues.apache.org/jira/browse/OFBIZ-11846" target="_blank">OFBIZ-11846</a>) </li>

    <li>Improves UI/UX on Find Agreements screen with missing thruDate (<a href="https://issues.apache.org/jira/browse/OFBIZ-10373" target="_blank">OFBIZ-10373</a>) </li>

    <li>Formats file 'INSTALL' as a standard text file rather than an AsciiDoc file (<a href="https://github.com/apache/ofbiz-framework/commit/e1f42f4b8545fec6c4b9c6bed90e3f5fadcb666f" target="_blank">GitHub Link</a>) </li>

    <li>Provides better message for host-headers-allowed (<a href="https://github.com/apache/ofbiz-framework/commit/3c9fe5f91684de54570e6ec61575c11368a2ffd6" target="_blank">GitHub Link</a>) </li>

    <li>Puts the AsciiDoc files in main repo under the web site in HTML-Format (<a href="https://issues.apache.org/jira/browse/OFBIZ-11879" target="_blank">OFBIZ-11879</a>) </li>

    <li>Corrects checkstyle formatting issues, 'is preceded/not preceded with whitespace' for applications component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11874" target="_blank">OFBIZ-11874</a>) </li>

    <li>Corrects checkstyle formatting issues, 'is preceded/not preceded with whitespace' for framework component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11874" target="_blank">OFBIZ-11874</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 24550 ~(-1280) (<a href="https://github.com/apache/ofbiz-framework/commit/174857a02f321e9e6eac352cda166b5c28b67bcd" target="_blank">GitHub Link</a>) </li>

    <li>Adds a link to the HTML and PDF versions on the web site (<a href="https://github.com/apache/ofbiz-framework/commit/234353ca8d1ba9e085e1698b511d56a802d38f05" target="_blank">GitHub Link</a>) </li>

    <li>Corrects all checkstyle formatting issues: Line has trailing spaces in applications component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11880" target="_blank">OFBIZ-11880</a>) </li>

    <li>Corrects all checkstyle formatting issues: Line has trailing spaces in framework component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11880" target="_blank">OFBIZ-11880</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 22945 ~(-1405) (<a href="https://github.com/apache/ofbiz-framework/commit/2bdd60e4d30a7d5d5f54aa5a7f210ddaf88d0866" target="_blank">GitHub Link</a>) </li>

    <li>Adds getter method for LabelFile's componentName (<a href="https://issues.apache.org/jira/browse/OFBIZ-11751" target="_blank">OFBIZ-11751</a>) </li>

    <li>Corrects formatting of class LoginServices (<a href="https://github.com/apache/ofbiz-framework/commit/33ca531db450d757399ff26a7300546731be0cef" target="_blank">GitHub Link</a>) </li>

    <li>Provides the use of Error.ftl everywhere it's not yet used (<a href="https://issues.apache.org/jira/browse/OFBIZ-11890" target="_blank">OFBIZ-11890</a>) </li>

    <li>Replaces hard coded label in ProductUomDropDownOnly by dynamic translated label (<a href="https://issues.apache.org/jira/browse/OFBIZ-11891" target="_blank">OFBIZ-11891</a>) </li>

    <li>Adds missing jGrowl map file (<a href="https://issues.apache.org/jira/browse/OFBIZ-11892" target="_blank">OFBIZ-11892</a>) </li>

    <li>Adds missing map for minified OpenLayers js and css (<a href="https://issues.apache.org/jira/browse/OFBIZ-11883" target="_blank">OFBIZ-11883</a>) </li>

    <li>Provides new service definition attribute 'verb' to denote the corresponding HTTP method (<a href="https://issues.apache.org/jira/browse/OFBIZ-11328" target="_blank">OFBIZ-11328</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/214" target="_blank">#214</a>) </li>

    <li>Corrects all checkstyle formatting issues: 'typecast' is not followed by whitespace in applications component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11887" target="_blank">OFBIZ-11887</a>) </li>

    <li>Corrects all checkstyle formatting issues: 'typecast' is not followed by whitespace in framework component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11887" target="_blank">OFBIZ-11887</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 21638 ~(-1310) (<a href="https://github.com/apache/ofbiz-framework/commit/7bf1585c217c9a56142ef3036bfd55c40daada01" target="_blank">GitHub Link</a>) </li>

    <li>Converts updateCommContentDataResource service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11379" target="_blank">OFBIZ-11379</a>) </li>

    <li>Reflects cross-site scripting in content component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11840" target="_blank">OFBIZ-11840</a>) </li>

    <li>Converts indexContentKeywords and forceIndexContentKeywords services from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11390" target="_blank">OFBIZ-11390</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11392" target="_blank">OFBIZ-11392</a>) </li>

    <li>Converts createEmailContent service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11370" target="_blank">OFBIZ-11370</a>) </li>

    <li>Fixes an ProductWorker API typo (<a href="https://github.com/apache/ofbiz-framework/commit/775cc26cefa91fa31840153f3585372007458e7a" target="_blank">GitHub Link</a>) </li>

    <li>Converts createPartyRelationshipType service from Java to entity-auto and updates its service calls (<a href="https://issues.apache.org/jira/browse/OFBIZ-11895" target="_blank">OFBIZ-11895</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/216" target="_blank">#216</a>) </li>

    <li>Corrects some single line statements to fix checkstyle issues, also removes some remaining extra spaces from code to avoid checkstyle erros in applications component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11886" target="_blank">OFBIZ-11886</a>) </li>

    <li>Corrects some single line statements to fix checkstyle issues, also removes some remaining extra spaces from code to avoid checkstyle erros in framework component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11886" target="_blank">OFBIZ-11886</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 20662 ~(-980) (<a href="https://github.com/apache/ofbiz-framework/commit/b0486ea624de4ab24fbc70c8c0bd5368a9c83430" target="_blank">GitHub Link</a>) </li>

    <li>Updates checkstyle.xml with allowSingleLineStatement as true. This brings down checkstyle maxErrors to 20037.(-625) (<a href="https://issues.apache.org/jira/browse/OFBIZ-11886" target="_blank">OFBIZ-11886</a>) </li>

    <li>Updates build.gradle to the latest dependencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-11903" target="_blank">OFBIZ-11903</a>) </li>

    <li>Converts createRoleType service to entity-auto from Java and update its service calls (<a href="https://issues.apache.org/jira/browse/OFBIZ-11894" target="_blank">OFBIZ-11894</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/215" target="_blank">#215</a>) </li>

    <li>Converts ProductPriceTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11856" target="_blank">OFBIZ-11856</a>) </li>

    <li>Updates case indentation to 0 for all switch statements in framework component. Also does formatting changes as per checkstyle best practices (<a href="https://issues.apache.org/jira/browse/OFBIZ-11904" target="_blank">OFBIZ-11904</a>) </li>

    <li>Updates case indentation to 0 for all switch statements in applications component. Also does formatting changes as per checkstyle best practices (<a href="https://issues.apache.org/jira/browse/OFBIZ-11904" target="_blank">OFBIZ-11904</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 18050 ~(-2000) (<a href="https://github.com/apache/ofbiz-framework/commit/b2d7f9ea2a2ddeff585549de0c3cf8eb00a86276" target="_blank">GitHub Link</a>) </li>

    <li>Converts CostTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11859" target="_blank">OFBIZ-11859</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors (-2, from JavaDoc formatting) (<a href="https://github.com/apache/ofbiz-framework/commit/9a98f5b04f467b0cf1db5ee6fb78e3a39faad0c7" target="_blank">GitHub Link</a>) </li>

    <li>Corrects all incorrect indentation level issues in application component, also fixes some case indentation checkstyle issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11922" target="_blank">OFBIZ-11922</a>) </li>

    <li>Corrects all incorrect indentation level issues in framework component, also fixes some case indentation checkstyle issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11922" target="_blank">OFBIZ-11922</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 15022 ~(-3030) (<a href="https://github.com/apache/ofbiz-framework/commit/e6bec1214eac237a6da2c261f75949ddb05953a5" target="_blank">GitHub Link</a>) </li>

    <li>Converts ProductTagTest from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11857" target="_blank">OFBIZ-11857</a>) </li>

    <li>Changes content of VERSION file added during INFRA-19443 (<a href="https://github.com/apache/ofbiz-framework/commit/27c387d35b087979f160e554d85daf3876959943" target="_blank">GitHub Link</a>) </li>

    <li>Improves inconsistent String comparisons (<a href="https://issues.apache.org/jira/browse/OFBIZ-9254" target="_blank">OFBIZ-9254</a>) </li>

    <li>Converts testCreateAndUpdateContactList test from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11877" target="_blank">OFBIZ-11877</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Adds plugin for integration of 1st Data payment gateway (<a href="https://issues.apache.org/jira/browse/OFBIZ-11837" target="_blank">OFBIZ-11837</a>) </li>

    <li>Inhibits possible bug in AcceptedBacklogNotification.ftl, if there is no person (<a href="https://github.com/apache/ofbiz-plugins/commit/2cbb7bd278573acc8351cac399ca80d12f17439b" target="_blank">GitHub Link</a>) </li>

    <li>Corrects all 'if is not followed by whitespace' checkstyle errors. Also corrects few ', is not followed by whitespace' checkstyle errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-11805" target="_blank">OFBIZ-11805</a>) </li>

    <li>Corrects remaining ', is not followed by whitespace' checkstyle errors in plugin component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11805" target="_blank">OFBIZ-11805</a>) </li>

    <li>Corrects all checkstyle issues related to succeeding space for comma in plugins directory (<a href="https://issues.apache.org/jira/browse/OFBIZ-11805" target="_blank">OFBIZ-11805</a>) </li>

    <li>Corrects checkstyle formatting issues, 'is preceded/not preceded with whitespace' for plugins component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11874" target="_blank">OFBIZ-11874</a>) </li>

    <li>Corrects all checkstyle formatting issues: Line has trailing spaces in plugins component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11880" target="_blank">OFBIZ-11880</a>) </li>

    <li>Provides the use of Error.ftl everywhere it's not yet used (<a href="https://issues.apache.org/jira/browse/OFBIZ-11890" target="_blank">OFBIZ-11890</a>) </li>

    <li>Corrects all checkstyle formatting issues: 'typecast' is not followed by whitespace in plugins component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11887" target="_blank">OFBIZ-11887</a>) </li>

    <li>Renames a few map files (<a href="https://issues.apache.org/jira/browse/OFBIZ-11882" target="_blank">OFBIZ-11882</a>) </li>

    <li>Corrects some single line statements to fix checkstyle issues, also removes some remaining extra spaces from code to avoid checkstyle erros in plugins component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11886" target="_blank">OFBIZ-11886</a>) </li>

    <li>Updates build.gradle to the latest dependencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-11903" target="_blank">OFBIZ-11903</a>) </li>

    <li>Improves UI of product summary in promotion product list (<a href="https://issues.apache.org/jira/browse/OFBIZ-11906" target="_blank">OFBIZ-11906</a>) </li>

    <li>Improves UI of an header in CheckoutIptions.ftl (<a href="https://issues.apache.org/jira/browse/OFBIZ-10136" target="_blank">OFBIZ-10136</a>) </li>

    <li>Updates case indentation to 0 for all switch statements in plugins component. Also does formatting changes as per checkstyle best practices (<a href="https://issues.apache.org/jira/browse/OFBIZ-11904" target="_blank">OFBIZ-11904</a>) </li>

    <li>Corrects all incorrect indentation level issues in plugins component, also fixes some case indentation checkstyle issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11922" target="_blank">OFBIZ-11922</a>) </li>

    <li>Reduces inconsistent String comparisons (<a href="https://issues.apache.org/jira/browse/OFBIZ-9254" target="_blank">OFBIZ-9254</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Eleminates console warnings related to OrderHeader caching (<a href="https://issues.apache.org/jira/browse/OFBIZ-11858" target="_blank">OFBIZ-11858</a>) </li>

    <li>Fixes BigDecimal casting in groovy services (<a href="https://issues.apache.org/jira/browse/OFBIZ-11862" target="_blank">OFBIZ-11862</a>) </li>

    <li>Adds missing AJP connector property introduced for Tomcat 9.0.31 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11848" target="_blank">OFBIZ-11848</a>) </li>

    <li>Fixes: Unable to delete Group Order (<a href="https://issues.apache.org/jira/browse/OFBIZ-11773" target="_blank">OFBIZ-11773</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/172" target="_blank">#172</a>) </li>

    <li>Adds employee lookup to search/select employee while creating new employment. This will also fixes the issue of party groups being selected as a employee (<a href="https://issues.apache.org/jira/browse/OFBIZ-11697" target="_blank">OFBIZ-11697</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/210" target="_blank">#210</a>) </li>

    <li>Fixes: Print pick sheet has distorted currency symbol (<a href="https://issues.apache.org/jira/browse/OFBIZ-11781" target="_blank">OFBIZ-11781</a>) </li>

    <li>Refactors ShipmentReceiptServices#receiveInventoryProduct to fix ClassCastException and double received product issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-11909" target="_blank">OFBIZ-11909</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/218" target="_blank">#218</a>) </li>

    <li>Fixes error in Quick Receive Purchase Order process (<a href="https://issues.apache.org/jira/browse/OFBIZ-11911" target="_blank">OFBIZ-11911</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/219" target="_blank">#219</a>) </li>

    <li>Fixes: One page checkout is broken because of ordermgr::getAssociatedStateList (<a href="https://issues.apache.org/jira/browse/OFBIZ-11838" target="_blank">OFBIZ-11838</a>) </li>

    <li>Fixes: Unable to create event in SFA component (<a href="https://issues.apache.org/jira/browse/OFBIZ-9901" target="_blank">OFBIZ-9901</a>) </li>

    <li>Fixes issue due to converting InvoicePerShipmentTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11553" target="_blank">OFBIZ-11553</a>) </li>

    <li>Fixes a bug, wich is produced by "replaces module by MODULE everywhere" (<a href="https://github.com/apache/ofbiz-framework/commit/9cbcef3209e6f2a5fa9197a8077e42d7a8003641" target="_blank">GitHub Link</a>) </li>

    <li>Fixes inconsistent String comparisons bug due to (<a href="https://issues.apache.org/jira/browse/OFBIZ-9254" target="_blank">OFBIZ-9254</a>) that results in uploading image to data resource issue (<a href="https://issues.apache.org/jira/browse/OFBIZ-10834" target="_blank">OFBIZ-10834</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: Send me this every month link is not working in order items section (<a href="https://issues.apache.org/jira/browse/OFBIZ-10891" target="_blank">OFBIZ-10891</a>) </li>

</ul>

<h2>Documentation</h2>

<h3>Framework</h3>

<ul>

    <li>Adds Changelog.adoc file (<a href="https://github.com/apache/ofbiz-framework/pull/206" target="_blank">#206</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/8160a572ea72579d1911be16ee9e70eed269f511" target="_blank">GitHub Link</a>) </li>

    <li>Provides Marketing migration to AsciiDoc and new documentation organization (<a href="https://issues.apache.org/jira/browse/OFBIZ-11577" target="_blank">OFBIZ-11577</a>) </li>

    <li>Migrates help link to AsciiDoc user manual for marketing (<a href="https://issues.apache.org/jira/browse/OFBIZ-11577" target="_blank">OFBIZ-11577</a>) </li>

    <li>Provides SFA migration to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11577" target="_blank">OFBIZ-11577</a>) </li>

    <li>Migrates help link to AsciiDoc user manual for SFA (<a href="https://issues.apache.org/jira/browse/OFBIZ-11577" target="_blank">OFBIZ-11577</a>) </li>

    <li>Provides Order migration to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11580" target="_blank">OFBIZ-11580</a>) </li>

    <li>Migrates help link to AsciiDoc user manual for Order (<a href="https://issues.apache.org/jira/browse/OFBIZ-11580" target="_blank">OFBIZ-11580</a>) </li>

    <li>Provides Party migration to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11581" target="_blank">OFBIZ-11581</a>) </li>

    <li>Migrates help link to AsciiDoc user manual for Party (<a href="https://issues.apache.org/jira/browse/OFBIZ-11581" target="_blank">OFBIZ-11581</a>) </li>

    <li>Provides documentation for CsrfDefenseStrategy in case of no support for SameSite cookie attribute (<a href="https://github.com/apache/ofbiz-framework/commit/16c2d3521990caf5e8703cbb323ce1146c93b9ce" target="_blank">GitHub Link</a>) </li>

    <li>Provides POC for CSRF Token (CVE-2019-0235) (<a href="https://issues.apache.org/jira/browse/OFBIZ-11306" target="_blank">OFBIZ-11306</a>) </li>

    <li>Provides Product (catalog) migration to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates help link to AsciiDoc user manual for Product (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Provides Workeffort migration to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Provides Framework/base migration to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Checks all DocBook files in each applications-component documents directory (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates all DocBook files to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Deletes all DocBook files related to migration to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Includes AsciiDoc user and developer manual from ofbiz-plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Removes DocBooks migrated to AsciiDoc that are now in section ofbiz-plugins/MyPortal (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Removes old content links for ofbiz-setup (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Migrates SingleSignOn-DocBook files to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates help DocBook file to AsciiDoc for Ebay component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates help link to AsciiDoc user manual for Ebay component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates help link to AsciiDoc developer manual for components, that are dedicated to developers (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates help DocBook file to AsciiDoc for ebayStore component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates help link to AsciiDoc user manual for EbayStore component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Reviews existing adoc and migrates help DocBook file to AsciiDoc for birt component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates help link to AsciiDoc user manual for birt component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Removes DocBook file without migrating them to AsciiDoc (contain only a title) for msgGateway component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates help DocBook file to AsciiDoc for MyPortal component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Removes DocBook migrated to AsciiDoc (only a short introduction) for MyPortal component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates DocBook help files to AsciiDoc for ProjectMgr component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

    <li>Migrates help link to AsciiDoc user manual for ProjectMgr component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11587" target="_blank">OFBIZ-11587</a>) </li>

</ul>
