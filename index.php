<!-- Written by Sean Bost -->
<!-- Hey you! If you're reading this, let me know! seantbost@gmail.com linkedin.com/in/seanbost -->
<!-- I'm not much of a github guy, but you can check out my files before I cheaped out and forced them to be static here:  -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sean Bost | UX Developer</title>
  <link rel="shortcut icon" href="assets/icon.ico">
  <link rel="stylesheet" type="text/css" href="styles/_global.css">
  <link rel="stylesheet" type="text/css" href="styles/home.css">
  <link rel="stylesheet" href="https://use.typekit.net/mhr1izx.css"> <!-- Adobe Fonts: Halyard & Open Sans -->
</head>

<body>

  <!-- navbar component -->
  <nav>
    <?php include 'includes/navbar.php';?>
  </nav>

  <!-- header portion of document -->
  <header class="grid">
    <div id="header-text">
      <h1><em>Hey!</em> <a href="/about" class="big-expo green-expo">I'm Sean</a>.</h1>

      <p>
        I'm focused on building experiences that are engaging and meaningful. I've worked within a 
        <a href="/about?jumpto=roles" class="small-expo red-expo underline">variety of roles and teams</a>
        making interactions more intuitive, empowering, and enjoyable for thousands of people.
      </p>

      <p>
        While 
        <a href="/about?jumpto=ux" class="small-expo blue-expo underline">my passion is UX</a>, 
        I'm also experienced in
        <a href="/about?jumpto=fullstack" class="small-expo orange-expo underline">coding front and back-ends</a>
        to implement designs and features, 
        <a href="/about?jumpto=marketing" class="small-expo green-expo underline">creating marketing campaigns</a>
        and the content to support them, and
        <a href="/about?jumpto=systems" class="small-expo pink-expo underline">building data-driven systems</a>
        that have doubled KPIs and shaped company-wide decisions.
      </p>
    </div>

    <div id="header-image" class="desktop-only">
      <a href="/about"><img src="media/home/profile.png" width="100%" alt="A rather dashing picture of Sean"></a>
    </div>
  </header>

  <!-- body/project portion of document -->
  <main class="grid">

    <!-- Temporary note until I have more recent projects/case studies completed! (OYP app, gardening pet project, that searching algo,,,) -->
    <section id="temp-note">
      <p><em>Note:</em> I'm in the process of getting more recent projects presentable, but 
      please feel free to check out some earlier work below &#8628;</p>
    </section>

    <!-- taste buds & temp projects link-->
    <section id="projects">
      <img src="media/home/tastebuds-mockup.png" class="project-image" alt="Three small iPhone mockups of a recipe app">

      <article>
        <h2><a href="/tastebuds">Taste Buds</a></h2>
        <p class="caption">Spring 2022</p>
        <p>Team exploration into designing a recipe app centered around user-generated content and fixing common industry pain points.</p>
        <a href="/tastebuds"><h3 class="button">View Case Study</h3></a>
      </article> 
    </section>

    <!-- aamd -->
    <section>
      <img src="media/home/aamd-mockup.png" class="project-image" alt="A small collage of marketing graphics">

      <article>
        <h2><a href="/aamd">All American Mobile Detailing</a></h2>
        <p class="caption">December 2020 through September 2021</p>
        <p>A sampling of typical content I made at AAMD for social media, recruitment, and customer retention marketing purposes.</p>
        <a href="/aamd"><h3 class="button">View My Work</h3></a>
      </article> 
    </section>

  </main>

  <!-- footer component -->
  <footer>
    <?php include 'includes/footer.php';?>
  </footer>

</body>
</html>
