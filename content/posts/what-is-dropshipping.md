---
layout: post
title: What Is Dropshipping? How Apache OFBiz Handles It
date: '2026-11-26T15:00:00+00:00'
permalink: what-is-dropshipping
metaDescription: "Dropshipping means your supplier ships straight to your customer. See how Apache OFBiz creates the purchase order to the supplier from the sales order."
---
## What is dropshipping?

Dropshipping means your supplier ships the goods straight to your customer. You sell the product, but it never enters your warehouse.

Many businesses use it for products that are large, slow-selling or costly to store. Others use it only when their own stock runs out.

## What does a dropship process need?

- A list of products that suppliers can ship for you.
- A purchase order to the supplier for each dropship sale, with the customer's address.
- A link between the sales order and the purchase order, so staff can follow both.
- A way to close both orders when the supplier ships.

## How does Apache OFBiz handle dropshipping?

Apache OFBiz is a free, open source ERP. You mark a product for dropship with one of two settings:

- Drop-ship only: every unit goes by dropship.
- Auto drop-ship on low quantity: OFBiz ships what it can from stock. Only the missing units go by dropship.

On the product's Suppliers tab, you mark which suppliers can dropship it, and at what price.

When staff enter the sales order, OFBiz puts the dropship item in its own ship group, with the supplier. A ship group is a set of items that ship together to one address.

![The ship group of a dropship order, with the supplier filled in](/images/posts/dropshipping/ship-group-supplier.png)

When the sales order is saved, OFBiz creates a purchase order to that supplier by itself. The purchase order ships to the customer's address. Each of its lines links back to the sales order line. OFBiz reserves no stock for the item, and nothing is picked in your warehouse.

## How do you close the orders?

When the supplier confirms the goods are on the way, you open the purchase order and click Quick Complete Drop Shipment. OFBiz records the shipment and completes both the purchase order and the sales order.

![Quick Complete Drop Shipment on the purchase order](/images/posts/dropshipping/po-quick-complete.png)

In a test with the OFBiz demo data, a supplier dropshipped a demo product at 9.00 USD. One click on the purchase order completed both orders.

## Try it yourself

Our step-by-step guide walks through the setup and the test above:
[Ship Directly from the Supplier to the Customer (Dropship) in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436306).

To set which suppliers sell each product, see
[Set Up Suppliers and Supplier Prices in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436368).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
