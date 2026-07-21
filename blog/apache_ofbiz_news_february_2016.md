---
layout: post
title: Apache OFBiz News - February 2016
date: '2016-03-06T16:43:24+00:00'
permalink: apache_ofbiz_news_february_2016
---
<h2>Apache OFBiz News February 2016</h2>
Welcome to our monthly round-up of OFBiz news. 
This month we have news regarding the OFBiz presentation submissions for Apachecon NA, an OFBiz bug crush event, new videos are posted on our Youtube channel and the community discuss starting work on some code re-factoring.

<!--more-->
<h2>Apachecon NA 2016</h2>
<a href="http://events.linuxfoundation.org/events/apachecon-north-america">Apachecon NA 2016</a> will be held in Vancouver 11th - 13th May. In the past, OFBiz has been well represented at previous Apachecons including a full track for 2015. A total of <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apachecon+NA+2016">5 OFBiz based presentations</a> have been submitted from the community across a range of technical and business subjects. The Apachecon selection committee is currently working on selecting the program so we are now waiting to see if any of our submissions have been accepted. 
<p></p>
Thank you to everyone that made a submission and we continue to encourage active participation at Apachecon.

<h2>OFBiz Bug Crush Event</h2>
On 20th February, 24 people from the development team at <a href="http://www.hotwaxsystems.com">Hotwax Systems</a> spent the whole day working through a range of OFBiz Jira issues. The team worked in collaboration with other community members and by the end of the day a total of 22 issues were closed. This was a great demonstration of community, teamwork and collaboration.
<p></p>
A reminder that the first OFBiz Community Day of 2016 is planned for 19th March and we hope to repeat the collaborative spirit and increase the community involvement.

<h2>OFBiz Re-Factoring</h2>
Last month a discussion began around the re-factoring of parts of the OFBiz code base as a way to tidy up and improve it. Several ideas around where and how it could start have been raised. The community is looking for people to actively help with this. 
<p></p>
To help focus the effort <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Framework+Re-factor">a wiki page</a> has been setup to highlight a list of 5 areas that people could work on. Anyone interested is encouraged to add their name to the wiki page.

<h2>OFBiz on Youtube</h2>
The community regained access to the  <a href="https://www.youtube.com/user/ofbiz">OFBiz Youtube Channel</a> recently and have begun planning some new videos to include. <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Youtube+Channel">A wiki page </a> has been created with some suggestions for short videos that will help people learn more about OFBiz and how it works. 
Two new videos have been added (one in French and one in English) and we are encouraging the community to provide videos in various languages that reflect the community worldwide. 

<h2>New Features and Improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
	<li>Have the ability to add terms to invoices (<a href="https://issues.apache.org/jira/browse/OFBIZ-6865">OFBIZ-6865</a>))</li>
	<li>Remove the forceManualJsessionid feature (<a href="https://issues.apache.org/jira/browse/OFBIZ-6867">OFBIZ-66867</a>)</li>
	<li>Added new template locations (<a href="https://issues.apache.org/jira/browse/OFBIZ-6868">OFBIZ-6868</a>):
<ul>
	<li>VT_LOGIN_TMPLT_LOC for the login</li>
	<li>VT_CHPWD_TMPLT_LOC for the changePassword</li>
	<li>VT_FGPWD_TMPLT_LOC for the forgetPassword</li>
	<li>VT_GSQUE_TMPLT_LOC for the getSecurityQuestion</li>
</ul>
</li>
	<li>JGrowl enhancement for internationalization, center and speed up display, with some format/typo fixes (<a href="https://issues.apache.org/jira/browse/OFBIZ-6869">OFBIZ-6869</a>)</li>
	<li>Gets rid of the session-cookie-accepted feature (<a href="https://issues.apache.org/jira/browse/OFBIZ-6871">OFBIZ-6871</a>)</li>
	<li>Convert simple crud service to entity-auto for the following entities
