---
layout: post
title: Apache OFBiz News - April 2015
date: '2015-05-11T07:37:05+00:00'
permalink: apache_ofbiz_april_update
---
Welcome to the first of our regular monthly update of project news and events prepared by community member Michael Brohl.

- April has shown a lot of movement in the <a title="offizielle Webseite Apache OFBiz" href="http://ofbiz.apache.org">Apache OFBiz</a> community. The Apache OFBiz track at <a title="ApacheCon US" href="http://events.linuxfoundation.org/events/apachecon-north-america">ApacheCon US 2015</a>, exciting architecture and tool discussions on our mailing lists, the introduction of an official [Twitter](https://twitter.com/ApacheOfbiz) account as well as the reactivation of the [project blog](https://blogs.apache.org/ofbiz/) and of course, the ongoing developments of the codebase has brought up many interesting news items.<!--more-->

## Apache OFBiz at ApacheCon US 2015

- From 13. to 16. April <a title="ApacheCon US" href="http://events.linuxfoundation.org/events/apachecon-north-america">ApacheCon US 2015</a> was held in Austin, Texas. The OFBiz community was represented with a complete track of six interesting talks. All of these presentations are available on the <a title="Apache OFBiz Tracks im OFBiz Wiki" href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+track+@+Apachecon+US+2015+in+Texas%2C+Austin+-++April+13-17%2C+2015">Apache OFBiz Event Wiki Page</a>. <a href="https://www.ecomify.de/wp-content/uploads/2015/05/apachecon_na_2015.png">![ApacheCon US 2015](https://www.ecomify.de/wp-content/uploads/2015/05/apachecon_na_2015.png)</a>

## ApacheCon EU 2015

- From 28. September to 01. October the [ApacheCon EU 2015](http://events.linuxfoundation.org/events/apachecon-europe) will be held in Budapest, Hungary. We hope that OFBiz will once again be represented there with a range of interesting and relevant presentations. More information coming soon here in our blog.

## Exciting discussions in the Apache OFBiz Project

- 
  - Moving from <a title="Apache Ant Webseite" href="http://ant.apache.org/">Ant</a> to <a title="Maven Webseite" href="http://maven.apache.org/">Maven</a> as the build and deployment tool. Adam Heath has developed a Proof of Concept (PoC) in its own branch so that it can be tested and further discussed on this basis.
  - Moving from Subversion (SVN) to Git as the source code management system.
  - Moving of the bugtracking system from Jira to Apache OFBiz.
  - Moving to David Jones' <a title="Moqui Webseite" href="http://www.moqui.org/">Moqui</a> as the core framework for Apache OFBiz respectively integrating <a title="Moqui Webseite" href="http://www.moqui.org/">Moqui</a> into Apache OFBiz. This was certainly a most exciting discussion which triggered an extensive range of views and comments from the community. Moqui is a very promising basis for an open source enterprise automation system / ERP . A vote was called on whether to move OFBiz to Moqui and was unsuccessful. The main reason being that community still sees the need for more detailed discussion as well as a Moqui Proof of Concept (PoC) before it can be finally be decided upon.
- 

## Apache OFBiz goes Social Media

- After a long time the official Apache OFBiz <a title="Apache OFBiz auf Twitter" href="https://twitter.com/ApacheOfbiz">Twitter</a> account was launched in April and has since reported on developments and news in the project. In addition, the [official Apache OFBiz blog](https://blogs.apache.org/ofbiz/) is revived. Below now the detailed enhancements and bug fixes from April 2015.

## New features and improvements

- 
  - HTML tabindex was added to the widget form fields. It allows to set navigation order when using the tab key ([OFBIZ-6232](https://issues.apache.org/jira/browse/OFBIZ-6232)).
  - Refactoring: Replacing of javolution FastMap, FastSet und FastList with standard Java object collections ([OFBIZ-5781](https://issues.apache.org/jira/browse/OFBIZ-5781)), default replacements:
    - FastMap with HashMap
    - FastList with LinkedList
    - FastSet with HashSet
  - Use of EntityUtilProperties instead of UtilProperties to retrieve the website properties. This prevents from reading the wrong properties in a multi-tenant environment ([OFBIZ-6205](https://issues.apache.org/jira/browse/OFBIZ-6205))
  - Component specialpurpose/jetty was moved to attic ([OFBIZ-6223](https://issues.apache.org/jira/browse/OFBIZ-6223))
  - Refactoring: Reduction of compiler warnings ([OFBIZ-6217](https://issues.apache.org/jira/browse/OFBIZ-6217))
  - Optimized the UtilProperties.createProperties() method: returns null instead of throwing an exception when a file was not found ([OFBIZ-6261](https://issues.apache.org/jira/browse/OFBIZ-6261))
  - Accounting: added a basic VAT report with frequency setting ([OFBIZ-6225](https://issues.apache.org/jira/browse/OFBIZ-6225))
  - FOP Reporting: defined NotoSans font as default for reports and FOP-PDF examples. Removes the need to specify the NotoSans "font-family" in the example reports when special characters are used.

## Bugfixes

- 
  - updateNote service returned an error ("Outgoing result (in runSync : updateNote) does not match expected requirements (The following required parameter is missing: [OUT] [updateNote.noteId])]"), because the entity engine returned no primary keys ([OFBIZ-6209](https://issues.apache.org/jira/browse/OFBIZ-6209))
  - check-role-member was marked as deprecated in services.xsd ([OFBIZ-6228](https://issues.apache.org/jira/browse/OFBIZ-6228))
  - htmlFormMacroLibrary.ftl, htmlTemplate.ftl: bugfixes in renderDateTimeField and renderLookupField
  - Catalog main page throws a Freemarker Exception ("Error executing FreeMarker template freemarker.core.\_MiscTemplateException: Can't compare values of these types. Allowed comparisons are between two numbers, two strings, two dates, or two booleans. Left hand operand is a boolean (wrapper: f.t.TrueTemplateBooleanModel). Right hand operand is a string (wrapper: f.t.SimpleScalar).") ([OFBIZ-6234](https://issues.apache.org/jira/browse/OFBIZ-6234))
  - Updated an Ant target to use the new commons-codec.jar
  - Special characters entered in a form field were not processed correctly in the ecommerce application ([OFBIZ-5035](https://issues.apache.org/jira/browse/OFBIZ-5035))
  - Field name "tenantId" renamed to "userTenantId" for login page and ContextFilter. The field name "tenantId" caused an unintended change of the delegator in the webtools ([OFBIZ-6222](https://issues.apache.org/jira/browse/OFBIZ-6222)).
  - Error in the quote report if it contains no positions ("FOUserAgent |W|"fo:table-body" is missing child elements. Required content model: marker\* (table-row+|table-cell+)" und "ScreenFopViewHandler |E| Unable to transform FO file: org.apache.fop.apps.FOPException java.lang.NullPointerException; Screen XSL:FO text was:") ([OFBIZ-6077](https://issues.apache.org/jira/browse/OFBIZ-6077))
  - Quote report positions view throws a freemarker.core.InvalidReferenceException (Freemarker Version &gt; 2.3.19) ([OFBIZ-6057](https://issues.apache.org/jira/browse/OFBIZ-6057))
  - PerformFindTests: random error in DBCP ([OFBIZ-6218](https://issues.apache.org/jira/browse/OFBIZ-6218))
  - Minilang: type="NewMap" and type="NewList" does not work for the Set element ([OFBIZ-6254](https://issues.apache.org/jira/browse/OFBIZ-6254))
  - Data File Tools: error if the configured separator character occured in the payload data ([OFBIZ-4837](https://issues.apache.org/jira/browse/OFBIZ-4837))
  - web.xml Datei was read from the wrong directory ([OFBIZ-6259](https://issues.apache.org/jira/browse/OFBIZ-6259))
  - FindInventoryPlan: error message in FindInventoryEventPlan ("Expected hash. initialQohEvent evaluated instead to freemarker.template.SimpleScalar on line 165, column 26 in component://manufacturing/webapp/manufacturing/mrp/findInventoryEventPlan.ftl") ([OFBIZ-6202](https://issues.apache.org/jira/browse/OFBIZ-6202))
  - Manufacturing shipment plan
    - task report error ([OFBIZ-6188](https://issues.apache.org/jira/browse/OFBIZ-6188))
    - package labels error ([OFBIZ-6196](https://issues.apache.org/jira/browse/OFBIZ-6196))
  - Bugfix in CategoryTree.groovy: wrong map
  - foScreenMacroLibrary.ftl: renderLabel does not apply style parameter ([OFBIZ-6260](https://issues.apache.org/jira/browse/OFBIZ-6260))
  - Pro-rate shipping calculation is generating incorrect invoice in case of order with subtotal $0.00 ([OFBIZ-6269](https://issues.apache.org/jira/browse/OFBIZ-6269))
  - Accounting: Fixed the order in which invoice and payment transactions are created.
  - Field order in auto-complete for lookups was wrong ([OFBIZ-6299](https://issues.apache.org/jira/browse/OFBIZ-6299))
  - PayflowPro.java: fixed compile error
  - UtilMisc.java: returned list by the availableLocales() method contains empty locale which causes errors in Freemarker templates.
  - Bugfixes in the startup code ([OFBIZ-6268](https://issues.apache.org/jira/browse/OFBIZ-6268))
    - Class path loading was ignoring component settings, so class paths for disabled components were being loaded
    - Configuration files were parsed twice
    - Potential problem with unloading a loader that failed loading

## Documentation

- 
  - README files for the components Manufacturing, Projectmgr, Scrum, Assetmaint and MyPortal added ([OFBIZ-6243](https://issues.apache.org/jira/browse/OFBIZ-6243))
  - Missing license information for the components Accounting and Content added
-
