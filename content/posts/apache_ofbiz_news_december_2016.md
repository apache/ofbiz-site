---
layout: post
title: 'Apache OFBiz News - December 2016 '
date: '2017-01-05T18:59:36+00:00'
permalink: apache_ofbiz_news_december_2016
---
## Apache OFBiz News December 2016

Welcome to our regular monthly round-up of OFBiz news. This month we have news about our OFBiz Community Day, podcasts from the OFBiz track at Apachecon EU, the use of code analysis tools as a way for new contributors to get involved with the project, protecting the OFBiz trademark and OFBiz celebrates 10 years at the ASF.

<!--more-->

## Happy Birthday Apache OFBiz!

During December OFBiz celebrated its 10th Apache birthday. On 20th December 2006, OFBiz graduated from incubation to became an Apache Top Level Project. Since then, with the help of our community, we have continued to grow, develop and incorporate new technologies. The project has 31 committers and a large number of contributors coming from our very active user and developer mailing lists.

<p></p>

Over the past 10 years the project has released a range of OFBiz versions from 4.0 through to 16.11 (released in November 2016). We are all looking forward to our next 10 years at Apache!

## Podcasts of OFBiz Presentations from Apachecon EU Seville

Don't worry if you couldn't make it to Apachecon EU in Seville, most of the presentations have been recorded and are available on <a href="http://feathercast.apache.org">Feathercast</a>
The audio from the OFBiz track at Apachecon is available via the link below:

<p></p>

<a href="http://feathercast.apache.org/tag/ofbiz/">http://feathercast.apache.org/tag/ofbiz/ </a>

<p></p>

Thanks very much to the ASF TAC team (including our own OFBiz contributors Gaurav Saini and Youssef Khaye) for managing the recording and also Rich Bowen for uploading everything.

## OFBiz Community Day

Our Community Days are held every 3 months and the final one for 2016 was held on 17th December. Even though it was very close to the holidays, people from the community still made time to get together and work on improving OFBiz.

<p></p>

On 17th December, the ASF Status Monitor was showing OFBiz Committer, Michael Brohl as the most active Committer that day. Thank you Michael and also everyone who participated and we hope that you will continue to be involved in any of our future Community Days. Information about our Community Days can be found on our  <a href="https://cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Community+Days">OFBiz Wiki. </a>

## Protecting the OFBiz Trademark

The OFBiz PMC has been making an extra effort to pro-actively support ASF Trademarks and Brand Management to protect our OFBiz trademark. OFBiz was recently registered as an ASF trademark and all projects need to ensure that their brands are not misused. All third party sites need to comply with <a href="https://www.apache.org/foundation/marks/domains">ASF Trademark Guidelines. </a>

<p></p>

In addition, the project has adopted a new policy to limit <a href="https://s.apache.org/mH87">Unfair Marketing Messages on the Mailing Lists. </a>

<p></p>

We ask anyone to report potential trademark misuses to the OFBiz PMC private mailing list (private@ofbiz.apache.org).

<p></p>

## Fixing Defects Using Code Analysis Tools

If you are interested in contributing to OFBiz but not sure where to start then maybe this could help.

<p></p>

Now that our current OFBiz release and trunk is using Gradle, we now have an easy way to run source code analysis tools on our codebase. Tools like PMD and FindBugs generate useful reports containing pointers to code that may need to be improved or fixed.

<p></p>

We would like to get as many people from the community involved and working together to fix as many defects as possible as it will give us a cleaner codebase, increase the confidence for potential adopters and perhaps more importantly, make it easier for new contributors to help the project

<p></p>

Please take a look at the following  <a href="https://s.apache.org/1yN6">mailing list thread </a>  which goes through all the steps needed to get started. If you have any questions then please feel free to ask on our development mailing list (dev@ofbiz.apache.org)

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

