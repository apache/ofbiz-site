---
layout: post
title: 'Apache OFBiz News - March 2019 '
date: '2019-05-03T05:17:36+00:00'
permalink: apache-ofbiz-news-march-2019
---
<h2>Apache OFBiz News March 2019</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have more news about a new Youtube playlist, some improvements in order and return flow along with our usual list of features and improvements.</p> 
  <h2>Applied OWASP <g class="gr_ gr_78 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="78" data-gr-id="78">Dependency Check</g> as per Gradle recommendation</h2> 
  <p><a href="https://cwiki.apache.org/confluence/display/OFBIZ/About+OWASP+Dependency+Check">OWASP <g class="gr_ gr_79 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="79" data-gr-id="79">Dependency Check</g></a> is a tool for checking the Java libraries you use have no security issues. The feature was used when OFBiz worked with <a href="https://ant.apache.org/">Ant</a> build tool. Since OFBiz now uses <a href="https://gradle.org/">Gradle</a>, all dependent libraries (i.e. also dependencies from the libraries OFBiz uses and recursively) are loaded by Gradle and analyzed by the OWASP <g class="gr_ gr_80 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="80" data-gr-id="80">Dependency Check</g> plugin. So it's materially impossible to check all the possible vulnerabilities.&nbsp;Further explorations concluded that with&nbsp;<a href="https://docs.gradle.org/2.1/userguide/plugins.html">Gradle 2.1</a> it is recommended to use the plugins {} block for binary plugins instead of the “traditional” apply() method. Hence, it will be applied as per the Gradle recommendation in plugins block.&nbsp;</p> 
  <p>Please refer to <a href="https://issues.apache.org/jira/browse/OFBIZ-10700">OFBIZ-10700</a> and <a href="https://markmail.org/message/7utt6ylkntjzix27">Mail thread</a>.</p> 
  <p>Thanks, Jacques Le Roux, Mathieu Lirzin, Shi Jinghai, Michael Brohl, and to everyone who contributed towards this effort.</p> 
  <h2>Improvements in <g class="gr_ gr_81 gr-alert gr_spell gr_inline_cards gr_run_anim ContextualSpelling ins-del multiReplace" id="81" data-gr-id="81">storeOrder</g> Service</h2> 
  <p>The current implementation of storeOrder service doesn't support some of the OrderHeader fields namely priority and isRushOrder. The community decided to add conditional support for these fields, that means if the value comes in the parameter then it will be stored otherwise not.</p> 
  <p>Please refer to <a href="https://issues.apache.org/jira/browse/OFBIZ-10855">OFBIZ-10855</a> and <a href="https://markmail.org/message/wofzndanmgogfrfs">Mail thread</a>.</p> 
  <p>Thanks, Rishi Solanki for initiating and putting efforts in this direction, Ankush Upadhyay, Suraj Khurana, and Swapnil M Mane for their valuable inputs.</p> 
  <h2>Improvement in return order to put a constraint on after no of days return is allowed</h2> 
  <p>In the current implementation, we can create a return for order without checking when that order is placed, it might be years long. The proposal is to allow creating return till after that specific day of order completion.</p> 
  <p>The proposal is still under discussion. Please refer to <a href="https://markmail.org/message/fveuticnzafva4wy">Mail thread</a>.</p> 
  <p>Thanks, Suraj Khurana for initiating the discussion and everyone who participated by providing their valuable inputs.</p> 
  <h2>Updates on OFBiz Video Tutorial Series</h2> 
  <p>In order to improve the OFBiz learning curve, a new playlist is created. Main highlights of this playlist are:</p> 
  <ol> 
    <li>It contains the videos in a sequential manner from beginner to expert.</li> 
    <li>This playlist will always be in sync with the trunk branch.</li> 
  </ol> 
  <p>The main idea is to always have videos which work with OFBiz trunk branch.</p> 
  <p>Please refer to <a href="https://www.youtube.com/watch?v=bIS2kftvsq4&amp;list=PLobIkeUbRXqc-lwvbdbajPJdbWjFm82Dj">Youtube Playlist</a> and <a href="https://markmail.org/message/yfmpadhfibiyarpn">Mail thread</a>.</p> 
  <p>Thanks very much, Pranay and Swapnil M Mane for their continuous efforts</p> 
  <h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

  <h3>Framework</h3> 
  <ul> 
    <li>Improves readabillity of Gralde build script. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10695%20target=">OFBIZ-10695</a>)</li> 
    <li>Improves the use of Gradle Plugin DSL (<a href="https://issues.apache.org/jira/browse/OFBIZ-10700%20target=">OFBIZ-10700</a>)</li> 
    <li>Simplifies integration tests. Now a common dispatch and delegator will be used for tests. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10723%20target=">OFBIZ-10723</a>)</li> 
    <li>Removes Groovy Base script redundancy in GroovyUtil.java. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10806%20target=">OFBIZ-10806</a>)</li> 
    <li>Simplifies ‘GroovyUtil#runScriptAtLocation’ and adds javadoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10807%20target=">OFBIZ-10807</a>)</li> 
    <li>Inlines ‘serviceInvoker’ method in Groovy engine. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10808%20target=">OFBIZ-10808</a>)</li> 
    <li>Simplifies ‘AbstractEngine#getLocation’ and adds javadoc. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10809%20target=">OFBIZ-10809</a>)</li> 
    <li>Improves ‘AbstractEngine#createLocationMap’ (<a href="https://issues.apache.org/jira/browse/OFBIZ-10810%20target=">OFBIZ-10810</a>)</li> 
    <li>Rewrites ‘GroovyUtil#parseClass’ (<a href="https://issues.apache.org/jira/browse/OFBIZ-10822%20target=">OFBIZ-10822</a>)</li> 
    <li>Removes unused ‘GroovyUtil#loadClass’ (<a href="https://issues.apache.org/jira/browse/OFBIZ-10820%20target=">OFBIZ-10820</a>)</li> 
    <li>Uses ‘FlexibleLocation#resolveLocation(String)’ instead of FlexibleLocation#resolveLocation(String, ClassLoader) method. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10821%20target=">OFBIZ-10821</a>)</li> 
    <li>Disallows extension of the script helper bindings. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10825%20target=">OFBIZ-10825</a>)</li> 
    <li>Rewrites ‘ComponentConfig’ constructor. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10829%20target=">OFBIZ-10829</a>)</li> 
    <li>Replaces document.write() occurrences with some legitimate code. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10759%20target=">OFBIZ-10759</a>)</li> 
    <li>Improves ObjectInputStream class. Adds FlexibleStringExpander, sun.util.calendar.ZoneInfo, java.sql.Timestamp and java.util.Date. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10837%20target=">OFBIZ-10837</a>)
        </li>
    <li>Improves Store Order Service. UtilValidate method is now used instead of checking null. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855307" target="_blank">r1855307</a>)</li> 
    <li>Adds Short Messaging Service(SMS) Gateway Integration. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10457%20target=">OFBIZ-10457</a>)</li> 
    <li>Adds line separator while generating svn/git info footer. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855501" target="_blank">r1855501</a>)</li> 
    <li>Simplifies build scriopt using ‘jvmArguments’ only once. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855669" target="_blank">r1855669</a>)</li> 
    <li>Gathers the javadoc options in a unique block. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855675" target="_blank">r1855675</a>)</li> 
    <li>Gathers the definition of the jar manifest attributes. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855676" target="_blank">r1855676</a>)</li> 
    <li>Provides multi-arguments to the ‘Exec#args’ method. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855678" target="_blank">r1855678</a>)</li> 
    <li>Refactors build.gradle. JVM arguments to ‘createOfbizCommandTask’ will be used now directly. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855795" target="_blank">r1855795</a>)</li> 
    <li>Refactors build.gradle. ‘createOfbizCommandTask’ Debug mode is set to false by default and can be activated by ad-hoc override. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855796" target="_blank">r1855796</a>)</li> 
    <li>Refactors ‘:jar’ task output archive name in build.gradle. ‘createOfbizCommandTask’ method now references the ‘outputs’ property instead of hard-coding the jar file name. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855797" target="_blank">r1855797</a>)</li> 
    <li>Refactors build.gradle. Merges regexps inside ‘createOfbizCommandTask’. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855798" target="_blank">r1855798</a>)</li> 
    <li>Improves Webtools screen rendering time. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10716">OFBIZ-10716</a>)</li> 
    <li>Improves error message page to support theming (<a href="https://issues.apache.org/jira/browse/OFBIZ-10753">OFBIZ-10753</a>)</li> 
    <li>Adds ‘:distTar’ and ‘:distZip’ gradle tasks. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10866">OFBIZ-10866</a>)</li> 
    <li>Improves the use of Gradle dependency types. 'compile’, ‘testCompile’ and ‘runtime’ dependency types has been superseded by ‘implementation’, ‘testImplementation’ and ‘runtimeOnly’ in recent Gradle versions. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10871">OFBIZ-10871</a>)</li> 
    <li>Rewrites ‘getJarManifestClasspathForCurrentOs’ method. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10872">OFBIZ-10872</a>)</li> 
    <li>Adds ability to configure stackTrace displaying on ftl rendering. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10817">OFBIZ-10817</a>)</li> 
    <li>Extendes ReturnType entity with parentTypeId and hasTable fields to make it consistent with other type entities. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10868">OFBIZ-10868</a>)</li> 
    <li>Correctes typo in 'GiftCertificate' UiLabels. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10861">OFBIZ-10861</a>)</li> 
    <li>Sets OrderId in FinAccountTrans while gift card redemption and creation. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10867">OFBIZ-10867</a>)</li> 
    <li>Refactors GiftCertificateServices.java. Send Email services will now be called asynchronously to prevent rollbacks. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10860">OFBIZ-10860</a>)</li> 
    <li>Replaces inline js with external js in renderDropDownField macro. (<a href="https://issues.apache.org/jira/browse/OFBIZ-9849">OFBIZ-9849</a>)</li> 
    <li>Switchs ftpNotificationEnabled test condition to respect configuration meaning. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10245">OFBIZ-10245</a>)</li> 
    <li>Rewrites ‘getDirectoryInActiveComponentsIfExists’ in build script. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10695">OFBIZ-10695</a>)</li> 
    <li>Prepares for JDK11 update. Updates following code to fix warning with respect to JDK11 - Replaced Class::newInstance occurrences - Removed deprecated override method Object::finalize. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10757">OFBIZ-10757</a>)</li> 
    <li>Modifies the log level from info to verbose if internal sso is disabled. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1854979" target="_blank">r1854979</a>)</li> 
    <li>Adds unit test case for service - createAcctgTrans. (<a href="https://issues.apache.org/jira/browse/OFBIZ-1463">OFBIZ-1463</a>)</li> 
    <li>Reverts changes done at r#1854306. Removes the extra space from CommonBranch uiLabel values. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855497" target="_blank">r1855497</a>)</li> 
    <li>Adds unit test case for service - AddRequirementTask. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8931">OFBIZ-8931</a>)</li> 
    <li>Adds unit test case for service - getDataResource. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8423">OFBIZ-8423</a>)</li> 
    <li>Adds unit test case for service - updateProductCategory. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8579">OFBIZ-8579</a>)</li> 
    <li>Adds unit test case for service - CreateReturnAdjustment. (<a href="https://issues.apache.org/jira/browse/OFBIZ-8857">OFBIZ-8857</a>)</li> 
    <li>Adds unit test case for service - createProductFeatureType (<a href="https://issues.apache.org/jira/browse/OFBIZ-9089">OFBIZ-9089</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Replaces document.write() occurrences with some legitimate code. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10759%20target=">OFBIZ-10759</a>)</li> 
    <li>Improves Markup for the blogs screen. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10578">OFBIZ-10578</a>)</li> 
    <li>Improves UI at Configurable Product detail page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10578">OFBIZ-10578</a>)</li> 
    <li>Improves UI at checkout page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10578">OFBIZ-10578</a>)</li> 
    <li>Prepares for JDK11 update. Updates following code to fix warning with respect to JDK11 - Replaced Class::newInstance occurrences - Removed deprecated override method Object::finalize. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10757">OFBIZ-10757</a>)</li> 
    <li>Adds Short Messaging Service(SMS) Gateway Integration. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10457">OFBIZ-10457</a>)</li> 
  </ul> 
  <h2>Bugfixes</h2>
Functional and technical bugfixes:

  <h3>Framework</h3> 
  <ul> 
    <li>Fixes: simpleTypeConvert always returns Null for Document, Document Type and Notation Node. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10832%20target=">OFBIZ-10832</a>)</li> 
    <li>Fixes: Service failed to mark expired authorized payments of Authorize.net as void. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10727">OFBIZ-10727</a>)</li> 
    <li>Adapts some javadoc in ObjectType.java and JWTManager.java to let the build succeed. (<a href="https://svn.apache.org/viewvc?view=revision&amp;revision=1855674" target="_blank">r1855674</a>)</li> 
    <li>Updates Tomcat to 9.0.16 due to CVE-2019-0199 to prevent excessive numbers of SETTINGS frames und unclosed streams. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10873">OFBIZ-10873</a>)</li> 
    <li>Fixes: Missing oldStatusId produce an error when no status valid change record found. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10377">OFBIZ-10377</a>)</li> 
    <li>Fixes: Error message is populating while clicking on product barcode. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10743">OFBIZ-10743</a>)</li> 
    <li>Fixes: Incorrect decorator being used over view all promotions and view promotion details screen causing back navigation. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10859">OFBIZ-10859</a>)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Fixes: Product image is not displayed on showcart page of ecommerce. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10738">OFBIZ-10738</a>)</li> 
    <li>Updates Tomcat to 9.0.16 due to CVE-2019-0199 to prevent excessive numbers of SETTINGS frames und unclosed streams. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10873">OFBIZ-10873</a>)<br /></li> 
    <li>Fixes: Upload new file button is not visible on My Profile page. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10851">OFBIZ-10851</a>)</li> 
  </ul>
