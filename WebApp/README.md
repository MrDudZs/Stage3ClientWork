When writing HTML please use the class structure as followed for reference to CSS.

<div class="[fileName][content]-mn [fileName][content]-mb"> </div>

An example:
<div class="indexContainer-mn indexContainer-mb></div>

Reason:
I use this so that we can tell the difference between Desktop/PC styling and Moblie styling along with knowing which page it is styling.

Context:
[fileName] - What the name of the page will be. Example: "index".html
[content] - What will this will be used to store. Example: "Header" will store all attributes for the header section
"mn" - This stands for "Main" which refers to the Main CSS file "desktop".css 
"mb" - This stands for "Moblie" which refers to the CSS for moblie development "mobile".css


Additonal:
When making navigation bars please do:
<div class="navbar-mn navbar-mb">
     <nav class="topnav-mn topnav-mb">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="document.html">DOCUMENTS</a></li>
            <li><a href="archives.html">ARCHIVES</a></li>
            <li><a href="logout.html">LOG OUT</a></li>
        </ul>
     </nav>
</div>

If you are woring on another <nav> </nav> within the document i.e:
<div class="sideNavbar-mn sideNavbar-mb">
    <nav class="sidenav-mn sideNav-mb">
    <ul>
        </li> </li>
    </ul>
    </nav>
</div>

Reason:
When working with NavBars with Desktop use and Mobile use the Mobile CSS tends to cause issues if it is using the same class name as the desktop, to counter this using the -mb and -mn tags will allow use to style them according to CSS type.

Notes:
Due to practices this may change though this is the best format I (Matt) have see used in real world applications.
Example is "East Norfolk Sixth Forms" website when looking through their code. (Last checked in December 2023).

Exemptions:

Use:
<div class= "body-mn body-mb"> </div> 

Instead of:
<div class= "[fileName]body-mn [fileName]body-mb"> </div>


The exemption reason behind this is that all pages body styles will be the same as seen on the clients site. Though seperating desktop and moblie CSS will be needed incase of errors.


List of exemptions to document:
- body-mn && body-mb
- navBar-mn navBar-mb
