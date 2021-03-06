@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'All the latest JAKATA news',
	'keywords' => 'Jakata news, Jakata stories, hairdressing news, salon news',
	'ogtitle' => 'Essential Looks 2017 - in-salon competition',
	'ogdescription' => 'Every season Schwarzkopf launches their latest \'Essential Looks\' collections. Three sets of looks that are inspired by the upcoming trends in Paris, Milan, New York and London.
	We run an internal competition to coincide with the launch of the collections, to get our team members to interpret their favourite Essential Look.',
	'ogimage' => url('/') . '/images/newspics/el_group_shot_meta.jpg',
	'title' => 'Jakata Salon - Hairdressing News - Hairdressers in Warrington'
	])
	
@stop

@section('content')

<script type="text/javascript">
window.addEvent('domready', function(){
	  new Fx.Accordion($('accordion'), '#accordion .reveal', '#accordion .hidden');
	  });
</script>

<section id="news">

<section id="accordion">

<article class="article">
<a id="EL17" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/group-shot.jpg', 'Essential Looks') }}
<h2>Essential Looks 2017</h2>
<p><strong>Every season Schwarzkopf launches their latest 'Essential Looks' collections. Three sets of looks that are inspired by the upcoming trends in Paris, Milan, New York and London.</strong></p>
<p>We run an internal competition to coincide with the launch of the collections, to get our team members to interpret their favourite Essential Look.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<h3>The Competitors</h3>
<p>Stylists from both <strong>Jakata</strong> and sister salon <strong>Paul Kemp Hairdressing</strong> took part in the challenge, all coming up with their own unique take on their favourite look from this season.</p>
{{ Html::image('images/newspics/el_the_teams_big.jpg', 'The Stylists', ['class' => 'news-image']) }}
<h3>Abbi Clarke (PK)</h3>
{{ Html::image('images/newspics/el_abbi.jpg', 'Abbi\'s entry', ['class' => 'news-image']) }}
<h3>Caleb Barrie (Jakata)</h3>
{{ Html::image('images/newspics/el_caleb.jpg', 'Caleb\'s entry', ['class' => 'news-image']) }}
<h3>Jo Birchall (PK)</h3>
{{ Html::image('images/newspics/el_jo.jpg', 'Jo\'s entry', ['class' => 'news-image']) }}
<h3>Kate O'Halleran (PK)</h3>
{{ Html::image('images/newspics/el_kate.jpg', 'Kate\'s entry', ['class' => 'news-image']) }}
<h3>Laura Hall (Jakata)</h3>
{{ Html::image('images/newspics/el_laura__h.jpg', 'Laura\'s entry', ['class' => 'news-image']) }}
<h3>Layla Relf (Jakata)</h3>
{{ Html::image('images/newspics/el_layla.jpg', 'Layla\'s entry', ['class' => 'news-image']) }}
<h3>Louise Bailey (PK)</h3>
{{ Html::image('images/newspics/el_louise.jpg', 'Louise\'s entry', ['class' => 'news-image']) }}
<h3>Matt Lane (Jakata)</h3>
{{ Html::image('images/newspics/el_matt.jpg', 'Matt\'s entry', ['class' => 'news-image']) }}
<h3>Natalie Doxey (Jakata)</h3>
{{ Html::image('images/newspics/el_nat.jpg', 'Nat\'s entry', ['class' => 'news-image']) }}
<h3>Shell Railton (PK)</h3>
{{ Html::image('images/newspics/el_shell.jpg', 'Shell\'s entry', ['class' => 'news-image']) }}
<h3>Tash Bailey (PK)</h3>
{{ Html::image('images/newspics/el_tash.jpg', 'Tash\'s entry', ['class' => 'news-image']) }}
<h3>Laura Minnett (Jakata)</h3>
{{ Html::image('images/newspics/lel_aura_m.jpg', 'Laura\'s entry', ['class' => 'news-image']) }}
<h3>The Finished Looks</h3>
{{ Html::image('images/newspics/el_group_shot_big.jpg', 'The finished looks', ['class' => 'news-image']) }}
<p>The standard of the work for this years competition was the highest yet! It made judging extremely difficult!</p>
<p>After much deliberation the judges decided that <strong>Laura Hall</strong> was the winner with <strong>Natalie Doxey</strong> coming second and <strong>Michelle Railton</strong> third.</p>
<p>They win the chance to take part in a photoshoot to recreate their looks with professional models, plus a session styling course.</p>
<p>Our apprentice Layla won her catagory with the beautiful cut and colour she did - the standards of which were up there with the senior stylists!</p>
<p><a href="http://www.schwarzkopf-professional.co.uk/skp/uk/en/home/trends/the-collection.html" target="_blank">See the Schwarzkopf Essential Looks collections that inspired our stylists here ></a></p>

</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2017-04-18">18<sup>th</sup> April 2017</time>
</article> <!--end #article-->
	
<article class="article">
<a id="MaisieBack" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/maisie_parker.jpg', 'Maisie and Parker') }}
<h2>Maisie Returns after Maternity leave</h2>
<p><strong>After taking 9 months out for maternity leave, we're happy to announce the return of Maisie!</strong></p>
<p>She'll be re-joining the team on a part time basis. Her initial hours are outlined below.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/maisie-hours_apr.jpg', 'April Hours', ['class' => 'news-image']) }}
{{ Html::image('images/newspics/maisie-hours_may.jpg', 'May Hours', ['class' => 'news-image']) }}
<p><strong>If you need any more information or would like to book in, just call the salon on 01925 242960</strong></p>
<p>Or contact us here: <a href="http://www.jakatasalon.co.uk/contact">Jakata Contact Page</a></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2017-04-6">6<sup>th</sup> April 2017</time>
</article> <!--end #article-->
	
<article class="article">
<a id="JimmyPhotoShoot" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/jim_pic_2.jpg', 'Jimmy at work') }}
<h2>Photoshoot for Jimmy</h2>
<p><strong>Jimmy recently received an invitation to work alongside some of the UK's top session stylists to create a photographic collection for national trade magazines. The shoot would also be used for major exposure across the internet.</strong></p>
<p>The brief was to create an interpretation of Schwarzkopf's latest 'Essential Looks' - a trend report magazine created from a collaboration of the catwalk shows from Milan, Paris, New York and London. This is broadcast over all of Europe and America.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/jim_montage_1.jpg', 'The day', ['class' => 'news-image']) }}
<p>Jimmy said <em>"Yet another great opportunity has been put my way! There's no way I could decline this offer! I have worked with a few of the guys in the past and know how skilled they are. The days went smoothly and the team were really passionate and influential. A high end shoot like this one is something I have always aspired to do. Now I have had a taste of this I definitely want to do more"</em></p>
{{ Html::image('images/newspics/jim_montage_2.jpg', 'The day', ['class' => 'news-image']) }}
<p>The photoshoot spanned over four days planning, prepping, styling and shooting. Through the whole time everyone was picking up new skills and ideas. 
Tyler Johnson headed up the team. Tyler is an international session stylists who works with many editorial companies such as Vogue, Elle and Esstetica, as well as working on fashion weeks all over the world. He is the main stylist who creates our 'Essential Look' trend report.</p>
{{ Html::image('images/newspics/jim_montage_3.jpg', 'The day', ['class' => 'news-image']) }}
<p><em>"To have another opportunity to work with Tyler was awesome. He is a stylist that I look up to and always admire the work he does, on this shoot he really let us take the reigns and make it our own, but he was always there with little pointers, tips and ideas. He supported our decisions and made the shoot the most relaxed shoot I've ever done. The end images were exactly what we wanted thanks to Tyler, His team and Colin Roy (the talented photographer)"</em></p>
<p class="big"><a href="https://www.youtube.com/watch?v=2rYhDCTufCM&feature=youtu.be" target="_blank">Click here to check out a video featuring Jimmy at work on the shoot, along with the other team members</a></p>
<p>(thanks to Austen Thomson for the video link)</p>
</section> <!--end .hidden-->
<p class="author">Published by Jimmy</p>
<time datetime="2017-04-5">6<sup>th</sup> April 2017</time>
</article> <!--end #article-->

<article class="article">
<a id="NewBlondMe" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/new_blonde_me_1.jpg', 'New BlondeMe') }}
<h2>New Bombshell for Blondes</h2>
<p><strong>The revamp of the iconic Schwarzkopf 'BlondMe' range has finally launched with some dramatic changes that are sure to make you stand out from the crowd!</strong></p>
<p>Powered by a brand new advanced bonding system built into the colouring products, lightening and lifting hair has never been easier or less damaging.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/new_blonde_me_all.jpg', 'New BlondeMe Collection', ['class' => 'news-image']) }}
{{ Html::image('images/newspics/new_blonde_me_2.jpg', 'Instant Blushes') }}
<p>The bonding system works by protecting and interlinking with the fibres within hair creating stronger bonds and minimising hair breakage.</p>
<p>Integrating the bonding technology into the shampoo and conditioners means new bonds will also be created in the hair shaft, leaving you with the soft, supple, blonde hair that defines perfection.</p>
<p>The intermixable pastel toners allow for even more creativity and diversity than ever before. Ideal for anyone feeling like being blonde just isn't enough.</p>
<p>We can create strong intense toning for the more adventurous or pastelizing these tones even further can achieve soft subtle hues, catering for everybody.</p>
<p class="big">Ask your stylist about the new 'BlondMe' range on your next visit</p>
</section> <!--end .hidden-->
<p class="author">Published by Caleb</p>
<time datetime="2017-02-10">10<sup>th</sup> Februaury 2017</time>
</article> <!--end #article-->
	
<article class="article">
<a id="InstantBlushes" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/blushes1.jpg', 'Instant Blushes') }}
<h2>Touch of Pastel</h2>
<p><strong>We are very excited to stock Schwarzkopf ‘Instant Blushes’ spray in pastel colours.</strong></p>
<p>They can be used to enhance your colour during your appointment or take a bottle home with you to maintain the look.
Schwarzkopf Instant Blushes are perfect for a party weekend,  music festivals or just trying out a new colour without the commitment.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/blushes_colours.jpg', 'Instant Blushes', ['class' => 'news-image']) }}
{{ Html::image('images/newspics/blushes2.jpg', 'Instant Blushes') }}
<p>You can personalise your look by placing slices of soft pastel through blonde lengths, spray on the ends for a dip-dye effect or spray all over for a real impact.</p>
<p>We have the full range of Strawberry, Jade, Ice and Steel Blue tones available.</p>
<p>You can use just one or use them all to create a different look every time you go out!</p>
<p>Each 250ml bottle is only &pound;15.95 and for a limited time <strong>receive 25% off any of the other products in the Schwarzkopf ‘Blonde Me’ range</strong>.</p>
<p class="big">Buy 3 bottles and get the 4th free!</p>
<p>Don’t forget to ask your stylists about your loyalty points!</p>
</section> <!--end .hidden-->
<p class="author">Published by Natalie</p>
<time datetime="2016-05-26">26<sup>th</sup> May 2016</time>
</article> <!--end #article-->
	
<article class="article">
<a id="GaryTaylor" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/mens_laura.jpg', 'Laura cutting her model') }}
<h2>Training Session with North West Hairdresser of the Year</h2>
<p><strong>A few weeks ago <em>Gary Taylor</em>, who was awarded the British North West Hairdresser of the year 2015, came into the salon to do a men's cutting course. We had our colleagues from Paul Kemp Hairdressing join us for the training session too.</strong></p>
<p>I asked Jakata senior stylist Laura Hall to put together a news feature about the day&hellip;</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>Gary was a lovely guy with a great personality, we all got on really well with him. He told us that he is from Halifax, comes from a long line of hairdressers and in 2019 his hair salon will be 100 years old!</p>
{{ Html::image('images/newspics/mens_demo.jpg', 'Gary Taylor demonstration', ['class' => 'news-image']) }}
<p>In the morning session Gary did 3 models, one long hair and two short hair.The first model had long hair past his shoulders, Gary took it up to his shoulders, layered and shaped it so it was structured but still looking masculine. He gave lots of hints and tips on how to cut and style long hair on men and keep it masculine. For example leaving the hair slightly damp after blow drying so as it dries naturally it keeps the movement natural of their hair.</p>
{{ Html::image('images/newspics/mens_nat.jpg', 'Nat and her model', ['class' => 'news-image']) }}
<p>The second model was a short cut, he showed us two different techniques of cutting the back and sides but achieving the same result. First he showed us with a cut throat razor and a comb, then he cut the other side with the clippers without using any guards.</p>
{{ Html::image('images/newspics/mens_matt.jpg', 'Matt with his model', ['class' => 'news-image']) }}
<p>His third model was similar to the second, but on this guys hair he showed us how to do a blend from almost a bare blade to the equivalent length of a number 2 guard. He also left a weight line in his hair and told us how to soften it without completely  blending it away.</p>
{{ Html::image('images/newspics/mens_vik.jpg', 'Vikki with her model', ['class' => 'news-image']) }}
<p>For the afternoon session we all had models in and did at least one person each. Some people did two or three people. Gary walked around and helped everyone decide what technique of cutting to use so we could each try something new that he had demonstrated.</p>
<p>I found the training very interesting and enjoyed trying something new. When using the clippers without a guard for the first time was nerve racking, but once I'd got the hang of it the results were really good.</p>
<p class="big"><a href="http://www.hji.co.uk/hair/gary-taylor-north-western-hairdresser-year-finalist-collection/" target="_blank">To find out more about Gary Taylor click here &gt;</a></p>
</section> <!--end .hidden-->
<p class="author">Published by Laura</p>
<time datetime="2016-05-12">12<sup>th</sup> May 2016</time>
</article> <!--end #article-->
	
<article class="article">
<a id="EssentialLooksComp" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/el/groupshot.jpg', 'Essential Looks Entries') }}
<h2>Essential Looks Competition</h2>
<p><strong>A couple of weeks ago we had our 3rd in-salon ‘Essential Looks’ competition - stylists from the Jakata and PK teams paired up to create a look inspired by the latest Schwarzkopf collections. In the previous competitions the stylists carried out the looks on training heads. We thought we’d mix it up a bit this time and have members of the public as models for the teams!</strong></p>
<p>After a morning session running through the looks with Steve Ward (Schwarzkopf educator) the stylists paired off into 5 teams and came up with a look taking influence from the latest collections - plus choosing something that would suit their models lifestyle.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>The looks had to be completed within a certain timescale after which each team presented their model and explained the techniques they had used and where they took their inspiration from.</p>
<h4>Leon (PK) &amp; Tash (PK)</h4>
<p>Leon &amp; Tash took their colour inspiration from the <strong>'Urban Sport'</strong> collection, using pre-lightened diamond shaped panels, they used a variety of the new <em>Schwarzkopf 'ColorWorx'</em> colours to create a bold, high impact look.</p>
<p>Their cut &amp; style was taken from the <strong>'FreeCreation'</strong> collection. A bold, structured fringe creates maximum impact. The look was styled and finished using <em>Schwarzkopf Osis 'Blow &amp; Go', 'Sparkler' and 'Elastic' finishing spray.</em></p>
{{ Html::image('images/newspics/el/leon_tash.jpg', 'Leon & Tash', ['class' => 'news-image']) }}
<h4>Nat (JAKATA) &amp; Ashley (PK)</h4>
<p>Nat &amp; Ashley sectioned the hair into panels under a veil and pre-lightened prior to applying <em>Schwarzkopf 'ColorWorx'</em>  teal fading into blue, and pink fading into purple. The colour was inspired by a look from the <strong>'Urban Sports'</strong> collection.</p>
<p>The cut and style was heavily influenced by the '<strong>Future Wave</strong>' trend. Triangular sections were taken to create a textured cut. A curling wand was used to create soft textured curls. <em>Schwarzkopf Osis 'Undercoat', 'Dust it' and 'Elastic'</em> were used to create the finished look.</p>
{{ Html::image('images/newspics/el/nat_ash.jpg', 'Nat & Ashley', ['class' => 'news-image']) }}
<h4>Kellie (PK) &amp; Maisie (JAKATA)</h4>
<p>Kellie &amp; Maisie took their colour inspiration from the <strong>'Urban Sports'</strong> collection. Using a diamond shaped sectioning pattern they created a purple ombre with the new <em>'ColorWorx'</em> colours.</p>
<p>Their cut and style was taken from the <strong>'FreeCreation'</strong> collection- a blunt, bold fringe sets the style off. The hair was styled smooth and shiny using <em>Osis 'Tame Wild' and 'Blow &amp; Go'.</em></p>
{{ Html::image('images/newspics/el/maisie_kel.jpg', 'Kellie & Maisie', ['class' => 'news-image']) }}
<h4>Caleb (PK) &amp; Laura (JAKATA)</h4>
<p>Caleb &amp; Laura were also heavily influenced by the <strong>'Urban Sports'</strong> collection. Laura used a graduating colour technique shifting colour from green to blue to purple with the <em>'ColorWorx'</em> palette.</p>
<p>Caleb's haircut was inspired from the <strong>'FreeCreation'</strong> collection - a bold undercut style, with the top dressed in an upward fashion with a wavy texture. <em>Schwarzkopf Osis 'Flex Wax', 'Dust It' and 'Session'</em> were applied to finish the striking look.</p>
{{ Html::image('images/newspics/el/caleb_laura.jpg', 'Caleb & Laura', ['class' => 'news-image']) }}
<h4>Shell (PK) &amp; Matt (JAKATA)</h4>
<p>Shell &amp; Matt pre-lightened their models hair prior to applying shades of blue and green from the <em>'ColorWorx'</em> range for their <strong>'Urban Sport'</strong> inspired colour.</p>
<p>The cut and style had influences from 2 different looks from within the <strong>'FreeCreation'</strong> collection. <em>Osis 'Blow &amp; Go', 'Upload', 'Dust It' and 'Mighty Matte'</em> were all used to style the hair.</p>
{{ Html::image('images/newspics/el/matt_shell.jpg', 'Shell & Matt', ['class' => 'news-image']) }}
<h4>The Final Looks</h4>
{{ Html::image('images/newspics/el/groupshot_large.jpg', 'The Final Looks', ['class' => 'news-image']) }}
<h4>The Judging</h4>
<p>The Judges (Adam, Jimmi, Steve and Natalie) inspected each models hair style and awarded points on creativity, application, cutting &amp; styling skills and presentation skills.</p>
<p><strong>It was a tough call as all the models looked fantastic but the top 3 were chosen…</strong></p>
{{ Html::image('images/newspics/el/winners.jpg', 'The Winners', ['class' => 'news-image']) }}
<p><strong>1st Place: Laura &amp; Caleb</strong></p>
<p><strong>2rd place: Kellie &amp; Maisie</strong></p>
<p><strong>3rd Place: Matt &amp; Shell</strong></p>
<p>Laura said <em>"I was totally shocked that I won! I was pleased to win a free day's holiday too!"</em></p>
<p>Caleb added <em>"It was a huge confidence boost plus it was such a fantastic day - I can't wait for the next one in November!"</em></p>
<p class="big"><a href="http://www.schwarzkopf-professional.co.uk/skp/uk/en/home/trends/essential-looks.html" target="_blank">Check out the Schwarzkopf Essential Looks here &gt;</a></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2016-04-15">15<sup>th</sup> April 2016</time>
</article> <!--end #article-->
	
<article class="article">
<a id="EliteSymposium" class="anchor"></a>	
<section class="visible">
{{ Html::image('images/newspics/symposium1.jpg', 'Elite Symposium') }}
{{ Html::image('images/newspics/symposium2.jpg', 'Elite Symposium') }}
<h2>Schwarzkopf Professional Elite Symposium</h2>
<p><strong>Hairdressers always love the opportunity to meet up with like minded people to share ideas and see what’s happening in the industry as a whole. There are usually a few events each year put on by the major product suppliers (Tigi, Schwarzkopf GHD) geared at salons coming together to keep up to date with the latest movements in the hairdressing industry.
</strong></p>
<p>When we were told about the <em>Schwarzkopf Professional Elite Symposium</em> - a day of seminars, competitions, product launches, black tie(ish) meal and a night club - we knew we had to get as many of the team going for inspiration and education (plus we always love a good  party session!). We ran an incentive in the salon and 10 of the guys from across both salons won tickets to join the 300+ hairdressers invited to the event.
</p>
<p><strong>Matt Lane</strong> was one of the stylists from JAKATA who attended and I asked him to write an article about his experience&hellip;
</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/symposium3.jpg', 'Elite Symposium entrance') }}
<p>The <em>Jakata</em> and <em>Paul Kemp Hairdressing</em> team’s set off together on their drive down to Birmingham on a very sunny bright morning  - after much discussion on what we were going to wear!</p>
<p>We arrived at the Belfry Golf club, which was venue for the <em>Schwarzkopf Professional Elite Symposium</em> - an all day hairdressing event for hairdressing professionals across the UK.</p>
<p>When we arrived at the Belfry we were greeted by Schwarzkopf account managers who sorted us out with tea and coffee - no doubt to keep us awake! While we were waiting to go into the first session we were able to get a glimpse of the models getting their makeup done for the stylists who were entering the competition later on.
</p>
<p>At around 12 a gourmet lunch buffet was provided which was delicious!</p>
<p>Shortly after that we were ushered into the <em>Essential Looks</em> event room. The stage was lit with vibrant coloured spot lights and dressed with banners and posters from the latest collections.</p>
{{ Html::image('images/newspics/symposium4.jpg', 'Steven McDowell') }}
{{ Html::image('images/newspics/symposium5.jpg', 'Osis') }}
<p>We found our table and <em>Steven McDowle</em> welcomed us to the event and went on to introduce the re-launch of the <em>Schwarzkopf Osis</em> product range. We were talked through the new Osis products for prep, style, texture and finishing. <em>‘Bouncy Curls’, ‘Damped’, ‘Curl Honey’, ‘Under Coat’, ‘Hairbody’, ‘Mighty Matte’, ‘Big Blast’, ‘Play Tough’, ‘G-force’ and ‘Tame Wild’</em> completed the line-up.</p>
<p>Following this the <em>Essential Looks</em> show started. This seasons Essential looks is called ‘Made To Create’ and comprises of 3 main Trends for spring/summer recreated by the Schwarzkopf ambassador stylists <em>Charlie Taylor, Andy Smith, Kay Brady and Kevin Caan</em>. Showcasing their interpretation of ‘Urban Sports’, ‘Freecreation’ and ‘Future Wave’. Models were brought on stage to display all 3 trends, breaking down each look and explaining the colouring/cutting/styling techniques used.</p>
{{ Html::image('images/newspics/symposium6.jpg', 'Essential Looks') }}
<p><strong>Urban sports</strong> focused on the sporty side of fashion with light breathable fabrics with trainers. The colour was inspired by the new <em>Igora Colourworx</em> intense colours to create bold colour effects or panels hidden to add interest.  The styling was a mixture of short texture, loose messy topknots, flicks and quiffs plus sleek, straight hair.</p>
<p><strong>Freecreation</strong> fashion statements are layered looks with raw graphic shapes, the colour direction is blonde hues and tones, using freehand techniques. Styling is bold, statement shapes, choppy texture and long silky tamed hair.</p>
<p>And finally <strong>Future Wave</strong> was a space-aged trend led by pure crisp whites and silver metallic’s but with modern age twist by incorporating jackets and hoodies. The colour inspiration was inspired by Igora nude tones to create effortless colour. The style direction was looking more towards volumised curls but also sleek waves, geared towards a modern and commercial look.</p>
{{ Html::image('images/newspics/symposium7.jpg', 'Inspire UK') }}
<p>After the presentation we watched  the <em>Inspire Live UK</em>, a competition with stylist’s from different salon’s all around from UK displaying their colours, cut’s and styling inspired by fashion and previous Essential Looks. ‘A competition that gives the next generation of Schwarzkopf’s hairdressing talent their chance to shine’. It was very exciting and inspiring  - so you never know, next year one of us might be entering!!</p>
{{ Html::image('images/newspics/symposium_group.jpg', 'Group Shot', array('class' => 'news-image')) }}
<p>We checked into our rooms and started to get ready with a few cheeky drinks to set the night off well. We made our way back, all suited &amp; booted. We were greeted with a glass of champagne and got the opportunity to chat and mingle with stylists from various salons from around the UK.</p>
{{ Html::image('images/newspics/symposium8.jpg', 'Meal Time') }}
{{ Html::image('images/newspics/symposium9.jpg', 'Team Shot') }}
<p>A three course meal followed complete with lots and lots of wine! Once we had eaten the winners were announced for the <em>Inspire Live UK</em> final and from there we made our way to the <em>Bel Air nightclub</em> which was on the grounds of the hotel. We partied the night away&hellip; it’s safe to say there were a fair few salon’s on the dance floor along with lots of booze and good times!  &hellip;however the day after was a different story!</p>
<p><strong>Overall it was a great experience, speaking with people from other salons, the stylists on stage and the stylist entering the competition.  I personally had so much fun and feel really inspired by this year’s Essential Looks!!! Can’t wait for next year!</strong></p>
</section> <!--end .hidden-->
<p class="author">Published by Matt</p>
<time datetime="2016-04-01">1<sup>st</sup> April 2016</time>
</article> <!--end #article-->

<article class="article">
<a id="Tweens" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/bedhead_montage.jpg', 'Bed Head Tweens') }}
<h2>Bed Head Tweens are back</h2>
<p><strong>Its that time of year again when TIGI release 750ml shampoos and conditioners for you to have at home.
We personally love this range, there is something for everyone.</strong></p>
<p><strong>TIGI Bed Head Urban Antidotes Re-Energize Shampoo and Conditioner</strong> strengthens and adds shine to your hair while sealing the cuticle and helping retain colour. An effective cleanser, it will condition and thicken your hair, making sure moisture balance levels are regulated. Get your hair looking its best with this hydrating, strengthening and shine enhancing shampoo.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p><strong>TIGI Bed Head Urban Antidotes Recovery Shampoo and Conditioner</strong> cleanses and revamps your hair and is great for dry, damaged hair in much need of moisture. It protects colour and keeps heat damage to a minimum. If you need to maintain moisture balance in your hair this is perfect for you.</p>
<p>The <strong>TIGI Bed Head Urban Antidotes Resurrection Shampoo</strong> cleanses, conditions and thickens hair in one use! Protect your colour and get that much needed thermal protection. It also provides first aid for less breakage for those who love colour change or blonde.</p>
<p>All of the team are highly trained with Urban Antidotes and can prescribe you with the perfect one to suit your needs.
at only £29.95 you get both shampoo and conditioner, an epic size with a mini price. If used correctly they will last around 5 Months. That works out at 0.20p per wash!</p>
<p class="offer_heading"><strong>We know you will love them just as much as us.</strong>  </p>
<p class="offer"></p>
</section> <!--end .hidden-->
<p class="author">Published by Nat</p>
<time datetime="2015-03-15">15<sup>th</sup> March 2016</time>
</article> <!--end #article-->

<article class="article">
<a id="PantoneTrends" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/pantone.jpg', 'Pantone Colors of the Year') }}
<h2>Pantone &amp; Colour Trends</h2>
<p><strong>Here at Jakata we like to keep up to date with the latest trends, and when it comes to colour we often look outside of the fashion and hair world for inspiration. A key player in the world of colour in design is ‘Pantone’ who have recently released their latest ‘Color of the Year’.
</strong></p>
<p>Pantone was founded in 1963 and is one of the first colour matching systems that most design company's whether it be graphic design, clothing, cosmetics, florists and printers use as a colour matching standard, plus look to for inspiration. They are the definitive authority on colour.</p>
<p>What better place to look for new trends!</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/rose_quartz.jpg', 'Rose Quartz') }}
{{ Html::image('images/newspics/serenity.jpg', 'Serenity') }}
<p>Every year Pantone declares a particular colour "Color of the Year", and this year they have decided to have 2 complimenting colours of the Year</p>
<p>Introducing ‘Rose quartz’ and ‘Serenity’ - two beautiful pastel colours perfect for anyone looking for soft light and airy colours taking you right on trend for the summer. </p>
<p><em>“Joined together rose quartz and serenity demonstrate an inherent balance between warmer embracing rose tone and the cooler tranquil blue, reflecting  connection and wellness as well as a soothing sense of order and peace”</em> - Leatrice Eisemen executive director, Pantone Color institute.</p>
<p class="offer_heading">Schwarkopf have been working hard at creating new colours to keep up with the trend for pastel tones. Last years release of the 'Pearlescence' range created a new palette of beautiful pastels and the upcoming release of 'ColorWorx' will ensure we have even more creative tones to work with!</p>
<p class="offer"><strong>To book in for a consultation to see if these new tones will suit you, just call us on 01925 242960</strong></p>
</section> <!--end .hidden-->
<p class="author">Published by Vikki</p>
<time datetime="2016-03-12">12<sup>th</sup> March 2016</time>
</article> <!--end #article-->

<article class="article">
<a id="NatSenior" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/nat_senior.jpg', 'Natalie Senior Stylist') }}
<h2>Natalie Promoted to Senior Stylist</h2>
<p><strong>We’re proud to announce that our stylist Natalie Doxey has been promoted to Senior Stylist level. Natalie has met the standards required to be given this sought after title.</strong></p>
<p>She has been with the company for 8 years now working her way up from a 1st year apprentice all the way up to a senior stylist and has firmly embedded herself as key member of the team, playing an important part of our eduction team as well.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>To become a Senior Stylist there is a strict criteria that needs to be fulfilled. The stylist’s skill set and the quality of their work is closely monitored, alongside their customer service skills. Natalie is a sought after stylist and her client base is growing at a fast rate with her customer feedback always of the highest level. She has consistently delivered at this exceptionally high standard for the last 6 months it was decided that she would be promoted to Senior Stylist level, to join fellow senior stylists Jimmy, Maisie and Laura H.</p>
<p><em>Nat said “I’ve been working towards this promotion for about a year and I’m so happy to get it!”</em></p>
<p class="offerHeading"><strong>If you'd like to book in for a FREE consultation with Natalie or any of our other stylists just call 01925 242960</strong></p>
</section> <!--end .hidden-->
<p class="author">Published by Jimmy</p>
<time datetime="2016-03-01">3<sup>rd</sup> March 2016</time>
</article> <!--end #article-->

<article class="article">
<a id="ColorMasters" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/colour_masters.jpg', 'Colour Masters') }}
<h2>Colour Masters</h2>
<p><strong>Last year was a big movement in our education department. Our focus was on putting our stylist through their paces. We have always had a strong focus on eduction and developing our team’s skill sets, but to further this we put all of our senior team members through a colour master class.</strong></p>
<p>The Schwarzkopf Professional Colour Master Class represents a gold standard in colour education with an innovative delivery method. The learning units are dedicated to all aspects of colour, from the philosophy of colour, interpretation, selection and application. The focus of this course is not only on theory of colour but also a practical hands-on experience.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>Colour isn’t just a trend-led creative process, it’s a technical speciality which requires years of training and constant education to keep you ahead of the game and up to speed on trends, techniques and product updates. A fantastic colourist also needs to have an advanced understanding of the technical aspects of colour and the processes involved, including how best to implement those techniques for each individual client.</p>
<p>Maisie &amp; Laura travelled to London on a regular basis throughout the year to train with Schwarzkopf’s National technical specialists. Completing a final exam at the end of the year all of our team passed with flying colours… no pun intended! Now qualified colour masters they have brought the education back to the rest of the team. We have really seen a massive step up in our teams colour knowledge.</p>
<p>Natalie was recently promoted to Senior Stylist level and as part of her movement up the ranks she will also be completing the course over the next 12 months to her in line with the other senior team members.</p>
<p class="offerHeading"><strong>You can be always be confident in the knowledge that all the team here at JAKATA are trained to the highest levels in hairdressing.</strong></p>
</section> <!--end .hidden-->
<p class="author">Published by Jim</p>
<time datetime="2016-03-01">1<sup>st</sup> March 2016</time>
</article> <!--end #article-->
	
<article class="article">
<a id="WinterHair" class="anchor"></a>
<section class="visible">
{{ Html::image('/images/newspics/smooth-frizz.jpg', 'Smooth to Frizzy') }}
<h2>What does winter do to your hair?</h2>
<p><strong>As we’re moving into winter and the weather is getting colder and damper, many of us notice significant changes in the condition and texture of our hair. Here at Jakata we have come up with some easy tips for you to follow to keep your hair looking bouncy and static free this Christmas.</strong></p>
<p>When it’s cold outside we tend to pump our heating up to full blast. This dramatic change from cold to hot ensures our hair gets put through its paces! Cold air can cause the cuticle layer of the hair to lift, and going into a warm, dry interior environment then draws the moisture out of the hair, leaving it dry and frizzy. This also provides the perfect conditions for static, which we all know makes for unruly hair! Wind can also cause hair issues of its own. Exposure to strong winds can cause the hair to tangle. The wind blows the hairs against each other which roughens the cuticle causing the hairs to catch on one another.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('/images/newspics/bc_repair_rescue_treatment.jpg', 'BC Repair Rescue Treatment') }}
<p>To avoid these winter shocks to the hair, keep up-to date with your conditioning treatments. An intensive treatment is recommended about once a week, which you can carry out at home. Warm up a towel under hot water to wrap around your head after applying your treatment and keep this on for 10 minutes to replenish and lock in all the moisture you will be lacking. We recommend Schwarzkopf Moisture Kick Treatment or Repair Rescue Deep Nourishing Treatment.</p>
<h3>Hat Hair</h3>
<p>Nobody wants hat hair but it does seem unavoidable during the winter months. We recommend not applying your finishing products until you have taken your hat off (keeping a small supply in your desk draw at work is always handy).</p>
<p>Before you put your hat on, tie your hair in a loose bun on top of your head then when you take it out you will have a nice loose bounce to your hair. Alternatively you can platt your hair loosely under your hat to give a soft wave effect when taken out.</p>
<p class="offer_heading">For more tips on looking after your hair during Winter, just ask your Jakata stylist</p>
</section> <!--end .hidden-->
<p class="author">Published by Nat</p>
<time datetime="2015-11-25">25<sup>th</sup> November 2015</time>
</article> <!--end #article-->

<article class="article">
<a id="Fibreplex" class="anchor"></a>
<section class="visible">
{{ Html::image('/images/newspics/fibreplex2.jpg', 'Fibreplex') }}
<h2>Love colour but hate the damage?</h2>
<p><strong>Everyone loves to change their colour from time to time (or for some people every month!) As hairdressers we love the challenge of turning black hair blonde or blonde hair red, but with every colour change there is damage caused by the tint or bleach. 
A revolutionary new product by Schwarzkopf has just been launched and it is proven to reduce damage by 94%!</strong></p>
<p><em>FibrePlex</em> is Schwarzkopf’s first bond enforcing system to keep our silky, beautiful locks in amazing condition even with the most extreme colour changes. Thanks to the latest innovations in hair care we can all protect our hair from the damaging effect of tint and bleach.</p>
<p>At JAKATA we are now offering all of our colour clients this exclusive, in-salon, colour service booster as an add-on.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('/images/newspics/fibreplex1.jpg', 'Fibreplex') }}
<p>We’ve had this almost too-good-to-be-true product in the salon a few weeks now and we’ve been putting it to the test&hellip;</p>
<p>Senior stylist Maisie says
<em>“The possibilities for colour now seem endless - it’s an affordable colour booster for all of our clients. It means bigger colour jobs can potentially be carried out in one appointment instead of four or five.”</em></p>
<p><iframe src="https://www.youtube.com/embed/HeN7iiDRpME" width="90%" height="315" class="right" allowFullScreen></iframe></p>
<p>Suzi Thompson recently had FibrePlex as part of her colour visit after Natalie explained the benefits. She said
<em>“The condition of my blonde is loads better than normal and the darker colour in my hair seems to be staying in better and not washing out as fast”</em></p>
{{ Html::image('/images/newspics/fibreplex_nat.jpg', 'Fibreplex', array('class' => 'news-image')) }}
<p><strong>The launch of this product is huge for the hairdressing industry. Almost on the scale of the launch of GHD’s!</strong></p>
<p class="big"><em>So can we really put a price on healthy hair?</em></p>
<p class="big">For all of our wonderful existing and future colour clients we are offering FibrePlex for just £10 on top of your regular colour service price. This includes a FREE in salon  conditioning treatment.</p>
<p class="offer">And as if that’s not enough protection there is also a take home treatment for only £12.50. Use this twice a week and it will build and prep your hair for your next colour adventure!</p>
</section> <!--end .hidden-->
<p class="author">Published by Natalie</p>
<time datetime="2015-10-17">17<sup>th</sup> October 2015</time>
</article> <!--end #article-->
	
<article class="article">
<a id="InSalonComp" class="anchor"></a>
<section class="visible">
{{ Html::image('/images/newspics/comp-3.jpg', 'The Winners') }}
<h2>Stylists Battle it out in Essential Looks Competition</h2>
<p><strong>Every season Schwarzkopf launch their Essential Looks collections, a set of styles influenced by future hair/fashion trends. Every time the new collections are launched we have an in—salon workshop run by a Schwarzkopf educator to keep everyone up to date with the latest looks.</strong></p>
<p>This time we thought we’d mix it up a bit and have an in-house competition. We teamed up with Paul Kemp Hairdressing and paired everyone off. Each pair of stylists had to create their own interpretation of a colour &amp; cut from the latest Essential Looks collections on a training head.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('/images/newspics/comp-2.jpg', 'Matt and Izzy') }}
{{ Html::image('/images/newspics/comp-1.jpg', 'Nat and Tash') }}
<p>Jimmy said “It’s a brilliant way to get the staff on board with new cutting and colour trends, the Essential looks are always ahead of the game and are a great inspiration to the teams. The competition allows them to try out some new techniques”</p>
<p>The competition was judged by Adam, Jimmy and Steve from Schwarzkopf with bronze, silver and gold awards given out for the best interpretations of the styles.</p>
<p>The winners this time were Leon (from Paul Kemp Hairdressing) and Vikki (from Jakata) who did a bold bob inspired from the ‘Pearlescent Girls’ collection.</p>
<p>The session was great fun and we’ll have to see who the next winners will be when the next Essential Looks are launched!</p>
<p><a href="https://www.facebook.com/media/set/?set=a.10153234033291866.1073741827.62812381865&type=1" class="offer" target="_blank">See all the photos from the day here &gt;</a></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-08-01">5<sup>th</sup> May 2015</time>
</article> <!--end #article-->
	
<article class="article">
<a id="FashionWeek" class="anchor"></a>
<section class="visible">
{{ Html::image('/images/newspics/jimmy_fw.jpg', 'Jimmy at fashion week') }}
<h2>On hand at Fashion Week</h2>
<p><strong>Most hairstylists can only dream of being a part of national, high profile events, and for most the opportunity will never come. </strong></p>
<p>Jakata stylist Jimmy Sharpe was lucky enough to get an invite to style hair at London Fashion Week for Jasper Garvida’s Ethologie. He was working alongside the Easton Regal hair team at creating a specific look on the models for the catwalk presentation.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>Jimmy, who oversees the running of both Jakata &amp; Paul Kemp Hairdressing salons said ‘The team were briefed on creating voluminous ponytail look, with a slick side parting and lots of body at the crown. After the show started I was working closely with Jasper Garvida, ensuring the shape and form of the styles were consistent across the models so they were ready for the runway’.</p>
<p>He continues ‘It was an extremely high pressure role but I loved every minute of it. To play a part in such a major event was a great experience.’</p>
<p>Jimmy has been involved in a variety of events since he won his place on the Schwarzkopf L.E.A.P team last year. He is now in the process of putting together a photoshoot with the team that will feature in future Schwarzkopf marketing.</p>
</section> <!--end .hidden-->
<p class="author">Published by PK</p>
<time datetime="2013-08-01">2<sup>nd</sup> August 2013</time>
</article> <!--end #article-->

<article class="article">
<a id="Pearlescence" class="anchor"></a>
<section class="visible">
{{ Html::image('/images/newspics/pearlescence.jpg', 'Igora Pearlescence') }}
<h2>New Igora Pearlescence Colours</h2>
<p><strong>We’ve all noticed the growing trend for pastel tones over the last year and it looks like it’s here to stay, especially coming into spring and summer.</strong></p>
<p>Mixing subtle tones of pink, powder blue or soft lilacs into bleached blonde hair is a great way to update your look.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>Up until now its been difficult to mix a colour to create these effects, often using our creative genius as professional colourists to create unique concoctions!</p>
<p>That’s all changed now with the launch of Schwarzkopf’s brand new <em>Pearlescence</em> colours. A range of 8 new shades from delicate pastel effects to bold, standout tones.</p>
<p>We’re all really eager to give these a go, so if you fancy something new then maybe this could be for you!</p>
<p class="offer">With every Pearlescent colour we do receive a FREE nail varnish (while stocks last)</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="205-03-04">4<sup>th</sup> March 2015</time>
</article> <!--end #article-->	
	
<article class="article">
<a id="MaisieReturn" class="anchor"></a>
<section class="visible">
{{ Html::image('/images/newspics/maisie.jpg', 'Maisie') }}
<h2>Glad to have her back!</h2>
<p><strong>After 6 weeks out of the salon, we are happy to announce that senior stylist Maisie Thompson is back tomorrow!</strong></p>
<p>Maisie had a minor operation at the end of January and had to take it easy for 6 weeks. It feels like she’s been gone for ages!</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>She's back in the salon tomorrow and the whole team are really excited for her return - things just aren’t the same without her.</p>
<p class="offer_heading">So from myself and the rest of the team...</p>
<p class="offer"><strong>X WELCOME BACK MAISIE X</strong></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2015-03-04">4<sup>th</sup> March 2015</time>
</article> <!--end #article-->	
	
<article class="article">
<a id="HappyNewYear" class="anchor"></a>
<section class="visible">
{{ Html::image('/images/newspics/new_year.jpg', 'Happy New Year') }}
<h2>Happy New Year</h2>
<p><strong>Wishing everyone a very happy New Year from the entire team here at Jakata. We hope you all had a great Christmas and saw the New Year in in style!</strong></p>
<p>Things are slowly getting back to normal here in the salon after a hectic month! It won't be normal for long though as we'll soon all be heading off to a lodge in Llangollen for a week for our team party!</p>
<p>The salon will be closed from Tuesday 13th January and we re-open on Saturday 17th January. If you need to book an appointment during this time then calls will still be taken - the phone is being diverted to our sister salon <em>Paul Kemp Hairdressing</em>.</p>
<p class="offer_heading"><strong>We all look forward to seeing you throughout 2015!</strong></p>
</section> <!--end .visible-->
<p class="author">Published by Adam</p>
<time datetime="2015-01-02">2<sup>nd</sup> January 2015</time>
</article> <!--end #article-->
	
<article class="article">
<a id="tweens" class="anchor"></a>
<section class="visible">
{{ Html::image('/images/newspics/tweens_new.jpg', 'Bed Head Tweens') }}
<h2>Tweens are back!</h2>
<p><strong>Due to popular demand we are now fully stocked with all the Tigi Tweens. This special edition set of shampoo/conditioner combo's are only released twice a year, and once stock is gone they wont be back for six months!</strong></p>
<p>Tween's take the most popular Tigi shampoo and conditioners and package them in jumbo sized, pump action bottles (like the ones we use here in the salon) and put them at an unbelievably cheap price. It works out at 3 times the amount compared to the normal sized bottle for just &pound;7 extra! That's &pound;70 worth of products for just &pound;29.95! </p>
<p>Come and check out the full range in the salon - don't leave it too long because they're flying off the shelves!</p>
</section> <!--end .visible-->
<p class="author">Published by Adam</p>
<time datetime="2014-07-23">23<sup>rd</sup> July 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="LauraMatthew" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/laura_matthew.jpg', 'Matthew Lane &amp; Laura Minett') }}
<h2>2 New Jakata Team Members</h2>
<p><strong>Introducing Matthew Lane and Laura Minett. They both joined us at the beginning of the month.</strong></p>
<p>Mathew is 26 and has been hairdressing for 2 years. He comes on board as a graduate stylist. He said he always wanted to be a hairdresser but always kept putting it off! After getting his own hair done at Jakata for the last few years he was in the right place at the right time to take on the role after completing his NVQ2 at Warrington Collegiate.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/matthew.jpg', 'Matthew Lane') }}
<p>Matthew, who is a keen artist and lover of comic books said "I'm really looking forward to working my way through the ranks and becoming a top stylist to gain as much experience as possible".</p>
{{ Html::image('images/newspics/new_laura.jpg', 'Laura Minett') }}
<p>Laura is 20 and comes from Latchford. She has recently been self employed at a barbers in Altrincham but was desperate to get back into women's hairdressing and after hearing about Jakata's great reputation thought she'd apply.</p>
<p>She always wanted to be a stylist and started when she was just 14. She loves colouring and styling women's hair and is also a great men's hairdresser.</p>
<p>Laura, who also joins us as a graduate stylist said "I'm really looking forward to experiencing more of the industry, from hair photo shoots to stage shows. My main aim is to expand my knowledge and build a really strong clientele".</p>
<p class="big">Both Laura and Matthew are looking to take on new clients so we're running some fantastic offers over the next couple of months to get them up and running!</p>
<p class="big">The offers will be launched in the next week or 2.</p>


</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2014-06-13">13<sup>th</sup> June 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="SummerBlondes" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/blonde_me1.jpg', 'Summer Blonde 1') }}
<h2>Ultimate Summer Blondes</h2>
<p><strong>With summer almost here we'll soon be inundated with requests for dark to lights or brighter lighter blondes. There's just something about summer that makes everyone want to go blonde!</strong></p>
<p>Before you get excited about the thought of those bright blonde locks, put a little time into thinking about the best steps to take to achieve the perfect result.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
{{ Html::image('images/newspics/blonde_me3.jpg', 'Summer Blonde 2') }}
<p>The first thing you should think about is the preparation of your hair before the service followed by the end result you want and then then how you're going to maintain the colour afterwards.</p>
<p>For me the biggest importance comes from what you do in the two months in advance of having the in salon service. Ask yourself what really makes one blonde better than another blonde?</p>
<p>The answer is the products that are used on your hair before, during and after the blonde service.</p>
<p>If you have really thought it through you would have spoken to you stylist on your last visit and discussed what to do before you have the colours applied. My best advice is you cannot get enough moisture and protein in your hair before you go ahead with the service. Start with Professional products before you go blonde (if you haven’t already) and get the foundations into the hair before you go ahead with the colour service.</p>
{{ Html::image('images/newspics/repair-rescue.jpg', 'Repair Rescue') }}
{{ Html::image('images/newspics/moisture-kick.jpg', 'Moisture Kick') }}
<p>Ask advice from your stylist about the best products to use in the months building up to your blonde service. It's vital to load the hair with protein &amp; moisture to ensure the healthiest result. In most cases I would recommend crossing the Schwarzkopf BC Repair range and the Bc Moisture kick range. Your going to be investing a fair bit of money on your next colour and cut, if you want the best result then why not spend the extra £40 - £60 on a great shampoo, conditioner, treatment &amp; moisture balm. These products used correctly will last you 3x the amount of time those high street brands, and the outcome of your hair is far superior.</p>
<p>With these foundations in place, your choices of levels of blondes are far greater and you will maintain the fullness, condition and shine of your hair. If your hair is already damaged then look into going on a recovery regime with Schwarzkopf BC Fibre Force. This will bring your hair back from the dead and ready for blondes in up to 10 weeks (depending on how damaged it is of course).</p>
<p>When it comes to having the actual lightening service, we have the most technologically advanced products available to give you your summer look. Bleaching hair has always had a stigma of being really damaging to the hair, drying it out and causing it to snap  - not anymore! We have two salon products which combine to create a perfect blonde with minimal damage, both from the Schwarzkopf 'Blonde Me' range:</p>
<h4>Pre lift Kera Protector</h4>
{{ Html::image('images/newspics/blonde_me_kera.jpg', 'Blonde Me Kera Protector') }}
<p>This is a revolutionary in-salon product that acts as a protective outer layer to your hair whilst allowing the bleaching products in to do their job whilst preventing all the swelling and cuticle damage that normally comes with a bleaching service. By having this applied you really do maintain healthy hair qualities - meaning less damage and more shine. This pre bleaching treatment does come with an additional charge of £5-£10, but it's a no brainer if it's going to keep your hair in fantastic condition.</p>
<h4>Blonde me Crystal bleach</h4>
{{ Html::image('images/newspics/blonde_me_crystal.jpg', 'Blonde Me Crystal Bleach') }}
<p>This state of the art bleaching agent is miles ahead of other bleaching products on the market. It's clear in colour so the stylist can really see how your hair is lifting. It's so soft on your hair you will notice the difference immediately, leaving minimal damage  and maximum moisture left in the hair. I find when I use it, it actually leaves the hair feeling better than before! If you want platinum white blonde then dependant on the lift needed this product may not be for you (we have another 'Blonde Me' bleach that lifts 9 levels with minimum damage!) but any other blondes and you will not be left disappointed.</p>
<p><strong>The main things to take from this are:</strong></p>
<ul>
	<li>Use quality professional product's in the run up to the service.</li>
	<li>Ensure the highest quality salon products are used during the service</li>
	<li>Maintain the health and condition of your hair by continuing to use the products recommended by your stylist.</li>
