---
layout: post
title: Apache OFBiz News - September 2019
date: '2020-08-11T15:26:09+00:00'
permalink: apache-ofbiz-news-september-2019
---
<h2>Apache OFBiz News&nbsp;September&nbsp;2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have news about new PMC Member joining along with our usual list of features, improvements, and Statistics.</p> 
  <h2>New PMC Member</h2> 
  <p>The OFBiz PMC has invited Pranay Pandey to become a new member of the committee and we are glad to announce that he has accepted the nomination.
Please join us in welcoming and congratulating Pranay in his new role on the project, and also thanking him for all his contributions.</p> 
<h2>Best of both Groovy worlds: compile and on the fly</h2> 
  <p>The community discussed how OFBiz users can have benefits of using Groovy with compilation as well as on the fly. Mathieu proposed to move Groovy scripts to/src/main/groovy/ and after adding the necessary package names, a developer can have continuously built on any changes in Gradle source sets with "gradlew --continuous" command. Besides compilation, it will enhance the integration in your IDE, and add the possibility to re-use methods from<br>these script migrated to explicit classes.<br>Thank you Jacques for initiating the thread, Mathieu for the initial proposal on OFBIZ-10226 and to everyone who contributed to this productive discussion. </p><p>Refer following links for more information:</p><p>Tickets: <a href="https://issues.apache.org/jira/browse/OFBIZ-10226" target="_blank">OFBIZ-10226</a>, <a href="https://issues.apache.org/jira/browse/OFBIZ-11205" target="_blank">OFBIZ-11205</a><br></p><p>Thread: <a href="https://markmail.org/message/2grqu63yvfpvxzz6" target="_blank">Link</a><br></p>

  <h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:</p> 
  <ul> 
    <li><strong>JIRA Issue Tracker:</strong>&nbsp;48 issues were opened and 63 issues were closed ( 9 different people helped to close these issues)</li> 
    <li><strong>Code Change and Commit Activity:</strong> 
      <ul> 
        <li><strong>Framework:&nbsp;</strong>107 commits to the code base that changed 8200 lines of code ( 7 committers were active)</li> 
        <li><strong>Plugins:&nbsp;</strong>9 commits to the code base that changed 280 lines of code ( 3 committers were active)</li> 
      </ul> 
    </li> 
    <li><strong>Mailing Lists:</strong> 
      <ul>  
        <li><strong>Dev:&nbsp;</strong>117 emails sent and 28 topics discussed (38 different people)</li> 
        <li><strong>User:&nbsp;</strong>116 emails sent and 27 topics discussed (27 different people)&nbsp;</li> 
      </ul> 
    </li> 
  </ul> 
  <h2>New features and improvements</h2> 
  <p>Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

