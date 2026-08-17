---
layout: post
title: Apache OFBiz News - May 2019
date: '2019-06-11T05:59:43+00:00'
permalink: apache-ofbiz-news-may-2019
---
<h2>Apache OFBiz News May 2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have more news about OFBiz mention in Top 15 Open Source ERP Solutions, OFBiz Community Days, and OFBiz at ApacheCon along with our usual list of features, improvements and Statistics.</p> 
  <h2>OFBiz mentioned as Top Open Source ERP on Solution Reviews</h2> 
  <p>The article &quot;Top 15 Free and Open Source ERP Solutions&quot; on Solution Reviews mentioned OFBiz as top open source ERP.&nbsp; The writer of the article Elizabeth Quirk, is a leading enterprise technology writer covering Enterprise Resource Planning (ERP), Business Process Management (BPM) and Talent Management Suites (TMS). The article draws a distinction between free and open source ERP solutions and compares top 15 among them. The link to the article can be found <a href="https://solutionsreview.com/enterprise-resource-planning/top-15-free-and-open-source-erp-solutions/" target="_blank">here</a>.</p> 
  <h2>OFBiz Community Days</h2> 
  <p>In year 2017, we started celebrating the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days" target="_blank">OFBiz community days</a>. The contribution during these days plays a very significant role in overall progress of project. The community days are organised once per quarter so a total of four (4) events throughout the year. Here dates for this year's community day decided such that.</p> 
  <ul> 
    <li>Quarter 1 - Community Days - February 2019 - N/A (Since we already skipped the February 2019 month)</li> 
    <li>Quarter 2 - Community Days - May 2019 - Friday 24th, Saturday 25th, Sunday 26th, Monday 27th and Tuesday 28th</li> 
    <li>Quarter 3 - Community Days - August 2019 - Friday 23rd, Saturday 24th, Sunday 25th, Monday 26th and Tuesday 27th</li> 
    <li>Quarter 4 - Community Days - November 2019 - Friday 22nd, Saturday 23rd, Sunday 24th, Monday 25th and Tuesday 26nd</li> 
  </ul> 
  <p>Contributors can select any single day based on there availability and preferences.</p> 
  <p>We are pleased to inform that this month we have successfully organised the community days of this quarter.&nbsp;</p> 
  <p>Please refer to this <a href="https://markmail.org/thread/kc2pi3oib7tydt2y">mail thread</a>&nbsp;for more details.</p> 
  <p>Indeed it was a very impactful community day, the community worked on around 31 issues, more details can be found <a href="https://issues.apache.org/jira/secure/RapidBoard.jspa?rapidView=318&amp;projectKey=OFBIZ&amp;view=reporting&amp;chart=sprintRetrospective&amp;sprint=523">here</a> (requires Jira Login).</p> 
  <p>To get the more insights, we run a brief survey for the participants of community days. Responses can be found <a href="https://cwiki.apache.org/confluence/display/OFBIZ/May+2019+-+Community+Day+Survey">here</a>.</p> 
  <p>Our next community day is planned on <span><strong>23rd to <span><strong>27th <span><strong>August 2019</strong></span></strong></span></strong><span><span>, for more detail please refer to this <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days+Dates">document</a>, stay tuned!</span></span></span></p> 
  <p>Thanks you Swapnil M Mane for reviving it and to everyone who contributed to this effort.</p> 
  <p> </p> 
  <h2>OFBiz at ApacheCon North America, Las Vegas</h2> 
  <p>We are please to share this update, the organisers of ApacheCon North America have offered to allocate a &quot;full track&quot; to the OFBiz project at the upcoming conference.<br />This year's ApacheCon North America will be held in Las Vegas from 9 to 12 of September.</p> 
  <p>OFBiz track is scheduled on 12th September 2019, more details on ApacheCon schedules can be found <a href="https://www.apachecon.com/acna19/schedule.html">here</a>.<br /></p> 
  <h2>OFBiz Statistics</h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:</p> 
  <ul> 
    <li><strong>JIRA Issue Tracker:</strong> <span style="color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; --darkreader-inline-color:#2a2f32;">86</span>&nbsp;issues were opened and 61 issues were closed (11 different people helped to close these issues)</li> 
    <li><strong>Code Change and Commit Activity:</strong> 
      <ul> 
        <li><strong>Framework: </strong>188 commits to the code base that changed 6,160 lines of code (8 committers were active)</li> 
        <li><strong>Plugins: </strong>21 commits to the code base that changed 1,026 lines of code (3 committers were active)</li> 
      </ul> 
    </li> 
    <li><strong>Mailing Lists:</strong> 
      <ul> 
        <li><strong>Dev: </strong>167 emails sent and 36 topics discussed (25 different people)</li> 
        <li><strong>User: </strong>72 emails sent and 24 topics discussed (26 different people)</li> 
      </ul> 
    </li> 
  </ul> 
  <p> </p> 
  <h2>New features and improvements</h2>Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
  
  
  
  
  
  
  
  <h3>Framework</h3> 
  <ul> 
    <li>Refactors 'DataServices' and 'ContainerLoader' which used 'java.util's backported classes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11003">OFBIZ-11003</a>)</li> 
    <li>Removes unneeded generics in 'MapContextTest'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10933">OFBIZ-10933</a>)</li> 
    <li>Removes unused local variables in 'OrderServices'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10518">OFBIZ-10518</a>)</li> 
    <li>Improves condition in which reversation block was not being executed in case of auto-reserve not found in attribute. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10518">OFBIZ-10518</a>)</li> 
    <li>Substitutes permission-service with required-permissions in services 'createArticleContent', 'createBlogEntry' and 'updateBlogEntry'. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1858539">r1858539</a>)</li> 
    <li>Rewrites 'CustomPermissivePolicy#matchesEither's static method. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10187">OFBIZ-10187</a>)</li> 
    <li>Removes useless 'UtilMisc#makeSetWritable' method. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11015">OFBIZ-11015</a>)</li> 
    <li>Removes useless null check in 'UtilCodec#checkStringForHtmlStrictNone'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10054">OFBIZ-10054</a>)</li> 
    <li>Adds an Auditor party with associated 'AUDITOR' SecurityGroup permissions in all DEMO instances. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10899">OFBIZ-10899</a>)</li> 
    <li>Adds generic type entity fields to ContactMechPurposeType entities. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11008">OFBIZ-11008</a>)</li> 
    <li>Cleans up 'StringUtil'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11014">OFBIZ-11014</a>)</li> 
    <li>Refactors 'ServiceDispatcher' by setting 'private' instead of 'protected'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11032">OFBIZ-11032</a>)</li> 
    <li>Migrates integration tests to unit tests when possible. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11067">OFBIZ-11067</a>)</li> 
    <li>Adds Unit test case for service - quickReturnOrder. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8809">OFBIZ-8809</a>)</li> 
    <li>Adds Unit test case for service - CreateReturnAndItemOrAdjustment. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8858">OFBIZ-8858</a>)</li> 
    <li>Adds Unit test case for service - CheckReturnComplete. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8853">OFBIZ-8853</a>)</li> 
    <li>Adds Unit test case for service - CheckPaymentAmountForRefund. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8852">OFBIZ-8852</a>)</li> 
    <li>Adds Unit test case for service - CheckCreateProductRequirementForFacility. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8937">OFBIZ-8937</a>)</li> 
    <li>Adds Unit test case for service - CreateReturnItemShipment. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8859">OFBIZ-8859</a>)</li> 
    <li>Uses more declarative style for the context map, that prefers map literals over imperative map. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8853">OFBIZ-8853</a>)</li> 
    <li>Uses Groovy Truth instead of UtilValidate Class in Groovy. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11064">OFBIZ-11064</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Refactors 'CustSettings.groovy', 'EditPerson.ftl' and 'ViewProfile.ftl' to provide needed compatibility to new marital status. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10921">OFBIZ-10921</a>)</li> 
    <li>Removes redundant type declarations. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10937">OFBIZ-10937</a>)</li> 
    <li>Removes useless null check in UtilCodec#checkStringForHtmlStrictNone. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10054">OFBIZ-10054</a>)</li> 
    <li>Uses the ‘@Override’ annotation in many classes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10939">OFBIZ-10939</a>)</li> 
    <li>Uses Groovy Truth instead of UtilValidate Class in Groovy. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11064">OFBIZ-11064</a>)</li> 
  </ul> 
  <h2>Bugfixes</h2>Functional and technical bugfixes:
  
  
  
  
  
  
  
  <h3>Framework</h3> 
  <ul> 
    <li>Adds missing uiLabel for 'Create New' on CMS Content Find Screen. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11005">OFBIZ-11005</a>)</li> 
    <li>Adds missing 'synchronized' modifier in 'ExtendedProperties#loadFromXML'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11004">OFBIZ-11004</a>)</li> 
    <li>Ensures that the story field in ordermgr's EditCustRequest form is html encoded. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11006">OFBIZ-11006</a>)</li> 
    <li>Ensures that product content management screen validates trusted users' input. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10054">OFBIZ-10054</a>)</li> 
    <li>Fixes: OWASP sanitizer breaks proper rendering of HTML code. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10187">OFBIZ-10187</a>)</li> 
    <li>Fixes: Update invoice item looses invoice context. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11009">OFBIZ-11009</a>)</li> 
    <li>Replaces response type 'request-redirect-noparam' with 'request-redirect' in many request-maps. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9997">OFBIZ-9997</a>)</li> 
    <li>Fixes: Test integration were failing if plugins directory is empty due to dependent data on projectmgr component. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1859111">r1859111</a>)</li> 
    <li>Fixes: javadoc build for OpenJDK 11. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10757">OFBIZ-10757</a>)</li> 
    <li>Fixes: Issue in method ProductWorker#getVariantSelectionFeatures. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11029">OFBIZ-11029</a>)</li> 
    <li>Fixes: Incorrect findByCount on DynamicView with groupBy and selected fields. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11041">OFBIZ-11041</a>)</li> 
    <li>Fixes: Redirection of pathAlias to aliasTo does not work properly. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11018">OFBIZ-11018</a>)</li> 
    <li>Adds 'PayHistory's missing field 'emplFromDate'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11028">OFBIZ-11028</a>)</li> 
    <li>Ensures that it is possible to create more than one ProductManufacturingRule. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11047">OFBIZ-11047</a>)</li> 
    <li>Ensures that available ProductManufacturingRules will be presented. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11048">OFBIZ-11048</a>)</li> 
    <li>Ensures that 'massPrintOrders' service works. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11049">OFBIZ-11049</a>)</li> 
    <li>Adds missing ampersands in 'FindOrders.ftl's mass actions. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11052">OFBIZ-11052</a>)</li> 
    <li>Fixes: Services allow arbitrary HTML for parameters with allow-html set to &quot;safe&quot;. (<a href="https://issues.apache.org/jira/browse/OFBIZ-5254">OFBIZ-5254</a>)</li> 
    <li>Ensures that delegator.removeBy* operations triggers EECAs. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11040">OFBIZ-11040</a>)</li> 
    <li>Fixes: Drop-ship process behaves incorrectly when a combination of drop-ship and non-drop-ship products are added to cart. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11021">OFBIZ-11021</a>)</li> 
    <li>Fixes: Issue in order history promotion. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10847">OFBIZ-10847</a>)</li> 
    <li>Enables entity timestamp fields in search result screens. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10959">OFBIZ-10959</a>)</li> 
    <li>Fixes: Unable to delete a survey in project component. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7594">OFBIZ-7594</a>)</li> 
    <li>Fixes: Duplicate entries in paramWithSuffix. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11056">OFBIZ-11056</a>)</li> 
    <li>Fixes: Runtime error exceptions at Leads page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11059">OFBIZ-11059</a>)</li> 
    <li>Fixes CSS Styling for Party Content progress bar in multiple themes. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10797">OFBIZ-10797</a>)</li> 
    <li>Fixes: Edit WebSite Path Alias is not working. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11022">OFBIZ-11022</a>)</li> 
    <li>Corrects inventory transfer screens navigation of 'To Facility ID'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10992">OFBIZ-10992</a>)</li> 
    <li>Adds classpath exclusion of '/framework/base/config' and '/framework/base/dtd' for Gradle task 'eclipse'. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11071">OFBIZ-11071</a>)</li> 
    <li>Fixes: Decrypt a field on embedded entity-view failed. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11078">OFBIZ-11078</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Adds missing uiLabel for 'Create New' on CMS Content Find Screen. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11005">OFBIZ-11005</a>)</li> 
    <li>Fixes: Touch F8 in webpos does not work and generate an error. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11010">OFBIZ-11010</a>)</li> 
    <li>Ensures that 'massPrintOrders' service works. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11049">OFBIZ-11049</a>)</li> 
    <li>Fixes: Services allow arbitrary HTML for parameters with allow-html set to &quot;safe&quot;. (<a href="https://issues.apache.org/jira/browse/OFBIZ-5254">OFBIZ-5254</a>)</li> 
    <li>Fixes: Unable to find any product in Quick Add functionality. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10978">OFBIZ-10978</a>)</li> 
    <li>Fixes: Product image not scaling properly on ecommerce at different screen resolution. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10880">OFBIZ-10880</a>)</li> 
  </ul>
