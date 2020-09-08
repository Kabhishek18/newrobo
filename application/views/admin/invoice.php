 <body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<?php require('inc/nav.php')?>
 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Order</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Order Bill
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                    
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- invoice functionality start -->
                <section class="invoice-print mb-1">
                    <div class="row">

                       
                        <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
                            <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-file-text"></i> Print</button>
                            
                        </div>
                    </div>
                </section>
                <!-- invoice functionality end -->
                <!-- invoice page -->
                <section class="card invoice-page">
                    <div id="invoice-template" class="card-body">
                        <!-- Invoice Company Details -->
                        <div id="invoice-company-details" class="row">
                            <div class="col-sm-6 col-12 text-left pt-1">
                                <div class="media pt-1">
                                    <img src="<?=base_url()?>assets/img/White_log.png" alt="company logo" width=150px/>
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 text-right">
                                <h1>Order Bill</h1>
                                <div class="invoice-details mt-2">
                                    <h6>TRANSACTION NO.</h6>
                                    <p><?=$order_id?></p>
                                    <h6 class="mt-2">TRANSACTION DATE</h6>
                                    <p><?=date('d F Y',strtotime($order_created))?></p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Company Details -->

                        <!-- Invoice Recipient Details -->
                        <div id="invoice-customer-details" class="row pt-2">
                            <div class="col-sm-6 col-12 text-left">
                                <h5>Recipient</h5>
                                <?php $rec = json_decode($order_detail,true);?>
                                <div class="recipient-info my-2">
                                    <p><?=$rec['name']?></p>
                                    <p><?=$rec['address']?></p>
                                    <p><?=$rec['address2']?></p>
                                    <p><?=$rec['state']?>, <?=$rec['country']?></p>
                                    <p><?=$rec['zip']?></p>
                                </div>
                                <div class="recipient-contact pb-2">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                       <?=$rec['email']?>
                                    </p>
                                  <!--   <p>
                                        <i class="feather icon-phone"></i>
                                        +91 988 888 8888
                                    </p> -->
                                </div>
                            </div>
                            <div class="col-sm-6 col-12 text-right">
                                <h5>New Robo</h5>
                                <div class="company-info my-2">

                                    <p> C-50, Greater Kailash-1,</p>
                                    <p> C Block, Greater Kailash I</p>
                                    <p>Greater Kailash, New Delhi ,India</p>
                                    <p>110048</p>
                                </div>
                                <div class="company-contact">
                                    <p>
                                        <i class="feather icon-mail"></i>
                                        info@newrobos.com
                                    </p>
                                    <p>
                                        <i class="feather icon-phone"></i>
                                        Office : 011- 4019 6289
                                       <p>Mobile 1: 85108 26062</p>
                                       <p>Mobile 2: 99997 05943</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/ Invoice Recipient Details -->

                        <!-- Invoice Items Details -->
                        <div id="invoice-items-details" class="pt-1 invoice-items-table">
                            <div class="row">
                                <div class="table-responsive col-12">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>TASK DESCRIPTION</th>
                                                <th>AMOUNT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $prod =$this->home_model->ListCourse($order_cart)?>
                                            <tr>
                                                <td>1</td>
                                                <td><?=$prod['product_name']?></td>
                                                <td><?=$order_amount?> INR</td>
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="invoice-total-details" class="invoice-total-table">
                            <div class="row">
                                <div class="col-7 offset-5">
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                               
                                                <tr>
                                                    <th>TOTAL</th>
                                                    <td><?=$order_amount?> INR</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Invoice Footer -->
                        <div id="invoice-footer" class="text-right pt-3">
                            <p>This is an electronically generated bill, no signature is required.</p>
                                <!-- <p class="bank-details mb-0">
                                    <span class="mr-4">BANK: <strong>FTSBUS33</strong></span>
                                    <span>IBAN: <strong>G882-1111-2222-3333</strong></span>
                                </p> -->
                        </div>
                        <!--/ Invoice Footer -->

                    </div>
                </section>
                <!-- invoice page end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
