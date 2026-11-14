---
title: "Developers"
date: "2023-03-08"
description: "Getting Started"
draft: false
layout: "page"

sections:
  - title: "Pre-Requisites"
    url: "#DevPreq"
  - title: "Download"
    url: "#DevDownld"
  - title: "Initialize Gradle Wrapper"
    url: "#DevGradle"
  - title: "Build and Run"
    url: "#DevBldRun"
  - title: "Browse Repository"
    url: "#DevRepo"
  - title: "Tutorial"
    url: "#DevTutorial"
  - title: "Documentation and Help"
    url: "#DevDocs"
  - title: "Demo"
    url: "#DevDemo"
---
<h2 id="DevPreq">Pre-Requisites</h2>
<div class="divider"><span></span></div>

<ul class="iconsList">
<li><i class="icon-pin"></i> For the ofbiz-framework trunk, ofbiz-plugins trunk, and release24.09 the minimum requirement you need installed is Java 17 JDK (the full JDK, not just the JRE). Make sure to set the <code>$JAVA_HOME</code> environment variable.</li>
<li><i class="icon-pin"></i> Apache OFBiz can be downloaded and run on both Unix based and Windows based systems.</li>
<li><i class="icon-pin"></i> On Windows, a PowerShell version &gt;= 7.1.3 is required (needed by the Gradle wrapper initialization script).</li>
<li><i class="icon-pin"></i> On Windows, do not install OFBiz in a directory whose path contains spaces.</li>
</ul>

**NOTE:** If you are running an older release or branch then please refer to <a href="//cwiki.apache.org/confluence/display/OFBIZ/Home" target="external">our Wiki</a> for details

<h2 id="DevDownld">Download</h2>
<div class="divider"><span></span></div>

There are two ways to download the OFBiz source code

### 1. Using a Download Mirror

