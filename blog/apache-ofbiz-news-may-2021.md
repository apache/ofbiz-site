---
layout: post
title: Apache OFBiz News - May 2021
date: '2021-07-01T08:16:15+00:00'
permalink: apache-ofbiz-news-may-2021
---
<p></p><p></p><p></p><h2>Apache OFBiz News May 2021</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have news about the new Facelift Rainbowstone theme, and Helm charts for Kubernetes along with
the usual list of features, improvements, and Statistics.
</p><h3>Facelift Rainbowstone theme!</h3> 
  During this month, the community discussed the new facelift version of the default Rainbowstone theme introduced by Nicolas Malin. The community decided to introduce it as a new theme instead of a replacement to the old one so that existing users are not affected by it.<p></p><p><br><be> <a href="https://issues.apache.org/jira/secure/attachment/13025478/13025478_rainbow-new-s.jpg" target="_blank"><img src="https://issues.apache.org/jira/secure/attachment/13025478/13025478_rainbow-new-s.jpg" style="border: 0px solid black; width: 25%;"></a><br><br>Here is the link to the discussion:<br><a href="https://s.apache.org/pfh5e" target="_blank">https://s.apache.org/pfh5e</a></be></p><p></p><p>Refer to the below link to track efforts related to it:<br><a href="https://issues.apache.org/jira/browse/OFBIZ-12237" target="_blank">https://issues.apache.org/jira/browse/OFBIZ-12237</a><br><br>Thanks Nicolas Malin for initiating it and to everyone who contributed to it.</p><h3>OFBiz Helm chart for Kubernetes</h3>Helm Charts makes it really easy to package and deploy applications on Kubernetes. During this month, Eugen Stan shared the efforts he has put towards it, and the community discussed upon it.<br><br>Here is the link to the efforts from Eugen:<br><a href="https://github.com/ieugen/charts/tree/main/ofbiz" target="_blank">https://github.com/ieugen/charts/tree/main/ofbiz</a><br><br>If you want to be part of this discussion and contribute towards the efforts, join the conversation<br><a href="https://s.apache.org/tqqfb" target="_blank">https://s.apache.org/tqqfb</a><br><br>Thanks to Eugen Stan for initiating this discussion, and to everyone who shared their valuable inputs.<p></p><h3>Statistics</h3><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span></span></span>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p><p> 
  </p><ul><li><b>JIRA Issue Tracker: </b>18 issues were opened and 12 issues were closed ( 5 different people helped to close these issues)<b><br></b></li><li><b>Code Change and Commit Activity:</b> 
      <ul><li><b>Framework: </b>44 commits to the code base that changed 3,462 lines of code ( 7 committers were active)</li><li><b>Plugins: </b>5 commits to the code base that changed 31 lines of code ( 1 committer was active)&nbsp; <br>


</li></ul></li></ul><p>

</p><p>

</p><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Handles remaining checkstyle errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Adds Montastic Website Monitoring Service on GH framework repo (<a href="https://github.com/apache/ofbiz-framework/commit/cef2ae5d411fccd2e46c137f12cb51edbf4d2d09" target="_blank">GitHub Link</a>) </li>

    <li>Trivial changes in build.gradle and checkstyle.xml (<a href="https://github.com/apache/ofbiz-framework/commit/2ebbc51afd92b185a0be104380ebb6543bdc5810" target="_blank">GitHub Link</a>) </li>

    <li>Adds label OrderAdjustmentType (<a href="https://issues.apache.org/jira/browse/OFBIZ-12234" target="_blank">OFBIZ-12234</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/295" target="_blank">#295</a>) </li>

    <li>Adds missing service for updateFacilityLocationGeoPoint (<a href="https://github.com/apache/ofbiz-framework/pull/296" target="_blank">#296</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/f4932918a6346882ae828f741d8bfee4e1fea5f5" target="_blank">GitHub Link</a>) </li>

    <li>on-event-update-area on form inherit information from parent form (<a href="https://issues.apache.org/jira/browse/OFBIZ-11811" target="_blank">OFBIZ-11811</a>) (<a href="https://issues.apache.org/jira/browse/OFBIZ-11808" target="_blank">OFBIZ-11808</a>) </li>

    <li>Improves: Fixes a checkstyle issue (<a href="https://github.com/apache/ofbiz-framework/commit/7c5b78919e81bbf4052a3605dc1d1a5412b516eb" target="_blank">GitHub Link</a>) </li>

    <li>Converts ProductConfigItemContentServices.xml minilang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11463" target="_blank">OFBIZ-11463</a>) </li>

    <li>MacroFormRenderer refactoring of field group open and close elements (<a href="https://github.com/apache/ofbiz-framework/commit/d16bef46dc599308475129991c11c2d536bd173e" target="_blank">GitHub Link</a>) </li>

    <li>Makes latitude and longitude numeric fields for correct comparisons (<a href="https://github.com/apache/ofbiz-framework/pull/220" target="_blank">#220</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/d288e12030fc75ffe0419c17b2f3f96e96fbf397" target="_blank">GitHub Link</a>) </li>

    <li>Allows to pass a Google API key for geolocation (<a href="https://issues.apache.org/jira/browse/OFBIZ-12247" target="_blank">OFBIZ-12247</a>) </li>

    <li>Converts EntitySyncServices.xml mini-lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/c654d9bbcc31f2b3ea218914a56a9569c21d0f8d" target="_blank">GitHub Link</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Handles remaining checkstyle errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Adds swagger-ui in LICENSE file (<a href="https://github.com/apache/ofbiz-plugins/commit/88152045de28c18f364a21c083dfc10527328c9b" target="_blank">GitHub Link</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes: Error page shown when clicking on a product Id in the purchase order page (<a href="https://issues.apache.org/jira/browse/OFBIZ-12229" target="_blank">OFBIZ-12229</a>) </li>

    <li>Removes unused asmselect files and unused variable asm_asmListItemPercentOfForm (<a href="https://issues.apache.org/jira/browse/OFBIZ-10113" target="_blank">OFBIZ-10113</a>) </li>

    <li>Fixes: Quote and Invoice with null value on refresh base (<a href="https://issues.apache.org/jira/browse/OFBIZ-12239" target="_blank">OFBIZ-12239</a>) </li>

    <li>Fixes: Plugin not showing in menu due to permission (<a href="https://issues.apache.org/jira/browse/OFBIZ-12233" target="_blank">OFBIZ-12233</a>) </li>

    <li>Fixes: Typo in request parameter when editing Product Config Item Content's content prevented retrieval of correct record (<a href="https://github.com/apache/ofbiz-framework/commit/f970f1c53826dd04142d18b7695150ebe83bded6" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Default From Date for Product Config Item Content truncated to seconds rather than milliseconds (<a href="https://github.com/apache/ofbiz-framework/commit/eaaf41d7a962e408faee1abdee1deb43f97ccb71" target="_blank">GitHub Link</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: Empty field is reflecting on Contact list section on Profile Page (<a href="https://issues.apache.org/jira/browse/OFBIZ-10386" target="_blank">OFBIZ-10386</a>) </li>

</ul>

<h2>Documentation</h2>

<h3>Framework</h3>

<ul>

    <li>Order online Documentation and help (<a href="https://issues.apache.org/jira/browse/OFBIZ-12224" target="_blank">OFBIZ-12224</a>) </li>

    <li>Changes latitude and longitude numeric fields for correct comparison (<a href="https://github.com/apache/ofbiz-framework/commit/ba3d5c3c843c3475574bf984770c050aa0899ce6" target="_blank">GitHub Link</a>) </li>

</ul>
<p></p><p></p><p></p>
