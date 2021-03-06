 <header class="header header--two header--four">
     <!-- <div class="header__top">
                <div class="container">
                    <div class="header__top-content">
                        <div class="header__top-left">
                            <p class="font-body--sm">
                                <span>
                                    <svg width="17" height="20" viewBox="0 0 17 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16 8.36364C16 14.0909 8.5 19 8.5 19C8.5 19 1 14.0909 1 8.36364C1 6.41068 1.79018 4.53771 3.1967 3.15676C4.60322 1.77581 6.51088 1 8.5 1C10.4891 1 12.3968 1.77581 13.8033 3.15676C15.2098 4.53771 16 6.41068 16 8.36364Z"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                        <path
                                            d="M8.5 10.8182C9.88071 10.8182 11 9.71925 11 8.36364C11 7.00803 9.88071 5.90909 8.5 5.90909C7.11929 5.90909 6 7.00803 6 8.36364C6 9.71925 7.11929 10.8182 8.5 10.8182Z"
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                        />
                                    </svg>
                                </span>
                                Store Location: Lincoln- 344, Illinois, Chicago, USA
                            </p>
                        </div>
                        <div class="header__top-right">
                            <div class="header__dropdown">
                                <select id="selectbox2" class="header__dropdown-menu">
                                    <option value="pt_1">USD</option>
                                    <option value="en_2">Tk</option>

                                    <option value="ch_4">yan</option>
                                    <option value="5">rup</option>
                                </select>
                            </div>
                            <div class="header__in">
                                <a href="sign-in.html">Sign in </a>
                                <span>/</span>
                                <a href="create-account.html">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

     <div class="modal fade login-modal-main" id="bd-example-modal">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-body">
                     <div class="login-modal">
                         <div class="row">
                             <div class="col-lg-12">
                                 <h3 class="heading-design-h5">Phone Number Verification
                                     <button type="button" class="close close-top-right" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                         <span class="sr-only">Close</span>
                                     </button>
                                 </h3>
                             </div>

                         </div>

                         <div class="row">
                             <div class="col-lg-3 pad-right-0">
                             </div>
                             <div class="col-lg-6 pad-left-0">

                                 <form>
                                     <div class="login-modal-right">
                                         <div class="tab-content">
                                             <div class="tab-pane active" id="login" role="tabpanel">

                                                 <fieldset class="form-group">
                                                     <label>
                                                         <h5>
                                                             <center>Enter your phone number to<br />Login/Sign up </center>
                                                         </h5>
                                                     </label>
                                                     <input type="text" class="form-control" placeholder="+91" required="">
                                                 </fieldset>
                                                 <fieldset class="form-group">
                                                     <button type="button" class="btn btn-lg btn-secondary btn-block" data-target="#next-example-modal" data-toggle="modal">Next</button>
                                                 </fieldset>
                                             </div>
                                         </div>
                                         <div class="clearfix"></div>

                                         <div class="clearfix"></div>
                                     </div>
                                 </form>
                             </div>
                             <div class="col-lg-3 pad-right-0">

                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!----model--->





     <div class="header__center nav_header">
         <div class="container">
             <div class="header__center-content ">
                 <div class="header__brand mr-auto">
                     <button class="header__sidebar-btn ml-1">
                         <svg width="22" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M3 12H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                             <path d="M3 6H21" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                             <path d="M3 18H15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                         </svg>
                     </button>
                     <a href="index.html">
                         <img src="{{ asset('front') }}/images/logo.png" alt="brand-logo" />
                     </a>
                     <button data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                         <p class="font-body--sm">
                             <i class="fa fa-map-marker" aria-hidden="true"></i>
                             Store Location:<br> Lincoln- 344, Illinois, Chicago, USA
                         </p>
                     </button>

                 </div>
                 <form action="#">
                     <div class="header__input-form" style="margin-left: 30px;">
                         <input type="text" placeholder="Search" />
                         <span class="search-icon">
                             <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M17.4999 18L13.8749 14.375" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                             </svg>
                         </span>
                         <!-- <button type="submit" class="search-btn button button--md">
                                    Search
                                </button> -->
                     </div>
                 </form>



                 <div class="header_cart" style=" padding-right:30px">
                     <ul class="nav d-flex justify-content-between disply-inline ">

                         <li class="nav-item">
                             <div class="header__cart nav-item dropdown">
                                 <div class="dropdown">
                                     <a class="dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false" style="color:black;font-size:20px">
                                         Store Details
                                     </a>
                                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                         <li><button class="dropdown-item" type="button">About Us</button></li>
                                         <li><button class="dropdown-item" type="button">Store Locator</button></li>
                                         <li><button class="dropdown-item" type="button">Contact Us</button></li>
                                     </ul>
                                 </div>
                         </li>
                         <li class="nav-item">
                             <div class="header__cart-item">
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="color:black;font-size:20px"> login</a>
                             </div>
                         </li>

                         <li class="nav-item">
                             <div class="header__cart-item mycart_store" style="padding-inline-end: 10px;">
                                 <div class="header__cart-item-content">
                                     <button class="cart-bag">
                                         <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                         <span class="item-number">2</span>
                                     </button>
                                     <div class="header__cart-item-content-info">
                                         <h5>my cart</h5>
                                     </div>
                                 </div>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>






     <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> -->


     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header d-flex justify-content-center">
                     <h3 class="modal-title  " id="exampleModalLabel" style="margin: 20px !important;">Phone Number Verification</h3>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body bg-light p-5">
                     <form>
                         <div class="mb-3 text-center">

                             <label for="message-text" class="col-form-label">Enter Your Mobile Number to <br>Login /Singup</label>
                             <input type="text" class="form-control" id="recipient-name" placeholder="+91">
                         </div>
                         <button type="button" class="btn btn-dark w-100 " data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@mdo">Next</button>
                     </form>
                 </div>

             </div>
         </div>
     </div>
     <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header d-flex justify-content-center">
                     <h3 class="modal-title  " id="exampleModalLabel" style="margin: 20px !important;">Phone Number Verification</h3>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body bg-light p-5">
                     <form>
                         <div class="mb-3 text-center">
                             <label for="message-text" class="col-form-label">Enter 4 digit Code sent to your phone <br>+91-9000394200</label>
                             <div class="row">
                                 <div class="col">
                                     <input type="text" class="form-control" placeholder="">
                                 </div>
                                 <div class="col">
                                     <input type="text" class="form-control" placeholder="">
                                 </div>
                                 <div class="col">
                                     <input type="text" class="form-control" placeholder="">
                                 </div>
                                 <div class="col">
                                     <input type="text" class="form-control" placeholder="">
                                 </div>
                             </div>
                         </div>
                         <button type="button" class="btn btn-dark w-100 " data-bs-toggle="modal" data-bs-target="#success" data-bs-whatever="@mdo">Next</button>
                         <p class="text-center">Resend Code (in 15 sec)</p>
                     </form>
                 </div>

             </div>
         </div>
     </div>



     <div class="modal fade" id="success" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header d-flex justify-content-center">
                     <h3 class="modal-title  " id="exampleModalLabel" style="margin: 20px !important;"></h3>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body bg-light p-5">

                     <h5 class="text-center p-3"><i class="fa fa-check text-success" aria-hidden="true"></i></h5>
                     <h4 class="text-center" style="color: green;">Successfully Logged in !</h4>
                 </div>

             </div>
         </div>
     </div>



     <!---address model-->
     <!-- Button trigger modal -->


     <!-- Modal address -->
     <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">

                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <p class="" style="font-size: 15px;">
                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                         Store Location:<br> Lincoln- 344, Illinois, Chicago, USA <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">Change</button>
                     </p>
                 </div>

             </div>
         </div>
     </div> -->
     <!---step 2--->
     <!-- <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">

                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <p class="" style="font-size: 15px;">

                         Change Location </p>
                     <form>
                         <div class="row">
                             <div class="col"> <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">Detect my Loction</button></div> or <div class="col"> <input type="text" placeholder="Type Your City" class="form-control"></div>
                         </div>
                     </form>


                 </div>

             </div>
         </div>
     </div>

     ---detected location model- -->
     <!-- <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">

                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <p class="" style="font-size: 15px;">

                         Change Location </p>
                     <form>
                         <div class="row">
                             <div class="col"> <button class="btn btn-success">Detect my Loction</button></div> or <div class="col"> <input type="text" placeholder="Type Your City" class="form-control"></div>
                         </div>
                     </form>
                   <div> <h4>Saved Address</h4><p class="" style="font-size: 15px;">
                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                         Store Location:<br> Lincoln- 344, Illinois, Chicago, USA 
                     </p>
                     <p class="" style="font-size: 15px;">
                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                         Store Location:<br> Lincoln- 344, Illinois, Chicago, USA 
                     </p></div>

                 </div>

             </div>
         </div>
     </div>
 -->

     <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="" style="font-size: 15px;">
                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                         Store Location:<br> Lincoln- 344, Illinois, Chicago, USA <button class="btn btn-success"data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Change</button>
                     </p>
      </div>
      <!-- <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
      </div> -->
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalToggleLabel">Modal 2</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="" style="font-size: 15px;">

Change Location </p>
<form>
<div class="row">
    <div class="col"> <button class="btn btn-success" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Detect my Loction</button></div> or <div class="col"> <input type="text" placeholder="Type Your City" class="form-control"></div>
</div>
</form>
      </div>
      <!-- <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
      </div> -->
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 3</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="" style="font-size: 15px;">

Change Location </p>
<form>
<div class="row">
    <div class="col"> <button class="btn btn-success">Detect my Loction</button></div> or <div class="col"> <input type="text" placeholder="Type Your City" class="form-control"></div>
