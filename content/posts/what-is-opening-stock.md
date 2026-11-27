---
layout: post
title: What Is Opening Stock? Entering It in Apache OFBiz
date: '2026-11-26T13:10:00+00:00'
permalink: what-is-opening-stock
metaDescription: "Opening stock is the stock you already have when you start using a new system. See how to enter it in Apache OFBiz, with quantity, location and unit cost."
---
## What is opening stock?

Opening stock is the stock you already have when you start using a new system. The shelves are full on day one. The new system must know what is on them before you can sell.

You enter opening stock once, for each product. After that, the system keeps the numbers up to date as stock comes in and goes out.

## What do you need to enter?

For each product, in each place it is stored:

- The quantity on the shelf.
- The location, such as a shelf or a bin.
- The cost of one unit.
- The lot number, if the product has one.

The unit cost matters. Without it, the system cannot tell you what your stock is worth.

## How does Apache OFBiz handle opening stock?

Apache OFBiz is a free, open source ERP. It has no special screen for opening stock. The simplest way is to receive the stock without a purchase order.

1. In the Facility application, open the warehouse and click Receive Inventory.
2. Leave the purchase order number empty, and enter the product.
3. Choose the location, and enter the quantity and the unit cost.
4. Click Receive.

In a test with the OFBiz demo data, we received 40 Tiny Gizmos at 12.50 each, into one shelf of the Web Store Warehouse.

![Receiving 40 Tiny Gizmos as opening stock, with a unit cost of 12.50](/images/posts/opening-stock/receive-opening-stock.png)

OFBiz created one inventory item, a batch of stock in one location, with 40 units on hand and 40 available.

![The new inventory item with 40 units in its location](/images/posts/opening-stock/opening-stock-item.png)

## Are there other ways?

Yes, two:

- Create an empty inventory item, then add the quantity with a stock count. This takes two steps for each product.
- Import a data file in Web Tools. This suits a long list of products, but it needs a technical person.

Each way records the stock value differently in the books. So tell your accountant which way you used, and on which date.

## Try it yourself

Our step-by-step guide compares the three ways:
[Enter Opening Stock in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436401).

Before you start, set up your warehouse and its locations:
[Set Up Warehouses and Locations in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436219).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
