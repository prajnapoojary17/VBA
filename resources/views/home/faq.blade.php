@extends('layouts.master_home') @section('content')
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-collapse">
            </a>
            <a class="navbar-brand" href="index.html">
                <span class="col-orange">G</span><span class="col-white">S</span><span class="col-green">T</span><span class="text-uppercase">Tran</span>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navigation-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{url('/')}}" class="btn">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#about" class="btn">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="#contact" class="btn">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="#video" class="btn">
                        Demo Video
                    </a>
                </li>
                @if(session()->get('userAuthDetail'))
                    <li><a class="btn" href="{{url('/logout')}}">Logout</a></li>
                @else
                    <li>
                        <a href="#" class="btn" data-toggle="modal" data-target="#logIn" id="btnlogIn">
                            Login
                        </a>
                    </li>
                @endif
                <li>
                    <a href="#" target="_blank" class="btn btn-simple">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" class="btn btn-simple">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#" target="_blank" class="btn btn-simple">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--SIGNUP-->
<div class="nav-modal modal animated fadeInDown" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signUpLabel">
    <i class="material-icons close" data-dismiss="modal" aria-label="Close">close</i>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 m-t-30">
            <div class="signup-box">
                <div class="card">
                    <div class="body">
                        <form id="sign_up" method="POST" class="form_validation">
                            <div class="msg">Register a new user</div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-indigo">
                                <label for="terms">I read and agree to the <a href="terms.html">terms of usage</a>.</label>
                            </div>
                            <button class="btn btn-block btn-raised btn-lg bg-green waves-effect" type="submit" onclick="location.href = 'package.html';">SIGN UP</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--LOGIN-->
<div class="nav-modal modal  animated fadeInDown" id="logIn" tabindex="-1" role="dialog" aria-labelledby="logInLabel">
    <i class="material-icons close" data-dismiss="modal" aria-label="Close">close</i>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 m-t-30">
            <div class="login-box">
                <div class="card">
                    <div class="body">
                        <form id="sign_in" method="POST">
                            <div class="msg">Sign in for Existing User</div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <img src="images/nocaptcha.gif" />
                            </div>
                            <div class="row">
                                <div class="col-xs-7 p-t-5">
                                    <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-indigo">
                                    <label for="rememberme">Remember Me</label>
                                </div>
                                <div class="col-xs-5">
                                    <button class="btn btn-block btn-raised bg-green waves-effect" type="submit" onclick="location.href = 'dashboard.html';">SIGN IN</button>
                                </div>
                            </div>
                            <div class="row m-t-15 m-b--20">
                                <div class="col-xs-6"></div>
                                <div class="col-xs-6 align-right">
                                    <a href="#" data-toggle="collapse" data-target="#forgot_password" id="btnForgot">Forgot Password?</a>
                                </div>
                            </div>
                        </form>

                        <form id="forgot_password" method="POST" class="collapse form_validation">
                            <div class="msg">Forgot Password</div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-line">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                                </div>
                            </div>
                            <button class="btn btn-block btn-raised bg-green waves-effect" type="submit">CONTINUE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--RESET PASSWORD-->
