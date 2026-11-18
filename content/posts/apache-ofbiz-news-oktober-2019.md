---
layout: post
title: Apache OFBiz News - October 2019
date: '2020-08-11T15:26:47+00:00'
permalink: apache-ofbiz-news-oktober-2019
---
<p> </p>

  <p> </p>

## Apache OFBiz News&nbsp;October 2019

Welcome to our regular monthly round-up of OFBiz news. This month we have news about Groovy upgrade and Git migration along with our usual list of features, improvements and Statistics.

## Groovy upgraded to 2.5.8<br>

OFBiz has been upgraded from <span class="subject">Groovy 2.4.16 to its latest stable release 2.5.8 which comes with lots of bug fixes, improvements, and new features.</span>

<span class="subject">Thank you Mathieu, Gil Portenseigne and to everyone who contributed to this effort<br></span>

Refer following links for more information:

Documents: <a href="http://groovy-lang.org/changelogs/changelog-2.5.8.html" target="_blank">Changelog for Groovy 2.5.8</a><br>

Ticket: <a href="https://issues.apache.org/jira/browse/OFBIZ-11263" target="_blank">OFBIZ-11263</a><br>

Thread: <a href="https://markmail.org/message/nu2blzz5pmcvqtew" target="_blank">Link</a><br>

## Migration to Git

In previous blogs, we informed about the community's plans to adopt the Git version control system for source code management for easier collaboration. The community further moved ahead with it, the entire process has been documented and some initial steps has been taken towards it. <br>Thank you Mathieu, Swapnil M Mane, Jacques, Deepak Dixit, and to everyone who contributed to this effort.

Refer following links for more information:

Documents: <a href="https://cwiki.apache.org/confluence/x/Xg-HBg" target="_blank">Migration from Subversion (SVN) to Git</a><br>

Thread: <a href="https://markmail.org/message/tkw3yalf2urjf6nc" target="_blank">Link</a><br>

## <span style="letter-spacing: -0.018em;">OFBiz Statistics</span>

Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:**&nbsp;38 issues were opened and 58 issues were closed ( 9 different people helped to close these issues)
- **Code Change and Commit Activity:**
  - **Framework:** 135 commits to the code base that changed 5867 lines of code ( 7 committers were active)
  - **Plugins:** 11 commits to the code base that changed 141 lines of code (1 committers were active)
- **Mailing Lists:**
  - **Dev:** 111 emails sent and 24 topics discussed (25 different people)
  - **User:** 77 emails sent and 26 topics discussed (34 different people)&nbsp;

