
<header class="header">
    <a
        title="<?php echo $wpObj->bloginfo->name; ?> home"
        href="<?php echo $wpObj->bloginfo->wpurl; ?>"
        target="_self"
    >
        <img 
            class="logo"
            alt="<?php echo $wpObj->bloginfo->name; ?> logo"
            title="<?php echo $wpObj->bloginfo->name; ?> logo"
            src="<?php echo $wpObj->icon; ?>"
        />
    </a>
    <div class="headings">
        <h1><?php echo $wpObj->bloginfo->name; ?></h1>
        <h2><?php echo $wpObj->bloginfo->description; ?></h2>
    </div>
</header>

