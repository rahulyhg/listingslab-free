import React from 'react';
import './E2E.css';

class e2e extends React.Component {
  
    render() {  
      let { mode } = this.props;
      if (mode){
        if (mode.show){
          return (
            <React.Fragment>
              <div className={`e2e`}>
                <a
                  title={`Cucumber`}
                  href={`https://cucumber.io/`}
                  target={`_blank`}>      
                  <img
                    align={`right`}
                    alt={`cucumber`}
                    src={`/png/cucumber.png`}
                    className={`e2eImg`}
                  />
                </a>
                <a
                  title={`Cucumber with Gherkin`}
                  href={`https://rexlabsio.github.io/neo-containers/pages/e2e.html`}
                  target={`_blank`}> 
                  Cucumber with Gherkin
                </a>
                
                
                <div className={`e2e-form`}>
                  <form action="/">
                    <input 
                      placeholder={`e2e@rexsoftware.com.au`}
                      className={`e2e-formEmailField`}
                      name="e2eEmail" 
                      id="e2eEmail" 
                      type="email"
                    />
                    <input 
                      className={`e2e-formBtn`}
                      type="submit" 
                    />
                  </form>  
                </div>
                
              </div>
            </React.Fragment>
          );
        }
        return null;
      }
      return null;
    }
  }

export default e2e;