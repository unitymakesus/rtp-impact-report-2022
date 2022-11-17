@extends('_layouts.main')

@section('body')
  @include('_partials.header')
  <main class="overflow-x-hidden">
    <section class="py-16">
      <div class="container">
        <h2 class="text-5xl lg:text-7xl xl:text-9xl font-bold">At-a-Glance</h2>

        <div class="text-red mb-16">
          <h3 class="font-bold text-6xl mb-4">RTP is</h3>
          <ul class="grid gap-8 lg:grid-cols-12 list-none p-0 m-0">
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">7,000</strong> Acres</li>
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">400+</strong> Established and Startup Companies</li>
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">60,000+</strong> Employees</li>
          </ul>
        </div>

        <div class="text-purple">
          <h3 class="font-bold text-6xl mb-4">2022 Growth by the Numbers</h3>
          <ul class="grid gap-8 lg:grid-cols-12 list-none p-0 m-0">
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">+8,000</strong> Jobs Announced</li>
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">$4.7B+</strong> Investments Announced</li>
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">32.57%</strong> Minority & Women-Owned Businesses of RTF Vendor Contracts</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="bg-slate text-white py-16">
      <div class="container max-w-5xl">
        <h2 class="text-5xl lg:text-7xl xl:text-9xl font-bold text-gray">Community</h2>

        <div class="tabs tabs--horizontal mt-12">
          <div role="tablist" aria-orientation="horizontal" aria-label="">
            <button role="tab" class="text-3xl font-bold text-red" id="tab-boxyard" aria-selected="true" aria-controls="tabpanel-boxyard">Boxyard RTP</button>
            <button role="tab" class="text-3xl font-bold text-light-blue" id="tab-hub" aria-selected="false" aria-controls="tabpanel-hub">Hub RTP</button>
            <button role="tab" class="text-3xl font-bold text-mint" id="tab-frontier" aria-selected="false" aria-controls="tabpanel-frontier">Frontier RTP</button>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-boxyard" aria-labelledby="tab-boxyard">
            <p>This iconic research park is not just a place to work anymore. RTP is a community of doers and dreamers who want to play at the highest level. Whether it means developing new cures for cancer at a national lab, or sharing locally-brewed drinks at Boxyard, we welcome ideas and people from all shapes and sizes.</p>

            <p>We celebrated 1 year of small businesses doing big things at Boxyard! This hyper-local cargotecture is a community made up of a diverse mix of entrepreneurs, artists, and creatives.</p>

            <div class="slider">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
            </div>

            <h3 class="text-xl font-bold text-red">Boxyard Turns One</h3>
            <img class="lazyload mb-2" data-src="https://via.placeholder.com/1200x600" alt="">

            <div class="grid gap-4 md:grid-cols-12">
              <div class="col-span-8">
                <h3 class="text-xl font-bold text-red">2022 Growth by the Numbers</h3>
                <div class="grid gap-6 sm:grid-cols-2 max-w-xl">
                  <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                    <strong class="block text-5xl">40</strong> Upcycled Shipping Containers
                  </div>
                  <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                    <strong class="block text-5xl">60+</strong> Unique Local Restaurants and Retailers
                  </div>
                  <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                    <strong class="block text-5xl">150+</strong> Events, Including 4+ Days of Live Music Per Week
                  </div>
                  <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                    <strong class="block text-5xl">1</strong> Dog Park at Boxyard
                  </div>
                </div>
              </div>
              <div class="col-span-4">
                <h3 class="text-xl font-bold text-red">Awards & Accolades</h3>
                <ul class="list-triangles list-triangles--red">
                  <li>TCREW Champion Award: Best Development Project 2022</li>
                  <li>Triangle Business Journal’s 2022 Space Awards for Top Retail Development (Paywall)</li>
                  <li>Durham Magazine Best Venue for Live Music 2022</li>
                  <li>Best of Durham Large Venue for Live Music</li>
                  <li>
                    Best of Durham (Vendors)
                    <ul class="list-disc pl-4 font-normal mt-2">
                      <li class="mb-2">Lawrence Barbecue: Best Of Durham Barbecue</li>
                      <li class="mb-2">Beyu Caffe: Best Of Durham Coffee Shop</li>
                      <li class="mb-2">Fullsteam Brewery: Best Of Durham Brewery</li>
                      <li class="mb-2">Wonderpuff: Best Of Durham Artisan Food Product</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>

            <h3 class="text-xl font-bold text-red">James Beard Finalists</h3>
            <p>The James Beard Awards recognizes exceptional talent and achievement in the culinary arts, hospitality, media, and broader food system, as well as a demonstrated commitment to racial and gender equity, community, sustainability, and culture.</p>
            <div class="grid gap-6 sm:grid-cols-3">
              <figure class="bg-white">
                <img class="lazyload" data-src="/assets/images/logos/fullsteam.png" alt="Fullsteam Brewery" data-expand="-10">
              </figure>
              <figure class="bg-white">
                <img class="lazyload" data-src="/assets/images/logos/lawrence-bbq.png" alt="Lawrence BBQ" data-expand="-10">
              </figure>
            </div>

            <h3 class="text-xl font-bold text-red">PopBox Second Cohort</h3>
            <p>PopBox is a 320-square-foot rotating shipping container backed by a micro-grant from NC IDEA and Research Triangle Foundation. This initiative aims to scale up women and BIPOC-owned businesses. Durham Tech has also partnered with Boxyard RTP to provide technical assistance and small business counseling to the 2022-2023 selected cohort.</p>
            <p>2021-22 Recipients: Thirteen West, Skyelight Living, Pop Box Gallery, Be Like Missy</p>
            <div class="grid gap-6 sm:grid-cols-2">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
            </div>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-hub" aria-labelledby="tab-hub" hidden>
            <p>Welcome to Research Triangle Park’s vibrant downtown, Hub RTP. This 100-acre, $1.5B project, will transform RTP into a destination where people can live, work, play, sleep, and stay. This year, we broke ground on a 125,000 square foot office-over-retail trio of buildings named Horseshoe. With construction underway, we anticipate sharing more announcements on residential breaking ground, tenants who are moving in, and more from our hotel developer.</p>

            <div class="slider">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x800" alt="" data-expand="-10">
            </div>

            <h3 class="text-xl font-bold text-light-blue">2022 Growth by the Numbers</h3>
            <div class="grid gap-6 sm:grid-cols-2 max-w-xl">
              <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                <strong class="block text-5xl">100</strong> Acres
              </div>
              <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                <strong class="block text-5xl">$1.5B</strong> Project
              </div>
              <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                <strong class="block text-5xl">1,600</strong> Direct Jobs
              </div>
              <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                <strong class="block text-5xl">125k sf</strong> Office-Over Retail Space
              </div>
            </div>

            <h3 class="text-xl font-bold text-light-blue">This is Hub RTP by Joshua Rowsey</h3>
            <p>Caffeinate your Career is a YouTube series that gives an inside look to different career pathways from founders and entrepreneurs at Frontier RTP.</p>
            <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">

            <h3 class="text-xl font-bold text-light-blue">2022 RTP Impact Report</h3>
            <p>See, feel, hear the vision. This year was all about spreading the word at our own backyard.</p>
            <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">

            <div class="grid gap-4 md:grid-cols-12">
              <div class="col-span-6">
                <h3 class="text-xl font-bold text-light-blue">Experience Center</h3>
                <ul class="list-triangles list-triangles--light-blue">
                  <li>This year, we opened an immersive Experience Center equipped with a 3D model and VR walkthrough of the development, a display wall with branded items exhibiting Hub’s energy, a breezeway overlooking the construction site, and AV displays featuring travel times and stock tickers of RTP companies.</li>
                  <li>In April we welcomed NAIOP Raleigh Durham and nearly 300 guests on their Bus Tour through the Triangle</li>
                </ul>
              </div>
              <div class="col-span-6">
                <h3 class="text-xl font-bold text-light-blue">Awards & Accolades</h3>
                <ul class="list-triangles list-triangles--light-blue">
                  <li>Huburban Carpool Convos: Take a tour of the Triangle with us and some of the Triangle’s most notable leaders. Here, we discuss what Hub RTP means for our growing region.</li>
                  <li>Durham Bull’s: XX</li>
                </ul>
              </div>
            </div>
            <div class="grid gap-4 md:grid-cols-12">
              <div class="col-span-8">
                <h3 class="text-xl font-bold text-light-blue">Announcements</h3>
                <ul class="list-triangles list-triangles--light-blue md:columns-2 md:gap-12">
                  <li>We will double in population, so what must the Triangle do? Research Triangle Foundation CEO says…</li>
                  <li>The future of RTP: Horseshoe at Hub RTP celebrates groundbreaking on Tuesday</li>
                  <li>First ‘Hub RTP’ project starts construction; more projects to come A ‘new downtown for RTP’ and ‘a brand new RTP:’ Horseshoe at the Hub project is underway</li>
                  <li>Tired of commuting to RTP? Pretty soon you’ll be able to live there. (Paywall)</li>
                  <li>Research Triangle Park will soon have something for the first time ever: residents</li>
                  <li>Hub RTP update: Park’s first apartments coming soon to planned urban campus</li>
                  <li>TBD/CONFIDENTIAL: Data443 announced as the first tenant for Horseshoe at Hub RTP</li>
                </ul>
              </div>
              <div class="col-span-4">
                <h3 class="text-xl font-bold text-light-blue">Local Brand Partnerships</h3>
                <ul class="list-disc pl-4">
                  <li class="mb-4">Bee Downtown</li>
                  <li class="mb-4">Usu Candles</li>
                  <li class="mb-4">Mystic Farms: Hubourban</li>
                </ul>
              </div>
            </div>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-frontier" aria-labelledby="tab-frontier" hidden>
            <p>Launched in 2015, this innovation community offers free coworking and events designed for people to connect and grow professionally. Once an old IBM campus, the Frontier’s indoor and outdoor office and lab space is home to a third of RTP companies!</p>

            <div class="slider">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">
            </div>

            <h3 class="text-xl font-bold text-mint">2022 Growth by the Numbers</h3>
            <div class="grid gap-6 sm:grid-cols-2 max-w-xl">
              <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                <strong class="block text-5xl">+200</strong> Free Networking, Fitness, and Educational Events Anually
              </div>
              <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                <strong class="block text-5xl">150+</strong> Startups and Small Businesses
              </div>
              <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                <strong class="block text-5xl">1,600</strong> Direct Jobs
              </div>
              <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                <strong class="block text-5xl">500k sf</strong> Startups and Small Businesses
              </div>
            </div>

            <h3 class="text-xl font-bold text-mint">Caffeinate Your Career</h3>
            <p>Caffeinate your Career is a YouTube series that gives an inside look to different career pathways from founders and entrepreneurs at Frontier RTP.</p>
            <img class="lazyload" data-src="https://via.placeholder.com/1200x600" alt="" data-expand="-10">

            <h3 class="text-xl font-bold text-mint">WRAL Startup Guide: Inside Frontier RTP</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis dicta nulla repellendus, eaque veniam reprehenderit necessitatibus veritatis suscipit blanditiis alias praesentium corporis. Amet ipsam mollitia officia architecto, accusamus error tempora.</p>
            <div class="grid gap-6 grid-cols-4">
              <img class="lazyload" data-src="https://via.placeholder.com/600x600" alt="" data-expand="-10">
              <img class="lazyload" data-src="https://via.placeholder.com/600x600" alt="" data-expand="-10">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16">
      <div class="container max-w-5xl">
        <h2 class="text-dark-blue text-5xl lg:text-7xl xl:text-9xl font-bold">DEI+ Partnerships</h2>
        <div class="max-w-2xl">
          <p>Diversity, equity, inclusion and belonging is crucial to the growth of RTP. As we break down the silos across RTP companies to collaborate and synergize our efforts, we benefit from the resulting advancement in talent attraction, contributing to better business outcomes for all. We recognize that the next generation of leaders not only values, but represents, a diverse and equal workforce.</p>

          <h3 class="text-dark-blue font-bold text-2xl">STEM RTP</h3>
          <p>The Research Triangle Park Charitable Fund, in partnership with the RTP Diversity, Equity and Inclusion (DEI) Collective announced the second cohort for the STEM RTP grant.⁠⁠These funds are awarded to programs working at the intersection of STEM and diversity, equity, and inclusion.</p>
        </div>

        <h4 class="text-dark-blue font-bold text-xl">2022 Recipients</h4>
        <div class="grid gap-x-8 gap-y-16 sm:grid-cols-12 mt-4">
          @foreach ($recipients as $recipient)
            <article class="relative sm:col-span-6 lg:col-span-4">
              <figure class="flex items-center justify-center relative min-h-[300px] bg-black bg-opacity-5">
                <img class="lazyload absolute w-full h-full object-contain object-center max-w-[400px] p-8 mix-blend-multiply" data-src="{{ $recipient->logo }}" alt="" data-expand="-10">
              </figure>
              <h4 class="mt-4">
                @if ($recipient->link)
                  <a class="a11y-link-wrap hover:underline focus:underline" href="{{ $recipient->link }}">{{ $recipient->title }}</a>
                @else
                  {{ $recipient->title }}
                @endif
              </h4>
            </article>
          @endforeach
        </div>

        <div class="max-w-6xl">
          <h3 class="text-dark-blue text-2xl font-bold">RTP DEI Collective</h3>
          <p>Founded in the fall of 2019 with the goal of uniting and amplifying RTP companies’ diversity, equity, and inclusion efforts, the RTP DEI Collective has grown to include more than 30 companies and partners. The Collective works to:</p>

          <div class="grid gap-16 md:grid-cols-12 my-8">
            <ul class="list-triangles list-triangles--dark-blue md:col-span-6">
              <li>ESTABLISH a network of professionals who share the same interests and goals for DEI.</li>
              <li>CONNECT with regional efforts in the Triangle to showcase the Park as a diverse and welcoming center of business.</li>
              <li>INTEGRATE DEI actions within our organizations with a focus on anti-racism and social justice for marginalized groups.</li>
              <li>AMPLIFY visibility and engagement for existing DEI initiatives in RTP.</li>
              <li>SCALE existing events and programs to create a bigger, broader impact for the 60,000 people working in RTP.</li>
              <li>CHAMPION Park companies who are working to begin or scale their DEI efforts.</li>
            </ul>

            <div class="md:col-span-6">
              <img class="lazyload" data-src="/assets/images/rtp-the-diversity-movement.png" alt="RTP and The Diversity Movement" data-expand="-10">
              <h4 class="text-dark-blue text-xl font-bold mt-4">The Diversity Movement</h4>
              <p>The collaboration between The Diversity Movement and RTP DEI Collective creates a powerful partnership for Research Triangle Park (RTP) companies and their employees to help illuminate the true nature of the Research Triangle as a welcoming and diverse community.</p>
            </div>
          </div>
        </div>

        <article class="bg-white p-8 max-w-4xl">
          <div class="grid gap-4 md:grid-cols-12">
            <div class="col-span-8">
              <div class="flex flex-col justify-between h-full">
                <div>
                  <h4 class="text-dark-blue text-xl font-bold mt-0">Crossroads Podcast</h4>
                  <p class="font-bold">Meet Ray Trapp and Sarah Chick at the crossroads of it all. Everything from DEI, talent, the Park, the Triangle Region and beyond.</p>
                </div>
                <a class="inline-block bg-slate text-white p-4 self-start hover:bg-slate-900 focus:bg-slate-900 transition-colors duration-300" href="https://podcasts.apple.com/us/podcast/crossroads-rtp/id1609428599">Listen to the Crossroads Podcast</a>
              </div>
            </div>
            <figure class="col-span-4">
              <img class="lazyload" data-src="/assets/images/rtp-crossroads-podcast.jpg" alt="Cover art for the RTP Crossroads Podcast with Ray Trapp." data-expand="-10">
            </figure>
          </div>
        </article>
      </div>
    </section>

      <section class="bg-slate text-white py-16">
        <div class="container max-w-5xl">
          <h2 class="text-5xl lg:text-6xl font-bold text-gray">Industry Growth</h2>
          <h3 class="text-2xl font-bold uppercase mb-4">News</h3>

          <div class="grid gap-8 sm:gap-y-16 sm:grid-cols-12">
            @for ($i = 0; $i < 12; $i++)
              <article class="relative sm:col-span-6 lg:col-span-4">
                <img class="lazyload mb-2" data-src="https://via.placeholder.com/800X500" alt="" data-expand="-10">
                <h4 class="inline-block mt-0">
                  <a class="hover:underline focus:underline a11y-link-wrap" href="#">U.S. FDA authorizes Eli Lilly’s COVID-19 antibody drug</a>
                </h4>
              </article>
            @endfor
          </div>
        </div>
      </section>

      <section class="py-16">
        <div class="container max-w-5xl">
          <div class="max-w-4xl">
            <h2 class="text-5xl lg:text-6xl font-bold mb-8">Behind RTP: Research Triangle Foundation</h2>
            <p>It takes a lot of extraordinary people to make RTP an extraordinary community. They love everything that Research Triangle Park is and what it will become. Driven by the same mission that started RTP in 1959, the Foundation exists to create opportunities that positively impacts all North Carolinians.</p>
          </div>

          <div class="max-w-6xl">
            <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
            <ul class="grid gap-8 md:grid-cols-12 list-none p-0 m-0">
              <li class="card text-dark-blue bg-black bg-opacity-5 p-6 md:col-span-4 font-bold text-lg">Facilitate collaboration between the Triangle universities.</li>
              <li class="card text-red bg-black bg-opacity-5 p-6 md:col-span-4 font-bold text-lg">Promote cooperation between universities and industry.</li>
              <li class="card text-purple bg-black bg-opacity-5 p-6 md:col-span-4 font-bold text-lg">Create an economic impact for the residents of North Carolina.</li>
            </ul>
          </div>

          <div class="max-w-6xl">
            <x-tabs :lists="$supporters" orientation="vertical" type="list" />
          </div>
        </div>
      </section>

    <section class="py-16">
      <div class="container max-w-5xl">
        <div class="max-w-3xl">
          <h2 class="text-5xl lg:text-7xl xl:text-9xl font-bold mb-8">Stay in Touch</h2>
          <form action="https://us8.list-manage.com/subscribe/post?u=eecd09ba159047b94f51a2c54&amp;id=9fd04dd4fb" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
            <div class="sm:grid gap-4 sm:grid-cols-12" id="mc_embed_signup_scroll">
              <div class="flex flex-col col-span-9">
                <label class="text-sm mb-2" for="mce-EMAIL">Email address</label>
                <input class="email border border-current rounded bg-transparent text-base px-4 py-2" type="email" value="" name="EMAIL" id="mce-EMAIL" required>
              </div>
              <div class="flex sm:flex-col justify-end col-span-3 mt-4 sm:mt-0">
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_eecd09ba159047b94f51a2c54_9fd04dd4fb" tabindex="-1" value=""></div>
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="inline-block bg-slate text-white py-2 px-16 self-start hover:bg-slate-900 focus:bg-slate-900 transition-colors duration-300 cursor-pointer">
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
  @include('_partials.footer')
@endsection
