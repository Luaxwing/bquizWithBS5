<style>
    #cover {
	width: 100%;
	height: 100%;
	position: fixed;
	z-index: 5;
	background: rgba(51, 51, 51, 0.4);
	top: 0px;
	left: 0px;
	overflow: auto;
}

#coverr {
	width: 70%;
	min-width: 300px;
	max-width: 800px;
	height: 70%;
	min-height: 300px;
	position: absolute;
	z-index: 5;
	background: #ffffff;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	margin: auto;
	overflow: auto;
}

</style>



<div id="cover" style="display:none; ">
    <div id="coverr">
        <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
        <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
</div>