Download your required version from one of our [download mirrors](https://ofbiz.apache.org/download.html) and extract the zip file

### 2. Checkout the Source Code

Checkout the source code from the repository

Anyone can checkout or [browse the source code](#DevRepo) in the OFBiz GitHub repositories.

To checkout the source code, simply use the following commands (if you are using a GUI client, configure it appropriately).

We have split OFBiz into ofbiz-framework and ofbiz-plugins, so if you want to use the ofbiz-plugins you need to checkout both trunks.

<ul class="iconsList">
<li><i class="icon-pin"></i> <strong>ofbiz-framework trunk</strong> : <code>$ git clone https://github.com/apache/ofbiz-framework.git ofbiz-framework </code></li>
<li><i class="icon-pin"></i> <strong>ofbiz-plugins trunk</strong> : <code>$ git clone https://github.com/apache/ofbiz-plugins.git plugins </code></li>
<li><i class="icon-pin"></i> <strong>branch release24.09 (stable)</strong>: <code>$ git clone https://github.com/apache/ofbiz-framework.git ofbiz-framework</code></li>
<li>If you don't want to use the HEAD version (Git default, with last bug fixes), you can update the tags before.
<br>You can refer to the <a href="https://ofbiz.apache.org/download.html">site download page</a> for the stable version to use.
<br>Note that you need to add "release"in the name  before, like in "release24.09.07", eg with releaseVersionNumber as a var:
<br><code>git fetch --all --tags</code>
<br><code>$ git checkout releaseVersionNumber</code></li>
<li><i class="icon-pin"></i> <strong>branch release24.09 (stable)</strong>: <code>$ git clone https://github.com/apache/ofbiz-plugins.git ofbiz-plugins</code></li>
<li><code>$ git checkout releaseVersionNumber</code></li>
</ul>

<h2 id="DevGradle">Initialize Gradle Wrapper</h2>
<div class="divider"><span></span></div>

The Gradle wrapper is no longer bundled with the ofbiz-framework trunk source. Before running any `gradlew` command you must download the wrapper from the OFBiz top-level directory.

Run the following command for Unix-like OS

<code>./gradle/init-gradle-wrapper.sh</code><p></p>

Run the following command for MS Windows

<code>init-gradle-wrapper</code>

<p></p>

**NOTE:** On Windows, if you encounter an error such as "Powershell is not recognized as an internal or external command, operable program or batch file", follow the advice at <a href="https://s.apache.org/vdcv8" target="external">https://s.apache.org/vdcv8</a>. If you run into problems, check the execution policy of PowerShell (see <a href="https://s.apache.org/urnju" target="external">https://s.apache.org/urnju</a>). By setting the execution policy to "unrestricted", you will be prompted to run the script once you run the `init-gradle-wrapper` command.

<h2 id="DevBldRun">Build and Run</h2>
<div class="divider"><span></span></div>

Once you have downloaded the source code and (for trunk) initialized the Gradle wrapper, it will need to be built.

### Building the Trunk or Release 24.09

To build the trunk or the release24.09 branch, navigate to the framework-trunk directory and;

Run the following command for Unix-like OS

<code>./gradlew cleanAll loadAll</code><p></p>

Run the following command for MS Windows

<code>gradlew cleanAll loadAll</code>

<p></p>

### Starting and Running the ofbiz-framework trunk or Release 24.09

To start OFBiz running locally, navigate to the trunk directory and;

Run the following command for Unix-like OS

<code>./gradlew ofbiz</code><p></p>

Run the following command for MS Windows

<code>gradlew ofbiz</code>

<p></p>

To log into OFBiz, navigate with your browser to

<code><a href="https://localhost:8443/accounting">https://localhost:8443/accounting</a></code>

and login with username **"admin"** and password **"ofbiz"**

### Stopping OFBiz

To stop OFBiz running locally, open a command line terminal window and navigate to the OFBiz directory and;

Run the following command for Unix-like OS

<code>./gradlew 'ofbiz --shutdown'</code><p></p>

Run the following command for MS Windows

<code>gradlew ofbiz --shutdown</code>

<p></p>

**NOTE**: That quotes are needed for the Unix based command. For further details and a full list of all available OFBiz Gradle commands, please take a look at the main <a href="//nightlies.apache.org/ofbiz/trunk/readme/html5/README.html" target="external">**README file.**</a> <br> If you are an user migrating from a version which uses Ant you might be interested by: <a href="//cwiki.apache.org/confluence/display/OFBIZ/From+Ant+to+Gradle+-+trunk+version" target="external">**From Ant to Gradle**</a>

<p></p>

<h2 id="DevRepo">Browse Repository</h2>
<div class="divider"><span></span></div>

You can browse the repository using any of the following links.

<ul class="iconsList">
<li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-framework.git" target="external"><strong>ofbiz-framework on GitHub</strong></a></li>
<li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-plugins.git" target="external"><strong>ofbiz-plugins on GitHub</strong></a></li>
<li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-site.git" target="external"><strong>ofbiz-site on GitHub</strong></a></li>
<li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-tools.git" target="external"><strong>ofbiz-tools on GitHub</strong></a></li>
</ul>

<p></p>

Our ofbiz-framework trunk and ofbiz-plugins trunk are also available on GitHub at the links below:

<ul class="iconsList">
<li><i class="icon-pin"></i> <a href="https://github.com/apache/ofbiz-framework" target="external"><strong>ofbiz-framework trunk on Github</strong></a></li>
<li><i class="icon-pin"></i> <a href="https://github.com/apache/ofbiz-plugins" target="external"><strong>ofbiz-plugins trunk on Github</strong></a></li>
</ul>

<h2 id="DevTutorial">Development Tutorial</h2>
<div class="divider"><span></span></div>

To help you getting started we have put together a beginners OFBiz development tutorial to get familiar with with OFBiz.

It covers the fundamentals of the OFBiz application development process. The goal of this tutorial is to acquaint a developer with best practices, coding conventions. the control flow and things that the developer needs to know in order to modify OFBiz

<ul class="iconsList">
<li><i class="icon-pin"></i> <a href="//cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Tutorial+-+A+Beginners+Development+Guide" target="_blank"><strong>Developer Tutorial</strong></a></li>
</ul>

<h2 id="DevDocs">Documentation and Help</h2>
<div class="divider"><span></span></div>

We have a range of technical documenentation and help for developers. Please see the links below.

<ul class="iconsList">
<li><i class="icon-pin"></i> <a href="//cwiki.apache.org/confluence/display/OFBIZ/Technical+Documentation" target="external"><strong>OFBiz Technical Documentation</strong></a></li>
<li><i class="icon-pin"></i> <a href="//cwiki.apache.org/confluence/display/OFBIZ/FAQ+-+Tips+-+Tricks+-+Cookbook+-+HowTo" target="external"><strong>Developer and Technical FAQs</strong></a></li>
</ul>

### OFBiz API Reference

<ul class="iconsList">
<li title="Trunk API">
<i class="icon-pin"></i> <a href="https://nightlies.apache.org/ofbiz/trunk/javadoc/" target="external"><strong>Trunk API</strong></a>
</li>
<li title="Stable release API">
<i class="icon-pin"></i> <a href="https://nightlies.apache.org/ofbiz/stable/javadoc/" target="external"><strong>Stable release API</strong></a>
</li>
<li title="Next Release API">
<i class="icon-pin"></i> <a href="https://nightlies.apache.org/ofbiz/next/javadoc/" target="external"><strong>Next release API</strong></a>
</li>
</ul>

After consulting the documentation you still have questions,please feel free to post questions on our development mailing list.

<h2 id="DevDemo">Demo</h2>
<div class="divider"><span></span></div>

Try out our OFBiz demo - [**OFBiz Demos**](https://ofbiz.apache.org/ofbiz-demos.html)
