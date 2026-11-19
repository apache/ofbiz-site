---
layout: post
title: 'Apache OFBiz News - April 2019 '
date: '2019-05-09T06:23:04+00:00'
permalink: apache-ofbiz-news-april-2019
---
<h2>Apache OFBiz News April 2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have more news about OFBiz build support with Java Open JDK &amp; Java 8, and a new Job prioritisation feature along with our usual list of features and improvements.</p> 
  <h2>Support with Java Open JDK and Java 8</h2> 
  <p>In February blog we have informed about community's decision to keep release 17.12 (unreleased) on Java 8, and 18.12 (unreleased) &amp; trunk be switched to Java 11 on OpenJDK. As per the recent discussion, the community has decided that 18.12 and trunk be kept on Java 8 only. <a href="https://adoptopenjdk.net/support.html">Adopt Open JDK 8 LTS</a> is supported at least until September 2023. The idea is to provide minimal Java version support. It will give users enough time to plan, test and migrate to newer Java version. Though the community will continue to make codebase forward compatible.</p> 
  <p>Please refer to <a href="https://markmail.org/message/swajtt3aaam7jq4m">Mail thread</a>.</p> 
  <p>Thanks, Jacques, Scott, Michael, Taher, Mathieu, Pierre, Jim and to everyone who gave their valuable inputs.&nbsp;&nbsp;</p> 
  <h2>Job prioritization</h2> 
  <p>Job prioritization allows specifying a priority for a job thus JobPoller queue them accordingly. It will help important jobs to be prioritized over normal jobs, and low priority jobs can be left until last. The feature is committed to trunk thus it will be available in future releases (after unreleased 18.12).</p> 
  <p>Please refer to&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10865">OFBIZ-10865</a>, and <a href="https://markmail.org/message/zitvvekscmwdznkb">Mail thread</a>&nbsp;to know more about its implementation.</p> 
  <p>Thank you so much, Scott Gray, for initiating and putting efforts in this direction, and to everyone who contributed to this effort</p> 
  <h2>Using code128 instead of code39 for barcode generation</h2> 
  <p>Currently, OFBiz uses code39 to generate barcodes but there are some limitations associated with it. It is only able to encrypt letters from A to Z, digits from 0 to 9 and an additional set of special characters – “. $ % + – / *”. To enhance the support for more characters in the barcode community decided on using code128 instead of code39. <br />Some of the advantages of using code128:</p> 
  <ol> 
    <li>It supports all the 128 ASCII symbols.</li> 
    <li>It is more concise and space-efficient.</li> 
    <li>It provides its users with higher degree of data security.</li> 
  </ol> 
  <p>Please refer to&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10896">OFBIZ-10896</a> and <a href="https://markmail.org/message/2unwynhirkjfradl">Mail thread</a>.</p> 
  <p>Thanks, Pawan Verma for initiating the discussion and to everyone who participated by providing their valuable inputs.</p> 
  <h2>Marital status to be managed with Enumeration entity</h2> 
  <p>Currently, marital status is managed as an indicator (Y/N) in Person entity. The community has decided to enhance it with support of more broader classifications namely Married, Widowed,&nbsp;Separated,&nbsp;Divorced and Single by&nbsp;making it derived from Enumeration entity.</p> 
  <p>Please refer to&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10921">OFBIZ-10921</a> and <a href="https://markmail.org/message/5b33qm3osy76if24">Mail thread</a>.</p> 
  <p>Thanks, Suraj Khurana for initiating the discussion and to everyone who participated by providing their valuable inputs.</p> 
  <p> </p> 
  <h2>OFBiz Statistics</h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:</p> 
  <ul> 
    <li><strong>JIRA Issue Tracker:</strong> 105 issues were opened and 71 issues were closed (15 different people helped to close these issues)</li> 
    <li><strong>Code Change and Commit Activity:</strong> 
      <ul> 
        <li><strong>Framework: </strong>150 commits to the code base that changed 11,098 lines of code (13 committers were active)</li> 
        <li><strong>Plugins: </strong>48 commits to the code base that changed 782 lines of code (5 committers were active)</li> 
      </ul> 
    </li> 
    <li><strong>Mailing Lists:</strong> 
      <ul> 
        <li><strong>Dev: </strong>219 emails sent and 41 topics discussed (36 different people)</li> 
        <li><strong>User: </strong>146 emails sent and 56 topics discussed (40 different people)</li> 
      </ul> 
    </li> 
  </ul> 
  <p> </p> 
  <h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:


  
  
  <h3>Framework</h3> 
  <ul> 
    <li>Adds the possibility to prioritize Jobs to count in which is more important than other.  (<a href="https://issues.apache.org/jira/browse/OFBIZ-10865">OFBIZ-10865</a>)</li> 
    <li>Adds the ability to edit/remove terms of an invoice. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9290">OFBIZ-9290</a>)</li> 
    <li>Removes unused private ‘UnsupportedClassConverter’ class. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10908">OFBIZ-10908</a>)</li> 
    <li>Removes redundant null checks. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10911">OFBIZ-10911</a>)</li> 
    <li>Removes ‘CreateTableCallable’ private class. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10912">OFBIZ-10912</a>)</li> 
    <li>Adds try-with-resources with File IO Objects. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9855">OFBIZ-9855</a>)</li> 
    <li>Adds french label for CommonImport and CommonImportExport. (<a href="http://svn.apache.org/viewvc?view=revision&amp;revision=1857335">r1857335</a>)</li> 
    <li>Improves ObjectInputStream class. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10837">OFBIZ-10837</a>)</li> 
    <li>Removes ecommerce links from applications. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9241">OFBIZ-9241</a>)</li> 
    <li>Converts createMarketingCampaignRole service to entity-auto service. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9551">OFBIZ-9551</a>)</li> 
    <li>Adds missing permission check for MarketingCampaignRole update/expire/delete service. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1857547">r1857547</a>)</li> 
    <li>Updates build.gradle to the latest dependencies. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10213">OFBIZ-10213</a>)</li> 
    <li>Refactors DBCPConnectionFactory. Method setAutoCommitOnReturn is used instead of deprecated method setEnableAutoCommitOnReturn. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10935">OFBIZ-10935</a>)</li> 
    <li>Removes in constructor redundant specification of type arguments. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10937">OFBIZ-10937</a>)</li> 
    <li>Removes unnecessary declared exceptions for ‘ContainerException’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10938">OFBIZ-10938</a>)</li> 
    <li>Improves Check Map equality in ‘MultivaluedMapContextTests’. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1857958">r1857958</a>)</li> 
    <li>Improves the use of ‘contains’ and ‘containsInAnyOrder’ matcher when possible. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10941">OFBIZ-10941</a>)</li> 
    <li>Removes unnecessary semicolons from Java code. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10936">OFBIZ-10936</a>)</li> 
    <li>Adds ability to change ship group destinations on order view page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-5401">OFBIZ-5401</a>)</li> 
    <li>Uses ObjectType.simpleTypeConvert for all amount variables to make sure proper type conversion in PaymentGatewayServices.java. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10811">OFBIZ-10811</a>)</li> 
    <li>Improves order of showing glAccountIds in AddFinAccountTrans based on accountCode instead of glAccountId. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10846">OFBIZ-10846</a>)</li> 
    <li>Improves the appear of submit button. It will not be displaing when there is no item present over Quote Prices Screen. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10627">OFBIZ-10627</a>)</li> 
    <li>Improves barcode generation. Uses code128 instead of code39. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10896">OFBIZ-10896</a>)</li> 
    <li>Adds unit test case for service 'createInvoiceContent'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8932">OFBIZ-8932</a>)</li> 
    <li>Improves marital status in Person entity. Now there are more selectable values than 'Y' and 'N'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10921">OFBIZ-10921</a>)</li> 
    <li>Adds unit test case for service 'setPaymentStatus'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9084">OFBIZ-9084</a>)</li> 
    <li>Adds support for Inventory (Supply) Allocation Planning. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10518">OFBIZ-10518</a>)</li> 
    <li>Adds unit test case for service 'quickSendPayment'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9086">OFBIZ-9086</a>)</li> 
    <li>Uses &quot;Create&quot; instead of &quot;Create New&quot; on various screens of all components. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9905">OFBIZ-9905</a>)</li> 
    <li>Removes unused imports. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1857897">r1857897</a>)</li> 
    <li>Removes unused local variables. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1858293">r1858293</a>)</li> 
    <li>Removes redundant specification of type arguments. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1858294">r1858294</a>)</li> 
    <li>Improves the use of ‘@Override’ annotation. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10939">OFBIZ-10939</a>)</li> 
    <li>Adds date control to 'Product Configuration Options'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10950">OFBIZ-10950</a>)</li> 
    <li>Moves display of page title 'Party' accounting screens to location above (action) menu(s). (<a href="https://issues.apache.org/jira/browse/OFBIZ-10949">OFBIZ-10949</a>)</li> 
    <li>Improves the view of 'createPriceCond'. Similar values were reflected twice on Add Action Type dropdown in Pricerule. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10660">OFBIZ-10660</a>)</li> 
    <li>Improves financial account container structure in accounting. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10813">OFBIZ-10813</a>)</li> 
    <li>Improves german translations for the hr component. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10698">OFBIZ-10698</a>)</li> 
    <li>Removes unused type parameters. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10909">OFBIZ-10909</a>)</li> 
    <li>Removes unused ‘java.util.TreeMap’ import. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1857083">r1857083</a>)</li> 
    <li>Removes redundant interface declaration. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10910">OFBIZ-10910</a>)</li> 
    <li>Adds converter for StringWrapper and StringBuffer. (<a href="https://issues.apache.org/jira/browse/OFBIZ-5028">OFBIZ-5028</a>)</li> 
    <li>Cleans deprecated code after release 18.12 creation. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10761">OFBIZ-10761</a>)</li> 
    <li>Updates Tomcat to 9.0.18 due to CVE-2019-0232. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10920">OFBIZ-10920</a>)</li> 
    <li>Updates an order linked to an other order lost relation applications/order/. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10926">OFBIZ-10926</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Removes unnecessary semicolons from Java code. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10936">OFBIZ-10936</a>)</li> 
    <li>Improves barcode generation. Uses code128 instead of code39. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10896">OFBIZ-10896</a>)</li> 
    <li>Renames custom component for SMS gateway integration. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10973">OFBIZ-10973</a>)</li> 
    <li>Updates Tomcat to 9.0.18 due to CVE-2019-0232. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10920">OFBIZ-10920</a>)</li> 
  </ul> 
  <h2>Bugfixes</h2>

