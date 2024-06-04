<!--  Legacy markup not yet updated and forced to work. Now nasty, very patchworked, and in dire need of updating :(  -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sean Bost | Taste Buds</title>
    <link rel="shortcut icon" href="assets/icon.ico">
    <link rel="stylesheet" type="text/css" href="styles/tastebuds.css">
    <link rel="stylesheet" href="https://use.typekit.net/mhr1izx.css">
</head>


<body>
    <!--  Navigation Content  -->
    <div id="page-top"></div>
    <nav><div class="grid-container">
        <div id="nav-logo" style="margin-top: 18px;">
            <a href="/index"><img src="assets/logo.png" width="151px" height="28px" alt="Logo reading Sean Bost"></a>
        </div>
        <div id="nav-links">
            <h3><a href="/index" class="desktop-only">Home</a><buffer></buffer>
            <a href="/index#projects">Projects</a><buffer></buffer>
            <a href="/about">About</a></h3>
        </div>
    </div></nav>


    <!--  Case Study Content  -->
    <main>
    <div class="pink-bg"><div class="grid-container">
        <div class ="content-full">
            <img src="media/home/tastebuds-mockup.png" style="margin-left: 10%; width: 80%;" alt="Phone screens showcasing Taste Buds">
        </div>
    </div></div>
    <div class="grid-container">
        <!--  Overview  -->
        <div class="content-center">
            <h1 style="text-align: center;">Taste Buds</h1>
        </div>
        <div class="content-left" style="margin-top: -45px;">
            <h2>Overview</h2>
            <p>Taste Buds is a response to a stagnant and user-hostile recipe platform product market.</p>
            <p>My team learned home cooks want a streamlined, bloat-free recipe finding process and prefer recipes from people they know. Our design minimized their needed interactions for navigating recipes and ensured recipe content was always unobstructed and readily found.</p>
            <p>We utilized lean UX to create a minimum viable product, rapidly developing our problem statement through research before exploring and testing increasingly detailed solutions.</p>
        </div>
        <div class="content-right" style="padding-left: 60px; margin-top: -30px;">
            <p><b>ROLE</b></p>
            <p><gray>UX lead within a design team of 3</gray></p><br>
            <p><b>TIMELINE</b></p>
            <p><gray>Approximately 80 hours</gray></p><br>
            <p><b>PRODUCT GOAL</b></p><gray><ul>
            <li>Identify & address any pain points of key recipe functionalities</li>
            <li>Utilize innovative solutions to help carve a niche in a crowded market</li></ul></gray>
        </div>
        <!--  Design Process  -->
        <div class="content-full">
            <h2>Design Process</h2>
            <div class="content-quarter">
                <p><b>DISCOVER</b></p>
                <img src="media/tastebuds/process-1.png" width="100%">
                <p><a href="#jump-Market">Competitive Analysis</a></p>
                <p><a href="#jump-Survey">User Surveying</a></p>
                <p><a href="#jump-Problem">Problem Identification</a></p>
            </div>
            <div class="content-quarter">
                <p><b>DEFINE</b></p>
                <img src="media/tastebuds/process-23.png" width="100%">
                <p><a href="#jump-Persona">User Persona & Journey</a></p>
                <p><a href="#jump-HTA">Task Analysis</a></p>
                <p><a href="#jump-Flow">Task Flow</a></p>
            </div>
            <div class="content-quarter">
                <p><b>IDEATE</b></p>
                <img src="media/tastebuds/process-23.png" width="100%">
                <p><a href="#jump-Workshop">Feature & IA Workshop</a></p>
                <p><a href="#jump-Wire">Wireframing</a></p>
            </div>
            <div class="content-quarter">
                <p><b>IMPLEMENT</b></p>
                <img src="media/tastebuds/process-4.png" width="100%">
                <p><a href="#jump-DesTest">Design Testing</a></p>
                <p><a href="#jump-UseTest">Usability Testing</a></p>
            </div>
        </div>
        <!--  Research Goals  -->
        <div class="content-center">
            <h2>Research Goals</h2>
            <p>While my team agreed finding recipes online can be an unpleasant process, we needed a better grasp on what home cooks felt did and didn't work. Through our research, we wanted to:</p>
            <br><ul><li>Learn who exactly is looking up and using digital recipes</li>
            <li>Unravel pain points in their process, including how common and severe they each are</li>
            <li>Determine how digital recipes and their platforms are selected</li>
            <li>Identify the strengths and weaknesses in competing products</li></ul>
        </div>
        <!--  Market Research  -->
        <div class="content-left" >
            <p><b>COMPETITIVE ANALYSIS</b></p>
            <p>We started by looking up recipes on existing platforms to better understand the process our users experienced and ask more relevant questions. We also made a basic feature matrix of competing platforms and took notes on their UI and architecture. This was to later help ideate different approaches our product could possibly take depending on user priorities.</p>
        </div>
        <div class="content-right" >
            <img src="media/tastebuds/matrix.png" width="100%" alt="A segment of our competitive feature matrix">
            <div class="caption">
                <p>A segment of our competitive feature matrix</p>
            </div>
        </div>
        <div id="jump-Market"></div>
        <!--  User Surveys  -->
        <div class="content-left" >
            <p><b>USER SURVEYING</b></p>
            <p>In order to gather a broad scope of perspectives, we chose to survey potential users and collect a subset of those who at least occasionally use recipes, which amounted to twenty viable respondents. I wrote a series of open-ended free response and Likert-scale questions, and in spite of the diversity of those surveyed, three questions had near-unanimous responses:</p>
            <br><ul><i><li>17 of 20 mentioned a digital method when asked how they source recipes, of which 10 specifically cited Google</li>
            <li>15 of 20 mentioned recipe pages are too bloated when asked if there was anything they disliked when sourcing recipes, mostly due to “ads” or “stories”</li>
            <li>14 of 20 at least slightly agree that a recipe from someone they know is preferable to one found online</li></i></ul>
        </div>
        <div class="content-right" style="padding-left: 30px; padding-right: 30px;">
            <img src="media/tastebuds/3in4.png" width="100%" alt="Graphic stating 3 in 4 respondents mentioned recipe pages are too bloated">
        </div>
        <div id="jump-Survey"></div>
        <div class="content-center">
            <img src="media/tastebuds/likert.png" width="100%" alt="Bar graphs showing most people prefer recipes from those they know, and that sentiments on joining online groups to share recipes are mixed">
        </div>
        <div class="content-center">
            <div id="jump-Problem"></div>
            <p><b>PROBLEM IDENTIFICATION</b></p>
            <p>Through research, we identified a core problem that home cooks faced when finding recipes:</p>
            <br><p style="padding-left: 30px; padding-right: 30px;"><em><bigg>Users want utter simplicity while sourcing and viewing recipes, yet current recipe platforms are bloated with undesired content.</bigg></em></p>
            <br><p>Along with understanding user needs when finding recipes, we also got a glimpse of how important trust and confidence is when selecting a recipe for most home cooks. Through this lens, looking at how a significant portion of respondents were interested in socially sharing recipes, we also determined leaning into user-generated content (UGC) would give us an edge in competing against established industry giants.</p>
            <br>
        <!--  Persona  -->
            <div id="jump-Persona"></div>
            <h2>User Persona & Journey</h2>
            <p>There were several takeaways our research provided on who our target users are. Viewing respondents individually, I noted that the home cooks interested in shareable user-generated recipes were united in their desire for brief and easily digestible recipes — as well as their interest in cooking both new and familiar recipes. Most had one other feature cluster besides “social” that they were also interested in, such as “meal planning” or “nutrition”.</p>
            <p>With this data we made a representative persona, Cook, and mapped out a journey for him that relates to our target users', helping us to better empathize with their position.</p>
        </div>
    </div>
    <br><br><div class="pink-bg"><br><div class="grid-container">
        <div class="content-left" style="padding-left: 30px; padding-right: 30px;">
            <p><b>BIO</b></p><bigg>
            <p><em>Cook's a young adult who frequently cooks and bakes at home. He'll use existing family recipes, new ones that he finds online, and occasionally he'll even make his own.</em></p>
            <p><em>Some of his friends and family are also interested in making their own food and use recipes as well, and Cook often bonds with them over preparing and enjoying meals together.</em></p>
        </bigg></div>
        <div class="content-right" style="padding-left: 30px; padding-right: 30px;">
            <p><b>GOALS</b></p>
            <ul><li>To find trusted recipes that are to-the-point</li>
            <li>To easily collect and share recipes between loved ones</li></ul>
            <br><p><b>MOTIVATIONS</b></p>
            <ul><li>Easily being able to access saved and new recipes</li>
            <li>Having confidence in his decisions</li></ul>
            <br><p><b>FRUSTRATIONS</b></p>
            <ul><li>Loathes scrolling through ads and filler</li>
            <li>Not always able to determine which recipes to choose</li></ul>
        </div>
        <!--  User Story  -->
        <div class="content-full"><div class="caption">
            <div class="content-third">
                <img src="media/tastebuds/story-1.png" width="100%" alt="Drawing of Cook thinking 'How can I save & share this recipe?'">
                <p>A few of Cook's friends love his family's black forest cake and have been asking him for the recipe to try and make on their own.</p>
            </div>
            <div class="content-third">
                <img src="media/tastebuds/story-2.png" width="100%" alt="Drawing of a finger clicking 'Get' on an app store page">
                <p>Cook downloads an app his friends suggest called Taste Buds to help him create and share this recipe and any future ones as quickly and easily as possible.</p>
            </div>
            <div class="content-third">
                <img src="media/tastebuds/story-3.png" width="100%" alt="Drawing of an app screen with Cook and 'Click to start a collection' on it">
                <p>Cook opens the app to start creating the recipe and is greeted by a welcome page inviting him to search, create, or explore a recipe. This page is also a hub where he can view all of his saved recipes.</p>
            </div>
            <div class="content-third">
                <img src="media/tastebuds/story-4.png" width="100%" alt="Drawing of an empty recipe builder page ready to be filled">
                <p>Cook then clicks the plus button on the home screen of the app which opens the recipe builder page. Here he can enter the recipe's ingredients, instructions, as well as some pictures and a brief description.</p>
            </div>
            <div class="content-third">
                <img src="media/tastebuds/story-5.png" width="100%" alt="The previous drawing but now filled out">
                <p>Once the recipe is finished in the recipe builder, Cook's taken to a publishing screen where he can edit who can see the recipe and share it via other apps or through a link. He can also add categorical tags if he chooses and/or add it to a 'cookbook', which contains other recipes.</p>
            </div>
            <div class="content-third">
                <img src="media/tastebuds/story-6.png" width="100%" alt="A drawing of Cook's recipe page for black forest cake">
                <p>Once the recipe is published it will now appear in Cook's library.</p>
            </div>
        </div></div>
    </div><br></div><br>
    <div class="grid-container">
        <div id="jump-HTA"></div>
        <!--  Task Analysis  -->
        <div class="content-center">
            <h2>Task Analysis</h2>
            <p>We needed insight into how a user would go about accomplishing this use case to ensure our process was intuitive and frustration-free. This led us to find a current iPhone app that can accommodate the story we outlined to perform a task analysis.</p>
            <p>We enlisted the help of a survey respondent who was interested in platforms with social features to participate: <em>save a recipe for your favorite dish then share it with a friend.</em></p>
            <br><img src="media/tastebuds/tag-1.png" width="100%" alt="Hierarchical task analysis graph for saving & sharing a new recipe">
            <div class="caption">
                <p>For subtask 4.1, the user hesitated clicking to share. For 4.2, they initially selected an option they didn't want</p>
            </div>
            <br><p>The outlined process was fairly smoothly accomplished, with the only issues being in the sharing process. The experiment was repeated again with another person in a more casual environment with similar results. Our key takeaways were that the process could be optimized by not requiring a lengthy onboarding process, by having clear and immediately accessible UI elements, and by leaning into the native iOS sharing interface.</p>
            <div id="jump-Flow"></div>
            <br><p><b>TASK FLOW</b></p>
            <p>Drawing from our task analysis and Cook's story, I mapped out task flows of the necessary interactions for him to accomplish his goals. This was to provide us structure when developing Taste Buds' information architecture, ensuring secondary features naturally branched out from those most key to users' experiences without potentially obstructing them.</p>
        </div>
        <div class="content-left">
            <div class="caption">
                <p>Creating & potentially sharing a recipe:</p>
            </div>
            <img src="media/tastebuds/task-1.png" width="100%" alt="Task flow for creating & sharing a recipe">
        </div>
        <div class="content-right">
            <div class="caption">
                <p>Finding, saving, & potentially sharing a recipe:</p>
            </div>
            <img src="media/tastebuds/task-2.png" width="100%" alt="Task flow for finding, saving & sharing a recipe">
        </div>
        <div class="content-center">
            <div class="caption">
                <p>Above start and end points are represented by orange ovals, necessary subtasks by medium gray boxes, & optional subtasks by light gray diamonds</p>
            </div>
        </div>
    </div>
    <br><br><div class="pink-bg"><br><div class="grid-container">
        <!--  Workshopping  -->
        <div id="jump-Workshop"></div>
        <div class="content-center">
            <h2>Workshopping Features, Information Architecture</h2>
            <p>I conducted a brief UX workshop for our team to identify the core features needed for our tasks to function. We then revisited our market and user research to holistically decide upon secondary features that would be beneficial to our users' goals and interests.</p>
        </div>
        <div class="content-left" style="padding-left: 30px; padding-right: 30px;">
            <p><bigg>Every feature we considered was screened to meet the following criteria:</bigg></p>
            <br><ul><li>Does not obstruct finding and reading recipes</li>
            <li>Makes discovering recipes more intuitive, <i>or</i></li>
            <li>Adds demonstrable value to the recipe ecosystem</li></ul>
        </div>
        <div class="content-right" style="padding-left: 30px; padding-right: 30px;">
            <p><bigg>We then clustered viable features & labeled categorical tabs:</bigg></p>
            <br><ul><li><b>EXPLORE</b> - search for & be suggested relevant recipes</li>
            <li><b>COLLECTION</b> - view, organize, & manage your saved & created recipes</li>
            <li><b>MEAL PLANNING</b> - make schedules & plans with recipes & their ingredients</li>
            <li><b>CREATE</b> - create & share recipes</li>
            <li><b>PROFILE</b> - account information, preferences</li></ul>
        </div>
        <!--  Info Architecture  -->
        <div class="content-center">
            <p>With the product features decided upon and appropriately grouped, we were able to optimize navigation paths to come up with a working information architecture diagram.</p>
            <br><img src="media/tastebuds/infoarch.png" width="100%" alt="Site map of Taste Buds">
            <div class="caption">
                <p>All top-level pages were to be universally accessible through persistent UI elements</p>
            </div>
        </div>
    </div><br></div><br>
    <div class="grid-container">
        <!--  Wireframing  -->
        <div id="jump-Wire"></div>
        <div class="content-left">
            <h2>WIREFRAMING</h2>
            <p>The last thing we determined in the workshop was a rough sectional layout of what the three primary tabs would be. This was to ensure that any concepts we came up with while experimenting before our next meeting would seamlessly fit with one another and fit into our existing task flows and IA.</p>
        </div>
        <div class="content-right">
            <img src="media/tastebuds/paperwire-1.png" width="100%" style="margin-top: 30px;" alt="Very basic outlines of what goes where on the primary screens">
            <div class="caption">
                <p>Zoning our app's real estate</p>
            </div>
        </div>
        <div class="content-center">
            <img src="media/tastebuds/paperwire-2.png" width="100%" alt="More detailed sketches of possible UI layouts">
            <div class="caption">
                <p>By the next time we reconvened we had come up with more specific layouts; we discussed our ideas and their strengths</p>
            </div>
            <br><p><b>WIREFRAMING A PROTOTYPE</b></p>
            <p>Once we had a general layout we felt made sense, we built a basic wireframe prototype that encompassed every screen and interaction necessary to find, view, save and revisit a recipe. Another task analysis with a new, similar survey respondent was done on our wireframe up to the point of sharing. No errors were made, and in an interview afterwards it was noted that besides a couple small corrections our general layout was sound.</p>
            <img src="media/tastebuds/xdwire.png" width="100%" alt="Map of our Adobe XD wireframes as they will be used">
            <div class="caption">
                <p>Our initial Adobe XD interactive wireframe prototype</p>
            </div>
            <br><h2>Branding</h2>
            <p>After further fleshing out our low fidelity prototype we began exploring directions we could take for Taste Buds' visual design. We wanted our app to stand out in an industry we've come to know as homogenous, sleek, and modern. We also wanted it to convey warmth and creativity. We decided to go for a colorful, “groovy” look to fit our criteria, and outlined colors and typefaces for usage in the UI.</p>
            <br><img src="media/tastebuds/brandboard.png" width="100%" alt="Taste Buds brandboard showing Kansas New and Brevia as chosen fonts and warm pink, green, and oranges for the colors">
        </div>
    </div>
    <br><br><div class="pink-bg"><br><div class="grid-container">
        <!--  Design & Use Testing  -->
        <div id="jump-DesTest"></div>
        <div class="content-center">
            <h2>Design Testing</h2>
            <p>The area with the most ambiguity left was the explore tab, as there were several paths we could take with its UI to fulfill our goals. We chose to create a few basic mockups of it with varying layouts as well as with different aesthetical choices. We each then conducted brief interviews with our mockups to learn what visual and operational choices were most appealing to potential users.</p>
            <div class="caption">
                <br><img src="media/tastebuds/papermockup.png" width="100%" alt="Paper conceptual design mockups">
                <p>Paper conceptual design mockups</p>
                <br><img src="media/tastebuds/xdmockup.png" width="100%" alt="High fidelity design translations">
                <p>Their higher fidelity translations</p>
            </div>
            <p>After several casual interviews, our most minimal design proved to be the most intuitive concept, with the floating "create" button in the other mockups also well-received. Explorations into a swipeable cardstack and more maximalist design were also able to be struck before time was expended fleshing them out fully after we received hesitant feedback. In spite of this, people also found the minimal design was “not enough” — it lacked any significant identity or visual hierarchy.</p>
            <p>We decided to incorporate one large row of tiles with soft colors to address concerns from both directions. We then rebuilt our mockup's design and used the elements and assets created to help flesh out our previous wireframe prototype so we could test it.	</p>
            <div id="jump-UseTest"></div>
            <br><h2>Usability Testing</h2>
            <p>We opted to conduct another task analysis, this time on our new high fidelity prototype, with the same process as before. This was to uncover any awkward design choices or frustrations performing tasks we might not have been aware of.</p>
            <img src="media/tastebuds/tag-2.png" width="100%" alt="Another HTA graph, this one on saving a recipe then finding where it's saved">
            <div class="caption">
                <p>For subtask 3.1 the user was unsure to click on the 'bookmark' icon. The same hesitation was present during 4.2</p>
            </div>
            <br><p><b>THINK ALOUD PROTOCOL</b></p>
            <p>With the same user, we also had them voice their thoughts aloud while exploring the app. We gained insights on how the formatting of our login screen could be improved, how highlighting the current tab open is helpful, that native explore ads weren't hostile, that our iconography needed to be more cohesive, and how the create button should disappear when a recipe is viewed.</p>
        <!--  Final Design  -->
            <br><h2>Final Design</h2>
            <p>I focused on tweaking UI elements to be more conducive to our users' experience in alignment with our goals, and my teammates polishing our apps visual styling and brand. This led to a working and potential final design for the onboarding, explore, collection, and create segments. With limited time, we discussed and chose to optimize these segments before refining the meal planning feature, as it would be much more intensive with much less value added to the product.</p>
        </div>
        <div class="content-full">
            <div class="content-third">
                <img src="media/tastebuds/final-1.png" width="100%" alt="A large shot of Taste Buds being used">
            </div>
            <div class="content-doublethird">
                <img src="media/tastebuds/final-2.png" width="100%" alt="Several high-fidelity stills of Taste Buds">
            </div>
        </div>
    </div><br><br></div><br>
    <div class="grid-container">
        <!--  Takeaways  -->
        <div class="content-center">
            <p><b>TAKEAWAYS</b></p>
            <ul><li><b>Always keep the user's interests in mind.</b> After discovering our users' problems, goals, and feelings it's important to continue to maintain focus on them throughout the entire design process. We course-corrected from personal preference/assumption to user research/input at multiple points.</li>
            <li><b>Imperfect research beats no research.</b> There were two stages where we hadn't budgeted time to do user research or testing yet made time to do so anyhow. That research wasn't as formal or articulately planned as the rest, yet had we not done so, we would have spent even more time having to backtrack at a more complex stage of the design.</li>
            <li><b>Make assumptions, but don't rely on them.</b> Without assumptions we wouldn't have discovered how much users prioritize recipes from people they know, nor would we have ideated several of our design concepts that proved successful. However, some other assumptions were misguided, and if we hadn't user-tested them, we would have been creating problems instead of solving them.</li></ul>
        </div>
    </div>
    </main>


    <!--  Footer Content  -->
    <footer><div class="grid-container">
        <div id="footer-copyright">
            <h3 style="color: #1b8; font-weight: 400;">Sean Bost ©2024</h3>
        </div>
        
        <div id="footer-links">
          
            <h3><buffer></buffer><buffer></buffer><buffer></buffer><buffer></buffer>
            <buffer></buffer><buffer></buffer><buffer></buffer><buffer></buffer>
            <buffer></buffer><buffer></buffer><buffer></buffer><buffer></buffer>
            <a href="/index">Home</a><buffer></buffer>
            <a href="/index#projects">Projects</a><buffer></buffer>
            <a href="/about">About</a></h3>
        </div>

        <div id="footer-mobile">
            <span>
                <h3>Sean Bost ©2024 <buffer></buffer><buffer></buffer> 
            </span>
            <span>
                <a href="/index">Home</a><buffer></buffer><buffer></buffer>
                <a href="/index#projects"> Projects</a><buffer></buffer><buffer></buffer>
                <a href="/about"> About</a><buffer></buffer><buffer></buffer>
            </span>
        </div>
    </div></footer>
</body>