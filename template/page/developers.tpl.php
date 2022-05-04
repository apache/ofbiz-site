<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Developers</title>';
?>

  <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Getting Started - Developers</h1>
          <div class="span4" id="navTrail"> <a href="index.html" class="homeLink">home</a><span>/</span><a href="">Getting Started</a><span>/</span><span class="current">Developers</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
    <div class="slice clearfix">
      <div class="container">
        <div class="row ">
          <aside class="span2 PortfolioStickyMenu" id="sidebar">
            <ul  id="subnav" class="nav nav-stacked sidenav scrollspyNav">
              <li> <a href="#DevPreq"> Pre-Requisites </a> </li>
              <li> <a href="#DevDownld"> Download </a> </li>
              <li> <a href="#DevBldRun"> Build and Run </a> </li>
        <li> <a href="#DevRepo"> Browse Repository </a> </li>
         <li> <a href="#DevTutorial"> Tutorial </a> </li>
         <li> <a href="#DevDocs"> Documentation and Help </a> </li>
        <li> <a href="#DevDemo"> Demo </a> </li>
            </ul>
          </aside>
          <div class="span10">
            <section  id="DevPreq" class="slice row clearfix">
              <div class="span10">
                <h2>Pre-Requisites</h2>
                <div class="divider"><span></span></div>
     <ul class="iconsList">
      <li><i class="icon-pin"></i> For 18.12, the ofbiz-framework trunk and ofbiz-plugins trunk the minimum requirement you need installed is Java 1.8 SDK.</li>
      <li><i class="icon-pin"></i> Apache OFBiz can be downloaded and run on both Unix based and Windows based systems</li>
    </ul>
                 <p><strong>NOTE:</strong> If you are running an older release or branch then please refer to <a href="//cwiki.apache.org/confluence/display/OFBIZ/Home" target="external" >our Wiki</a> for details</p>
                </div>
            </section>
       <section  id="DevDownld" class="slice row clearfix">
              <div class="span10">
                <h2>Download</h2>
                <div class="divider"><span></span></div>
                <p>There are two ways to download the OFBiz source code</p>
    <h3>1. Using a Download Mirror</h3>
    <p>Download your required version from one of our <a href="download.html">download mirrors</a> and extract the zip file </p>
    <h3>2. Checkout the Source Code</h3>
    <p>Checkout the source code from the repository</p>
    <p>Anyone can checkout or <a href="#DevRepo">browse the source code </a>in the OFBiz public gitbox or GitHub repositories.</p>
    <p>To checkout the source code, simply use the following command (if you are using a GUI client, configure it appropriately).</p>
    <p>We have split OFBiz into ofbiz-framework and ofbiz-plugins, so if you want to use the ofbiz-plugins you need to checkout both trunks.</p>
    <ul class="iconsList">
      <li><i class="icon-pin"></i> <strong>ofbiz-framework trunk</strong> : <code>$ git clone https://gitbox.apache.org/repos/asf/ofbiz-framework.git ofbiz-framework </code></li>
      <li><i class="icon-pin"></i> <strong>ofbiz-plugins trunk</strong> : <code>$ git clone https://gitbox.apache.org/repos/asf/ofbiz-plugins.git plugins </code></li>
      <li><i class="icon-pin"></i> <strong>branch release18.12 (stable)</strong>: <code>$ git clone https://gitbox.apache.org/repos/asf/ofbiz-framework.git ofbiz-framework</code></li>
      <li>You may need to update the tags before: <code>git fetch --all --tags</code></li>
      <li><code>$ git checkout release18.12.04 </code></li>
      <li><i class="icon-pin"></i> <strong>branch release18.12 (stable)</strong>: <code>$ git clone https://gitbox.apache.org/repos/asf/ofbiz-plugins.git ofbiz-plugins</code></li>
      <li><code>$ git checkout release18.12.04 </code></li>
    </ul>
