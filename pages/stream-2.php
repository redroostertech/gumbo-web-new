<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'header.php' ?>
  </head>
  <body class="main-page">
    <!-- LOADER -->
    <?php include 'loader.php' ?>
    <!-- END Loader -->

    <!-- MAIN CONTENT -->
    <div class="chitchat-container sidebar-toggle">
      <nav class="main-nav custom-scroll">
        <div class="logo-warpper"><a href="messenger.html"><img src="../assets/images/logo/logo.png" alt="logo"/></a></div>
        <!-- Side Bar Items -->
        <div class="sidebar-main">
          <ul class="sidebar-top">
            <li>
                <div class="dot-btn dot-danger grow">
                  <a class="icon-btn btn-light button-effect navigationbutton" href="store" data-tippy-content="Store" data-intro="View merchandise.">
                    <i class="fa fa-shopping-bag"></i>
                  </a>
                </div>
            </li>
            <li>
              <a class="icon-btn btn-light button-effect navigationbutton" href="cart" data-tippy-content="Cart" data-intro="View your shopping cart."> 
                <i class="fa fa-shopping-cart"></i>
              </a>
            </li>
            <li><a class="icon-btn btn-light button-effect navigationbutton" href="settings" data-tippy-content="Setting" data-intro="You can change settings by clicking here"> <i class="fa fa-cog"></i></a></li>
          </ul>
          <ul class="sidebar-bottom">         
            <li><a class="icon-btn btn-light button-effect mode" href="#" data-tippy-content="Theme Mode" data-intro="Change mode"><i class="fa fa-moon-o"></i></a></li>
            <li><a class="icon-btn btn-light" href="login.html" data-tippy-content=" SignOut"> <i class="fa fa-power-off">  </i></a></li>
          </ul>
        </div>
      </nav>
      <aside class="chitchat-left-sidebar left-disp">
        <div class="recent-default dynemic-sidebar custom-scroll active">
          <div class="recent">
              <div class="theme-title">
                  <div class="media">
                      <div> 
                          <h2>Chat</h2>
                      </div>
                      <div class="media-body">
                          <a class="icon-btn btn-outline-light button-effect pull-right mobile-back" href="#">
                              <i class="ti-angle-right"></i>
                          </a>
                          <a class="icon-btn btn-outline-light button-effect pull-right mainnav" href="#">
                              <i class="ti-layout-grid2"></i>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="chat" style="padding: 10px;">
                  <ul class="chat-main">
                  <li data-to="blank">
                      <div class="chat-box">
                      <div class="profile offline bg-size" style="background-image: url(&quot;../assets/images/contact/1.jpg&quot;); background-size: cover; background-position: center center; display: block;"><img class="bg-img" src="../assets/images/contact/1.jpg" alt="Avatar" style="display: none;"></div>
                      <div class="details">
                          <h5>Josephin water</h5>
                          <ul class="msg-box fonts">
                              <li>
                                  <h5>Hi Alan, Please send me document.</h5>
                              </li>
                          </ul>
                      </div>
                      </div>
                  </li>
                  </ul>
              </div>
          </div>
        </div>
        <!-- Begin Default -->
        <!-- Begin Store -->
        <div class="fevorite-tab dynemic-sidebar" id="store">
            <div class="theme-title">
                <div class="media">
                    <div> 
                    <h2>Shop</h2>
                    <h4>Exclusive merchandise</h4>
                    </div>
                    <div class="media-body text-right">  <a class="icon-btn btn-outline-light btn-sm m-r-15 search" href="#"> <i data-feather="search"></i></a>
                    <form class="form-inline search-form">
                        <div class="form-group">
                        <input class="form-control-plaintext" type="search" placeholder="Search.."/>
                        <div class="icon-close close-search"></div>
                        </div>
                    </form>
                    <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a>
                    </div>
                </div>
            </div>
            <ul class="chat-main">
                <li>
                <div class="chat-box">
                    <div class="media">
                    <a type="button" data-toggle="modal" data-target="#itemdetailmodal"><div class="profile offline"><img class="bg-img" src="../assets/images/contact/1.jpg" alt="Avatar"/></div></a>
                    <div class="details">
                        <h5>Name of Item</h5>
                        <h6>Description of item</h6>
                    </div>
                    <!-- <div class="media-body"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite" href="#"> <i data-feather="star"> </i></a></div> -->
                    </div>
                </div>
                </li>
            </ul>
        </div>
        <!-- END Store -->
        <!-- BEGIN Cart -->
        <div class="settings-tab dynemic-sidebar custom-scroll" id="cart">
            <div class="theme-title">
                <div class="media">
                <div> 
                    <h2>Your Cart</h2>
                    <h4>View your cart</h4>
                </div>
                <div class="media-body text-right">   <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a></div>
                </div>
                <div class="profile-box">
                <div class="media">
                    <!-- Begin Items List -->
                    <a type="button" data-toggle="modal" data-target="#itemdetailmodal"><div class="profile"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div></a>
                    <div class="details">
                    <h5>Name of Item</h5>
                    <h6>Description of item</h6>
                    </div>
                    <div class="details edit">
                    <form class="form-radious form-sm">
                        <div class="form-group mb-2">
                            <button class="icon-btn btn-outline-light btn-sm" href="#"> <i data-feather="plus"></i></button>
                            <input class="form-control" type="number" name="count" value="1"/>
                            <button class="icon-btn btn-outline-light btn-sm" href="#"> <i data-feather="minus"></i></button>
                        </div>
                        <div class="form-group mb-0">
                            <button class="icon-btn btn-outline-light btn-sm" href="#"> <i data-feather="delete"></i></button>
                        </div>
                    </form>
                    </div>
                    <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right edit-btn" href="#"> <i data-feather="edit">       </i></a></div>
                    <!-- End Items List-->
                </div>
                </div>
            </div>
            <!-- BEGIN Payment Information -->
            <div class="setting-block">
                <div class="block">                  
                  <div class="media">
                      <div class="media-body">
                      <h3>Payment Information</h3>
                      </div>
                      <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
                  </div>
                  <div class="help">
                  <form class="form-radious form-sm">
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="card_name" value="Cardholder Name"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="card_number" value="Number on Card"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="card_cvc" value="CVC"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="card_exp_month" value="Card Expiration Month"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="card_exp_yea" value="Card Expiration Year"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="card_zip" value="Zip Code on Card"/>
                        </div>
                    </form>
                  </div>
                </div>
                <div class="media">
                <div class="media-body">
                    <h3>Payment Information</h3>
                    <h4>Provide your payment information.</h4>
                </div>
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">     </i></a></div>
                </div>
            </div>
            <!-- END Payment Information information -->
            <!-- BEGIN Shipping Information -->
            <div class="setting-block">
                <div class="block">                  
                  <div class="media">
                      <div class="media-body">
                      <h3>Shipping Information</h3>
                      </div>
                      <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left">                </i></a></div>
                  </div>
                  <div class="help">
                  <form class="form-radious form-sm">
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="shipping_address" value="Shipping Address"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="shipping_city" value="Shipping City"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="shipping_state" value="Shipping State"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="shipping_zip" value="Shipping Zip Code"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="shipping_instructions" value="Shipping Instructions"/>
                        </div>
                    </form>
                  </div>
                </div>
                <div class="media">
                <div class="media-body">
                    <h3>Shipping Information</h3>
                    <h4>Update Your shipping information</h4>
                </div>
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">       </i></a></div>
                </div>
            </div>
            <!-- End Shipping Information -->
            <!-- BEGIN Billing Information -->
            <div class="setting-block">
                <div class="block">                  
                  <div class="media">
                      <div class="media-body">
                      <h3>Billing Information</h3>
                      </div>
                      <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
                  </div>
                  <div class="help">
                  <form class="form-radious form-sm">
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="billing_address" value="Billing Address"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="billing_city" value="Billing City"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="billing_state" value="Billing State"/>
                        </div>
                        <div class="form-group mb-2">
                            <input class="form-control" type="text" name="billing_zip" value="Billing Zip Code"/>
                        </div>
                    </form>
                  </div>
                </div>
                <div class="media">
                <div class="media-body">
                    <h3>Billing Information</h3>
                    <h4>Control how you are billed.</h4>
                </div>
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">     </i></a></div>
                </div>
            </div>
            <!-- END Billing information -->
            <a class="btn btn-primary button-effect fonts font_label" href="#">Pay $30.54 Now</a>
            <a class="btn btn-light button-effect fonts font_label" href="#">Clear Cart</a>
        </div>
        <!-- END Cart -->
        <!-- BEGIN Settings -->
        <div class="settings-tab dynemic-sidebar custom-scroll" id="settings">
          <div class="theme-title">
            <div class="media">
              <div> 
                <h2>Settings</h2>
                <h4>Change your app setting.</h4>
              </div>
              <div class="media-body text-right">   <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a></div>
            </div>
            <div class="profile-box">
              <div class="media">
                <div class="profile"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                <div class="details">
                  <h5>Josephin water</h5>
                  <h6>Alabma , USA</h6>
                </div>
                <div class="details edit">
                  <form class="form-radious form-sm">
                    <div class="form-group mb-2">
                      <input class="form-control" type="text" name="username" value="Josephin water"/>
                    </div>
                    <div class="form-group mb-0">
                      <input class="form-control" type="text" name="address" value="Alabma , USA"/>
                    </div>
                  </form>
                </div>
                <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right edit-btn" href="#"> <i data-feather="edit">       </i></a></div>
              </div>
            </div>
          </div>
          <div class="setting-block">
            <div class="block">                  
              <div class="media">
                <div class="media-body">
                  <h3>Account</h3>
                </div>
                <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left">                </i></a></div>
              </div>
              <div class="theme-according" id="accordion">
                <div class="card">
                  <div class="card-header" id="headingTwo" role="heading" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><a>Security<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse show" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <div class="media">
                        <div class="media-body">
                          <h5>Show Security notification</h5>
                        </div>
                        <div class="media-right"> 
                          <input class="js-switch8" type="checkbox"/>
                        </div>
                      </div>
                      <p> <b>Note : </b>turn on this setting to recive notification when a contact's security code has been changes.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingOne" role="heading" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><a>Privacy<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      <ul class="privacy">
                        <li> 
                          <h5>Last seen</h5>
                          <input class="js-switch10" type="checkbox" checked=""/>
                          <p> <b>Note : </b>turn on this setting to whether your contact can see last seen or not.</p>
                        </li>
                        <li> 
                          <h5>Profile Photo</h5>
                          <input class="js-switch11" type="checkbox"/>
                          <p>
                             turn on this setting to whether your contact can see your profile or not.</p>
                        </li>
                        <li> 
                          <h5>About</h5>
                          <input class="js-switch12" type="checkbox"/>
                          <p> <b>Note : </b>turn on this setting to whether your contact can see about status or not.</p>
                        </li>
                        <li> 
                          <h5>Status</h5>
                          <input class="js-switch14" type="checkbox"/>
                          <p> <b>Note : </b>turn on this setting to whether your contact can see your status or not.                          </p>
                        </li>
                        <li> 
                          <h5>Read receipts</h5>
                          <input class="js-switch16" type="checkbox"/>
                          <p> <b>Note : </b>If turn off this option you won't be able to see read recipts from contact. read receipts are always sent for group chats.                     </p>
                        </li>
                        <li> 
                          <h5>Groups</h5>
                          <input class="js-switch13" type="checkbox" checked=""/>
                          <p> <b>Note : </b>turn on this setting to whether your contact can add in groups or not.  </p>
                        </li>
                        <li> 
                          <h5>Screen Lock(Require Touch ID)</h5>
                          <input class="js-switch17" type="checkbox"/>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree" role="heading" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><a>Two Step verification<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      <div class="media">
                        <div class="media-body">
                          <h5>Enable</h5>
                        </div>
                        <div class="media-right"> 
                          <input class="js-switch9" type="checkbox"/>
                        </div>
                      </div>
                      <p> <b>Note : </b>For added security, enable two-step verifiation, which will require a PIN when registering your phone number with Chitchat again.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour" role="heading" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><a>Change Number<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body change-number">
                      <h5>Your old country code & phone number</h5>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text form-control m-0">+</span></div>
                        <input class="form-control country-code" type="number" placeholder="01"/>
                        <input class="form-control" type="number" placeholder="1234567895"/>
                      </div>
                      <h5>Your new country code & phone number</h5>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text form-control m-0">+</span></div>
                        <input class="form-control country-code" type="number" placeholder="01"/>
                        <input class="form-control" type="number" placeholder=""/>
                      </div>
                      <div class="text-right">  <a class="btn btn-outline-primary button-effect btn-sm" href="#">confirm</a></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFive" role="heading" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><a>Request account info<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body"><a class="p-0 req-info" id="demo" href="#" onclick="document.getElementById(&quot;demo&quot;).innerHTML = &quot;Request sent&quot;">Request Info                            </a>
                      <p> <b>Note : </b>Create a report of your account information and settings, which you can access ot port to another app.</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingSix" role="heading" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><a>Delete My account<i class="fa fa-angle-down"></i></a></div>
                  <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body"><a class="p-0 req-info font-danger" href="#">Delete Account                            </a>
                      <p> <b>Note :</b>Deleting your account will delete your account info, profile photo, all groups & chat history.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="media">
              <div class="media-body">
                <h3>Account</h3>
                <h4>Update Your Account Details</h4>
              </div>
              <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">       </i></a></div>
            </div>
          </div>
          <div class="setting-block">
            <div class="block">                  
              <div class="media">
                <div class="media-body">
                  <h3>Chat</h3>
                </div>
                <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
              </div>
              <ul class="help">
                <li>
                  <h5>Chat Backup</h5>
                  <ul class="switch-list">
                    <li>
                      <input class="js-switch5" type="checkbox" checked=""/>
                      <h5>Auto Backup</h5>
                    </li>
                    <li>
                      <input class="js-switch6" type="checkbox"/>
                      <h5>Include document</h5>
                    </li>
                    <li>
                      <input class="js-switch7" type="checkbox"/>
                      <h5>Include Videos</h5>
                    </li>
                  </ul>
                </li>
                <li>
                  <h5>Chat wallpaper</h5>
                  <ul class="wallpaper">
                    <li><img class="bg-img" src="../assets/images/wallpaper/2.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="../assets/images/wallpaper/1.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="../assets/images/wallpaper/3.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="../assets/images/wallpaper/4.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="../assets/images/wallpaper/5.jpg" alt="Avatar"/></li>
                    <li><img class="bg-img" src="../assets/images/wallpaper/6.jpg" alt="Avatar"/></li>
                  </ul>
                </li>
                <li>
                  <h5> <a href="#">Archive all chat</a></h5>
                </li>
                <li>
                  <h5> <a href="#"> Clear all chats</a></h5>
                </li>
                <li>
                  <h5> <a class="font-danger" href="#">Delete all chats</a></h5>
                </li>
              </ul>
            </div>
            <div class="media">
              <div class="media-body">
                <h3>Chat</h3>
                <h4>Control Your Chat Backup</h4>
              </div>
              <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">     </i></a></div>
            </div>
          </div>
          <div class="setting-block">
            <div class="block">                  
              <div class="media">
                <div class="media-body">
                  <h3>Integratin</h3>
                </div>
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
              </div>
              <ul class="integratin">
                <li>
                  <div class="media">
                    <div class="media-left"> <a class="fb" href="https://www.facebook.com/login" target="_blank"><i class="fa fa-facebook"></i>
                        <h5>Facebook   </h5></a></div>
                    <div class="media-right">
                      <div class="profile"><img class="bg-img" src="../assets/images/contact/1.jpg" alt="Avatar"/></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left"> <a class="insta" href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i class="fa fa-instagram"></i>
                        <h5>instagram</h5></a></div>
                    <div class="media-right">
                      <div class="profile"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left"> <a class="twi" href="https://twitter.com/login" target="_blank"><i class="fa fa-twitter"></i>
                        <h5>twitter   </h5></a></div>
                    <div class="media-right">
                      <div class="profile"><img class="bg-img" src="../assets/images/contact/3.jpg" alt="Avatar"/></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left"> <a class="ggl" href="https://accounts.google.com/signin/v2/identifier?service=mail&amp;passive=true&amp;rm=false&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ss=1&amp;scc=1&amp;ltmpl=default&amp;ltmplcache=2&amp;emr=1&amp;osid=1&amp;flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin" target="_blank"><i class="fa fa-google"></i>
                        <h5>google   </h5></a></div>
                    <div class="media-right">
                      <div class="profile"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left"> <a class="slc" href="#"><i class="fa fa-slack"></i>
                        <h5>Slack   </h5></a></div>
                    <div class="media-right">
                      <div class="profile"><a href="https://slack.com/get-started#/" target="_blank"><i data-feather="plus-circle"></i></a></div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="media">
              <div class="media-body">
                <h3>Integratin</h3>
                <h4>Sync Your Other Social Account</h4>
              </div>
              <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right">       </i></a></div>
            </div>
          </div>
          <div class="setting-block">
            <div class="block">                  
              <div class="media">
                <div class="media-body">
                  <h3>Help</h3>
                </div>
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#"> <i data-feather="chevron-left"> </i></a></div>
              </div>
              <ul class="help">
                <li>
                  <h5> <a href="#">FAQ</a></h5>
                </li>
                <li>
                  <h5> <a href="#"> Contact Us</a></h5>
                </li>
                <li>
                  <h5> <a href="#">Terms and Privacy Policy</a></h5>
                </li>
                <li>
                  <h5> <a href="#">Licenses</a></h5>
                </li>
                <li> 
                  <h5> <a href="#">2019 - 20 Powered by Pixelstrap</a></h5>
                </li>
              </ul>
            </div>
            <div class="media">
              <div class="media-body">
                <h3>Help</h3>
                <h4>You are Confusion, Tell me</h4>
              </div>
              <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#"> <i data-feather="chevron-right"></i></a></div>
            </div>
          </div>
        </div>
        <!-- END Settings -->
      </aside>

      <!-- Streaming Area HERE -->
      <div class="chitchat-main small-sidebar" id="content">
        <div class="chat-content tabto active">
          <div class="messages custom-scroll active" id="chating">
            <div class="contact-details">
              <div class="row">
                <div class="col-7">
                  <div class="media left">
                    <div class="media-left mr-3">
                      <div class="profile online"><img class="bg-img" src="../assets/images/contact/2.jpg" alt="Avatar"/></div>
                    </div>
                    <div class="media-body">
                      <h5>Artist Name</h5>
                      <div class="badge badge-success">LIVE</div>
                    </div>
                    <div class="media-right">
                      <ul>
                        <!-- Keep buttons in this section hidden via `visibility` attribute -->
                        <li><a class="icon-btn btn-light button-effect mute" href="#" style="visibility: hidden;"><i class="fa fa-volume-up"></i></a></li>
                        <li><a class="icon-btn btn-light search-right" href="#" style="visibility: hidden;"><i data-feather="search"></i></a></li>
                        <!-- END Keep buttons in this section hidden via `visibility` attribute -->
                        <li><a class="icon-btn btn-light button-effect mobile-sidebar" href="#"><i data-feather="chevron-left"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Keep this section hidden via `visibility` attribute -->
                <div class="col" style="visibility: hidden;">
                  <ul class="calls text-right">
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Audio Call" data-toggle="modal" data-target="#audiocall"><i data-feather="phone"></i></a></li>
                    <li><a class="icon-btn btn-light button-effect" href="#" data-tippy-content="Quick Video Call" data-toggle="modal" data-target="#videocall"><i data-feather="video"></i></a></li>
                    <li><a class="icon-btn btn-light button-effect apps-toggle" href="#" data-tippy-content="All Apps"><i class="ti-layout-grid2"></i></a></li>
                    <li class="chat-friend-toggle"><a class="icon-btn btn-light bg-transparent button-effect outside" href="#" data-tippy-content="Quick action"><i data-feather="more-vertical"></i></a>
                      <div class="chat-frind-content">
                        <ul>
                          <li><a class="icon-btn btn-outline-primary button-effect btn-sm" href="#"><i data-feather="user"></i></a>
                            <h5>Profile</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-success button-effect btn-sm" href="#"><i data-feather="plus-circle"></i></a>
                            <h5>Archive</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-danger button-effect btn-sm" href="#"><i data-feather="trash-2"></i></a>
                            <h5>Delete</h5>
                          </li>
                          <li><a class="icon-btn btn-outline-light button-effect btn-sm" href="#"><i data-feather="slash"></i></a>
                            <h5>Block</h5>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <!-- END Keep this section hidden via `visibility` attribute -->
              </div>
            </div>
            <!-- ADD Streaming Output here -->
          </div>
          <?php include 'message_input.php' ?>
        </div>
      </div>
    </div>
    <!-- END Main Content -->

    <!-- MODALS -->
    <?php include 'modals.php' ?>
    <!-- END Modals -->

    <!-- JS -->
    <?php include 'javascripts.php' ?>
    <!-- END JS -->

  </body>
</html>