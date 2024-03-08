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


Notes:
Due to practices this may change though this is the best format I (Matt) have see used in real world applications.
Example is "East Norfolk Sixth Forms" website when looking through their code. (Last checked in December 2023).
