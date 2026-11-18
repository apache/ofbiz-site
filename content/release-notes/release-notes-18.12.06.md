---
layout: page
title: Release Notes 18.12.06
description: downloads
---
Apache OFBiz&reg; 18.12.06, released on September 2022, is the sixth and final release of the 18.12 series, that has been stabilized since December 2018.

Release Notes - OFBiz - Version 18.12.06

## Sub-task

- [[OFBIZ-12646](https://issues.apache.org/jira/browse/OFBIZ-12646)] - Java Deserialization vulnerability in Apache OfBiz (CVE-2022-29063)
- [[OFBIZ-11407](https://issues.apache.org/jira/browse/OFBIZ-11407)] - Upgrade Tomcat from 9.0.29 to 9.0.31 (CVE-2020-1938)
- [[OFBIZ-11948](https://issues.apache.org/jira/browse/OFBIZ-11948)] - Remote Code Execution (File Upload) Vulnerability
- [[OFBIZ-12539](https://issues.apache.org/jira/browse/OFBIZ-12539)] - Upgrade Tomcat from 9.0.54 to 9.0.58
- [[OFBIZ-12549](https://issues.apache.org/jira/browse/OFBIZ-12549)] - [SECURITY] CVE-2022-23437: Infinite loop within Apache XercesJ xml parser
- [[OFBIZ-12558](https://issues.apache.org/jira/browse/OFBIZ-12558)] - Possible authenticated attack related to Tomcat CVE-2020-1938
- [[OFBIZ-12573](https://issues.apache.org/jira/browse/OFBIZ-12573)] - CLONE - [SECURITY] Upgrade Tika to 1.28.1
- [[OFBIZ-12582](https://issues.apache.org/jira/browse/OFBIZ-12582)] - Prevent post-Auth vulnerability: FreeMarker Bypass
- [[OFBIZ-12584](https://issues.apache.org/jira/browse/OFBIZ-12584)] - Stored XSS in webappPath parameter from content/control/EditWebSite
- [[OFBIZ-12592](https://issues.apache.org/jira/browse/OFBIZ-12592)] - Prevent possible DOS attack done using Java deserialisation
- [[OFBIZ-12594](https://issues.apache.org/jira/browse/OFBIZ-12594)] - Prevent Freemarker interpolation in fields
- [[OFBIZ-12626](https://issues.apache.org/jira/browse/OFBIZ-12626)] - [SECURITY] Upgrade Tika to 1.28.3
- [[OFBIZ-12656](https://issues.apache.org/jira/browse/OFBIZ-12656)] - Update Solr and Lucene from 8.11.1 to 8.11.2 for security reason
- [[OFBIZ-12657](https://issues.apache.org/jira/browse/OFBIZ-12657)] - [SECURITY] Upgrade Tika to 1.28.4

## Bug

- [[OFBIZ-11429](https://issues.apache.org/jira/browse/OFBIZ-11429)] - Setting VIEW-INDEX to 0, when not initialised in ForumScreens.xml#Showforum &quot;New Message&quot; Link
- [[OFBIZ-12097](https://issues.apache.org/jira/browse/OFBIZ-12097)] - Date picker not initialised in ajax-called form
- [[OFBIZ-12178](https://issues.apache.org/jira/browse/OFBIZ-12178)] - ModelInduceFromDb does not show entity relations.
- [[OFBIZ-12264](https://issues.apache.org/jira/browse/OFBIZ-12264)] - Multiple Facility Inventory reservation does not consider store facility thru date
- [[OFBIZ-12359](https://issues.apache.org/jira/browse/OFBIZ-12359)] - ProductFacility on ecommerce listing product issue
- [[OFBIZ-12455](https://issues.apache.org/jira/browse/OFBIZ-12455)] - Product inventory reservation places orders if quantityNotReserved !=0 and requireInventory=Y
- [[OFBIZ-12466](https://issues.apache.org/jira/browse/OFBIZ-12466)] - Solr generates an error
- [[OFBIZ-12478](https://issues.apache.org/jira/browse/OFBIZ-12478)] - Screen Xml renderer failed on renderContainer[Begin,End] ftl macro
- [[OFBIZ-12485](https://issues.apache.org/jira/browse/OFBIZ-12485)] - AssetMaint not accessible by user with &#39;VIEW&#39; permission
- [[OFBIZ-12505](https://issues.apache.org/jira/browse/OFBIZ-12505)] - Wrong Field Name Definition in RequirementForms
- [[OFBIZ-12548](https://issues.apache.org/jira/browse/OFBIZ-12548)] - placeholder text has been implemented but seems to do nothing
- [[OFBIZ-12550](https://issues.apache.org/jira/browse/OFBIZ-12550)] - Manufacturing Jobshop find screen by default does not show all production runs
- [[OFBIZ-12552](https://issues.apache.org/jira/browse/OFBIZ-12552)] - View for ViewBinaryDataResource missing
- [[OFBIZ-12555](https://issues.apache.org/jira/browse/OFBIZ-12555)] - default-field-type hidden doesn&#39;t works for auto-fields-service
- [[OFBIZ-12571](https://issues.apache.org/jira/browse/OFBIZ-12571)] - Groovy denied list bypass causes post-auth RCE from webtools/control/ProgramExport
- [[OFBIZ-12595](https://issues.apache.org/jira/browse/OFBIZ-12595)] - Test run was unsuccessful because of failing solr tests
- [[OFBIZ-12600](https://issues.apache.org/jira/browse/OFBIZ-12600)] - Solr requires application/x-www-form-urlencoded
- [[OFBIZ-12602](https://issues.apache.org/jira/browse/OFBIZ-12602)] - XML Import fails due to security check
- [[OFBIZ-12603](https://issues.apache.org/jira/browse/OFBIZ-12603)] - In place editor wrong enable on display field
- [[OFBIZ-12618](https://issues.apache.org/jira/browse/OFBIZ-12618)] - German Translation - Inv. Nr.
- [[OFBIZ-12619](https://issues.apache.org/jira/browse/OFBIZ-12619)] - Required field not working on upload type form
- [[OFBIZ-12625](https://issues.apache.org/jira/browse/OFBIZ-12625)] - Webtools Service Logs ‘Service Name’ column always empty
- [[OFBIZ-12635](https://issues.apache.org/jira/browse/OFBIZ-12635)] - Add missing notification tag in services xsd file
- [[OFBIZ-12636](https://issues.apache.org/jira/browse/OFBIZ-12636)] - Unable to upload a file through ecommerce, but if i move the same menu to Webtools,Its working.
- [[OFBIZ-12685](https://issues.apache.org/jira/browse/OFBIZ-12685)] - Content tag in a screen does not display correctly images

## Improvement

- [[OFBIZ-6065](https://issues.apache.org/jira/browse/OFBIZ-6065)] - Data of tenant specific component gets loaded in all instances
- [[OFBIZ-6066](https://issues.apache.org/jira/browse/OFBIZ-6066)] - Tenant specific components are visible/accessible in any tenant instance
- [[OFBIZ-12589](https://issues.apache.org/jira/browse/OFBIZ-12589)] - Update to Tomcat 9.0.60
- [[OFBIZ-12590](https://issues.apache.org/jira/browse/OFBIZ-12590)] - Update to log4j 2.17.2
- [[OFBIZ-12599](https://issues.apache.org/jira/browse/OFBIZ-12599)] - In UtilHttp, for regex processing of urls, replace Java regexp with RE2J
- [[OFBIZ-12632](https://issues.apache.org/jira/browse/OFBIZ-12632)] - German Translation - Category
- [[OFBIZ-12670](https://issues.apache.org/jira/browse/OFBIZ-12670)] - Make loading of data containing urls configurable
