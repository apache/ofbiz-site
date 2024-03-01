---
layout: post
title: 'Apache OFBiz News - December 2016 '
date: '2017-01-05T18:59:36+00:00'
permalink: apache_ofbiz_news_december_2016
---
<h2>Apache OFBiz News December 2016 </h2>
Welcome to our regular monthly round-up of OFBiz news.
This month we have news about our OFBiz Community Day, podcasts from the OFBiz track at Apachecon EU, the use of code analysis tools as a way for new contributors to get involved with the project, protecting the OFBiz trademark and OFBiz celebrates 10 years at the ASF.
<!--more-->
<h2>Happy Birthday Apache OFBiz!</h2>
During December OFBiz celebrated its 10th Apache birthday. On 20th December 2006, OFBiz graduated from incubation to became an Apache Top Level Project. Since then, with the help of our community, we have continued to grow, develop and incorporate new technologies. The project has 31 committers and a large number of contributors coming from our very active user and developer mailing lists. 
<p></p>
Over the past 10 years the project has released a range of OFBiz versions from 4.0 through to 16.11 (released in November 2016). We are all looking forward to our next 10 years at Apache!
<h2>Podcasts of OFBiz Presentations from Apachecon EU Seville</h2> 
Don't worry if you couldn't make it to Apachecon EU in Seville, most of the presentations have been recorded and are available on <a href="http://feathercast.apache.org">Feathercast</a>
The audio from the OFBiz track at Apachecon is available via the link below:
<p></p>
<a href="http://feathercast.apache.org/tag/ofbiz/">http://feathercast.apache.org/tag/ofbiz/ </a>
<p></p>
Thanks very much to the ASF TAC team (including our own OFBiz contributors Gaurav Saini and Youssef Khaye) for managing the recording and also Rich Bowen for uploading everything.
<h2>OFBiz Community Day</h2> 
Our Community Days are held every 3 months and the final one for 2016 was held on 17th December. Even though it was very close to the holidays, people from the community still made time to get together and work on improving OFBiz.
<p></p>
On 17th December, the ASF Status Monitor was showing OFBiz Committer, Michael Brohl as the most active Committer that day. Thank you Michael and also everyone who participated and we hope that you will continue to be involved in any of our future Community Days. Information about our Community Days can be found on our  <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">OFBiz Wiki. </a>
<h2>Protecting the OFBiz Trademark</h2> 
The OFBiz PMC has been making an extra effort to pro-actively support ASF Trademarks and Brand Management to protect our OFBiz trademark. OFBiz was recently registered as an ASF trademark and all projects need to ensure that their brands are not misused. All third party sites need to comply with <a href="https://www.apache.org/foundation/marks/domains">ASF Trademark Guidelines. </a>
<p></p>
In addition, the project has adopted a new policy to limit <a href="https://s.apache.org/mH87">Unfair Marketing Messages on the Mailing Lists. </a>
<p></p>
We ask anyone to report potential trademark misuses to the OFBiz PMC private mailing list (private@ofbiz.apache.org).
<p></p>
<h2>Fixing Defects Using Code Analysis Tools</h2> 
If you are interested in contributing to OFBiz but not sure where to start then maybe this could help. 
<p></p>
Now that our current OFBiz release and trunk is using Gradle, we now have an easy way to run source code analysis tools on our codebase. Tools like PMD and FindBugs generate useful reports containing pointers to code that may need to be improved or fixed. 
<p></p>
We would like to get as many people from the community involved and working together to fix as many defects as possible as it will give us a cleaner codebase, increase the confidence for potential adopters and perhaps more importantly, make it easier for new contributors to help the project
<p></p>
Please take a look at the following  <a href="https://s.apache.org/1yN6">mailing list thread </a>  which goes through all the steps needed to get started. If you have any questions then please feel free to ask on our development mailing list (dev@ofbiz.apache.org)
<h2>New features and improvements</h2>
Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:
<ul>
 	<li>Refactor and simplify the startup sequence in OFBiz (<a href="https://issues.apache.org/jira/browse/OFBIZ-8337">OFBIZ-8337</a>)
