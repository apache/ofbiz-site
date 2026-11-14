---
layout: post
title: Apache OFBiz News - July 2019
date: '2019-09-02T06:58:03+00:00'
permalink: apache-ofbiz-news-july-2019
---
## Apache OFBiz News July 2019

Welcome to our regular monthly round-up of OFBiz news. This month we have news about Apache OFBiz and Apache Camel integration along with our usual list of features, improvements and Statistics.

## Apache OFBiz and Camel integration<br>

The community has decided to include OFBiz and Camel integration in the official OFBiz plugins.<br>Thank you Bilgin Ibryam for your contribution and Girish Vasmatkar for further working on it and to everyone who participated in the discussion.<br>The email communication can be found [here](https://s.apache.org/5y2l7) and the progress of this effort can be tracked at [OFBIZ-11147](https://issues.apache.org/jira/browse/OFBIZ-11147). <br>

## <span style="letter-spacing: -0.018em;">OFBiz Statistics</span>

Apache Kibble tracks some Apache OFBiz community statistics on its demo instance, so we have highlighted a few of our stats for the last month:

- **JIRA Issue Tracker:** 14 issues were opened and 23 issues were closed (6 different people helped to close these issues)
- **Code Change and Commit Activity:**
  - **Framework:** 69 commits to the code base that changed 29,306 lines of code (5 committers were active)
  - **Plugins:** 12 commits to the code base that changed 76,978 lines of code (3 committers were active)
- **Mailing Lists:**
  - **Dev:** 50 emails sent and 13 topics discussed (15 different people)
  - **User:** 105 emails sent and 37 topics discussed (41 different people)

  <p> </p>

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Makes &quot;FormRenderer#getUsedFields&quot; more generic ([OFBIZ-11135](https://issues.apache.org/jira/browse/OFBIZ-11135))
- Rewrites &quot;Start#determineCommandType&quot; ([OFBIZ-11137](https://issues.apache.org/jira/browse/OFBIZ-11137))
- Avoids confusing indirections in &quot;StartupControlPanel#start&quot; ([OFBIZ-11137](https://issues.apache.org/jira/browse/OFBIZ-11137))
- Removes support for “ofbiz-containers.xml” ([OFBIZ-11100](https://issues.apache.org/jira/browse/OFBIZ-11100))
- Deprecates &quot;ContainerConfig#getConfiguration(String, String)&quot; ([OFBIZ-11100](https://issues.apache.org/jira/browse/OFBIZ-11100))
- Inlines &quot;filterContainersHavingMatchingLoaders&quot; ([OFBIZ-11100](https://issues.apache.org/jira/browse/OFBIZ-11100))
- Access configurations inside &quot;loadContainersFromConfigurations&quot; ([OFBIZ-11100](https://issues.apache.org/jira/browse/OFBIZ-11100))
- Passes directly the loaders to &quot;loadContainersFromConfigurations&quot; ([OFBIZ-11100](https://issues.apache.org/jira/browse/OFBIZ-11100))
- Moves &quot;AdminServer&quot; inside a container ([OFBIZ-11136](https://issues.apache.org/jira/browse/OFBIZ-11136))
- Removes unnecessary dependency on &quot;junit-dep&quot; artifact ([OFBIZ-11139](https://issues.apache.org/jira/browse/OFBIZ-11139))
- Upgrades Hamcrest library to version 2.1 ([OFBIZ-11139](https://issues.apache.org/jira/browse/OFBIZ-11139))
- Inlines an &quot;UtilHttp#getPathInfoOnlyParameterMap&quot; overload ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Adds unit tests for &quot;UtilHttp#getPathInfoOnlyParameterMap&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Refactors &quot;UtilHttp#getPathInfoOnlyParameterMap&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Removes unused &quot;UtilHttp#getParameterMap&quot; overload ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Adds unit tests for &quot;UtilHttp#getParameterMap&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Refactors &quot;UtilHttp#getParameterMap&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Uses a predicate in &quot;UtilHttp#getPathInfoOnlyParameterMap&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Uses a predicate in &quot;UtilHttp#getParameterMap&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Removes unused &quot;UtilHttp#checkURLforSpiders&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Removes useless &quot;UtilHttp#parametersToAttributes&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Uses &quot;HttpServletRequest#getParameterMap&quot; when possible ([r1863404](https://svn.apache.org/viewvc?view=revision&revision=1863404))
- Adds unit tests for &quot;UtilHttp#makeParamValueFromComposite&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Refactors &quot;UtilHttp#makeParamValueFromComposite&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Adds unit tests for &quot;UtilHttp#makeParamListWithSuffix&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Refactors &quot;Makeparamlistwithsuffix&quot; ([OFBIZ-11138](https://issues.apache.org/jira/browse/OFBIZ-11138))
- Removes &quot;UtilMisc#toList&quot; ([OFBIZ-11140](https://issues.apache.org/jira/browse/OFBIZ-11140))
- Removes useless &quot;UtilObject#equalsHelper&quot; ([OFBIZ-11140](https://issues.apache.org/jira/browse/OFBIZ-11140))
- Removes useless &quot;UtilObject#getBytes&quot; ([OFBIZ-11140](https://issues.apache.org/jira/browse/OFBIZ-11140))
- Removes useless &quot;UtilObject#compareToHelper&quot; ([OFBIZ-11140](https://issues.apache.org/jira/browse/OFBIZ-11140))
- Inlines &quot;UtilGenerics#checkCollectionCast&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Adds unit tests for &quot;UtilGenerics#checkCollectionCast&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#checkStack(Object)&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Makes &quot;UtilGenerics#checkCollection(Object, Class)&quot; more generic ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#checkCollectionContainment&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Rewrites &quot;UtilGenerics#checkMap&quot; to do a simple cast ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Removes useless &quot;UtilGenerics#toMap&quot; overloads ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Rewrites &quot;UtilGenerics#toList&quot; and &quot;UtilGenerics#toMap&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#toMap&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#toList&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#checkSet&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#checkMap&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#checkList&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#checkCollection(Object)&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Uses &quot;java.util.Base64&quot; instead of org.apache.ofbiz.base.util.Base64 ([OFBIZ-11142](https://issues.apache.org/jira/browse/OFBIZ-11142))
- Uses &quot;StandardCharsets.UTF\_8&quot; ([OFBIZ-11142](https://issues.apache.org/jira/browse/OFBIZ-11142))
- Removes useless imports ([OFBIZ-11142](https://issues.apache.org/jira/browse/OFBIZ-11142))
- Limits selectable glAccounts in findGlAccountReconciliation(s) to associated glAccounts ([OFBIZ-10841](https://issues.apache.org/jira/browse/OFBIZ-10841))
- Adds licence information for EntityJsonReader ([r1863956](https://svn.apache.org/viewvc?view=revision&revision=1863956))
- Improves alignment of Status, OrderDate and PartyId column header on Find Orders page ([OFBIZ-11116](https://issues.apache.org/jira/browse/OFBIZ-11116))
- Checks embedded Javascript libs vulnerabilities using retire.js ([OFBIZ-10678](https://issues.apache.org/jira/browse/OFBIZ-10678))
- Improves ShoppingCartEvents ([OFBIZ-11127](https://issues.apache.org/jira/browse/OFBIZ-11127))

### Plugins

- Navigates from a domain to another with automated signed in authentication ([OFBIZ-10307](https://issues.apache.org/jira/browse/OFBIZ-10307))
- Undoes use of &quot;UtilMisc#toList&quot; ([OFBIZ-11140](https://issues.apache.org/jira/browse/OFBIZ-11140))
- Uses &quot;UtilGenerics#checkCollection&quot; when possible ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#checkSet&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#checkMap&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Inlines &quot;UtilGenerics#checkList&quot; ([OFBIZ-11141](https://issues.apache.org/jira/browse/OFBIZ-11141))
- Checks embedded Javascript libs vulnerabilities using retire.js ([OFBIZ-10678](https://issues.apache.org/jira/browse/OFBIZ-10678))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: Error message is displayed after log in ecommerce if userlogin includes spaces ([OFBIZ-10671](https://issues.apache.org/jira/browse/OFBIZ-10671))
- Fixes: Unknown request [images]; this request does not exist or cannot be called directly. ([OFBIZ-10895](https://issues.apache.org/jira/browse/OFBIZ-10895))
- Fixes: EntityCondition(EntityOperator, fields...) raise exception with a null value ([OFBIZ-11143](https://issues.apache.org/jira/browse/OFBIZ-11143))
- Reverts: Resolves build.gradle warnings ([OFBIZ-11133](https://issues.apache.org/jira/browse/OFBIZ-11133))

### Plugins

- Fixes: Error message is displayed after log in ecommerce if userlogin includes spaces ([OFBIZ-10671](https://issues.apache.org/jira/browse/OFBIZ-10671))

## Documentation

- Adds a missing new line in main README.adoc in order to get the 2 bullets of &quot;Manual setting&quot; section correctly ([r1862461](https://svn.apache.org/viewvc?view=revision&revision=1862461))