- Refactor and simplify the startup sequence in OFBiz ([OFBIZ-8337](https://issues.apache.org/jira/browse/OFBIZ-8337)) Continuing the refactoring work on the startup sequence, this commit specifically focuses on the ComponentContainer and how it loads components into the system. The following changes are made:
  - Simplify and cleanup the ofbiz-containers.xml to have only one entry
  - Substantially simplify the ComponentLoaderConfig class and remove unnecessary defined state
  - Delete the JustLoadComponentsContainer (used to exist for the server command --testlist which no longer exists)
  - Fully refactor the ComponentContainer class and breakup the messy logic into chunks of private methods. The methods are also properly documented.
  - Remove an old reference to the testlist container which no longer exists
  - Delete the NativeLibClassLoader.java
  - Delete the native classpath logic in Classpath.java
  - Refactor the ComponentContainer and StartupControlPanel to operate without the NativeLibClassLoader. This substantially simplifies the code
  - Declare a URLClassLoader in ComponentContainer that is instantiated upon building the classpath for all components. This makes the classloader start in one shot
  - Simplify the Config file and remove fields that are not used. Also refactor some messy logic for loading the props file and other code improvements
  - Refactor all the .properties files for startup to have a consistent structure that clearly documents all available properties and the default value for each property. This change is also related to the changes applied on Config.java
  - Remove the declaration of the StartupLoader implementation class from all startup .properties files because only one implementation exists and it should be the default always.
  - Refactor the loaders retrieval code (main, rmi, test, load-data) defined in the startup .properties files
  - Refactor some switch statements to comply with java coding standards
  - Add the DTDs defined in base through Gradle because we removed the NativeLibClassLoader and the classpath buildup logic in StartupControlPanel
- Refactor javadocs in OFBiz to be standards compliant ([OFBIZ-9144](https://issues.apache.org/jira/browse/OFBIZ-9144))
- LoginWorker HashCrypt the type of hash for one-way encryption ([OFBIZ-8537](https://issues.apache.org/jira/browse/OFBIZ-8537)) Added PBKDF2 hash type to encrypt password.
- Added user friendly error message in duplicateProduct service, if passed productId already exists than return user friendly error message instead of entity exception. ([OFBIZ-7402](https://issues.apache.org/jira/browse/OFBIZ-7402))
- Add Party criteria to Routing Tasks ([OFBIZ-9134](https://issues.apache.org/jira/browse/OFBIZ-9134))
- Proper Form Validation should be there while
  - adding new Example Feature. ([OFBIZ-7476](https://issues.apache.org/jira/browse/OFBIZ-7476))
  - creating Agreement Roles. ([OFBIZ-7511](https://issues.apache.org/jira/browse/OFBIZ-7511))
  - creating Agreement Item Facility. ([OFBIZ-7461](https://issues.apache.org/jira/browse/OFBIZ-7461))
  - creating Agreement Item Party. ([OFBIZ-7458](https://issues.apache.org/jira/browse/OFBIZ-7458))
  - creating new agreement product. ([OFBIZ-7441](https://issues.apache.org/jira/browse/OFBIZ-7441))
- Client Side validation
  - missing on Create Payment screen. ([OFBIZ-7430](https://issues.apache.org/jira/browse/OFBIZ-7430))
  - missing on Create New Tax Authority Form. ([OFBIZ-7436](https://issues.apache.org/jira/browse/OFBIZ-7436))
  - required in Add Billing Accounts Role. ([OFBIZ-7429](https://issues.apache.org/jira/browse/OFBIZ-7429))
  - on Add product categories form in catalog. ([OFBIZ-7425](https://issues.apache.org/jira/browse/OFBIZ-7425))
  - required while creating Product Association. ([OFBIZ-7424](https://issues.apache.org/jira/browse/OFBIZ-7424))
  - while creating price rule from catalog manager. ([OFBIZ-7307](https://issues.apache.org/jira/browse/OFBIZ-7307))
  - missing at Create User Login form. ([OFBIZ-7984](https://issues.apache.org/jira/browse/OFBIZ-7984))
  - missing at Create Ebay Account form. ([OFBIZ-7952](https://issues.apache.org/jira/browse/OFBIZ-7952))
  - missing at Add Ebay Configuration form. ([OFBIZ-7866](https://issues.apache.org/jira/browse/OFBIZ-7866))
  - required in Tax Infos (Add Party Tax Authority Info). ([OFBIZ-7437](https://issues.apache.org/jira/browse/OFBIZ-7437))
- Refactor forms in Example ([OFBIZ-9146](https://issues.apache.org/jira/browse/OFBIZ-9146))
- Refactored Config.java to simplify fields initialization and properly implement the Optional interface for retrieving port offset
- Moved the logic/implementation of OFBiz legacy authentication tokens from the LoginWorker class to a new class named ExternalLoginKeysManager. Improved Javadocs in the new class.
- Demo data for serialized and non-serialized product ([OFBIZ-7766](https://issues.apache.org/jira/browse/OFBIZ-7766))
- Added a PriCat component under specialpurpose ([OFBIZ-9123](https://issues.apache.org/jira/browse/OFBIZ-9123))
- A set of unit tests for the ExternalLoginKeysManager.getExternalLoginKey(...) method. Minor refactoring of the getExternalLoginKey(...) method to make it more friendly to unit tests.
- Minor changes to make the method easier to test with unit tests.
- Add a isValid() method to the ModelService class ([OFBIZ-9158](https://issues.apache.org/jira/browse/OFBIZ-9158))
- Add the entity-auto CRUD services for
  - JobSandbox ([OFBIZ-9159](https://issues.apache.org/jira/browse/OFBIZ-9159))
  - RuntimeData ([OFBIZ-9161](https://issues.apache.org/jira/browse/OFBIZ-9161))
- Upgrade gradle to version 3.2.1 ([OFBIZ-9160](https://issues.apache.org/jira/browse/OFBIZ-9160))
- Provided clearer documentation for the eclipse task in Gradle
- Removed unused runtime libraries in build.gradle
- Replace leftshift operators with doLast clojures in build.gradle ([OFBIZ-9160](https://issues.apache.org/jira/browse/OFBIZ-9160))
- Provided an updated script for gradle bash-completion in README.md
- Update location of view handlers

## Bugfixes

Functional and technical bugfixes:

- Added missing code to get the ItemIssuance in setInvoicesToReadyFromShipment service. This bug was introduced during the delegator to EntityQuery convertion. Also added complete code to check null shipment on setInvoicesToReadyFromShipment, code was incompletely implemented.
- Corrected typo which caused calcTaxForDisplay service call to fail (problem with Ecommerce frontend when using showPricesWithVatTax)
- Form macros with incorrect arguments.
- A series of wrong argument names in Javadoc comments.
- Incorrect @see reference to method in Javadoc.
- Removed empty file (invalid class), a leftover of the commit that removed Cobertura some time ago.
- Removed a redundant null check and parenthesis.
- Error occurred when making shopping list public/private from Party Detail screen. ([OFBIZ-7683](https://issues.apache.org/jira/browse/OFBIZ-7683))
- Fixed wrong package-names
