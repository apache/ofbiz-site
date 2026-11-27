---
layout: post
title: What Is FEFO? First Expired, First Out in Apache OFBiz
date: '2026-11-26T14:40:00+00:00'
permalink: what-is-fefo
metaDescription: "FEFO means first expired, first out: ship the stock that expires first. See how Apache OFBiz reserves stock by expiry date, and tracks lots."
---
## What does FEFO mean?

FEFO means first expired, first out. When you ship a product, you ship the units that expire first. This keeps old stock from going bad on the shelf.

FEFO matters for food, medicine, cosmetics and anything else with a use-by date.

## How is FEFO different from FIFO?

FIFO means first in, first out. You ship the units that arrived first.

Most of the time, the two give the same result. They differ when a newer delivery expires sooner. For example, a delivery that arrived last week may expire before one that arrived last month. FIFO ships last month's stock. FEFO ships last week's.

## What does FEFO need?

- An expiry date on each batch of stock.
- A lot number on each batch, so you can trace it later.
- A reservation rule that picks the batch with the earliest expiry date.

## How does Apache OFBiz handle FEFO?

Apache OFBiz is a free, open source ERP. It records each batch you receive as an inventory item. An inventory item can hold a lot number, a serial number and an expiry date.

To ship by expiry date, you set the store's Reserve Order Enum ID to FIFO Expire. When an order comes in, OFBiz then reserves the inventory items with the earliest expiry date first.

![The store setting that reserves stock by expiry date](/images/posts/fefo/store-fifo-expire.png)

The other choices are FIFO Received, LIFO Received, LIFO Expire, Greater Unit Cost and Less Unit Cost. LIFO means last in, first out.

You can also make a lot number mandatory for a product. OFBiz then refuses to receive that product without one.

## How do you find where a lot went?

Search the inventory items by lot number. OFBiz lists every item with that lot.

![Searching inventory items by lot number](/images/posts/fefo/search-by-lot.png)

Each item has a history of every change. Each change shows the order and shipment that caused it. So you can see which customers received a lot, for example in a product recall.

## Try it yourself

Our step-by-step guide shows each setting:
[Track Lots, Serial Numbers and Expiry Dates in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436235).

To learn how OFBiz reserves stock for orders, see
[Reserve Stock for Orders in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436238).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
