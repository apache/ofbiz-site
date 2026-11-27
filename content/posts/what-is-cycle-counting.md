---
layout: post
title: What Is Cycle Counting? Counting Stock in Apache OFBiz
date: '2026-11-26T15:20:00+00:00'
permalink: what-is-cycle-counting
metaDescription: "Cycle counting means counting a few products at a time, all year, instead of the whole warehouse at once. See how Apache OFBiz records counts and fixes stock."
---
## What is cycle counting?

Cycle counting means counting a few products at a time, on a regular schedule. Over a month or a year, every product gets counted.

The other way is a full stock take. The whole warehouse stops, and staff count everything at once.

Cycle counting has two benefits. The warehouse keeps working. And errors are found weeks earlier, not once a year.

## What does cycle counting need?

- A plan of what to count each day. Many businesses count fast-moving or costly products more often.
- A screen to find the stock of each product, in each location.
- A way to record the difference between the count and the system.
- A reason for each difference, such as damaged or lost.

## How does Apache OFBiz handle stock counts?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. It records each batch of stock as an inventory item, usually in one location.

To count, staff open the warehouse's Physical Inventory tab and search for a product. OFBiz lists each inventory item, with its quantity on hand.

Staff then enter the difference, called a variance, with a reason. OFBiz corrects the quantity and saves the count with its date.

In a test with the OFBiz demo data, an item showed 5 Round Gizmos. We counted 4, because one was broken. We entered -1, with the reason Damaged.

![The Physical Inventory tab with a variance of -1 entered](/images/posts/cycle-counting/physical-inventory.png)

## Does OFBiz plan the counts?

No. OFBiz has no screen that schedules which products to count each day. Your team keeps that plan, for example in a list by product group. Staff then search for those products on the Physical Inventory tab.

The count history stays in OFBiz. Each change to an item shows the count that caused it.

## Try it yourself

Our step-by-step guide shows how to record a count:
[Count Stock and Adjust Quantities in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436231).

To see how every change is recorded, read our post
[What Is a Stock Ledger?](/posts/what-is-a-stock-ledger/).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
