
<!--  Written by Sean Bost  -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taste Buds — Sean Bost</title>
    <link rel="shortcut icon" href="assets/icon.ico">
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link rel="stylesheet" type="text/css" href="styles/dynamic.css">
    <link rel="stylesheet" type="text/css" href="styles/pinkH2.css">
    <link rel="stylesheet" href="https://use.typekit.net/mhr1izx.css">
</head>


<body>
    <!--  Navigation Content  -->
    <div id="page-top"></div>
    <nav><div class="grid-container">
        <div id="nav-logo">
            <a href="/index"><img src="assets/logo.png" width="140px" height="26px" alt="Logo reading Sean Bost"></a>
        </div>
        <div id="nav-links">
            <h3><a href="/index">Home</a><buffer></buffer><span>Projects<caret>v</caret>
            <div id="nav-dropdown">
                <div id="dropdown-links">
                    <h4 style="padding-top: 10px; padding-bottom: 10px;"><a href="/tastebuds">Taste Buds</a><br>
                    <a href="/aamd">AAMD</a></h4>
                </div>
            </div></span><buffer></buffer>
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
            <p><gray>UX designer in a design team of 3</gray></p><br>
            <p><b>TIMELINE</b></p>
            <p><gray>Approx. 80 hours</gray></p><br>
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
            <li>Unravel pain points in their process, plus how common and severe they each are</li>
            <li>Determine how digital recipes and their platforms are selected</li>
            <li>Identify the strengths and weaknesses in competing products</li></ul>
        </div>
        <!--  Market Research  -->
        <div class="content-left" >
            <p><b>COMPETITIVE ANALYSIS</b></p>
            <p>We started by looking up recipes on existing platforms so we could better understand the process our users experience to ask more relevant questions. We also made a basic feature matrix of competing platforms and took notes on their UI and architecture. This was to later help ideate different approaches our product could possibly take depending on user priorities.</p>
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
            <p>Through our research we were able to identify a single primary problem that home cooks faced when sourcing recipes:</p>
            <br><p style="padding-left: 30px; padding-right: 30px;"><em><bigg>Users want utter simplicity while navigating and viewing recipes, yet current recipe platforms are bloated with ads and undesired text and content.</bigg></em></p>
            <br><p>Alongside understanding user needs for the process of getting recipes, we also got a glimpse of how important trust and confidence is when selecting a recipe for most home cooks. Through this lens, looking at how an additional subset of respondents were interested in socially sharing recipes, we also determined primarily focusing on user generated content would give us an edge in competing against established giants.</p>
        </div>
        <!--  Persona  -->
        <div class="content-center">
            <div id="jump-Persona"></div>
            <h2>User Persona & Journey</h2>
            <p>There were several takeaways our research provided us on who our target users are. Viewing respondents individually, I noted that the home cooks interested in shareable user-generated recipes did not have any significant skew in age or gender. They were united in their desire for brief and easily digestible recipes as well as their interest in cooking both new and familiar recipes. Most had one other feature cluster besides “social” that they were also interested in, such as “meal planning” or “nutrition”.</p>
            <p>With this data we made a representative persona, Cook, and mapped out a journey for him that relates to our target users', helping us to better empathize with their position.</p>
        </div>
    </div>
    <br><br><div class="pink-bg"><br><br><div class="grid-container">
        <div class="content-left" style="padding-left: 30px; padding-right: 30px;">
            <p><b>BIO</b></p><bigg>
            <p><em>Cook's a young adult who frequently cooks and bakes at home. He'll use existing family recipes, new ones that he finds online, and occasionally he'll even make his own.</em></p>
            <p><em>Some of his friends and family are also interested in making their own food and use recipes as well, and Cook often bonds with them over creating and enjoying meals together.</em></p>
        </bigg></div>
        <div class="content-right" style="padding-left: 30px; padding-right: 30px;">
            <p><b>GOALS</b></p>
            <ul><li>To find trusted recipes that are to-the-point</li>
            <li>To easily share recipes between loved ones</li></ul>
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
                <p>Cook opens the app to start creating the recipe and is greeted by a welcome page inviting him to search, create, or explore a recipe. This page is also a hub where he can view all of his saved recipes either created or found.</p>
            </div>
            <div class="content-third">
                <img src="media/tastebuds/story-4.png" width="100%" alt="Drawing of an empty recipe builder page ready to be filled">
                <p>Cook then clicks the plus button on the homescreen of the app which opens the recipe builder page. Here he can enter the recipe's ingredients, instructions, as well as some pictures and a brief description.</p>
            </div>
            <div class="content-third">
                <img src="media/tastebuds/story-5.png" width="100%" alt="The previous drawing but now filled out">
                <p>Once the recipe is finished in the recipe builder, Cook's taken to a publishing screen where before clicking 'finish', he can view and edit who can see the saved recipe and share it via other apps or through a link. To help manage his recipes he can also add categorical tags if he chooses and/or add it to a 'cookbook', which contains other recipes.</p>
            </div>
            <div class="content-third">
                <img src="media/tastebuds/story-6.png" width="100%" alt="A drawing of Cook's recipe page for black forest cake">
                <p>Once the recipe is posted and shared it will now appear in Cook's library.</p>
            </div>
        </div></div>
    </div><br><br></div><br><br>
    <div class="grid-container">
        <div id="jump-HTA"></div>
        <!--  Task Analysis  -->
        <div class="content-center">
            <h2>Task Analysis</h2>
            <p>We needed insight into how a user would go about accomplishing this use case to ensure our process was intuitive and frustration-free. This led us to find a current iPhone app closely relating to the story we outlined to perform a task analysis.</p>
            <p>We enlisted the help of a survey respondent who was interested in platforms with social features to participate: <em>save a recipe for your favorite dish then share it with a friend.</em></p>
            <br><img src="media/tastebuds/tag-1.png" width="100%" alt="Hierarchical task analysis graph for saving & sharing a new recipe">
            <div class="caption">
                <p>For subtask 4.1 the user hesitated clicking to share. For 4.2 they initially selected an option they didn't want</p>
            </div>
            <br><p>The process outlined was fairly smoothly accomplished, with the only issues being in the sharing process. The experiment was repeated again with another person in a more casual environment with similar results. Our key takeaways were that fat could be cut through not requiring a lengthy onboarding process, UI elements supporting the operations must be clear and immediately accessible, and that sharing can be somewhat confusing when transitioning from in-app to the iOS sharing interface.</p>
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
    <br><br><div class="pink-bg"><br><br><div class="grid-container">
        <!--  Workshopping  -->
        <div id="jump-Workshop"></div>
        <div class="content-center">
            <h2>Workshopping Features, Information Architecture</h2>
            <p>I conducted a brief UX workshop for our team to identify the core features needed for our tasks to function. We then revisited our market and user research to holistically decide upon secondary features that would be beneficial to our users' goals and interests.</p>
        </div>
        <div class="content-left" style="padding-left: 30px; padding-right: 30px;">
            <p><bigg>Every feature we considered was screened to meet the following criteria:</bigg></p>
            <br><ul><li>Improve the process of finding recipes, <i>or</i></li>
            <li>Add additional value or utility to the recipe ecosystem</li>
            <li>Do not obstruct or interfere with finding and reading recipes</li></ul>
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
    </div><br><br></div><br><br>
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
            <p>After further fleshing out our low fidelity prototype we began exploring directions we could take for Taste Buds' visual design. We wanted our app to stand out in an industry we've come to know as homogenous, sleek, and modern. We also wanted it to convey warmth and creativity. We decided to go for a colorful, “groovy” look to fit these desires, and outlined apt colors and typefaces for usage in the UI.</p>
            <br><img src="media/tastebuds/brandboard.png" width="100%" alt="Taste Buds brandboard showing Kansas New and Brevia as chosen fonts and warm pink, green, and oranges for the colors">
        </div>
    </div>
    <br><br><div class="pink-bg"><br><br><div class="grid-container">
        <!--  Design & Use Testing  -->
        <div id="jump-DesTest"></div>
        <div class="content-center">
            <h2>Design Testing</h2>
            <p>The area with the most ambiguity left was the explore tab, as there were several paths we could take with its UI to fulfill our goals. We chose to create a few basic mockups of it with varying layouts as well as with different aesthetical choices. We each then conducted brief interviews with our mockups to learn what visual and operational choices were most appealing to potential users.</p>
            <div class="caption">
                <br><img src="media/tastebuds/papermockup.png" width="100%" alt="Paper conceptual design mockups">
                <p>Paper conceptual design mockups</p>
                <br><br><img src="media/tastebuds/xdmockup.png" width="100%" alt="High fidelity design translations">
                <p>Their high fidelity translations</p><br>
            </div>
            <p>Everyone understood what each component did with the most minimal design, which was a success as we prioritized intuition with that mockup over all else. The floating create button was well understood and received as well, however the large card stack and visual elements of the wild design were not. In spite of this, when asked the minimal design was “not enough” — it lacked any significant identity or visual hierarchy.</p>
            <p>We decided to incorporate one large row of tiles with soft colors to address concerns from both directions. We then rebuilt our mockup's design and used the elements and assets created to help flesh out our previous wireframe prototype so we could test it.	</p>
            <div id="jump-UseTest"></div>
            <br><h2>Usability Testing</h2>
            <p>We opted to conduct one last task analysis on our high fidelity prototype with the same process as before. This was to uncover any awkward design choices or frustrations performing tasks we might not have been aware of.</p>
            <img src="media/tastebuds/tag-2.png" width="100%" alt="Another HTA graph, this one on saving a recipe then finding where it's saved">
            <div class="caption">
                <p>For subtask 3.1 the user was unsure to click on the 'bookmark' icon. The same hesitation was present during 4.2</p>
            </div>
            <br><p><b>THINK ALOUD PROTOCOL</b></p>
            <p>With the same user, we also had them think aloud while exploring the app, sharing how they felt about its interface design, navigation, and potential contents. We gained insight through hearing their thoughts on how the formatting of our login screen could be improved, that highlighting the current tab open is helpful, that native explore ads weren't hostile, ways to make our iconography more cohesive, how the create button should disappear when a recipe is viewed, and more.</p>
        <!--  Final Design  -->
            <br><h2>Final Design</h2>
            <p>We continued honing in on the details of the interface as they related to Taste Buds' experience. This led to a working and potential final design for the onboarding, explore, collection, and create segments. After discussing priorities we chose to optimize these segments before diving into the meal planning one, as it would be much more intensive with much less value added to the product. Had we more time to budget we would have done another round of design review and usability testing to polish Taste Buds further.</p>
            <p><em>Here are some stills from the app:</em></p>
        </div>
        <div class="content-full">
            <div class="content-third">
                <img src="media/tastebuds/final-1.png" width="100%" alt="A large shot of Taste Buds being used">
            </div>
            <div class="content-doublethird">
                <img src="media/tastebuds/final-2.png" width="100%" alt="Several high-fidelity stills of Taste Buds">
            </div>
        </div>
    </div><br><br></div><br><br>
    <div class="grid-container">
        <!--  Takeaways  -->
        <div class="content-center">
            <p><b>TAKEAWAYS</b></p>
            <p>Working in a deadline-driven team of designers from multiple backgrounds was an incredibly enriching experience. I came in expecting to primarily be sharpening my application of various UX methods, yet also walked away with a much better grasp of how I can best contribute value to a product as well as how to best coordinate and communicate design solutions.</p>
            <br><p><em>Some important hands-on lessons were:</em></p>
            <ul><li><b>Always keep the user's interests in mind.</b> After discovering our user's problems, goals, and feelings it's important to continue to keep them at the forefront of every decision throughout the entire design process. There was an important juncture where I was concerned we were designing according to our individual preferences, and was able to communicate through our data why we may want to explore a more user-oriented solution.</li>
            <li><b>Imperfect research beats no research.</b> There were two stages where we hadn't budgeted time to do user research or testing yet made time to do so anyhow. That research wasn't as formal or articulately planned as the rest, yet proved valuable in helping us build an optimal experience. Had we not done so, we would have spent even more time having to correct course at a more complex stage of the design.</li>
            <li><b>Make assumptions, but don't rely on them.</b> Without assumptions we wouldn't have discovered how much users prioritize recipes from people they know, nor would we have ideated several of our design concepts that testing later deemed a success. However, some assumptions each of us made along the way also proved to be misguided, and if we hadn't relied on user feedback to check them we would have been thrusting problems onto the user instead of solving their own.</li></ul>
            <br><p><b>GOING FORWARD</b></p>
            <p>Spread out over several meetings, it took us about a week's work to be ready to deliver our initial wireframe prototype, and another to reach our current design above. Had we one more week I would've liked to have refined our visual design further. I feel certain aesthetical choices such as our color usage could be tighter, which could potentially help different screens blend better and also help users more intuitively identify certain CTA elements.</p>
            <p>Taking on any future similar projects I also would like to make more effort to outline and formalize our design process and deliverable deadlines from the get-go. I also think it would be beneficial to involve development and owner perspectives further to ensure all designs lead towards a viable product. Working alongside only a visual designer and UI designer without strict initial expectations was rewarding and allowed us total control over the creative direction; It also challenged me in being the primary voice for our users and analytics without overstepping, and lead to some inefficiency with our usage of time.</p>
        </div>
    </div>
    </main>


    <!--  Footer Content  -->
    <footer><div class="grid-container">
        <div id="footer-copyright">
            <h3 style="color: #1b8; font-weight: 400;">Sean Bost ©2023</h3>
        </div>
        <div id="footer-links">
            <div class="footer-segment">
                <h3><a href="#page-top">Back to Top</a></h3>
            </div>
            <div class="footer-segment">
                <h5>Contacts</h5><br>
                <a href="/cdn-cgi/l/email-protection#2754424649534548545367404a464e4b0944484a"><span class="__cf_email__" data-cfemail="acdfc9cdc2d8cec3dfd8eccbc1cdc5c082cfc3c1">[email&#160;protected]</span></a><br>
                <a href="https://www.linkedin.com/in/seanbost/" target="_blank">LinkedIn</a><br>
                <a href="/Sean-Bost-Resume.pdf" target="_blank">Resume</a>
            </div>
            <div class="footer-segment">
                <h5>Projects</h5><br>
                <a href="/tastebuds">Taste Buds</a><br>
                <a href="/aamd">AAMD</a>
            </div>
            <div class="footer-segment">
                <h5>Pages</h5><br>
                <a href="/index">Home</a><br>
                <a href="/about">About</a>
            </div>
        </div>
        <div id="footer-mobile">
            <span>
                <h3>Sean Bost ©2023 <buffer></buffer><buffer></buffer> 
                <a href="#page-top">Back to Top</a></h3>
            </span>
            <span>
                <a href="/index">Home</a><buffer></buffer><buffer></buffer>
                <a href="/about"> About</a><buffer></buffer><buffer></buffer>
                <a href="/tastebuds">Taste Buds</a><buffer></buffer><buffer></buffer>
                <a href="/aamd">AAMD</a>
            </span>
            <span style="margin-top: 20px;">
                <a href="/cdn-cgi/l/email-protection#0675636768726469757246616b676f6a2865696b"><em>Email Me!</em></a><buffer></buffer><buffer></buffer>
                <a href="https://www.linkedin.com/in/seanbost/" target="_blank"><em>LinkedIn</em></a><buffer></buffer><buffer></buffer>
                <a href="/Sean-Bost-Resume.pdf" target="_blank"><em>Resume</em></a>
            </span>
        </div>
    </div></footer>
</body>