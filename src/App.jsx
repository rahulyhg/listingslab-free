
import React from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";
import E2E from './neo-containers/E2E/';
import Header from './neo-containers/Header/';

function Home() {
  return (
    <div>
      <h2>Home</h2>
    </div>
  );
}

function About() {
  return (
    <div>
      <h2>About</h2>
    </div>
  );
}

function Topics({ match }) {
  return (
    <div>
      <h2>Topics</h2>
      <ul>
        <li><Link to={`${match.url}/rendering`}>Rendering with React</Link></li>
        <li><Link to={`${match.url}/components`}>Components</Link></li>
        <li><Link to={`${match.url}/props-v-state`}>Props v. State</Link></li>
      </ul>
      <Route path={`${match.path}/:topicId`} component={Topic} />     
      <Route
        exact
        path={match.path}
        render={() => <h3>Please select a topic.</h3>}
      />
    </div>
  );
}

function Topic({ match }) {
  return (
    <div>
      <h3>{match.params.topicId}</h3>
    </div>
  );
}

function App() {
  return (
    <React.Fragment>
      <E2E mode={{
        show: false,
      }}/>
      <div className={`app`} >
        <div className={`app-wrap`} >
          <Header />
          <main>
            <Router>
              <div>
                <ul className="nav-list">
                  <li><Link to="/">Home</Link></li>
                  <li><Link to="/about">About</Link></li>
                  <li><Link to="/topics">Topics</Link></li>
                </ul>
                
                <Route exact path="/" component={Home} />
                <Route path="/about" component={About} />
                <Route path="/topics" component={Topics} />
              </div>
            </Router>
            <div  className={`clearBoth`} />
          </main>
        </div>
      </div>
    </React.Fragment>
  );
}

export default App;


/*
<Button />
<DumbComponent 
  someClassNames={`simple-dumb-class`}
  someText={`e2e Testing with cucumber`}
/>
<nav className={`nav`}>
  <ul>
    <li><a href={`/dumb-component`}>Dumb Components</a></li>
    <li><a href={`/render-props`}>Render Prop Components</a></li>
    <li><a href={`/hoc`}>Higher Order Components</a></li>
    </ul>
</nav>

<div className={`card`} >
  <h2>e2e with Cucumber & Gherkin</h2>
  <p>Include cool end to end 
    BDD testing with cucumber.</p>
</div>

*/