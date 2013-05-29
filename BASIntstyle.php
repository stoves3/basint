<?php
    header("Content-type: text/css");

    //color variables
    $black = '#000000';
    $red = '#FF0000';
    $green = '#00FF00';
    $blue = '#0000FF';
    $magenta = '#FF00FF';
    $gold = '#FFCC00';
    
    //Initial blank program execution window
    $screenPixelSize = 2;
    $screenWidth = 320;
?>
body
{
background-color: <?php echo $black ?>;
color:<?php echo $gold ?>;
}

div#block1 
{
z-index:1;
}

div#block2 
{
z-index:1;
position:relative;
}

div#block3 
{
z-index:1;
position:relative;
}

/*debug buttons*/
div#block2-a
{
position:absolute;
left:0%;
}

/*program execute window*/
div#block2-b
{
position:relative;
width:75%;
left:25%;
}

/*additional links*/
div#block3-a
{
position:absolute;
left:0%;
}

/*validation links*/
div#block3-b
{
position:absolute;
right:0%;
}

p#pgheader
{
position:relative;
width:65%;
left:35%;
font-size:x-large;
font-weight:normal;
}

form.hiddenButton
{
visibility:hidden;
}

div#divDebugButtons
{
visibility:hidden;
}

img#execWindow
{
border-style:solid;
border-color:<?php echo $gold ?>;
border-width:thick;
}

input#runButton
{
position:relative;
top:10px;
left:<?php echo ((($screenWidth * $screenPixelSize)/2) - 49) ?>px;
}

img#bckgrndImg
{
position:absolute;
width:100%;
top:0%;
left:0%;
z-index:-1;
}