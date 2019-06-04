
    <style>
    body {
        margin: 0;
        padding: 0;
        background: <?php echo $wpObj->colour_background; ?>;
    }
    .listingslab {
        margin: auto;
        background: <?php echo $wpObj->colour_background; ?>;
        max-width: 590px;
        color: <?php echo $wpObj->colour_text; ?>;
        font-family: Helvetica, sans-serif;
        font-size: 1rem;        
    }
    .listingslab blockquote {
        margin: 0;
        margin-left: 8px;
        border-left: 4px solid <?php echo $wpObj->colour_theme; ?>;
        padding-left: 8px;
    }
    .listingslab a {
        color: <?php echo $wpObj->colour_headings; ?>;
        text-decoration: none;
    }
    .listingslab a:hover {
        color: <?php echo $wpObj->colour_theme; ?>;
    }
    .listingslab ul, .listingslab li {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    .listingslab img {
        max-width: 100%;
    }
    .listingslab h1, .listingslab h2, .listingslab h3, 
    .listingslab h4, .listingslab h5, .listingslab h6{
        color: <?php echo $wpObj->colour_headings; ?>;
        margin: 0;
        margin-bottom: 8px;
        padding: 0;
        padding-top: 8px;
        font-weight: normal;
        font-size: 1rem;
    }
    .listingslab .content {
        display: flex;
    }
    .listingslab .nav {
        flex: 1;
        padding: 8px;
        font-size: 0.8rem;
    }
    .listingslab .main {
        /* border: 1px solid <?php echo $wpObj->colour_theme; ?>; */
        flex: 3;
    }
    .listingslab .header {
        display: flex;
        padding: 8px;
    }

    .listingslab .header .logo {
        width: 35px;
        height: 35px;
    }

    .listingslab .headings {
        display: 'block';
        margin-left: 8px;
    }

    .listingslab .header h1 {
        padding: 0;
        margin: 0;
    }
    .listingslab .header h2 {
        padding: 0;
        margin: 0;
    }
    .listingslab .footer {
        /* border: 1px solid <?php echo $wpObj->colour_theme; ?>; */
        margin-top: 32px;
        padding: 8px;
        text-align: right;
    }
    .listingslab .footer .footer-icon {
        width: 25px;
        height: 25px;
    }

    @media (max-width: 400px) {
        .listingslab .content {
            display: block;
            padding: 8px;
        }
        .listingslab img {
            margin: auto;
        }
        .listingslab .nav {
            /* visibility: hidden; */
            display: none;
        }
        .listingslab .footer {
            text-align: center;
        }
    }
</style>
