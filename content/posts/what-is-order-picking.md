---
layout: post
title: What Is Order Picking? Pick, Pack and Ship in Apache OFBiz
date: '2026-11-26T15:30:00+00:00'
permalink: what-is-order-picking
metaDescription: "Order picking means taking the items of an order from their shelves. See how Apache OFBiz creates picklists, packs orders and ships them."
---
## What is order picking?

Order picking means taking the items of a customer order from their shelves. It is the first of three warehouse steps: pick, pack and ship.

Picking is often the biggest cost in a warehouse. Pickers walk a lot. A good picking process cuts the walking and the mistakes.

## What does a picking process need?

- A list of orders that are ready, with their stock reserved.
- Picklists that group orders, for example by carrier or by warehouse area.
- The location of each item, so pickers go straight to it.
- A check of the picked items before packing.

## How does Apache OFBiz handle picking?

Apache OFBiz is a free, open source ERP. The warehouse's Picking tab lists the orders ready to pick. An order is ready when its stock is reserved in a pick location.

![The Picking tab with an order ready to pick](/images/posts/order-picking/picking.png)

You then create a picklist. You can group orders by shipping method, by warehouse area, or by number of items. Each order on a picklist gets a bin number. A bin is the tote that holds one order's items.

Pickers can work from a printed pick sheet. If your warehouse checks picks, the Verify Pick tab compares what was picked with what was ordered.

## How are orders packed and shipped?

On the Packing tab, the packer enters the order or the bin, and packs each item into a box with its weight.

![The Packing tab with the items of the order](/images/posts/order-picking/packing.png)

When the packer clicks Complete, OFBiz creates the shipment. Staff then set the shipment to Shipped, and OFBiz sends the shipment notice to the customer.

In a test with the OFBiz demo data, one order needed 2 Round Gizmos from one shelf. It went from the Picking tab to a packed shipment in a few steps.

## Try it yourself

Our step-by-step guide walks through every screen:
[Pick, Pack and Ship an Order in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436226).

To learn how stock is reserved for orders, see
[Reserve Stock for Orders in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436238).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
