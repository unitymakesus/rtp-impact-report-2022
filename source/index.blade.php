@extends('_layouts.main')

@section('body')
  @include('_partials.header')
  <main class="overflow-x-hidden" role="main">
    <section class="py-16">
      <div class="container">
        <h2 class="text-5xl lg:text-7xl xl:text-9xl font-bold">At-a-Glance</h2>

        <div class="text-red mb-16">
          <h3 class="font-bold text-6xl mb-4">RTP is</h3>
          <ul class="grid gap-8 lg:grid-cols-12 list-none p-0 m-0">
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">7,000</strong> Acres</li>
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">375+</strong> Established and Startup Companies</li>
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">60,000+</strong> Employees</li>
          </ul>
        </div>

        <div class="text-purple">
          <h3 class="font-bold text-6xl mb-4">2022 Growth by the Numbers</h3>
          <ul class="grid gap-8 lg:grid-cols-12 list-none p-0 m-0">
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">1,600</strong> Jobs Announced</li>
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">$887.1M</strong> Investments Announced</li>
            <li class="card bg-black bg-opacity-5 p-8 lg:col-span-4 font-bold text-xl"><strong class="block text-5xl">42%</strong> Minority & Women-Owned Businesses of RTF Vendor Contracts</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="bg-slate text-white py-16">
      <div class="container max-w-5xl">
        <h2 class="text-5xl lg:text-7xl xl:text-9xl font-bold text-gray">Community</h2>
        <p>RTP is more than a workplace. We support a community of doers and dreamers who want to engage and merge their interests to live, work and recreate. Whether it means developing new cures for cancer at a national lab or sharing locally-brewed drinks at Boxyard, our experience is multicultural and inclusive.</p>

        <div class="tabs tabs--horizontal mt-12">
          <div role="tablist" aria-orientation="horizontal" aria-label="">
            <h3>
              <button role="tab" class="text-3xl font-bold text-red" id="tab-boxyard" aria-selected="true" aria-controls="tabpanel-boxyard">
                Boxyard RTP
              </button>
            </h3>
            <h3>
              <button role="tab" class="text-3xl font-bold text-light-blue" id="tab-hub" aria-selected="false" aria-controls="tabpanel-hub">
                Hub RTP
              </button>
            </h3>
            <h3>
              <button role="tab" class="text-3xl font-bold text-mint" id="tab-frontier" aria-selected="false" aria-controls="tabpanel-frontier">
                Frontier RTP
              </button>
            </h3>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-boxyard" aria-labelledby="tab-boxyard">
            <p>We celebrated 1 year of small businesses doing big things at Boxyard! This hyper-local cargotecture is a community made up of a diverse mix of entrepreneurs, artists and creatives.</p>

            <div class="slider">
              <img class="lazyload" data-src="/assets/images/boxyard/IMG_9321.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/SoapBox Comedy Show 2.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/SoapBox Comedy Show 1.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/SlowArtTour-ArtGallery-PopBox.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/ArtInBloom.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/8BP08134.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/8BP08822.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/8BP08866.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/20220604-8BP08341.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/20220604-8BP08393.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/20220604-8BP00140.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/IWD-80.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/boxyard/IWD-65.jpg" alt="" data-expand="-10">
            </div>

            <h4 class="text-xl font-bold text-red">Boxyard Turns One</h4>
            <div class="mb-8">
              <div class="plyr__video-embed">
                <iframe src="https://www.youtube.com/embed/O3AkME9hB-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>

            <div class="plyr__video-embed">
              <iframe src="https://www.youtube.com/embed/ZtY5ZFiu0JM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="grid gap-4 md:grid-cols-12">
              <div class="col-span-8">
                <h4 class="text-xl font-bold text-red">2022 Growth by the Numbers</h4>
                <div class="grid gap-6 sm:grid-cols-2 max-w-xl">
                  <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                    <strong class="block text-5xl">40</strong> Upcycled Shipping Containers
                  </div>
                  <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                    <strong class="block text-5xl">15+</strong> Unique Local Restaurants and Retailers
                  </div>
                  <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                    <strong class="block text-5xl">200+</strong> Events, Including 4+ Days of Live Music Per Week
                  </div>
                  <div class="bg-slate-alt text-gray p-8 font-bold text-xl">
                    <strong class="block text-5xl">1</strong> Dog Park (Barkyard)
                  </div>
                </div>
              </div>
              <div class="col-span-4">
                <h4 class="text-xl font-bold text-red">Awards & Accolades</h4>
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

            <h4 class="text-xl font-bold text-red">James Beard Finalists</h4>
            <p>The James Beard Awards recognizes exceptional talent and achievement in the culinary arts, hospitality, media, and broader food system, as well as a demonstrated commitment to racial and gender equity, community, sustainability, and culture.</p>
            <div class="grid gap-6 sm:grid-cols-3">
              <figure class="bg-white">
                <img class="lazyload" data-src="/assets/images/logos/fullsteam.png" alt="Fullsteam Brewery" data-expand="-10">
              </figure>
              <figure class="bg-white">
                <img class="lazyload" data-src="/assets/images/logos/lawrence-bbq.png" alt="Lawrence BBQ" data-expand="-10">
              </figure>
            </div>

            <h4 class="text-xl font-bold text-red">PopBox Second Cohort</h4>
            <p>PopBox is a 320-square-foot rotating shipping container backed by a micro-grant from NC IDEA and Research Triangle Foundation. This initiative aims to scale up women and BIPOC-owned businesses. Durham Tech has also partnered with Boxyard RTP to provide technical assistance and small business counseling to the 2022-2023 selected cohort.</p>
            <p>2021-22 Recipients: Thirteen West, Skyelight Living, Pop Box Gallery, Be Like Missy</p>
            <div class="grid gap-6 sm:grid-cols-2">
              <img class="lazyload" data-src="/assets/images/popbox/hummingbird-candle-co.jpeg" alt="Hummingbird Candle Co." data-expand="-10">
              <img class="lazyload" data-src="/assets/images/popbox/second-hand-concession-stand.jpeg" alt="2nd Hand Concession Stand" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/popbox/personality.jpeg" alt="PerSONALIty Designs" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/popbox/the-tatted-potter.jpeg" alt="The Tatted Potter" data-expand="-10">
            </div>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-hub" aria-labelledby="tab-hub" hidden>
            <p>Welcome to Research Triangle Park’s vibrant downtown, Hub RTP. This 100-acre, $1.5B project, will transform RTP into a destination where people can live, work, play, sleep, and stay. This year, we broke ground on a 125,000 square foot office-over-retail trio of buildings named Horseshoe. With construction underway, we anticipate sharing more announcements on residential construction starts, tenants who are moving in, and more from our hotel developer.</p>

            <div class="slider">
              <img class="lazyload" data-src="/assets/images/hub/DSC09111.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC04128.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC04064.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC03976.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC03420 (2).jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC04031.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC03880.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC03509.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC09259.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC09507 (2).jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC09146.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC09160 (1).jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DSC09091 (1).jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/hub/DJI_0152.jpg" alt="" data-expand="-10">
            </div>

            <h4 class="text-xl font-bold text-light-blue">2022 Growth by the Numbers</h4>
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

            <h4 class="text-xl font-bold text-light-blue">This is Hub RTP by Joshua Rowsey</h4>
            <div class="plyr__video-embed">
              <iframe src="https://www.youtube.com/embed/6NvQR2wsQCQ" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p>Revealed at the Horseshoe Groundbreaking on October 18, Joshua Rowsey shares what Hub RTP is all about with this spoken word piece. Joshua is a recording artist, actor, writer, and educator from North Carolina and program director of Durham-based Blackspace.</p>

            <h4 class="text-xl font-bold text-light-blue">The Main Attraction: Horseshoe at Hub RTP</h4>
            <div class="plyr__video-embed">
              <iframe src="https://www.youtube.com/embed/fn4UN_t75w4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <p>See, feel, hear the vision. This year was all about spreading the word at our own backyard.</p>

            <div class="grid gap-4 md:grid-cols-12">
              <div class="col-span-6">
                <h4 class="text-xl font-bold text-light-blue">Experience Center</h4>
                <ul class="list-triangles list-triangles--light-blue">
                  <li>We opened an immersive Hub Experience Center equipped with a 3D model and VR walkthrough of the development, a display wall with branded items exhibiting Hub’s energy, a breezeway for events, and AV displays featuring travel times and stock tickers of RTP companies.</li>
                  <li>In April we welcomed <a href="https://naioprd.org/" target="_blank">NAIOP Raleigh Durham</a> and nearly 300 guests on their Bus Tour through the Triangle</li>
                </ul>
              </div>
              <div class="col-span-6">
                <h4 class="text-xl font-bold text-light-blue">Awards & Accolades</h4>
                <ul class="list-triangles list-triangles--light-blue">
                  <li>Huburban Carpool Convos: Take a tour of the Triangle with us and some of the Triangle’s most notable leaders. Here, we discuss what Hub RTP means for our growing region.</li>
                </ul>
              </div>
            </div>
            <div class="grid gap-4 md:grid-cols-12">
              <div class="col-span-12">
                <h4 class="text-xl font-bold text-light-blue">Announcements</h4>
                <ul class="list-triangles list-triangles--light-blue md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-4">
                  <li><a class="hover:underline focus:underline" href="https://wraltechwire.com/2022/05/24/we-will-double-in-population-so-what-must-triangle-do-research-triangle-foundation-ceo-says/">We will double in population, so what must the Triangle do? Research Triangle Foundation CEO says…</a></li>
                  <li><a class="hover:underline focus:underline" href="https://wraltechwire.com/2022/10/17/the-future-of-rtp-horseshoe-at-hub-rtp-celebrates-groundbreaking-on-tuesday/">The future of RTP: Horseshoe at Hub RTP celebrates groundbreaking on Tuesday</a></li>
                  <li><a class="hover:underline focus:underline" href="https://www.cbs17.com/news/first-hub-rtp-project-starts-construction-more-projects-to-come/">First ‘Hub RTP’ project starts construction; more projects to come A ‘new downtown for RTP’ and ‘a brand new RTP:’ Horseshoe at the Hub project is underway</a></li>
                  <li><a class="hover:underline focus:underline" href="https://www.newsobserver.com/news/business/real-estate-news/article267471178.html">Tired of commuting to RTP? Pretty soon you’ll be able to live there. (Paywall)</a></li>
                  <li><a class="hover:underline focus:underline" href="https://greensboro.com/news/state-and-regional/research-triangle-park-will-soon-have-something-for-the-first-time-ever-residents/article_bba7f900-50b3-11ed-aff4-5f0b513314ee.html">Research Triangle Park will soon have something for the first time ever: residents</a></li>
                  <li><a class="hover:underline focus:underline" href="https://www.newsobserver.com/news/business/article264041561.html">Hub RTP update: Park’s first apartments coming soon to planned urban campus</a></li>
                  <li><a class="hover:underline focus:underline" href="https://wraltechwire.com/2022/11/03/horseshoe-at-hub-rtp-lands-first-office-tenant-data443/">Data443 announced as the first tenant for Horseshoe at Hub RTP</a></li>
                </ul>
              </div>
            </div>
            <div class="grid gap-6 md:gap-y-0 md:grid-cols-12">
              <div class="col-span-12">
                <h4 class="text-xl font-bold text-light-blue mb-0">Loved Locally</h4>
              </div>
              <div class="col-span-12 md:col-span-6">
                <p class="mt-0">This year, we partnered up with local fan favorites to amplify Hub’s promise as a destination centered around community, nature, and the best of North Carolina.</p>
                <ul class="list-disc pl-4 mb-4">
                  <li>Bee Downtown</li>
                  <li>Usu Candles</li>
                  <li>Mystic Farms: Hubourban</li>
                  <li>Durham Bulls</li>
                </ul>
                <div class="grid gap-6 grid-cols-3">
                  <img class="lazyload" data-src="/assets/images/other/bee-downtown.jpg" data-expand="-10" alt="Jars of honey from Bee Downtown.">
                  <img class="lazyload" data-src="/assets/images/other/usu-candle.jpg" data-expand="-10" alt="A person holding a Usu candle.">
                  <img class="lazyload" data-src="/assets/images/other/mystic-bourbon.jpg" data-expand="-10" alt="A bottle of Mystic bourbon next to a handcrafted mixed drink.">
                </div>
              </div>
              <div class="col-span-12 md:col-span-6">
                <img class="lazyload md:w-full md:h-full md:object-cover" data-src="/assets/images/other/durham-bulls.jpg" data-expand="-10" alt="Hub RTP team members hanging out infront of the Durham Bulls stadium.">
              </div>
            </div>
          </div>
          <div tabindex="0" role="tabpanel" id="tabpanel-frontier" aria-labelledby="tab-frontier" hidden>
            <p>Launched in 2015, this innovation community offers free coworking and events designed for people to connect and grow professionally. Once an old IBM campus, the Frontier’s indoor and outdoor office and lab space is home to a third of RTP companies!</p>

            <div class="slider">
              <img class="lazyload" data-src="/assets/images/frontier/FQ5yVcMWYAAJiFK.jpeg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/FUlQGD_WQAI7qf7.jpeg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/IMG_0019 (1).jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/IMG_9920.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/IMG_9664.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/56-IMG_1474.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/96-IMG_1521.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/OTM-Emotional-IQ.JPG" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/DorianBolden-16.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/IWD-22-v2.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/RyanTimms-4.jpg" alt="" data-expand="-10">
              <img class="lazyload" data-src="/assets/images/frontier/DSC02590.jpg" alt="" data-expand="-10">
            </div>

            <h4 class="text-xl font-bold text-mint">2022 Growth by the Numbers</h4>
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

            <h4 class="text-xl font-bold text-mint">Caffeinate Your Career</h4>
            <p>Caffeinate your Career is a YouTube series that gives an inside look to different career pathways from founders and entrepreneurs at Frontier RTP.</p>
            <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/videoseries?list=PLQWg0VBT7RCA6jB4de_cs5AW9eVo4fCqx" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            <h4 class="text-xl font-bold text-mint">WRAL Startup Guide: Inside Frontier RTP</h4>
            <p><a class="underline" href="https://wraltechwire.com/2022/08/29/inside-frontier-rtp-our-latest-triangle-startup-guide-exclusive-report/" target="_blank">WRAL Startup Guide: Inside Frontier RTP</a></p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-16">
      <div class="container max-w-5xl">
        <h2 class="text-dark-blue text-5xl lg:text-7xl xl:text-9xl font-bold">DEI+ Partnerships</h2>
        <div class="max-w-2xl">
          <p>During our 300 in 100 RTP company interviews, we learned that diversity, equity, inclusion and belonging is crucial to the success of our stakeholders. As we blur silos across RTP companies to collaborate and synergize our efforts, we benefit from the resulting advancement in talent attraction, contributing to better business outcomes.</p>

          <h3 class="text-dark-blue font-bold text-2xl">STEM RTP</h3>
          <p>The Research Triangle Park Charitable Fund, in partnership with the RTP Diversity, Equity and Inclusion (DEI) Collective announced the second cohort for the STEM RTP grant.⁠⁠These funds are awarded to programs working at the intersection of STEM and diversity, equity and inclusion.</p>
        </div>

        <h4 class="text-dark-blue font-bold text-xl">2022 Recipients</h4>
        <div class="grid gap-x-8 gap-y-16 sm:grid-cols-12 mt-4">
          @foreach ($recipients as $recipient)
            <article class="relative sm:col-span-6 lg:col-span-4">
              <figure class="flex items-center justify-center relative min-h-[300px] bg-black bg-opacity-5">
                <img class="lazyload absolute w-full h-full object-contain object-center max-w-[400px] p-8 mix-blend-multiply" data-src="{{ $recipient->logo }}" alt="" data-expand="-10">
              </figure>
              <span class="mt-4 block">
                @if ($recipient->link)
                  <a class="a11y-link-wrap hover:underline focus:underline" href="{{ $recipient->link }}">{{ $recipient->title }}</a>
                @else
                  {{ $recipient->title }}
                @endif
              </span>
            </article>
          @endforeach
        </div>

        <div class="max-w-6xl">
          <h3 class="text-dark-blue text-2xl font-bold">RTP DEI Collective</h3>
          <p>Founded in the fall of 2019 with the goal of uniting and amplifying RTP companies’ diversity, equity and inclusion efforts, the RTP DEI Collective has grown to include more than 30 companies and partners. The Collective works to:</p>

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

        <article class="bg-white p-8 max-w-4xl mb-8">
          <div class="grid gap-4 md:grid-cols-12">
            <div class="col-span-8">
              <div class="flex flex-col justify-between h-full">
                <div>
                  <h4 class="text-dark-blue text-xl font-bold mt-0">Crossroads Podcast</h4>
                  <p class="font-bold">Meet Ray Trapp and Sarah Chick at the crossroads of it all. Everything from DEI, talent, the Park, the Triangle Region and beyond.</p>
                </div>
                <a class="inline-block bg-slate text-white p-4 self-start hover:bg-slate-900 focus:bg-slate-900 btn-offset transition-colors duration-300" href="https://podcasts.apple.com/us/podcast/crossroads-rtp/id1609428599">Listen to the Crossroads Podcast</a>
              </div>
            </div>
            <figure class="col-span-4">
              <img class="lazyload" data-src="/assets/images/rtp-crossroads-podcast.jpg" alt="Cover art for the RTP Crossroads Podcast with Ray Trapp." data-expand="-10">
            </figure>
          </div>
        </article>

        <div>
          <h4 class="text-dark-blue text-xl font-bold mt-4">Breaking the Bias Annual Event</h4>
          <img class="max-w-xl w-full lazyload" data-src="/assets/images/other/IWD-44.jpg" alt="" data-expand="-10">
          <p>On International Women’s Day, we asked women leaders across RTP to share their thoughts about success, their leadership styles and the benefits of working within RTP.</p>
          <p><a class="underline" href="https://wraltechwire.com/2022/03/09/women-of-rtp-demand-that-execs-break-the-bias-do-more-to-improve-equality/">Check out what we learned</a></p>
        </div>
      </div>
    </section>

      <section class="bg-slate text-white py-16">
        <div class="container max-w-5xl">
          <h2 class="text-5xl lg:text-6xl font-bold text-gray">Industry Growth</h2>
          <h3 class="text-2xl font-bold uppercase mb-4">News</h3>

          <div class="grid gap-8 sm:gap-y-16 sm:grid-cols-12">
            @foreach ($news_items as $news)
              <article class="relative sm:col-span-6 lg:col-span-4">
                <figure class="relative h-0 pb-48 overflow-hidden mb-2">
                  <img class="lazyload absolute object-cover w-full h-full" src="{{ $news->image }}" alt="">
                </figure>
                <h4 class="inline-block mt-0">
                  <a class="hover:underline focus:underline a11y-link-wrap" href="{{ $news->url }}">{{ $news->title }}</a>
                </h4>
              </article>
            @endforeach
          </div>
        </div>
      </section>

      <section class="py-16">
        <div class="container max-w-5xl">
          <div class="max-w-4xl">
            <h2 class="text-5xl lg:text-6xl font-bold mb-8">Behind RTP: Research Triangle Foundation</h2>
            <p>It takes a lot of extraordinary people to make RTP an extraordinary community. Research Triangle Foundation rigorously tests its activities against the feedback we receive from RTP companies and our communities.  Our mission established in 1959 remains relevant today - the Foundation exists to create opportunities that positively impact all North Carolinians.</p>
          </div>

          <div class="max-w-6xl">
            <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
            <ul class="grid gap-8 md:grid-cols-12 list-none p-0 m-0">
              <li class="card text-dark-blue bg-black bg-opacity-5 p-6 md:col-span-4 font-bold text-xl">Facilitate collaboration between the Triangle universities.</li>
              <li class="card text-red bg-black bg-opacity-5 p-6 md:col-span-4 font-bold text-xl">Promote cooperation between universities and industry.</li>
              <li class="card text-purple bg-black bg-opacity-5 p-6 md:col-span-4 font-bold text-xl">Create an economic impact for the residents of North Carolina.</li>
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
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="inline-block bg-slate text-white py-2 px-16 self-start hover:bg-slate-900 focus:bg-slate-900 btn-offset transition-colors duration-300 cursor-pointer">
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
  @include('_partials.footer')
@endsection