## <span style="letter-spacing: -0.018em;">New features and improvements</span>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Adds unit test case for service - CheckCreateStockRequirementAtp ([OFBIZ-8938](https://issues.apache.org/jira/browse/OFBIZ-8938))
- Adds unit test case for service - AssociatedRequirementWithRequestItem ([OFBIZ-8933](https://issues.apache.org/jira/browse/OFBIZ-8933))
- Improves structure of Javadocs ([r1867875](https://svn.apache.org/viewvc?view=revision&revision=1867875))
- Adds backward compatibility for inputParamEnumId in promotion management ([OFBIZ-11105](https://issues.apache.org/jira/browse/OFBIZ-11105))
- Adds unit test case for service - testSendOrderChangeNotification ([OFBIZ-8811](https://issues.apache.org/jira/browse/OFBIZ-8811))([OFBIZ-9647](https://issues.apache.org/jira/browse/OFBIZ-9647))([OFBIZ-9671](https://issues.apache.org/jira/browse/OFBIZ-9671))
- Converts testSendOrderChangeNotification to Groovy ([OFBIZ-11233](https://issues.apache.org/jira/browse/OFBIZ-11233))
- Adds unit test case for service - SendOrderBackorderNotification ([OFBIZ-8810](https://issues.apache.org/jira/browse/OFBIZ-8810))
- Adds unit test case for service - sendOrderPayRetryNotification ([OFBIZ-8813](https://issues.apache.org/jira/browse/OFBIZ-8813))
- Adds unit test case for service - sendOrderCompleteNotification ([OFBIZ-8812](https://issues.apache.org/jira/browse/OFBIZ-8812))
- Improves UI of part manager by showing message 'At least one phone number is required below' as tooltip ([OFBIZ-11113](https://issues.apache.org/jira/browse/OFBIZ-11113))
- Uses website entity to generate links on email content ([OFBIZ-4361](https://issues.apache.org/jira/browse/OFBIZ-4361))
- Adds missing generic types ([r1867984](https://svn.apache.org/viewvc?view=revision&revision=1867984))
- Removes unused imports ([r1867985](https://svn.apache.org/viewvc?view=revision&revision=1867985))
- Removes unnecessary semicolon ([r1867986](https://svn.apache.org/viewvc?view=revision&revision=1867986))
- Replaces 'wget' with 'Invoke-WebRequest' in gradle wrapper initiation file ([r1867998](https://svn.apache.org/viewvc?view=revision&revision=1867998))
- Rewrites 'Classpath' class ([OFBIZ-11237](https://issues.apache.org/jira/browse/OFBIZ-11237))
- Changes type of component config's attribute 'rootLocation' from Strig to Path at many places ([OFBIZ-11192](https://issues.apache.org/jira/browse/OFBIZ-11192))
- Specifies that the component dependencies are never 'null' ([OFBIZ-11238](https://issues.apache.org/jira/browse/OFBIZ-11238))
- Refactors 'ComponentConfig.ClasspathInfo' ([OFBIZ-11192](https://issues.apache.org/jira/browse/OFBIZ-11192))([OFBIZ-11238](https://issues.apache.org/jira/browse/OFBIZ-11238))
- Improves UI of order status section on orderview screen of order items ([OFBIZ-11106](https://issues.apache.org/jira/browse/OFBIZ-11106))
- Adds unit test case for service - CheckCreateOrderRequirement ([OFBIZ-8935](https://issues.apache.org/jira/browse/OFBIZ-8935))
- Adds unit test case for service - ProcessCreditReturn ([OFBIZ-8863](https://issues.apache.org/jira/browse/OFBIZ-8863))
- Adds unit test case for service - ProcessCrossShipReplacementReturn ([OFBIZ-8864](https://issues.apache.org/jira/browse/OFBIZ-8864))
- Adds unit test case for service - ProcessRefundImmediatelyReturn ([OFBIZ-8865](https://issues.apache.org/jira/browse/OFBIZ-8865))
- Adds unit test case for service - GetReturnItemInitialCost ([OFBIZ-8862](https://issues.apache.org/jira/browse/OFBIZ-8862))
- Adds unit test case for service - ProcessRefundReturn ([OFBIZ-8867](https://issues.apache.org/jira/browse/OFBIZ-8867))
- Adds unit test case for service - AutoAssignRequirementToSupplier ([OFBIZ-8934](https://issues.apache.org/jira/browse/OFBIZ-8934))
- v test case for service - createPaymentContent ([OFBIZ-9093](https://issues.apache.org/jira/browse/OFBIZ-9093))
- Refactors OrderTests.groovy and separates order and return test services ([OFBIZ-11239](https://issues.apache.org/jira/browse/OFBIZ-11239))
- Improves the job search view with a better limit and a default sort ([OFBIZ-11241](https://issues.apache.org/jira/browse/OFBIZ-11241))
- Converts AutoAcctgAdminTests Unit Test from XML to Groovy ([OFBIZ-11243](https://issues.apache.org/jira/browse/OFBIZ-11243))
- Updates build.gradle to the latest dependencies ([OFBIZ-11245](https://issues.apache.org/jira/browse/OFBIZ-11245))
- Adds a discussion feature in order detail view for following communication about the order (mail, phone etc.) ([OFBIZ-11210](https://issues.apache.org/jira/browse/OFBIZ-11210))
- Adds unit test case for service - sendOrderConfirmation ([OFBIZ-8507](https://issues.apache.org/jira/browse/OFBIZ-8507))
- Adds unit test case for service - ProcessRefundReturnForReplacement ([OFBIZ-8868](https://issues.apache.org/jira/browse/OFBIZ-8868))
- Adds unit test case for service - ProcessRepairReplacementReturn ([OFBIZ-8869](https://issues.apache.org/jira/browse/OFBIZ-8869))
- Improves grammar of an info message while initialize gradle wrapper ([r1868424](https://svn.apache.org/viewvc?view=revision&revision=1868424))
- Adds unit test case for service - createAcctgTransEntry ([OFBIZ-9004](https://issues.apache.org/jira/browse/OFBIZ-9004))
- Provids utilities for integration tests ([OFBIZ-11247](https://issues.apache.org/jira/browse/OFBIZ-11247))
- Upgrades Tomcat from 9.0.26 to 9.0.27 ([OFBIZ-11249](https://issues.apache.org/jira/browse/OFBIZ-11249))
- Converts AutoAcctgAgreementTests unit test from XML to Groovy ([OFBIZ-11248](https://issues.apache.org/jira/browse/OFBIZ-11248))
- Removes unused methods related to properties in UtilProperties and EntityUtilProperties ([OFBIZ-11254](https://issues.apache.org/jira/browse/OFBIZ-11254))
- Uses 'checkstyle' linting tool in build.gradle ([OFBIZ-11251](https://issues.apache.org/jira/browse/OFBIZ-11251))
- Refactors 'ContainerConfig' class ([OFBIZ-11256](https://issues.apache.org/jira/browse/OFBIZ-11256))
- Provides handling of tenants in XmlRpcEventHandler ([OFBIZ-10284](https://issues.apache.org/jira/browse/OFBIZ-10284))
- Adds missing ASL2 header in checkstyle.xml ([r1868619](https://svn.apache.org/viewvc?view=revision&revision=1868619))
- Adds 'PropertyChildren' interface ([OFBIZ-11256](https://issues.apache.org/jira/browse/OFBIZ-11256))
- Allows deprecated public fields ([OFBIZ-11256](https://issues.apache.org/jira/browse/OFBIZ-11256))
- Avoids unecessary breakage in 'ContainerConfig' ([OFBIZ-11256](https://issues.apache.org/jira/browse/OFBIZ-11256))
- Marks 'ContainerConfig#configurations' as final ([OFBIZ-11256](https://issues.apache.org/jira/browse/OFBIZ-11256))
- Refactors 'ContainerConfig#getConfigurations' ([OFBIZ-11256](https://issues.apache.org/jira/browse/OFBIZ-11256))
- Moves APACHE2\_HEADER\_FOR\_XML to 'src/main/resources' ([OFBIZ-11161](https://issues.apache.org/jira/browse/OFBIZ-11161))
- Improves UI by notifing user after successfully created shopping list in ecommerce component ([OFBIZ-9522](https://issues.apache.org/jira/browse/OFBIZ-9522))
- Improves UI of managing EmpPositionTypes ([OFBIZ-11045](https://issues.apache.org/jira/browse/OFBIZ-11045))
- Removes unwanted error log by 'ServiceSemaphore' waiting process ([OFBIZ-11204](https://issues.apache.org/jira/browse/OFBIZ-11204))
- Improves Lint 'ControlServlet' partially ([OFBIZ-11007](https://issues.apache.org/jira/browse/OFBIZ-11007))
- Provides handling of URI templates in request maps ([OFBIZ-11007](https://issues.apache.org/jira/browse/OFBIZ-11007))
- Refactors 'UtilObject#getObjectException' ([OFBIZ-11261](https://issues.apache.org/jira/browse/OFBIZ-11261))
- Removes use of deprecated 'javax.security.cert.X509Certificate' ([OFBIZ-11262](https://issues.apache.org/jira/browse/OFBIZ-11262))
- Removes use of deprecated 'Proxyclass#getConstructor' ([OFBIZ-11262](https://issues.apache.org/jira/browse/OFBIZ-11262))
- Removes use of deprecated 'Class#newInstance' ([OFBIZ-11262](https://issues.apache.org/jira/browse/OFBIZ-11262))
- Removes 'ServicePermissionTests#getUserLogin' and sets 'OFBizTestCase#getLogin' to protected ([OFBIZ-11262](https://issues.apache.org/jira/browse/OFBIZ-11262))
- Defines specific 'maxErrors' for main/test source sets ([OFBIZ-11262](https://issues.apache.org/jira/browse/OFBIZ-11262))
- Turns 'UtilObjectTests' into a unit test class ([OFBIZ-11067](https://issues.apache.org/jira/browse/OFBIZ-11067))
- Merges 'UtilObjectUnitTest' into 'UtilObjectTests' ([OFBIZ-11067](https://issues.apache.org/jira/browse/OFBIZ-11067))
- Formats Lint unit tests ([r1869037](https://svn.apache.org/viewvc?view=revision&revision=1869037))
- Adds a specific TortoiseSVN commit log header ([r1869100](https://svn.apache.org/viewvc?view=revision&revision=1869100))
- Upgrades Groovy 2.4.16 to 2.5.8 ([OFBIZ-11263](https://issues.apache.org/jira/browse/OFBIZ-11263))
- Imports 'ComponentDef' and 'DependsOnInfo' inner-classes ([OFBIZ-11264](https://issues.apache.org/jira/browse/OFBIZ-11264))
- Removes unnecessary 'throws' declarations ([OFBIZ-11264](https://issues.apache.org/jira/browse/OFBIZ-11264))
- Improves construction of component classpaths ([OFBIZ-11264](https://issues.apache.org/jira/browse/OFBIZ-11264))
- Rewrites 'ComponentContainer#loadComponentsInDirectory' ([OFBIZ-11264](https://issues.apache.org/jira/browse/OFBIZ-11264))
- Adds 'ComponentConfig#toString' to ease debugging ([OFBIZ-11264](https://issues.apache.org/jira/browse/OFBIZ-11264))
- Turns 'DependsOnInfo' into a String ([OFBIZ-11264](https://issues.apache.org/jira/browse/OFBIZ-11264))
- Updates checkstyle's max error count ([r1869186](https://svn.apache.org/viewvc?view=revision&revision=1869186))

### Plugins

- Changes sequenceId of Enummeration 'POS Channel' ([r1868023](https://svn.apache.org/viewvc?view=revision&revision=1868023))
- Updates build.gradle to the latest dependencies ([OFBIZ-11245](https://issues.apache.org/jira/browse/OFBIZ-11245))
- Upgrades Tomcat from 9.0.26 to 9.0.27 ([OFBIZ-11249](https://issues.apache.org/jira/browse/OFBIZ-11249))
- Adds a specific TortoiseSVN commit log header ([r1869100](https://svn.apache.org/viewvc?view=revision&revision=1869100))
- Replaces 'HTTP' with 'HTTPS' in some data ([r1869102](https://svn.apache.org/viewvc?view=revision&revision=1869102))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: Error in sales by store report not working ([OFBIZ-11119](https://issues.apache.org/jira/browse/OFBIZ-11119))
- Fixes: Check run payment(A/P) transactions not getting available for reconciliation ([OFBIZ-10796](https://issues.apache.org/jira/browse/OFBIZ-10796))
- Fixes: NotSerializableException after uploading images to an order ([OFBIZ-11123](https://issues.apache.org/jira/browse/OFBIZ-11123))
- Merges UrlRegexpTransform and OfbizUrlTransform classes ([OFBIZ-11229](https://issues.apache.org/jira/browse/OFBIZ-11229))
- Fixes: EditExample always update status, because current Status is not shown ([OFBIZ-11230](https://issues.apache.org/jira/browse/OFBIZ-11230))
- Fixes: FTL error for purchase order with Bulk Item Type ([OFBIZ-11252](https://issues.apache.org/jira/browse/OFBIZ-11252))
- Lowers the log level in UtilProperties#getPropertyNumber to inform when a property number is empty ([r1868580](https://svn.apache.org/viewvc?view=revision&revision=1868580))
- Lowers the log level of genericBasePermissionCheck ([r1868581](https://svn.apache.org/viewvc?view=revision&revision=1868581))
- Moves OrderNotificationTests.groovy from order to ecommerce ([OFBIZ-11255](https://issues.apache.org/jira/browse/OFBIZ-11255))
- Fixes multi modal opening ([OFBIZ-11211](https://issues.apache.org/jira/browse/OFBIZ-11211))
- Formats 'XmlRpcEventHandler' ([OFBIZ-10284](https://issues.apache.org/jira/browse/OFBIZ-10284))
- Makes 'javadoc' build work with recent Java ([OFBIZ-11257](https://issues.apache.org/jira/browse/OFBIZ-11257))
- Fixes regression introduced in revision 1867409 ([OFBIZ-11192](https://issues.apache.org/jira/browse/OFBIZ-11192))
- Uses 'ConcurrentHashMap' to avoid ConcurrentModificationException ([OFBIZ-11258](https://issues.apache.org/jira/browse/OFBIZ-11258))
- Provides abillity to handle a whitelist of serializable classes from properties ([OFBIZ-11261](https://issues.apache.org/jira/browse/OFBIZ-11261))
- Fixes javadoc build ([OFBIZ-11007](https://issues.apache.org/jira/browse/OFBIZ-11007))
- Fixes: SOAPService does not work ([OFBIZ-11259](https://issues.apache.org/jira/browse/OFBIZ-11259))

### Plugins

- Fixes: Issue with 'User name filed' while creating the new user ([OFBIZ-11226](https://issues.apache.org/jira/browse/OFBIZ-11226))
- Fixes: EditExample always update status, because current Status is not shown ([OFBIZ-11230](https://issues.apache.org/jira/browse/OFBIZ-11230))
- Moves OrderNotificationTests.groovy from order to ecommerce ([OFBIZ-11255](https://issues.apache.org/jira/browse/OFBIZ-11255))
