---
layout: post
title: What Is Kitting? Selling Product Kits in Apache OFBiz
date: '2026-11-26T13:20:00+00:00'
permalink: what-is-kitting
metaDescription: "Kitting means selling several products together as one item. See how Apache OFBiz handles kits that are picked from parts, and kits that are built first."
---
## What is kitting?

Kitting means selling several products together as one item. A gift basket, a starter box and a computer bundle are all kits. The customer orders one kit. The warehouse ships its parts.

There are two common ways to handle a kit:

- Pick the parts when the order comes in, and pack them together.
- Build the kit first, and keep finished kits in stock.

## What does a kitting process need?

- A list of the parts in each kit, with the quantity of each.
- Stock checks on the parts, because the kit itself may have no stock.
- A way to reserve the parts, or the built kits, for each order.
- For built kits, a record of the work that turned parts into kits.

## How does Apache OFBiz handle kits?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. In OFBiz, a kit is a product of type Marketing Package. It has two kinds:

- **Pick kit** (type Marketing Package: Pick Assembly). OFBiz reserves the parts, and staff pack them together. You keep no stock of the kit itself.
- **Auto kit** (type Marketing Package: Auto Manufactured). OFBiz builds the kit from its parts with a production run, then reserves the kit.

In a test with the OFBiz demo data, a Gizmo Basket kit holds 1 Tiny Gizmo, 2 Nan Gizmos and 3 Rainbow Gizmos.

A customer ordered one basket as a pick kit. OFBiz reserved the 6 parts, and showed how many kits the parts in stock could make.

![An order for one pick kit, with the three parts reserved](/images/posts/kitting/pick-kit-order.png)

A second customer ordered one basket as an auto kit. No baskets were in stock. OFBiz created a production run, took the 6 parts out of stock, and put 1 basket into stock for the order.

![The production run that built one basket for the order](/images/posts/kitting/auto-kit-production-run.png)

If the parts can build only some of the kits, OFBiz builds those. It creates a second production run for the rest, which waits for more parts.

## Which kind should you use?

Use a pick kit when the parts go loose into one box. Use an auto kit when the kit must be built first, or when you want finished kits on the shelf.

## Try it yourself

Our step-by-step guide shows the setup and the test above:
[Kitting in Apache OFBiz: Selling Several Products as One Kit](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436446).

To learn how production runs work, see
[Work Orders in Apache OFBiz: Production Runs, Tasks and Job Cards](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436441).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
