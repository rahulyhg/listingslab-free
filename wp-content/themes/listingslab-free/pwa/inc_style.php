
    <style>

    .listingslab {
        margin: auto;
        background: <?php echo $wpObj->colour_background; ?>;
        max-width: 590px;
        color: <?php echo $wpObj->colour_text; ?>;
        font-family: Helvetica, sans-serif;
        font-size: 1rem;        
    }
    .listingslab h1, .listingslab h2, .listingslab h3, 
    .listingslab h4, .listingslab h5, .listingslab h6{
        color: <?php echo $wpObj->colour_headings; ?>;
    }
    .listingslab .centered {
        text-align: center;
    }

    .listingslab-aside {
        display: flex;
        flex-direction: column;
        margin: 8px;
        padding: 8px;
    }

    .listingslab-aside h4 {
        padding: 0;
        margin: 0;
        font-weight: normal;
        font-size: 1.0rem;
    }


    .listingslab-main {
        display: flex;
        flex-direction: column;
        margin: 8px;
        padding: 8px;
    }

        .listingslab-main h3 {
            padding: 0;
            margin: 0;
            font-weight: normal;
            font-size: 1.1rem;
        }

        .listingslab-header {
            margin: 8px;
            padding: 8px;
            border: 1px solid rgba(0,0,0,0.2);
            background: <?php echo $wpObj->colour_theme; ?>;
            color: <?php echo $wpObj->colour_background; ?>;
        }
            .listingslab-header h1 {
                color: <?php echo $wpObj->colour_background; ?>;
                padding: 0;
                margin: 0;
                font-weight: normal;
                font-size: 1.3rem;
            }
            .listingslab-header h2 {
                color: <?php echo $wpObj->colour_background; ?>;
                padding: 0;
                margin: 0;
                font-weight: normal;
                font-size: 1.2rem;
            }


        .listingslab-footer {
            margin: 8px;
            padding: 8px;
            /* border-top: 1px solid rgba(0,0,0,0.2); */
        }


        .listingslab-footer .footer-icon {
            width: 25px;
            height: 25px;
        }
</style>