<div class="nav-modal modal animated fadeInDown" id="resetPassword" tabindex="-1" role="dialog" aria-labelledby="resetPasswordLabel">
    <i class="material-icons close" data-dismiss="modal" aria-label="Close">close</i>
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 m-t-30">
            <div class="login-box">
                <div class="card">
                    <div class="body">
                        <form id="reset_password" method="POST" class="form_validation">
                            <div class="msg">Reset Password</div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="password" minlength="6" placeholder="New Password" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">lock</i>
                                </span>
                                <div class="form-line">
                                    <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm New Password" required>
                                </div>
                            </div>
                            <button class="btn btn-block btn-raised btn-lg bg-green waves-effect" type="submit">RESET PASSWORD</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('vtran/images/landing.jpg'); background-position:center center;"></div>

    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">                    
                    <div class="col-md-12">
                        <h3 class="title">Frequently Asked Questions</h3>
                        <div class="panel-group panel-arrow" id="accordion_1" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingOne_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseOne_1" aria-expanded="true" aria-controls="collapseOne_1">
                                            Carry forward of ITC
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_1">
                                    <div class="panel-body">
                                        <div class="question">Will the CENVAT/ITC carried forward in the last return prior to GST under earlier law be available as ITC under GST?
                                        </div>
                                        <div class="answer">Yes, the registered taxable person shall be entitled to such credit subject to certain conditions.</div>
                                        <div class="question">What are the conditions for carrying forward the ITC from last VAT or Excise return? </div>
                                        <div class="answer">
                                            The conditions are that: -
                                            <ul>
                                                <li>(i) the said amount of credit is admissible as input tax credit under this Act; </li>
                                                <li>(ii) the registered person has furnished all the returns required under the existing law (i.e. Central Excise and VAT) for the period of six months immediately preceding the appointed date; </li>
                                                <li>(iii) the said amount of credit does not relate to goods sold under notifications by CBEC and claiming refund of VAT paid thereon </li>
                                            </ul>
                                        </div>
                                        <div class="question">A registered person has excess ITC in his last VAT return for the period immediately preceding the appointed day. Under GST he opts for composition scheme. Can he carry forward the aforesaid excess ITC to GST? </div>
                                        <div class="answer">No, a person opting for composition scheme under GST will not be able to carry forward the excess ITC of VAT to GST. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingTwo_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_1" aria-expanded="false"
                                           aria-controls="collapseTwo_1">
                                            Inputs, Semi-Finished Goods and Finished Goods taxable under earlier laws
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_1">
                                    <div class="panel-body">
                                        <div class="question">How can Entry tax credit be claimed as eligible input Credit under the GST law?</div>
                                        <div class="answer">The respective States have different provisions for claiming credit of Entry Tax. Hence, in the State where input credit for entry tax is permitted, such credits, can be carried forward as SGST credit in that State under SGST Law.
                                        </div>
                                        <div class="question">What are the conditions for claiming CENVAT credit on-
                                            <br> - Input and Input services
                                            <br> - Capital goods
                                            <br> For instance - Goods were received before 1st April, 2016 but no CENVAT Credit or partial CENVAT Credit was availed till the year 2016-17?</div>
                                        <div class="answer">Credit on inputs and input services already availed under the earlier law is eligible for automatic carry forward under the GST law. However, credit of input and input service which is not availed until the last return is not available as credit under the GST law, except in some circumstances.
                                            <br> CENVAT Credit on capital goods which has not been availed in the first year will be available in any financial year subsequent to the financial year in which it was purchased. The CENVAT Credit Rules does not prescribe any time limit for availment of CENVAT Credit on Capital Goods. Therefore, credit on capital goods can be claimed to the extent of unavailed portion, if it is admissible as credit under the GST law.</div>
                                        <div class="question">What will happen if the inputs, which are intended for use for making taxable supplies, are ultimately used for exempt supplies?</div>
                                        <div class="answer">If the inputs in stock in respect of which credit was allowed, are ultimately used for exempt supplies instead of taxable supplies, then the credit on such inputs as is used for exempt supplies will be disallowed in the electronic credit ledger. If no credit is remaining as per the electronic credit ledger, then the same will have to be paid in cash by the taxable person.</div>
                                        <div class="question">Will Central Sales Tax (CST) paid under the earlier law be available as credit under GST?</div>
                                        <div class="answer">No, the transitional provisions do not permit credit of Central Sales Tax paid, even though such component may be present in inputs in stock or inputs contained in Semi-finished goods or finished goods.</div>
                                        <div class="question">Can stock held for more than one year be eligible for GST credit?</div>
                                        <div class="answer">No. The provision contains a condition that only stock in respect of which the duty paying document is issued within one year from the appointed day is eligible for credit under GST.</div>
                                        <div class="question">If consideration for a particular supply of services was received under the earlier law and tax on it was paid, will GST also become payable where such supply is made in GST regime?</div>
                                        <div class="answer">No tax shall be payable on supply of goods/services on or after the appointed day if the consideration for it has been received prior to the appointed day and the duty/ tax thereon has already been paid under the earlier law.
                                        </div>
                                        <div class="question">Can an assessee take credit of input tax reversed on goods transferred to branch prior to the appointed day?</div>
                                        <div class="answer">No, Credit of input tax reversed on goods prior to appointed day, on account of branch transfers cannot be re-claimed under GST.</div>

                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingThree_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseThree_1" aria-expanded="false"
                                           aria-controls="collapseThree_1">
                                            Services taxable under earlier laws
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree_1">
                                    <div class="panel-body">
                                        <div class="question">Where any CENVAT credit is reversed under the earlier law on account of non-payment to the supplier of service, what is the period allowed to re-claim the credit in the earlier law and what are the changes in the new law?</div>
                                        <div class="answer">Under the earlier law, credit shall be required to be reversed, if payment is not made within 3 months to the supplier of service and such credit may be re-claimed on payment to the supplier as and when the payment is made, credit reversed under the earlier law due to non-payment to the supplier of service, shall be allowed to be reclaimed on payment to the supplier within 3 months from the appointed day.
                                        </div>
                                        <div class="question">Will ITC be allowed to a service provider on VAT paid inputs held as stock on the appointed day?</div>
                                        <div class="answer">Yes, he will be entitled to input tax credit on inputs held in stock. </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingFour_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFour_1" aria-expanded="false"
                                           aria-controls="collapseFour_1">
                                            Capital Goods taxable under earlier laws
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour_1">
                                    <div class="panel-body">
                                        <div class="question">What are the conditions for claiming CENVAT credit on-
                                            <br> - Input and Input services
                                            <br> - Capital goods
                                            <br> For instance - Goods were received before 1st April, 2016 but no CENVAT Credit or partial CENVAT Credit was availed till the year 2016-17?</div>
                                        <div class="answer">Credit on inputs and input services already availed under the earlier law is eligible for automatic carry forward under the GST law. However, credit of input and input service which is not availed until the last return is not available as credit under the GST law, except in some circumstances.
                                            <br> CENVAT Credit on capital goods which has not been availed in the first year will be available in any financial year subsequent to the financial year in which it was purchased. The CENVAT Credit Rules does not prescribe any time limit for availment of CENVAT Credit on Capital Goods. Therefore, credit on capital goods can be claimed to the extent of unavailed portion, if it is admissible as credit under the GST law.</div>
                                        <div class="question">A registered person, say, purchases capital goods under the existing law (Central Excise) in the June quarter of 2017-18. Though the invoice has been received within 30th June but the capital goods are received on 5th July, 2017 (i.e. in GST regime). Will such a person get full credit of CENVAT in GST regime? </div>
                                        <div class="answer">Yes, he will be entitled to credit in 2017-18 provided such a credit was admissible as CENVAT credit in the existing law and is also admissible as credit in CGST .</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingFive_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseFive_1" aria-expanded="false"
                                           aria-controls="collapseFive_1">
                                            Persons, Goods and Services Exempt under earlier laws
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFive_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive_1">
                                    <div class="panel-body">
                                        <div class="question">VAT credit was not available on items 'X' & 'Y' as capital goods in the existing law (Central Excise). Since they are covered in GST, can the registered taxable person claim it now? </div>
                                        <div class="answer">No, as he will be entitled to credit only when ITC on such goods are admissible under the existing law and is also admissible in GST. Since credit is not available under the existing law on such goods, the said person cannot claim it in GST. </div>
                                        <div class="question">Under what circumstances, the exempted person is eligible to claim credit?</div>
                                        <div class="answer">The aforesaid persons can claim credit on fulfilment, of the following conditions-
                                            <ol>
                                                <li>such inputs are used or intended to be used for making taxable supplies under this Act;</li>
                                                <li>the said taxable person passes on the benefit of such credit by way of reduced prices to the recipient;</li>
                                                <li>the said taxable person is eligible for input tax credit on such inputs under the GST Law;</li>
                                                <li>the said taxable person is in possession of invoice and/or other prescribed documents evidencing payment of duty under the earlier law;</li>
                                                <li>such invoices and /or other prescribed documents were issued not earlier than twelve months immediately preceding the appointed day;</li>
                                                <li>the supplier of services is not eligible for any abatement under the Act.</li>
                                            </ol>
                                        </div>
                                        <div class="question">Can a trader (other than a First stage dealer or a second stage dealer) claim CENVAT credit?</div>
                                        <div class="answer">No, a trader who is not a first stage dealer or second stage dealer cannot claim CENVAT Credit.</div>
                                        <div class="question">If a taxable person under GST law was engaged in the provision of exempt services which becomes taxable under GST, will the taxable person under GST be allowed the credit in respect of the inputs in his stock?</div>
                                        <div class="answer">Yes, such a taxable person would be eligible for credit on inputs in stock or contained in semi-finished goods or finished goods and such inputs are actually used or intended to be used for provision of taxable supplies under the GST law.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingSix_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseSix_1" aria-expanded="false"
                                           aria-controls="collapseSix_1">
                                            Goods sent for Job Work
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSix_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix_1">
                                    <div class="panel-body">
                                        <div class="question">Shall a manufacturer or a job worker become liable to pay tax if the inputs or semi-finished goods sent for job work under the existing law are returned after completion of job work after the appointed day? </div>
                                        <div class="answer">
                                            <ol>
                                                <li>No tax will be payable by the manufacturer or the job worker under the stipulated conditions are satisfied -
                                                </li>
                                                <li>Inputs/ semi-finished goods are sent to the job worker in accordance with the provisions of the existing law before the appointed day. </li>
                                                <li>The job worker returns the same within six months from the appointed day (or within the extended period of maximum two months). </li>
                                                <li>Both the manufacturer and the job worker declare the details of inputs held in stock by the job worker on the appointed day in the prescribed form. </li>
                                                <li>However, if the said inputs/semi- finished goods are not returned within six months (or within the extended period of maximum two months), the input tax credit availed is liable to be recovered. </li>
                                            </ol>
                                        </div>
                                        <div class="question">Can a manufacturer transfer finished goods sent for testing purpose to the premises of any other taxable person?
                                        </div>
                                        <div class="answer">Yes, on payment of tax in India or without payment of tax for exports within six months (or within the extended period of maximum two months).</div>
                                        <div class="question">If finished goods removed from a factory for carrying out certain processes under existing law are returned on or after the appointed day, whether GST would be payable? </div>
                                        <div class="answer">No tax under GST will be payable if such goods are returned to the said factory within six months (or within the extended period of maximum two months) from the appointed day. </div>
                                        <div class="question">When tax shall become payable in GST on manufactured goods sent to a Job worker for carrying out tests or any other process not amounting to manufacture under the existing law? </div>
                                        <div class="answer">Tax will be payable in GST on manufactured goods sent to a job worker prior to the appointed day for carrying out tests or any process not amounting to manufacture under the existing law if such goods are not returned to the manufacturer within six months (or within the extended period of maximum two months) from the appointed day. Further, the input tax credit enjoyed by the manufacturer will liable to be recovered if the aforesaid goods are not returned within six months from the appointed day.</div>
                                        <div class="question">Is extension of two months as discussed in section 141 automatic? </div>
                                        <div class="answer">No, it is not automatic. It may be extended by the Commissioner on sufficient cause being shown. </div>
                                        <div class="question">What happens if the job worker does not return the goods within the specified time?</div>
                                        <div class="answer">Tax would be payable by the job worker. Further, the manufacturer will also be liable to pay tax on expiry of the specified time limit.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingSeven_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseSeven_1" aria-expanded="false"
                                           aria-controls="collapseSeven_1">
                                            Goods sent to Agent
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseSeven_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven_1">
                                    <div class="panel-body">
                                        <div class="question">Where goods (including capital goods) belonging to the principal are lying with the agents on the appointed day, will the agent be able to take ITC on the same?</div>
                                        <div class="answer">The agent can take such credit on fulfilment of conditions:-
                                            <ol>
                                                <li>The agent is a registered taxable person in GST;</li>
                                                <li>Both the principal and the agents declare the details of stock lying with the agents on the date immediately preceding the appointed day;</li>
                                                <li>The invoices for such goods had been issued not earlier than 12 months immediately preceding the appointed day;</li>
                                                <li>The principal has either reversed or not availed of the ITC in respect of such goods. This provision is applicable to SGST law only.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingEight_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseEight_1" aria-expanded="false"
                                           aria-controls="collapseEight_1">
                                            Services by ISDs
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEight_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight_1">
                                    <div class="panel-body">
                                        <div class="question">If services are received by ISD under the earlier law, can the ITC relating to it be distributed in GST regime?
                                        </div>
                                        <div class="answer">Yes, irrespective of whether the invoice(s) relating to such services is received on or after the appointed day.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingNine_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseNine_1" aria-expanded="false"
                                           aria-controls="collapseNine_1">
                                            Returns, Debit and Credit Notes
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseNine_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine_1">
                                    <div class="panel-body">
                                        <div class="question">Sales return under CST (i.e. Central Sales Tax Act) is allowable as deduction from the turnover within six months? If, say, goods are returned in GST regime by a buyer within six months from appointed day, will it become taxable in GST? </div>
                                        <div class="answer">Where tax has been paid under the existing law [CST, in this case] on any goods at the time of sale, not being earlier than six months prior to the appointed day, and such goods are returned by the buyer after the appointed day, following scenarios might emerge -
                                            <br> a) the buyer is registered under GST : the sales return will be considered as a supply of the said buyer in GST and tax has to be paid on such supply, if, -
                                            <ul>
                                                <li>(i) the goods are taxable under the GST Law; and </li>
                                                <li>(ii) the buyer is registered under the GST Law. </li>
                                            </ul>
                                            <br> b) the buyer is not registered under GST : the seller is entitled to refund of such tax [CST, in this case] paid under the existing law if -
                                            <ul>
                                                <li>(i) the goods are returned within 6 (six) months (or within the extended period of maximum two months) from the appointed day </li>
                                                <li>(ii) the goods are identifiable .</li>
                                            </ul>
                                        </div>
                                        <div class="question">What is the time limit for issue of debit/credit note(s) for revision of prices? </div>
                                        <div class="answer">The taxable person may issue the debit/credit note(s) or a supplementary invoice within 30 days of the price revision. Such time limit shall be capped by the date of filing of Annual return.</div>
                                        <div class="question">Goods were sent on approval not earlier than six months before the appointed day but are returned to the seller after 6 months from the appointed day, will tax be payable under GST? </div>
                                        <div class="answer">Yes, if such goods are liable to tax under GST and the person who has rejected or has not approved the goods, returns it after 6 months (or within the extended period of maximum two months) from the appointed day. In that case tax shall also be payable by the person who has sent the goods on approval basis.</div>
                                        <div class="question">What is the implication of GST in respect of exempted goods in earlier law removed before the appointed day and returned after the appointed day are now taxable?</div>
                                        <div class="answer">If any exempted goods sold/removed under the earlier law are returned within six months of the appointed day, no tax is chargeable under the GST law. In case goods are returned after six months from the appointed day, tax is payable by the person returning the goods under the GST law.</div>
                                        <div class="question">What are the implications in respect of upward price revision for goods removed or services provided prior to the appointed day?</div>
                                        <div class="answer">The supplier shall issue a supplementary invoice/ debit note within 30 days of the price revision and charge GST on such supplementary invoice/ debit note. The rate as per the GST schedule may apply; however, this is a contentious matter.
                                        </div>
                                        <div class="question">What are the implications in respect of downward price revision for goods removed or services provided prior to the appointed day?</div>
                                        <div class="answer">The supplier shall issue a credit note within 30 days of the price revision and mention the value of GST on such credit note. The original supplier will be allowed to reduce his tax liability subject to the recipient reducing his input tax credit to such extent.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingTen_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTen_1" aria-expanded="false"
                                           aria-controls="collapseTen_1">
                                            Appeals, Revisions, Refund and Recovery
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTen_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen_1">
                                    <div class="panel-body">
                                        <div class="question">A registered person has wrongly enjoyed the credit under the existing law, will the recovery be done under the GST Law or the existing law? </div>
                                        <div class="answer">The recovery relating to ITC wrongfully enjoyed, unless recovered under the existing law, will be recovered as arrears of tax under GST. </div>
                                        <div class="question">If the appellate or revisional order goes in favour of the assessee, whether refund will be made in GST? What will happen if the decision goes against the assessee? </div>
                                        <div class="answer">The refund will be made in accordance with the provisions of the existing law only. In case any recovery is to be made then, unless recovered under existing law, it will be recovered as an arrear of tax under GST.</div>
                                        <div class="question">How shall the refund arising from revision of return(s) furnished under the existing law be dealt in GST? </div>
                                        <div class="answer">Any amount refundable as a consequence of revision of any return under the existing law after the appointed day will be refunded in cash in accordance with the provisions of the existing law.</div>
                                        <div class="question">In pursuance of any assessment or adjudication proceedings instituted, after the appointed day, under the existing law, an amount of tax, interest, fine or penalty becomes refundable. Shall such amount be refundable under the GST law? </div>
                                        <div class="answer">No refund of such amount will be made in cash under the existing law.</div>
                                        <div class="question">What will be the fate of pending refund of tax/ interest under the earlier law?</div>
                                        <div class="answer">The pending refund claims shall be disposed of in accordance with the provisions of the earlier law.</div>
                                        <div class="question">What will be fate of any appeal or revision relating to a claim of CENVAT/ITC which is pending under the earlier law? If say, it relates to output liability then?</div>
                                        <div class="answer">It shall be disposed of in accordance with the provisions of the earlier law only in both the cases.</div>
                                        <div class="question">If the appellate or revisional order goes in favour of the assessee, whether refund will be made in GST? What will happen if the decision goes against the assessee?</div>
                                        <div class="answer">The refund shall be made in accordance with the provisions of the earlier law only. In case any recovery is to be made then it will be made as an arrear of tax under GST.</div>
                                        <div class="question">How shall the refund arising from revision of return(s) furnished under the earlier law be dealt in GST?</div>
                                        <div class="answer">The same shall be refunded in accordance with the provisions of the earlier law.</div>
                                        <div class="question">Once the original return is filed, can the assessee revise the return?</div>
                                        <div class="answer">Yes, The assessee may revise the original return filed under the earlier law within 3 months from the appointed day.</div>
                                        <div class="question">Will an assessee be allowed to claim more credit in the revised return than the credit claimed in the original return?</div>
                                        <div class="answer">No, the credit claimed in revised return can not exceed the amount of credit claimed in the original return</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-col-indigo">
                                <div class="panel-heading" role="tab" id="headingEleven_1">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseEleven_1" aria-expanded="false"
                                           aria-controls="collapseEleven_1">
                                            Miscellaneous
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseEleven_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven_1">
                                    <div class="panel-body">
                                        <div class="question">Can a trader (other than a First stage dealer or a second stage dealer) claim CENVAT credit?</div>
                                        <div class="answer">No, a trader who is not a first stage dealer or second stage dealer cannot claim CENVAT Credit.</div>
                                        <div class="question">Will a manufacturer enjoying SSI exemption under the existing law have to be registered under GST if the said turnover exceeds the basic threshold of Rs 20 lakh?</div>
                                        <div class="answer">Yes</div>
                                        <div class="question">If any goods or services are supplied in GST, in pursuance of contract entered under existing law, which tax will be payable? </div>
                                        <div class="answer">GST will be payable on such supplies.</div>
                                        <div class="question">Tax on a particular supply of goods/services is leviable under the existing law. Will GST be also payable if the actual supply is made in GST regime? </div>
                                        <div class="answer">No tax will be payable on such supply of goods/services under GST to the extent the tax is leviable under the existing law. </div>
                                        <div class="question">Where any goods are sold on which tax was required to be deducted at source under State VAT law and an invoice was also issued before the appointed day, shall deduction of tax at source be made under this Act if the payment is made after the appointed day? </div>
                                        <div class="answer">No, in such case no deduction of tax at source shall be made under GST. </div>
                                        <div class="question">Will a person registered in a State say Maharashtra be eligible to claim credit if he does not take registration in that State under GST for any reason say closure of operations etc.?</div>
                                        <div class="answer">The credit claimed in the return of a particular State will ordinarily be eligible to be carried forward only in terms of the SGST law of that State, in the instant case, Maharashtra and cannot be availed as credit under any other State GST Law.</div>
                                        <div class="question">What is the treatment of various components of CENVAT Credit (such as service tax, excise duty, cess, etc.) under the GST transition?</div>
                                        <div class="answer">All components of CENVAT Credit in the last return would merge into one single input tax credit under the CGST credit ledger. The taxes being subsumed lose their individual identity under the GST law.</div>
                                        <div class="question">If the amount of duty, tax or cess carried forward as per the accounts is greater than the return, which amount will be allowed to be carried forward?</div>
                                        <div class="answer">The amount of duty, tax or cess carried forward as per the accounts will be immaterial. The input tax credit carried forward as per the last return under the earlier law for the period ending with the day preceding the day when the GST becomes applicable, will only be taken into account.</div>
                                        <div class="question">Can stock held for more than one year be eligible for GST credit?</div>
                                        <div class="answer">No. The provision contains a condition that only stock in respect of which the duty paying document is issued within one year from the appointed day is eligible for credit under GST.</div>
                                        <div class="question">Will ITC be allowed to a service provider on VAT paid inputs held as stock on the appointed day?</div>
                                        <div class="answer">No, VAT does not cover services. Under it, only goods are covered.</div>
                                        <div class="question">Can credit be claimed in respect of CENVAT, Entry tax and VAT paid on goods under present law which is in transit as on the transition date?</div>
                                        <div class="answer">Yes, credit can be claimed subject to prerequisites-
                                            <br> The registered taxable person should record the duty paid in his books of accounts within 30 days or such extended time which may be prescribed and A statement should be furnished in the prescribed form.</div>
                                        <div class="question">Will the credit be available if the Invoice is made on or before 30th June, 2017 but is received by the supplier on or after 30th June, 2017 assuming the applicability of GST from 31st July, 2017?</div>
                                        <div class="answer">Credit in such case would be permissible provided the purchase is recorded by the receiver within 30 days in his books of accounts.</div>
                                        <div class="question">What happens to taxes deposited under earlier law if the services are not provided even after the appointed day?</div>
                                        <div class="answer">Refund can be claimed in cash in respect of such taxes even after the appointed day in respect of taxes collected but services not provided; however, the claim shall be filed within one year from the relevant date.</div>
                                        <div class="question">If any goods or services are supplied in GST, in pursuance of contract entered under earlier law, which tax will be payable?</div>
                                        <div class="answer">All supplies after the appointed day shall be liable to tax under the CGST/SGST Act.</div>
                                        <div class="question">If consideration for a particular supply of services was received under the earlier law and tax on it was paid, will GST also become payable where such supply is made in GST regime?</div>
                                        <div class="answer">No tax shall be payable on supply of goods/services on or after the appointed day if the consideration for it has been received prior to the appointed day and the duty/ tax thereon has already been paid under the earlier law.</div>
                                        <div class="question">Whether a manufacturer, manufacturing excisable goods before appointed date but the turnover was below the threshold of Rs. 1.50 Crores, will be eligible to get the benefit of cenvat credit on inputs lying in the stock of raw material or in the semi-finished or finished goods?</div>
                                        <div class="answer">Yes, a registered taxable person who was engaged in the manufacture of exempted goods shall be entitled to take, in his electronic credit ledger, credit of excise duty (CGST) or credit of state VAT(SGST) in respect of inputs held in stock and inputs contained in semi-finished or finished goods held in stock as on the appointed date subject to few conditions.</div>
                                        <div class="question">Once the original return is filed, can the assessee revise the return?</div>
                                        <div class="answer">Yes, The assessee may revise the original return filed under the earlier law within 3 months from the appointed day.</div>
                                        <div class="question">Will an assessee be allowed to claim more credit in the revised return than the credit claimed in the original return?</div>
                                        <div class="answer">No, the credit claimed in revised return can not exceed the amount of credit claimed in the original return</div>
                                        <div class="question">Will a trader having turnover below the threshold under VAT but, making sales through e-commerce operator will be required to be registered in GST?</div>
                                        <div class="answer">Yes, There will be no threshold for such person(s).</div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>   