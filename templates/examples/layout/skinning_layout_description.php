<h2 class="first">Layout Managers core CSS file</h2>

<p>The Layout Manager's base class is a starting point for skinning a Layout. Include this file and use the skin file as a reference for your new skin (<a href="../../build/layout/assets/layout-core.css">you can view the full contents of the base class here</a>).</p>

<h2>Sam's skin CSS file</h2>

<p>Once you have the base class in place, you can proceed to customize the look and feel of your Layout by working with the skinning file.   Starting with the Sam Skin version below is generally the fastest approach, allowing you to customize just those parts of the skin that will make your implementation resonate with the overall design of your application.</p>

<textarea name="code" class="CSS">
/* Remove the dotted border on the resize proxy */
.yui-skin-sam .yui-layout .yui-resize-proxy {
    border: none;
    font-size: 0;
    margin: 0;
    padding: 0;
}
/* During resize, hide the handles */
.yui-skin-sam .yui-layout .yui-resize-resizing .yui-resize-handle {
    opacity: 0;
    filter: alpha(opacity=0);
}
/* Style the div inside the resize proxy */
.yui-skin-sam .yui-layout .yui-resize-proxy div {
    position: absolute;
    border: 1px solid #808080;
    background-color: #EDF5FF;
}
/* Set the color of the Active resize handle */
.yui-skin-sam .yui-layout .yui-resize .yui-resize-handle-active {
    background-color: #EDF5FF;
}
/* Styles for the left handle */
.yui-skin-sam .yui-layout .yui-resize-proxy .yui-layout-handle-l {
    width: 5px;
    height: 100%;
    top: 0;
    left: 0;
}
/* Styles for the right handle */
.yui-skin-sam .yui-layout .yui-resize-proxy .yui-layout-handle-r {
    width: 5px;
    top: 0;
    right: 0;
    height: 100%;
}
/* Styles for the bottom handle */
.yui-skin-sam .yui-layout .yui-resize-proxy .yui-layout-handle-b {
    width: 100%;
    bottom: 0;
    left: 0;
    height: 5px;
}
/* Styles for the top handle */
.yui-skin-sam .yui-layout .yui-resize-proxy .yui-layout-handle-t {
    width: 100%;
    top: 0;
    left: 0;
    height: 5px;
}

/* Left Collapse button */
.yui-skin-sam .yui-layout .yui-layout-unit-left div.yui-layout-hd .collapse {
    background: transparent url(layout_sprite.png) no-repeat -20px -160px;
    border: 1px solid #808080;
}
/* Left Collapsed Expand Button */
.yui-skin-sam .yui-layout .yui-layout-clip-left .collapse {
    background: transparent url(layout_sprite.png) no-repeat -20px -140px;
    border: 1px solid #808080;
}
/* Right Collapse Button */
.yui-skin-sam .yui-layout .yui-layout-unit-right div.yui-layout-hd .collapse {
    background: transparent url(layout_sprite.png) no-repeat -20px -200px;
    border: 1px solid #808080;
}
/* Right Collapsed Expand Button */
.yui-skin-sam .yui-layout .yui-layout-clip-right .collapse {
    background: transparent url(layout_sprite.png) no-repeat -20px -120px;
    border: 1px solid #808080;
}
/* Top Collapse Button */
.yui-skin-sam .yui-layout .yui-layout-unit-top div.yui-layout-hd .collapse {
    background: transparent url(layout_sprite.png) no-repeat -20px -220px;
    border: 1px solid #808080;
}
/* Top Collapsed Expand Button */
.yui-skin-sam .yui-layout .yui-layout-clip-top .collapse {
    background: transparent url(layout_sprite.png) no-repeat -20px -240px;
    border: 1px solid #808080;
}
/* Bottom Collapse Button */
.yui-skin-sam .yui-layout .yui-layout-unit-bottom div.yui-layout-hd .collapse {
    background: transparent url(layout_sprite.png) no-repeat -20px -260px;
    border: 1px solid #808080;
}
/* Bottom Collapsed Expand Button */
.yui-skin-sam .yui-layout .yui-layout-clip-bottom .collapse {
    background: transparent url(layout_sprite.png) no-repeat -20px -180px;
    border: 1px solid #808080;
}
/* Close Button */
.yui-skin-sam .yui-layout .yui-layout-unit div.yui-layout-hd .close {
    background: transparent url(layout_sprite.png) no-repeat -20px -100px;
    border: 1px solid #808080;
}

/* Give the header a blue backgorund */
.yui-skin-sam .yui-layout .yui-layout-hd {
    background:url(sprite.png) repeat-x 0 -1400px;
    border: 1px solid #808080;
}
/* Set the background color */
.yui-skin-sam .yui-layout {
    background-color: #EDF5FF;
}
/* Style the text in the header */
.yui-skin-sam .yui-layout .yui-layout-unit div.yui-layout-hd h2 {
    font-weight: bold;
    color: #fff;
    padding: 3px;
}
/* Style the body */
.yui-skin-sam .yui-layout .yui-layout-unit div.yui-layout-bd {
    border: 1px solid #808080;
    border-bottom: none;
    border-top: none;
    *border-bottom-width: 0;
    *border-top-width: 0;
    background-color: #f2f2f2;
    text-align: left;
}
/* Add a border to the bottom of the body because there is no footer */
.yui-skin-sam .yui-layout .yui-layout-unit div.yui-layout-bd-noft {
    border-bottom: 1px solid #808080;
}
/* Add a border to the top of the body because there is no header */
.yui-skin-sam .yui-layout .yui-layout-unit div.yui-layout-bd-nohd {
    border-top: 1px solid #808080;
}

/* Style the Clip */
.yui-skin-sam .yui-layout .yui-layout-clip {
    position: absolute;
    height: 20px;
    background-color: #EDF5FF;
    display: none;
    border: 1px solid #808080;
}
/* Style the footer */
.yui-skin-sam .yui-layout div.yui-layout-ft {
    border: 1px solid #808080;
    border-top: none;
    *border-top-width: 0;
    background-color: #f2f2f2;
}

/* Remove the color from the resize handle */
.yui-skin-sam .yui-layout-unit .yui-resize-handle {
    background-color: transparent;
}
/* Reposition the handles */
.yui-skin-sam .yui-layout-unit .yui-resize-handle-r {
    right: 0;
    top: 0;
    background-image: none;
}
.yui-skin-sam .yui-layout-unit .yui-resize-handle-l {
    left: 0;
    top: 0;
    background-image: none;
}
.yui-skin-sam .yui-layout-unit .yui-resize-handle-b {
    right: 0;
    bottom: 0;
    background-image: none;
}
.yui-skin-sam .yui-layout-unit .yui-resize-handle-t {
    right: 0;
    top: 0;
    background-image: none;
}
/* Add the gripper */
.yui-skin-sam .yui-layout-unit .yui-resize-handle-r .yui-layout-resize-knob,
.yui-skin-sam .yui-layout-unit .yui-resize-handle-l .yui-layout-resize-knob {
    position: absolute;
    height: 16px;
    width: 6px;
    top: 45%;
    left: 0px;
    background: transparent url(layout_sprite.png) no-repeat 0 -5px;
}
/* Add the gripper */
.yui-skin-sam .yui-layout-unit .yui-resize-handle-t .yui-layout-resize-knob,
.yui-skin-sam .yui-layout-unit .yui-resize-handle-b .yui-layout-resize-knob {
    position: absolute;
    height: 6px;
    width: 16px;
    left: 45%;
    background: transparent url(layout_sprite.png) no-repeat -20px 0;
}
</textarea>