ProductPaymentMethodType, SupplierProduct, CommunicationEventProduct, ProductCategoryMember, ProductFeatureDataResource, ProductConfig, ProductConfigItem, ProductConfigOption, ProductConfigProduct, ProductPriceRule, ProductPriceCond, ProductPriceAction, PhysicalInventory, ProductFacilityLocation, Facility, FacilityLocation, FacilityGroupMember, FacilityGroupRollup, FacilityParty, FacilityContent, InventoryItemLabelType, InventoryItemLabelAppl, InventoryItemLabel, ProductPromo, ProductPromoCode, ProductPromoCategory, ProductPromoCodeEmail, ProductPromoCodeParty, ProductPromoProduct, ProductPromoRule
also added a new service productPriceGenericPermission for acces control to related price service (<a href="https://issues.apache.org/jira/browse/OFBIZ-6873">OFBIZ-6873</a>)</li>
	<li>Add properties in widget.properties, for easy customization of JGrowl alert (<a href="https://issues.apache.org/jira/browse/OFBIZ-6869">OFBIZ-6869</a>)</li>
	<li>Removes all sessionsIds put in URLs (<a href="https://issues.apache.org/jira/browse/OFBIZ-6872">OFBIZ-6872</a>)</li>
	<li>Removes forceHttpSession feature (<a href="https://issues.apache.org/jira/browse/OFBIZ-6879">OFBIZ-6879</a>)</li>
	<li>Added new theme rainbowstone (<a href="https://issues.apache.org/jira/browse/OFBIZ-6843">OFBIZ-6843</a>)</li>
	<li>Update of accounting NL labels (<a href="https://issues.apache.org/jira/browse/OFBIZ-6875">OFBIZ-6875</a>)</li>
	<li>Czech translations (<a href="https://issues.apache.org/jira/browse/OFBIZ-6885">OFBIZ-6885</a>)</li>
	<li>Be able to set accounting company in the header, so other companent can change it too (<a href="https://issues.apache.org/jira/browse/OFBIZ-6802">OFBIZ-6802</a>)</li>
	<li>Replaces with EnitityUtilProperties variant where appropriate (<a href="https://issues.apache.org/jira/browse/OFBIZ-6884">OFBIZ-6884</a>)</li>
	<li>Extend the PostalAddress entity with additional elements (<a href="https://issues.apache.org/jira/browse/OFBIZ-6882">OFBIZ-6882</a>)</li>
	<li>Hide sessionId in logs by default, show them using a properties (<a href="https://issues.apache.org/jira/browse/OFBIZ-6886">OFBIZ-6886</a>)</li>
	<li>Upgrade Groovy to the latest version (<a href="https://issues.apache.org/jira/browse/OFBIZ-6568">OFBIZ-6568</a>)</li>
	<li>DB2 example based on <a href="http://markmail.org/message/ez55yv5m36liliue">http://markmail.org/message/ez55yv5m36liliue</a> (<a href="https://issues.apache.org/jira/browse/OFBIZ-1607">OFBIZ-1607</a>)</li>
	<li>Replace the contrast Java agent by the notsoserial Java agent which can be used to protect OFBiz instances from possible Java serialize vulnerabilities
<ul>
	<li>For that it modifies the *-secure targets (start-secure, start-batch-secure, start-pos-secure, start-both-secure) to use the notsoserial Java agent with its most secure setting.
See <a href="https://cwiki.apache.org/confluence/display/OFBIZ/The+infamous+Java+serialize+vulnerability">https://cwiki.apache.org/confluence/display/OFBIZ/The+infamous+Java+serialize+vulnerability</a> for more information .</li>
	<li>The notsoserial Java agent is placed in the tools/security/notsoserial folder and a dependency-check folder created under the tools/security folder to move there the dependency-check files from the tools/security folder.</li>
	<li>The demos will be using the notsoserial Java agent ASAP.</li>
</ul>
</li>
	<li>In framework/base/lib/ updates Xalan from 2.7.1 to 2.7.2 because of CVE-2014-0107 (was fixed at XALANJ-2435) (<a href="https://issues.apache.org/jira/browse/OFBIZ-6905">OFBIZ-6905</a>)</li>
	<li>AprintCheck action generates an error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6898">OFBIZ-6898</a>)</li>
	<li>Corrected commit r1728261 (<a href="https://issues.apache.org/jira/browse/OFBIZ-6873">OFBIZ-6873</a>)
Added seca to addPartyToFacilityGroup and addPartyToFacility, if a roleTypeId is present call ensurePartyRole. Correct the entity name present on crud PartyToFacilityGroup service.</li>
	<li>Replace html widget rendering with Macro widget rendering in
<ul>
	<li>EmailServices.java file (<a href="https://issues.apache.org/jira/browse/OFBIZ-6282">OFBIZ-6282</a>)</li>
	<li>BirtEmailServices.java file (<a href="https://issues.apache.org/jira/browse/OFBIZ-6287">OFBIZ-6287</a>)</li>
	<li>Oagis classes (<a href="https://issues.apache.org/jira/browse/OFBIZ-6289">OFBIZ-6289</a>)</li>
	<li>ExamplePrintServices.java file (<a href="https://issues.apache.org/jira/browse/OFBIZ-6288">OFBIZ-6288</a>)</li>
	<li>OutputServices.java file (<a href="https://issues.apache.org/jira/browse/OFBIZ-6285">OFBIZ-6285</a>)</li>
	<li>FoPrintServerEvents.java file (<a href="https://issues.apache.org/jira/browse/OFBIZ-6283">OFBIZ-6283</a>)</li>
	<li>framework/widget files (<a href="https://issues.apache.org/jira/browse/OFBIZ-6281">OFBIZ-6281</a>)</li>
