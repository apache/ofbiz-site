---
layout: post
title: Apache OFBiz News - February 2021
date: '2021-03-23T11:33:32+00:00'
permalink: apache-ofbiz-news-february-2021
---
<p></p><p></p><p>  </p><h2>Apache OFBiz News February 2021</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we 
have news about JCenter shutdown, Java Open JDK 11 &amp; 17 support, and
 Customer journey with an E-commerce discussion series along with our 
usual list of features, improvements, and Statistics.
</p><h3>JFrog to shut down JCenter</h3> 
  Apache OFBiz uses <a href="https://docs.gradle.org/current/userguide/declaring_repositories.html#sub:maven_jcenter" target="_blank">Bintray JCenter</a> as a Gradle repository to download and consume dependencies. Recently, 
JFrog announced to shut down JCenter services on May 1st, 2021. Users of these services will need to migrate to the respective canonical repository.<br>During this month, the community discussed how we can handle it in the most feasible way where we concluded &amp; worked upon successful migration to Maven Central. The community also decided to have another release for the 17.12 series to support existing users. <br>If you are using any release post 16.11 with the Gradle build system in place, we recommend you to upgrade with the latest upcoming release 17.12.06.<br><br>Here is the link to the official announcement:<br><a href="https://jfrog.com/blog/into-the-sunset-bintray-jcenter-gocenter-and-chartcenter/" target="_blank">https://jfrog.com/blog/into-the-sunset-bintray-jcenter-gocenter-and-chartcenter/</a><br><br>Here are the quick links to the discussion and efforts:<br><a href="https://s.apache.org/5pc08">https://s.apache.org/5pc08</a><br><a href="https://issues.apache.org/jira/browse/OFBIZ-12171" target="_blank">https://issues.apache.org/jira/browse/OFBIZ-12171</a><br><br>Thanks
 Taher Alkhateeb, Michael Brohl, Jacques Le Roux and Nicolas Malin for 
the valuable discussion and efforts put in this direction.<p></p><h3>Java Open JDK 11 and 17 Support<br></h3>During this month, the community discussed upon the support for JDK 11 and 17 for upcoming branches. JDK11 will be available at least until October 2024 and JDK17 
(LTS) will be available from September 2021 until 2025 (considering a minimum of 4 years support for LTS). The community decided to go with JDK11
 for upcoming release branch r21 and move forward to JDK17 for trunk when available. JDK11 is already mature and the community already made 
OFBiz ready for it. <br><br>Refer to the below link to track efforts related to JDK11 support:<br><a href="https://issues.apache.org/jira/browse/OFBIZ-10757" target="_blank">https://issues.apache.org/jira/browse/OFBIZ-10757</a><br><br>Here is the quick link to the discussion:<br><a href="https://s.apache.org/3ykit" target="_blank">https://s.apache.org/3ykit</a><br><br>Thanks Michael Brohl for initiating the discussion and to everyone who gave their valuable inputs.&nbsp;&nbsp; 
  <p></p><h3>Customer journey with an E-commerce</h3><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span>The
 OFBiz community is discussing "Customer journey with an E-commerce" where the community will be covering the following aspects:</span></span></p><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span>- The expectations of a <span class="il">customer</span> while buying from an e-commerce v/s the expectation of a <span class="il">customer</span> while buying from a brick and mortar store<br> - Improving <span class="il">customer</span> experience while buying from an e-commerce<br>
