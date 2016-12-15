@if (Auth::guest())
@else
<div id="wrapper" class="active">
  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul id="sidebar_menu" class="sidebar-nav">
        <li class="sidebar-brand">
          <a id="menu-toggle" class="hide_button">Menu
            <span id="main_icon" class="glyphicon glyphicon-chevron-left"></span>
          </a>
        </li>
    </ul>
    <ul class="sidebar-nav sidebar-menu" id="sidebar" role="navigation""> 
    <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Risk categories <span class="caret"></span>
            <span class="sub_icon glyphicon glyphicon-file"></span>
          </a>
          <ul class="dropdown-menu collapse" role="menu" id="left-submenus" aria-expanded="true">
            <li><a href="#">Applications</a></li>
            <li><a href="#">Conduct Risk</a></li>
            <li><a href="#">Credit Risk</a></li>
            <li><a href="#">Interest Rate Risk</a></li>
            <li><a href="#">Liquidity Risk</a></li>
            <li><a href="#">Market Risk</a></li>
            <li><a href="#">Processing Risk</a></li>
            <li><a href="#">Reference Data</a></li>
          </ul>
      </li>
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Risk summary <span class="caret"></span>
            <span class="sub_icon glyphicon glyphicon-file"></span>
          </a>
          <ul class="dropdown-menu collapse" role="menu" id="left-submenus" aria-expanded="true">
            <li><a href="#">Products</a></li>
            <li><a href="#">Best practices</a></li>
          </ul>
      </li>
    </ul>
  </div>
  @endif
  <!-- Page content -->
  
</div>  
   
<script type="text/javascript">
$(document).ready(function() {
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("active");
    $("#main_icon").toggleClass("glyphicon-chevron-right glyphicon-chevron-left");
  });
  
});
</script>
