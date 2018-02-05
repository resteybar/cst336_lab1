<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8"/>
        <title>Raymond Esteybar: Personal Website</title>
        
        <link href="css/styles.css" rel="stylesheet" type="text/css"  />
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        
        <header>
            <h1>Raymond Esteybar</h1>
        </header>
        
        
        <nav>
            <hr width="50%"/>
            
            <a id="home"    href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
        </nav>
        
        <main id = "index">
            <figure id="me">
                <img src="img/ray.jpg" alt="Picture of Raymond Esteybar"/>
            </figure>
            
            <div id="welcomeText">
                Hello!
                <p>
                    Thank you for visiting my professional portfolio website.
                </p>
                <p>
                    I am a Software Engineer and seeking out an internship.
                </p>
                <p>
                    Feel free to contact me.
                </p>
                
                <em>
                    "With ordinary talent and extraordinary <strong>perseverence</strong>
                    , all thing are attainable"
                </em>
                <br/>
                - Thomas F. Buxton
            </div>
        </main>
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr width=50%>
            CST-336: Internet Programming. 2017&copy; Esteybar <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
            It used for academic purposes only.
            
            <div>
                <img src="img/csumbLogo.png" />
            </div>
            
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>