- Order life cycle and communicating with the <span class="il">customer</span> during various order life cycle events<br>- Role of mobile-first, omnichannel, buy online and pick up in-store (BOPIS), buy online and return in-store (BORIS) strategies in improving <span class="il">customer</span> experience <br><br>The community had the initial discussion where the following points were discussed:<br>
- Purpose of the series<br>
- Understand the expectation of the <span class="il">customer</span> while buying online<br>
- Ways to improve the <span class="il">customer</span> experience<br>
- Action plan for the discussion<br>
- Order life cycle and communication<br>
- Online and offline sales channels<br>
- <span class="il">Customer</span> retention and acquisition<br>
<br>Here is the link to the initial discussion:<br></span></span><a href="https://youtu.be/prYuGbUJPPI" target="_blank">https://youtu.be/prYuGbUJPPI</a><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span><br><br>If you want to be part of this discussion and share your experiences, join the conversation<br><a href="https://s.apache.org/u2ewa" target="_blank">https://s.apache.org/u2ewa</a><br><br>Thanks Arpit Mor for initiating it and to everyone who contributed to it.<br></span></span></p><p></p><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span></span></span></p><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span></span></span></p><h3>Statistics</h3><p><span class="d2edcug0 hpfvmrgz qv66sw1b c1et5uql oi732d6d ik7dh3pa fgxwclzu a8c37x1j keod5gw0 nxhoafnm aigsh9s9 d3f4x2em fe6kdd0r mau55g9w c8b282yb iv3no6db jq4qci2q a3bd9o3v knj5qynh oo9gr5id hzawbc8m" dir="auto"><span></span></span>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p><p> 
  </p><ul><li><b>JIRA Issue Tracker:</b> 28 issues were opened and 67 issues were closed ( 7 different people helped to close these issues)</li><li><b>Code Change and Commit Activity:</b> 
      <ul><li><b>Framework: </b>125 commits to the code base that changed&nbsp; lines of code ( 10 committers were active)</li><li><b>Plugins: </b>20 commits to the code base that changed 422 lines of code ( 5 committers were active)</li></ul> 
    </li><li><b>Mailing Lists:</b> 
      <ul><li><b>Dev: </b>110 emails sent and 22 topics discussed ( 16 different people)</li><li><b>User: </b>67 emails sent and 17 topics discussed ( 22 different people) <br></li></ul></li></ul>




