---
layout: post
title: Apache OFBiz News - October 2019
date: '2020-08-11T15:26:47+00:00'
permalink: apache-ofbiz-news-oktober-2019
---
<p> </p> 
  <p> </p> 
  <h2>Apache OFBiz News&nbsp;October 2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have news about Groovy upgrade and Git migration along with our usual list of features, improvements and Statistics.</p><h2>Groovy upgraded to 2.5.8<br></h2><p>OFBiz has been upgraded from <span class="subject">Groovy 2.4.16 to its latest stable release 2.5.8 which comes with lots of bug fixes, improvements, and new features.</span></p><p><span class="subject">Thank you Mathieu, Gil Portenseigne and to everyone who contributed to this effort<br></span> </p><p>Refer following links for more information:</p>
<p>Documents: <a href="http://groovy-lang.org/changelogs/changelog-2.5.8.html" target="_blank">Changelog for Groovy 2.5.8</a><br></p>
<p>Ticket: <a href="https://issues.apache.org/jira/browse/OFBIZ-11263" target="_blank">OFBIZ-11263</a><br></p>
<p>Thread: <a href="https://markmail.org/message/nu2blzz5pmcvqtew" target="_blank">Link</a><br></p>

   
<h2>Migration to Git</h2> 
  <p>In previous blogs, we informed about the community's plans to adopt the Git version control system for source code management for easier collaboration. The community further moved ahead with it, the entire process has been documented and some initial steps has been taken towards it. 
  <br>Thank you Mathieu, Swapnil M Mane, Jacques, Deepak Dixit, and to everyone who contributed to this effort. </p>
