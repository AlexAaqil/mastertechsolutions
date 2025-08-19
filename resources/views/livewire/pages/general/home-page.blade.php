<div class="HomePage">
    <section class="Hero">
        <div class="container">
            <div class="content">
                <h1>Master Tech Solutions Center</h1>
                <p>One stop shop to establish and grow your digital presence</p>

                <div class="hero_action">
                    <a href="{{ Route::has('contact-page') }}">Book a Free Consultation</a>
                </div>

                <div class="social_proof">
                    <div class="stat">
                        <span>10+</span>
                        <span>Years Experience</span>
                    </div>

                    <div class="stat">
                        <span>99%</span>
                        <span>Satisfied Clients</span>
                    </div>

                    <div class="stat">
                        <span>200+</span>
                        <span>Delivered Projects</span>
                    </div>

                    <div class="stat">
                        <span>35%</span>
                        <span>Lower Maintenance</span>
                    </div>
                </div>
            </div>

            <div class="image">
                <img src="{{ asset('assets/images/hero-section.webp') }}" alt="{{ config('app.name') }} Hero Image">
            </div>
        </div>
    </section>

    <section class="About">
        <div class="container">
            <div class="image">
                <img src="{{ asset('assets/images/about-section.jpg') }}" alt="About Master Tech">
            </div>

            <div class="content">
                <h2>Who We Are</h2>
                <p>
                    At Master Tech Solutions Center, we empower businesses to thrive in the digital era.
                    From crafting powerful software and engaging websites to securing your infrastructure
                    and optimizing workflows, we deliver solutions that drive growth and resilience.
                </p>
                <p>
                    Our multidisciplinary team blends innovative design, robust coding practices,
                    and cutting-edge security measures to help you stay competitive in a rapidly evolving landscape.
                </p>

                <div class="about_actions">
                    <a href="{{ Route::has('about-page') ? route('about-page') : '#' }}" wire:navigate>Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="Services">
        <div class="container">
            <div class="section_header">
                <h2>What We Offer</h2>
            </div>

            <div class="services_list">
                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/cyber-security.jpg') }}" alt="Cyber Security" />
                    </div>
                    <div class="content">
                        <h3>Cyber Security</h3>
                        <p>Protecting your business from cyber threats with advanced security measures, ensuring data safety and operational continuity.</p>
                    </div>
                </div>

                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/web-development.jpg') }}" alt="Web Development" />
                    </div>
                    <div class="content">
                        <h3>Web Development</h3>
                        <p>Building high-performance, user-focused websites that engage customers and drive business growth.</p>
                    </div>
                </div>

                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/mobile-app-development.jpg') }}" alt="Mobile App Development" />
                    </div>
                    <div class="content">
                        <h3>Mobile App Development</h3>
                        <p>Designing and developing tailored mobile applications that deliver seamless user experiences and solve real business challenges.</p>
                    </div>
                </div>

                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/software-development.jpg') }}" alt="Software Development" />
                    </div>
                    <div class="content">
                        <h3>Software Development</h3>
                        <p>Delivering custom software solutions—from strategy to execution—that align with your industry, goals, and technology needs.</p>
                    </div>
                </div>

                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/networking.jpg') }}" alt="Networking" />
                    </div>
                    <div class="content">
                        <h3>Networking</h3>
                        <p>Designing, implementing, and managing secure, scalable networks for reliable connectivity and optimized performance.</p>
                    </div>
                </div>

                <div class="service">
                    <div class="image">
                        <img src="{{ asset('assets/images/graphic-design.jpg') }}" alt="Graphic Design" />
                    </div>
                    <div class="content">
                        <h3>Graphic Design</h3>
                        <p>Creating impactful visual identities, branding, and marketing materials that resonate with your audience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="WhyChooseUs">
        <div class="container">
            <div class="section_header">
                <h2>Why Businesses Choose Us</h2>
            </div>

            <div class="choose_list">
                <div class="choice">
                    <h3>Expertise You Can Trust</h3>
                    <p>Years of hands-on experience across multiple tech domains.</p>
                </div>
                <div class="choice">
                    <h3>Tailored Solutions</h3>
                    <p>Custom-built strategies to match your business goals.</p>
                </div>
                <div class="choice">
                    <h3>End-to-End Support</h3>
                    <p>From planning to maintenance, we’ve got you covered.</p>
                </div>
            </div>
        </div>
    </section>

    <livewire:partials.cta />
</div>
