---
layout: post
title: What Is a Packing Slip? How Apache OFBiz Prints Them
date: '2026-11-26T12:40:00+00:00'
permalink: what-is-a-packing-slip
metaDescription: "A packing slip is a list of the items inside a box you ship. See how Apache OFBiz prints a packing slip for each box in a shipment."
---
## What is a packing slip?

A packing slip is a list of the items inside a box you ship. It goes inside the box, so the customer can check that everything arrived. It is also called a delivery note.

A packing slip usually shows no prices. That is the job of the invoice.

## What does a packing slip show?

- The order number and the shipment number.
- The ship-to address and the shipping method.
- Each product, with the quantity in the box.
- When an order ships in several boxes, which box this is, and how many there are.

The last point matters for larger orders. If the customer opens one box of two, the slip tells them more is on the way.

## How does Apache OFBiz print packing slips?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. When staff finish packing an order, OFBiz creates a shipment. Every shipment has a packing slip that you can print as a PDF.

OFBiz prints one page for each box. Each page shows:

- The shipment and box number, such as "Package 1 of 2".
- The order number, the ship-to address and the shipping method.
- Each product, with the quantity ordered, the quantity in this box, and the quantity in the whole shipment.
- A barcode of the shipment number, so a scanner can find the shipment.

In a test with the OFBiz demo data, one order for 2 Round Gizmos was packed into two boxes. OFBiz printed two pages, one for each box.

![The packing slip for box 1 of 2 on the shipment](/images/posts/packing-slip/packing-slip-box-1.png)

You can print the packing slip right after packing, or later from the sales order.

![The Packing Slip button next to the shipment on the sales order](/images/posts/packing-slip/order-packing-slip-link.png)

For the carrier, OFBiz also prints a shipping manifest. It lists every box in the shipment, with its weight.

## Try it yourself

Our step-by-step guide shows where to print the packing slip:
[Print a Packing Slip in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436426).

To pick, pack and ship an order, see
[Pick, Pack and Ship an Order in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436226).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
