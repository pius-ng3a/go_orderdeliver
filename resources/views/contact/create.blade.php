<!DOCTYPE HTML>
<html>
<head>
    <title>GoOrderDeliver, a one spot e-commerce platform | Home :: w3layouts</title>

    <link href="{{ URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary JavaScript plugins) -->
    <script type='text/javascript' src="{{URL::asset('js/jquery-1.11.1.min.js')}}" ></script>
    <!-- Custom Theme files -->
    <!-- theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- start menu -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/megamenu.css')}}" rel='stylesheet' type='text/css' media='all' />
    <link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{ URL::asset('css/etalage.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{ URL::asset('css/form.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{ URL::asset('css/jquery-ui.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{URL::asset('css/megamenu.css')}}" rel='stylesheet' type="text/css" media="all" />
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
  
</head>
<body>
<!-- header -->
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>

					 <li id="signeduser">
                        @if(Auth::check())
                        {!! Lang::get('pagination.welcome',['name'=> Auth::user()->first_name.' ']) !!}
                        @endif
                    </li> |
					<li><a href="#">help</a></li>|
					<li><a href="contact.>Contact</a></li>|
					<li><a href="login.html">Track Order</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto@example.com"> info(at)Mobilya.com</a></li>|
					<li class="top_link"><a href="login.html">My Account</a></li>|					
				</ul>
				<div class="social">
					<ul>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>	
						<li><a href="#"><i class="google"></i></a></li>										
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
    <div class="container">
        <div class="logo">
            <a href="{{action('WelcomeController@index')}}"><img src="{{URL::asset('images/logo.png')}}" alt="logo missing!"/></a>
        </div>
        <div class="header_right">
            <div class="login">
                <a href="{{action('UserAccountController@login')}}">LOGIN</a>
            </div>
            <div class="cart box_1">
                <a href="cart.html">
                    <h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="{{URL::asset('images/bag.png')}}" alt="not found"></h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--cart-->
	 
<!------>
<<div class="mega_nav">
<div class="container">
<div class="menu_sec">
<!-- start header menu -->
<ul class="megamenu skyblue">
<li class="active grid"><a class="color1" href="{{action('WelcomeController@index')}}">Home</a></li>
<li><a class="color8" href="#">Food Stuff</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Tubbers</h4>
                    <ul>
                        <li><a href="{{action('DisplayProductController@food')}}">Plantains</a></li>
                        <li><a href="products.html">Cassava</a></li>
                        <li><a href="products.html">Cocoyams</a></li>
                        <li><a href="products.html">White Yams</a></li>
                        <li><a href="products.html">Irish potatoes</a></li>
                        <li><a href="products.html">Yellow Yams</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>Vegitables</h4>
                    <ul>
                        <li><a href="products.html">Huckle berry</a></li>
                        <li><a href="products.html">Lattuce</a></li>
                        <li><a href="products.html">Green </a></li>
                        <li><a href="products.html">Carbage</a></li>
                        <li><a href="products.html">Bitter leaf</a></li>
                        <li><a href="products.html">Eru</a></li>
                    </ul>
                </div>
            </div>
						<div class="col1">
                <div class="h_nav">
                    <h4>Spices</h4>
                    <ul>
                        <li><a href="products.html">Ginger</a></li>
                        <li><a href="products.html">Mint</a></li>
                        <li><a href="products.html">Garlic</a></li>
                        <li><a href="products.html">Onions</a></li>
                        <li><a href="products.html">Pepper</a></li>
                        <li><a href="products.html">parsley</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>Fruit</h4>
                    <ul>
                        <li><a href="products.html">Oranges</a></li>
                        <li><a href="products.html">Pineapple</a></li>
                        <li><a href="products.html">Water melon</a></li>
                        <li><a href="products.html">Bananas</a></li>
                        <li><a href="products.html">Avocado</a></li>
                        <li><a href="products.html">Carrots</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>Cereals</h4>
                    <ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">Maize</a></li>
                        <li><a href="products.html">Beans</a></li>
                        <li><a href="products.html">Rice</a></li>
                        <li><a href="products.html">Cotton</a></li>
                        <li><a href="products.html">Soybeans</a></li>
                        <li><a href="products.html">Peanuts</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col2"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
        </div>
    </div>
</li>

<li><a class="color5" href="#">kitchen & dinning</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Oil</h4>
                    <ul>
                        <li><a href="products.html">Palm oil</a></li>
                        <li><a href="products.html">Local vegitable oil</a></li>
                        <li><a href="products.html">Kernel Oil</a></li>
                        <li><a href="products.html">Olive oil</a></li>
                        <li><a href="products.html">Coconut oil</a></li>
                        <li><a href="products.html">Horny</a></li>
                    </ul>
                </div>
            </div>
						<div class="col1">
                <div class="h_nav">
                    <h4>Utensils</h4>
                    <ul>
                        <li><a href="products.html">Plates</a></li>
                        <li><a href="products.html">Wooden Spoons</a></li>
                        <li><a href="products.html">Dishes</a></li>
                        <li><a href="products.html">Knives</a></li>
                        <li><a href="products.html">Bowls</a></li>
                        <li><a href="products.html">Pots</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>Utensils</h4>
                    <ul>
                        <li><a href="products.html">Serving Ladle</a></li>
                        <li><a href="products.html">Potato Masher</a></li>
                        <li><a href="products.html">Cooking Spoon</a></li>
                        <li><a href="products.html">spatula</a></li>
                        <li><a href="products.html">Grater</a></li>
                        <li><a href="products.html">Rolling Pin</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>Cooking Tools</h4>
                    <ul>
                        <li><a href="products.html">Colander</a></li>
                        <li><a href="products.html">Frying Pan</a></li>
                        <li><a href="products.html">Baking Pane</a></li>
                        <li><a href="products.html">Kettle</a></li>
                        <li><a href="products.html">Salad Spinner</a></li>
                        <li><a href="products.html">Stock Pot</a></li>
                    </ul>
                </div>
            </div>
						<div class="col1">
                <div class="h_nav">
                    <h4>Appliances</h4>
                    <ul>
                        <li><a href="products.html">Blenders</a></li>
                        <li><a href="products.html">Steamer</a></li>
                        <li><a href="products.html">Coffee Maker</a></li>
                        <li><a href="products.html">Food Processor</a></li>
                        <li><a href="products.html">Toaster oven</a></li>
                        <li><a href="products.html">Standing Mixer</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col2"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
        </div>
    </div>
</li>

<li class="grid"><a class="color2" href="#">Appliances</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Electronics</h4>
                    <ul>
                        <li><a href="products.html">Fridges</a></li>
                        <li><a href="products.html">Radios</a></li>
                        <li><a href="products.html">Televisions</a></li>
                        <li><a href="products.html">Speakers</a></li>
                        <li><a href="products.html">Fans</a></li>
                        <li><a href="products.html">Gramophones</a></li>
                    </ul>
                </div>
            </div>
						<div class="col1">
                <div class="h_nav">
                    <h4>Computing</h4>
                    <ul>
                        <li><a href="products.html">Computers</a></li>
                        <li><a href="products.html">Projectors</a></li>
                        <li><a href="products.html">Mice</a></li>
                        <li><a href="products.html">Keyboards</a></li>
                        <li><a href="products.html">Monitors</a></li>
                        <li><a href="products.html">Connectors</a></li>
                    </ul>
                </div>
            </div>

            <div class="col1">
                <div class="h_nav">
                    <h4>Machines</h4>
                    <ul>
                        <li><a href="products.html">sowing machine</a></li>
                        <li><a href="products.html">Vacuum cleaner</a></li>
                        <li><a href="products.html">Hair Dryer</a></li>
                        <li><a href="products.html">Hair Iron</a></li>
                        <li><a href="products.html">Boiler</a></li>
                        <li><a href="products.html">Humidifier</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>Lighting</h4>
                    <ul>
                        <li><a href="products.html">Filament Bulbs</a></li>
                        <li><a href="products.html">Domestic lamps</a></li>
                        <li><a href="products.html">Lighter</a></li>
                        <li><a href="products.html">Lamp Wigs</a></li>
                        <li><a href="products.html">Matches</a></li>
                        <li><a href="products.html">florescent bulbs</a></li>
                    </ul>
                </div>
            </div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
            <div class="col2"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
        </div>
    </div>
</li>
<li><a class="color4" href="#">living</a>
    <div class="megapanel">
        <div class="row">
            <div class="col1">
                <div class="h_nav">
                    <h4>Sofas</h4>
                    <ul>
                        <li><a href="products.html">All Sofas</a></li>
                        <li><a href="products.html">Fabric Sofas</a></li>
                        <li><a href="products.html">Leather Sofas</a></li>
                        <li><a href="products.html">L-shaped Sofas</a></li>
                        <li><a href="products.html">Love Seats</a></li>
                        <li><a href="products.html">Wooden Sofas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col1">
                <div class="h_nav">
                    <h4>Tables</h4>
                    <ul>
                        <li><a href="products.html">Coffee Tables</a></li>
                        <li><a href="products.html">Dinning Tables</a></li>
                        <li><a href="products.html">Study Tables</a></li>
                        <li><a href="products.html">Wooden Tables</a></li>
                        <li><a href="products.html">Study Tables</a></li>
                        <li><a href="products.html">Bar & Unit Stools</a></li>
                    </ul>
                </div>
            </div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products.html">Single Bed</a></li>
									<li><a href="products.html">Poster Bed</a></li>
									<li><a href="products.html">Sofa Cum Bed</a></li>
									<li><a href="products.html">Bunk Bed</a></li>
									<li><a href="products.html">King Size Bed</a></li>
									<li><a href="products.html">Metal Bed</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">Wing Chair</a></li>
									<li><a href="products.html">Accent Chair</a></li>
									<li><a href="products.html">Arm Chair</a></li>
									<li><a href="products.html">Mettal Chair</a></li>
									<li><a href="products.html">Folding Chair</a></li>
									<li><a href="products.html">Bean Bags</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color7" href="#">decor</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="products.html">All Sofas</a></li>
									<li><a href="products.html">Fabric Sofas</a></li>
									<li><a href="products.html">Leather Sofas</a></li>
									<li><a href="products.html">L-shaped Sofas</a></li>
									<li><a href="products.html">Love Seats</a></li>									
									<li><a href="products.html">Wooden Sofas</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products.html">Coffee Tables</a></li>
									<li><a href="products.html">Dinning Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Wooden Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Bar & Unit Stools</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products.html">Single Bed</a></li>
									<li><a href="products.html">Poster Bed</a></li>
									<li><a href="products.html">Sofa Cum Bed</a></li>
									<li><a href="products.html">Bunk Bed</a></li>
									<li><a href="products.html">King Size Bed</a></li>
									<li><a href="products.html">Metal Bed</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html#">Wing Chair</a></li>
									<li><a href="products.html">Accent Chair</a></li>
									<li><a href="products.html">Arm Chair</a></li>
									<li><a href="products.html">Mettal Chair</a></li>
									<li><a href="products.html">Folding Chair</a></li>
									<li><a href="products.html">Bean Bags</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color8" href="#">kids</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="products.html">All Sofas</a></li>
									<li><a href="products.html">Fabric Sofas</a></li>
									<li><a href="products.html">Leather Sofas</a></li>
									<li><a href="products.html">L-shaped Sofas</a></li>
									<li><a href="products.html">Love Seats</a></li>									
									<li><a href="products.html">Wooden Sofas</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products.html">Coffee Tables</a></li>
									<li><a href="products.html">Dinning Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Wooden Tables</a></li>
									<li><a href="products.html">Study Tables</a></li>
									<li><a href="products.html">Bar & Unit Stools</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products.html">Single Bed</a></li>
									<li><a href="products.html">Poster Bed</a></li>
									<li><a href="products.html">Sofa Cum Bed</a></li>
									<li><a href="products.html">Bunk Bed</a></li>
									<li><a href="products.html">King Size Bed</a></li>
									<li><a href="products.html">Metal Bed</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products.html">Wing Chair</a></li>
									<li><a href="products.html">Accent Chair</a></li>
									<li><a href="products.html">Arm Chair</a></li>
									<li><a href="products.html">Mettal Chair</a></li>
									<li><a href="products.html">Folding Chair</a></li>
									<li><a href="products.html">Bean Bags</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products.html">Side Tables</a></li>
									<li><a href="products.html">T.v Units</a></li>
									<li><a href="products.html">Dressing Tables</a></li>
									<li><a href="products.html">Wardrobes</a></li>
									<li><a href="products.html">Shoe Racks</a></li>
									<li><a href="products.html">Console Tables</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			   </ul> 
			  <div class="search">
    {!! Form::open(['action' => ['SearchController@autocomplete'], 'method' => 'GET']) !!}
    {!! Form::text('q', '', ['id' =>  'q', 'placeholder' =>  'Search Product', 'class' => 'form-control txt-auto'])!!}
    {!! Form::submit(' ', array('class' => 'button expand')) !!}
    {!! Form::close() !!}
</div>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
<div class="contact">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="home">Home</a></li>
		  <li class="active">Contact</li>
		 </ol>
		 <div class="contact-head">
            

        array('required', 
    @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif
		 	 <h2>CONTACT</h2>
		 	 @if(count($errors)>0)
			   <ul class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null,  
             array('required',    
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Contact Us!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
		 </div>
		 <div class="address">
			 <h3>Our Locations</h3>
			 <div class="locations">				 
				  <ul>
					 <li><span></span></li>					 					
					 <li>
						 <div class="address-info">	
							 <h4>New York, Washington</h4>
							 <p>10-765 MD-Road</p>
							 <p>Washington, DC, United States,</p>
							 <p>Phone: 123 456 7890</p>
							 <p>Mail: <a href="mailto:info@example.com">info(at)example.com</a></p>
							 <h5><a href="">Visit on Google Maps >></a></h5>	
						 </div>
					 </li>				
				  </ul>	
				  <ul>
					 <li><span></span></li>					 					
					 <li>
						 <div class="address-info">	
							 <h4>London, UK</h4>
							 <p>10-765 MD-Road</p>
							 <p>Lorem ipsum, domon sit, UK,</p>
							 <p>Phone: 123 456 7890</p>
							 <p>Mail: <a href="mailto:info@example.com">info(at)example.com</a></p>
							 <h5><a href="">Visit on Google Maps >></a></h5>	
						 </div>
					 </li>				
				  </ul>		
			 </div>			 
		 </div>
		 <div class="contact-map">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
	     </div>
	 </div>
</div>
<!---->
<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="#">Who We Are</a></li>
					 <li><a href="contact.html">Contact Us</a></li>
					 <li><a href="#">Our Sites</a></li>
					 <li><a href="#">In The News</a></li>
					 <li><a href="#">Team</a></li>
					 <li><a href="#">Carrers</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">FAQ</a></li>
					 <li><a href="#">Shipping</a></li>
					 <li><a href="#">Cancellation</a></li>
					 <li><a href="#">Returns</a></li>
					 <li><a href="#">Bulk Orders</a></li>
					 <li><a href="#">Buying Guides</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="account">Your Account</a></li>
					 <li><a href="#">Personal Information</a></li>
					 <li><a href="#">Addresses</a></li>
					 <li><a href="#">Discount</a></li>
					 <li><a href="#">Track your order</a></li>					 					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="#">> Furinture</a></li>
					 <li><a href="#">> Bean Bags</a></li>
					 <li><a href="#">> Decor</a></li>
					 <li><a href="#">> Kichen & Dinning</a></li>
					 <li><a href="#">> Bed & Bath</a></li>
					 <li><a href="#">...More</a></li>					 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="store">
			<ul>
				 <li class="active">OUR STORE LOCATOR::</li>
				 <li><a href="#">Noida</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Belgium</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">China</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Germany</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Japan</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Armenia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">South Africa</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Malaysia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Indonesia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Mumbai</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Portugal</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Spain</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Northern Ireland</a></li>	
				 <li><a href="#">|</a></li>				 
				 <li><a href="#">Mohali</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Gurgaon</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Panchkula</a></li>
				 <li><a href="#">|</a></li>				 
				 <li><a href="#">Ambala</a></li>	
			 </ul>
		 </div>		 
		 <div class="copywrite">
			 <p>Copyright © 2015 Furnyish Store All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		 </div>			 
		 </div>
	 </div>
</div>
<!---->
</body>
</html>


</body>
</html>