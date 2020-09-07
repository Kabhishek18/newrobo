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
                            <h2 class="content-header-title float-left mb-0">Blog</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/blog')?>">Blog</a>
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
                                        <?php echo form_open_multipart('home/Bloginsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="id" value="<?=$datalist['id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Blog Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="blog_title" class="form-control" placeholder="Blog Name" required data-validation-required-message="This Blog Name field is required" value="<?=(!empty($datalist['blog_title'])?$datalist['blog_title']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Blog Author <span class="text-danger">*</span></label>
                                                            <input type="text" name="blog_author" class="form-control" placeholder="Blog Author" required data-validation-required-message="This Blog Name field is required" value="<?=(!empty($datalist['blog_author'])?$datalist['blog_author']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Blog Blurb_1 <span class="text-danger">*</span></label>
                                                            <input type="text" name="blurb_1" class="form-control" placeholder="Blog blurb_1" required data-validation-required-message="This Blog Name field is required" value="<?=(!empty($datalist['blurb_1'])?$datalist['blurb_1']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Blog Blurb_2 <span class="text-danger">*</span></label>
                                                            <input type="text" name="blurb_2" class="form-control" placeholder="Blog blurb_2" required data-validation-required-message="This Blog Name field is required" value="<?=(!empty($datalist['blurb_2'])?$datalist['blurb_2']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>

                                              <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Blog Excerpt<span class="text-danger">*</span></label>
                                                   <textarea name="excerpt" contenteditable="true" required>
                                                    <?=(!empty($datalist['excerpt'])?$datalist['excerpt']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('excerpt');
                                                       
                                                   </script>
                                                </div>

                                                 <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Blog Description<span class="text-danger">*</span></label>
                                                   <textarea name="blog_description" contenteditable="true" required>
                                                    <?=(!empty($datalist['blog_description'])?$datalist['blog_description']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('blog_description');
                                                       
                                                   </script>
                                                </div>
                                                 <div class="col-sm-6">
                                                     <div class="form-group">
                                                        <div class="controls">

                                                            <label>Blog Image <span class="text-danger">*</span> </label>
                                                            <input type="file" name="blog_image" class="form-control"  placeholder="Blog Image" >
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                     <div class="form-group">
                                                        <div class="controls">
                                                            <?php if(!empty($datalist['blog_image'])){ ?>
                                                            <img src="<?=base_url()?>uploads/blog/<?=$datalist['blog_image']?>" width =250px>
                                                             <?php }?>   
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive  </label>
                                                            <select class="form-control" name="blog_status">
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