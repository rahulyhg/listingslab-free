import React from 'react';
const Header = (props) => {
    // console.log ('Header props', props);
    return(
        <React.Fragment>
            <header className={`header`}>
                <div className={`title`} >
                    
                    <img 
                        className={`logo`} 
                        src={`/png/logo.png`} 
                        alt={`Neo Containers`}  
                    />
                    <h1 className={`mainTitle`}>...</h1>
                    
                </div>
                <div  className={`clearBoth`} />
                
            </header>
            <div className={`clearBoth`} />
        </React.Fragment>
    );
};
export default Header;