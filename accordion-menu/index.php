<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <script src="//cdn.ckeditor.com/4.7.0/full/ckeditor.js"></script>
  
  <title>Accordion Menu</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
body {
  color: #5D5F63;
  background: #293949;
  font-family: 'Open Sans', sans-serif;
  padding: 0;
  margin: 0;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
}
.sidebar-toggle {
  margin-left: -240px;
}
.sidebar {
  width: 240px;
  height: 100%;
  background: #293949;
  position: absolute;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 100;
}
.sidebar #leftside-navigation ul,
.sidebar #leftside-navigation ul ul {
  margin: -2px 0 0;
  padding: 0;
}
.sidebar #leftside-navigation ul li {
  list-style-type: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
.sidebar #leftside-navigation ul li.active > a {
  color: #1abc9c;
}
.sidebar #leftside-navigation ul li.active ul {
  display: block;
}
.sidebar #leftside-navigation ul li a {
  color: #aeb2b7;
  text-decoration: none;
  display: block;
  padding: 18px 0 18px 25px;
  font-size: 12px;
  outline: 0;
  -webkit-transition: all 200ms ease-in;
  -moz-transition: all 200ms ease-in;
  -o-transition: all 200ms ease-in;
  -ms-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
}
.sidebar #leftside-navigation ul li a:hover {
  color: #1abc9c;
}
.sidebar #leftside-navigation ul li a span {
  display: inline-block;
}
.sidebar #leftside-navigation ul li a i {
  width: 20px;
}
.sidebar #leftside-navigation ul li a i .fa-angle-left,
.sidebar #leftside-navigation ul li a i .fa-angle-right {
  padding-top: 3px;
}
.sidebar #leftside-navigation ul ul {
  display: none;
}
.sidebar #leftside-navigation ul ul li {
  background: #23313f;
  margin-bottom: 0;
  margin-left: 0;
  margin-right: 0;
  border-bottom: none;
}
.sidebar #leftside-navigation ul ul li a {
  font-size: 12px;
  padding-top: 13px;
  padding-bottom: 13px;
  color: #aeb2b7;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <aside class="sidebar">
  

  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      

      <li>
        <a href="index.html"><i class="fa fa-dashboard"></i><span>Menu</span></a>
      </li>
      
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>Winsight editorial style guide</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        
        <ul>
          <li><a href="https://sharepoint.etslan.org/rd/ad/adand/Shared%20Documents/Forms/AllItems.aspx?RootFolder=%2frd%2fad%2fadand%2fShared%20Documents%2fEdit_Style&FolderCTID=0x012000290CE023BEBA4848AF26E41062F1EE8C">Alerts &amp; Notifications</a>
          </li>
          <li><a href="ui-panels.html">Panels</a>
          </li>
          <li><a href="ui-buttons.html">Buttons</a>
          </li>
          <li><a href="ui-slider-progress.html">Sliders &amp; Progress</a>
          </li>
          <li><a href="ui-modals-popups.html">Modals &amp; Popups</a>
          </li>
          <li><a href="ui-icons.html">Icons</a>
          </li>
          <li><a href="ui-grid.html">Grid</a>
          </li>
          <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
          </li>
          <li><a href="ui-nestable-list.html">Nestable Lists</a>
          </li>
        </ul>
      </li>


      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Item Writer Guide Final (ELA)</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="tables-basic.html">Basic Tables</a>
          </li>

          <li><a href="tables-data.html">Data Tables</a>
          </li>
        </ul>
      </li>


      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>CA&L Tech Content guide v11</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="forms-components.html">Components</a>
          </li>
          <li><a href="forms-validation.html">Validation</a>
          </li>
          <li><a href="forms-mask.html">Mask</a>
          </li>
          <li><a href="forms-wizard.html">Wizard</a>
          </li>
          <li><a href="forms-multiple-file.html">Multiple File Upload</a>
          </li>
          <li><a href="forms-wysiwyg.html">WYSIWYG Editor</a>
          </li>
        </ul>
      </li>


      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Winsight Response Directions</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li class="active"><a href="mail-inbox.html">Inbox</a>
          </li>
          <li><a href="mail-compose.html">Compose Mail</a>
          </li>
        </ul>
      </li>


      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>Winsight Graphic Standards</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="charts-chartjs.html">Chartjs</a>
          </li>
          <li><a href="charts-morris.html">Morris</a>
          </li>
          <li><a href="charts-c3.html">C3 Charts</a></li>
        </ul>
      </li>


      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Winsight Interactive Graphic Standards</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="map-google.html">Google Map</a>
          </li>
          <li><a href="map-vector.html">Vector Map</a>
          </li>
        </ul>
      </li>

      <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>ETS Test Style Manual</span></a>
      </li>


      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-file"></i><span>Winsight Assessment Items Technical Characteristics</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="pages-blank.html">Blank Page</a>
          </li>
          <li><a href="pages-login.html">Login</a>
          </li>
          <li><a href="pages-sign-up.html">Sign Up</a>
          </li>
          <li><a href="pages-calendar.html">Calendar</a>
          </li>
          <li><a href="pages-timeline.html">Timeline</a>
          </li>
          <li><a href="pages-404.html">404</a>
          </li>
          <li><a href="pages-500.html">500</a>
          </li>
        </ul>
      </li>

<li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-text-height"></i><span>Winsight Learning Progressions and Key Practices</span></a>
      </li>

    <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Winsight Frameworks</span></a>
      </li>

    <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Winsight Style Layout Guide</span></a>
      </li>

    <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Authoring for Accessibility: Best Practices</span></a>
      </li>

    <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Winsight Data Collection Plan</span></a>
      </li>

    <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Winsight Team members</span></a>
      </li>


    <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Winsight ELA Finding Winsight Passages</span></a>
      </li>

    <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Winsight ELA Authoring Tips</span></a>
      </li>


    <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Winsight Item Types Catalog</span></a>
      </li>

    <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Winsight Item QC process</span></a>
      </li>



    


    </ul>

  </div>
</aside>

<textarea class="ckeditor" name="editor"></textarea>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

    <script src="js/index.js"></script>
<textarea class="ckeditor" name="editor"></textarea>
</body>
</html>
