    <main class="main" wire:ignore>
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="/" rel="nofollow">Home</a>
                    <i class="fa fa-arrow-right"></i> Pages
                    <i class="fa fa-arrow-right"></i> {{$page->title}}
                </div>
            </div>
        </div>
        <section class="hero-2 bg-green mb-20">
            <div class="hero-content">
                <div class="container">
                    <div class="text-center">
                        {!! $page->conetnt !!}
                    </div>
                </div>
            </div>
        </section>
        <section class="section-border">
            <div class="container">
                <div class="leaflet-map mb-50">
                    {!! $setting->map !!}
                </div>
                <div class="row mt-20">
                    <div class="col-md-12 mb-10 mt-10 mb-md-0">
                        <h4 class="mb-15 text-brand">Office</h4>
                        {{$setting->address}}<br>
                        <abbr title="Phone">HotLine:</abbr> {{$setting->hotline}}<br>
                        <abbr title="Phone">Mobile:</abbr> {{$setting->mobile}}<br>
                        <abbr title="Email">Email: </abbr>{{$setting->email}}</a><br>
                    </div>

                </div>
            </div>
        </section>
        <section class="mt-20 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-10 m-auto">
                        <div class="contact-from-area padding-20-row-col wow FadeInUp">
                            <h3 class="mb-10 text-center">Drop Us a Line</h3>
                            <p class="text-muted mb-30 text-center font-sm">Please Share your Thought and Suggestions With Us.</p>
                            <form class="contact-form-style text-center" id="contact-form" wire:submit.prevent='sendMessage'>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="name" placeholder="your Name" type="text" wire:model="name">
                                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-style mb-20">
                                            <input name="email" placeholder="Your Email" type="email" wire:model="email">
                                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-style mb-20">
                                            <input name="mobile" placeholder="Your Phone" type="text" wire:model="mobile">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="textarea-style mb-30">
                                            <textarea name="message" placeholder="Message" wire:model="message"></textarea>
                                            @error('message') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>
                                        <button class="submit submit-auto-width" type="submit">Send message</button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