<p>Refer following links for more information:</p>
<p>Documents: <a href="https://cwiki.apache.org/confluence/x/Xg-HBg" target="_blank"> Migration from Subversion (SVN) to Git</a><br></p>
<p>Thread: <a href="https://markmail.org/message/tkw3yalf2urjf6nc" target="_blank">Link</a><br></p>

  <h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:</p> 
  <ul> 
    <li><strong>JIRA Issue Tracker:</strong>&nbsp;38 issues were opened and 58 issues were closed ( 9 different people helped to close these issues)</li> 
    <li><strong>Code Change and Commit Activity:</strong> 
      <ul> 
        <li><strong>Framework:&nbsp;</strong>135 commits to the code base that changed 5867 lines of code ( 7 committers were active)</li> 
        <li><strong>Plugins:&nbsp;</strong>11 commits to the code base that changed 141 lines of code (1 committers were active)</li> 
      </ul> 
    </li> 
    <li><strong>Mailing Lists:</strong> 
      <ul> 
        <li><strong>Dev:&nbsp;</strong>111 emails sent and 24 topics discussed (25 different people)</li> 
        <li><strong>User:&nbsp;</strong>77 emails sent and 26 topics discussed (34 different people)&nbsp;</li> 
      </ul> 
    </li> 
  </ul> 
  <h2><span style="letter-spacing: -0.018em;">New features and improvements</span></h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring: 
  
  
  
  
  
  
  
  
  <h3>Framework</h3> 
  <ul> 
    <li>Adds unit test case for service - CheckCreateStockRequirementAtp (<a href="https://issues.apache.org/jira/browse/OFBIZ-8938">OFBIZ-8938</a>) </li> 
    <li>Adds unit test case for service - AssociatedRequirementWithRequestItem (<a href="https://issues.apache.org/jira/browse/OFBIZ-8933">OFBIZ-8933</a>) </li> 
    <li>Improves structure of Javadocs (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1867875">r1867875</a>) </li> 
    <li>Adds backward compatibility for inputParamEnumId in promotion management (<a href="https://issues.apache.org/jira/browse/OFBIZ-11105">OFBIZ-11105</a>) </li> 
    <li>Adds unit test case for service - testSendOrderChangeNotification (<a href="https://issues.apache.org/jira/browse/OFBIZ-8811">OFBIZ-8811</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-9647">OFBIZ-9647</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-9671">OFBIZ-9671</a>)</li> 
    <li>Converts testSendOrderChangeNotification to Groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11233">OFBIZ-11233</a>) </li> 
    <li>Adds unit test case for service - SendOrderBackorderNotification (<a href="https://issues.apache.org/jira/browse/OFBIZ-8810">OFBIZ-8810</a>) </li> 
    <li>Adds unit test case for service - sendOrderPayRetryNotification (<a href="https://issues.apache.org/jira/browse/OFBIZ-8813">OFBIZ-8813</a>) </li> 
    <li>Adds unit test case for service - sendOrderCompleteNotification (<a href="https://issues.apache.org/jira/browse/OFBIZ-8812">OFBIZ-8812</a>) </li> 
    <li>Improves UI of part manager by showing message 'At least one phone number is required below' as tooltip (<a href="https://issues.apache.org/jira/browse/OFBIZ-11113">OFBIZ-11113</a>) </li> 
    <li>Uses website entity to generate links on email content (<a href="https://issues.apache.org/jira/browse/OFBIZ-4361">OFBIZ-4361</a>) </li> 
    <li>Adds missing generic types (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1867984">r1867984</a>) </li> 
    <li>Removes unused imports (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1867985">r1867985</a>) </li> 
    <li>Removes unnecessary semicolon (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1867986">r1867986</a>) </li> 
    <li>Replaces 'wget' with 'Invoke-WebRequest' in gradle wrapper initiation file (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1867998">r1867998</a>) </li> 
    <li>Rewrites 'Classpath' class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11237">OFBIZ-11237</a>) </li> 
    <li>Changes type of component config's attribute 'rootLocation' from Strig to Path at many places (<a href="https://issues.apache.org/jira/browse/OFBIZ-11192">OFBIZ-11192</a>) </li> 
    <li>Specifies that the component dependencies are never 'null' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11238">OFBIZ-11238</a>) </li> 
    <li>Refactors 'ComponentConfig.ClasspathInfo' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11192">OFBIZ-11192</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11238">OFBIZ-11238</a>) </li> 
    <li>Improves UI of order status section on orderview screen of order items (<a href="https://issues.apache.org/jira/browse/OFBIZ-11106">OFBIZ-11106</a>) </li> 
    <li>Adds unit test case for service - CheckCreateOrderRequirement (<a href="https://issues.apache.org/jira/browse/OFBIZ-8935">OFBIZ-8935</a>) </li> 
    <li>Adds unit test case for service - ProcessCreditReturn (<a href="https://issues.apache.org/jira/browse/OFBIZ-8863">OFBIZ-8863</a>) </li> 
    <li>Adds unit test case for service - ProcessCrossShipReplacementReturn (<a href="https://issues.apache.org/jira/browse/OFBIZ-8864">OFBIZ-8864</a>) </li> 
    <li>Adds unit test case for service - ProcessRefundImmediatelyReturn (<a href="https://issues.apache.org/jira/browse/OFBIZ-8865">OFBIZ-8865</a>) </li> 
    <li>Adds unit test case for service - GetReturnItemInitialCost (<a href="https://issues.apache.org/jira/browse/OFBIZ-8862">OFBIZ-8862</a>) </li> 
    <li>Adds unit test case for service - ProcessRefundReturn (<a href="https://issues.apache.org/jira/browse/OFBIZ-8867">OFBIZ-8867</a>) </li> 
    <li>Adds unit test case for service - AutoAssignRequirementToSupplier (<a href="https://issues.apache.org/jira/browse/OFBIZ-8934">OFBIZ-8934</a>) </li> 
    <li>v test case for service - createPaymentContent (<a href="https://issues.apache.org/jira/browse/OFBIZ-9093">OFBIZ-9093</a>) </li> 
    <li>Refactors OrderTests.groovy and separates order and return test services (<a href="https://issues.apache.org/jira/browse/OFBIZ-11239">OFBIZ-11239</a>) </li> 
    <li>Improves the job search view with a better limit and a default sort (<a href="https://issues.apache.org/jira/browse/OFBIZ-11241">OFBIZ-11241</a>) </li> 
    <li>Converts AutoAcctgAdminTests Unit Test from XML to Groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11243">OFBIZ-11243</a>) </li> 
    <li>Updates build.gradle to the latest dependencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-11245">OFBIZ-11245</a>) </li> 
    <li>Adds a discussion feature in order detail view for following communication about the order (mail, phone etc.) (<a href="https://issues.apache.org/jira/browse/OFBIZ-11210">OFBIZ-11210</a>) </li> 
    <li>Adds unit test case for service - sendOrderConfirmation (<a href="https://issues.apache.org/jira/browse/OFBIZ-8507">OFBIZ-8507</a>) </li> 
    <li>Adds unit test case for service - ProcessRefundReturnForReplacement (<a href="https://issues.apache.org/jira/browse/OFBIZ-8868">OFBIZ-8868</a>) </li> 
    <li>Adds unit test case for service - ProcessRepairReplacementReturn (<a href="https://issues.apache.org/jira/browse/OFBIZ-8869">OFBIZ-8869</a>) </li> 
    <li>Improves grammar of an info message while initialize gradle wrapper (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1868424">r1868424</a>) </li> 
    <li>Adds unit test case for service - createAcctgTransEntry (<a href="https://issues.apache.org/jira/browse/OFBIZ-9004">OFBIZ-9004</a>) </li> 
    <li>Provids utilities for integration tests (<a href="https://issues.apache.org/jira/browse/OFBIZ-11247">OFBIZ-11247</a>) </li> 
    <li>Upgrades Tomcat from 9.0.26 to 9.0.27 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11249">OFBIZ-11249</a>) </li> 
    <li>Converts AutoAcctgAgreementTests unit test from XML to Groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11248">OFBIZ-11248</a>) </li> 
    <li>Removes unused methods related to properties in UtilProperties and EntityUtilProperties (<a href="https://issues.apache.org/jira/browse/OFBIZ-11254">OFBIZ-11254</a>) </li> 
    <li>Uses 'checkstyle' linting tool in build.gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-11251">OFBIZ-11251</a>) </li> 
    <li>Refactors 'ContainerConfig' class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11256">OFBIZ-11256</a>) </li> 
    <li>Provides handling of tenants in XmlRpcEventHandler (<a href="https://issues.apache.org/jira/browse/OFBIZ-10284">OFBIZ-10284</a>) </li> 
    <li>Adds missing ASL2 header in checkstyle.xml (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1868619">r1868619</a>) </li> 
    <li>Adds 'PropertyChildren' interface (<a href="https://issues.apache.org/jira/browse/OFBIZ-11256">OFBIZ-11256</a>) </li> 
    <li>Allows deprecated public fields (<a href="https://issues.apache.org/jira/browse/OFBIZ-11256">OFBIZ-11256</a>) </li> 
    <li>Avoids unecessary breakage in 'ContainerConfig' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11256">OFBIZ-11256</a>) </li> 
    <li>Marks 'ContainerConfig#configurations' as final (<a href="https://issues.apache.org/jira/browse/OFBIZ-11256">OFBIZ-11256</a>) </li> 
    <li>Refactors 'ContainerConfig#getConfigurations' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11256">OFBIZ-11256</a>) </li> 
    <li>Moves APACHE2_HEADER_FOR_XML to 'src/main/resources' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11161">OFBIZ-11161</a>) </li> 
    <li>Improves UI by notifing user after successfully created shopping list in ecommerce component (<a href="https://issues.apache.org/jira/browse/OFBIZ-9522">OFBIZ-9522</a>) </li> 
    <li>Improves UI of managing EmpPositionTypes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11045">OFBIZ-11045</a>) </li> 
    <li>Removes unwanted error log by 'ServiceSemaphore' waiting process (<a href="https://issues.apache.org/jira/browse/OFBIZ-11204">OFBIZ-11204</a>) </li> 
    <li>Improves Lint 'ControlServlet' partially (<a href="https://issues.apache.org/jira/browse/OFBIZ-11007">OFBIZ-11007</a>) </li> 
    <li>Provides handling of URI templates in request maps (<a href="https://issues.apache.org/jira/browse/OFBIZ-11007">OFBIZ-11007</a>) </li> 
    <li>Refactors 'UtilObject#getObjectException' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11261">OFBIZ-11261</a>) </li> 
    <li>Removes use of deprecated 'javax.security.cert.X509Certificate' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11262">OFBIZ-11262</a>) </li> 
    <li>Removes use of deprecated 'Proxyclass#getConstructor' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11262">OFBIZ-11262</a>) </li> 
    <li>Removes use of deprecated 'Class#newInstance' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11262">OFBIZ-11262</a>) </li> 
    <li>Removes 'ServicePermissionTests#getUserLogin' and sets 'OFBizTestCase#getLogin' to protected (<a href="https://issues.apache.org/jira/browse/OFBIZ-11262">OFBIZ-11262</a>) </li> 
    <li>Defines specific 'maxErrors' for main/test source sets (<a href="https://issues.apache.org/jira/browse/OFBIZ-11262">OFBIZ-11262</a>) </li> 
    <li>Turns 'UtilObjectTests' into a unit test class (<a href="https://issues.apache.org/jira/browse/OFBIZ-11067">OFBIZ-11067</a>) </li> 
    <li>Merges 'UtilObjectUnitTest' into 'UtilObjectTests' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11067">OFBIZ-11067</a>) </li> 
    <li>Formats Lint unit tests (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1869037">r1869037</a>) </li> 
    <li>Adds a specific TortoiseSVN commit log header (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1869100">r1869100</a>) </li> 
    <li>Upgrades Groovy 2.4.16 to 2.5.8 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11263">OFBIZ-11263</a>) </li> 
    <li>Imports 'ComponentDef' and 'DependsOnInfo' inner-classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11264">OFBIZ-11264</a>) </li> 
    <li>Removes unnecessary 'throws' declarations (<a href="https://issues.apache.org/jira/browse/OFBIZ-11264">OFBIZ-11264</a>) </li> 
    <li>Improves construction of component classpaths (<a href="https://issues.apache.org/jira/browse/OFBIZ-11264">OFBIZ-11264</a>) </li> 
    <li>Rewrites 'ComponentContainer#loadComponentsInDirectory' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11264">OFBIZ-11264</a>) </li> 
    <li>Adds 'ComponentConfig#toString' to ease debugging (<a href="https://issues.apache.org/jira/browse/OFBIZ-11264">OFBIZ-11264</a>) </li> 
    <li>Turns 'DependsOnInfo' into a String (<a href="https://issues.apache.org/jira/browse/OFBIZ-11264">OFBIZ-11264</a>) </li> 
    <li>Updates checkstyle's max error count (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1869186">r1869186</a>) </li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Changes sequenceId of Enummeration 'POS Channel' (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1868023">r1868023</a>) </li> 
    <li>Updates build.gradle to the latest dependencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-11245">OFBIZ-11245</a>) </li> 
    <li>Upgrades Tomcat from 9.0.26 to 9.0.27 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11249">OFBIZ-11249</a>) </li> 
    <li>Adds a specific TortoiseSVN commit log header (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1869100">r1869100</a>) </li> 
    <li>Replaces 'HTTP' with 'HTTPS' in some data (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1869102">r1869102</a>) </li> 
  </ul> 
  <h2>Bugfixes</h2>

Functional and technical bugfixes:


  
  
  
  
  
  
  
  
  <h3>Framework</h3> 
  <ul> 
    <li>Fixes: Error in sales by store report not working (<a href="https://issues.apache.org/jira/browse/OFBIZ-11119">OFBIZ-11119</a>) </li> 
    <li>Fixes: Check run payment(A/P) transactions not getting available for reconciliation (<a href="https://issues.apache.org/jira/browse/OFBIZ-10796">OFBIZ-10796</a>) </li> 
    <li>Fixes: NotSerializableException after uploading images to an order (<a href="https://issues.apache.org/jira/browse/OFBIZ-11123">OFBIZ-11123</a>) </li> 
    <li>Merges UrlRegexpTransform and OfbizUrlTransform classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11229">OFBIZ-11229</a>) </li> 
    <li>Fixes: EditExample always update status, because current Status is not shown (<a href="https://issues.apache.org/jira/browse/OFBIZ-11230">OFBIZ-11230</a>) </li> 
    <li>Fixes: FTL error for purchase order with Bulk Item Type (<a href="https://issues.apache.org/jira/browse/OFBIZ-11252">OFBIZ-11252</a>) </li> 
    <li>Lowers the log level in UtilProperties#getPropertyNumber to inform when a property number is empty (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1868580">r1868580</a>) </li> 
    <li>Lowers the log level of genericBasePermissionCheck (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1868581">r1868581</a>) </li> 
    <li>Moves OrderNotificationTests.groovy from order to ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-11255">OFBIZ-11255</a>) </li> 
    <li>Fixes multi modal opening (<a href="https://issues.apache.org/jira/browse/OFBIZ-11211">OFBIZ-11211</a>) </li> 
    <li>Formats 'XmlRpcEventHandler' (<a href="https://issues.apache.org/jira/browse/OFBIZ-10284">OFBIZ-10284</a>) </li> 
    <li>Makes 'javadoc' build work with recent Java (<a href="https://issues.apache.org/jira/browse/OFBIZ-11257">OFBIZ-11257</a>) </li> 
    <li>Fixes regression introduced in revision 1867409 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11192">OFBIZ-11192</a>) </li> 
    <li>Uses 'ConcurrentHashMap' to avoid ConcurrentModificationException (<a href="https://issues.apache.org/jira/browse/OFBIZ-11258">OFBIZ-11258</a>) </li> 
    <li>Provides abillity to handle a whitelist of serializable classes from properties (<a href="https://issues.apache.org/jira/browse/OFBIZ-11261">OFBIZ-11261</a>) </li> 
    <li>Fixes javadoc build (<a href="https://issues.apache.org/jira/browse/OFBIZ-11007">OFBIZ-11007</a>) </li> 
    <li>Fixes: SOAPService does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-11259">OFBIZ-11259</a>) </li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Fixes: Issue with 'User name filed' while creating the new user (<a href="https://issues.apache.org/jira/browse/OFBIZ-11226">OFBIZ-11226</a>) </li> 
    <li>Fixes: EditExample always update status, because current Status is not shown (<a href="https://issues.apache.org/jira/browse/OFBIZ-11230">OFBIZ-11230</a>) </li> 
    <li>Moves OrderNotificationTests.groovy from order to ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-11255">OFBIZ-11255</a>) </li> 
  </ul>