</ul>
</li>
	<li>Set productFeatureTypeId as INOUT in service defination so that the calling service can use it for further processing (<a href="https://issues.apache.org/jira/browse/OFBIZ-6910">OFBIZ-6910</a>)</li>
	<li>Show currencyUomId of the invoice in the invoice selection for payments (<a href="https://issues.apache.org/jira/browse/OFBIZ-6906">OFBIZ-6906</a>)</li>
	<li>new Configuration() is deprecated; instead, the desired freemarker version should be passed in. To make it easier to control the version centrally, add a helper method on FreeMarkerWorker that wraps the instantiation of the Configuration object (<a href="https://issues.apache.org/jira/browse/OFBIZ-6277">OFBIZ-6277</a>)</li>
	<li>Added return message in service after succesfully deleting of contactMech record. Thanks Aman for providing patch (<a href="https://issues.apache.org/jira/browse/OFBIZ-6911">OFBIZ-6911</a>)</li>
	<li>UtilDateTime implements deprecated methods, so add the @Deprecated tag to stop javac from producing a warning (<a href="https://issues.apache.org/jira/browse/OFBIZ-6279">OFBIZ-6279</a>)</li>
	<li>Fix deprecated use of SimpleMethod.getAll{Entity,Service}NamesUsed(), instead using ArtifactInfoContext (<a href="https://issues.apache.org/jira/browse/OFBIZ-6284">OFBIZ-6284</a>)</li>
	<li>Applied patch for adding a new fieled 'disabledBy' in UserLogin entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-6909">OFBIZ-6909</a>)</li>
	<li>Removed deprecated warning from FoFormRender as we don't have support to create MacroFormRender object in services (<a href="https://issues.apache.org/jira/browse/OFBIZ-5780">OFBIZ-5780</a>)</li>
	<li>Show "Create Return" button on order view screen other than when order status is complete (<a href="https://issues.apache.org/jira/browse/OFBIZ-6012">OFBIZ-6012</a>)</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
	<li>webSiteId being null in RegisterPerson.ftl fixed</li>
	<li>Fix the classpath file for updated tomcat libraries</li>
	<li>Fix issue on avatar.ftl for rainbowstone theme (<a href="https://issues.apache.org/jira/browse/OFBIZ-6843">OFBIZ-6843</a>)</li>
	<li>Fix rainbowstone theme personal avatar image (<a href="https://issues.apache.org/jira/browse/OFBIZ-6881">OFBIZ-6881</a>)</li>
	<li>Revert r1728959 because of misc. issues with the patch, see (<a href="https://issues.apache.org/jira/browse/OFBIZ-6884">OFBIZ-6884</a>)</li>
	<li>Fix a typo in AccountingEntityLabels (xlm -&gt; xml)</li>
	<li>With the implementation of @BaseScript annotations (introduced with Groovy 2.3.0) something was broken in the CompilerConfiguration.setScriptBaseClass method and an error is thrown when our scripts are executed; the workaround is to execute at startup a script containing the @BaseScript annotation. (<a href="https://issues.apache.org/jira/browse/OFBIZ-6568">OFBIZ-6568</a>)</li>
	<li>Error during first attempt of the synchronisation (<a href="https://issues.apache.org/jira/browse/OFBIZ-6893">OFBIZ-6893</a>)</li>
	<li>Start fixing solr rebuild problem (<a href="https://issues.apache.org/jira/browse/OFBIZ-6715">OFBIZ-6715</a>)</li>
	<li>On the balance sheet, it displays incorrect value on the total of long-term asset (<a href="https://issues.apache.org/jira/browse/OFBIZ-6845">OFBIZ-6845</a>)</li>
	<li>corrective patch for xml and pdf error (<a href="https://issues.apache.org/jira/browse/OFBIZ-6802">OFBIZ-6802</a>)</li>
	<li>Fixed some compilation warnings (<a href="https://issues.apache.org/jira/browse/OFBIZ-5780">OFBIZ-5780</a>)
<ul>
	<li>Mark some SecurityFactory method as deprecated</li>
	<li>Mark FoFormRender as deprecated</li>
	<li>Fixed deprecation warning for PassportUtil class.</li>
</ul>
</li>
	<li>Order Manager ViewQuote screen should display party name and link to party manager (<a href="https://issues.apache.org/jira/browse/OFBIZ-6311">OFBIZ-6311</a>)</li>
	<li>Fixed issue of removeContentFromProductConfigItem request by passing request parameters by submiting a form (<a href="https://issues.apache.org/jira/browse/OFBIZ-6801">OFBIZ-6801</a>)</li>
	<li>Make use of ResourceLoader.readXmlRootElement, which is non-caching; this fixes a deprecation warning. Use ResourceLoader.readXmlRootElement, which is a non-caching version. This fixes a deprecation warning. Provide method variants (readXml{Document,RootElement}) that contain the body of the deprecated methods.(getXml{Document,RootElement}) (<a href="https://issues.apache.org/jira/browse/OFBIZ-6278">OFBIZ-6278</a>).</li>
	<li>Exclusion of Manufacturing components leads to load errors (<a href="https://issues.apache.org/jira/browse/OFBIZ-6757">OFBIZ-6757</a>)</li>
	<li>ApplicationDecorator Entity-One Screen Action Incomplete Primary Key (<a href="https://issues.apache.org/jira/browse/OFBIZ-6918">OFBIZ-6918</a>)</li>
</ul>
