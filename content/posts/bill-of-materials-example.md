---
layout: post
title: Bill of Materials Example in Apache OFBiz
date: '2026-11-26T13:50:00+00:00'
permalink: bill-of-materials-example
metaDescription: "A bill of materials lists every part needed to make a product. See a two-level bill of materials example in Apache OFBiz, with the parts list and where-used."
---
## What is a bill of materials?

A bill of materials, or BOM, lists every part needed to make a product, with the quantity of each. A bicycle needs one frame, two wheels and one seat. Each wheel needs a rim, a tyre and many spokes.

When parts are made from other parts, the BOM has levels. This is a multi-level BOM.

## What should you be able to do with a BOM?

- See every part at every level, with the total quantity for a given amount of product. This is a BOM explosion.
- See only the direct parts of a product.
- Find every product that uses a part. This is a where-used search.
- Compare the parts needed with the stock on hand.

## A two-level example in Apache OFBiz

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. We built this example on the OFBiz demo data. A Gizmo Gift Set is made of:

- Level 1: 1 Gizmo Basket and 2 Micro Chrome Widgets.
- Level 2: each Gizmo Basket is made of 1 Tiny Gizmo, 2 Nan Gizmos and 3 Rainbow Gizmos.

In the Manufacturing application, the Bom Simulation screen explodes the BOM. We asked for 10 gift sets.

![The explosion for 10 gift sets, with each level and the stock on hand](/images/posts/bill-of-materials/bom-explosion.png)

OFBiz listed 10 baskets, 20 widgets, and inside the baskets 10 Tiny, 20 Nan and 30 Rainbow Gizmos. It also showed the stock on hand of each part. Only 5 Rainbow Gizmos were in stock, so they must be bought or made first.

## Where is a part used?

On the same screen, an implosion lists every product that uses a part, level by level, up to the top.

![The where-used list for the Nan Gizmo](/images/posts/bill-of-materials/bom-where-used.png)

The Nan Gizmo is used in the Gizmo Basket, which is used in the Gizmo Gift Set. When a part changes or runs short, this shows every product it affects.

## Where does the BOM go next?

The BOM feeds the rest of manufacturing. A production run takes its parts list from the BOM. MRP, material requirements planning, uses it to work out which parts to buy or make.

## Try it yourself

Our step-by-step guide walks through the example above:
[Bill of Materials Example in Apache OFBiz: Explosion and Where-Used](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436478).

To create a BOM from scratch, see
[How to Create a Bill of Materials for a Skateboard in Apache OFBiz in 4 Easy Steps](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=347933410).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
