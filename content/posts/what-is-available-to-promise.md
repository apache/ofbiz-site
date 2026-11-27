---
layout: post
title: What Is Available to Promise (ATP)? How Apache OFBiz Uses It
date: '2026-11-26T16:20:00+00:00'
permalink: what-is-available-to-promise
metaDescription: "Available to promise (ATP) is the stock you can still promise to new orders. See how Apache OFBiz tracks ATP next to quantity on hand, and reserves stock."
---
## What is available to promise?

Available to promise, or ATP, is the stock you can still promise to new customers. It is the stock on the shelf, minus the units already promised to open orders.

ATP stops you from selling the same unit twice. Two customers cannot both be promised the last unit.

## How is ATP different from stock on hand?

Stock on hand, or QOH (quantity on hand), counts every unit on the shelf. ATP counts only the free units.

Take 10 units on the shelf, with open orders for 4 of them. QOH is 10. ATP is 6. The 4 units stay on the shelf until they ship, but no new order can take them.

## What does an ATP process need?

- A reservation when an order is placed, so ATP drops at once.
- A rule for which stock to reserve first, such as the oldest.
- A choice: refuse orders above ATP, or accept them as backorders.

## How does Apache OFBiz handle ATP?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. It keeps both numbers for every batch of stock, called an inventory item. It shows them for every product, in every warehouse.

In the OFBiz demo data, Round Gizmo showed 507 units on hand and 503 available. The other 4 units were reserved for orders.

![Stock on hand and available to promise for Round Gizmo](/images/posts/inventory-control/inventory-by-product.png)

A sales order reserves stock as soon as it is created. ATP drops by the ordered quantity. QOH drops only when the units are packed and shipped.

The store settings decide how reservations work:

- Reserve Inventory: whether orders reserve stock at all.
- Reserve Order Enum ID: which stock to reserve first, such as the oldest receipt or the earliest expiry date.
- Require Inventory: whether orders can take more than ATP. If they can, the extra is backordered, and ATP goes below zero.

![The inventory settings of the demo store](/images/posts/available-to-promise/store-settings.png)

## Try it yourself

Our step-by-step guide explains each setting:
[Reserve Stock for Orders in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436238).

To see what happens when ATP runs out, read our post
[What Is a Backorder?](/posts/what-is-a-backorder/).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
