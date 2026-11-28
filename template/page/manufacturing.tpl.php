<?php //Variable declarations for region templates
  $head_title = '<title>Open Source Manufacturing ERP and MRP | Apache OFBiz</title>';
  $head_description = 'Apache OFBiz is a free, open source manufacturing ERP. Define bills of material and routings, run MRP, make production runs, and see the real cost.';
?>

  <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Open Source Manufacturing ERP and MRP</h1>
          <div class="span4" id="navTrail"> <a href="<?= $base_url ?>index.html" class="homeLink">home</a><span>/</span><a href="<?= $base_url ?>business-users.html#UsrModules">Modules</a><span>/</span><span class="current">Manufacturing</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
    <div class="slice clearfix">
      <div class="container">
        <div class="row ">
          <aside class="span2 PortfolioStickyMenu" id="sidebar">
            <ul  id="subnav" class="nav nav-stacked sidenav scrollspyNav">
              <li> <a href="#Mfg1"> Who it is for </a> </li>
              <li> <a href="#Mfg2"> Features </a> </li>
              <li> <a href="#Mfg3"> How it connects </a> </li>
              <li> <a href="#Mfg4"> Try it </a> </li>
              <li> <a href="#Mfg5"> Questions </a> </li>
              <li> <a href="#Mfg6"> Get help </a> </li>
            </ul>
          </aside>
          <div class="span10">
            <section class="slice row clearfix">
              <div class="span10">
                <p>Apache OFBiz plans and runs production: what a product is made of, how it is made, what to buy or make, and what it really costs. It is free and open source under the Apache License 2.0, and it shares one database with orders, purchasing, stock and accounting.</p>
              </div>
            </section>
            <section id="Mfg1" class="slice row clearfix">
              <div class="span10">
                <h2>Who it is for</h2>
                <div class="divider"><span></span></div>
                <ul class="iconsList">
                  <li><i class="icon-pin"></i> Small and mid-size manufacturers that make products from parts and raw materials.</li>
                  <li><i class="icon-pin"></i> Production planners who need to know what to make, what to buy, and when.</li>
                  <li><i class="icon-pin"></i> Businesses that want production, stock and accounting in one system.</li>
                </ul>
              </div>
            </section>
            <section id="Mfg2" class="slice row clearfix">
              <div class="span10">
                <h2>What OFBiz does for manufacturing</h2>
                <div class="divider"><span></span></div>
                <h3>Bills of material</h3>
                <p>List every part needed to make a product, to any depth. A part can itself be made from other parts.
                Guides: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=347933410">How to Create a Bill of Materials for a Skateboard in Apache OFBiz in 4 Easy Steps.</a>, <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436478">Bill of Materials Example in Apache OFBiz: Explosion and Where-Used</a></p>
                <h3>One bill of material for many versions</h3>
                <p>Give a product family one bill of material, and let each version, such as a size or a color, use it. This avoids a separate bill of material for every version.
                Guides: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=358812107">Avoiding Redundant BOMs with Virtual and Variant Product Design in Apache OFBiz</a>, <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=358812108">Setting Up Variant Products in Apache OFBiz with Virtual Product's BOM: Skateboard Example</a></p>
                <h3>Routings and tasks</h3>
                <p>Define the steps that make a product, in order, with the machine and the time for each step.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=349637112">A practical guide to setup Routing in Apache OFBiz for Manufactures in 4 easy Steps.</a></p>
                <h3>Work calendars</h3>
                <p>Plan production around real working hours, shifts, weekends and holidays. Link a calendar to each machine.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=383191551">Step-by-Step Guide: Apache OFBiz Calendar Function for Production Planning</a></p>
                <h3>MRP: what to make and what to buy</h3>
                <p>MRP, material requirements planning, compares demand with stock and planned supply. For every shortfall it proposes to buy the part or to make it.
                Guides: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=365889942">Understanding Internals of MRP Engine in Apache OFBiz</a>, <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=372214398">A Practical Walkthrough of MRP Execution in Apache OFBiz</a>, <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436474">Production Planning in Apache OFBiz: From Demand to Finished Goods</a></p>
                <h3>Production runs from the plan</h3>
                <p>When you approve a proposal to make a part, OFBiz creates the production run for it.
                Guides: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=373886278">Automated Creation of Production Run From Approved Requirements in Apache OFBiz</a>, <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436485">Make to Order and Make to Stock in Apache OFBiz</a></p>
                <h3>Production runs on their own</h3>
                <p>Create a production run by hand, start its tasks, issue the parts, record what was made, and close it. The finished goods go into stock.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=373886385">Creating Standalone Production Run in Apache OFBiz: A Step-by-Step Guide</a></p>
                <h3>Work orders and their tasks</h3>
                <p>Follow a work order from start to finish: its tasks, the parts it uses, and the goods it puts into stock.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436441">Work Orders in Apache OFBiz: Production Runs, Tasks and Job Cards</a></p>
                <h3>Buy the raw materials</h3>
                <p>Turn the approved proposals to buy into purchase orders, grouped by supplier.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=373886031">Creating Purchase Orders from MRP Recommendations in Apache OFBiz</a></p>
                <h3>Material cost and production cost</h3>
                <p>OFBiz values materials at their weighted average cost. It then works out the actual cost of each product made, from materials, labor and overhead.
                Guides: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=387648271">Understanding the Calculation of Material Cost with Weighted Average Method in Apache OFBiz</a>, <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=387648165">Understanding Actual Production Cost Calculation in Apache OFBiz: A Complete Manufacturing Guide</a></p>
                <p><img src="<?= $base_url ?>images/modules/manufacturing-1-bill-of-material.png" alt="A multi-level bill of material for a skateboard" style="max-width: 100%;"/><br/>A multi-level bill of material for a skateboard.</p>
                <p><img src="<?= $base_url ?>images/modules/manufacturing-2-routing.png" alt="The routings that turn parts into a deck and then a skateboard" style="max-width: 100%;"/><br/>The routings that turn parts into a deck and then a skateboard.</p>
                <p><img src="<?= $base_url ?>images/modules/manufacturing-3-mrp-requirements.png" alt="Requirements created by MRP, to make some parts and buy others" style="max-width: 100%;"/><br/>Requirements created by MRP, to make some parts and buy others.</p>
              </div>
            </section>
            <section id="Mfg3" class="slice row clearfix">
              <div class="span10">
                <h2>How it connects with the rest of OFBiz</h2>
                <div class="divider"><span></span></div>
                <p>Sales orders create the demand that MRP plans for. Purchase orders bring in the raw materials, and production runs put finished goods into stock. Costs go to accounting. See <a href="<?= $base_url ?>inventory-management.html">Inventory Management</a> and <a href="<?= $base_url ?>order-management.html">Order Management</a>.</p>
              </div>
            </section>
            <section id="Mfg4" class="slice row clearfix">
              <div class="span10">
                <h2>Try it</h2>
                <div class="divider"><span></span></div>
                <ul class="iconsList">
                  <li><i class="icon-pin"></i> Open the <a href="<?= $base_url ?>ofbiz-demos.html">public demo</a> and go to the Manufacturing application.</li>
                  <li><i class="icon-pin"></i> <a href="<?= $base_url ?>download.html">Download Apache OFBiz</a> and run it on your own computer.</li>
                  <li><i class="icon-pin"></i> Read all the manufacturing guides on the wiki: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=430409112">Apache OFBiz for Manufacturing &amp; MRP</a>.</li>
                </ul>
              </div>
            </section>
            <section id="Mfg5" class="slice row clearfix">
              <div class="span10">
                <h2>Questions and answers</h2>
                <div class="divider"><span></span></div>
                <h3>Is Apache OFBiz free?</h3>
                <p>Yes. It is open source under the Apache License 2.0. You can use it, change it and run it at no cost.</p>
                <h3>Does it support multi-level bills of material?</h3>
                <p>Yes. A part can be made from other parts, to any depth, and MRP plans every level.</p>
                <h3>Does it plan around working hours and holidays?</h3>
                <p>Yes. Work calendars set the hours of each machine, with weekends and holidays.</p>
                <h3>Do I need technical skills to set it up?</h3>
                <p>Yes. OFBiz runs on Java, and setup needs some technical work. The <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a> names people who can help.</p>
              </div>
            </section>
            <section id="Mfg6" class="slice row clearfix">
              <div class="span10">
                <h2>Get help</h2>
                <div class="divider"><span></span></div>
                <p>Ask questions on the <a href="<?= $base_url ?>mailing-lists.html">user mailing list</a>. See who uses OFBiz on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+User+List">user list</a>, and find help on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a>.</p>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
 </section>