</p> 
  <h3>Framework</h3> 
  <ul> 
    <li>Improves log warning after "/images/" is found in path of request while request map is empty (<a href="https://issues.apache.org/jira/browse/OFBIZ-11152">OFBIZ-11152</a>) </li> 
    <li>Converts Shipment Crud simple service to entity-auto. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6996">OFBIZ-6996</a>) </li> 
    <li>Provides abillity to set flexible strings as Service parameter default-value attributes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11180">OFBIZ-11180</a>) </li> 
    <li>Changes current view-link requirement to allow use of entity-condition only in view-entities (<a href="https://issues.apache.org/jira/browse/OFBIZ-11179">OFBIZ-11179</a>) </li> 
    <li>Adds a mechanism to prevent the usage of EntitySyncRemove (<a href="https://issues.apache.org/jira/browse/OFBIZ-10008">OFBIZ-10008</a>) </li> 
    <li>Provides correct information history for Company Header in pdf document (<a href="https://issues.apache.org/jira/browse/OFBIZ-11177">OFBIZ-11177</a>) </li> 
    <li>Improves structure of entity PicklistStatusHistory (<a href="https://issues.apache.org/jira/browse/OFBIZ-11182">OFBIZ-11182</a>) </li> 
    <li>Manages itemStatusId and oldItemStatusId on entity-auto engine (<a href="https://issues.apache.org/jira/browse/OFBIZ-11183">OFBIZ-11183</a>) </li> 
    <li>Converts Picklist related CRUD services from simple to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-10636">OFBIZ-10636</a>) </li> 
    <li>Refactors permission model call (<a href="https://issues.apache.org/jira/browse/OFBIZ-7113">OFBIZ-7113</a>) </li> 
    <li>Removes duplicated label (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1866733">r1866733</a>) </li> 
    <li>Removes redundant type declarations (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1866786">r1866786</a>) </li> 
    <li>Improves ObjectInputStream class (<a href="https://issues.apache.org/jira/browse/OFBIZ-10837">OFBIZ-10837</a>)</li> 
    <li>Improves log warning after "d.png" is found in path of request while request map is empty (<a href="https://issues.apache.org/jira/browse/OFBIZ-11199">OFBIZ-11199</a>) </li> 
    <li>Improves performance of request "FindArInvoices" (<a href="https://issues.apache.org/jira/browse/OFBIZ-11198">OFBIZ-11198</a>) </li> 
    <li>Provides better use of "createFileWithNormalizedPath" in FrameImage and FileUtil (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1866924">r1866924</a>) </li> 
    <li>Removes redundant path normalization in FileUtil#getFile (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1866927">r1866927</a>) </li> 
    <li>Refactors boolean returns from methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-10725">OFBIZ-10725</a>) </li> 
    <li>Provides inclusion of properties and labels in build.gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161">OFBIZ-11161</a>) </li> 
    <li>Formats common.gradle by replacing tabs with spaces (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1866972">r1866972</a>) </li> 
    <li>Allows updating the ‘Config’ object of the server instance (<a href="https://issues.apache.org/jira/browse/OFBIZ-11203">OFBIZ-11203</a>) </li> 
    <li>Moves Groovy scripts from "/groovyScripts/" to "/src/main/groovy/" (<a href="https://issues.apache.org/jira/browse/OFBIZ-11205">OFBIZ-11205</a>) </li> 
    <li>Refactors ComponentLoaderConfig class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11192">OFBIZ-11192</a>) </li> 
    <li>Converts Config#ofbizHome and Config#logDir to a path (<a href="https://issues.apache.org/jira/browse/OFBIZ-11192">OFBIZ-11192</a>) </li> 
    <li>Uses java.nio.file API in "ComponentContainer" class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11192">OFBIZ-11192</a>) </li> 
    <li>Refactors "ComponentContainer#loadComponentFromConfig" (<a href="https://issues.apache.org/jira/browse/OFBIZ-11192">OFBIZ-11192</a>) </li> 
    <li>Adds a discussion feature in order detail view for following communication about the order (mail, phone etc.) (<a href="https://issues.apache.org/jira/browse/OFBIZ-11210">OFBIZ-11210</a>) </li> 
    <li>Provides non static method OrderReadHelper.getOrderItemAttributes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11208">OFBIZ-11208</a>) </li> 
    <li>Adds transaction timeout default properties for screen widgets (<a href="https://issues.apache.org/jira/browse/OFBIZ-11190">OFBIZ-11190</a>) </li> 
    <li>Refactors UelFunctions.java to remove error management via exception (<a href="https://issues.apache.org/jira/browse/OFBIZ-11213">OFBIZ-11213</a>) </li> 
    <li>Provides serbian CommonEntityLabels for geo entity. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11209">OFBIZ-11209</a>) </li> 
    <li>Provides missing foreign key relation for dataSourceId in SalesOpportunity entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-11218">OFBIZ-11218</a>) </li> 
    <li>Adds unit test cases in AutoAcctgInvoiceTests.groovy and OrderTests.groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-8936">OFBIZ-8936</a>) </li> 
    <li>Provides refactored create menu tab bar for employee (<a href="https://issues.apache.org/jira/browse/OFBIZ-8189">OFBIZ-8189</a>) </li> 
    <li>Provides refactored create menu tab bar for Segment (<a href="https://issues.apache.org/jira/browse/OFBIZ-8200">OFBIZ-8200</a>) </li> 
    <li>Provides refactored create menu tab bar for Facility (<a href="https://issues.apache.org/jira/browse/OFBIZ-8181">OFBIZ-8181</a>) </li> 
    <li>Corrects location of "New Requirement" button on requirements view (<a href="https://issues.apache.org/jira/browse/OFBIZ-7333">OFBIZ-7333</a>) </li> 
    <li>Provides refactored create menu tab bar for Employee Position (<a href="https://issues.apache.org/jira/browse/OFBIZ-8190">OFBIZ-8190</a>) </li> 
    <li>Provides refactored create menu tab bar for CompDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-8188">OFBIZ-8188</a>) </li> 
    <li>Provides refactored create menu tab bar for RoutingTask (<a href="https://issues.apache.org/jira/browse/OFBIZ-8192">OFBIZ-8192</a>) </li> 
    <li>Provides refactored create menu tab bar for Calendar (<a href="https://issues.apache.org/jira/browse/OFBIZ-8193">OFBIZ-8193</a>) </li> 
    <li>Provides refactored create menu tab bar for BOM (<a href="https://issues.apache.org/jira/browse/OFBIZ-8194">OFBIZ-8194</a>) </li> 
    <li>Provides refactored create menu tab bar for Leave (<a href="https://issues.apache.org/jira/browse/OFBIZ-8195">OFBIZ-8195</a>) </li> 
    <li>Provides refactored create menu tab bar for Data Source (<a href="https://issues.apache.org/jira/browse/OFBIZ-8196">OFBIZ-8196</a>) </li> 
    <li>Provides refactored create menu tab bar for Marketing Campaign (<a href="https://issues.apache.org/jira/browse/OFBIZ-8197">OFBIZ-8197</a>) </li> 
    <li>Provides refactored create menu tab bar for TrackingCode (<a href="https://issues.apache.org/jira/browse/OFBIZ-8199">OFBIZ-8199</a>) </li> 
    <li>Converts CommunicationEventServices#createCommunicationEvent from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-9992">OFBIZ-9992</a>) </li> 
    <li>Adds timezone support to recurring job temporal expressions (<a href="https://issues.apache.org/jira/browse/OFBIZ-11035">OFBIZ-11035</a>) </li> 
    <li>Orders service attributes in service "updateQuantityBreak" (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1866288">r1866288</a>) </li> 
    <li>Provides unit test case for service "createSimpleTextContentForInvoice" (<a href="https://issues.apache.org/jira/browse/OFBIZ-8936">OFBIZ-8936</a>) </li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Provides add-compare-screen with latest bootstrap framework (<a href="https://issues.apache.org/jira/browse/OFBIZ-10968">OFBIZ-10968</a>) </li> 
    <li>Provides small change in tsvn log template (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1867711">r1867711</a>)</li> 
    <li>Improves UI of ecommerce product page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10884">OFBIZ-10884</a>) </li> 
  </ul> 
  <h2>Bugfixes</h2>

Functional and technical bugfixes:


  
  
  
  
  
  
  
  
  <h3>Framework</h3> 
  <ul> 
    <li>Fixes: NotSerializableException after uploading images to an order (<a href="https://issues.apache.org/jira/browse/OFBIZ-11123">OFBIZ-11123</a>) </li> 
    <li>Fixes: Any ecommerce user has the ability to reset anothers password (including admin) via "Forget Your Password" (<a href="https://issues.apache.org/jira/browse/OFBIZ-4361">OFBIZ-4361</a>) </li> 
    <li>Fixes: Path Traversal in webtools/control/FetchLogs and ViewFile (<a href="https://issues.apache.org/jira/browse/OFBIZ-11196">OFBIZ-11196</a>) </li> 
    <li>Fixes default or empty catch block in Java and Groovy files (<a href="https://issues.apache.org/jira/browse/OFBIZ-8341">OFBIZ-8341</a>) </li> 
    <li>Fixes: Error in log when looking for parties at partymgr/control/main (<a href="https://issues.apache.org/jira/browse/OFBIZ-11201">OFBIZ-11201</a>) </li> 
    <li>Fixes: Send upload form with even-update-area doesn't work (<a href="https://issues.apache.org/jira/browse/OFBIZ-11207">OFBIZ-11207</a>) </li> 
    <li>Fixes multi modal opening (<a href="https://issues.apache.org/jira/browse/OFBIZ-11211">OFBIZ-11211</a>) </li> 
    <li>Fixes: Default option for ModelFormField.DateFindField doesn't work (<a href="https://issues.apache.org/jira/browse/OFBIZ-11212">OFBIZ-11212</a>) </li> 
    <li>Revertes: JSON entity data import and export utility (<a href="https://issues.apache.org/jira/browse/OFBIZ-10966">OFBIZ-10966</a>) <br>Implementation was not matching OFBiz code quality requirements. <br></li> 
    <li>Fixes parenthesis syntax error in groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11186">OFBIZ-11186</a>) </li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Fixes: Any ecommerce user has the ability to reset anothers password (including admin) via "Forget Your Password" (<a href="https://issues.apache.org/jira/browse/OFBIZ-4361">OFBIZ-4361</a>) </li> 
    <li>Fixes: Freemarker error on reviewProduct page (<a href="https://issues.apache.org/jira/browse/OFBIZ-11108">OFBIZ-11108</a>) </li> 
  </ul> 
  <h2>Documentation</h2> 
  <h3>Framework</h3> 
  <ul> 
    <li>Provides document how to store the JWT secret key (<a href="https://issues.apache.org/jira/browse/OFBIZ-10751">OFBIZ-10751</a>)</li> 
  </ul>
