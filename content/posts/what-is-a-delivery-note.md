---
layout: post
title: What Is a Delivery Note? How Apache OFBiz Prints One
date: '2026-11-26T14:10:00+00:00'
permalink: what-is-a-delivery-note
metaDescription: "A delivery note lists the goods sent in a delivery, without prices. See how it differs from an invoice, and how Apache OFBiz prints one for each box."
---
## What is a delivery note?

A delivery note is a document that goes with the goods. It lists what was sent and how many. The person who receives the goods checks the delivery against it.

A delivery note usually shows no prices. In many countries it is also called a packing slip or a dispatch note.

## How is a delivery note different from other documents?

| Document | Who it is for | Prices? |
| :--- | :--- | :--- |
| Delivery note | The receiver of the goods | No |
| Invoice | The customer, to pay | Yes |
| Shipping manifest | The carrier, for the whole shipment | No |

## What does a delivery note show?

- The order number and the shipment number.
- The delivery address.
- Each product, with the quantity sent.
- When a delivery has several boxes, which box this is.

## How does Apache OFBiz print delivery notes?

Apache OFBiz is a free, open source ERP. In OFBiz, the delivery note is called the packing slip. Every shipment has one, printed as a PDF, with one page for each box.

Each page shows the shipment and box number, the order number, the ship-to address and the shipping method. It lists each product with the quantity ordered, the quantity in this box, and the quantity in the whole shipment.

In a test with the OFBiz demo data, one order for 2 Round Gizmos was packed into two boxes. OFBiz printed two pages, one for each box.

![The delivery note for box 1 of 2 on the shipment](/images/posts/packing-slip/packing-slip-box-1.png)

You can print it right after packing, or later from the sales order.

The layout is a template, so a developer can change it. For example, they can add a line for the receiver's signature.

## Try it yourself

Our step-by-step guide shows where to print it:
[Print a Packing Slip in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436426).

To learn more about the packing slip itself, read our post
[What Is a Packing Slip?](/posts/what-is-a-packing-slip/).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
