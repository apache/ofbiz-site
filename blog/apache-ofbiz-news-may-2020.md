---
layout: post
title: Apache OFBiz News - May 2020
date: '2020-08-19T14:47:19+00:00'
permalink: apache-ofbiz-news-may-2020
---
<h2>Apache OFBiz News May 2020</h2><p>Welcome to our regular monthly round-up of OFBiz news. This month we 
share with you details of our usual list of features, improvements and 
statistics.</p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 149 issues were opened and 148 issues were closed ( 11 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong>214 commits to the code base that changed 24,735 lines of code ( 9 committers were active)</li><li><strong>Plugins: </strong>22 commits to the code base that changed 7,528 lines of code ( 5 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev:&nbsp;</strong>148 emails sent and 43 topics discussed (31 different people)</li><li><strong>User: </strong>57 emails sent and 17 topics discussed (40 different people) <br></li></ul></li></ul><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>framework</h3>

<ul>

    <li>Adds missing attribute default-entity-name for ShipmentReceiptRole entity auto services (<a href="https://issues.apache.org/jira/browse/OFBIZ-11614" target="_blank">OFBIZ-11614</a>) </li>

    <li>Converts all TrackingCodeType entities from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/87" target="_blank">#87</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/4f90498f5db689bda0f074c3ff72afcb1a9e7db7" target="_blank">GitHub Link</a>) </li>

    <li>Converts all FixedAssetMeter services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/82" target="_blank">#82</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/3c3147d7456963cb295e6a118b769510b14e6210" target="_blank">GitHub Link</a>) </li>

    <li>Converts all TrackingCodeOrderReturn related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/89" target="_blank">#89</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/8f77e45f152407572a71b4a379bad39483d94526" target="_blank">GitHub Link</a>) </li>

    <li>Improves all service level error messages for missing required field for order component (<a href="https://github.com/apache/ofbiz-framework/pull/86" target="_blank">#86</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/4facbaed7929e887b7f767e4cc360ef2af169870" target="_blank">GitHub Link</a>) </li>

    <li>Converts all TimesheetRole related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/90" target="_blank">#90</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/0f56568bc140dad0075d65b00d94f93dc80527bb" target="_blank">GitHub Link</a>) </li>

    <li>Converts all CustRequestParty related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/95" target="_blank">#95</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/edca9f22b03ecb5f7096652cf020ca3b52043962" target="_blank">GitHub Link</a>) </li>

    <li>Converts all TrackingCodeOrder related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/92" target="_blank">#92</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/f36a15b5a0b3f3f8426e348ad5753661cecb418f" target="_blank">GitHub Link</a>) </li>

    <li>Improves ObjectInputStream class (<a href="https://github.com/apache/ofbiz-framework/commit/3f60efb343a11723aa56c1bc1f5afac3a2f26e9f" target="_blank">GitHub Link</a>) </li>

    <li>Converts all CustRequestContent related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/94" target="_blank">#94</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/3615f5b84224609552c31bf1a88d1b455239c469" target="_blank">GitHub Link</a>) </li>

    <li>Marks service addRequirementTask as deprecated and converts it from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/100" target="_blank">#100</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/a1647a7f63dd2bc91e28d2d2182deed7bbbc3d76" target="_blank">GitHub Link</a>) </li>

    <li>Converts all SalaryStep related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/98" target="_blank">#98</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/71d90409230cd13a31dca4a131664719f7c7c996" target="_blank">GitHub Link</a>) </li>

    <li>Converts all TechDataCalendarExcDay related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/96" target="_blank">#96</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/98e95ee9e35b58e01f865e2b8a98927bb36e45d2" target="_blank">GitHub Link</a>) </li>

    <li>Converts all TimeEntry related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/99" target="_blank">#99</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/cb4ca226f0dcac969decc082115286d750cc3415" target="_blank">GitHub Link</a>) </li>

    <li>Updates tasks.checkstyleMain.maxErrors (6 less) (<a href="https://github.com/apache/ofbiz-framework/commit/8ee86e019fd7abe7c694c4c27b6c83c47decfe4d" target="_blank">GitHub Link</a>) </li>

    <li>Converts all EmplLeave related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/97" target="_blank">#97</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/c3cda280997b6f523fb250f4a788670573133f8b" target="_blank">GitHub Link</a>) </li>

    <li>Converts updateEmailContent service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11371" target="_blank">OFBIZ-11371</a>) </li>

    <li>Converts all CustRequestAttribute related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/101" target="_blank">#101</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/7988fab8ab614dab7c225f7ca9510cbc76e9fea7" target="_blank">GitHub Link</a>) </li>

    <li>Improves currency data for China (<a href="https://github.com/apache/ofbiz-framework/commit/eea0198835ea8a573f59c7d77b645fbdbf5efe4e" target="_blank">GitHub Link</a>) </li>

    <li>Improves Marketing/SFA demo data (<a href="https://issues.apache.org/jira/browse/OFBIZ-11043" target="_blank">OFBIZ-11043</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/107" target="_blank">#107</a>) </li>

    <li>Converts all TechDataCalendarExcWeek related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/104" target="_blank">#104</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/00e1b01a7dc4e9be8a0bcda860753665dee0fc7f" target="_blank">GitHub Link</a>) </li>

    <li>Ensures that purchase invoice creation is limited for parties with roleTypeId = SUPPLIER (<a href="https://issues.apache.org/jira/browse/OFBIZ-11024" target="_blank">OFBIZ-11024</a>) </li>

    <li>Improves demo data regarding rental assets (<a href="https://github.com/apache/ofbiz-framework/commit/e675694d0bff7e807bab88ff25d34b8be9cbed28" target="_blank">GitHub Link</a>) </li>

    <li>Moves demo data from optional plugin to base application (<a href="https://github.com/apache/ofbiz-framework/commit/451d78b1c774ee183ca4449dd4737b2cc4ae4c50" target="_blank">GitHub Link</a>) </li>

    <li>Improves tax authority data for China (<a href="https://github.com/apache/ofbiz-framework/commit/10060c8eea28cae2998497b7c5452287748f416e" target="_blank">GitHub Link</a>) </li>

    <li>Updates xercesImpl to 2.11.0 (<a href="https://github.com/apache/ofbiz-framework/commit/f4c60052b1e84cc3699ce3a8cfa7a5a1a3ee726e" target="_blank">GitHub Link</a>) </li>

    <li>Provides Groovy test case for service addProductCategoryToCategory and getProductCategoryAndLimitedMembers (<a href="https://github.com/apache/ofbiz-framework/pull/111" target="_blank">#111</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/ff53e54a4ed487eed48067ab35b6faa5799b7db2" target="_blank">GitHub Link</a>) </li>

    <li>Provides unit test case for service createPartyPostalAddress (<a href="https://github.com/apache/ofbiz-framework/pull/106" target="_blank">#106</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/d753c10265518d56167ab77c895ff31cfa969d57" target="_blank">GitHub Link</a>) </li>

    <li>Improves seed data for accounting component (<a href="https://github.com/apache/ofbiz-framework/commit/a7328da044be3c03e41388232b7390a7727932de" target="_blank">GitHub Link</a>) </li>

    <li>Improves accounting seed data (<a href="https://issues.apache.org/jira/browse/OFBIZ-11652" target="_blank">OFBIZ-11652</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/116" target="_blank">#116</a>) </li>

    <li>Upgrades Gradle to 6.3 and Groovy to 2.5.11 (<a href="https://github.com/apache/ofbiz-framework/commit/ff219500248373fafb39ee57f12f30147df318a7" target="_blank">GitHub Link</a>) </li>

    <li>Converts all TechDataCalendarWeek related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/109" target="_blank">#109</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/4cb9fc7e8090cd2123f09986bbe25badcf0570f0" target="_blank">GitHub Link</a>) </li>

    <li>Converts all RequirementCustRequest related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/102" target="_blank">#102</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/112a5929e91ae85b34ac017dfa5420ee67c0f27a" target="_blank">GitHub Link</a>) </li>

    <li>Converts all RequirementRole related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/105" target="_blank">#105</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/ffd66862205bd7f8b16a0e6292ba1e1ce98020f4" target="_blank">GitHub Link</a>) </li>

    <li>Enhances entity 'GlXbrlClass' (<a href="https://issues.apache.org/jira/browse/OFBIZ-10613" target="_blank">OFBIZ-10613</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/41" target="_blank">#41</a>) </li>

    <li>Converts all GlReconciliation related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/110" target="_blank">#110</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/c7e0f909ea4a65d72bbe2fd2db9c516495c8bd27" target="_blank">GitHub Link</a>) </li>

    <li>Removes hard coded values from removePromotion (<a href="https://github.com/apache/ofbiz-framework/commit/f365a9b7a0b450da3b14784f272b33f148533b56" target="_blank">GitHub Link</a>) </li>

    <li>Removes duplicated labels (<a href="https://github.com/apache/ofbiz-framework/commit/adfdae4553b260c1cb90973349f04c4b9ef3548b" target="_blank">GitHub Link</a>) </li>

    <li>Removes unnecessay code added to fix the middle name issue on List party screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-11681" target="_blank">OFBIZ-11681</a>) </li>

    <li>Adds support for Limit and offset in EntityQuery (<a href="https://issues.apache.org/jira/browse/OFBIZ-11670" target="_blank">OFBIZ-11670</a>) </li>

    <li>Improves logging for services run on global-commit/global-rollback (<a href="https://issues.apache.org/jira/browse/OFBIZ-11667" target="_blank">OFBIZ-11667</a>) </li>

    <li>Uses OFBizTestCase's from method utility instead of using EntityQuery in each test case (<a href="https://github.com/apache/ofbiz-framework/pull/119" target="_blank">#119</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/df0c4415689db4cd2e374942cc4806ca9a6bc91c" target="_blank">GitHub Link</a>) </li>

    <li>Converts all AcctgTrans related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/103" target="_blank">#103</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/10a8f7a0931d898d3d9f701012efd93ab960f1d7" target="_blank">GitHub Link</a>) </li>

    <li>Converts all TechDataCalendar related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/112" target="_blank">#112</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/814b2ef1396b26a36c93179a123243079e5de79b" target="_blank">GitHub Link</a>) </li>

    <li>Provides weekly update of tasks.checkstyleMain.maxErrors (<a href="https://github.com/apache/ofbiz-framework/commit/448d9870086f79278a2d6fb41c14a88ca7db1e8d" target="_blank">GitHub Link</a>) </li>

    <li>Converts all CustRequestItem related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/118" target="_blank">#118</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/9eb6ba5a396088ad454559906bd77c219baf35dc" target="_blank">GitHub Link</a>) </li>

    <li>Converts ShipmentServices from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11462" target="_blank">OFBIZ-11462</a>) </li>

    <li>Converts remaining ElectronicText related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/120" target="_blank">#120</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/e3124a6856dbd0131bad1dd6491252fa1fb1a7fe" target="_blank">GitHub Link</a>) </li>

    <li>Converts CustomTimePeriod related services from simple to entity-auto (<a href="https://issues.apache.org/jira/browse/OFBIZ-11689" target="_blank">OFBIZ-11689</a>) </li>

    <li>Converts all GlReconciliationEntry related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/129" target="_blank">#129</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/2b0166410dcb7165ba4493400db690810e540554" target="_blank">GitHub Link</a>) </li>

    <li>Improves script-template widget tag (<a href="https://issues.apache.org/jira/browse/OFBIZ-11686" target="_blank">OFBIZ-11686</a>) </li>

    <li>Converts PriceServices from mini-lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/4ebdcdd9d03b6682f9f00397ef5d61d2f0bee08b" target="_blank">GitHub Link</a>) </li>

    <li>Improves getAssociatedPriceRulesConds service (<a href="https://github.com/apache/ofbiz-framework/commit/a6cfaf87320dab2492502bc27d2c4007aab62b94" target="_blank">GitHub Link</a>) </li>

    <li>Removes deprecated entity captureBillingAccountPayments since release 17.12. (<a href="https://github.com/apache/ofbiz-framework/pull/131" target="_blank">#131</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/44c374a644eab41de74c1c956758ef68b9509355" target="_blank">GitHub Link</a>) </li>

    <li>Applies multi-block attr to each application (<a href="https://issues.apache.org/jira/browse/OFBIZ-11706" target="_blank">OFBIZ-11706</a>) </li>

    <li>Converts AccountServices from mini-lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/8af7cf877583acf100d1229260e62fe7f4c92563" target="_blank">GitHub Link</a>) </li>

    <li>Converts LeadServices mini-lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/95f0eda361ffe730cb8e960ea30e2a4fed720d36" target="_blank">GitHub Link</a>) </li>

    <li>Converts AutoAcctgFixedAssetTests from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11520" target="_blank">OFBIZ-11520</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11519" target="_blank">OFBIZ-11519</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11517" target="_blank">OFBIZ-11517</a>) </li>

    <li>Converts WorkEffort related services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/135" target="_blank">#135</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/1a45f2ff71f13fc51c54969e23d492e441385e06" target="_blank">GitHub Link</a>) </li>

    <li>Converts some simple services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/136" target="_blank">#136</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/c150980271b29be19a1d7e20d4f3860d1c83c621" target="_blank">GitHub Link</a>) </li>

    <li>Converts all Timesheet related CRUD services from simple to entity-auto (<a href="https://github.com/apache/ofbiz-framework/pull/88" target="_blank">#88</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/c7ae78d551574f81bef9d5ddbbf5aaa0a934dfe1" target="_blank">GitHub Link</a>) </li>

    <li>Provides a service to periodically create PeriodRecords (<a href="https://issues.apache.org/jira/browse/OFBIZ-10905" target="_blank">OFBIZ-10905</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/133" target="_blank">#133</a>) </li>

    <li>Improves TimesheetServices#createTimesheetForThisWeek (<a href="https://github.com/apache/ofbiz-framework/pull/142" target="_blank">#142</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/9913e566cc5c6c6258e5870137094f138a244489" target="_blank">GitHub Link</a>) </li>

    <li>Improves descriptions of temporal expression records (<a href="https://issues.apache.org/jira/browse/OFBIZ-11584" target="_blank">OFBIZ-11584</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/64" target="_blank">#64</a>) </li>

    <li>Converts createArticleContent service from mini-lang to groovy (<a href="https://github.com/apache/ofbiz-framework/pull/140" target="_blank">#140</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/6495dc7a917612a879fac8e5bb977eae71018c3a" target="_blank">GitHub Link</a>) </li>

    <li>Removes not needed externalKeyParam in ofbizUrl calls (<a href="https://issues.apache.org/jira/browse/OFBIZ-11711" target="_blank">OFBIZ-11711</a>) </li>

    <li>Converts deactivateAllContentRoles service from mini-lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/11905d82f5aa6fb06894e82b1ff83538ee15845d" target="_blank">GitHub Link</a>) </li>

    <li>Provides weekly update of tasks.checkstyleMain.maxErrors (<a href="https://github.com/apache/ofbiz-framework/commit/5e1a23de1c6cc92fa10cd6008e2e758cdf7ffe4f" target="_blank">GitHub Link</a>) </li>

    <li>Provides expansion of form widget field disabled atrribute with xsd improvement (<a href="https://github.com/apache/ofbiz-framework/pull/141" target="_blank">#141</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/3b7e63744c9148b0c9c8130a5a818d33dcebda3c" target="_blank">GitHub Link</a>) </li>

    <li>Converts ProductionRunServices from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11395" target="_blank">OFBIZ-11395</a>) </li>

    <li>Cleans how HTTP vs HTTPS is handled (<a href="https://github.com/apache/ofbiz-framework/commit/32a71c9af4a8fee8183ddee7eb4599e8854ce32b" target="_blank">GitHub Link</a>) </li>

    <li>Removes trailing space (<a href="https://github.com/apache/ofbiz-framework/commit/205914a1beb5cbd574a20507c35b5da680ee8245" target="_blank">GitHub Link</a>) </li>

    <li>Converts getPaymentRunningTotal service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11488" target="_blank">OFBIZ-11488</a>) </li>

    <li>Refactors simple methods names as per naming convention best practices (<a href="https://github.com/apache/ofbiz-framework/pull/137" target="_blank">#137</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/86b0a4e592cbf087f5266d5e1347e963031b1c34" target="_blank">GitHub Link</a>) </li>

    <li>Converts createPaymentContent, updatePaymentContent services from mini-lang to groovy (<a href="https://github.com/apache/ofbiz-framework/pull/155" target="_blank">#155</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/c21683e30bafdfbf8f70c9c50cd21d1626530692" target="_blank">GitHub Link</a>) </li>

    <li>Converts massChangePaymentStatus service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11498" target="_blank">OFBIZ-11498</a>) </li>

    <li>Makes shipment services loosely coupled with work-effort generation (<a href="https://github.com/apache/ofbiz-framework/pull/132" target="_blank">#132</a>) (<a href="https://github.com/apache/ofbiz-framework/commit/8bdb6c99856fd4ae17a95ccb0f661a256caaab13" target="_blank">GitHub Link</a>) </li>

    <li>Converts createPaymentAndApplicationForParty service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11491" target="_blank">OFBIZ-11491</a>) </li>

    <li>Improves service level error messages for humanares component (<a href="https://issues.apache.org/jira/browse/OFBIZ-8716" target="_blank">OFBIZ-8716</a>) </li>

    <li>Converts updatePayment service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11480" target="_blank">OFBIZ-11480</a>) </li>

    <li>Converts setContentStatus service from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11365" target="_blank">OFBIZ-11365</a>) </li>

    <li>Adds UI labels for success/error messages for humanres, marketing, order component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7696" target="_blank">OFBIZ-7696</a>) </li>

    <li>Downgrades tasks.checkstyleMain.maxErrors to stop failures in Buildbot (<a href="https://github.com/apache/ofbiz-framework/commit/e46821f041a30e5320528fbb0e7498a6adaef29f" target="_blank">GitHub Link</a>) </li>

    <li>Improves quote menu (<a href="https://github.com/apache/ofbiz-framework/commit/5fac98022e3a364a0b8eb76881c9428dbd5160b4" target="_blank">GitHub Link</a>) </li>

    <li>Converts createDownloadContent and updateDownloadContent services from mini-lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11372" target="_blank">OFBIZ-11372</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11373" target="_blank">OFBIZ-11373</a>) </li>

    <li>Changes lineSplit value to 150 (<a href="https://issues.apache.org/jira/browse/OFBIZ-11737" target="_blank">OFBIZ-11737</a>) </li>

    <li>Removes useless "@deprecated No replacement" comments in Java code (<a href="https://github.com/apache/ofbiz-framework/commit/10b8acd5d155f62af93f62d508c8e5bfd4f24465" target="_blank">GitHub Link</a>) </li>

    <li>Provides a Github PR template (<a href="https://github.com/apache/ofbiz-framework/commit/e348fd6faca698497945904410f819f22422bc3e" target="_blank">GitHub Link</a>) </li>

    <li>Adds pull_request_template.md (<a href="https://issues.apache.org/jira/browse/OFBIZ-11722" target="_blank">OFBIZ-11722</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Improves demo data regarding rental assets (<a href="https://github.com/apache/ofbiz-plugins/commit/c46a9c4db289b307b9f867b4b19bdfa4433f767a" target="_blank">GitHub Link</a>) </li>

    <li>Moves demo data from optional plugin to base application (<a href="https://github.com/apache/ofbiz-plugins/commit/bd50c1417b999c83d66494a566bfc4814a23c467" target="_blank">GitHub Link</a>) </li>

    <li>Applies multi-block attr to each application (<a href="https://issues.apache.org/jira/browse/OFBIZ-11706" target="_blank">OFBIZ-11706</a>) </li>

    <li>Updates service name and removes duplicate service 'updateTimesheetToInProcess' (<a href="https://github.com/apache/ofbiz-plugins/pull/16" target="_blank">#16</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/9428ee95794e6c46c20db25df3a4f9862f5faf96" target="_blank">GitHub Link</a>) </li>

    <li>Provides expansion of form widget field disabled atrribute with xsd improvement (<a href="https://github.com/apache/ofbiz-plugins/pull/21" target="_blank">#21</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/9c369dc489bae18724b85339a5a363f3eb94a75a" target="_blank">GitHub Link</a>) </li>

    <li>Refactors simple methods names as per naming convention best practices (<a href="https://github.com/apache/ofbiz-plugins/pull/20" target="_blank">#20</a>) (<a href="https://github.com/apache/ofbiz-plugins/commit/9c6838ef0b4f5e2e21b9e3161cd5a53de1df1657" target="_blank">GitHub Link</a>) </li>

    <li>Improves UI markup of inline promotion screen according to latest bootstrap (<a href="https://issues.apache.org/jira/browse/OFBIZ-11397" target="_blank">OFBIZ-11397</a>) </li>

    <li>Improves Quick Add screen according to new bootstrap framework (<a href="https://issues.apache.org/jira/browse/OFBIZ-11386" target="_blank">OFBIZ-11386</a>) </li>

    <li>Adds UI labels for success/error messages for scrum component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7696" target="_blank">OFBIZ-7696</a>) </li>

    <li>Improves edit credit card page's buttons (<a href="https://issues.apache.org/jira/browse/OFBIZ-10975" target="_blank">OFBIZ-10975</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Fixes: PartyProfileContent.js does not work (<a href="https://github.com/apache/ofbiz-framework/commit/1efaa73ebb4fe3d5dc1f95ae9a5f985226fe8238" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Creating custom TimePeriod does not show in party time period (<a href="https://issues.apache.org/jira/browse/OFBIZ-10904" target="_blank">OFBIZ-10904</a>) </li>

    <li>Fixes: Freamework only integration tests don't pass due to missing data only present in ecommerce (<a href="https://github.com/apache/ofbiz-framework/commit/9e08611e130124ac4a20e43ee36289c453408077" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Party's ContactMechWorkerTests does not work (<a href="https://issues.apache.org/jira/browse/OFBIZ-11646" target="_blank">OFBIZ-11646</a>) </li>

    <li>Fixes: Issue with opening a page via bookmark when the user is logged out (<a href="https://issues.apache.org/jira/browse/OFBIZ-10539" target="_blank">OFBIZ-10539</a>) </li>

    <li>Fixes: Promised datetime &amp; current promised date values not getting updated in OISGIR entity (<a href="https://issues.apache.org/jira/browse/OFBIZ-10538" target="_blank">OFBIZ-10538</a>) </li>

    <li>Fixes failed unit tests in CustRequestTests (<a href="https://github.com/apache/ofbiz-framework/commit/0393ebe994def0e3958c0d78f6e590e68ccdef88" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: ListParty doesn't show middleName (<a href="https://github.com/apache/ofbiz-framework/commit/0351cdb03cf767ee99b696ec90f152341a4c751e" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Theme files loading taking long time (<a href="https://issues.apache.org/jira/browse/OFBIZ-11665" target="_blank">OFBIZ-11665</a>) </li>

    <li>Fixes: Unable to navigate to 'Recently approved' screen under image management (<a href="https://github.com/apache/ofbiz-framework/commit/fb447e7b62b12f57f4a9a97da2a934925cdb0d84" target="_blank">GitHub Link</a>) </li>

    <li>Provides a service that runs periodically to generate CustomTimePeriod records (<a href="https://github.com/apache/ofbiz-framework/commit/ccabbd8e4e811fc8c0a542adc7658df1527e1849" target="_blank">GitHub Link</a>) </li>

    <li>Prevents FreeMarker Template Injection (SSTI) (<a href="https://github.com/apache/ofbiz-framework/commit/e46c29962b507a155233c8fd4e67f99f216229cc" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Issue with redirect queryParameters when the user is logged out (<a href="https://issues.apache.org/jira/browse/OFBIZ-11714" target="_blank">OFBIZ-11714</a>) </li>

    <li>Fixes: Apache OFBiz unsafe deserialization of XMLRPC arguments (CVE-2020-9496) (<a href="https://github.com/apache/ofbiz-framework/commit/4bdfb54ffb6e05215dd826ca2902c3e31420287a" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Entering manually date in date-time field become unworkable (<a href="https://issues.apache.org/jira/browse/OFBIZ-10432" target="_blank">OFBIZ-10432</a>) </li>

    <li>Fixes: showjGrowl called twice (<a href="https://issues.apache.org/jira/browse/OFBIZ-11720" target="_blank">OFBIZ-11720</a>) </li>

    <li>Fixes: paginateOrderList does not find orders on next page specific to FindOrders.ftl (<a href="https://issues.apache.org/jira/browse/OFBIZ-11356" target="_blank">OFBIZ-11356</a>) </li>

    <li>Fixes: Requesthandler exception is showing after clicking cancel/done button on editPerson screen (<a href="https://issues.apache.org/jira/browse/OFBIZ-10890" target="_blank">OFBIZ-10890</a>) </li>

    <li>Fixes: RuntimeException in getPartyNameForDate service for partyNameHistory.gender field (<a href="https://issues.apache.org/jira/browse/OFBIZ-11736" target="_blank">OFBIZ-11736</a>) </li>

    <li>Fixes: organisation tree in humanres doesn't show person names (<a href="https://issues.apache.org/jira/browse/OFBIZ-11677" target="_blank">OFBIZ-11677</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/121" target="_blank">#121</a>) </li>

    <li>Fixes: removes a trailing dot in pull_request_template.md. (<a href="https://issues.apache.org/jira/browse/OFBIZ-11722" target="_blank">OFBIZ-11722</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: Application 'ismgr' doesn't show up (<a href="https://github.com/apache/ofbiz-plugins/commit/071240205f28124378cf23dc5e400c8c62643363" target="_blank">GitHub Link</a>) </li>

</ul>

<h2>Documentation</h2>

<h3>Framework</h3>

<ul>

    <li>Creates a simple INSTALL file with minimum installation information and redirection to more documentation (<a href="https://github.com/apache/ofbiz-framework/commit/8f2ce4bc954d2ad07c179ce3aaeaf9365e98f401" target="_blank">GitHub Link</a>) </li>

    <li>Improves instructions to upgrade due to datamodel changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-11719" target="_blank">OFBIZ-11719</a>) (<a href="https://github.com/apache/ofbiz-framework/pull/162" target="_blank">#162</a>) </li>

    <li>Provides datamodel markdown migration to asciidoc (<a href="https://issues.apache.org/jira/browse/OFBIZ-11574" target="_blank">OFBIZ-11574</a>) </li>

</ul>
