---
layout: post
title: What Is a Shipping Manifest? How Apache OFBiz Prints One
date: '2026-11-26T14:30:00+00:00'
permalink: what-is-a-shipping-manifest
metaDescription: "A shipping manifest lists every box in a shipment, with its weight and contents. See how Apache OFBiz prints a manifest for each shipment."
---
## What is a shipping manifest?

A shipping manifest is a list of everything in one shipment. It goes with the shipment, for the carrier or for the warehouse that receives it.

A carrier uses it to check that every box was handed over. A receiving warehouse uses it to check that every box arrived.

## How is a manifest different from a packing slip?

| | Packing slip | Shipping manifest |
| :--- | :--- | :--- |
| Who reads it | The customer | The carrier and warehouse staff |
| Where it goes | Inside each box | With the whole shipment |
| What it covers | One box | Every box, with its weight |

## What does a manifest show?

- The carrier and the shipping method.
- The from address and the to address.
- Each box, with its number and weight.
- The products in each box, with their quantities.

## How does Apache OFBiz print shipping manifests?

Apache OFBiz is a free, open source ERP. An ERP (enterprise resource planning) system runs orders, stock, buying and production in one place. Every shipment in OFBiz has a manifest that you can print as a PDF. To print it, open the shipment in the Facility application and click Generate Shipment Manifest Report.

![The button that prints the manifest for a shipment](/images/posts/shipping-manifest/manifest-button.png)

For each box, the manifest shows the route segment, the carrier and the shipping method. A route segment is one leg of the trip, with one carrier. It also shows both addresses, the box weight, and each product with the quantity packed in that box. A barcode of the shipment number is at the top, so a scanner can find the shipment.

In a test with the OFBiz demo data, one order for 2 Round Gizmos was packed into two boxes, of 1.5 and 1.2 pounds. The manifest listed both boxes.

![The manifest for the shipment, with two boxes and their weights](/images/posts/shipping-manifest/shipment-manifest.png)

The box weights come from packing. Staff record them when they pack each box.

## Try it yourself

Our step-by-step guide shows where to print it:
[Print a Shipping Manifest in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436453).

To record box weights and tracking numbers, see
[Weigh Packages and Record Tracking Numbers in Apache OFBiz](https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436289).

You can [try the public demo](/ofbiz-demos/), or [download Apache OFBiz](/downloads/) and run it on your own computer.
