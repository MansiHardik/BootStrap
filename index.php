<html>
    <head>
        <script src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <script src="js/bootstrap.min.js"></script>
		<titel>Traning</titel>
		
		 <script type='text/javascript'>
        
        $(document).ready(function() {
            $('[data-toggle=offcanvas]').click(function() {
				$('.row-offcanvas').toggleClass('active');
			});

			$('.btn-toggle').click(function() {
				$(this).find('.btn').toggleClass('active').toggleClass('btn-default').toggleClass('btn-danger');
			});
        });
        
        </script>
    </head>
    <body>
        <!--       <ul class="nav nav-tabs">
  <li role="presentation"><a href="#">Home</a></li>
  <li role="presentation"><a href="#">Profile</a></li>
  <li role="presentation"><a href="#">Messages</a></li>
</ul>-->
        navbar-fixed-top 
        navbar-fixed-bottom both are used with nav tag for aling..
        navbar-inverse nothing important but used for change background to black otherwise white is shown
        navbar-static-top || navbar-static-bottom used for div circle corner top for top side & bottom for bottom side.

        nav-pills for button
        nav-tabs for tab
        nav-stacked for 1by1
        nav-justified our list or tags....
        dropdown-menu for creating dropdown list
        navbar-right for right side allinment of menu
        navbar-form for creating form on bar
        disabled for disabling any tag
        collapse navbar-collapse for collapsed menu when screen size is mobail or tablet or any other small devise.
        <!--        <ul class="nav nav-pills nav-justified" role="navigation">
          <li role="presentation" ><a href="#">Home</a></li>
          <li role="presentation" class="disabled"><a href="#">Profile</a></li>
          <li role="presentation"><a href="#">Messages</a></li>
        </ul>-->
        <nav class="navbar navbar-default " role="navigation">
            <div class="container-fluid ">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                   
                </div>

                <div class="collapse navbar-collapse" id="nav">
                    <ul class="nav nav-pills nav-bar " >
                        <li role="presentation" class="active"><a href="#">Home</a></li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" >
                                Dropdown <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation" ><a href="#">abc</a></li> 
                                <li role="presentation"  ><a href="#">xyz</a></li> 
                                <li role="presentation"  ><a href="#">pqr</a></li>
                            </ul>
                        </li>


                        <ul class="nav nav-pills navbar-right">
                            <li role="presentation" ><a href="#">About</a></li>
                            <li role="presentation" ><a href="#">Contact </a></li>
                            <li role="presentation" ><a href="#">Link</a></li>
                            <li role="presentation" ><a href="#">Address</a></li>
                            <li role="presentation" ><a href="#">Map</a></li> 

                        </ul>
                    </ul>
                </div>
            </div>
        </nav>

        <!--    
                <div class="page-header">
                    <div class="container">   
                        container for center alinment
                        img-responsive for image responsiveness.
                        <img class="img-responsive" src="8801_1396532552.jpg" width="100%">
                    </div>
                </div>-->

        <ul>
            <li class="glyphicon glyphicon-minus">Hello</li>
            <li class="glyphicon glyphicon-minus">About</li>
            <li class="glyphicon glyphicon-plus" style="color: #a0ebcd">Contact</li>
        </ul>
        jumbotroan is a lightweight, flexible component that can optionally extend the entire viewport to showcase key content on your site.
        pull-left||pull-right used for dividing 1 screen in 2 part .like 1 part containt image or other contain some text. 

        col-xs-12, col-md-3, col-lg-3, col-sm-2, col-xs-offset-1, col-md-offset-1, col-lg-offset-1, col-sm-offset-1, row
        that r used for creating row column and gap between tow column
        col-xs-pull-12, col-md-pull-3, col-lg-pull-3, col-sm-pull-2
        col-xs-push-12, col-md-push-3, col-lg-push-3, col-sm-push-2
        that r used for column ordaring...
<!--        <div class="container">
            <p class="col-xs-12 col-md-3 col-lg-3 col-sm-2 ">WindowBuilder is a powerful and easy to use bi-directional Java GUI designer that makes it very easy to create Java GUI applications without spending a lot of time writing code to display simple forms. With WindowBuilder you can create complicated windows in minutes. Use the visual designer and Java code will be generated for you. You can easily add controls using drag-and-drop, add event handlers to your controls, change various properties of controls using a property editor, internationalize your app and much more.</p>
            <p class="col-xs-12 col-md-3 col-lg-3 col-sm-2 col-xs-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">WindowBuilder is a powerful and easy to use bi-directional Java GUI designer that makes it very easy to create Java GUI applications without spending a lot of time writing code to display simple forms. With WindowBuilder you can create complicated windows in minutes. Use the visual designer and Java code will be generated for you. You can easily add controls using drag-and-drop, add event handlers to your controls, change various properties of controls using a property editor, internationalize your app and much more.</p>
            <p class="col-xs-12 col-md-3 col-lg-3 col-sm-2 col-xs-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-offset-1">WindowBuilder is a powerful and easy to use bi-directional Java GUI designer that makes it very easy to create Java GUI applications without spending a lot of time writing code to display simple forms. With WindowBuilder you can create complicated windows in minutes. Use the visual designer and Java code will be generated for you. You can easily add controls using drag-and-drop, add event handlers to your controls, change various properties of controls using a property editor, internationalize your app and much more.</p>
        </div>-->
img-responsive,img-rounded,img-thumbnail,img-circle
<!--<div class="visible-lg ">
<img class="img-responsive" src="8801_1396532552.jpg">
</div>>
<div class=" visible-sm">
    <img class="img-responsive" src="previous_arrow.png">
</div>
<div class="visible-xs">
    <img class="img-responsive" src="next_arrow.png">
</div>-->
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
<img class="img-responsive img-circle" src="8801_1396532552.jpg">
</div>>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <img class="img-responsive img-thumbnail" src="8801_1396532552.jpg">
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <img class="img-responsive img-rounded" src="8801_1396532552.jpg">
</div>

table,table-reponsive,table-striped,table-bordered,table-hover,table-condensed,(active,success,warning,danger,info - applying both at row and column's),(table-responsive applying at div which contains table.)
<!--<tr class="active">...</tr>
<tr class="success">...</tr>
<tr class="warning">...</tr>
<tr class="danger">...</tr>
<tr class="info">...</tr>

 On cells (`td` or `th`) 
<tr>
  <td class="active">...</td>
  <td class="success">...</td>
  <td class="warning">...</td>
  <td class="danger">...</td>
  <td class="info">...</td>
</tr>-->

btn,btn-primary,btn-success,btn-default,btn-info,btn-warning,btn-danger,btn-link,btn-lg,btn-sm,btn-md,btn-xs,btn-block,active,disabled 
that r used for button,
also used with 
</br>	 
<center>
	 <div class="btn-group btn-toggle"> 
                        <button class="btn btn-default">ON</button>
                        <button class="btn btn-danger active">OFF</button>
                      </div>
					  </center>
 
    </body>
</html>


