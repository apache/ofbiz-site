---
layout: post
title: Apache OFBiz News - November 2018
date: '2019-01-30T09:35:29+00:00'
permalink: apache-ofbiz-news-november-2018
---
<h2>Apache OFBiz News November 2018</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have more news about new SMS gateway integration feature for OFBiz as well as our usual list of features and improvements.</p> 
  <h2>Short Messaging Service (SMS) Gateway Integration</h2> 
  <p>One of our contributor Pritam Kute has proposed Short Messaging Service (SMS) Gateway Integration for OFBiz.<br />Nowadays many e-commerce businesses (especially operating in Asian countries) use short messaging service (SMS) in mobile phones to notify and update customers about order details, shipment statuses etc.</p> 
  <p>If you would like to try the SMS gateway integration feature, it is available here:&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10457" title="Short Messaging Service (SMS) Gateway Integration">OFBIZ-10457</a><br /></p> 
  <p>Thanks very much to Pritam and everyone who contributed to this feature implementation.&nbsp;<br /></p> 
  <h2>New features and improvements</h2>Functional enhancements and improvements as well as updates of third-party libraries and source code refactoring:
  
  <h3>Framework</h3> 
  <ul> 
    <li>Navigates from a domain to another with automated signed in authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-10307">OFBIZ-10307</a>)</li> 
    <li>Introduces the ability to clear specific cache from cache maintenance (<a href="https://issues.apache.org/jira/browse/OFBIZ-10402">OFBIZ-10402</a>)</li> 
    <li>Adds the ability to schedule a job to run as a system/service user (<a href="https://issues.apache.org/jira/browse/OFBIZ-9557">OFBIZ-9557</a>)</li> 
    <li>Removes deprecated and not used PhoneNumber functions (<a href="https://issues.apache.org/jira/browse/OFBIZ-10631">OFBIZ-10631</a>)</li> 
    <li>Removes unused code related to <g class="gr_ gr_90 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="90" data-gr-id="90">rememberMe</g> (<a href="https://markmail.org/message/dmqqxse65inh6amr">svn Commit: r590554</a>)</li> 
    <li>Removes IDEAL specifics from the Accounting component(<a href="https://issues.apache.org/jira/browse/OFBIZ-5444">OFBIZ-5444</a>)</li> 
    <li>Ads the ability to write unit tests in Groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-10611">OFBIZ-10611</a>)</li> 
    <li>Cleans some Groovy files in base component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10646">OFBIZ-10646</a>)</li> 
    <li>Substitute of ad-hoc boolean enumeration with XML standard boolean datatype (<a href="https://issues.apache.org/jira/browse/OFBIZ-10411">OFBIZ-10411</a>)</li> 
    <li><g class="gr_ gr_91 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="91" data-gr-id="91">Simplificates</g> the service callback handling (<a href="https://issues.apache.org/jira/browse/OFBIZ-10649">OFBIZ-10649</a>)</li> 
    <li>Removes ControlServlet::getRequestHandler method (<a href="https://issues.apache.org/jira/browse/OFBIZ-10445">OFBIZ-10445</a>)</li> 
    <li>Overrides ‘GenericServlet::init’ instead of ‘Servlet::init’ (<a href="https://issues.apache.org/jira/browse/OFBIZ-10446">OFBIZ-10446</a>)</li> 
    <li>Removes useless ControlServlet code (<a href="https://issues.apache.org/jira/browse/OFBIZ-10447">OFBIZ-10447</a>)</li> 
    <li>Uses ‘String#equalsIgnoreCase’ in ‘RequestHandler#doRequest’ (<a href="https://issues.apache.org/jira/browse/OFBIZ-10451">OFBIZ-10451</a>)</li> 
    <li>Creates a Gradle task to generate the <g class="gr_ gr_92 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="92" data-gr-id="92">documenation</g> for all plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-10651">OFBIZ-10651</a>)</li> 
    <li>Removes duplicated code when running login/logout events (<a href="https://issues.apache.org/jira/browse/OFBIZ-10474">OFBIZ-10474</a>)</li> 
    <li>Updates build.gradle to the latest dependencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-10214">OFBIZ-10214</a>)</li> 
    <li>Migrates from <g class="gr_ gr_93 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="93" data-gr-id="93">minilang</g> to entity-auto createQuoteWorkEffort et deleteQuoteWorkEffort. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10553">OFBIZ-10553</a>)</li> 
    <li>Adds data for 'ORDERMGR_CRQ_ADMIN' <g class="gr_ gr_94 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="94" data-gr-id="94">permissionId</g>. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10574">OFBIZ-10574</a>)</li> 
    <li>Adds the ability to use <g class="gr_ gr_89 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del" id="89" data-gr-id="89">multi part</g> input parameters in Groovy events (<a href="https://issues.apache.org/jira/browse/OFBIZ-5048">OFBIZ-5048</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Removes IDEAL related code from the <g class="gr_ gr_95 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="95" data-gr-id="95">ecommerce</g> component (<a href="https://issues.apache.org/jira/browse/OFBIZ-5445">OFBIZ-5445</a>)</li> 
    <li>Updates build.gradle to the latest dependencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-10214">OFBIZ-10214</a>)</li> 
    <li>Removes some unused commented code (<a href="https://issues.apache.org/jira/browse/OFBIZ-10482">OFBIZ-10482</a>)</li> 
    <li>Fixes checkbox and radio buttons located in <g class="gr_ gr_96 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="96" data-gr-id="96">ecommerce</g> FTLs (<a href="https://issues.apache.org/jira/browse/OFBIZ-7670">OFBIZ-7670</a>)</li> 
  </ul> 
  <h2>Bugfixes</h2>Functional and technical bugfixes:
  
  <h3>Framework</h3> 
  <ul> 
    <li>Missing Security and Cache Headers in CMS Events Fixed (<a href="https://issues.apache.org/jira/browse/OFBIZ-10597">OFBIZ-10597</a>)</li> 
    <li>ComponentConfig::getAppBarWebInfos creates <g class="gr_ gr_97 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="97" data-gr-id="97">infos</g> only for components without &lt;&lt;app-bar-display=&quot;false&quot;&gt;&gt; (<a href="https://issues.apache.org/jira/browse/OFBIZ-10637">OFBIZ-10637</a>)</li> 
    <li>Corrects <g class="gr_ gr_112 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling multiReplace" id="112" data-gr-id="112">behaviour</g> of Autologin cookies (<a href="https://issues.apache.org/jira/browse/OFBIZ-10635">OFBIZ-10635</a>)</li> 
    <li>Error in GetLocaleListTests.java on <g class="gr_ gr_107 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar only-ins replaceWithoutSep" id="107" data-gr-id="107">updated</g> trunk while running unit tests(<a href="https://issues.apache.org/jira/browse/OFBIZ-10641">OFBIZ-10641</a>)</li> 
    <li>Stores can't be modified at catalog/control/updateProductStore (<a href="https://issues.apache.org/jira/browse/OFBIZ-10567">OFBIZ-10567</a>)</li> 
    <li>CatalogServices #createProductCategoryAttribute doesn't check for existing attributes (<a href="https://issues.apache.org/jira/browse/OFBIZ-10327">OFBIZ-10327</a>)</li> 
    <li>CatalogServices #duplicateProductCategory doesn't check for existing categories (<a href="https://issues.apache.org/jira/browse/OFBIZ-10328">OFBIZ-10328</a>)</li> 
    <li>Content - Able to add empty Forum Group (<a href="https://issues.apache.org/jira/browse/OFBIZ-10615">OFBIZ-10615</a>)</li> 
    <li>Manufacturing BOM search returning duplicate entries in search results (<a href="https://issues.apache.org/jira/browse/OFBIZ-10648">OFBIZ-10648</a>)</li> 
    <li>Typo in shipmentTypeId. It should be INCOMING_SHIPMENT instead of INGOING_SHIPMENT. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6958">OFBIZ-6958</a>)</li> 
    <li>Force complete purchase order button throws <g class="gr_ gr_109 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar only-ins doubleReplace replaceWithoutSep" id="109" data-gr-id="109">error</g> (<a href="https://issues.apache.org/jira/browse/OFBIZ-9912">OFBIZ-9912</a>)</li> 
    <li>Update Contact Mech ID with Billing Account not working. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10315">OFBIZ-10315</a>)</li> 
    <li>Instructions for Configurable PC don't work in R16, R17 <g class="gr_ gr_111 gr-alert gr_gramm gr_inline_cards gr_run_anim Punctuation only-ins replaceWithoutSep" id="111" data-gr-id="111">and</g> trunk(<a href="https://issues.apache.org/jira/browse/OFBIZ-10542">OFBIZ-10542</a>)</li> 
    <li>Mime Type not supported Error while generating a Composite Pdf (<a href="https://issues.apache.org/jira/browse/OFBIZ-9840">OFBIZ-9840</a>)</li> 
    <li>Tax not added for order shipping or promotion (<a href="https://issues.apache.org/jira/browse/OFBIZ-4160">OFBIZ-4160</a>)</li> 
    <li>Update and fix openstreetmap.org integration. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10553">OFBIZ-10553</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Fixes <g class="gr_ gr_113 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling multiReplace" id="113" data-gr-id="113">behaviour</g> of Autologin cookies (<a href="https://issues.apache.org/jira/browse/OFBIZ-10635">OFBIZ-10635</a>)</li> 
    <li><g class="gr_ gr_98 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="98" data-gr-id="98">Seperates</g> Asciidoc documentation of <g class="gr_ gr_99 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="99" data-gr-id="99">plugnins</g> (<a href="https://issues.apache.org/jira/browse/OFBIZ-10658">OFBIZ-10658</a>)</li> 
    <li>Fixes: Quote list is not showing on <g class="gr_ gr_100 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="100" data-gr-id="100">ecommerce</g> (<a href="https://issues.apache.org/jira/browse/OFBIZ-10628">OFBIZ-10628</a>)</li> 
    <li>Fixes: Error message is displayed on <g class="gr_ gr_101 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="101" data-gr-id="101">ecommerce</g> when <g class="gr_ gr_110 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar only-ins doubleReplace replaceWithoutSep" id="110" data-gr-id="110">user</g> tries to use Split shipment functionality (<a href="https://issues.apache.org/jira/browse/OFBIZ-10623">OFBIZ-10623</a>)</li> 
    <li>Fixes: Instructions for Configurable PC don't work (<a href="https://issues.apache.org/jira/browse/OFBIZ-10542">OFBIZ-10542</a>)</li> 
    <li>Fixes: User should be redirected to view cart page after adding the product from compare product screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-10667">OFBIZ-10667</a>)</li> 
    <li>Updates and fixes openstreetmap.org integration (<a href="https://issues.apache.org/jira/browse/OFBIZ-10553">OFBIZ-10553</a>)</li> 
  </ul> 
  <h2>Documentation</h2> 
  <h3>Framework</h3> 
  <ul> 
    <li>Renames the security doc dir to docs as requested by documentation guidelines Includes webapp.adoc in developer-manual.adoc</li> 
    <li>Formats too long lines in <g class="gr_ gr_102 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="102" data-gr-id="102">wa</g>-cross-domains-SSO.<g class="gr_ gr_103 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="103" data-gr-id="103">adoc</g> Fixes references in bt-creating reports.adoc</li> 
    <li>Fixes levels, I did not get that AsciiDoctor is handling that automatically</li> 
    <li>Fixes security-impersonation.<g class="gr_ gr_104 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="104" data-gr-id="104">adoc</g> file name to <g class="gr_ gr_105 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="105" data-gr-id="105">sy</g>-impersonation.adoc</li> 
  </ul><he>Plugins</he> 
  <ul> 
    <li>Convert Birt component doc from Markdown to AsciiDoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10647">OFBIZ-10647</a>)</li> 
    <li>Formats too long lines in <g class="gr_ gr_106 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="106" data-gr-id="106">wa</g>-cross-domains-SSO.<g class="gr_ gr_108 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="108" data-gr-id="108">adoc</g> Fixes references in bt-creating reports.adoc</li> 
    <li>Fixes: Standalone Asciidoc plugins documents can't render logo correctly in PDF (<a href="https://issues.apache.org/jira/browse/OFBIZ-10677">OFBIZ-10677</a>)</li> 
  </ul>
