---
layout: post
title: Apache OFBiz News - July 2019
date: '2019-09-02T06:58:03+00:00'
permalink: apache-ofbiz-news-july-2019
---
<h2>Apache OFBiz News July 2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have news about Apache OFBiz and Apache Camel integration along with our usual list of features, improvements and Statistics.</p> 
  <h2>Apache OFBiz and Camel integration<br /></h2> 
  <p>The community has decided to include OFBiz and Camel integration in the official OFBiz plugins.<br />Thank you Bilgin Ibryam for your contribution and Girish Vasmatkar for further working on it and to everyone who participated in the discussion.<br />The email communication can be found <a href="https://s.apache.org/5y2l7">here</a> and the progress of this effort can be tracked at <a href="https://issues.apache.org/jira/browse/OFBIZ-11147">OFBIZ-11147</a>. <br /></p> 
  <h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:</p> 
  <ul> 
    <li><strong>JIRA Issue Tracker:</strong> 14 issues were opened and 23 issues were closed (6 different people helped to close these issues)</li> 
    <li><strong>Code Change and Commit Activity:</strong> 
      <ul> 
        <li><strong>Framework: </strong>69 commits to the code base that changed 29,306 lines of code (5 committers were active)</li> 
        <li><strong>Plugins: </strong>12 commits to the code base that changed 76,978 lines of code (3 committers were active)</li> 
      </ul> 
    </li> 
    <li><strong>Mailing Lists:</strong> 
      <ul> 
        <li><strong>Dev: </strong>50 emails sent and 13 topics discussed (15 different people)</li> 
        <li><strong>User: </strong>105 emails sent and 37 topics discussed (41 different people)</li> 
      </ul> 
    </li> 
  </ul> 
  <p> </p> 
  <h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:


  <h3>Framework</h3> 
  <ul> 
    <li>Makes &quot;FormRenderer#getUsedFields&quot; more generic (<a href="https://issues.apache.org/jira/browse/OFBIZ-11135">OFBIZ-11135</a>)</li> 
    <li>Rewrites &quot;Start#determineCommandType&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11137">OFBIZ-11137</a>)</li> 
    <li>Avoids confusing indirections in &quot;StartupControlPanel#start&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11137">OFBIZ-11137</a>)</li> 
    <li>Removes support for “ofbiz-containers.xml” (<a href="https://issues.apache.org/jira/browse/OFBIZ-11100">OFBIZ-11100</a>)</li> 
    <li>Deprecates &quot;ContainerConfig#getConfiguration(String, String)&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11100">OFBIZ-11100</a>)</li> 
    <li>Inlines &quot;filterContainersHavingMatchingLoaders&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11100">OFBIZ-11100</a>)</li> 
    <li>Access configurations inside &quot;loadContainersFromConfigurations&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11100">OFBIZ-11100</a>)</li> 
    <li>Passes directly the loaders to &quot;loadContainersFromConfigurations&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11100">OFBIZ-11100</a>)</li> 
    <li>Moves &quot;AdminServer&quot; inside a container (<a href="https://issues.apache.org/jira/browse/OFBIZ-11136">OFBIZ-11136</a>)</li> 
    <li>Removes unnecessary dependency on &quot;junit-dep&quot; artifact (<a href="https://issues.apache.org/jira/browse/OFBIZ-11139">OFBIZ-11139</a>)</li> 
    <li>Upgrades Hamcrest library to version 2.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11139">OFBIZ-11139</a>)</li> 
    <li>Inlines an &quot;UtilHttp#getPathInfoOnlyParameterMap&quot; overload (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Adds unit tests for &quot;UtilHttp#getPathInfoOnlyParameterMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Refactors &quot;UtilHttp#getPathInfoOnlyParameterMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Removes unused &quot;UtilHttp#getParameterMap&quot; overload (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Adds unit tests for &quot;UtilHttp#getParameterMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Refactors &quot;UtilHttp#getParameterMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Uses a predicate in &quot;UtilHttp#getPathInfoOnlyParameterMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Uses a predicate in &quot;UtilHttp#getParameterMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Removes unused &quot;UtilHttp#checkURLforSpiders&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Removes useless &quot;UtilHttp#parametersToAttributes&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Uses &quot;HttpServletRequest#getParameterMap&quot; when possible (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1863404">r1863404</a>)</li> 
    <li>Adds unit tests for &quot;UtilHttp#makeParamValueFromComposite&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Refactors &quot;UtilHttp#makeParamValueFromComposite&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Adds unit tests for &quot;UtilHttp#makeParamListWithSuffix&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Refactors &quot;Makeparamlistwithsuffix&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138">OFBIZ-11138</a>)</li> 
    <li>Removes &quot;UtilMisc#toList&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11140">OFBIZ-11140</a>) </li> 
    <li>Removes useless &quot;UtilObject#equalsHelper&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11140">OFBIZ-11140</a>)</li> 
    <li>Removes useless &quot;UtilObject#getBytes&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11140">OFBIZ-11140</a>) </li> 
    <li>Removes useless &quot;UtilObject#compareToHelper&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11140">OFBIZ-11140</a>) </li> 
    <li>Inlines &quot;UtilGenerics#checkCollectionCast&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Adds unit tests for &quot;UtilGenerics#checkCollectionCast&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#checkStack(Object)&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Makes &quot;UtilGenerics#checkCollection(Object, Class)&quot; more generic (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>)</li> 
    <li>Inlines &quot;UtilGenerics#checkCollectionContainment&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Rewrites &quot;UtilGenerics#checkMap&quot; to do a simple cast (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Removes useless &quot;UtilGenerics#toMap&quot; overloads (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Rewrites &quot;UtilGenerics#toList&quot; and &quot;UtilGenerics#toMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#toMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#toList&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#checkSet&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#checkMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#checkList&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#checkCollection(Object)&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Uses &quot;java.util.Base64&quot; instead of org.apache.ofbiz.base.util.Base64 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11142">OFBIZ-11142</a>)</li> 
    <li>Uses &quot;StandardCharsets.UTF_8&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11142">OFBIZ-11142</a>) </li> 
    <li>Removes useless imports (<a href="https://issues.apache.org/jira/browse/OFBIZ-11142">OFBIZ-11142</a>) </li> 
    <li>Limits selectable glAccounts in findGlAccountReconciliation(s) to associated glAccounts (<a href="https://issues.apache.org/jira/browse/OFBIZ-10841">OFBIZ-10841</a>)</li> 
    <li>Adds licence information for EntityJsonReader (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1863956">r1863956</a>)</li> 
    <li>Improves alignment of Status, OrderDate and PartyId column header on Find Orders page (<a href="https://issues.apache.org/jira/browse/OFBIZ-11116">OFBIZ-11116</a>)</li> 
    <li>Checks embedded Javascript libs vulnerabilities using retire.js (<a href="https://issues.apache.org/jira/browse/OFBIZ-10678">OFBIZ-10678</a>)</li> 
    <li>Improves ShoppingCartEvents (<a href="https://issues.apache.org/jira/browse/OFBIZ-11127">OFBIZ-11127</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Navigates from a domain to another with automated signed in authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-10307">OFBIZ-10307</a>)</li> 
    <li>Undoes use of &quot;UtilMisc#toList&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11140">OFBIZ-11140</a>) </li> 
    <li>Uses &quot;UtilGenerics#checkCollection&quot; when possible (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#checkSet&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#checkMap&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Inlines &quot;UtilGenerics#checkList&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-11141">OFBIZ-11141</a>) </li> 
    <li>Checks embedded Javascript libs vulnerabilities using retire.js (<a href="https://issues.apache.org/jira/browse/OFBIZ-10678">OFBIZ-10678</a>)</li> 
  </ul> 
  <h2>Bugfixes</h2>

Functional and technical bugfixes:


  <h3>Framework</h3> 
  <ul> 
    <li>Fixes: Error message is displayed after log in ecommerce if userlogin includes spaces (<a href="https://issues.apache.org/jira/browse/OFBIZ-10671">OFBIZ-10671</a>)</li> 
    <li>Fixes: Unknown request [images]; this request does not exist or cannot be called directly. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10895">OFBIZ-10895</a>)</li> 
    <li>Fixes: EntityCondition(EntityOperator, fields...) raise exception with a null value (<a href="https://issues.apache.org/jira/browse/OFBIZ-11143">OFBIZ-11143</a>)</li> 
    <li>Reverts: Resolves build.gradle warnings (<a href="https://issues.apache.org/jira/browse/OFBIZ-11133">OFBIZ-11133</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Fixes: Error message is displayed after log in ecommerce if userlogin includes spaces (<a href="https://issues.apache.org/jira/browse/OFBIZ-10671">OFBIZ-10671</a>)</li> 
  </ul> 
  <h2>Documentation</h2> 
  <ul> 
    <li>Adds a missing new line in main README.adoc in order to get the 2 bullets of &quot;Manual setting&quot; section correctly (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1862461">r1862461</a>)</li> 
  </ul>
