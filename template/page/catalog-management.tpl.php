<?php //Variable declarations for region templates
  $head_title = '<title>Open Source PIM and Product Catalog Management | Apache OFBiz</title>';
  $head_description = 'Apache OFBiz is a free, open source PIM. Manage products, variants, categories, catalogs, stores, prices and promotions in one place.';
?>

  <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Open Source PIM and Product Catalog Management</h1>
          <div class="span4" id="navTrail"> <a href="<?= $base_url ?>index.html" class="homeLink">home</a><span>/</span><a href="<?= $base_url ?>business-users.html#UsrModules">Modules</a><span>/</span><span class="current">Catalog Management</span> </div>
        </div>
      </div>
    </header>
  <section id="content" class="features" >
    <div class="slice clearfix">
      <div class="container">
        <div class="row ">
          <aside class="span2 PortfolioStickyMenu" id="sidebar">
            <ul  id="subnav" class="nav nav-stacked sidenav scrollspyNav">
              <li> <a href="#Cat1"> Who it is for </a> </li>
              <li> <a href="#Cat2"> Features </a> </li>
              <li> <a href="#Cat3"> How it connects </a> </li>
              <li> <a href="#Cat4"> Try it </a> </li>
              <li> <a href="#Cat5"> Questions </a> </li>
              <li> <a href="#Cat6"> Get help </a> </li>
            </ul>
          </aside>
          <div class="span10">
            <section class="slice row clearfix">
              <div class="span10">
                <p>Apache OFBiz keeps all your product information in one place. This is called PIM, short for product information management. OFBiz holds products, variants, prices, images and stores, and shares them with orders and stock. It is free and open source under the Apache License 2.0.</p>
              </div>
            </section>
            <section id="Cat1" class="slice row clearfix">
              <div class="span10">
                <h2>Who it is for</h2>
                <div class="divider"><span></span></div>
                <ul class="iconsList">
                  <li><i class="icon-pin"></i> Teams that manage thousands of products, with sizes, colors and other options.</li>
                  <li><i class="icon-pin"></i> Businesses that sell through several stores, each with its own catalog and rules.</li>
                  <li><i class="icon-pin"></i> Merchandisers who set prices, price rules and promotions.</li>
                </ul>
              </div>
            </section>
            <section id="Cat2" class="slice row clearfix">
              <div class="span10">
                <h2>What OFBiz does for your product catalog</h2>
                <div class="divider"><span></span></div>
                <h3>Products, with all their details</h3>
                <p>Each product has a name, a type, descriptions, weight and size. You can add codes such as SKU, UPC, EAN and ISBN. Physical goods, services, digital downloads and subscriptions are all products.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_products">Catalog, Products</a></p>
                <h3>Variants: sizes, colors and other options</h3>
                <p>A virtual product is the item a customer chooses, such as a T-shirt. Its variants are the real items you stock, such as "red, large". OFBiz creates the variants for you from the features you pick.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=358812107">Avoiding Redundant BOMs with Virtual and Variant Product Design in Apache OFBiz</a></p>
                <h3>Features and attributes</h3>
                <p>Features describe a product, such as color, size or material. Group them into feature categories, and mark features that cannot go together. Add free attributes for any other detail.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_product_features">Catalog, Features</a></p>
                <h3>Categories and catalogs</h3>
                <p>Put products in categories, and categories inside other categories. A catalog is a set of categories that one store shows. One product can sit in many categories and catalogs.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_categories">Catalog, Categories</a></p>
                <h3>Product stores</h3>
                <p>A product store holds the rules for one place you sell. Each store has its own catalogs, warehouses, tax, shipping, payment settings and customer emails.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_product_stores">Catalog, Stores</a></p>
                <h3>Prices and price rules</h3>
                <p>Give each product a default price and a list price, in each currency. Price rules then change the price for some products, customers or quantities.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436332">Set Product Prices and Price Rules in Apache OFBiz</a></p>
                <h3>Promotions and coupon codes</h3>
                <p>Set up an amount off, free shipping or a free gift. A promotion can need a coupon code, and can have limits per customer.
                Guide: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436336">Set Up Promotions and Coupon Codes in Apache OFBiz</a></p>
                <h3>Product text and images</h3>
                <p>Write the name and the short and long descriptions. Add a page title and meta tags for search engines. Upload product images. OFBiz makes the small, medium and large sizes for you. Image Management lets staff approve or reject new images.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_image_management">Catalog, Image Management</a></p>
                <h3>Cross-sell, upsell and other links</h3>
                <p>Link products to each other as cross-sell, upsell, accessory or replacement. The online store shows these links to customers.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_products">Catalog, Products</a></p>
                <h3>Configurable products</h3>
                <p>Let customers build their own product from options. An example is a computer with a chosen disk and memory. Each option can change the price.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_configurations">Catalog, Configurations</a></p>
                <h3>Gift cards</h3>
                <p>Sell gift cards and let customers pay with them. Each store sets its own gift card rules, such as whether a PIN is needed.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_product_stores">Catalog, Stores</a></p>
                <h3>Keyword search</h3>
                <p>Staff find products by keyword, category or feature. OFBiz builds the keywords from the product text. A thesaurus adds other words that mean the same thing.
                User manual: <a href="https://nightlies.apache.org/ofbiz/stable/ofbiz/html5/user-manual.html#_miscellaneous_2">Catalog, Thesaurus</a></p>
                <p><img src="<?= $base_url ?>images/modules/catalog-management-1-variants.png" alt="The variants of one product, by color and size" style="max-width: 100%;"/><br/>The variants of one product, by color and size.</p>
                <p><img src="<?= $base_url ?>images/modules/catalog-management-2-product-content.png" alt="A product's name, descriptions and images" style="max-width: 100%;"/><br/>A product's name, descriptions and images.</p>
              </div>
            </section>
            <section id="Cat3" class="slice row clearfix">
              <div class="span10">
                <h2>How it connects with the rest of OFBiz</h2>
                <div class="divider"><span></span></div>
                <p>Orders use the same products, prices and promotions. The warehouse stocks the same variants. See <a href="<?= $base_url ?>order-management.html">Order Management</a>, <a href="<?= $base_url ?>inventory-management.html">Inventory Management</a> and eCommerce.</p>
              </div>
            </section>
            <section id="Cat4" class="slice row clearfix">
              <div class="span10">
                <h2>Try it</h2>
                <div class="divider"><span></span></div>
                <ul class="iconsList">
                  <li><i class="icon-pin"></i> Open the <a href="<?= $base_url ?>ofbiz-demos.html">public demo</a> and go to the Catalog application.</li>
                  <li><i class="icon-pin"></i> <a href="<?= $base_url ?>download.html">Download Apache OFBiz</a> and run it on your own computer.</li>
                  <li><i class="icon-pin"></i> Read the price and promotion guides on the wiki: <a href="https://cwiki.apache.org/confluence/pages/viewpage.action?pageId=467436386">Apache OFBiz for Order Management</a>.</li>
                </ul>
              </div>
            </section>
            <section id="Cat5" class="slice row clearfix">
              <div class="span10">
                <h2>Questions and answers</h2>
                <div class="divider"><span></span></div>
                <h3>Is Apache OFBiz free?</h3>
                <p>Yes. It is open source under the Apache License 2.0. You can use it, change it and run it at no cost.</p>
                <h3>Can I run several stores from one catalog?</h3>
                <p>Yes. Each store picks the catalogs it shows, and sets its own prices and promotions.</p>
                <h3>Can I load my products from a spreadsheet?</h3>
                <p>Not from the Catalog screens. Products are loaded as XML data files in the Web Tools application. Many teams ask a developer to write an import for their file.</p>
                <h3>Does OFBiz have a point of sale for shops?</h3>
                <p>Not today. The point of sale add-on is no longer part of OFBiz.</p>
                <h3>Do I need technical skills to set it up?</h3>
                <p>Yes. OFBiz runs on Java, and setup needs some technical work. The <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a> names people who can help.</p>
              </div>
            </section>
            <section id="Cat6" class="slice row clearfix">
              <div class="span10">
                <h2>Get help</h2>
                <div class="divider"><span></span></div>
                <p>Ask questions on the <a href="<?= $base_url ?>mailing-lists.html">user mailing list</a>. See who uses OFBiz on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+User+List">user list</a>, and find help on the <a href="https://cwiki.apache.org/confluence/display/OFBIZ/Apache+OFBiz+Service+Providers">service providers list</a>.</p>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
 </section>
