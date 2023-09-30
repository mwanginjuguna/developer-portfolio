<x-blog.blog-layout>
    <nav
        class="col-span-2 bg-white bg-opacity-75 text-green-900 flex flex-wrap md:space-x-14 space-x-6 place-content-center py-1.5 rounded font-semibold"
    >
        <a href="/#welcome" class="underline underline-offset-4 hover:decoration-dashed">Welcome</a>
        <a href="/#about-me" class="underline underline-offset-4 hover:decoration-dashed">About Me</a>
        <a href="/#skills" class="underline underline-offset-4 hover:decoration-dashed">Experience</a>
        <a  href="/#projects" class="underline underline-offset-4 hover:decoration-dashed">Projects</a>
        <a href="/#contact" class="underline underline-offset-4 hover:decoration-dashed">Contact Me</a>
    </nav>
    <x-slot:header>
        <h1 class="font-extrabold text-center text-green-900 font-serif text-3xl md:text-5xl">Order Management System</h1>
    </x-slot:header>
    <div class="text-md text-justify text-green-900 mx-auto px-8 max-w-4xl md:text-lg">

        <x-blog-paragraph>
            The Order Management System (henceforth, <strong>Order System</strong>) is a web application designed for freelance writers and agencies to them manage orders for various writing projects.
            The core functionality of the Order System is to connect individuals seeking professional services on various kinds of writing tasks and the freelance writers or agencies to help them place orders and facilitate tracking of various writing project on the application.
            The application core features include:
        </x-blog-paragraph>

        <ul class="mx-6 py-4 list-disc italic">
            <li class="grid grid-cols-3 gap-6 text-sm">
                <x-blog-paragraph class="col-span-3 lg:col-span-1">
                        <span class="font-semibold">PayPal API with PayPal Buttons for Fast and Secure Payment</span> - Receive money from PayPal, venmo, Cards atc, using PAYPAL API. Also, configure and process payments, send invoices &, process refunds
                </x-blog-paragraph>

                <img class="col-span-3 lg:col-span-2 mx-auto transition ease-in-out 200ms" alt="Paypal Buttons Screenshot" src="{{ Vite::asset('resources/images/ordersystem/order-preview-with-paypal-buttons.png') }}">
            </li>

            <li class="grid grid-cols-3 gap-6 my-8 border-t py-4 text-sm">
                <x-blog-paragraph class="col-span-3 lg:col-span-1">
                    <span class="font-semibold">Order Tracking </span>- Live deadline countdown
                </x-blog-paragraph>

                <img class="mx-auto col-span-3 lg:col-span-2 transition ease-in-out 200ms shadow-sm shadow-lime-600 rounded-lg my-auto" alt="Paypal Buttons Screenshot" src="{{ Vite::asset('resources/images/ordersystem/deadline-tracking.png') }}">
            </li>

            <li class="grid grid-cols-3 gap-6 my-8 border-t py-4 text-sm">
                <x-blog-paragraph class="col-span-3 lg:col-span-1">
                    <span class="font-semibold">Professional Admin Dashboard</span> - Admin can manage users, set prices, update settings, assign tasks to writers,
                </x-blog-paragraph>

                <img class="col-span-3 lg:col-span-2 mx-auto transition ease-in-out 200ms shadow-sm shadow-lime-600 rounded-lg my-auto" alt="Paypal Buttons Screenshot" src="{{ Vite::asset('resources/images/ordersystem/order-system-admin_page.png') }}">
            </li>

            <li class="grid grid-cols-3 gap-6 my-8 border-t py-4 text-sm">
                <x-blog-paragraph class="col-span-3 lg:col-span-1">
                    <span class="font-semibold">Automatic Email and Notification System</span> - Instant updates when various interactions or changes occur in the application's ecosystem
                </x-blog-paragraph>

                <img class="col-span-3 lg:col-span-2 mx-auto transition ease-in-out 200ms shadow-sm shadow-lime-600 rounded-lg my-auto" alt="Paypal Buttons Screenshot" src="{{ Vite::asset('resources/images/ordersystem/order-paid-admin-notification.png') }}">
            </li>

            <li class="grid grid-cols-3 gap-6 my-8 border-t py-4 text-sm">
                <x-blog-paragraph class="col-span-3 lg:col-span-1">
                    <span class="font-semibold">Live Messaging</span> - Admin can send/receive instant messages from customers and writers.
                </x-blog-paragraph>

                <img class="col-span-3 lg:col-span-2 transition ease-in-out 200ms shadow-sm shadow-lime-600 rounded-lg mx-auto my-auto" alt="Paypal Buttons Screenshot" src="{{ Vite::asset('resources/images/ordersystem/admin-chat-system-view-first.jpg') }}">
            </li>

            <li class="grid grid-cols-3 gap-6 my-8 border-t py-4 text-sm">
                <x-blog-paragraph class="col-span-3 lg:col-span-1">
                    <span class="font-semibold">Automatic Price calculator</span> - Application calculates price for order automatically based on the features of the writing task as entered by the customer.
                    This allows the customer to be in charge of how much they want to spend on each individual task. Admin can configure the default pricing strategies used to determine the overall price.
                </x-blog-paragraph>

                <img class="col-span-3 lg:col-span-2 transition ease-in-out 200ms shadow-sm shadow-lime-600 rounded-lg mx-auto my-auto" alt="Paypal Buttons Screenshot" src="{{ Vite::asset('resources/images/ordersystem/auto-price-calculator.png') }}">
            </li>

            <li class="grid grid-cols-3 gap-6 my-8 border-t py-4 text-sm">
                <x-blog-paragraph class="col-span-3 lg:col-span-1">
                    <span class="font-semibold">Coupon Codes</span> - Application enables Admin to offer coupons to customers using discount codes which are redeemed while making order.
                </x-blog-paragraph>

                <img class="col-span-3 lg:col-span-2 transition ease-in-out 200ms shadow-sm shadow-lime-600 rounded-lg mx-auto my-auto" alt="Paypal Buttons Screenshot" src="{{ Vite::asset('resources/images/ordersystem/discount-and-coupons.png') }}">
            </li>
        </ul>

        <div class="border-t py-6">
            <img class="col-span-3 lg:col-span-2 transition ease-in-out 200ms shadow-sm shadow-lime-600 rounded-lg my-auto" alt="Paypal Buttons Screenshot" src="{{ Vite::asset('resources/images/ordersystem/client-new-order-populated.png') }}">

            <x-blog-paragraph class="leading-relaxed">
                This remains my favorite project not just because of the complexity of the architecture, but also the story that led me to this project. I started working as a freelance writer in 2018.
                At the time, I only focused on article writing and creating software and product reviews.
                Later, I would build my skills around content writing for websites and complex research-based and scholarly writing tasks.<br>
                As my writing journey grew, I needed tools such as a website where my clients would make orders, pay for them, and follow up until their tasks had been completed.
                Eventually, I found someone who offered a web application that helped me achieve my purpose.
                After using the product for a while, I realized I needed to personalize some functionalities and design to suite the needs of my clients. That is where I started to learn programming.<br>
                I began learning Python and Django and later PhP and Laravel. After creating 6 versions of the project in Laravel-blade, Laravel-Livewire, I decided to settle on Laravel-Vue-Inertia STACK. I used TailwindCSS to style the project.<br>
                Taking on this project has taught me so many concepts in the world of Web Applications development. The many challenges and complexities of the project became key learning points for me in the project.
                As always, this project remains a work in progress, and constant updates will be made available.
            </x-blog-paragraph>
        </div>


        <x-big-h3-quote>
            <x-slot:quote>
                <x-link href="/#projects" class="">
                    <span class="mr-3">Go Back to All Projects</span>
                    <svg height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 511.999 511.999" xml:space="preserve">
                        <g>
                            <path style="fill:#507C5C;" d="M382.795,358.347h-263.03c-7.958,0-14.411-6.452-14.411-14.411s6.453-14.411,14.411-14.411h263.029
                                c55.352,0,100.384-45.032,100.384-100.384v-25.501c0-55.352-45.032-100.384-100.384-100.384h-84.939v42.04h84.939
                                c7.958,0,14.411,6.452,14.411,14.411s-6.453,14.411-14.411,14.411h-99.349c-7.958,0-14.411-6.452-14.411-14.411V88.846
                                c0-7.959,6.453-14.411,14.411-14.411h99.349c71.243,0,129.205,57.961,129.205,129.205v25.501
                                C512,300.386,454.038,358.347,382.795,358.347z"/>
                            <path style="fill:#507C5C;" d="M382.795,287.487H265.631c-7.958,0-14.411-6.452-14.411-14.411c0-7.959,6.453-14.411,14.411-14.411
                                h117.164c15.728,0,29.523-13.797,29.523-29.523v-25.501c0-7.959,6.453-14.411,14.411-14.411s14.411,6.452,14.411,14.411v25.501
                                C441.139,260.768,414.42,287.487,382.795,287.487z"/>
                        </g>
                        <polygon style="fill:#CFF09E;" points="200.171,423.152 14.411,307.407 200.171,191.663 "/>
                        <path style="fill:#507C5C;" d="M200.171,437.563c-2.649,0-5.293-0.729-7.62-2.18L6.79,319.638C2.567,317.006,0,312.383,0,307.407
                            s2.567-9.599,6.79-12.23l185.761-115.744c4.441-2.77,10.038-2.909,14.615-0.369c4.578,2.541,7.416,7.364,7.416,12.599v231.49
                            c0,5.235-2.839,10.059-7.416,12.599C204.987,436.961,202.578,437.563,200.171,437.563z M41.661,307.407l144.1,89.786V217.62
                            L41.661,307.407z"/>
                        </svg>
                </x-link>
            </x-slot:quote>
        </x-big-h3-quote>
    </div>
</x-blog.blog-layout>

