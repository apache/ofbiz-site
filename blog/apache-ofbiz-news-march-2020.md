---
layout: post
title: Apache OFBiz News - March 2020
date: '2020-08-19T14:45:44+00:00'
permalink: apache-ofbiz-news-march-2020
---
<h2>Apache OFBiz News March 2020</h2><p>Welcome to our regular monthly round-up of OFBiz news. This month we 
share with you details of our usual list of features, improvements and 
statistics.</p><h2><span style="letter-spacing: -0.018em;">OFBiz Statistics</span></h2> 
  <p>Apache Kibble tracks some Apache OFBiz community statistics on its 
demo instance, so we have highlighted a few of our stats for the last 
month:</p> 
  <ul><li><strong>JIRA Issue Tracker:</strong> 148 issues were opened and 42 issues were closed ( 7 different people helped to close these issues)</li><li><strong>Code Change and Commit Activity:</strong> 
      <ul><li><strong>Framework: </strong>131 commits to the code base that changed 30,866 lines of code ( 7 committers were active)</li><li><strong>Plugins: </strong>32 commits to the code base that changed 7,528 lines of code ( 5 committers were active)</li></ul> 
    </li><li><strong>Mailing Lists:</strong> 
      <ul><li><strong>Dev: </strong>215 emails sent and 31 topics discussed (24 different people)</li><li><strong>User: </strong>67 emails sent and 21 topics discussed (17 different people) <br></li></ul></li></ul><h2>New features and improvements</h2>

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

<h3>Framework</h3>

