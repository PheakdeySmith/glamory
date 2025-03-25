@extends('frontend.layouts.app')

@section('content')

<main class="main-wrapper">
    <header class="section-product-header">
        <div class="padding-global">
            <div class="container-medium">
                <div class="padding-top-header">
                    <h1 class="heading-style-h3 text-align-center">ShineEssence Hair Oil</h1>
                    <div class="spacer-small"></div>
                    <div class="max-width-medium align-center">
                        <p class="text-size-regular text-align-center">A lightweight oil that tames frizz and boosts
                            shine.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section-product-content">
        <div class="padding-global">
            <div class="container-medium">
                <div class="padding-section-small">
                    <div class="w-layout-grid product-content-grid">
                        <div class="product-component-wrapper"><img loading="lazy"
                                data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                src="{{ asset('front/assets') }}/img/678287ccdb228acdcaff916b_Minimalist Arrangement with Pampas Grass.webp"
                                alt=""
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 1279px) 92vw, 1024px"
                                srcset="https://cdn.prod.website-files.com/676e89008f680432324f133b/678287ccdb228acdcaff916b_Minimalist%20Arrangement%20with%20Pampas%20Grass-p-500.webp 500w, https://cdn.prod.website-files.com/676e89008f680432324f133b/678287ccdb228acdcaff916b_Minimalist%20Arrangement%20with%20Pampas%20Grass-p-800.webp 800w, https://cdn.prod.website-files.com/676e89008f680432324f133b/678287ccdb228acdcaff916b_Minimalist%20Arrangement%20with%20Pampas%20Grass-p-1080.webp 1080w, https://cdn.prod.website-files.com/676e89008f680432324f133b/678287ccdb228acdcaff916b_Minimalist%20Arrangement%20with%20Pampas%20Grass.webp 1437w"
                                class="product-image"><img loading="lazy"
                                src="{{ asset('front/assets') }}/img/678287defa3bee47bbf9471e_Minimalist Green Bottles with Wheat.webp"
                                alt=""
                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 95vw, (max-width: 1279px) 92vw, 1024px"
                                srcset="https://cdn.prod.website-files.com/676e89008f680432324f133b/678287defa3bee47bbf9471e_Minimalist%20Green%20Bottles%20with%20Wheat-p-500.webp 500w, https://cdn.prod.website-files.com/676e89008f680432324f133b/678287defa3bee47bbf9471e_Minimalist%20Green%20Bottles%20with%20Wheat-p-800.webp 800w, https://cdn.prod.website-files.com/676e89008f680432324f133b/678287defa3bee47bbf9471e_Minimalist%20Green%20Bottles%20with%20Wheat-p-1080.webp 1080w, https://cdn.prod.website-files.com/676e89008f680432324f133b/678287defa3bee47bbf9471e_Minimalist%20Green%20Bottles%20with%20Wheat.webp 1437w"
                                class="product-image">
                            <div class="product-content-wrapper">
                                <div class="text-rich-text w-richtext">
                                    <h4>Ingredients:</h4>
                                    <p>‍</p>
                                    <p>Lorem ipsum dolor sit amet, consect lobortis arcu enim urna praesent velit
                                        viverra sit semper
                                        lorem eu cursus.</p>
                                    <p>‍</p>
                                    <ol start="" role="list">
                                        <li>Velit euismod in pellentesque massa placerat volutpat lacus semper</li>
                                        <li>At risus viverra adipiscing at in tellus integer feugiat nisl pretium fusce
                                        </li>
                                        <li>Nisi quis eleifend quam adipiscing vitae aliquet bibendum enim facilisis
                                        </li>
                                        <li>Eget lorem dolor sed viverra ipsum nunc aliquet bibendum felis donec</li>
                                    </ol>
                                    <p>‍</p>
                                    <p>Consect libero id faucibus nisl donec pretium sapien nec sagittis aliquam nunc
                                        lobortis mattis
                                        aliquam purus.</p>
                                </div>
                            </div>
                        </div>
                        <div id="w-node-caf314a9-785d-6796-9249-d63c4208c7fb-324f131c" class="product-sticky">
                            <div class="product-content-wrapper">
                                <div class="price-wrap">
                                    <div class="price-text">$28</div>
                                </div>
                                <div class="spacer-medium"></div>
                                <div class="pricing-benefits-list">
                                    <div class="pricing-benefit-item">
                                        <div class="check-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z">
                                                </path>
                                            </svg></div>
                                        <p class="text-size-regular">Infused with argan oil for silky, smooth hair</p>
                                    </div>
                                    <div class="pricing-benefit-item">
                                        <div class="check-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z">
                                                </path>
                                            </svg></div>
                                        <p class="text-size-regular">Protects hair from heat and environmental damage
                                        </p>
                                    </div>
                                    <div class="pricing-benefit-item">
                                        <div class="check-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z">
                                                </path>
                                            </svg></div>
                                        <p class="text-size-regular">Suitable for all hair types, including curly
                                            textures</p>
                                    </div>
                                </div>
                                <div class="spacer-large"></div>
                                <div class="add-to-cart">
                                    <form data-node-type="commerce-add-to-cart-form"
                                        data-commerce-sku-id="67803980b35eadbbd08b6c18"
                                        data-loading-text="Adding to cart..."
                                        data-commerce-product-id="6780397f05ae9721e547e1b1"
                                        class="w-commerce-commerceaddtocartform"><label
                                            for="quantity-25eec7722ba9a870d5bdf22acd679b65"
                                            class="form-label">Quantity</label><input type="number" pattern="^[0-9]+$"
                                            inputmode="numeric" id="quantity-25eec7722ba9a870d5bdf22acd679b65"
                                            name="commerce-add-to-cart-quantity-input" min="1"
                                            class="w-commerce-commerceaddtocartquantityinput product-quantity"
                                            value="1">
                                        <div class="spacer-small"></div><input type="submit"
                                            data-node-type="commerce-add-to-cart-button"
                                            data-loading-text="Adding to cart..." aria-busy="false"
                                            aria-haspopup="dialog" class="w-commerce-commerceaddtocartbutton button"
                                            value="Add to Cart">
                                        <div class="spacer-tiny"></div><a data-node-type="commerce-buy-now-button"
                                            data-default-text="Buy now" data-subscription-text="Subscribe now"
                                            aria-busy="false" aria-haspopup="false"
                                            class="w-commerce-commercebuynowbutton button w-dyn-hide"
                                            href="https://glamory.webflow.io/checkout">Buy now</a>
                                    </form>
                                    <div style="display:none" class="w-commerce-commerceaddtocartoutofstock"
                                        tabindex="0">
                                        <div>This product is out of stock.</div>
                                    </div>
                                    <div aria-live="assertive" data-node-type="commerce-add-to-cart-error"
                                        style="display:none" class="w-commerce-commerceaddtocarterror">
                                        <div data-node-type="commerce-add-to-cart-error"
                                            data-w-add-to-cart-quantity-error="Product is not available in this quantity."
                                            data-w-add-to-cart-general-error="Something went wrong when adding this item to the cart."
                                            data-w-add-to-cart-mixed-cart-error="You can’t purchase another product with a subscription."
                                            data-w-add-to-cart-buy-now-error="Something went wrong when trying to purchase this item."
                                            data-w-add-to-cart-checkout-disabled-error="Checkout is disabled on this site."
                                            data-w-add-to-cart-select-all-options-error="Please select an option in each set.">
                                            Product is
                                            not available in this quantity.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-section">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-large">
                    <div class="testimonial-component">
                        <h2 class="heading-style-h2 text-align-center">Glowing reviews</h2>
                        <div data-duration-in="400" data-duration-out="200" data-current="Tab 1" data-easing="ease"
                            class="testimonial-slider w-tabs">
                            <div id="w-node-f1d2d1c4-4274-a07d-2dd7-dddbc876381a-c8763812"
                                class="testimonial-menu w-tab-menu" role="tablist"><a data-w-tab="Tab 1"
                                    class="testimonial-link w-inline-block w-tab-link w--current"
                                    id="w-tabs-0-data-w-tab-0"
                                    href="https://glamory.webflow.io/product/shineessence-hair-oil#w-tabs-0-data-w-pane-0"
                                    role="tab" aria-controls="w-tabs-0-data-w-pane-0" aria-selected="true"><img
                                        sizes="74px"
                                        srcset="https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2f777116e9facaab5e_client-01-p-500.webp 500w, https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2f777116e9facaab5e_client-01-p-800.webp 800w, https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2f777116e9facaab5e_client-01.webp 860w"
                                        alt="Client - Glamory Webflow Template"
                                        src="{{ asset('front/assets') }}/img/67816d2f777116e9facaab5e_client-01.webp" loading="lazy"
                                        class="testimonial-image"></a><a data-w-tab="Tab 2"
                                    class="testimonial-link w-inline-block w-tab-link" tabindex="-1"
                                    id="w-tabs-0-data-w-tab-1"
                                    href="https://glamory.webflow.io/product/shineessence-hair-oil#w-tabs-0-data-w-pane-1"
                                    role="tab" aria-controls="w-tabs-0-data-w-pane-1" aria-selected="false"><img
                                        sizes="(max-width: 1279px) 80px, (max-width: 1439px) 6vw, 80px"
                                        srcset="https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2f463ffdbd34c93886_client-02-p-500.webp 500w, https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2f463ffdbd34c93886_client-02-p-800.webp 800w, https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2f463ffdbd34c93886_client-02.webp 860w"
                                        alt="Client - Glamory Webflow Template"
                                        src="{{ asset('front/assets') }}/img/67816d2f463ffdbd34c93886_client-02.webp" loading="lazy"
                                        class="testimonial-image"></a><a data-w-tab="Tab 3"
                                    class="testimonial-link w-inline-block w-tab-link" tabindex="-1"
                                    id="w-tabs-0-data-w-tab-2"
                                    href="https://glamory.webflow.io/product/shineessence-hair-oil#w-tabs-0-data-w-pane-2"
                                    role="tab" aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false"><img
                                        sizes="(max-width: 1279px) 80px, (max-width: 1439px) 6vw, 80px"
                                        srcset="https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2fbed9b523f2763b32_client-04-p-500.webp 500w, https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2fbed9b523f2763b32_client-04-p-800.webp 800w, https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2fbed9b523f2763b32_client-04.webp 860w"
                                        alt="Client - Glamory Webflow Template"
                                        src="{{ asset('front/assets') }}/img/67816d2fbed9b523f2763b32_client-04.webp" loading="lazy"
                                        class="testimonial-image"></a><a data-w-tab="Tab 4"
                                    class="testimonial-link tabs-last w-inline-block w-tab-link" tabindex="-1"
                                    id="w-tabs-0-data-w-tab-3"
                                    href="https://glamory.webflow.io/product/shineessence-hair-oil#w-tabs-0-data-w-pane-3"
                                    role="tab" aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false"><img
                                        sizes="(max-width: 1279px) 80px, (max-width: 1439px) 6vw, 80px"
                                        srcset="https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2f1a022a2d00b00954_client-03-p-500.webp 500w, https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2f1a022a2d00b00954_client-03-p-800.webp 800w, https://cdn.prod.website-files.com/676e89008f680432324f130e/67816d2f1a022a2d00b00954_client-03.webp 860w"
                                        alt="Client - Glamory Webflow Template"
                                        src="{{ asset('front/assets') }}/img/67816d2f1a022a2d00b00954_client-03.webp" loading="lazy"
                                        class="testimonial-image"></a></div>
                            <div id="w-node-f1d2d1c4-4274-a07d-2dd7-dddbc8763823-c8763812"
                                class="testimonial-content-block w-tab-content">
                                <div data-w-tab="Tab 1" class="testimonial-tab-pane w-tab-pane w--tab-active"
                                    id="w-tabs-0-data-w-pane-0" role="tabpanel"
                                    aria-labelledby="w-tabs-0-data-w-tab-0">
                                    <div class="testimonial-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-block">
                                                <div class="testimonial-rating-wrapper">
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                                <div class="spacer-large"></div>
                                                <h3 class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                    Suspendisse varius enim in eros elementum tristique. Duis cursus, mi
                                                    quis viverra ornare,
                                                    eros dolor interdum nulla, ut commodo diam libero vitae erat."</h3>
                                                <div class="client-content-wrapper">
                                                    <div class="testimonial-client">
                                                        <div class="testimonial-client-info">
                                                            <div class="testimonial-name">Sophia Bennett</div>
                                                            <div>Fashion Designer</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-w-tab="Tab 2" class="testimonial-tab-pane w-tab-pane"
                                    id="w-tabs-0-data-w-pane-1" role="tabpanel"
                                    aria-labelledby="w-tabs-0-data-w-tab-1">
                                    <div class="testimonial-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-block">
                                                <div class="testimonial-rating-wrapper">
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                                <div class="spacer-large"></div>
                                                <h3 class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                    Suspendisse varius enim in eros elementum tristique. Duis cursus, mi
                                                    quis viverra ornare,
                                                    eros dolor interdum nulla, ut commodo diam libero vitae erat."</h3>
                                                <div class="client-content-wrapper">
                                                    <div class="testimonial-client">
                                                        <div class="testimonial-client-info">
                                                            <div class="testimonial-name">Mia Johnson</div>
                                                            <div>Beauty Blogger</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-w-tab="Tab 3" class="testimonial-tab-pane w-tab-pane"
                                    id="w-tabs-0-data-w-pane-2" role="tabpanel"
                                    aria-labelledby="w-tabs-0-data-w-tab-2">
                                    <div class="testimonial-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-block">
                                                <div class="testimonial-rating-wrapper">
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                                <div class="spacer-large"></div>
                                                <h3 class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                    Suspendisse varius enim in eros elementum tristique. Duis cursus, mi
                                                    quis viverra ornare,
                                                    eros dolor interdum nulla, ut commodo diam libero vitae erat."</h3>
                                                <div class="client-content-wrapper">
                                                    <div class="testimonial-client">
                                                        <div class="testimonial-client-info">
                                                            <div class="testimonial-name">Emma Patel</div>
                                                            <div>Yoga Instructor</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-w-tab="Tab 4" class="testimonial-tab-pane w-tab-pane"
                                    id="w-tabs-0-data-w-pane-3" role="tabpanel"
                                    aria-labelledby="w-tabs-0-data-w-tab-3">
                                    <div class="testimonial-card">
                                        <div class="testimonial-content">
                                            <div class="testimonial-block">
                                                <div class="testimonial-rating-wrapper">
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                    <div class="testimonial-rating-icon">
                                                        <div class="star-icon w-embed"><svg width="100%"
                                                                viewBox="0 0 18 17" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                    fill="currentColor"></path>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                                <div class="spacer-large"></div>
                                                <h3 class="testimonial-text">"Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.
                                                    Suspendisse varius enim in eros elementum tristique. Duis cursus, mi
                                                    quis viverra ornare,
                                                    eros dolor interdum nulla, ut commodo diam libero vitae erat."</h3>
                                                <div class="client-content-wrapper">
                                                    <div class="testimonial-client">
                                                        <div class="testimonial-client-info">
                                                            <div class="testimonial-name">Ava Reynolds</div>
                                                            <div>Photographer</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><img src="{{ asset('front/assets') }}/img/678175f4370b6dca168f4389_quote-icon.svg" loading="lazy"
                            alt="Quote Icon - Glamory Webflow Template" class="quote-icon">
                    </div>
                </div>
                <div class="line"></div>
            </div>
        </div>
    </section>
    <section class="section-other-products">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-large">
                    <div class="w-layout-grid product-top-grid">
                        <div class="max-width-small">
                            <h2 class="heading-style-h3">You might also like</h2>
                        </div>
                        <div id="w-node-_7a261062-ba3a-ec20-43db-a2929659b093-324f131c" class="button-wrap"><a data-w-id="4e8f3afe-c304-91d4-91b0-76120504e15a" href="{{ route('shop') }}"
                            class="main-button w-inline-block">
                            <div class="button-text-wrapper">
                                <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                    class="button-text">All Products</div>
                                <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                    class="button-text">All Products</div>
                            </div>
                            <div class="circle-button">
                                <div class="button-arrow-block">
                                    <div style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                        class="button-arrow _01 w-embed"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z">
                                            </path>
                                        </svg></div>
                                    <div style="transform: translate3d(-1.25rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"
                                        class="button-arrow _02 w-embed"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M13.1717 12.0007L8.22192 7.05093L9.63614 5.63672L16.0001 12.0007L9.63614 18.3646L8.22192 16.9504L13.1717 12.0007Z">
                                            </path>
                                        </svg></div>
                                </div>
                            </div>
                        </a></div>
                    </div>
                    <div class="spacer-large"></div>
                    <div class="w-dyn-list">
                        <div role="list" class="product-component-grid w-dyn-items">
                            <div role="listitem" class="w-dyn-item">
                                <div class="product-content-block"><a data-w-id="27ece434-d4cc-54d0-9524-51360cf9151c"
                                        href="https://glamory.webflow.io/product/glowblush-palette"
                                        class="product-link w-inline-block">
                                        <div class="product-image-wrapper"><img loading="lazy"
                                                data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                                src="{{ asset('front/assets') }}/img/67803c7c06e00cfeba6d2365_Minimalist Beauty Arrangement.webp"
                                                alt="GlowBlush Palette"
                                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 46vw, (max-width: 991px) 45vw, (max-width: 1919px) 30vw, 442.6640625px"
                                                srcset="https://cdn.prod.website-files.com/676e89008f680432324f133b/67803c7c06e00cfeba6d2365_Minimalist%20Beauty%20Arrangement-p-500.webp 500w, https://cdn.prod.website-files.com/676e89008f680432324f133b/67803c7c06e00cfeba6d2365_Minimalist%20Beauty%20Arrangement-p-800.webp 800w, https://cdn.prod.website-files.com/676e89008f680432324f133b/67803c7c06e00cfeba6d2365_Minimalist%20Beauty%20Arrangement-p-1080.webp 1080w, https://cdn.prod.website-files.com/676e89008f680432324f133b/67803c7c06e00cfeba6d2365_Minimalist%20Beauty%20Arrangement.webp 1280w"
                                                class="product-image"></div>
                                        <div class="product-info-block">
                                            <div class="product-name">GlowBlush Palette</div>
                                            <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                                class="product-price">$&nbsp;32.00&nbsp;USD</div>
                                        </div>
                                    </a></div>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <div class="product-content-block"><a data-w-id="27ece434-d4cc-54d0-9524-51360cf9151c"
                                        href="https://glamory.webflow.io/product/volume-dry-shampoo"
                                        class="product-link w-inline-block">
                                        <div class="product-image-wrapper"><img loading="lazy"
                                                data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                                src="{{ asset('front/assets') }}/img/67803bdcdbe5eb4b24840d9b_Luxury Skincare Product Display.webp"
                                                alt="Volume Dry Shampoo"
                                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 46vw, (max-width: 991px) 45vw, (max-width: 1919px) 30vw, 442.6640625px"
                                                srcset="https://cdn.prod.website-files.com/676e89008f680432324f133b/67803bdcdbe5eb4b24840d9b_Luxury%20Skincare%20Product%20Display-p-500.webp 500w, https://cdn.prod.website-files.com/676e89008f680432324f133b/67803bdcdbe5eb4b24840d9b_Luxury%20Skincare%20Product%20Display-p-800.webp 800w, https://cdn.prod.website-files.com/676e89008f680432324f133b/67803bdcdbe5eb4b24840d9b_Luxury%20Skincare%20Product%20Display-p-1080.webp 1080w, https://cdn.prod.website-files.com/676e89008f680432324f133b/67803bdcdbe5eb4b24840d9b_Luxury%20Skincare%20Product%20Display.webp 1280w"
                                                class="product-image"></div>
                                        <div class="product-info-block">
                                            <div class="product-name">Volume Dry Shampoo</div>
                                            <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                                class="product-price">$&nbsp;24.00&nbsp;USD</div>
                                        </div>
                                    </a></div>
                            </div>
                            <div role="listitem" class="w-dyn-item">
                                <div class="product-content-block"><a data-w-id="27ece434-d4cc-54d0-9524-51360cf9151c"
                                        href="https://glamory.webflow.io/product/puredew-moisturizer"
                                        class="product-link w-inline-block">
                                        <div class="product-image-wrapper"><img loading="lazy"
                                                data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                                src="{{ asset('front/assets') }}/img/67803b2b6ef77a23174e836b_Minimalist Cosmetic Arrangement.webp"
                                                alt="PureDew Moisturizer"
                                                sizes="(max-width: 479px) 92vw, (max-width: 767px) 46vw, (max-width: 991px) 45vw, (max-width: 1919px) 30vw, 442.6640625px"
                                                srcset="https://cdn.prod.website-files.com/676e89008f680432324f133b/67803b2b6ef77a23174e836b_Minimalist%20Cosmetic%20Arrangement-p-500.webp 500w, https://cdn.prod.website-files.com/676e89008f680432324f133b/67803b2b6ef77a23174e836b_Minimalist%20Cosmetic%20Arrangement-p-800.webp 800w, https://cdn.prod.website-files.com/676e89008f680432324f133b/67803b2b6ef77a23174e836b_Minimalist%20Cosmetic%20Arrangement-p-1080.webp 1080w, https://cdn.prod.website-files.com/676e89008f680432324f133b/67803b2b6ef77a23174e836b_Minimalist%20Cosmetic%20Arrangement.webp 1280w"
                                                class="product-image"></div>
                                        <div class="product-info-block">
                                            <div class="product-name">PureDew Moisturizer</div>
                                            <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                                class="product-price">$&nbsp;38.00&nbsp;USD</div>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer-large"></div>
                <div class="line"></div>
            </div>
        </div>
    </section>
    <section class="faq">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-section-large">
                    <div class="max-width-large align-center">
                        <h2 class="heading-style-h2 text-align-center">Common Questions</h2>
                        <div class="spacer-xlarge"></div>
                        <div class="faq-container">
                            <div data-w-id="e9119ba1-9f41-6a72-6fe4-f775d79c1124" class="accordion-content-item">
                                <div class="accordion-top-wrap">
                                    <div class="accordion-title-item"
                                        style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <h2 class="accordion-heading"
                                            style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                            1 - Are your products cruelty-free?</h2>
                                    </div>
                                    <div class="plus-block"
                                        style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <div class="plus-line"></div>
                                        <div class="plus-line vertical"
                                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(90deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-content-wrap" style="width: 100%; height: 0px;">
                                    <div class="accordion-content-block">
                                        <p class="accordion-answer-text">Yes, all our products are 100% cruelty-free.
                                            We are deeply
                                            committed to ethical practices and ensure that no animals are harmed during
                                            the development or
                                            testing of our products. We proudly partner with organizations that share
                                            our dedication to
                                            animal welfare.</p>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="e9119ba1-9f41-6a72-6fe4-f775d79c1133" class="accordion-content-item">
                                <div class="accordion-top-wrap">
                                    <div class="accordion-title-item"
                                        style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <h2 class="accordion-heading"
                                            style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                            2 - Do you offer products for sensitive skin?</h2>
                                    </div>
                                    <div class="plus-block"
                                        style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <div class="plus-line"></div>
                                        <div class="plus-line vertical"
                                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(90deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-content-wrap" style="width: 100%; height: 0px;">
                                    <div class="accordion-content-block">
                                        <p class="accordion-answer-text">Absolutely! We understand how important it is
                                            to have gentle
                                            yet effective products for sensitive skin. Our formulations are carefully
                                            crafted with
                                            hypoallergenic and soothing ingredients, and they are dermatologically
                                            tested to ensure they
                                            are safe for all skin types, including sensitive skin.</p>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="e9119ba1-9f41-6a72-6fe4-f775d79c1142" class="accordion-content-item">
                                <div class="accordion-top-wrap">
                                    <div class="accordion-title-item"
                                        style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <h2 class="accordion-heading"
                                            style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                            3 - What is your return policy?</h2>
                                    </div>
                                    <div class="plus-block"
                                        style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <div class="plus-line"></div>
                                        <div class="plus-line vertical"
                                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(90deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-content-wrap" style="width: 100%; height: 0px;">
                                    <div class="accordion-content-block">
                                        <p class="accordion-answer-text">We offer a 30-day hassle-free return policy.
                                            If you’re not
                                            completely satisfied with your purchase, you can return unused and unopened
                                            products within 30
                                            days of delivery for a full refund. Our customer care team is always ready
                                            to assist you with
                                            the process to make it as smooth as possible.</p>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="e9119ba1-9f41-6a72-6fe4-f775d79c1151" class="accordion-content-item">
                                <div class="accordion-top-wrap">
                                    <div class="accordion-title-item"
                                        style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <h2 class="accordion-heading"
                                            style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                            4 - Are your products eco-friendly?</h2>
                                    </div>
                                    <div class="plus-block"
                                        style="transform: translate3d(0rem, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <div class="plus-line"></div>
                                        <div class="plus-line vertical"
                                            style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(90deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-content-wrap" style="width: 100%; height: 0px;">
                                    <div class="accordion-content-block">
                                        <p class="accordion-answer-text">Yes, we are committed to sustainability in
                                            every aspect of our
                                            business. Our products are made with eco-friendly ingredients, and we use
                                            recyclable or
                                            biodegradable packaging to reduce our environmental impact. We constantly
                                            strive to innovate
                                            and improve our processes to ensure they align with our commitment to
                                            protecting the planet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection