<!--  Written by Sean Bost  -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sean Bost | About Me</title>
  <link rel="shortcut icon" href="assets/icon.ico">
  <link rel="stylesheet" type="text/css" href="styles/_global.css">
  <link rel="stylesheet" href="https://use.typekit.net/mhr1izx.css">

  <?php 
    // dynamic body highlighting styling
    include 'includes/highlighter.php';
  ?>

</head>

<body>

  <!-- navbar component -->
  <nav>
    <?php include 'includes/navbar.php';?>
  </nav>

  <!-- about content -->
  <main id="about-body" class="grid">

    <header class="center-narrow">
      <h1 class="green-expo center">Get to know me!</h1>
      <p>I'm a digital native, nature fanatic, 5k runner, aquarium enthusiast and vinyl collector. I cut my web design teeth
        when I started messing around with HTML, JavaScript, and Photoshop making goofy webpages early in high school.
      </p>
      <p>Fast-forward ten years and a <em>massive</em> amount of learning, and that hobby's turned into my career. 
        I've never had an issue finding a passion in life so much as honing in on just one, and building things for the web scratches the
        most itches: it's creative, people-centric, technical, and just plain fun!
      </p>
    </header>

    <section class="left-half">
      <h2 class="green-expo">My education and experience:</h2>
      <p>Since 2016, I've been an Adobe certified Web Design Specialist, and have actively maintained proficiency across their suite. 
        <span class="red-highlight">I completed my capstone coursework in the University of Central Florida's web design program last spring, 
        with the team I led's project selected for an expo.</span>
      </p>
      <p><span id="green-jump" class="green-highlight"><span id="red-jump" class="red-highlight"><span class="pink-highlight">At  
        <a href="https://aamdetailing.com/" class="underline"
        rel="noreferrer nofollow" target="_blank">All American Mobile Detailing</a>,</span> a local startup,
        I went beyond my content and ad campaign responsibilities.</span> I instilled a culture of A/B testing wherever possible, and 
        designed automated CX and marketing flows that saved time and boosted KPIs. <span id="pink-jump" class="pink-highlight">
        My crowning achievement was a data-driven, self-optimizing recruitment process that 
        <em>doubled</em> detailer headcount in our darkest hour.</span></span>
      </p>
    </section>

    <aside class="right-half">
      <img src="media/about/showcase.png" width="100%" alt="Me and a teammate standing by our web project 'Vacation Base'">
      <p class="caption center">A teammate & I with our capstone project: Vacation Base</p>
    </aside>

    <section class="center-wide section-continued">
      <p>More recently <span id="orange-jump" class="orange-highlight"><span class="red-highlight"><span class="blue-highlight">
        <span class="pink-highlight">at 
        <a href="https://www.originalyp.com/" class="underline"
        rel="noreferrer nofollow" target="_blank"> The Original YP Network</a>,</span> 
        I maintained a suite of search websites and apps, focusing on identifying and solving user pain-points.</span></span> Some highlights 
        include rewriting our search and ad query algorithms to be object-oriented and dynamic, fleshing out robust autocomplete interfaces, 
        and <span class="pink-highlight">programming an internal conversion traffic analytics tool.</span></span> 
        <span id="blue-jump" class="blue-highlight">I also designed a new mobile app, first in concept, then in Figma, which can be 
        <a class="underline" target="_blank" href="https://apps.apple.com/us/app/the-original-yp-network/id6478242253?platform=iphone">
          found on the App Store here</a>.</span>
      </p>
    </section>

    <section class="left-half">
        <h2 class="green-expo">Some ambitions and hobbies:</h2>
        <p><span class="blue-highlight">In a few years, I'd like to go back to school for a master's in Human Computer Interaction.</span> 
          I can also see myself teaching in some capacity in the far future — tech is only a bridge to what I love doing most: connecting with people.
        </p>
        <p>Outside work, I definitely like to move! I'm currently training for a half-marathon. I also have a 
          couple road trips with friends in the cards: one by car, one by motorcycle. On weekends, I 
          enjoy keeping outdoors, no matter if it's the beach or a backyard.
        </p>
    </section>

    <aside class="right-half">
      <a href="https://www.google.com/search?q=stardust+video+and+coffee" target="_blank">
        <img src="media/about/stardust.png" width="100%" alt="Inside Stardust Video and Coffee">
      </a>
      <p class="caption center underline">
        <a href="https://www.google.com/search?q=stardust+video+and+coffee" target="_blank">My favorite casual workspace</a>
      </p>
    </aside>

    <?php // no need for this idea now -- currently more than long enough
    
    // <div class="center-narrow">
    //   <h2 class="pink-expo">Some articles (blogs?):</h2>

    //   <p>In case I haven't yapped enough, here's some topical write-ups with more focus:</p> 

    //   <article>
    //     <h3 class="underline"><a href="/index">Variety of roles and teams</a></h3> 
    //     <p class="caption">here is some text about that and here is some more this could even be a now even bigger snippet that gets cut 
    //       here is some more words and also text about that and here is some more this could even be a now even bigger snippet that gets cut-off...
    //       <a href="/index" class="underline"> Read More</a>
    //     </p>
    //   </article>
    //   <br>

    //   <article>
    //   <h3 class="underline"><a href="/index">My passion is UX</a></h3> 
    //   <p class="caption">here is some text about that and here is some more this could even be a now even bigger snippet that gets cut 
    //     here is some more words and also text about that and here is some more this could even be a now even bigger snippet that gets cut-off...
    //     <a href="/index" class="underline"> Read More</a>
    //   </p>
    //   </article>
    //   <br>

    //   ... ...
    ?>

    <aside class="center-wide">
      <img src="media/about/personal.png" width="100%" alt="Collage of personal photos">
      <div class="caption center">
        <p>Hiking the Florida Trail, refreshers during a workshop, exploring San Juan, my favorite helpers</p>
      </div>
    </aside>

  </main>

  <!-- footer component -->
  <footer>
    <?php include 'includes/footer.php';?>
  </footer>

</body>
</html>