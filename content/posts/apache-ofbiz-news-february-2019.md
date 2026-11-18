---
layout: post
title: 'Apache OFBiz News - February 2019 '
date: '2019-03-19T05:18:47+00:00'
permalink: apache-ofbiz-news-february-2019
---
## Apache OFBiz News February 2019

Welcome to our regular monthly round-up of OFBiz news. This month we have more news about OFBiz build support with Java Open JDK &amp; Java 11 and, we welcome a new committer along with our usual list of features and improvements.

## New Committer

During February the Project Management Committee (PMC) invited Mathieu Lirzin as a new committer. Please join us in welcoming and congratulating Mathieu in his new role on the project, and also thanking him for all his contributions.

## Enabling HTTP/2 in the embedded Tomcat connectors

The Tomcat instance embedded in OFBiz now allows&nbsp;communicattion&nbsp;using the HTTP/2 protocol, when the client supports it. The setting will be enabled by default, by setting upgradeProtocol to true in the HTTP and HTTPS connectors though they will continue to support HTTP/1.1. If the&nbsp;upgradeProtocol&nbsp;property is not set then the new protocol will not be enabled.

Please refer to [Mail thread](https://markmail.org/message/wg6yqt5tmeujvy5l).

Thanks, Jacopo Cappellato for the efforts, Jacques &amp; Taher for your valuable inputs and everyone who contributed to this effort&nbsp;

## Support with Java Open JDK and Java 11

Considering that now Oracle JDKs are no more free for commercial use, the community discussed &amp; decided to provide OFBiz support with openJDK Java build. It was also decided to keep release 17.12 (unreleased) on Java 8, and 18.12 (unreleased) &amp; trunk be switched to Java 11 on OpenJDK

Please refer to [OFBIZ-10757](https://issues.apache.org/jira/browse/OFBIZ-10757), [Mail thread,](https://markmail.org/message/argcnb5ve4wvkik2) and [Mail thread](https://markmail.org/message/argcnb5ve4wvkik2).

Thanks, Jacopo, Jacques, Michael, Taher, Deepak and to everyone who gave their valuable inputs.&nbsp;

## Close pending works from Christian Carlow

The community admires the efforts of Christian Carlow. Since he has been inactive for a very long time with no progress on the work by him, the community has decided to close tickets with obsolete patches as 'won't do'.

Please refer to [Mail thread](https://markmail.org/message/su5t5ebgcbwy27yc).

Thanks, Jacques for initiating and putting efforts in this direction, Michael, Taher, and Pierre for their valuable inputs.

## New features and improvements

Functional enhancements and improvements as well as updates of third party libraries and source code refactoring:

### Framework

- Refactors the startup API to completely remove the startup loaders collection ([c304376a](https://labs.nereide.fr/10031/Communautaire/commit/c304376a9953fd7bfc6c44b72fb3e1b2297c3ba3))
- Makes the ecomThemeId field optional, since it is not the part of PK ([OFBIZ-10567](https://issues.apache.org/jira/browse/OFBIZ-10567))
- Adds translations es and es-CL in Product Component ([OFBIZ-10830](https://issues.apache.org/jira/browse/OFBIZ-10830))
- Improves ObjectInputStream class ([OFBIZ-10837](https://issues.apache.org/jira/browse/OFBIZ-10837))
- Updates code to fix some deprecated method call warnings ([OFBIZ-10757](https://issues.apache.org/jira/browse/OFBIZ-10757))
- Separetes 'ComponentConfig' webapps cache to multiple ‘WebAppCache’ ([OFBIZ-10606](https://issues.apache.org/jira/browse/OFBIZ-10606))

### Plugins

- Updates plugin code to fix console warning related to deprecated method. Removes double constructor call as its depracated since JDK 9. Also replaces the CellType::getCellTypeEnum method call with CellTyoe::getCellType ([OFBIZ-10757](https://issues.apache.org/jira/browse/OFBIZ-10757))

## Bugfixes

Functional and technical bugfixes:

### Framework

- Fixes: Html escaping missing for portalPageId parameter of Help button ([OFBIZ-10828](https://issues.apache.org/jira/browse/OFBIZ-10828))
- Fixes: Error parsing JWT ([OFBIZ-10814](https://issues.apache.org/jira/browse/OFBIZ-10814))
- Fixes: URL does not encode in FTL 'EditCategoryProducts' ([OFBIZ-10816](https://issues.apache.org/jira/browse/OFBIZ-10816))
- Fixes: Add To Order button does not work on shopping list screen ([OFBIZ-10836](https://issues.apache.org/jira/browse/OFBIZ-10836))
- Adds missing tests for ‘WebAppCache’ ([OFBIZ-10606](https://issues.apache.org/jira/browse/OFBIZ-10606))
- Fixes: No userLogin given in calculateProductPrice service call context ([OFBIZ-10842](https://issues.apache.org/jira/browse/OFBIZ-10842))

### Plugins

- Fixes: 404 error while creating/updating contact information from the checkout page ([OFBIZ-10827](https://issues.apache.org/jira/browse/OFBIZ-10827))
