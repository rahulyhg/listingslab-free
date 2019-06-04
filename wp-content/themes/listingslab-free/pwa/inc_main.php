
<div class="listingslab-main">

    <div class="title">   
        <h3 class="centered">
            <?php echo $wpObj->queriedObj->post_title; ?>    
        </h3>
    </div>

    <div class="featured-image centered">   
        <img 
            alt="alt tag for featured image"
            src="<?php echo $wpObj->featuredImage; ?>" />
    </div>

    <div class="content"> 
        <?php echo $wpObj->queriedObj->post_content; ?> 
    </div>

</div>

