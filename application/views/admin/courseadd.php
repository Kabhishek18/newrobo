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
                            <h2 class="content-header-title float-left mb-0">Course</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('ci-admin/course')?>">Course</a>
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
                                    <h4 class="card-title">Course Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('home/Courseinsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="id" value="<?=$datalist['id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Course Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="product_name" class="form-control" placeholder="Course Name" required data-validation-required-message="This Course Name field is required" value="<?=(!empty($datalist['product_name'])?$datalist['product_name']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Course Slug <span class="text-danger">*</span></label>
                                                            <input type="text" name="product_slug" class="form-control" placeholder="Course Slug" required data-validation-required-message="This Course Name field is required" value="<?=(!empty($datalist['product_slug'])?$datalist['product_slug']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Key/Highlight<span class="text-danger">*</span></label>
                                                   <textarea name="product_highlight" contenteditable="true" required>
                                                    <?=(!empty($datalist['product_highlight'])?$datalist['product_highlight']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('product_highlight');
                                                       
                                                   </script>
                                                </div>
                                                <!-- NOvice -->

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Novice<span class="text-danger">*</span></label>
                                                   <textarea name="product_novice" contenteditable="true" required>
                                                    <?=(!empty($datalist['product_novice'])?$datalist['product_novice']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('product_novice');
                                                       
                                                   </script>
                                                </div>
                                                 <!-- product_developer -->

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Developer<span class="text-danger">*</span></label>
                                                   <textarea name="product_developer" contenteditable="true" required>
                                                    <?=(!empty($datalist['product_developer'])?$datalist['product_developer']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('product_developer');
                                                       
                                                   </script>
                                                </div>

                                                 <!-- NOvice -->

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Developer<span class="text-danger">*</span></label>
                                                   <textarea name="product_champion" contenteditable="true" required>
                                                    <?=(!empty($datalist['product_champion'])?$datalist['product_champion']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('product_champion');
                                                       
                                                   </script>
                                                </div>




                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Novice Price <span class="text-danger">*</span></label>
                                                            <input type="number" name="novice_price" class="form-control" placeholder="Novice Price" required value="<?=(!empty($datalist['novice_price'])?$datalist['novice_price']:'')?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Developer Price <span class="text-danger">*</span> </label>
                                                            <input type="number" name="developer_price" class="form-control" required placeholder="Devleper Price" value="<?=(!empty($datalist['developer_price'])?$datalist['developer_price']:'')?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Champion Price <span class="text-danger">*</span></label>
                                                            <input type="number" name="champion_price" class="form-control" required placeholder="Champion Price" value="<?=(!empty($datalist['champion_price'])?$datalist['champion_price']:'')?>">
                                                        </div>
                                                    </div>
                                                   <div class="form-group">
                                                        <div class="controls">
                                                            <label>Category Name <span class="text-danger">*</span></label>
	                                                            <select class="form-control" name="cat_id" required="">
                                                                    <?php if($datalist['cat_id']){
                                                                     $scat=$this->home_model->ListCategory($datalist['cat_id']);
                                                                    ?>
                                                                    <optgroup class="select2-results__group">Selected</optgroup>
                                                                    <option value="<?=$scat['id']?>">
                                                                       <?=$scat['cat_name']?>
                                                                    </option>
                                                                     <optgroup class="select2-results__group">Unselected</optgroup>
                                                                    <?php }?>
                                                                    <option value="" class="select2-results__group">Choose</option>
                                                                    <?php $cat=$this->home_model->ListCategory();
                                                                           foreach ($cat as $option) {?>
                                                                    <option value="<?=$option['id']?>"><?=$option['cat_name']?></option>           
                                                                     <?php   } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Course Description<span class="text-danger">*</span></label>
                                                   <textarea name="product_description" contenteditable="true" required>
                                                    <?=(!empty($datalist['product_description'])?$datalist['product_description']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('product_description');
                                                       
                                                   </script>
                                                </div>
                                                 <div class="col-sm-6">
                                                     <div class="form-group">
                                                        <div class="controls">

                                                            <label>Course Image <span class="text-danger">*</span> </label>
                                                            <input type="file" name="product_image" class="form-control"  placeholder="Course Image" >
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                     <div class="form-group">
                                                        <div class="controls">
                                                            <?php if(!empty($datalist['product_image'])){ ?>
                                                            <img src="<?=base_url()?>uploads/<?=$datalist['product_image']?>" width =250px>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive  </label>
                                                            <select class="form-control" name="product_status">
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