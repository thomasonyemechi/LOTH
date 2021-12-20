 <script type="text/javascript">
var status = "less";

function toggleText()
{
    var text="Here is some text that I want added to the HTML file";

    if (status == "less") {
        document.getElementById("textArea").innerHTML=text;
        document.getElementById("toggleButton").innerText = "See Less";
        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea").innerHTML = "";
        document.getElementById("toggleButton").innerText = "See More";
        status = "less"
    }
}
</script>

Lorem ipsum dolor sit amet
<p id="textarea">
    <!-- This is where I want to additional text-->
     All that delicious text is in here!
</p>
<!-- the show/hide controls inside of the following
     list, for ease of selecting with CSS -->
<ul class="controls">
    <li class="show"><a href="#textarea">Show</a></li>
    <li class="hide"><a href="#">Hide</a></li>
</ul>

<p>Here is some more text</p>
<style type="text/css">
	#textarea {
    display: none; /* hidden by default */
}

#textarea:target {
    display: block; /* shown when a link targeting this id is clicked */
}

#textarea + ul.controls {
    list-style-type: none; /* aesthetics only, adjust to taste, irrelevant to demo */
}

/* hiding the hide link when the #textarea is not targeted,
   hiding the show link when it is selected: */
#textarea + ul.controls .hide,
#textarea:target + ul.controls .show {
    display: none;
}

/* Showing the hide link when the #textarea is targeted,
   showing the show link when it's not: */
#textarea:target + ul.controls .hide,
#textarea + ul.controls .show {
    display: inline-block;
}
</style>