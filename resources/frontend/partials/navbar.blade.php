<div id="top" data-animation="default" data-collapse="medium" data-duration="0" data-easing="ease" data-easing2="ease"
    role="banner" class="navbar w-nav">
    <div class="padding-global">
        <div class="container-large">
            <div class="w-layout-grid nav-component-grid"><a href="{{ route('home') }}"
                    id="w-node-_016c42d0-27ae-d0d7-3914-01d3df01ab5e-df01ab5a" aria-current="page"
                    class="brand-link w-inline-block w--current"><img
                        src="{{ asset('front/assets') }}/img/676ff50eabd8506e8febe86c_graphic_element.svg"
                        loading="lazy" alt="Logo - Glamory Webflow Template" class="logo"></a>
                <div class="nav-menu-wrapper">
                    <nav role="navigation" id="w-node-_016c42d0-27ae-d0d7-3914-01d3df01ab64-df01ab5a"
                        class="nav-menu w-nav-menu">
                        <div class="background-navbar"></div>
                        <div class="nav-menu-content">
                            <div class="nav-link-overflow"><a data-w-id="016c42d0-27ae-d0d7-3914-01d3df01ab66"
                                    href="{{ route('home') }}" aria-current="page"
                                    class="nav-link w-inline-block w--current">
                                    <div class="nav-text">Home</div>
                                    <div class="nav-text is-hover">Home</div>
                                </a></div>
                            <div class="nav-link-overflow"><a data-w-id="016c42d0-27ae-d0d7-3914-01d3df01ab6b"
                                    href="{{ route('about') }}" class="nav-link w-inline-block">
                                    <div class="nav-text">About</div>
                                    <div class="nav-text is-hover">About</div>
                                </a></div>
                            <div class="nav-link-overflow"><a data-w-id="016c42d0-27ae-d0d7-3914-01d3df01ab70"
                                    href="{{ route('shop') }}" class="nav-link w-inline-block">
                                    <div class="nav-text">Shop</div>
                                    <div class="nav-text is-hover">Shop</div>
                                </a></div>
                            <div class="nav-link-overflow"><a data-w-id="016c42d0-27ae-d0d7-3914-01d3df01ab75"
                                    href="{{ route('contact') }}" class="nav-link w-inline-block">
                                    <div class="nav-text">Contact</div>
                                    <div class="nav-text is-hover">Contact</div>
                                </a></div>
                        </div>
                    </nav>
                    <div data-open-product="" data-wf-cart-type="modal"
                        data-wf-cart-query="query Dynamo2 {
                                    database {
                                        id
                                        commerceOrder {
                                        comment
                                        extraItems {
                                            name
                                            pluginId
                                            pluginName
                                            price {
                                            value
                                            unit
                                            decimalValue
                                            string
                                            }
                                        }
                                        id
                                        startedOn
                                        statusFlags {
                                            hasDownloads
                                            hasSubscription
                                            isFreeOrder
                                            requiresShipping
                                        }
                                        subtotal {
                                            value
                                            unit
                                            decimalValue
                                            string
                                        }
                                        total {
                                            value
                                            unit
                                            decimalValue
                                            string
                                        }
                                        updatedOn
                                        userItems {
                                            count
                                            id
                                            price {
                                            value
                                            unit
                                            decimalValue
                                            string
                                            }
                                            product {
                                            id
                                            cmsLocaleId
                                            f__draft_0ht
                                            f__archived_0ht
                                            f_ec_product_type_2dr10dr {
                                                id
                                                name
                                            }
                                            f_name_
                                            f_sku_properties_3dr {
                                                id
                                                name
                                                enum {
                                                id
                                                name
                                                slug
                                                }
                                            }
                                            }
                                            rowTotal {
                                            value
                                            unit
                                            decimalValue
                                            string
                                            }
                                            sku {
                                            cmsLocaleId
                                            f__draft_0ht
                                            f__archived_0ht
                                            f_main_image_4dr {
                                                url
                                                file {
                                                size
                                                origFileName
                                                createdOn
                                                updatedOn
                                                mimeType
                                                width
                                                height
                                                variants {
                                                    origFileName
                                                    quality
                                                    height
                                                    width
                                                    s3Url
                                                    error
                                                    size
                                                }
                                                }
                                                alt
                                            }
                                            f_sku_values_3dr {
                                                property {
                                                id
                                                }
                                                value {
                                                id
                                                }
                                            }
                                            id
                                            }
                                            subscriptionFrequency
                                            subscriptionInterval
                                            subscriptionTrial
                                        }
                                        userItemsCount
                                        }
                                    }
                                    site {
                                        id
                                        commerce {
                                        businessAddress {
                                            country
                                        }
                                        defaultCountry
                                        defaultCurrency
                                        quickCheckoutEnabled
                                        }
                                    }
                                    }"
                        data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper cart"
                        data-node-type="commerce-cart-wrapper">
                        <a class="w-commerce-commercecartopenlink cart-button w-inline-block" role="button"
                            aria-haspopup="dialog" aria-label="Open cart containing 1 items"
                            data-node-type="commerce-cart-open-link" href="#"><svg
                                class="w-commerce-commercecartopenlinkicon cart-icon" width="17px" height="17px"
                                viewBox="0 0 17 17">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path
                                        d="M2.60592789,2 L0,2 L0,0 L4.39407211,0 L4.84288393,4 L16,4 L16,9.93844589 L3.76940945,12.3694378 L2.60592789,2 Z M15.5,17 C14.6715729,17 14,16.3284271 14,15.5 C14,14.6715729 14.6715729,14 15.5,14 C16.3284271,14 17,14.6715729 17,15.5 C17,16.3284271 16.3284271,17 15.5,17 Z M5.5,17 C4.67157288,17 4,16.3284271 4,15.5 C4,14.6715729 4.67157288,14 5.5,14 C6.32842712,14 7,14.6715729 7,15.5 C7,16.3284271 6.32842712,17 5.5,17 Z"
                                        fill="currentColor" fill-rule="nonzero"></path>
                                </g>
                            </svg>
                            <div class="cart-text w-inline-block">Cart</div>
                            <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D"
                                class="w-commerce-commercecartopenlinkcount cart-quantity">1</div>
                        </a>
                        <div style="display:none"
                            class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-modal cart-wrapper"
                            data-node-type="commerce-cart-container-wrapper">
                            <div data-node-type="commerce-cart-container" role="dialog"
                                class="w-commerce-commercecartcontainer cart-container">
                                <div class="w-commerce-commercecartheader cart-header">
                                    <h4 class="w-commerce-commercecartheading cart-title">Your Cart</h4><a
                                        class="w-commerce-commercecartcloselink close-button w-inline-block"
                                        role="button" aria-label="Close cart"
                                        data-node-type="commerce-cart-close-link"><svg width="16px" height="16px"
                                            viewBox="0 0 16 16">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g fill-rule="nonzero" fill="#333333">
                                                    <polygon
                                                        points="6.23223305 8 0.616116524 13.6161165 2.38388348 15.3838835 8 9.76776695 13.6161165 15.3838835 15.3838835 13.6161165 9.76776695 8 15.3838835 2.38388348 13.6161165 0.616116524 8 6.23223305 2.38388348 0.616116524 0.616116524 2.38388348 6.23223305 8">
                                                    </polygon>
                                                </g>
                                            </g>
                                        </svg></a>
                                </div>
                                <div class="w-commerce-commercecartformwrapper cart-form-wrapper">
                                    <form style="" class="w-commerce-commercecartform"
                                        data-node-type="commerce-cart-form">
                                        <script type="text/x-wf-template"
                                                    id="wf-template-2b70a801-ae52-2656-4e64-16390df38a59">%3Cdiv%20class%3D%22w-commerce-commercecartitem%22%3E%3Cimg%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.price%2522%257D%257D%255D%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-2b70a801-ae52-2656-4e64-16390df38a5f%22%3E%253Cli%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-2b70a801-ae52-2656-4e64-16390df38a5f%22%3E%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20role%3D%22button%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%20aria-label%3D%22Remove%20item%20from%20cart%22%3E%3Cdiv%20class%3D%22remove-text%22%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20aria-label%3D%22Update%20quantity%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%257B%2522condition%2522%253A%257B%2522fields%2522%253A%257B%2522product%253Aec-product-type%2522%253A%257B%2522ne%2522%253A%2522e348fd487d0102946c9179d2a94bb613%2522%252C%2522type%2522%253A%2522Option%2522%257D%257D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D%2522%257D%22%20class%3D%22w-commerce-commercecartquantity%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20type%3D%22number%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E</script>
                                        <div class="w-commerce-commercecartlist"
                                            data-wf-collection="database.commerceOrder.userItems"
                                            data-wf-template-id="wf-template-2b70a801-ae52-2656-4e64-16390df38a59">
                                            <div class="w-commerce-commercecartitem"><img
                                                    data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems.0.sku.f_main_image_4dr%22%7D%7D%5D"
                                                    src="{{ asset('front/assets') }}/img/678039fb898f6271020d11c9_Minimalist Cosmetic Product.webp"
                                                    alt="" class="w-commerce-commercecartitemimage">
                                                <div class="w-commerce-commercecartiteminfo">
                                                    <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems.0.product.f_name_%22%7D%7D%5D"
                                                        class="w-commerce-commercecartproductname">Matte
                                                        Lipstick</div>
                                                    <div
                                                        data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems.0.price%22%7D%7D%5D">
                                                        $&nbsp;20.00&nbsp;USD</div>
                                                    <script type="text/x-wf-template"
                                                                id="wf-template-2b70a801-ae52-2656-4e64-16390df38a5f">%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems.0.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems.0.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E</script>
                                                    <ul data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems.0.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems.0.sku.f_sku_values_3dr%22%7D%7D%5D"
                                                        class="w-commerce-commercecartoptionlist"
                                                        data-wf-collection="database.commerceOrder.userItems.0.product.f_sku_properties_3dr"
                                                        data-wf-template-id="wf-template-2b70a801-ae52-2656-4e64-16390df38a5f">
                                                    </ul><a href="https://glamory.webflow.io/#" role="button"
                                                        data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems.0.sku.id%22%7D%7D%5D"
                                                        class="w-inline-block" data-wf-cart-action="remove-item"
                                                        data-commerce-sku-id="67803aa80626446ca9434628"
                                                        aria-label="Remove item from cart">
                                                        <div class="remove-text">Remove</div>
                                                    </a>
                                                </div><input aria-label="Update quantity"
                                                    data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems.0.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems.0.sku.id%22%7D%7D%5D"
                                                    data-wf-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22product%3Aec-product-type%22%3A%7B%22ne%22%3A%22e348fd487d0102946c9179d2a94bb613%22%2C%22type%22%3A%22Option%22%7D%7D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems.0%22%7D"
                                                    class="w-commerce-commercecartquantity" required=""
                                                    pattern="^[0-9]+$" inputmode="numeric" type="number"
                                                    name="quantity" autocomplete="off"
                                                    data-wf-cart-action="update-item-quantity"
                                                    data-commerce-sku-id="67803aa80626446ca9434628" value="1">
                                            </div>
                                        </div>
                                        <div class="w-commerce-commercecartfooter cart-footer">
                                            <div aria-atomic="true" aria-live="polite"
                                                class="w-commerce-commercecartlineitem">
                                                <div>Subtotal</div>
                                                <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D"
                                                    class="w-commerce-commercecartordervalue">
                                                    $&nbsp;20.00&nbsp;USD</div>
                                            </div>
                                            <div>
                                                <div data-node-type="commerce-cart-quick-checkout-actions"
                                                    style="display:none" class="web-payment"><a
                                                        data-node-type="commerce-cart-apple-pay-button" role="button"
                                                        aria-label="Apple Pay" aria-haspopup="dialog"
                                                        style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat"
                                                        class="w-commerce-commercecartapplepaybutton apple-pay"
                                                        tabindex="0">
                                                        <div></div>
                                                    </a><a data-node-type="commerce-cart-quick-checkout-button"
                                                        role="button" tabindex="0" aria-haspopup="dialog"
                                                        style="display:none"
                                                        class="w-commerce-commercecartquickcheckoutbutton"><svg
                                                            class="w-commerce-commercequickcheckoutgoogleicon"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16"
                                                            height="16" viewBox="0 0 16 16">
                                                            <defs>
                                                                <polygon id="google-mark-a"
                                                                    points="0 .329 3.494 .329 3.494 7.649 0 7.649">
                                                                </polygon>
                                                                <polygon id="google-mark-c"
                                                                    points=".894 0 13.169 0 13.169 6.443 .894 6.443">
                                                                </polygon>
                                                            </defs>
                                                            <g fill="none" fill-rule="evenodd">
                                                                <path fill="#4285F4"
                                                                    d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469">
                                                                </path>
                                                                <path fill="#34A853"
                                                                    d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16">
                                                                </path>
                                                                <g transform="translate(0 4)">
                                                                    <mask id="google-mark-b" fill="#fff">
                                                                        <use xlink:href="#google-mark-a"></use>
                                                                    </mask>
                                                                    <path fill="#FBBC04"
                                                                        d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337"
                                                                        mask="url(#google-mark-b)"></path>
                                                                </g>
                                                                <mask id="google-mark-d" fill="#fff">
                                                                    <use xlink:href="#google-mark-c"></use>
                                                                </mask>
                                                                <path fill="#EA4335"
                                                                    d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291"
                                                                    mask="url(#google-mark-d)"></path>
                                                            </g>
                                                        </svg><svg
                                                            class="w-commerce-commercequickcheckoutmicrosofticon"
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" viewBox="0 0 16 16">
                                                            <g fill="none" fill-rule="evenodd">
                                                                <polygon fill="#F05022" points="7 7 1 7 1 1 7 1">
                                                                </polygon>
                                                                <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1">
                                                                </polygon>
                                                                <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9">
                                                                </polygon>
                                                                <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9">
                                                                </polygon>
                                                            </g>
                                                        </svg>
                                                        <div>Pay with browser.</div>
                                                    </a></div><a href="https://glamory.webflow.io/checkout"
                                                    value="Continue to Checkout"
                                                    class="w-commerce-commercecartcheckoutbutton button width-100"
                                                    data-loading-text="Hang Tight..."
                                                    data-node-type="cart-checkout-button">Continue to
                                                    Checkout</a>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="w-commerce-commercecartemptystate" style="display: none;">
                                        <div aria-label="This cart is empty" aria-live="polite">No items found.
                                        </div>
                                    </div>
                                    <div aria-live="assertive" style="display:none"
                                        data-node-type="commerce-cart-error"
                                        class="w-commerce-commercecarterrorstate form-message-error">
                                        <div class="w-cart-error-msg"
                                            data-w-cart-quantity-error="Product is not available in this quantity."
                                            data-w-cart-general-error="Something went wrong when adding this item to the cart."
                                            data-w-cart-checkout-error="Checkout is disabled on this site."
                                            data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue."
                                            data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">
                                            Product is not available in this quantity.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="w-node-_016c42d0-27ae-d0d7-3914-01d3df01ab7a-df01ab5a"
                        data-w-id="016c42d0-27ae-d0d7-3914-01d3df01ab7a" class="menu-button w-nav-button"
                        style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0"
                        aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
                        <div class="menu-block">
                            <div class="menu-button-wrap">
                                <div class="menu-line-item">
                                    <div class="menu-line top"></div>
                                </div>
                                <div class="menu-line-item">
                                    <div class="menu-line bottom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
</div>
