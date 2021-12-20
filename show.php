<html>
<head>
<script type="text/javascript" src="moreless.js"></script>
</head>

<body>
Lorem ipsum dolor sit amet
<p>

<p id="textarea"><!-- This is where I want to additional text--></div>
</p>

<a onclick="showtext('text')" href="javascript:void(0);">See More</a>
<p>
Here is some more text </p>

<script type="text/javascript">
	var setHeight = function (element, height) {
    if (!element) {;
        return false;
    }
    else {
        var elementHeight = parseInt(window.getComputedStyle(element, null).height, 10),
        toggleButton = document.createElement('a'),
        text = document.createTextNode('...Show more'),
        parent = element.parentNode;

        toggleButton.src = '#';
        toggleButton.className = 'show-more';
        toggleButton.style.float = 'right';
        toggleButton.style.paddingRight = '15px';
        toggleButton.appendChild(text);

        parent.insertBefore(toggleButton, element.nextSibling);

        element.setAttribute('data-fullheight', elementHeight);
        element.style.height = height;
        return toggleButton;
    }
}

var toggleHeight = function (element, height) {
    if (!element) {
        return false;
    }
    else {
        var full = element.getAttribute('data-fullheight'),
        currentElementHeight = parseInt(element.style.height, 10);

        element.style.height = full == currentElementHeight ? height : full + 'px';
    }
}

var toggleText = function (element) {
    if (!element) {
        return false;
    }
    else {
        var text = element.firstChild.nodeValue;
        element.firstChild.nodeValue = text == '...Show more' ? '...Show less' : '...Show more';
    }
}


var applyToggle = function(elementHeight){
    'use strict';
    return function(){
        toggleHeight(this.previousElementSibling, elementHeight);
        toggleText(this);
    }
}


var modifyDomElements = function(className, elementHeight){
    var elements = document.getElementsByClassName(className);
    var toggleButtonsArray = [];


    for (var index = 0, arrayLength = elements.length; index < arrayLength; index++) {
        var currentElement = elements[index];
        var toggleButton = setHeight(currentElement, elementHeight);
        toggleButtonsArray.push(toggleButton);
    }

    for (var index=0, arrayLength=toggleButtonsArray.length; index<arrayLength; index++){
        toggleButtonsArray[index].onclick = applyToggle(elementHeight);
    }
}
</script>
</body>
</html>

