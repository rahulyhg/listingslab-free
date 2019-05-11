import React from 'react';
const Header = (props) => {
    // console.log ('Header props', props);
    return(
        <React.Fragment>
            <header className={`header`}>
                <div className={`title`} >
                    <a href="/">
                        <img 
                            className={`logo`} 
                            src={`/png/logo.png`} 
                            alt={`Neo Containers`}  
                        />
                        <h1 className={`mainTitle`}>listingslab FREE</h1>
                    </a>
                </div>
                <div  className={`clearBoth`} />
                <hr />
            </header>
        </React.Fragment>
    );
};
export default Header;