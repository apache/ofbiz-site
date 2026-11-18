---
layout: post
title: 'Apache OFBiz News - March 2019 '
date: '2019-05-03T05:17:36+00:00'
permalink: apache-ofbiz-news-march-2019
---
## Apache OFBiz News March 2019

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about a new Youtube playlist, some improvements in order and return flow along with our usual list of features and improvements.

## Applied OWASP Dependency Check as per Gradle recommendation

[OWASP Dependency Check](https://cwiki.apache.org/confluence/display/OFBIZ/About+OWASP+Dependency+Check) is a tool for checking the Java libraries you use have no security issues. The feature was used when OFBiz worked with [Ant](https://ant.apache.org/) build tool. Since OFBiz now uses [Gradle](https://gradle.org/), all dependent libraries (i.e. also dependencies from the libraries OFBiz uses and recursively) are loaded by Gradle and analyzed by the OWASP Dependency Check plugin. So it's materially impossible to check all the possible vulnerabilities.&nbsp;Further explorations concluded that with&nbsp;[Gradle 2.1](https://docs.gradle.org/2.1/userguide/plugins.html) it is recommended to use the plugins {} block for binary plugins instead of the “traditional” apply() method. Hence, it will be applied as per the Gradle recommendation in plugins block.&nbsp;

Please refer to [OFBIZ-10700](https://issues.apache.org/jira/browse/OFBIZ-10700) and [Mail thread](https://markmail.org/message/7utt6ylkntjzix27).

Thanks, Jacques Le Roux, Mathieu Lirzin, Shi Jinghai, Michael Brohl, and to everyone who contributed towards this effort.

## Improvements in storeOrder Service

The current implementation of storeOrder service doesn't support some of the OrderHeader fields namely priority and isRushOrder. The community decided to add conditional support for these fields, that means if the value comes in the parameter then it will be stored otherwise not.

Please refer to [OFBIZ-10855](https://issues.apache.org/jira/browse/OFBIZ-10855) and [Mail thread](https://markmail.org/message/wofzndanmgogfrfs).

Thanks, Rishi Solanki for initiating and putting efforts in this direction, Ankush Upadhyay, Suraj Khurana, and Swapnil M Mane for their valuable inputs.

## Improvement in return order to put a constraint on after no of days return is allowed

In the current implementation, we can create a return for order without checking when that order is placed, it might be years long. The proposal is to allow creating return till after that specific day of order completion.

The proposal is still under discussion. Please refer to [Mail thread](https://markmail.org/message/fveuticnzafva4wy).

Thanks, Suraj Khurana for initiating the discussion and everyone who participated by providing their valuable inputs.

## Updates on OFBiz Video Tutorial Series

In order to improve the OFBiz learning curve, a new playlist is created. Main highlights of this playlist are:

1. It contains the videos in a sequential manner from beginner to expert.
2. This playlist will always be in sync with the trunk branch.

The main idea is to always have videos which work with OFBiz trunk branch.

Please refer to [Youtube Playlist](https://www.youtube.com/watch?v=bIS2kftvsq4&list=PLobIkeUbRXqc-lwvbdbajPJdbWjFm82Dj) and [Mail thread](https://markmail.org/message/yfmpadhfibiyarpn).

Thanks very much, Pranay and Swapnil M Mane for their continuous efforts

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Improves readabillity of Gralde build script. ([OFBIZ-10695](https://issues.apache.org/jira/browse/OFBIZ-10695%20target=))
- Improves the use of Gradle Plugin DSL ([OFBIZ-10700](https://issues.apache.org/jira/browse/OFBIZ-10700%20target=))
- Simplifies integration tests. Now a common dispatch and delegator will be used for tests. ([OFBIZ-10723](https://issues.apache.org/jira/browse/OFBIZ-10723%20target=))
- Removes Groovy Base script redundancy in GroovyUtil.java. ([OFBIZ-10806](https://issues.apache.org/jira/browse/OFBIZ-10806%20target=))
- Simplifies ‘GroovyUtil#runScriptAtLocation’ and adds javadoc ([OFBIZ-10807](https://issues.apache.org/jira/browse/OFBIZ-10807%20target=))
- Inlines ‘serviceInvoker’ method in Groovy engine. ([OFBIZ-10808](https://issues.apache.org/jira/browse/OFBIZ-10808%20target=))
- Simplifies ‘AbstractEngine#getLocation’ and adds javadoc. ([OFBIZ-10809](https://issues.apache.org/jira/browse/OFBIZ-10809%20target=))
- Improves ‘AbstractEngine#createLocationMap’ ([OFBIZ-10810](https://issues.apache.org/jira/browse/OFBIZ-10810%20target=))
- Rewrites ‘GroovyUtil#parseClass’ ([OFBIZ-10822](https://issues.apache.org/jira/browse/OFBIZ-10822%20target=))
- Removes unused ‘GroovyUtil#loadClass’ ([OFBIZ-10820](https://issues.apache.org/jira/browse/OFBIZ-10820%20target=))
- Uses ‘FlexibleLocation#resolveLocation(String)’ instead of FlexibleLocation#resolveLocation(String, ClassLoader) method. ([OFBIZ-10821](https://issues.apache.org/jira/browse/OFBIZ-10821%20target=))
- Disallows extension of the script helper bindings. ([OFBIZ-10825](https://issues.apache.org/jira/browse/OFBIZ-10825%20target=))
- Rewrites ‘ComponentConfig’ constructor. ([OFBIZ-10829](https://issues.apache.org/jira/browse/OFBIZ-10829%20target=))
- Replaces document.write() occurrences with some legitimate code. ([OFBIZ-10759](https://issues.apache.org/jira/browse/OFBIZ-10759%20target=))
- Improves ObjectInputStream class. Adds FlexibleStringExpander, sun.util.calendar.ZoneInfo, java.sql.Timestamp and java.util.Date. ([OFBIZ-10837](https://issues.apache.org/jira/browse/OFBIZ-10837%20target=))
- Improves Store Order Service. UtilValidate method is now used instead of checking null. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855307" target="_blank">r1855307</a>)
- Adds Short Messaging Service(SMS) Gateway Integration. ([OFBIZ-10457](https://issues.apache.org/jira/browse/OFBIZ-10457%20target=))
- Adds line separator while generating svn/git info footer. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855501" target="_blank">r1855501</a>)
- Simplifies build scriopt using ‘jvmArguments’ only once. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855669" target="_blank">r1855669</a>)
- Gathers the javadoc options in a unique block. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855675" target="_blank">r1855675</a>)
- Gathers the definition of the jar manifest attributes. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855676" target="_blank">r1855676</a>)
- Provides multi-arguments to the ‘Exec#args’ method. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855678" target="_blank">r1855678</a>)
- Refactors build.gradle. JVM arguments to ‘createOfbizCommandTask’ will be used now directly. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855795" target="_blank">r1855795</a>)
- Refactors build.gradle. ‘createOfbizCommandTask’ Debug mode is set to false by default and can be activated by ad-hoc override. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855796" target="_blank">r1855796</a>)
- Refactors ‘:jar’ task output archive name in build.gradle. ‘createOfbizCommandTask’ method now references the ‘outputs’ property instead of hard-coding the jar file name. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855797" target="_blank">r1855797</a>)
- Refactors build.gradle. Merges regexps inside ‘createOfbizCommandTask’. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855798" target="_blank">r1855798</a>)
- Improves Webtools screen rendering time. ([OFBIZ-10716](https://issues.apache.org/jira/browse/OFBIZ-10716))
- Improves error message page to support theming ([OFBIZ-10753](https://issues.apache.org/jira/browse/OFBIZ-10753))
- Adds ‘:distTar’ and ‘:distZip’ gradle tasks. ([OFBIZ-10866](https://issues.apache.org/jira/browse/OFBIZ-10866))
- Improves the use of Gradle dependency types. 'compile’, ‘testCompile’ and ‘runtime’ dependency types has been superseded by ‘implementation’, ‘testImplementation’ and ‘runtimeOnly’ in recent Gradle versions. ([OFBIZ-10871](https://issues.apache.org/jira/browse/OFBIZ-10871))
- Rewrites ‘getJarManifestClasspathForCurrentOs’ method. ([OFBIZ-10872](https://issues.apache.org/jira/browse/OFBIZ-10872))
- Adds ability to configure stackTrace displaying on ftl rendering. ([OFBIZ-10817](https://issues.apache.org/jira/browse/OFBIZ-10817))
- Extendes ReturnType entity with parentTypeId and hasTable fields to make it consistent with other type entities. ([OFBIZ-10868](https://issues.apache.org/jira/browse/OFBIZ-10868))
- Correctes typo in 'GiftCertificate' UiLabels. ([OFBIZ-10861](https://issues.apache.org/jira/browse/OFBIZ-10861))
- Sets OrderId in FinAccountTrans while gift card redemption and creation. ([OFBIZ-10867](https://issues.apache.org/jira/browse/OFBIZ-10867))
- Refactors GiftCertificateServices.java. Send Email services will now be called asynchronously to prevent rollbacks. ([OFBIZ-10860](https://issues.apache.org/jira/browse/OFBIZ-10860))
- Replaces inline js with external js in renderDropDownField macro. ([OFBIZ-9849](https://issues.apache.org/jira/browse/OFBIZ-9849))
- Switchs ftpNotificationEnabled test condition to respect configuration meaning. ([OFBIZ-10245](https://issues.apache.org/jira/browse/OFBIZ-10245))
- Rewrites ‘getDirectoryInActiveComponentsIfExists’ in build script. ([OFBIZ-10695](https://issues.apache.org/jira/browse/OFBIZ-10695))
- Prepares for JDK11 update. Updates following code to fix warning with respect to JDK11 - Replaced Class::newInstance occurrences - Removed deprecated override method Object::finalize. ([OFBIZ-10757](https://issues.apache.org/jira/browse/OFBIZ-10757))
- Modifies the log level from info to verbose if internal sso is disabled. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1854979" target="_blank">r1854979</a>)
- Adds unit test case for service - createAcctgTrans. ([OFBIZ-1463](https://issues.apache.org/jira/browse/OFBIZ-1463))
- Reverts changes done at r#1854306. Removes the extra space from CommonBranch uiLabel values. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855497" target="_blank">r1855497</a>)
- Adds unit test case for service - AddRequirementTask. ([OFBIZ-8931](https://issues.apache.org/jira/browse/OFBIZ-8931))
- Adds unit test case for service - getDataResource. ([OFBIZ-8423](https://issues.apache.org/jira/browse/OFBIZ-8423))
- Adds unit test case for service - updateProductCategory. ([OFBIZ-8579](https://issues.apache.org/jira/browse/OFBIZ-8579))
- Adds unit test case for service - CreateReturnAdjustment. ([OFBIZ-8857](https://issues.apache.org/jira/browse/OFBIZ-8857))
- Adds unit test case for service - createProductFeatureType ([OFBIZ-9089](https://issues.apache.org/jira/browse/OFBIZ-9089))

### Plugins

- Replaces document.write() occurrences with some legitimate code. ([OFBIZ-10759](https://issues.apache.org/jira/browse/OFBIZ-10759%20target=))
- Improves Markup for the blogs screen. ([OFBIZ-10578](https://issues.apache.org/jira/browse/OFBIZ-10578))
- Improves UI at Configurable Product detail page. ([OFBIZ-10578](https://issues.apache.org/jira/browse/OFBIZ-10578))
- Improves UI at checkout page. ([OFBIZ-10578](https://issues.apache.org/jira/browse/OFBIZ-10578))
- Prepares for JDK11 update. Updates following code to fix warning with respect to JDK11 - Replaced Class::newInstance occurrences - Removed deprecated override method Object::finalize. ([OFBIZ-10757](https://issues.apache.org/jira/browse/OFBIZ-10757))
- Adds Short Messaging Service(SMS) Gateway Integration. ([OFBIZ-10457](https://issues.apache.org/jira/browse/OFBIZ-10457))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: simpleTypeConvert always returns Null for Document, Document Type and Notation Node. ([OFBIZ-10832](https://issues.apache.org/jira/browse/OFBIZ-10832%20target=))
- Fixes: Service failed to mark expired authorized payments of Authorize.net as void. ([OFBIZ-10727](https://issues.apache.org/jira/browse/OFBIZ-10727))
- Adapts some javadoc in ObjectType.java and JWTManager.java to let the build succeed. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855674" target="_blank">r1855674</a>)
- Updates Tomcat to 9.0.16 due to CVE-2019-0199 to prevent excessive numbers of SETTINGS frames und unclosed streams. ([OFBIZ-10873](https://issues.apache.org/jira/browse/OFBIZ-10873))
- Fixes: Missing oldStatusId produce an error when no status valid change record found. ([OFBIZ-10377](https://issues.apache.org/jira/browse/OFBIZ-10377))
- Fixes: Error message is populating while clicking on product barcode. ([OFBIZ-10743](https://issues.apache.org/jira/browse/OFBIZ-10743))
- Fixes: Incorrect decorator being used over view all promotions and view promotion details screen causing back navigation. ([OFBIZ-10859](https://issues.apache.org/jira/browse/OFBIZ-10859))

### Plugins

- Fixes: Product image is not displayed on showcart page of ecommerce. ([OFBIZ-10738](https://issues.apache.org/jira/browse/OFBIZ-10738))
- Updates Tomcat to 9.0.16 due to CVE-2019-0199 to prevent excessive numbers of SETTINGS frames und unclosed streams. ([OFBIZ-10873](https://issues.apache.org/jira/browse/OFBIZ-10873))<br>
- Fixes: Upload new file button is not visible on My Profile page. ([OFBIZ-10851](https://issues.apache.org/jira/browse/OFBIZ-10851))
