---
layout: post
title: 'Apache OFBiz News - February 2019 '
date: '2019-03-19T05:18:47+00:00'
permalink: apache-ofbiz-news-february-2019
---
<h2>Apache OFBiz News February 2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have more news about OFBiz build support with Java Open JDK &amp; Java 11 and, we welcome a new committer along with our usual list of features and improvements.</p> 
  <h2>New Committer</h2> 
  <p>During February the Project Management Committee (PMC) invited Mathieu Lirzin as a new committer. Please join us in welcoming and congratulating Mathieu in his new role on the project, and also thanking him for all his contributions.</p> 
  <h2>Enabling HTTP/2 in the embedded Tomcat connectors</h2> 
  <p>The Tomcat instance embedded in OFBiz now allows&nbsp;<g class="gr_ gr_58 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="58" data-gr-id="58">communicattion</g>&nbsp;using the HTTP/2 protocol, when the client supports it. The setting will be enabled by default, by setting upgradeProtocol to true in the HTTP and HTTPS connectors though they will continue to support HTTP/1.1. If the&nbsp;<g class="gr_ gr_60 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="60" data-gr-id="60">upgradeProtocol</g>&nbsp;property is not set then the new protocol will not be enabled.</p> 
  <p>Please refer to <a href="https://markmail.org/message/wg6yqt5tmeujvy5l">Mail thread</a>.</p> 
  <p>Thanks, Jacopo Cappellato for the efforts, Jacques &amp; Taher for your valuable inputs and everyone who contributed to this effort&nbsp;</p> 
  <h2>Support with Java Open JDK and Java 11</h2> 
  <p>Considering that now Oracle JDKs are no more free for commercial use, the community discussed &amp; decided to provide OFBiz support with <g class="gr_ gr_65 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="65" data-gr-id="65">openJDK</g> Java build. It was also decided to keep release 17.12 (unreleased) on Java 8, and 18.12 (unreleased) &amp; trunk be switched to Java 11 on OpenJDK</p> 
  <p>Please refer to <a href="https://issues.apache.org/jira/browse/OFBIZ-10757">OFBIZ-10757</a>, <a href="https://markmail.org/message/argcnb5ve4wvkik2">Mail thread,</a> and <a href="https://markmail.org/message/argcnb5ve4wvkik2">Mail thread</a>.</p> 
  <p>Thanks, Jacopo, Jacques, Michael, Taher, Deepak and to everyone who gave their valuable inputs.&nbsp;</p> 
  <h2>Close pending works from Christian Carlow</h2> 
  <p>The community admires the efforts of Christian Carlow. Since he has been inactive for a very long time with no progress on the work by him, the community has decided to close tickets with obsolete patches as 'won't do'.</p> 
  <p>Please refer to <a href="https://markmail.org/message/su5t5ebgcbwy27yc">Mail thread</a>.</p> 
  <p>Thanks, Jacques for initiating and putting efforts in this direction, Michael, Taher, and Pierre for their valuable inputs.</p> 
  <h2>New features and improvements</h2>Functional enhancements and improvements as well as updates of <g class="gr_ gr_72 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="72" data-gr-id="72">third party</g> libraries and source code refactoring:
  
  <h3>Framework</h3> 
  <ul> 
    <li>Refactors the startup API to completely remove the startup loaders collection (<a href="https://labs.nereide.fr/10031/Communautaire/commit/c304376a9953fd7bfc6c44b72fb3e1b2297c3ba3">c304376a</a>)</li> 
    <li>Makes the ecomThemeId field optional, since it is not the part of PK (<a href="https://issues.apache.org/jira/browse/OFBIZ-10567">OFBIZ-10567</a>)</li> 
    <li>Adds translations es and es-CL in Product Component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10830">OFBIZ-10830</a>)</li> 
    <li>Improves ObjectInputStream class (<a href="https://issues.apache.org/jira/browse/OFBIZ-10837">OFBIZ-10837</a>)</li> 
    <li>Updates code to fix some deprecated method call warnings (<a href="https://issues.apache.org/jira/browse/OFBIZ-10757">OFBIZ-10757</a>)</li> 
    <li><g class="gr_ gr_66 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="66" data-gr-id="66">Separetes</g> 'ComponentConfig' <g class="gr_ gr_67 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="67" data-gr-id="67">webapps</g> cache to multiple ‘WebAppCache’ (<a href="https://issues.apache.org/jira/browse/OFBIZ-10606">OFBIZ-10606</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Updates plugin code to fix console warning related to <g class="gr_ gr_73 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar only-ins replaceWithoutSep" id="73" data-gr-id="73">deprecated</g> method. Removes double constructor call as its <g class="gr_ gr_68 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="68" data-gr-id="68">depracated</g> since JDK 9. Also replaces the CellType::getCellTypeEnum method call with CellTyoe::getCellType (<a href="https://issues.apache.org/jira/browse/OFBIZ-10757">OFBIZ-10757</a>)</li> 
  </ul> 
  <h2>Bugfixes</h2>Functional and technical bugfixes:
  
  <h3>Framework</h3> 
  <ul> 
    <li>Fixes: Html escaping missing for <g class="gr_ gr_71 gr-alert gr_gramm gr_inline_cards gr_run_anim Grammar only-ins doubleReplace replaceWithoutSep" id="71" data-gr-id="71">portalPageId</g> parameter of Help button (<a href="https://issues.apache.org/jira/browse/OFBIZ-10828">OFBIZ-10828</a>)</li> 
    <li>Fixes: Error parsing JWT (<a href="https://issues.apache.org/jira/browse/OFBIZ-10814">OFBIZ-10814</a>)</li> 
    <li>Fixes: URL does not encode in FTL 'EditCategoryProducts' (<a href="https://issues.apache.org/jira/browse/OFBIZ-10816">OFBIZ-10816</a>)</li> 
    <li>Fixes: Add To Order button does not work on shopping list screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-10836">OFBIZ-10836</a>)</li> 
    <li>Adds missing tests for ‘WebAppCache’ (<a href="https://issues.apache.org/jira/browse/OFBIZ-10606">OFBIZ-10606</a>)</li> 
    <li>Fixes: No userLogin given in <g class="gr_ gr_69 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace replaceWithoutSep replaceWithoutSep" id="69" data-gr-id="69">calculateProductPrice</g> service call context (<a href="https://issues.apache.org/jira/browse/OFBIZ-10842">OFBIZ-10842</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Fixes: 404 error while creating/updating contact information from the checkout page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10827">OFBIZ-10827</a>)</li> 
  </ul>
