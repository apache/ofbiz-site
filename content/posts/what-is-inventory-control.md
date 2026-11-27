---
layout: post
title: What Is Inventory Control? How Apache OFBiz Helps
date: '2026-11-26T13:00:00+00:00'
permalink: what-is-inventory-control
metaDescription: "Inventory control means keeping the right stock, in the right place, at the right cost. See how Apache OFBiz tracks, counts, reorders and values stock."
---
## What is inventory control?

Inventory is the stock a business holds to sell or to use. Inventory control is the daily work of managing that stock: the right amount, in the right place, at the right cost.

Too little stock means lost sales. Too much stock ties up money and space.

## What does good inventory control need?

A business with good inventory control can answer four questions at any time:

- How much do we have?
- Where is it?
- When must we buy more?
- What is it worth?

## How does Apache OFBiz handle inventory control?

Apache OFBiz is a free, open source ERP. It records each batch of stock as an inventory item. An inventory item belongs to one warehouse, and usually to one location, such as a shelf or a bin.

For every product, OFBiz keeps two numbers:

- Quantity on hand (QOH): the units on the shelf.
- Available to promise (ATP): the units no order has reserved yet.

In the OFBiz demo data, Round Gizmo showed 507 units on hand and 503 available. The other 4 units were reserved for orders.

![Stock on hand and available for Round Gizmo, per warehouse](/images/posts/inventory-control/inventory-by-product.png)

OFBiz answers the other three questions too:

- **Where:** you receive stock into a location, and can move it to another location or warehouse.
- **When to buy:** each product gets a minimum stock and a reorder quantity per warehouse. When stock falls below the minimum, OFBiz creates a request to buy.
- **What it is worth:** each inventory item keeps its own unit cost. OFBiz shows the average cost and the total value per product.

![The average cost and total value of each product in the warehouse](/images/posts/inventory-control/average-costs.png)

## How does OFBiz keep the numbers right?

Staff count the stock on the shelf. When the count differs from OFBiz, they record a variance, the difference, with a reason such as Damaged or Lost. OFBiz then corrects the quantity.

OFBiz also reserves stock for each sales order, so two orders cannot promise the same units. For lots and expiry dates, it can reserve the stock that expires first.

## Try it yourself

Our overview page links to a step-by-step guide for each part:
[What Is Inventory Control? How Apache OFBiz Helps](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436404).

To see the stock numbers and values, read
[Read Stock Reports: On Hand, Value and History in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436293).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