Continuing the refactoring work on the startup sequence, this commit specifically focuses on the ComponentContainer and how it loads components into the system. The following changes are made:
<ul>
 	<li>Simplify and cleanup the ofbiz-containers.xml to have only one entry</li>
 	<li>Substantially simplify the ComponentLoaderConfig class and remove unnecessary defined state</li>
 	<li>Delete the JustLoadComponentsContainer (used to exist for the server command --testlist which no longer exists)</li>
 	<li>Fully refactor the ComponentContainer class and breakup the messy logic into chunks of private methods. The methods are also properly documented.</li>
 	<li>Remove an old reference to the testlist container which no longer exists</li>
 	<li>Delete the NativeLibClassLoader.java</li>
 	<li>Delete the native classpath logic in Classpath.java</li>
 	<li>Refactor the ComponentContainer and StartupControlPanel to operate without the NativeLibClassLoader. This substantially simplifies the code</li>
 	<li>Declare a URLClassLoader in ComponentContainer that is instantiated upon building the classpath for all components. This makes the classloader start in one shot</li>
 	<li>Simplify the Config file and remove fields that are not used. Also refactor some messy logic for loading the props file and other code improvements</li>
 	<li>Refactor all the .properties files for startup to have a consistent structure that clearly documents all available properties and the default value for each property. This change is also related to the changes applied on Config.java</li>
 	<li>Remove the declaration of the StartupLoader implementation class from all startup .properties files because only one implementation exists and it should be the default always.</li>
 	<li>Refactor the loaders retrieval code (main, rmi, test, load-data) defined in the startup .properties files</li>
 	<li>Refactor some switch statements to comply with java coding standards</li>
 	<li>Add the DTDs defined in base through Gradle because we removed the NativeLibClassLoader and the classpath buildup logic in StartupControlPanel</li>
</ul>
</li>
 	<li>Refactor javadocs in OFBiz to be standards compliant (<a href="https://issues.apache.org/jira/browse/OFBIZ-9144">OFBIZ-9144</a>)</li>
 	<li>LoginWorker HashCrypt the type of hash for one-way encryption (<a href="https://issues.apache.org/jira/browse/OFBIZ-8537">OFBIZ-8537</a>)
Added PBKDF2 hash type to encrypt password.</li>
 	<li>Added user friendly error message in duplicateProduct service, if passed productId already exists than return user friendly error message instead of entity exception. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7402">OFBIZ-7402</a>)</li>
 	<li>Add Party criteria to Routing Tasks (<a href="https://issues.apache.org/jira/browse/OFBIZ-9134">OFBIZ-9134</a>)</li>
 	<li>Proper Form Validation should be there while
<ul>
 	<li>adding new Example Feature. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7476">OFBIZ-7476</a>)</li>
 	<li>creating Agreement Roles. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7511">OFBIZ-7511</a>)</li>
 	<li>creating Agreement Item Facility. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7461">OFBIZ-7461</a>)</li>
 	<li>creating Agreement Item Party. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7458">OFBIZ-7458</a>)</li>
 	<li>creating new agreement product. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7441">OFBIZ-7441</a>)</li>
</ul>
</li>
 	<li>Client Side validation
<ul>
 	<li>missing on Create Payment screen. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7430">OFBIZ-7430</a>)</li>
 	<li>missing on Create New Tax Authority Form. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7436">OFBIZ-7436</a>)</li>
 	<li>required in Add Billing Accounts Role. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7429">OFBIZ-7429</a>)</li>
 	<li>on Add product categories form in catalog. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7425">OFBIZ-7425</a>)</li>
 	<li>required while creating Product Association. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7424">OFBIZ-7424</a>)</li>
 	<li>while creating price rule from catalog manager. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7307">OFBIZ-7307</a>)</li>
 	<li>missing at Create User Login form. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7984">OFBIZ-7984</a>)</li>
 	<li>missing at Create Ebay Account form. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7952">OFBIZ-7952</a>)</li>
 	<li>missing at Add Ebay Configuration form. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7866">OFBIZ-7866</a>)</li>
 	<li>required in Tax Infos (Add Party Tax Authority Info). (<a href="https://issues.apache.org/jira/browse/OFBIZ-7437">OFBIZ-7437</a>)</li>
