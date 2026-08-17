---
layout: post
title: Apache OFBiz News - August 2020
date: '2020-09-08T08:44:15+00:00'
permalink: apache-ofbiz-news-august-2020
---
<p></p><p> </p> 
  <p> </p> 
  <h2>Apache OFBiz News August 2020</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have news about the Headless Commerce plugin, new PMC Member and Committer along with our usual list of features, improvements, and 
Statistics.</p><h3>Headless Commerce Plugin<br></h3><div align="justify">Headless commerce is the decoupling of the presentation layer (frontend) of an eCommerce from the backend such that both are able to function independently. This decoupling is achieved by using APIs to expose core backend functionalities. By decoupling frontend from the backend - user interface, social commerce, mobile apps, IoT, and many more – can be changed or updated individually, without interfering with the backend. Data is available to separate frontend applications via API calls and the backend runs invisibly in the background. During this month, the community discussed implementing an OFBiz plugin to achieve it.<br></div>Here is the <a href="https://markmail.org/message/7rdoepdc4sj54wpm" target="_blank">link</a> to the mail thread for more insights.<br>

<p>Thank you Arpit Mor for initiating it and to everyone who contributed to this valuable discussion.</p><h3>New PMC Member and Committer<br></h3><div align="justify"> 
   
  The OFBiz PMC has invited Pawan Verma to become a new member of 
the committee &amp; Devanshu Vyas to become a committer to the project and we are glad to announce that they have accepted the 
nomination.
Please join us in welcoming and congratulating them in their new role on
 the project, and also thanking them for all their contributions.</div><p align="justify"></p><h3>Moving third party shipping integrations to plugins<br></h3><div align="justify">During this month, the community discussed moving third party shipping integrations from applications to plugins. As an initial step, Mridul proposed to introduce a new entity “ProductStoreShipmentSettings” to configure available shipping gateway services for shipping carriers at the product store level. The above change would enable further efforts to refactor the hardcoded reference with configurable and move these integrations to plugins without losing any available support in applications.<br></div><br>Here are some links for more insights:<br>
