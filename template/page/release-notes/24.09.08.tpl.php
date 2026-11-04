<?php //Variable declarations for region templates
  $head_title = '<title>The Apache OFBiz&reg; Project - Release Notes 24.09.08</title>';
?>
 <!-- page content -->
 <section id="content" class="fullWidth">
    <header class="headerPage">
      <div class="container clearfix">
        <div class="row">
          <h1 class="span8">Release Notes 24.09.08</h1>
           <div class="span4" id="navTrail">
               <a href="<?= $base_url ?>index.html" class="homeLink">home</a>
               <span>/</span>
               <a href="<?= $base_url ?>download.html">Download</a>
               <span>/</span><span class="current">Release Notes 24.09.08</span>
           </div>
      </div>
      </div>
    </header>
  <section id="content" class="features" >
  <div class="slice clearfix">
      <div class="container">
<div class="row">
  <div>
  <p>Apache OFBiz&reg; 24.09.08, released in November 2026, is the eighth release of the 24.09 series, which has been feature-frozen since September 2024, receiving only bug fixes.</p>

<h2>Security fixes</h2>
<ul>
<li>Backport pr 1502 - Fixed: Add validation for product image file names in renameImage to prevent path traversal in <a href="https://github.com/apache/ofbiz-framework/pull/1505">#1505</a></li>
<li>Backport PR 1512 - Improved: hardens validation of screen location in <a href="https://github.com/apache/ofbiz-framework/pull/1528">#1528</a></li>
<li>Improved: Authorization enforcement for HumanRes category tree data access (#1637) in <a href="https://github.com/apache/ofbiz-framework/pull/1640">#1640</a></li>
<li>Tighten how suffix-selected views resolve against their owning request map in <a href="https://github.com/apache/ofbiz-framework/pull/1645">#1645</a></li>
<li>Improved: Enhance RequestHandler view state persistence and screen location resolution (#1624) in <a href="https://github.com/apache/ofbiz-framework/pull/1653">#1653</a></li>
<li>Restrict widget resource locations to component:// or an explicit allowlist (#1650) in <a href="https://github.com/apache/ofbiz-framework/pull/1654">#1654</a></li>
<li>Improved: Validate tenant ID before creating a per-tenant delegator in <a href="https://github.com/apache/ofbiz-framework/pull/1663">#1663</a></li>
<li>Improved: Add validation and permission check to replaceImageToExistImage service in <a href="https://github.com/apache/ofbiz-framework/pull/1672">#1672</a></li>
<li>Improved: Add permission check and path validation to imageCrop and imageRotate services in <a href="https://github.com/apache/ofbiz-framework/pull/1676">#1676</a></li>
<li>Improved: Add missing permission and path checks across ImageManagementServices methods in <a href="https://github.com/apache/ofbiz-framework/pull/1680">#1680</a></li>
<li>Improved: Check path containment before invoking SecuredUpload.isValidFileName in isValidProductImageFileName in <a href="https://github.com/apache/ofbiz-framework/pull/1685">#1685</a></li>
<li>Improved input handling and access control around the invoice email-aending flow in <a href="https://github.com/apache/ofbiz-framework/pull/1706">#1706</a></li>
<li>Improved webtools data file viewer URL handling (#1707) in <a href="https://github.com/apache/ofbiz-framework/pull/1708">#1708</a></li>
<li>Improved externalLoginKey handling for cross-application navigation (…#1710) in <a href="https://github.com/apache/ofbiz-framework/pull/1713">#1713</a></li>
<li>Improved: escape link parameter values in MacroScreenRenderer.renderLink (#1711) in <a href="https://github.com/apache/ofbiz-framework/pull/1715">#1715</a></li>
<li>Improved: add permission and path checks to XmlDsDump.groovy (#1712) in <a href="https://github.com/apache/ofbiz-framework/pull/1714">#1714</a></li>
<li>Introducing upper bound for rowCount in MultiForm-Requests (#1691) in <a href="https://github.com/apache/ofbiz-framework/pull/1716">#1716</a></li>
<li>Improved: authorization checks on Catalog and Order Manager helper routes (#1717) in <a href="https://github.com/apache/ofbiz-framework/pull/1728">#1728</a></li>
<li>Improved: Align survey template location resolution with other widget/template loaders (#1730) in <a href="https://github.com/apache/ofbiz-framework/pull/1732">#1732</a></li>
<li>Improved: Build an explicit DocumentBuilder for XML-typed content rendering in ContentWorker (#1731) in <a href="https://github.com/apache/ofbiz-framework/pull/1733">#1733</a></li>
<li>Improved: Anchor content role-creation permission checks to the target content (#1734) in <a href="https://github.com/apache/ofbiz-framework/pull/1737">#1737</a></li>
<li>Improved: Reuse existing catalog permission checks for search-result bulk actions (#1735) in <a href="https://github.com/apache/ofbiz-framework/pull/1738">#1738</a></li>
<li>Improved: Anchor catalog quick-admin write events to their permission tier (#1739) in <a href="https://github.com/apache/ofbiz-framework/pull/1740">#1740</a></li>
<li>Improved: bind EntityFunction literal values as SQL parameters instead of inlining them (#1729) in <a href="https://github.com/apache/ofbiz-framework/pull/1742">#1742</a></li>
<li>Fixed: updateLayout authorizing under CONTENT_CREATE then updating unrelated records unchecked (#1745) in <a href="https://github.com/apache/ofbiz-framework/pull/1746">#1746</a></li>
<li>Fixed: CMS use-when expressions still templated into string literals in <a href="https://github.com/apache/ofbiz-framework/pull/1789">#1789</a></li>
<li>Fixed: arbitrary service execution via Content.serviceName in ContentWorker in <a href="https://github.com/apache/ofbiz-framework/pull/1791">#1791</a></li>
<li>Improved: Align tenant resolution between LoginWorker and ContextFilter (#1835) in <a href="https://github.com/apache/ofbiz-framework/pull/1841">#1841</a></li>
<li>Fixed: externalLoginKey enable flag never checked, cannot be changed live (OFBIZ-13519) in <a href="https://github.com/apache/ofbiz-framework/pull/1848">#1848</a></li>
<li>Improved: Route the layout-image events through the permission-checked content services and tighten data resource template rendering (#1846) in <a href="https://github.com/apache/ofbiz-framework/pull/1857">#1857</a></li>
<li>Improved: Bind externalLoginKey to its intended destination webapps instead of validating against any webapp on the server (OFBIZ-13522) in <a href="https://github.com/apache/ofbiz-framework/pull/1856">#1856</a></li>
<li>Fixed: AdminServer no longer starts without a configured admin key in <a href="https://github.com/apache/ofbiz-framework/pull/2067">#2067</a></li>
<li>Fixed: ViewFile no longer discloses arbitrary properties or xml files in <a href="https://github.com/apache/ofbiz-framework/pull/2080">#2080</a></li>
<li>Improved: moveContentJson lets a caller without UPDATE permission re-parent content associations in <a href="https://github.com/apache/ofbiz-framework/pull/2065">#2065</a></li>
<li>Fixed: createReturnItem() does not cap returnPrice to returnablePrice for non-privileged callers in <a href="https://github.com/apache/ofbiz-framework/pull/2083">#2083</a></li>
<li>Improved: deleteContentJson lets a caller without DELETE permission detach content and cascade-delete its alias subtree in <a href="https://github.com/apache/ofbiz-framework/pull/2100">#2100</a></li>
<li>Fixed: quickReturnFromOrder() permission guard is a no-op due to an operator-precedence error in <a href="https://github.com/apache/ofbiz-framework/pull/2102">#2102</a></li>
<li>Improved: added a rotateSecretKeys Gradle task to unconditionally replace an already-set JWT/password secret key in <a href="https://github.com/apache/ofbiz-framework/pull/2091">#2091</a></li>
<li>Fix: Adds missing CREATE and UPDATE accounting permissions in <a href="https://github.com/apache/ofbiz-framework/pull/2211">#2211</a></li>
<li>Fixed: Hardens security by adding missing permission check in <a href="https://github.com/apache/ofbiz-framework/pull/2218">#2218</a></li>
<li>Fixed: Enforces order-update authorization in updateOrderPaymentPreference in <a href="https://github.com/apache/ofbiz-framework/pull/2258">#2258</a></li>
<li>Fixed: createReturnItem() does not verify OrderItem ownership before attaching it to a ReturnHeader in <a href="https://github.com/apache/ofbiz-framework/pull/2271">#2271</a></li>
<li>Fixed: Missing permission checks on FinAccount create/update/delete services in <a href="https://github.com/apache/ofbiz-framework/pull/2266">#2266</a></li>
<li>Improved: Scope password-reset JWTs to their purpose, confined to the password-change flow in <a href="https://github.com/apache/ofbiz-framework/pull/2277">#2277</a></li>
<li>Fixed: Missing permission checks on FinAccount GL-reconciliation services (OFBIZ-13683) in <a href="https://github.com/apache/ofbiz-framework/pull/2302">#2302</a></li>
<li>Fixed: Encode the source URL of screen image widgets in <a href="https://github.com/apache/ofbiz-framework/pull/2360">#2360</a></li>
<li>Fixed: Enforces order-update authorization in updateShipGroupShipInfo and addItemToApprovedOrder in <a href="https://github.com/apache/ofbiz-framework/pull/2362">#2362</a></li>
<li>Fixed: Require the ORDERMGR_UPDATE permission in the updateTrackingNumber service in <a href="https://github.com/apache/ofbiz-framework/pull/2364">#2364</a></li>
<li>Fixed: Check the owner of the shopping list in checkShoppingListSecurity in <a href="https://github.com/apache/ofbiz-framework/pull/2377">#2377</a></li>
<li>Fixed: Check that the dataResourceId belongs to the contentId in SimpleContentViewHandler in <a href="https://github.com/apache/ofbiz-framework/pull/2379">#2379</a></li>
<li>Implemented: Remove Janrain matches from SpotBugs exclude.xml in <a href="https://github.com/apache/ofbiz-framework/pull/2383">#2383</a></li>
<li>Fixed: ModelApiReader resolved omitted auth/publish attributes to false, opposite of rest-api.xsd's declared default in <a href="https://github.com/apache/ofbiz-plugins/pull/408">#408</a></li>
<li>Implemented: Remove Janrain integration in <a href="https://github.com/apache/ofbiz-plugins/pull/454">#454</a></li>
</ul>
<h2>Security hardening</h2>
<ul>
<li>Backport pr 1388: Improved: Simplify handling of hidden fields in order search form in <a href="https://github.com/apache/ofbiz-framework/pull/1389">#1389</a></li>
<li>Fixed: unrestricted file destination in DataServices createFile/updateFile in <a href="https://github.com/apache/ofbiz-framework/pull/1748">#1748</a></li>
<li>Improved: Validate the InventoryItem and the issued quantity in the issueInventoryItemToShipment service in <a href="https://github.com/apache/ofbiz-framework/pull/2238">#2238</a></li>
<li>Improved: Validate the FTP connection target hostname in sendContentToFtp before connecting in <a href="https://github.com/apache/ofbiz-framework/pull/2275">#2275</a></li>
</ul>
<h2>Bug fixes</h2>
<ul>
<li>Fixed: duplicate QuoteRole insertion error in copyQuote service (OFBIZ-13436) in <a href="https://github.com/apache/ofbiz-framework/pull/1347">#1347</a></li>
<li>Backport PR #1360: 'Fixed: Disable Quick Receive and Receive buttons on the Order View page when a PO has multiple ship groups (OFBIZ-13442)' in <a href="https://github.com/apache/ofbiz-framework/pull/1361">#1361</a></li>
<li>Backport pr 1393 - Fixed: Fix various display issues in the Order View and Receive Inventory screens for Purchase Orders in <a href="https://github.com/apache/ofbiz-framework/pull/1402">#1402</a></li>
<li>Fixed: EntityExpr no longer hardcodes the "default" delegator when validating condition types (OFBIZ-5100) in <a href="https://github.com/apache/ofbiz-framework/pull/1420">#1420</a></li>
<li>Fixed: E-commerce search and product detail no longer leak products across catalogs (OFBIZ-4755) in <a href="https://github.com/apache/ofbiz-framework/pull/1500">#1500</a></li>
<li>Fixed: Gift card purchase copyMe (BCC purchaser) can never work (OFBIZ-13464) in <a href="https://github.com/apache/ofbiz-framework/pull/1504">#1504</a></li>
<li>Fixed: OFBizTestCase-based integration tests never run on release24.09 (OFBIZ-13469) in <a href="https://github.com/apache/ofbiz-framework/pull/1513">#1513</a></li>
<li>Fixed: Gradle build failure in a linked git worktree (OFBIZ-13470) in <a href="https://github.com/apache/ofbiz-framework/pull/1518">#1518</a></li>
<li>Fixed: Reject shipments mixing ship groups with different destinations (OFBIZ-5346) (backport to release24.09) in <a href="https://github.com/apache/ofbiz-framework/pull/1509">#1509</a></li>
<li>Fixed: PAssed setIfEmpty True on updating Invoice header and Invoice … in <a href="https://github.com/apache/ofbiz-framework/pull/1536">#1536</a></li>
<li>Fixed : Child communication event sorting. (OFBIZ-8152) in <a href="https://github.com/apache/ofbiz-framework/pull/1538">#1538</a></li>
<li>Fixed: MissingMethodException thrown during the execution of the updateProductStore service when attempting to expire existing facilities. (OFBIZ-13472) in <a href="https://github.com/apache/ofbiz-framework/pull/1539">#1539</a></li>
<li>Fixed: PDF upload accepted embedded attachments when ZUGFeRD upload was disabled (OFBIZ-13485) (backport to release24.09) in <a href="https://github.com/apache/ofbiz-framework/pull/1574">#1574</a></li>
<li>Fixed: URLConnector.openUntrustedConnection(...) public overloads silently performed trusted SSL connections (OFBIZ-13484) in <a href="https://github.com/apache/ofbiz-framework/pull/1570">#1570</a></li>
<li>Fixed: Remove HOSTCERT_MIN_CHECK from SSLUtil (OFBIZ-13482) (backport to release24.09) in <a href="https://github.com/apache/ofbiz-framework/pull/1560">#1560</a></li>
<li>Fixed: Broken javamail-container sample in ofbiz-component.xml in <a href="https://github.com/apache/ofbiz-framework/pull/1551">#1551</a></li>
<li>Fixed: sendFailureNotification NPEs on default sendFrom, masking the original SMTP error (OFBIZ-13477) in <a href="https://github.com/apache/ofbiz-framework/pull/1549">#1549</a></li>
<li>Fixed: MultiTrustManager doing flat cert-equality checks instead of real X.509 chain validation (OFBIZ-13476) in <a href="https://github.com/apache/ofbiz-framework/pull/1546">#1546</a></li>
<li>Fixed: isExecutable() mime-type comparisons never matched Tika's actual types (OFBIZ-13486) in <a href="https://github.com/apache/ofbiz-framework/pull/1585">#1585</a></li>
<li>Fixed: isExecutable() missed Tika's ELF sub-types, letting real Linux binaries through the check (OFBIZ-13486) in <a href="https://github.com/apache/ofbiz-framework/pull/1601">#1601</a></li>
<li>Fixed: HashMaps are not properly rendered in FTL with current FTL integration (OFBIZ-13164) in <a href="https://github.com/apache/ofbiz-framework/pull/1616">#1616</a></li>
<li>Fixed: noWebshellInMetadata NPEs when readMetadata can't parse the file in <a href="https://github.com/apache/ofbiz-framework/pull/1623">#1623</a></li>
<li>Fixed: distTar/distZip ships unused Node.js runtime caches, bloating the distribution archive (OFBIZ-13491) in <a href="https://github.com/apache/ofbiz-framework/pull/1631">#1631</a></li>
<li>Fixed: ControlFilter's FreeMarker-interpolation guard was unreachable due to fail-open security check (OFBIZ-13492) in <a href="https://github.com/apache/ofbiz-framework/pull/1642">#1642</a></li>
<li>Fix webtools Run Suite/Run Case: missing prerequisites and shared ambient transaction (#1655) in <a href="https://github.com/apache/ofbiz-framework/pull/1656">#1656</a></li>
<li>Fixed: TaxAuthority lookup allows selecting parties without the TaxAuthority role (OFBIZ-12374) in <a href="https://github.com/apache/ofbiz-framework/pull/1697">#1697</a></li>
<li>Fix content visibility check in help screens (#1703) in <a href="https://github.com/apache/ofbiz-framework/pull/1705">#1705</a></li>
<li>Fixed: jQuery 4.0 migration broke legacy API usage in common-theme (OFBIZ-13510) in <a href="https://github.com/apache/ofbiz-framework/pull/1830">#1830</a></li>
<li>Fixed: jGrowl toast messages use wrong readmore-js option (OFBIZ-13512) in <a href="https://github.com/apache/ofbiz-framework/pull/1832">#1832</a></li>
<li>Fixed: Legacy jQuery.noConflict() in imagemanagement templates breaks common-theme JS (OFBIZ-13513) in <a href="https://github.com/apache/ofbiz-framework/pull/1834">#1834</a></li>
<li>Fixed: Service dispatcher local context race causes intermittent NullPointerException (OFBIZ-13508) in <a href="https://github.com/apache/ofbiz-framework/pull/1822">#1822</a></li>
<li>Fixed: EntityEcaUtil cache-rebuild race under concurrent Delegator construction (OFBIZ-13517) in <a href="https://github.com/apache/ofbiz-framework/pull/1840">#1840</a></li>
<li>Fixed: addOrderShipmentToShipment/getQuantityForShipment broken since the minilang-to-Groovy conversion (OFBIZ-13521) in <a href="https://github.com/apache/ofbiz-framework/pull/1854">#1854</a></li>
<li>Fixed: createOrderShipmentPlan leaks order items across ship groups (OFBIZ-13520) in <a href="https://github.com/apache/ofbiz-framework/pull/1853">#1853</a></li>
<li>Fixed: CategoryContentServicesScript related-URL, SEO, and download-update regressions (OFBIZ-13548) in <a href="https://github.com/apache/ofbiz-framework/pull/1863">#1863</a></li>
<li>Fixed: createInvoiceItemPayrol crashes on Deduction/Tax amount entry (OFBIZ-13561) in <a href="https://github.com/apache/ofbiz-framework/pull/1865">#1865</a></li>
<li>Fixed: checkContentOperationSecurity crashes when content has a purpose assigned (OFBIZ-13535) in <a href="https://github.com/apache/ofbiz-framework/pull/1867">#1867</a></li>
<li>Fixed: ProductServices group-order, discontinuation, and review regressions (OFBIZ-13537) in <a href="https://github.com/apache/ofbiz-framework/pull/1869">#1869</a></li>
<li>Fixed: quickShipEntireOrder calls undefined errorMessage() instead of error() (OFBIZ-13564) in <a href="https://github.com/apache/ofbiz-framework/pull/1872">#1872</a></li>
<li>Fixed: ContentServices status-transition and content-creation regressions (OFBIZ-13540) in <a href="https://github.com/apache/ofbiz-framework/pull/1873">#1873</a></li>
<li>Fixed: CommunicationEventServices sender/recipient and status regressions (OFBIZ-13542) in <a href="https://github.com/apache/ofbiz-framework/pull/1880">#1880</a></li>
<li>Fixed: CheckoutServices anonymous-checkout party reattachment and createUpdatePerson new-party-id regressions (OFBIZ-13544) in <a href="https://github.com/apache/ofbiz-framework/pull/1882">#1882</a></li>
<li>Fixed: updateBlogEntry checks the wrong field for existing article text (OFBIZ-13545) in <a href="https://github.com/apache/ofbiz-framework/pull/1884">#1884</a></li>
<li>Fixed: updatePartyInvitation crashes when auto-deriving the invitee name (OFBIZ-13553) in <a href="https://github.com/apache/ofbiz-framework/pull/1886">#1886</a></li>
<li>Fixed: createUpdateCustomerAndShippingAddress leaves shipToAddressCtx.partyId stale after a new party is created (OFBIZ-13565) in <a href="https://github.com/apache/ofbiz-framework/pull/1890">#1890</a></li>
<li>Fixed: TaxAuthorityServices tax-ID validation and update regressions (OFBIZ-13555) in <a href="https://github.com/apache/ofbiz-framework/pull/1888">#1888</a></li>
<li>Fixed: voidPayment throws on a non-invoice payment application (OFBIZ-13560) in <a href="https://github.com/apache/ofbiz-framework/pull/1894">#1894</a></li>
<li>Fixed: lookupParty crashes on empty search criteria (OFBIZ-13556) in <a href="https://github.com/apache/ofbiz-framework/pull/1892">#1892</a></li>
<li>Fixed: DataServices content-upload and data-resource regressions (OFBIZ-13562) in <a href="https://github.com/apache/ofbiz-framework/pull/1898">#1898</a></li>
<li>Fixed: duplicateCategoryEntities throws GroovyCastException (OFBIZ-13563) in <a href="https://github.com/apache/ofbiz-framework/pull/1901">#1901</a></li>
<li>Fixed: createQuoteFromCart duplicates QuoteAdjustment records (OFBIZ-13525) in <a href="https://github.com/apache/ofbiz-framework/pull/1904">#1904</a></li>
<li>Fixed: Quote service permission checks don't match original design (OFBIZ-13526) in <a href="https://github.com/apache/ofbiz-framework/pull/1906">#1906</a></li>
<li>Fixed: productPriceGenericPermission ignores its own sub-check result (OFBIZ-13538) in <a href="https://github.com/apache/ofbiz-framework/pull/1908">#1908</a></li>
<li>Fixed: Party permission-check helper methods use incorrect logic (OFBIZ-13541) in <a href="https://github.com/apache/ofbiz-framework/pull/1911">#1911</a></li>
<li>Fixed: straightLineDepreciation uses wrong field for elapsed years (OFBIZ-13524) in <a href="https://github.com/apache/ofbiz-framework/pull/1913">#1913</a></li>
<li>Fixed: findCustomTimePeriods thruDate boundary and exclude flag (OFBIZ-13527) in <a href="https://github.com/apache/ofbiz-framework/pull/1915">#1915</a></li>
<li>Fixed: getFXConversion fails instead of defaulting to 1 when no rate configured (OFBIZ-13531) in <a href="https://github.com/apache/ofbiz-framework/pull/1917">#1917</a></li>
<li>Fixed: hasValidStateProvince returns String but declared Map (OFBIZ-13533) in <a href="https://github.com/apache/ofbiz-framework/pull/1919">#1919</a></li>
<li>Fixed: PartyServices contact-lookup and role-hierarchy regressions (OFBIZ-13534) in <a href="https://github.com/apache/ofbiz-framework/pull/1922">#1922</a></li>
<li>Fixed: Correct portlet sequence drag and drop boundaries and calculation (OFBIZ-13528) in <a href="https://github.com/apache/ofbiz-framework/pull/1924">#1924</a></li>
<li>Fixed: convertUom custom parameters and rounding regressions (OFBIZ-13530) in <a href="https://github.com/apache/ofbiz-framework/pull/1932">#1932</a></li>
<li>Fixed: filterRateAmountList sequential filtering and fallback behavior (OFBIZ-13543) in <a href="https://github.com/apache/ofbiz-framework/pull/1934">#1934</a></li>
<li>Fixed: createMissingCategoryAndProductAltUrls default parameter handling (OFBIZ-13539) in <a href="https://github.com/apache/ofbiz-framework/pull/1936">#1936</a></li>
<li>Fixed: createLead person creation guard for company-only leads (OFBIZ-13549) in <a href="https://github.com/apache/ofbiz-framework/pull/1938">#1938</a></li>
<li>Fixed: getProductRouting virtual product variant date filtering (OFBIZ-13550) in <a href="https://github.com/apache/ofbiz-framework/pull/1940">#1940</a></li>
<li>Fixed: getSystemInfoStatus open communication events condition (OFBIZ-13551) in <a href="https://github.com/apache/ofbiz-framework/pull/1942">#1942</a></li>
<li>Fixed: sendOrderDeliveryScheduleNotification malformed from address (OFBIZ-13552) in <a href="https://github.com/apache/ofbiz-framework/pull/1944">#1944</a></li>
<li>Fixed: applyFeatureToProductFromTypeAndCode sequenceNum mutation (OFBIZ-13554) in <a href="https://github.com/apache/ofbiz-framework/pull/1947">#1947</a></li>
<li>Fixed: updateBudgetStatus silent success on invalid status transitions (OFBIZ-13558) in <a href="https://github.com/apache/ofbiz-framework/pull/1949">#1949</a></li>
<li>Fixed: copyAgreement silent success when agreement does not exist (OFBIZ-13559) in <a href="https://github.com/apache/ofbiz-framework/pull/1951">#1951</a></li>
<li>Fixed: createFacilityLocation locationSeqId collision fallback regression (OFBIZ-13557) in <a href="https://github.com/apache/ofbiz-framework/pull/1953">#1953</a></li>
<li>Fixed: PortalPageMethods portlet attribute saving and page copying regressions (OFBIZ-13568) in <a href="https://github.com/apache/ofbiz-framework/pull/1955">#1955</a></li>
<li>Fixed: Mini-lang to Groovy regressions in InvoiceServicesScript (OFBIZ-13569) in <a href="https://github.com/apache/ofbiz-framework/pull/1957">#1957</a></li>
<li>Fixed: Mini-lang to Groovy regressions in CommonServicesScript (OFBIZ-13570) in <a href="https://github.com/apache/ofbiz-framework/pull/1959">#1959</a></li>
<li>Fixed: error in creating category image content. (OFBIZ-12011) in <a href="https://github.com/apache/ofbiz-framework/pull/1695">#1695</a></li>
<li>Fixed: Mini-lang to Groovy regressions in QuoteServicesScript (OFBIZ-13571) in <a href="https://github.com/apache/ofbiz-framework/pull/1961">#1961</a></li>
<li>Fixed: MiniLang to Groovy conversion issues in ContactMechServicesScript (OFBIZ-13572) in <a href="https://github.com/apache/ofbiz-framework/pull/1964">#1964</a></li>
<li>Fixed: Mini-lang to Groovy regressions in InvoiceServicesScript (OFBIZ-13575) in <a href="https://github.com/apache/ofbiz-framework/pull/1970">#1970</a></li>
<li>Fixed: updateBudgetStatus invalid-transition error omits the requested status (OFBIZ-13558) in <a href="https://github.com/apache/ofbiz-framework/pull/1972">#1972</a></li>
<li>Fixed: Mini-lang to Groovy regressions in ProductStoreServices (OFBIZ-13576) in <a href="https://github.com/apache/ofbiz-framework/pull/1975">#1975</a></li>
<li>Fixed: Mini-lang to Groovy regressions in InventoryIssueServices (OFBIZ-13577) in <a href="https://github.com/apache/ofbiz-framework/pull/1977">#1977</a></li>
<li>Fixed: Mini-lang to Groovy regressions in ShoppingListServicesScript (OFBIZ-13579) in <a href="https://github.com/apache/ofbiz-framework/pull/1979">#1979</a></li>
<li>Fixed: Mini-lang to Groovy regressions in PortalPageServices (OFBIZ-13580) in <a href="https://github.com/apache/ofbiz-framework/pull/1981">#1981</a></li>
<li>Fixed: Mini-lang to Groovy regressions in EmailServicesScript (OFBIZ-13581) in <a href="https://github.com/apache/ofbiz-framework/pull/1983">#1983</a></li>
<li>Fixed: Timing-dependent deadlock-retry test in service engine (OFBIZ-13585) in <a href="https://github.com/apache/ofbiz-framework/pull/1989">#1989</a></li>
<li>Fixed: updateContentPermission grants UPDATE via ancestor ownership without an ownership change request (OFBIZ-13592) in <a href="https://github.com/apache/ofbiz-framework/pull/1997">#1997</a></li>
<li>Fixed: Six regressions in the minilang-to-Groovy conversion of PaymentServices.groovy (OFBIZ-13596) in <a href="https://github.com/apache/ofbiz-framework/pull/1999">#1999</a></li>
<li>Fixed: createEmailAddress and updateEmailAddress accept blank email addresses (OFBIZ-13582) in <a href="https://github.com/apache/ofbiz-framework/pull/2002">#2002</a></li>
<li>Fixed: Two regressions in the minilang-to-Groovy conversion of CommonServicesScript.groovy (OFBIZ-13583) in <a href="https://github.com/apache/ofbiz-framework/pull/2004">#2004</a></li>
<li>Fixed: createUpdateBillingAddressAndPaymentMethod throws NPE for anonymous checkout (OFBIZ-13584) in <a href="https://github.com/apache/ofbiz-framework/pull/2007">#2007</a></li>
<li>Fixed: updatePartyRate does not persist expiry of the previous rate (OFBIZ-13590) in <a href="https://github.com/apache/ofbiz-framework/pull/2013">#2013</a></li>
<li>Fixed: Two regressions in the minilang-to-Groovy conversion of ContentServicesScript.groovy (OFBIZ-13589) in <a href="https://github.com/apache/ofbiz-framework/pull/2009">#2009</a></li>
<li>Fixed: setCommEventRoleToRead and setCommunicationEventRoleStatus throw NPE when no role exists (OFBIZ-13591) in <a href="https://github.com/apache/ofbiz-framework/pull/2016">#2016</a></li>
<li>Fixed: Four regressions in the minilang-to-Groovy conversion of PartyServicesScript.groovy (OFBIZ-13593) in <a href="https://github.com/apache/ofbiz-framework/pull/2019">#2019</a></li>
<li>Fixed: getLastSystemInfoNote off-by-one on note 2 and note 3 thresholds (OFBIZ-13586) in <a href="https://github.com/apache/ofbiz-framework/pull/2021">#2021</a></li>
<li>Fixed: checkInvoiceStatusInProgress loses its specific error messages (OFBIZ-13587) in <a href="https://github.com/apache/ofbiz-framework/pull/2023">#2023</a></li>
<li>Fixed: setPortalPortletAttributes doesn't clean up blank attribute values (OFBIZ-13588) in <a href="https://github.com/apache/ofbiz-framework/pull/2027">#2027</a></li>
<li>Fixed: updatePartyInvitation silently no-ops on a nonexistent record (OFBIZ-13594) in <a href="https://github.com/apache/ofbiz-framework/pull/2030">#2030</a></li>
<li>Fixed: accAndDecPartyInvitationPermissionCheck shows the wrong error message on an identity mismatch (OFBIZ-13595) in <a href="https://github.com/apache/ofbiz-framework/pull/2032">#2032</a></li>
<li>Fixed: Two regressions in saveExtFileDataResource's handling of a missing DataResource (OFBIZ-13597) in <a href="https://github.com/apache/ofbiz-framework/pull/2034">#2034</a></li>
<li>Fixed: Three regressions in the minilang-to-Groovy conversion of PaymentServices.groovy (OFBIZ-13600) in <a href="https://github.com/apache/ofbiz-framework/pull/2052">#2052</a></li>
<li>Fixed: Multiple regressions and one pre-existing bug in WorkEffortServicesScript.groovy (OFBIZ-13601) in <a href="https://github.com/apache/ofbiz-framework/pull/2054">#2054</a></li>
<li>Fixed: visualThemePermissionCheck() checks a permission ID that doesn't exist (OFBIZ-13602) in <a href="https://github.com/apache/ofbiz-framework/pull/2057">#2057</a></li>
<li>Fixed: createFuturePeriod() crashes with NullPointerException when CustomTimePeriod SystemProperty config is missing (OFBIZ-13604) in <a href="https://github.com/apache/ofbiz-framework/pull/2061">#2061</a></li>
<li>Fixed: PBKDF2 password verification always fails in HashCrypt.doComparePbkdf2 (OFBIZ-13609) in <a href="https://github.com/apache/ofbiz-framework/pull/2104">#2104</a></li>
<li>Fixed: Two regressions in the minilang-to-Groovy conversion of CommonServicesScript.groovy (OFBIZ-13610) in <a href="https://github.com/apache/ofbiz-framework/pull/2106">#2106</a></li>
<li>Fixed: Three regressions in the minilang-to-Groovy conversion of PortalPageServices.groovy (OFBIZ-13611) in <a href="https://github.com/apache/ofbiz-framework/pull/2108">#2108</a></li>
<li>Fixed: HashCrypt compares non-PBKDF2 password hashes with variable-time String.equals() (OFBIZ-13615) in <a href="https://github.com/apache/ofbiz-framework/pull/2110">#2110</a></li>
<li>Fixed: Regression in the minilang-to-Groovy conversion of ProductStoreServices.groovy (OFBIZ-13613) in <a href="https://github.com/apache/ofbiz-framework/pull/2114">#2114</a></li>
<li>Fixed: Regression in the minilang-to-Groovy conversion of ContactMechServicesScript.groovy (OFBIZ-13612) in <a href="https://github.com/apache/ofbiz-framework/pull/2112">#2112</a></li>
<li>Fixed: Regression in the minilang-to-Groovy conversion of InventoryIssueServices.groovy (OFBIZ-13614) in <a href="https://github.com/apache/ofbiz-framework/pull/2116">#2116</a></li>
<li>Fixed: Two regressions in the minilang-to-Groovy conversion of PriceServicesScript.groovy (OFBIZ-13616) in <a href="https://github.com/apache/ofbiz-framework/pull/2118">#2118</a></li>
<li>Fixed: DELETE statements built from EntityCondition inlined values as SQL literals instead of binding them (OFBIZ-13620) in <a href="https://github.com/apache/ofbiz-framework/pull/2120">#2120</a></li>
<li>Fixed: Three regressions in the minilang-to-Groovy conversion of CostServices.groovy (OFBIZ-13617) in <a href="https://github.com/apache/ofbiz-framework/pull/2122">#2122</a></li>
<li>Fixed: Two regressions in the minilang-to-Groovy conversion of ProductionRunServicesScript.groovy (OFBIZ-13618) in <a href="https://github.com/apache/ofbiz-framework/pull/2124">#2124</a></li>
<li>Fixed: Regressions in the minilang-to-Groovy conversion of OrderReturnServicesScript.groovy (OFBIZ-13619) in <a href="https://github.com/apache/ofbiz-framework/pull/2126">#2126</a></li>
<li>Backport pr 2062 - Fix path interpretation for windows machines (#2062) in <a href="https://github.com/apache/ofbiz-framework/pull/2127">#2127</a></li>
<li>Fixed: Six regressions in the minilang-to-Groovy conversion of ProductServicesScript.groovy (OFBIZ-13621) in <a href="https://github.com/apache/ofbiz-framework/pull/2144">#2144</a></li>
<li>Fixed: Two regressions in the minilang-to-Groovy conversion of ContentServicesScript.groovy (OFBIZ-13622) in <a href="https://github.com/apache/ofbiz-framework/pull/2146">#2146</a></li>
<li>Fixed: Two missing null-guards in CommunicationEventServicesScript.groovy (OFBIZ-13623) in <a href="https://github.com/apache/ofbiz-framework/pull/2152">#2152</a></li>
<li>Fixed: getBlogEntry() only returns templateDataResourceId for posts with an image (OFBIZ-13624) in <a href="https://github.com/apache/ofbiz-framework/pull/2154">#2154</a></li>
<li>Fixed: uploadProductImages() silently drops every image after the first populated slot (OFBIZ-13625) in <a href="https://github.com/apache/ofbiz-framework/pull/2156">#2156</a></li>
<li>Fixed: viewContentPermission() never propagates roleEntity/roleEntityField (OFBIZ-13626) in <a href="https://github.com/apache/ofbiz-framework/pull/2158">#2158</a></li>
<li>Fixed: followPartyRelationshipsInline() silently returns zero relationships instead of unrestricted (OFBIZ-13627) in <a href="https://github.com/apache/ofbiz-framework/pull/2160">#2160</a></li>
<li>Backport: Fix webtools ProgramExport, Cache Maintenance and Thread List; normalise the ProgramExport pattern list (#1845) in <a href="https://github.com/apache/ofbiz-framework/pull/2175">#2175</a></li>
<li>Fixed: Do not evaluate the expand/collapse link of tree widgets as an expression (OFBIZ-13639) in <a href="https://github.com/apache/ofbiz-framework/pull/2192">#2192</a></li>
<li>Fixed: Do not evaluate a request parameter as an expression in the return-user-message from-field (OFBIZ-13640) in <a href="https://github.com/apache/ofbiz-framework/pull/2194">#2194</a></li>
<li>Fixed: Do not evaluate the Ajax update area string of forms twice as an expression (OFBIZ-13641) in <a href="https://github.com/apache/ofbiz-framework/pull/2196">#2196</a></li>
<li>Fixed: Do not evaluate the values of the callback token of forms as expressions (OFBIZ-13642) in <a href="https://github.com/apache/ofbiz-framework/pull/2199">#2199</a></li>
<li>Fixed: Do not evaluate the area id and target of the Ajax update areas of forms twice as an expression (OFBIZ-13643) in <a href="https://github.com/apache/ofbiz-framework/pull/2201">#2201</a></li>
<li>Fixed: Keep the redirection of a path alias to its aliasTo on the web site (OFBIZ-13645) in <a href="https://github.com/apache/ofbiz-framework/pull/2205">#2205</a></li>
<li>Fixed: Enforce the allowed types of the XStream deserialization in UtilXml (OFBIZ-13647) in <a href="https://github.com/apache/ofbiz-framework/pull/2209">#2209</a></li>
<li>Fixed: Escape the backslash and the braces in the macro strings of the menu, tree and form renderers (OFBIZ-13649) in <a href="https://github.com/apache/ofbiz-framework/pull/2220">#2220</a></li>
<li>Fixed: Reject untrusted certificates in MultiTrustManager when the all-trusted properties are missing or empty (OFBIZ-13654) in <a href="https://github.com/apache/ofbiz-framework/pull/2230">#2230</a></li>
<li>Fixed: Navigate Accounts fails with a NullPointerException when no glAccountId is given (OFBIZ-13651) in <a href="https://github.com/apache/ofbiz-framework/pull/2227">#2227</a></li>
<li>Fixed: Call to non-existing method in production run PDF reports (OFBIZ-13504) [release24.09] in <a href="https://github.com/apache/ofbiz-framework/pull/1828">#1828</a></li>
<li>Fixed: Do not request the non-existent jquery-validation messages_en.js on every page (OFBIZ-13652) in <a href="https://github.com/apache/ofbiz-framework/pull/2228">#2228</a></li>
<li>Fixed: Remove the unused viewprofile request of the accounting webapp, which fails with an error page (OFBIZ-13653) in <a href="https://github.com/apache/ofbiz-framework/pull/2229">#2229</a></li>
<li>Fixed: The phone extension entered when creating an SFA account or lead is silently dropped (OFBIZ-13657) in <a href="https://github.com/apache/ofbiz-framework/pull/2234">#2234</a></li>
<li>Fixed: Converted Groovy scripts read configuration with UtilProperties, ignoring SystemProperty overrides the original mini-lang honoured (OFBIZ-13655) in <a href="https://github.com/apache/ofbiz-framework/pull/2236">#2236</a></li>
<li>Fixed: Regressions in CategoryServicesScript.groovy introduced by the mini-lang conversion (OFBIZ-13659) in <a href="https://github.com/apache/ofbiz-framework/pull/2242">#2242</a></li>
<li>Fixed: Regressions in ShipmentServices.groovy introduced by the mini-lang conversion (OFBIZ-13661) in <a href="https://github.com/apache/ofbiz-framework/pull/2246">#2246</a></li>
<li>Fixed: Regressions in QuoteServicesScript.groovy introduced by the mini-lang conversion (OFBIZ-13660) in <a href="https://github.com/apache/ofbiz-framework/pull/2244">#2244</a></li>
<li>Fixed: Regressions in ShoppingListServicesScript.groovy introduced by the mini-lang conversion (OFBIZ-13662) in <a href="https://github.com/apache/ofbiz-framework/pull/2250">#2250</a></li>
<li>Fixed: getOrderedSummaryInformation ignores explicit fromDate and thruDate (OFBIZ-13664) in <a href="https://github.com/apache/ofbiz-framework/pull/2254">#2254</a></li>
<li>Fixed: Promo conditions PPIP_ORST_YEAR and PPIP_ORST_LAST_YEAR read the order sub-total from the wrong map (OFBIZ-13667) in <a href="https://github.com/apache/ofbiz-framework/pull/2256">#2256</a></li>
<li>Fixed: Anonymous ecommerce checkout accepts an arbitrary partyId and lets it be used to overwrite another party's name and attach caller-supplied contact and payment data to that party (OFBIZ-13669) in <a href="https://github.com/apache/ofbiz-framework/pull/2264">#2264</a></li>
<li>Fixed: Payment method create services accept a caller-supplied paymentMethodId without verifying it belongs to the authorized party (OFBIZ-13671) in <a href="https://github.com/apache/ofbiz-framework/pull/2269">#2269</a></li>
<li>Fixed: updateContactList does not enforce marketing UPDATE permission (OFBIZ-13672) in <a href="https://github.com/apache/ofbiz-framework/pull/2273">#2273</a></li>
<li>Fixed: Use of externally-controlled format string in Debug logging utility (backport) in <a href="https://github.com/apache/ofbiz-framework/pull/2280">#2280</a></li>
<li>Fixed: URL.getFile() used as a filesystem path breaks OFBiz when the install directory contains a space (OFBIZ-13687) in <a href="https://github.com/apache/ofbiz-framework/pull/2317">#2317</a></li>
<li>Fixed: Allow the content upload directory in the default LOCAL_FILE allow-list (OFBIZ-13689) in <a href="https://github.com/apache/ofbiz-framework/pull/2327">#2327</a></li>
<li>Fixed: PDF survey services fail to store answers and throw a NullPointerException when no PDF is given (OFBIZ-13688) in <a href="https://github.com/apache/ofbiz-framework/pull/2329">#2329</a></li>
<li>Fixed: Preserve Webtools theme when editing entities (OFBIZ-12072) in <a href="https://github.com/apache/ofbiz-framework/pull/2261">#2261</a></li>
<li>Fixed: Survey PDF services read any server file named in the pdfFileNameIn parameter (OFBIZ-13690) in <a href="https://github.com/apache/ofbiz-framework/pull/2332">#2332</a></li>
<li>Fixed: Survey PDF services throw a NullPointerException when contentId matches no Content (OFBIZ-13692) in <a href="https://github.com/apache/ofbiz-framework/pull/2342">#2342</a></li>
<li>Fixed: cleanAll deletes the version-controlled package-lock.json files (OFBIZ-13695) in <a href="https://github.com/apache/ofbiz-framework/pull/2344">#2344</a></li>
<li>Fixed: PDF files with a ZUGFeRD invoice are always rejected on upload in <a href="https://github.com/apache/ofbiz-framework/pull/2350">#2350</a></li>
<li>Fixed: Encode the source URL of menu, tree and form images in <a href="https://github.com/apache/ofbiz-framework/pull/2366">#2366</a></li>
<li>Fixed: CodeQL workflow fails while printing debug logs in <a href="https://github.com/apache/ofbiz-framework/pull/2370">#2370</a></li>
<li>Fixed: Encode the sort links of list forms and check every URL parameter in ControlFilter in <a href="https://github.com/apache/ofbiz-framework/pull/2368">#2368</a></li>
<li>Fixed: init-gradle-wrapper installs a wrapper jar that does not match the published checksum (OFBIZ-13699) in <a href="https://github.com/apache/ofbiz-framework/pull/2375">#2375</a></li>
<li>Fixed: Check ownership of the order, payment method and shipping address used by shopping lists (OFBIZ-13701) in <a href="https://github.com/apache/ofbiz-framework/pull/2385">#2385</a></li>
<li>Fixed: Shopping list permission services check the wrong permission action (OFBIZ-13702) in <a href="https://github.com/apache/ofbiz-framework/pull/2389">#2389</a></li>
<li>Fixed: First Data config form non-functional and Java integration quality issues (OFBIZ-11837) in <a href="https://github.com/apache/ofbiz-plugins/pull/313">#313</a></li>
<li>Added: Demo copyMe survey question for gift card purchase (OFBIZ-13464) in <a href="https://github.com/apache/ofbiz-plugins/pull/343">#343</a></li>
<li>Fixed: myportal login view-map missing auth="false" (OFBIZ-13511) in <a href="https://github.com/apache/ofbiz-plugins/pull/388">#388</a></li>
<li>Fixed: ProjectServices regressions in date combining and project scheduling (OFBIZ-13529) in <a href="https://github.com/apache/ofbiz-plugins/pull/397">#397</a></li>
<li>Fixed: FactServices child invoice item filtering and order lookup regressions (OFBIZ-13536) in <a href="https://github.com/apache/ofbiz-plugins/pull/399">#399</a></li>
<li>Fixed: Multiple regressions in the minilang-to-Groovy conversion of ProjectServicesScript.groovy (OFBIZ-13607) in <a href="https://github.com/apache/ofbiz-plugins/pull/416">#416</a></li>
<li>Improved: Generate a longer password for the users created by the LinkedIn and GitHub login of the passport plugin (OFBIZ-13658) in <a href="https://github.com/apache/ofbiz-plugins/pull/428">#428</a></li>
<li>Fixed: Vulnerable source-map-js in example/vite-react-app flagged by Dependabot security alert in <a href="https://github.com/apache/ofbiz-plugins/pull/433">#433</a></li>
<li>[release24.09] Fixed: Administrator profile on ecommerce shows FTL error (OFBIZ-13475) in <a href="https://github.com/apache/ofbiz-plugins/pull/434">#434</a></li>
<li>Fixed: Plugin demo DataResources of type LOCAL_FILE are rejected by the LOCAL_FILE allow-list (OFBIZ-13691) in <a href="https://github.com/apache/ofbiz-plugins/pull/443">#443</a></li>
<li>Fixed: A database error while indexing deletes the product or content from the Lucene index (OFBIZ-13698) in <a href="https://github.com/apache/ofbiz-plugins/pull/450">#450</a></li>
<li>Fixed: A database error while indexing adds an incomplete product or content document to the Lucene index (OFBIZ-13700) in <a href="https://github.com/apache/ofbiz-plugins/pull/452">#452</a></li>
</ul>
<h2>Improvements</h2>
<ul>
<li>Improved: Replace commons-imaging with metadata-extractor + TwelveMonkeys ImageIO TIFF plugin (OFBIZ-13507) in <a href="https://github.com/apache/ofbiz-framework/pull/1821">#1821</a></li>
<li>Improved: Allow testIntegration to run with --portoffset for concurrent test runs (OFBIZ-13518) in <a href="https://github.com/apache/ofbiz-framework/pull/1843">#1843</a></li>
<li>Improved: javadoc no longer depends on docs.groovy-lang.org at build time (OFBIZ-13566) in <a href="https://github.com/apache/ofbiz-framework/pull/1896">#1896</a></li>
<li>Improved: Resolve component: locations with ComponentLocationResolver in CommonEvents.openSourceFile and make ComponentConfig.getComponentConfig(String) lookup-only (OFBIZ-13629) in <a href="https://github.com/apache/ofbiz-framework/pull/2165">#2165</a></li>
<li>Improved: Remove the unused FoPrintServerEvents (OFBIZ-13631) in <a href="https://github.com/apache/ofbiz-framework/pull/2170">#2170</a></li>
<li>Improved: Build Java explicitly with Gradle in the CodeQL workflow in <a href="https://github.com/apache/ofbiz-framework/pull/2174">#2174</a></li>
<li>Improved: Return the validated file from SecurityUtil.checkOfbizFileAllowList and use it for the file access (OFBIZ-13632) in <a href="https://github.com/apache/ofbiz-framework/pull/2172">#2172</a></li>
<li>Improved: Always protect FileUtil.unzipFileToFolder against zip slip (OFBIZ-13633) in <a href="https://github.com/apache/ofbiz-framework/pull/2181">#2181</a></li>
<li>Improved: Remove the accept-all hostname verifier option from SSLUtil and HttpClient (OFBIZ-13634) in <a href="https://github.com/apache/ofbiz-framework/pull/2183">#2183</a></li>
<li>Improved: Remove the unused UtilHttp.getAllowAllHttpClient (OFBIZ-13635) in <a href="https://github.com/apache/ofbiz-framework/pull/2185">#2185</a></li>
<li>Improved: Use SecureRandom to generate promo codes, captcha codes and generated IDs (OFBIZ-13636) in <a href="https://github.com/apache/ofbiz-framework/pull/2187">#2187</a></li>
<li>Improved: SafeObjectInputStream allowList matches class names as substrings and ships with unescaped dots (OFBIZ-13637) in <a href="https://github.com/apache/ofbiz-framework/pull/2189">#2189</a></li>
<li>Improved: Keep the area id and target of the update areas of forms as expressions (OFBIZ-13644) in <a href="https://github.com/apache/ofbiz-framework/pull/2203">#2203</a></li>
<li>Improved: Grant the packages write permission of the docker image workflow to its job (OFBIZ-13646) in <a href="https://github.com/apache/ofbiz-framework/pull/2207">#2207</a></li>
<li>Improved: Strip the control characters from the Location header of the redirects of RequestHandler and of the SEO forward filters (OFBIZ-13650) in <a href="https://github.com/apache/ofbiz-framework/pull/2222">#2222</a></li>
<li>Improved: GL-posting and order-completion invoicing commit-ECAs lack run-as-user="system" (OFBIZ-13673) in <a href="https://github.com/apache/ofbiz-framework/pull/2279">#2279</a></li>
<li>Improved: Bump github/codeql-action/init and analyze from 4.38.2 to 4.38.3 in <a href="https://github.com/apache/ofbiz-framework/pull/2304">#2304</a></li>
<li>Improved: Label pull requests titled "Bump ..." as dependencies so that the release notes leave them out (OFBIZ-13696) in <a href="https://github.com/apache/ofbiz-framework/pull/2348">#2348</a></li>
<li>Improved: Set the release_branch label of pull requests automatically (OFBIZ-13696) in <a href="https://github.com/apache/ofbiz-framework/pull/2352">#2352</a></li>
<li>Improved: Group the security fixes and security hardening in the release notes (OFBIZ-13696) in <a href="https://github.com/apache/ofbiz-framework/pull/2387">#2387</a></li>
</ul>
<h2>New features</h2>
<ul>
<li>Implemented: Generate release notes with GitHub and label pull requests by type from their title prefix (OFBIZ-13696) in <a href="https://github.com/apache/ofbiz-framework/pull/2346">#2346</a></li>
</ul>
<h2>Other changes</h2>
<ul>
<li>OFBIZ-13402 Move test sources from src/main/groovy to src/test/groovy (release24.09) in <a href="https://github.com/apache/ofbiz-framework/pull/1353">#1353</a></li>
<li>Fixed: Add permission checks to WebAnalyticsConfig services in <a href="https://github.com/apache/ofbiz-framework/pull/2308">#2308</a></li>
</ul>

</div>
</div>
</div>
</div>
</section>
</section>
