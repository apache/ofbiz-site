---
layout: post
title: 'Apache OFBiz News - September 2018 '
date: '2019-01-21T10:07:44+00:00'
permalink: apache-ofbiz-news-september-2018
---
<h2>Apache OFBiz News September 2018</h2>Welcome to our regular monthly round-up of OFBiz news. This month we have news about the discussions around the location of permission data and accounting AP and AR along with&nbsp;our usual list of features and improvements.
  <h3>Move accounting AP and AR to the plugin</h3> 
  <p>Currently in OFBiz, accounting AR and AP doesn't contain any logic so instead of keeping them as a part of the functional framework they can be moved to plugins. The main <g class="gr_ gr_189 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="189" data-gr-id="189">webapp</g> is accounting, AP/AR are a business orientation that can be loaded at demand through plugins.</p> 
  <p>Please refer to&nbsp;<a href="https://markmail.org/message/bhxjdt65usz6tdcz" style="color: #1155cc;">Mail thread</a>&nbsp;and Jira task&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10552" style="color: #1155cc;">OFBIZ-10552</a>&nbsp;for more information.</p> 
  <p>A big thank you to Nicolas Malin for initiating the discussion and to everyone who contributed.</p> 
  <h3>Move SecurityPermission, SecurityGroup, and SecurityGroupPermission Data to seed data files</h3> 
  <p>Currently, in OFBiz, SecurityPermission, SecurityGroup, and SecurityGroupPermission data are mixed in demo and seed data files. All the 'SecurityPermission' data should be in the seed data files. All the 'SecurityGroup' and 'SecurityGroupPermission' data should be in the demo data files. The 'SecurityGroup' and 'SecurityGroupPermission' data for&nbsp;the groupId 'super' should remain in the seed data files.</p> 
  <p>Please refer to&nbsp;<a href="https://markmail.org/message/peoz4axie4ona6ah" style="color: #1155cc;">Mail thread</a>&nbsp;and Jira task&nbsp;<a href="https://issues.apache.org/jira/browse/OFBIZ-10575" style="color: #1155cc;">OFBIZ-10575</a>&nbsp;for more information.</p> 
  <p>A big thank you to Deepak Nigam for initiating the discussion and to everyone who contributed.</p> 
  <h3>New features and improvements</h3>Functional enhancements and improvements as well as updates of third-party libraries and source code refactoring:
  <h4>Framework</h4> 
  <ul> 
    <li>Improves Dutch labels in ProductUiLabels.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-10544">OFBIZ-10544</a>).</li> 
    <li>Introduces Parameter 'Reserve After Date' for order items (<a href="https://issues.apache.org/jira/browse/OFBIZ-10534">OFBIZ-10534</a>). Indicates the date after which reservation can happen. This way, the stock availability can be managed more efficiently.</li> 
    <li>Refactors EntityUtil findBy methods using Stream API (<a href="https://issues.apache.org/jira/browse/OFBIZ-10537">OFBIZ-10537</a>).</li> 
    <li>Improves Dutch labels in ManufacturingUiLabels.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-10547">OFBIZ-10547</a>).</li> 
    <li>Implements &quot;depends-on&quot; support for Component Loading (<a href="https://issues.apache.org/jira/browse/OFBIZ-10368">OFBIZ-10368</a>). <g class="gr_ gr_187 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="187" data-gr-id="187">Enabeling</g> the declaration of <g class="gr_ gr_186 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del" id="186" data-gr-id="186">dependancies</g>, if any anomaly is found while loading components, the process will stop.</li> 
    <li>Displays from-address in send confirmation email form (<a href="https://issues.apache.org/jira/browse/OFBIZ-10493">OFBIZ-10493</a>).</li> 
    <li>Removes duplicate labels from OrderUiLabel.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-10548">OFBIZ-10548</a>).</li> 
    <li>Removes duplicate labels from ProductUiLabel.xml (<a href="https://issues.apache.org/jira/browse/OFBIZ-10550">OFBIZ-10550</a>).</li> 
    <li>Updates <g class="gr_ gr_175 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del" id="175" data-gr-id="175">Geo information</g> according to ISO notifications (<a href="https://issues.apache.org/jira/browse/OFBIZ-10028">OFBIZ-10028</a>).</li> 
    <li>Sets the default value for retries of async <g class="gr_ gr_184 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="184" data-gr-id="184">persistant</g> services from -1 to 0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10557">OFBIZ-10557</a>).</li> 
    <li>Arranges <g class="gr_ gr_178 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="178" data-gr-id="178">workeffort</g> UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7246">OFBIZ-7246</a>).</li> 
    <li>Modifies QRCodeServices.java and uses EntityUtilProperties. Removes unused data variables and uses them directly inside the service (<a href="https://issues.apache.org/jira/browse/OFBIZ-7037">OFBIZ-7037</a>).</li> 
    <li>Calculates estimated shipment delivery time (<a href="https://issues.apache.org/jira/browse/OFBIZ-10372">OFBIZ-10372</a>).</li> 
    <li>Limits Parameter 'Reserve After Date' to sales orders only (<a href="https://issues.apache.org/jira/browse/OFBIZ-10559">OFBIZ-10559</a>).</li> 
    <li>Arranges content UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7211">OFBIZ-7211</a>).</li> 
    <li>Changes 'quickShipPurchaseOrder' to 'quickReceivePurchaseOrder' (<a href="https://issues.apache.org/jira/browse/OFBIZ-10558">OFBIZ-10558</a>).</li> 
    <li>Arranges manufacturing UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7338">OFBIZ-7338</a>).</li> 
    <li>Arranges framework UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7345">OFBIZ-7345</a>).</li> 
    <li>Upgrades Freemarker to the latest stable version (from 2.3.27-incubating to 2.3.28).</li> 
    <li>Updates missing entries in GDSL descriptors and <g class="gr_ gr_190 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar multiReplace" id="190" data-gr-id="190">cleans</g> up findOne to use EntityQuery instead (<a href="https://issues.apache.org/jira/browse/OFBIZ-10566">OFBIZ-10566</a>).</li> 
    <li>Arranges party UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7353">OFBIZ-7353</a>).</li> 
    <li>Deprecates shoppingCart.makeItemShipGroupAndAssoc with the boolean parameter <g class="gr_ gr_180 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="180" data-gr-id="180">newShipGroup</g> as it is not used (<a href="https://issues.apache.org/jira/browse/OFBIZ-10576">OFBIZ-10576</a>).</li> 
    <li>Alters Service createAutoRequirementsForOrder to use OrderItemShipGroup.<g class="gr_ gr_200 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="200" data-gr-id="200">facilityId</g> instead of ProductStore.inventoryFactory (<a href="https://issues.apache.org/jira/browse/OFBIZ-10570">OFBIZ-10570</a>). Takes into account that an order can have multiple ship groups with individual <g class="gr_ gr_201 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="201" data-gr-id="201">facilityIds</g>.</li> 
    <li>Prevents orders with zero item quantity from being placed (<a href="https://issues.apache.org/jira/browse/OFBIZ-10555">OFBIZ-10555</a>).</li> 
    <li>Removes unused labels from content (<a href="https://issues.apache.org/jira/browse/OFBIZ-9364">OFBIZ-9364</a>).</li> 
    <li>Creates RequirementStatus record while creating or updating requirement (<a href="https://issues.apache.org/jira/browse/OFBIZ-10568">OFBIZ-10568</a>).</li> 
    <li>Uses '<g class="gr_ gr_188 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="188" data-gr-id="188">buttontext</g>' styling for buttons inside the ListEntities table (<a href="https://issues.apache.org/jira/browse/OFBIZ-10465">OFBIZ-10465</a>).</li> 
    <li>Redirects work effort's agreement to agreement detail page instead of agreement list page (<a href="https://issues.apache.org/jira/browse/OFBIZ-7627">OFBIZ-7627</a>).</li> 
    <li>Introduces a new feature that allows the impersonation of a login by an authorized user (<a href="https://issues.apache.org/jira/browse/OFBIZ-10515">OFBIZ-10515</a>). Also adds the documentation with all the details in security-impersonation.adoc.</li> 
  </ul> 
  <h4>Plugins</h4> 
  <ul> 
    <li>Shows promotions as listing instead of inline (<a href="https://issues.apache.org/jira/browse/OFBIZ-10462">OFBIZ-10462</a>).</li> 
    <li>Replaces #assign with #local in all the <g class="gr_ gr_181 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="181" data-gr-id="181">ftl</g> macros (<a href="https://issues.apache.org/jira/browse/OFBIZ-10516">OFBIZ-10516</a>).</li> 
    <li>Renames setLocaleFromBrowser to setTimeZoneFromBrowser everywhere it is needed (<a href="https://issues.apache.org/jira/browse/OFBIZ-10472">OFBIZ-10472</a>).</li> 
    <li>Arranges ECommerce UI Labels in alphabetic order according to best practice (<a href="https://issues.apache.org/jira/browse/OFBIZ-7325">OFBIZ-7325</a>).</li> 
    <li>Calculates estimated shipment delivery time (<a href="https://issues.apache.org/jira/browse/OFBIZ-10372">OFBIZ-10372</a>).</li> 
    <li>Arranges webpos UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7320">OFBIZ-7320</a>).</li> 
    <li>Arranges projectmgr UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7371">OFBIZ-7371</a>).</li> 
    <li>Arranges scrum UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7370">OFBIZ-7370</a>).</li> 
    <li>Arranges <g class="gr_ gr_179 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling" id="179" data-gr-id="179">ebaystore</g> UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7280">OFBIZ-7280</a>).</li> 
    <li>Arranges example UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7281">OFBIZ-7281</a>).</li> 
    <li>Arranges <g class="gr_ gr_177 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="177" data-gr-id="177">myportal</g> UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7282">OFBIZ-7282</a>).</li> 
    <li>Arranges passport UI labels in alphabetic order (<a href="https://issues.apache.org/jira/browse/OFBIZ-7285">OFBIZ-7285</a>).</li> 
  </ul> 
  <h3>Bugfixes</h3>Functional and technical bugfixes:
  <h4>Framework</h4> 
  <ul> 
    <li>Warning in console logs related to entity definitions (<a href="https://issues.apache.org/jira/browse/OFBIZ-10540">OFBIZ-10540</a>).</li> 
    <li>When a user executes a search/find action in the Label Manager, and there are duplicated labels the 'Find'-button is not visible anymore (<a href="https://issues.apache.org/jira/browse/OFBIZ-10549">OFBIZ-10549</a>).</li> 
    <li>Exceptions thrown in ConfigXMLReader during the <g class="gr_ gr_182 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="182" data-gr-id="182">xml</g> parsing now incorporate the location of the failed file.</li> 
    <li>Warning in console logs related to entity definitions (<a href="https://issues.apache.org/jira/browse/OFBIZ-10540">OFBIZ-10540</a>). Also adds a unit test for WorkEffortContactMech.</li> 
    <li>Orders the file log list drop-down on <g class="gr_ gr_192 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="192" data-gr-id="192">webtools</g>/control/FetchLogs screen to help the search</li> 
    <li>Search operation on 'AssocRevisionItemView' entity causing <g class="gr_ gr_206 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar only-ins doubleReplace replaceWithoutSep" id="206" data-gr-id="206">exception</g>. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8842">OFBIZ-8842</a>).</li> 
    <li><g class="gr_ gr_197 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar only-ins replaceWithoutSep" id="197" data-gr-id="197">Broken</g> page renders while <g class="gr_ gr_199 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar multiReplace" id="199" data-gr-id="199">click</g> on <g class="gr_ gr_198 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar only-ins replaceWithoutSep" id="198" data-gr-id="198">Submit</g> button (<a href="https://issues.apache.org/jira/browse/OFBIZ-7535">OFBIZ-7535</a>).</li> 
    <li>Impersonation of userLogin feature (<a href="https://issues.apache.org/jira/browse/OFBIZ-10515">OFBIZ-10515</a>).</li> 
    <li>Use of layered-modal with parameter does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-10511">OFBIZ-10511</a>).</li> 
  </ul> 
  <h4>Plugins</h4> 
  <ul> 
    <li>Freemarker error on shopping list page on eCommerce storefront (<a href="https://issues.apache.org/jira/browse/OFBIZ-10459">OFBIZ-10459</a>).</li> 
    <li>Use assign tag instead of local in Tree.ftl<g class="gr_ gr_196 gr-alert gr_gramm gr_inline_cards gr_run_anim Style replaceWithoutSep" id="196" data-gr-id="196">,as</g> its causing data load error. Tree.ftl used in DemoTree.xml to demonstrate the entity-engine-transform-<g class="gr_ gr_174 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="174" data-gr-id="174">xml</g> feature.</li> 
    <li><g class="gr_ gr_176 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="176" data-gr-id="176">Webpos</g> keyboard shortcut keys do not work correctly (<a href="https://issues.apache.org/jira/browse/OFBIZ-7945">OFBIZ-7945</a>).</li> 
    <li>Cart summary section distorted after add to cart on Medium screen devices. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10385">OFBIZ-10385</a>).</li> 
  </ul> 
  <h3>Documentation</h3> 
  <ul> 
    <li>Adds content for Performance Review in Human Resources (<a href="https://issues.apache.org/jira/browse/OFBIZ-10262">OFBIZ-10262</a>).</li> 
    <li>Creates <g class="gr_ gr_191 gr-alert gr_gramm gr_hide gr_inline_cards gr_run_anim Grammar multiReplace replaceWithoutSep replaceWithoutSep" id="191" data-gr-id="191">an empty document templates</g> for <g class="gr_ gr_183 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="183" data-gr-id="183">webapp</g> <g class="gr_ gr_185 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="185" data-gr-id="185">socumentation</g> (<a href="https://issues.apache.org/jira/browse/OFBIZ-10564">OFBIZ-10564</a>).</li> 
    <li>Documents the automated authentification from a domain to another (<a href="https://issues.apache.org/jira/browse/OFBIZ-10562">OFBIZ-10562</a>).</li> 
    <li>Adds content for Employments in Human Resources (<a href="https://issues.apache.org/jira/browse/OFBIZ-10261">OFBIZ-10261</a>).</li> 
    <li>Adds content for Employees in Human Resources. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10260">OFBIZ-10260</a>).</li> 
    <li>Adds content for Employee Positions in Human Resources. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10259">OFBIZ-10259</a>).</li> 
    <li>Adds content details for hr-recruitment.adoc file (<a href="https://issues.apache.org/jira/browse/OFBIZ-10265">OFBIZ-10265</a>).</li> 
    <li>Adds documentation content for qualifications in Human Resources guide (<a href="https://issues.apache.org/jira/browse/OFBIZ-10264">OFBIZ-10264</a>).</li> 
    <li>Adds documentation content for skills in Human Resources guide (<a href="https://issues.apache.org/jira/browse/OFBIZ-10266">OFBIZ-10266</a>).</li> 
    <li>Adds documentation content for resumes in Human Resources guide (<a href="https://issues.apache.org/jira/browse/OFBIZ-10267">OFBIZ-10267</a>).</li> 
    <li>Adds documentation content for employee leave in Human Resources guide (<a href="https://issues.apache.org/jira/browse/OFBIZ-10269">OFBIZ-10269</a>).</li> 
    <li>Adds documentation content for security setup in Human Resources guide (<a href="https://issues.apache.org/jira/browse/OFBIZ-10270">OFBIZ-10270</a>).</li> 
    <li>Adds documentation content for Skill Types in Human Resources guide (<a href="https://issues.apache.org/jira/browse/OFBIZ-10271">OFBIZ-10271</a>).</li> 
  </ul>
