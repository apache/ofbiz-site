---
title: "Open Source Warehouse Management System"
layout: "page"
trail_title: "Warehouse Management"
metaDescription: "Apache OFBiz is a free, open source warehouse management system. Set up locations, receive, pick, pack and ship orders, and count stock."
sections:
  - title: "Who it is for"
    url: "#WmsWho"
  - title: "Features"
    url: "#WmsFeatures"
  - title: "Screenshots"
    url: "#WmsScreens"
  - title: "How it connects"
    url: "#WmsConnects"
  - title: "Try it"
    url: "#WmsTry"
  - title: "Questions"
    url: "#WmsFaq"
  - title: "Get help"
    url: "#WmsHelp"
---
<p>Apache OFBiz runs the daily work of a warehouse: receiving, putting away, picking, packing, shipping and counting stock. It is free and open source under the Apache License 2.0, and it shares one database with orders, purchasing and accounting.</p>

<h2 id="WmsWho">Who it is for</h2>
<div class="divider"><span></span></div>
<ul class="iconsList">
  <li><i class="icon-pin"></i> Businesses that run one or more of their own warehouses, such as distributors, manufacturers and online sellers.</li>
  <li><i class="icon-pin"></i> Warehouse managers who want every unit tracked by location.</li>
  <li><i class="icon-pin"></i> Teams that want warehouse work and orders in one system, and the freedom to change the software.</li>
</ul>

<h2 id="WmsFeatures">What OFBiz does in the warehouse</h2>
<div class="divider"><span></span></div>

<h3>Warehouses, locations and bins</h3>
<p>Set up each warehouse with its own locations, such as aisles, racks and bins. Every stock item belongs to a location, so staff always know where to find it.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436219">Set Up Warehouses and Locations</a></p>

<h3>Receive and put away stock</h3>
<p>Receive goods against a purchase order, or without one. Choose the location when you receive, or move the stock to its shelf later.
Guides: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=373887291">Receiving Items Against a Purchase Order</a>, <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436223">Put Away Received Stock into Locations</a></p>

<h3>Pick, pack and ship orders</h3>
<p>OFBiz shows which orders are ready to pick, and staff pick them with a picklist. Packers check each item on the packing screen and complete the shipment.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436226">Pick, Pack and Ship an Order</a></p>

<h3>Packing slips</h3>
<p>Print a packing slip for each box. It lists the items inside, so the customer can check them.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436426">Print a Packing Slip</a></p>

<h3>Pack one order into several boxes</h3>
<p>Put the items of one order into several boxes on the packing screen. Each box gets its own weight and its own package record.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436297">Pack One Order into Several Boxes</a></p>

<h3>Barcodes and scanners</h3>
<p>Print barcode labels for products, pick sheets and shipments. A normal USB or Bluetooth scanner works on the packing screen, and it accepts the maker's UPC or EAN code.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436285">Print Barcodes and Use a Scanner in the Warehouse</a></p>

<h3>Package weights and tracking numbers</h3>
<p>Enter the weight of each package when you pack. Record the carrier's tracking number on the shipment.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436289">Weigh Packages and Record Tracking Numbers</a></p>

<h3>Move stock between warehouses</h3>
<p>Send stock from one warehouse to another with an inventory transfer. Each transfer has a status, such as En-Route or Complete.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436229">Move Stock Between Warehouses</a></p>

<h3>Count stock and fix quantities</h3>
<p>Count stock on the shelf and record the difference with a reason, such as Damaged or Lost. OFBiz updates the quantity and the stock value in the books.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436231">Count Stock and Adjust Quantities</a></p>

<h3>Receive customer returns</h3>
<p>Receive returned items in the warehouse and put them back into stock. Each returned line becomes its own stock item, linked to the return.
Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436300">Receive Customer Returns Back into Stock</a></p>

<h3>Hold damaged stock and return it to suppliers</h3>
<p>Put damaged stock on hold so no order can take it. Send it back to the supplier on a return shipment, and OFBiz records what the supplier owes you.
Guides: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436303">Hold or Scrap Damaged Stock</a>, <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436310">Return Stock to a Supplier</a></p>

<h2 id="WmsScreens">Screenshots</h2>
<div class="divider"><span></span></div>
<p><img src="/images/modules/warehouse-1-inventory-by-location.png" alt="Stock by location in a warehouse" style="max-width: 100%;"/><br/>Stock by location in a warehouse.</p>
<p><img src="/images/modules/warehouse-2-picking.png" alt="Orders ready to pick" style="max-width: 100%;"/><br/>Orders that are ready to pick.</p>
<p><img src="/images/modules/warehouse-3-pack-order-scan.png" alt="Packing screen after scanning a UPC" style="max-width: 100%;"/><br/>The packing screen after scanning a product's UPC.</p>
<p><img src="/images/modules/warehouse-4-two-packages.png" alt="One order packed into two boxes" style="max-width: 100%;"/><br/>One order packed into two boxes, with a weight for each.</p>

<h2 id="WmsConnects">How it connects with the rest of OFBiz</h2>
<div class="divider"><span></span></div>
<p>Sales orders reserve stock in the warehouse, and purchase orders tell the warehouse what to receive. Receipts and stock counts also post to accounting. For stock levels, reorder points and lots, see <a href="/inventory-management/">Inventory Management</a>.</p>

<h2 id="WmsTry">Try it</h2>
<div class="divider"><span></span></div>
<ul class="iconsList">
  <li><i class="icon-pin"></i> Open the <a href="/ofbiz-demos/">public demo</a> and go to the Facility application.</li>
  <li><i class="icon-pin"></i> <a href="/downloads/">Download Apache OFBiz</a> and run it on your own computer.</li>
  <li><i class="icon-pin"></i> Read all the warehouse guides on the wiki: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436385">Apache OFBiz for Inventory and Warehouse Management</a>.</li>
</ul>

<h2 id="WmsFaq">Questions and answers</h2>
<div class="divider"><span></span></div>
<h3>Is Apache OFBiz free?</h3>
<p>Yes. It is open source under the Apache License 2.0. You can use it, change it and run it at no cost.</p>
<h3>Can it run several warehouses?</h3>
<p>Yes. You can set up as many warehouses as you need, each with its own locations. A store can take stock from one warehouse or from several.</p>
<h3>Does it work with barcode scanners?</h3>
<p>Yes. Any scanner that types like a keyboard works. OFBiz has no separate scanner app.</p>
<h3>Can it print carrier shipping labels?</h3>
<p>Not today. OFBiz has no built-in connection to carriers such as UPS or FedEx. You print the label in the carrier's own tool, and record the tracking number in OFBiz.</p>
<h3>Do I need technical skills to set it up?</h3>
<p>Yes. OFBiz runs on Java, and setup needs some technical work. The <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a> names people who can help.</p>

<h2 id="WmsHelp">Get help</h2>
<div class="divider"><span></span></div>
<p>Ask questions on the <a href="/mailing-lists/">user mailing list</a>. See who uses OFBiz on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+User+List">user list</a>, and find help on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a>.</p>