<ol><li><a href="https://issues.apache.org/jira/browse/OFBIZ-11961" target="_blank">OFBIZ-11961</a></li><li><a href="https://markmail.org/message/x4tp73zgribjytgy" target="_blank">Mail thread</a></li></ol>
<p>Thank you Mridul Pathak for the proposal and to everyone who provided valuable input to his proposal.</p><h3>Ongoing efforts to fix lint issues<br></h3>In our previous post, we shared information about the ongoing efforts fixing the lint issues. During this month, the community worked on fixing almost 12k issues identified using the linting tool <a href="https://checkstyle.org/" target="_blank">checkstyle</a> available with OFBiz as <a href="https://docs.gradle.org/current/userguide/checkstyle_plugin.html" target="_blank">Gradle plugin</a>.<br>Refer <a href="https://issues.apache.org/jira/browse/OFBIZ-11350" target="_blank">OFBIZ-11350</a> for more insights.
<p>Thank you, Suraj Khurana, Jacques Le Roux, Pritam Kute, and to everyone who contributed to the discussion and the effort.</p><p></p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 61 issues were opened and 95 issues were closed ( 9 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong>167 commits to the code base that changed&nbsp; lines of code ( 9 committers were active)</li><li><strong>Plugins: </strong>50 commits to the code base that changed 12,326 lines of code ( 7 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev: </strong>135 emails sent and 35 topics discussed (40 different people)</li><li><strong>User: </strong>116 emails sent and 26 topics discussed (39 different people) <br></li></ul></li></ul>

<h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Corrects checkstyle issues, max. line lenght 150 characters, fixes some extra spaces and naming conventions in framework component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11921" target="_blank">OFBIZ-11921</a>) </li>

    <li>Corrects checkstyle issues, max. line lenght 150 characters, fixes some extra spaces and naming conventions in applications component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11921" target="_blank">OFBIZ-11921</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 12795 ~(-2225) (<a href="https://github.com/apache/ofbiz-framework/commit/45253da2f980d0edd87f5dd9c4302de930a396a3" target="_blank">GitHub Link</a>) </li>

    <li>Improves status ID checkbox in Find Invoice screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-9643" target="_blank">OFBIZ-9643</a>) </li>

    <li>Improves status ID checkbox for FindDataResource and FindContent forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-11934" target="_blank">OFBIZ-11934</a>) </li>

    <li>Improves status ID checkbox for Return, Requirement and Quote forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-11935" target="_blank">OFBIZ-11935</a>) </li>

    <li>Improves status ID checkbox for FindPayments and FindPurchaseInvoices forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-11938" target="_blank">OFBIZ-11938</a>) </li>

    <li>Improves status ID checkbox for FindWorkEffort, FindProductionRun and FindShipment forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-11939" target="_blank">OFBIZ-11939</a>) </li>

    <li>Adds Unit test case for some content services (<a href="https://issues.apache.org/jira/browse/OFBIZ-8420" target="_blank">OFBIZ-8420</a>) </li>

    <li>Improves Purchase Order Email Support (<a href="https://issues.apache.org/jira/browse/OFBIZ-11864" target="_blank">OFBIZ-11864</a>) </li>

    <li>Improves status ID checkbox for FindEmploymentApps, FindPartyQuals and FindEmplLeaves forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-11937" target="_blank">OFBIZ-11937</a>) </li>

    <li>Converts ProductTest.xml to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11852" target="_blank">OFBIZ-11852</a>) </li>

    <li>Converts PartyStatusChangeTests.xml to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11853" target="_blank">OFBIZ-11853</a>) </li>

    <li>Converts PartyContactMechTests.xml to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11854" target="_blank">OFBIZ-11854</a>) </li>

    <li>Corrects all redundant modifiers occurences in applications component. Also, fixes some other checkstyle line formatting and spacing issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11925" target="_blank">OFBIZ-11925</a>) </li>

    <li>Corrects all redundant modifiers occurences in framework component. Also, fixes some other checkstyle line formatting and spacing issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11925" target="_blank">OFBIZ-11925</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 12469 ~(-326) (<a href="https://github.com/apache/ofbiz-framework/commit/5e67582e889ea35060e8472eb7b508f2471bd07d" target="_blank">GitHub Link</a>) </li>

    <li>Improves MethodLength checkstyle rule, set to 500 and also set countEmpty property as false (<a href="https://issues.apache.org/jira/browse/OFBIZ-11915" target="_blank">OFBIZ-11915</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 12278 ~(-200) (<a href="https://github.com/apache/ofbiz-framework/commit/f4dfa1687395970fd74b9748148654779f2f3322" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused imports from Java files (<a href="https://issues.apache.org/jira/browse/OFBIZ-11930" target="_blank">OFBIZ-11930</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/222" target="_blank">#222</a>) </li>

    <li>Moves page-specific script links to html template (<a href="https://issues.apache.org/jira/browse/OFBIZ-11799" target="_blank">OFBIZ-11799</a>) </li>

    <li>Removes unused imports from Java files for fixing checkstyle errors (<a href="https://github.com/apache/ofbiz-framework/commit/5dbf5cb9eb825fe229205443248e033c5db0b115" target="_blank">GitHub Link</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 12224 ~(-54) (<a href="https://github.com/apache/ofbiz-framework/commit/ad5ab7299ecc6d4a59d240ad993dba8a31c0c050" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused imports from Java files for fixing checkstyle errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-11930" target="_blank">OFBIZ-11930</a>) </li>

    <li>Corrects max parameter number allowed checkstyle rule, also added property for ignoring overridden methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-11931" target="_blank">OFBIZ-11931</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 12110 ~(-110) (<a href="https://github.com/apache/ofbiz-framework/commit/4634c198b273dc8d7d586dc4cf53f9345aae1967" target="_blank">GitHub Link</a>) </li>

    <li>Adds override property in DesignForExtension module to avoid unnecessary design for extension checkstyle error messages for overrided methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-11941" target="_blank">OFBIZ-11941</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 10184 ~(-1925) (<a href="https://github.com/apache/ofbiz-framework/commit/af15eba5ff5025f0731d9beb7c1aa0c9a1580b66" target="_blank">GitHub Link</a>) </li>

    <li>Converts cancelCheckRunPayments service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11494" target="_blank">OFBIZ-11494</a>) </li>

    <li>Converts getInvoicePaymentInfoListByDueDateOffset service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11486" target="_blank">OFBIZ-11486</a>) </li>

    <li>Improves multi-block attribute for html-template tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-11686" target="_blank">OFBIZ-11686</a>) </li>

    <li>Improves upgrades Gradle to V6.5.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11946" target="_blank">OFBIZ-11946</a>) </li>

    <li>Moves 'SecurityPermission' data to seed data files (<a href="https://issues.apache.org/jira/browse/OFBIZ-10575" target="_blank">OFBIZ-10575</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/225" target="_blank">#225</a>) </li>

    <li>Adds a title to Javadoc overview (<a href="https://issues.apache.org/jira/browse/OFBIZ-11950" target="_blank">OFBIZ-11950</a>) </li>

    <li>Fixes small typo in trunk (<a href="https://issues.apache.org/jira/browse/OFBIZ-11952" target="_blank">OFBIZ-11952</a>) </li>

    <li>Moves page-specific script links to html template (<a href="https://issues.apache.org/jira/browse/OFBIZ-11799" target="_blank">OFBIZ-11799</a>) </li>

    <li>Improves Freemarker macro for JsLanguageFilesMapping (<a href="https://issues.apache.org/jira/browse/OFBIZ-11958" target="_blank">OFBIZ-11958</a>) </li>

    <li>Adds missing Javadocs for some methods in applications component. Also corrects some variables as per naming convention best practices (<a href="https://issues.apache.org/jira/browse/OFBIZ-11947" target="_blank">OFBIZ-11947</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 822 ~(-1960) (<a href="https://github.com/apache/ofbiz-framework/commit/6a8cc9aa64f1492150047bd2af020134b26294dd" target="_blank">GitHub Link</a>) </li>

    <li>Marks as deprecated ofbiz.locale.default and locale.properties.fallback properties (<a href="https://issues.apache.org/jira/browse/OFBIZ-11962" target="_blank">OFBIZ-11962</a>) </li>

    <li>Replace Mask Js (<a href="https://issues.apache.org/jira/browse/OFBIZ-11964" target="_blank">OFBIZ-11964</a>) </li>

    <li>Reverts "Improved: Upgrade Gradle to V6.5.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11946" target="_blank">OFBIZ-11946</a>)" </li>

    <li>Reverts "Revert "Improved: Upgrade Gradle to V6.5.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11946" target="_blank">OFBIZ-11946</a>)"" </li>

    <li>Improves form-Fields of certain types won't render IDs (<a href="https://issues.apache.org/jira/browse/OFBIZ-11957" target="_blank">OFBIZ-11957</a>) </li>

    <li>Converts updateSingleContentPurpose service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11367" target="_blank">OFBIZ-11367</a>) </li>

    <li>Reverts: "Error when rendering renderSubmitField macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-11968" target="_blank">OFBIZ-11968</a>)" </li>

    <li>Makes data members of class as private and added accessor methods for the same, also corrects occurences of the same in applications component. Also made some related checkstyle code enhancements (<a href="https://issues.apache.org/jira/browse/OFBIZ-11963" target="_blank">OFBIZ-11963</a>)  </li>

    <li>Makes data members of class as private and added accessor methods for the same, also corrects occurences of the same in framework component. Also made some related checkstyle code enhancements (<a href="https://issues.apache.org/jira/browse/OFBIZ-11963" target="_blank">OFBIZ-11963</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 5424 ~(-2800) (<a href="https://github.com/apache/ofbiz-framework/commit/ed3e926b76510ffbfafd9b1654674b7615e9ddd7" target="_blank">GitHub Link</a>) </li>

    <li>Converts createCommEventContentAssoc service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11380" target="_blank">OFBIZ-11380</a>) </li>

    <li>Replaces .size() == 0 with isEmpty() in Java files(<a href="https://issues.apache.org/jira/browse/OFBIZ-11944" target="_blank">OFBIZ-11944</a>) </li>

    <li>Improves status ID checkbox for Find InventoryItems screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-11933" target="_blank">OFBIZ-11933</a>) </li>

    <li>Improves creates new quote button should be removed from new quote screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-11405" target="_blank">OFBIZ-11405</a>) </li>

    <li>Improves unit test case for service - createProductConfigOption (<a href="https://issues.apache.org/jira/browse/OFBIZ-9090" target="_blank">OFBIZ-9090</a>) </li>

    <li>WIP: Implemented: Added support for defining nested attributes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11902" target="_blank">OFBIZ-11902</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/231" target="_blank">#231</a>) </li>

    <li>Improves expires product images showing on product detail page (<a href="https://issues.apache.org/jira/browse/OFBIZ-11982" target="_blank">OFBIZ-11982</a>) </li>

    <li>Improves unit test case for service - getContent (<a href="https://issues.apache.org/jira/browse/OFBIZ-8547" target="_blank">OFBIZ-8547</a>) </li>

    <li>Corrects class names, method names, data members of class and variables names in application components. Also corrected some formatting and line length related checkstyle issues  (<a href="https://issues.apache.org/jira/browse/OFBIZ-11926" target="_blank">OFBIZ-11926</a>) </li>

    <li>Corrects class names, method names, data members of class and variables names in framework components. Also corrected some formatting and line length related checkstyle issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11926" target="_blank">OFBIZ-11926</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 4212 ~(-1200) (<a href="https://github.com/apache/ofbiz-framework/commit/cafed31da696aa5ee6bda701dd493e6c64a2e6b5" target="_blank">GitHub Link</a>) </li>

    <li>Makes the top comment more clear (<a href="https://github.com/apache/ofbiz-framework/commit/707acc7d2744c32519aab67e78b8e0e293cb01d6" target="_blank">GitHub Link</a>) </li>

    <li>Removes a nonsense word left during a C/P (<a href="https://github.com/apache/ofbiz-framework/commit/22de7a63e0d878497a7bf80e6339b45694434348" target="_blank">GitHub Link</a>) </li>

    <li>Adds a new IntegerToBigInteger converter (<a href="https://issues.apache.org/jira/browse/OFBIZ-11985" target="_blank">OFBIZ-11985</a>) </li>

    <li>Improves checkstyle: Variable name must match pattern (<a href="https://issues.apache.org/jira/browse/OFBIZ-11926" target="_blank">OFBIZ-11926</a>) </li>

    <li>Removes unused MODULE var in FreeMarkerViewHandler.java (<a href="https://github.com/apache/ofbiz-framework/commit/b42cd5f188e08aa7953969ca0234c285d9522ca3" target="_blank">GitHub Link</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors to 3026 ~(-1180) (<a href="https://github.com/apache/ofbiz-framework/commit/27ddb548b084500d0af1ef9f496663e37f806d27" target="_blank">GitHub Link</a>) </li>

    <li>Improves have a readme in every component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6243" target="_blank">OFBIZ-6243</a>) </li>

    <li>Reverts: "Improved: Have a readme in every component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6243" target="_blank">OFBIZ-6243</a>)" </li>

    <li>Updates information in README.md files from removed pages in wiki (<a href="https://github.com/apache/ofbiz-framework/commit/2d033df44614fbe5fdc8bfd666970af300af3213" target="_blank">GitHub Link</a>) </li>

    <li>Completes the documentation in the XSD files (<a href="https://issues.apache.org/jira/browse/OFBIZ-7537" target="_blank">OFBIZ-7537</a>) </li>

    <li>Improves forgot to add this README.md (<a href="https://github.com/apache/ofbiz-framework/commit/cf72dfbfea199599b320fae4cd4287ef113660de" target="_blank">GitHub Link</a>) </li>

    <li>Improves the leads which are converted is displayed on the Find lead page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10237" target="_blank">OFBIZ-10237</a>) </li>

    <li>Improves service-eca.xsd documentation (<a href="https://issues.apache.org/jira/browse/OFBIZ-9994" target="_blank">OFBIZ-9994</a>) </li>

    <li>Fixes Literals comparisons with variable to avoid NPE (<a href="https://issues.apache.org/jira/browse/OFBIZ-11929" target="_blank">OFBIZ-11929</a>) </li>

    <li>Improves get billing party by parent invoice type (<a href="https://issues.apache.org/jira/browse/OFBIZ-10878" target="_blank">OFBIZ-10878</a>) </li>

    <li>Improves allow logging to be disabled for getJs request (<a href="https://issues.apache.org/jira/browse/OFBIZ-11980" target="_blank">OFBIZ-11980</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Corrects checkstyle issues, max. line lenght 150 characters, fixes some extra spaces and naming conventions (<a href="https://issues.apache.org/jira/browse/OFBIZ-11921" target="_blank">OFBIZ-11921</a>) </li>

    <li>Improves status ID checkbox for FindTask and FindTimeSheet forms (<a href="https://issues.apache.org/jira/browse/OFBIZ-11936" target="_blank">OFBIZ-11936</a>) </li>

    <li>Removes unused imports from Java files (<a href="https://issues.apache.org/jira/browse/OFBIZ-11930" target="_blank">OFBIZ-11930</a>) (<a href="https://github.com/apache/ofbiz-plugins/pull/36" target="_blank">#36</a>) </li>

    <li>Removes unused imports from Java files for fixing checkstyle errors (<a href="https://github.com/apache/ofbiz-plugins/commit/04b88091248f9c0d17a2ccb3f6ef4582ae29a758" target="_blank">GitHub Link</a>) </li>

    <li>Improves can't enter decimals when ordering on ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-11899" target="_blank">OFBIZ-11899</a>) </li>

    <li>Moves 'SecurityPermission' data to seed data files (<a href="https://issues.apache.org/jira/browse/OFBIZ-10575" target="_blank">OFBIZ-10575</a>) (<a href="https://github.com/apache/ofbiz-plugins/pull/38" target="_blank">#38</a>) </li>

    <li>Moves page-specific script links to html template (<a href="https://issues.apache.org/jira/browse/OFBIZ-11799" target="_blank">OFBIZ-11799</a>) </li>

    <li>Adds a new component to provide REST capabilities to OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-11328" target="_blank">OFBIZ-11328</a>) (<a href="https://github.com/apache/ofbiz-plugins/pull/35" target="_blank">#35</a>) </li>

    <li>Adds missing Javadocs for some methods. This is done for plugins component. Also corrected some variables as per naming convention best practices (<a href="https://issues.apache.org/jira/browse/OFBIZ-11947" target="_blank">OFBIZ-11947</a>) </li>

    <li>Adds missing OpenApi mapping for Boolean and Java Collection types (<a href="https://issues.apache.org/jira/browse/OFBIZ-11328" target="_blank">OFBIZ-11328</a>) </li>

    <li>Makes data members of class as private and added accessor methods for the same, also corrected occurences of the same in plugins component. Also made some related checkstyle code enhancements (<a href="https://issues.apache.org/jira/browse/OFBIZ-11963" target="_blank">OFBIZ-11963</a>) </li>

    <li>Improves bootstrap-bundle*.js contains bootstrap*.js (<a href="https://issues.apache.org/jira/browse/OFBIZ-11969" target="_blank">OFBIZ-11969</a>) </li>

    <li>Replaces .size() == 0 with isEmpty() in Java files (<a href="https://issues.apache.org/jira/browse/OFBIZ-11944" target="_blank">OFBIZ-11944</a>) </li>

    <li>Adds support to read children attributes of the service for rendering openapi spec (<a href="https://github.com/apache/ofbiz-plugins/pull/40" target="_blank">#40</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/dce5c976f7b1e509bc8d2f4046b2c370ca0adc45" target="_blank">GitHub Link</a>) </li>

    <li>Removes a duplicated price for PEPPERS-G (<a href="https://github.com/apache/ofbiz-plugins/commit/ba565306adce9d9a84e01e17d989ae7eada6d584" target="_blank">GitHub Link</a>) </li>

    <li>Improves enclose productsummary list in div.row to better use the screen/plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-11979" target="_blank">OFBIZ-11979</a>) </li>

    <li>Improves multi-block attribute for html-template tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-11686" target="_blank">OFBIZ-11686</a>) </li>

    <li>Improves additional images not showing correctly on product detail page (<a href="https://issues.apache.org/jira/browse/OFBIZ-11981" target="_blank">OFBIZ-11981</a>) </li>

    <li>Corrects class names, method names, data members of class and variables names in plugins component. Also corrected some formatting and line length related checkstyle issues (<a href="https://issues.apache.org/jira/browse/OFBIZ-11926" target="_blank">OFBIZ-11926</a>) </li>

    <li>Improves checkstyle: Variable name must match pattern (<a href="https://issues.apache.org/jira/browse/OFBIZ-11926" target="_blank">OFBIZ-11926</a>) </li>

    <li>Improves have a readme in every component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6243" target="_blank">OFBIZ-6243</a>) </li>

    <li>Reverts: "Improved: Have a readme in every component (<a href="https://issues.apache.org/jira/browse/OFBIZ-6243" target="_blank">OFBIZ-6243</a>)" </li>

    <li>Updates information in README.md files from removed pages in wiki (<a href="https://github.com/apache/ofbiz-plugins/commit/b049b93b55ed72bc87be9d1dcadc463eaf91ee70" target="_blank">GitHub Link</a>) </li>

    <li>Fixes Literals comparisons with variable to avoid NPE (<a href="https://issues.apache.org/jira/browse/OFBIZ-11929" target="_blank">OFBIZ-11929</a>) </li>

    <li>Adds Enum for HTTP Auth schemes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11328" target="_blank">OFBIZ-11328</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes Server-Side Template Injection using Static (<a href="https://issues.apache.org/jira/browse/OFBIZ-11871" target="_blank">OFBIZ-11871</a>) </li>

    <li>Fixes view Image button on order view page fails to render the image (<a href="https://issues.apache.org/jira/browse/OFBIZ-11734" target="_blank">OFBIZ-11734</a>) </li>

    <li>Fixes make all related Cancel/Done buttons return to backHome ie. party profile page (<a href="https://issues.apache.org/jira/browse/OFBIZ-11943" target="_blank">OFBIZ-11943</a>) </li>

    <li>Fixes error log of a fresh trunk installation (<a href="https://issues.apache.org/jira/browse/OFBIZ-11953" target="_blank">OFBIZ-11953</a>) </li>

    <li>Fixes expiring Daemon because JVM heap space is exhausted (<a href="https://issues.apache.org/jira/browse/OFBIZ-11954" target="_blank">OFBIZ-11954</a>) </li>

    <li>Fixes error in log when running renderDropDownField macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-11959" target="_blank">OFBIZ-11959</a>) </li>

    <li>Correctes package for marketing tests (<a href="https://issues.apache.org/jira/browse/OFBIZ-11877" target="_blank">OFBIZ-11877</a>) </li>

    <li>Error when rendering renderSubmitField macro (<a href="https://issues.apache.org/jira/browse/OFBIZ-11968" target="_blank">OFBIZ-11968</a>) </li>

    <li>Fixes wrong maxheapsize (<a href="https://issues.apache.org/jira/browse/OFBIZ-11967" target="_blank">OFBIZ-11967</a>) </li>

    <li>Fixes bug in order manager main page when using Arab language (<a href="https://issues.apache.org/jira/browse/OFBIZ-9687" target="_blank">OFBIZ-9687</a>) </li>

    <li>Fixes svg files not removed on clean (<a href="https://issues.apache.org/jira/browse/OFBIZ-11976" target="_blank">OFBIZ-11976</a>) </li>

    <li>Fixes some checkstyle issues (<a href="https://github.com/apache/ofbiz-framework/commit/f64a56cae3bee4028fb7c5067b7c9027eb9c4ad5" target="_blank">GitHub Link</a>) </li>

    <li>Fixes error in sendShipmentScheduledNotification service (<a href="https://issues.apache.org/jira/browse/OFBIZ-11983" target="_blank">OFBIZ-11983</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/234" target="_blank">#234</a>) </li>

    <li>Fixes testIntegration issue caused due to mistakenly updated static string 'WITHDRAWAL' and updated variable in groovy test case. Also used getter method for entity auto tests to get the dispatcher from OFBizTestCase (<a href="https://issues.apache.org/jira/browse/OFBIZ-11926" target="_blank">OFBIZ-11926</a>) </li>

    <li>Fixes default value flags not working for configurable and variant products at the time of order entry (<a href="https://issues.apache.org/jira/browse/OFBIZ-10532" target="_blank">OFBIZ-10532</a>) </li>

    <li>Fixes MessagingException in sendShipmentScheduledNotification service (<a href="https://issues.apache.org/jira/browse/OFBIZ-11984" target="_blank">OFBIZ-11984</a>) </li>

    <li>Fixes quick Add Lead does not work without group name (<a href="https://issues.apache.org/jira/browse/OFBIZ-11896" target="_blank">OFBIZ-11896</a>) </li>

    <li>Fixes display/selection of unit of measure is broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-11955" target="_blank">OFBIZ-11955</a>) </li>

    <li>Fixes missed initialisation in previous commit 163ff79526e18f720d3cb89176e4899aa0b4c15f (<a href="https://issues.apache.org/jira/browse/OFBIZ-10878" target="_blank">OFBIZ-10878</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes getJs unknown in Webpos (<a href="https://issues.apache.org/jira/browse/OFBIZ-11932" target="_blank">OFBIZ-11932</a>) </li>

    <li>Fixes product link on Order confirmation page is not responding (<a href="https://issues.apache.org/jira/browse/OFBIZ-11735" target="_blank">OFBIZ-11735</a>) </li>

    <li>Fixes unable to add product to cart in ecommence (<a href="https://issues.apache.org/jira/browse/OFBIZ-11899" target="_blank">OFBIZ-11899</a>) </li>

    <li>Fixes removed HELP and LICENSE files (<a href="https://github.com/apache/ofbiz-plugins/commit/bcfa194edf4f45cd13f776d80f57f66681648665" target="_blank">GitHub Link</a>) </li>

    <li>Fixes OpenApi mapping for Integer. Improved: Added missing OpenApi mapping for BigInteger (<a href="https://issues.apache.org/jira/browse/OFBIZ-11328" target="_blank">OFBIZ-11328</a>) </li>

    <li>Fixes issue with return service. Also, improvements to auth service to handle more errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-11837" target="_blank">OFBIZ-11837</a>) (<a href="https://github.com/apache/ofbiz-plugins/pull/39" target="_blank">#39</a>) </li>

    <li>Distorted Final Checkout Review page when Credit card is selected as Payment option (<a href="https://issues.apache.org/jira/browse/OFBIZ-11920" target="_blank">OFBIZ-11920</a>) </li>

    <li>Fixes multiflex css is linking to wrong location (<a href="https://issues.apache.org/jira/browse/OFBIZ-11977" target="_blank">OFBIZ-11977</a>) </li>

    <li>Fixes display/selection of unit of measure is broken/plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-11993" target="_blank">OFBIZ-11993</a>) </li>

    <li>Fixes issue with checking Authentication scheme (<a href="https://issues.apache.org/jira/browse/OFBIZ-11328" target="_blank">OFBIZ-11328</a>) </li>

    <li>Fixes removes unncessary check for userLogin claim 2. Modified code to return 401 instead of 403 in case JWT auth fails (<a href="https://issues.apache.org/jira/browse/OFBIZ-11328" target="_blank">OFBIZ-11328</a>) </li>

</ul>

<h2>Documentation</h2>

<h3>Framework</h3>

<ul>

    <li>Warns users about demo credentials in production (<a href="https://github.com/apache/ofbiz-framework/commit/2b2a43e4883d395e2044c2f9fc48ac6eb7f0109d" target="_blank">GitHub Link</a>) </li>

</ul>