Functional and technical bugfixes:


  
  
  <h3>Framework</h3> 
  <ul> 
    <li>Fixes: Insertion order of ‘LinkedHashMap’ is not preserved by ‘MapContext’. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10933">OFBIZ-10933</a>)</li> 
    <li>Fixes: When adding an item to shopping cart, orderItemAttributes gets lost. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10906">OFBIZ-10906</a>)</li> 
    <li>Removes Raw type cast warning in ‘ObjectType’. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1857082">r1857082</a>)</li> 
    <li>Fixes: Terminal automatically scrolls down on never ending tasks with the new console. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10915">OFBIZ-10915</a>)</li> 
    <li>Fixes: Error message is displayed while click on create new quotes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10882">OFBIZ-10882</a>)</li> 
    <li>Fixes: Quick Add button for shopping list on Orderentry screen is not working. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9908">OFBIZ-9908</a>)</li> 
    <li>Fixes: Temporal expressions sometimes incorrectly calculate next occurrence. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10875">OFBIZ-10875</a>)</li> 
    <li>Fixes: ‘./gradlew generateOfbizDocumentation’ fails with Gradle 5.0. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10693">OFBIZ-10693</a>) </li> 
    <li>Fixes: Escape potential NPE when call by DataEvents.serverImage by mocked request. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1857456">r1857456</a>)</li> 
    <li>Fixes: Wrong permission check in ProductScreens#FindProduct. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10925">OFBIZ-10925</a>)</li> 
    <li>Fixes: Duplicate a ShoppingCartItem didn't propage OrderItemAttributes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10929">OFBIZ-10929</a>)</li> 
    <li>Stores can now modified at ofbizsetup/control/updateProductStore. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10930">OFBIZ-10930</a>)</li> 
    <li>Fixes: Updating an OrderItem loses supplierProductId. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10932">OFBIZ-10932</a>)</li> 
    <li>Fixes: If the picklist cancelation process failed, the picklist item shouldn't be marked as cancel. (<a href="https://issues.apache.org/jira/browse/OFBIZ-4690">OFBIZ-4690</a>)</li> 
    <li>Fixes: User depersonation do not clean out impersonated user session. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10942">OFBIZ-10942</a>)</li> 
    <li>Fixes: Parameters are not available to the next response type when form of enctype=multipart/form-data type is submitted. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10833">OFBIZ-10833</a>)</li> 
    <li>Fixes: Customer Party getting set as 'organizationPartyId' in one the Account transaction for Customer return invoice. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10856">OFBIZ-10856</a>)</li> 
    <li>Fixes: Unable to add survey product to cart in order entry form. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10735">OFBIZ-10735</a>)</li> 
    <li>Fixes: Poor display of entities in text input field for Product Name. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10356">OFBIZ-10356</a>)</li> 
    <li>Fixes: createProductFeature service ignors passed productFeatureId parameter. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10958">OFBIZ-10958</a>)</li> 
    <li>Fixes: Failed registration for virtual hosts with similar mount points. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10765">OFBIZ-10765</a>)</li> 
    <li>Fixes: OWASP sanitizer breaks proper rendering of HTML code. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10187">OFBIZ-10187</a>) </li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Fixes: Amount field is editable at Product Detail Page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10663">OFBIZ-10663</a>)</li> 
    <li>Fixes: UI issue on ecommerce main page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10849">OFBIZ-10849</a>)</li> 
    <li>Fixes: Error message is displayed in shopping cart when click on recalculate cart link. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10852">OFBIZ-10852</a>)</li> 
    <li>Fixes: Unable to create new quote from cart at eCommerce store. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10886">OFBIZ-10886</a>)</li> 
    <li>Fixes: Error message is displayed while click on create new quotes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10882">OFBIZ-10882</a>)</li> 
    <li>Ensures html verbosity is following general setup. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10940">OFBIZ-10940</a>)</li> 
    <li>Fixes: Can't set (expected) start and end date of project when creating a project. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10927">OFBIZ-10927</a>)</li> 
    <li>Fixes: FindTask does not allow for all statuses possible to be selected. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10913">OFBIZ-10913</a>)</li> 
    <li>Fixes: Shortkeys missing on WebPOS. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10961">OFBIZ-10961</a>)</li> 
    <li>Fixes: Remove link is not working in shopping list. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10967">OFBIZ-10967</a>)</li> 
  </ul> 
  <h2>Documentation</h2> 
  <h3>Framework</h3> 
  <ul> 
    <li>Adds adoptopenjdk links to README.adoc. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10757">OFBIZ-10757</a>)</li> 
  </ul>
