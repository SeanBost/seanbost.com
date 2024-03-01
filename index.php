<!-- Written by Sean Bost -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sean Bost | UX Developer & Designer</title>
  <link rel="shortcut icon" href="assets/icon.ico">
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <link rel="stylesheet" type="text/css" href="styles/dynamic.css">
  <link rel="stylesheet" href="https://use.typekit.net/mhr1izx.css"> <!--  Adobe Fonts: Halyard & Open Sans  -->
</head>

<body>
  <!-- navigation -->
  <div id="page-top"></div>
  <nav>
    <?php include 'includes/navbar.php';?>
  </nav>

  <!-- introduction header -->
  <header><div class="grid-container">
    <div id="header-text">
      <h1><em>Hey! </em><a href="/about" style="color: #1b8;"><gre>I'm Sean</gre></a>.</h1>
      <p>I'm focused on creating experiences that are engaging & meaningful. I've worked with a 
        <a href="/about#page-red" style="color: #d44;"><red>variety of teams</red></a>
        to make interactions easier, more efficient, and more enjoyable. While 
        <a href="/about#page-blu" style="color: #66d;"><blu>my passion is UX</blu></a>, 
        I also have experience marketing and
        <a href="/about#page-ora" style="color: #c74;"><ora>building everything digital</ora></a> 
        at a national detailing startup, plus an academic background in 
        <a href="/about#page-pnk" style="color: #d6d;"><pnk>web design & cognition</pnk></a>.
      </p>
    </div>
    <div id="header-image">
      <a href="/about"><img src="media/home/profile.png" width="100%" alt="Sean sitting at a table with an affinity map behind him"></a>
    </div>
  </header>

  <main>
    <!-- aamd -->
    <div class="bg-styling"><article><div class="grid-container">
      <div class="project-img">
          <img src="media/home/aamd-mockup.png" style="max-width: 100%;" alt="A collage of my AAMD media">
      </div>
      <section><br>
        <h2>All American Mobile Detailing</h2>
        <p>Data-driven graphics, emails and other media from my tenure that established our brand and improved engagement.</p>
        <a href="/aamd"><div class="button">
          View My Work
        </div></a>
      </section>
    </div></article></div>
    <br><br>

    <!-- tastebuds -->
    <div class="bg-styling"><article><div class="grid-container">
      <div class="project-img">
        <img src="media/home/tastebuds-mockup.png" style="max-width: 100%;" alt="Phones showcasing Taste Buds">
      </div>
      <section><br>
        <h2>Taste Buds</h2>
        <p>Team exploration into designing a recipe app focused on user-generated content and fixing common industry pain points.</p>
        <a href="/tastebuds"><div class="button">
          View Case Study
        </div></a>
      </section>
    </div></article></div>    
  </main>

  <!-- footer -->
  <?php include 'includes/footer.php';?>
</body>
</html>
