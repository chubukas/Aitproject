<?php 

$pagename = "Dashboard";
$bootstrap = "true";

include 'inc/head.php'; 
include 'inc/modals.php';
include 'inc/php/bal_operate.php';

$amount = new Operates;


?>

<?php include "inc/modals.php" ?>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        
                        <div class="col-12 mt-4 mb-4">
                            <div class="income-dashone-total reso-mg-b-30">
                                <div class="income-dashone-pro">
                                    <marquee>
                                        <h3 class="text-light mt-3">Hello <span style="color: #77c7ff !important; text-transform: uppercase;"><?php echo $_SESSION["name"]; ?></span> ,  Welcome to AIT Capitol Holdings</h3>
                                    </marquee>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="income-dashone-total reso-mg-b-30">
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-nalika-rate">
                                        <!-- <h3><span>$</span><span class="counter"><?php// echo number_format($amount->wallet_bal() - $amount->invest()).".00"; ?> </span></h3> -->
                                         <h3><span>&pound; </span><span class="counter"><?php echo number_format($amount->wallet_bal()).".00"; ?> </span></h3>   
                                    </div>
                                </div>
                                <div class="income-range">
                                    <p>MY WALLET</p>
                                    <span class="income-percentange bg-blue"><span class="counter"></span> <i class="fa fa-bolt"></i>
                                    </span>
                                   
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="income-dashone-total reso-mg-b-30">
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-nalika-rate">
                                        <h3><span>&pound;</span><span class="counter"><?php echo number_format($amount->myInvesments()).".00"; ?></span></h3>
                                    </div>
                                </div>
                                <div class="income-range order-cl">
                                    <p>INVESTMENT</p>
                                    <span class="income-percentange bg-green"><span class="counter"></span> <i class="fa fa-level-up"></i>
                                    </span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="income-dashone-total reso-mg-b-30">
                            <div class="income-dashone-pro">
                                <div class="income-rate-total">
                                    <div class="price-nalika-rate">
                                        <h3><span>&pound;</span><span class="counter"><?php echo number_format($amount->roi()).".00" ?></span></h3>
                                    </div>
                                    
                                </div>
                                <div class="income-range order-cl">
                                    <p>ROI</p>
                                    <span class="income-percentange bg-red"><span class="counter"></span> <i class="fa fa-level-up"></i>
                                    </span>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        
       
        
        <div class="product-sales-area mg-t-50 mt-5">
            <div class="container text-center">
                <h1 class="text-center text-light">INVESTMENT PACKAGES</h1>
                <center>
                    <hr class="bg-dark w-50 text-center">
                </center>
                <div id="responseInvest"></div>
            </div>
        </div>
     
        <div class="widget-program-bg mb-5">
            <div class="container-fluid mb-5">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel hbgblue responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3 class="mt-5 mb-5">BASIC </h3>
                                    <p class="text-big font-light">
                                    </p>

                                  <div class="table-responsive">
                                    <table class="table">
                                      
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="text-light font-weight-bold font-bold">Minimum Investment</span>
                                                </td>
                                                <td>&pound;3000.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="text-light font-weight-bold font-bold">Return on Investment</span>
                                                </td>
                                                <td>12% Monthly</td>
                                            </tr>
                                        </tbody>
                                        <div>
                                            <p>
                                                <span class="text-light font-weight-bold font-bold">28 days lock period</span>
                                            </p>    
                                        </div>
                                    </table>
                                </div>
                                    <br>
                                    <form onsubmit="investments('basicAmount','basicbtn',28,12)">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i aria-hidden="true">&pound;</i></span>
                                        <input type="number" name="basicAmount" id="basicAmount" class="form-control" placeholder="Amount" min="3000">
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $_SESSION['id'] ?>">
                                    </div>
                                    <button class="mb-2 btn btn-sm btn-outline-light" name="investbtn" id="basicbtn">INVEST</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="hpanel hbgblue responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3 class="mt-5 mb-5" > STANDARD</h3>
                                   
                                    <div class="table-responsive">
                                    <table class="table">
                                      
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="text-light font-weight-bold font-bold">Minimum Investment</span>
                                                </td>
                                                <td>&pound;10,000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="text-light font-weight-bold font-bold">Return on Investment</span>
                                                </td>
                                                <td>20% Monthly</td>
                                            </tr>
                                        </tbody>
                                        <div>
                                            <p>
                                                <span class="text-light font-weight-bold font-bold">28 days lock period</span>
                                            </p>    
                                        </div>
                                    </table>
                                </div>
                                <br>
                                <form onsubmit="investments('standardAmount','standardbtn',28,20)">
                                    <div class="input-group mg-b-pro-edt">
                                        <span class="input-group-addon"><i aria-hidden="true">&pound;</i></span>
                                        <input type="number" name="standardAmount" id="standardAmount" class="form-control" placeholder="Amount" min="10000">
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $_SESSION['id'] ?>">
                                    </div>
                                    <button class="mb-2 btn btn-sm btn-outline-light" name="investbtn" id="standardbtn">INVEST</button>
                                </form>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-5">
                        <div class="hpanel hbgblue responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3 class="mt-5 mb-5" >PREMIUM</h3>
                                    <div class="table-responsive">
                                    <table class="table">
                                      
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="text-light font-weight-bold font-bold">Minimum Investment</span>
                                                </td>
                                                <td>&pound;100,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="text-light font-weight-bold font-bold">Return on Investment</span>
                                                </td>
                                                <td>28% Monthly</td>
                                            </tr>
                                        </tbody>
                                        <div>
                                            <p>
                                                <span class="text-light font-weight-bold font-bold">28 days lock period</span>
                                            </p>    
                                        </div>
                                    </table>
                                </div>
                                <br>
                                <form onsubmit="investments('premiumAmount','premiumbtn',28,28)">
                                    <div class="input-group mg-b-pro-edt">
                                       <span class="input-group-addon"><i aria-hidden="true">&pound;</i></span>
                                        <input type="number" name="premiumAmount" id="premiumAmount" class="form-control" placeholder="Amount" min="100000">
                                        <input type="hidden" name="userid" id="userid" value="<?php echo $_SESSION['id'] ?>">
                                    </div>
                                    <button class="mb-2 btn btn-sm btn-outline-light" name="investbtn" id="premiumbtn">INVEST</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-12" >
                        <div class="">
                            <!-- <h4 class="text-center text-light" style="margin-top: 10px; margin-bottom: 50px;">Current BTC price</h4> -->


                            <div class="product-sales-area mg-t-50 mt-5">
                                <div class="container text-center">
                                    <h1 class="text-center text-light">CURRENT PRICE</h1>
                                    <center>
                                        <hr class="bg-dark w-50 text-center">
                                    </center>
                                </div>
                            </div>


                            <div style="height:560px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=dark&coin_id=859&pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>
                        </div>` 
                    </div>
                    
                </div>
            </div>
        </div>

<?php 

include 'inc/foot.php'; 

?>