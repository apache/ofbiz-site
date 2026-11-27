---
layout: post
title: Inventory Replenishment with Reorder Points in Apache OFBiz
date: '2026-11-26T12:30:00+00:00'
permalink: inventory-replenishment-reorder-points
metaDescription: "Inventory replenishment means buying more stock before you run out. See how Apache OFBiz uses a reorder point and a reorder quantity for each product."
---
## What is inventory replenishment?

Inventory replenishment means buying more stock before you run out. A business that replenishes well always has enough to sell, but does not tie up money in too much stock.

The simplest way to replenish is a reorder point. A reorder point is the stock level at which you buy more. When stock falls below it, you order a fixed amount, called the reorder quantity.

## What does a replenishment process need?

- A reorder point and a reorder quantity for each product, in each warehouse.
- A check that runs when stock changes, so nobody has to watch every product.
- A clear list of what to buy, for a buyer to approve.
- Purchase orders that group the products by supplier.

## How does Apache OFBiz handle replenishment?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. For each product in each warehouse, you set two numbers:

- Minimum Stock, the reorder point.
- Reorder Quantity, how many units to buy.

![A product's minimum stock and reorder quantity in each warehouse](/images/posts/replenishment/product-facilities.png)

You also choose when OFBiz checks the minimum:

- When an order reserves stock. This reorders as soon as orders come in.
- When stock leaves the warehouse on a shipment. This reorders only when stock actually goes.

When stock drops below the minimum, OFBiz creates a requirement, a request to buy the reorder quantity.

For example, in the OFBiz demo data, Big Gizmo has a Minimum Stock of 20 and a Reorder Quantity of 50. Available stock is 22. An order reserves 5 units, so stock drops to 17. OFBiz creates a requirement for 50 units.

OFBiz does not create a second requirement while stock stays below the minimum. A new one comes only after stock goes back up and drops again.

## From requirement to purchase order

A buyer reviews the requirements and approves them. OFBiz then groups the approved ones by supplier, and turns them into purchase orders.

## Try it yourself

Our step-by-step guide shows each setting:
[Set Minimum Stock and Reorder Quantities in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436233).

To see how a requirement becomes a purchase order, read
[Purchase Requisitions in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436465).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