<p>Or from GitHub:</p>
<ul class="iconsList">
  <li><i class="icon-pin"></i> <strong>ofbiz-framework trunk</strong> : <code>$ git clone https://github.com/apache/ofbiz-framework.git ofbiz-framework </code></li>
  <li><i class="icon-pin"></i> <strong>ofbiz-plugins trunk</strong> : <code>$ git clone https://github.com/apache/ofbiz-plugins.git plugins </code></li>
  <li><i class="icon-pin"></i> <strong>branch release18.12 (stable)</strong>: <code>$ git clone https://github.com/apache/ofbiz-framework.git ofbiz-framework</code></li>
  <li>You may need to update the tags before: <code>git fetch --all --tags</code></li>
  <li><code>$ git checkout release18.12.04 </code></li>
  <li><i class="icon-pin"></i> <strong>branch release18.12 (stable)</strong>: <code>$ git clone https://github.com/apache/ofbiz-plugins.git ofbiz-plugins</code></li>
  <li><code>$ git checkout release18.12.04 </code></li>
</ul>

    </div>
            </section>
      <section  id="DevBldRun" class="slice row clearfix">
              <div class="span10">
                <h2>Build and Run</h2>
                <div class="divider"><span></span></div>
                <p>Once you have downloaded the source code it will need to be built. The command to built.</p>
    <h3>Building Release 18.12</h3>
    <p>To build 18.12 release, navigate to the OFBiz or framework-trunk directory and;</p>
    <p>Run the following command for Unix-like OS</p>
    <code>./gradlew cleanAll loadDefault</code><p></p>
    <p>Run the following command for MS Windows</p>
    <code>gradlew cleanAll loadDefault</code>
    <p></p>
    <h3>Building the Trunk</h3>
    <p>To build the trunk, navigate to the framework-trunk directory and;</p>
    <p>Run the following command for Unix-like OS</p>
    <code>./gradlew cleanAll loadAll</code><p></p>
    <p>Run the following command for MS Windows</p>
    <code>gradlew cleanAll loadAll</code>
    <p></p>
    <h3>Starting and Running 18.12 or the ofbiz-framework trunk</h3>
    <p>To start OFBiz running locally, navigate to the trunk directory and;</p>
    <p>Run the following command for Unix-like OS</p>
    <code>./gradlew ofbiz</code><p></p>
    <p>Run the following command for MS Windows</p>
    <code>gradlew ofbiz</code>
    <p></p>
    <p>To log into OFBiz, navigate with your browser to </p>
    <p><code><a href="https://localhost:8443/accounting">https://localhost:8443/accounting</a></code></p>
    <p>and login with username <strong>"admin" </strong>and password <strong>"ofbiz"</strong></p>
    <h3>Stopping OFBiz</h3>
    <p>To stop OFBiz running locally, open a command line terminal window and navigate to the OFBiz directory and;</p>
    <p>Run the following command for Unix-like OS</p>
    <code>./gradlew 'ofbiz --shutdown'</code><p></p>
    <p>Run the following command for MS Windows</p>
    <code>gradlew ofbiz --shutdown</code>
    <p></p>
    <p>
    	<strong>NOTE</strong>: That quotes are needed for the Unix based command. For further details and a full list of all available OFBiz Gradle commands, please take a look at the main
    		<a href="//svn.apache.org/repos/asf/ofbiz/tools/wiki-files/README.md.html" target="external"><strong>README.md file.</strong></a>
    		<br/>
    		If you are an user migrating from a  version which uses Ant you might be interested by:
    		<a href="//cwiki.apache.org/confluence/display/OFBIZ/From+Ant+to+Gradle+-+trunk+version" target="external"><strong>From Ant to Gradle</strong></a>

    </p>
    <p></p>
            </div>
            </section>
            <section  id="DevRepo" class="slice row clearfix">
              <div class="span10">
                <h2>Browse Repository</h2>
                <div class="divider"><span></span></div>
                <p>You can browse the repository using any of the following links.</p>
                <ul class="iconsList">
                   <li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-framework.git" target="external"><strong>ofbiz-framework on gitbox</strong></a></li>
        <li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-plugins.git" target="external"><strong>ofbiz-plugins on gitbox</strong></a></li>
        <li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-site.git" target="external"><strong>ofbiz-site on gitbox</strong></a></li>
        <li><i class="icon-pin"></i> <a href="https://gitbox.apache.org/repos/asf/ofbiz-tools.git" target="external"><strong>ofbiz-tools on gitbox</strong></a></li>
    </ul>
    <p></p>
    <p>Our ofbiz-framework trunk and ofbiz-plugins trunk are also available on Git at the links below:</p>
    <ul class="iconsList">
        <li><i class="icon-pin"></i> <a href="https://github.com/apache/ofbiz-framework" target="external"><strong>ofbiz-framework trunk on Github</strong></a></li>
       <li><i class="icon-pin"></i> <a href="https://github.com/apache/ofbiz-plugins" target="external"><strong>ofbiz-plugins trunk on Github</strong></a></li>
    </ul>
            </div>
            </section>
      <section  id="DevTutorial" class="slice row clearfix">
              <div class="span10">
                <h2>Development Tutorial</h2>
                <div class="divider"><span></span></div>
                <p>To help you getting started we have put together a beginners OFBiz development tutorial to get familiar with with OFBiz.</p>
    <p>It covers the fundamentals of the OFBiz application development process. The goal of this tutorial is to acquaint a developer with best practices, coding conventions. the control flow and things that the developer needs to know in order to modify OFBiz</p>
    <ul class="iconsList">
                  <li><i class="icon-pin"></i> <a href="//cwiki.apache.org/confluence/display/OFBIZ/OFBiz+Tutorial+-+A+Beginners+Development+Guide" target="_blank"><strong>Developer Tutorial</strong></a></li>
    </ul>
            </div>
            </section>
      <section  id="DevDocs" class="slice row clearfix">
              <div class="span10">
                <h2>Documentation and Help</h2>
                <div class="divider"><span></span></div>
                <p>We have a range of technical documenentation and help for developers. Please see the links below.</p>
    <ul class="iconsList">
                  <li><i class="icon-pin"></i> <a href="//cwiki.apache.org/confluence/display/OFBIZ/Technical+Documentation" target="external"><strong>OFBiz Technical Documentation</strong></a></li>
        <li><i class="icon-pin"></i> <a href="//cwiki.apache.org/confluence/display/OFBIZ/FAQ+-+Tips+-+Tricks+-+Cookbook+-+HowTo" target="external"><strong>Developer and Technical FAQs</strong></a></li>
    </ul>
    <h3>OFBiz API Reference</h3>
    <ul class="iconsList">
      <li title="Trunk API">
        <i class="icon-pin"></i> <a href="https://nightlies.apache.org/ofbiz/trunk/javadoc/" target="external"><strong>Trunk API</strong></a></li>
      </li>
      <li title="Stable release API">
        <i class="icon-pin"></i> <a href="https://nightlies.apache.org/ofbiz/stable/javadoc/" target="external"><strong>Stable release API</strong></a></li>
      </li>
      <li title="Next Release API">
        <i class="icon-pin"></i> <a href="https://nightlies.apache.org/ofbiz/next/javadoc/" target="external"><strong>Next release API</strong></a></li>
      </li>
    </ul>
    <p>After consulting the documentation you still have questions,please feel free to post questions on our development mailing list.</p>
            </div>
            </section>
      <section  id="DevDemo" class="slice row clearfix">
              <div class="span10">
                <h2>Demo</h2>
                <div class="divider"><span></span></div>
                <p>Try out our OFBiz demo - <a href="ofbiz-demos.html"><strong>OFBiz Demos</strong></a></p>
            </div>
            </section>
          </div>
        </div>
      </div>
    </div>
   </section>
 </section>
  <!-- page content -->
