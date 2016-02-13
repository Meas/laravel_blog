@extends('app')

@section('content')

	<h1> Contact me! </h1>
@stop









<!--<!DOCTYPE HTML>
<html>
<head>
<style>
#div1 {width:100px;height:200px;padding:10px;border:1px solid #aaaaaa;}
</style>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>

<p>Drag the W3Schools image into the rectangle:</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="https://scontent-mxp1-1.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/12144895_621293637973784_784396862311445509_n.jpg?oh=e650ff447ad65a2a263a670703941c20&oe=5765CAE1" draggable="true" ondragstart="drag(event)" width="100" height="200">

</body>
</html>
-->