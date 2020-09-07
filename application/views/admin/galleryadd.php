<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<?php require('inc/nav.php')?>

    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Gallery</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/gallery')?>">Gallery</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                   
                </div>
            </div>
            <div class="content-body">
                <!-- card actions section start -->
                <section id="card-actions">
                    <?php if($this->session->flashdata('success')){ ?>

                    <div class="alert alert-success" role="alert">
                                            <h4 class="alert-heading">Success</h4>
                                            <p class="mb-0">
                                                <?php echo $this->session->flashdata('success'); ?>
                                            </p>
                                        </div>
                                       
                         <?php }elseif($this->session->flashdata('warning')){ ?>  
                       <div class="alert alert-danger" role="alert">
                                            <h4 class="alert-heading">Danger</h4>
                                            <p class="mb-0">
                                               <?php echo $this->session->flashdata('warning'); ?>
                                            </p>
                                        </div>
                        <?php }?> 
                    <!-- Collapsible and Refresh Action starts -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Blog Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <?php echo form_open_multipart('home/Galleryinsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="id" value="<?=$datalist['id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Title <span class="text-danger">*</span></label>
                                                            <input type="text" name="title" class="form-control" placeholder="Title" required data-validation-required-message="This Name field is required" value="<?=(!empty($datalist['title'])?$datalist['title']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Subtitle <span class="text-danger">*</span></label>
                                                            <input type="text" name="subtitle" class="form-control" placeholder="SubTitle" required data-validation-required-message="This Name field is required" value="<?=(!empty($datalist['subtitle'])?$datalist['subtitle']:'')?>">
                                                        </div>
                                                    </div>
                                                </div> 
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Blurb <span class="text-danger">*</span></label>
                                                            <input type="text" name="blurb" class="form-control" placeholder="Blurb" required data-validation-required-message="This Name field is required" value="<?=(!empty($datalist['blurb'])?$datalist['blurb']:'')?>">
                                                        </div>
                                                    </div>
                                                </div> 
                                                 <div class="form-group">
                                                        <div class="controls">
                                                            <label>Category Name <span class="text-danger">*</span></label>
                                                                <select class="form-control" name="category" required="">
                                                                    <?php if($datalist['category']){
                                                        
                                                                    ?>
                                                                    <optgroup class="select2-results__group">Selected</optgroup>
                                                                    <option value="<?=$datalist['category']?>">
                                                                       <?=$datalist['category']?>
                                                                    </option>
                                                                     <optgroup class="select2-results__group">Unselected</optgroup>
                                                                    <?php }?>
                                                                    <option value="" class="select2-results__group">Choose</option>
                                                                    <option value="gallery1">gallery1</option>
                                                                    <option value="gallery2">gallery2</option>
                                                                    <option value="gallery3">gallery3</option>
                                                            </select>
                                                            <p>Gallery1 : Junior Scientists</p>
                                                            <p>Gallery2 : Young Engineers</p>
                                                            <p>Gallery3 : Robo Wizards</p>
                                                        </div>
                                                    </div>

                                                 <div class="col-sm-6">
                                                     <div class="form-group">
                                                        <div class="controls">

                                                            <label> Image <span class="text-danger">*</span> </label>
                                                            <input type="file" name="image" class="form-control"  placeholder="Image" >
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                     <div class="form-group">
                                                        <div class="controls">
                                                            <?php if(!empty($datalist['image'])){ ?>
                                                            <img src="<?=base_url()?>uploads/gallery/<?=$datalist['image']?>" width =250px>
                                                             <?php }?>   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive  </label>
                                                            <select class="form-control" name="status">
                                                                <option value="0">Active</option>
                                                                <option value="1">Inactive</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <button type="submit" class="btn btn-primary" >Submit</button>
                                           
                                        <?php echo form_close() ?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </section>
            </div>
        </div>
    </div>