<h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Converts EmailServices.xml from minilang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11868" target="_blank">OFBIZ-11868</a>) </li>

    <li>Converts DataServices.xml to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11469" target="_blank">OFBIZ-11469</a>) </li>

    <li>Replaces ModelInduceFromDb with widgets (<a href="https://issues.apache.org/jira/browse/OFBIZ-6510" target="_blank">OFBIZ-6510</a>) </li>

    <li>Upgrades Tomcat from 9.0.41 to 9.0.43 (<a href="https://issues.apache.org/jira/browse/OFBIZ-12165" target="_blank">OFBIZ-12165</a>) </li>

    <li>Converts OrderDeliveryServices.xml from minilang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11461" target="_blank">OFBIZ-11461</a>) </li>

    <li>Fixes a Java doc issue reported by checkstyle (<a href="https://github.com/apache/ofbiz-framework/commit/a234f8e2016bcd8e5d334421d57a61dfeca7d28d" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused imports (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Display last-visited-time popup after login (<a href="https://issues.apache.org/jira/browse/OFBIZ-12148" target="_blank">OFBIZ-12148</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/266" target="_blank">#266</a>) </li>

    <li>Adds newline at the end of file (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Adds an example memory setting notice for the case of heap memory problems during build (<a href="https://github.com/apache/ofbiz-framework/commit/d61e0e7558ba1cd6109c4b49221fda83d5b39f90" target="_blank">GitHub Link</a>) </li>

    <li>Updates the max checkstyle error count according to the latest changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Declares classes final as suggested by checkstyle (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Removes and adds whitespaces as suggested by checkstyle (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Improves: If else construct must use parentheses (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Renames some connoted words like blacklist and whitelist  (<a href="https://issues.apache.org/jira/browse/OFBIZ-12168" target="_blank">OFBIZ-12168</a>) </li>

    <li>Removes illegal character as shown by checkstyle (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Improves: Replaces tab character (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Replaces '.*' import form (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Improves: Puts each variable declaration in an own statement (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Improves: Simplifies expression (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Improves: Max line length is 150 characters (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Fixes indentation level (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Removes trailing spaces (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Removes nested blocks and closed OutputStream in finally statment (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Puts dates in migration services to be able to remove them later (<a href="https://github.com/apache/ofbiz-framework/commit/a608fa4b562bd9ea484785c0b1cde3f9305c8539" target="_blank">GitHub Link</a>) </li>

    <li>Improves: Multiblock indentations as shown by checkstyle (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Changes modifier order (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Changes line break so line doesnt't start with "(" (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Removes inner assignments (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Removes Conditional logic as shown by checkstyle (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Improves: Uses uppercase 'L' as suggested by checkstyle (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Simplifies ModelInduceFromDb.groovy code to be a one-liner (<a href="https://github.com/apache/ofbiz-framework/commit/d251164e06d4c864deaeeb804dc8bfd5f21d4acf" target="_blank">GitHub Link</a>) </li>

    <li>Improves: Handles remaining checkstyle errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Switches from jCenter to mavenCentral to handle the jCenter shutdown (<a href="https://issues.apache.org/jira/browse/OFBIZ-12171" target="_blank">OFBIZ-12171</a>) </li>

    <li>Removes Compdoc functionality from content manager (<a href="https://issues.apache.org/jira/browse/OFBIZ-10476" target="_blank">OFBIZ-10476</a>) </li>

    <li>Improves: Default ordering of webapps titles in main menu (<a href="https://issues.apache.org/jira/browse/OFBIZ-12166" target="_blank">OFBIZ-12166</a>) </li>

    <li>Corrects max number of checkstyle errors allowed (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Improves: Element link can update partial area (<a href="https://issues.apache.org/jira/browse/OFBIZ-11810" target="_blank">OFBIZ-11810</a>) </li>

    <li>Improvement on Find BOM screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-12179" target="_blank">OFBIZ-12179</a>) </li>

    <li>Updates Freemarker to 2.3.31 (<a href="https://github.com/apache/ofbiz-framework/commit/44922f0fbadda02fc823bddf4c00e6b2373810cf" target="_blank">GitHub Link</a>) </li>

    <li>Enlarge the "more-app" menu in Rainbow Stome theme (<a href="https://issues.apache.org/jira/browse/OFBIZ-12181" target="_blank">OFBIZ-12181</a>) </li>

    <li>Increases some French labels length (<a href="https://github.com/apache/ofbiz-framework/commit/e988dd4efdf40c98b4b627b663e38308fb7f596b" target="_blank">GitHub Link</a>) </li>

    <li>Converts CostService.xml from minilang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/8a964625385a2fa097679446c5d6435265eb50b0" target="_blank">GitHub Link</a>) </li>

    <li>Improves: Field 'govAgencyPartyId' shows all parties, not just Government Agencies (<a href="https://issues.apache.org/jira/browse/OFBIZ-10863" target="_blank">OFBIZ-10863</a>) </li>

    <li>Converts ImageManagementServices.xml from minilang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11604" target="_blank">OFBIZ-11604</a>) </li>

    <li>Improves: Dependency verification (<a href="https://issues.apache.org/jira/browse/OFBIZ-12186" target="_blank">OFBIZ-12186</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Renames some connoted words like blacklist and whitelist (<a href="https://issues.apache.org/jira/browse/OFBIZ-12168" target="_blank">OFBIZ-12168</a>) </li>

    <li>Removes HelpData file entries from ofbiz-component.xml (<a href="https://github.com/apache/ofbiz-plugins/pull/54" target="_blank">#54</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/73876cdb143c99dc97e572b917913054530af106" target="_blank">GitHub Link</a>) </li>

    <li>Switches from jCenter to mavenCentral to handle the jCenter shutdown (<a href="https://issues.apache.org/jira/browse/OFBIZ-12171" target="_blank">OFBIZ-12171</a>) </li>

    <li>Improves: Default ordering of webapps titles in main menu (<a href="https://issues.apache.org/jira/browse/OFBIZ-12166" target="_blank">OFBIZ-12166</a>) </li>

    <li>Declares classes final as suggested by checkstyle (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Adds newline at the end of the file (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Improves: If else construct must use parentheses (<a href="https://issues.apache.org/jira/browse/OFBIZ-12169" target="_blank">OFBIZ-12169</a>) </li>

    <li>Removes obsolete comment (<a href="https://issues.apache.org/jira/browse/OFBIZ-12171" target="_blank">OFBIZ-12171</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes: StringOutOfBounds Exception while checking available Languages (<a href="https://issues.apache.org/jira/browse/OFBIZ-10707" target="_blank">OFBIZ-10707</a>) </li>

    <li>Removes _PREVIOUS_REQUEST_ Session Attribute on non-authentication pages (<a href="https://issues.apache.org/jira/browse/OFBIZ-12047" target="_blank">OFBIZ-12047</a>) </li>

    <li>Fixes checkstyle Issues in WebToolsDbEvents and UtilXml (<a href="https://issues.apache.org/jira/browse/OFBIZ-6510" target="_blank">OFBIZ-6510</a>) </li>

    <li>Adds a blacklist (to be renamed soon to denylist) in Java serialisation (<a href="https://issues.apache.org/jira/browse/OFBIZ-12167" target="_blank">OFBIZ-12167</a>) </li>

    <li>Prevents NPE in Party/My Communications (<a href="https://issues.apache.org/jira/browse/OFBIZ-12164" target="_blank">OFBIZ-12164</a>) </li>

    <li>Fixes: ViewQuoteProfit shows fields in wrong order (<a href="https://issues.apache.org/jira/browse/OFBIZ-11680" target="_blank">OFBIZ-11680</a>) </li>

    <li>Fixes File Resource not found console warning related to already removed data files (<a href="https://github.com/apache/ofbiz-framework/commit/782bddb7295199419d71c92d571cb1f0aeb4f272" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Incorrect mapping for Lookup Purchase Order (<a href="https://github.com/apache/ofbiz-framework/pull/272" target="_blank">#272</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/32737938425cbe0fe8c83acbdd46e71a45818f66" target="_blank">GitHub Link</a>) </li>

    <li>Adds log4j dependencies to avoid classpath conflict while loading log4j ReflectionUtil (<a href="https://issues.apache.org/jira/browse/OFBIZ-12171" target="_blank">OFBIZ-12171</a>) </li>

    <li>Uses from-field pattern instead of value=${***} pattern in 'set' element (<a href="https://issues.apache.org/jira/browse/OFBIZ-9607" target="_blank">OFBIZ-9607</a>) </li>

    <li>Fixes a syntax issue (<a href="https://github.com/apache/ofbiz-framework/commit/da134243f7993496ffb4c02c5dc8921aa04f2d20" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Webapp position does not really work (<a href="https://issues.apache.org/jira/browse/OFBIZ-12176" target="_blank">OFBIZ-12176</a>) </li>

    <li>Fixes: Unable to add product (of ASSET_USAGE type) in order (<a href="https://issues.apache.org/jira/browse/OFBIZ-10791" target="_blank">OFBIZ-10791</a>) </li>

    <li>Fixes: Financial account transaction (<a href="https://issues.apache.org/jira/browse/OFBIZ-10308" target="_blank">OFBIZ-10308</a>) </li>

    <li>Correctes property name as defined in general.properties (<a href="https://issues.apache.org/jira/browse/OFBIZ-10008" target="_blank">OFBIZ-10008</a>) </li>

    <li>Fixes: Bypass Java GString to String conversion in ObjectType::simpleTypeOrObjectConvert (<a href="https://issues.apache.org/jira/browse/OFBIZ-12182" target="_blank">OFBIZ-12182</a>) </li>

    <li>Fixes: Wrong heading on creating quote under order component (<a href="https://issues.apache.org/jira/browse/OFBIZ-11221" target="_blank">OFBIZ-11221</a>) </li>

    <li>Fixes: Error on quick ship complete order (<a href="https://issues.apache.org/jira/browse/OFBIZ-12185" target="_blank">OFBIZ-12185</a>) </li>

    <li>Fixes: Error while uploading file in Ecommerce Profile's File Manager (<a href="https://issues.apache.org/jira/browse/OFBIZ-10746" target="_blank">OFBIZ-10746</a>) </li>

    <li>Fixes: Wrong wiki URL (<a href="https://github.com/apache/ofbiz-framework/commit/67e4f61a664b0b7eeb159ed4344161d0a4b8282a" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Error while running MRP (<a href="https://issues.apache.org/jira/browse/OFBIZ-12187" target="_blank">OFBIZ-12187</a>) </li>

    <li>Fixes: Removes CommunicationContent not working as expected (<a href="https://issues.apache.org/jira/browse/OFBIZ-12172" target="_blank">OFBIZ-12172</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: Visit disabling causes NullPointerException on ecomm groovy script (<a href="https://issues.apache.org/jira/browse/OFBIZ-12173" target="_blank">OFBIZ-12173</a>) </li>

    <li>Fixes: Fitering on StatusId in FindTask does not work (<a href="https://github.com/apache/ofbiz-plugins/pull/55" target="_blank">#55</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/9cb1101e3fbfaa311bf8338febc3c58b3436015f" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Error while uploading file in Ecommerce Profile's File Manager (<a href="https://issues.apache.org/jira/browse/OFBIZ-10746" target="_blank">OFBIZ-10746</a>) </li>

    <li>Fixes: Exception error on ecommerce portal while trying to register new user (<a href="https://issues.apache.org/jira/browse/OFBIZ-12189" target="_blank">OFBIZ-12189</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/35a2eca9b4d7a3b3eb4f2b9c302dab8213e388b2" target="_blank">GitHub Link</a>) </li>

</ul>