</ul>
<p class="offer">To book in to talk to one of our stylist's about going lighter call 01925 242960</p>
</section> <!--end .hidden-->
<p class="author">Published by Jimmy</p>
<time datetime="2014-05-20">20<sup>th</sup> May 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="JimmyLeap" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/leap_team.jpg', 'Jimmy with the LEAP team') }}
<h2>Jimmy Picked to join Schwarzkopf L.E.A.P team</h2>
<p><strong>The Jakata team is always striving to be at the top of our game. Regular competitions, both internal and external, plus photoshoots and training day's help each team member develop their skills to the highest level. These skills obviously have an impact on the level of work we produce day-to-day in the salon, ensuring everyone that comes in goes out with a modern, fashionable style.</strong></p>
<p>Over the years we've picked up numerous awards including categories within the prestigious L'oreal Colour Trophy and Redken NYC Awards. We've also had team members chosen to join larger artistic teams.</p>
<p>A few years ago Jimmy Sharpe was picked to spend a year on the Schwarzkopf Young Artistic team. He had to go through a gruelling selection process to win the place. From the experience he learned a multitude of new skills, from new hair techniques to stage presentation skills. Jimmy has used his knowledge to train and inspire the whole Jakata team.</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>Schwarzkopf this year have formed a brand new team called L.E.A.P. The L.E.A.P team is an art team aimed at development and progression towards Schwarzkopf ambassador status. It has a focus on not only creative styling &amp; fashion but other important things often overlooked like how to network, who's who in the industry, presentation work and PR work.</p>
<p>Jimmy's name was put forward for the team by Schwarzkopf as he stood out when he was on the Young Artistic Team. It's a very select group - just eight people from the whole of the UK! Everyone on the team was selected for having the right mentality and willing to pursue their careers further. The whole team are all previous award winners that have been on artistic teams that were aimed at people under 25.</p>
<p>Jimmy said "<em>I still can't believe that I've been selected to join this highly prestigious team. The variety of training and inspiration is overwhelming. Not many people get the chance to spend days with industry greats like top session stylists <a href="http://louisbyrne.blogspot.co.uk" target="_blank">Louie Byrne</a> &amp; <a href="http://www.tylerjohnston.com" target="_blank">Tyler Johnson</a>, top hair/fashion photographer <a href="http://www.therawsonpartnership.net" target="_blank">John Rawson</a> , plus loads of others! This is going to be an amazing year!</em>"</p>
<p><strong>We're all extremely proud that he's been selected and can't wait to soak up some of the new knowledge that he'll be sharing.</strong></p>
<p class="offer_heading"><strong>Over the course of the year we'll be keeping up to date with Jimmy's experiences on the team. We'll be sharing them on Facebook, Twitter and our sites news page.</strong></p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2013-04-16">16<sup>th</sup> April 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="HairUpChallenge" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/hu_challenge.jpg', 'Hair Up Challenge') }}
<h2>Jakata Hair Up Challenge</h2>
<p><strong>The Jakata team are always up for taking on a challenge so we've come up with a new internal competition to keep them on their toes!</strong></p>
<p>With our Jakata Hair Up Challenge a different stylist will be nominated each time to come up with a hair up style that is given to them (initially by us, but hopefully we'll get Jakata Facebook/twitter followers to send in their ideas).</p>
<p class="reveal">Read more &gt;</p>
</section> <!--end .visible-->
<section class="hidden">
<p>The selected stylist is given a deadline to reproduce the look, or create their own interpretation. We'll post the look on our Twitter/Facebook pages and you guy's can mark them out of ten!</p>
<p>To get the ball rolling we've selected <strong>Laura</strong> to create this look...</p>

<p>{{ Html::image('images/newspics/challenge.jpg', 'Challenge', array('class'=>'bigPic')) }}</p>

<p class="big">The result will be posted before Saturday this week. Let's see how she gets on!</p>
</section> <!--end .hidden-->
<p class="author">Published by Adam</p>
<time datetime="2014-04-08">8<sup>th</sup> April 2014</time>
</article> <!--end #article-->

<article class="article">
<a id="Jaxson" class="anchor"></a>
<section class="visible">
{{ Html::image('images/newspics/jaxson.jpg', 'Jaxson') }}
<h2>New Member of the Jakata Family</h2>
<p><strong>We'd like to introduce you to the newest member of the Jakata family - Jaxson Welsby. Born on Monday 10th march at 19.50 and weighing in at 6 lb 2 1/2. Proud mum, Jakata stylist Vikki Rowland couldn't be happier.</strong></p>
<p>The team (and her clients) are missing Vikki, but we're all chuffed that she can spend some valuable time with Jaxson over the next few months.</p>
<p>I'm sure she'll be dropping into the salon pretty frequently so you might get to meet him soon!</p>
</section> <!--end .visible-->
<p class="author">Published by Adam</p>
<time datetime="2014-04-04">4<sup>th</sup> April 2014</time>
</article> <!--end #article-->

</section> <!--end #accordion-->

{{ Html::link('oldnews', "Click here for older news stories&hellip;", array('class' => 'newslink')) }}

</section> <!--end #news-->

@stop