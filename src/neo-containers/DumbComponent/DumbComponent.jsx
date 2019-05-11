import React from 'react';
const DumbComponent = (props) => {
    // console.log ('DumbComponent props', props);
    return(
        <React.Fragment>
            <div className={props.someClassNames || ``}>
                {props.someText || `someText prop missing`}
            </div>
        </React.Fragment>
    );
};
export default DumbComponent;