<ul>

    <li>Adds 2020 version of Incoterms (<a href="https://github.com/apache/ofbiz-framework/commit/bbd570ad2234b739481f1933bc64af9140821606" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused services 'getSubContentWithPermCheck' and 'getSubSubContentWithPermCheck' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11393" target="_blank">OFBIZ-11393</a>)(<a href="https://issues.apache.org/jira/browse/OFBIZ-11394" target="_blank">OFBIZ-11394</a>) </li>

    <li>Converts party/LookupServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11362" target="_blank">OFBIZ-11362</a>) </li>

    <li>Converts ProductServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-10231" target="_blank">OFBIZ-10231</a>) </li>

    <li>Converts ProductFeatureServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11439" target="_blank">OFBIZ-11439</a>) </li>

    <li>Converts createTextAndUploadedContent service from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11368" target="_blank">OFBIZ-11368</a>) </li>

    <li>Converts OrderServices#getNextOrderId from mini lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/eba4157c59bcc0c34c4414e3667333177225c239" target="_blank">GitHub Link</a>) </li>

    <li>Converts OrderServices#getOrderedSummaryInformation from mini lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/53a8b812607f9987a1063f18062a5318cafe444c" target="_blank">GitHub Link</a>) </li>

    <li>Upgrades Freemarker from 2.3.29 to 2.3.30 (<a href="https://github.com/apache/ofbiz-framework/commit/03b3a7bc02891096a551fd4f1dfb17259a06a525" target="_blank">GitHub Link</a>) </li>

    <li>Converts ProductContentServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11436" target="_blank">OFBIZ-11436</a>) </li>

    <li>Converts CommonServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11402" target="_blank">OFBIZ-11402</a>) </li>

    <li>Converts PartyServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11361" target="_blank">OFBIZ-11361</a>) </li>

    <li>Removes unused method 'UtilHttp#checkURLforSpiders' (<a href="https://issues.apache.org/jira/browse/OFBIZ-11138" target="_blank">OFBIZ-11138</a>) </li>

    <li>Removes the user login security question (<a href="https://github.com/apache/ofbiz-framework/commit/bb698b9b96c92e6d541b16850fa9bd3fe99b4142" target="_blank">GitHub Link</a>) </li>

    <li>Ensures access of Application components requests only for logged in users (<a href="https://github.com/apache/ofbiz-framework/commit/67531d8bb2ce8b7cc373cba280dc2d77859adb0d" target="_blank">GitHub Link</a>) </li>

    <li>Updates tutorial 'How to apply the Apache License to your work' (<a href="https://github.com/apache/ofbiz-framework/commit/a4753d911d8a574676946122dc261a3bc93f86d0" target="_blank">GitHub Link</a>) </li>

    <li>Provides handling of message type '_WARNING_MESSAGE_' for class RequestHandler (<a href="https://github.com/apache/ofbiz-framework/commit/2895da2220fabc81c9bcf8e0436486288e398b6f" target="_blank">GitHub Link</a>) </li>

    <li>Styles some clickable fields of backend tables as buttons (<a href="https://github.com/apache/ofbiz-framework/commit/e4e32a1a64739638ce7692a898d662b523bc2991" target="_blank">GitHub Link</a>) </li>

    <li>Ensures MacroFormRenderer uses ModelFormField#getCurrentContainerId (<a href="https://github.com/apache/ofbiz-framework/commit/584f1edda5396adeee6ad3d1793e3a3351426714" target="_blank">GitHub Link</a>) </li>

    <li>Adds Content-Security-Policy in ErrorPage.ftl (<a href="https://github.com/apache/ofbiz-framework/commit/b6a796cbdfc662459a4b52a01f0a9b67c18e7c30" target="_blank">GitHub Link</a>) </li>

    <li>Adds unit tests for form Macros (<a href="https://github.com/apache/ofbiz-framework/commit/05d734206a833bdd69dafc16470b4265613053aa" target="_blank">GitHub Link</a>) </li>

    <li>Adds license header to MacroFormRendererTest (<a href="https://github.com/apache/ofbiz-framework/commit/e2142dd00ef6d58c0ab87f1a33e5a6cf07fb3c9e" target="_blank">GitHub Link</a>) </li>

    <li>Adds unit tests for form Macros (<a href="https://github.com/apache/ofbiz-framework/commit/322df2750c2cee965159573c6de279bff82f7a06" target="_blank">GitHub Link</a>) </li>

    <li>Adds unit tests for form Macros (<a href="https://github.com/apache/ofbiz-framework/commit/28e961c062e073ac9831810ea14b0c1a0d5a13d7" target="_blank">GitHub Link</a>) </li>

    <li>Adds unit tests for form Macros (<a href="https://github.com/apache/ofbiz-framework/commit/1348f9d3be8730f510fc5e5071d570821abe5818" target="_blank">GitHub Link</a>) </li>

    <li>Improves style alignment class properties (<a href="https://github.com/apache/ofbiz-framework/commit/5767da5e15c1dad7a53b0898fae69594725bffda" target="_blank">GitHub Link</a>) </li>

    <li>Replaces 'align-float' with 'align-text' in FTLs BatchPayments, ShowVisits and VisitDetail (<a href="https://github.com/apache/ofbiz-framework/commit/3c5224c35157d6f94e0eb60844b5304876e66f19" target="_blank">GitHub Link</a>) </li>

    <li>Replaces 'align-float' with 'align-text' in FTLs FindEmployee and EditShoppingList (<a href="https://github.com/apache/ofbiz-framework/commit/1f1d25b39ff8a4f129d00d89b41cd3745d9990d0" target="_blank">GitHub Link</a>) </li>

    <li>Removes unused property 'align-float' (<a href="https://github.com/apache/ofbiz-framework/commit/3f01b0d422576dadfd68048d5cdc35b3b923715f" target="_blank">GitHub Link</a>) </li>

    <li>Adds /uploads/ in .runtime/.gitignore (<a href="https://github.com/apache/ofbiz-framework/commit/11c0ce6d55b9ffc0124354bae8f5d9746bf5681e" target="_blank">GitHub Link</a>) </li>

    <li>Implements the pretty print for keyword search (<a href="https://github.com/apache/ofbiz-framework/commit/5988e27a0d80a891f01e34a9a835ceb6a4d3119a" target="_blank">GitHub Link</a>) </li>

    <li>Adds missing Content-Type header on a call to relation stylesheet/less (<a href="https://github.com/apache/ofbiz-framework/commit/bd1b8a882d4c497ec9138ea85e1144be33cc4ac6" target="_blank">GitHub Link</a>) </li>

    <li>Improves Web Content Caching (<a href="https://github.com/apache/ofbiz-framework/commit/2bb1de22ccf921d666271d7f8aa217893778f02f" target="_blank">GitHub Link</a>) </li>

    <li>Converts PartyPermissionServices.xml from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11433" target="_blank">OFBIZ-11433</a>) </li>

    <li>Adds new data model changes (<a href="https://issues.apache.org/jira/browse/OFBIZ-5426" target="_blank">OFBIZ-5426</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Adds service level error messages for all required fields for plugins/ebay component (<a href="https://issues.apache.org/jira/browse/OFBIZ-7471" target="_blank">OFBIZ-7471</a>) </li>

    <li>Converts the Dimension Service from mini lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/fd902848e87072f9a4f5fbec65e8efc8b061dbce" target="_blank">GitHub Link</a>) </li>

    <li>Adds a license file (<a href="https://github.com/apache/ofbiz-framework/commit/57d709bc555c476f28b24adcbbbdd7c3b79cb969" target="_blank">GitHub Link</a>) </li>

    <li>Adds Eclipse bin folder to gitignore (<a href="https://github.com/apache/ofbiz-framework/commit/652050c9b95453ec17d1265058d1dca8e173c1f4" target="_blank">GitHub Link</a>) </li>

    <li>Removes the user login security question (<a href="https://github.com/apache/ofbiz-framework/commit/d5731824c2181531fb03c18b4bc76fc4b12a431f" target="_blank">GitHub Link</a>) </li>

    <li>Converts FactServices.xml from mini lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/b50d949376e7d04195dda1be5f72d68f8249a770" target="_blank">GitHub Link</a>) </li>

    <li>Adds notice file and improves license file (<a href="https://github.com/apache/ofbiz-framework/commit/7a0386a68c8dc444143d13b637d492565e8cd80c" target="_blank">GitHub Link</a>) </li>

    <li>Sets 'auth' to true for request urls used for Application components (<a href="https://issues.apache.org/jira/browse/OFBIZ-4956" target="_blank">OFBIZ-4956</a>) </li>

    <li>Improves license file (<a href="https://github.com/apache/ofbiz-framework/commit/e4388ba7c497119ea50886abc9be6ba558e45654" target="_blank">GitHub Link</a>) </li>

    <li>Formats HeaderHead.ftl (<a href="https://github.com/apache/ofbiz-framework/commit/417c3e4243ebcbed796fd5fdb58684eb04d5cbd7" target="_blank">GitHub Link</a>) </li>

</ul>

<h2>Bugfixes</h2>

Functional and technical bugfixes:

<h3>Framework</h3>

<ul>

    <li>Restores ProductServices.xml for method createProductPrice (<a href="https://issues.apache.org/jira/browse/OFBIZ-10231" target="_blank">OFBIZ-10231</a>) </li>

    <li>Fixes missing link connection between alone and group permissions in class ModelPermission (<a href="https://issues.apache.org/jira/browse/OFBIZ-11440" target="_blank">OFBIZ-11440</a>) </li>

    <li>Fixes: Converts ProductServices.xml from mini lang to groovy: productPriceGenericPermission failed (<a href="https://issues.apache.org/jira/browse/OFBIZ-10231" target="_blank">OFBIZ-10231</a>) </li>

    <li>Fixes: createMissingCategoryAndProductAltUrls service misses a transaction (<a href="https://issues.apache.org/jira/browse/OFBIZ-11441" target="_blank">OFBIZ-11441</a>) </li>

    <li>Fixes: Converts OrderServices#getNextOrderId from mini lang to groovy (<a href="https://github.com/apache/ofbiz-framework/commit/b79c95b151a2daaccefa6436390865e83dff2841" target="_blank">GitHub Link</a>) </li>

    <li>Fixes potential Nullpointer in ErrorPage.ftl (<a href="https://github.com/apache/ofbiz-framework/commit/d83bec22d8ed17799b6c6dad5eda24a23c8823a5" target="_blank">GitHub Link</a>) </li>

    <li>Fixes a bug introduced with the removal of the login security question (<a href="https://github.com/apache/ofbiz-framework/commit/83b8b27b58029405ee7190380550b5aaa8e1ed3c" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: CommonTheme has a dependency on Flatgrey application.js (<a href="https://github.com/apache/ofbiz-framework/commit/31812009ebd9642158b4ca5359b6234f8a6c8049" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Unable to view entity row record in webtools if PK contains timestamp field (<a href="https://issues.apache.org/jira/browse/OFBIZ-11426" target="_blank">OFBIZ-11426</a>) </li>

    <li>Removes FIXME-tags in DataResourceWorker#renderDataResourceAsText after correctly propagate themes (<a href="https://github.com/apache/ofbiz-framework/commit/2517a9679218151cd45e5ea328d61957b8320434" target="_blank">GitHub Link</a>) </li>

    <li>Fixes issue with SameSite attribute that is set to 'strict' for all cookies (<a href="https://github.com/apache/ofbiz-framework/commit/369d5f6c95fdf1aa5b0c03c15db878a1719a63ab" target="_blank">GitHub Link</a>) </li>

    <li>Provides class SameSiteFilter (<a href="https://github.com/apache/ofbiz-framework/commit/7d95c46b8345c020f8723dfd476d3b193633af86" target="_blank">GitHub Link</a>) </li>

    <li>Provides configurable SameSite attribute for all cookies (<a href="https://github.com/apache/ofbiz-framework/commit/fd1e7f477b8800a2071bb21a3115c43d31d919d3" target="_blank">GitHub Link</a>) </li>

    <li>Fixes a typo in security.properties (<a href="https://github.com/apache/ofbiz-framework/commit/c2fb314a1b93e9f3c1d96dce2356a7b39a01fa72" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Specified key was too long; max key length is 767 bytes for ProductPromoCodeEmail entity.(<a href="https://issues.apache.org/jira/browse/OFBIZ-5426" target="_blank">OFBIZ-5426</a>) (#44) </li>

    <li>Renames ProductPromoCodeEmails foreign key name related to ProductPromoCode (<a href="https://github.com/apache/ofbiz-framework/commit/dc68ac089faf9bec36ff06bde812fb7ba1f083a4" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: The createTaskContent request does not work (<a href="https://github.com/apache/ofbiz-framework/commit/f4acda5ade516410fec18cdde20c482c3ddeae11" target="_blank">GitHub Link</a>) </li>

    <li>Fixes path to ftpAddress services after converting ContactMarchServices.xm from mini lang to groovy (<a href="https://issues.apache.org/jira/browse/OFBIZ-11359" target="_blank">OFBIZ-11359</a>) </li>

</ul>

<h3>Plugins</h3>

<ul>

    <li>Fixes: Unable to remove items from onePageCheckout screen of e-commerce component (<a href="https://issues.apache.org/jira/browse/OFBIZ-10800" target="_blank">OFBIZ-10800</a>) </li>

    <li>Fixes not included fromDate and thruDate while finding invoices in DimensionServices (<a href="https://issues.apache.org/jira/browse/OFBIZ-19048" target="_blank">OFBIZ-19048</a>) </li>

    <li>Fixes sequenceId in DimensionServices#loadCurrencyDimension (<a href="https://github.com/apache/ofbiz-framework/commit/350571deaadef1cecc837ad6688d9cdedd630887" target="_blank">GitHub Link</a>) </li>

    <li>Ensures that the SameSite attribute is set to 'strict' for all cookies (<a href="https://github.com/apache/ofbiz-framework/commit/d267d161e0c5daaac025dcb9aeee895ff2b8d660" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: prepareProductDimensionData does not load correct fields in ProductDimension (<a href="https://issues.apache.org/jira/browse/OFBIZ-11465" target="_blank">OFBIZ-11465</a>) </li>

    <li>Replaces use of primary key 'sequenceId' with natural key 'uomId' in DimensionServices#loadCurrencyDimension (<a href="https://github.com/apache/ofbiz-framework/commit/a8d3781cc6ae56863ef98a5092fd8a5095773d98" target="_blank">GitHub Link</a>) </li>

    <li>Fixes a typo due to <a href="https://issues.apache.org/jira/browse/OFBIZ-11030" target="_blank">OFBIZ-11030</a> (<a href="https://github.com/apache/ofbiz-framework/commit/492dcb9208e0daeb853bd5bd7f2499aae9afd099" target="_blank">GitHub Link</a>) </li>

    <li>Fixes: Product Images not rendering on One Page Checkout (<a href="https://issues.apache.org/jira/browse/OFBIZ-11400" target="_blank">OFBIZ-11400</a>) </li>

</ul>
