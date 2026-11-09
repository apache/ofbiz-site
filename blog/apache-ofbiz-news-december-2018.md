---
layout: post
title: 'Apache OFBiz News - December 2018 '
date: '2019-01-30T09:35:48+00:00'
permalink: apache-ofbiz-news-december-2018
---
<h2>Apache OFBiz News December 2018</h2> 
  <p>Welcome to our regular monthly round-up of OFBiz news. This month we have news about our usual end of year tasks to create a new branch, a new&nbsp;Marketplace plugin, and also some news about various upgrades were are implementing.</p> 
  <h2>Gradle upgraded to version 5.0</h2> 
  <p>OFBiz has been upgraded to <a href="https://gradle.org/whats-new/gradle-5/">Gradle 5.0&nbsp;</a> which is much faster for loading, as it runs parallel processes for downloading dependencies, and it is also more compatible with newer versions of Java. This will speed up the OFBiz installation and general running. Please refer to Jira task <a href="https://issues.apache.org/jira/browse/OFBIZ-9972" target="_blank" style="color: #1155cc;">OFBIZ-9972</a> for more information about what has been implemented.</p> 
  <p>Thanks very much to&nbsp;Mathieu Lirzin,&nbsp;Taher Alkhateeb and also everyone who contributed to getting this upgrade implemented.</p> 
  <h2>New Framework and Plugin 18.12 Branches</h2> 
  <p>As part of our usual end of year tasks, the community has worked on creating a new branch&nbsp;Release 18.12&nbsp;for both the framework and the plugin.<br /></p> 
  <p>Please note that <a href="http://svn.apache.org/repos/asf/ofbiz/ofbiz-framework/branches/release18.12/">ofbiz-framework-18.12</a> branch and <a href="http://svn.apache.org/repos/asf/ofbiz/ofbiz-plugins/branches/release18.12/">ofbiz-plugins-18.12</a> branch are not yet officially released and will be stabilized over the next few months until the community is satisfied that they are ready for release.</p> 
  <p>A big thank you to Nicolas Malin and everyone who contributed to this effort.</p> 
  <p>Note: <strong>The community is also working on the plan to release OFBiz 17.12 branch. In past one year, the community had worked on stabilizing the 17.12 branch.</strong><br /></p> 
  <p><font size="4"> </font></p> 
  <h2>Upgrade to Java 11</h2> 
  <p>Discussions have started on our development mailing list for upgrading OFBiz to Java 11. OFBiz currently runs using Java 8, we are making sure that we understand the changes and there should not be any potential issues if we go ahead with the upgrade. You can check the progress of the work being done in the Jira task <a href="https://issues.apache.org/jira/browse/OFBIZ-10757" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://issues.apache.org/jira/browse/OFBIZ-10757&amp;source=gmail&amp;ust=1547183373522000&amp;usg=AFQjCNEvXAk4gOGTUi8J32ymQulbZeq9KQ" style="color: #1155cc;">OFBIZ-10757<br /></a></p> 
  <p>Thanks very much to Taher Alkhateeb for starting the discussion about this upgrade and also everyone who participated by providing feedback or comments.</p> 
  <h2>OFBiz as Marketplace</h2> 
  <p>The main discussion topic this month has been around the creation of a new 'marketplace' plugin for OFBiz. This potential new plugin will behave similar to ecommerce&nbsp;plugin but will also offer sellers the ability to sell their&nbsp;products on the marketplace</p> 
  <p>We have begun collecting and documenting user stories about the functionality that we would like to implement. User stories will soon be available at:</p> 
  <p>Home &gt; Documentation &gt; OFBiz Features &gt; Proposed Features &gt;&nbsp;Marketplace.</p> 
  <p>A big thanks goes to Rishi Solanki for starting the discussion and everyone who participated.</p> 
  <h2>New features and improvements</h2>Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
  
  
  <h3>Framework</h3> 
  <ul> 
    <li>Upgrades gradle wrapper to version 5.0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9972">OFBIZ-9972</a>)</li> 
    <li>Improves Accounting - AR container structure (<a href="https://issues.apache.org/jira/browse/OFBIZ-10469">OFBIZ-10469</a>)</li> 
    <li>Improves Accounting - AP container structure (<a href="https://issues.apache.org/jira/browse/OFBIZ-10464">OFBIZ-10464</a>)</li> 
    <li>Changes ControlEventListener Log-Level from &quot;warning&quot; to &quot;info&quot; (<a href="https://issues.apache.org/jira/browse/OFBIZ-10330">OFBIZ-10330</a>)</li> 
    <li>Implements dependency from &quot;State/Province&quot; Field to &quot;Country&quot; in New Employee Form (<a href="https://issues.apache.org/jira/browse/OFBIZ-10326">OFBIZ-10326</a>)</li> 
    <li>Replaces callable objects with lambda expressions (<a href="https://issues.apache.org/jira/browse/OFBIZ-10488">OFBIZ-10488</a>)</li> 
    <li>Fixes or Silence various warnings (<a href="https://issues.apache.org/jira/browse/OFBIZ-10701">OFBIZ-10701</a>)</li> 
    <li>Replaces Callable objects with lambda expressions and removes unused imports (<a href="https://issues.apache.org/jira/browse/OFBIZ-10488">OFBIZ-10488</a>)</li> 
    <li>Converts Minilang to Groovy Guide into asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-10300">OFBIZ-10300</a>)</li> 
    <li>Splitting CommonRate and CommonProductRating (<a href="https://issues.apache.org/jira/browse/OFBIZ-3844">OFBIZ-3844</a>)</li> 
    <li>Seperates Asciidoc documentation of plugins (<a href="https://issues.apache.org/jira/browse/OFBIZ-10658">OFBIZ-10658</a>)</li> 
    <li>Adds a warning on UI about the &quot;X quantity of Product&quot; condition in Promo Rules (<a href="https://issues.apache.org/jira/browse/OFBIZ-6032">OFBIZ-6032</a>)</li> 
    <li>LoginWorker.autoLoginCheck performance improvement (<a href="https://issues.apache.org/jira/browse/OFBIZ-10709">OFBIZ-10709</a>)</li> 
    <li>Fixes: request map to create party content in controller.xml exists twice (<a href="https://issues.apache.org/jira/browse/OFBIZ-10699">OFBIZ-10699</a>)</li> 
    <li>Converts createBudget service to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-10715">OFBIZ-10715</a>)</li> 
    <li>Converts updateContent and removeContent service to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-10625">OFBIZ-10625</a>)</li> 
    <li>Fixes: EntityUtilProperties.getProperties method should use cache. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10717">OFBIZ-10717</a>)</li> 
    <li>Removes all fk dependencies from stats entities to the business entities (<a href="https://issues.apache.org/jira/browse/OFBIZ-10721">OFBIZ-10721</a>)</li> 
    <li>Refactors ServiceUtil.isSuccess(), isError() and isFailure() methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-10724">OFBIZ-10724</a>)</li> 
    <li>Refactors boolean returns for ShoppingCart methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-10745">OFBIZ-10745</a>)</li> 
    <li>Refactors boolean returns for UtilValidate methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-10728">OFBIZ-10728</a>)</li> 
    <li>Refactors boolean returns for UtilHttp methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-10726">OFBIZ-10726</a>)</li> 
    <li>Refactors boolean returns from methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-10725">OFBIZ-10725</a>)</li> 
    <li>Refactors boolean returns for TemporalExpression methods (<a href="https://issues.apache.org/jira/browse/OFBIZ-10732">OFBIZ-10732</a>)</li> 
    <li>Converts QuoteServices.xml mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-10553">OFBIZ-10553</a>)</li> 
    <li>Adds token based authentication (<a href="https://issues.apache.org/jira/browse/OFBIZ-9833">OFBIZ-9833</a>)</li> 
    <li>Adds a PoC for a documentation system for OFBiz based on Asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-9873">OFBIZ-9873</a>)</li> 
    <li>Replaces Callable objects with lambda expressions (<a href="https://issues.apache.org/jira/browse/OFBIZ-10488">OFBIZ-10488</a>)</li> 
    <li>Cleans various linting compiler warnings (<a href="https://issues.apache.org/jira/browse/OFBIZ-10701">OFBIZ-10701</a>)</li> 
  </ul> 
  <h2>Bugfixes</h2>Functional and technical bugfixes:
  
  
  <h3>Framework</h3> 
  <ul> 
    <li>Fixes: User should be notified if product is already added in the compare list (<a href="https://issues.apache.org/jira/browse/OFBIZ-9727">OFBIZ-9727</a>)</li> 
    <li>Fixes: Error on createShoppingListItem when adding item to cart as anonymous (<a href="https://issues.apache.org/jira/browse/OFBIZ-5157">OFBIZ-5157</a>)</li> 
    <li>Fixes: ConcurrentModificationException in ShoppingCart.cleanUpShipGroups (<a href="https://issues.apache.org/jira/browse/OFBIZ-10696">OFBIZ-10696</a>)</li> 
    <li>Fixes: Standalone Asciidoc plugins documents can't render logo correctly in PDF (<a href="https://issues.apache.org/jira/browse/OFBIZ-10677">OFBIZ-10677</a>)</li> 
    <li>Fixes: Username is displayed on ecommerce even after user logs out (<a href="https://issues.apache.org/jira/browse/OFBIZ-10666">OFBIZ-10666</a>)</li> 
    <li>Fixes: UI bug in scrum component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10676">OFBIZ-10676</a>)</li> 
    <li>Fixes: Missing nullcheck in service createContactListParty. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10653">OFBIZ-10653</a>)</li> 
    <li>Fixes: ‘./gradlew generateOfbizDocumentation’ fails with Gradle 5.0 (<a href="https://issues.apache.org/jira/browse/OFBIZ-10693">OFBIZ-10693</a>)</li> 
    <li>Fixes: FindGeneric page broken (<a href="https://issues.apache.org/jira/browse/OFBIZ-10711">OFBIZ-10711</a>)</li> 
    <li>Fixes: Relation UserLogin of entity UserLoginHistory is not unique for that entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-10515">OFBIZ-10515</a>)</li> 
    <li>Fixes: Inconsistent behaviour of ServiceDispatcher.checkAuth (<a href="https://issues.apache.org/jira/browse/OFBIZ-10712">OFBIZ-10712</a>)</li> 
    <li>Fixes: Incorrect PartyContactMechPurpose created while calling createUpdateBillingAddress service (<a href="https://issues.apache.org/jira/browse/OFBIZ-10588">OFBIZ-10588</a>)</li> 
    <li>Fixes: Classification group filter not working on find party screen. (<a href="https://issues.apache.org/jira/browse/OFBIZ-10580">OFBIZ-10580</a>)</li> 
    <li>Fixes: Wrong title in table header of Config Option List (<a href="https://issues.apache.org/jira/browse/OFBIZ-10713">OFBIZ-10713</a>)</li> 
    <li>Fixes: Date format does not change on change of locale (<a href="https://issues.apache.org/jira/browse/OFBIZ-10736">OFBIZ-10736</a>)</li> 
    <li>Fixes: Dependent dropdowns should be used in createPostalAddress and Set Billing screens of ordermgr (<a href="https://issues.apache.org/jira/browse/OFBIZ-10681">OFBIZ-10681</a>)</li> 
    <li>Fixes: Having condition is ignored on queryList() and queryFirst() calls in EntityQuery (<a href="https://issues.apache.org/jira/browse/OFBIZ-9890">OFBIZ-9890</a>)</li> 
    <li>Fixes: Forum Group update throws an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-10744">OFBIZ-10744</a>)</li> 
    <li>Fixes: double fk-name in ProductFacility entity relations (<a href="https://issues.apache.org/jira/browse/OFBIZ-7357">OFBIZ-7357</a>) <br />Adds: Demo Data based on the proposed design to support replenishment planning through any inter-company facility.</li> 
    <li>Fixes: Fallthrough in switch-case of eway/GatewayResponse.java (<a href="https://issues.apache.org/jira/browse/OFBIZ-10642">OFBIZ-10642</a>)</li> 
    <li>Fixes: Seed data sequence bug regarding &quot;MIDNIGHT_DAILY&quot; TemporalExpression (<a href="https://issues.apache.org/jira/browse/OFBIZ-10533">OFBIZ-10533</a>)</li> 
    <li>Fixes: duplicate request getAssociatedStateList (committed at r#1848469)</li> 
  </ul> 
  <h3>Plugins</h3> 
  <ul> 
    <li>Fixes: OFBizPricatUtil class don't use a org.apache.ofbiz.pricat package (<a href="https://issues.apache.org/jira/browse/OFBIZ-10655">OFBIZ-10655</a>)</li> 
    <li>Fixes: In widget forms display element has not time type (<a href="https://issues.apache.org/jira/browse/OFBIZ-6731">OFBIZ-6731</a>)</li> 
    <li>Fixes: Plugins Asciidoc documentation must be standalone (<a href="https://issues.apache.org/jira/browse/OFBIZ-10658">OFBIZ-10658</a>)</li> 
    <li>Fixes: Standalone Asciidoc plugins documents can't render logo correctly in PDF (<a href="https://issues.apache.org/jira/browse/OFBIZ-10677">OFBIZ-10677</a>)</li> 
    <li>Fixes: User's name is displayed on ecommerce even after user logs out (<a href="https://issues.apache.org/jira/browse/OFBIZ-10666">OFBIZ-10666</a>)</li> 
    <li>Fixes: visual-editor not working on ecommerce (<a href="https://issues.apache.org/jira/browse/OFBIZ-10708">OFBIZ-10708</a>)</li> 
    <li>Fixes: Quantity of the product added in the cart should not be negative (<a href="https://issues.apache.org/jira/browse/OFBIZ-10668">OFBIZ-10668</a>)</li> 
  </ul>