</div>
</form>
<h6 class="mt-3"> Saved Address</h6>
<div class="text-center"> <p class="" style="font-size: 15px;">
<i class="fa fa-map-marker" aria-hidden="true"></i>
Store Location: Lincoln- 344, Illinois, Chicago, USA 
</p>
<p class="" style="font-size: 15px;">
<i class="fa fa-map-marker" aria-hidden="true"></i>
Store Location:Lincoln- 344, Illinois, Chicago, USA 
</p></div>

      </div>
      <!-- <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
      </div> -->
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="text-center">
           <h6>Oh No!</h6>
           <p> Where nit in  Lincoln- 344, Illinois, Chicago, USA </p>
           <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus adipisci, minus facilis consequatur atque eos tempora quod accusantium odit veniam rem, officia qui voluptates reprehenderit necessitatibus. Sequi ipsa omnis architecto.</p>
       </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<!-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> -->












     <!-- <div class="header__bottom">
                <div class="container">
                    <div class="header__bottom-content">
                        <div class="header__bottom-left">
                            <ul class="header__category-content">
                                <li class="header__category-content-item">
                                    <a href="#">
                                        <span class="bar"></span>
                                        All Categories
                                        <span class="toggle-icon">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.75 1.375L6 6.625L11.25 1.375" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    <ul class="header__category-content-dropdown">
                                        <li>
                                            <a href="#">
                                                <span class="icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M23.7383 11.4858C23.5573 11.2921 23.3018 11.1812 23.0376 11.1812H22.9589C23.3152 10.5677 23.5089 9.87158 23.5089 9.15436C23.5089 7.53754 22.5418 6.08203 21.0736 5.44244C21.0392 3.2373 19.2371 1.45312 17.0241 1.45312C14.8112 1.45312 13.0097 3.23621 12.9739 5.44043C12.8914 5.42102 12.806 5.40967 12.7194 5.40967C12.3591 5.40967 12.0198 5.58563 11.8127 5.87988L11.7118 6.02344C11.6287 6.14081 11.4727 6.18347 11.3421 6.12268L11.1832 6.04889C10.8561 5.89655 10.4747 5.91431 10.1622 6.0943C9.8498 6.27429 9.64417 6.59656 9.61176 6.95526L9.59602 7.12994C9.59034 7.19238 9.56269 7.27954 9.52662 7.37274C9.43378 7.32861 9.36732 7.23779 9.35761 7.12958L9.34187 6.95581C9.3111 6.61523 9.1291 6.33307 8.86835 6.15436L10.1441 4.34418C10.3925 3.99115 10.4888 3.56104 10.4143 3.13385C10.3402 2.70575 10.105 2.33331 9.75239 2.08484C9.02125 1.57013 8.00794 1.74518 7.49305 2.4765L5.15845 5.78979C5.08045 5.90039 5.02296 6.02032 4.97553 6.14355C4.93781 6.1452 4.89771 6.14154 4.85633 6.1225L4.69758 6.04871C4.37037 5.89709 3.98823 5.91449 3.67658 6.09448C3.36439 6.27448 3.15894 6.59637 3.12653 6.95508L3.11079 7.12976C3.09779 7.27368 2.98389 7.38757 2.83997 7.40057L2.66566 7.41632C2.30695 7.44873 1.98469 7.65472 1.8047 7.96637C1.62434 8.27875 1.60731 8.66034 1.75892 8.9881L1.83234 9.1463C1.89313 9.27759 1.85139 9.43323 1.7331 9.51636L1.58991 9.61725C1.2953 9.82526 1.11933 10.1646 1.11933 10.5249C1.11933 10.7651 1.20374 10.9922 1.34309 11.1806H0.962044C0.697822 11.1806 0.44239 11.2917 0.261299 11.4855C0.0783766 11.6808 -0.0159227 11.9467 0.00220476 12.2139C0.242256 15.7593 2.49738 17.5395 5.81013 19.1215C6.17982 19.2982 6.48505 19.5917 6.67036 19.9493C6.85108 20.2987 6.82233 20.7493 6.59162 21.1329C6.41785 21.4215 6.41291 21.7689 6.57862 22.0624C6.74451 22.3557 7.04444 22.5304 7.38135 22.5304H16.6188C16.9556 22.5304 17.2555 22.3553 17.4214 22.0624C17.5871 21.7689 17.5823 21.4215 17.4044 21.1256C17.1777 20.749 17.1495 20.2987 17.3298 19.9497C17.5146 19.5923 17.8198 19.2982 18.1899 19.1215C21.5019 17.5395 23.7576 15.7597 23.998 12.2142C24.0156 11.9467 23.9207 11.6812 23.7383 11.4858ZM22.6987 9.15436C22.6987 9.89209 22.4454 10.6051 21.9822 11.1812H19.8615V9.55975C19.8615 9.33563 19.6802 9.15436 19.4561 9.15436C19.2319 9.15436 19.0507 9.33563 19.0507 9.55975V11.1812H17.6195C17.6523 11.1365 17.6807 11.0894 17.7063 11.0409C17.7074 11.0389 17.7091 11.0369 17.7103 11.0347C17.7459 10.9658 17.7715 10.892 17.7922 10.8171C17.7973 10.7985 17.8019 10.7798 17.8059 10.7604C17.8226 10.6833 17.8343 10.6051 17.8343 10.5249C17.8343 10.1642 17.6583 9.82526 17.3641 9.61853L17.2709 9.55243C17.3033 9.55042 17.3344 9.5451 17.3665 9.54272C17.4152 9.5387 17.4639 9.53375 17.512 9.52771C17.5919 9.51782 17.6708 9.50574 17.7492 9.49164C17.7953 9.48303 17.842 9.47534 17.8878 9.46527C17.9722 9.44696 18.0551 9.42426 18.1375 9.40082C18.1743 9.3902 18.2117 9.38177 18.2481 9.37006C18.3637 9.33307 18.4768 9.29205 18.5874 9.24554C18.6182 9.23254 18.6475 9.21716 18.6773 9.20343C18.7575 9.16736 18.8375 9.13019 18.9148 9.08881C18.9582 9.06555 19.0005 9.04047 19.0426 9.01575C19.1045 8.97968 19.1662 8.94324 19.2261 8.90387C19.2708 8.87476 19.3145 8.84473 19.3579 8.81396C19.4127 8.77496 19.4665 8.7345 19.5192 8.69312C19.5626 8.65906 19.6055 8.62555 19.6472 8.58984C19.6972 8.54718 19.7446 8.50269 19.7924 8.45801C19.8333 8.41992 19.8746 8.3822 19.914 8.34247C19.9591 8.29669 20.0008 8.24817 20.0433 8.2002C20.124 8.10992 20.2002 8.01617 20.2727 7.91858C20.2982 7.88416 20.3254 7.85083 20.3502 7.81512C20.3943 7.75159 20.4349 7.68549 20.4754 7.61975C20.4956 7.58661 20.5166 7.55365 20.5362 7.51978C20.577 7.44873 20.6148 7.37622 20.6512 7.3028C20.6655 7.27368 20.6796 7.24493 20.6933 7.21527C20.731 7.1347 20.7664 7.05322 20.7988 6.96973C20.8055 6.95178 20.8121 6.93329 20.8186 6.91534C20.892 6.71796 20.9544 6.51544 20.9965 6.30542C22.032 6.86517 22.6987 7.95428 22.6987 9.15436ZM17.0241 2.26373C18.8119 2.26373 20.2667 3.71851 20.2667 5.50653C20.2667 5.56769 20.2615 5.62775 20.2579 5.68817C20.2579 5.68817 20.2566 5.69055 20.2566 5.6922C20.2328 6.1181 20.1266 6.52057 19.9547 6.88586C19.953 6.88953 19.9514 6.89319 19.9497 6.89685C19.91 6.98071 19.8662 7.06183 19.8197 7.14166C19.814 7.15137 19.8087 7.16107 19.803 7.17078C19.7597 7.24347 19.7126 7.31396 19.6637 7.38245C19.6531 7.39746 19.643 7.41248 19.6324 7.42694C19.5866 7.48938 19.5375 7.54944 19.4874 7.60822C19.4716 7.62689 19.4561 7.64594 19.4399 7.66425C19.3925 7.71771 19.3422 7.76843 19.2911 7.8186C19.27 7.83966 19.2493 7.86072 19.2275 7.88141C19.1788 7.92682 19.1278 7.96948 19.0763 8.01196C19.0499 8.03394 19.0239 8.05609 18.9968 8.07678C18.947 8.11487 18.8956 8.15057 18.8438 8.18628C18.8124 8.2077 18.7817 8.22968 18.7493 8.24982C18.6986 8.28186 18.6464 8.31061 18.594 8.3399C18.5585 8.35968 18.5228 8.38037 18.4862 8.39905C18.4351 8.42505 18.3825 8.44812 18.3301 8.47119C18.29 8.48914 18.2503 8.50763 18.2093 8.52356C18.158 8.5437 18.1051 8.5611 18.0526 8.57867C18.0082 8.59369 17.965 8.60907 17.92 8.62189C17.8689 8.6369 17.8162 8.64825 17.764 8.66052C17.7156 8.67188 17.6679 8.68396 17.6188 8.6933C17.5682 8.70264 17.5166 8.70886 17.4657 8.716C17.4133 8.72333 17.3615 8.73102 17.3088 8.73596C17.2987 8.73669 17.2881 8.73669 17.2777 8.73761V8.73706C17.2784 8.73193 17.2784 8.72699 17.2793 8.72168C17.2925 8.64844 17.2971 8.5741 17.2954 8.49994C17.2951 8.47614 17.2923 8.45288 17.2903 8.42908C17.2853 8.37067 17.2756 8.31354 17.2619 8.25677C17.2562 8.23407 17.2518 8.21136 17.2445 8.18903C17.2205 8.11285 17.1909 8.03778 17.15 7.96729C16.9697 7.65527 16.6478 7.44965 16.2891 7.41742L16.1144 7.40149C16.0069 7.39178 15.9161 7.32568 15.8716 7.23248L16.7377 6.36676C16.8962 6.20819 16.8962 5.95203 16.7377 5.79364C16.5793 5.63507 16.3231 5.63507 16.1647 5.79364L15.5863 6.37207C15.5008 6.26385 15.4003 6.16644 15.2778 6.09558C15.1959 6.04816 15.1088 6.01373 15.0196 5.98883C14.9896 5.98041 14.9592 5.97949 14.9288 5.974C14.868 5.9621 14.8081 5.95129 14.7464 5.95001C14.7387 5.95001 14.731 5.94672 14.7233 5.94672C14.6766 5.94672 14.6309 5.95569 14.5847 5.96173C14.556 5.96539 14.5272 5.96539 14.4987 5.97107C14.4161 5.9881 14.335 6.01318 14.2568 6.04926L14.0988 6.12268C14.0581 6.14136 14.0151 6.14868 13.9719 6.14703C13.9693 6.14703 13.9673 6.14648 13.9649 6.14648C13.9224 6.14374 13.8798 6.13202 13.841 6.11041C13.8016 5.90533 13.7816 5.70264 13.7816 5.50653C13.7814 3.71851 15.2358 2.26373 17.0241 2.26373ZM10.4033 7.20319L10.4193 7.0285C10.4277 6.93036 10.4821 6.84558 10.5676 6.79669C10.6525 6.74762 10.7531 6.74231 10.8422 6.78461L11.0021 6.85876C11.488 7.08325 12.0661 6.92798 12.3745 6.49072L12.4755 6.34717C12.5892 6.18549 12.8511 6.18658 12.9642 6.3468L13.0653 6.49017C13.272 6.78333 13.5994 6.94574 13.9396 6.95599H13.9514C14.0004 6.95673 14.0499 6.95599 14.0989 6.95032C14.122 6.94794 14.1447 6.94263 14.1678 6.9386C14.2009 6.93256 14.2339 6.92798 14.2667 6.91919C14.3251 6.90344 14.3826 6.88348 14.4386 6.85748L14.597 6.78369C14.6865 6.74249 14.7871 6.74689 14.8718 6.79578C14.957 6.84521 15.0114 6.92963 15.0198 7.02814L15.0355 7.2019C15.0842 7.73621 15.507 8.15936 16.0408 8.20715L16.2151 8.22308C16.3136 8.23151 16.3984 8.28589 16.4475 8.3714C16.4969 8.45636 16.5013 8.55688 16.4599 8.64569L16.3854 8.80627C16.3821 8.8136 16.381 8.82001 16.3781 8.82733C16.2338 9.15802 16.2638 9.5257 16.4348 9.82324C16.4372 9.82727 16.4398 9.83167 16.4421 9.83569C16.4639 9.87268 16.4872 9.90784 16.5134 9.94244C16.5277 9.96149 16.5434 9.97888 16.559 9.99719C16.5787 10.0199 16.5978 10.0433 16.6196 10.0644C16.661 10.1054 16.7053 10.1439 16.7538 10.1779L16.8977 10.2797C16.9779 10.3372 17.0241 10.4264 17.0241 10.5249C17.0241 10.6234 16.9779 10.7122 16.8977 10.769L16.7534 10.8702C16.7521 10.8712 16.7514 10.8723 16.7498 10.8735C16.697 10.9113 16.6489 10.9537 16.6038 11.0001C16.5859 11.0182 16.5705 11.0389 16.5538 11.0583C16.5297 11.087 16.5057 11.1163 16.4846 11.1475C16.4766 11.1594 16.466 11.1694 16.4583 11.1815H11.1343C11.1671 11.137 11.1954 11.0896 11.2214 11.0409C11.2225 11.0389 11.2238 11.0372 11.2251 11.0352C11.2606 10.966 11.2866 10.8922 11.3073 10.8168C11.3126 10.7981 11.3167 10.78 11.3207 10.7613C11.3377 10.6846 11.3491 10.6064 11.3494 10.5266V10.5258C11.3494 10.4738 11.3381 10.4244 11.3313 10.3738C11.326 10.3365 11.3267 10.298 11.3174 10.2614C11.2879 10.1407 11.2315 10.0302 11.1643 9.92633C11.0881 9.80914 10.996 9.70166 10.8789 9.6189L10.7355 9.51764C10.6174 9.43451 10.5762 9.27924 10.6366 9.14886L10.7108 8.98956C10.7468 8.91174 10.7716 8.83026 10.7886 8.74768C10.7939 8.72278 10.7939 8.69824 10.7972 8.67334C10.8052 8.61511 10.8113 8.55707 10.81 8.49866C10.8093 8.46826 10.8045 8.43823 10.8012 8.40784C10.7955 8.35565 10.7886 8.30365 10.7756 8.25275C10.7672 8.21942 10.7558 8.18774 10.7445 8.15533C10.7347 8.1286 10.7298 8.10059 10.7185 8.0744C10.7115 8.05847 10.6994 8.04675 10.6917 8.03174C10.6816 8.01105 10.6763 7.98871 10.665 7.96857C10.6436 7.93158 10.6143 7.90118 10.5888 7.86731C10.5676 7.83893 10.5489 7.80927 10.5255 7.7829C10.4764 7.72815 10.4205 7.68164 10.3621 7.63824C10.3447 7.62524 10.3317 7.60693 10.3136 7.59521C10.3555 7.47198 10.3912 7.33649 10.4033 7.20319ZM8.15626 2.9436C8.4137 2.57794 8.92072 2.49042 9.28584 2.74786C9.4618 2.87183 9.57935 3.05823 9.61616 3.27228C9.65314 3.48669 9.60572 3.70203 9.48176 3.87744L7.90046 6.1214C7.90046 6.1214 7.90009 6.1214 7.90009 6.12195L7.14661 7.19073C7.02247 7.36707 6.83662 7.48462 6.62257 7.52142C6.40888 7.55713 6.19318 7.51099 6.01722 7.38647C6.01649 7.38611 6.01612 7.38519 6.0152 7.38483C5.95734 7.34381 5.90864 7.29401 5.86451 7.24127C5.85316 7.22791 5.84272 7.21381 5.8321 7.19952C5.79365 7.14642 5.76032 7.09021 5.7356 7.02979C5.73396 7.02576 5.73158 7.02246 5.72993 7.01843C5.70521 6.95435 5.69147 6.8866 5.68342 6.81775C5.6814 6.80035 5.68049 6.78296 5.67939 6.76538C5.67573 6.69653 5.67774 6.6264 5.69239 6.55627C5.71473 6.45007 5.75721 6.34827 5.82111 6.25763L8.15626 2.9436ZM2.19984 10.8699L2.05628 10.7688C1.97572 10.712 1.92957 10.6234 1.92957 10.5245C1.92957 10.4257 1.97572 10.3369 2.05628 10.2797L2.19892 10.179C2.63801 9.87067 2.79292 9.29315 2.56751 8.80499L2.49409 8.64697C2.45234 8.55743 2.45728 8.45691 2.50617 8.3714C2.55561 8.28625 2.64002 8.23187 2.73853 8.22327L2.91248 8.20752C3.4466 8.15973 3.86939 7.73694 3.9181 7.20282L3.93385 7.02814C3.94245 6.92999 3.99665 6.84558 4.08179 6.79614C4.16657 6.74707 4.26746 6.74268 4.35664 6.78406L4.5163 6.85822C4.63221 6.91187 4.75507 6.94299 4.87995 6.9527C4.88105 6.9613 4.88471 6.96973 4.88636 6.97833C4.88764 6.98566 4.88673 6.9928 4.88801 6.99976C4.89606 7.0459 4.91309 7.08856 4.925 7.13342C4.93873 7.18579 4.94917 7.23889 4.96784 7.28998C4.99018 7.34985 5.02094 7.40533 5.04969 7.4621C5.06928 7.50037 5.08411 7.53955 5.10682 7.57599C5.14655 7.64044 5.19526 7.69885 5.24378 7.75726C5.26447 7.78198 5.28077 7.80908 5.30256 7.8327C5.37727 7.9118 5.45948 7.98468 5.5503 8.04822C5.63013 8.10461 5.71528 8.15076 5.80189 8.19141C5.82954 8.20386 5.85755 8.21411 5.88593 8.22491C5.94782 8.24982 6.01063 8.27087 6.07508 8.28735C6.10749 8.29596 6.13953 8.30402 6.17286 8.31006C6.24134 8.32343 6.31055 8.33112 6.38068 8.33569C6.40705 8.33734 6.43269 8.34137 6.45887 8.34174C6.46583 8.34174 6.47224 8.34338 6.47919 8.34338C6.57276 8.34338 6.66688 8.33533 6.76081 8.31903C7.18854 8.24451 7.56098 8.0094 7.80946 7.65674L8.40565 6.81042C8.4734 6.85547 8.52576 6.92834 8.53455 7.02814L8.5503 7.2019C8.59901 7.73621 9.0218 8.159 9.55555 8.20715L9.72987 8.2229C9.76795 8.2262 9.80128 8.24194 9.83369 8.25787C9.84943 8.26593 9.86536 8.27325 9.87946 8.28406C9.90125 8.30035 9.9192 8.32141 9.93568 8.34338C9.9463 8.35712 9.95802 8.36975 9.96626 8.3855C9.98566 8.42358 9.9994 8.46368 10.0014 8.50507C10.0014 8.50671 10.001 8.50909 10.001 8.51074C10.0027 8.55615 9.99409 8.60229 9.97431 8.64514L9.89997 8.80444C9.81538 8.98737 9.78443 9.18256 9.80201 9.37189C9.80238 9.37445 9.80311 9.37683 9.80311 9.37958C9.80933 9.44 9.8194 9.49951 9.83515 9.55829C9.90034 9.80237 10.0488 10.0237 10.2676 10.1777L10.3662 10.2469L10.4112 10.2786C10.4921 10.3374 10.5385 10.4262 10.5385 10.5247C10.5385 10.5742 10.5271 10.6207 10.5051 10.6626C10.4991 10.6747 10.4861 10.682 10.478 10.6934C10.4586 10.7208 10.4399 10.7488 10.4112 10.7692L10.4059 10.7726L10.2673 10.8701C10.2118 10.9094 10.1607 10.9548 10.1137 11.0034C10.0992 11.0184 10.0875 11.0354 10.0739 11.0508C10.0432 11.0865 10.0135 11.1229 9.98713 11.1623C9.98273 11.1687 9.97669 11.1744 9.97266 11.1808H2.49537C2.41792 11.0596 2.31776 10.9528 2.19984 10.8699ZM17.8403 18.39C17.3123 18.6422 16.8754 19.0637 16.6093 19.5771C16.3001 20.1746 16.3387 20.928 16.7135 21.5506C16.7412 21.5969 16.7298 21.6374 16.7148 21.663C16.7003 21.6885 16.6718 21.7198 16.6179 21.7198H7.38117C7.3277 21.7198 7.29896 21.689 7.28431 21.663C7.26984 21.6374 7.25794 21.5969 7.28999 21.5435C7.66096 20.9277 7.69941 20.1742 7.39014 19.5764C7.12464 19.0627 6.6872 18.6412 6.15949 18.3895C3.01612 16.8889 1.02522 15.3232 0.811165 12.1595C0.807136 12.0991 0.83625 12.0582 0.853828 12.0392C0.87397 12.0172 0.909309 11.9918 0.96241 11.9918H23.0378C23.0905 11.9918 23.1259 12.0172 23.1466 12.0392C23.1639 12.0582 23.1931 12.0987 23.1887 12.1595C22.9744 15.3232 20.9833 16.8889 17.8403 18.39Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M14.9971 18.8823H11.4679C11.2441 18.8823 11.0625 19.0636 11.0625 19.2877C11.0625 19.5118 11.2441 19.6931 11.4679 19.6931H14.9971C15.2208 19.6931 15.4025 19.5118 15.4025 19.2877C15.4025 19.0636 15.2208 18.8823 14.9971 18.8823Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M8.91711 19.6931H10.2895C10.5132 19.6931 10.6949 19.5118 10.6949 19.2877C10.6949 19.0636 10.5132 18.8823 10.2895 18.8823H8.91711C8.69336 18.8823 8.51172 19.0636 8.51172 19.2877C8.5119 19.5118 8.69299 19.6931 8.91711 19.6931Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M14.9971 20.0984H8.91711C8.69336 20.0984 8.51172 20.2797 8.51172 20.5038C8.51172 20.7279 8.69336 20.9092 8.91711 20.9092H14.9971C15.2209 20.9092 15.4025 20.7279 15.4025 20.5038C15.4025 20.2797 15.2209 20.0984 14.9971 20.0984Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M16.1645 5.22C16.2436 5.2991 16.3472 5.33865 16.451 5.33865C16.5548 5.33865 16.6585 5.29892 16.7376 5.22C16.8961 5.06143 16.8961 4.80527 16.7376 4.64688L15.591 3.50064C15.4324 3.34207 15.1762 3.34207 15.0179 3.50064C14.8593 3.65903 14.8593 3.91519 15.0179 4.07358L16.1645 5.22Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M18.4568 7.51248C18.5359 7.59158 18.6397 7.63132 18.7435 7.63132C18.8472 7.63132 18.951 7.59158 19.0301 7.51248C19.1885 7.35391 19.1881 7.09775 19.0301 6.93936L17.8833 5.79312C17.7249 5.63455 17.4688 5.63455 17.3102 5.79312C17.1518 5.95151 17.1518 6.20767 17.3102 6.36624L18.4568 7.51248Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M17.5972 5.33865C17.701 5.33865 17.8048 5.29892 17.8839 5.22L19.0306 4.07358C19.1886 3.91519 19.1891 3.65903 19.0306 3.50064C18.872 3.34207 18.6158 3.34207 18.4574 3.50064L17.3108 4.64688C17.1523 4.80527 17.1523 5.06143 17.3108 5.22C17.3897 5.29892 17.4936 5.33865 17.5972 5.33865Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M19.8613 8.74915C19.8613 8.97327 20.0424 9.15436 20.2665 9.15436H21.8879C22.1121 9.15436 22.2933 8.97327 22.2933 8.74915C22.2933 8.52502 22.1121 8.34375 21.8879 8.34375H20.2665C20.0424 8.34375 19.8613 8.52502 19.8613 8.74915Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M12.3628 8.95187C12.4666 8.95187 12.5705 8.91214 12.6494 8.83304L13.2575 8.22513C13.416 8.06656 13.416 7.81039 13.2575 7.65201C13.0989 7.49344 12.8427 7.49344 12.6844 7.65201L12.0764 8.25992C11.9179 8.41849 11.9179 8.67465 12.0764 8.83304C12.1554 8.91214 12.259 8.95187 12.3628 8.95187Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M14.3059 9.84628C14.385 9.92538 14.4888 9.96512 14.5924 9.96512C14.6963 9.96512 14.7999 9.92538 14.879 9.84628C15.0376 9.6879 15.0376 9.43173 14.879 9.27316L14.4738 8.86795C14.3152 8.70938 14.0591 8.70938 13.9007 8.86795C13.7421 9.02634 13.7421 9.2825 13.9007 9.44107L14.3059 9.84628Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M12.6845 9.67862L12.2791 10.0838C12.1205 10.2424 12.1205 10.4986 12.2791 10.657C12.3582 10.7361 12.4618 10.7758 12.5656 10.7758C12.6695 10.7758 12.7731 10.7361 12.8522 10.657L13.2576 10.2517C13.4162 10.0932 13.4162 9.83701 13.2576 9.67862C13.099 9.52005 12.8425 9.52005 12.6845 9.67862Z"
                                                                fill="currentColor"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                Fruit & Vegetables
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M4.82135 12.3867C4.09515 12.3867 3.50391 12.9778 3.50391 13.7042C3.50391 14.4305 4.09497 15.0216 4.82135 15.0216C5.54773 15.0216 6.13879 14.4305 6.13879 13.7042C6.13879 12.9774 5.54773 12.3867 4.82135 12.3867ZM4.82135 14.1432C4.57892 14.1432 4.38226 13.9464 4.38226 13.7042C4.38226 13.4617 4.57892 13.2649 4.82135 13.2649C5.06378 13.2649 5.26044 13.4617 5.26044 13.7042C5.26044 13.9464 5.06378 14.1432 4.82135 14.1432Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M23.6388 2.76785C23.3647 2.35586 22.973 2.05648 22.5063 1.90304C22.4202 1.87503 22.3592 1.81405 22.331 1.72708C22.1778 1.26071 21.8788 0.869411 21.466 0.594936C20.6813 0.0745502 19.6213 0.121608 18.887 0.709194C18.3311 1.15487 18.0321 1.81625 18.0658 2.52413C18.0909 3.04708 17.9323 3.50723 17.6201 3.81942L14.9182 6.52133L14.4335 6.52883C13.683 6.53982 12.9822 6.83316 12.46 7.35519C10.7646 9.05111 8.51536 10.0976 5.95536 10.3812C4.43284 10.5504 3.00041 11.2436 1.92063 12.3336C-0.560995 14.8396 -0.649618 18.9972 1.72379 21.6008C2.97843 22.9776 4.69193 23.7591 6.54844 23.8023C6.60246 23.8036 6.65611 23.8045 6.71012 23.8045C8.50749 23.8045 10.1915 23.1076 11.4667 21.8322C12.4437 20.8552 13.0884 19.6227 13.3312 18.2666C13.7611 15.8689 14.9766 13.6128 16.8468 11.7429C16.9684 11.6214 17.0783 11.4851 17.1929 11.3145L17.6509 10.6308H16.3094C16.4429 10.55 16.5711 10.4586 16.6844 10.3453L20.4152 6.61489C20.727 6.3027 21.1793 6.14779 21.711 6.16922C22.4242 6.19686 23.0798 5.9039 23.5256 5.34762C24.1134 4.613 24.1595 3.55246 23.6388 2.76785ZM12.4662 18.1106C12.2555 19.2898 11.6946 20.3612 10.8454 21.211C9.7028 22.3532 8.19657 22.9582 6.56822 22.9239C4.95414 22.8866 3.46403 22.2065 2.37235 21.0088C0.308939 18.7453 0.385843 15.1308 2.54411 12.9514C3.49626 11.9901 4.70896 11.4031 6.05094 11.2542C8.81144 10.9481 11.2418 9.81466 13.08 7.9761C13.2891 7.76754 13.5403 7.61209 13.8159 7.51632L12.9399 10.4358L14.4822 9.92196V11.508H15.8518C14.0655 13.4279 12.8987 15.6999 12.4662 18.1106ZM22.8395 4.79776C22.572 5.13192 22.1737 5.31466 21.7522 5.29104C20.974 5.25497 20.2821 5.50344 19.7934 5.99325L16.063 9.72348C15.8742 9.91281 15.6252 10.0199 15.3604 10.034V8.70339L14.2678 9.06796L14.5485 8.13302L18.241 4.44052C18.7303 3.95181 18.98 3.25619 18.9432 2.48202C18.9225 2.05813 19.1022 1.66207 19.436 1.39419C19.8679 1.04776 20.5174 1.01882 20.9799 1.32663C21.1993 1.47238 21.3606 1.67489 21.4589 1.91146C21.0154 2.01821 20.6078 2.25589 20.2991 2.60012C20.1371 2.78048 20.1521 3.05844 20.3324 3.22012C20.4163 3.29556 20.5214 3.33255 20.6258 3.33255C20.7457 3.33255 20.866 3.28329 20.9524 3.18679C21.2086 2.90133 21.5743 2.73306 21.9564 2.72573C22.0165 2.72427 22.0736 2.71127 22.1254 2.68783C22.1618 2.70413 22.1948 2.72482 22.2331 2.73745C22.5105 2.82827 22.7438 3.00698 22.9074 3.25381C23.2145 3.71633 23.1856 4.36581 22.8395 4.79776Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M11.6578 16.4385C11.4141 16.3929 11.1905 16.5553 11.1484 16.7937C11.0662 17.254 10.9222 17.7026 10.7197 18.1291C10.6157 18.3483 10.7093 18.6099 10.9283 18.7139C10.9894 18.7425 11.053 18.7566 11.1163 18.7566C11.2806 18.7566 11.4382 18.6639 11.5133 18.5059C11.7491 18.0091 11.9172 17.4853 12.013 16.9484C12.0557 16.7089 11.8962 16.4811 11.6578 16.4385Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M9.97272 19.3024C9.03705 20.4371 7.66614 21.2272 6.21173 21.47C5.97241 21.5099 5.81073 21.7361 5.85083 21.975C5.88635 22.1896 6.07257 22.342 6.28333 22.342C6.3075 22.342 6.33112 22.3403 6.35584 22.3359C8.0166 22.0589 9.58252 21.1564 10.6504 19.8605C10.8049 19.6736 10.7782 19.3969 10.5907 19.2427C10.4041 19.0882 10.1265 19.1155 9.97272 19.3024Z"
                                                                fill="currentColor"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                Meat & Fish
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M19.9111 2.61823H19.699V2.25677C19.699 1.49414 19.0794 0.873596 18.3519 0.873596C18.3516 0.873596 18.351 0.873596 18.3499 0.873596L5.66071 0C4.89697 0 4.27643 0.621094 4.27643 1.38373V2.61823H4.06476C3.21936 2.61823 2.53125 3.30615 2.53125 4.15173V6.10895C2.53125 6.95435 3.21918 7.64246 4.06476 7.64246H4.11292L5.59735 22.6163C5.59735 23.3789 6.2179 24 6.98145 24H17.0178C17.2084 24 17.3904 23.9612 17.556 23.8916C18.0524 23.6836 18.401 23.2006 18.3995 22.6663L19.8865 7.64191H19.9116C20.757 7.64191 21.4451 6.95398 21.4451 6.1084V4.15173C21.4446 3.30634 20.7565 2.61823 19.9111 2.61823ZM5.29871 1.38373C5.29871 1.18433 5.46075 1.02228 5.62537 1.02136L18.3153 1.89496C18.5147 1.89496 18.6771 2.05701 18.6771 2.25677V2.61823H5.29871V1.38373ZM18.4426 11.7078L15.698 12.1976C14.7693 11.1134 13.4401 10.4974 12.0048 10.4974C10.5688 10.4974 9.23987 11.1134 8.31097 12.1981L5.55634 11.7074L5.14178 7.64246H18.8575L18.4426 11.7078ZM18.353 12.7625L17.9562 16.7781L15.2715 16.2839L15.0815 16.5364C14.3443 17.5164 13.223 18.0787 12.0053 18.0787C10.7871 18.0787 9.66559 17.5164 8.92859 16.5364L8.73834 16.2845L6.04449 16.7787L5.64679 12.7625L8.73944 13.3125L8.92859 13.062C9.66577 12.082 10.7873 11.5197 12.0053 11.5197C13.223 11.5197 14.3445 12.082 15.0815 13.062L15.2706 13.313L18.353 12.7625ZM17.0173 22.9775H6.9809C6.93201 22.9775 6.88495 22.9675 6.84192 22.9479C6.71265 22.8896 6.61908 22.7507 6.61707 22.5656L6.61047 22.4993L6.15198 17.7975L8.31226 17.4012C9.24097 18.485 10.5696 19.1005 12.0049 19.1005C13.4398 19.1005 14.7684 18.485 15.6971 17.4018L17.8477 17.7975L17.3795 22.6163C17.3787 22.812 17.2136 22.9775 17.0173 22.9775ZM20.4223 6.10895C20.4223 6.39111 20.1929 6.62018 19.9111 6.62018H4.06476C3.78314 6.62018 3.55371 6.39111 3.55371 6.10895V4.15173C3.55371 3.86957 3.78314 3.6405 4.06476 3.6405H19.9111C20.1929 3.6405 20.4223 3.86957 20.4223 4.15173V6.10895Z"
                                                            fill="currentColor"
                                                        />
                                                        <path
                                                            d="M11.9882 12.2681C10.4378 12.2681 9.17676 13.4147 9.17676 14.8239C9.17676 16.2332 10.4378 17.3798 11.9882 17.3798C13.5385 17.3798 14.7997 16.2332 14.7997 14.8239C14.7997 13.4147 13.538 12.2681 11.9882 12.2681ZM11.9882 16.3575C11.0016 16.3575 10.199 15.6694 10.199 14.8239C10.199 13.9785 11.0016 13.2903 11.9882 13.2903C12.9747 13.2903 13.7773 13.9785 13.7773 14.8239C13.7773 15.6694 12.9742 16.3575 11.9882 16.3575Z"
                                                            fill="currentColor"
                                                        />
                                                    </svg>
                                                </span>
                                                Drink & Water
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M12.1727 9.21849C12.228 9.42229 12.4122 9.55632 12.614 9.55632C12.6534 9.55632 12.6936 9.55138 12.7337 9.54039L14.7076 9.00609C14.9515 8.94035 15.0955 8.68913 15.0297 8.44542C14.9638 8.20134 14.7131 8.05485 14.4685 8.12352L12.4946 8.65764C12.2509 8.72355 12.1068 8.97459 12.1727 9.21849Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M4.99541 11.6879L6.36741 12.1453C6.41539 12.1613 6.46446 12.1691 6.51188 12.1691C6.70359 12.1691 6.88194 12.0479 6.94602 11.8562C7.02604 11.6167 6.89659 11.3573 6.6569 11.2778L5.2849 10.8204C5.04466 10.7398 4.7863 10.8698 4.70628 11.1093C4.62627 11.3496 4.75572 11.6085 4.99541 11.6879Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M9.97185 10.8813C9.98137 10.8818 9.99053 10.8822 9.99968 10.8822C10.2399 10.8822 10.4415 10.6952 10.4556 10.4522L10.4941 9.80661C10.5093 9.55411 10.3172 9.33768 10.065 9.32267C9.80852 9.30948 9.5963 9.5001 9.58129 9.75168L9.54284 10.3975C9.52764 10.6504 9.71971 10.8666 9.97185 10.8813Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M18.0797 12.847C18.169 12.9362 18.286 12.9811 18.403 12.9811C18.5202 12.9811 18.6372 12.9362 18.7264 12.847C18.9053 12.6682 18.9053 12.379 18.7264 12.2003L18.2692 11.7429C18.0903 11.5642 17.8012 11.5642 17.6225 11.7429C17.4436 11.9218 17.4436 12.2109 17.6225 12.3896L18.0797 12.847Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M13.9243 11.7426C13.7454 11.5637 13.4565 11.5637 13.2776 11.7426C13.0989 11.9213 13.0989 12.2104 13.2776 12.3891L13.735 12.8465C13.8242 12.9357 13.9413 12.9805 14.0583 12.9805C14.1755 12.9805 14.2925 12.9357 14.3817 12.8465C14.5606 12.6676 14.5606 12.3787 14.3817 12.1998L13.9243 11.7426Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M12.386 4.71444C12.4382 4.92244 12.6243 5.06105 12.8291 5.06105C12.8663 5.06105 12.9033 5.05648 12.9408 5.04732C13.186 4.98616 13.3347 4.73769 13.2737 4.49306L12.8163 2.66366C12.755 2.41811 12.5058 2.27035 12.2615 2.33077C12.0165 2.39211 11.8678 2.6404 11.9286 2.88503L12.386 4.71444Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M10.3048 7.46301C10.394 7.55219 10.511 7.59705 10.6282 7.59705C10.7452 7.59705 10.8624 7.55219 10.9515 7.46301C11.1304 7.28412 11.1304 6.99518 10.9515 6.81628L10.4941 6.35889C10.3152 6.18018 10.0263 6.18018 9.84741 6.35889C9.6687 6.53778 9.6687 6.8269 9.84741 7.00562L10.3048 7.46301Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M23.7557 14.5091C23.389 14.1464 22.9627 13.8792 22.509 13.7014C22.5148 13.6111 22.5194 13.5234 22.5194 13.4383C22.5194 11.367 21.1553 9.59711 19.2065 9.04559C19.2805 8.76379 19.318 8.47375 19.318 8.17877C19.318 6.3338 17.8541 4.82446 16.0265 4.7514C16.064 4.53735 16.0827 4.32202 16.0827 4.10522C16.0827 1.84167 14.4747 0 12.499 0H11.978C10.0018 0 8.39374 1.84131 8.39374 4.10522C8.39374 4.32147 8.4126 4.53699 8.44958 4.75104C6.61414 4.81494 5.14069 6.32794 5.14069 8.17877C5.14069 8.43896 5.16943 8.69513 5.22656 8.94489C3.08533 9.336 1.48187 11.2088 1.48187 13.4383C1.48187 13.5244 1.48627 13.6126 1.49231 13.7032C1.03857 13.881 0.612854 14.1467 0.246094 14.5082L0 14.7501L4.38776 22.8181C4.66461 23.5009 5.34009 23.9573 6.07874 23.9573H17.9218C18.6605 23.9573 19.3359 23.5009 19.6126 22.8181L24 14.7508L23.7557 14.5091ZM2.39612 13.4694C2.39612 13.4594 2.39612 13.4489 2.39612 13.4388C2.39612 11.4983 3.91534 9.89575 5.85498 9.79047C6.00366 9.78186 6.13898 9.70276 6.21771 9.57605C6.29681 9.44989 6.30927 9.29333 6.25159 9.15582C6.12122 8.84564 6.05493 8.51733 6.05493 8.17896C6.05493 6.7923 7.18323 5.66345 8.57025 5.66345C8.62207 5.66345 8.74365 5.66931 8.98004 5.70996C9.14008 5.73615 9.30396 5.67719 9.40778 5.55176C9.51251 5.42706 9.54218 5.25586 9.48651 5.10315C9.36804 4.77667 9.30817 4.44141 9.30817 4.10522C9.30817 2.34576 10.5059 0.914795 11.9777 0.914795H12.4986C13.9702 0.914795 15.1677 2.34576 15.1677 4.10522C15.1677 4.44177 15.1077 4.77795 14.9888 5.10406C14.933 5.25824 14.9636 5.43018 15.0692 5.55505C15.1745 5.67993 15.3387 5.73981 15.5006 5.71051C15.7128 5.67169 15.8286 5.66345 15.8881 5.66345C17.2751 5.66345 18.4034 6.79211 18.4034 8.17896C18.4034 8.53015 18.3307 8.87183 18.1877 9.19464C18.1304 9.32446 18.1364 9.47314 18.204 9.59802C18.2712 9.72235 18.3935 9.80878 18.5334 9.83167C20.3134 10.119 21.605 11.636 21.605 13.4388V13.4685C21.5641 13.4636 21.5235 13.4636 21.4823 13.4599C21.4197 13.4544 21.3571 13.4489 21.2939 13.4462C21.2441 13.4443 21.1943 13.4443 21.1445 13.4449C21.0749 13.4449 21.0053 13.4462 20.9359 13.4504C20.8914 13.4531 20.8477 13.4562 20.8037 13.4604C20.7277 13.4672 20.6519 13.4767 20.5763 13.4886C20.5389 13.4947 20.5014 13.5005 20.4642 13.5075C20.382 13.5225 20.3002 13.5414 20.2187 13.5624C20.1881 13.5701 20.1575 13.5775 20.1273 13.5862C20.0394 13.611 19.9534 13.6403 19.8675 13.6712C19.8433 13.68 19.819 13.6877 19.7948 13.6974C19.7042 13.7325 19.6155 13.7723 19.5271 13.8149C19.5084 13.8241 19.4886 13.8318 19.47 13.8415C19.3762 13.8885 19.2847 13.9407 19.1946 13.9966C19.1827 14.0037 19.1704 14.0098 19.1585 14.0176C19.0571 14.0821 18.9582 14.1508 18.8622 14.2256C18.7749 14.1572 18.6797 14.1053 18.5878 14.0455C17.2811 13.1966 15.5533 13.2482 14.3112 14.2251C12.9816 13.1797 11.0883 13.1807 9.75916 14.226C8.41772 13.1796 6.505 13.1796 5.16412 14.2275C5.00629 14.1039 4.83893 13.9979 4.66699 13.9037C4.65509 13.8973 4.64374 13.8895 4.63129 13.8831C4.46393 13.7935 4.29053 13.7197 4.11365 13.6577C4.09259 13.6503 4.0719 13.6421 4.05103 13.6351C3.87891 13.578 3.70331 13.5346 3.52588 13.5029C3.4953 13.4974 3.46454 13.4925 3.43396 13.4874C3.26074 13.4614 3.08643 13.4464 2.91119 13.4445C2.89526 13.4445 2.8797 13.4403 2.86377 13.4403C2.83575 13.4403 2.80792 13.4449 2.77954 13.4453C2.68304 13.4476 2.58655 13.4535 2.4906 13.4632C2.45837 13.4667 2.42706 13.4654 2.39612 13.4694ZM18.7958 22.4055L18.7705 22.4595C18.6365 22.8085 18.2953 23.0427 17.9218 23.0427H6.07874C5.70502 23.0427 5.36389 22.808 5.22986 22.4595L1.14294 14.937C1.54688 14.6255 2.01929 14.4413 2.50452 14.3796C2.53931 14.3751 2.57355 14.3751 2.60834 14.3723C2.72369 14.3617 2.83923 14.358 2.95496 14.3617C3.00256 14.3632 3.05017 14.3663 3.09723 14.3699C3.20984 14.3791 3.32135 14.3956 3.43213 14.4181C3.46948 14.4258 3.50757 14.43 3.54456 14.4391C3.68408 14.4734 3.82141 14.5192 3.95526 14.575C3.99609 14.5919 4.03436 14.6129 4.07428 14.6321C4.17352 14.6792 4.27094 14.7318 4.36523 14.7907C4.40588 14.8163 4.44653 14.8416 4.4859 14.8694C4.60803 14.9555 4.72687 15.0483 4.83673 15.1558C4.83856 15.1577 4.84076 15.1589 4.84259 15.1608C4.84259 15.1608 4.84314 15.1608 4.84351 15.1613L5.16357 15.4764L5.48456 15.1608C5.55011 15.0967 5.62463 15.0487 5.69403 14.9921C6.79175 14.1033 8.41443 14.1506 9.43927 15.1608L9.76172 15.4781L10.0827 15.1589C10.6051 14.6389 11.2864 14.3763 11.9725 14.3608C11.9936 14.3604 12.0146 14.3549 12.0357 14.3549C12.0595 14.3549 12.0831 14.3613 12.1075 14.3619C12.6138 14.3751 13.1173 14.5197 13.5555 14.8074C13.7086 14.9079 13.8536 15.0251 13.9882 15.1589L14.311 15.4801L14.6334 15.1595H14.6338C14.7684 15.0255 14.9138 14.9079 15.0665 14.8072C16.1376 14.1039 17.5966 14.2214 18.5387 15.1589L18.8608 15.479L19.1836 15.1599C19.2947 15.05 19.415 14.9559 19.5385 14.8685C19.5769 14.8416 19.6166 14.8163 19.6564 14.7913C19.7507 14.7318 19.8475 14.6792 19.947 14.632C19.9861 14.6133 20.0242 14.5922 20.0645 14.5754C20.1971 14.5199 20.3324 14.4747 20.471 14.4404C20.5098 14.4307 20.5497 14.4258 20.5889 14.4181C20.697 14.3961 20.8054 14.38 20.9147 14.3708C20.9626 14.3668 21.0112 14.3635 21.0597 14.3622C21.173 14.3586 21.2869 14.3628 21.3999 14.3727C21.4356 14.376 21.4708 14.376 21.5065 14.38C21.989 14.4413 22.4583 14.6255 22.8598 14.9366L18.7958 22.4055Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M6.03857 16.52C5.97173 16.2763 5.71923 16.13 5.47698 16.199C5.23308 16.2658 5.08953 16.5169 5.15581 16.7606L6.52801 21.7914C6.58367 21.995 6.76769 22.1285 6.96874 22.1285C7.00866 22.1285 7.04931 22.1236 7.08959 22.1126C7.33331 22.0458 7.47704 21.7947 7.41058 21.5508L6.03857 16.52Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M18.5231 16.1984C18.2784 16.1321 18.0278 16.2757 17.9615 16.5194L16.5895 21.5499C16.523 21.7932 16.6667 22.0448 16.9105 22.1114C16.9507 22.1226 16.9914 22.1276 17.0311 22.1276C17.2324 22.1276 17.4167 21.9941 17.472 21.7905L18.8441 16.76C18.9105 16.5168 18.767 16.2652 18.5231 16.1984Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M14.3285 16.1843C14.076 16.1627 13.8548 16.3471 13.8317 16.5982L13.3745 21.6286C13.3516 21.8806 13.5367 22.1029 13.7888 22.1258C13.8029 22.127 13.8167 22.1276 13.8304 22.1276C14.0646 22.1276 14.264 21.9487 14.2854 21.7118L14.7428 16.6813C14.7652 16.4299 14.58 16.2072 14.3285 16.1843Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M9.67229 16.1843C9.4207 16.207 9.23503 16.4299 9.25774 16.6813L9.71514 21.7117C9.73656 21.9492 9.93615 22.1276 10.1703 22.1276C10.1839 22.1276 10.1982 22.127 10.2119 22.1257C10.4635 22.1029 10.6492 21.8806 10.6263 21.6286L10.1689 16.5981C10.146 16.3475 9.92644 16.1636 9.67229 16.1843Z"
                                                                fill="currentColor"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                Cake & Bread
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M8.56878 8.42365C8.38018 8.28303 8.11431 8.32386 7.97497 8.51246L6.96478 9.8777C6.82507 10.0659 6.86498 10.3322 7.0534 10.4715L8.41882 11.4821C8.49224 11.5365 8.58105 11.5654 8.6715 11.5654C8.69238 11.5654 8.71344 11.5637 8.73394 11.5608C8.84564 11.5441 8.9458 11.4834 9.01245 11.3931L10.0228 10.0273C10.1625 9.8387 10.1226 9.57283 9.93402 9.43348L8.56878 8.42365ZM8.58215 10.5466L7.89971 10.0418L8.40472 9.35932L9.08716 9.86415L8.58215 10.5466Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M21.3802 9.63265L19.7143 9.30013C19.4849 9.25179 19.2608 9.4034 19.2148 9.63356L18.8823 11.2995C18.8365 11.5291 18.9856 11.7525 19.2157 11.7988L20.8816 12.1313C20.9093 12.1373 20.9376 12.1399 20.9647 12.1399C21.1632 12.1399 21.3406 12.0002 21.3806 11.7981L21.7131 10.132C21.7594 9.90236 21.6104 9.67897 21.3802 9.63265ZM20.6311 11.2154L19.7984 11.049L19.9648 10.2162L20.7976 10.3826L20.6311 11.2154Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M16.3694 10.4017C16.3057 10.1758 16.0695 10.0437 15.8457 10.1087L14.2108 10.5704C13.9848 10.6335 13.8535 10.8685 13.9176 11.0939L14.3792 12.7288C14.4319 12.9158 14.6022 13.0384 14.7874 13.0384C14.826 13.0384 14.8646 13.0333 14.9029 13.0223L16.5378 12.5607C16.7638 12.4974 16.8951 12.2626 16.8308 12.037L16.3694 10.4017ZM15.0809 12.089L14.8503 11.2715L15.6677 11.0409L15.8984 11.8583L15.0809 12.089Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M24 11.5862C24 10.9631 23.6382 10.4081 22.9235 9.93291C22.929 9.8679 22.9319 9.80382 22.9319 9.7401C22.9319 8.4525 21.8839 7.4044 20.5963 7.4044C20.2434 7.4044 19.9016 7.48424 19.5877 7.63915C19.1651 6.97539 18.4276 6.55516 17.6235 6.55516C17.1806 6.55516 16.7538 6.67986 16.3848 6.91313C15.989 6.4702 15.4378 6.1895 14.8455 6.13896L13.791 4.88652C13.7188 4.80028 13.6148 4.74644 13.5026 4.73674C13.4337 4.72813 13.3689 4.74388 13.3081 4.76988C13.2673 4.78728 13.227 4.80595 13.1926 4.83525L12.4329 5.47484L12.1408 5.7202C12.0536 5.7105 11.9713 5.70573 11.8907 5.70573C11.2515 5.70573 10.6437 5.94817 10.1754 6.38139C9.85052 6.21623 9.49512 6.13054 9.13019 6.13054C8.4657 6.13054 7.83508 6.42186 7.39636 6.91313C7.02722 6.68004 6.60059 6.55516 6.15765 6.55516C5.49335 6.55516 4.86877 6.84172 4.42969 7.33482L2.50342 6.62254C2.28387 6.54015 2.03888 6.65312 1.95813 6.87358L1.49066 8.13646C1.07611 8.57262 0.849426 9.13841 0.849426 9.7401C0.849426 9.85124 0.858765 9.9622 0.878174 10.0794C0.295166 10.521 0 11.0264 0 11.5862C0 13.1931 1.30499 14.5091 2.97729 14.6136L3.92688 15.5233C4.43994 16.0149 4.66974 16.3114 5.01709 16.7611C5.13208 16.9101 5.25824 17.0733 5.41022 17.2635C6.54767 18.6879 7.68347 19.2951 9.20856 19.2951H14.9767C16.5022 19.2951 17.6382 18.6874 18.7749 17.2635C18.9261 17.0742 19.0527 16.9107 19.1677 16.7616C19.5156 16.3119 19.7452 16.0149 20.2582 15.5233L21.2087 14.6124C22.8131 14.5074 24 13.2407 24 11.5862ZM13.4149 5.75792L13.9618 6.40776L13.312 6.95433L12.7654 6.30504L13.4149 5.75792ZM4.15228 8.13774L3.58081 9.68352L2.03503 9.11205L2.60651 7.56627L4.15228 8.13774ZM19.6714 14.9104C19.1125 15.4458 18.854 15.7796 18.496 16.2422C18.3834 16.3883 18.2595 16.548 18.1117 16.7334C17.1405 17.9498 16.2321 18.4458 14.9767 18.4458H9.20892C7.95355 18.4458 7.04517 17.9498 6.07397 16.7334C5.92529 16.5476 5.8017 16.3874 5.68927 16.2418C5.33167 15.7793 5.07349 15.4455 4.51465 14.9104L4.11584 14.5283C4.24786 14.5003 4.37531 14.4646 4.50018 14.425C4.53571 14.414 4.57013 14.4012 4.60492 14.3893C4.69757 14.3575 4.78766 14.3227 4.87555 14.2848C4.90906 14.2705 4.94257 14.2568 4.97534 14.2416C5.20367 14.1354 5.41388 14.0092 5.60248 13.8666C5.62976 13.8462 5.65503 13.8244 5.6814 13.8032C5.74896 13.7485 5.8136 13.6915 5.87476 13.6326C5.89893 13.6091 5.92346 13.5862 5.94653 13.5624C6.02509 13.4809 6.09888 13.3973 6.16443 13.309C6.74432 14.0929 7.85962 14.6246 9.13696 14.6246C10.4145 14.6246 11.5296 14.0929 12.1097 13.309C12.6898 14.0929 13.8049 14.6246 15.0824 14.6246C16.3552 14.6246 17.4668 14.0971 18.0487 13.3178C18.1132 13.4062 18.1862 13.4899 18.264 13.571C18.2856 13.5934 18.3085 13.6152 18.3311 13.6371C18.3931 13.6979 18.4585 13.7561 18.5277 13.8122C18.5515 13.8312 18.5744 13.8508 18.5986 13.8695C18.7863 14.0127 18.9965 14.1383 19.2263 14.2439C19.255 14.2577 19.2852 14.2699 19.3151 14.2826C19.4072 14.3221 19.5015 14.3587 19.5987 14.3919C19.6293 14.4023 19.6589 14.4129 19.6901 14.4228C19.8144 14.4618 19.9418 14.4975 20.0739 14.5256L19.6714 14.9104ZM21.0104 13.7735C19.615 13.7671 18.4794 13.0058 18.4794 12.0758C18.4794 11.8409 18.2897 11.651 18.0547 11.651C17.8198 11.651 17.6301 11.8409 17.6301 12.0758C17.6301 12.9964 16.463 13.7745 15.082 13.7745C13.701 13.7745 12.5341 12.9964 12.5341 12.0758C12.5341 11.8409 12.3442 11.651 12.1093 11.651C11.8746 11.651 11.6847 11.8409 11.6847 12.0758C11.6847 12.9964 10.5178 13.7745 9.13678 13.7745C7.75562 13.7745 6.58868 12.9964 6.58868 12.0758C6.58868 11.8409 6.3988 11.651 6.16406 11.651C5.92914 11.651 5.73944 11.8409 5.73944 12.0758C5.73944 12.9964 4.57233 13.7745 3.15875 13.7745C1.88507 13.7745 0.849426 12.793 0.849426 11.586C0.849426 11.2599 1.09698 10.9354 1.58533 10.6212C1.74243 10.5201 1.81494 10.3282 1.76404 10.1481C1.73767 10.056 1.72211 9.97484 1.71185 9.89793L3.68481 10.6276C3.73315 10.6459 3.78296 10.6543 3.83221 10.6543C4.00452 10.6543 4.1673 10.5485 4.23047 10.3769L5.09692 8.03465C5.11908 7.97588 5.12402 7.91399 5.11908 7.85283C5.3941 7.57213 5.76324 7.40477 6.1582 7.40477C6.54218 7.40477 6.90729 7.55327 7.18671 7.82225C7.28101 7.91234 7.40936 7.95519 7.54083 7.93724C7.67047 7.91893 7.78381 7.84221 7.84973 7.72923C8.12054 7.2603 8.6001 6.97997 9.13129 6.97997C9.44128 6.97997 9.74194 7.07903 10.0005 7.26671C10.1836 7.39909 10.4372 7.36522 10.5793 7.19072C10.9021 6.79283 11.3714 6.56468 11.8691 6.55791L12.9368 7.82646C13.0204 7.92625 13.1406 7.97752 13.262 7.97752C13.3585 7.97752 13.4551 7.94493 13.535 7.87828L14.5966 6.98473C14.6155 6.98344 14.6332 6.97997 14.6519 6.97997C15.1831 6.97997 15.6627 7.25993 15.9335 7.72923C15.9988 7.84258 16.1127 7.91893 16.2422 7.93724C16.3744 7.9572 16.5022 7.9127 16.5965 7.82225C16.8759 7.5529 17.241 7.40477 17.625 7.40477C18.2459 7.40477 18.8057 7.80174 19.0175 8.39171C19.0638 8.5208 19.1691 8.61876 19.3011 8.65666C19.4321 8.69402 19.5738 8.666 19.6816 8.58067C19.9508 8.36699 20.2676 8.25365 20.5977 8.25365C21.4173 8.25365 22.084 8.92033 22.084 9.73991C22.084 9.8419 22.0726 9.94499 22.0485 10.056C22.0085 10.2365 22.0909 10.4216 22.251 10.5141C22.849 10.8594 23.1522 11.2196 23.1522 11.5856C23.1508 12.8274 22.2288 13.7677 21.0104 13.7735Z"
                                                                fill="currentColor"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                Butter & Cream
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M7.29335 8.33314C7.37136 8.41114 7.47371 8.45032 7.57625 8.45032C7.67861 8.45032 7.78096 8.41114 7.85897 8.33314C8.01534 8.17676 8.01534 7.92389 7.85897 7.76752C7.45302 7.36121 7.45302 6.70038 7.85897 6.29406C8.20705 5.94598 8.39895 5.48364 8.39895 4.99163C8.39895 4.49962 8.20742 4.0371 7.85897 3.68919C7.7026 3.53264 7.44973 3.53264 7.29335 3.68919C7.13698 3.84557 7.13698 4.09844 7.29335 4.25463C7.49019 4.45147 7.59914 4.71312 7.59914 4.99145C7.59914 5.26995 7.49056 5.53143 7.29335 5.72827C6.57539 6.44623 6.57539 7.61518 7.29335 8.33314Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M16.0932 8.33314C16.1712 8.41114 16.2735 8.45032 16.3759 8.45032C16.4784 8.45032 16.5808 8.41114 16.6588 8.33314C16.8151 8.17676 16.8151 7.92389 16.6588 7.76752C16.2528 7.36121 16.2528 6.70038 16.6588 6.29406C17.0067 5.94598 17.1987 5.48364 17.1987 4.99163C17.1987 4.49962 17.0072 4.0371 16.6588 3.68919C16.5024 3.53264 16.2495 3.53264 16.0932 3.68919C15.9368 3.84557 15.9368 4.09844 16.0932 4.25463C16.29 4.45147 16.3988 4.71312 16.3988 4.99145C16.3988 5.26995 16.2904 5.53143 16.0932 5.72827C15.3752 6.44623 15.3752 7.61518 16.0932 8.33314Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M11.6928 5.9331C11.7708 6.0111 11.8733 6.05028 11.9757 6.05028C12.078 6.05028 12.1804 6.0111 12.2584 5.9331C12.4149 5.77672 12.4149 5.52386 12.2584 5.36748C11.8524 4.96117 11.8524 4.30034 12.2584 3.89385C12.6065 3.54595 12.7984 3.08342 12.7984 2.59142C12.7984 2.0996 12.6068 1.63707 12.2584 1.28917C12.102 1.13261 11.8491 1.13261 11.6929 1.28917C11.5364 1.44554 11.5364 1.69823 11.6929 1.8546C11.8896 2.05144 11.9985 2.3131 11.9985 2.59142C11.9985 2.86974 11.8901 3.1314 11.6929 3.32823C10.9748 4.04619 10.9748 5.21514 11.6928 5.9331Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M10.0912 11.4551C10.1203 11.4551 10.15 11.452 10.1797 11.4456C10.7548 11.316 11.3495 11.2502 11.9481 11.2502H11.9532C12.1741 11.2502 12.3531 11.0715 12.3531 10.8507C12.3531 10.6295 12.1744 10.4504 11.9532 10.4504C11.9516 10.4504 11.9496 10.4504 11.9476 10.4504C11.2904 10.4504 10.6363 10.5228 10.0037 10.6652C9.788 10.7136 9.65287 10.9276 9.70121 11.1431C9.74369 11.3292 9.9083 11.4551 10.0912 11.4551Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M3.88141 18.0436C3.90594 18.0484 3.92993 18.0504 3.95337 18.0504C4.14306 18.0504 4.31152 17.9151 4.34668 17.7223C4.76233 15.4431 6.13581 13.4151 8.02107 12.2983C8.21095 12.1861 8.27394 11.9403 8.16151 11.7503C8.04872 11.5604 7.80354 11.4976 7.61347 11.61C5.53174 12.843 4.01672 15.0744 3.55987 17.5783C3.51995 17.7961 3.66388 18.0039 3.88141 18.0436Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M22.2027 17.4996C21.478 13.2431 18.1599 9.86115 13.9358 9.04194C13.9428 8.97803 13.953 8.91358 13.953 8.85004C13.953 7.74719 13.056 6.84998 11.9532 6.84998C10.8503 6.84998 9.95309 7.74719 9.95309 8.85004C9.95309 8.91358 9.96316 8.97803 9.97031 9.04194C5.74623 9.86115 2.42835 13.2431 1.70344 17.4996C0.867556 17.9727 -0.046875 18.6691 -0.046875 19.4504C-0.046875 21.4844 6.15786 22.8503 11.9532 22.8503C17.7483 22.8503 23.9532 21.4844 23.9532 19.4504C23.9532 18.6691 23.0388 17.9727 22.2027 17.4996ZM10.7556 8.91907C10.754 8.89582 10.7531 8.87275 10.7531 8.85023C10.7531 8.18866 11.2916 7.65015 11.9532 7.65015C12.6147 7.65015 13.1532 8.18866 13.1532 8.85023C13.1532 8.87311 13.1525 8.89582 13.1509 8.91907C13.132 8.91706 13.1131 8.91633 13.0948 8.91431C12.9573 8.89911 12.8187 8.88831 12.6795 8.87861C12.6285 8.87513 12.5776 8.86982 12.5265 8.86707C12.3368 8.85663 12.146 8.85059 11.9537 8.85059C11.7613 8.85059 11.5705 8.85663 11.3808 8.86707C11.3297 8.86982 11.2788 8.87513 11.2277 8.87861C11.0885 8.88831 10.9501 8.89948 10.8124 8.91431C10.7932 8.91633 10.7743 8.91669 10.7556 8.91907ZM10.5127 9.75843C10.7274 9.72639 10.9435 9.70313 11.1603 9.68555C11.2048 9.68189 11.2491 9.67878 11.2934 9.67567C11.7327 9.646 12.174 9.646 12.6131 9.67567C12.6576 9.67878 12.7019 9.68189 12.7464 9.68555C12.9632 9.70313 13.1792 9.72639 13.3938 9.75843C17.5611 10.3883 20.8567 13.7071 21.4547 17.8849C21.473 18.0132 21.4879 18.1419 21.501 18.2708C21.5054 18.3152 21.5115 18.3591 21.5155 18.4036C21.5311 18.5807 21.5426 18.7579 21.5483 18.9352C15.2643 20.3916 8.6426 20.3916 2.35859 18.9352C2.36463 18.7579 2.3758 18.5807 2.39136 18.4036C2.39539 18.3591 2.40107 18.3152 2.40565 18.2708C2.41883 18.1416 2.43366 18.0127 2.45216 17.8849C3.05 13.7071 6.34554 10.3879 10.5127 9.75843ZM11.9532 22.0503C5.1147 22.0503 0.753115 20.3427 0.753115 19.4504C0.753115 19.2972 0.94263 18.9597 1.57874 18.5193C1.57709 18.542 1.57782 18.5644 1.57618 18.5873C1.56263 18.8064 1.55311 19.0273 1.55311 19.2505V19.5656L1.85981 19.6396C5.16158 20.4317 8.55746 20.8285 11.953 20.8285C15.3487 20.8285 18.7447 20.432 22.0463 19.6396L22.353 19.5656V19.2505C22.353 19.0273 22.3435 18.8068 22.3298 18.5873C22.3283 18.5644 22.329 18.542 22.3274 18.5193C22.9635 18.9597 23.153 19.2972 23.153 19.4504C23.1532 20.3427 18.7916 22.0503 11.9532 22.0503Z"
                                                                fill="currentColor"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                Cooking
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M23.8412 8.31587C22.8438 4.50563 20.2945 5.17268 16.0699 6.27828C15.4339 6.44453 14.5609 6.54817 13.6362 6.65767C12.8653 6.74922 12.0489 6.8481 11.2562 6.99294C10.9727 6.70271 10.6785 6.3885 10.3709 6.058C9.22078 4.82094 7.91689 3.41872 6.54634 2.7101C4.43422 1.61769 2.71687 2.00807 1.14271 3.93947C-0.82055 6.34786 -0.20092 10.2923 2.59309 13.3947C2.55537 13.5659 2.52131 13.7418 2.49366 13.927C2.23384 15.6893 2.93257 17.4754 4.4626 18.9563C5.95381 20.3997 8.0663 21.3848 10.4112 21.7311C11.0156 21.8203 11.6173 21.8646 12.2094 21.8646C13.9145 21.8646 15.5387 21.4991 16.9076 20.7927C18.8 19.8167 19.985 18.3087 20.245 16.5463C20.3076 16.1235 20.3304 15.7413 20.3203 15.3903C23.1108 13.5518 24.4914 10.8008 23.8412 8.31587ZM2.89485 12.4108C0.68348 9.70619 0.214363 6.46376 1.82148 4.49208C2.65205 3.47328 3.45552 2.98036 4.37379 2.98036C4.91469 2.98036 5.4955 3.15157 6.14442 3.4872C7.38002 4.12624 8.62862 5.46895 9.73018 6.65401C9.89333 6.82942 10.0539 7.00227 10.211 7.16908C9.55678 7.3315 9.00966 7.52412 8.55281 7.75209C7.35109 8.35121 6.61153 9.12813 6.30153 10.1196C6.27663 10.1218 6.25484 10.1272 6.2303 10.1297C5.83845 10.1691 5.47883 10.2401 5.15016 10.3434C5.14009 10.3465 5.13002 10.35 5.11995 10.3529C4.4236 10.578 3.86787 10.9504 3.44453 11.4799C3.43666 11.4896 3.42933 11.5001 3.42183 11.5098C3.33082 11.6262 3.24586 11.7496 3.16713 11.8813C3.15486 11.9018 3.14131 11.921 3.12941 11.9417C3.05378 12.0739 2.9842 12.2131 2.9203 12.3601C2.91297 12.3775 2.9029 12.3929 2.89485 12.4108ZM19.3793 16.4179C19.1614 17.8938 18.1413 19.1713 16.5067 20.0141C14.8238 20.882 12.704 21.1831 10.5393 20.8645C8.37392 20.5451 6.43245 19.6439 5.07179 18.327C3.75013 17.0478 3.14222 15.53 3.36012 14.0542C3.39601 13.8101 3.4416 13.5835 3.4958 13.371C3.54231 13.1896 3.59687 13.021 3.6573 12.8616C3.66426 12.8433 3.67085 12.8248 3.67781 12.8071C3.73951 12.652 3.80873 12.5077 3.88527 12.3739C3.89351 12.3594 3.90193 12.3457 3.91017 12.3317C3.99073 12.1966 4.07826 12.071 4.17549 11.9577C4.1786 11.9542 4.18208 11.9511 4.18501 11.9476C4.287 11.8297 4.39778 11.7229 4.51899 11.6281C4.51973 11.6275 4.52028 11.6268 4.52119 11.6262C4.63765 11.5352 4.76527 11.4559 4.90059 11.3842C4.91597 11.3763 4.9308 11.3675 4.946 11.3596C5.07783 11.2937 5.21864 11.2368 5.36879 11.1877C5.39168 11.1802 5.41475 11.1732 5.438 11.1663C5.58998 11.1203 5.7502 11.0813 5.92085 11.0517C5.94264 11.0476 5.9659 11.0451 5.98769 11.0416C6.16804 11.0126 6.35628 10.9903 6.55843 10.978C6.65071 10.9724 6.7549 10.9758 6.85469 10.9758C6.96803 10.9751 7.08357 10.978 7.20039 10.9843C7.32033 10.9912 7.44429 11.0004 7.57503 11.0139C7.62923 11.0192 7.68269 11.0236 7.73689 11.03C7.78157 11.0354 7.82497 11.0388 7.87001 11.0451C7.98811 11.0608 8.1086 11.0819 8.2289 11.1024C8.29811 11.1143 8.36623 11.1238 8.43581 11.137C8.54567 11.1575 8.657 11.1815 8.7676 11.2051C8.84597 11.2218 8.92342 11.2368 9.00179 11.2542C9.16896 11.2923 9.33705 11.3329 9.5046 11.3754C9.52272 11.3798 9.54103 11.3838 9.55898 11.3886C10.1361 11.536 10.7125 11.7053 11.2622 11.8656C12.1838 12.1347 13.0548 12.3885 13.7647 12.4936C16.0497 12.8305 17.5056 13.094 18.3717 13.5662C18.3773 13.5694 18.383 13.5723 18.3887 13.5754C19.0574 13.9453 19.3681 14.4428 19.433 15.2027L19.4509 15.4118C19.458 15.6985 19.4366 16.0294 19.3793 16.4179ZM20.178 14.431C20.1754 14.4228 20.172 14.4157 20.1692 14.408C20.1412 14.3168 20.1077 14.2307 20.0716 14.1461C20.0555 14.1077 20.0389 14.0692 20.0209 14.0321C19.9803 13.9471 19.9369 13.8643 19.888 13.786C19.8744 13.7642 19.8587 13.7435 19.8442 13.7221C19.6686 13.4591 19.4428 13.2302 19.1658 13.0323C19.151 13.0219 19.1365 13.0109 19.1215 13.0004C19.0748 12.968 19.0345 12.9321 18.9845 12.9014C18.9333 12.8699 18.8747 12.8433 18.8208 12.8135C18.8199 12.8131 18.8186 12.8122 18.8177 12.8118C18.5224 12.6485 18.1853 12.5094 17.8015 12.3881C17.7433 12.3693 17.6869 12.3497 17.6268 12.3316C17.566 12.3136 17.5014 12.2966 17.4378 12.2796C17.2968 12.2406 17.1516 12.203 17.002 12.1675C16.9857 12.1637 16.9696 12.1602 16.9533 12.1561C16.0719 11.9509 15.0448 11.7973 13.8938 11.6275C13.731 11.6033 13.5564 11.5702 13.3716 11.5294C13.3696 11.529 13.3665 11.5281 13.3643 11.5277C12.8119 11.4056 12.173 11.2186 11.5056 11.0236C10.2346 10.6519 8.83406 10.2442 7.54482 10.1293C7.48714 10.1233 7.42836 10.1167 7.37233 10.112C7.65816 9.4861 8.20876 8.98274 9.06826 8.55391C10.3121 7.93373 12.1331 7.71748 13.7396 7.52724C14.6951 7.41426 15.5974 7.30714 16.2921 7.12532C20.894 5.92104 22.2524 5.70131 22.9951 8.53798C23.5221 10.5534 22.4245 12.8144 20.178 14.431Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M6.10923 14.2289C6.05045 13.9943 5.81278 13.8517 5.57822 13.9102C5.34366 13.9688 5.20139 14.2065 5.25962 14.4411L5.69742 16.1916C5.74723 16.3904 5.92539 16.523 6.1215 16.523C6.15702 16.523 6.19236 16.5189 6.22825 16.5098C6.46281 16.4512 6.60508 16.2135 6.54685 15.979L6.10923 14.2289Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M15.7372 8.53952C15.6784 8.30496 15.4413 8.16232 15.2062 8.22092C14.9716 8.2797 14.8293 8.51718 14.8875 8.75174L15.3254 10.5024C15.3752 10.7011 15.5533 10.8336 15.7494 10.8336C15.7849 10.8336 15.8203 10.8296 15.8562 10.8206C16.0907 10.7619 16.233 10.5244 16.1748 10.2896L15.7372 8.53952Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M13.3187 18.2194L11.8193 19.2233C11.6184 19.3575 11.5646 19.6298 11.699 19.8303C11.7834 19.9563 11.9216 20.0246 12.063 20.0246C12.1467 20.0246 12.2316 20.0004 12.306 19.9506L13.8054 18.9466C14.0063 18.8122 14.0601 18.5401 13.9257 18.3397C13.7908 18.1388 13.5187 18.085 13.3187 18.2194Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M4.37206 6.45765C4.45574 6.45765 4.54052 6.43367 4.61504 6.38368L6.11431 5.37971C6.31517 5.24531 6.36901 4.97322 6.23461 4.77272C6.09984 4.57185 5.82811 4.51838 5.62761 4.65242L4.12835 5.65638C3.92748 5.7906 3.87365 6.06288 4.00805 6.26338C4.09246 6.38936 4.2307 6.45765 4.37206 6.45765Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M13.2446 15.5138C13.4367 15.5138 13.613 15.386 13.6665 15.1917C13.7304 14.9588 13.5934 14.7177 13.3601 14.654L11.6199 14.1759C11.3866 14.1112 11.146 14.2489 11.0821 14.4822C11.0182 14.7151 11.1552 14.9563 11.3884 15.0202L13.1285 15.4981C13.1671 15.5091 13.2065 15.5138 13.2446 15.5138Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M4.14658 9.60858C4.29196 9.60858 4.43424 9.53643 4.51736 9.4046C4.64645 9.20025 4.5853 8.93036 4.38077 8.80108L2.85477 7.83832C2.65115 7.71014 2.37997 7.77057 2.25125 7.97491C2.12216 8.17926 2.18332 8.44934 2.38767 8.57843L3.91385 9.5412C3.98563 9.58679 4.06656 9.60858 4.14658 9.60858Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M21.1688 10.0721L19.8325 11.2848C19.6536 11.4472 19.6401 11.7242 19.8023 11.9033C19.8891 11.9985 20.0076 12.0469 20.1268 12.0469C20.2317 12.0469 20.3368 12.0097 20.4203 11.9335L21.7564 10.7208C21.9355 10.5584 21.949 10.2813 21.7866 10.1023C21.6244 9.92338 21.3477 9.91019 21.1688 10.0721Z"
                                                                fill="currentColor"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                Diabetic Food
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M9.56598 14.2374C9.56598 14.4621 9.38379 14.6441 9.15912 14.6441C8.93463 14.6441 8.75244 14.4621 8.75244 14.2374C8.75244 14.0128 8.93463 13.8306 9.15912 13.8306C9.38379 13.8306 9.56598 14.0128 9.56598 14.2374Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M9.56598 15.8644C9.56598 16.0891 9.38379 16.2711 9.15912 16.2711C8.93463 16.2711 8.75244 16.0891 8.75244 15.8644C8.75244 15.6397 8.93463 15.4575 9.15912 15.4575C9.38379 15.4575 9.56598 15.6397 9.56598 15.8644Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M15.2652 14.2374C15.2652 14.4621 15.0832 14.6441 14.8585 14.6441C14.6339 14.6441 14.4517 14.4621 14.4517 14.2374C14.4517 14.0128 14.6339 13.8306 14.8585 13.8306C15.0832 13.8306 15.2652 14.0128 15.2652 14.2374Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M15.2652 15.8644C15.2652 16.0891 15.0832 16.2711 14.8585 16.2711C14.6339 16.2711 14.4517 16.0891 14.4517 15.8644C14.4517 15.6397 14.6339 15.4575 14.8585 15.4575C15.0832 15.4575 15.2652 15.6397 15.2652 15.8644Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M10.7862 0C10.5612 0 10.3793 0.181824 10.3793 0.40686V5.69495C10.3793 6.22449 10.038 6.672 9.5658 6.84045V0.40686C9.5658 0.181824 9.38397 0 9.15894 0C8.93408 0 8.75208 0.181824 8.75208 0.40686V6.84045C8.27985 6.672 7.93854 6.22449 7.93854 5.69495V0.40686C7.93854 0.181824 7.75671 0 7.53186 0C7.30682 0 7.125 0.181824 7.125 0.40686V5.69495C7.125 6.67694 7.82501 7.49854 8.75208 7.68768V11.8544C8.05243 12.0363 7.53168 12.6676 7.53168 13.4236V22.3729C7.53168 23.2703 8.26154 24 9.15875 24C10.0562 24 10.7858 23.2703 10.7858 22.3729V13.4236C10.7858 12.6676 10.2653 12.0363 9.56561 11.8544V7.68768C10.4927 7.49854 11.1927 6.67731 11.1927 5.69495V0.40686C11.1929 0.181824 11.011 0 10.7862 0V0ZM9.97266 13.4236V22.3729C9.97266 22.8215 9.60773 23.1865 9.15894 23.1865C8.71033 23.1865 8.3454 22.8215 8.3454 22.3729V13.4236C8.3454 12.975 8.71033 12.6101 9.15894 12.6101C9.60773 12.6101 9.97266 12.975 9.97266 13.4236Z"
                                                                fill="currentColor"
                                                            />
                                                            <path
                                                                d="M16.0509 0.684265C15.593 0.223755 14.9367 0 14.0452 0C13.8201 0 13.6383 0.181824 13.6383 0.40686V12.2034C13.6383 12.2477 13.6504 12.2884 13.6636 12.3283C13.3979 12.6178 13.2314 13.0003 13.2314 13.4236V22.3729C13.2314 23.2701 13.9613 24 14.8585 24C15.7559 24 16.4856 23.2701 16.4856 22.3729V13.4236C16.4856 12.9027 16.2351 12.4429 15.8528 12.1448C16.8904 10.8008 16.8932 8.81287 16.8924 5.92273L16.8948 5.02533C16.9047 3.08423 16.9133 1.55109 16.0509 0.684265ZM15.6722 22.3729C15.6722 22.8215 15.3073 23.1865 14.8585 23.1865C14.4099 23.1865 14.045 22.8215 14.045 22.3729V13.4236C14.045 12.975 14.4099 12.6101 14.8585 12.6101C15.3073 12.6101 15.6722 12.975 15.6722 13.4236V22.3729ZM16.0815 5.0213L16.0789 5.9231C16.0798 8.7843 16.0769 10.6998 15.0656 11.8176C14.9973 11.8087 14.9294 11.7966 14.8587 11.7966C14.7175 11.7966 14.5829 11.8202 14.4518 11.8542V0.837524C14.9034 0.887878 15.2423 1.02466 15.4741 1.25775C16.0976 1.88507 16.0904 3.2688 16.0815 5.0213Z"
                                                                fill="currentColor"
                                                            />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                Kitchen Instruments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M11.25 3.75V11.25H3.75V12.75H11.25V20.25H12.75V12.75H20.25V11.25H12.75V3.75H11.25Z" fill="currentColor" />
                                                    </svg>
                                                </span>
                                                View All
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="header__navigation-menu">
                                <li class="header__navigation-menu-link active">
                                    <a href="#">
                                        Home
                                        <span class="drop-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    <ul class="header__navigation-drop-menu">
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="index.html">Homepage 01</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="home-02.html">Homepage 02</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="home-03.html">Homepage 03</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="home-04.html">Homepage 04</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="home-05.html">Homepage 05</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__navigation-menu-link">
                                    <a href="#">
                                        Shop
                                        <span class="drop-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    <ul class="header__navigation-drop-menu">
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="shop-01.html">Shop 01</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="shop-02.html">Shop 02</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__navigation-menu-link">
                                    <a href="#">
                                        Pages
                                        <span class="drop-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    <ul class="header__navigation-drop-menu">
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="user-dashboard.html">User Dashboard </a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="order-history.html">Order History </a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="order-details.html">Order Details </a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="account-setting.html">Account Settings </a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="product-details.html">Product Details</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="wishlist.html"> Wishlist</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="wishlist.html"> Wishlist</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="shopping-cart.html"> Shopping Cart</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="checkout.html"> Checkout</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="sign-in.html"> Sign in</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="create-account.html"> Create Account</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="faq.html"> faq</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="404.html"> Error 404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__navigation-menu-link">
                                    <a href="#">
                                        Blog
                                        <span class="drop-icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                    <ul class="header__navigation-drop-menu">
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="blog-list.html">Blog list</a>
                                        </li>
                                        <li class="header__navigation-drop-menu-link">
                                            <a href="single-blog.html">Single Blog</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="header__navigation-menu-link">
                                    <a href="about.html">About us </a>
                                </li>
                                <li class="header__navigation-menu-link">
                                    <a href="contact.html">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        <a href="#" class="header__telephone-number">
                            <span>
                                <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.436 2.375C15.9194 2.77396 17.2719 3.55567 18.3581 4.64184C19.4442 5.72801 20.226 7.08051 20.6249 8.56388" stroke="#1A1A1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M13.5308 5.75687C14.4206 5.99625 15.2319 6.46521 15.8835 7.11678C16.535 7.76835 17.004 8.57967 17.2434 9.46949"
                                        stroke="#1A1A1A"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                    <path
                                        d="M7.115 11.6517C8.02238 13.5074 9.5263 15.0049 11.3859 15.9042C11.522 15.9688 11.6727 15.9966 11.8229 15.9851C11.9731 15.9736 12.1178 15.9231 12.2425 15.8386L14.9812 14.0134C15.1022 13.9326 15.2414 13.8833 15.3862 13.8698C15.5311 13.8564 15.677 13.8793 15.8107 13.9364L20.9339 16.1326C21.1079 16.2065 21.2532 16.335 21.3479 16.4987C21.4426 16.6623 21.4815 16.8523 21.4589 17.04C21.2967 18.307 20.6784 19.4714 19.7196 20.3154C18.7608 21.1593 17.5273 21.6249 16.25 21.625C12.3049 21.625 8.52139 20.0578 5.73179 17.2682C2.94218 14.4786 1.375 10.6951 1.375 6.75C1.37512 5.47279 1.84074 4.23941 2.68471 3.28077C3.52867 2.32213 4.6931 1.70396 5.96 1.542C6.14771 1.51936 6.33769 1.55832 6.50134 1.653C6.66499 1.74769 6.79345 1.89298 6.86738 2.067L9.06537 7.1945C9.1219 7.32698 9.14485 7.47137 9.13218 7.61485C9.11951 7.75833 9.07162 7.89647 8.99275 8.017L7.17275 10.7977C7.09015 10.923 7.04141 11.0675 7.03129 11.2171C7.02117 11.3668 7.05001 11.5165 7.115 11.6517V11.6517Z"
                                        stroke="#1A1A1A"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>

                                (219) 555-0114
                            </span>
                        </a>
                    </div>
                </div>
            </div> -->
     <div class="header__sidebar">
         <button class="header__cross">
             <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <path d="M18 6L6 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                 <path d="M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
             </svg>
         </button>
         <div class="header__mobile-sidebar">
             <div class="header__mobile-top">
                 <form action="#">
                     <div class="header__mobile-input">
                         <input type="text" placeholder="Search" />
                         <button class="search-btn">
                             <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M9.16667 16.3333C12.8486 16.3333 15.8333 13.3486 15.8333 9.66667C15.8333 5.98477 12.8486 3 9.16667 3C5.48477 3 2.5 5.98477 2.5 9.66667C2.5 13.3486 5.48477 16.3333 9.16667 16.3333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 <path d="M17.4999 18L13.8749 14.375" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                             </svg>
                         </button>
                     </div>
                 </form>
                 <ul class="header__mobile-menu">
                     <li class="header__mobile-menu-item active">
                         <a href="#" class="header__mobile-menu-item-link">
                             Home
                             <span class="drop-icon">
                                 <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                             </span>
                         </a>
                         <ul class="header__mobile-dropdown-menu">
                             <li class="header__mobile-dropdown-menu-link active">
                                 <a href="index.html">Home 01</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="home-02.html">Home 02</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="home-03.html">Home 03</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="home-04.html">Home 04</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="home-05.html">Home 05</a>
                             </li>
                         </ul>
                     </li>
                     <li class="header__mobile-menu-item">
                         <a href="#" class="header__mobile-menu-item-link">
                             Shop
                             <span class="drop-icon">
                                 <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                             </span>
                         </a>
                         <ul class="header__mobile-dropdown-menu">
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="shop-01.html">Shop 01</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="shop-02.html">Shop 02</a>
                             </li>
                         </ul>
                     </li>
                     <li class="header__mobile-menu-item">
                         <a href="#" class="header__mobile-menu-item-link">
                             Pages
                             <span class="drop-icon">
                                 <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                             </span>
                         </a>
                         <ul class="header__mobile-dropdown-menu">
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="product-details.html">Product Details</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="wishlist.html">Wishlist</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="shopping-cart.html">Shopping Cart</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="checkout.html">Checkout</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="sign-in.html">Sign in</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="create-account.html">Create Account</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="user-dashboard.html">User Dashboard</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="order-history.html">order history</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="order-details.html">Order Details</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="account-setting.html">Account Settings</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="faq.html">faq</a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="404.html">404</a>
                             </li>
                         </ul>
                     </li>
                     <li class="header__mobile-menu-item">
                         <a href="#" class="header__mobile-menu-item-link">
                             Blog
                             <span class="drop-icon">
                                 <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <path d="M3.33332 5.66667L7.99999 10.3333L12.6667 5.66667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                 </svg>
                             </span>
                         </a>
                         <ul class="header__mobile-dropdown-menu">
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="single-blog.html">Single Blog </a>
                             </li>
                             <li class="header__mobile-dropdown-menu-link">
                                 <a href="blog-list.html">Blog list</a>
                             </li>
                         </ul>
                     </li>
                     <li class="header__mobile-menu-item">
                         <a href="about.html" class="header__mobile-menu-item-link">About</a>
                     </li>
                     <li class="header__mobile-menu-item">
                         <a href="contact.html" class="header__mobile-menu-item-link">Contacts</a>
                     </li>
                 </ul>
             </div>
             <div class="header__mobile-bottom">
                 <div class="header__mobile-user">
                     <div class="header__mobile-user--img">
                         <img src="{{ asset('front') }}/images/user/img-03.png" alt="user" />
                     </div>
                     <div class="header__mobile-user--info">
                         <h2 class="font-body--lg-500">Dianne Russell</h2>
                         <p class="font-body--md-400">dianne.russell@gmail.com</p>
                     </div>
                 </div>
                 <div class="header__mobile-action d-none">
                     <a href="#" class="button button--md">Sign in</a>
                     <a href="#" class="button button--md button--disable">Sign up</a>
                 </div>
             </div>
         </div>
     </div>

 </header>