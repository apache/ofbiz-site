---
layout: post
title: Barcode Inventory System with Apache OFBiz
date: '2026-11-26T15:50:00+00:00'
permalink: barcode-inventory-system
metaDescription: "A barcode inventory system lets warehouse staff scan instead of typing. See where Apache OFBiz prints barcodes, and which warehouse screens accept a scanner."
---
## What is a barcode inventory system?

A barcode inventory system lets warehouse staff scan items and papers instead of typing codes. Scanning is faster, and it stops typing mistakes.

It has two parts. Barcodes are printed on products, orders and boxes. Scanners read them into the system at each step.

## What does it need?

- Barcodes on products, either your own or the maker's UPC or EAN code.
- Barcodes on pick papers, so staff can open an order with one scan.
- Screens that accept a scan, for packing and checking.
- Labels for the packed boxes.

## How does Apache OFBiz use barcodes?

Apache OFBiz is a free, open source ERP. It needs no special scanner app. A normal USB or Bluetooth scanner works like a keyboard. It types the code into the field that has the cursor.

OFBiz prints barcodes on:

- Product labels, with the product ID.
- Pick sheets and picklists, with the order number.
- Packing slips and box labels, with the shipment number.

All of them use the Code 128 format, which almost every scanner can read.

![The pick sheet with the order barcode at the top right](/images/posts/barcodes/pick-sheet-barcode.png)

## Where can staff scan?

On the Packing tab, the packer scans the order barcode from the pick sheet. Then they scan each item. The item field accepts the product ID or the maker's code, such as a UPC.

In a test with the OFBiz demo data, we added a UPC code to Round Gizmo. Scanning that UPC on the Packing tab packed one Round Gizmo.

![The Packing tab after scanning the UPC of Round Gizmo](/images/posts/barcodes/pack-order-scan.png)

The Verify Pick tab also accepts scans. There, the item field takes only the product ID.

## What about carrier shipping labels?

The box labels from OFBiz carry the shipment number. They are not carrier shipping labels. To record the carrier's tracking numbers, see [Weigh Packages and Record Tracking Numbers in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436289).

## Try it yourself

Our step-by-step guide shows each barcode and each scan screen:
[Print Barcodes and Use a Scanner in the Warehouse in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436285).

For the full warehouse flow, read our post
[What Is Order Picking?](/posts/what-is-order-picking/).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