</ul>
</li>
 	<li>Refactor forms in Example (<a href="https://issues.apache.org/jira/browse/OFBIZ-9146">OFBIZ-9146</a>)</li>
 	<li>Refactored Config.java to simplify fields initialization and properly implement the Optional interface for retrieving port offset</li>
 	<li>Moved the logic/implementation of OFBiz legacy authentication tokens from the LoginWorker class to a new class named ExternalLoginKeysManager.
Improved Javadocs in the new class.</li>
 	<li>Demo data for serialized and non-serialized product (<a href="https://issues.apache.org/jira/browse/OFBIZ-7766">OFBIZ-7766</a>)</li>
 	<li>Added a PriCat component under specialpurpose (<a href="https://issues.apache.org/jira/browse/OFBIZ-9123">OFBIZ-9123</a>)</li>
 	<li>A set of unit tests for the ExternalLoginKeysManager.getExternalLoginKey(...) method.
Minor refactoring of the getExternalLoginKey(...) method to make it more friendly to unit tests.</li>
 	<li>Minor changes to make the method easier to test with unit tests.</li>
 	<li>Add a isValid() method to the ModelService class (<a href="https://issues.apache.org/jira/browse/OFBIZ-9158">OFBIZ-9158</a>)</li>
 	<li>Add the entity-auto CRUD services for
<ul>
 	<li>JobSandbox (<a href="https://issues.apache.org/jira/browse/OFBIZ-9159">OFBIZ-9159</a>)</li>
 	<li>RuntimeData (<a href="https://issues.apache.org/jira/browse/OFBIZ-9161">OFBIZ-9161</a>)</li>
</ul>
</li>
 	<li>Upgrade gradle to version 3.2.1 (<a href="https://issues.apache.org/jira/browse/OFBIZ-9160">OFBIZ-9160</a>)</li>
 	<li>Provided clearer documentation for the eclipse task in Gradle</li>
 	<li>Removed unused runtime libraries in build.gradle</li>
 	<li>Replace leftshift operators with doLast clojures in build.gradle (<a href="https://issues.apache.org/jira/browse/OFBIZ-9160">OFBIZ-9160</a>)</li>
 	<li>Provided an updated script for gradle bash-completion in README.md</li>
 	<li>Update location of view handlers</li>
</ul>
<h2>Bugfixes</h2>
Functional and technical bugfixes:
<ul>
 	<li>Added missing code to get the ItemIssuance in setInvoicesToReadyFromShipment service. This bug was introduced during the delegator to EntityQuery convertion. Also added complete code to check null shipment on setInvoicesToReadyFromShipment, code was incompletely implemented.</li>
 	<li>Corrected typo which caused calcTaxForDisplay service call to fail (problem with Ecommerce frontend when using showPricesWithVatTax)</li>
 	<li>Form macros with incorrect arguments.</li>
 	<li>A series of wrong argument names in Javadoc comments.</li>
 	<li>Incorrect @see reference to method in Javadoc.</li>
 	<li>Removed empty file (invalid class), a leftover of the commit that removed Cobertura some time ago.</li>
 	<li>Removed a redundant null check and parenthesis.</li>
 	<li>Error occurred when making shopping list public/private from Party Detail screen. (<a href="https://issues.apache.org/jira/browse/OFBIZ-7683">OFBIZ-7683</a>)</li>
 	<li>Fixed wrong package-names</li>
</ul>
