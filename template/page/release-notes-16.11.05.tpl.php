<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 16.11.05</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 16.11.05</h1>
      <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="download.html">Download</a><span>/</span><span class="current">Release Notes 16.11.05</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 16.11.05, released in 2018-10-02, is the fifth release of the 16.11 series, that has been stabilized since November 2016.</p>
  
<h2>Bugs</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4514'>OFBIZ-4514</a>] -         Taxes are not handled correctly when creating accounting transactions from purchase invoices</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-4959'>OFBIZ-4959</a>] -         Logout do not remove autoLogin</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6330'>OFBIZ-6330</a>] -         The invoiceTaxTotal value is missing from createAcctgTransForPurchaseInvoice service</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7535'>OFBIZ-7535</a>] -         Broken page renders while click on Submit button</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7709'>OFBIZ-7709</a>] -         Party Search doesn&#39;t consider Billing Address and Shipping Address checkbox in WebPos </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7719'>OFBIZ-7719</a>] -         Not able to select Virtual Product in WebPos</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-7945'>OFBIZ-7945</a>] -         Webpos Keyboard Shortcut keys does not work correctly</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8411'>OFBIZ-8411</a>] -         popup image takes full width of browser window for ecommerce multiflex theme</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-8622'>OFBIZ-8622</a>] -         Required parameters are optional for createWorkRequirementFulfillment service</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9664'>OFBIZ-9664</a>] -         OFBiz 16 migration - HTML content filtered </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9898'>OFBIZ-9898</a>] -         Incorrect success message after creating customer</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10006'>OFBIZ-10006</a>] -         Exception Error rendering on all View Category pages</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10121'>OFBIZ-10121</a>] -         Incorrect Party profile view redirection in SFA due to missing roleType</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10122'>OFBIZ-10122</a>] -         Not able to add the requirement,broken screen with the error message in workeffort component</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10133'>OFBIZ-10133</a>] -         streaming large content cause out of memory exception.</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10148'>OFBIZ-10148</a>] -         Display the included vat amount on order item detail instead of 0</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10149'>OFBIZ-10149</a>] -         ProductPriceRuleCondition &quot;is Product&quot; don&#39;t check the virtual product</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10153'>OFBIZ-10153</a>] -         Shipping Label printing not working </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10154'>OFBIZ-10154</a>] -         pagination errors in &quot;KeywordSearch.ftl&quot; and &quot;ProductSearchSession.java&quot;</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10158'>OFBIZ-10158</a>] -         Find Employee Position does not allow &quot;don&#39;t care&quot; for boolean fields</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10159'>OFBIZ-10159</a>] -         Correcting findOne() in OfbizDslDescriptorForEclipse.dsld</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10210'>OFBIZ-10210</a>] -         Values are not aligned with column over EditShoppingList Screen </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10218'>OFBIZ-10218</a>] -         UtilNumber.getBigDecimalRoundingMode() returns a wrong value</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10232'>OFBIZ-10232</a>] -         Survey response data lost on loadCartFromOrder service</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10243'>OFBIZ-10243</a>] -         Error in service definition for deleteOrderHeaderWorkEffort</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10274'>OFBIZ-10274</a>] -         Wrong locale/fallbackLocale logic in CategoryContentWrapper leads to unavailable alternate locale content</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10275'>OFBIZ-10275</a>] -         UtilCodec URL decoding breaks values with german umlauts</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10277'>OFBIZ-10277</a>] -         The getJSONuiLabel javascript function is no longer working</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10278'>OFBIZ-10278</a>] -         The server hour normally shown in the jobs list is no longer showing</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10321'>OFBIZ-10321</a>] -         Multi-level BOM (same raw MM in different level) MRP not supportive</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10369'>OFBIZ-10369</a>] -         ConfigXMLReader - Events are not executed in the order defined</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10389'>OFBIZ-10389</a>] -         The first visit event are not executed in case of CMS</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10392'>OFBIZ-10392</a>] -         FindInventoryEventPlan Error</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10394'>OFBIZ-10394</a>] -         Fix typo &quot;paramters&quot; =&gt; &quot;parameters&quot;</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10405'>OFBIZ-10405</a>] -         Wrong permission action leads to error</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10406'>OFBIZ-10406</a>] -         Dynamic values not rendering properly in property tag of fail-property attribute</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10419'>OFBIZ-10419</a>] -         Incorrect data type conversion of variable serviceEndTime in CoreEvents.java</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10425'>OFBIZ-10425</a>] -         When check out after input billing information, it&#39;s displayed as java object</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10458'>OFBIZ-10458</a>] -         GetLocaleList call can provide duplicate results</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10486'>OFBIZ-10486</a>] -         Blog title is invisible on blog view page of ecommerce store</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10487'>OFBIZ-10487</a>] -         compressableMimeType is not a valid attribute of apache http connector </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10493'>OFBIZ-10493</a>] -         Display From address in send confirmation email form</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10506'>OFBIZ-10506</a>] -         Initial set of hasLoogedOut flag when logging in</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10523'>OFBIZ-10523</a>] -         You can&#39;t create a New Payment Group</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10524'>OFBIZ-10524</a>] -         Could not find &lt;simple-method name=&quot;createWorkEffortSkillStandard&quot;&gt;</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10545'>OFBIZ-10545</a>] -         SurveyOptions.ftl is in the wrong location </li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10549'>OFBIZ-10549</a>] -         Action (find) button not visible in LabelManager search screen</li>
</ul>
                
