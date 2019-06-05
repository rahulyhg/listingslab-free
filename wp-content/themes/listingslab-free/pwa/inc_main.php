
<main>
    
    <div class="featured-image">   
        <img 
            alt="alt tag for featured image"
            src="<?php echo $wpObj->featuredImage; ?>" />
    </div>
    <div class="title">   
        <h3>
            <?php echo $wpObj->queriedObj->post_title; ?>    
        </h3>
    </div>
    <div class="post-content"> 
        <?php echo $wpObj->queriedObj->post_content; ?> 
    </div>
</main>