<h2>Improvements</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-1032'>OFBIZ-1032</a>] -         EntitySaxReader mostly-insert (store after create-error) Fix</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-6206'>OFBIZ-6206</a>] -         The &quot;always&quot; log  level in minilang is logged as FATAL</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9337'>OFBIZ-9337</a>] -         Update msyql sql-type for datetime field-type to support Fractional Seconds in Time Values</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10103'>OFBIZ-10103</a>] -         Useful parameter usage extension and small fix of getDependentDropdownValues in miscAjaxFunctions.js</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10172'>OFBIZ-10172</a>] -         GeoAssoc data is missing for Telangana state of India</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10223'>OFBIZ-10223</a>] -         Use Tomcat default ciphers</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10235'>OFBIZ-10235</a>] -         Update org.ofbiz package to org.apache.ofbiz  in some missing entity def</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10253'>OFBIZ-10253</a>] -         Pass JVM options to OFBiz when using Gradle</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10364'>OFBIZ-10364</a>] -         Update Currency UOM data as per iso amendment 164, 165 and 166</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10436'>OFBIZ-10436</a>] -         Update xml-rpc libraries to latest release 3.1.3</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10484'>OFBIZ-10484</a>] -         Sanitize the output of XML-RPC replies of error data</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10530'>OFBIZ-10530</a>] -         Add mergeFromPlugins.sh similar as mergeFromPlugins.bat</li>
</ul>
                                                                                                                                                      
<h2>Sub-tasks</h2>
<ul>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-9966'>OFBIZ-9966</a>] -         Secure the login.secret_key_string</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10004'>OFBIZ-10004</a>] -         Error in Create Billing Account from Party Profile</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10177'>OFBIZ-10177</a>] -         Rainbow theme: bug in avatar.ftl when the last name does not exist</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10222'>OFBIZ-10222</a>] -         Access the online help in Rainbow themes</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10283'>OFBIZ-10283</a>] -         Removing Birt dependencies in ReportScreens.xml</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10420'>OFBIZ-10420</a>] -         Session fixation issue</li>
<li>[<a href='https://issues.apache.org/jira/browse/OFBIZ-10463'>OFBIZ-10463</a>] -         Framework webapp freemarkerTransform.properties has dependency on product component</li>
</ul>

  </div>
</div>
</div>
</div>
</section>
</section>